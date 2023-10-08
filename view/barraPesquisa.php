<?php

include "../conexao.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		#divBusca{
			background-color:#fff;
			border:solid 1px;
			border-radius:20px 20px 20px 20px;
			width:285px;
			outline: 0;
			position: fixed;
		}

		#txtBusca{
			float:left;
			background-color:transparent;
			padding-left:6px;
			font-style:italic;
			font-size:16px;
			border:none;
			height:28px;
			width:240px;
			outline: 0;
		}

		#lupa{
			position: relative;
			border-radius:20px 20px 20px 20px;
			padding-top: 2px;
		}

		#button{
			float:relative;
			padding-left:290px;
			padding-top: 5px;
		}

    </style>
</head>
<body>
	<form action="" method="post">
		<div id="divBusca" name="divBusca" >
			<input type="text" id="txtBusca" name="txtBusca" placeholder=" Buscar..." />
			<img src="https://i.postimg.cc/Wzz4ZttN/image.png" height="25" width="23" name="lupa" id="lupa"/>  
		</div>
		<div name="button" id="button">
			<input value="Pesquisar" type="submit" name="pesquisar">
		</div>
	</form>
	<br><br>
	<?php echo $msg;?>
</body>
</html>
