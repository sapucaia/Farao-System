<?php

//swicth case!

  if($_GET['modulo'] == "cliente"){
   $controller = "../../controllers/ClientesController.class.php?acao=addTelefone";
  }
  if(isset($_GET['clienteId'])){
    $controller = "../../controllers/ClientesController.class.php?acao=salvarTelefone&id=". $_GET['clienteId'];
  }
  
  if($_GET['modulo'] == "representante"){
   $controller = "../../controllers/RepresentanteController.class.php?acao=addTelefone";
  }
  if(isset($_GET['representanteId'])){
    $controller = "../../controllers/RepresentanteController.class.php?acao=salvarTelefone&id=". $_GET['clienteId'];
  }

?>


<html>

  <head></head>
  <body>
    <form action="<?php echo $controller;?>" method="post">
      <fieldset>
        <p>
            <label for="tipo">Tipo Telefone
                <input type="text" name="tipo" />
            </label>
        </p>
        <p>
            <label for="ddd">ddd
                <input type="text" name="ddd" />
            </label>
        </p>
        <p>
            <label for="numero">Numero
                <input type="text" name="numero" />
            </label>
        </p>
        <p><input type="submit" value="Salvar" />
        </p>
      </fieldset>
    </form>
  </body>

</html>

