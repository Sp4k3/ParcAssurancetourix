<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/>	 -->	<!-- Appel de Bootstrap -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->

		<title>AssuranceTourix | Choix parcours</title>
	</head>
	<body>
		<div>
			<?php
				include_once "header.php";
			?>
		</div>
		<div class="body_general">
			<div class="col-xs-12 div_connect_disconnect">
				<a class="btn btn-success" href="../Controleur/controleur_deconnexion.php">Deconnexion</a>
			</div>
			<form action="./enregistrement_parcours.php" method="post" >
				<div class="container div_container">
					<?php
					if(isset($parcours_auto))
					{
					?>
						<h1 class="titre_parcours"> Proposition de parcours </h1>
						<div class="table-responsive col-xs-offset-2 col-xs-8 div_table">
							<table class="table table-striped table-bordered" id="table">
								<thead>
									<tr>
										<th rowspan="2" class="th_vide"></th>
									</tr>
									<tr class="tr_general">
										<th class="td_general">Restaurants</th>
										<th class="td_general">Attractions</th>
										<th class="td_general">Durée</th>
										<th rowspan="2" class="th_vide"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="numero_parcours">1er Parcours</td>
										<td class="td_general"><?php echo $nom_restaurants_1; ?></td>
										<td class="td_general"><?php echo $nom_attractions_1; ?></td>
										<td class="td_general">2 h</td>
										<td  class="td_input_parcours"><input class="input_parcours" type="checkbox" name="parcours_1"></td>
										<input type="hidden" name="restaurant_parcours_1" value="<?php echo $id_restaurants_1; ?>">
										<input type="hidden" name="attraction_parcours_1" value="<?php echo $id_attractions_1; ?>">
										<input type="hidden" name="duree_parcours_1" value="2">
									</tr>
								</tbody>
							</table>
						</div>

						<div class="table-responsive col-xs-offset-2 col-xs-8 div_table">
							<table class="table table-striped table-bordered" id="table">
								<thead>
									<tr>
										<th rowspan="2" class="th_vide"></th>
									</tr>
									<tr class="tr_general">
										<th class="td_general">Restaurants</th>
										<th class="td_general">Attractions</th>
										<th class="td_general">Durée</th>
										<th rowspan="2" class="th_vide"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="numero_parcours">2eme Parcours</td>
										<td class="td_general"><?php echo $nom_restaurants_2; ?></td>
										<td class="td_general"><?php echo $nom_attractions_2; ?></td>
										<td class="td_general">3 h</td>
										<td class="td_input_parcours"><input class="input_parcours" type="checkbox" name="parcours_2"></td>
										<input type="hidden" name="restaurant_parcours_2" value="<?php echo $id_restaurants_2; ?>">
										<input type="hidden" name="attraction_parcours_2" value="<?php echo $id_attractions_2; ?>">
										<input type="hidden" name="duree_parcours_2" value="3">
									</tr>
								</tbody>
							</table>
						</div>
					<?php
					}
					?>


					<h1 class="col-xs-12 titre_parcours"> Je crée mon parcours </h1>
					<div class="table-responsive col-xs-offset-2 col-xs-8 div_table">
						<table class="table table-striped table-bordered" id="table">
							<thead>
								<tr class="tr_general">
									<th class="td_general">Restaurants</th>
									<th class="td_general">Attractions</th>
									<th class="td_general">Durée</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="td_general">
										<select name="select_restaurant">
											<optgroup label="Restaurant">
			<?php	
											for ($i = 0; $i < $nombre_restaurants; $i++)
											{
			?>
												<option value="<?php echo $res_restaurants[$i]['id_restaurant']; ?>"><?php echo $res_restaurants[$i]['nom']; ?></option>
			<?php
											}
			?>
											</optgroup>
										</select>
									</td>
									<td class="td_general">
										<select name="select_attraction">
											<optgroup label="Attractions">
			<?php	
											for ($i = 0; $i < $nombre_attractions; $i++)
											{
			?>
												<option value="<?php echo $res_attractions[$i]['id_attraction']; ?>"><?php echo $res_attractions[$i]['nom']; ?></option>
			<?php
											}
			?>
											
											</optgroup>
										</select>
									</td>
									<td class="td_general">2 h</td>
									<input type="hidden" name="duree_parcours_creer" value="2">
								</tr>
							</tbody>
						</table>
					</div>

					<div class="col-xs-12 bouton_enregistrer_parcours">
						<button class="btn btn-success" type="submit" id="bouton_enregistrer"><span class="glyphicon glyphicon-ok-sign" id="glyphicon"></span> Valider</button>
					</div>
				</form>
			</div>
		</body>
	</html>
