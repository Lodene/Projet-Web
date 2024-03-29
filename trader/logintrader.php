<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style/base.css">
	<link rel="stylesheet" type="text/css" href="../style/footer.css">
	<link rel="stylesheet" type="text/css" href="../style/header.css">
	<link rel="stylesheet" type="text/css" href="../style/menu_deroulant.css">
	<link rel="stylesheet" href="../style/connecter.css" />
</head>
<body>
	<?php
		require('../config.php');
		include("php_trader/headertrader.php");

		if (isset($_POST['mail'])){
			$mail = stripslashes($_REQUEST['mail']);
			$mail = mysqli_real_escape_string($conn, $mail);
			$_SESSION['mail'] = $mail;
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn, $password);
		    $query = "SELECT * FROM `trader` WHERE mail='$mail'";
			$result = mysqli_query($conn,$query) or die(mysql_error());

			
			if (mysqli_num_rows($result) == 1) {
				$user = mysqli_fetch_assoc($result);
				$_SESSION['mail'] = $user['mail'];
				$_SESSION['numtrader'] = $user['numtrader'];
				$_SESSION['nom'] = $user['nom'];
				$_SESSION['prenom'] = $user['prenom'];
				header('location: indextrader.php');
			}else{
				$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
			}
		}

		
	?>
	<main>
		<form action="" method="post" name="login">
			<h1 class="box-title">Connexion</h1>
			<input type="text" name="mail" placeholder="Mail">
			<input type="password" name="password" placeholder="Mot de passe">
			<input type="submit" value="Connexion " name="submit">
			<p>Se créer un compte en tant que <a href="registertrader.php" class="cotrader"> trader</a></p>
			<p>Se connecter en tant que <a href="../login.php" class="cotrader"> investisseur</a></p>
				<?php if (! empty($message)) { ?>
				    <p class="errorMessage"><?php echo $message; ?></p>
				<?php } ?>

		</form>

	</main>
	<?php 
		include("php_trader/footertrader.php");
	?>
</body>
</html>