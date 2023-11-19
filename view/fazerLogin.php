<?php
session_start();
if(isset($_SESSION['login'])) { header('Location: index.php'); }

include_once "../class/conexao.php";
include_once "../class/usuarios.php";
include_once "../dao/usuariosDAO.php";

if (!empty($_POST)){
    $objeto = new Usuarios;
    $objeto->set("nomeUser", $_POST["nomeUser"]);
    $objeto->set("senha", $_POST["senha"]);
    $objeto->validarLogin();    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            top: 36%;
            left: 14%;

        }
        input{
            background-color: rgb(255,248,220);
            border-color: rgb(102, 56, 56);
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
            width: 290px;
            outline: 0;
            border-radius: 15px;
            text-align: center;
        }
        #button{
            width: 40%;
            font-family: 'SaintCarell';
            color:rgb(92, 36, 36);
            cursor: pointer;
        }
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        a {
            color: rgb(255, 230, 230);
        }
        a:hover{
            color: rgb(255, 230, 230);
            text-decoration: none;
        }
        a:link{
            color: rgb(255, 230, 230);
            text-decoration: none;
        }
        a:visited{
            color: rgb(255, 230, 230);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <form action="" method="post" id="formulario">
        <h1>Login</h1>
        <label for="nomeUser">Nome de usuário:</label><br>
        <input type="text" id="nomeUser" name="nomeUser" required/><br><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required/><br><br>

        <input type="submit" value="Entrar" id="button"><br><br>

        <a href="esqueceuSenha.php">Esqueceu sua senha?</a><br><br>
        <a href="cadUsuario.php">Não tem uma conta? cadastre-se</a><br>
    </form>
    
</body>
</html>
