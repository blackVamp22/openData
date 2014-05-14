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


#################################################################
#                                                               #
#                          districts                            #
#                                                               #
#################################################################

DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `districts`( `id`, `name`) VALUES
(1, 'Mitte' ),
(2, 'Friedrichshain-Kreuzberg'),
(3, 'Pankow'),
(4, 'Charlottenburg-Wilmersdorf'),
(5, 'Spandau'),
(6, 'Steglitz-Zehlendorf'),
(7, 'Tempelhof-Schöneberg'),
(8, 'Neukölln'),
(9, 'Treptow-Köpenick'),
(10, 'Marzahn-Hellersdorf'),
(11, 'Lichtenberg'),
(12, 'Reinickendorf');

#################################################################
#                                                               #
#                          gender                               #
#                                                               #
#################################################################

DROP TABLE IF EXISTS `genders`;
CREATE TABLE `genders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `genders`( `id`, `name`) VALUES
(1, 'female' ),
(2, 'male'),
(3, 'other');

#################################################################
#                                                               #
#                          age range                            #
#                                                               #
#################################################################

DROP TABLE IF EXISTS `age_ranges`;
CREATE TABLE `age_ranges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `age_ranges`( `id`, `name`) VALUES
(1, '0-5' ),
(2, '6-14'),
(3, '15-17'),
(4, '18-34'),
(5, '35-64'),
(6, '65-79'),
(7, '80+');

#################################################################
#                                                               #
#                          datasets                             #
#                                                               #
#################################################################

DROP TABLE IF EXISTS `life_expectations`;
CREATE TABLE `life_expectations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,  
  `gender_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `aging_structures`;
CREATE TABLE `aging_structures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `percentage_female` int NOT NULL,
  `age_range_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,  
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `percentage_male` int NOT NULL,
  `percentage_female` int NOT NULL,
  `year` int(11) NOT NULL,  
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `housing_benefits`;
CREATE TABLE `housing_benefits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `absolute` int(11) NOT NULL,
  `percentage` int NOT NULL,  
  `year` int(11) NOT NULL,  
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;