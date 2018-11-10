<?php
	include_once('get_liste_articles.php');
	$articles=recuperer_liste_articles();
	include_once('vue_liste_articles.php');
?>