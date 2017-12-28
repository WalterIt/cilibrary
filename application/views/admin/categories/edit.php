<?php 
/*
// On vérifie si on souhaite mettre à jour une catégorie ou en créer une nouvelle
if (isset($_GET['update'])) {
	$update = $_GET['update'];
}
// Création d'une nouvelle caégorie
else {
	$update = "";
}
*/
?>

<div class="container">
	<h1><?php // if ($update == "") { echo "Ajouter"; } else { echo "Modifier"; } ?> une catégorie</h1>
	<br>

<?php

/*
// Le formulaire a été envoyé
if  (isset($_POST['name'])) {
	// Pour l'instant il n'y a pas d'erreur
	$valid = "";

    $link = mysqli_connect($server, $user, $password, $base);

	// Vérification de la connexion
	if($link === false){
		die("<div class='alert alert-danger' role='alert'>Erreur : Impossible de se connecter à la base de données " . mysqli_connect_error() . "</div>");
	}

	$id = generateId();
    // Traitement des caracteres spéciaux
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $description = mysqli_real_escape_string($link, $_POST["description"]);
    $url = mysqli_real_escape_string($link, $_POST["url"]);
    $oldname = mysqli_real_escape_string($link, $_POST["oldname"]);

    // On vérifie que l'url n'existe pas déjà
    $categorytemp = json_decode(CallAPI("GET", API."function=getCategory&url=".$url));
	if (($categorytemp != null) && (strcmp($oldname,$categorytemp->name)!=0)) {
		$valid = "L'url existe déjà pour la catégorie ".$categorytemp->name;
	}

    // Requête d'insertion ou de mise à jour
    if ($update == "") {
    	$sql = "INSERT INTO category (id, name, description, short_url) VALUES ('$id','$name','$description','$url');";
    }
    else {
    	$sql = "UPDATE category SET name = '$name', description = '$description', short_url = '$url' WHERE id = '$update'";
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

if ($update != "") {
	$category = json_decode(CallAPI("GET", API."function=getCategory&id=".$update));
}
*/
?>

	<form method="POST" action="index.php?page=updatecategory&update=<?php //echo $update ?>" >
 		<div class="form-group">
			<label>
				Nom de la catégorie :<input type="text" name="name" class="form-control" required="required" value="<?php // if (isset($category)) { echo $category->name; }?>">
				<!-- L'input hidden est utilisé pour voir si l'url de la categorie n'existe pas déjà -->
				<input type="hidden" name="oldname" value="<?php // if (isset($category)) {echo $category->name;} ?>">
			</label>
		</div>
		<div class="form-group">
			<label>
				Description :<textarea class="form-control" name="description" rows="3" cols="50"><?php if (isset($category)) { echo $category->description; }?></textarea>
			</label>
		</div>
		<div class="form-group">
			<label>
				Url courte :<input cols="50" name="url" class="form-control" required="required" value="<?php if (isset($category)) { echo $category->short_url; }?>">
			</label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" >Valider</button>
		</div>
	</form>
</div>