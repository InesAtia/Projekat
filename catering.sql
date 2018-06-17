-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2018 at 11:14 AM
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
-- Table structure for table `kontakt_poruka`
--

DROP TABLE IF EXISTS `kontakt_poruka`;
CREATE TABLE IF NOT EXISTS `kontakt_poruka` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) NOT NULL,
  `email_korisnika` varchar(30) NOT NULL,
  `poruka` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontakt_poruka`
--

INSERT INTO `kontakt_poruka` (`id`, `ime`, `email_korisnika`, `poruka`) VALUES
(1, 'Jana', 'janacalovic@gmail.com', 'I am Batman'),
(2, 'Jana', 'janacalovic@gmail.com', 'Neka vazna poruka'),
(15, 'Franz', 'liszt@gmail.com', 'The best pianist ever'),
(9, 'Bruce Wayne', 'batman@gmail.com', 'I am Batman'),
(13, 'Wolfgang', 'mozart@gmail.com', 'The best composer in history');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) NOT NULL,
  `opis` varchar(50) NOT NULL,
  `cijena_po_jedinici` varchar(10) NOT NULL,
  `foto` varchar(200) DEFAULT 'no_image.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `naziv`, `opis`, `cijena_po_jedinici`, `foto`) VALUES
(1, 'Tost s jajima', 'Engleski tip doručka', '1.00', '11.jpg'),
(2, 'Royal burger', 'Meso sa roštilja u pecivu sa susamom', '3.00', '15.jpg'),
(3, 'Losos', 'Brusketi s lososom', '10.00', '18.jpg'),
(4, 'Tart s malinama', 'Kolač s malinama i šlagom', '4.00', '20.jpg'),
(6, 'Biftek s jajima i ruzmarinom', 'Teleće meso sa prilozima', '7.00', '8.jpg'),
(7, 'Vege burger', 'Soja burger sa tikvicom', '12.00', '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

DROP TABLE IF EXISTS `narudzba`;
CREATE TABLE IF NOT EXISTS `narudzba` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(25) NOT NULL,
  `tip` varchar(20) NOT NULL,
  `cijena_po_jedinici` double(5,2) NOT NULL,
  `vrijeme` timestamp NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`id`, `naziv`, `tip`, `cijena_po_jedinici`, `vrijeme`, `status`, `user_id`) VALUES
(1, 'Pasta salata', 'predjelo', 5.00, '2018-06-16 22:35:22', 0, 0),
(2, 'Pasta salata', 'predjelo', 5.00, '2018-06-16 22:37:08', 1, 0),
(3, 'Raznjici', 'predjelo', 4.00, '2018-06-16 22:37:57', 0, 0),
(4, 'Raznjici', 'predjelo', 4.00, '2018-06-16 22:38:38', 0, 0),
(5, 'Raznjici', 'predjelo', 4.00, '2018-06-16 22:39:34', 0, 0),
(6, 'Losos', 'glavno jelo', 10.00, '2018-06-16 23:25:27', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `podesavanja`
--

DROP TABLE IF EXISTS `podesavanja`;
CREATE TABLE IF NOT EXISTS `podesavanja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `podesavanja`
--

