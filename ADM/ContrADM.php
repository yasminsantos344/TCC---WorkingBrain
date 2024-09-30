<?php

include_once "CLSADM.php";

$ADM = new Administrador;

$Nome_ADM   = filter_input(INPUT_GET, "Nome_ADM");//, FILTER_VALIDATE_EMAIL);
$Email_ADM        = filter_input(INPUT_GET, "Email_ADM"); //FILTER_VALIDATE_EMAIL);
$Senha_ADM        = filter_input(INPUT_GET, "Senha_ADM");
$Celular_ADM    = filter_input(INPUT_GET, "Celular_ADM");



/*$Log -> setNome_ADM($Nome_ADM);
$Log -> setSenha_Aluno($Senha_Aluno);
$Log -> setEmail_Professor($Email_Professor);
$Log -> setSenha_Professor($Senha_Professor);*/

$CPF_Professor = filter_input(INPUT_GET, "CPF_Professor");



$ADM -> setCPF_Professor($CPF_Professor);

if(isset($_GET["Cadastrar"])){

    echo $ADM -> CadastroProfessor();
}

else if(isset($_GET["CadastroADM"])){

    echo $ADM -> CadastroADM();
}

else if(isset($_GET["RejeitarCadastro"])){

    echo $ADM -> RejeitarCadastro();
}

/*else if(ISSET($_GET["LoginADM"])){
    $Dados = $Log -> LoginADM();

    if(empty($Dados)){
        echo 'Preencha todos os campos!';

    }

    else{
        foreach($Dados as $Dd){
            //array
            if($Dd['Email_ADM'] == $Email_ADM && $Dd['Senha_ADM'] == $Senha_ADM){
                echo 'Sucesso' ;
            }
            
            else{
                echo "Email ou Senha incorretos!";
            }
            
        }
    }

    //echo $Log -> LoginAluno();
}*/