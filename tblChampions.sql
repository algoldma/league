-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Nov 20, 2015 at 01:35 PM
-- Server version: 5.5.45-37.4-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DDREXLER_LEAGUE`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblChampions`
--

CREATE TABLE IF NOT EXISTS `tblChampions` (
  `fldChampionName` varchar(20) NOT NULL,
  `fldHP` float NOT NULL,
  `fldHPPer` float NOT NULL,
  `fldHP5` float NOT NULL,
  `fldHP5Per` float NOT NULL,
  `fldMP` float NOT NULL,
  `fldMPPer` float NOT NULL,
  `fldMP5` float NOT NULL,
  `fldMP5Per` float NOT NULL,
  `fldAD` float NOT NULL,
  `fldADPer` float NOT NULL,
  `fldAS` float NOT NULL,
  `fldASPer` float NOT NULL,
  `fldAR` float NOT NULL,
  `fldARPer` float NOT NULL,
  `fldMR` float NOT NULL,
  `fldMRPer` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblChampions`
--

INSERT INTO `tblChampions` (`fldChampionName`, `fldHP`, `fldHPPer`, `fldHP5`, `fldHP5Per`, `fldMP`, `fldMPPer`, `fldMP5`, `fldMP5Per`, `fldAD`, `fldADPer`, `fldAS`, `fldASPer`, `fldAR`, `fldARPer`, `fldMR`, `fldMRPer`) VALUES
('Aatrox', 537.8, 85, 6.59, 0.5, 30, 45, 0, 0, 60.376, 3.2, 0.651, 3, 24.384, 3.8, 32.1, 1.25),
('Ahri', 514.4, 80, 6.505, 0.6, 334, 50, 6, 0.8, 53.04, 3, 0.668, 2, 20.88, 3.5, 30, 0),
('Akali', 587.8, 85, 8.34, 0.65, 200, 0, 50, 0, 58.376, 3.2, 0.694, 3.1, 26.38, 3.5, 32.1, 1.25),
('Alistar', 613.36, 106, 8.675, 0.85, 278.84, 38, 6, 0.8, 61.1116, 3.62, 0.625, 2.125, 24.38, 3.5, 32.1, 1.25),
('Amumu', 613.12, 84, 8.875, 0.85, 287.2, 40, 7.38, 0.525, 53.384, 3.8, 0.638, 2.18, 23.544, 3.8, 32.1, 1.25),
('Anivia', 467.6, 70, 5.57, 0.55, 346.04, 53, 6, 0.8, 51.376, 3.2, 0.625, 1.68, 21.22, 4, 30, 0),
('Annie', 511.68, 76, 5.42, 0.55, 334, 50, 6, 0.8, 50.41, 2.625, 0.579, 1.36, 19.22, 4, 30, 0),
('Ashe', 527.72, 79, 5.42, 0.55, 231.8, 35, 6.97, 0.4, 51.088, 2.85, 0.658, 3.33, 21.212, 3.4, 30, 0),
('Azir', 524.4, 80, 6.92, 0.55, 350.56, 42, 6, 0.8, 52, 2.8, 0.625, 1.5, 19.04, 3, 30, 0),
('Bard', 535, 93, 5.4, 0.55, 350, 50, 6, 0.45, 52, 3, 0.625, 1, 25, 4, 30, 0),
('Blitzcrank', 582.6, 95, 8.51, 0.75, 267.2, 40, 6, 0.8, 61.54, 3.5, 0.625, 1.13, 24.38, 4, 32.1, 1.25),
('Brand', 507.68, 76, 5.42, 0.55, 325.6, 45, 8.005, 0.6, 57.04, 3, 0.625, 1.36, 21.88, 3.5, 30, 0),
('Braum', 576.16, 87, 8.18, 1, 310.6, 45, 6, 0.8, 55.376, 3.2, 0.644, 3.5, 26.72, 4.5, 32.1, 1.25),
('Caitlyn', 524.4, 80, 5.67, 0.55, 313.8, 35, 7.42, 0.55, 50.04, 3, 0.625, 4, 22.88, 3.5, 30, 0),
('Cassiopeia', 506, 75, 5.69, 0.5, 370.8, 60, 6, 0.8, 50.376, 3.2, 0.647, 1.68, 22.22, 4, 30, 0),
('Cho''Gath', 574.4, 80, 8.925, 0.85, 272.2, 40, 7.205, 0.45, 61.156, 4.2, 0.625, 1.44, 28.88, 3.5, 32.1, 1.25),
('Corki', 512.76, 82, 5.42, 0.55, 305.16, 37, 7.42, 0.55, 51.24, 3, 0.625, 2.3, 23.38, 3.5, 30, 0),
('Darius', 582.24, 100, 9.845, 0.95, 263, 37.5, 6.585, 0.35, 55.88, 5, 0.625, 1, 29.88, 4, 32.1, 1.25),
('Diana', 589.2, 90, 7.425, 0.85, 297.2, 40, 6, 0.8, 53.04, 3, 0.625, 2.25, 26.048, 3.6, 32.1, 1.25),
('Dr. Mundo', 582.52, 89, 7.76, 0.75, 0, 0, 0, 0, 61.27, 3, 0.625, 2.8, 26.88, 3.5, 32.1, 1.25),
('Draven', 557.76, 82, 6.175, 0.7, 310.56, 42, 8.04, 0.65, 50.38, 3.5, 0.679, 2.7, 25.544, 3.3, 30, 0),
('Ekko', 580, 80, 9, 0.9, 280, 50, 6, 0.6, 59, 3, 0.625, 3.3, 27, 3, 32.1, 1.25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblChampions`
--
ALTER TABLE `tblChampions`
 ADD UNIQUE KEY `fldChampionName` (`fldChampionName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
