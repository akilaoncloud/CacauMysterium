<?php
 
class EsqueceuSenha {
    public $email;
    public $novasenha;

    public function AlterarSenha() {
        $objeto = new EsqueceuSenhaDAO();
        $objeto->set("email", $this->email);
        $objeto->set("novasenha", $this->novasenha);
        return $objeto->AlterarSenha();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>