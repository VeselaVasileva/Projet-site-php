<?php
	include_once('modele/forum/get_articles_forum.php');
	include_once('modele/forum/get_nb_posts.php');
	
	
	$postsParPage=4;
	$total=(int)recuperer_nb_posts();
	$nbPages=ceil($total/$postsParPage);
	
	if($nbPages==1){	
		//Demande des 4 derniers posts
		$posts=recuperer_post(0,$postsParPage);
		foreach($posts as $cle=>$post){
		//Traitement des données
			$posts[$cle]['titre_post']=htmlspecialchars($post['titre_post']);
			$posts[$cle]['texte']=nl2br(htmlspecialchars($post['texte_post']));
		}
		include_once('vue/forum/vue_forum.php');	
	}
	else{
		if(isset($_GET['num'])){
			$page=$_GET['num'];
		}
		else{
			$page=1;
		}
		$premierpost=($page-1)*$postsParPage;
		$posts=recuperer_post($premierpost,$postsParPage);
		//Traitement des données
		foreach($posts as $cle=>$post){
			$posts[$cle]['titre_post']=htmlspecialchars($post['titre_post']);
			$posts[$cle]['texte']=nl2br(htmlspecialchars($post['texte_post']));
		}
		include_once('vue/forum/vue_forum.php');
		include_once('vue/forum/pagination_forum.php');
		
	}
	
	
?>