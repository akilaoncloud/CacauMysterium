<?php

class Produtos {
    private $nomeProd;
    private $descricao;
    private $codigo;
    private $precoUn;

    public function cadastrar($nomeProd, $descricao, $codigo, $precoUn) {
        $this->nomeProd = $nomeProd;
        $this->descricao = $descricao;
        $this->codigo = $codigo;
        $this->precoUn = $precoUn;
    }

    public function getnome(){
        return $this->$nomeProd;
    }

    public function setnome($nomeProd){
        $this->nomeProd = $nomeProd;
    }

    public function getdescricao(){
        return $this->$descricao;
    }

    public function setdescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getcodigo(){
        return $this->$codigo;
    }

    public function setcodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function getprecoUn(){
        return $this->$precoUn;
    }

    public function setprecoUn($precoUn){
        $this->precoUn = $precoUn;
    }
}
?>
