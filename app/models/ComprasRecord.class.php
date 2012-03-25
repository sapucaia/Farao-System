<?php 

class ComprasRecord extends ManipulaBanco{

  private $compras;

  public function listar(){
    $criteria = new TCriteria();
	$c = $this->selecionarColecao($criteria);
	for($i=1;$i<=count($c['IDCOMPRA']);$i++){
	  $this->compras[$i] = new Compra($c['IDCOMPRA'][$i], 
								$c['FKIDFORNECEDOR'][$i],
								$c['DATACOMPRA'][$i]);
	}
	return $this->compras;
    //return $this->selecionarColecao($criteria);
  }

  public function getCompra($idCompra){
	$criteria = new TCriteria();
	$criteria->add(new TFilter('idCompra', '=', $idCompra));
	$c = $this->selecionarColecao($criteria);
	$compra = new Compra($c['IDCOMPRA'][1], 
								$c['FKIDFORNECEDOR'][1],
								$c['DATACOMPRA'][1]);
	return $compra;
  }
  
  public function cadastrar($compra){
    $dados['fkIdForncedor'] = $compra->getFkIdFornecedor();
    $dados['dataCompra'] = $compra->getDataCompra();
    return $this->salvar($dados);
  }

}

?>
