<?php
 // session_start();
  $_GET['acao'] = "novo";

  require_once '../../controllers/ClientesController.class.php';
  $controller = new ClientesController;
  echo '<h1>Novo Cliente</h1>';
  print_r(unserialize($_SESSION['telefones']));
?>

<html>
  <head>
  </head>
  <body>
    <form action="../../controllers/ClientesController.class.php?acao=salvar" method="post">
      <fieldset>
        <p><label for="nomeCliente">Nome Cliente<input type="text" name="nomeCliente" /></label</p>
        <p><label for="emailCliente">email<input type="text" name="emailCliente" /></label></p>
        <p><a href="../telefone/novo.php?modulo=cliente">Adicionar Telefone</a></p>
        <p><a href="../endereco/novo.php">Adicionar Endereco</a></p>
        <p><input type="submit" value="Salvar" /></p>
      </fieldset>
    </form>
  </body>
</html>

