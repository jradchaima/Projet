<?php
    include 'classes/Employé.class.php';
    $Employé = new Employé;
    $Employé->deleteEmployé($_GET['id']);
    header('Location:index1.php?notif=delete');