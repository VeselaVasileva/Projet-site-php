<?php
	function recuperer_rencontres(){
		global $bdd;
		$requete=$bdd->prepare("SELECT id_equipe,equipe_adverse,horaire,lieu,DATE_FORMAT(date_interclubs,'%d/%m/%Y') AS date_interclubs FROM interclubs ORDER BY id_interclubs DESC");
		$requete->execute();
		$rencontres=$requete->fetchAll();
		return $rencontres;
		$requete->closeCursor();
	}
?>