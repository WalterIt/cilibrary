<main>
<?php
// Le formulaire à été envoyé

/*
if (isset($_POST['name'])) {

	// Initialisation des variables et traitement des caractères spéciaux
	$message = addslashes($_POST['text']);
	$mail = addslashes($_POST['mail']);
	$subject = "Message de ".addslashes($_POST['name']);
	$headers = 'From: ' .$mail. "\r\n" .
     'Reply-To: ' .$mail. "\r\n" .
     'X-Mailer: PHP/' ;

    // Envoi du mail
	if (mail(MAIL,$subject,$message)) {
		echo "<div class='div-message success'>Merci, votre e-mail a été envoyé !</div>";
	}
	else {
		echo "<div class='div-message error'>Une erreur est survenue, votre mail n'a pas été envoyé.</div>";
	}

}
*/
?>
	<h1>Formulaire de contact</h1>
	<h2>Une question, une suggestion, un bug découvert sur le site ?</h2>
	<p>Contactez-nous via le formulaire ci-dessous :</p>
	<form method="POST" action="/contact">
		<p><label for="name">Votre nom : </label></p>
		<p><input type="text" name="name" id="name" required="required"></p>
		<p><label for="mail">Votre adresse e-mail : </label></p>
		<p><input type="mail" name="mail" id="mail" required="required"></p>
		<p><label for="text">Ecrivez-nous un message : </label></p>
		<p><textarea name="text" id="text" required="required"></textarea></p>
		<p><button type="submit" class="button-form-valid">Envoyer</button></p>
	</form>
</main>
