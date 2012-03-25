<?php

class Venda{

  private $idVenda;
  private $fkIdCliente;
  private $dataVenda;
  private $produtoNotaVendaRecord;
  private $clienteRecord;

  public function __construct($idVenda = '', $fkIdCliente = '', $dataVenda = ''){
    $this->idVenda = $idVenda;
    $this->fkIdCliente = $fkIdCliente;
    $this->dataVenda = $dataVenda;
    $this->produtoNotaVendaRecord = new ProdutonotavendasRecord();
    $this->clienteRecord = new ClientesRecord();
  }

  public function setIdVenda($idVenda){
    $this->idVenda = $idVenda;
  }

  public function setFkIdCliente($fkIdCliente){
    $this->fkIdCliente = $fkIdCliente;
  }

  public function setDataVenda($dataVenda){
    $this->dataVenda = $dataVenda;
  }

  public function getIdVenda(){
    return $this->idVenda;
  }

  public function getFkIdCliente(){
    return $this->fkIdCliente;
  }

  public function getDataVenda(){
    return $this->dataVenda;
  }

  public function addProdutoVenda($produto, $qtdProduto){
	  $dados['fkidproduto'] = $produto->getIdProduto();
	  $dados['fkidvenda'] = $this->getIdVenda();
	  $dados['quantidadeproduto'] = $qtdProduto;
    return $this->produtoNotaVendaRecord->cadastrar($dados);
  }

  public function getCliente(){
    return $this->clienteRecord->selecionarPorId($this->getFkIdCliente());
  }

}

?>
