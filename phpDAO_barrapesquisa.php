<?php

class BuscaDao{
    private $conexao;

    public function __construct($host, $dbname, $user, $password);{
    $this->conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
    public function Buscar($termo) {
        $sql = "SELECT * FROM tabela WHERE coluna LIKE :termo";
        $stmt = $this-.conexao->prepare($sql);
        $stmt->bindvalue(':termo', '%'.termo.'%');
        $this->execute();

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }
}
?>