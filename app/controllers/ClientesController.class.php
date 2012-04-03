<?php

  if($_POST != null) $post = $_POST;
  
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
  
  $clientesController = new ClientesController;
  
  switch($acao){
    case 'salvar':{
      $clientesController->salvar($post);
      break;  
    }
    default:{
      $clientesController->index();
      break;
    }
  }

class ClientesController{

  private static $cliente;
  private $clientesRecord;


  public function __construct(){
    if(!isset($this->cliente)){
      $this->cliente = new Cliente;    
    }
    $this->clientesRecord = new ClienteRecord;
  }

  public function salvar($post){
    $this->cliente->setNomeCliente($post['nomeCliente']);
    $this->cliente->setEmailCliente($post['emailCliente']);
    if($this->clientesRecord->cadastrar($this->cliente))
      echo 'Sucesso total';
    else
      echo 'Falha ao cadastrar';
  }
  
  public function atualizar(){
  
  }
  
  public function novo(){
  
  }
  
  public function editar($idCliente){
  
  }
  
  public function mostrar($idCliente){
  
  }

  public function index(){
    $_REQUEST['clientes'] = $this->clientesRecord->listar();
  }

}

?>
