<?php
  
  $_GET['acao'] = "index";
  require_once '../../controllers/ClientesController.class.php';
  
  $controller = new ClientesController();
  $clientes = $_REQUEST['clientes'];
  
  

?>

<html>

	<head>
		
	</head>
	<body>
		<table>
		  <tbody>
		    <?php
		      foreach($clientes as $cliente){
		        $linha = "<tr>";
		        $linha .= "<td>" . $cliente->getIdCliente() . "</td>";
		        $linha .= "<td>" . $cliente->getNomeCliente() . "</td>";
		        $linha .= "<td>" . $cliente->getEmailCliente() . "</td>";
		        $linha .= "<td><a href='mostrar.php?id=".$cliente->getIdCliente()."'>Mostrar</a></td>"; 
		        $linha .= "<td><a href='editar.php?id=".$cliente->getIdCliente()."'>Editar</a></td>"; 
		        $linha .= "</tr>";
		        echo $linha;
		      }

		    ?>
		  </tbody>
		</table>
		<a href='novo.php'>Novo Cliente</a>
	</body>

</html>
