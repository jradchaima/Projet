<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicules</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
<div class="limiter container py-3">
        <div class="jumbotron text-center limiter container py-3">
            <h3>Liste des vehicules</h3>
		</div>
		
		<br><br>
              <?php if (isset($_GET['notif'])): ?>
                   <div class="alert alert-success alert-info">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php
                    if ($_GET['notif'] == 'add') echo 'Vehicule ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'Vehicule modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'Vehicule supprimé avec succés';
                ?>
             </div>
			<?php endif ?>
			<br><br><br>
        <a href="cree.php" class="btn btn-primary">Nouveau Vehicule</a>	   
		<div class="limiter container py-3">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Identifiant_Vehicule</th>
									<th class="cell100 column2">Statut_Vehicule</th>
									<th class="cell100 column3">Numero_vehicule</th>
									<th class="cell100 column4">Operations</th>

								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							<?php
                              include 'C:\xampp\htdocs\projet\vehicule\classes\vehicule.class.php';
                               $vehicule = new vehicule;
                               $listVehicule= $vehicule->readAllvehicules();
                               $data = $listVehicule->fetchAll(); //une autre façon pour fetcher les données
                             // une autre façon pour ouvrir une structure entre le php et le HTML
                             //on ouvre la boucle avec les deux points(:)
                              foreach($data as $vehiculetData):
                            ?>	
								<tr class="row100 body">
									<td class="cell100 column1"><?= $vehiculetData['vid'] ?></td>
									<td class="cell100 column2"><?= $vehiculetData['statut'] ?></td>
									<td class="cell100 column3"><?= $vehiculetData['vehicule_num'] ?></td>
									<td class="cell100 column4"> <a href='edit.php?vid=<?= $vehiculetData['vid'] ?>' class="btn btn-outline-info">Editer</a>&nbsp;&nbsp;
                                <a href='delete.php?vid=<?= $vehiculetData['vid'] ?>' class="btn btn-outline-danger">Supprimer</a></td>
									
								</tr>
								<?php endforeach //on ferme la boucle qu'on a ouvert précédemment avec php ?>		
								
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>