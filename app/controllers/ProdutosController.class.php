<?php
  
  require '../../../conf/lock.php';
  
  $acao = $_GET['acao'];
  
  $controller = new ProdutosController;
  
  
  switch($acao){
    case "index":{
      $controller->index();
    }
  
  
  }

class ProdutosController{

  private $produtoRecord;
  
  public function __construct(){
    $this->produtoRecord = new ProdutoRecord();
  }

	public function salvar(){
	
	}
	
	public function listar(){
	  
	}
	
	public function index(){
	  $_REQUEST['produtos'] =  $this->produtoRecord->listar();
	}

}

?>