INSERT INTO `podesavanja` (`id`, `title`) VALUES
(1, 'Catering Pals');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naslov` varchar(500) NOT NULL,
  `opis` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `naslov`, `opis`) VALUES
(1, 'Sta je katering?', 'Catering je organizacija i posluÅ¾ivanje hrane i piÄ‡a prema Å¾eljama klijenata. Dijeli se na posluÅ¾ivanje u vlastitim poslovnim jedinicama i na lokacijama. SluÅ¾i se najÄeÅ¡Ä‡e u dvije varijante:\r\n\r\nToplo-hladni buffet, poznatiji kao Å¡vedski sto, servira se na raznim vrstama zabava, proslava ili obiljeÅ¾avanja nekih drugih manifestacija. Gosti se sami posluÅ¾uju bogatim izborom ukusnih jela koja su unaprijed servirana u posebnim dekorativnim posudama ili na ogledalima.\r\n\r\nCocktail-party je poseban vid posluge hrane i piÄ‡a. Za razliku od Å¡vedskog stola na kojem su postavljena glavna jela, hranu i piÄ‡e posluÅ¾uju konobari, a jela se sastoje od malih zalogaja (finger food).'),
(2, 'Korporativni catering', 'Organizacija i posluÅ¾ivanje hrane i piÄ‡a prilikom seminara, kongresa, konferencija, sajmova. Obuhvata piÄ‡e dobrodoÅ¡lice, kafe pauze, ruÄak ili cocktail. U korporativni catering spada i organizacija i posluÅ¾ivanje poslovnih veÄera, kao i organizacija svih vrsta manifestacija i proslava za razliÄite kompanije. Za viÅ¡e informacija o naÅ¡im zadovoljnim klijentima, pogledajte referentnu listu.'),
(3, 'DruÅ¡tveni catering', 'Organizacija i posluÅ¾ivanje hrane i piÄ‡a prilikom razliÄitih proslava: roÄ‘endani, vjenÄanja i okupljanja kod mlade i mladoÅ¾enje, porodiÄna okupljanja, proslave diplomskih, magistarskih i doktorskih radova, vjerskih dogaÄ‘aja, razliÄite vrste privatnih zabavaâ€¦'),
(4, 'Specijalizirani i tematski catering', 'Catering Pals ima viÅ¡egodiÅ¡nje iskustvo u organizaciji i posluÅ¾ivanju hrane i piÄ‡a za filmske ekipe na udaljenim lokacijama. Do sada smo saraÄ‘ivali na snimanju sljedeÄ‡ih filmova: â€žSniperâ€™s Valleyâ€œ i â€žStormâ€œ UG Deblokada (u njemaÄkoj produkciji), â€žGrbavicaâ€œ, â€žNa putuâ€œ UG Deblokada, â€žKod amidÅ¾e Idrizaâ€œ i â€žTeÅ¡ko je biti finâ€œ â€“ Refresh production, â€žUntitled Bosnian War Love Storyâ€œ koji je napisala i reÅ¾irala Angelina Jolie, kao i odreÄ‘eni broj kratkih i dokumentarnih filmova za SFF.'),
(5, 'Catering na otvorenom', 'Mnogobrojne poznate lokacije bile su domaÄ‡in klijentima za koje je catering organizovao Catering Pals: baÅ¡ta Zemaljskog muzeja (Uniqua osiguranje, veÄera nakon koncerta Ricarda Mutti-ja, Ambasada ÄŒeÅ¡ke, SlovaÄke, SAD); Bijela tabija (UG Deblokada, premijera â€žGrbaviceâ€œ za koju je organiziran iskljuÄivo bosanski toplo-hladni bife), Svrzina kuÄ‡a, kuÄ‡a Alije Äerzeleza, DespiÄ‡a kuÄ‡a, baÅ¡ta Galerije â€žMakâ€œ, Konak (Otvaranje SFF-a, BH Telecom), proslava mature Bosna Sema koledÅ¾a na Vracama (3000 gostiju), Atmejdan (otvaranje nakon restauracije), Ulica BravadÅ¾iluk (otvaranje nakon restauracije), svadbe na otvorenomâ€¦ Catering Pals ima kompletnu profesionalnu ugostiteljsku opremu (mobilijar) za 3000 gostiju, nekoliko dostavnih vozila i profesionalnu prikolicu za catering na udaljenim lokacijama i otvorenom.\r\nNaÅ¡i principi zasnovani su na jednostavnim receptima, a to su prijateljstvo, profesionalnost, dodir inovacije i fleksibilnosti, uz veliku predanost i ljubav prema naÅ¡em poslu. NaÅ¡ tim se konstantno usavrÅ¡ava, jer kako naÅ¡e spoznaje rastu, tako raste i naÅ¡a moguÄ‡nost da ispunimo svaku vaÅ¡u Å¾elju i budemo uvijek vaÅ¡ prvi i jedini izbor za Catering.Å½eljno iÅ¡Äekujemo da suraÄ‘ujemo sa vama, kontaktirajte nas da dogovorimo vaÅ¡ slijedeÄ‡i Catering bez obzira koliko on mali ili veliki bio, tu smo da vam na taj dan pruÅ¾imo nezaboravno kulinarsko iskustvo.');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

DROP TABLE IF EXISTS `proizvod`;
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(20) NOT NULL,
  `opis` varchar(50) NOT NULL,
  `cijena_po_jedinici` decimal(5,2) NOT NULL,
  `tip` varchar(20) NOT NULL,
  `slika` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cijena_po_jedinici`, `tip`, `slika`) VALUES
