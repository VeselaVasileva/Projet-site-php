<div id="partie_centrale">
<section class="articles">	
	<div><a href="index.php?page=nouveau-sujet"> >>Nouveau sujet</a> </div> 
		<?php foreach($posts as $post){?>
			<article class="forum">
				<div class="entete_post">
				<div class="theme"><?php echo $post['titre_post'];?></div>
				<div class="autheur">par <?php echo $post['autheur'];?></div>
				<div class="date"><?php echo $post['date_post'];?></div>
				</div>
				<div class="corps_post">	<p>
					<?php echo $post['texte_post'];?></p>
				</div>
				<div class="publier_sujet"><a href="index.php?page=commentaires&id_post=<?php echo $post[id_post]?>">Commentaires</a></div>
			</article>
		<?php
			}
		?>
</section>
	