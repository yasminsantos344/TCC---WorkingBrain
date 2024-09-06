<?php

$Bco = 'DB_WorkingBrain';
$Usuario = 'root';
$Senha = '';

/*34394383@Yg*/

try{

    $conexao = new PDO("mysql:host=localhost; dbname=$Bco", "$Usuario", "$Senha");
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao -> exec("set names utf8");

}

catch(PDOException $erro){
    echo "Erro na conexão:" . $erro -> getMessage();
}