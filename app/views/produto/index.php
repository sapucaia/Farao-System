<?php
  
  $_GET['acao'] = "index";
  require_once '../../controllers/ProdutosController.class.php';
  
  $controller = new ProdutosController;
  $produtos = $controller->index();
  
  for($i=0;$i<count($produtos);$i++){
    echo $produtos[$i]->getNomeProduto() . "<br/>";
  
  }
	//echo 'index.php<br/>';
	

?>

<html>

	<head>
		
	</head>
	<body>
		
		<a href='#'>Novo Produto</a>
	</body>

</html>
