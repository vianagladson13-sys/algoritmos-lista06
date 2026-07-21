<?php
//login e senha

$loginRealizado = 0;
$tentativas = 0;

while ($loginRealizado == 00 && $tentativas<2){
    echo("<br> login realizado: $loginRealizado<br>");
    echo("<br> tentativas: $tentativas<br>");
   
    $loginRealizado = rand (0,1); // o- dados incorretos e 1-corretos

    if($loginRealizado ==1){
        echo(" logou! ");
    
    }else {
        echo(" Tente novamente ");
    }

    $tentativas++;
}

if($loginRealizado == 0){
    echo ("<br> Numero maximo de tentativas atingido.");
}

?>