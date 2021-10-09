 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/base.css">
	<link rel="stylesheet" type="text/css" href="../style/footer.css">
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<link rel="stylesheet" type="text/css" href="../style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/evenement.css">
</head>
<body>
	<?php
		require('../config.php');
		include("php_trader/headertrader.php");
	?>
	<main>
		
		
		<?php 	

		if (isset($_GET['bourse'], $_GET['reussite'], $_GET['debut'], $_GET['fin'])){

			$numtrader = $_SESSION['numtrader'];

			$bourse = stripslashes($_GET['bourse']);
			$bourse = mysqli_real_escape_string($conn, $bourse); 

			$reussite = stripslashes($_GET['reussite']);
			$reussite = mysqli_real_escape_string($conn, $reussite); 

			$gain = stripslashes($_GET['gain']);
			$gain = mysqli_real_escape_string($conn, $gain); 

			$dateformat = explode("-",$_GET['debut']);
			if (checkdate($dateformat[1], $dateformat[2], $dateformat[0])  ){
				$dateformatdeux = explode("-",$_GET['fin']);
				$datequirentre = $_GET['debut'];
				$datequirentr = $_GET['fin'];
				if (checkdate($dateformatdeux[1], $dateformatdeux[2], $dateformatdeux[0])  ){
		            $debutdate = date_create($_GET ['debut']);
		            $findate = date_create($_GET ['fin']);
	            	if (($debutdate < $findate) == true) {
            			$resultat = "SELECT * FROM `evenement` WHERE bourse='$bourse' AND reussite='$reussite' AND gain='$gain' AND debut='$datequirentre' AND fin='$datequirentr' AND numtrader='$numtrader'";
						$resultats = mysqli_query($conn,$resultat) or die(mysql_error());
						$resu = mysqli_fetch_assoc($resultats);

            			if (mysqli_num_rows($resultats) == 0) {

							$query = "INSERT into `evenement` (numevenement, bourse, reussite, gain, debut, fin, argent, numtrader)
											VALUES ('', '$bourse', '$reussite', '$gain','$datequirentre', '$datequirentr',  0, '$numtrader')";
							$res = mysqli_query($conn, $query);

						    if($res){
						       echo "L'evenement à été ajouté, merci de regarder vos mail pour confirmer";
						    }
						} else {
							echo "evenement déjà inseré";
						}
					} else {
						echo "on est pas la";
					}
				} else {
					echo "aled";
				}
			} else {
				echo "format pas bon";
			}
		}

		
		?>
		<h3> Créer un evenement </h3>
		<form action="" method="get">
		    Nom de la Bourse :  <input type="text" name="bourse" /> </br>
		    Reussite : (petit / moyen / gros) <input type="text" name="reussite" /></br>
		    Gain : (petit / moyen / gros) <input type="text" name="gain" /></br>
		    Date début :  <input type="date" name="debut" /></br>
		    Date début :  <input type="date" name="fin" /></br>
		    <input type="submit" name="submit" /> 
		</form>
		
	

	</main>
	<?php 
		include("php_trader/footertrader.php");
	?>
</body>
</html>