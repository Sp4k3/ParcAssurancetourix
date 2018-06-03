<legend id="contact">Contact</legend>
<fieldset>
	<div class="contact-section">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="col-sm-11">
					<!--erreur de nom -->
					<div class="form-group has-error has-feedback">
						<label class="control-label" for="inputError2">Nom</label>
						<input type="text" class="form-control" name="nom" id="inputError2" placeholder="Entrez votre nom"/>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
						<span id="inputError2Status" class="sr-only">(warning)</span>
						<span id="helpBlock2" class="help-block">Veuillez entrez votre nom</span>
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