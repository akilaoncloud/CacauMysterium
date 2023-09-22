<?php

class LoginDAO {
    public $nomeUser;
    public $senha;

    public function ValidarLogin() {
        $objeto = new Conexao();
        $SQL = "SELECT nomeUser, senha FROM usuario WHERE nomeUser = '$this->nomeUser' AND senha = '$this->senha'";
        $objeto->set("sql", $SQL);
        $result = $objeto->query($SQL);

        if ($result->num_rows > 0) {
            header('location: testcolor.html'); // mudar depois
        } else {
            echo "Nome e/ou senha incorretos!";
        }
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
