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
    private $razaoSocaial;
    private $enderecoFornecedor;
    private $fornecedorRepresentantesRecord;
    
    public function __construct($idFornecedor='', $nomeFantasia='', $cnpj='', $razaoSocaial='', $enderecoFornecedor='') {
        $this->idFornecedor = $idFornecedor;
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
        $this->razaoSocaial = $razaoSocaial;
        $this->enderecoFornecedor = $enderecoFornecedor;
        $this->fornecedorRepresentantesRecord = new FornecedorRepresentantesRecord();
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

    public function getRazaoSocaial() {
        return $this->razaoSocaial;
    }

    public function setRazaoSocaial($razaoSocaial) {
        $this->razaoSocaial = $razaoSocaial;
    }

    public function getEnderecoFornecedor() {
        return $this->enderecoFornecedor;
    }

    public function setEnderecoFornecedor($enderecoFornecedor) {
        $this->enderecoFornecedor = $enderecoFornecedor;
    }
    
    
    public function addRepresentante($representante){
        $dados['fkIdFornecedor'] = $this->getIdFornecedor();
        $dados['fkIdRepresentante'] = $representante->getIdRepresentante();
        
        return $this->fornecedorRepresentantesRecord->cadastrar($dados);
        }


    
    

    
    
}

?>
