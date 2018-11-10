<?php
		include_once('fonctions.php');
		connexion_sql();
		
		
		if(empty($_POST['identifiant'])){
			echo "L'identifiant doit être renseigné.";
			exit();
		}
		if(empty($_POST['mdp'])){
			echo "Le mot de passe doit être renseigné.";
			exit();
		}
		$mdp=$_POST['mdp'];
		$identifiant=$_POST['identifiant'];
		$resultat_connexion=se_connecter($identifiant,$mdp);
		if($resultat_connexion['mdp']==$mdp){
			$_SESSION['nom']=$resultat['nom'];
			$_SESSION['premom']=$resultat['prenom'];
			$_SESSION['statut']=$resultat['statut'];
		}
	/*function se_connecter($id,$mdp){
		global $bdd;
		if(empty $_REQUEST['identifiant']){
			echo "L'identifiant doit être renseigné.";
			exit();
		}
		if(empty $_REQUEST['mdp']){
			echo "Le mot de passe doit être renseigné.";
			exit();
		}
	$identifiant=$_REQUEST['identifiant'];
	$requete=bdd->prepare("SELECT * FROM identifiants WHERE identifiant=\'".$_REQUEST['identifiant']."\'");
	$requete->bindValue (':identifiant',$_REQUEST['identifiant'], PDO::PARAM_STR);
	$requete->execute();
	$resultat=requete->fetch();
	if($resultat['mdp']==$_REQUEST['mdp']){
		$_SESSION['nom']=resultat['nom'];
		$_SESSION['premom']=resultat['prenom'];
		$_SESSION['statut']=resultat['statut'];
		if($_SESSION['statut']==1){
			return $_SESSION['type']=1;
			}
		else if($_SESSION['statut']==2){
			return $_SESSION['type']=2;
		}
		else{
			echo "Erreur de connexion";
		}
	}
	else{
		echo "Erreur de connexion.";
	}
	}*/
?>