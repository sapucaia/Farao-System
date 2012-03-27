<?php

class RepresentantetelefonesRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

}

?>