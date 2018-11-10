<div id="partie_centrale">
<section class="articles">
<?php
	include 'vue/fil_ariane.php';
	foreach($tournois as $tournoi){
?>
<article class="calendrier">
				<h1><?php echo $tournoi['nom_tournoi'];?></h1>
				<table class="calendrier">
					<tr>
						<th>Joueur</th>
						<th>Tableaux</th>
						<th>Partenaires</th>
					</tr>
				<?php 
				echo $nbPatricipant;
				$num=$tournoi['id_tournoi'];
				for($i=0;$i<$nbPatricipant;$i++){?>
					<tr>
						<td><?php echo $tab[$num]['nom'].' '.$participant['prenom']; ?></td>
						<td><?php echo $tab[$num]['tableaux'];?></td>
						<td><?php echo $tab[$num]['partenaires']; ?></td>
					</tr>
					<?php
						}
					?>
				
</article>			
				
	<?php
		}
	?>
				

</section>
</div>