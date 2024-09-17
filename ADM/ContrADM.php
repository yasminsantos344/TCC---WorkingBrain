<?php

include_once "CLSADM.php";

$ADM = new Administrador;


$CPF_Professor = filter_input(INPUT_GET, "CPF_Professor");

$ADM -> setCPF_Professor($CPF_Professor);

if(isset($_GET["Cadastrar"])){
    echo $ADM -> CadastroProfessor();
}