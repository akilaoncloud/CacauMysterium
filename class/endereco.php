<?php

class Endereco {
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;

    public function consultarTodos() {
        $objeto = new EnderecoDAO();
        return $objeto->consultarTodos();
    }

    public function cadastrar() {
        $objeto = new EnderecoDAO();
        $objeto->set("logradouro", $this->logradouro);
        $objeto->set("numero", $this->numero);
        $objeto->set("bairro", $this->bairro);
        $objeto->set("cidade", $this->cidade);
        $objeto->set("estado", $this->estado);
        return $objeto->cadastrar();
    }    

    public function alterar() {
        $objeto = new EnderecoDAO();
        $objeto->set("logradouro", $this->logradouro);
        $objeto->set("numero", $this->numero);
        $objeto->set("bairro", $this->bairro);
        $objeto->set("cidade", $this->cidade);
        $objeto->set("estado", $this->estado);
        return $objeto->alterar();
    }    

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>
