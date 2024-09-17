<?php
 
include_once "CLSCadastroProfessor.php";

$CadP = new CadastroProfessor;

$Nome_Professor                 = filter_input(INPUT_GET, "Nome_Professor", FILTER_SANITIZE_SPECIAL_CHARS);
$Data_Nascimento_Professor      = filter_input(INPUT_GET, "Data_Nascimento_Professor");
$CPF_Professor                  = filter_input(INPUT_GET, "CPF_Professor", FILTER_VALIDATE_INT);
$Email_Professor                = filter_input(INPUT_GET, "Email_Professor", FILTER_VALIDATE_EMAIL );
$Senha_Professor                = filter_input(INPUT_GET, "Senha_Professor");
$Celular_Professor              = filter_input(INPUT_GET, "Celular_Professor", FILTER_VALIDATE_EMAIL);
$CEP_Professor                  = filter_input(INPUT_GET, "CEP_Professor", FILTER_VALIDATE_EMAIL);
$Endereco_Professor             = filter_input(INPUT_GET, "Endereco_Professor");
$Bairro_Professor               = filter_input(INPUT_GET, "Bairro_Professor");
$Cidade_Professor               = filter_input(INPUT_GET, "Cidade_Professor");
$UF_Professor                   = filter_input(INPUT_GET, "UF_Professor");
$Endereco_Numero_Professor      = filter_input(INPUT_GET, "Endereco_Numero_Professor");
$Endereco_Complemento_Professor = filter_input(INPUT_GET, "Endereco_Complemento_Professor");



$CadP -> setNome_Professor($Nome_Professor);
$CadP -> setData_Nascimento_Professor($Data_Nascimento_Professor);
$CadP -> setCPF_Professor($CPF_Professor);
$CadP -> setEmail_Professor($Email_Professor);
$CadP -> setSenha_Professor($Senha_Professor);
$CadP -> setCelular_Professor($Celular_Professor);
$CadP -> setCEP_Professor($CEP_Professor);
$CadP -> setEndereco_Professor($Endereco_Professor);
$CadP -> setBairro_Professor($Bairro_Professor);
$CadP -> setCidade_Professor($Cidade_Professor);
$CadP -> setUF_Professor($UF_Professor);
$CadP -> setEndereco_Numero_Professor($Endereco_Numero_Professor);
$CadP -> setEndereco_Complemento_Professor($Endereco_Complemento_Professor);

if(isset($_GET["Solicitar"])){
    echo $CadP -> Solicitar();
}

else if(isset($_GET["Exibir"])){
    echo $CadP -> Exibir();
}