<?php
  
  $acao = $_GET['acao'];
  
  switch($acao){
    case "index":
    case "novo":
    case "editar":
    case "mostrar":
      require '../../../conf/lock.php';
      break;
    case "salvar":
    case "atualizar":
      require '../../conf/lock.php';
      break;
  }

  echo $_SERVER['REQUEST_URI'];
  $controller = new ProdutosController;
  $post = $_POST;
  
  switch($acao){
    
    case "novo":{
      $controller->novo();
      break;
    }
    case "salvar":{
      $controller->salvar($post);
      break;
    }    
    case "editar":{
      $controller->editar($_GET['id']);
      break;
    }
    case "mostrar":{
      $controller->mostrar($_GET['id']);
      break;
    }
    case "atualizar":{
      $controller->atualizar($post);
      break;
    }
    default:{
      $controller->index();
      break;
    }
  
  }

class ProdutosController{

  private $produtoRecord;
  private $fornecedorRecord;
  private static $produto;
  
  public function __construct(){
    $this->produtoRecord = new ProdutoRecord();
    $this->fornecedorRecord = new FornecedorRecord();
    if(!isset($this->produto)){
      $this->produto = new Produto;    
    }
  }

	public function salvar($post){
    $this->produto->setNomeProduto(strip_tags($post['nomeProduto']));
    $this->produto->setFkIdFornecedor(strip_tags($post['fornecedor']));
    $this->produto->setValor(strip_tags($post['valor']));
    $this->produto->setDescricao(strip_tags($post['descricao']));
	  if($this->produtoRecord->cadastrar($this->produto)){
      echo "Salvo com sucesso.";
    }else{
      echo "Erro ao salvar."; 
    }        
    
	}
	
	public function novo(){
	 
    $_REQUEST['fornecedores'] = $this->fornecedorRecord->listar();
	}
	
	public function mostrar($idProduto){
	  $_REQUEST['produto'] = $this->produtoRecord->getProduto($idProduto);
	}

  public function editar($idProduto){
    $_REQUEST['fornecedores'] = $this->fornecedorRecord->listar();
    $_REQUEST['produto'] = $this->produtoRecord->getProduto($idProduto);
  }
  
  public function atualizar($post){
    $this->produto->setIdProduto(strip_tags($post['idProduto']));
    $this->produto->setNomeProduto(strip_tags($post['nomeProduto']));
    $this->produto->setFkIdFornecedor(strip_tags($post['fornecedor']));
    $this->produto->setValor(strip_tags($post['valor']));
    $this->produto->setDescricao(strip_tags($post['descricao']));
	  if($this->produtoRecord->editar($this->produto)){
      echo "Atualizado com sucesso.";
    }else{
      echo "Erro ao atualizar."; 
    }
  }

  public function remover(){

  }
	
	public function index(){
	  $_REQUEST['produtos'] =  $this->produtoRecord->listar();
	}

}

?>
