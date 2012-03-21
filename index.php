
<?php
/*
require 'conf/lock.php';

$clienteR = new ClientesRecord();

$cr = $clienteR->listar();


for($i=1;$i<=count($cr['IDCLIENTE']);$i++){
  echo $cr['NOMECLIENTE'][$i] . ' - ' . $cr['EMAILCLIENTE'][$i];
  print '<br/>';
  
}

echo '==================================<br/>';


$cf = $clienteR->selecionarPorNome("Paavo");

for($i=1;$i<=count($cf['IDCLIENTE']);$i++){
  echo $cf['NOMECLIENTE'][$i] . ' - ' . $cf['EMAILCLIENTE'][$i];
  print '<br/>';
  
}

echo '==================================<br/>';

$ci = $clienteR->selecionarPorId(1);

for($i=1;$i<=count($ci['IDCLIENTE']);$i++){
  echo $ci['NOMECLIENTE'][$i] . ' - ' . $ci['EMAILCLIENTE'][$i];
  print '<br/>';
  
}

$cliente  = new Cliente;

$cliente->setNomeCliente("Crazy");
$cliente->setEmailCliente("EMAIL");

echo $clienteR->cadastrar($cliente);




//echo $cliente->cadastrar($dados);

*/
?>



<html>
<head></head>
<body>


<a href='app/views/clienteAdd.php'>Cliente</a> <br/>
<a href='app/views/clientesList.php'>Listar Clientes</a>
</body>






</html>

