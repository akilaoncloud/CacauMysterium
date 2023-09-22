<?php

include "Conexao.php";

if(isset($_POST["pesquisar"])) {    
	$termoBusca = $_POST["txtBusca"];
	$buscaProduto = new Conexao();
	$sql = "SELECT * FROM produtos WHERE codigo LIKE '%$termoBusca%' OR nomeProd LIKE '%$termoBusca%'";
	$buscaProduto->set("sql", $sql);
	$resultados = $buscaProduto->query()->fetch_all(MYSQLI_ASSOC);

	foreach($resultados as $produto){
		foreach($produto as $detalhes){
			echo $detalhes . "</br>";
		}
	}
}

?>
