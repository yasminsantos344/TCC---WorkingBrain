<?php

include_once "CLSRF04_RF05.php";

$RF045 = new Login;

$email    = filter_input("GET", "email", FILTER_VALIDATE_EMAIL);
$senha    = filter_input("GET", "senha");
$ocupacao = filter_input("GET", "ocupacao");
$botao    = filter_input("GET", "botao");

$RF045 -> setemail($email);
$RF045 -> setsenha($senha);
$RF045 -> setocupacao($ocupacao);

if($botao == "login"){
    $Dados = $RF045 -> Logar();

    if(empty($Dados)){
        echo "Usuário inexistente!";
    }

    else{
        
            if($ocupacao == "aluno"){
                foreach($Dados as $Dd){
                    if($Dd['Email_Aluno'] == $email && $Dd['Senha_Aluno'] == $senha){
                        echo "<script>
                        document.location.replace(/* Home */);
                        </script>"
                    }
                    else{
                        echo "<script>
                            alert("Email ou senha incorretos");
                        </script>"
                    }
                }
            }

            else if($ocupacao == "professor"){
                foreach($Dados as $Dd){
                    if($Dd['Email_Professor'] == $email && $Dd['Senha_Professor'] == $senha){
                        echo "<script>
                        document.location.replace(/* Home */);
                        </script>"
                    }
                    else{
                        echo "<script>
                            alert("Email ou senha incorretos");
                        </script>"
                    }
                }
            }
        
    }
}