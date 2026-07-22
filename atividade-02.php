<?php
/*
Um jogador joga videogame. E ele joga pelo menos uma vez.

● Gere a pontuação com rand(0,100).

● Gere $continuar = rand(0,1).

● Conte as partidas.

● Some a pontuação.

● Mostre a média ao final.

*/

$jogador = "Gladson";
$pontuacao = 0;
$qtdPartidas = 0;
$somaPontuacao = 0;
$media = 0;

do {
    $pontuacao = rand(0, 100);

    $qtdPartidas++;

    $somaPontuacao += $pontuacao;

    echo "Partida $qtdPartidas - Pontuação: $pontuacao pontos <br>";

    $continuar = rand(0, 1);
} while ($continuar == 1);


$media = $somaPontuacao / $qtdPartidas;

echo "<hr>";
echo "<strong> <br> Jogador:</strong> $jogador ";
echo "<strong> <br> Quantidade de partidas:</strong> $qtdPartidas";
echo "<strong> <br> Total de pontos:</strong> $somaPontuacao ";
echo "<strong> <br> Media de pontos:</strong>" . number_format($media, 2, ",", ".");
