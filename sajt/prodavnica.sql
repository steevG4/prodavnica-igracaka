-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 10:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `igracka`
--

CREATE TABLE `igracka` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `zemlja_Porekla` varchar(255) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `opis` text DEFAULT NULL,
  `na_Stanju` enum('da','ne') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `igracka`
--

INSERT INTO `igracka` (`id`, `naziv`, `zemlja_Porekla`, `cena`, `opis`, `na_Stanju`) VALUES
(1, 'Vudi', 'KINA', 2000.00, 'Igracka napravljena na osnovu filmskog hita TOY STORY', 'da'),
(2, 'Buz', 'KINA', 2000.00, 'Igracka napravljena na osnovu filmskog hita TOY STORY', 'da'),
(3, 'Dinosaurus', 'KINA', 2000.00, 'Igracka napravljena na osnovu filmskog hita TOY STORY', 'da'),
(4, 'Auto', 'ITALIJA', 27000.00, 'Replka bmw dzzipa', 'ne'),
(5, 'Medvedic', 'SRBIJA', 1500.00, 'mali plisanji meda', 'da'),
(6, 'kuhinja', 'SAD', 17000.00, 'drvena imitacija kuhinje 1:5', 'ne'),
(7, 'Snesko', 'KINA', 300.00, 'Figurica Sneska', 'ne'),
(11, 'Barby', 'KINA', 1999.00, 'Lutkica za devojcice', 'da'),
(12, 'Barbi +auto', 'KINA', 4999.00, 'Barbi lutka za devojcice sa auticem', 'da'),
(22, 'Barbi+auto+kuca', 'KINA', 15999.00, 'replika filma', 'ne'),
(23, 'Barbi i Ken', 'KINA', 7999.00, 'dve lutke za devojcicu', 'da'),
(50, 'luljaska', 'Indija', 2000.00, 'ljuljaska za decu', 'ne'),
(51, 'Tobogan', 'Srbija', 20900.00, 'Tobogan za decu', 'ne');

-- --------------------------------------------------------

--
-- Table structure for table `kupac`
--

CREATE TABLE `kupac` (
  `ime` varchar(255) NOT NULL,
  `sifra` varchar(255) NOT NULL,
  `jmbg` int(10) UNSIGNED NOT NULL,
  `pol` varchar(255) NOT NULL,
  `letak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kupac`
--

INSERT INTO `kupac` (`ime`, `sifra`, `jmbg`, `pol`, `letak`) VALUES
('Stevan', 'fa', 0, '150796', 'zelim da dobija letak'),
('Stevan', '45646', 15079, 'musko', 'ne zeli da dobija letak'),
('Stevan', 'tfdasfass', 150791, 'musko', 'ne zeli da dobija letak'),
('Stevan', 'dasfdas', 150796, 'musko', 'zelim da dobija letak'),
('Milica', 'sdafas', 154467, 'zensko', 'ne zeli da dobija letak'),
('Petar', 'dassa', 211193, 'musko', 'ne zeli da dobija letak'),
('Stevan', 'tfdasfass', 1507912, 'musko', 'ne zeli da dobija letak'),
('Milica', 'sdafas', 1544671, 'zensko', 'ne zeli da dobija letak'),
('Stevan', 'tfdasfass', 15079123, 'musko', 'ne zeli da dobija letak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igracka`
--
ALTER TABLE `igracka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kupac`
--
ALTER TABLE `kupac`
  ADD PRIMARY KEY (`jmbg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igracka`
--
ALTER TABLE `igracka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
