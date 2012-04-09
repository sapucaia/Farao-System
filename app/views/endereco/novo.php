<?php

  $_GET['acao'] = "novo";
  require "../../controllers/EnderecosController.class.php";
  //$controller = new EnderecosController;
  $tiposLogradouro = $_REQUEST['tiposLogradouro'];
  $estados = $_REQUEST['estados'];
  $cidades = $_REQUEST['cidades'];

?>

<html>

  <head></head>

  <body>
    <form>
      <fieldset>
        <p>
          <label for="tiposLogradouro">Tipo Logradouro</label>
          <select name="tiposLogradouro">
            <option value="0">--</option>
            <?php
              foreach($tiposLogradouro as $tl){
                echo "<option value=".$tl->getIdTipoLogradouro().">".$tl->getDescricao()."</option>";
              }
            ?>
          </select>
        </p>
        <p>
          <label for="logradouro">Logradouro</label>
          <input type="text" name="logradouro" />
        </p>
        <p>
          <label for="estados">Estado</label>
          <select name="estados">
            <option value="0">--</option>
            <?php
              foreach($estados as $estado){
                echo "<option value=".$estado->getIdEstado().">".$estado->getNomeEstado()."</option>";
              }
            ?>
          </select>
        </p>
      </fieldset>
    </form>
  </body>

</html>

