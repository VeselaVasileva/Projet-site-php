<?php 
	$global bdd;
	$requete=$bdd->prepare("INSERT INTO forum_commentaires(date_commentaire,text_commentaire,autheur_commentaire) VALUES(?,?,?)");
	$requete->execute(array($_SERVER['REQUEST_TIME'],$_POST[text_commentaire],$_SESSION['prenom']));
?>