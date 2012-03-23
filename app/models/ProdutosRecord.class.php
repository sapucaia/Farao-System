<?php

class ProdutosRecord extends ManipulaBanco{

  public function selecionarPorId($idProduto){
    $criterio = new TCriteria(new TFilter('idProduto', '=', $idProduto));
    return $this->selecionarColecao($criterio);
  }

}

?>
