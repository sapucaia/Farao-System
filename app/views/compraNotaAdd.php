<?php

require '../../conf/lock.php';

$compraRecord = new ComprasRecord();


echo 'Texto <br/>';
$compra = $compraRecord->getCompra(1);

echo $compra->getIdCompra() . '<br/>';

$produtoRecord = new ProdutosRecord();
echo 'Texto 2 <br/>';
//$produto = $produtoRecord->getProduto(1);

//echo $produto->getNomeProduto() . '<br/>';

//echo $compra->addProdutoCompra($produto, 3);

?>
