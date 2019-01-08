<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="assets/image/gamepad.ico">
		<title>Page membre</title>
	</head>
	<body>
	<header>
    <nav data-aos="fade-down">
        <a href="index.php">Accueil</a>
        <a href="forum.php">Forum</a>
        <a href='loginpage.php'>Se connecter</a>
        <a href='registerpage.php'>S'inscrire</a>
        <a class="actif" href='membre.php'>Page membre</a>
    </nav>
<?php include("assets\backPHP\config-membre.php") ?>


<?php if(isset($getid) AND $getid > 0) {?>

   <body>
      <div class="phpclass" align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         E-mail = <?php echo $userinfo['email']; ?>
         <br />

         <br />
         <a href="assets\backPHP\deconnect.php">Deconnect</a>
				 <form class=chatform method="get" action="changer_mdp.php">
				<p>
				<label for="pseudo">Votre nouveau mot de passe :</label><input type="password" name="mdp" id="mdp" required/>
				<br/>
				<label for="pseudoConfirm">Retapez votre nouveau mot de passe :</label><input type="password" name="mdpConfirm" id="mdpConfirm" required/>
				<br/>
			 <input type="submit" value="Changer mon mot de passe">
			 </form>
         <?php
         }
				 else {
					 echo "Vous devez être connecté pour accéder à ce profil.";
				 }
         ?>

      </div>

   </body>
</html>
