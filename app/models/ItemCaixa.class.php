<?php

class ItemCaixa{

  private $fkIdItem;
  private $fkIdCaixa;
  private $qtdItemCompra;

  public function __construct($fkIdItem, $fkIdCaixa, $qtdItemCompra){
    $this->fkIdItem = $fkIdItem;
    $this->fkIdCaixa = $fkIdCaixa;
    $this->qtdItemCompra = $qtdItemCompra;
  } 

  public function getFkIdItem(){
    return $this->fkIdItem;
  }

  public function getFkIdCaixa(){
    return $this->fkIdCaixa;
  }

  public function getQtdItemCompra(){
    return $this->qtdItemCompra;
  }

  public function setFkIdItem($fkIdItem){
    $this->fkIdItem = $fkIdItem;
  } 
  
  public function setFkIdCaixa($fkIdCaixa){
    $this->fkIdCaixa = $fkIdCaixa;
  }

  public function setQtdItemCompra($qtdItemCompra){
    $this->qtdItemCompra = $qtdItemCompra;
  }

}



?>
