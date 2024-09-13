<?php

include_once "CLSCronograma.php";

$Cro = new Cronograma;


$Objetivo       = filter_input(INPUT_GET, "Objetivo");
$Dom            = filter_input(INPUT_GET, "Dom",);
$Seg            = filter_input(INPUT_GET, "Seg",);
$Ter            = filter_input(INPUT_GET, "Ter",);
$Qua            = filter_input(INPUT_GET, "Qua",);
$Qui            = filter_input(INPUT_GET, "Qui",);
$Sex            = filter_input(INPUT_GET, "Sex",);
$Sab            = filter_input(INPUT_GET, "Sab",);
$Nivel          = filter_input(INPUT_GET, "Nivel");



$Cro -> setObjetivo($Objetivo);
$Cro -> setDom($Dom);
$Cro -> setSeg($Seg);
$Cro -> setTer($Ter);
$Cro -> setQua($Qua);
$Cro -> setQui($Qui);
$Cro -> setSex($Sex);
$Cro -> setSab($Sab);
$Cro -> setNivel($Nivel);

if(ISSET($_GET["Cronograma"])){
    echo $Cro -> FCronograma();
}