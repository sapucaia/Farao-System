<?php

class ProdutosRecord extends ManipulaBanco{

  public function getProduto($idProduto){
    /*$criteria = new TCriteria();
	$criteria->add(new TFilter('idProduto', '=', $idProduto));
    $p = $this->selecionarColecao($criteria);
    */
    $p = $this->executarPesquisa("SELECT * FROM produto WHERE idproduto = " . $idProduto);
	$produto = new Produto($p['IDPRODUTO'][1],
						   $p['FKIDFORNECEDOR'][1],
						   $p['NOMEPRODUTO'][1],
						   $p['VALOR'][1],
						   $p['DESCRICAO'][1]);
	return $produto;
  }

  public function cadastrar($produto){
    $dados['fkIdForncedor'] = $produto->getFkIdFornecedor();
    $dados['nomeProduto'] = $produto->getNomeProduto();
    $dados['valor'] = $produto->getValor();
    $dados['descricao'] = $produto->getDescricao();
    return $this->salvar($dados);
  }

}

?>
