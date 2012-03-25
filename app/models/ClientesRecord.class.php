<?php 

class ClientesRecord extends ManipulaBanco{

  private $clientes;

  public function listar(){
    $criteria = new TCriteria();
    $c = $this->selecionarColecao($criteria);

	  for($i=1;$i<=count($c['IDCLIENTE']);$i++){
	    $this->clientes[$i] = new Cliente($c['IDCLIENTE'][$i], 
								$c['NOMECLIENTE'][$i],
								$c['EMAILCLIENTE'][$i]);
	  }

	  return $this->clientes;
    
  }

  public function selecionarPorNome($nome){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('nomeCliente', 'LIKE', $nome));
	  $c = $this->selecionarColecao($criteria);
	  $cliente = new Cliente($c['IDCLIENTE'][1], 
								$c['NOMECLIENTE'][1],
								$c['EMAILCLIENTE'][1]);
	  return $cliente;
  }

  public function selecionarPorId($id){
    $criteria = new TCriteria();
    $criteria->add(new TFilter('IdCliente', '=', $id));
    $c = $this->selecionarColecao($criteria);
	  $cliente = new Cliente($c['IDCLIENTE'][1], 
								$c['NOMECLIENTE'][1],
								$c['EMAILCLIENTE'][1]);
	  return $cliente;
  }

  public function cadastrar($cliente){
    $dados['nomeCliente'] = $cliente->getNomeCliente();
    $dados['emailCliente'] = $cliente->getEmailCliente();
    return $this->salvar($dados);
  }

}

?>
