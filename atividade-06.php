<?php
/*
Enquanto o login não acontecer. Não se sabe quantas vezes vai repetir.
● rand(0,1)
● Conte as tentativas.
● Máximo de 5 tentativas.
*/

$login = 0;
$qtdTentativas = 0;

while ($login == 0 && $qtdTentativas < 5) {

    $login = rand(0,1);
    $qtdTentativas++;

    echo "Tentativa $qtdTentativas: Login = $login <br>";
}

echo "<hr>";

if ($login == 1) {
    echo "Login realizado com sucesso!<br>";
} else {
    echo "Número máximo de tentativas atingido.<br>";
}

echo "Total de tentativas: $qtdTentativas";