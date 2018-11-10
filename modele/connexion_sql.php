<?php
	try{
		$bdd=new PDO('mysql:host=localhost;dbname=apsap-badminton;charset=utf8','root','vessi_zaio_baio_56',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
	catch(Exception $e){
		die('Erreur: '.$e->getMessage());}
?>