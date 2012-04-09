<?php

  $acao = $_GET['acao'];

  switch($acao){
    case "novo":{
      require "../../../conf/lock.php";
      break;
    }
  }

  $controller = new EnderecosController;

  switch($acao){
    case "novo":{
      $controller->novo();
      break;
    }
  }

  class EnderecosController{

    public function __construct(){
      $tiposLogradouroRecord = new TipoLogradouroRecord;
      $estadosRecord = new EstadoRecord;
      $cidadesRecord = new CidadeRecord;
    }

    public function novo(){
      $_REQUEST['tiposLogradouro'] = $tiposLogradouroRecord->listar();
      $_REQUEST['estados'] = $estadosRecord->listar();
      $_REQUEST['cidades'] = $cidadesRecord->listar();
    }

  }

?>

