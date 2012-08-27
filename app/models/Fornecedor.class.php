<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fornecedor
 *
 * @author wallace
 */
class Fornecedor {

    //put your code here
    private $idFornecedor;
    private $nomeFantasia;
    private $cnpj;
    private $razaoSocial;
    private $fornecedorRepresentanteRecord;
    private $fornecedorEnderecoRecord;

    public function __construct($idFornecedor='', $nomeFantasia='', $cnpj='', $razaoSocial='') {
        $this->idFornecedor = $idFornecedor;
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
        $this->razaoSocial = $razaoSocial;
        $this->fornecedorRepresentanteRecord = new FornecedorRepresentanteRecord();
        $this->fornecedorEnderecoRecord = new FornecedorEnderecoRecord();
    }

    public function getIdFornecedor() {
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor) {
        $this->idFornecedor = $idFornecedor;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }
    
    public function equals($outroFornecedor){
      if($this->idFornecedor==$outroFornecedor->getIdFornecedor()){
        return true;
      }else{
        return false;
      }
    }

    public function addFornecedorRepresentante($representante){
        $dados['fkidfornecedor'] = $this->getIdFornecedor();
        $dados['fkidrepresentante'] = $representante->getIdRepresentante();
        return $this->fornecedorRepresentanteRecord->salvar($dados);
        
    }
    
    public function addFornecedorEndereco($endereco){
        $dados['fkidfornecedor'] = $this->getIdFornecedor();
        $dados['fkidendereco'] = $endereco->getIdEndereco();
        return $this->fornecedorEnderecoRecord->cadastrar($dados);
    }

}

?>
