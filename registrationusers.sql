-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 06:28 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrationusers`
--

CREATE TABLE `registrationusers` (
  `id` int(11) NOT NULL,
  `Ime` varchar(255) NOT NULL,
  `Prezime` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Sifra1` varchar(20) NOT NULL,
  `Sifra2` varchar(20) NOT NULL,
  `Vicevi` text,
  `1 bod` int(11) DEFAULT NULL,
  `2 boda` int(11) DEFAULT NULL,
  `3 boda` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationusers`
--

INSERT INTO `registrationusers` (`id`, `Ime`, `Prezime`, `Email`, `Sifra1`, `Sifra2`, `Vicevi`, `1 bod`, `2 boda`, `3 boda`) VALUES
(23, 'Danijel', 'Ruzic', 'danijel569@gmail.com', 'danijel123', 'danijel123', 'doÅ¡le dvije tjestenine u matiÄara de se vjenÄaju.\r\nkaÅ¾e matiÄar da nije u moguÄ‡nosti ispuniti zahtjev, jer su obe Å¾enskog roda.\r\njedna tjestenina se pobuni i kaÅ¾e:\r\n" MOÅ½ETE JA SAM TJESTENINA SA JAJIMA!" ', NULL, NULL, NULL),
(21, 'Adisa', 'Miovic', 'adisa111@gmail.com', 'adisa123', 'adisa123', 'Podigne uciteljica malog cigu i pita ga:\r\n-Ti se kupas.Koje je to vreme?\r\n-Nepostojece! ', NULL, NULL, NULL),
(22, 'Mona', 'Monic', 'monika123@gmail.com', 'monika123', 'monika123', 'Ode zena kod lekara i kaze:\r\n- Doktore, doktore dete mi ima zatvor!\r\n- Dobro, samo mu dajte kad bude kakio sliku nekog prevaranta i odma ce proci!\r\nVrati se zena posle par dana i rece:\r\n- Doktore, doktore dete mi sada mi ima proliv!\r\n- Cekajte, da li ste uradili ono sto sam vam rekao?\r\n- Pa znate doktotere ja sam imala samo sliku Vucica, pa sam mu dala tu.\r\n- Jao gospodjo, pa vi ste mu dali dozu za odrasle! ', NULL, NULL, NULL),
(24, 'Jelena', 'Jelenic', 'jecajeca@gmail.com', 'jeca123', 'jeca123', 'ÐšaÅ¾e sekretarica Tomislavu NikoliÄ‡u:\r\n-Gospodine NikoliÄ‡u, stigao Vam je meil.\r\n-Neka uÄ‘e! ', NULL, NULL, NULL),
(25, 'Pero', 'Peric', 'perica@gmail.com', 'perica123', 'perica123', 'Razgovaraju dvije plavuse i tako jedna rece:\r\n- Ma razumijem ti ja kako rode nose decu.. Ali nikako mi nije jasno kako pauk odnese auto! ', NULL, NULL, NULL),
(26, 'Medo', 'Brundo', 'medo@gmail.com', 'medo123', 'medo123', 'Presretne Äovjek gospodina u odijelu, izvadi piÅ¡tolj i zaprijeti:\r\n- Daj mi SVOJE pare!\r\n- Ali, ... Ja sam ... PolitiÄar.\r\n- Dobro onda, daj mi MOJE pare! ', NULL, NULL, NULL),
(28, 'Jelena', 'Vidic', 'jelena123@gmail.com', 'jelena123', 'jelena123', 'Pijanac Ide glavnom ulicom, zaustavi se pocne piÅ¡ati. Policajac ga spazi i uzvikne: -Sram vas bilo! Kazna 500 dinara. Pijanac trazi po svim dzepovima i konacno nadje 1000 dinara. Sada policajac trazi 500 din za vratiti, al ih ne moze naci. Na to ce pijanac: -Pisaj i ti, ja castim ! ', NULL, NULL, NULL),
(35, 'Milutin', 'Pantic', 'milojko123@gmail.com', 'milojko', 'milojko', 'Zaustavlja pandur pijanog Äovjeka i pita:\r\nKud Ä‡eÅ¡ ti ovako kasno pijan?\r\nÄovjek: na predavanje!!\r\npandur: ko sada ovako kasno drÅ¾i predavanje?\r\nÄovjek: moja Å¾ena! ', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrationusers`
--
ALTER TABLE `registrationusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrationusers`
--
ALTER TABLE `registrationusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
