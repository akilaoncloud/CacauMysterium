<?php

class Login {
    public $nomeUser;
    public $senha;

    public function validarLogin() {
        $objeto = new LoginDAO();
        $objeto->set("nomeUser", $this->nomeUser);
        $objeto->set("senha", $this->senha);
        return $objeto->validarLogin();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>
