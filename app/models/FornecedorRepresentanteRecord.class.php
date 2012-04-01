<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FornecedorRepresentanteRecord
 *
 * @author wallace
 */
class FornecedorRepresentanteRecord extends ManipulaBanco {

    //put your code here

    public function cadastrar($dados) {
        return $this->salvar($dados);
    }

}

?>
