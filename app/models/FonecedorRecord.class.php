<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FonecedorRecord
 *
 * @author wallace
 */
class FonecedorRecord extends ManipulaBanco{
    //put your code here
    
    public function listar(){
        $criteria = new TCriteria;
        return $this->selecionarColecao($criteria);
    }
    
    
//    
//        private $idFornecedor;
//    private $nomeFantasia;
//    private $cnpj;
//    private $razaoSocaial;
//    private $enderecoFornecedor = array();

    
    
    
    public function cadastrar($fornecedor){
        $dados['idFornecedor'] = $fornecedor->getIdFornecedor();
        $dados['nomeFantasia'] = $fornecedor->getNomeFantasia();
        $dados['cnpj'] = $fornecedor->getCnpj();
        $dados['razaoSocial'] = $fornecedor->getRazaoSocial();
        $dados['enderecoFornecedor'] = $fornecedor->getEnderecoFornecedor();
        return $this->salvar($dados);
        
    }

}

?>
