<aside>
<?php include_once('modele/fonctions.php');
?>

			<!--<div class="block_droit" id="agenda">
			
			<h2>Agenda</h2>
				<div class="contenu_block_droit">
					<time>ferfref</time>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<p>uhfiudf</p>
					<hr />
					<time>ferfref</time>
					<p>fjosdhfoi</p>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<hr />
					<p class="date">ferfref</p>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<hr />
					<time>ferfref</time>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
				</div>
			</div>-->
			<div class="block_droit" id="tournois_futurs">
				<h2>Les tournois à venir</h2>
				<div class="contenu_block_droit">
				<?php $tournois=recuperer_tournois(0,40);
						foreach($tournois as $tournoi){?>
					<time><?php echo date("d/m/Y",strtotime($tournoi['date_tournoi'])); ?></time>
					<p><?php echo $tournoi['nom_tournoi'] ?></p>
					<hr />
				<?php } ?>
				</div>
			</div>
			<!--<div class="block_droit" id="interclubs_futurs">
				<h2>Prochaines rencontres interclubs</h2>
				<div class="contenu_block_droit">
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
					<p>uhfiudf</p>
					<p>fjosdhfoi</p>
				</div>
			</div>-->
			<div class="block_droit" id="der_resultats_interclubs">
				<h2>Derniers résultats interclubs</h2>
				<div class="contenu_block_droit">
				<?php $resultats=affichage_simple_tri_desc("interclubs","id_equipe",0,40);
					foreach($resultats as $resultat){
						if(($resultat['equipe_adverse']!="")&&($resultat['resultat']!="")){?>
					<time><?php echo date("d/m/Y",strtotime($resultat['date_interclubs'])); ?></time>
					<p><?php echo 'APSAP '.$resultat[id_equipe].' - '.$resultat['equipe_adverse'].' : '.$resultat['resultat'];?></p>
					<hr />
					<?php } }?>	
				</div>
			</div>
		</aside>
		</div>
	</body>
</html>