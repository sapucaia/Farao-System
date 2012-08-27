<?php

class TipoLogradouroRecord extends ManipulaBanco{

  private $tiposLogradouro;
  

  public function listar(){
    $criteria = new TCriteria();
    $tl = $this->selecionarColecao($criteria);

	  for($i=1; $i<=count($tl['IDTIPOLOGRADOURO']); $i++){
	    $this->tiposLogradouro[$i] = new TipoLogradouro($tl['IDTIPOLOGRADOURO'][$i],
								$tl['DESCRICAO'][$i]);
	  }

	  return $this->tiposLogradouro;
  }

  public function cadastrar($tipoLogradouro){
     $dados['idtipologradouro'] = $tipoLogradouro->getIdTipoLogradouro();
     $dados['descricao'] = $tipoLogradouro->getDescricao();
     return $this->salvar($dados);
  }

}

?>



















