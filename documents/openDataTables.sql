CREATE DATABASE `openData` DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE `openData`;

# goup members
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `matrikel` varchar(150) NOT NULL,
  `created` BIGINT unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
