<!DOCTYPE html>
<html lang="en">
<head>
	<title>Listes des vehicules</title>
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
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
				<br>
        <a href="create.php" class="btn btn-primary">Nouvelle vehicule</a>
        <br>
        <br>
							<table>
                            
									<tr class="row100 head">
										<th class="column5">&nbsp &nbsp &nbsp Identifiant_Vehicule</th>
										<th class="column5">Statut_Vehicule</th>
										<th class="column5">Numero_vehicule</th>
									    <th class="column5">Operations</th>
									</tr>
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
								
								
							</table>
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

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>