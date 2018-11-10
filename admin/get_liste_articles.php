<?php
	function recuperer_liste_articles(){
		global $bdd;
		$requete=$bdd->prepare("SELECT id_article,titre_article,categorie_site,DATE_FORMAT(date_article,'%d/%m/%Y') AS date_article FROM articles ORDER BY id_article");
		$requete->execute();
		$liste_articles=$requete->fetchAll();
		return $liste_articles;
		$requete->closeCursor();
	}
?>