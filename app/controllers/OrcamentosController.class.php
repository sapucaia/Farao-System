<?php

  $acao = $_GET['acao'];

  switch($acao){
    case "index": 
    case "novo":
    case "editar":
    case "mostrar":
      require "../../../conf/lock.php";
      break;
    case "salvar":    
    case "atualizar":
      require "../../conf/lock.php";
      break;
  }

  echo $_SERVER['REQUEST_URI'];
  $controller = new OrcamentosController();
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

class OrcamentosController {

  private $orcamentoRecord;
  private $clienteRecord;
  private $statusOrcamentoRecord;
  private $orcamento;

  public function __construct(){
    $this->orcamentoRecord = new OrcamentoRecord();
    $this->clienteRecord = new ClienteRecord();
    $this->statusOrcamentoRecord = new StatusOrcamentoRecord();
    $this->orcamento = new Orcamento;

  }
    
  public function salvar($post){
    $this->orcamento->setFkIdCliente(strip_tags($post['fkIdCliente']));
    $this->orcamento->setFkIdStatusOrcamento(strip_tags($post['statusOrcamento']));
    $this->orcamento->setUrl(strip_tags($post['url']));
    if($this->orcamentoRecord->cadastrar($this->orcamento)){
      echo "Salvo com sucesso.";
    }else{
      echo "Erro ao salvar.";
    }
  }

  public function novo(){
    $_REQUEST['clientes'] = $this->clienteRecord->listar();
    $_REQUEST['statusOrcamento'] = $this->statusOrcamentoRecord->listar();
  }

  public function mostrar($idOrcamento){
    $_REQUEST['orcamento'] = $this->orcamentoRecord->getOrcamento($idOrcamento);
  }

  public function editar($idOrcamento){
    $_REQUEST['orcamento'] = $this->orcamentoRecord->getIdOrcamento($idOrcamento);
  }

  public function atualizar($idOrcamento){
    $this->orcamento->setIdOrcamento(strip_tags($post['$idOrcamento']));
    $this->orcamento->setFkStatusOrcamento(strip_tags($post['fkIdOrcamento']));
    $this->orcamento->setUrl(strip_tags($post['url']));
    if($this->orcamentoRecord->editar($this->orcamento)){
      echo "Atualizado com sucesso.";
    }else{ 
      echo "Erro ao atualizar.";
    }
  }

  public function remover(){

  }

  public function index(){
    $_REQUEST['orcamentos'] = $this->orcamentoRecord->listar();
  }




}

?>
