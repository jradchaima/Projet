<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des employés</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Liste des employés</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Employé ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Employé modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'Employé supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <a href="add.php" class="btn btn-primary">Nouveau Employé</a>
        <br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>mot de passe</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'classes/Employé.class.php';
                    $Employé = new Employé;
                    $ListeEmployé = $Employé->readAllEmployés();
                    $data = $ListeEmployé->fetchAll(); //une autre façon pour fetcher les données
                    // une autre façon pour ouvrir une structure entre le php et le HTML
                    //on ouvre la boucle avec les deux points(:)
                    foreach($data as $EmployéData):
                    ?>
                        <tr>
                            <td><?= $EmployéData['eid'] ?></td>   
                            <td><?= $EmployéData['nom'] ?></td>   
                            <td><?= $EmployéData['phno'] ?></td>  
                            <td><?= $EmployéData['email'] ?></td>   
                            <td><?= $EmployéData['mot_pasee'] ?></td>
                            <td>
                                <a href='edit.php?id=<?= $EmployéData['eid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;
                                <a href='delete.php?id=<?= $EmployéData['eid'] ?>' class="btn btn-outline-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach //on ferme la boucle qu'on a ouvert précédemment avec php ?>
            </tbody>
        
        
</table>


<a href="logout.php" class="btn btn-primary">Logout</a>
						
					
				</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>