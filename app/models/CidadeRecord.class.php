<?php

class CidadeRecord extends ManipulaBanco{

	private $cidades;

  public function listar(){
    $criteria = new TCriteria();
    $c = $this->selecionarColecao($criteria);

		for($i=1;$i<=count($c['IDCIDADE']);$i++){
			$this->cidades[$i] = new Cidade($c['IDCIDADE'][$i],
												$c['NOMECIDADE'][$i],
												$c['FKIDESTADO'][$i]);
		
		}
	return $this->cidades;
  }


	public function cadastrar($cidade){
		$dados['idcidade'] = $cidade->getIdCidade();
		$dados['nomecidade'] = $cidade->getNomeCidade();
		$dados['fkidestado'] = $cidade->getFkIdEstado();
		return $this->salvar($dados);
	}



}

?>
