<?php
	function recuperer_noms($num_joueur){
		global $bdd;
		$num_joueur=(int)$num_joueur;
		$requete=$bdd->prepare("SELECT nom, prenom FROM joueurs WHERE id=$num_joueur");
		$requete->execute();
		$joueurs=$requete->fetchAll();
		return $joueurs;
		$requete->closeCursor();
	}
?>