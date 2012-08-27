<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author wallace
 */
class Item {

    //put your code here
    private $idItem;
    private $fkIdItem;
    private $nomeItem;

    public function __construct($idItem='', $fkIdItem='', $nomeItem='') {
        $this->idItem = $idItem;
        $this->fkIdItem = $fkIdItem;
        $this->nomeItem = $nomeItem;
    }

    public function getIdItem() {
        return $this->idItem;
    }

    public function setIdItem($idItem) {
        $this->idItem = $idItem;
    }

    public function getFkIdItem() {
        return $this->fkIdItem;
    }

    public function setFkIdItem($fkIdItem) {
        $this->fkIdItem = $fkIdItem;
    }

    public function getNomeItem() {
        return $this->nome;
    }

    public function setNomeItem($nomeItem) {
        $this->nome = $nomeItem;
    }

}

?>
