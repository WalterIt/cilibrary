<main>
	<h1>Me connecter</h1>
	<?php 
	/*
	if (isset($login_valid)) {
		echo $login_valid;
		echo "<p><a href='/'>Cliquez ici pour continuer.</a></p>";
	}
	else if (isset($login_error)) {
		echo $login_error;
	}

	if (!isset($login_valid)) { 
	*/
	?>
	<form action=" " method="POST"> 
		<p><label for="login_nickname">Votre pseudo : </label></p>
		<p><input type="text" name="nickname" id="login_nickname"></p>
		<p><label for="login_password">Votre mot de passe : </label></p>
		<p><input type="password" name="password" id="login_password"></p>
		<button type="submit">Connexion</button>
	</form>
	<p><a href="/register">Pas encore de compte ?</a></p>
	<?php // } ?>
</main>
