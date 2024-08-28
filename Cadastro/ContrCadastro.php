<?php
 
include_once "CLSCadastro.php";

$Cad = new Cadastro;

//Aluno

$Nome_Aluno = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$Data_Nascimento_Aluno = filter_input(INPUT_GET, "nascimento");
$CPF_Aluno = filter_input(INPUT_GET, "cpf", FILTER_VALIDATE_INT);
$Email_Aluno = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
$Senha_Aluno = filter_input(INPUT_GET, "senha");
$Celular_Aluno = filter_input(INPUT_GET, "celular", FILTER_VALIDATE_INT);
$CEP_Aluno = filter_input(INPUT_GET, "cep", FILTER_VALIDATE_INT);
$Endereco_Numero_Aluno = filter_input(INPUT_GET, "numero_Endereco");
$Endereco_Complemento_Aluno = filter_input(INPUT_GET, "complemento");
$botao = filter_input(INPUT_GET, "botao");

$Cad -> setNome_Aluno($Nome_Aluno);
$Cad -> setData_Nascimento_Aluno($Data_Nascimento_Aluno);
$Cad -> setCPF_Aluno($CPF_Aluno);
$Cad -> setEmail_Aluno($Email_Aluno);
$Cad -> setSenha_Aluno($Senha_Aluno);
$Cad -> setCelular_Aluno($Celular_Aluno);
$Cad -> setCEP_Aluno($CEP_Aluno);
$Cad -> setEndereco_Numero_Aluno($Endereco_Numero_Aluno);
$Cad -> setEndereco_Complemento_Aluno($Endereco_Complemento_Aluno);


//Professor

$Nome_Professor                 = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$Data_Nascimento_Professor      = filter_input(INPUT_GET, "nascimento");
$CPF_Professor                  = filter_input(INPUT_GET, "cpf", FILTER_VALIDATE_INT);
$Email_Professor                = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL );
$Senha_Professor                = filter_input(INPUT_GET, "senha");
$Celular_Professor              = filter_input(INPUT_GET, "celular", FILTER_VALIDATE_EMAIL);
$CEP_Professor                  = filter_input(INPUT_GET, "cep", FILTER_VALIDATE_EMAIL);
$Endereco_Numero_Professor      = filter_input(INPUT_GET, "numero_Endereco");
$Endereco_Complemento_Professor = filter_input(INPUT_GET, "complemento");
$botao                          = filter_input(INPUT_GET, "botao");


$Cad -> setNome_Professor($Nome_Professor);
$Cad -> setData_Nascimento_Professor($Data_Nascimento_Professor);
$Cad -> setCPF_Professor($CPF_Professor);
$Cad -> setEmail_Professor($Email_Professor);
$Cad -> setSenha_Professor($Senha_Professor);
$Cad -> setCelular_Professor($Celular_Professor);
$Cad -> setCEP_Professor($CEP_Professor);
$Cad -> setEndereco_Numero_Professor($Endereco_Numero_Professor);
$Cad -> setEndereco_Complemento_Professor($Endereco_Complemento_Professor);


if($botao == "matricular"){
    echo $Cad -> Matricula();
}

else if($botao == "solicitar"){
    echo $Cad -> Solicitar();
}

else if($botao == "cadastrar"){
    echo $Cad -> Cadastrar();
}