(1, 'Lagani sendvic', 'sunka, jaja, svjeze pecivo', '3.50', 'predjelo', 'jelo5'),
(2, 'Pasta salata', 'pasta, svjeze povrce', '5.00', 'predjelo', 'jelo6'),
(3, 'Raznjici', 'Meso, gljive, povrce', '4.00', 'predjelo', 'jelo11'),
(4, 'Sendvic', 'Piletina, jaja, pomfrit, sos', '5.00', 'predjelo', 'jelo12'),
(5, 'Lagani sendvic', 'Integralni tost, povrce, namaz', '5.50', 'predjelo', 'jelo16'),
(6, 'Americke palacinke', 'Preliv javorov sirup ili cokolada', '6.00', 'predjelo', 'jelo23'),
(7, 'Gljive sa grila', 'Dodatak povrce po izboru', '5.50', 'predjelo', 'jelo26'),
(8, 'Millenial tost', 'Avokado, jaje', '7.00', 'predjelo', 'jelo29'),
(9, 'Palacinke', 'Preliv sirup, cokolada, sumsko voce', '5.00', 'predjelo', 'jelo30'),
(10, 'Americke palacinke', 'Preliv sumsko voce', '6.00', 'predjelo', 'jelo38'),
(11, 'Salata', 'Sezonsko povrce', '5.00', 'predjelo', 'jelo41'),
(12, 'Sareni raznjici', 'Povrce, slanina, sunka', '7.00', 'predjelo', 'jelo48'),
(13, 'Salata od povrca', 'Sezonsko povrce', '5.00', 'predjelo', 'jelo49'),
(14, 'Tuna steak', 'Medium, rare, well done', '15.00', 'glavno jelo', 'jelo1'),
(15, 'Pasta s piletinom', 'Pasta po izboru', '12.00', 'glavno jelo', 'jelo4'),
(16, 'Piletina u maku', 'Prilog povrce', '13.00', 'glavno jelo', 'jelo7'),
(17, 'Delikates burger', 'Sos po posebnoj recepturi', '10.00', 'glavno jelo', 'jelo8'),
(18, 'Losos u soja sosu', 'Prilog povrce', '17.00', 'glavno jelo', 'jelo10'),
(19, 'Pasta u limun sosu', 'Pasta po izboru', '12.00', 'glavno jelo', 'jelo13'),
(20, 'Pileca krilca', 'Prilog po zelji', '14.00', 'glavno jelo', 'jelo15'),
(21, 'Pasta paradajz', 'Pasta po zelji', '12.00', 'glavno jelo', 'jelo17'),
(22, 'Domaci lonac', 'Meso, sezonsko povrce', '15.00', 'glavno jelo', 'jelo18'),
(23, 'Grilovani losos', 'Prilog po izboru', '17.00', 'glavno jelo', 'jelo19'),
(24, 'Mediteranska pizza', 'Mediteransko povrce', '14.00', 'glavno jelo', 'jelo20'),
(25, 'Vegetarijanska pizza', 'Svjeze povrce', '12.00', 'glavno jelo', 'jelo35'),
(26, 'Pizza', 'Salama, sir', '13.00', 'glavno jelo', 'jelo39'),
(27, 'Klasicni hamburger', 'Meso, svjeze povrce', '9.00', 'glavno jelo', 'jelo21'),
(28, 'Losos u limun sosu', 'Prilog svjeza salata', '19.00', 'glavno jelo', 'jelo31'),
(29, 'Biftek u soja sosu', 'Prilog sezonsko povrce', '28.00', 'glavno jelo', 'jelo32'),
(30, 'Biftek u biber sosu', 'Prilog svjeze povrce', '30.00', 'glavno jelo', 'jelo36'),
(31, 'Morska riba sa grila', 'Riba po izboru', '26.00', 'glavno jelo', 'jelo40'),
(32, 'Riba u limun sosu', 'Riba po izboru', '27.00', 'glavno jelo', 'jelo47'),
(33, 'Sushi', 'Sushi po izboru', '29.00', 'glavno jelo', 'jelo33'),
(34, 'Povrtni lonac', 'Sezonsko povrce', '20.00', 'glavno jelo', 'jelo34'),
(35, 'Pasta sa skoljkama', 'Pasta po izboru', '29.00', 'glavno jelo', 'jelo43'),
(36, 'Zitarice', 'Jogurt i voce', '7.00', 'dezert', 'jelo2'),
(37, 'Kolac s jagodama', 'Slag i svjeze jagode', '5.00', 'dezert', 'jelo3'),
(38, 'Integralni mufini', 'Svjeze voce', '6.00', 'dezert', 'jelo14'),
(39, 'Mufini s cokoladom', 'Komadici cokolade', '3.00', 'dezert', 'jelo25'),
(40, 'Domaci kolacici', 'Suhi kolaci', '2.00', 'dezert', 'jelo27'),
(41, 'Vocni jogurt', 'Sumsko voce', '4.00', 'dezert', 'jelo28'),
(42, 'Slatko vrhnje ', 'Sezonsko voce', '5.00', 'dezert', 'jelo24'),
(43, 'Biskviti', 'Suhi kolaci', '3.00', 'dezert', 'jelo37'),
(44, 'Cokoladni kolac', 'Sa slagom', '4.00', 'dezert', 'jelo44'),
(45, 'Slatki ustipci', 'Sa cokoladom', '2.50', 'dezert', 'jelo45'),
(46, 'Red Velvet Cake', 'Sa slatkim vrhnjem', '5.00', 'dezert', 'jelo46'),
(47, 'Domaca torta', 'Sa svjezim vocem', '15.00', 'dezert', 'jelo22'),
(48, 'Ledena kafa', 'Sa sladoledom i slagom', '4.50', 'pice', 'jelo9'),
(49, 'Kafa', 'Delikates kafa', '3.50', 'pice', 'coffee'),
(50, 'Tost s jajima', 'Engleski tip dorucka', '1.00', 'predjelo', 'jelo51'),
(51, 'Royal Burger', 'Meso sa grila ', '3.00', 'glavno jelo', 'jelo52'),
(52, 'Losos', 'Brusketi s lososom', '10.00', 'glavno jelo', 'jelo53'),
(53, 'Tart s malinama', 'Maline i slag', '4.00', 'dezert', 'jelo54'),
(54, 'Biftek s jajima', 'Prilozi po zelji', '7.00', 'glavno jelo', 'jelo50'),
(55, 'Vege Burger', 'Soja burger s tikvicom', '12.00', 'glavno jelo', 'jelo55');

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
  `broj_kartice` varchar(16) NOT NULL,
  `tip_kartice` varchar(20) NOT NULL,
  `ime_na_kartici` varchar(25) NOT NULL,
  `mjesec` varchar(15) NOT NULL,
  `uloga_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uloga_id` (`uloga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ime`, `prezime`, `drzava`, `grad`, `adresa`, `telefon`, `email`, `broj_kartice`, `tip_kartice`, `ime_na_kartici`, `mjesec`, `uloga_id`) VALUES
