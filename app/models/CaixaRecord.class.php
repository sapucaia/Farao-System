<?php

class CaixaRecord extends ManipulaBanco{

	private $caixas;

  public function listar(){
    $criteria = new TCriteria();
    $c = $this->selecionarColecao($criteria);

		for($i=1;$i<=count($c['IDCAIXA']);$i++){
			$this->caixas[$i] = new Caixa($c['IDCAIXA'][$i],
												$c['DATACAIXA'][$i]);
		
		}
	return $this->caixas;
  }


	public function cadastrar($caixa){
		$dados['idcaixa'] = $caixa->getIdCaixa();
		$dados['datacaixa'] = $caixa->getDataCaixa();

		return $this->salvar($dados);
	}

  public function getCaixa($idCaixa){
    $criteria = new TCriteria();
    $criteria = add(new TFilter('idCaixa', '=', $idCaixa));
    $c = $this->selecionarColecao($criteria);
    $caixa = new Caixa($c['IDCAIXA'][1],
                       $c['DATACAIXA'][1]);
    return $caixa;
  }


}






?>
