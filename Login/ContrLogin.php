<?php

include_once "CLSLogin.php";

$Log = new Login;

$Email_Aluno        = filter_input("GET", "Email_Aluno", FILTER_VALIDATE_EMAIL);
$Senha_Aluno        = filter_input("GET", "Senha_Aluno",);
$Email_Professor    = filter_input("GET", "Email_Professor", FILTER_VALIDATE_EMAIL);
$Senha_Professor    = filter_input("GET", "Senha_Professor",);


$Log -> setEmail_Aluno($Email_Aluno);
$Log -> setSenha_Aluno($Senha_Aluno);
$Log -> setEmail_Professor($Email_Professor);
$Log -> setSenha_Professor($Senha_Professor);

if(ISSET($_GET["LoginAluno"])){
    echo $Log -> LoginAluno();
}

else if(ISSET($_GET["LoginProfessor"])){
    echo $Log -> LoginProfessor();
}