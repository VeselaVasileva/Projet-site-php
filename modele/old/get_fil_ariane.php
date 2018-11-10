<?php
	function recuperer_articles($debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT categorie_site FROM articles");
		$requete->execute();
		$articles=$requete->fetchAll();
		return $articles;
	}
?>
		