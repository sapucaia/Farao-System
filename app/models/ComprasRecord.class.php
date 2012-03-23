<?php 

class ComprasRecord extends ManipulaBanco{

  public function listar(){
    $criteria = new TCriteria();
    return $this->selecionarColecao($criteria);
  }

  public function cadastrar($compra){
    $dados['fkIdForncedor'] = $compra->getFkIdFornecedor();
    $dados['dataCompra'] = $compra->getDataCompra();
    return $this->salvar($dados);
  }

}

?>
