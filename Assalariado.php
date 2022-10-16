<?php
require_once "Empregado.php";
Class Assalariado extends Empregado {
private $salario;

public function  __construct($novonome,$novosobrenome,$novocpf,$novosalario,$consulta){
     $this->nome = $novonome;
        $this->sobrenome = $novosobrenome;
        $this->cpf = $novocpf;
        $this->salario = $novosalario;
        $this->consulta = $consulta;
}
public function getSalario(){
return $this->salario;
}
public function setSalario($novosalario){
    $this->salario = $novosalario;
}

public function Consultar(){
    if($this->consulta=="Assalariado"){
        return TRUE;
    }
    
}


}
