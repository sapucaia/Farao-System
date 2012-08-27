<?php

class TipoLogradouro{

  private $idTipoLogradouro;
  private $descricao;
  
  
  public function __construct($idTipoLogradouro = '', $descricao = ''){
    $this->idTipoLogradouro = $idTipoLogradouro;
    $this->descricao = $descricao;
      
  }

  public function setIdTipoLogradouro($idTipoLogradouro){
    $this->idTipoLogradouro = $idTipoLogradouro;
  }
  
  public function getIdTipoLogradouro(){
    return $this->idTipoLogradouro;
  }

  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }

  public function getDescricao(){
    return $this->descricao;
  }

}

?>
