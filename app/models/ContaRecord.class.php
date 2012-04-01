<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaRecord
 *
 * @author wallace
 */
class ContaRecord extends ManipulaBanco {

    private $contas;

    public function listar() {
        $criteria = new TCriteria();
        $aux = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($aux['IDCONTA']); $i++) {
            $this->contas[$i] = new Conta($aux['IDCONTA'][$i],
                                          $aux['DATAVENCIMENTO'][$i],
                                          $aux['DATAPAGAMENTO'][$i],
                                          $aux['VALOR'][$i],
                                          $aux['DESCRICAO'][$i],
                                          $aux['STATUS'][$i]);
        }
        return $this->contas;
    }

    private function selecionarPorId($id) {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('idConta', '=', $id));
        $aux = $this->selecionarColecao($criteria);
        $conta = new Conta($aux['DATAVENCIMENTO'][1],
                           $aux['DATAPAGAMENTO'][1],
                           $aux['VALOR'][1],
                           $aux['DESCRICAO'][1],
                           $aux['STATUS'][1]);
        return $this->conta;
    }

    private function selecionarPorDataVencimento($dataVencimento) {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('dataVencimento', '=', $dataVencimento));
        $aux = $this->selecionarColecao($criteria);
        $conta = new Conta($aux['IDCONTA'][1],
                           $aux['DATAPAGAMENTO'][1],
                           $aux['VALOR'][1],
                           $aux['DESCRICAO'][1],
                           $aux['STATUS'][1]);
        return $this->conta;
    }

    private function selecionarPorDataPagamento($dataPagamento) {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('dataPagamento', '=', $dataPagamento));
        $aux = $this->selecionarColecao($criteria);
        $conta = new Conta($aux['IDCONTA'][1],
                           $aux['DATAVENCIMENTO'][1],
                           $aux['VALOR'][1],
                           $aux['DESCRICAO'][1],
                           $aux['STATUS'][1]);
        return $this->conta;
    }

    private function selecionarPorStatus($status) {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('status', 'LIKE', $status));
        $aux = $this->selecionarColecao($criteria);
        $conta = new Conta($aux['IDCONTA'][1],
                           $aux['DATAPAGAMENTO'][1],
                           $aux['DATAVENCIMENTO'][1],
                           $aux['VALOR'][1],
                           $aux['DESCRICAO'][1]);
        return $this->conta;
    }
    
    private function selecionarPorValor($valor) {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('valor', '=', $valor));
        $aux = $this->selecionarColecao($criteria);
        $conta = new Conta($aux['IDCONTA'][1],
                           $aux['DATAPAGAMENTO'][1],
                           $aux['DATAVENCIMENTO'][1],
                           $aux['STATUS'][1],
                           $aux['DESCRICAO'][1]);
        return $this->conta;
    }

    public function cadastrar($conta) {
        $dados['dataVencimento'] = $conta->getDataVencimento();
        $dados['dataPagamento'] = $conta->getDataPagamento();
        $dados['valor'] = $conta->getValor();
        $dados['descricao'] = $conta->getDescricao();
        $dados['status'] = $conta->getStatus();
        return $this->salvar($dados);
    }

}

?>
