<?php
  $_GET['acao'] = "editar";
  require_once '../../controllers/ProdutosController.class.php';  
  $controller = new ProdutosController;
  $produto = $_REQUEST['produto'];
  echo '<h1>Editar Produto</h1>';
?>

<html>
  <head>
  </head>
  
  <body>
    <form action="../../controllers/ProdutosController.class.php?acao=atualizar" method="post">
      <fieldset>
        <input type='hidden' name='idProduto' value="<?php echo $produto->getIdProduto(); ?>" />
        <p>
          <label for="nomeProduto">Nome Produto
            <input type='text' name='nomeProduto' value="<?php echo $produto->getNomeProduto(); ?>" />
          </label>
        </p>
<p>
    <label>Fornecedor</label>
    <select id="fornecedor" name="fornecedor">
      <option value="0">--</option>
      <?php
        
        $fornecedores = $_REQUEST['fornecedores'];
          foreach($fornecedores as $fornecedor){
            if(!$fornecedor->equals($produto->getFornecedor())){
              echo "<option value=".$fornecedor->getIdFornecedor().">".$fornecedor->getRazaoSocial()."</option>";
            }else{
              echo "<option selected='selected' value=".$fornecedor->getIdFornecedor().">".$fornecedor->getRazaoSocial()."</option>";
            }
        }
      ?>
    </select>
  </p>
        <p>
        <label for="valor">Valor
          <input type='text' name='valor' value="<?php echo $produto->getValor(); ?>" />
        </label>
</p>
        <p>
        <label for="descricao">Descricao
          <textarea name="descricao"><?php echo $produto->getDescricao(); ?></textarea> 
        </label>
</p>
        <p>
        <input type='submit' value='Atualizar'/>
</p>
      </fieldset>
    </form>    
  
  </body>

</html>
