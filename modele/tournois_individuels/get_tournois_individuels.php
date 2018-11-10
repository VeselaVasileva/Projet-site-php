<?php
	function recuperer_tournois($debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT nom_tournoi, lieu_tournoi, inscription_tournoi,lien_convocation, FORMAT_DATE(date_tournoi, %d/%m/%Y) AS date_tournoi FROM tournois ORDER BY date_tournoi DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$tournoi=$requete->fetchAll();
		return $tournoi;
		$requete->closeCursor();
	}
?>