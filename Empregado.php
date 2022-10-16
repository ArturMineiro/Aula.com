<?php
Class Empregado{
protected $nome;
protected $sobrenome;
protected $cpf;
protected $consulta;

public function getNome(){
    return $this->nome;
}
public function getSobrenome(){
    return $this->sobrenome;
}
public function getCpf(){
    return $this->cpf;
}
public function getConsulta(){
    return $this->consulta;
}
public function setNome($novonome){
    $this-> nome = $novonome;
}
public function setSobrenome($novosobrenome){
    $this->sobrenome = $novosobrenome; 
}
public function setCpf($novocpf){
    $this->cpf = $novocpf;
}
public function setConsulta($novoconsulta){
    $this->consulta = $novoconsulta;
}












}