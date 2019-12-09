<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Nouveau client</title>
</head>
<body>
    <?php
        if (!empty($_POST)) {
            include './classes/produit.class.php';
            $produit = new produit;
            $produit->AjouterProduit($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['fichier']);
            header('Location:employe.php?notif=add');
            exit();
        }
    ?>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Ajouter un nouveau produit</h3>
        </div>
        <fieldset>
            <legend>Nouveau produit</legend>
            <form action="" method="post">
                
                   
                     <label for="nom">
                          nom
                        </label>
                        <input type="text" required class="form-control" name="nom" id="nom">


                       
                        <label for="description">
                           description
                        </label>
                        <input type="text" required class="form-control" name="description" id="description">

                  
                    <label for="prix">
                           prix
                        </label>
                        <input type="number" required class="form-control" name="prix" id="prix">

          <label for="fichier">
                           fichier
                        </label>
                        <input type="text" required class="form-control" name="fichier" id="fichier">

             
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-block btn-outline-secondary">Annuler</button>
                    </div>
               
            </form>
        </fieldset>
    </div>
</body>
</html>