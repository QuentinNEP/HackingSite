<?php

function verif_bdd()
{
  /*session_start();
  */
  if ($bdd->exec('CREATE DATABASE IF NOT EXISTS hacking_connexion')) {
    $db_create = "CREATE TABLE `hacking_connexion`.`membres` ( `id` INT NOT NULL AUTO_INCREMENT , `pseudo` VARCHAR(255) NOT NULL , `password` TEXT NOT NULL, `mail` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
    $db->exec($db_create);
    $db_create = "CREATE TABLE `hacking_connexion`.`post` ( `id` INT NOT NULL AUTO_INCREMENT , `titre` VARCHAR(255) NOT NULL , `createur` VARCHAR(255) NOT NULL, `text` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
    $db->exec($db_create);
}

}

 ?>
