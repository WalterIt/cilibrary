<div class="container">
    <h1><?=$title  ?></h1>
	<h1>Liste des livres</h1>
<?php

/*
// Demande de suppression
if (isset($_GET['delete'])) {
	$valid="";
	$id = $_GET['delete'];
	$link = mysqli_connect($server, $user, $password, $base);
	$sql = "DELETE FROM book WHERE id = '$id'";
	if(!mysqli_query($link, $sql)){
      $valid .= "Erreur : Impossible d'executer la requête : $sql. " . mysqli_error($link);
    }
    if ($valid != "") {
    	// Les erreurs sont affichées
    	echo "<div class='alert alert-danger' role='alert'>".$valid."</div>";
    }
    else {
    	// Tout s'est bien passé
    	echo "<div class='alert alert-success' role='alert'>Succès : Livre supprimé</div>";
    }

     mysqli_close($link);
}

// Approbation ou désapprobation d'un livre
if (isset($_GET['approved'])) {
	$valid="";
	$approved = $_GET['approved'];
	$id = $_GET['id'];
	$link = mysqli_connect($server, $user, $password, $base);
	$sql = "UPDATE book SET approved = '$approved' WHERE id = '$id'";
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

$status = 2;

// Demande de changement de rubrique
if (isset($_GET['status'])) {
	$status = $_GET['status'];
	switch ($status) {
		// Affichage des livres non approuvés uniquement
		case 0:
			$books = json_decode(CallAPI("GET", API."function=getNonApprovedBooks"));
			break;
		// Affichage des livres approuvés uniquement
		case 1:
			$books = json_decode(CallAPI("GET", API."function=getBooks"));
			break;
		// Affichage de tous les livres
		default:
			$books = json_decode(CallAPI("GET", API."function=getAllBooks"));
			break;
	}
}
else {
	$books = json_decode(CallAPI("GET", API."function=getAllBooks"));
}
*/

?>

	<ul class="nav nav-pills">
	  <li role="presentation" <?php // if ($status == 2) {echo 'class="active"';} ?>><a href="index.php?page=listbooks&status=2">Tous</a></li>
	  <li role="presentation" <?php // if ($status == 1) {echo 'class="active"';} ?>><a href="index.php?page=listbooks&status=1">Approuvés</a></li>
	  <li role="presentation" <?php // if ($status == 0) {echo 'class="active"';} ?>><a href="index.php?page=listbooks&status=0">Non approuvés</a></li>
	</ul>
	<table class="table">
		<thead>
			<tr>
				<th>action</th>
				<th>couverture</th>
				<th>titre</th>
				<th>auteur</th>
				<th>date de parution</th>
				<th>uploadé par</th>
				<th>statut</th>
			</tr>
		</thead>
		<tbody>
		<?php // for ($i=0; $i < count($books) ; $i++) { ?>
			<tr>
				<td width=10%>
					<a href="index.php?page=updatebook&update=<?php // echo $books[$i]->id ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;éditer</a>
					<a href="#" onclick="initModal('<?php // echo $books[$i]->id ?>','<?php // echo $books[$i]->name ?>')" data-toggle="modal" data-target=".confirm-modal"><br><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;supprimer</a></td>
		  		<td width=10%><img src="<?php //echo IMAGE.$books[$i]->image_url ?>" class="img-miniature"></td>
		  		<td width=25%><?php // echo $books[$i]->name ?></td>
		  		<td width=20%><?php // echo $books[$i]->author ?></td>
		  		<td width=15%><?php // echo $books[$i]->release_date ?></td>
		  		<td width=10%><?php // if ($books[$i]->uploader_mail == null) {echo "Administrateur";} else {echo $books[$i]->uploader_mail;}  ?></td>
		  		<td width=10%><?php // if ($books[$i]->approved == 0) { echo "<a href='index.php?page=listbooks&status=".$status."&approved=1&id=".$books[$i]->id."'><span class='label label-danger'>Non approuvé</span></a>"; } else { echo "<a href='index.php?page=listbooks&status=".$status."&approved=0&id=".$books[$i]->id."'><span class='label label-success'>Approuvé</span></a>"; } ?></td>
		  	</tr>
		<?php // } ?>
		</tbody>
	</table>
</div>

<!-- La popup qui demande confirmation avant suppression -->
<div class="modal fade confirm-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 
				<h4 class="modal-title" id="mySmallModalLabel">Confirmation</h4> 
			</div> 
			<div class="modal-body">
			Etes vous sur de vouloir supprimer le livre suivant ?<br><br><div class="well well-sm"><span class="glyphicon glyphicon-book"></span>&nbsp;<span id="bookname"></span></div>
			</div> 
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
		        <a type="button" id="deleteconfirm" class="btn btn-primary">Oui</a>
		      </div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Fonction qui se charge d'entrer les informations dans la popup de confirmation
	function initModal($id,$name) {
		$("#bookname").text($name);
		$("#deleteconfirm").attr("href","index.php?page=listbooks&delete="+$id);
	}
</script>