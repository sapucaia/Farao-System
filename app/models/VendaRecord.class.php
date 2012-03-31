<?php

class VendaRecord extends ManipulaBanco{

  public function cadastrar($venda){
    $dados['fkIdCliente'] = $venda->getFkIdCliente();
    $dados['datavenda'] = $venda->getDataVenda();
    return $this->salvar($dados);
  }

}


?>
