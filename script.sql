-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: facepet
-- ------------------------------------------------------
-- Server version	5.7.36
--
-- Table structure for table `loginsystem`
--

DROP TABLE IF EXISTS `loginsystem`;
CREATE TABLE `loginsystem` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Table structure for table `postagem`
--

DROP TABLE IF EXISTS `postagem`;

CREATE TABLE `postagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(200) DEFAULT NULL,
  `autor` varchar(60) DEFAULT NULL,
  `dia` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dump completed on 2022-12-12 23:22:31
