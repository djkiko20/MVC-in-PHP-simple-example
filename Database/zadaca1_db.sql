-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2015 at 04:42 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zadaca1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakulteti`
--

CREATE TABLE IF NOT EXISTS `tbl_fakulteti` (
  `id_fakultet` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lokacija` varchar(255) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fakultet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_fakulteti`
--

INSERT INTO `tbl_fakulteti` (`id_fakultet`, `naziv`, `lokacija`) VALUES
(1, 'FINKI - Skopje', 'Ruger Boskovik - Skopje');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_korisnik` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1-professor;2-student',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id_korisnik` (`id_korisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `id_korisnik`, `username`, `password`, `role`) VALUES
(39, 3, 'john', 'john', 1),
(40, 4, 'mary', 'mary', 1),
(41, 5, 'july', 'july', 1),
(42, 37, 'elizabeth', 'elizabeth', 2),
(43, 38, 'li', 'li', 2),
(44, 39, 'edgar', 'edgar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profesori`
--

CREATE TABLE IF NOT EXISTS `tbl_profesori` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultet` int(11) NOT NULL,
  `ime` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prezime` varchar(255) CHARACTER SET utf8 NOT NULL,
  `plata` float NOT NULL,
  PRIMARY KEY (`id_profesor`),
  KEY `id_fakultet` (`id_fakultet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_profesori`
--

INSERT INTO `tbl_profesori` (`id_profesor`, `id_fakultet`, `ime`, `prezime`, `plata`) VALUES
(3, 1, 'John', 'Doe', 35000),
(4, 1, 'Mary', 'Moe', 28590),
(5, 1, 'July', 'Dooley', 17870);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studenti`
--

CREATE TABLE IF NOT EXISTS `tbl_studenti` (
  `id_student` int(11) NOT NULL AUTO_INCREMENT,
  `id_fakultet` int(11) NOT NULL,
  `ime` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prezime` varchar(2555) CHARACTER SET utf8 NOT NULL,
  `godina` int(11) NOT NULL,
  PRIMARY KEY (`id_student`),
  KEY `id_fakultet` (`id_fakultet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_studenti`
--

INSERT INTO `tbl_studenti` (`id_student`, `id_fakultet`, `ime`, `prezime`, `godina`) VALUES
(37, 1, 'Elizabeth', 'Brown', 2),
(38, 1, 'Li', 'Xiao', 4),
(39, 1, 'Edgar', 'Hoover', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_profesori`
--
ALTER TABLE `tbl_profesori`
  ADD CONSTRAINT `profesor-fakultet` FOREIGN KEY (`id_fakultet`) REFERENCES `tbl_fakulteti` (`id_fakultet`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_studenti`
--
ALTER TABLE `tbl_studenti`
  ADD CONSTRAINT `student-fakultet` FOREIGN KEY (`id_fakultet`) REFERENCES `tbl_fakulteti` (`id_fakultet`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
