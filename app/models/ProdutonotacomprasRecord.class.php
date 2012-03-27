<?php

class ProdutonotacomprasRecord extends ManipulaBanco{
  
  private $produtosCompra;

	public function cadastrar($dados){
		return $this->salvar($dados);
	}

  public function selecionarProdutosPorCompra($idCompra){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('fkidcompra','=',$idCompra));
    $c = $this->selecionarColecao($criteria);   
    for($i=1; $i<= count($c['FKIDCOMPRA']); $i++){
      $produtosRecord = new ProdutosRecord();
      $p = $produtosRecord->getProduto($c['FKIDPRODUTO'][$i]);      
      $this->produtosCompra[$i] = $p;
    }
    return $produtosCompra;
  }
  
  public function selecionarQuantidadesProdutoPorCompra($idCompra, $idProduto){
	$criteria = new TCriteria();
    $criteria->add(new TFilter('fkidcompra','=',$idCompra));
	$criteria->add(new TFilter('fkidproduto', '=', $idProduto));
	$c = $this->selecionarColecao($criteria);
	$qtds = $c['QTDPRODUTOCOMPRA'][1]; 
	return $qtds;
  }

}

?>
