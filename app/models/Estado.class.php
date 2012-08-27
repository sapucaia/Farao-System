<?php

class Estado{

	private $idestado;
	private $nomeestado;

	public function __construct($idestado = '', $nomeestado = ''){
		$this->idestado = $idestado;
		$this->nomeestado = $nomeestado;
	}

	public function setIdEstado($idestado){
    $this->idestado = $idestado;
  }

	public function setNomeEstado($nomeestado){
    $this->nomeestado = $nomeestado;
  }

	public function getIdEstado(){
    return $this->idestado;
  }

  public function getNomeEstado(){
    return $this->nomeestado;
  }

}

?>
