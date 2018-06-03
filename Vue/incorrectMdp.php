<!-- Encadré inscription -->
<legend id="inscription">Inscription</legend>
<fieldset>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="col-sm-11">
				<div class="form-group">
					<!-- Demande de Mail -->
					<label for="mail">Mail</label>
					<input type="email" class="form-control" name="mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>" placeholder="Entrez votre mail"/>
				</div>
				<div class="form-group has-error has-feedback">
					<label class="control-label" for="inputError2">Mot de passe</label>
					<input type="password" class="form-control" name="mdp" id="inputError2" placeholder="Entrez votre mot de passe"/>
					<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="sr-only">(warning)</span>
					<span id="helpBlock2" class="help-block">Veuillez entrez un mot de passe valide</span>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="class-mdp_info">
				<div id="mdp_info">
					<h4>Le mot de passe doit contenir :</h4>
					<ul>
						<li id="longueur" class="invalid">Au moins <strong>4 caractères</strong></li>
						<li id="maj" class="invalid">Au moins <strong>une lettre majuscule</strong></li>
						<li id="numero" class="invalid">Au moins <strong>un chiffre</strong></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){

	$('input[type=password]').keyup(function() {
		var mdp = $(this).val();
		
		//validate the length
		if ( mdp.length < 4 ) {
			$('#longueur').removeClass('valid').addClass('invalid');
		} else {
			$('#longueur').removeClass('invalid').addClass('valid');
		}
		
		//validate capital letter
		if ( mdp.match(/[A-Z]/) ) {
			$('#maj').removeClass('invalid').addClass('valid');
		} else {
			$('#maj').removeClass('valid').addClass('invalid');
		}

		//validate number
		if ( mdp.match(/\d/) ) {
			$('#numero').removeClass('invalid').addClass('valid');
		} else {
			$('#numero').removeClass('valid').addClass('invalid');
		}

		}).focus(function() {
			$('#mdp_info').show();
		}).blur(function() {
			$('#mdp_info').hide();
		});
		
	});

	</script>
</fieldset>