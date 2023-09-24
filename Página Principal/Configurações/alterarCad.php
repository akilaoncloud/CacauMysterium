<?php session_start() ?>

<?php
    if(isset($_SESSION['login'])) {

        include('telaAltCad.php');

        if(isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.html');
        }

    } else { 
        include('../../Login/TelaLogin.php');
    }

?>