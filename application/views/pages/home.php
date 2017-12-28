<main>
	<h1>Accueil</h1>
	<div class="div-big">
		<p>Bienvenue sur <span class="text-mini-logo">Silva's OnlineBooks</span>, le numéro 1 de la bibliothèque personnalisée en ligne de livres libres.</p>
	</div>
	<div class="div-big">
		<p>Les livres à découvrir :</p>
		<div class="row">
		<?php  // for($books as $book) : ?>
			<div class="col m12 d4 center book">
				<p><a href="/book/<?php  ?>"><img src="<?php  echo site_url().'assets/booksfile/covers/'.$book1[0]['image_url'];  // echo IMAGE.$books[$i]->image_url ?>" class="img-bookcover"></a></p>
				<p class="text-bookcover"> <?=$book1[0]['name']  ?> </p>
			</div>
			<div class="col m12 d4 center book">
				<p><a href="/book/<?php ?>"><img src="<?=site_url().'assets/booksfile/covers/'. $book2[0]['image_url'] ?>" class="img-bookcover"></a></p>
				<p class="text-bookcover"><?=$book2[0]['name']  ?></p>
			</div>
			<div class="col m12 d4 center book">
				<p><a href="/book/<?php  ?>"><img src="<?=site_url().'assets/booksfile/covers/'. $book3[0]['image_url'] ?>" class="img-bookcover"></a></p>
				<p class="text-bookcover"><?=$book3[0]['name']  ?></p>
			</div>
		<?php // endfor; ?>
		</div>
	</div>
	<div class="div-big">
		<p><span class="text-mini-logo">MyOnlineBooks</span> en chiffres :</p>
		<div class="row">
			<div class="col m12 d4 center">
				<span class="text-mega-big"><?=$totalBooks ?> </span><br>Livres
			</div>
			<div class="col m12 d4 center">
				<span class="text-mega-big"><?=$totalCategories ?></span><br>Catégories
			</div>
			<div class="col m12 d4 center">
				<span class="text-mega-big">143</span><br>Lecteur(s) en ligne
			</div>
		</div>
	</div>
	
</main>
