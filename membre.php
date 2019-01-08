<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<link rel="stylesheet" href="assets/style/style.css">
		<meta charset="utf-8">
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


<<<<<<< HEAD
=======
<?php include("assets\backPHP\config-membre.php");?>
<?php if(isset($getid) AND $getid > 0) {?>
>>>>>>> 90813da6f2368ce23a22ee1dfe9ca9beba545d17
   <body>
      <div class="phpclass" align="center">
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
         <a href="assets\backPHP\deconnect.php">Deconnect</a>
         <?php
         }
         ?>
       <?php }
       else {
          echo "Vous n'êtes pas connecté ! <a href=\"loginpage.php\">Se connecter</a>";
        }; ?>
      </div>
			<p><input type="button" value="Changer mon mot de passe !">
				<h1>Changer mon mot de passe</h1>
       <?php
      if(isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
      {
      ?>
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
     else{
      echo '<p>Vous devez être connecté pour pouvoir changer votre mot de passe !</p>';
     }
     ?>
   </body>
</html>
