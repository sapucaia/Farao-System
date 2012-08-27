<?php

class CompraRecord extends ManipulaBanco{

  public function cadastrar($compra){
    $dados['fkidfornecedor'] = $compra->getFkIdFornecedor();
    $dados['datacompra'] = $compra->getDataCompra();
    return $this->salvar($dados);
  }

}

?>
