<?php 
/*
// On vérifie si on souhaite mettre à jour une catégorie ou en créer une nouvelle
if (isset($_GET['update'])) {
	$update = $_GET['update'];
}
// Création d'une nouvelle catégorie
else {
	$update = "";
}
*/
?>
<div class="container">
	<h1><?php // if ($update == "") { echo "Ajouter"; } else { echo "Modifier"; } ?> un livre</h1>
	<br>

<?php
/*
// Le formulaire a été envoyé
if (isset($_POST['name'])) {
	// Pour l'instant il n'y a pas d'erreur
	$valid = "";

    $link = mysqli_connect($server, $user, $password, $base);

	// Vérification de la connexion
	if($link === false){
		die("<div class='alert alert-danger' role='alert'>Erreur : Impossible de se connecter à la base de données " . mysqli_connect_error() . "</div>");
	}
/*
	$id = generateId();
    // Traitement des caracteres spéciaux
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $description = mysqli_real_escape_string($link, $_POST["description"]);
    $category = mysqli_real_escape_string($link, $_POST["category"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);
    $author = mysqli_real_escape_string($link, $_POST["author"]);

    // Une nouvelle image valide a été ajoutée
    if ($_FILES["image"]["size"] > 0) {
      $target_dir = IMAGE_DIR;
      $target_file = $target_dir . basename($_FILES["image"]["name"]);

      // Suppression de l'ancienne image dans le cas d'une mise à jour
      if ($update != "") {
        $booktemp = json_decode(CallAPI("GET", API."function=getAnyBook&id=".$update));
        unlink(IMAGE_DIR.$booktemp->image_url);
      }
      // Si on ajoute un nouveau fichier, on écrase l'ancienne version si elle existe
      if (file_exists($target_file)) {
          $valid .= "L'image ".$target_file." existe déjà essayez avec un autre nom<br>";
      }
      else {
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $valid .= "Erreur lors de l'ajout de l'image<br>";
        }
      }
      $imgsql = "image_url = '".basename($_FILES["image"]["name"]."',");
      $urlimg = basename($_FILES["image"]["name"]);
    }
    else {
      $imgsql = "";
      $urlimg = basename($_FILES["image"]["name"]);
    }

    // Un nouveau fichier valide a été ajouté
    if ($_FILES["file"]["size"] > 0) {
      $target_dir = FILE_DIR;
      $target_file = $target_dir . basename($_FILES["file"]["name"]);

      // Suppression de l'ancien fichier dans le cas d'une mise à jour
      if ($update != "") {
        $booktemp = json_decode(CallAPI("GET", API."function=getAnyBook&id=".$update));
        unlink(FILE_DIR.$booktemp->file_url);
      }
      // Si on ajoute un nouveau fichier, on écrase l'ancienne version si elle existe
      if (file_exists($target_file)) {
          $valid .= "Le fichier ".$target_file." existe déjà essayez avec un autre nom<br>";
      }
      else {
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            $valid .= "Erreur lors de l'ajout du fichier<br>";
        }
      }
      $filesql = "file_url = '".basename($_FILES["file"]["name"]."',");
      $urlfile = basename($_FILES["file"]["name"]);
    }
    else {
      $filesql = "";
      $urlfile = basename($_FILES["file"]["name"]);
    }


    // Requête d'insertion ou de mise à jour
    if ($update == "") {
    	$sql = "INSERT INTO book (id, name, description, image_url, file_url, category_id, author, release_date, approved) VALUES ('$id','$name','$description','$urlimg', '$urlfile', '$category', '$author', '$date',1);";
    }
    else {
    	$sql = "UPDATE book SET name = '$name', description = '$description', $imgsql $filesql category_id = '$category', author = '$author', release_date = '$date' WHERE id = '$update'";
    }
    
	if(!mysqli_query($link, $sql)){
      $valid .= "Erreur : Impossible d'executer la requête : $sql. " . mysqli_error($link);
    }

    if ($valid != "") {
    	// Les erreurs sont affichées
    	echo "<div class='alert alert-danger' role='alert'>".$valid."</div>";
    }
    else {
    	// Tout s'est bien passé
    	echo "<div class='alert alert-success' role='alert'>Succès : Données enregistrées en base</div>";
    }

     mysqli_close($link);
}

// Si c'est une mise à jour d'un livre déjà existant alors on cherche le livre en question pour remplir les champs
if ($update != "") {
	$book = json_decode(CallAPI("GET", API."function=getAnyBook&id=".$update));
}

// Liste des catégories à proposer dans le select
$categories = json_decode(CallAPI("GET", API."function=getCategories"));
*/
?>


	<form method="POST" action="index.php?page=updatebook&update=<?php // echo $update ?>" enctype="multipart/form-data">
 		<div class="form-group">
			<label>
				Titre du livre :<input type="text" name="name" class="form-control" required="required" value="<?php // if (isset($book)) { echo $book->name; }?>">
			</label>
		</div>
		<div class="form-group">
			<label>
				Catégorie :
				<select name="category" class="form-control" required="required">
					<?php // for ($i=0; $i < count($categories) ; $i++) { ?>
					<option value="<?php // echo $categories[$i]->id; ?>" <?php  // if (isset($book)) { if ($book->category_id == $categories[$i]->id) {echo "selected";} }?>><?php // echo $categories[$i]->name; ?></option>
					<?php // } ?>
				</select>
			</label>
		</div>
		<div class="form-group">
			<label>
				Description :<textarea class="form-control" name="description" rows="3" cols="50"><?php // if (isset($book)) { echo $book->description; }?></textarea>
			</label>
		</div>
		<div class="form-group">
			<label>
				Date de parution :<input type="date" name="date" class="form-control" required="required" value="<?php // if (isset($book)) { echo $book->release_date; }?>">
			</label>
		</div>
		<div class="form-group">
			<label>
				Auteur :<input type="text" name="author" class="form-control" required="required" value="<?php // if (isset($book)) { echo $book->author; }?>">
			</label>
		</div>
		<div class="form-group">
			<label>
				Image de couverture :<br>
        <?php if (isset($book)) { echo '<img src="'.IMAGE.$book->image_url.'"  class="img-miniature">&nbsp;'.$book->image_url; }?>
        <input type="file" name="image">
			</label>
		</div>
		<div class="form-group">
			<label>
				Fichier PDF :<br>
        <?php if (isset($book)) { echo '<span class="glyphicon glyphicon-file" ></span>&nbsp;'.$book->file_url; }?>
        <input type="file" name="file" >
			</label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" >Valider</button>
		</div>
	</form>
</div>