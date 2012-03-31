<?php

class RepresentanteTelefoneRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

}

?>