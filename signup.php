<?php
    session_start();
    session_destroy();
    unset($_SESSION['nom']);
    unset($_SESSION['email']);
    if(isset($_SESSION['client123'])){
        unset($_SESSION['client']);
    }
    header("Location: login.php");
    ?>
