<?php
/*
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}
else {
  $page = "home";
}
*/
?>
<!DOCTYPE html>
  <html>
    <head>
    	<title>Admin - MyOnlineBooks</title>
		<meta charset="utf-8">
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"  rel="stylesheet">
		<!-- <link type="text/css" rel="stylesheet"  href="<?php // echo base_url(); ?>/assets/css/style.css" media="screen,projection"/> -->
    <style type="text/css">
      .img-miniature {
        height: 50px;
        width: 50px;
      }
    </style>
     </head>
     <body>
		 <script src="/assets/js/jquery.js"></script>
      <!-- <script src="libraries/jquery-1.12/jquery-1.12.4.min.js"></script> -->
      <script src="/assets/js/bootstrap.min.js"></script>



			<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Affichage mobile -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/admin">MyOnlineBooks Admin</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php // if ($page=='updatebook') echo 'class="active"'; ?>><a href="/abooks/edit" >Ajouter/Modifier un livre</a></li>
        <li <?php // if ($page=='listbooks') echo 'class="active"'; ?>><a href="/abooks">Lister les livres</a></li>
        <li <?php // if ($page=='updatecategory') echo 'class="active"'; ?>><a href="/acategories/edit">Ajouter/Modifier une catégorie</a></li>
        <li <?php // if ($page=='listcategories') echo 'class="active"'; ?>><a  href="/acategories">Lister les catégories</a></li>
      </ul>
    </div>
  </div>
</nav>