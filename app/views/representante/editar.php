<?php
/**
 * editar Representante
 *
 * @author Caique Pires
 * @name editar Representante
 * @package Representante
 * 
 */
$_GET['acao'] = 'editar';
require_once '../../controllers/RepresentanteController.class.php';
$controller = new RepresentanteController();

$representante = $_REQUEST['representante'];

$telefones = $representante->getTelefones();
$enderecos = $representante->getEnderecos();
?>
<html>
    <head>
    </head>

    <body>
        <form action="../../controllers/RepresentanteController.class.php?acao=atualizar" method="post">
            <fieldset>

                <h3>Dados Pessoais</h3>

                <p>
                    <label for="nomeRepresentante">Representante:
                        <input type='text' name='nomeRepresentante' value="<?php echo $representante->getNomeRepresentante(); ?>"/>
                    </label>
                </p>

                <p>
                    <label for="email">e-mail:
                        <input type='text' name='email' value="<?php echo $representante->getEmail(); ?>"/>
                    </label>
                </p>

                <p>
                    <label>Fornecedor</label>
                    <select id="fornecedor" name='idfornecedor'>
                        <option value="0">--</option>
                        <?php
                        $fornecedores = $_REQUEST['fornecedores'];
                        for ($i = 1; $i <= count($fornecedores); $i++) {
                            echo "<option value=" . $fornecedores[$i]->getIdFornecedor() . ">" . $fornecedores[$i]->getRazaoSocial() . "</option>";
                        }
                        ?>
                    </select>
                </p>
                
                <p></p>




                <p>
                    <input type='submit' value='Atualizar'/>
                </p>
            </fieldset>
        </form>    

    </body>

</html>
