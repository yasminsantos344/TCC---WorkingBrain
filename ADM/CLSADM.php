<?php

class Administrador{
    // Variáveis Cadastro ADM

    private $Nome_ADM;
    private $Email_ADM;
    private $Senha_ADM;
    private $Celular_ADM;
    Private $Status_ADM;

    // Variáveis cadastro professor
    private $CPF_Professor;

    //Get - Set ADM

    public function getNome_ADM(){
        return $this -> Nome_ADM;
    }

    public function setNome_ADM($Nome_ADM){
        $this -> Nome_ADM = $Nome_ADM;
    }

    public function getEmail_ADM(){
        return $this -> Email_ADM;
    }

    public function setEmail_ADM($Email_ADM){
        $this -> Email_ADM = $Email_ADM;
    }

    public function getSenha_ADM(){
        return $this -> Senha_ADM;
    }

    public function setSenha_ADM($Senha_ADM){
        $this ->Senha_ADM = $Senha_ADM;
    }

    public function getCelular_ADM(){
        return $this -> Celular_ADM;
    }

    public function setCelular_ADM($Celular_ADM){
        $this -> Celular_ADM = $Celular_ADM;
    }

    public function getStatus_ADM(){
        return $this -> Status_ADM;
    }

    public function setStatus_ADM($Status_ADM){
        $this -> Status_ADM = $Status_ADM;
    }

    // Get - Set (Cadastro Professor)

    public function getCPF_Professor(){
        return $this -> CPF_Professor;
    }

    public function setCPF_Professor($CPF_Professor){
        $this -> CPF_Professor = $CPF_Professor;
    }

    //Método Cadastro ADM

    public function CadastroADM(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_ADM (Nome_ADM, Email_ADM, Senha_ADM, Celular_ADM, Status_ADM) VALUES (?, ?, ?, ?, ?) ");
             
             $comando -> bindParam(1, $this -> Nome_ADM);
             $comando -> bindParam(2, $this -> Email_ADM);
             $comando -> bindParam(3, $this -> Senha_ADM);
             $comando -> bindParam(4, $this -> Celular_ADM);
             $comando -> bindParam(5, $this -> Status_ADM);

            
            if($comando -> execute()){         
                $retorno = "sucesso";
                
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na solicitação!" . $Erro -> getMessage();
        }
    
        return $retorno;
    }

    // Método Cadastro Professor

    public function CadastroProfessor(){
        include_once "../Conexao.php";

        try{
            $comando1 = $conexao -> prepare("INSERT INTO TB_Professor (Nome_Professor, Data_Nascimento_Professor, CPF_Professor, Email_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor,Endereco_Numero_Professor, Endereco_Complemento_Professor, Data_Cadastro) 
                                            SELECT Nome_Professor, Data_Nascimento_Professor,CPF_Professor, Email_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor, Endereco_Numero_Professor, Endereco_Complemento_Professor, Data_Solicitacao
                                             FROM TB_Solicitar
                                             WHERE CPF_Professor = ?");            
            $comando1 -> bindParam(1, $this -> CPF_Professor);


            $comando2 = $conexao -> prepare("DELETE FROM TB_Solicitar WHERE CPF_Professor = ?;") ;                                                         
            $comando2 -> bindParam(1, $this -> CPF_Professor);

            
            if($comando1 -> execute()){         
                if($comando2 -> execute()){
                    $retorno = "Solicitação realizada com sucesso!";
                }
                
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na solicitação!" . $Erro -> getMessage();
        }
    
        
        return $retorno;

    }

    //Método - Negar solicitação

    public function RejeitarCadastro(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("DELETE FROM TB_Solicitar WHERE CPF_Professor = ? ");
            $comando -> bindParam(1, $this -> CPF_Professor);
            

            
            if($comando -> execute()){         
                $retorno = "Solicitação rejeitada!";
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na solicitação!" . $Erro -> getMessage();
        }
    
        return $retorno;
    
    }

    // Método LoginADM

    public function LoginADM(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("SELECT Email_ADM, Senha_ADM FROM TB_ADM WHERE Email_ADM = ? AND Senha_ADM = ?");
            $comando -> bindParam(1, $this -> Email_ADM);
            $comando -> bindParam(2, $this -> Senha_ADM);
           
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
    