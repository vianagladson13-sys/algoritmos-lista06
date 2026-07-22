<?php
/*
Clientes dão notas de 1 a 5. Não se sabe quantas vezes e precisa informar ao
menos 1.

● Nota: rand(1,5).
● Continue conforme rand(0,1).
● Conte as avaliações.
● Some as notas.

● Calcule a média.
*/


$qtdAvaliacao = 0;
$somaDasNotas = 0;

do {
    $Nota = rand(1, 5);
    echo "Nota: $Nota <br>";


    $somaDasNotas += $Nota;

    $qtdAvaliacao++;

    $continuar = rand(0, 1);
} while ($continuar == 1);

$media = $somaDasNotas / $qtdAvaliacao;

echo "<br>======== RESULTADOS ========<br>";
echo "Quantidade de avaliações: $qtdAvaliacao<br>";
echo "Soma das notas: $somaDasNotas<br>";
echo "Média das avaliações: $media " ;

