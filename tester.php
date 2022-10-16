<?php
//criar um sistema de boate masculino e feminimo, feminio paga meio e se for menor que 18 anos n entra
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$entrada = 50;
if($sexo == "M" and $idade>=18){
    echo "pode entrar". "e paga $entrada";
}else if($sexo == "F" and $idade>=18){
    echo "pode entrar, voce paga meia". $entrada/2;
}else{
    echo"voce não pode entrar";
}
