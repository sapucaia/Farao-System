<?php

class Orcamento{

  private $idOrcamento;
  private $fkIdCliente;
  private $fkIdStatusOrcamento; 
  private $url;
  
  public function __construct($idOrcamento = '', $fkIdCliente = '', $fkIdStatusOrcamento = '', $url = ''){
    $this->idOrcamento = $idOrcamento;
    $this->fkIdCliente = $fkIdCliente;
    $this->fkIdStatusOrcamento = $fkIdStatusOrcamento;
    $this->url = $url;
  }

  public function setIdOrcamento($idOrcamento){
    $this->idOrcamento = $idOrcamento;
  }

  public function getOrcamento(){
    return $this->$orcamento;
  }
  
  public function setFkIdCliente($fkIdCliente){
    $this->fkIdCliente = $fkIdCliente;
  }

  public function getFkIdCliente(){
    return $this->fkIdCliente;
  }
  
  public function setFkIdStatusOrcamento($fkIdStatusOrcamento){
    $this->fkIdStatusOrcamento = $fkIdStatusOrcamento;
  }

  public function getFkIdStatusOrcamento(){
    return $this->fkIdStatusOrcamento;
  }

  public function setUrl($url){
    $this->url = $url;
  }

  public function getUrl(){
    return $this->url;



}


?>
