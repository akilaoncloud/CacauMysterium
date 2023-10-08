<?php

class UsuariosDAO {
    public $nomeC;
    public $nomeUser;
    public $email;
    public $senha;
    public $CPF;
    
    public function consultarTodos() {
        $objeto = new Conexao();
        $sql = "SELECT nomeC, nomeUser, email, senha, CPF FROM usuarios";
        $objeto->set("sql", $sql);
        return $objeto->query();
    }

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO usuarios (nomeC, nomeUser, email, senha, CPF)
                VALUES ('$this->nomeC', '$this->nomeUser', '$this->email', '$this->senha', '$this->CPF');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }    

    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE usuarios SET 
                email='$this->email', 
                senha='$this->senha'
                WHERE nomeUser='$this->nomeUser'";        
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }    

    public function validarLogin() {
        $objeto = new Conexao();
        $SQL = "SELECT nomeUser FROM usuarios WHERE nomeUser = '$this->nomeUser' AND senha = '$this->senha'";
        $objeto->set("sql", $SQL);
        $result = $objeto->query($SQL);

        if ($result->num_rows > 0) {         
            session_start();
            $_SESSION['login'] = $this->nomeUser; // Login Completo!
            header('Location: ../view/altCadUsuario.php');
        } else {
            echo "Nome e/ou senha incorretos!";
        }
    }

    public function esqueceuSenha() {
        $objeto = new Conexao();
        $SQL = "SELECT nomeUser FROM usuarios WHERE email = '$this->email'";
        $objeto->set("sql", $SQL);
        $verify = $objeto->query($SQL);

        if($verify->num_rows > 0){

            $SQL = "UPDATE usuarios SET senha = '$this->senha' WHERE email = '$this->email'";
            $objeto->set("sql", $SQL);
            $objeto->query($SQL);
            
            header('location: ../view/login.php');

        } else {
            echo "Email incorreto ou não existente";
        }
    }
    
    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
