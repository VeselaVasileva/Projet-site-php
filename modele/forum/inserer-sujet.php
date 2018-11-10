<?php
	global $bdd;
	$requete=$bdd->prepare('INSERT INTO forum(titre_post, texte_post)VALUES(?,?)');
	$requete->execute(array($_POST['titre_post'],$_POST['texte_post']));
	header('Location:forum.php');

?>