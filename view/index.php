<?php
include_once "../build/verificaLogon.php";
include_once "../class/conexao.php";
include_once "../class/produtos.php";
include_once "../dao/produtosDAO.php";

$objeto = new Produtos;
$produtos = $objeto->verTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width:device-width, initial-scale=1.0" />
	<title>Cacau Mysterium</title>
	<link rel="stylesheet" href="../css/barraPesquisa.css" />
	<link rel="stylesheet" href="../css/estilo.css" />
</head>

<body>
	<header>
		<div id="logodiv">
			<img id="logo" src="../image/logo.png" alt="Cacau Mysterium" />
		</div>
		<nav>
			<ul id="menu" class="display dmenu">
				<a href="loja.html">
					<li>Carrinho</li>
				</a>
				<a href="configConta.php">
					<li>Configurações</li>
				</a>
				<a href="?logout=true">
					<li>Sair</li>
				</a>
			</ul>
		</nav>
	</header>
	<section id="imgfundo" class="display">
		<div id="text-title" class="display centralizado">
			<h1 id="title">Cacau Mysterium</h1>
			<h2 id="sbtitle">Sabor do Mistério a Cada Dúvida</h2>
			<a id="action" href="#produtos" target="blank">Comprar Bomboms</a>
		</div>
	</section>
	<main>
		<section id="produtos" class="display destaquep">
			<?php include_once "../build/barraPesquisa.php"; ?>
		</section>
	</main>
	<section id="mecanicas" class="display destaque">
		<h3 id="title-mec">Produtos</h3>
		<div id="mecs" class="display centralizado">
			<?php
			if (isset($resultados) and $resultados != "") {
				$produtos = $resultados;
			}
			foreach ($produtos as $produto) {
				echo
				'
				<div class="text-icon">
				<img class="icons" src="../image/placar.svg" alt="Sistema de pontos" />
				<h4 class="title-icon">' . $produto["nomeProd"] . '</h4>
				<p class="desc-icon">' . $produto["descricao"] . '</p>
				</div>
				';
			}
			?>
		</div>
	</section>
	<footer class="display drodape">
		<div class="text-rodape">
			<h3 class="title-rodape">Cacau Mysterium</h3>
			<p>
				Projeto da turma do 3° TII A de 2023.<br>
				<a class="empresas" href="" target="blank"><b>Repositório do GitHub</b></a>
			</p>
		</div>
		<div class="text-rodape">
			<h3 class="title-rodape">Créditos</h3>
			<p>
				Projeto da turma do 3° TII A de 2023.<br>
				<a class="empresas" href="sobreNos.php" target="blank"><b>Sobre Nós</b></a>
			</p>
		</div>
	</footer>
</body>

</html>