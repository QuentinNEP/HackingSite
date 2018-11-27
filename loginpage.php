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
		</nav>
			<h1>Espace de connection</h1>
				<p>Vous êtes ici pour vous connectez à votre compte veuillez remplir les champs suivants !</p>
	</header>
	<main>
	<h1>Connectez vous</h1>
        <strong><p>Page de connection</p></strong>
           <form method="post" action="traitement.php">
               <label for="identifiant">Votre identifiant : </label>
                   <input type="text" name="identifiant" id="identifiant" placeholder="Ex : Identifiant" required>

               <label for="password">Mot de passe</label>
                   <input type="password" name="password" maxlength="10" placeholder="**********" required>
                       <button type="submit"> Connection </button>
	</main>
	<footer>
		<p>FIN DE LA PAGE</p>
	</footer>
	</body>
</html>