(1, 'admin', '123', 'admin', 'admin', 'BiH', 'Sarajevo', 'Nepoznato', 'Prikriven broj', 'admin@admin.ba', '0', '', '', '', 1),
(2, 'konobar1', 'konobar123', 'Niko', 'Nikic', 'BiH', 'Sarajevo', 'Titova 34', '033 / 123 456', 'konobar1@catering.ba', '0', '', '', '', 2),
(4, 'hase', 'hhh', 'Haso', 'Hasic', 'Njemacka', 'Frankfurt', 'Kritischertreffer 34', '054 567 123', 'hase@gmail.com', '0', '', '', '', 3),
(7, 'test2', 'test2', 'test2', 'test2', 'Njemacka', 'Minhen', 'NekaAdresa', '065 123 321', 'neka@hotmail.com', '0', '', '', '', 3),
(8, 'update12', '12345678', 'Proba', 'ProbaPrezime', 'BiH', 'Sarajevo', 'Marsala Tita', '121345676', 'qqqqq@gmail.com', '17', 'Visa', 'NekoIme', '', 3),
(10, 'qwerty12', '12345678', 'Proba111', 'Oriba222', 'BiH', 'Sarajevo', 'Marsala Tita', '231089123', 'qwerty@gmail.com', '16', 'AmericanExpress', 'ImeKartice', '', 3),
(11, 'dodo', 'dodo', 'dodajAdmin', 'byAdmin', 'bih', 'Sarajevo', 'titova', '123345', 'dodaj@gmail.com', '19', 'Visa', 'ddad', '', 3),
(13, 'pjames', 'deadlikeyou', 'peter', 'james', 'Bugarska', 'Sofija', 'Glavna Ulica 45', '+987654321', 'peter@gmail.com', '1235679088765482', 'Visa', 'Peter James', '2020-01-01', 3),
(14, 'Fatimica', 'jednajefatima', 'Fatima', 'FatiÄ‡', 'Bosna i Hercegovina', 'Sarajevo', 'Trg Heroja 7', '+387564321', 'fatimaf@gmail.com', '1236543216789045', 'Maestro', 'Fatima FatiÄ‡', '2018-06-14', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
