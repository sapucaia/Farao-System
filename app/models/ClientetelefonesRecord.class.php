<?php

class TelefonesRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }


}

?>
