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
-- Table structure for table `tblItems`
--

CREATE TABLE IF NOT EXISTS `tblItems` (
  `fldItemName` varchar(35) NOT NULL,
  `fldHealth` int(11) NOT NULL DEFAULT '0',
  `fldMagicResist` int(11) NOT NULL DEFAULT '0',
  `fldHealthRegen` int(11) NOT NULL DEFAULT '0',
  `fldArmor` int(11) NOT NULL DEFAULT '0',
  `fldAttackDamage` int(11) NOT NULL DEFAULT '0',
  `fldCriticalStrike` int(11) NOT NULL DEFAULT '0',
  `fldAttackSpeed` int(11) NOT NULL DEFAULT '0',
  `fldLifeSteal` int(11) NOT NULL DEFAULT '0',
  `fldAbilityPower` int(11) NOT NULL DEFAULT '0',
  `fldCDR` int(11) NOT NULL DEFAULT '0',
  `fldMana` int(11) NOT NULL DEFAULT '0',
  `fldManaRegen` int(11) NOT NULL DEFAULT '0',
  `fldMovement` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblItems`
--

INSERT INTO `tblItems` (`fldItemName`, `fldHealth`, `fldMagicResist`, `fldHealthRegen`, `fldArmor`, `fldAttackDamage`, `fldCriticalStrike`, `fldAttackSpeed`, `fldLifeSteal`, `fldAbilityPower`, `fldCDR`, `fldMana`, `fldManaRegen`, `fldMovement`) VALUES
('Amplifying Tome', 0, 0, 0, 0, 0, 0, 0, 0, 20, 0, 0, 0, 0),
('B.F. Sword', 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0),
('Chain Vest', 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Cloth Armor', 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Dagger', 0, 0, 0, 0, 0, 0, 12, 0, 0, 0, 0, 0, 0),
('Doran''s Blade', 80, 0, 0, 0, 8, 0, 0, 3, 0, 0, 0, 0, 0),
('Doran''s Ring', 60, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 50, 0),
('Doran''s Shield', 80, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('None', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblItems`
--
ALTER TABLE `tblItems`
 ADD UNIQUE KEY `fldItemName` (`fldItemName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
