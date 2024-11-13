<?php

class Administrador{
    // Variáveis Cadastro ADM

    private $Nome_ADM;
    private $Email_ADM;
    private $Nascimento_ADM;
    private $Senha_ADM;
    private $Celular_ADM;
    Private $Status_ADM;
    Private $Diretriz;
    

    // Variáveis cadastro professor
    private $CPF_Professor;

    //Variável Aulas
    private $ID_Solicitacoes;

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

    public function getNascimento_ADM(){
        return $this -> Nascimento_ADM;
    }

    public function setNascimento_ADM($Nascimento_ADM){
        $this -> Nascimento_ADM = $Nascimento_ADM;
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

    //Get - Set (Aulas)

    public function getID_Solicitacoes(){
        return $this -> ID_Solicitacoes;
    }

    public function setID_Solicitacoes($ID_Solicitacoes){
        $this -> ID_Solicitacoes = $ID_Solicitacoes;
    }

    //Get - Set (Aulas)

    public function getDiretriz(){
        return $this -> Diretriz;
    }

    public function setDiretriz($Diretriz){
        $this -> Diretriz = $Diretriz;
    }

   
    //Método Cadastro ADM

    public function CadastroADM(){
        include_once "../Conexao.php";
        $Status = "A";

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_ADM (Nome_ADM, Nascimento_ADM, Celular_ADM, Email_ADM, Senha_ADM, Status_ADM) VALUES (?, ?, ?, ?, ?, ?) ");
             
             $comando -> bindParam(1, $this -> Nome_ADM);             
             $comando -> bindParam(2, $this -> Nascimento_ADM);
             $comando -> bindParam(3, $this -> Celular_ADM);
             $comando -> bindParam(4, $this -> Email_ADM);            
             $comando -> bindParam(5, $this -> Senha_ADM);
             $comando -> bindParam(6, $Status);

            
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
            $comando = $conexao -> prepare("SELECT Email_ADM, Senha_ADM, Nome_ADM, DATE_FORMAT(Nascimento_ADM,'%d/%m/%Y') as Nascimento_ADM , Celular_ADM FROM TB_ADM WHERE Email_ADM = ? AND Senha_ADM = ?");
            $comando -> bindParam(1, $this -> Email_ADM);
            $comando -> bindParam(2, $this -> Senha_ADM);
            /*$comando -> bindParam(3, $this -> Nome_ADM);
            $comando -> bindParam(4, $this -> Nascimento_ADM);
            $comando -> bindParam(5, $this -> Celular_ADM);*/
           
                if($comando -> execute()){
                    $retorno =  $comando -> fetchALL(PDO::FETCH_ASSOC);
                }
                
        }
    
        catch(PDOException $Erro){
            $retorno = "Não encontrado" . $Erro -> getMessage();
        }
    
        return $retorno;
    }

    //Método - Exibir solicitações
    public function Exibir(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("SELECT Nome_Professor, Data_Nascimento_Professor,CPF_Professor, Email_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor, Endereco_Numero_Professor, Endereco_Complemento_Professor FROM TB_Solicitar");
                       
            $comando -> execute();
            $Matriz =  $comando -> fetchALL();            
            $retorno = json_encode($Matriz);

    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro" . $Erro -> getMessage();
        }
    
