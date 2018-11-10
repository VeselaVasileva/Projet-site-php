<?php
	function recuperer_nb_tournois(){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM tournois");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		