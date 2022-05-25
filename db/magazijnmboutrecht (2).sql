-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 mei 2022 om 13:03
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazijnmboutrecht`
--
CREATE DATABASE IF NOT EXISTS `magazijnmboutrecht` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `magazijnmboutrecht`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `additem`
--

DROP TABLE IF EXISTS `additem`;
CREATE TABLE IF NOT EXISTS `additem` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role` enum('student','teacher') NOT NULL,
  `name` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `arrivaldate` date NOT NULL,
  `untilldate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `additem`
--

INSERT INTO `additem` (`id`, `role`, `name`, `item`, `amount`, `arrivaldate`, `untilldate`) VALUES
(1, 'student', 'Aron', 'a', 5, '2022-03-01', '2022-03-10'),
(2, 'teacher', 'wwf', 'wf', 3, '2022-03-18', '2022-03-29'),
(3, 'student', 'Aron', 'Brood', 6, '2022-03-10', '2022-03-31'),
(4, 'student', 'Emma', 'dildo', 69, '2022-03-10', '2022-04-10'),
(5, 'student', 'testerr', 'potlood', 1, '2022-04-07', '2022-04-08'),
(6, 'student', 'rre', 'rerer', 23, '2022-04-15', '2022-04-17'),
(9, 'teacher', 'wewe', 'sdsd', 12, '2001-12-12', '2002-12-12'),
(10, 'student', 'test', 'test', 12, '2001-12-12', '2002-12-12'),
(11, 'teacher', 'hans', 'dildo030', 3169, '2022-04-15', '2022-04-17');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lendoutinfo`
--

DROP TABLE IF EXISTS `lendoutinfo`;
CREATE TABLE IF NOT EXISTS `lendoutinfo` (
  `id` int(255) NOT NULL,
  `product` varchar(200) NOT NULL,
  `nummer` varchar(16) NOT NULL,
  `role` enum('teacher','student') NOT NULL,
  `naam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `studentnummer` varchar(20) NOT NULL,
  `mobielnummer` int(15) NOT NULL,
  `leendatum` date NOT NULL,
  `terugdatum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `lendoutinfo`
--

INSERT INTO `lendoutinfo` (`id`, `product`, `nummer`, `role`, `naam`, `achternaam`, `studentnummer`, `mobielnummer`, `leendatum`, `terugdatum`) VALUES
(16, 'Ak47', '1', 'teacher', 'John', 'Wick', '000007', 612345678, '2022-04-13', '2022-04-15'),
(17, 'potlood', '2', 'student', 'aron', 'ridder', '123123', 612345678, '2022-04-13', '2022-04-14'),
(18, 'Oplader', '0', 'teacher', 'Taif', 'Rahim', '123123', 61234566, '2022-04-13', '2022-04-14'),
(19, 'Laptop', '0', 'student', 'Maric', 'Alexei', '123123', 612345678, '2022-04-15', '2022-04-17'),
(24, 'Blok goud', '0', 'student', 'Yusuf', 'Ors', '321611', 611223344, '2022-04-22', '2022-05-01'),
(25, 'Arc reactor', '0', 'teacher', 'Tony', 'Stark', '321611', 612345678, '2022-04-13', '2022-04-15'),
(26, 'oscarrrrrrrr', '0', 'student', 'Brad', 'Pitt', '321611', 61234567, '1980-02-01', '2001-03-02'),
(27, 'spatel', '0', 'teacher', 'Spongebob', 'Squarepants', '321611', 612345678, '2022-04-13', '2022-04-16');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `role`
--

INSERT INTO `role` (`id`, `role`, `description`) VALUES
(0, 'student', 'The student of MBO Utrecht'),
(1, 'financial_admin', 'The financial admin of MBO Utrecht, this role manages everything for the expenses'),
(2, 'warehouse_admin', 'The warehouse admin makes sure the warehouse is uptodate and manages the inventory'),
(3, 'super_user', 'The super user has complete control of the warehouse and every service');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activated` int(1) NOT NULL,
  `userrole_id` int(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `userrole_id` (`userrole_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `createdAt`, `updatedAt`, `activated`, `userrole_id`) VALUES
(1, '123456@student.mboutrecht.nl', '123456', '2022-04-05 13:03:15', '2022-04-05 13:03:15', 1, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activated` int(1) NOT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_user_fk` FOREIGN KEY (`userrole_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
