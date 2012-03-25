<?php

class Telefone{

  private $idTelefone;
  private $tipo;
  private $ddd;
  private $numero;

  public function __construct($idTelefone = '', $tipo = '', $ddd = '', $numero = ''){
    $this->idTelefone = $idTelefone;
    $this->tipo = $tipo;
    $this->ddd = $ddd;
    $this->numero = $numero;
  }

  public function setIdTelefone($idTelefone){
    $this->idTelefone = $idTelefone;
  }

  public function setTipo($tipo){
    $this->tipo = $tipo;
  }

  public function setDdd($ddd){
    $this->ddd = $ddd;
  }

  public function setNumero($numero){
    $this->numero = $numero;
  }

  public function getIdTelefone(){
    return $this->idTelefone;
  }

  public function getTipo(){
    return $this->tipo;
  }

  public function getDdd(){
    return $this->ddd;
  }

  public function getNumero(){
    return $this->numero;
  }

}

?>
