<?php

class ClientetelefonesRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }


}

?>
