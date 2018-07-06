-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `wd4` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wd4`;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tk` int(11) NOT NULL,
  `des` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`id`, `userid`, `title`, `cat`, `img`, `tk`, `des`) VALUES
(1,	1,	'food',	'Cat-2',	'icon/m1.jpg',	200,	'Shahjalal University of Science and Technology also known as SUST is a state supported university located in Sylhet, Bangladesh. It is the first university to adopt American credit system in Bangladesh'),
(2,	1,	'barger',	'Cat-3',	'icon/im2.jpg',	100,	'Shahjalal University of Science and Technology also known as SUST is a state supported university located in Sylhet, Bangladesh. It is the first university to adopt American credit system in Bangladesh'),
(3,	1,	'porota',	'Cat-3',	'icon/im3.jpg',	200,	'Shahjalal University of Science and Technology also known as SUST is a state supported university located in Sylhet, Bangladesh. It is the first university to adopt American credit system in Bangladesh');

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `revnum` int(11) NOT NULL,
  KEY `productid` (`productid`),
  KEY `userid` (`userid`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `products` (`id`),
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `reviews` (`productid`, `userid`, `title`, `comment`, `revnum`) VALUES
(1,	2,	'Best ever Brunch in a Pizza Parlor? YES!',	'Shahjalal University of Science and Technology also known as SUST is a state supported university located in Sylhet, Bangladesh. It is the first university to adopt American credit system in Bangladesh',	3),
(1,	3,	'Best ever Brunch in a Pizza Parlor? YES!',	'Shahjalal University of Science and Technology also known as SUST is a state supported university located in Sylhet, Bangladesh. It is the first university to adopt American credit system in Bangladesh',	4);

DROP TABLE IF EXISTS `userdetail`;
CREATE TABLE `userdetail` (
  `userid` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  KEY `userid` (`userid`),
  CONSTRAINT `userdetail_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `userdetail` (`userid`, `img`) VALUES
(1,	'uploads/download.jpg'),
(2,	'uploads/download.jpg'),
(3,	'uploads/profile-img.jpg');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `email`, `option`, `password`) VALUES
(1,	'foysol',	'saharahul039@gmail.com',	'Manager',	'12345'),
(2,	'wd4',	'saharahul039@gmail.com',	'Food Lover',	'112233'),
(3,	'Nakib',	'saharahul039@gmail.com',	'Food Lover',	'112233');

-- 2018-07-06 09:03:42
