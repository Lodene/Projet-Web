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
		<div id="hautmain">
			<div id="gauchemain">
				<a href="miser.php"> < </a>
			</div> 
			<div id="centremain">
				<h1> Quelle sera la mise de départ ? </h1>

				<form action="" method="get" id="formulaire">
				    <input type="number" name="misedepart" id="texteformulaire" max="999999" min="1" placeholder="                           €" />
				</form>
				<?php 
					if (empty($_GET['pseudo'])){
						$_SESSION['mise'] = $_GET['misedepart'];
						?>
						<div class="rechercher">
							<div>
								<a href="recherche.php">
									<h2> Recherchez </h2>
									<h3> > </h3>
								</a>
							</div>
						</div>
						<?php
					} else {
						?>
						<div class="rechercher">
							<div>
								<a href="#">
									<h2> Recherchez </h2>
									<h3> > </h3>
								</a>
							</div>
						</div>
						<?php
						}	
						?>
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