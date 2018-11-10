<div id="partie_centrale">
<section class="articles"> 

<?php 
include 'vue/fil_ariane.php';
foreach ($resultats as $resultat){?>
<article class="actualite">
	<time><?php echo date("d/m/Y",strtotime($resultat['date_interclubs'])); ?></time>
	<h1 class="resultats"><?php echo 'APSAP '.$resultat[id_equipe];
		if($resultat['equipe_adverse']!=""){
			echo $resultat['equipe_adverse'].' : '.$resultat['resultat'];}
		else{
			echo ' '.$resultat['resultat'];
		}
		?></h1>
	<?php if($resultat['img_resultat']!=""){ ?>
	<div class="img_resultats"><img src="<?php echo $resultat['img_resultat']; ?>" alt="resultats interclubs"/></div>
	<?php } ?>
	<h4>Le mot du capitaine</h4>
	<p class="corps_art">
		<?php echo $resultat['commentaire_resultat'] ?></p>
	</article>	
	<?php
		}
	?>
	<div class="pages">
	<?php
		for($i=1;$i<=$nbPages;$i++){
	?>
	<a href="index.php?page=interclubs-resultats&num=<?php echo $i; ?>"><?php echo $i; ?></a> 
	<?php
		}
	?>
</div>
</section>