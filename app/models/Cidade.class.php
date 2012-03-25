<?php

class Cidade{

	private $idcidade;
	private $nomecidade;
	private $fkidestado;

	public function __construct($idcidade = '', $nomecidade = '', $fkidestado = ''){
		$this->idcidade = $idcidade;
		$this->nomecidade = $nomecidade;
		$this->fkidestado = $fkidestado;
	}

	public function setIdCidade($idcidade){
    $this->idcidade = $idcidade;
  }

	public function setNomeCidade($nomecidade){
    $this->nomecidade = $nomecidade;
  }

  public function setFkIdEstado($fkidestado){
    $this->fkidestado = $fkidestado;
  }

  public function getIdCidade(){
    return $this->idcidade;
  }

  public function getNomeCidade(){
    return $this->nomecidade;
  }

  public function getFkIdEstado(){
    return $this->fkidestado;
  }

}
?>
