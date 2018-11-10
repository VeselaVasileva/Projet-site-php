<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>APSAP badminton blog</title>
		<link rel="stylesheet" href="../css/style_general.css" media="screen" />
	</head>	
	<body>	
		<h1>Inscription Tournoi de XXXXXX</h1>
		<form class="inscription-tournoi">
			<label for="prenom">Prénom</label>
			<input type="texte" name="prenom" /><br />
			<label for="nom">Nom</label>
			<input type="texte" name="nom" /><br />
			<label for="licence">N° licence</label>
			<input type="texte" name="licence" /><br />
			<label for="simple">SH/SD</label>
			<input type="checkbox" name="simple" value="simple" /><br />
			
			<label for="double">DD/DH</label>
			<input type="checkbox" name="double" value="double" /><br />
			<label for="partenaire-double">Partenaire de double</label>
			<input type="texte" name="partenaire-double" /><br />
			
			<label for="mixte">DM</label>
			<input type="checkbox" name="mixte" value="mixte" /><br />
			<label for="partenaire-mixte">Partenaire de double mixte</label>
			<input type="texte" name="partenaire-mixte" /><br />
			
			<input type="button" name="envoyer" value="Envoyer">
		</form>
	</body>
</html>