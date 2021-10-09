<header>
	<?php session_start(); ?>
	<h1> Nom de l'application <h2>
	<?php	

		if(isset($_SESSION["pseudo"] )){ ?>
			<div class="divida">
				<a href="./compte.php" class="ida">
					<div>
						<img src="img/profil.png" class="profil" alt="profil"> 
					</div>
					<div>
						<p class="idap"> 
						<?php 
							echo $_SESSION['pseudo']; 
						?>
					</p>
					</div>
				</a> 
			</div> 
			<?php
		} else {
			?> 
			<div class="divida">
				<a href="./login.php" class="ida">
					<img src="img/profil.png" class="profil" alt="profil">
					<p class="idap2"> Se Connecter </p>
				</a> 
			</div>
		<?php } ?>
</header>


