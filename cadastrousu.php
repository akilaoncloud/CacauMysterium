<?php

class CadastroUsuario {
    private $nomeCompleto;
    private $nomeUsuario;
    private $senha;
    private $cpf;

    public function __construct($nomeCompleto, $nomeUsuario, $senha, $cpf) {
        $this->nomeCompleto = $nomeCompleto;
        $this->nomeUsuario = $nomeUsuario;
        $this->senha = $senha;
        $this->cpf = $cpf;
    }

    public function cadastrar() {
        echo "Usuário cadastrado com sucesso.<br>";
        echo "Nome completo: " . $this->nomeCompleto . "<br>";
        echo "Nome de usuário: " . $this->nomeUsuario . "<br>";
        echo "Senha: " . $this->senha . "<br>";
        echo "CPF: " . $this->cpf . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nomeCompleto = $_POST["nome_completo"];
    $nomeUsuario = $_POST["nome_usuario"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];

    $cadastroUsuario = new CadastroUsuario($nomeCompleto, $nomeUsuario, $senha, $cpf);

    $cadastroUsuario->cadastrar();
}
?>
