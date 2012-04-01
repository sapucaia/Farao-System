<?php

class ProdutoNotaVendaRecord extends ManipulaBanco{

	private $produtosVenda;

	public function cadastrar($dados){
		return $this->salvar($dados);
	}
	
	public function selecionarProdutosPorVenda($idVenda){
		$criteria = new TCriteria();
		$criteria->add(new TFilter('fkidvenda','=',$idVenda));
		$c = $this->selecionarColecao($criteria);   
		for($i=1; $i<= count($c['FKIDVENDA']); $i++){
		  $produtosRecord = new ProdutosRecord();
		  $p = $produtosRecord->getProduto($c['FKIDPRODUTO'][$i]);      
		  $this->produtosVenda[$i] = $p;
		}
		return $produtosVenda;
	}
  
    public function selecionarQuantidadesProdutoPorVenda($idVenda, $idProduto){
		$criteria = new TCriteria();
		$criteria->add(new TFilter('fkidvenda','=',$idVenda));
		$criteria->add(new TFilter('fkidproduto', '=', $idProduto));
		$c = $this->selecionarColecao($criteria);
		$qtds = $c['QUANTIDADEPRODUTO'][1]; 
		return $qtds;
	}
}

?>
