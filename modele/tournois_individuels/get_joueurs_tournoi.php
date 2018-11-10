<?php
	function recuperer_joueurs_tournoi($num_tournoi){
		global $bdd;
		$num_tournoi=(int)$num_tournoi;
		$requete=$bdd->prepare("SELECT * FROM inscription_tournoi WHERE id_tournoi=$num_tournoi");
		$requete->execute();
		$joueurs=$requete->fetchAll();
		return $joueurs;
		$requete->closeCursor();
	}
?>