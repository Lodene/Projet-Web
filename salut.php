<DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form>
			<input type="date" name="date" placeholder="Date de naissance" required />
			<input type="submit" name="submit" value="S'inscrire" />
		</form>

		<?php
			if(!empty($_GET['date'])){
				echo $_GET['date']; ?> </br> <?php
				$dateformat = explode("-",$_GET['date']);
				echo $dateformat[0]; ?> </br> <?php
				echo $dateformat[1];?> </br> <?php
				echo $dateformat[2];?> </br></br></br> <?php

	            if ($interval->format('%D jours') >= 100 ) {
	            	echo "niceee";
	            } else {
	            	echo "nonono";
	            }

			}
			
		?>
	</body>
</html>