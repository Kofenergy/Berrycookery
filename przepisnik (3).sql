-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 11:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `przepisnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `przepisy`
--

CREATE TABLE `przepisy` (
  `id` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `tytul` varchar(50) NOT NULL,
  `tag_podst` int(11) DEFAULT NULL,
  `tag_uz1` int(11) DEFAULT NULL,
  `tag_uz2` int(11) DEFAULT NULL,
  `tag_uz3` int(11) DEFAULT NULL,
  `t_gotowania` varchar(30) DEFAULT NULL,
  `t_przygotowania` varchar(30) DEFAULT NULL,
  `l_porcji` int(11) DEFAULT NULL,
  `opis_krotki` varchar(1000) NOT NULL,
  `opis_pelny` text NOT NULL,
  `kalorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `przepisy`
--

INSERT INTO `przepisy` (`id`, `id_uzytkownika`, `tytul`, `tag_podst`, `tag_uz1`, `tag_uz2`, `tag_uz3`, `t_gotowania`, `t_przygotowania`, `l_porcji`, `opis_krotki`, `opis_pelny`, `kalorie`) VALUES
(1, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(9, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(10, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(11, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(12, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(13, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(14, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(15, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(16, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(17, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(18, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(19, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(20, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(21, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(22, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(23, 5, 'Fit ogórek', 1, NULL, NULL, NULL, '10', '10', 1, 'x', 'y', NULL),
(27, 5, '$nazwa', 1, NULL, NULL, NULL, '$czas_got', '$czas_przyg', 0, '$opis', '$opis_przyg', 0),
(33, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(34, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(35, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(36, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(37, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(38, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(39, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(40, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1),
(41, 5, 'burak z solą', 1, NULL, NULL, NULL, '', '1', 1, 'burak z solą no', 'posól buraka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `przyprawy`
--

CREATE TABLE `przyprawy` (
  `id` int(11) NOT NULL,
  `id_przepisu` int(11) NOT NULL,
  `nazwa_przyprawy` varchar(50) NOT NULL,
  `ilosc_na_przygotowanie` float NOT NULL,
  `jednostka` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skladniki`
--

CREATE TABLE `skladniki` (
  `id` int(11) NOT NULL,
  `id_przepisu` int(11) NOT NULL,
  `nazwa_skladnika` varchar(50) NOT NULL,
  `ilosc_na_przygotowanie` float NOT NULL,
  `jednostka` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `skladniki`
--

INSERT INTO `skladniki` (`id`, `id_przepisu`, `nazwa_skladnika`, `ilosc_na_przygotowanie`, `jednostka`) VALUES
(1, 1, 'ogórek', 1, 'sztuka'),
(2, 1, 'sól', 1, 'g'),
(3, 1, 'burak', 1, 'sztuka'),
(4, 1, 'sól', 2, 'g'),
(5, 23, 'burak', 1, 'sztuka'),
(6, 23, 'sól', 2, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `skladniki_odzywcze`
--

CREATE TABLE `skladniki_odzywcze` (
  `id_przepisu` int(11) NOT NULL,
  `bialko` int(11) DEFAULT NULL,
  `weglowodany` int(11) DEFAULT NULL,
  `tluszcze` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `skladniki_odzywcze`
--

INSERT INTO `skladniki_odzywcze` (`id_przepisu`, `bialko`, `weglowodany`, `tluszcze`) VALUES
(1, 0, 1, 2),
(1, 1, 1, 1),
(23, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tagi_podstawowe`
--

CREATE TABLE `tagi_podstawowe` (
  `id` int(11) NOT NULL,
  `nazwa_tagu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `tagi_podstawowe`
--

INSERT INTO `tagi_podstawowe` (`id`, `nazwa_tagu`) VALUES
(1, 'sniadanie'),
(2, 'lunch'),
(3, 'obiad'),
(4, 'kolacja'),
(5, 'deser'),
(6, 'przekaska'),
(7, 'napoj');

-- --------------------------------------------------------

--
-- Table structure for table `tagi_uzytkownika`
--

CREATE TABLE `tagi_uzytkownika` (
  `id` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `nazwa_tagu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwa_uzytkownika` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `haslo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwa_uzytkownika`, `email`, `haslo`) VALUES
(5, 'Martyna', 'Ślizankiewicz', 'm.a.s@interia.pl', 'uh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `przepisy`
--
ALTER TABLE `przepisy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`),
  ADD KEY `tag_podst` (`tag_podst`),
  ADD KEY `tag_uz1` (`tag_uz1`),
  ADD KEY `tag_uz2` (`tag_uz2`),
  ADD KEY `tag_uz3` (`tag_uz3`);

--
-- Indexes for table `przyprawy`
--
ALTER TABLE `przyprawy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_przepisu` (`id_przepisu`);

--
-- Indexes for table `skladniki`
--
ALTER TABLE `skladniki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_przepisu` (`id_przepisu`);

--
-- Indexes for table `skladniki_odzywcze`
--
ALTER TABLE `skladniki_odzywcze`
  ADD KEY `id_przepisu` (`id_przepisu`);

--
-- Indexes for table `tagi_podstawowe`
--
ALTER TABLE `tagi_podstawowe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagi_uzytkownika`
--
ALTER TABLE `tagi_uzytkownika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `przepisy`
--
ALTER TABLE `przepisy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `przyprawy`
--
ALTER TABLE `przyprawy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skladniki`
--
ALTER TABLE `skladniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tagi_podstawowe`
--
ALTER TABLE `tagi_podstawowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tagi_uzytkownika`
--
ALTER TABLE `tagi_uzytkownika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `przepisy`
--
ALTER TABLE `przepisy`
  ADD CONSTRAINT `przepisy_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id`),
  ADD CONSTRAINT `przepisy_ibfk_2` FOREIGN KEY (`tag_podst`) REFERENCES `tagi_podstawowe` (`id`),
  ADD CONSTRAINT `przepisy_ibfk_3` FOREIGN KEY (`tag_uz1`) REFERENCES `tagi_uzytkownika` (`id`),
  ADD CONSTRAINT `przepisy_ibfk_4` FOREIGN KEY (`tag_uz2`) REFERENCES `tagi_uzytkownika` (`id`),
  ADD CONSTRAINT `przepisy_ibfk_5` FOREIGN KEY (`tag_uz3`) REFERENCES `tagi_uzytkownika` (`id`);

--
-- Constraints for table `przyprawy`
--
ALTER TABLE `przyprawy`
  ADD CONSTRAINT `przyprawy_ibfk_1` FOREIGN KEY (`id_przepisu`) REFERENCES `przepisy` (`id`);

--
-- Constraints for table `skladniki`
--
ALTER TABLE `skladniki`
  ADD CONSTRAINT `skladniki_ibfk_1` FOREIGN KEY (`id_przepisu`) REFERENCES `przepisy` (`id`);

--
-- Constraints for table `skladniki_odzywcze`
--
ALTER TABLE `skladniki_odzywcze`
  ADD CONSTRAINT `skladniki_odzywcze_ibfk_1` FOREIGN KEY (`id_przepisu`) REFERENCES `przepisy` (`id`);

--
-- Constraints for table `tagi_uzytkownika`
--
ALTER TABLE `tagi_uzytkownika`
  ADD CONSTRAINT `tagi_uzytkownika_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
