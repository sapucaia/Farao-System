<?php

class ClienteTelefonesRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }


}

?>
