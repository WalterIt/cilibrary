<?php
    // $categories = json_decode(CallAPI("GET", API."function=getCategories"));
?>

<div class="container">
	<h1>Liste des catégories</h1>
	<ul class="list-group">
	<?php // for ($i=0; $i < count($categories) ; $i++) { ?>
	  <li class="list-group-item"><a href="index.php?page=updatecategory&update=<? // echo $categories[$i]->id ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp;&nbsp;<?php // echo $categories[$i]->name ?></li>
	<?php // } ?>
	</ul>
</div>