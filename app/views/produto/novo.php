<?php
 // require '../../../conf/lock.php';

  $_GET['acao'] = "novo";
  //require '../../../conf/lock.php';
  require_once '../../controllers/ProdutosController.class.php';  
$controller = new ProdutosController;
  echo '<h1>Novo Produto</h1>';
?>

<html>
  <head>
  </head>
  
  <body>
    <form action="../../controllers/ProdutosController.class.php?acao=salvar" method="post">
      <fieldset>
        <p>
          <label for="nomeProduto">Nome Produto
            <input type='text' name='nomeProduto' />
          </label>
        </p>
<p>
    <label>Fornecedor</label>
    <select id="fornecedor" name="fornecedor">
      <option value="0">--</option>
      <?php
        
        $fornecedores = $_REQUEST['fornecedores'];
          for($i=1; $i<=count($fornecedores); $i++){
          echo "<option value=".$fornecedores[$i]->getIdFornecedor().">".$fornecedores[$i]->getRazaoSocial()."</option>";
        }
      ?>
    </select>
  </p>
        <p>
        <label for="valor">Valor
          <input type='text' name='valor' />
        </label>
</p>
        <p>
        <label for="descricao">Descricao
          <textarea name="descricao" rows="2" cols="20">
          </textarea> 
        </label>
</p>
        <p>
        <input type='submit' value='Salvar'/>
</p>
      </fieldset>
    </form>    
  
  </body>

</html>
