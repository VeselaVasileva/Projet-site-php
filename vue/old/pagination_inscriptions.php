<div class="pages">
	<?php
		for($i=1;$i<=$nbPages;$i++){
	?>
	<a href="index.php?page=info-inscriptions&num=<?php echo $i; ?>"><?php echo $i; ?></a> 
	<?php
		}
	?>
</div>