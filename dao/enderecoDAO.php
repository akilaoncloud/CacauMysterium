<?php

class EnderecoDAO {
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;

    public function consultarTodos() {
        $objeto = new Conexao();
        $sql = "SELECT logradouro, numero, bairro, cidade, estado FROM endereco";
        $objeto->set("sql", $sql);
        return $objeto->query();
    }

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO endereco (logradouro, numero, bairro, cidade, estado)
                VALUES ('$this->logradouro', '$this->numero', '$this->bairro', '$this->cidade', '$this->estado')";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }    

    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE endereco SET 
                logradouro='$this->logradouro', 
                numero='$this->numero', 
                bairro='$this->bairro', 
                cidade='$this->cidade', 
                estado='$this->estado' 
                WHERE idendereco= {SELECT}";        
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }      

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>
