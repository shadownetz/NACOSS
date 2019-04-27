-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 10:36 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nacoss_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `2016_first_first`
--

CREATE TABLE IF NOT EXISTS `2016_first_first` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(15) NOT NULL,
  `gsp101` varchar(15) NOT NULL,
  `gsp111` varchar(15) NOT NULL,
  `cos101` varchar(15) NOT NULL,
  `mth111` varchar(15) NOT NULL,
  `mth121` varchar(15) NOT NULL,
  `phy115` varchar(15) NOT NULL,
  `phy191` varchar(15) NOT NULL,
  `bio151` varchar(15) NOT NULL,
  `chm101` varchar(15) NOT NULL,
  `eng101` varchar(15) NOT NULL,
  `sta111` varchar(15) NOT NULL,
  `sta131` varchar(15) NOT NULL,
  `ansc1` varchar(50) NOT NULL,
  `ansc1_ans` text NOT NULL,
  `ansc2` varchar(50) NOT NULL,
  `ansc2_ans` varchar(50) NOT NULL,
  `elective` varchar(50) NOT NULL,
  `elective_ans` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `2016_first_first`
--

INSERT INTO `2016_first_first` (`id`, `regno`, `gsp101`, `gsp111`, `cos101`, `mth111`, `mth121`, `phy115`, `phy191`, `bio151`, `chm101`, `eng101`, `sta111`, `sta131`, `ansc1`, `ansc1_ans`, `ansc2`, `ansc2_ans`, `elective`, `elective_ans`) VALUES
(1, '2016/237434', 'A', 'A', 'A', 'A', 'B', 'B', 'B', '', '', '', '', 'B', 'phy115', 'B', 'phy191', 'B', 'sta131', 'B');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
