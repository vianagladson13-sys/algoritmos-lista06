<?php
/*
Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.

● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.

● Mostre:
○ valor de cada produto;
○ quantidade de produtos;
○ total da compra.

*/

$compras = 0;
$Produto = 0;

do {

    $ValorProduto = rand(10,50);

    echo "Produto " . ($Produto + 1) . ": R$ $ValorProduto <br>";

    $compras += $ValorProduto;
    $Produto++;

    $continuar = rand(0,1);

} while ($continuar == 1);

echo "<hr>";
echo "Quantidade de produtos: $Produto <br>";
echo "Total da compra: R$ $compras";



?>