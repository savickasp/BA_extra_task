-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2019 at 03:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ba_extra`
--

-- --------------------------------------------------------

--
-- Table structure for table `avg_wage`
--

DROP TABLE IF EXISTS `avg_wage`;
CREATE TABLE IF NOT EXISTS `avg_wage` (
  `lookupIdMonth` bigint(20) NOT NULL,
  `lookupId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `avgWage` int(11) NOT NULL,
  `avgWage2` int(11) NOT NULL,
  UNIQUE KEY `lookupIdMonth` (`lookupIdMonth`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `avg_wage`
--

INSERT INTO `avg_wage` (`lookupIdMonth`, `lookupId`, `month`, `avgWage`, `avgWage2`) VALUES
(48303201901, 48303, 201901, 0, 0),
(48490201901, 48490, 201901, 938, 0),
(48601201901, 48601, 201901, 1713, 0),
(49041201901, 49041, 201901, 2267, 0),
(49058201901, 49058, 201901, 1278, 0),
(49108201901, 49108, 201901, 1060, 0),
(49113201901, 49113, 201901, 1781, 0),
(49126201901, 49126, 201901, 1892, 0),
(49127201901, 49127, 201901, 2397, 0),
(49129201901, 49129, 201901, 1394, 0),
(49132201901, 49132, 201901, 1929, 0),
(49134201901, 49134, 201901, 1789, 0),
(49135201901, 49135, 201901, 2158, 0),
(49137201901, 49137, 201901, 1550, 0),
(49140201901, 49140, 201901, 1295, 0),
(49790201901, 49790, 201901, 2426, 0),
(50530201901, 50530, 201901, 2002, 0),
(50700201901, 50700, 201901, 1454, 0),
(51192201901, 51192, 201901, 0, 0),
(51363201901, 51363, 201901, 2287, 0),
(56355201901, 56355, 201901, 3800, 0),
(66648201901, 66648, 201901, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `lookupId` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `jarCode` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ecoActName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ecoActCode` int(11) NOT NULL,
  `municipality` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  UNIQUE KEY `lookupId` (`lookupId`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`lookupId`, `code`, `jarCode`, `name`, `ecoActName`, `ecoActCode`, `municipality`) VALUES
(48303, 42399, 0, 'LATVIJOS RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(48490, 44717, 0, 'APAÅ TALINÄ– NUNCIATÅªRA', '', 0, 'Vilniaus m. sav.'),
(48601, 45838, 0, 'GOETHE-INSTITUT', '', 0, 'Vilniaus m. sav.'),
(49041, 50764, 0, 'BRITÅ² TARYBA', '', 0, 'Vilniaus m. sav.'),
(49058, 51006, 0, 'LENKIJOS RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49108, 51164, 0, 'RUSIJOS FEDERACIJOS AMBASADOS SOCIALINIO APRÅªPINIMO SKYRIUS', '', 0, 'Vilniaus m. sav.'),
(49113, 51200, 0, 'JUNGTINIÅ² AMERIKOS VALSTIJÅ² AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49126, 51285, 0, 'Å VEDIJOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49127, 51289, 0, 'NORVEGIJOS KARALYSTÄ–S AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49129, 51292, 0, 'ITALIJOS RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49132, 51327, 0, 'VOKIETIJOS FEDERACINÄ–S RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49134, 51346, 0, 'PRANCÅªZIJOS RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49135, 51354, 0, 'DANIJOS KARALYSTÄ–S AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49137, 51360, 0, 'SUOMIJOS RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49140, 51370, 0, 'ÄŒEKIJOS RESPUBLIKOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(49790, 57432, 0, 'Å IAURÄ–S MINISTRÅ² TARYBOS BIURAS LIETUVOJE', '', 0, 'Vilniaus m. sav.'),
(50530, 66019, 0, 'JUGTINÄ–S DIDÅ½IOSIOS BRITANIJOS IR Å IAURÄ–S AIRIJOS KARALYSTÄ–S AMBASADA', '', 0, 'Vilniaus m. sav.'),
(50700, 68287, 0, 'PELESOS VIDURINÄ– MOKYKLA LIETUVIÅ²  MOKOMÄ„JA KALBA', '', 0, 'UÅ¾sienio Ä¯monÄ—'),
(51192, 76186, 0, 'KANADOS AMBASADOS SKYRIUS', '', 0, 'Vilniaus m. sav.'),
(51363, 78138, 0, 'JAPONIJOS AMBASADA', '', 0, 'Vilniaus m. sav.'),
(56355, 248187, 0, 'RUTRONIK ELEKTRONISCHE BAUELEMENTE GMBH', '', 0, 'UÅ¾sienio Ä¯monÄ—'),
(66648, 590726, 0, 'NUKEM TECHNOLOGIES GMBH', '', 0, 'UÅ¾sienio Ä¯monÄ—');

-- --------------------------------------------------------

--
-- Table structure for table `insured`
--

DROP TABLE IF EXISTS `insured`;
CREATE TABLE IF NOT EXISTS `insured` (
  `lookupIdMonth` bigint(20) NOT NULL,
  `lookupId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `numInsured` int(11) NOT NULL,
  `numInsured2` int(11) NOT NULL,
  UNIQUE KEY `lookupIdMonth` (`lookupIdMonth`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `insured`
--

INSERT INTO `insured` (`lookupIdMonth`, `lookupId`, `month`, `numInsured`, `numInsured2`) VALUES
(48303201901, 48303, 201901, 3, 0),
(48490201901, 48490, 201901, 6, 0),
(48601201901, 48601, 201901, 8, 0),
(49041201901, 49041, 201901, 5, 0),
(49058201901, 49058, 201901, 22, 0),
(49108201901, 49108, 201901, 20, 0),
(49113201901, 49113, 201901, 122, 0),
(49126201901, 49126, 201901, 8, 0),
(49127201901, 49127, 201901, 9, 0),
(49129201901, 49129, 201901, 7, 0),
(49132201901, 49132, 201901, 22, 0),
(49134201901, 49134, 201901, 14, 0),
(49135201901, 49135, 201901, 6, 0),
(49137201901, 49137, 201901, 7, 0),
(49140201901, 49140, 201901, 6, 0),
(49790201901, 49790, 201901, 7, 0),
(50530201901, 50530, 201901, 43, 0),
(50700201901, 50700, 201901, 14, 0),
(51192201901, 51192, 201901, 3, 0),
(51363201901, 51363, 201901, 12, 0),
(56355201901, 56355, 201901, 9, 0),
(66648201901, 66648, 201901, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

DROP TABLE IF EXISTS `tax`;
CREATE TABLE IF NOT EXISTS `tax` (
  `lookupIdMonth` bigint(20) NOT NULL,
  `lookupId` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  UNIQUE KEY `lookupIdMonth` (`lookupIdMonth`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`lookupIdMonth`, `lookupId`, `month`, `tax`) VALUES
(48303201901, 48303, 201901, 0),
(48490201901, 48490, 201901, 1234),
(48601201901, 48601, 201901, 3075),
(49041201901, 49041, 201901, 2101),
(49058201901, 49058, 201901, 6356),
(49108201901, 49108, 201901, 4653),
(49113201901, 49113, 201901, 49383),
(49126201901, 49126, 201901, 3452),
(49127201901, 49127, 201901, 4930),
(49129201901, 49129, 201901, 2251),
(49132201901, 49132, 201901, 9428),
(49134201901, 49134, 201901, 5710),
(49135201901, 49135, 201901, 2967),
(49137201901, 49137, 201901, 2477),
(49140201901, 49140, 201901, 1666),
(49790201901, 49790, 201901, 3951),
(50530201901, 50530, 201901, 19318),
(50700201901, 50700, 201901, 4477),
(51192201901, 51192, 201901, 0),
(51363201901, 51363, 201901, 6010),
(56355201901, 56355, 201901, 7957),
(66648201901, 66648, 201901, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
