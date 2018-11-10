<?php
	function recuperer_post_avec_id($num_post){
		global $bdd;
		/*$num_post=(int)$_POST['id-post'];*/
		$requete=$bdd->prepare("SELECT titre_post,texte_post,autheur,DATE_FORMAT(date_post,'%d/%m/%Y') AS date_post FROM forum WHERE id_post=$num_post");
		$requete->execute();
		$posts=$requete->fetchAll();
		return $posts;
		$requete->closeCursor();
	}
?>
		