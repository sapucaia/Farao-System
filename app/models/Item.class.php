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
    private $nome;

    public function __construct($idItem='', $fkIdItem='', $nome='') {
        $this->idItem = $idItem;
        $this->fkIdItem = $fkIdItem;
        $this->nome = $nome;
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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}

?>
