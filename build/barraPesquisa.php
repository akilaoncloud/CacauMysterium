<?php
include "../class/conexao.php";
include "../class/pesquisa.php";
include "../dao/pesquisaDAO.php";

$msg = "";

if(!empty($_POST)){
	$objeto = new Pesquisa;
	$objeto->set("termoBusca", $_POST["txtBusca"]);
	$resultados = $objeto->pesquisar();
	
	foreach($resultados as $produto){
		foreach($produto as $detalhes){
			$msg .= $detalhes . "</br>";
		} $msg .= "</br>";
	}
}

?>
<form action="" method="post">
	<div id="divBusca" name="divBusca" >
		<input type="text" id="txtBusca" name="txtBusca" placeholder=" Buscar..." />
		<img src="https://i.postimg.cc/Wzz4ZttN/image.png" height="25" width="23" name="lupa" id="lupa"/>  
	</div>
	<div name="pesquisa" id="pesquisa">
		<input value="Pesquisar" type="submit" name="pesquisar">
	</div>
</form><br><br>
<?php echo $msg;?>