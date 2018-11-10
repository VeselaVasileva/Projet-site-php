<?php
	
	include_once 'fonctions_admin.php';
	global $bdd;
	connexion_sql();
	$table="articles";
	$champs=recupere_contenu_table($table);
	include_once 'vue_admin.php';
?>