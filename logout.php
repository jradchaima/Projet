<?php
    session_start();
    session_destroy();
    unset($_SESSION['nom']);
    unset($_SESSION['email']);
    if(isset($_SESSION['admin'])){
        unset($_SESSION['admin']);
    }
    header("Location: login.php");
    ?>