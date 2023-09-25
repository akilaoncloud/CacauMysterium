<?php

class EsqueceuSenhaDAO {
    public $email;
    public $novasenha; 

    public function AlterarSenha() {
        $objeto = new Conexao();
        $SQL = "UPDATE usuarios SET senha = '$this->novasenha' WHERE email = '$this->email'";
        $objeto->set("sql", $SQL);
        $objeto->query($SQL);
        header('location: TelaLogin.php');
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
