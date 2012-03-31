<?php

class RepresentanteEnderecoRecord extends Manipulabanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

}

?>