<?php 

class PesquisaDAO {
    public $termoBusca;

    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function pesquisar() {
        $objeto = new Conexao();
        $sql = "SELECT codigo, nomeProd, precoUn, descricao FROM produtos WHERE codigo LIKE '%$this->termoBusca%' OR nomeProd LIKE '%$this->termoBusca%'";
        $objeto->set("sql", $sql);
        $resultados = $objeto->query()->fetch_all(MYSQLI_ASSOC);
        return $resultados;
    }
}

?>