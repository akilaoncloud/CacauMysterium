<?php
include_once "../build/verificaLogon.php";
include_once "../class/conexao.php";
include_once "../class/usuarios.php";
include_once "../dao/usuariosDAO.php";

$msg = "";
if (!empty($_POST)){
    $objeto = new Usuarios;
    $objeto->set("nomeUser", $_SESSION["login"]);
    $objeto->set("email", $_POST["email"]);
    $objeto->set("senha", $_POST["senha"]);
    $msg = $objeto->alterar();
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
            margin: 0px;
            height: 100vh;
            background-color: #521800;
            font-family: 'SaintCarell';
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        form{
            color: rgb(255,248,220);
        }

        input{
            background-color: rgb(255,248,220);
            border-color: rgb(102, 56, 56);
            font-family: 'Times New Roman', Times, serif;
            font-size: medium;
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
    <form action="" method="post" id="formulario">
        <h1>Alterar Cadastro</h1>        
        <label for="email">Novo Email:</label><br>
        <input type="text" id="email" name="email"required/><br><br>
        
        <label for="senha">Nova Senha:</label><br>
        <input type="password" id="senha" name="senha"required/><br><br><br>
        <input type="submit" value="Alterar" id="button"><br><br>
        <?php echo $msg;?>
    </form>
</body>
</html>
