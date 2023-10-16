<?php
include "conexao.php";
include "../class/endereco.php";
include "../dao/enderecoDAO.php";

$msg = "";
if (!empty($_POST)){
    $objeto = new Endereco;
    $objeto->set("logradouro", $_POST["logradouro"]);
    $objeto->set("numero", $_POST["numero"]);
    $objeto->set("bairro", $_POST["bairro"]);
    $objeto->set("cidade", $_POST["cidade"]);
    $objeto->set("estado", $_POST["estado"]);
    $msg = $objeto->cadastrar();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        <h1>Cadastro de Endereço</h1>
        <label for="logradouro">Logradouro:</label><br>
        <input type="text" id="logradouro" name="logradouro" required/><br><br>

        <label for="numero">Número:</label><br>
        <input type="number" id="numero" name="numero"required/><br><br>
        
        <label for="bairro">Bairro:</label><br>
        <input type="text" id="bairro" name="bairro"required/><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"required/><br><br> 

        <label for="estado">Estado:</label><br>
        <input type="text" id="estado" name="estado"required><br><br>

        <input type="submit" value="Cadastrar" id="button" >
    </form>
</body>
</html>
