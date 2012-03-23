<?php

class Compra{

  private $idCompra;
  private $fkIdFornecedor;
  private $dataCompra;
  private $produtos;

  public function __construct($fkIdFornecedor = '', $dataCompra = ''){
    $this->fkIdFornecedor = $fkIdFornecedor;
    $this->dataCompra = $dataCompra;
  }

  public function setIdCompra($idCompra){
    $this->idCompra = $idCompra;
  }

  public function setFkIdFornecedor($fkIdFornecedor){
    $this->fkIdFornecedor = $fkIdFornecedor;
  }

  public function setDataCompra($dataCompra){
    $this->dataCompra = $dataCompra;
  }
  
  public function getIdCompra(){
    return $this->idCompra;
  }

  public function getFkIdFornecedor(){
    return $this->fkIdFornecedor;
  }

  public function getDataCompra(){
    return $this->dataCompra;
  }
  
  public function getProdutos(){
    
  }

}


?>
