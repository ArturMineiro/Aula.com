<?php
$fatorial = 5;
if($fatorial > 0 ){
  $valor = $fatorial;  }
for($cont = $valor-1;$cont > 0;$cont--){
  $valor = $valor*$cont;
}  echo "!{$fatorial} = {$valor}";