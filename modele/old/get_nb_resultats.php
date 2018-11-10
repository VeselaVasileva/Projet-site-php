<?php
	function recuperer_nb_resultats(){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM interclubs");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		