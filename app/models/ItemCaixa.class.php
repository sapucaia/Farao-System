<?php 

class ItemCaixa{

  private $fkIdItem;
  private $fkIdCaixa;
  private $qtdItemCaixa;

  public function __construct($fkIdItem = '', $fkIdCaixa = '', $qtdItemCaixa = ''){
    $this->fkIdItem = $fkIdItem;
    $this->fkIdCaixa = $fkIdCaixa;
    $this->qtdItemCaixa = $qtdItemCaixa;
  }

  public function setFkIdItem($fkIdItem){
    $this.fkIdItem = $fkIdItem;
  }
  
  public function getFkIdItem($fkIdItem){
    $this.fkIdItem = $fkIdItem;
  }

  public function setFkIdCaixa($fkIdCaixa){
    $this.fkIdCaixa = $fkIdCaixa;
  }
  
  public function getFkIdCaixa($fkIdCaixa){
    $this.fkIdCaixa = $fkIdCaixa;
  }

  public function setQtdItemCaixa($qtdItemCaixa){
    $this.qtdItemCaixa = $qtdItemCaixa;
  }
  
  public function getQtdItemCaixa($qtdItemCaixa){
    $this.qtdItemCaixa = $qtdItemCaixa;
  }


?>
