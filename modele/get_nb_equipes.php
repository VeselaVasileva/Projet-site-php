<?php
	function recuperer_nb_equipes(){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM equipes");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		