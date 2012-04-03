<?php
  
  $_GET['acao'] = "mostrar";
  require_once '../../controllers/ProdutosController.class.php';  
  $controller = new ProdutosController;
  $produto = $_REQUEST['produto'];  
  $fornecedor = $produto->getFornecedor();

?>

<html>

  <head></head>
  <body>
    <h1><?php echo $produto->getNomeProduto(); ?></h1>
    <p><?php echo $produto->getValor(); ?></p>
    <p><?php echo $fornecedor->getNomeFantasia(); ?></p>
    <p><?php echo $produto->getDescricao(); ?></p>
    <p><a href="index.php">Voltar</a> | <a href="novo.php">Novo Produto</a> | <a href="editar.php?id=<?php echo $produto->getIdProduto(); ?>">Editar</a></p>
  </body>

</html>
