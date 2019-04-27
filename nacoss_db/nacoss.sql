-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 10:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nacoss`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_students`
--

CREATE TABLE IF NOT EXISTS `all_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `oemail` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `rnumber` varchar(50) NOT NULL,
  `pword` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `u_activator` varchar(50) NOT NULL,
  `u_deactivator` varchar(50) NOT NULL,
  `a_activator` varchar(50) NOT NULL,
  `a_deactivator` varchar(50) NOT NULL,
  `my_status` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `aim` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `logged` datetime NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `verified` int(11) NOT NULL,
  `unique_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `all_students`
--

INSERT INTO `all_students` (`id`, `fname`, `lname`, `oname`, `semail`, `oemail`, `uname`, `pnumber`, `rnumber`, `pword`, `level`, `status`, `u_activator`, `u_deactivator`, `a_activator`, `a_deactivator`, `my_status`, `skills`, `aim`, `gender`, `picture`, `logged`, `user_type`, `date`, `verified`, `unique_id`) VALUES
(1, 'Akubue', 'Augustus', '', 'augustus.akubue.237434@unn.edu.ng', '', 'shadownetz', '08081302064', '2016/237434', 'e10adc3949ba59abbe56e057f20f883e', '300', 1, '', '', '', '', 'offline', 'web', 'I Love programming', 'male', 'default.png', '2019-03-26 21:31:09', 'super_admin', '2019-03-23 02:37:01', 1, '86742795');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Akubue', 'aku@gmail.com', 'Happy', 'Thanks');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rnumber` varchar(15) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `display_picture` varchar(100) NOT NULL,
  `discussion_aim` text NOT NULL,
  `discussion_type` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_logs`
--

CREATE TABLE IF NOT EXISTS `discussion_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `rnumber` varchar(50) NOT NULL,
  `topic` text NOT NULL,
  `message` text NOT NULL,
  `display_picture` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `image5` varchar(50) NOT NULL,
  `image6` varchar(50) NOT NULL,
  `image7` varchar(50) NOT NULL,
  `image8` varchar(50) NOT NULL,
  `image9` varchar(50) NOT NULL,
  `image10` varchar(50) NOT NULL,
  `imageMessage1` varchar(50) NOT NULL,
  `imageMessage2` varchar(50) NOT NULL,
  `imageMessage3` varchar(50) NOT NULL,
  `imageMessage4` varchar(50) NOT NULL,
  `imageMessage5` varchar(50) NOT NULL,
  `imageMessage6` varchar(50) NOT NULL,
  `imageMessage7` varchar(50) NOT NULL,
  `imageMessage8` varchar(50) NOT NULL,
  `imageMessage9` varchar(50) NOT NULL,
  `imageMessage10` varchar(50) NOT NULL,
  `no_of_images` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `album`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `imageMessage1`, `imageMessage2`, `imageMessage3`, `imageMessage4`, `imageMessage5`, `imageMessage6`, `imageMessage7`, `imageMessage8`, `imageMessage9`, `imageMessage10`, `no_of_images`, `status`, `date`) VALUES
(1, 'SDC EDIT', 'IMG-20190314061220-81748447.jpg', 'IMG-20190318155205-11348895.jpg', 'IMG-20190318155250-66389864.jpg', 'IMG-20190318155303-54610321.jpg', 'IMG-20190318155316-76205511.jpg', 'IMG-20190318155331-87019423.jpg', 'IMG-20190318155344-86493471.jpg', 'IMG-20190318155357-92852545.jpg', '', '', 'Desert_desert', 'Kaola', 'Penguins', 'tutor', 'new era', 'sdc logo', 'desert', 'jellyfish', '', '', 10, 1, '2019-03-22 21:44:39'),
(2, 'MAIN_IMAGES', 'IMG-20190318160128-71242830.jpg', 'IMG-20190318160146-11938599.jpg', '', '', '', '', '', '', '', '', 'FLower', 'Tulips', '', '', '', '', '', '', '', '', 2, 0, '2019-03-22 21:44:39'),
(6, 'MAIN_IMAGES', 'IMG-20190314163809-60117309.jpg', 'IMG-20190314163809-09901372.jpg', '', '', '', '', '', '', '', '', 'Testing 1', 'Testing 2', '', '', '', '', '', '', '', '', 2, 0, '2019-03-19 00:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `joined_members`
--

CREATE TABLE IF NOT EXISTS `joined_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `rnumber` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `joined_status` int(11) NOT NULL,
  `last_joined_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nacoss_news`
--

CREATE TABLE IF NOT EXISTS `nacoss_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `details` text NOT NULL,
  `picture` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `private_discussions`
--

CREATE TABLE IF NOT EXISTS `private_discussions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `rnumber` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `read_messages`
--

CREATE TABLE IF NOT EXISTS `read_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `rnumber` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `no_of_read` int(11) NOT NULL,
  `last_message_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `new_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `office` varchar(100) NOT NULL,
  `cert` varchar(100) NOT NULL,
  `courses` varchar(200) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students_documents`
--

CREATE TABLE IF NOT EXISTS `students_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rnumber` varchar(50) NOT NULL,
  `document` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voted_students`
--

CREATE TABLE IF NOT EXISTS `voted_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rnumber` text NOT NULL,
  `full_name` text NOT NULL,
  `level` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voting_system`
--

CREATE TABLE IF NOT EXISTS `voting_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rnumber` text NOT NULL,
  `full_name` text NOT NULL,
  `post` text NOT NULL,
  `eligibility` int(11) NOT NULL,
  `ineligibility` int(11) NOT NULL,
  `registrar` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
