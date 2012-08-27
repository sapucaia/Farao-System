<?php

require '../../conf/lock.php';
$acao = $_GET['cadastrarFornecedor'];
$fornecedor = new FornecedorController;
$postFornecedor = $_POST;
switch ($acao) {
    case 'cadastrarFornecedor':
        $fornecedor->cadastrar($postFornecedor);
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FornecedorController
 *
 * @author wallace
 */
class FornecedorController {

    //put your code here
    private $fornecedor;
    private $fornecedorRecord;
    private $endereco;
    private $enderecoRecord;

    public function __construct() {
        $this->fornecedor = new Fornecedor;
        $this->fornecedorRecord = new FornecedorRecord;
        $this->endereco = new Endereco;
        $this->enderecoRecord = new EnderecoRecord;
    }

    public function cadastrar($postFornecedor) {
        $this->fornecedor->setNomeFantasia($postFornecedor['fornecedor']['nomeFantasia']);
        $this->fornecedor->setRazaoSocaial($postFornecedor['fornecedor']['razaoSocial']);
        $this->fornecedor->setCnpj($postFornecedor['fornecedor']['cnpj']);
        $this->endereco->setLogradouro($postFornecedor['endereco']['logradouro']);
        $this->endereco->setBairro($postFornecedor['endereco']['bairro']);
        $this->endereco->setCep($postFornecedor['endereco']['cep']);
        $this->endereco->setComplemento($postFornecedor['endereco']['complemento']);

        if ($this->fornecedorRecord->cadastrar($this->fornecedor)) {
            if ($this->enderecoRecord->cadastrar($this->endereco)) {
                addEndereco();
                //add apenas um endereco, atualizacaoes posteriores p\ varios enderecos!!!!!
            } else {
                
            }
        } else {
            
        }
    }

    public function addEndereco() {
        $fkIdFornecedor = $this->fornecedorRecord->ultimoId('fornecedor_idfornecedor_seq');
        $fkIdEndereco = $this->enderecoRecord->ultimoId('endereco_idendereco_seq');
        
        $this->fornecedor->setIdFornecedor($fkIdFornecedor);
        $this->endereco->setIdEndereco($fkIdEndereco);
        $this->fornecedor->addFornecedorEndereco($endereco);
        
        
    }

}

?>
