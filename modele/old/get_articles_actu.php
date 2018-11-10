<?php
	function recuperer_articles($debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT titre_article,img_article,texte,DATE_FORMAT(date_article,'%d/%m/%Y') AS date_article FROM articles WHERE categorie_site='actualite' ORDER BY id_article DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$articles=$requete->fetchAll();
		return $articles;
		$requete->closeCursor();
	}
?>
		