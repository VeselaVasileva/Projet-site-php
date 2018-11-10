<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>APSAP badminton blog</title>
		<link rel="stylesheet" href="vue/style_general.css" media="screen" />
	</head>	
	<body>	
	
		<!--Conteneur général 
		<div id="global"> -->
		
		
		<!-- En-tête -->
		<header id="entete"> 
			<div id="logo">
				<img src="vue/images/images_fixes/logo.gif" alt="logo" width="199" height="88" />
			</div>
			
			<!--Menu de navigation-->
			<nav id="blocmenu">
				<ul class="menu">
					<li class="simple"><a id="actualite" href="index.php?page=actualite">Actualité</a></li>
					<li class="deroulant"><a id="club" href=#>Le club</a>
							<ul class="sous-menu">
								<li class="sous-menu-elt"><a id="bureau" href="index.php?page=le-bureau">Le bureau</a></li>
								<li class="sous-menu-elt"><a id="creneaux" href="index.php?page=les-creneaux">Les créneaux</a></li>
							</ul>
					</li>
					<li class="simple"><a id="inscriptions" href="index.php?page=info-inscriptions">Infos inscriptions</a></li>
					<li class="deroulant"><a id="interclubs" href=#>Interclubs</a>
							<ul class="sous-menu">
								<li class="sous-menu-elt"><a id="interclubs_res" href="index.php?page=interclubs-resultats">Résultats</a></li>
								<li class="sous-menu-elt"><a id="interclubs_equipes" href="index.php?page=interclubs-equipes">Équipes</a></li>
							</ul>
					</li>
					<li class="deroulant"><a id="tournois" href=#>Tournois</a>
							<ul class="sous-menu">
								<li class="sous-menu-elt"><a id="tournois_indiv" href="index.php?page=tournois-idividuels">Tournois individuels</a></li>
								<li class="sous-menu-elt"><a id="tournois_internes" href="index.php?page=tournois-internes">Tournois internes</a></li>
							</ul
					</li>
					<li class="simple"><a id="forum" href="index.php?page=<?php if($_SESSION['type']==1){echo 'forum';}
																				else{echo 'formulaire-connexion';}?>">Forum</a></li>
				</ul>
			</nav>
			
			<div id="liens_header">
			<!--Connexion-->
			
			<span id="connexion">
				<a href="index.php?page=formulaire-connexion"><?php if($_SESSION['type']==1){echo 'Se connecter';}
																				else{echo 'Se déconnecter';}?></a>
			</span>
			
			
			<!--Champ de recherche-->
			<span id="recherche">
				<form action="recherche.php" method="GET">
					<input type ="text" name="champ_recherche" value="Rechercher"/>
					<input type="submit" name="bouton_recheche" value="OK">
				</form>
			</span>
			
			</div>
		</header>