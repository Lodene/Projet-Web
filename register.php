 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/base.css" />
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" href="style/connecter.css" />
</head>
<body>
<?php
require('config.php');
include("php/header.php");
?>
<main>
	<?php
$test = 0;
if (isset($_REQUEST['pseudo'], $_REQUEST['mail'], $_REQUEST['date'], $_REQUEST['password'])){
	$mailverif = $_REQUEST['mail'];
	$query = "SELECT * FROM `investisseur` WHERE mail='$mailverif'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$user = mysqli_fetch_assoc($result);
	$passwordtest = $_REQUEST['password'];

	if (mysqli_num_rows($result) == 0) {
		
		$date = $_REQUEST['date'];
		// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
		$pseudo = stripslashes($_REQUEST['pseudo']);
		$pseudo = mysqli_real_escape_string($conn, $pseudo); 
		// récupérer l'mail et supprimer les antislashes ajoutés par le formulaire
		$mail = stripslashes($_REQUEST['mail']);
		$mail = mysqli_real_escape_string($conn, $mail);
		// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn, $password);

		$majuscule = preg_match('@[A-Z]@', $password);
		$minuscule = preg_match('@[a-z]@', $password);
		$chiffre = preg_match('@[0-9]@', $password);
		
		if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
			if($majuscule AND $minuscule AND $chiffre ){

				$dateformat = explode("-",$_REQUEST['date']);
				if (checkdate($dateformat[1], $dateformat[2], $dateformat[0])){

					$now = date_create('now');
		            $birth = date_create($_REQUEST['date']);
		            $interval = date_diff($birth, $now);
		            $age = $interval->format('%Y');
		            if ($age >= 18) {
		            	if ($age <= 100 ) {
							$query = "INSERT into `investisseur` (type, administrateur, mail, pseudo, date_naissance, age, password)
										VALUES (0, 0, '$mail', '$pseudo', '$date','$age', '".hash('sha256', $password)."')";
							$res = mysqli_query($conn, $query);

						    if($res){
						       $test = 7;
						    }
						} else {
							$test = 6;
						}
					} else {
						$test = 5;
					}
				} else {
					$test = 4;
				}
			}else {
				$test = 3;
			}
		}else {
			$test = 2;
		}
	}else {
		$test = 1;
	}
}

if ($test < 7){ ?>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>
	<input type="text" name="pseudo" placeholder="Nom d'utilisateur" required />
    <input type="text" name="mail" placeholder="mail" required />
    <input type="date" name="date" placeholder="Date de naissance" required />
    <input type="password" name="password" placeholder="Mot de passe" minlength="8" required />
    <input type="submit" name="submit" value="S'inscrire" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>

<?php }
if ($test == 1){ ?>
    <div class='verif'>
	    <h3>Le mail est malheureusement déjà utlisé </h3>
	</div>
<?php } 
if ($test == 2){ ?>
    <div class='verif'>
	    <h3>Le format du mail n'est pas correcte </h3>
	</div>
<?php } 
if ($test == 3){ ?>
    <div class='verif'>
	    <h3>Votre mot de passe doit contenir au minimum: 1 lettre majuscule, 1 lettre miniscule, 1 chiffre et en tout 8 caractères </h3>
	</div>
<?php }
if ($test == 4){ ?>
    <div class='verif'>
	    <h3>La date de naissance est invalide </h3>
	</div>
<?php }
if ($test == 5){ ?>
    <div class='verif'>
	    <h3>Vous êtes trop jeune pour pouvoir vous créer un compte </h3>
	</div>
<?php } 
if ($test == 6){ ?>
    <div class='verif'>
	    <h3>La date de naissance est invalide (trop grand) </h3>
	    <?php echo $pseudo; ?>
	</div>
<?php }
if ($test == 7) {
 	echo "	<div class='sucess'>
	        <h3>Vous êtes inscrit avec succès.</h3>
	        <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			</div>";
 	} ?>

</form>
</main> <?php
	include("php/footer.php");
 ?>
</body>
</html>