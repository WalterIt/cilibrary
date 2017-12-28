<main>
	<h1>Créer mon compte</h1>
	<h2>Créez votre compte pour ajouter vos livres préférés.</h2>
	<main class="alert alert-danger">  <?php echo validation_errors(); ?>  </main>

<?php
/*
if (isset ($_POST["nickname"])) {
	$link = mysqli_connect($server, $user, $password, $base);
	$valid = "";

	// Check connection
	if($link === false){
		error_log("Impossible de se connecter à la base de données " . mysqli_connect_error());
		die("<div class='div-message error'>Une erreur est survenue et le compte n'a pas été créé.</div>");
	}

	$id = generateId();
	$nickname = mysqli_real_escape_string($link, $_POST["nickname"]);
	$mail = mysqli_real_escape_string($link, $_POST["mail"]);
	// Encodage du mot de passe pour plus de sécurité
	$mdp = password_hash(mysqli_real_escape_string($link, $_POST["mdp"]),PASSWORD_DEFAULT);

	// Vérification de la longueur des champs
	if (strlen($nickname)> 20) {
    	$valid .= "Le pseudo doit faire moins de 20 caractères.<br>";
    }
    if (strlen($mail)> 80) {
    	$valid .= "Le mail doit faire moins de 80 caractères.<br>";
    }

    if ($valid == "") {
		$user = json_decode(CallAPI("GET", API."function=getUser&nickname=".$nickname));
		if ($user == null) {
			$user = json_decode(CallAPI("GET", API."function=getUser&mail=".$mail));
			if ($user == null) {
				// Requête SQL
				$sql = "INSERT INTO user (id, nickname, mail, password) VALUES ('$id','$nickname','$mail','$mdp');";

				if(!mysqli_query($link, $sql)){
					error_log("Impossible d'executer la requête " .mysqli_error($link));
					echo "Impossible d'executer la requête " .mysqli_error($link);
			    }
			    else {
			    	echo "<div class='div-message success'>Félicitations, votre compte a été créé</div>";
			    }

			     mysqli_close($link);
			 }
			 else {
			 	$m_mail = "<div class='form-error'>Cette adresse mail existe déjà, veuillez en choisir une autre SVP.</div>";
			 }
	 	}
	 	else {
	 		$m_nickname = "<div class='form-error'>Ce pseudonyme existe déjà, veuillez en choisir un autre SVP.</div>";
	 	}
	 }
	 else {
	 	echo "<div class='div-message error'>".$valid."</div>";
	 }
}
*/
?>


	<!-- <form method="POST" action="/register">  -->
	<form method="POST" action="">
		<p><label for="nickname">Votre pseudo : </label></p>
		<p><input type="text" name="nickname" id="nickname" required="required" maxlength="20"><?php // if (isset($m_nickname)) { echo "<br>".$m_nickname;} ?></p>
		<p><label for="mail">Votre adresse e-mail : </label></p>
		<p><input type="email" name="mail" id="mail" required="required" maxlength="80"><?php // if (isset($m_mail)) { echo "<br>".$m_mail;} ?><div class="form-error" id="m_mail"></div></p>
		<p><label for="mdp">Mot de passe : </label></p>
		<p><input type="password" name="password" id="mdp" required="required"></p>
		<p><label for="cmdp">Confirmez le mot de passe : </label></p>
		<p><input type="password" name="password2" id="cmdp" required="required"><div class="form-error" id="m_mdp"></div></p>
		<p><button type="submit" class="button-form-valid" id="submitb">Créer mon compte</button></p>
	</form>
</main>

<!-- 
<script type="text/javascript">
	$("#submitb").click(function(e) {
		// Vérification de la correspondance des deux mots de passe
		if ($("#mdp").val() != $("#cmdp").val()) {
			$("#m_mdp").text("Les mots de passe ne correspondent pas.");
			e.preventDefault();
		}
	});
</script>
-->
