<?php
include_once "../class/conexao.php";
include_once "../class/produtos.php";
include_once "../dao/produtosDAO.php";

$msg = "";
if (!empty($_POST)){
    $objeto = new Produtos;
    $objeto->set("nomeProd", $_POST["nomeProd"]);
    $objeto->set("descricao", $_POST["descricao"]);
    $objeto->set("codigo", $_POST["codigo"]);
    $objeto->set("precoUn", $_POST["precoUn"]);
    $msg = $objeto->Cadastrar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        @font-face {
            font-family: 'SaintCarell';
            src: url(../font/SaintCarellClean.otf) format('opentype');
            font-size: 40px;
            font-style: normal;
        }

        body{
            text-align: center;
            background-image: url(https://i.postimg.cc/QMfDsN22/fundoform.png);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'SaintCarell';
        }
        form{
            color: 	rgb(255,248,220);
            padding: 0, 25%;
            text-align: left;
            position: absolute;
            top: 27%;
            left: 14%;

        }
        input{
            background-color: rgb(255,248,220);
            border-color: rgb(102, 56, 56);
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            width: 90%;
            outline: 0;
            border-radius: 15px;
            text-align: center;
        }
        #Cadastrar{
            width: 40%;
            font-family: 'SaintCarell';
            color:rgb(102, 56, 56);
        }
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }        
    </style>
</head>
<body>
    <?php echo $msg;?>
    <form action="" method="post" id="formulario">
        <h1>Cadastro de Produto</h1>
        <label for="nomeProd">Nome do Produto:</label><br>
        <input type="text" id="nomeProd" name="nomeProd" required/><br><br>

        <label for="descricao">Descrição:</label><br>
        <input type="text" id="descricao" name="descricao"required/><br><br>
        
        <label for="codigo">Código:</label><br>
        <input type="text" id="codigo" name="codigo"required/><br><br>

        <label for="precoUn">Preço Unitário:</label><br>
        <input type="password" id="precoUn" name="precoUn"required/><br><br>

        <input type="submit" value="Cadastrar" id="button" >
    </form>
</body>
</html>
