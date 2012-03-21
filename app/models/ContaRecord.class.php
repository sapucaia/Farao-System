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

    public function listar() {
        $criteria = new TCriteria();
        return $this->selecionarColecao($criteria);
    }

    public function selecionarPorId($id) {
        $criteria = new TCriteria();
        $criteria->add(new TFilter('idConta', '=', $id));
        return $this->selecionarColecao($criteria);
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
