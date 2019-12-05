<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editer le client N°<?= $_GET['id'] ?></title>
</head>
<body>
<?php
        include './classes/Employé.class.php';
        $Employé = new Employé;
        if (!empty($_POST)) {
            $Employé->updateEmployé($_POST['eid'],$_POST['nom'], $_POST['phno'], $_POST['email'], $_POST['mot_pasee']);
            header('Location:index1.php?notif=update');
            exit();
        } else{
        $showEmployé = $Employé->showOneEmployé($_GET['id']);
        $data = $showEmployé->fetch();

        }


?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Editer un employés</h3>
        </div>
        <fieldset>
            <legend>Mettre à jour employé N°<?= $data['eid'] ?>
            </legend>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['eid'] ?>" name="eid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">nom</label>
                            <input type="text"  value="<?= $data['nom'] ?>" name="nom" class="form-control" id="nom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phno">phone</label>
                            <input type="number"  value="<?= $data['phno'] ?>" name="phno" class="form-control" id="phno">
                        </div>
                    </div>
                </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email"  value="<?= $data['email'] ?>" name="email" class="form-control" id="email">
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mot_pasee">passe</label>
                            <input type="text"  value="<?= $data['mot_pasee'] ?>" name="mot_pasee" class="form-control" id="mot_pasee">
                        </div>
                    </div>
                    
                </div>
             
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
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
