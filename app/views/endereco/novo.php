<?php
/**
 *@author Caique Pires
 *@name View de Endereço 
 */
?>


<?php
$_GET['acao'] = "novo";
require "../../controllers/EnderecosController.class.php";
//$controller = new EnderecosController;
$tiposLogradouro = $_REQUEST['tiposLogradouro'];
$estados = $_REQUEST['estados'];
$cidades = $_REQUEST['cidades'];

if($_GET['modulo'] == "representante"){
   $controller = "../../controllers/RepresentanteController.class.php?acao=addEndereco";
  }
  if(isset($_GET['representanteId'])){
    $controller = "../../controllers/RepresentanteController.class.php?acao=salvarTelefone&id=". $_GET['clienteId'];
  }
  
?>

<html>

    <head></head>

    <body>
        <form action="<?php echo $controller; ?>" method="post">



            <fieldset>
                <h3>Endereço</h3>
                <p>
                    <label for="tiposLogradouro">Tipo Logradouro</label>
                    <select name="fkidtipologradouro">
                        <option value="0">--</option>
                        <?php
                        foreach ($tiposLogradouro as $tl) {
                            echo "<option value=" . $tl->getIdTipoLogradouro() . ">" . $tl->getDescricao() . "</option>";
                        }
                        ?>
                    </select>
                </p>
                <p>
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="logradouro" />
                </p>
                
                <p>
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" />
                </p>
                
                <p>
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" />
                </p>
                
                <p>
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" />
                </p>
                
                <p>
                    <label for="estados">Estado</label>
                    <select name="fkidestado">
                        <option value="0">--</option>
                        <?php
                        foreach ($estados as $estado) {
                            echo "<option value=" . $estado->getIdEstado() . ">" . $estado->getNomeEstado() . "</option>";
                        }
                        ?>
                    </select>
                </p>
                
                    <?php/**Carregar cidades (ajax) a depender do estado selecionado*/?>
         
                <p>
                    <label for="cidades">Cidade</label>
                    <select name="fkidcidade">
                        <option value="0">--</option>
                        <?php
                        foreach ($cidades as $cidade) {
//                            if($cidade->getFkIdEstado() == $estado->getIdEstado())
                            echo "<option value=" . $cidade->getIdCidade() . ">" . $cidade->getNomeCidade() . "</option>";
                        }
                        ?>
                    </select>
                </p>
                
                

                <p><input type="submit" value="Salvar" />
                </p>

            </fieldset>
        </form>
    </body>

</html>

