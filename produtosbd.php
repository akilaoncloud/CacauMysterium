<?php

class ProdutoDAO {

  public function cadastrar($produto) {
    $conn = new PDO('mysql:host=localhost;dbname=meu_banco', 'usuario', 'senha');

    $stmt = $conn->prepare('INSERT INTO produtos (nomeProd, descricao, codigo, precoUni) VALUES (:nomeProd, :descricao, :codigo, :precoUni)');
    $stmt->bindValue(':nomeProd', $produto->getomeProd());
    $stmt->bindValue(':descricao', $produto->getdescricao());
    $stmt->bindValue(':codigo', $produto->getcodigo());
    $stmt->bindValue(':precoUni', $produto->getprecoUni());
    $stmt->execute();

    $produto->setId($conn->lastInsertId());
  }
  
}

?>