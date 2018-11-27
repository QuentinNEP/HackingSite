<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<meta charset="utf-8">
		<title>S'enregistrer</title>
	</head>
	<body>
	<header>
		<?php include "assets/redir/navbar.php" ?>
			<h1>Espace d'inscription</h1>
				<p>Vous êtes ici pour enregistrer, veuillez remplir les champs suivants !</p>
	</header>
	<main>
	<h1>Inscrivez-vous</h1>
	<strong><p>Page d'inscription</p></strong>
           <form method="post" action="inscription.php">
               <label for="identifiant">Votre identifiant : </label>
                   <input type="text" name="identifiant" id="identifiant" placeholder="Ex : Siphano" required> <br>

               <label for="password">Mot de passe</label>
                   <input type="password" name="password" maxlength="10" placeholder="**********" required><br>
                <label for="password">Confirmation du mot de passe</label>
                   <input type="password" name="password" maxlength="10" placeholder="**********" required><br>
                       <button type="submit"> S'inscrire </button>
	</main>
	</body>
</html>
