-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 09:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeroom`
--

CREATE TABLE `timeroom` (
  `Room01` text COLLATE utf8_unicode_ci NOT NULL,
  `Room02` text COLLATE utf8_unicode_ci NOT NULL,
  `Room03` text COLLATE utf8_unicode_ci NOT NULL,
  `Room04` text COLLATE utf8_unicode_ci NOT NULL,
  `Room05` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timeroom`
--

INSERT INTO `timeroom` (`Room01`, `Room02`, `Room03`, `Room04`, `Room05`) VALUES
('7.00', '7.00', '7.00', '7.00', '7.00'),
('7.30', '7.30', '7.30', '7.30', '7.30'),
('8.00', '8.00', '8.00', '8.00', '8.00'),
('8.30', '8.30', '8.30', '8.30', '8.30'),
('9.00', '9.00', '9.00', '9.00', '9.00'),
('9.30', '9.30', '9.30', '9.30', '9.30'),
('10.00', '10.00', '10.00', '10.00', '10.00'),
('10.30', '10.30', '10.30', '10.30', '10.30'),
('11.00', '11.00', '11.00', '11.00', '11.00'),
('11.30', '11.30', '11.30', '11.30', '11.30'),
('12.00', '12.00', '12.00', '12.00', '12.00'),
('12.30', '12.30', '12.30', '12.30', '12.30'),
('13.00', '13.00', '13.00', '13.00', '13.00'),
('13.30', '13.30', '13.30', '13.30', '13.30'),
('14.00', '14.00', '14.00', '14.00', '14.00'),
('14.30', '14.30', '14.30', '14.30', '14.30'),
('15.00', '15.00', '15.00', '15.00', '15.00'),
('15.30', '15.30', '15.30', '15.30', '15.30'),
('16.00', '16.00', '16.00', '16.00', '16.00'),
('16.30', '16.30', '16.30', '16.30', '16.30'),
('17.00', '17.00', '17.00', '17.00', '17.00'),
('17.30', '17.30', '17.30', '17.30', '17.30'),
('18.00', '18.00', '18.00', '18.00', '18.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
