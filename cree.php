<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="imagess/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/util.css">
	<link rel="stylesheet" type="text/css" href="cs/main.css">
<!--===============================================================================================-->
</head>
<body>
		<?php
        if (isset($_POST['sub'])) {
            include 'C:\xampp\htdocs\projet\vehicule\classes\vehicule.class.php';
            $vehicule = new vehicule;
            $vehicule->addNewVehicule($_POST['statut'], $_POST['vehicule_num']);
            header('Location:vehicindx.php?notif=add');
            exit();
        }
        ?>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Ajouter une vehicule
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Champs obligatoire ">
					<span class="label-input100" for="statut">Statut de  la vehicule</span>
					<input class="input100" type="text" required name="statut" id="statut" placeholder="1-disponible / 0-non disponible">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Champs obligatoire ">
						<span class="label-input100" for="vehicule_num">Numero de la vehicule</span>
						<input class="input100" type="text" required name="vehicule_num" id="vehicule_num" placeholder="Numero_vehicule">
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="sub">
						Enregistrer
					</button><br><br><br>
					<button class="contact100-form-btn" type="reset">
							
								Annuler
							
							
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendorr/daterangepicker/moment.min.js"></script>
	<script src="vendorr/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="jss\main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
