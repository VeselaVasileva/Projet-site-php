<?php
	function connexion_sql(){
		try{
			$bdd=new PDO('mysql:host=localhost;dbname=apsap-badminton;charset=utf8','root','vessi_zaio_baio_56',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
		catch(Exception $e){
		die('Erreur: '.$e->getMessage());}
	}
	
//Fonctions pour les articles	
	function recuperer_nb_articles($table,$categorie){
		global $bdd;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM ".$table." WHERE categorie_site='".$categorie."'");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
	
	function recuperer_articles($debut,$fin,$table,$categorie){
		connexion_sql();
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$table=(String)$table;
		$categorie=$categorie;
		$requete=$bdd->prepare("SELECT* FROM ".$table." WHERE categorie_site='".$categorie."' ORDER BY id_article DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$articles=$requete->fetchAll();
		return $articles;
		$requete->closeCursor();
	}
	//Fonctions plus générales
	function comptage_simple($table){
		connexion_sql();
		global $bdd;
		$requete=$bdd->query('SELECT COUNT(*) AS total FROM '.$table);
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
	function affichage_simple_tri_desc($table,$champ,$debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT * FROM ".$table." ORDER BY ".$champ." DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$interclubs=$requete->fetchAll();
		return $interclubs;
		$requete->closeCursor();
	}
	function affichage_simple($table,$champ,$debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT * FROM ".$table." ORDER BY ".$champ." LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$interclubs=$requete->fetchAll();
		return $interclubs;
		$requete->closeCursor();
	}
	//Fonctions spécifiques
	//affichage des équipes pour Interclubs > Equipes
	function recuperer_joueurs($num_equipe){
		global $bdd;
		$num_equipe=(int)$num_equipe;
		$requete=$bdd->prepare("SELECT * FROM joueurs WHERE id_equipe=$num_equipe LIMIT 0,12");
		$requete->execute();
		$joueurs=$requete->fetchAll();
		return $joueurs;
		$requete->closeCursor();
	}
	function recuperer_equipe($id_equipe){
		global $bdd;
		$id_equipe=(int)$id_equipe;
		$requete=$bdd->prepare("SELECT * FROM equipes WHERE id_equipe=:id_equipe");
		$requete->bindParam(':id_equipe',$id_equipe, PDO::PARAM_INT);
		$requete->execute();
		$equipe=$requete->fetchAll();
		return $equipe;
		$requete->closeCursor();
	}
	function recuperer_rencontres(){
		global $bdd;
		$requete=$bdd->prepare("SELECT id_equipe,equipe_adverse,horaire,lieu,DATE_FORMAT(date_interclubs,'%d/%m/%Y') AS date_interclubs FROM interclubs ORDER BY id_interclubs DESC");
		$requete->execute();
		$rencontres=$requete->fetchAll();
		return $rencontres;
		$requete->closeCursor();
	}
	//Fonctions affichage des tournois individuels
		function recuperer_tournois($debut,$fin){
		global $bdd;
		$debut=(int)$debut;
		$fin=(int)$fin;
		$requete=$bdd->prepare("SELECT nom_tournoi, lieu_tournoi, lien_convocations, date_tournoi,id_tournoi FROM tournois ORDER BY date_tournoi DESC LIMIT :debut,:fin");
		$requete->bindParam(':debut',$debut, PDO::PARAM_INT);
		$requete->bindParam(':fin',$fin, PDO::PARAM_INT);
		$requete->execute();
		$tournois=$requete->fetchAll();
		return $tournois;
		$requete->closeCursor();
	}
		function lister_participants($num){
			connexion_sql();
			global $bdd;
			$num=(int)$num;
			$requete=$bdd->prepare("SELECT j.nom,j.prenom,i.tableaux,i.partenaires FROM insription_tournois i, joueurs j WHERE i.id_joueur=j.id AND i.id_tournoi=:num");
			$requete->bindParam(':num',$num, PDO::PARAM_INT);
			$requete->execute();
			$participants=$requete->fetchAll();
			return $participants;
			$requete->closeCursor();
		}
	/*function recuperer_noms($num_joueur){
		global $bdd;
		$num_joueur=(int)$num_joueur;
		$requete=$bdd->prepare("SELECT nom, prenom FROM joueurs WHERE id=$num_joueur");
		$requete->execute();
		$joueurs=$requete->fetchAll();
		return $joueurs;
		$requete->closeCursor();
	}
	function recuperer_nb_joueurs($num_tournoi){
		global $bdd;
		$num_tournoi=(int)$num_tournoi;
		$requete=$bdd->query("SELECT COUNT(*) AS total FROM insription_tournois WHERE id_tournoi=$num_tournoi");
		$resultat=$requete->fetch();
		$total=$resultat['total'];
		return $total;
		$requete->closeCursor();
	}
	
	function recuperer_joueurs_tournoi($num_tournoi){
		global $bdd;
		$num_tournoi=(int)$num_tournoi;
		$requete=$bdd->prepare("SELECT * FROM inscription_tournoi WHERE id_tournoi=$num_tournoi");
		$requete->execute();
		$joueurs=$requete->fetchAll();
		return $joueurs;
		$requete->closeCursor();
	}*/
	
	
	//Connexion
	function se_connecter($id,$mdp){
		connexion_sql();
		global $bdd;
		$requete=$bdd->query("SELECT * FROM identifiants WHERE categorie_site='".$id."'");
		/*$requete->bindValue (':identifiant',$id, PDO::PARAM_STR);*/
		/*$requete->execute();*/
		$resultat=$requete->fetch();
		return $resultat;
		$requete->closeCursor();
	}
	//Fonctions pas utilisées
	function get_equipe_apsap(){
		connexion_sql();
		global $bdd;
		$requete=$bdd->query("SELECT e.nom_equipe FROM equipes e INNER JOIN interclubs i ON i.id_equipe=e.id_equipe" );
		$resultat=$requete->fetch();
		$equipe=$resultat['nom_euquipe'];
		return $total;
		$requete->closeCursor();
	}
	
?>
