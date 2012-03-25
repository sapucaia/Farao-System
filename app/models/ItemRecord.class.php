<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemRecord
 *
 * @author wallace
 */
class ItemRecord extends ManipulaBanco{
//put your code here
public function listar(){
    $criteria = new TCriteria;
    return $this->selecionarColecao($criteria);
    }
    
    public function cadastrar($item){
        $dados['idItem'] = $item['idItem'];
        $dados['fkIdItem'] = $item['fkIdItem'];
        $dados['nome'] = $item['nome'];
        return $this->salvar($dados);
    }


}
?>
