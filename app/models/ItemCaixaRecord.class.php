<?php

class ItemCaixaRecord extends ManipulaBanco {

  private $itemCaixa;

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

  public function selecionarCaixaPorItem($idItem){
    $criteria = new TCriteria();
    $criteria = add(new TFilter('fkiditem', '=', $idItem);
    $ci = $this->selecionarColecao($criteria);
    for ($i = 1; $i <= count ($ci['FKIDITEM']); i++){
          $caixaRecord = new caixaRecord();
          $ci = $caixaRecord->getCaixa($ic['FKIDCAIXA'][$i]);
          $caixaItem[$i] = $ci;
    }
    return $caixaItem;
  }  

  public function selecionarQuantidadesItemPorCaixa($idCaixa, $idItem){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('fkidcaixa','=',$idCaixa));
    $criteria->add(new TFilter('fkiditem','=',$idItem));
    $c = $this->selecionarColecao($criteria);
    $qtds = $c['QTDITEMCOMPRA'][1];
  return $qtds;
  }

}

?>
