<?php

class Aula{
    private $Link_Aula;
    private $Assunto_Aula;
    private $ID_Materia;

    public function getLink_Aula(){
        return($this -> Link_Aula);
    }

    public function setLink_Aula($Link_Aula){
        $this -> Link_Aula = $Link_Aula;
    }

    public function getAssunto_Aula(){
        return($this -> Assunto_Aula);
    }

    public function setAssunto_Aula($Assunto_Aula){
        $this -> Assunto_Aula = $Assunto_Aula;
    }

    public function getID_Materia(){
        return($this -> ID_Materia);
    }

    public function setID_Materia($ID_Materia){
        $this -> ID_Materia = $ID_Materia;
    }

    // Método solicitar

    public function SolicitarAula(){
        include_once "../Conexao.php";

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_SolicitarAula (Link_Aula, Assunto_Aula, ID_Materia) values (?, ?, ?)");
            $comando -> bindParam(1, $this -> Link_Aula);
            $comando -> bindParam(2, $this -> Assunto_Aula);
            $comando -> bindParam(3, $this -> ID_Materia);


            
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