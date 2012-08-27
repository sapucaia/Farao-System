<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conta
 *
 * @author wallace
 */
class Conta {

    private $idConta;
    private $dataVencimento;
    private $dataPagamento;
    private $valor;
    private $descricao;
    private $status;

    public function __construct($dataVencimento='', $dataPagamento='', $valor='', $descricao='', $status='') {
        $this->dataVencimento = $dataVencimento;
        $this->dataPagamento = $dataPagamento;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->status = $status;
    }

    public function getIdConta() {
        return $this->idConta;
    }

    public function setIdConta($idConta) {
        $this->idConta = $idConta;
    }

    public function getDataVencimento() {
        return $this->dataVencimento;
    }

    public function setDataVencimento($dataVencimento) {
        $this->dataVencimento = $dataVencimento;
    }

    public function getDataPagamento() {
        return $this->dataPagamento;
    }

    public function setDataPagamento($dataPagamento) {
        $this->dataPagamento = $dataPagamento;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}

?>
