<?php 

class Pesquisa {
    public $termoBusca;

    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function pesquisar() {
        $objeto = new PesquisaDAO();
        $objeto->set("termoBusca", $this->termoBusca);
        return $objeto->pesquisar();
    }
}

?>