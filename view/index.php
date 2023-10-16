<?php 
    include_once "../build/verificaLogon.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/barraPesquisa.css">
    <title>Cacau Mysterium</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="?logout=true">Sair</a></li>
                <li><a href="loja.html">Carrinho</a></li>
                <li><a href="configConta.php">Configurações</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php include_once "../build/barraPesquisa.php";?>
    </main>
</body>
</html>