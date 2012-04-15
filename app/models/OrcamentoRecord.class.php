<?php

class OrcamentoRecord extends ManipulaBanco{
  
  private $orcamentos;
  
  public function cadastrar($orcamento){
    $dados['IDORCAMENTO'] =  $orcamento->getIdOrcamento();
    $dados['FKIDCLIENTE'] =  $orcamento->getFkIdCliente();
    $dados['FKIDSTATUSORCAMENTO'] =  $orcamento->getFkIdStatusOrcamento();
    $dados['URL'] = $orcamento->getUrl();
    return $this->salvar($dados);
  }

  public function listar(){
    $criteria = new TCriteria;
    $o = $this->selecionarColecao($criteria);

    for($i = 1; $i <= count($o['IDORCAMENTO']); $i++){
      $this->orcamentos[$i] = new Orcamento($o['IDORCAMENTO'][$i],
                                           $o['FKIDCLIENTE'][$i],
                                           $o['FKIDSTATUSORCAMENTO'][$i],
                                           $o['URL'][$i]);
    }
  return $this->orcamentos;

  }

  public function getOrcamento($idOrcamento){
    $criteria = new TCriteria();
    $criteria = add(new TFilter('idOrcamento','=', $idOrcamento));
    $o = $this->selecionarColecao($criteria);
    $orcamento = new Orcamento($o['IDORCAMENTO'][1],
                     $o['FKIDCLIENTE'][1],
                     $o['FKIDSTATUSORCAMENTO'][1],
                     $o['URL'][1]);
    return $orcamento;  
  }

























}

?>
