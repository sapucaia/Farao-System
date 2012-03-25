<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoItens
 *
 * @author wallace
 */
class TipoItens {

    //put your code here
    private $idTipoItem;
    private $descricao;

    public function __construct($idTipoItem = '', $descricao = '') {
        $this->idTipoItem = $idTipoItem;
        $this->descricao = $descricao;
    }

    public function getIdTipoItem() {
        return $this->idTipoItem;
    }

    public function setIdTipoItem($idTipoItem) {
        $this->idTipoItem = $idTipoItem;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}

?>
