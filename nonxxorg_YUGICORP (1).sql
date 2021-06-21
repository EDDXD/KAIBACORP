-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2021 at 03:09 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nonxxorg_YUGICORP`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carta`
--

CREATE TABLE `Carta` (
  `IDCarta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Carta`
--

INSERT INTO `Carta` (`IDCarta`, `Nombre`, `Imagen`, `Descripcion`) VALUES
('38033121', 'Dark Magician Girl', 'dark magician girl.jpg', 'Gana 300 ATK por cada \"Mago Oscuro\" o \"Mago del Caos Negro\" en el Cementerio.');

-- --------------------------------------------------------

--
-- Table structure for table `duelista`
--

CREATE TABLE `duelista` (
  `IDDuelista` int(11) NOT NULL,
  `Username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duelista`
--

INSERT INTO `duelista` (`IDDuelista`, `Username`, `Email`, `Password`) VALUES
(1, 'eddxd', 'edd-gm@live.com', '123456'),
(2, 'Mepelalavrgelluca', 'melapelaelluca@chinguesum', 'Ellucamepelalavrg'),
(3, 'Madrigalselacome', 'melapelaelluca@chinguesum', 'Melapelaelluca');

-- --------------------------------------------------------

--
-- Table structure for table `duelistarepositorio`
--

CREATE TABLE `duelistarepositorio` (
  `IDDuelista` int(11) NOT NULL,
  `IDRepositorio` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magica/trampa`
--

CREATE TABLE `magica/trampa` (
  `IDCarta` int(11) NOT NULL,
  `CategorÌa` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `IconoDeJuego` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monstruo`
--

CREATE TABLE `monstruo` (
  `IDCarta` int(11) NOT NULL,
  `Atributo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Nivel` int(11) NOT NULL,
  `Tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ATK` int(11) NOT NULL,
  `DEF` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Personal`
--

CREATE TABLE `Personal` (
  `Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Personal`
--

INSERT INTO `Personal` (`Username`, `Password`) VALUES
('luis', '123'),
('luis@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `repositorio`
--

CREATE TABLE `repositorio` (
  `IDRepositorio` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repositoriocarta`
--

CREATE TABLE `repositoriocarta` (
  `IDRepositorio` int(11) NOT NULL,
  `IDCarta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Carta`
--
ALTER TABLE `Carta`
  ADD PRIMARY KEY (`IDCarta`);

--
-- Indexes for table `duelista`
--
ALTER TABLE `duelista`
  ADD PRIMARY KEY (`IDDuelista`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duelista`
--
ALTER TABLE `duelista`
  MODIFY `IDDuelista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
