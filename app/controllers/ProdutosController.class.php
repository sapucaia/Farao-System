<?php
  
  $acao = $_GET['acao'];
  if($acao == "index" || $acao == "novo") {
    require '../../../conf/lock.php';
  }elseif($acao == "salvar"){
    require '../../conf/lock.php';
    
  }
  //else require '../../conf/lock.php';


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
    
    $this->produto->setNomeProduto($post['nomeProduto']);
    $this->produto->setFkIdFornecedor($post['fornecedor']);
    $this->produto->setValor($post['valor']);
    $this->produto->setDescricao($post['descricao']);
	  if($this->produtoRecord->cadastrar($this->produto)){
      echo "Salvo com sucesso.";
    }else{
      echo "Erro ao salvar."; 
    }        
    
	}
	
	public function novo(){
	 
    $_REQUEST['fornecedores'] = $this->fornecedorRecord->listar();
	}
	
	public function listar(){
	  
	}

  public function atualizar(){

  }

  public function remover(){

  }
	
	public function index(){
	  $_REQUEST['produtos'] =  $this->produtoRecord->listar();
	}

}

?>
