-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2018 at 07:15 PM
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
-- Table structure for table `proizvod`
--

DROP TABLE IF EXISTS `proizvod`;
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) NOT NULL,
  `opis` varchar(50) NOT NULL,
  `cijena_po_jedinici` varchar(10) NOT NULL,
  `tip_proizvoda_id` int(100) UNSIGNED NOT NULL,
  `foto` varchar(200) DEFAULT 'no_image.jpg',
  PRIMARY KEY (`id`),
  KEY `tip_proizvoda_id` (`tip_proizvoda_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cijena_po_jedinici`, `tip_proizvoda_id`, `foto`) VALUES
(1, 'Tost s jajima', 'Engleski tip doručka', '1.00', 4, '11.jpg'),
(2, 'Royal burger', 'Meso sa roštilja u pecivu sa susamom', '3.00', 1, '15.jpg'),
(3, 'Losos', 'Brusketi s lososom', '10.00', 2, '18.jpg'),
(4, 'Tart s malinama', 'Kolač s malinama i šlagom', '4.00', 4, '20.jpg'),
(6, 'Biftek s jajima i ruzmarinom', 'Teleće meso sa prilozima', '7.00', 1, '8.jpg'),
(7, 'Vege burger', 'Soja burger sa tikvicom', '12.00', 2, '21.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
