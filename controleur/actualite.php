<?php
	/*include_once('modele/get_articles_actu.php');
	include_once('modele/get_nb_articles.php');*/
	include_once('modele/fonctions.php');
	connexion_sql();
	$articlesParPage=4;
	$categorie="actualite";
	$table="articles";
	
	$total=(int)recuperer_nb_articles($table,$categorie);
	$nbPages=ceil($total/$articlesParPage);
	
	if($nbPages==1){	
		//Demande des 4 derniers articles
		$articles=recuperer_articles(0,$articlesParPage);
		foreach($articles as $cle=>$article){
		//Traitement des données
			$articles[$cle]['titre_article']=htmlspecialchars($article['titre_article']);
			$articles[$cle]['texte']=nl2br(htmlspecialchars($article['texte']));
		}
		include_once('vue/vue_actualite.php');	
	}
	else{
		if(isset($_GET['num'])){
			$page=$_GET['num'];
		}
		else{
			$page=1;
		}
		$premierArticle=($page-1)*$articlesParPage;
		$articles=recuperer_articles($premierArticle,$articlesParPage,$table,$categorie);
		//Traitement des données
		foreach($articles as $cle=>$article){
			$articles[$cle]['titre_article']=htmlspecialchars($article['titre_article']);
			$articles[$cle]['texte']=nl2br(htmlspecialchars($article['texte']));
		}
		include_once('vue/vue_actualite.php');
	}
	
?>