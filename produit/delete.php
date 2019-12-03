<?php
    include 'classes/produit.class.php';
    $produit = new Produit;
    $produit->deleteProduct($_GET['pid']);
    header('Location:../index.php');
    ?>