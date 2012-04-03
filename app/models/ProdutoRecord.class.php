<?php

class ProdutoRecord extends ManipulaBanco{

  private $produtos;

  public function listar(){
    $criteria = new TCriteria();
    $p = $this->selecionarColecao($criteria);

	  for($i=1;$i<=count($p['IDPRODUTO']);$i++){
	    $this->produtos[$i] = new Produto($p['IDPRODUTO'][$i], 
								$p['FKIDFORNECEDOR'][$i],
								$p['NOMEPRODUTO'][$i],
                $p['VALOR'][$i],
                $p['DESCRICAO'][$i]);
	  }

	  return $this->produtos;
  }

  public function getProduto($idProduto){
    $criteria = new TCriteria();
	  $criteria->add(new TFilter('idproduto', '=', $idProduto));
    $p = $this->selecionarColecao($criteria);
	  $produto = new Produto($p['IDPRODUTO'][1],
						   $p['FKIDFORNECEDOR'][1],
						   $p['NOMEPRODUTO'][1],
						   $p['VALOR'][1],
						   $p['DESCRICAO'][1]);
	  return $produto;
  }
  
  public function selecionarProdutoPorNome($nomeProduto){
    $criteria = new TCriteria();
	$criteria->add(new TFilter('nomeproduto', 'LIKE', $nomeProduto));
    $p = $this->selecionarColecao($criteria);
	  for($i=1;$i<=count($p['IDPRODUTO']);$i++){
	    $this->produtos[$i] = new Produto($p['IDPRODUTO'][$i], 
								$p['FKIDFORNECEDOR'][$i],
								$p['NOMEPRODUTO'][$i],
                $p['VALOR'][$i],
                $p['DESCRICAO'][$i]);
	  }

	  return $this->produtos;
  }
  
  public function selecionarProdutoPorDescricao($descricao){
    $criteria = new TCriteria();
	$criteria->add(new TFilter('descricao', 'LIKE', $descricao));
    $p = $this->selecionarColecao($criteria);
	  for($i=1;$i<=count($p['IDPRODUTO']);$i++){
	    $this->produtos[$i] = new Produto($p['IDPRODUTO'][$i], 
								$p['FKIDFORNECEDOR'][$i],
								$p['NOMEPRODUTO'][$i],
                $p['VALOR'][$i],
                $p['DESCRICAO'][$i]);
	  }

	  return $this->produtos;
  }

  public function cadastrar($produto){
    $dados['fkidfornecedor'] = $produto->getFkIdFornecedor();
    $dados['nomeproduto'] = $produto->getNomeProduto();
    $dados['valor'] = $produto->getValor();
    $dados['descricao'] = $produto->getDescricao();
    return $this->salvar($dados);
  }
  
  public function editar($produto){
    $dados['fkidfornecedor'] = $produto->getFkIdFornecedor();
    $dados['nomeproduto'] = $produto->getNomeProduto();
    $dados['valor'] = $produto->getValor();
    $dados['descricao'] = $produto->getDescricao();
    return $this->atualizar($dados, $produto->getIdProduto());
  }

}

?>
