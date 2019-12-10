
    <?php

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $adresse=$_POST['adresse'];
        $pwd=$_POST['pwd'];

        if (!empty($_POST)) {
            include 'client.class.php';
            $client = new Client;
            $rep = $client->addNewClient($name,$email,$phone,$adresse,$pwd);
            header('location:index.php');          
        }
    ?>

