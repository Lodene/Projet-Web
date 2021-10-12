# projet_application
Date de commencement : 15/09/2021

-- A faire
	- Regler le probleme responsive des 3 petits points dans les pages miser.php miser2.php
	- modifier le € de la page miser2.php pour qu'il reste présent meme quand l'utilisateur à renté un chiffre
	- Quand on se connecte ou on s'enregistre et qu'une etape est fausse, il faut faire en sorte a ce que les autres etapes (email par ex) ne se supprime pas si il n'y a pas d'erreur
	- test
	- les trader voient les evenement qu'ils ont créé et quils sont fini 
	- ajouter un bouton "terminer l'evennement" modifiera la date de fin de l'evenement 


-- La table sql 
	Investisseur :
		CREATE TABLE `investisseur` (
		  `numclient` int(11) NOT NULL,
		  `type` int(1) NOT NULL DEFAULT 0 COMMENT 'investisseur : 0 ou trader : 1',
		  `administrateur` int(1) NOT NULL DEFAULT 0 COMMENT 'non : 0 / oui : 1',
		  `mail` varchar(100) NOT NULL,
		  `pseudo` varchar(100) NOT NULL,
		  `date_naissance` date NOT NULL DEFAULT '9734-11-10',
		  `age` int(11) NOT NULL,
		  `password` varchar(100) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;