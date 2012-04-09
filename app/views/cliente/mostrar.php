<?php

  $_GET['acao'] = "mostrar";
  require_once '../../controllers/ClientesController.class.php';
  $controller = new ClientesController;
  $cliente = $_REQUEST['cliente'];

  $telefones = $cliente->getTelefones();

?>


<html>

  <head></head>

  <body>
    <p><?php echo $cliente->getIdCliente(); ?></p>
    <p><?php echo $cliente->getNomeCliente(); ?></p>
    <p><?php echo $cliente->getEmailCliente(); ?></p>
    <p><a href="../telefone/novo.php?clienteId=<?php echo $cliente->getIdCliente(); ?>">Adicionar Telefone</a></p>
    <table>
      <tbody>
        <?php
          foreach($telefones as $telefone){
            $linha = "<tr>";
            $linha .= "<td>" . $telefone->getTipo() . "</td>";
            $linha .= "<td>" . $telefone->getDdd() . "</td>";
            $linha .= "<td>" . $telefone->getNumero() . "</td>";
            $linha .= "</tr>";
            echo $linha;
          }
        ?>
      </tbody>
    </table>
    <p><a href="index.php">Voltar</a></p>
  </body>

</html>

