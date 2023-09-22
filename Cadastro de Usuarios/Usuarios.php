<?php

class Usuarios {
    public $nomeC;
    public $nomeUser;
    public $email;
    public $senha;
    public $CPF;

    public function cadastrar() {
        $objeto = new UsuariosDAO();
        $objeto->set("nomeC", $this->nomeC);
        $objeto->set("nomeUser", $this->nomeUser);
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("CPF", $this->CPF);

        return $objeto->cadastrar();
    }

    public function consultarTodos() {
        $objeto = new UsuariosDAO();
        return $objeto->consultarTodos();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>
