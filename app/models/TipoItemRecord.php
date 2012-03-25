<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoItemRecord
 *
 * @author wallace
 */
class TipoItemRecord extends ManipulaBanco {
    
    private $tipoItem;
    public function listar(){
        $criteria = new TCriteria;
        $aux = $this->selecionarColecao($criteria);
        for ($i = 1; $i <= count($aux['IDTIPOITEM']); $i++) {
            $this->tipoItem[$i] = new TipoItens($aux['IDTIPOITEM'][$i], 
                                                $aux['DESCRICAO'][$i]);
        }
        return $this->tipoItem;
    }
    public function cadastrar($tipoItem){
        $dados['idTipoItem'] = $tipoItem['idTipoItem'];
        $dados['descricao'] = $tipoItem['descricao'];
        return $this->cadastrar($dados);
    }
}

?>
