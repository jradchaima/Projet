<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau Employé</title>
</head>
<body>
    <?php
        if (isset($_POST['sub'])) {
            include './classes/Employé.class.php';
            $Employé = new Employé;
            $Employé->addNewEmployé($_POST['nom'], $_POST['phno'], $_POST['email'], $_POST['mot_pasee']);
            header('Location:index1.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau employé</h3>
        </div>
        <fieldset>
            <legend>Nouveau employé</legend>
            <form action="" method="post">
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        
                            <label for="nom">nom</label>
                            <input type="text" required name="nom" class="form-control" id="nom">
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phno">phone</label>
                            <input type="number" required name="phno" class="form-control" id="phno">
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" required name="email" class="form-control" id="email">
                         </div>
                    </div>
              
                    
              
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mot_pasee">passe</label>
                            <input type="text" required name="mot_pasee" class="form-control" id="mot_pasee">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" name="sub" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</body>
</html>