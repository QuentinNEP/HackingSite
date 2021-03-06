<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="assets/image/gamepad.ico">
    <title>Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/style/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="main.js"></script>
</head>

<body>
    <header>
        <nav data-aos="fade-down">
            <a href="index.php">Accueil</a>
            <a class="actif" href="forum.php">Forum</a>
            <a href='loginpage.php'>Se connecter</a>
            <a href='registerpage.php'>S'inscrire</a>
            <a href='membre.php'>Page membre</a>
        </nav>
    <main>

        <h1 class="titlecenter"
            data-aos="fade-right"
    				data-aos-delay="300">Espace de discussion</h1>
        <p>Vous êtes ici pour parlez de sujet en rapport avec les jeux vidéos, d'actualité ou non !</p>
        <a href="createTopic.php"><img src="assets\image\+.png" alt="+" height="20" width="20"></a>
          <?php
          $bdd = new PDO('mysql:host=localhost;dbname=hacking_connexion;charset=utf8', 'root', '');
          $result = $bdd->query('SELECT * FROM post');
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <p>=========================================</p>
            <p>Auteur : <?php echo $row['auteur'] ?></p>
            <p>=========================================</p>
            <p><?php echo $row['titre'] ?></p>
            <p><?php echo $row['texte'] ?></p>

            <?php
          }

           ?>
    </main>
    <footer>
        <?php include "foot.php" ?>
    </footer>
    <script>
    AOS.init();
    </script>
</body>

</html>
