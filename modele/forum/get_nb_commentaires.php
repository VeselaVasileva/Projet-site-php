<?php
	function recuperer_nb_commentaires($id_post){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM forum_commentaires WHERE id_post=$num_post");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
?>
		