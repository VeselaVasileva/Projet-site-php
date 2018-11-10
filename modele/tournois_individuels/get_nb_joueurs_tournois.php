<?php
	function recuperer_nb_joueurs($num_tournoi){
		global $bdd;
		$num_tournoi=(int)$num_tournoi;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM inscription_tournois WHERE id_tournoi=$num_tournoi");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		