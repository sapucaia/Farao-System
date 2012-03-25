<?php

class ProdutonotavendasRecord extends ManipulaBanco{

	public function cadastrar($dados){
		return $this->salvar($dados);
	}

}

?>
