<?php

class CadastroUsuario {
    public $nomeCompleto;
    public $nomeUsuario;
    public $email;
    public $senha;
    public $cpf;

    public function __construct($nomeC, $nomeUser, $email, $senha,$CPF) {
        $this->nomeC = $nomeC;
        $this->nomeUser = $nomeUser;
        $this->email = $email;
        $this->senha = $senha;
        $this->CPF = $CPF;
    }

    public function cadastrar() {
        echo "Usuário cadastrado com sucesso.<br>";
        echo "Nome completo: " . $this->nomeC . "<br>";
        echo "Nome de usuário: " . $this->nomeUser . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Senha: " . $this->senha . "<br>";
        echo "CPF: " . $this->CPF . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nomeC = $_POST["nomeC"];
    $nomeUsuario = $_POST["nomeUser"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];

    $cadastroUsuario = new CadastroUsuario($nomeC, $nomeUser, $email, $senha, $CPF);

    $cadastroUsuario->cadastrar();
}
?>
