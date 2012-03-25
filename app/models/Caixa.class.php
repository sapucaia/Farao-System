<?php

class Caixa{
	
	private $idcaixa;
	private $datacaixa;

	public function __construct($idcaixa = '', $datacaixa = ''){
	$this->idcaixa = $idcaixa;
	$this->datacaixa = $datacaixa;
	}

  public function setIdCaixa($idcaixa){
    $this->idcaixa = $idcaixa;
  }

  public function setDataCaixa($datacaixa){
    $this->datacaixa = $datacaixa;
  }

	public function getIdCaixa(){
    return $this->idcaixa;
  }

	public function getDataCaixa(){
    return $this->datacaixa;
  }

}

?>
