<div id="partie_centrale">
<section class="formulaire">
		<div class="formulaire">
		<h1>Contacter le bureau</h1>
		<form class="inscription-site" method="post" action="envoi-emails.php">
			<label for="email">Email</label>
			<input type="texte" name="email" /><br />
			<input type="hidden" name="destinataire" value="general" />
			<label for="message">Message</label><br />
			<textarea nom="message"></textarea>
			<input type="submit" name="envoyer" value="Envoyer"/>
		</form>
</div>
</section>