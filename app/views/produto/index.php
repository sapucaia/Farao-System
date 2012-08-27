<?php
  $_GET['acao'] = "index";
  require_once '../../controllers/ProdutosController.class.php';
  //require '../../../conf/lock.php';
  $controller = new ProdutosController();
  $produtos = $_REQUEST['produtos'];
?>

<html>
	<head>	
	</head>
	<body>
		<table>
		  <tbody>
		    <?php
		      foreach($produtos as $produto){		        
          $fornecedor = $produto->getFornecedor();
		        $linha = "<tr>";
		        $linha .= "<td>" . $produto->getIdProduto() . "</td>";
		        $linha .= "<td>" . $produto->getNomeProduto() . "</td>";
		        $linha .= "<td>" . $fornecedor->getRazaoSocial() . "</td>";
		        $linha .= "<td>" . $produto->getValor() . "</td>";
		        $linha .= "<td><a href='mostrar.php?id=".$produto->getIdProduto()."'>Mostrar</a></td>"; 
		        $linha .= "<td><a href='editar.php?id=".$produto->getIdProduto()."'>Editar</a></td>"; 
		        $linha .= "</tr>";
		        echo $linha;
		      }

		    ?>
		  </tbody>
		</table>
		<a href='novo.php'>Novo Produto</a>
	</body>

</html>



























