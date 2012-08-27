<?php
 //session_start();
/**
 *  View for the insertion of a representative
 * 
 * @author Caique Araujo Pires
 * @access public
 * 
 */



//include '../../controllers/RepresentanteController.class.php';

$_GET['acao'] = 'novo';
require_once '../../controllers/RepresentanteController.class.php';  
$controller = new RepresentanteController();
//$representanteController = new RepresentanteController();

echo '<h1> Novo Representante</h1>';

print_r(unserialize($_SESSION['telefones']));

echo '<br>';

print_r(unserialize($_SESSION['enderecos']));

?>

<html>
  <head>
  </head>
  
  <body>
      <form action="../../controllers/RepresentanteController.class.php?acao=salvar" method="post">
      <fieldset>
        
        <h3>Dados Pessoais</h3>

        <p>
          <label for="nomeRepresentante">Representante:
              <input type='text' name='nomeRepresentante' value="<?php echo $_SESSION['nome'] ?>"/>
          </label>
        </p>

        <p>
        <label for="email">e-mail:
          <input type='text' name='email'/>
        </label>
        </p>
        
        <p>
        <label>Fornecedor</label>
        <select id="fornecedor" name='idfornecedor'>
        <option value="0">--</option>
        <?php
        
            $fornecedores = $_REQUEST['fornecedores'];
                for($i=1; $i<=count($fornecedores); $i++){
                echo "<option value=".$fornecedores[$i]->getIdFornecedor().">".$fornecedores[$i]->getRazaoSocial()."</option>";
            }
        ?>
        </select>
        </p>
        
        <a href="../telefone/novo.php?modulo=representante">Adicionar Telefone</a>
        <br>
        <a href="../endereco/novo.php?modulo=representante">Adicionar Endereço</a>
        

        <p>
        <input type='submit' value='Salvar'/>
        </p>
      </fieldset>
    </form>    
  
  </body>

</html>
