<?php
require '../../conf/lock.php';


if($_POST != null) $post = strip_tags($_POST);

$clientesController = new ClientesController;
if($_GET['acao'] != null){

$acao = $_GET['acao'];
switch($acao){
  case 'cadastrar':
  $clientesController->cadastrar($post);  

}
}

class ClientesController{

private $cliente;
private $clientesRecord;


public function __construct(){
$this->cliente = new Cliente();
$this->clientesRecord = new ClienteRecord;
}

public function cadastrar($post){

$this->cliente->setNomeCliente($post['nomeCliente']);
$this->cliente->setEmailCliente($post['emailCliente']);
if($this->clientesRecord->cadastrar($this->cliente))
echo 'Sucesso total';
else
echo 'Falha ao cadastrar';
}

public function listar(){


return $this->clientesRecord->listar();


}







}

?>
