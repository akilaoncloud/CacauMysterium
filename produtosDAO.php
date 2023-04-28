<?php
 
 class ProdutosDAO {

    private $nomeProd;
    private $descricao;
    private $codigo;
    private $precoUni;

    public function __construct($nomeProd, $descricao, $codigo, $precoUni) {
        $this->nomeProd = $nomeProd;
        $this->descricao = $descricao;
        $this->codigo = $codigo;
        $this->precoUni = $precoUni;
    }

    public function getId() {
        return $this->id;
      }
      
      public function setId($id) {
        $this->id = $id;
      }
      
      public function getnomeProd() {
        return $this->nomeProd;
      }
      
      public function setnomeProd($nomeProd) {
        $this->nomeProd = $nomeProd;
      }
      
      public function getdescricao() {
        return $this->descricao;
      }
      
      public function setdescricao($descricao) {
        $this->descricao = $descricao;
      }
      
      public function getcodigo() {
        return $this->codigo;
      }
      
      public function setcodigo($codigo) {
        $this->codigo = $codigo;
      }
      
      public function getprecoUni() {
        return $this->precoUni;
      }
      
      public function setprecoUni($precoUni) {
        $this->precoUni = $precoUni;
      }
      public function cadastrar() {
        $dao = new ProdutoDAO();
        $dao->cadastrar($this);
    }
}