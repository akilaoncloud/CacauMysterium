<?php
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
            src: url(fontes/SaintCarellClean_PERSONAL_USE_ONLY.otf) format('opentype');
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
            font-family: 'SaintCarell';
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
    <form action="cadastro.php" method="post" id="formulario">
        <h1>Cadastro de Usuário</h1>
        <label for="nome_completo">Nome completo:</label><br>
        <input type="text" id="nome_completo" name="nome_completo" required/><br><br>

        <label for="nome_usuario">Nome de usuário:</label><br>
        <input type="text" id="nome_usuario" name="nome_usuario"required/><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"required/><br><br> 

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"required><br><br>

        <input type="submit" value="Cadastrar" id="Cadastrar" name="Cadastrar">
    </form>
      
</body>
</html>