<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/> -->		<!-- Appel de Bootstrap -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->

		<title>AssuranceTourix | Billeterie</title>
	</head>

	<!-- Début du body -->

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
			<form action="../Controleur/controleur_recapitulatif_billet.php" method="post" >
				<div class="table-responsive col-xs-offset-2 col-xs-8 table_billeterie">
					<table class="table table-striped table-bordered" id="table">
						<thead>
							<!-- Titre de la table -->
							<caption>Achat billets</caption>
							<tr>
								<!-- Titres des colonnes -->
								<th class="th_billeterie">Type</th>
								<th class="th_billeterie">Prix</th>
								<th class="th_billeterie">Quantité</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Adulte</td>
								<td>41 €</td>
								<td>
									<select name="select_quantite_adulte">
										<optgroup label="Quantité">
											<option value="0" selected="selected">0</option>
											<option disabled="disabled">---</option>
											<?php
												for ($i = 1; $i <= count($tableau_quantite); $i++)
												{
													echo "<option value='".$i."'>".$tableau_quantite[$i]."</option>";
												}
											?>
										</optgroup>
									</select>
								</td>
							</tr>
							<tr>
								<td>Enfant (de 4 à 11 ans inclus)</td>
								<td>36 €</td>
								<td>
									<select name="select_quantite_enfant">
										<optgroup label="Quantité">
											<option value="0" selected="selected">0</option>
											<option disabled="disabled">---</option>
											<?php
												for ($i = 1; $i <= count($tableau_quantite); $i++)
												{
													echo "<option value='".$i."'>".$tableau_quantite[$i]."</option>";
												}
											?>
										</optgroup>
									</select>
								</td>
							</tr>
							<tr>
								<td>Senior (à partir de 60 ans)</td>
								<td>38 €</td>
								<td>
									<select name="select_quantite_senior">
										<optgroup label="Quantité">
											<option value="0" selected="selected">0</option>
											<option disabled="disabled">---</option>
											<?php
												for ($i = 1; $i <= count($tableau_quantite); $i++)
												{
													echo "<option value='".$i."'>".$tableau_quantite[$i]."</option>";
												}
											?>
										</optgroup>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div>
					<div class="col-xs-12 div_ajout">
						<!-- Bouton j'envoie tout dans la BDD -->
						<button class="btn btn-success" type="submit" id="bouton_enregistrer"><span class="glyphicon glyphicon-ok-sign" id="glyphicon"></span>Ajouter au panier</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
