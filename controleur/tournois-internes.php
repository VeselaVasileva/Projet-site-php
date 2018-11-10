<?php
		include_once('modele/fonctions.php');
		connexion_sql();
		
		$categorie="tournoi_interne";
		$table="articles";
		$articles=recuperer_articles(0,2,$table,$categorie);
		foreach($articles as $cle=>$article){
		//Traitement des données
			$articles[$cle]['titre_article']=htmlspecialchars($article['titre_article']);
			$articles[$cle]['texte']=nl2br(htmlspecialchars($article['texte']));
		}
		include_once('vue/vue_tournoi-interne.php');
?>