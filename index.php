<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<meta charset="utf-8">
		<title>Acceuil</title>
	</head>
	<body>
	<header>
<<<<<<< HEAD
		<?php include("config-membre.php")?>
		<nav data-aos="fade-down">>
				<img src="assets/image/backgrounds/background.jpg" alt="">
				<a class="actif" href="index.php">Accueil</a>
				<a  href="forum.php">Forum</a>
				<?php if($_GET['id'] == 0) { ?><a href='loginpage.php'>Se connecter</a>
				<a href='registerpage.php'>S'inscrire</a><?php } else { ?>
				<a href='membre.php'>Page membre</a><?php } ?>
=======
		<nav data-aos="fade-down">
			<img src="assets/image/backgrounds/background.jpg" alt="">
			<a class="actif" href="index.php">Accueil</a>
			<a href="forum.php">Forum</a>
			<a href="loginpage.php">Se connecter</a>
			<a href="registerpage.php">S'inscrire</a>
			<a href="membre.php">Page membre</a>
			<a href="topic.php">Les topics</a>
>>>>>>> c036bdaf7da612ea6d1bb54a4decd867246d87b5
		</nav>
	</header>
	<main>

	</main>
	<footer>
		<?php include "foot.php" ?>
	</footer>
	<script>
  AOS.init();
</script>
	</body>
</html>
