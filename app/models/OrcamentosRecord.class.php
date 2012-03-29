<?php

class OrcamentosRecord extends ManipulaBanco{
  
  private $orcamento;
  
  public function cadastrar($orcamento){
    $dados['IDORCAMENTO'] =  $orcamento->getIdOrcamento();
    $dados['FKIDCLIENTE'] =  $orcamento->getFkIdCliente();
    $dados['FKIDSTATUSORCAMENTO'] =  $orcamento->getFkIdStatusOrcamento();
    $dados['URL'] = $orcamento->getUrl();
    return $this->salvar($dados);
  }

  public function listar(){
    $criteria = new TCriteria;
    $o = $this.selecionaColecao($criteria);

    for($i = 1; $i <= count($o['IDORCAMENTO']); $i++){
      $this->orcamento[$i] = new Orcamento($o['FKIDCLIENTE'][$i],
                                           $o['FKIDCLIENTE'][$i],
                                           $o['FKIDSTATUSORCAMENTO'][$i]);
    }
  return $this->orcamento;

  }

}

?>
