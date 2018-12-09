<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<meta charset="utf-8">
		<title>S'enregistrer</title>
	</head>
	<body>
	<header>
		<nav>
			<a href="index.php">Accueil</a>
			<a href="forum.php">Forum</a>
			<a href="loginpage.php">Se connecter</a>
			<a class="actif" href="registerpage.php">S'inscrire</a>
		</nav>

	</header>
	<main>
		<div class="login">
			<hr>
			<h1>Espace d'inscription</h1>
				<p>Vous êtes ici pour enregistrer, veuillez remplir les champs suivants !</p>
				<h1>Inscrivez-vous</h1>
				<strong><p>Page d'inscription</p></strong>
           <form method="post" action="registerpage.php">
               <label for="identifiant">Votre identifiant : </label>
                   <input type="text" name="user" id="identifiant" placeholder="Ex : Siphano" required> <br>
				<label for="email">Votre e-mail : </label>
				   <input type="text" name="mail" id="email" placeholder="Ex : monemail@gmail.com" required> <br>

               <label for="password">Mot de passe :</label>
                   <input type="password" name="pwd" maxlength="10" placeholder="**********" required><br>
                <label for="password">Confirmation :</label>
                   <input type="password" name="pwdConf" maxlength="10" placeholder="**********" required><br>
                       <button type="submit" name="submit"> S'inscrire </button></form>
				<hr>
		</div>
	</main>
	<footer>
		<?php include "foot.php" ?>
	</footer>
	</body>
</html>
