<?php include("TopicBack.php"); ?>

<form method="post" action="createTopic.php">
    <label for="titre">Titre du topic</label>
        <input type="text" name="titre" id="titre" placeholder="Titre du topic" required>

    <label for="texte">Texte</label>
        <input type="text" name="texte" required>
            <button type="submit" name="submit"> Créer </button>
 </form>
