 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/wallet.css">
	<title>Wallet</title>
</head>
<body>
	<?php
		require("config.php");
		include("php/header.php");
	?>
	<main>
		<?php
			
		?>

		<?php

		if(isset($_SESSION["pseudo"] )){ 
			$query = "SELECT * FROM participer p 
						INNER JOIN evenement e ON e.numevenement = p.numevenement
						INNER JOIN investisseur i ON i.numclient = p.numclient 
						INNER JOIN trader t ON t.numtrader = e.numtrader";
			$result = mysqli_query($conn,$query) or die(mysql_error());
			// on va scanner tous les tuples un par un
			while ($data = mysqli_fetch_assoc($result)) {
			?>
			<div class="block">
				<p> Nom bourse : <?php echo $data['bourse']; ?> </p>
				<p> date début : <?php echo $data['debut']; ?> </p>
				<p> date fin : <?php echo $data['fin']; ?></p>
				<p> argent récolté : <?php echo $data['argent']; ?> </p>
				<p> trader : <?php echo $data['nom'] . " " . $data['prenom']; ?> </p>
			</div> <?php 
			}
		} else {
				echo "connecte toi bg";
		}
		?>
	</main>
	<?php 
		include("php/footer.php");
	?>
</body>
</html>