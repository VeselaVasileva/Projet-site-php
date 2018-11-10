<!DOCTYPE html>
html lang="fr">
<head>
		<meta charset="utf-8" />
		<title>Admin APSAP badminton blog</title>
		<link rel="stylesheet" href="vue/style_admin.css" media="screen" />
</head>	
<body>	
	<div id="partie_centrale">
		<section class="articles">

			<article class="actualite">
				<table>
					<tr>
						<th>Date</th>
						<th>Titre</th>
						<th>Texte</th>
						<th>Catégorie site</th>
					</tr>
					<?php
					foreach($champs as $champ){
						?>
					<tr>
						<td><?php echo $champ['date_article'];?></td>
						<td><?php echo $champ['titre_article'];?></td>
						<td><?php echo $champ['texte'];?></td>
						<td><?php echo $champ['categorie_site']; ?></td>
					</tr>
				</table>
			</article>
<?php
	}
?>
</section>
</div>