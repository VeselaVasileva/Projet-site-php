<?php
	function recuperer_joueurs($num_equipe){
		global $bdd;
		$num_equipe=(int)$num_equipe;
		$requete=$bdd->prepare("SELECT * FROM joueurs WHERE id_equipe=$num_equipe LIMIT 0,12");
		$requete->execute();
		$joueurs=$requete->fetchAll();
		return $joueurs;
		$requete->closeCursor();
	}
?>