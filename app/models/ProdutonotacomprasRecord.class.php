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
      $qtds[$i] = $c['QTDPRODUTOCOMPRA'][$i];      
      $this->produtosCompra[$i] = $p;
      
    }
    $retorno = array_merge($this->produtosCompra, $qtds); 
    
    
    return $retorno;

    //return $this->selecionarColecao($criteria);
  }

}

?>
