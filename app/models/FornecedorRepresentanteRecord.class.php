<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FornecedorRepresentanteRecord
 *
 * @author wallace
 */
class FornecedorRepresentanteRecord extends ManipulaBanco {

    //put your code here

    public function cadastrar($dados) {
        return $this->salvar($dados);
    }

    public function editar($dados) {
 
    return $this->atualizar($dados, $dados['fkidrepresentante']);
    }

    public function selecionarIdFornecedorPorIdRepresentante($idRepresentante) {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('fkidrepresentante', '=', $idRepresentante));
        $aux = $this->selecionarColecao($criteria);
        $fornecedor = $aux['FKIDFORNECEDOR'][1];

        return $fornecedor;
    }

}

?>
