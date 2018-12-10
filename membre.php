<?php include("config-membre.php")?>

<html>
   <head>
      <title>OUI LA REUSSITE !</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['user']; ?></h2>
         <br />
         Pseudo = <?php echo $userinfo['user']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="deconnect.php">Deconnect</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
