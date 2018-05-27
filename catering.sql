-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2018 at 02:18 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `sesija`
--

DROP TABLE IF EXISTS `sesija`;
CREATE TABLE IF NOT EXISTS `sesija` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logovan_od` datetime(6) DEFAULT NULL,
  `logovan_do` datetime(6) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

DROP TABLE IF EXISTS `uloga`;
CREATE TABLE IF NOT EXISTS `uloga` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'osoblje'),
(3, 'klijent');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `ime` varchar(15) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `drzava` varchar(25) NOT NULL,
  `grad` varchar(15) NOT NULL,
  `adresa` varchar(25) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `broj_kartice` int(25) NOT NULL,
  `tip_kartice` varchar(20) NOT NULL,
  `ime_na_kartici` varchar(25) NOT NULL,
  `mjesec` varchar(25) NOT NULL,
  `godina` year(4) NOT NULL,
  `uloga_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uloga_id` (`uloga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ime`, `prezime`, `drzava`, `grad`, `adresa`, `telefon`, `email`, `broj_kartice`, `tip_kartice`, `ime_na_kartici`, `mjesec`, `godina`, `uloga_id`) VALUES
(1, 'admin', '123', 'admin', 'admin', 'BiH', 'Sarajevo', 'Nepoznato', 'Prikriven broj', 'admin@admin.ba', 0, '', '', '', 0000, 1),
(2, 'konobar1', 'konobar123', 'Niko', 'Nikic', 'BiH', 'Sarajevo', 'Titova 34', '033 / 123 456', 'konobar1@catering.ba', 0, '', '', '', 0000, 2),
(4, 'hase', 'hhh', 'Haso', 'Hasic', 'Njemacka', 'Frankfurt', 'Kritischertreffer 34', '054 567 123', 'hase@gmail.com', 0, '', '', '', 0000, 3),
(5, 'root', 'root', 'Ime1', 'Pr1', 'BiH', 'Sarajevo', 'Titova', '062 123 321', 'test1@test.com', 0, '', '', '', 0000, 3),
(6, '', '', 'nesto', 'nesto', 'BiH', 'Sarajevo', 'Titova', '062 123 321', 'nesto@test.com', 0, '', '', '', 0000, 3),
(7, 'test2', 'test2', 'test2', 'test2', 'Njemacka', 'Minhen', 'NekaAdresa', '065 123 321', 'neka@hotmail.com', 0, '', '', '', 0000, 3),
(8, 'qqq', '12345678', 'Proba', 'ProbaPrezime', 'BiH', 'Sarajevo', 'Marsala Tita', '121345676', 'qqqqq@gmail.com', 17, 'Visa', 'NekoIme', 'Januar', 2018, 3),
(9, 'qqq', '12345678', 'Proba', 'ProbaPrezime', 'BiH', 'Sarajevo', 'Marsala Tita', '121345676', 'qqqqq@gmail.com', 17, 'Visa', 'NekoIme', 'Januar', 2018, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sesija`
--
ALTER TABLE `sesija`
  ADD CONSTRAINT `sesija_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
