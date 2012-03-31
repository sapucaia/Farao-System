<?php

class EstadosRecord extends ManipulaBanco{

	private $estados;

  public function listar(){
    $criteria = new TCriteria();
    $e = $this->selecionarColecao($criteria);

		for($i=1;$i<=count($e['IDESTADO']);$i++){
			$this->estados[$i] = new Estado($e['IDESTADO'][$i],
												$e['NOMEESTADO'][$i]);
		
		}
	return $this->estados;

  }


	public function cadastrar($estado){
		$dados['idestado'] = $estado->getIdEstado();
		$dados['nomeestado'] = $estad0->getNomeEstado();
		return $this->salvar($dados);
	}



}

?>
