<div id="partie_centrale">
<section class="articles"> 
<?php
	include 'vue/fil_ariane.php';
?>
<article class="calendrier">
				<h1>Agenda interclubs</h1>
				<table class="calendrier">
					<tr>
						<th>Date</th>
						<th>Horaire</th>
						<th>Rencontre</th>
						<th>Gymnase</th>
					</tr>
					<?php foreach($rencontres as $rencontre){
						if(($rencontre['equipe_adverse']!="")){?>
					<tr>
						<td class="date"><?php echo $rencontre['date_interclubs']; ?></td>
						<td><?php echo date("G:i",strtotime($rencontre['horaire'])); ?></td>
						<td><?php echo 'Equipe '; echo $rencontre['id_equipe']; echo' - ';echo $rencontre['equipe_adverse'];?></td>
						<td><?php echo $rencontre['lieu']; ?></td>
					</tr>
					<?php
						}
					}
					?>
				</table>
</article>