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
class ItemRecord extends ManipulaBanco {

//put your code here

    private $itens;

    public function listar() {
        $criteria = new TCriteria;
        $aux = $this->selecionarColecao($criteria);
        for ($i = 0; $i <= count($aux['IDITEM']); $i++) {
            $itens[$i] = new Item($aux['IDITEM'][$i], 
                                  $aux['FKIDITEM'][$i], 
                                  $aux['NOMEITEM'][$i]);
        }
        return $this->itens;
    }
    
    public function selecionarPorId($idItem){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('idItem', '=', $idItem));
        $aux = $this->selecionarColecao($criteria);
        $item = new Item($aux['FKIDITEM'], 
                         $aux['NOMEITEM']);
        return $item;
        
    }
    public function selecionarPorNomeItem($nomeItem){
        $criteria = new TCriteria;
        $criteria->add(new TFilter('nomeItem', 'LIKE', $nomeItem));
        $aux = $this->selecionarColecao($criteria);
        $item = new Item($aux['IDITEM'], 
                         $aux['FKIDITEM']);
        return $item;
        
    }

    public function cadastrar($item) {
        $dados['idItem'] = $item['idItem'];
        $dados['fkIdItem'] = $item['fkIdItem'];
        $dados['nome'] = $item['nome'];
        return $this->salvar($dados);
    }

}

?>
