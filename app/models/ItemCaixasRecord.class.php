<?php

class ItemcaixasRecord extends ManipulaBanco {

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

  public function listar(){
    $criteria = new TCriteria;
    $ic = $this->selecionarColecao($criteria);

      for($i = 1 ; $i <= count(ic['FKIDCAIXA']); i++){
        $this.itemCaixa[$i] = new ItemCaixa($ic['FKITEMCAIXA'][$i], 
                              $ic['QTDITEMCAIXA'][$i]);
      }
  return $this.itemCaixa;
  }


}

?>
