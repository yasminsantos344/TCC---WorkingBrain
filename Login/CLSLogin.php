<?php

class Login{
    //Variáveis Login
    private $Email_Aluno;
    private $Senha_Aluno;

    private $Email_Professor;
    private $Senha_Professor;


    //Get/ Set

    public function getEmail_Aluno(){
        return($this -> Email_Aluno);
    }

    public function setEmail_Aluno($Email_Aluno){
        $this -> Email_Aluno = $Email_Aluno;
    }

    public function getSenha_Aluno(){
        return($this -> Senha_Aluno);
    }

    public function setSenha_Aluno($Senha_Aluno){
        $this -> Senha_Aluno = $Senha_Aluno;
    }

    public function getEmail_Professor(){
        return($this -> Email_Professor);
    }

    public function setEmail_Professor($Email_Professor){
        $this -> Email_Professor = $Email_Professor;
    }

    public function getSenha_Professor(){
        return($this -> Senha_Professor);
    }

    public function setSenha_Professor($Senha_Professor){
        $this -> Senha_Professor = $Senha_Professor;
    }
  


    //Métodos - Login 

    public function LoginAluno(){
        include_once "Conexao.php";

        try{
            $comando = $conexao -> prepare("SELECT Email_Aluno, Senha_Aluno FROM TB_Aluno WHERE Email_Aluno = ? AND Senha_Aluno = ?");
            $comando -> bindParam(1, $this -> Email_Aluno);
            $comando -> bindParam(2, $this -> Senha_Aluno);
           
                if($comando -> execute()){
                    $retorno =  'Sucesso';
                }
                
        }
    
        catch(PDOException $Erro){
            $retorno = "Não encontrado" . $Erro -> getMessage();
        }
    
        return $retorno;
    }

    public function LoginProfessor(){
        include_once "Conexao.php";

        try{
            $comando = $conexao -> prepare("SELECT Email_Professor, Senha_Professor FROM TB_Professor WHERE Email_Professor = ? AND Senha_Professor = ?");
            $comando -> bindParam(1, $this -> Email_Professor);
            $comando -> bindParam(2, $this -> Senha_Professor);
           
                if($comando -> execute()){
                    $retorno =  'Sucesso';
                }
                
        }
    
        catch(PDOException $Erro){
            $retorno = "Não encontrado" . $Erro -> getMessage();
        }
    
        return $retorno;
    }


    //Método Recuperação de Senha
    public function recuperacao(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("UPDATE ");
            $comando -> bindParam(1, $this -> email);
            $comando -> bindParam(2, $this -> senha);
        }
    }
    }


    




