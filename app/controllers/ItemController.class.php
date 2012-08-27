<?php
require '../../conf/lock.php';
$acao = $_GET['cadastrarItem'];
$postItem = $_POST;
$itemController = new ItemController;

switch (acao){
    case 'cadastrarItem':
        $itemController->cadastrar($postItem);
        break;
}


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemController
 *
 * @author wallace
 */
class ItemController {

    //put your code here
    private $item;
    private $itemRceord;
    private $tipoItem;
    private $tipoItemRceord;

    public function __construct() {
        $this->item = new Item;
        $this->itemRceord = new ItemRecord;
        $this->tipoItem = new TipoItem;
        $this->tipoItemRceord = new TipoItemRecord;
    }


    public function cadastrar($postItem){
        $this->item->setIdItem($postItem['item']['nomeItem']);
        
        $this->tipoItem->setDescricao($postItem['tipoItem']['descricao']);
        if($this->itemRceord->cadastrar($item)){
            if ($this->tipoItemRceord->cadastrar($tipoItem)){
                addFkTipoItem();
            }  else {
                echo 'Falha ao inserir tipo item';
            }
        }else{
            echo 'Falaha ao inserir item';
        }
    }
    
    public function addFkTipoItem(){
        $fkTipoItem = $this->itemRceord->ultimoId('item_iditem_seq');
        $this->tipoItem->setIdTipoItem($fkTipoItem);
        $this->item->addItemTipoItem($this->tipoItem);
        
    }
    

}




?>
