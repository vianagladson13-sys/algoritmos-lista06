<?php
/*
Enquanto o total for menor que R$500. Não se sabe quantas vezes vai repetir.
● Depósito: rand(20,100)
● Conte os depósitos.
● Some o dinheiro.

*/
$qtdDepositos = 0;
$somaDinheiro = 0;

do{
    $Deposito = rand(20,100);
    echo "Depósito: R$ $Deposito <br>";


    $somaDinheiro += $Deposito;

    $qtdDepositos++;

} while ($somaDinheiro < 500);

echo "Quantidade de depositos: $qtdDepositos<br>";
echo "Soma total dos valores: $somaDinheiro<br>";

?>