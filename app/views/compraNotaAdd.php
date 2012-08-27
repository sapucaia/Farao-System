<?php

require '../../conf/lock.php';

$compraRecord = new ComprasRecord();


echo 'Texto <br/>';
$compra = $compraRecord->getCompra(1);

$produtos = $compra->getProdutos();
//$r = new ProdutonotacomprasRecord();

//$produtos = $r->selecionarProdutosPorCompra(1);


echo $compra->getIdCompra() . '<br/>';


//$produtoRecord = new ProdutosRecord();

echo 'Texto 2 <br/>';

for($i=1; $i<=count($produtos);$i++){
  
  print_r($produtos[1]);

}
//$produto = $produtoRecord->getProduto(1);

//echo $produto->getNomeProduto() . '<br/>';

//echo $compra->addProdutoCompra($produto, 5);

?>
