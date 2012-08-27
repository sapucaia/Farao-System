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
            $this->tipoItem[$i] = new TipoItem($aux['IDTIPOITEM'][$i], 
                                                $aux['DESCRICAO'][$i]);
        }
        return $this->tipoItem;
    }
    
    public function selecionarPorId($idTipoItem){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('idTipoItem', '=', $idTipoItem));
        $aux = $this->selecionarColecao($criteria);
        $tipoItem = new TipoItem($aux['DESCRICAO']);
        return $tipoItem;
        
    }
    public function selecionarPorDescricao($descricao){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('descricao', 'LIKE', $descricao));
        $aux = $this->selecionarColecao($criteria);
        $tipoItem = new TipoItem($aux['IDTIPOITEM']);
        return $tipoItem;
        
    }
    
    public function cadastrar($tipoItem){
        $dados['descricao'] = $tipoItem['descricao'];
        return $this->cadastrar($dados);
    }
}

?>
