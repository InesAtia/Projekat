-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2018 at 11:34 AM
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
-- Database: `catering_pals`
--

-- --------------------------------------------------------

--
-- Table structure for table `faktura`
--

DROP TABLE IF EXISTS `faktura`;
CREATE TABLE IF NOT EXISTS `faktura` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `broj_fakture` varchar(100) NOT NULL,
  `iznos_fakture` varchar(100) NOT NULL,
  `datum_fakture` date NOT NULL,
  `placeno` tinyint(1) NOT NULL,
  `narudzba_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `narudzba_id` (`narudzba_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faktura`
--

INSERT INTO `faktura` (`id`, `broj_fakture`, `iznos_fakture`, `datum_fakture`, `placeno`, `narudzba_id`) VALUES
(1, '34', '50', '2018-05-17', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

DROP TABLE IF EXISTS `narudzba`;
CREATE TABLE IF NOT EXISTS `narudzba` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `broj_narudzbe` int(100) NOT NULL,
  `datum_narudzbe` datetime NOT NULL,
  `usluga_konobara` tinyint(1) NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `narudzba_proizvod`
--

DROP TABLE IF EXISTS `narudzba_proizvod`;
CREATE TABLE IF NOT EXISTS `narudzba_proizvod` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kolicina` int(200) NOT NULL,
  `narudzba_id` int(100) NOT NULL,
  `proizvod_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `narudzba_id` (`narudzba_id`),
  KEY `proizvod_id` (`proizvod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

DROP TABLE IF EXISTS `proizvod`;
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) NOT NULL,
  `opis` varchar(50) NOT NULL,
  `cijena_po_jedinici` varchar(10) NOT NULL,
  `tip_proizvoda_id` int(100) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tip_proizvoda_id` (`tip_proizvoda_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cijena_po_jedinici`, `tip_proizvoda_id`) VALUES
(1, 'tulumba', 'tradicionalni bosanski kolac', '1.00', 4),
(2, 'begova corba', 'tradicionalno bosansko jelo', '3.00', 1),
(3, 'klepe', 'tijesto punjeno mesom', '10.00', 2),
(4, 'baklava', 'kolac s orasima preliven agdom', '4.00', 4),
(5, 'tufahija', 'prelivena jabuka sa slagom i orasima', '5.00', 4),
(6, 'povrtna juha', 'juha od sezonskog povrca', '7.00', 1),
(7, 'grah s mesom', 'grah sa suhim govedjim mesom', '12.00', 2),
(8, 'sarma', 'smjesa od rize i mesa u kiselom kupusu', '7.00', 2),
(9, 'pomfrit', 'przeni krompir', '1.50', 3),
(10, 'riza', 'kuhana riza', '3.00', 3),
(11, 'grilovano povrce', 'sezonsko povrce sa grila', '5.00', 3),
(12, 'pekarski krompir', 'krompir ispod peke', '4.00', 3),
(13, 'gljive na zaru', 'sezonske gljive sa grila', '4.00', 3),
(14, 'juha od paradajza', 'zacinjena juha od paradajza i povrca', '4.00', 1),
(15, 'plata sir', 'odabrane vrste sira', '10.00', 1),
(16, 'bruskete', 'brusketa s tunom i jabukama', '12.00', 1),
(17, 'pastrmka sa grila', 'svjeza pastrmka sa grila', '15.00', 2),
(18, 'biftek u biber sosu', 'svjeze govedje meso u biber sosu', '20.00', 2),
(19, 'pura', 'palenta sa kajmakom i sirom', '6.00', 1),
(20, 'musaka', 'zapeceno povrce i meso u pavlaci i jajima', '7.00', 2),
(21, 'lazanje', 'tradicionalno talijansko jelo', '8.00', 2),
(22, 'punjene paprike', 'paprike punjenje mesom i rizom', '6.00', 2),
(23, 'palacinke', 'prelivi od cokolade, marmelade, sirupa', '5.00', 4),
(24, 'lijena pita', 'kolac od jabuka i cimeta', '3.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `promjena_statusa_narudzbe`
--

DROP TABLE IF EXISTS `promjena_statusa_narudzbe`;
CREATE TABLE IF NOT EXISTS `promjena_statusa_narudzbe` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `datum_od` date NOT NULL,
  `datum_do` date NOT NULL,
  `napomena` varchar(200) NOT NULL,
  `narudzba_id` int(100) NOT NULL,
  `status_narudzbe_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `narudzba_id` (`narudzba_id`),
  KEY `status_narudzbe_id` (`status_narudzbe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logovan_od` timestamp NOT NULL,
  `logovan_do` timestamp NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status_narudzbe`
--

DROP TABLE IF EXISTS `status_narudzbe`;
CREATE TABLE IF NOT EXISTS `status_narudzbe` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `opis` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tip_proizvoda`
--

DROP TABLE IF EXISTS `tip_proizvoda`;
CREATE TABLE IF NOT EXISTS `tip_proizvoda` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `vrsta` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_proizvoda`
--

INSERT INTO `tip_proizvoda` (`id`, `vrsta`) VALUES
(1, 'predjelo'),
(2, 'glavno jelo'),
(3, 'prilog'),
(4, 'desert');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `ime` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `grad` varchar(30) NOT NULL,
  `drzava` varchar(40) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `broj_kartice` int(20) NOT NULL,
  `tip_kartice` varchar(15) NOT NULL,
  `ime_kartica` varchar(30) NOT NULL,
  `datum_isteka_kartice` date NOT NULL,
  `role_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
