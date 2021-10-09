<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/miserbase.css">
	<link rel="stylesheet" type="text/css" href="style/miser2.css">
	<title>2eme page miser</title>
</head>
<body>
	<?php
		include("php/header.php");
	?>
	<main>
		<?php 
			if (isset($_GET['misedepart'])){
				$_SESSION['mise'] = $_GET['misedepart'];
				header('location: recherche.php');
			} 
		?>
		<div id="hautmain">
			<div id="gauchemain">
				<a href="miser.php"> < </a>
			</div> 
			<div id="centremain">
				<h1> Quelle sera la mise de départ ? </h1>

				<form action="" method="get" id="formulaire">
				    <div class="rechercher"><input type="number" name="misedepart" id="texteformulaire" max="999999" min="1" placeholder="                           €" required/> </div>
				    <div class="rechercher"><input type="submit" name="submit" value="Rechercher" id="valider"></div>
				</form>
				<form>
					 
				</form>
				
			</div>
		</div>
		<div class="cercles">
			<div class="cercle"></div> 
			<div class="cercle"></div> 
		</div>
		

	</main>
	<?php 
		include("php/footer.php");
	?>
</body>
</html>