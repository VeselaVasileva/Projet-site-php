<?php
	function recuperer_post($debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT id_post, titre_post,texte_post,autheur,DATE_FORMAT(date_post,'%d/%m/%Y') AS date_post FROM forum ORDER BY id_post DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$posts=$requete->fetchAll();
		return $posts;
		$requete->closeCursor();
	}
?>
		