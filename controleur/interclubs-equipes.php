<?php
	/*include_once('modele/get_rencontres_interclubs.php');
	include_once('modele/get_nb_equipes.php');
	include_once('modele/get_equipes_interclubs.php');
	include_once('modele/get_joueurs_interclubs.php');*/
	
	include_once('modele/fonctions.php');
	$table="interclubs";
	//Récupere les rencontres pour mise à jour du calendrier des rencontres
		$rencontres=recuperer_rencontres();
		$equipe=recuperer_equipe($rencontres['id_equipe']);
		include_once('vue/vue_clendrier-rencontres.php');	
		
	//Allimente la partie équipes	
	echo '<h1>Composition des équipes saison 2015-2016</h1>';	
	$nbEquipes=comptage_simple($table);
	for($i=1;$i<=$nbEquipes;$i++){
		$num_equipe=(int)$i;
		$equipes=recuperer_equipe($num_equipe);
		for($j=1;$j<=20;$j++){
			$joueurs=recuperer_joueurs($num_equipe);
		}
		include('vue/vue_interclubs-equipes.php');
	}
	
?>
</section>