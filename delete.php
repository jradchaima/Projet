<?php
     include './vehicule.class.php';
    $vehicule = new vehicule;
    $vehicule->deleteVehicule($_GET['vid']);
    header('Location:vindex.php?notif=delete');
    ?>