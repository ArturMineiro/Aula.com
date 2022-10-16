<?php
Class Pessoa{
protected $nome;
protected $sobrenome;
protected $cpf;
protected $telefone;
//getters abaixo
public function getNome(){
    return $this-> nome;
}
public function getSobrenome(){  
    return $this->sobrenome;
  }
public function getCpf(){
    return $this->cpf;
}
public function getTelefone(){
    return $this->telefone;
}
//setters abaixo

public function setNome($novonome){
    $this->nome = $novonome;
}
public function setSobrenome($novosobrenome){
    $this->sobrenome = $novosobrenome;
}
public function setCpf($novocpf){
    $this->cpf = $novocpf;
}
public function setTelefone($novotelefone){
    $this->telefone = $novotelefone;
}

//metodo
public function consultarDados(){

}

}