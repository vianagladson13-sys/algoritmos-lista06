<?php
// Quantidade de carros montados.
// Execute pelo menos 1 vez (do...while)
// contar quantos carros são vermelhos.
// somar o valor total dos carros vermelhos.

//Entradas - variaveis.

$qtdCarrosMontados = 0;
$qtdCarrosVermelhos = 0;
$somaVlrCarVerm = 0;
$CorCarroMontado = 0;
$valorCarroMontado = 0;
$continuar = 0;


do{
    $qtdCarrosMontados++;

  
    //Flag: 0-azul, 1-vermelho, 2-preto, 3-prata
    $CorCarroMontado = rand (0,3);
    $valorCarroMontado  = rand (70000,10000);
    
    echo("<strong><br> Cor do carro:</strong> $CorCarroMontado");
    echo("<strong><br> Valor do carro:</strong> $valorCarroMontado");


    if($CorCarroMontado== 1){
        $qtdCarrosVermelhos++;
        $somaVlrCarVerm = $somaVlrCarVerm + $valorCarroMontado;

    }
  //flag de saída : 0(F) ou 1(V)
  $continuar = rand(0, 1);

  echo("Deseja continuar: $continuar <br>");
  echo("<hr>");
  
} while ($continuar == 1);



echo ("<strong><br> Quantidade de carros vermelhos:</strong> $qtdCarrosVermelhos");
echo ("<strong><br> Valor total dos carros vermelhos: </strong>$somaVlrCarVerm");







?>