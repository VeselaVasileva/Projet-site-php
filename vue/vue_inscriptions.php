<div id="partie_centrale">
	<section class="articles"> 
		<?php
			include 'vue/fil_ariane.php';
		?>
		<article class="grille">
			<table>
				<tr>
					<th class="titre"></th>
					<th class="titre">Extérieur<br/>Nouveaux inscrits</th>
					<th class="titre">Extérieur<br/>Anciens adhérents</th>
					<th class="titre">Extérieur<br/>Anciens adhérents</th>
					<th class="titre">Etudiants</th>
					<th class="titre">Agents<br/>Mairie de Paris</th>
				</tr>
				<tr class="fonce">
					<th>-25 ans et +60 ans</th>
					<td>296€(E+JL)<br />215€(JL)<br />267€(JL+C)</td>
					<td>246€(E+JL)<br />165€(JL)<br />217€(JL+C)</td>
					<td>217€(E+JL)<br />140€(JL)<br />192€(JL+C)</td>
					<td>227€(E+JL)<br />149€(JL)<br />201€(JL+C)</td>
					<td>207€(E+JL)<br />182€(JL)<br />134€(JL+C)</td>		
				</tr>
				<tr class="claire">
					<th>De 25 ans à 60 ans</th>
					<td>336€(E+JL)<br />255€(JL)<br />307€(JL+C)</td>
					<td>266€(E+JL)<br />185€(JL)<br />237€(JL+C)</td>
					<td>234€(E+JL)<br />157€(JL)<br />209€(JL+C)</td>
					<td>245€(E+JL)<br />167€(JL)<br />219€(JL+C)</td>
					<td>223€(E+JL)<br />148€(JL)<br />200€(JL+C)</td>
				</tr>
			</table>
		</article>
<?php
	foreach($articles as $article){
?>
			<article class="actualite">
				<time><?php echo date("d/m/Y",strtotime($article['date_article'])); ?></time>
				<h1><?php echo $article['titre_article']; ?></h1>
					<p class="corps_art">
						<?php echo $article['texte'] ?></p>
			</article>
<?php
	}
?>
<div class="pages">
	<?php
		for($i=1;$i<=$nbPages;$i++){
	?>
	<a href="index.php?page=info-inscriptions&num=<?php echo $i; ?>"><?php echo $i; ?></a> 
	<?php
		}
	?>
</div>
</section>
<section class="info_complementaires">		
			<div class="docs_telechargeables">
				<h6>Documents téléchargeables</h6>
				<a href="documents/Demande_licence_2016.pdf">>> Demande de licence</a><br />
				<a href="documents/CertificatMedicalBadminton2015-2016.pdf">>> Certificat médical</a><br />
				<a href="documents/AutorisationParentaleSortie2015-2016.pdf">>> Autorisation parentale</a><br />
			</div>
			<div class="contacts_inscription">
				<h6>Contacts</h6>
				<p>Détails sur l'organisation des entraînements et de la section <br />pour les adultes <br />
				<a href="index.php?page=formulaire-contact-general"> >>badmintonteam@apsapvp.fr</a></p>
				<p>Détails sur l'organisation des entraînements et de la section <br />pour les enfants et les adolescents <br />
				<a href="index.php?page=formulaire-contact-jeunes"> >>jeunesbad@apsapvp.fr</a></p>
			</div>
</section>