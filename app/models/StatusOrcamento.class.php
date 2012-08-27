<?php

class StatusOrcamento{

  private $idStatusOrcamento;
  private $statusOrcamento;

  public function __construct($idStatusOrcamento = '', $statusOrcamento = ''){
    $this->idStatusOrcamento = $idStatusOrcamento;
    $this->statusOrcamento = $statusOrcamento;
  }

  public function setIdStatusOrcamento($idStatusOrcamento){
    $this->idStatusOrcamento = $idStatusOrcamento;
  }
  
  public function getIdStatusOrcamento(){
    return $this->idStatusOrcamento;
  }

  public function setStatusOrcamento($statusOrcamento){
    $this->statusOrcamento = $statusOrcamento;
  }
  
  public function getStatusOrcamento(){
    return $this->statusOrcamento;
  }

}

?>
