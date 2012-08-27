<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteEnderecoRecord
 *
 * @author wallace
 */
class ClienteEnderecoRecord extends ManipulaBanco {

    //put your code here
    public function cadastrar($dados) {
        return $this->salvar($dados);
    }

}

?>
