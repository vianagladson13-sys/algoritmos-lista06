<?php

//contador / iterrador
$i = 0; //iniciação
$nota = 0;
$contAprovados = 0;
$contReprovados = 0;



while ($i <= 2) {
    echo ("<br> i : " . $i . "<br");
    $nota = rand(0, 10);
    if ($nota > 6) {
        echo ("<br> APROVADO <br>");
        $contAprovados++;
    } else {
        echo ("<br> REPROVADO <br>");
        $contReprovados++;
    }
    $i++;
}

echo "<br><b> * Fim do laço de repetição * </b><br>";
echo("<br>Quantidade de aprovados: $contAprovados");
echo("<br>Quantidade de reprovados: $contReprovados");
