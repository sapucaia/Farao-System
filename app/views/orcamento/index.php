<?php
  $_GET['acao'] = "index";
  require_once '../../controllers/OrcamentosController.class.php';
  //require '../../conf/lock.php';
  $controller = new OrcamentosController();
  $orcamentos = $_REQUEST['orcamentos'];
?>

<html>

  <head></head>

  <body>


    <table>

      <tbody>

  <?php
    foreach($orcamentos as $orcamento){
      
      
      $linha = "<tr>";

      $linha .= "<td>" . $orcamento->getIdOrcamento() . "</td>";
      $linha .= "<td>" . $orcamento->getCliente()->getNomeCliente() . "</td>";
      $linha .= "<td>" . $orcamento->getStatus()->getStatusOrcamento() . "</td>";
      $linha .= "<td>" . $orcamento->getUrl() . "</td>";
      
      $linha .= "<td><a href='editar.php?id=" . $orcamento->getIdOrcamento() . "'>Editar</a></td>";
      $linha .= "<td><a href='mostrar.php?id=" . $orcamento->getIdOrcamento() . "'>Mostrar</a></td>";
      $linha .= "</tr>";

      echo $linha;
    }
  ?>

      </tbody>
    </table>

    <a href='novo.php'>Novo Orcamento</a>
  </body>
  













</html>






