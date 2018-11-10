<?php
	function recuperer_resultats($debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT id_equipe,equipe_adverse,resultat,commentaire_resultat,img_resultat,DATE_FORMAT(date_interclubs,'%d/%m/%Y') AS date_interclubs FROM interclubs ORDER BY id_interclubs DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$interclubs=$requete->fetchAll();
		return $interclubs;
		$requete->closeCursor();
	}
?>