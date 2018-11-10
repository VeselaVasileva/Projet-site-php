<?php
	/*include_once('modele/get_resultats_interclubs.php');
	include_once('modele/get_nb_resultats.php');*/
	include_once('modele/fonctions.php');
	
	$table="interclubs";
	$resultatsParPage=4;
	$total=(int)comptage_simple($table);
	$nbPages=ceil($total/$resultatsParPage);
	
	if($nbPages==1){	
		//Demande des 4 derniers resultats
		$resultats=affichage_simple_tri_desc($table,"id_equipe",0,$resultatsParPage);
		foreach($resultats as $cle=>$resultat){
		//Traitement des données
			$resultats[$cle]['resultat']=htmlspecialchars($resultat['resultat']);
			$resultats[$cle]['commentaire_resultat']=nl2br(htmlspecialchars($resultat['commentaire_resultat']));
			$equipe=get_equipe_apsap($resultat[$cle]['id_equipe']);
		}
		include_once('vue/vue_resultats-interclubs.php');	
	}
	else{
		if(isset($_GET['num'])){
			$page=$_GET['num'];
		}
		else{
			$page=1;
		}
		$premierresultat=($page-1)*$resultatsParPage;
		$resultats=affichage_simple_tri_desc($table,"id_equipe",$premierresultat,$resultatsParPage);
		//Traitement des données
		foreach($resultats as $cle=>$resultat){
			$resultats[$cle]['resultat']=htmlspecialchars($resultat['resultat']);
			$resultats[$cle]['commentaire_resultat']=nl2br(htmlspecialchars($resultat['commentaire_resultat']));
			$equipe=get_equipe_apsap($resultats[$cle]['id_equipe']);
		}
		include_once('vue/vue_resultats-interclubs.php');
		
	}
	
	
?>