<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Nos formulaire</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>


        <?php
        if (isset($_POST['sub'])) {
            include 'classes\Employé.class.php';
            $Employé = new Employé;
            $Employé->addNewEmployé($_POST['nom'], $_POST['phno'], $_POST['email'], $_POST['mot_pasee']);
            header('Location: admin.php?notif=add');
            exit();
        }
    ?>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Ajouter un nouveau employé</h2>
                    <form action="" method="post">

                            <div class="input-group">
                                    <label for="nom"></label>
                                <input type="text" required name="nom" class="input--style-2" placeholder="Nom" id="nom">
                                
                            </div>


                        <div class="input-group">
                            <label for="phno"></label>
                            <input type="number" required name="phno" class="input--style-2" id="phno"placeholder="Numéro téléphone">
                        </div>


                        <div class="input-group">
                                <label for="email"></label>
                                <input type="email" required name="email" class="input--style-2" id="email"placeholder="Adresse Email">
                            </div>


                            <div class="input-group">
                                    <label for="mot_pasee"></label>
                                    <input type="password" required name="mot_pasee" class="input--style-2" id="mot_pasee"placeholder="Mot de passe">
                              </div>

                        
                              <button type="submit" name="sub" class="btn btn--radius btn--green">Enregistrer</button>
                   
                    
                              <button type="reset" class="btn btn--radius btn--green">Annuler</button>
                         


                      
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->