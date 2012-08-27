<?php
/**
 * @author Caique Pires
 */
//require_once '../../controllers/ProdutosController.class.php';
//$_GET['acao'] = 'index;'


$_GET['acao'] = 'index';
require_once '../../controllers/RepresentanteController.class.php';
//require '../../../conf/lock.php';
$controller = new RepresentanteController();
$representantes = $_REQUEST['representantes'];
?>

<html>
    <head>

    </head>

    <body>

        <table>
            <tbody>
<?php
foreach ($representantes as $representante) {
    $linha = "<tr>";
    $linha .= "<td>" . $representante->getIdRepresentante() . "</td>";
    $linha .= "<td>" . $representante->getNomeRepresentante() . "</td>";
    $linha .= "<td>" . $representante->getEmail() . "</td>";
    $linha .= "<td><a href='mostrar.php?id=".$representante->getIdRepresentante()."'>Mostrar</a></td>";
    $linha .= "<td><a href='editar.php?id=" . $representante->getIdRepresentante() . "'>Editar</a></td>";
    $linha .= "</tr>";
    echo $linha;
}
?>
            </tbody>
        </table>

                <?php unset($controller); ?>

        <a href="novo.php">Novo Representante</a>

    </body>
</html>
