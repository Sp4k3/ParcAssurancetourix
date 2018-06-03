<!-- Encadré contact -->
<legend id="contact">Contact</legend>
<fieldset>
	<div class="contact-section">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="col-sm-11">
					<div class="form-group">
						<!-- Demande de Nom -->
						<label for="nom">Nom</label>
						<input type="text" class="form-control" name="nom" placeholder="Entrez votre nom"  value="<?php if(isset($_GET['nom'])) echo $_GET['nom']; ?>"/>
					</div>
					<div class="form-group">
						<!-- Demande de Prénom -->
						<label for="prenom">Prénom</label>
						<input type="text" class="form-control" name="prenom" placeholder="Entrez votre prenom" value="<?php if(isset($_GET['prenom'])) echo $_GET['prenom']; ?>"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</fieldset>