<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/>	 -->	<!-- Appel de Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Appel de jquery-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Appel de Bootstrap js-->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->

		<title>AssuranceTourix | Visite</title>
	</head>

	<!-- Début du body -->
	<body>
		<div>
			<?php
				include_once "./header.php";
			?>
		</div>
		<div class="body_visite">
			<div class="col-xs-12 btn_connect_visite">
				<a class="btn btn-success" href="../indexFormulaire.php">Première visite</a>
				<a class="btn btn-success" href="../Controleur/controleur_connexion.php">Connexion</a>
			</div>
			<div>
				<h1 class="titre_venir">Venir au parc Assurancetourix</h1>
				<a class="btn btn-success" href="https://www.google.fr/maps/dir//49.1348056,2.5720556/@48.9382533,2.066443,9.78z/data=!4m8!1m7!3m6!1s0x0:0x0!2zNDnCsDA4JzA1LjMiTiAywrAzNCcxOS40IkU!3b1!8m2!3d49.1348056!4d2.5720556" role="button">Calculer votre itinéraire</a>
			</div>

			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391326.5533905631!2d2.0664429851863573!3d48.93825332561831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDA4JzA1LjMiTiAywrAzNCcxOS40IkU!5e0!3m2!1sfr!2sfr!4v1512139302466" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div>
				<h1 class="titre_venir">Questions fréquentes</h1>
			</div>

			<div id="exampleAccordion" data-children=".item">
				<div class="item">
					<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="true" aria-controls="exampleAccordion1">
						Quel est le meilleur jour pour venir sans qu’il y ait trop de monde ?
					</a>
					<div id="exampleAccordion1" class="collapse" role="tabpanel">
					<p class="mb-3">
						Si vous le pouvez, il est préférable de venir en semaine hors jours fériés et ponts, et si vous êtes libre le week-end seulement, préférez le samedi.
					</p>
					</div>
				</div>
				<div class="item">
					<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2">
					Avez vous des places de parking réservées aux personnes à mobilité réduite ?
					</a>
					<div id="exampleAccordion2" class="collapse" role="tabpanel">
						<p class="mb-3">
							Oui, prévenez l'opérateur parking qui vous indiquera les places réservées. Celles-ci sont situées sur les parkings P1 et P2, à proximité des caisses.
						</p>
					</div>
				</div>
				<div class="item">
					<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" aria-expanded="false" aria-controls="exampleAccordion3">
					Peut-on utiliser les titres restaurant sur le Parc ?
					</a>
					<div id="exampleAccordion3" class="collapse" role="tabpanel">
						<p class="mb-3">
							Le Parc n'est pas habilité à accepter les titres restaurant. 
						</p>
					</div>
				</div>
				<div class="item">
					<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4" aria-expanded="false" aria-controls="exampleAccordion4">
						Est-ce que je peux entrer sur le Parc avec mon chien ?
					</a>
					<div id="exampleAccordion4" class="collapse" role="tabpanel">
						<p class="mb-3">
							Excepté pour Idefix, les animaux de compagnie ne sont pas acceptés au parc. Vous avez à votre disposition un chenil payant (7€) se trouvant à coté des Caisses. Il disposera d'un box individuel et d'une gamelle d'eau, mais aucun soin ne pourra leur être prodigué. Attention, munissez-vous du carnet de vaccination, il vous sera demandé par l'opérateur. Attention, le chenil est fermé pendant la période hivernale et pendant les nocturnes.
						</p>
					</div>
				</div>
				<div class="item">
					<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion5" aria-expanded="false" aria-controls="exampleAccordion5">
					J'ai un handicap reconnu, ai-je un accès adapté aux attractions ?
					</a>
					<div id="exampleAccordion5" class="collapse" role="tabpanel">
						<p class="mb-3">
							Une facilité de passage est proposée sur présentation de la carte d'invalidité à 80%, l'accès aux attractions se fait généralement par les sorties. Demandez à l'accueil, le guide spécial handicapé, il vous aidera tout au long de votre journée. Le nombre d'accompagnateur est limité.
						</p>
					</div>
				</div>
			</div>


		</div>
		<div class="footer col-xs-12">
			<?php
				include_once "./footer.php";
			?>
		</div>
	</body>