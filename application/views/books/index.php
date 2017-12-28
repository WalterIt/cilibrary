<?php

/*
$categories = json_decode(CallAPI("GET", API."function=getCategories"));

// Une recherche textuelle a été effectuée
if (isset($_POST['search'])) {
	$books = json_decode(CallAPI("GET", API."function=searchBooks&name=".urlencode($_POST['search'])));

}

// Une recherche par catégorie a été effectuée
if (isset($_GET['categoryid'])) {
	$category = json_decode(CallAPI("GET", API."function=getCategory&url=".$_GET['categoryid']));
	$books = json_decode(CallAPI("GET", API."function=getBooks&category_id=".$category->id));
}
*/
?>
<main>
	<h1>Rechercher un livre</h1>
	<h2>Recherche par titre :</h2>
	<form action="/books" method="POST">
		<div class="div-search-big">
			<input name="search" type="search"><button>rechercher</button>
		</div>
	</form>
	<h2>Parcourir par catégories :</h2>
	<p>
	<?php // for ($i=0; $i < count($categories) ; $i++) { ?>
		<a href="/books/<?php // echo $categories[$i]->short_url; ?>"><span class="label <?php //  if (isset($category)) { if ($category->id == $categories[$i]->id) { echo "active"; } else {echo "default";} } else { echo "default"; } ?>"><?php // echo $categories[$i]->name; ?></span></a>
	<?php // } ?>
	</p>
	<?php //  if (isset($books)) { ?>
	<p>Résultat de la recherche :</p>
	<hr>
	<p>Notre Collection :</p>
	<div class="row">


		<?php foreach($books as $book) : ?>
		<div class="col m12 d4 center book">
			<p><a href="/book/<?php // echo $books[$i]->id ?>"> <img src="<?php  echo site_url().'assets/booksfile/covers/'.$book['image_url'];  // echo IMAGE.$books[$i]->image_url ?>" class="img-bookcover"></a></p>
			<p class="text-bookcover"><?php echo $book['name'] ?></p>
		</div>
	    <?php   endforeach;
		
		// }
		
		// } else {
			// echo "Pas de résultat.";?>
		
	</div>
	<?php //  } ?>
</main>