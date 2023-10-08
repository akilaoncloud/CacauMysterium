<?php

class ProdutosDAO {

    private $nomeProd;
    private $descricao;
    private $codigo;
    private $precoUn;

    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function cadastrar(){
        $objeto = new Conexao();
        $sql = "INSERT INTO produtos (nomeProd, descricao, codigo, precoUn) 
                VALUES ('$this->nomeProd', '$this->descricao', '$this->codigo', '$this->precoUn');";
        $objeto->set("sql", $sql);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
}
?>
