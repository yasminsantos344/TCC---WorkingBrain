<?php

class Administrador{
    private $CPF_Professor;

    public function getCPF_Professor(){
        return $this -> CPF_Professor;
    }

    public function setCPF_Professor($CPF_Professor){
        $this -> CPF_Professor = $CPF_Professor;
    }
    // Método Cadastro Professor

    public function CadastroProfessor(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_Professor (Nome_Professor, Data_Nascimento_Professor, CPF_Professor, Email_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor,Endereco_Numero_Professor, Endereco_Complemento_Professor, Data_Cadastro) 
                                            SELECT Nome_Professor, Data_Nascimento_Professor,CPF_Professor, Email_Professor, Celular_Professor, CEP_Professor, Endereco_Professor, Bairro_Professor, Cidade_Professor, UF_Professor, Endereco_Numero_Professor, Endereco_Complemento_Professor, Data_Solicitacao
                                             FROM TB_Solicitar
                                             WHERE CPF_Professor = ?;
                                            DELETE FROM TB_Solicitacao WHERE CPF_Professor = ?;
                                            INSERT INTO TB_Professor (Senha_Professor, Data_Cadastro) VALUE ('123456', NOW())");
             
             $comando -> bindParam(1, $this -> CPF_Professor);
             $comando -> bindParam(2, $this -> CPF_Professor);

            
            if($comando -> execute()){         
                $retorno = "Solicitação realizada com sucesso!";
                
            }
    
        }
    
        catch(PDOException $Erro){
            $retorno = "Erro na solicitação!" . $Erro -> getMessage();
        }
    
        return $retorno;
    }
}