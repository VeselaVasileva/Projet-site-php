<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>APSAP badminton blog</title>
		<link rel="stylesheet" href="/vue/style_general.css" media="screen" />
	</head>	
	<body>	
		<h1>Nouveau sujet</h1>
		<form class="inscription-site" action="inserer-sujet.php" method="post">
			<label for="titre_post">Titre</label>
			<input type="texte" name="titre" /><br />
			<textarea name="texte_post"></textarea>
			<input type="submit" name="envoyer" value="Envoyer">
		</form>
</body>
</html>