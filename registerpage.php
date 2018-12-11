<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<meta charset="utf-8">
		<title>S'enregistrer</title>
	</head>
	<body>
	<header>
		<nav data-aos="fade-down">
			<img src="assets/image/backgrounds/background.jpg" alt="">
			<a href="index.php">Accueil</a>
			<a href="forum.php">Forum</a>
			<a href="loginpage.php">Se connecter</a>
			<a class="actif" href="registerpage.php">S'inscrire</a>
			<a href="membre.php">Page membre</a>
			<a href="topic.php">Les topics</a>
		</nav>

	</header>
	<main>
		<div class="login">
			<hr>
			<h1>Espace d'inscription</h1>
				<p>Vous êtes ici pour enregistrer, veuillez remplir les champs suivants !</p>
				<h1>Inscrivez-vous</h1>
				<?php include "register_verif.php"; ?>
				<strong><p>Page d'inscription</p></strong>
           <form method="post" action="registerpage.php">
               <label for="identifiant">Votre identifiant : </label>
                   <input type="text" name="user" id="identifiant" placeholder="Ex : Siphano" value="<?php if(isset($user)){echo $user;}?>" required> <br>
				<label for="email">Votre e-mail : </label>
				   <input type="text" name="email" id="email" placeholder="Ex : monemail@gmail.com" value="<?php if(isset($email)){echo $email;}?>" required> <br>

               <label for="password">Mot de passe :</label>
                   <input type="password" name="pwd" maxlength="10" placeholder="**********" required><br>
                <label for="password">Confirmation :</label>
                   <input type="password" name="pwdConf" maxlength="10" placeholder="**********" required><br>
                       <button type="submit" name="submit"> S'inscrire </button></form>
				<hr>
		</div>
	</main>
	<footer>
		<?php include "foot.php"; ?>
	</footer>
	<script>
  	AOS.init();
	</script>
	</body>
</html>
