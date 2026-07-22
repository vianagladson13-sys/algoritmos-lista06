<?php
//Pedidos realizados
$continuar = 0;
$qtdPedidos = 0;


do{
$qtdPedidos++;
echo("Pedido número : $qtdPedidos");

//Flag: 0- se nao deseja comprar novamente.
//Flag: 1 se deseja continuar comprando.

$continuar = rand(0,1);

if($continuar == true){
    echo("O cliente decidiu fazer outro pedido. <br>");
}else{
    echo ("O cliente decidiu encerrar as compras. <br>");
}
echo ("<hr>");

}while($continuar == true);

//Quantas vendas foram realizadas?
echo (" Foram realizadas: $qtdPedidos");



?>