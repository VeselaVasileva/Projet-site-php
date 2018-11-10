<?php
session_start();
	include_once 'modele/connexion_sql.php';
	include 'vue/entete.php';
	$_SESSION['type']=0;
	if($_SESSSION['type']==2){
		include 'admin/admin.php';
	}
	/*if($_SESSION['type']==0&&$_GET['page']=="forum"){
		include 'controleur/formulaire-connexion.php';
	}*/
	
	$file="controleur/".$_GET['page'].".php";
	if(!isset($GET['page'])&&(is_file($file))){
		include $file;
	}
	else{
		include 'controleur/actualite.php';
	}
	include 'vue/footer.php';
	include 'vue/colonne_droite.php';
?>