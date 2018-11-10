<?php
	include_once('modele/forum/get_articles_forum_avec_id.php');
	include_once('modele/forum/get_commentaires.php');
	
	
	$numPost=(int)$_GET['id_post'];
	$posts=recuperer_post_avec_id($numPost);
	$commentaires=recuperer_commentaires($numPost);
	include_once('vue/forum/vue_commentaires.php');
?>