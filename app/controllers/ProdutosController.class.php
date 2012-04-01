<?php
  
  require '../../../conf/lock.php';
  
  $acao = $_GET['acao'];
  
  $controller = new ProdutosController;
  
  
  switch($acao){
    case "index":{
      $controller->index();
    }
    case "novo":{
      $controller->novo();
    }
  
  
  }

class ProdutosController{

  private $produtoRecord;
  private $produto;
  
  public function __construct(){
    $this->produtoRecord = new ProdutoRecord();
  }

	public function salvar(){
	
	}
	
	public function novo(){
	  $this->produto = new Produto;
	}
	
	public function listar(){
	  
	}
	
	public function index(){
	  $_REQUEST['produtos'] =  $this->produtoRecord->listar();
	}

}

?>
