<?php
include("assets\backPHP\config-membre.php"); ?>

<?php if(isset($getid) AND $getid > 0){  include("TopicBack.php");?>

<form method="post" action="createTopic.php">
    <label for="titre">Titre du topic</label>
        <input type="text" name="titre" id="titre" placeholder="Titre du topic">

    <label for="texte">Texte</label>
        <input type="text" name="texte"  >
            <button type="submit" name="submit"> Créer </button>
 </form>

<?php }else{echo "Vous devez être connecté pour pouvoir écrire un topic";} ?>
