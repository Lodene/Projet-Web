<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon application</title>
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body>
	<?php
		require('config.php');
		include_once('php/header.php');
		
	?>
	<main>
		<p> Bravo votre mise à été ajouté a l'evenement </p>
		<?php
			$a = 1;

			if ($a = 1) {
				$a = 2;
				$totalargent = 0;
				$numevenement = $_SESSION['numevenement'];
				$numclient = $_SESSION['numclient'];
				$mise = $_SESSION['mise'];
				echo $numevenement;
				$query = "SELECT * FROM evenement WHERE numevenement = $numevenement";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				while ($data = mysqli_fetch_assoc($result)) {
					$totalargent = $data['argent'];
				}
				$totalargent = $mise + $totalargent;
			
				$query = "UPDATE evenement SET argent = $totalargent WHERE numevenement = $numevenement";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				$query = "INSERT into `participer` (numevenement, numclient)
											VALUES ($numevenement, $numclient)";
				$result = mysqli_query($conn,$query) or die(mysql_error());
			}
			
		?>
		<p> <a href="index.php"> Retour a la page d'accueil</a>
	</main>
	<?php include_once('php/footer.php') ?>

</body>
</html>