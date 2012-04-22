<?php
  $_GET['acao'] = "novo";
  require_once '../../controllers/OrcamentosController.class.php';
  $controller = new OrcamentosController;
  
  echo '<h1>Novo Orcamento</h1>';
?>

<html>
  <head>
  </head>
  <body>

    <form action="../../controllers/OrcamentosController.class.php?acao=salvar" method="post">

      <fieldset>
 
        
    <p>          
      <label>Cliente</label>
          <select id="cliente" nome="cliente">
            <option value="0">--</option>
<?php

  $clientes = $_REQUEST['clientes'];
  for($i=1; $i<=count($clientes); $i++){
    echo "<option value=".$clientes[$i]->getIdCliente().">".$clientes[$i]->getNomeCliente()."</option>";
  }
?>
          </select>
    </p>
        
  <p>
    <label>Status Orcamento</label>
    <select id="status" name="status">
      <option value="0">--</option>          
<?php
  $status = $_REQUEST['statusOrcamento'];
  for($i=1; $i<=count($status); $i++){
      echo "<option value".$status[$i]->getIdStatusOrcamento().">".$status[$i]->getStatusOrcamento()."</option>";
  }
?>
</select>
</p>
        <p>
          <label for="url">URL
            <input type='text' name='url' />    
          </label>  
        </p>

        <p>
          <input type='submit' valor='Salvar' />        
        </p>


      </fieldset>
    </form>
  </body>

</html>









