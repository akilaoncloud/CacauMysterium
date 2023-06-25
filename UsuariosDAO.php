<?php

class UsuariosDAO {
    public $nomeC;
    public $nomeUser;
    public $email;
    public $senha;
    public $CPF;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO usuarios (nomeC, nomeUser, email, senha, CPF)
                VALUES ('$this->nomeC', '$this->nomeUser', '$this->email', '$this->senha', '$this->CPF');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
