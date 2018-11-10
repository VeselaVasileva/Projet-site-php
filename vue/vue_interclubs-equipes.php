<article class="equipes">
	<?php foreach($equipes as $equipe){ ?>
		<h3>
			<?php 
					echo'Equipe ';
					echo $equipe['id_equipe'];
					echo' - ';
					echo $equipe['division']; 
			?>
		</h3>
		<div class="capitaine"><span class="fonction">Capitaine : </span><?php echo $equipe['capitaine']; ?></div>
		<div class="joueur_equipe"><?php foreach($joueurs as $joueur){ 
										echo $joueur['nom'];
										echo ' ';
										echo $joueur['prenom'];
										echo '<br />';
										}
									?>
		</div>
	<?php
		}
	?>
</article>
