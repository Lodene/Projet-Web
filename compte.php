<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/base.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/menu_deroulant.css">
	<link rel="stylesheet" type="text/css" href="style/compte.css">
</head>
<body>
	<?php
		include("php/header.php");
	?>
	<main>
		<?php
			if(isset($_SESSION["mail"])){
				echo "<h3> Salut ". $_SESSION['pseudo'] .  " ! </h3>";
				?>
				<div class="propos">
					<div class="titre">
						<h2> Profil </h2>
					</div>
					<div class="bas">
						<a href="profil.php" class="ligne">
							<p>Voir mon profil</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Mes messages</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Mes moyens de paiement</p>
							<p class="droite"> > </p>
						</a>
						<a href="logout.php" class="ligne">
							<p>Déconnexion</p>	
							<p class="droite"> > </p>		
						</a>
					</div>
				</div>
				<div class="propos">
					<div class="titre">
						<h2> Esapce Fidelité </h2>
					</div>
					<div class="bas">
						<a href="#" class="ligne">
							<p>Devenir partenaire</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Soutenir l'application</p>
							<p class="droite"> > </p>
						</a>
					</div>
				</div>
				<div class="propos">
					<div class="titre">
						<h2> A propos de  </h2>
					</div>
					<div class="bas">
						<a href="#" class="ligne">
							<p>Devenir Trader</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Rejoins nous sur les réseaux !</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Aide</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Contacter le support</p>
							<p class="droite"> > </p>
						</a>
						<a href="#" class="ligne">
							<p>Qui sommes nous ?</p>
							<p class="droite"> > </p>
						</a>
					</div>
				</div>



				<?php
			}
			else {
				echo "connecte toi bg";

			}
		?>
	

	</main>
	<?php 
		include("php/footer.php");
	?>
</body>
</html>