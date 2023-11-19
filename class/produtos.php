<?php

class Produtos {
    private $nomeProd;
    private $descricao;
    private $codigo;
    private $precoUn;

    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function verTodos() {
        $objeto = new ProdutosDAO();
        return $objeto->verTodos();
    }

    public function cadastrar() {
        $objeto = new ProdutosDAO();
        $objeto->set("nomeProd", $this->nomeProd);
        $objeto->set("descricao", $this->descricao);
        $objeto->set("codigo", $this->codigo);
        $objeto->set("precoUn", $this->precoUn);
        return $objeto->cadastrar();
    }
}

?>
