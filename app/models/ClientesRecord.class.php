<?php 

class ClientesRecord extends ManipulaBanco{

  public function listar(){
    $criteria = new TCriteria();
    return $this->selecionarColecao($criteria);
  }

  public function selecionarPorNome($nome){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('nomeCliente', 'LIKE', $nome));
    return $this->selecionarColecao($criteria);
  }

  public function selecionarPorId($id){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('IdCliente', '=', $id));
    return $this->selecionarColecao($criteria);
  }

  public function cadastrar($cliente){
    $dados['nomeCliente'] = $cliente->getNomeCliente();
    $dados['emailCliente'] = $cliente->getEmailCliente();
    return $this->salvar($dados);
  }

}

?>
