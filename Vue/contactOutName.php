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
					<!--Erreur Prénom -->
					<div class="form-group has-error has-feedback">
						<label class="control-label" for="inputError2">Prénom</label>
						<input type="text" class="form-control" name="prenom" id="inputError2" placeholder="Entrez votre prénom"/>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
						<span id="inputError2Status" class="sr-only">(warning)</span>
						<span id="helpBlock2" class="help-block">Veuillez entrez votre prénom</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</fieldset>