<?php

class ClienteTelefoneRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

  public function selecionarTelefonesPorCliente($idCliente){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('fkidcliente','=',$idCliente));
    $c = $this->selecionarColecao($criteria);
    for($i=1; $i<= count($c['FKIDCLIENTE']); $i++){
      $telefonesRecord = new TelefoneRecord();
      $t = $telefonesRecord->getTelefone($c['FKIDTELEFONE'][$i]);
      $telefoneCliente[$i] = $t;
    }
    return $telefoneCliente;
  }


}

?>

