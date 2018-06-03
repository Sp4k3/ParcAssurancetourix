<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
	<!-- 	<link href="dist/css/bootstrap.css" rel="stylesheet"/> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<link rel="stylesheet" type="text/css" href="type.css"/>
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="/ParcAssurancetourix/dist/css/styles_assurance.css" rel="stylesheet"/>

		<title>AssuranceTourix | Attractions</title>
	</head>

	<!-- Début du body -->
	<body>
		<div>
			<?php
				include_once "./header.php";
			?>
		</div>

		<div class="body_billet">
			<h1 class="titre_billet"><a href="../Controleur/controleur_achat_billet.php" class="offre">Nos offres en ligne</a></h1>
			<span>Bénéficiez de tarifs exceptionnels afin de devenir un vrai petit gaulois</span>

			<h1 class="titre_billet">Nos offres sur place</h1>
			<span>Le billet d'entrée au Parc Assurancetourix donne accès à l'ensemble des spectacles et attractions pour la journée</span>			
		</div>

		<div class="table-responsive col-xs-offset-2 col-xs-8">
			<table class="table table-striped table-bordered" id="table">
				<thead>
					<tr class="tr_billet">
						<th class="th_billet">Billets</th>
						<th>Gaulois adulte (à partir de 12 ans)</th>
						<th>Gaulois enfant (de 3 à 11 ans inclus)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Plein tarif</td>
						<td class="prix">49 €</td>
						<td class="prix">41 €</td>
					</tr>
					<tr>
						<td>Famille *</td>
						<td class="prix">45 €</td>
						<td class="prix">36 €</td>
					</tr>
					<tr>
						<td>Personnes à mobilité réduite **</td>
						<td class="prix">39 €</td>
						<td class="prix">34 €</td>
					</tr>
					<tr>
						<td>Groupes (à partir de 20 personnes payantes) ***</td>
						<td class="prix">42 €</td>
						<td class="prix">39 €</td>
					</tr>
				</tbody>
			</table>
			<div>
				<span>Parking (par voiture) : 10 € / jour.</span><br>
				<span>Entrée gratuite pour les enfants de moins de 3 ans.</span><br>
				<span>(*) = Offre valable pour les familles à partir de 5 billets achetés en une seule transaction (parents et enfants). Pour une famille nombreuse achetant moins de 5 billets, un justificatif vous sera demandé.</span><br>
				<span>(**) = Sur présentation de la carte d'invalidité (orange) ou de la carte priorité pour personnes handicapées (violette).</span><br>
				<span>(***) = Tarif accordé uniquement au guide ou au chauffeur réglant l'intégralité des billets d'entrée à la caisse des bus en indiquant les coordonnées de l'autocariste.</span><br>
			</div>
		</div>

		<div class="footer col-xs-12">
			<?php
				include_once "./footer.php";
			?>
		</div>

	</body>
</html>	