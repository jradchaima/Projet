<?php
   include '.\classes\Employé.class.php';
    $Employé = new Employé;
    $Employé->deleteEmployé($_GET['id']);
    header('Location:admin.php?notif=delete');