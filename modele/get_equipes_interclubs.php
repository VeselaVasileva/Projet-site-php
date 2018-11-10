<?php
	function recuperer_equipe($id_equipe){
		global $bdd;
		$id_equipe=(int)$id_equipe;
		$requete=$bdd->prepare("SELECT * FROM equipes WHERE id_equipe=:id_equipe");
		$requete->bindParam(':id_equipe',$id_equipe, PDO::PARAM_INT);
		$requete->execute();
		$equipe=$requete->fetchAll();
		return $equipe;
		$requete->closeCursor();
	}
?>