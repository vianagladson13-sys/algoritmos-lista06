<?php
/*
A loja possui 20 produtos. Não se sabe quantas vezes vai repetir.
● Venda: rand(1,4)
● Enquanto houver estoque.
● Conte as vendas.
● Some os itens vendidos.
*/

$estoque = 20;
$qtdVendas = 0;
$somaItensVendidos = 0;

while ($estoque > 0) {

    $vendas = rand(1,4);

    // Evita vender mais do que existe no estoque
    if ($vendas > $estoque) {
        $vendas = $estoque;
    }

    echo "Venda: $vendas produto(s)<br>";

    $somaItensVendidos += $vendas;
    $estoque -= $vendas;
    $qtdVendas++;
}

echo "<hr>";
echo "Quantidade de vendas: $qtdVendas <br>";
echo "Total de itens vendidos: $somaItensVendidos <br>";
echo "Estoque restante: $estoque";
?>