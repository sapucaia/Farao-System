<?php
  
  $_GET['acao'] = "index";
  require_once '../../controllers/ProdutosController.class.php';
  //require '../../../conf/lock.php';
  $controller = new ProdutosController();
  $produtos = $_REQUEST['produtos'];
  
  for($i=1;$i<=count($produtos);$i++){
    echo $produtos[$i]->getNomeProduto() . "<br/>";
  
  }
	//echo 'index.php<br/>';
	

?>

<html>

	<head>
		
	</head>
	<body>
		
		<a href='novo.php'>Novo Produto</a>
	</body>

</html>
