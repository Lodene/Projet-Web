<header>
	<?php session_start(); ?>
	<h1> Nom de l'application <h2>
	<?php	
		
		if(!isset($_SESSION["numtrader"])){
			?> 
			<div class="divida">
				<a href="logintrader.php" class="ida">
					<img src="../img/profil.png" class="profil" alt="profil">
					<p class="idap2"> Se Connecter </p>
				</a> 
			</div>
			<?php 
		} else {
			?> 
			<div class="divida">
				<a href="comptetrader.php" class="ida">
					<div>
						<img src="../img/profil.png" class="profil" alt="profil"> 
					</div>
					<div class="nometprenom">
						<p class="idap"> 
						<?php 
							echo $_SESSION['nom'] ." " . $_SESSION['prenom'];
						?>
						</p>
					</div>
				</a> 
			</div>
		<?php } ?>
</header>