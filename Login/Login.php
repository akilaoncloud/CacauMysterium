<?php

class Login {
    public $nomeUser;
    public $senha;

    public function login() {
        $objeto = new LoginDAO();
        $objeto->set("nomeUser", $this->nomeUser);
        $objeto->set("senha", $this->senha);
        return $objeto->ValidarLogin();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>
