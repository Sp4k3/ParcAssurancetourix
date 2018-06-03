<script type="text/javascript">
	function fonction_mail()
	{
		document.location.href = "mailto:info.parc@assurancetourix.fr";
	}
	
	function envoimess()
	{
		swal(
		{
			title: "Voulez-vous envoyer un mail au parc Assurancetourix ?",	// Le titre
			type: "info",	// le logo
			showCancelButton: true,	// montre le bouton Cancel
			confirmButtonColor: "#32CD32",	// Couleur du bouton Confirmation
			confirmButtonText: "Envoyer",	// Renomme le bouton Confirmation en Envoyer
			cancelButtonText : "Annuler",	// Renomme le bouton Cancel en Annuler
			cancelButtonColor: "#ff0000",	// Couleur de bouton Cancel
			showLoaderOnConfirm: true,	// crée une animation à l'appui du bouton
			closeOnConfirm: true	// Ne cache pas le bouton Close
		},
		function(isConfirm)
		{
			fonction_mail();
		});
	}
</script>

<div id="footer" class="footer_style">
	<div class="container">
		<div class="row">
			<div class="cols-xs-12 div_footer">
				Une question ? Contactez le parc : <a onclick="envoimess()" class="footer_a">info.parc@assurancetourix.fr</a>
			</div>
		</div>
	</div>
</div>
