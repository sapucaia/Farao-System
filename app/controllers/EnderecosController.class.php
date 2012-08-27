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
      
      private $tiposLogradouroRecord;
      private $estadosRecord;
      private $cidadesRecord;
      

    public function __construct(){
        $this->tiposLogradouroRecord = new TipoLogradouroRecord();
        $this->estadosRecord = new EstadoRecord();
        $this->cidadesRecord = new CidadeRecord();
    }

    public function novo(){
      $_REQUEST['tiposLogradouro'] = $this->tiposLogradouroRecord->listar();
      $_REQUEST['estados'] = $this->estadosRecord->listar();
      $_REQUEST['cidades'] = $this->cidadesRecord->listar();
    }
    
    public function listarPorID(){
      $_REQUEST['cidades'] = $this->cidadesRecord->listarPorID($idCidade);
    }

  }

?>

