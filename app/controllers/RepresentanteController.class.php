<?php

//

/**
 * Representante Controller
 * 
 * @author Caique Pires
 * @name Representante Controller
 * 
 */
//session_start();

if ($_POST != NULL)
    $post = $_POST;


$acao = $_GET['acao'];

switch ($acao) {
    case "index":
    case "novo":
    case "editar":
    case "mostrar":
        require '../../../conf/lock.php';
        break;
    case "salvar":
    case "atualizar":
    case "addTelefone":
    case "addEndereco":
    case "salvarTelefone":
        require '../../conf/lock.php';
        break;
}

$representanteController = new RepresentanteController();


switch ($acao) {

    case "novo": {
            $representanteController->novo();
            break;
        }
    case "salvar": {
            $representanteController->salvar($post);
            break;
        }
    case "editar": {
            $representanteController->editar($_GET['id']);
            break;
        }
    case "mostrar": {
            $representanteController->mostrar($_GET['id']);
            break;
        }
    case "atualizar": {
            $representanteController->atualizar($post);
            break;
        }
    case "addTelefone": {
            $representanteController->addTelefone($post);
            break;
        }
    case "addEndereco": {
            $representanteController->addEndereco($post);
            break;
        }
    default: {
            $representanteController->index();
            break;
        }
}

class RepresentanteController {

    private $representante;
    private $representanteRecord;
    private $fornecedorRecord;
    private $telefoneRecord;
    private $enderecoRecord;
    private $fornecedorRepresentanteRecord;
    private $fornecedor;

    public function __construct() {
        $this->representante = new Representante();
        $this->representanteRecord = new RepresentanteRecord();
        $this->fornecedorRecord = new FornecedorRecord();
        $this->telefoneRecord = new TelefoneRecord();
        $this->enderecoRecord = new EnderecoRecord();

        $this->fornecedorRepresentanteRecord = new FornecedorRepresentanteRecord();
        $this->fornecedor = new Fornecedor();


        if (!isset($_SESSION['telefones'])) {
            $telefones = array();
            $_SESSION['telefones'] = serialize($telefones);
        }

        if (!isset($_SESSION['enderecos'])) {
            $enderecos = array();
            $_SESSION['enderecos'] = serialize($enderecos);
        }
    }

    public function novo() {
        $_REQUEST['fornecedores'] = $this->fornecedorRecord->listar();
    }

    /**
     * @see Falta mostrar a Cidade e Estado
     */
    public function mostrar($idRepresentante) {
        $representante = $this->representanteRecord->selecionarRepresentantePorId($idRepresentante);
        $id = $representante->getIdRepresentante();
        $idFornecedor = $this->fornecedorRepresentanteRecord->selecionarIdFornecedorPorIdRepresentante($id);
        $fornecedor = $this->fornecedorRecord->selecionarPorId($idFornecedor);


        $_REQUEST['representante'] = $representante;
        $_REQUEST['fornecedor'] = $fornecedor;
    }

    /**
     * @see Editar salvando um novo representante
     */
    public function editar($idRepresentante) {
        $_REQUEST['fornecedores'] = $this->fornecedorRecord->listar();
        $_REQUEST['representante'] = $this->representanteRecord->selecionarRepresentantePorId($idRepresentante);
    }

    public function index() {
        $_REQUEST['representantes'] = $this->representanteRecord->listar();
    }

    public function salvar($post) {
        $this->representante->setNomeRepresentante($post['nomeRepresentante']);
        $this->representante->setEmail($post['email']);
        $idFornecedor = $post['idfornecedor'];


        if ($this->representanteRecord->cadastrar($this->representante)) {
            $this->addFornecedorRepresentante($idFornecedor);
            $this->representante->setIdRepresentante($this->representanteRecord->ultimoId('representante_idrepresentante_seq'));
            $tels = unserialize($_SESSION['telefones']);
            $ends = unserialize($_SESSION['enderecos']);
        }

        foreach ($tels as $tel) {
            $teleRecord = new TelefoneRecord();
            if ($teleRecord->cadastrar($tel)) {
                $tel->setIdTelefone($teleRecord->ultimoId('telefone_idtelefone_seq'));
                $this->representante->addTelefone($tel);
            }
        }

        foreach ($ends as $end) {
            $endRecord = new EnderecoRecord();
            if ($endRecord->cadastrar($end)) {
                $end->setIdEndereco($endRecord->ultimoId('endereco_idendereco_seq'));
                $this->representante->addEndereco($end);
            }
        }

        unset($_SESSION['telefones']);
        unset($_SESSION['enderecos']);

        header('location: ../views/representante/index.php');
    }

    /**
     * NAO FUNCIONA
     * 
     * Lembrar:
     * Atualizar o representante
     *           a tabela fornecedorRepresentante
     *           telefones individualmente
     *           endereços individualmente
     */
    public function atualizar($post) {
        $this->representante->setIdRepresentante($_GET['id']);
        $this->representante->setNomeRepresentante($post['nomeRepresentante']);
        $this->representante->setEmail($post['email']);
        $idFornecedor = $post['idfornecedor'];


        if ($this->representanteRecord->editar($this->representante)) {
            $this->editFornecedorRepresentante($idFornecedor,$_GET['id']);

            echo "Atualizado com sucesso.";
        } else {
            echo "Erro ao atualizar.";
        }
    }

    public function addTelefone($post) {
        $telefone = new Telefone();
        $telefone->setTipo($post['tipo']);
        $telefone->setDdd($post['ddd']);
        $telefone->setNumero($post['numero']);

        $telefones = unserialize($_SESSION['telefones']);

        array_push($telefones, $telefone);
        $_SESSION['telefones'] = serialize($telefones);
        header('location: ../views/representante/novo.php');
    }

    public function addEndereco($post) {
        $endereco = new Endereco();

        $endereco->setFkIdTipoLogradouro($post['fkidtipologradouro']);
        $endereco->setLogradouro($post['logradouro']);
        $endereco->setBairro($post['bairro']);
        $endereco->setCep($post['cep']);
        $endereco->setComplemento($post['complemento']);
        $endereco->setFkIdCidade($post['fkidcidade']);

        $enderecos = unserialize($_SESSION['enderecos']);

        array_push($enderecos, $endereco);
        $_SESSION['enderecos'] = serialize($enderecos);
        header('location: ../views/representante/novo.php');
    }

    public function addFornecedorRepresentante($idfornecedor) {
        $fkIdRepresentante = $this->representanteRecord->ultimoId('representante_idrepresentante_seq');

        return $this->representante->addFornecedorRepresentante($fkIdRepresentante, $idfornecedor);
    }

    public function editFornecedorRepresentante($idfornecedor ,$idrepresentante) {

        return $this->representante->editFornecedorRepresentante($idrepresentante, $idfornecedor);
    }

}

?>
