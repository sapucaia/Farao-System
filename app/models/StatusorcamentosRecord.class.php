<?php

class StatusorcamentosRecord extends ManipulaBanco{

  private $statusOrcamento;

  public function listar(){
    $criteria = new TCriteria();
    $so = $this->selecionarColecao($criteria);

	  for($i=1;$i<=count($so['IDSTATUSORCAMENTO']);$i++){
	    $this->statusOrcamento[$i] = new StatusOrcamento($so['IDSTATUSORCAMENTO'][$i], 
								$so['STATUSORCAMENTO'][$i]);
	  }

	  return $this->statusOrcamento;
  }

  public function cadastrar($statusOrcamento){
     $dados['idStatusOrcamento'] = $statusOrcamento->getIdStatusOrcamento();
     $dados['statusOrcamento'] = $statusOrcamento->getStatusOrcamento();
     return $this->salvar($dados);
  }

}

?>
