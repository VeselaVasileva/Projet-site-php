<div id="partie_centrale">
<section class="tournoi_interne">
		<?php
			include 'vue/fil_ariane.php';
		?>
	<article class="intro">
		
		<p>Chaque année l'APSAP organise 2 tournois internes.<br/>
			L'occasion pour tous les joueurs de partager une journée sportive et conviviale. Mais aussi de pouvoir découvrirle jeu dans une ambiance plus compétitive.</p>
	</article>
<?php
	foreach($articles as $article){
?>
			<article class="tournoi_interne">
				<h1><?php echo $article['titre_article']; ?></h1>
				 <?php if($article['img_article']!=""){ ?>
						<img src="<?php echo $article['img_article']; ?>" alt="illustration" width="200"/><br />
					<?php } ?>
				<div class="date_tournoi">Date <span class="date"><?php echo date("d/m/Y",strtotime($article['date_article'])); ?></span></div>
				<div class="doc_tournois"> >>S'inscrire</div>
				<p class="corps_art"><?php echo $article['texte'] ?></p>
			</article>
<?php
	}
?>
</section>