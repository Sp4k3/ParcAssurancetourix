<?php
	// On va récupérer le chemin de l'url
	$url = $_SERVER['PHP_SELF'];
?>
<nav class="navbar navbar-fixed-top background_navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>        
			</button>
		</div>
		<div class ="col-xs-2">
			<a href="/ParcAssurancetourix/index.php"><img src="/ParcAssurancetourix/images/logo.png" width="200"></a>
		</div>
		<div class="col-xs-10 pages">
			<div id="myNavbar" class="navbar-collapse collapse margin_navbar">
				<ul class="nav navbar-nav">
					<li class="police_navbar_titre"><a <?php if ($url == "/ParcAssurancetourix/Vue/attractions.php") echo 'id="couleur_texte_navbar_select"'; else echo 'id="couleur_texte_navbar"'; ?> href="/ParcAssurancetourix/Vue/attractions.php">Attractions</a></li>
					<li class="police_navbar_titre"><a <?php if ($url == "/ParcAssurancetourix/Controleur/controleur_restaurants.php") echo 'id="couleur_texte_navbar_select"'; else echo 'id="couleur_texte_navbar"'; ?> href="/ParcAssurancetourix/Controleur/controleur_restaurants.php">Restaurants</a></li>
					<li class="police_navbar_titre"><a <?php if ($url == "/ParcAssurancetourix/Vue/billets.php") echo 'id="couleur_texte_navbar_select"'; else echo 'id="couleur_texte_navbar"'; ?> href="/ParcAssurancetourix/Vue/billets.php">Billets</a></li>
					<li class="police_navbar_titre"><a <?php if ($url == "/ParcAssurancetourix/Vue/visite.php") echo 'id="couleur_texte_navbar_select"'; else echo 'id="couleur_texte_navbar"'; ?> href="/ParcAssurancetourix/Vue/visite.php">Préparer ma visite</a></li>
					<li class="police_navbar_titre"><a <?php if ($url == "/ParcAssurancetourix/Controleur/controleur_parcours.php") echo 'id="couleur_texte_navbar_select"'; else echo 'id="couleur_texte_navbar"'; ?> href="/ParcAssurancetourix/Controleur/controleur_parcours.php">Parcours</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>