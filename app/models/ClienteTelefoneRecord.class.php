<?php

class ClienteTelefoneRecord extends ManipulaBanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }


}

?>
