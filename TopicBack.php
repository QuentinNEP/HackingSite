<?php

include("config-membre.php");

$list_titre = $bdd->query('SELECT titre FROM post');
$list_titre->fetch()['titre'];
/*$auteur = $userinfo['pseudo'];*/
$auteur = "tinou";
  if (isset($_POST['submit'])){
    $titre = htmlspecialchars($_POST['titre']);
    $texte = htmlspecialchars($_POST['texte']);
    if(!empty($_POST['titre']) AND !empty($_POST['texte'])){
      echo "okep";
    }else{
      echo "Veuillez remplir tout les champs";
    }
  }


?>
<!-- $inserttopic = $bdd->prepare("INSERT INTO post(auteur, texte, titre) VALUES(?, ?, ?)");
$inserttopic->execute(array($auteur, $texte, $titre));
echo "Votre topic a bien été créé ! <a href=\"forum.php\">Voir</a>";

$reqtitre = $bdd->prepare("SELECT * FROM  WHERE titre = ?");
$reqtitre->execute(array($titre));
$titreExist = $reqtitre->rowCount();-->
