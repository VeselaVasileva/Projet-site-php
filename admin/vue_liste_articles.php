<!DOCTYPE html>
	<<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>APSAP badminton blog</title>
		<link rel="stylesheet" href="vue/style_general.css" media="screen" />
	</head>	
	<body>
	<h1>Les Articles</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Titre</th>
			<th>Date</th>
			<th>Catégorie</th>
			<th></th>
		</tr>
		<?php foreach($articles as $article){ ?>
			<tr>
				<td><?php echo($article['id_article']; ?></td>
				<td><?php echo($article['titre_article']; ?></td>
				<td><?php echo($article['date_article']; ?></td>
				<td><?php echo($article['categorie_site']; ?></td>
				<td><a href="admin.php/page=article&id=<?php echo($article['categorie_site']; ?>"> >>Voir </a></td>
			</tr>
		<?php
			}
		?>
	</table>
	</body>
</html>