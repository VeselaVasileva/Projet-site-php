<?php
	function recuperer_nb_articles(){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM articles WHERE categorie_site='actualite'");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		