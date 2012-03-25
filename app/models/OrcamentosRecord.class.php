<?php

class OrcamentosRecord extends ManipulaBanco{

  public function cadastrar($orcamento){
    $dados['IDORCAMENTO'] =  $orcamento->getIdOrcamento();
    $dados['FKIDCLIENTE'] =  $orcamento->getFkIdCliente();
    $dados['FKIDSTATUSORCAMENTO'] =  $orcamento->getFkIdStatusOrcamento();
    $dados['URL'] = $orcamento->getUrl();
    return $this->salvar($dados);
  }

}

?>
