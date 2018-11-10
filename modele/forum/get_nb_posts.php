<?php
	function recuperer_nb_posts(){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM forum");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		