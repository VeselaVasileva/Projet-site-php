<?php
	function recuperer_commentaires($num_post){
		global $bdd;
		/*$num_post=(int)$_POST['id-post'];*/
		$requete=$bdd->prepare("SELECT text_commentaire,autheur_commentaire,DATE_FORMAT(date_commentaire,'%d/%m/%Y') AS date_commentaire FROM forum_commentaires WHERE id_post=$num_post LIMIT 0,5");
		$requete->execute();
		$commentaires=$requete->fetchAll();
		return $commentaires;
		$requete->closeCursor();
	}
?>
		