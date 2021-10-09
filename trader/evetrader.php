<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/base.css">
	<link rel="stylesheet" type="text/css" href="../style/footer.css">
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<link rel="stylesheet" type="text/css" href="../style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="../style/compte.css">
	<link rel="stylesheet" type="text/css" href="../style/recherche.css">
</head>
<body>
	<?php
		require('../config.php');
		include("php_trader/headertrader.php");
	?>
	<main>
		<?php

		if(isset($_SESSION["numtrader"] )){ 
			$numtrader = $_SESSION["numtrader"];
			$sql = "SELECT * FROM `evenement` WHERE numtrader = $numtrader";
			$test = mysqli_query($conn,$sql) or die(mysql_error());

			// on va scanner tous les tuples un par un
			while ($data = mysqli_fetch_assoc($test)) {
			?>
			<div class="block">
				<p> Nom bourse : <?php echo $data['bourse']; ?> </p>
				<p> date début : <?php echo $data['debut']; ?> </p>
				<p> date fin : <?php echo $data['fin']; ?></p>
				<p> argent récolté : <?php echo $data['argent']; ?> </p>
			</div> <?php 
			}
		} else {
				echo "connecte toi bg";
		}
		?>
		

	</main>
	<?php 
		include("php_trader/footertrader.php");
	?>
</body>
</html>