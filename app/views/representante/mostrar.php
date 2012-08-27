<?php
/**
 * @author Caique Pires
 * @name mostrar Representante
 * @package Representante
 * 
 */
$_GET['acao'] = "mostrar";
require_once '../../controllers/RepresentanteController.class.php';
$controller = new RepresentanteController();

$representante = $_REQUEST['representante'];
$fornecedor = $_REQUEST['fornecedor'];

$telefones = $representante->getTelefones();
$enderecos = $representante->getEnderecos();
?>

<html>
    <head></head>

    
    <body>

        <h3>Visualizar Representante</h3>

        <br>
        <p>Dados Pessoais</p>
        <p><?php echo 'ID: ' . '' . $representante->getIdRepresentante(); ?></p>
        <p><?php ?></p>
        <p><?php echo 'NOME: ' . '' . $representante->getNomeRepresentante(); ?></p>
        <p><?php echo 'E-MAIL: ' . '' . $representante->getEmail(); ?></p>
        <p><?php echo 'FORNECEDOR: ' . '' . $fornecedor->getRazaoSocial(); ?></p>

        <br>

        <p>Telefones:</p>
        <table>
            <tbody>
                <?php
                foreach ($telefones as $telefone) {
                    $linha = "<tr>";
                    $linha .= "<td>" . $telefone->getTipo() . "</td>";
                    $linha .= "<td>" . $telefone->getDdd() . "</td>";
                    $linha .= "<td>" . $telefone->getNumero() . "</td>";
                    $linha .= "</tr>";
                    echo $linha;
                }
                ?>
            </tbody>
        </table>
        
        <br>
        
        <p>Endereços:</p>
        <table>
            <tbody>
                <?php
                foreach ($enderecos as $endereco) {
                    $linha = "<tr>";
                    $linha .= "<td>" . "Logradouro:" .$endereco->getLogradouro() . "</td>";
                    $linha .= "<td></td>";
                    $linha .= "<td>" . "Bairro:" .$endereco->getBairro() . "</td>";
                    $linha .= "<td></td>";
                    $linha .= "<td>" . "Cep:" .$endereco->getCep() . "</td>";
                    $linha .= "<td></td>";
                    $linha .= "</tr>";
                    echo $linha;
                }
                ?>
            </tbody>
        </table>

<p><a href="index.php">Voltar</a></p>



    </body>
</html>
