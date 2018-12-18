<?php

$bdd = new PDO('mysql:host=localhost;dbname=hacking_connexion;charset=utf8', 'root', '');

$list_titre = $bdd->query('SELECT titre FROM post');
$list_titre->fetch()['titre'];
$auteur = $userinfo['pseudo'];

  if (isset($_POST['submit']))
  {
    $longueurTitre = strlen($_POST['titre']);
    $longueurTexte = strlen($_POST['texte']);
    if ($longueurTitre <= 1 || $longueurTitre >= 30){
      if ($longueurTexte <= 10 || $longueurTexte >= 500){
      	if(!empty($_POST['titre']) AND !empty($_POST['texte']))
      	{
          $titre = htmlspecialchars($_POST['titre']);
          $texte = htmlspecialchars($_POST['texte']);

          $reqtitre = $bdd->prepare("SELECT * FROM  WHERE titre = ?");
          $reqtitre->execute(array($titre));
          $titreExist = $reqtitre->rowCount();
          if($titreExist > 0){
            $inserttopic = $bdd->prepare("INSERT INTO post(auteur, texte, titre) VALUES(?, ?, ?)");
            $inserttopic->execute(array($auteur, $texte, $titre));
            echo "Votre topic a bien été créé ! <a href=\"forum.php\">Voir</a>";
          }
        }
      }
    }

?>
