<?php

class Usuarios {
    public $nomeC;
    public $nomeUser;
    public $email;
    public $senha;
    public $CPF;

    public function consultarTodos() {
        $objeto = new UsuariosDAO();
        return $objeto->consultarTodos();
    }

    public function cadastrar() {
        $objeto = new UsuariosDAO();
        $objeto->set("nomeC", $this->nomeC);
        $objeto->set("nomeUser", $this->nomeUser);
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("CPF", $this->CPF);
        return $objeto->cadastrar();
    }    

    public function alterar() {
        $objeto = new UsuariosDAO();
        $objeto->set("nomeUser", $this->nomeUser);
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        return $objeto->alterar();
    }    

    public function validarLogin() {
        $objeto = new UsuariosDAO();
        $objeto->set("nomeUser", $this->nomeUser);
        $objeto->set("senha", $this->senha);
        $objeto->validarLogin();
    }

    public function esqueceuSenha() {
        $objeto = new UsuariosDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        return $objeto->esqueceuSenha();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>
