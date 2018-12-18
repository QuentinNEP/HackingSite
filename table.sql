CREATE TABLE `post` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  PRIMARY KEY  (`post_id`));

CREATE TABLE `membres` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`));
