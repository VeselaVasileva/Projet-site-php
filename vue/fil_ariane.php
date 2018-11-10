<?php
	switch($_GET['page']){
		case "actualite":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a></div>');
			break;
		case "le-bureau":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=le-bureau>Le Bureau</a></div>');
			break;
		case "les-creneaux":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=les-creneaux>Les Créneaux</a></div>');
			break;
		case "info-inscriptions":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=info-inscriptions>Info inscriprions</a></div>');
			break;
		case "interclubs-resultats":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=interclubs-resultats>Les resultats</a></div>');
			break;
		case "interclubs-equipes":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=interclubs-equipes>Les equipes</a></div>');
			break;
		case "tournois-internes":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=tournois-internes>Les tournois internes</a></div>');
			break;
		case "tournois-individuels":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=tournois-individuels>Les tournois individuels</a></div>');
			break;
		case "forum":
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a> > <a href=index.php?page=forum>Forum</a></div>');
			break;
		default :
			echo('<div class="fil_ariane"><a href="index.php?page=actualite">Accueil</a></div>');
			break;
	}
?>