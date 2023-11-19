<?php 
    include_once "../build/verificaLogon.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css" />
    <title>Configurações</title>
</head>
<body>
	<header>
		<div id="logodiv">
			<img id="logo" src="../image/logo.png" alt="Cacau Mysterium" />
		</div>
		<nav>
			<ul id="menu" class="display dmenu">
                <a href="#" onclick="changeIframe('configUsuario.php')">
					<li>Cadastro</li>
				</a>
				<a href="#" onclick="changeIframe('configEndereco.php')">
					<li>Endereço</li>
				</a>
                <a href="index.php">
                    <li>Voltar</li>
                </a>
			</ul>
		</nav>
	</header>
	<main id="imgfundo" class="display">
        <iframe id="optConfig" src="configUsuario.php" width="700px" height="500px"></iframe>
    </main>
    <script>
        function changeIframe(src) {
            document.getElementById('optConfig').src = src;
        }
    </script>
</body>
</html>