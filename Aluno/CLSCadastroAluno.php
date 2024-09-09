<?php

class CadastroAluno{
    private $Nome_Aluno;
    private $Data_Nascimento_Aluno;
    private $CPF_Aluno; 
    private $Email_Aluno;
    private $Senha_Aluno;
    private $Celular_Aluno;
    private $CEP_Aluno;
    private $Endereco_Aluno;
    private $Bairro_Aluno;
    private $Cidade_Aluno;
    private $UF_Aluno;
    private $Endereco_Numero_Aluno;
    private $Endereco_Complemento_Aluno;

//----------------------------------------------- Get / Set

    public function getNome_Aluno(){
        return($this -> Nome_Aluno);
    }

    public function setNome_Aluno($Nome_Aluno){
        $this -> Nome_Aluno = $Nome_Aluno;
    }

    public function getData_Nascimento_Aluno(){
        return($this -> Data_Nascimento_Aluno);
    }

    public function setData_Nascimento_Aluno($Data_Nascimento_Aluno){
        $this -> Data_Nascimento_Aluno = $Data_Nascimento_Aluno;
    }
    
    public function getCPF_Aluno(){
        return($this -> CPF_Aluno);
    }

    public function setCPF_Aluno($CPF_Aluno){
        $this -> CPF_Aluno = $CPF_Aluno;
    }

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

    public function getCelular_Aluno(){
        return($this -> Celular_Aluno);
    }

    public function setCelular_Aluno($Celular_Aluno){
        $this -> Celular_Aluno = $Celular_Aluno;
    }

    public function getCEP_Aluno(){
        return($this -> CEP_Aluno);
    }

    public function setCEP_Aluno($CEP_Aluno){
        $this -> CEP_Aluno = $CEP_Aluno;
    }

    public function getEndereco_Aluno(){
        return($this -> Endereco_Aluno);
    }

    public function setEndereco_Aluno($Endereco_Aluno){
        $this -> Endereco_Aluno = $Endereco_Aluno;
    }

    public function getBairro_Aluno(){
        return($this -> Bairro_Aluno);
    }

    public function setBairro_Aluno($Bairro_Aluno){
        $this -> Bairro_Aluno = $Bairro_Aluno;
    }

    public function getCidade_Aluno(){
        return($this -> Cidade_Aluno);
    }

    public function setCidade_Aluno($Cidade_Aluno){
        $this -> Cidade_Aluno = $Cidade_Aluno;
    }

    public function getUF_Aluno(){
        return($this -> Cidade_Aluno);
    }

    public function setUF_Aluno($UF_Aluno){
        $this -> UF_Aluno = $UF_Aluno;
    }

    public function getEndereco_Numero_Aluno(){
        return($this -> Endereco_Numero_Aluno);
    }

    public function setEndereco_Numero_Aluno($Endereco_Numero_Aluno){
        $this -> Endereco_Numero_Aluno = $Endereco_Numero_Aluno;
    }

    public function getEndereco_Complemento_Aluno(){
        return($this -> Endereco_Complemento_Aluno);
    }

    public function setEndereco_Complemento_Aluno($Endereco_Complemento_Aluno){
        $this -> Endereco_Complemento_Aluno = $Endereco_Complemento_Aluno;
    }

//-----------------------------------------------------  Método Matricular

    public function Matricula(){
        include_once "../Conexao.php";



        try{
            $comando = $conexao -> prepare(("insert into TB_Aluno (Hora_Matricula_Aluno, Nome_Aluno, Data_Nascimento_Aluno, CPF_Aluno, Email_Aluno, Senha_Aluno, Celular_Aluno, CEP_Aluno, Endereco_Aluno, Bairro_Aluno, Cidade_Aluno, UF_Aluno,Endereco_Numero_Aluno, Endereco_Complemento_Aluno) values(NOW(),?,?,?,?,md5(?),?,?,?,?,?,?,?,?)"));
            $comando -> bindParam(1, $this -> Nome_Aluno);
            $comando -> bindParam(2, $this -> Data_Nascimento_Aluno);
            $comando -> bindParam(3, $this -> CPF_Aluno);
            $comando -> bindParam(4, $this -> Email_Aluno);
            $comando -> bindParam(5, $this -> Senha_Aluno);
            $comando -> bindParam(6, $this -> Celular_Aluno);
            $comando -> bindParam(7, $this -> CEP_Aluno);
            $comando -> bindParam(8, $this -> Endereco_Aluno);
            $comando -> bindParam(9, $this -> Bairro_Aluno);
            $comando -> bindParam(10, $this -> Cidade_Aluno);
            $comando -> bindParam(11, $this -> UF_Aluno);
            $comando -> bindParam(12, $this -> Endereco_Numero_Aluno);
            $comando -> bindParam(13, $this -> Endereco_Complemento_Aluno);

            
            if($comando -> execute()){
                $retorno = "Matrícula realizada com sucesso!";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na matrícula" . $Erro -> getMessage();
        }
    
        return($retorno);
        
    }

    public function Exclusao(){
        include_once "../Conexao.php";
        echo $this -> Nome_Aluno;

        try{
            $comando = $conexao -> prepare(("delete from TB_Aluno where CPF_Aluno = ?"));
            $comando -> bindParam(1, $this -> CPF_Aluno);
        

            
            if($comando -> execute()){
                $retorno = "Sua conta foi excluída com sucesso!";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na exclusão" . $Erro -> getMessage();
        }
    
        return($retorno);
        
    }
}