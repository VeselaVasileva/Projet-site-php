<?php
	
	include_once('modele/fonctions.php');
	connexion_sql();
	
	$table="tournois";
	$champ="id_tournoi";
	$tournoisParPage=4;
	
	$total=(int)comptage_simple($table);
	$nbPages=ceil($total/$tournoisParPage);
	
	$tab=array();
	/*$tournois=recuperer_tournois(0,$total);
	for($i=1;$i<=$total;$i++){
		$tab[$tournois['id_tournoi']]=lister_participants($tournois['id_tournoi']);
	}*/
	
	if($nbPages==1){
		$tournois=recuperer_tournois(0,$tournoisParPage);
		foreach($tournois as $cle=>$tournoi){
			for($i=1;$i<=$total;$i++){
				$tab[$tournois['id_tournoi']]=lister_participants($tournois['id_tournoi']);
			}
			$nbPatricipant=count($tab[$tournoi['id_tournoi']]);
		//Traitement des données
			$tournois[$cle]['nom_tournoi']=htmlspecialchars($tournoi['nom_tournoi']);
		}
		include('vue/vue_tournois-individuels.php');
	}
	else{
		if(isset($_GET['num'])){
			$page=$_GET['num'];
		}
		else{
			$page=1;
		}
		$premierTournoi=($page-1)*$articlesParPage;
		$tournois=recuperer_tournois($premierTournoi,$tournoisParPage);
		foreach($tournois as $cle=>$tournoi){
			for($i=1;$i<=$total;$i++){
				$tab[$tournois['id_tournoi']]=lister_participants($tournois['id_tournoi']);
			}
		//Traitement des données
			$tournois[$cle]['nom_tournoi']=htmlspecialchars($tournoi['nom_tournoi']);
		}
		include_once('vue/vue_tournois-individuels.php');
		include_once('vue/pagination_tournois.php');
	}
?>