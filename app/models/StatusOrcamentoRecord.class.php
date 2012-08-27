<?php

class StatusOrcamentoRecord extends ManipulaBanco{

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


  public function selecionarPorId($idStatusOrcamento){
    $criteria = new TCriteria();
	  $criteria->add(new TFilter('idstatusorcamento', '=', $idStatusOrcamento));
    $so = $this->selecionarColecao($criteria);
	  $statusOrcamento = new StatusOrcamento($so['IDSTATUSORCAMENTO'][1],
						   $so['STATUSORCAMENTO'][1]);
        
	  return $statusOrcamento;
  }

}

?>
