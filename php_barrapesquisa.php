<?php

if(isset($_POST['txt_Busca'])) {
$termoBusca = $_POST['txt_Busca'];
$buscaDAO = new BuscaDao("localhost", "nomedobanco", "usuario", "senha");
$resultados = $buscaDAO->buscar("termoBusca");

foreach($resultado as $resultado){
    echo $resultado['coluna'] . "</br>";
}
}

?>