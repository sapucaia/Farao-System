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
//    private $idConta;
//    private $dataVencimento;
//    private $dataPagamento;
//    private $valor;
//    private $descricao;
//    private $status;

    private $conta;
    public function listar() {
        $criteria = new TCriteria();
        $aux = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($aux['IDCONTA']); $i++) {
            $this->conta[$i] = new Contas($aux['DATAVENCIMENTO'][$i],
                                         $aux['DATAPAGAMENTO'][$i],
                                         $aux['VALOR'][$i],
                                         $aux['DESCRICAO'][$i],
                                         $aux['STATUS'][$i]);
            
        }
    }

//    public function selecionarPorId($id) {
//        $criteria = new TCriteria();
//        $criteria->add(new TFilter('idConta', '=', $id));
//        return $this->selecionarColecao($criteria);
//    }

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
