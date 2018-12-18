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
		<?php
		include("config-membre.php");

		?>

		<nav data-aos="fade-down">>
				<img src="assets/image/backgrounds/background.jpg" alt="">
				<a class="actif" href="index.php">Accueil</a>
				<a  href="forum.php">Forum</a>
				<a href='loginpage.php'>Se connecter</a>
				<a href='registerpage.php'>S'inscrire</a>
				<a href='membre.php'>Page membre</a>
		</nav
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
