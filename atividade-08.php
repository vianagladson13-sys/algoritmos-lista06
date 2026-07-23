<?php
/*A loja possui 20 produtos. Não se sabe quantas vezes vai repetir.
● Venda: rand(1,4)
● Enquanto houver estoque.
● Conte as vendas.
● Some os itens vendidos.

*/
$estoque = 20;
$qtdVendas = 0;
$somaItensVendidos = 0;

do{    
    $vendas = rand(1,4);
    echo "Quantidade de vendas: $vendas <br>";
   
    $somaItensVendidos +=

    $qtdVendas++;



} while ($estoque < 0);

echo "Quantidade de vendas: $qtdVendas<br>";
echo "Soma dos itens: $somaItensVendidos<br>";

?>