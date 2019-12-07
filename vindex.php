<!DOCTYPE html>
<html lang="en">
 <body>
  <div class="container py-3">
        <div class="jumbotron text-center">
            <h3>Liste des Vehicules</h3>
        </div>
        <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'Vehicule ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Vehicule modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'Vehicule supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
        <br>
        <a href="create.php" class="btn btn-primary">Nouvelle vehicule</a>
        <br>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Vid</th>
                    <th>Status</th>
                    <th>Numero</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './classes/vehicule.class.php';
                    $vehicule = new vehicule;
                    $listVehicule= $vehicule->readAllvehicules();
                    $data = $listVehicule->fetchAll(); //une autre façon pour fetcher les données
                    // une autre façon pour ouvrir une structure entre le php et le HTML
                    //on ouvre la boucle avec les deux points(:)
                    foreach($data as $vehiculetData):
                    ?>
                        <tr>
                            <td><?= $vehiculetData['vid'] ?></td>   
                            <td><?= $vehiculetData['statut'] ?></td>   
                            <td><?= $vehiculetData['vehicule_num'] ?></td>
                            <td>
                                <a href='edit.php?vid=<?= $vehiculetData['vid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;
                                <a href='delete.php?vid=<?= $vehiculetData['vid'] ?>' class="btn btn-outline-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach //on ferme la boucle qu'on a ouvert précédemment avec php ?>
            </tbody>
        </table>
    </div>
  </body>
</html>