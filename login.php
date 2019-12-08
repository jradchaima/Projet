<?php

    session_start();

    include 'classes/Employé.class.php';

    if(isset($_SESSION['admin'])!=""){
        header("Location: admin.php");
    }elseif(isset($_SESSION['nom'])!=""){
        header("Location: dashboard.php");
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please Enter Valid Email";
            goto error;
        }

        
        $Employé = new Employé;
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $auth = $Employé->login($email, $password);
        if($auth === false)
        {
            $acc_error = 'Compte introuvable!!!';
        } else {

            if($password== 'admin'.$auth['mot_pasee'] ) {
                session_start();
                $_SESSION['nom'] = $auth['nom'];
                $_SESSION['email'] = $auth['email'];
                $_SESSION['admin']="admin";
                header("Location: admin.php");
            }elseif($password==$auth['mot_pasee']){
                session_start();
                $_SESSION['nom'] = $auth['nom'];
                $_SESSION['email'] = $auth['email'];
                header("Location: employe.php");
            }else{
                $auth_error="Password invalid!!";
            }
        }
    }

    error:
    include 'ContactFrom_v18/login.phtml';