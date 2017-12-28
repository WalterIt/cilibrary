<main>
	<h1>Proposer un livre</h1>
	<h2>Vous pouvez proposer n'importe quel ouvrage open source.</h2>
	<p>Une fois le formulaire rempli, nous vérifierons les données que vous nous avez envoyées. Nous nous reservons le droit de ne modifier ou ne pas accepter l'ouvrage que vous nous avez soumis.</p>
	<main class="alert alert-danger"> <?php echo validation_errors(); ?> </main>

<?php 

/*
// Le formulaire a été envoyé
if (isset($_POST['name'])) {
	// Pour l'instant il n'y a pas d'erreur
	$valid = "";

    $link = mysqli_connect($server, $user, $password, $base);

	// Vérification de la connexion
	if($link === false){
		error_log(mysqli_connect_error() );
		die("<div class='div-message error'>Une erreur est survenue.</div>");
	}

	$id = generateId();
    // Traitement des caracteres spéciaux
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $description = mysqli_real_escape_string($link, $_POST["description"]);
    $category = mysqli_real_escape_string($link, $_POST["category"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);
    $author = mysqli_real_escape_string($link, $_POST["author"]);
    $u_mail = $user_logged->mail;

    // Vérification de la conformité des données. Elles sont normalement vérifiées en js mais il faut toujours revérifier côté serveur
    // On n'est jamais à l'abri d'une manipulation douteuse...
    if (strlen($name)> 80) {
    	$valid .= "Le nom doit faire moins de 80 caractères.<br>";
    }
    if (strlen($author)>80) {
    	$valid .= "Le nom de l'auteur doit faire moins de 80 caractères.<br>";
    }
    if (!validateDate($date)) {
		$valid .= "Le format de date n'est pas bon. Il doit avoir ce format AAAA-MM-JJ (ex: 2016-05-30).<br>";
    }


    $urlimg = null;
    // Une nouvelle image valide a été ajoutée
    if ($_FILES["image"]["size"] > 0) {
    	// On vérifie que c'est bien une image
    	$mime = mime_content_type($_FILES['image']['tmp_name']);
    	if ((strcmp($mime,"image/png")==0) || (strcmp($mime,"image/jpeg")==0) || (strcmp($mime,"image/gif")==0) || (strcmp($mime,"image/tiff")==0)) {
		      $target_dir = IMAGE_DIR;
		      
			  $file_extension = ".".strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
			  $file_name = generateFileName(pathinfo($_FILES["image"]["name"], PATHINFO_FILENAME));
			  $target_file = $target_dir . $file_name . $file_extension;

		      // Si on ajoute un nouveau fichier, on écrase l'ancienne version si elle existe
		      if (file_exists($target_file)) {
		          $valid .= "L'image ".$target_file." existe déjà. Essayez avec un autre nom<br>";
		      }
		      else {
		        if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
		            $valid .= "Erreur lors de l'ajout de l'image<br>";
		        }
		      }
		      $urlimg = $file_name.$file_extension;
	    }
	    else {
	    	$valid .= "Le format de l'image est incorrect, formats acceptés : jpg, gif, png, tif.<br>";
	    }
    }

    else {
      $valid .= "L'image de couverture est invalide.<br>";
    }

    $urlfile = null;
    // Un nouveau fichier valide a été ajouté
    if ($_FILES["file"]["size"] > 0) {
    	// On vérifie que c'est bien un PDF
    	$mime = mime_content_type($_FILES['file']['tmp_name']);
    	if (strcmp($mime,"application/pdf")==0) {
			$target_dir = FILE_DIR;

			$file_extension = ".".strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
			$file_name = generateFileName(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME));
			$target_file = $target_dir . $file_name . $file_extension;

			// Si on ajoute un nouveau fichier, on écrase l'ancienne version si elle existe
			if (file_exists($target_file)) {
			  $valid .= "Le fichier ".$target_file." existe déjà. Essayez avec un autre nom<br>";
			}
			else {
				if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
				    $valid .= "Erreur lors de l'ajout du fichier.<br>";
				}
			}
			$urlfile = $file_name.$file_extension;
		}
		else {
			$valid .= "Le format du fichier est incorrect, format accepté : pdf uniquement.<br>";
		}
    }
    else {
      $valid .= "Le fichier pdf est invalide.<br>";
      
    }


    // Requête d'insertion
    $sql = "INSERT INTO book (id, name, description, image_url, file_url, category_id, author, release_date, approved, uploader_mail) VALUES ('$id','$name','$description','$urlimg', '$urlfile', '$category', '$author', '$date', 0, '$u_mail');";


    if ($valid != "") {
    	// Les erreurs sont affichées
    	echo "<div class='div-message error'>".$valid."</div>";
    }
    else {
    	if(!mysqli_query($link, $sql)){
			error_log(mysqli_error($link));
	      	$valid .= "Une erreur est survenue.";
    	}
	    else {
	    	// Tout s'est bien passé
	    	echo "<div class='div-message success'>Votre livre a bien été envoyé !</div>";
	    }
    }
     mysqli_close($link);
}
$categories = json_decode(CallAPI("GET", API."function=getCategories"));

*/
?>

	<form method="POST" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col m12 d6"> 
				<p><label for="name">Titre du livre :</label></p>
				<p><input type="text" name="name" id="name"  required="required" maxlength="80"></p>

				<p><label for="author">Auteur :</label></p>
				<p><input type="text" name="author" id="author" required="required" maxlength="80"></p>



				<p><label for="category">Catégorie :</label></p>
				<p><select name="category_id" id="category_id" required="required">
				<option value="">-- Selectioner --</option>
					<?php foreach ($categories as $category) : ?>
					  <option value="<?php echo $category['id']?>"><?php echo $category['name'] ?></option>
                    <?php endforeach; ?>
				</select></p>



				<p><label for="description">Description :</label></p>
				<p><textarea name="description" id="description" rows="3" cols="50"  required="required"></textarea></p>

				<p><label for="date">Date de parution :</label></p>
				<p><input type="date" name="release_date" id="date" required="required" placeholder="AAAA-MM-JJ"></p>
				
			</div> 
			<div class="col m12 d6">
				<p><label for="image">Image de couverture :</label></p>
	        	<p><input type="file" name="userfile"  id="image"  required="required"></p>
				
				
				<p><label for="file">Fichier PDF :</label></p>
				<!--  FOR SOME REASON  THIS INPUT IS ADDING THE  FILE_URL : IT IS WORKING WELL ALTHOUGH  -->
				<p><input type="file" name="image_url"  id="file"  required="required"></p>
				
				
			</div>
			<p><button type="submit" class="btn btn-primary" >Envoyer le livre</button></p>
	</form>
</main>
