<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
            <title>Cadastro de Empregados</title>
        </head>
        <body>
<?php
require_once "Empregado.php";
require_once "Assalariado.php";
require_once "Comissionado.php";
require_once "Horista.php";


$cadastrofuncionario = new Empregado($_POST["novonome"],$_POST["novosobrenome"],$_POST["novocpf"],$_POST["consulta"]);
$cadastrofuncionario->getNome();
$cadastrofuncionario->getSobrenome();
$cadastrofuncionario->getCpf();

$cadastrofuncionario = new Assalariado($_POST["novonome"],$_POST["novosobrenome"],$_POST["novocpf"],$_POST["novosalario"],$_POST["consulta"]);
$cadastrofuncionario->getNome();
$cadastrofuncionario->getSobrenome();
$cadastrofuncionario->getCpf();
$cadastrofuncionario->getSalario();
 if($cadastrofuncionario->Consultar()){  
echo "Nome: ". $cadastrofuncionario->getNome()."<br>";
echo "Sobrenome: ". $cadastrofuncionario->getSobrenome()."<br>";
echo "CPF: ". $cadastrofuncionario->getCpf()."<br>";
echo "Salário do funcionario: ". number_format($cadastrofuncionario->getSalario(),2,',','.')."<br>";
  }
$cadastrofuncionario = new Comissionado($_POST["novonome"],$_POST["novosobrenome"],$_POST["novocpf"],$_POST["novototalvendas"],$_POST["novotxcomissao"],$_POST["consulta"]);
$cadastrofuncionario->getNome();
$cadastrofuncionario->getSobrenome();
$cadastrofuncionario->getCpf();
$cadastrofuncionario->getTotalvendas();
$cadastrofuncionario->getTxcomissao();
if($cadastrofuncionario->CalcularVencimento()){
    echo "Nome: ". $cadastrofuncionario->getNome()."<br>";
    echo "Sobrenome: ".$cadastrofuncionario->getSobrenome()."<br>";
    echo "CPF: ".$cadastrofuncionario->getCpf()."<br>";
    echo "Vendas realizadas: ". $cadastrofuncionario->getTotalvendas()."<br>";
    echo "Valor por comissão: ". number_format($cadastrofuncionario->getTxcomissao(),2,',','.'). "<Br>";
    echo "O comissionado ganha: ".number_format($cadastrofuncionario->getTxcomissao()*$cadastrofuncionario->getTotalvendas(),2,',','.');
    

}

$cadastrofuncionario = new Horista($_POST["novonome"],$_POST["novosobrenome"],$_POST["novocpf"],$_POST["novoprecohora"],$_POST["novohorastrabalhadas"],$_POST["consulta"]);
$cadastrofuncionario->getNome();
$cadastrofuncionario->getSobrenome();
$cadastrofuncionario->getCpf();
$cadastrofuncionario->getPrecohora();
$cadastrofuncionario->getHorastrabalhadas();
if($cadastrofuncionario->CalcularPagamento()){
    echo "Nome: ". $cadastrofuncionario->getNome()."<br>";
    echo  "Sobrenome: ". $cadastrofuncionario->getSobrenome()."<br>";
    echo "CPF: ". $cadastrofuncionario->getCpf()."<br>";
    echo "Valor da hora: ".number_format($cadastrofuncionario->getPrecohora(),2,',','.'). "R$<BR>";
    echo "Horas trabalhadas:". number_format($cadastrofuncionario->getHorastrabalhadas(),2,':'). " Horas <Br>";
    echo "O Horista ganhou:". number_format($cadastrofuncionario->getPrecohora()*$cadastrofuncionario->getHorastrabalhadas(),2,',','.'); 
}
?>

</body>
</html>