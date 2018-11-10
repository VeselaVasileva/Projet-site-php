<div id="partie_centrale">
<section class="articles">	
<div><a href="index.php?page=nouveau-sujet"> >>Nouveau sujet </a></div> 
			<?php foreach($posts as $post){?>
			<article class="forum">
				<div class="entete_post">
					<div class="theme"><?php echo $post['titre_post'];?></div>
					<div class="autheur">par <?php echo $post['autheur'];?></div>
					<div class="date"><?php echo $post['date_post'];?></div>
				</div>
				<div class="corps_post">	<p>
					<?php echo $post['texte_post'];?></p></div>
			</article>
			<?php
			}
			?>
		<h1 class="commentaires">Commentaires</h1>
		<?php foreach($commentaires as $commentaire){?>
			<article class="commentaire">
				<hr />
				<div class="entete_commentaire">
					<div class="autheur_commentaire">par <?php echo $commentaire['autheur_commentaire'];?></div>
					<div class="date_commentaire"><?php echo $commentaire['date_commentaire'];?></div>
				</div>
					<div class="corps_commentaire"><p><?php echo $commentaire['text_commentaire'];?></p><div>
			</article>
		<?php
			}
		?>
	
	<form class="inscription-site" action="modele/forum/add_commentaire.php" method="post">
			<textarea name="text_post"></textarea>
			<input type="submit" name="envoyer" value="Envoyer">
	</form>
</section>
