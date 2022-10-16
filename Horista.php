<?php
require_once "Empregado.php";
Class Horista extends Empregado{
private $precohora;
private $horastrabalhadas;

public function __construct($novonome,$novosobrenome,$novocpf,$novoprecohora,$novohorastrabalhadas,$consulta){
    $this->nome = $novonome;
    $this->sobrenome = $novosobrenome;
    $this->cpf = $novocpf;
    $this->precohora = $novoprecohora;
    $this->horastrabalhadas = $novohorastrabalhadas;
    $this->consulta = $consulta;

}
public function getPrecohora(){
    return $this->precohora;
}
public function getHorastrabalhadas(){
    return $this->horastrabalhadas;
}
public function setPrecohora($novoprecohora){
    $this->precohora = $novoprecohora;
}
public function setHorastrabalhadas($novohorastrabalhadas){
    $this->horastrabalhadas = $novohorastrabalhadas;
}
public function CalcularPagamento(){
    if($this->consulta == "Horista"){ 
    return TRUE;  }
}





}