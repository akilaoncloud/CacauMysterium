<?php
    session_start();

    if(isset($_SESSION['login'])) {

        if(isset($_GET['logout']) and $_GET['logout'] == "true") {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: ../view/fazerLogin.php');
        }
        
    } else { 
        header('Location: ../view/fazerLogin.php');
    }

?>
