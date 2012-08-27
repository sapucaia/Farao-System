<?php

/**
 * 
 * @author Caique Pires
 * 
 */

class Representante{
    
    private $idRepresentante;
    private $nomeRepresentante;
    private $email;
    private $fornecedorRepresentanteRecord;
    private $representanteTelefoneRecord;
    private $representanteEnderecoRecord;
    
    
    public function __construct($idRepresentante = '', $nomeRepresentante = '', $email = '') {
        $this->idRepresentante = $idRepresentante;
        $this->nomeRepresentante = $nomeRepresentante;
        $this->email = $email;
        $this->fornecedorRepresentanteRecord = new FornecedorRepresentanteRecord();
        $this->representanteTelefoneRecord = new RepresentanteTelefoneRecord();
        $this->representanteEnderecoRecord = new RepresentanteEnderecoRecord();
        
    }
    
    public function getIdRepresentante() {
        return $this->idRepresentante;
    }

    public function setIdRepresentante($idRepresentante) {
        $this->idRepresentante = $idRepresentante;
    }

    public function getNomeRepresentante() {
        return $this->nomeRepresentante;
    }

    public function setNomeRepresentante($nomeRepresentante) {
        $this->nomeRepresentante = $nomeRepresentante;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function addFornecedorRepresentante($idRepresentante, $idFornecedor){
        $dados['fkIdFornecedor'] = $idFornecedor;
        $dados['fkIdRepresentante'] = $idRepresentante;
        return $this->fornecedorRepresentanteRecord->cadastrar($dados);

    }
    
    //Teste
    public function editFornecedorRepresentante($idRepresentante, $idFornecedor){
        $dados['fkIdFornecedor'] = $idFornecedor;
        $dados['fkIdRepresentante'] = $idRepresentante;
        return $this->fornecedorRepresentanteRecord->editar($dados);
    }


    public function addTelefone($telefone){
        $dados['fkIdRepresentante'] = $this->getIdRepresentante();
        $dados['fkIdTelefone'] = $telefone->getIdTelefone();
        return $this->representanteTelefoneRecord->cadastrar($dados);
    }
    
    public function addEndereco($endereco){
        $dados['fkIdRepresentante'] = $this->getIdRepresentante();
        $dados['fkIdEndereco'] = $endereco->getIdEndereco();
        return $this->representanteEnderecoRecord->cadastrar($dados);
    }
    
    public function getTelefones(){
      return $this->representanteTelefoneRecord->selecionarTelefonesPorRepresentante($this->idRepresentante);
    }
    
    public function getEnderecos(){
      return $this->representanteEnderecoRecord->selecionarEnderecosPorRepresentante($this->idRepresentante);
    }
//    
//    public function addRepresentanteTelefone($idRepresentante, $idTelefone){
//        $dados['fkidrepresentante'] = $idRepresentante;
//        $dados['fkidtelefone'] = $idTelefone;
//        $this->representanteTelefoneRecord->cadastrar($dados);
//    }


//     public function addFornecedorRepresentante($representante){
//        $dados['fkidfornecedor'] = $this->getIdFornecedor();
//        $dados['fkidrepresentante'] = $representante->getIdRepresentante();
//        return $this->fornecedorRepresentanteRecord->salvar($dados);
//        
//    }
}
?>
