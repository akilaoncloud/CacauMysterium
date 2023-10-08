<?php
    session_start();

    if(isset($_SESSION['login'])) {

        if(isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.html');
        }
        
    } else { 
        header('Location: login.php');
    }

?>
