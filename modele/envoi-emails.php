<?php 
	$email=trim($_REQUEST['email'])
	$message=trim($_REQUEST['message'])
	if(empty($email)){
		print("ERREUR : le champ email n'a pas été rempli.");
		exit();
	}
	if(preg_match("/^[\w\.-]+@[\w\.-]+\.[a-z]{2,3}$/i",$email)){
		print("L'adresse email est invalide");
		exit();
	}
	
	if(empty($_REQUEST['message'])){
		print("ERREUR : le corps du message est vide.");
		exit();
	}
	$destinataire="badmintonteam@apsapvp.fr";
	if($_REQUEST['destinataire']=="jeunes"){
		$destinataire="jeunesbad@apsapvp.fr";
	}
	if($_REQUEST['destinataire']=="compet"){
		$destinataire="badcompet@apsapvp.fr";
	}
?>