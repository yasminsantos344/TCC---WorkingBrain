<?php

class Login{
    //Variáveis Login
    private $email;
    private $senha;
    private $ocupacao;

    //Get/ Set

    public function getemail(){
        return($this -> email);
    }

    public function setemail($email){
        $this -> email = $email;
    }

    public function getsenha(){
        return($this -> senha);
    }

    public function setsenha($senha){
        $this -> senha = $senha;
    }

    public function getocupacao(){
        return($this -> ocupacao);
    }

    public function setocupacao($ocupacao){
        $this -> ocupacao = $ocupacao;
    }


    //Método - Login

    public function Logar(){
        include_once "../Conexao.php";

    if($this -> ocupacao == 'aluno'){
        try{
        $comando = $conexao -> prepare("SELECT Email_Aluno, Senha_Aluno FROM TB_Aluno WHERE Email_Aluno = ?, Senha_Aluno = ?");
        $comando -> bindParam(1, $this -> email);
        $comando -> bindParam(2, $this -> senha);
       
            if($comando -> execute()){
                $retorno =  $comando -> fetchALL(PDO::FETCH_ASSOC);
            }
            
    }

    catch(PDOException $Erro){
        $retorno = "Não encontrado" . $Erro -> getMessage();
    }

    return $retorno;
    }

    else if($this -> ocupacao == "professor"){
        try{
            $comando = $conexao -> prepare("SELECT Email_Prof, Senha_Prof FROM TB_Professor WHERE Email_Professor = ?, Senha_Professor = ?");
            $comando -> bindParam(1, $this -> email);
            $comando -> bindParam(2, $this -> senha);
           
                if($comando -> execute()){
                    $retorno =  $comando -> fetchALL(PDO::FETCH_ASSOC);
                }
                
        }
    
        catch(PDOException $Erro){
            $retorno = "Não encontrado" . $Erro -> getMessage();
        }
    
        return $retorno;
    }
}   

    public function recuperacao(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("UPDATE ");
            $comando -> bindParam(1, $this -> email);
            $comando -> bindParam(2, $this -> senha);
        }
    }

}

