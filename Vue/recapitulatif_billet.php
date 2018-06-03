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
			<form action="../Controleur/controleur_facture.php" method="post" >
				<div class="table-responsive col-xs-offset-2 col-xs-8 table_billeterie">
					<table class="table table-striped table-bordered" id="table">
						<thead>
							<!-- Titre de la table -->
							<caption class="titre-table">Achat billets <span class="color_span"><?php echo $promotion; ?></span></caption>
							<tr>
								<!-- Titres des colonnes -->
								<th class="th_billeterie">Type</th>
								<th class="th_billeterie">Quantité</th>
								<th class="th_billeterie">Prix</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if($nombre_adulte != "0")
							{
							?>
								<tr>
									<td>Adulte</td>
									<td><?php echo $nombre_adulte; ?></td>
									<input type="hidden" name="nombre_adulte" value="<?php echo $nombre_adulte; ?>">
									<?php 
									if(isset($res['id_promotion']))
									{
									?>
										<td><span class="span_barre"><?php echo $prix_adulte. " € "; ?></span><span class="color_span"><?php echo $nouveau_prix_adulte. " €"; ?></span></td>
										<input type="hidden" name="prix_adulte" value="<?php echo $nouveau_prix_adulte; ?>">
									<?php
									}
									else
									{
									?>
										<td><?php echo $prix_adulte. " € "; ?></td>
										<input type="hidden" name="prix_adulte" value="<?php echo $prix_adulte; ?>">
									<?php
									}
									?>
								</tr>
							<?php
							}
							if($nombre_enfant != "0")
							{
							?>
								<tr>
									<td>Enfant</td>
									<td><?php echo $nombre_enfant; ?></td>
									<input type="hidden" name="nombre_enfant" value="<?php echo $nombre_enfant; ?>">
									<?php 
									if(isset($res['id_promotion']))
									{
									?>
										<td><span class="span_barre"><?php echo $prix_enfant. " € "; ?></span><span class="color_span"><?php echo $nouveau_prix_enfant. " €"; ?></span></td>
										<input type="hidden" name="prix_enfant" value="<?php echo $nouveau_prix_enfant; ?>">
									<?php
									}
									else
									{
									?>
										<td><?php echo $prix_enfant. " € "; ?></td>
										<input type="hidden" name="prix_enfant" value="<?php echo $prix_enfant; ?>">
									<?php
									}
									?>
								</tr>
							<?php
							}
							if($nombre_senior != "0")
							{
							?>
								<tr>
									<td>Senior</td>
									<td><?php echo $nombre_senior; ?></td>
									<input type="hidden" name="nombre_senior" value="<?php echo $nombre_senior; ?>">
									<?php 
									if(isset($res['id_promotion']))
									{
									?>
										<td><span class="span_barre"><?php echo $prix_senior. " € "; ?></span><span class="color_span"><?php echo $nouveau_prix_senior. " €"; ?></span></td>
										<input type="hidden" name="prix_senior" value="<?php echo $nouveau_prix_senior; ?>">
									<?php
									}
									else
									{
									?>
										<td><?php echo $prix_senior. " € "; ?></td>
										<input type="hidden" name="prix_senior" value="<?php echo $prix_senior; ?>">
									<?php
									}
									?>
								</tr>
							<?php
							}
							?>
							<tr>
								<td class="td_total">Total</td>
								<td class="td_total"><?php echo $nombre_total; ?></td>
								<input type="hidden" name="nombre_total" value="<?php echo $nombre_total; ?>">
								<?php 
								if(isset($res['id_promotion']))
								{
								?>
									<td class="td_total"><span class="span_barre"><?php echo $prix_total. " € "; ?></span><span class="color_span"><?php echo $nouveau_prix_total. " €"; ?></span></td>
										<input type="hidden" name="prix_total" value="<?php echo $nouveau_prix_total; ?>">
								<?php
								}
								else
								{
									?>
									<td class="td_total"><?php echo $prix_total. " €"; ?></td>
									<input type="hidden" name="prix_total" value="<?php echo $prix_total; ?>">
								<?php
								}
								?>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 div_ajout">
					<!-- Bouton j'envoie tout dans la BDD -->
					<?php 
					if($nombre_adulte != 0 || $nombre_enfant !=0 || $nombre_senior !=0)
					{
						?>
						<button class="btn btn-success" type="submit" id="bouton_enregistrer"><span class="glyphicon glyphicon-ok-sign" id="glyphicon"></span> Acheter</button>
						<?php
					}
					?>
					<a href="../Controleur/controleur_achat_billet.php" class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove-sign" id="glyphicon"></span> Retour aux achats</a>
				</div>
			</form>
		</div>
	</body>
</html>