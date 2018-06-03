-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2018 at 08:46 PM
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
-- Table structure for table `narudzba`
--

DROP TABLE IF EXISTS `narudzba`;
CREATE TABLE IF NOT EXISTS `narudzba` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(25) NOT NULL,
  `tip` varchar(20) NOT NULL,
  `cijena_po_jedinici` double(5,2) NOT NULL,
  `vrijeme` timestamp NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`id`, `naziv`, `tip`, `cijena_po_jedinici`, `vrijeme`, `user_id`) VALUES
(4, 'Pileca supa', 'predjelo', 3.50, '2018-06-03 10:23:15', 1),
(5, 'Pileca supa', 'predjelo', 3.50, '2018-06-03 10:25:30', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `naslov`, `opis`) VALUES
(1, 'Å ta je katering?', 'Catering je organizacija i posluï¿½ivanje hrane i pi?a prema ï¿½eljama klijenata. Dijeli se na posluï¿½ivanje u vlastitim poslovnim jedinicama i na lokacijama. Sluï¿½i se naj?eï¿½?e u dvije varijante: Toplo-hladni buffet, poznatiji kao ï¿½vedski sto, servira se na raznim vrstama zabava, proslava ili obiljeï¿½avanja nekih drugih manifestacija. Gosti se sami posluï¿½uju bogatim izborom ukusnih jela koja su unaprijed servirana u posebnim dekorativnim posudama ili na ogledalima. Cocktail-party je poseban vid posluge hrane i pi?a. Za razliku od ï¿½vedskog stola na kojem su postavljena glavna jela, hranu i pi?e posluï¿½uju konobari, a jela se sastoje od malih zalogaja (finger food).'),
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cijena_po_jedinici`, `tip`, `slika`) VALUES
(1, 'Pileca supa', 'Supa sa pilecim mesom', '3.50', 'predjelo', 'gal1'),
(2, 'Teleca supa', 'Supa sa telecim mesom', '3.50', 'predjelo', 'gal2'),
(3, 'Pileca salata', 'Salata sa pilecim mesom', '4.00', 'predjelo', 'gal3'),
(4, 'Teleca salata', 'Salata sa telecim mesom', '4.00', 'predjelo', 'gal4'),
(5, 'Pileci rizoto', 'Rizoto sa pilecim mesom', '5.50', 'glavno jelo', 'gal5'),
(6, 'Teleci rizoto', 'Rizoto sa telecim mesom', '6.50', 'glavno jelo', 'gal6'),
(7, 'Riba', 'Razne vrste ribe', '8.50', 'glavno jelo', 'gal7'),
(8, 'Rolovana teletina', 'Teletina, riza, pavlaka, gljive', '10.00', 'glavno jelo', 'gal8'),
(9, 'Vocni tanjir', 'Banana, jagode, maline, slag', '4.00', 'desert', 'gal9'),
(10, 'Palacinke', 'Palacinke sa eurokremom', '3.50', 'desert', 'gal10'),
(11, 'Torta', 'Komad torte', '5.50', 'desert', 'gal11'),
(12, 'Banana split', 'Banana, slag, sladoled', '6.00', 'desert', 'gal12'),
(13, 'Kola', 'Coca-cola', '3.00', 'pice', ''),
(14, 'Caj', 'Razne vrste cajeva', '2.50', 'pice', ''),
(15, 'Limunada', 'Cijedjeni limun', '4.50', 'pice', ''),
(16, 'Kafa', 'Espresso, instant', '1.50', 'pice', ''),
(17, 'Sokic1', 'Na razblazivanje', '1.00', 'pice', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ime`, `prezime`, `drzava`, `grad`, `adresa`, `telefon`, `email`, `broj_kartice`, `tip_kartice`, `ime_na_kartici`, `mjesec`, `godina`, `uloga_id`) VALUES
(1, 'admin', '123', 'admin', 'admin', 'BiH', 'Sarajevo', 'Nepoznato', 'Prikriven broj', 'admin@admin.ba', 0, '', '', '', 0000, 1),
(2, 'konobar1', 'konobar123', 'Niko', 'Nikic', 'BiH', 'Sarajevo', 'Titova 34', '033 / 123 456', 'konobar1@catering.ba', 0, '', '', '', 0000, 2),
(4, 'hase', 'hhh', 'Haso', 'Hasic', 'Njemacka', 'Frankfurt', 'Kritischertreffer 34', '054 567 123', 'hase@gmail.com', 0, '', '', '', 0000, 3),
(7, 'test2', 'test2', 'test2', 'test2', 'Njemacka', 'Minhen', 'NekaAdresa', '065 123 321', 'neka@hotmail.com', 0, '', '', '', 0000, 3),
(8, 'update12', '12345678', 'Proba', 'ProbaPrezime', 'BiH', 'Sarajevo', 'Marsala Tita', '121345676', 'qqqqq@gmail.com', 17, 'Visa', 'NekoIme', 'Januar', 2018, 3),
(10, 'qwerty12', '12345678', 'Proba111', 'Oriba222', 'BiH', 'Sarajevo', 'Marsala Tita', '231089123', 'qwerty@gmail.com', 16, 'AmericanExpress', 'ImeKartice', 'August', 2021, 3),
(11, 'dodo', 'dodo', 'dodajAdmin', 'byAdmin', 'bih', 'Sarajevo', 'titova', '123345', 'dodaj@gmail.com', 19, 'Visa', 'ddad', 'Januar', 2018, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD CONSTRAINT `narudzba_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
