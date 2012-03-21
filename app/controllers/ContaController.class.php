<?php

require '../../conf/lock.php';
$acao = $_GET['acao'];
$contaController = new ContaController;
$postConta = $_POST;

switch ($acao) {
    case 'cadastrarConta':
        $contaController->cadastrar($postConta);
}

class ContaController {

    //put your code here
    private $conta;
    private $contaRecord;

    public function __construct() {
        $this->conta = new Conta;
        $this->contaRecord = new ContaRecord;
    }

    public function cadastrar($postConta) {
        $this->conta->setDataPagamento($postConta['dataPagamento']);
        $this->conta->setDataVencimento($postConta['dataVencimento']);
        $this->conta->setDescricao($postConta['descricao']);
        $this->conta->setStatus($postConta['status']);
        $this->conta->setValor($postConta['valor']);

        if ($this->contaRecord->cadastrar($this->conta))
            echo 'Sucesso Total';
        else
            echo 'Falhou o cadastro de conta';
    }

}
?>
