<?php

    session_start();

    include 'client.class.php';

    if(isset($_SESSION['username'])!="") {
        header("Location: index.php");
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto error;
        }

        if(strlen($pwd) < 6) {
            $pwd_error = "Password must be minimum of 6 characters";
            goto error;
        }
       
        
        
        
        $client= new client;
        
        $auth = $client->login($email,$pwd);
        if($auth === false)
        {
            $auth_error = 'Incorrect Email or Password!!!';
        } else {
            session_start();
            $_SESSION['username'] = $auth['username'];
            $_SESSION['email'] = $auth['email'];
            header("Location: dashboard.php");
        }
    }

    error:
    include 'login.phtml';