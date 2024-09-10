<?php
 
include_once "CLSCadastroProfessor.php";

$CadP = new CadastroProfessor;

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


$CadP -> setNome_Professor($Nome_Professor);
$CadP -> setData_Nascimento_Professor($Data_Nascimento_Professor);
$CadP -> setCPF_Professor($CPF_Professor);
$CadP -> setEmail_Professor($Email_Professor);
$CadP -> setSenha_Professor($Senha_Professor);
$CadP -> setCelular_Professor($Celular_Professor);
$CadP -> setCEP_Professor($CEP_Professor);
$CadP -> setEndereco_Numero_Professor($Endereco_Numero_Professor);
$CadP -> setEndereco_Complemento_Professor($Endereco_Complemento_Professor);

if(isset($_GET["Cadastrar"])){
    echo $CadP -> Cadastrar();
}