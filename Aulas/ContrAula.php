<?php

include_once "CLSAula.php";

$Aul = new Aula;

$Link_Aula    = filter_input(INPUT_GET, "Link_Aula");
$Assunto_Aula = filter_input(INPUT_GET, "Assunto_Aula");

$Aul -> setLink_Aula($Link_Aula);
$Aul -> setAssunto_Aula($Assunto_Aula);

if(isset($_GET["LinkAula"])){
    echo $Aul -> SolicitarAula();
}