<?php

include_once "CLSCadastroAluno.php";

$CadA = new CadastroAluno;

//Aluno

$Nome_Aluno                 = filter_input(INPUT_GET, "Nome_Aluno", FILTER_SANITIZE_SPECIAL_CHARS);
$Data_Nascimento_Aluno      = filter_input(INPUT_GET, "Data_Nascimento_Aluno");
$CPF_Aluno                  = filter_input(INPUT_GET, "CPF_Aluno", FILTER_VALIDATE_INT);
$Email_Aluno                = filter_input(INPUT_GET, "Email_Aluno", FILTER_VALIDATE_EMAIL);
$Senha_Aluno                = filter_input(INPUT_GET, "Senha_Aluno");
$Celular_Aluno              = filter_input(INPUT_GET, "Celular_Aluno", FILTER_VALIDATE_INT);
$CEP_Aluno                  = filter_input(INPUT_GET, "CEP_Aluno", FILTER_VALIDATE_INT);
$Endereco_Aluno             = filter_input(INPUT_GET, "Endereco_Aluno");
$Bairro_Aluno               = filter_input(INPUT_GET, "Bairro_Aluno");
$Cidade_Aluno               = filter_input(INPUT_GET, "Cidade_Aluno");
$UF_Aluno                   = filter_input(INPUT_GET, "UF_Aluno");
$Endereco_Numero_Aluno      = filter_input(INPUT_GET, "Endereco_Numero_Aluno");
$Endereco_Complemento_Aluno = filter_input(INPUT_GET, "Endereco_Complemento_Aluno");

$CadA -> setNome_Aluno($Nome_Aluno);
$CadA -> setData_Nascimento_Aluno($Data_Nascimento_Aluno);
$CadA -> setCPF_Aluno($CPF_Aluno);
$CadA -> setEmail_Aluno($Email_Aluno);
$CadA -> setSenha_Aluno($Senha_Aluno);
$CadA -> setCelular_Aluno($Celular_Aluno);
$CadA -> setCEP_Aluno($CEP_Aluno);
$CadA -> setEndereco_Aluno($Endereco_Aluno);
$CadA -> setBairro_Aluno($Bairro_Aluno);
$CadA -> setCidade_Aluno($Cidade_Aluno);
$CadA -> setUF_Aluno($UF_Aluno);
$CadA -> setEndereco_Numero_Aluno($Endereco_Numero_Aluno);
$CadA -> setEndereco_Complemento_Aluno($Endereco_Complemento_Aluno);

if(isset($_GET["Matricula"])){
    echo $CadA -> Matricula();
}

else if(isset($_GET["Exclusao"])){
    echo $CadA -> Exclusao();
}