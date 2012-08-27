<?php

/**
 * Description of FonecedoresRecord
 *
 * @author wallace
 */
class FornecedorRecord extends ManipulaBanco {

    //put your code here

    private $fornecedores;

    public function listar() {
        $criteria = new TCriteria;
        $aux = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($aux['IDFORNECEDOR']); $i++) {
            $this->fornecedores[$i] = new Fornecedor($aux['IDFORNECEDOR'][$i], 
                                                     $aux['NOMEFANTASIA'][$i], 
                                                     $aux['CNPJ'][$i], 
                                                     $aux['RAZAOSOCIAL'][$i]);
        }
        return $this->fornecedores;
    }
    
    public function selecionarPorId($idFornecedor){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('idfornecedor', '=', $idFornecedor));
        $aux = $this->selecionarColecao($criteria);
        $fornecedor = new Fornecedor($aux['IDFORNECEDOR'][1],
                                     $aux['NOMEFANTASIA'][1],
                                     $aux['CNPJ'][1],
                                     $aux['RAZAOSOCIAL'][1]);
        return $fornecedor;
    }
    public function selecionarPorNomeFantasia($nomeFantasia){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('nomeFantasia', 'LIKE', $nomeFantasia));
        $aux = $this->selecionarColecao($criteria);
        $fornecedor = new Fornecedor($aux['IDFORNECEDOR'][1],
                                     $aux['NOMEFANTASIA'][1],
                                     $aux['CNPJ'][1],
                                     $aux['RAZAOSOCIAL'][1]);
        return $fornecedor;
    }
    public function selecionarPorCnpj($cnpj){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('cnpj', 'LIKE', $cnpj));
        $aux = $this->selecionarColecao($criteria);
        $fornecedor = new Fornecedor($aux['IDFORNECEDOR'][1],
                                     $aux['NOMEFANTASIA'][1],
                                     $aux['CNPJ'][1],
                                     $aux['RAZAOSOCIAL'][1]);
        return $fornecedor;
    }
    
    public function selecionarRazaoSocial($razaoSocial){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('razaoSocial', 'LIKE', $razaoSocial));
        $aux = $this->selecionarColecao($criteria);
        $fornecedor = new Fornecedor($aux['IDFORNECEDOR'][1],
                                     $aux['NOMEFANTASIA'][1],
                                     $aux['CNPJ'][1],
                                     $aux['RAZAOSOCIAL'][1]);
        return $fornecedor;
    }

    public function cadastrar($fornecedor) {
        $dados['idFornecedor'] = $fornecedor->getIdFornecedor();
        $dados['nomeFantasia'] = $fornecedor->getNomeFantasia();
        $dados['cnpj'] = $fornecedor->getCnpj();
        $dados['razaoSocial'] = $fornecedor->getRazaoSocial();
        $dados['enderecoFornecedor'] = $fornecedor->getEnderecoFornecedor();
        return $this->salvar($dados);
    }

}

?>
