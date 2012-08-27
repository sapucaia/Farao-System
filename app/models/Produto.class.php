<?php

class Produto{

  private $idProduto;
  private $fkIdFornecedor;
  private $nomeProduto;
  private $valor;
  private $descricao;
  private $fornecedorRecord;
  
  public function __construct($idProduto = '', $fkIdFornecedor = '', $nomeproduto = '',
							  $valor = '', $descricao = ''){
	  $this->idProduto = $idProduto;
	  $this->fkIdFornecedor = $fkIdFornecedor;
	  $this->nomeProduto = $nomeproduto;
	  $this->valor = $valor;
	  $this->descricao = $descricao;
	  $this->fornecedorRecord = new FornecedorRecord;
  }
  
  public function getIdProduto(){
	  return $this->idProduto;
  }
  
  public function setIdProduto($idProduto){
	  $this->idProduto = $idProduto;
  }
  
  public function getFkIdFornecedor(){
	  return $this->fkIdFornecedor;
  }
  
  public function setFkIdFornecedor($fkIdFornecedor){
	  $this->fkIdFornecedor = $fkIdFornecedor;
  }
  
  public function getNomeProduto(){
	  return $this->nomeProduto;
  }
  
  public function setNomeProduto($nomeProduto){
	  $this->nomeProduto = $nomeProduto;
  }

  public function getValor(){
	  return $this->valor;
  }
  
  public function setValor($valor){
	  $this->valor = $valor;
  }
  
  public function getDescricao(){
	  return $this->descricao;
  }
  
  public function setDescricao($descricao){
	  $this->descricao = $descricao;
  }
  
  public function getFornecedor(){
    return $this->fornecedorRecord->selecionarPorId($this->fkIdFornecedor);
  }
  
}

?>
