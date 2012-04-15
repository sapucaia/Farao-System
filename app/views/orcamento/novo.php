<?php
  $_GET['acao'] = "novo";
  require_onde '../../controllers/OrcamentoController.class.php';
  $controller = new OrcamentoController;
  
  echo '<h1>Novo Orcamento</h1>';
?>

<html>
  <head>
  </head>
  <body>
    <form action="../../controllers/OrcamentoController.class.php?acao=salvar" method="post">
      <fieldset>
        <p>
          <label for="produto">Produto</label>
          <select id="produto" name="produto">
            <option value="0">--</option>

            <?php

              $produtos = $_REQUEST['produto'];
                for($i=1;$i<=count($produtos);i++){
                echo "<option value=".$produtos[$i]->getIdProduto().">".$produtos[$i]->getNomeProduto()."</option>";
                }

            ?>

          </select>
        </p>
        <p>
          <label for="cliente">Cliente
            <input type='text' name='cliente' />
          </label>
        </p>
        
        <p>
          <label for="status">Status Orcamento
            <input type='text' name='status' />    
          </label>  
        </p>


          </label>
      </fieldset>
    </form>
  </body>

</html>









