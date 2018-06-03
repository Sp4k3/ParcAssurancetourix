<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/> -->		<!-- Appel de Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->

		<title>AssuranceTourix | Mon parcours</title>
	</head>

	<!-- Début du body -->
	<body>
		<div>
			<?php
				include_once "header.php";
			?>
		</div>
		<div class="body_general">
			<div class="container">
				<h1 class="td_general"> Mon parcours </h1>
				<div class="table-responsive col-xs-12 div_table">
					<table class="table table-striped table-bordered" id="table">
						<thead>
							<tr>
								<th rowspan="2" class="th_vide"></th>
							</tr>
							<tr class="tr_general">
								<th class="td_general_grand">Restaurants</th>
								<th class="td_general">Attractions</th>
								<th class="td_general">Durée</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="th_mon_parcours">Mon Parcours</td>
								<td class="td_general_grand"><?php echo $nom_restaurant; ?></td>
								<td class="td_general_grand"><?php echo $nom_attraction; ?></td>
								<td rowspan="2" class="td_duree"><?php echo $duree_parcours; ?> h</td>
							</tr>
							<tr>
								<td class="th_mon_parcours">Description</td>
								<td class="td_recap_parcours"><?php echo $description_restaurant; ?></td>
								<td class="td_recap_parcours"><?php echo $description_attraction; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>