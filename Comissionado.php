<?php
require_once "Empregado.php";
class Comissionado extends Empregado{
private $totalvendas;
private $txcomissao;

public function __construct($novonome,$novosobrenome,$novocpf,$novototalvendas,$novotxcomissao,$consulta){ 
        $this->nome = $novonome;
        $this->sobrenome = $novosobrenome;
        $this->cpf = $novocpf;
        $this->totalvendas = $novototalvendas;
        $this->txcomissao = $novotxcomissao;
        $this->consulta = $consulta;
}
public function getTotalvendas(){
return $this->totalvendas;

}
public function getTxcomissao(){
return $this->txcomissao;
}
public function setTotalvendas($novototalvendas){
    $this->totalvendas = $novototalvendas;
}
public function setTxcomissao($novotxcomissao){
    $this->txcomissao = $novotxcomissao;
}

public function CalcularVencimento(){
if($this->consulta == "Comissionado"){  
return TRUE;
  }
}




}