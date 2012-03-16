<?php

class Cliente{

  private $idCliente;
  private $nomeCliente;
  private $emailCliente;

  public function __construct($nomeCliente = '', $emailCliente = ''){
    $this->nomeCliente = $nomeCliente;
    $this->emailCliente  = $emailCliente;
  }

  public function setNomeCliente($nomeCliente){
    $this->nomeCliente = $nomeCliente;
  }

  public function setEmailCliente($emailCliente){
    $this->emailCliente = $emailCliente;
  }

  public function getNomeCliente(){
    return $this->nomeCliente;
  }

  public function getEmailCliente(){
    return $this->emailCliente;
  }

}


?>
