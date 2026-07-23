<?php
/*
Enquanto o total for menor que R$500. Não se sabe quantas vezes vai repetir.
● Depósito: rand(20,100)
● Conte os depósitos.
● Some o dinheiro.
*/

$qtdDepositos = 0;
$somaDinheiro = 0;

while ($somaDinheiro < 500) {

    $deposito = rand(20,100);
    echo "Depósito: R$ $deposito <br>";

    $somaDinheiro += $deposito;
    $qtdDepositos++;
}

echo "<hr>";
echo "Quantidade de depósitos: $qtdDepositos <br>";
echo "Soma total dos valores: R$ $somaDinheiro";
?>