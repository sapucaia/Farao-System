<?php
  $_GET['acao'] = "editar";
  require_once '../../controllers/OrcamentoController.class.php';
  $controller = new OrcamentoController;
  $orcamento = $_REQUEST['orcamento'];
  echo '<h1>Editar Orcamento</h1>';
?>

<html>
  <head>
  <body>
    <form action="../../controllers/OrcamentoController.class.php?acao=editar" method="post">
      <fieldset>
        <input type='hidden' name='idOrcamento' value="<?php echo $orcamento->getIdOrcamento(); ?>" />
        <p>
          <label for="">
            <input type='text' name='idOrcamento' value="<?php echo $orcamento->getIdOrcamento(); ?>" />
          </label>
        </p>
        <p>
          <label></label>
      </fieldset>

    </form>
  </body>
  </head>
</html>
