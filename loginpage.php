<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<meta charset="utf-8">
		<title>Se connecter</title>
	</head>
	<body>
	<header>
		<nav>
			<a href="index.php">Accueil</a>
			<a href="forum.php">Forum</a>
			<a class="actif" href="loginpage.php">Se connecter</a>
			<a href="registerpage.php">S'inscrire</a>
			<a href="membre.php">Page membre</a>
		</nav>

	</header>
	<main>
		<div class="login">
			<hr>
			<h1>Espace de connection</h1>
			<?php  include 'login_verif.php';   ?>
				<p>Vous êtes ici pour vous connectez à votre compte veuillez remplir les champs suivants !</p>
					<h1>Connectez vous</h1>
        	<strong><p>Page de connection</p></strong>
           <form method="post" action="loginpage.php">
               <label for="identifiant">Votre identifiant : </label>
                   <input type="text" name="user" id="identifiant" placeholder="Ex : Identifiant" required>

               <label for="password">Mot de passe</label>
                   <input type="password" name="pwd" maxlength="10" placeholder="**********" required>
                       <button type="submit" name="submit"> Connexion </button>
			<hr>
		</div>
	</main>
	<footer>
		<?php include "foot.php" ?>
	</footer>
	</body>
</html>
