<?php
/*
Um carro recebe combustível. Pelo menos uma vez é realizado o abastecimento
● Litros: rand(5,15).
● Continue conforme rand(0,1).
● Conte os abastecimentos.
● Some os litros abastecidos.
*/

$qtdAbastacimentos = 0;
$somaLitrosAbastecidos = 0;

do {
    $Litros = rand(5, 15);
    echo "litros abastecidos: $Litros <br>";



    $somaLitrosAbastecidos += $Litros;

    $qtdAbastacimentos++;




    $continuar = rand(0, 1);
} while ($continuar == 1);

echo "Soma dos litros abastecidos: $somaLitrosAbastecidos <br>";
echo "Quantidade de abastecimentos: $qtdAbastacimentos<br>";
