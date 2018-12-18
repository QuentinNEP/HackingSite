<?php

$bdd = new PDO('mysql:host=localhost;dbname=hacking_connexion;charset=utf8', 'root', '');

$list_titre = $bdd->query('SELECT pseudo FROM membres');
$list_titre->fetch()['pseudo'];

$new_name = false;

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
        }
      }
    }

?>
