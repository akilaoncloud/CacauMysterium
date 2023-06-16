<?php
include "Produtos.php";
include "ProdutosDAO.php";
include "conexao.php";

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
            src: url(fontes/SaintCarellClean_PERSONAL_USE_ONLY.otf) format('opentype');
            font-size: 40px;
            font-style: normal;
        }
        body{
            background-image: url(https://i.postimg.cc/QMfDsN22/fundoform.png);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'SaintCarell';
        }
        form{
            font-size: 20px;
            color: white;
            padding: 0, 25%;
            text-align: left;
            position: absolute;
            top: 26%;
            left: 14%;

        }
        input{
            color: rgb(109, 23, 23);
            background-color: rgb(255, 255, 255);
            border-color: rgb(90, 46, 46);
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            height: 24px;
            width: 90%;
            outline: 0;
            border-radius: 15px;
            text-align: center;
        }
        input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        #cadastrar{
            width: 40%;
            font-family: 'SaintCarell';
            font-size: medium;
        }
        #img{
            background-image: none;
        } 
    </style>
</head>
<body>
    <form id="formProduto" method="post" action="">
        <h1>Cadastrar Produto</h1>
        Nome do Produto:<br> <input type="text" id="nomeProd" required /><br><br>
        Descrição: <br><input type="text" id="descricao" required /><br><br>
        Código: <br><input type="number" id="codigo" required /><br><br>
        Preço unitário: <br><input type="number" id="precoUn" required /><br><br>
        <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar" />
    </form>
    <div id="img">
    </div>
</body>
</html>
