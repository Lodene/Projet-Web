<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/miserbase.css">
	<link rel="stylesheet" type="text/css" href="style/miser.css">
	<title>miser</title>
</head>
<body>
	<?php
		include("php/header.php");
	?>
	<main>
		<div id="hautmain">
			<div id="centremain">
				<h1> Que recherchez vous en terme de risque/gain ? </h1>
				

				<div class="slidecontainer">
					<span id="demo"> 
						<p> Réussite : <?php echo "..." . "%"; ?> </p>
						<p>	Gain : <?php echo "..." . "%"; ?></p>
					</span>
				  <input type="range" min="1" max="3" value="1" class="slider" id="myRange">
				</div>

				<script src="js/couleur.js"></script>
			</div>
			<div id="droitemain">
				<a href="miser2.php"> > </a>
			</div>
		</div>
		<div class="cercles">
			<div class="cercle" id="cercleun"></div> 
			<div class="cercle" id="cercledeux"></div> 
		</div>
		

	</main>
	<?php 
		include("php/footer.php");
	?>
</body>
</html>