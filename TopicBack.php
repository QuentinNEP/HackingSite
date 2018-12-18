<?php

include("config-membre.php");

$list_titre = $bdd->query('SELECT titre FROM post');
$list_titre->fetch()['titre'];
$auteur = $userinfo['pseudo'];
  if (isset($_POST['submit'])){
    if(!empty($_POST['titre']) AND !empty($_POST['texte'])){
      $titre = htmlspecialchars($_POST['titre']);
      $texte = htmlspecialchars($_POST['texte']);

      $longueurTitre = strlen($titre);
      if($longueurTitre >= 3){
        if($longueurTitre <=30){
          $longueurTexte =strlen($texte);

          if($longueurTexte >= 5){
            if($longueurTexte <= 800){
              $reqtitre = $bdd->prepare("SELECT * FROM  WHERE titre = ?");
              $reqtitre->execute(array($titre));
              $titreExist = $reqtitre->rowCount();
              if($titreExist == 0){
                $inserttopic = $bdd->prepare("INSERT INTO post(auteur, texte, titre) VALUES(?, ?, ?)");
                $inserttopic->execute(array($auteur, $texte, $titre));
                echo "Votre topic a bien été créé ! <a href=\"forum.php\">Voir</a>";
              }else{
                echo "Un topic porte déja ce nom.";
              }
            }else{
              echo "Texte trop long";
            }
          }else{
            echo "Texte trop court";
          }
        }else{
          echo "Titre trop long";
        }
      }else{
        echo "Titre trop court";
      }
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
