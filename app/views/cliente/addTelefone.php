<?php
  echo $_SERVER["PHP_SELF"] . "<br/>";
  echo $_SERVER["SCRIPT_NAME"] . "<br/>";
  echo $_SERVER['HTTP_REFERER'] . "<br/>";
  echo $_SERVER['QUERY_STRING'] . "<br/>";
  echo $_SERVER['REQUEST_URI'];

 // PATH_INFO

?>

<html>

  <head></head>
  <body>
    <form>
      <fieldset>
        <p>
            <label for="tipo">Tipo Telefone
                <input type="text" name="tipo" />
            </label>
        </p>
        <p>
            <label for="ddd">ddd
                <input type="text" name="name" />
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

