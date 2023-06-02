<?php

class CadastroUsuarioDAO {
    public $id;
    public $nomeC;
    public $nomeUser;
    public $email;
    public $senha;
    public $CPF;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO cacau (id, nomeC, nomeUser, email, senha, CPF)
                VALUES ('$this->id', '$this->nomec', '$this->nomeUser', '$this->email', '$this->senha', '$this->CPF');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
    public function alterar() {
        $objeto = new Alterar();
        $SQL = "UPDATE usuarios set nomeC='$this->nomeC', nomeUser='$this->nomeUser', email='$this->email', senha='$this->senha', CPF='$this->CPF' 
        WHERE id='$this->id'";
        
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }
}