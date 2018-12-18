<?php

function verif_bdd()
{
  $
  if ($db->exec('CREATE DATABASE IF NOT EXISTS hacking_connexion')) {
    $db_create = "CREATE TABLE `hacking_connexion`.`membres` ( `id` INT NOT NULL AUTO_INCREMENT , `pseudo` VARCHAR(255) NOT NULL , `password` TEXT NOT NULL, `mail` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
    $db->exec($db_create);
}
}


 ?>
