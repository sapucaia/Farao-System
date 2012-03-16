<?php

include '../controllers/ClientesController.class.php';


$clientesControllers = new ClientesController();

$listaClientes = $clientesControllers->listar();

for($i=1;$i<=count($listaClientes['IDCLIENTE']);$i++){
  echo $listaClientes['IDCLIENTE'][$i] . '<br/>';
  echo $listaClientes['NOMECLIENTE'][$i] . '<br/>';
  echo $listaClientes['EMAILCLIENTE'][$i];


}


?>

