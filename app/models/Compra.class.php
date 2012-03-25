<?php

class Compra{

  private $idCompra;
  private $fkIdFornecedor;
  private $dataCompra;
  private $produtoNotaCompraRecord;

  public function __construct($idCompra = '', $fkIdFornecedor = '', $dataCompra = ''){
	$this->idCompra = $idCompra;
    $this->fkIdFornecedor = $fkIdFornecedor;
    $this->dataCompra = $dataCompra;
	$this->produtoNotaCompraRecord = new ProdutonotacomprasRecord();
  }

  public function setIdCompra($idCompra){
    $this->idCompra = $idCompra;
  }

  public function setFkIdFornecedor($fkIdFornecedor){
    $this->fkIdFornecedor = $fkIdFornecedor;
  }

  public function setDataCompra($dataCompra){
    $this->dataCompra = $dataCompra;
  }
  
  public function getIdCompra(){
    return $this->idCompra;
  }

  public function getFkIdFornecedor(){
    return $this->fkIdFornecedor;
  }

  public function getDataCompra(){
    return $this->dataCompra;
  }
  
  public function getProdutos(){
    return $this->produtoRecord->selecionarPorId($this->idCompra);
  }
  
  public function addProdutoCompra($produto, $qtdProduto){
	$dados['fkidproduto'] = $produto->getIdProduto();
	$dados['fkidcompra'] = $this->getIdCompra();
	$dados['qtdprodutocompra'] = $qtdProduto;
    return $this->produtoNotaCompra->cadastrar($dados);
  }

}


?>
