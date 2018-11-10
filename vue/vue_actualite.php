<div id="partie_centrale">
<section class="articles">
<?php

	include 'vue/fil_ariane.php';
	foreach($articles as $article){
?>
			<article class="actualite">
				<time ><?php echo date("d/m/Y",strtotime($article['date_article'])); ?></time>
				<h1><?php echo $article['titre_article']; ?></h1>
					<p class="corps_art">
					<?php if($article['img_article']!=""){ ?>
						<img src="<?php echo $article['img_article']; ?>" alt="illustration"/><br />
					<?php } ?>
						<?php echo $article['texte'] ?></p>
			</article>
<?php
	}
?>
<div class="pages">
	<?php
		if($nbPages>1){
			for($i=1;$i<=$nbPages;$i++){
	?>
	<a href="index.php?page=actualite&num=<?php echo $i; ?>"><?php echo $i; ?></a> 
	<?php
			}
		}
	?>
</div>
</section>