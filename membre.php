<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<meta charset="utf-8">
		<title>Page membre</title>
	</head>
	<body>
	<header>
<<<<<<< HEAD
    <nav data-aos="fade-down">>
        <img src="assets/image/backgrounds/background.jpg" alt="">
        <a href="index.php">Accueil</a>
        <a href="forum.php">Forum</a>
        <?php if($_GET['id'] == 0) { ?><a href='loginpage.php'>Se connecter</a>
        <a href='registerpage.php'>S'inscrire</a><?php } else { ?>
        <a class="actif" href='membre.php'>Page membre</a><?php } ?>
    </nav>
=======
		<nav>
			<a href="index.php">Accueil</a>
			<a href="forum.php">Forum</a>
			<a href="loginpage.php">Se connecter</a>
			<a href="registerpage.php">S'inscrire</a>
      <a class="actif" href="membre.php">Page membre</a>
			<a href="topic.php">Les topics</a>
		</nav>
>>>>>>> c036bdaf7da612ea6d1bb54a4decd867246d87b5


<?php include("config-membre.php")?>
<?php if(isset($_GET['id']) AND $_GET['id'] > 0) {?>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         E-mail = <?php echo $userinfo['email']; ?>
         <br />

         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="deconnect.php">Deconnect</a>
         <?php
         }
         ?>
       <?php }
       else {
          echo "Vous n'êtes pas connecté ! <a href=\"loginpage.php\">Se connecter</a>";
        }; ?>
      </div>
   </body>
</html>
