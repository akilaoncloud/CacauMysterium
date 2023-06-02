<?php
 
 class ProdutosDAO {

    private $nomeProd;
    private $descricao;
    private $codigo;
    private $precoUn;

    public function __construct($nomeProd, $descricao, $codigo, $precoUn) {
        $this->nomeProd = $nomeProd;
        $this->descricao = $descricao;
        $this->codigo = $codigo;
        $this->precoUn = $precoUn;
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
      
      public function getprecoUn() {
        return $this->precoUn;
      }
      
      public function setprecoUn($precoUn) {
        $this->precoUn = $precoUn;
      }
      public function cadastrar() {
        $dao = new ProdutoDAO();
        $dao->cadastrar($this);
    }
}
