<?php
require_once "Pessoa.php";
Class Aluno extends Pessoa{
private $matricula;
private $curso;
private $situacao;
 //constructor
public function __construct($nome,$sobrenome,$cpf,$matricula,$curso,$situacao){
$this->nome = $novonome;
$this->sobrenome = $novosobrenome;
$this->cpf = $novocpf;
$this->matricula = $novomatricula;
$this->curso = $novocurso;
$this->situacao = $novosituacao;
}
//getters
public function getMatricula(){
    return $this->matricula; 
}
public function getCurso(){
    return $this->curso;
}
public function getSituacao(){
    return $this->situacao;
}
//setters
public function setMatricula($novomatricula){
    $this->matricula = $novomatricula;
}
public function setCurso($novocurso){
    $this->curso = $novocurso;
}
public function setSituacao($novosituacao){
    $this->situacao = $novosituacao;
}

public function ConsultaSituacao(){

}
 }