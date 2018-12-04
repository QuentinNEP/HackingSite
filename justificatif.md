# Justificatif

Nous allons ici décrire nos choix et les expliquer afin de mieux les comprendre.

## Choix mysqli

Nous avons choisi d'utiliser mysqli pour les liens entre PHP et la base de donnée
car PDO est plus rapide et plus sécurisée. mysqli va ainsi nous permettre d'explorer
certaines failles qui n'existent pas sur PDO.

## Choix formulaire POST

Nous avons préféré utiliser des formulaires en POST étant donné qu'il se fait de plus en
plus rare de voir des formulaires utilisant GET. Nous voulons ainsi garder une
certaine crédibilité.

## Hachage de mots de passe md5

Nous allons utiliser les hacheur de mot de passe md5 plutot que sha1 car moins
efficace et plus vulnérable à la casse. Cela laissera une faille au niveau SQL et
récupération des données confidentielles.

## Formulaires http

Nous avons choisi d'utiliser HTTP pour montrer la dangerosité de ce type de
formulaires. Ainsi il sera beaucoup plus simple de récupérer les données en clair
à l'aide d'outils comme Wireshark.
