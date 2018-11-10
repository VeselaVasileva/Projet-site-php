<?php
	function connexion_sql(){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=apsap-badminton;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
		catch(Exception $e){
		die('Erreur: '.$e->getMessage());}
	}
	
	function recupere_contenu_table($table){
		global $bdd;
		$requete=$bdd->prepare('SELECT * AS total FROM '.$table);
		$requete->execute();
		$resultat=$requete->fetchAll();
		return $resultat;
		$requete->closeCursor();
	}
?>