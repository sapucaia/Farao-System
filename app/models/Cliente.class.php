<?php

class Cliente {

    private $idCliente;
    private $nomeCliente;
    private $emailCliente;
    private $clienteTelefoneRecord;
    private $clienteEnderecoRecord;

    public function __construct($idCliente = '', $nomeCliente = '', $emailCliente = '') {
        $this->idCliente = $idCliente;
        $this->nomeCliente = $nomeCliente;
        $this->emailCliente = $emailCliente;
        $this->clienteTelefoneRecord = new ClienteTelefoneRecord;
        $this->clienteEnderecoRecord = new ClienteEnderecoRecord;
    }

    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    public function setEmailCliente($emailCliente) {
        $this->emailCliente = $emailCliente;
    }

    public function getNomeCliente() {
        return $this->nomeCliente;
    }

    public function getEmailCliente() {
        return $this->emailCliente;
    }

    public function addTelefone($telefone) {
        $dados['fkidcliente'] = $this->getIdCliente();
        $dados['fkidtelefone'] = $telefone->getIdTelefone();
        return $this->clienteTelefoneRecord->cadastrar($dados);
    }
    public function addClienteEndereco($endereco) {
        $dados['fkidcliente'] = $this->getIdCliente();
        $dados['fkidendereco'] = $telefone->getIdEndereco();
        return $this->clienteEnderecoRecordRecord->cadastrar($dados);
    }

    public function getTelefones(){
      return $this->clienteTelefoneRecord->selecionarTelefonesPorCliente($this->idCliente);
    }

}

?>

