<?php
/*
Uma pessoa faz depósitos. E, ele faz pelo menos 1 depósito.

● Valor: rand(50,200). ok

● Continue enquanto rand(0,1) retornar 1. ok

● Conte os depósitos. ok 

● Some o dinheiro depositado.

● Exiba o total.

*/

$qtdDepositos = 0;
$somaValorDepositado = 0;


do {
    $valorDepositado = rand(50, 200);
    echo "Valor $valorDepositado depositado .<br> ";

    $qtdDepositos++;

    $somaValorDepositado += $valorDepositado;

    $continuar = rand(0, 1);
} while ($continuar == 1);

echo "Quantidade de depositos: $qtdDepositos <br>";
echo "Soma valor total: $somaValorDepositado <br>";