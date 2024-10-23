<?php

include_once "CLSADM.php";

$ADM = new Administrador;

$Nome_ADM              = filter_input(INPUT_GET, "Nome_ADM");
$Email_ADM             = filter_input(INPUT_GET, "Email_ADM", FILTER_VALIDATE_EMAIL);
$Senha_ADM             = filter_input(INPUT_GET, "Senha_ADM");
$Nascimento_ADM        = filter_input(INPUT_GET, "Nascimento_ADM");
$Celular_ADM           = filter_input(INPUT_GET, "Celular_ADM");
$Status_ADM            = filter_input(INPUT_GET, "Status_ADM");

$ADM -> setNome_ADM($Nome_ADM);
$ADM -> setEmail_ADM($Email_ADM);
$ADM -> setSenha_ADM($Senha_ADM);
$ADM -> setNascimento_ADM($Nascimento_ADM);
$ADM -> setCelular_ADM($Celular_ADM);
$ADM -> setStatus_ADM($Status_ADM);

$CPF_Professor = filter_input(INPUT_GET, "CPF_Professor");
$ADM -> setCPF_Professor($CPF_Professor);

$ID_Solicitacoes = filter_input(INPUT_GET, "ID_Solicitacoes");
$ADM -> setID_Solicitacoes($ID_Solicitacoes);


//echo $ID_Solicitacoes;
//exit;

if(isset($_GET["Cadastrar"])){

    echo $ADM -> CadastroProfessor();
}

else if(isset($_GET["CadastroADM"])){

    echo $ADM -> CadastroADM();

}

else if(isset($_GET["RejeitarCadastro"])){

    echo $ADM -> RejeitarCadastro();
}

else if(isset($_GET["Exibir"])){
    echo $ADM -> Exibir();
}

else if(ISSET($_GET["LoginADM"])){
    $Dados = $ADM -> LoginADM();

    if(empty($Dados)){
        echo 'Preencha todos os campos!';

    }

    else{
        foreach($Dados as $Dd){
            //array
            if($Dd['Email_ADM'] == $Email_ADM && $Dd['Senha_ADM'] == $Senha_ADM){
                echo 'Sucesso' ;

                session_start();
                $_SESSION['Email_ADM'] = $Email_ADM;
                $_SESSION['Senha_ADM'] = $Senha_ADM;
            }
            
            else{
                echo "Email ou Senha incorretos!";
                unset ($_SESSION['Email_ADM']);
                unset ($_SESSION['Senha_ADM']);

            }
            
        }
    }

}

else if(isset($_GET["AlterarSenha"])){
    echo $ADM -> AlterarSenha();
}

else if(isset($_GET["ExibirAula"])){
    echo $ADM -> ExibirAula();
}

else if(isset($_GET["Aprovar"])){
    
    echo $ADM -> AprovarAula();
   
}

else if(isset($_GET["Rejeitar"])){
    echo $ADM -> RejeitarAula();
}

else if(isset($_GET["DadosAlunos"])){
    //$Dados = $ADM -> LoginADM();

   echo json_encode($ADM -> DadosAlunos());
    
    //echo $ADM -> DadosAlunos();
}

