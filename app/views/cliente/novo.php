<?php

  $_GET['acao'] = "novo";
  
  require_once '../../controllers/ClientesController.class.php';  
  $controller = new ClientesController;
  echo '<h1>Novo Cliente</h1>';
?>

<html>
  <head>
  </head>
  <body>
    <form action="../../controllers/ClientesController.class.php?acao=salvar" method="post">
      <fieldset>
        <p><label for="nomeCliente">Nome Cliente<input type="text" name="nomeCliente" /></label</p>
        <p><label for="emailCliente">email<input type="text" name="emailCliente" /></label></p>
        <p><input type="submit" value="Salvar" /></p>
      </fieldset>
    </form>
  </body>
</html>
