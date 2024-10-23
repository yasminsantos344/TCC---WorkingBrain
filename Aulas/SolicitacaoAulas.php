<?php

/*session_start();
if((!isset ($_SESSION['Email_Professor']) == true) and (!isset ($_SESSION['Senha_Professor']) == true))
{
  header('location:http://localhost/TCC---WorkingBrain-main/');

  }

$logado = $_SESSION['Email_Professor'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
        <form action="" method="get" id="FormLink">
            <input type="text" name="Link_Aula" id="Link_Aula" placeholder="digite o link">
            <input type="text" name="Assunto_Aula" id="Assunto_Aula" placeholder="Assunto da Aula">
            <input type="button" value="Solicitar" onclick="SolicitaAula()">
        </form>
</body>

<script src="../Aulas/Aula.js"></script>
</html>