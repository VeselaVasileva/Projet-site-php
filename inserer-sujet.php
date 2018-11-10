<?php
	global $bdd;
	$requete=$bdd->prepare('INSERT INTO forum (titre_post, texte_post, autheur_post, date_post) VALUES (?,?,?,?)');
	$requete->execute(array($_REQUEST['titre_post'],$_REQUEST['texte_post'],$_SESSION['prenom'],NOW());
	header(Location:forum.php)
?>