<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/recherche.css">
	<title>Recherche</title>
</head>
<body>
	<?php
		require("config.php");
		include("php/header.php");
	?>
	<main>
		<p> Etes vous sur de vouloir miser sur cette evenement ? Vous ne pourrez pas annuler la mise </p>
		<p> <a href="lastetapemiser.php"> Miser </a> </p>
	</main>
	<?php 
		include("php/footer.php");
	?>
</body>
</html>