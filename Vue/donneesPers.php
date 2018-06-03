	<!-- Encadré données personnelles -->
	<legend id="donneesPers">Données personnelles</legend>
	<fieldset>


		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="col-sm-11">
					<div class="form-group">
						<!-- Demande de taille avec un input -->
						<label for="taille">Taille</label>
						<input type="text" class="form-control" name="taille" placeholder="Entrez votre taille" value="<?php if(isset($_GET['taille'])) echo $_GET['taille']; ?>"/>	
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="col-sm-11">
					<div class="form-group">
						<!-- Demande de centres d'intérêts avec tableau composé de choix multiples -->
						<label for="option[]" class="ci">Centres d'intérêts : </label>
						<table class="table-responsive table-bordered table-striped table-condensed">
							<thead>
								<tr>
									<th>Intitulé</th>
									<th>Réponse</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sensations fortes</td>
									<td> <input type="checkbox" name="fortes" value="fortes"></td>
								</tr>
								<tr>
									<td>Sensations modérées</td>
									<td> <input type="checkbox" name="moderees" value="moderees"></td>
								</tr>
								<tr>
									<td>Sensation douce</td>
									<td> <input type="checkbox" name="douce" value="douces"></td>
								</tr>
								<tr>
									<td>Autre</td>
									<td> <input type="checkbox" name="autre" value="autre" id="autre_check" onclick="afficher_preciser('autre_check', 'preciser_on', 'preciser_out');"> <div id="preciser_on">Préciser <input type="text" name="autre1" /></div><div id="preciser_out"></div></td>
								</tr>
							</tbody>
						</table>								
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="col-sm-11">
					<div class="form-group">
						<!-- Demande de Budget -->
						<label for="budget" name="com">Votre budget par personne : </label>
						<select name="budget">
							<optgroup label="Choix du budget">
								<option value=""></option>
								<option value="<10"> &lt; 10 &euro;</option>
								<option value="<=30"> &le; 30 &euro;</option>
								<option value=">30"> &gt; 30 &euro;</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="col-sm-12">
					<div class="form-group">
						<!-- Bouton Envoyer et Effacer -->
						<div align="center">
							<input type="submit" class="bouton_ok" value="Envoyer">
							<input type="reset" class="bouton_del" value="Effacer">
						</div>
					</div>
				</div>
			</div>
		</div>
	</fieldset>

	<script type='text/javascript'>
	function afficher_preciser(verif, on, off)
	{
		if (document.getElementById(verif).checked == true)
		{
			document.getElementById(on).style.display = "block";
			document.getElementById(off).style.display = "none";
		}
		else
		{
			document.getElementById(off).style.display = "block";
			document.getElementById(on).style.display = "none";
		}		
	}
	</script>