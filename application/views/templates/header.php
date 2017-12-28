<!DOCTYPE html>
  <html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <meta name="description" content="MyOnlineBooks est une bibliothèque en ligne de livres libres de droits">
      <title> </title>
	  <!-- <link type="text/css" rel="stylesheet" href="/css/style.css"  media="screen,projection"/> -->
	  <link type="text/css" rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/style.css" media="screen,projection"/>
      <script src="/assets/js/jquery.js"></script>
      <script src="/assets/js/script.js"></script>
    </head>
    <body>
	
		<div class="menu-icon" onclick="toggleMenu()">
				menu
			</div>
			<div class="menu">
			  <a  href="/">    <div class="text-logo">    Silva's OnlineBooks   </div>  </a>
				<ul id="menu" class="menu-hide">

				<li><a  href="/about">A propos</a></li>
				<li><a  href="/books">Rechercher un livre</a></li>
				<li><a  href="/contact">Contact</a></li>
				<li><a  href="/admin">admin</a></li>
				
				<?php if($this->session->userdata('loggedIn')) :   ?>
					<li>
						<a  href="/books/create">Ajouter un livre</a>
					</li>
					<li>
						<a  href="" id="accountLink" ><?= $this->session->userdata('nickname') ?> </a> 									
					</li> 
					<li><a href="/users/logout"> LOGOUT  </a></li>
				<?php endif; ?>


				<?php if(!$this->session->userdata('loggedIn')) :   ?>
					<li>
						<a  href="#" onclick="toggleSignIn()" id="accountLink" > Mon compte</a> 
						<div id="signin" class="signin-hide">
							<form action="/users/login" method="POST">
								<input type="text" name="nickname" id="nickname" placeholder="Pseudo"><br>
								<input type="password" name="password" id="password" placeholder="Mot de passe"><br>
								<button type="submit">  <strong>  Connexion  </strong> </button>
								<p class="menu-mini-text"><a href="/users/register"><strong> Pas encore de compte ?   </strong></a></p>
								<!-- <p class="menu-mini-text"><a href="/users/logout"><strong> LOGOUT  </strong></a></p>  -->
							</form> 
						</div>
					</li>
				<?php  endif; ?>
					
				</ul>

			</div>


			<!--  FLASH MESSAGES  -->
			<?php 
				if($this->session->flashdata('msg')) {
					echo '<main class="alert alert-success">'. $this->session->flashdata('msg') . '</main>';
				}

				if($this->session->flashdata('error')) {
					echo '<main class="alert alert-danger">'. $this->session->flashdata('error') . '</main>';
				 }
			?>
			

