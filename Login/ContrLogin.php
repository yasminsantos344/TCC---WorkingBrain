<?php

include_once "CLSLogin.php";

$Log = new Login;

$Email_Aluno        = filter_input(INPUT_GET, "Email_Aluno"); //FILTER_VALIDATE_EMAIL);
$Senha_Aluno        = filter_input(INPUT_GET, "Senha_Aluno");
$Email_Professor    = filter_input(INPUT_GET, "Email_Professor");//, FILTER_VALIDATE_EMAIL);
$Senha_Professor    = filter_input(INPUT_GET, "Senha_Professor");


$Log -> setEmail_Aluno($Email_Aluno);
$Log -> setSenha_Aluno($Senha_Aluno);
$Log -> setEmail_Professor($Email_Professor);
$Log -> setSenha_Professor($Senha_Professor);

if(ISSET($_GET["LoginAluno"])){
    $Dados = $Log -> LoginAluno();

    if(empty($Dados)){
        echo 'Preencha todos os campos!';

    }

    else{
        foreach($Dados as $Dd){
            //array
            if($Dd['Email_Aluno'] == $Email_Aluno && $Dd['Senha_Aluno'] == $Senha_Aluno){
                echo 'Sucesso' ;

                session_start();
                $_SESSION['Email_Aluno'] = $Email_Aluno;
                $_SESSION['Senha_Aluno'] = $Senha_Aluno;
            }
            
            else{
                echo "Email ou Senha incorretos!";
                unset ($_SESSION['Email_Aluno']);
                unset ($_SESSION['Senha_Aluno']);
            }
            
        }
    }

    //echo $Log -> LoginAluno();
}

else if(ISSET($_GET["LoginProfessor"])){

    $Dados = $Log -> LoginProfessor();
    

    if(empty($Dados)){
        echo "Usuário não encontrado.";

    }

    else{
        foreach($Dados as $Dd){
            //array
            if($Dd['Email_Professor'] == $Email_Professor && $Dd['Senha_Professor'] == $Senha_Professor){
                echo "sucesso";

                session_start();
                $_SESSION['Email_Professor'] = $Email_Professor;
                $_SESSION['Senha_Professor'] = $Senha_Professor;
            }
            
            else{
                echo "Email ou Senha incorretos!";
                unset ($_SESSION['Email_Professor']);
                unset ($_SESSION['Senha_Professor']);
            }
            
        }
    }
}

else if(ISSET($_GET["RecuperarA"])){
    echo $Log -> recuperacaoAluno();
}

else if(ISSET($_GET["RecuperarP"])){
    echo $Log -> recuperacaoProfessor();
}