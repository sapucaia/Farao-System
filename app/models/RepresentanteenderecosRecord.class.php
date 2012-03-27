<?php

class RepresentanteenderecosRecord extends Manipulabanco{

  public function cadastrar($dados){
    return $this->salvar($dados);
  }

}

?>