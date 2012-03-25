<?php

class ProdutonotacomprasRecord extends ManipulaBanco{

	public function cadastrar($dados){
		return $this->salvar($dados);
	}

}

?>