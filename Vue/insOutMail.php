<!-- Encadré inscription -->
<legend id="inscription">Inscription</legend>
<fieldset>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="col-sm-11">
				<!-- Erreur sur le mail -->
				<div class="form-group has-error has-feedback">
					<label class="control-label" for="inputError2">Mail</label>
					<input type="text" class="form-control" name="mail" id="inputError2" placeholder="Entrez votre mail"/>
					<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
					<span id="inputError2Status" class="sr-only">(warning)</span>
					<span id="helpBlock2" class="help-block">Veuillez entrez votre mail</span>
				</div>
				<div class="form-group">
					<!-- Demande de Mot de passe -->
					<label for="mdp">Mot de passe</label>
					<input type="password" class="form-control" name="mdp" placeholder="Entrez votre mot de passe"/>
				</div>
			</div>
		</div>
		<div class="col-md-4">	
			<button data-toggle="modal" href="#infos" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-info-sign"> Informations</button>
			<div class="modal" id="infos">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">x</button>
							<h4 class="modal-title">Information sur les mots de passe</h4>
						</div>
						<div class="modal-body">
							Un bon mot de passe doit contenir au moins <strong>12 caractères</strong> et 4 types différents : des <strong>minuscules</strong>, des <strong>majuscules</strong>, des <strong>chiffres</strong> et des <strong>caractères spéciaux</strong>.	
						</div>
					</div>
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
		<script type="text/javascript">
		$(document).ready(function(){
		$('#mdp_info').hide();
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
	</div>
</fieldset>