<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endereco
 *
 * @author wallace
 */
class Endereco {
    private $idEndereco;
    private $logradouro;
    private $fkIdTipoLogradouro;
    private $bairro;
    private $cep;
    private $complemento;
    private $fkIdCidade;
    
   public function __construct($idEndereco = '', $logradouro = '', $fkIdTipoLogradouro = '', $bairro = '', $cep = '', $complemento = '', $fkIdCidade = ''){
        $this->idEndereco = $idEndereco;
        $this->logradouro = $logradouro;
        $this->fkIdTipoLogradouro = $fkIdTipoLogradouro;
        $this->bairro = $bairro;
        $this->cep = $cep;
        $this->complemento = $complemento;
        $this->fkIdCidade = $fkIdCidade;
    }
    
    public function getIdEndereco() {
        return $this->idEndereco;
    }

    public function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    public function getFkIdTipoLogradouro() {
        return $this->fkIdTipoLogradouro;
    }

    public function setFkIdTipoLogradouro($fkIdTipoLogradouro) {
        $this->fkIdTipoLogradouro = $fkIdTipoLogradouro;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getFkIdCidade() {
        return $this->fkIdCidade;
    }

    public function setFkIdCidade($fkIdCidade) {
        $this->fkIdCidade = $fkIdCidade;
    }
}

?>
