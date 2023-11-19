<?php
include_once "../class/conexao.php";
include_once "../class/pesquisa.php";
include_once "../dao/pesquisaDAO.php";

$resultados = "";

if(!empty($_POST)){
	$objeto = new Pesquisa;
	$objeto->set("termoBusca", $_POST["txtBusca"]);
	$resultados = $objeto->pesquisar();
}

?>
<form action="index.php#produtos" method="post">
	<div id="divBusca" name="divBusca" >
		<input type="text" id="txtBusca" name="txtBusca" placeholder=" Buscar..." />
		<button name="pesquisa" id="pesquisa">
			<img src="https://i.postimg.cc/Wzz4ZttN/image.png" height="25" width="23" name="lupa" id="lupa"/>  
		</button>
	</div>
</form>