        return $retorno;

    }
    
    //Método - Alterar senha

    public function AlterarSenha(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("UPDATE TB_ADM SET Senha_ADM = ? WHERE Email_ADM = ?");
            $comando -> bindParam(1, $this -> Senha_ADM);
            $comando -> bindParam(2, $this -> Email_ADM);

            $retorno = "foi";
                
        }
    
        catch(PDOException $Erro){
            $retorno = "Não encontrado" . $Erro -> getMessage();
        }
    
        return $retorno;
    }

    // Método exibir aula

    public function ExibirAula(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("SELECT ID_Solicitacao, Link_Aula FROM TB_SolicitarAula");
                       
            $comando -> execute();
            $Matriz =  $comando -> fetchALL();            
            $retorno = json_encode($Matriz);

    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro" . $Erro -> getMessage();
        }
    
        return $retorno;

    }

   //Método Aceitar Aula

   public function AprovarAula(){
    include_once "../Conexao.php";

    try{
        $comando1 = $conexao -> prepare("INSERT INTO TB_Aula (Link_Aula, Assunto_Aula)
                                        SELECT Link_Aula, Assunto_Aula FROM TB_SolicitarAula
                                        WHERE ID_Solicitacao = ?");
                   
                   $comando1 -> bindParam(1, $this -> ID_Solicitacoes);


                   $comando2 = $conexao -> prepare("DELETE FROM TB_Solicitar WHERE ID_Solicitacao = ?;") ;                                                         
                   $comando2 -> bindParam(1, $this -> ID_Solicitacoes);
       
                   
                   if($comando1 -> execute()){         
                       if($comando2 -> execute()){
                           $retorno = "Aula liberada";
                       }


    }
  }

    catch(PDOException $Erro){
        $retorno = "Erro" . $Erro -> getMessage();
    }

    return $retorno;

}

public function RejeitarAula(){
    include_once "../Conexao.php";

    try{
        $comando = $conexao -> prepare("DELETE FROM TB_SolicitarAula WHERE ID_Solicitacao = ? ");
        $comando -> bindParam(1, $this -> ID_Solicitacoes);
        

        
        if($comando -> execute()){         
            $retorno = "Aula rejeitada!";
        }

    }

    catch(PDOException $Erro){
        $retorno = "Erro na solicitação!" . $Erro -> getMessage();
    }

    return $retorno;

}

//Método Gráfico Alunos

public function DadosAlunos(){
    include_once "../Conexao.php";
    try{
 
          $array = [];

        for ($i = 1; $i <= 12; $i++) {
            // Formatting the month to ensure it's always two digits
            $month = str_pad($i, 2, '0', STR_PAD_LEFT);
            
            if($month == 02){
                $day = 29;
            }
            else if($month < 8){
                if($month % 2 == 0){
                    $day = 30;
                }

                else{
                    $day = 31;
                }
                
            }
            else if($month > 8){
                if($month % 2 !== 0){
                    $day = 30;
                }

                else{
                    $day = 31;
                }
                
            }

            
            $comando = $conexao->prepare("SELECT COUNT(Matricula_Aluno) AS Matriculas 
                                           FROM TB_Aluno 
                                           WHERE Hora_Matricula_Aluno BETWEEN '2024-$month-01 00:00:00' AND '2024-$month-$day 23:59:59'");
            $comando->execute();
            $Matriz = $comando->fetch(PDO::FETCH_ASSOC);

            // Ensure that if there are no enrollments, it returns 0
            $array[$i] = $Matriz['Matriculas'] ?? 0;
         
       }


        return $array;
        
        
         

    }

    catch(PDOException $Erro){
       $retorno = "Erro na solicitação!" . $Erro -> getMessage();
       return $retorno;

    }    

}

public function ExibirDiretriz(){
    include_once "../Conexao.php";

    try{
        $comando = $conexao -> prepare("SELECT Diretriz FROM TB_Diretriz");
                   
        $comando -> execute();
        $Matriz =  $comando -> fetchALL();            
        $retorno = json_encode($Matriz);


    }

    catch(PDOException $Erro){
        $retorno = "Erro" . $Erro -> getMessage();
    }

    return $retorno;

}

public function MudarDiretriz(){
    include_once "../Conexao.php";

    try{
        $comando = $conexao -> prepare("UPDATE TB_Diretriz SET Diretriz = ? WHERE ID_Diretriz= 1");
         
         $comando -> bindParam(1, $this -> Diretriz);             

        $comando -> execute();
        $Matriz =  $comando -> fetchALL();            
        $retorno = json_encode($Matriz);


    }

    catch(PDOException $Erro){
        $retorno = "Erro na solicitação!" . $Erro -> getMessage();
    }

    return $retorno;
}

public function DadosPerfil(){
    include_once "../Conexao.php";

    try{
        $comando = $conexao -> prepare("SELECT Nome_ADM, Nascimento_ADM , Email_ADM, Celular_ADM FROM TB_ADM");
                   
        $comando -> execute();
        $Matriz =  $comando -> fetchALL();            
        $retorno = json_encode($Matriz);


    }

    catch(PDOException $Erro){
        $retorno = "Erro" . $Erro -> getMessage();
    }

    return $retorno;

}

}   