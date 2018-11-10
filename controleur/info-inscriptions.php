<?php
	/*include_once('modele/get_articles_inscriptions.php');
	include_once('modele/get_nb_articles_inscriptions.php');*/
	
	include_once('modele/fonctions.php');
	connexion_sql();
	$articlesParPage=3;
	$table="articles";
	$categorie="inscriptions";
	$total=(int)recuperer_nb_articles($table,$categorie);
	$nbPages=ceil($total/$articlesParPage);
	
	//include_once('vue/vue_tarifs.php');
	if($nbPages==1){	
		//Demande des 3 derniers articles
		$articles=recuperer_articles(0,$articlesParPage,$table,$categorie);
		foreach($articles as $cle=>$article){
		//Traitement des données
			$articles[$cle]['titre_article']=htmlspecialchars($article['titre_article']);
			$articles[$cle]['texte']=nl2br(htmlspecialchars($article['texte']));
		}
		include_once('vue/vue_inscriptions.php');	
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
		include_once('vue/vue_inscriptions.php');
		
	}
	//include_once('vue/vue_info-complementaires-inscriptions.php');
	
?>