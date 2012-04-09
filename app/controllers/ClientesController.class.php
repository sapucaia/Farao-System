<?php

  if($_POST != null) $post = $_POST;

  $acao = $_GET['acao'];

  switch($acao){
    case "index":
    case "novo":
    case "editar":
    case "mostrar":
      require '../../../conf/lock.php';
      break;
    case "salvar":
    case "atualizar":
    case "addTelefone":
    case "salvarTelefone":
      require '../../conf/lock.php';
      break;
  }

  $clientesController = new ClientesController;

  switch($acao){
    case 'salvar':{
      $clientesController->salvar($post);
      break;
    }
    case 'addTelefone':{
      $clientesController->addTelefone($post);
      break;
    }
    case "salvarTelefone":{
      $clientesController->salvarTelefone($post, $_GET['id']);
      break;
    }
    case "mostrar": {
      $clientesController->mostrar($_GET['id']);
      break;
    }
    default:{
      $clientesController->index();
      break;
    }
  }

class ClientesController{

  private static $cliente;
  private $clientesRecord;
  private $telefoneRecord;

  public function __construct(){
    if(!isset($this->cliente)){
      $this->cliente = new Cliente;
    }
    $this->clientesRecord = new ClienteRecord;
    $this->telefoneRecord = new TelefoneRecord;
    if(!isset($_SESSION['telefones'])){
      $telefones = array();
      $_SESSION['telefones'] = serialize($telefones);
    }
  }

  public function salvar($post){
    $this->cliente->setNomeCliente($post['nomeCliente']);
    $this->cliente->setEmailCliente($post['emailCliente']);
    if($this->clientesRecord->cadastrar($this->cliente)){
      $this->cliente->setIdCliente($this->clientesRecord->ultimoId("cliente_idcliente_seq"));
      $tels = unserialize($_SESSION['telefones']);

      foreach($tels as $tel){
        print_r($tel);
        $teleRecord = new TelefoneRecord;
        $teleRecord->cadastrar($tel);
        $tel->setIdTelefone($teleRecord->ultimoId("telefone_idtelefone_seq"));
        $this->cliente->addTelefone($tel);
      }
      echo 'Sucesso total';
      unset($_SESSION['telefones']);
      header("location: ../views/cliente/mostrar?id=".$this->cliente->getIdCliente());
    }
    else
      echo 'Falha ao cadastrar';
  }

  public function atualizar(){}

  public function novo(){}

  public function editar($idCliente){}

  public function mostrar($idCliente){
    $_REQUEST['cliente'] = $this->clientesRecord->selecionarPorId($idCliente);

  }

  public function addTelefone($post){
    $telefone = new Telefone;
    $telefone->setTipo($post['tipo']);
    $telefone->setDdd($post['ddd']);
    $telefone->setNumero($post['numero']);
    $telefones = unserialize($_SESSION['telefones']);
    array_push($telefones, $telefone);
    $_SESSION['telefones'] = serialize($telefones);
    header("location: ../views/cliente/novo.php");
  }

  public function salvarTelefone($post, $idCliente){
    $clienteAux = $this->clientesRecord->selecionarPorId($idCliente);
    $telefone = new Telefone;
    $telefone->setTipo($post['tipo']);
    $telefone->setDdd($post['ddd']);
    $telefone->setNumero($post['numero']);
    $teleRecord = new TelefoneRecord;
    if($teleRecord->cadastrar($telefone)){
      $telefone->setIdTelefone($teleRecord->ultimoId("telefone_idtelefone_seq"));
      $clienteAux->addTelefone($telefone);
    }
    header("location: ../views/cliente/mostrar?id=".$clienteAux->getIdCliente());
  }

  public function index(){
    $_REQUEST['clientes'] = $this->clientesRecord->listar();
  }

}

?>

