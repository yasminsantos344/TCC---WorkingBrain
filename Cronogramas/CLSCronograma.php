<?php

class Cronograma{
    private $Objetivo;
    private $Dom;
    private $Seg;
    private $Ter;
    private $Qua;
    private $Qui;
    private $Sex;
    private $Sab;

    private $Nivel;

    //Get - Set

    public function getObjetivo(){
        return $this->Objetivo;
    }

    public function setObjetivo($Objetivo){ 
        $this->Objetivo = $Objetivo;
    }

    public function getDom(){
        return $this->Dom;
    }

    public function setDom($Dom){
        $this->Dom = $Dom;
    }

    public function getSeg(){
        return $this->Seg;
    }

    public function setSeg($Seg){
        $this->Seg = $Seg;
    }   

    public function getTer(){
        return $this->Ter;
    }

    public function setTer($Ter){
        $this->Ter = $Ter;
    }

    public function getQua(){
        return $this->Qua;
    }

    public function setQua($Qua){
        $this->Qua = $Qua;
    }

    public function getQui(){
        return $this->Qui;
    }

    public function setQui($Qui){
        $this->Qui = $Qui;
    }

    public function getSex(){
        return $this->Sex;
    }

    public function setSex($Sex){
        $this->Sex = $Sex;
    }

    public function getSab(){
        return $this->Sab;
    }

    public function setSab($Sab){
        $this->Sab = $Sab;
    }

    public function getNivel(){
        return $this->Sab;
    }

    public function setNivel($Nivel){
        $this->Nivel = $Nivel;
    }

    // Método Guadar Cronograma

    public function FCronograma(){
        include_once "../Conexao.php";

        $Dias = $this -> Dom . $this -> Seg . $this -> Ter . $this -> Qua . $this -> Qui . $this -> Sex . $this -> Sab;

        try{
            $comando = $conexao -> prepare("INSERT INTO TB_Cronograma (Objetivo_Cronograma, Dias_Cronograma, Nivel_Cronograma) VALUES (?,?,?)");
            $comando -> bindParam(1, $this -> Objetivo);
            $comando -> bindParam(2, $Dias);
            $comando -> bindParam(3, $this -> Nivel);
           
                if($comando -> execute()){
                    $retorno =  'Sucesso';
                }
        }
        catch(PDOException $Erro){
            $retorno = "Ops! Ocorreu um erro" . $Erro -> getMessage();
        }
        
        return($retorno);
    }

    

}