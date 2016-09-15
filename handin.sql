-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2016 at 08:03 PM
-- Server version: 5.5.50-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostmywe_handin`
--

-- --------------------------------------------------------

--
-- Table structure for table `Assignment_tbl`
--

CREATE TABLE IF NOT EXISTS `Assignment_tbl` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `Assignment_id` varchar(50) NOT NULL,
  `Module_id` varchar(50) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Description` text NOT NULL,
  `Due_date` datetime NOT NULL,
  `Faculty_name` varchar(100) NOT NULL,
  `Faculty_Email` varchar(100) NOT NULL,
  `Max_words` int(5) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `Assignment_tbl`
--

INSERT INTO `Assignment_tbl` (`sno`, `Assignment_id`, `Module_id`, `Title`, `Description`, `Due_date`, `Faculty_name`, `Faculty_Email`, `Max_words`) VALUES
(1, 'MB101_1', 'MB101', 'MB101 Test Assignment', 'This s an introductory test Assignment designed to test functionality', '2016-10-19 09:00:00', 'Mandarin Chinko', 'mandarin.chinko@leeds.ac.uk', 2000),
(2, 'MB102_1', 'MB102', 'MB102 Test', 'Yet another test Assignment designed to test functionality', '2016-09-22 10:00:00', 'Peter Pan', 'peter.pan@leeds.ac.uk', 1000),
(3, 'MB201_1', 'MB201', 'MB201 Test', 'this is pushing the idea of Handin further', '2016-09-01 10:00:00', 'OLIVER TWIST', 'Oliver.twist@leeds.ac.uk', 1000),
(4, 'MB202_1', 'MB202', 'MB202 Test', 'this is pushing the idea of Handin even further', '2016-11-09 10:00:00', 'Snow White', 'snow.white@leeds.ac.uk', 1000),
(5, 'MB301_1', 'MB301', 'MB301 Assignment', 'Handin is a great app to keep track of all your coursework', '2016-12-09 23:59:59', 'Roger Stevens', 'roger.stevens@leeds.ac.uk', 2000),
(6, 'MB103_1', 'MB103', 'Introductory Assignment', 'Research the basic concepts of this module and write about its relevance to your degree', '2016-10-03 23:59:59', 'Raj Faraj', 'raj.faraj@leeds.ac.uk', 500),
(7, 'MB203_1', 'MB203', 'Introductory Coursework', 'Research the basic concepts of this module and write about its relevance to your degree', '2016-10-27 10:00:00', 'Sheldon cooper', 'sheldoncooper@leeds.ac.uk', 1000),
(8, 'MB203_2', 'MB203', 'Nervous System Aassignment', 'Carry out a study of the nervous system and outline all the nerves in the human body', '2016-11-24 17:00:00', 'Leonard Stewart', 'leonard.Stewart@leeds.ac.uk', 2000),
(9, 'MB204_1', 'MB204', 'introductory Coursework', 'Research the basic concepts of this module and write about its relevance to your degree', '2016-10-18 10:00:00', 'Amy Cooper', 'amy.cooper@leeds.ac.uk', 1000),
(10, 'MB205_1', 'MB205', 'EMS1', 'what are the tenets of Essential Medical Science', '2016-12-02 10:00:00', 'sheldon cooper', 'sheldon.cooper@leeds.ac.uk', 1000),
(11, 'MB503_1', 'MB503', 'Special Senses 1', 'Write an elaborate report on the special senses of the human body', '2016-11-30 10:00:00', 'Wilson Armstrong', 'wilson.armstrong@leeds.ac.uk', 2000),
(12, 'MB302_2', 'MB302', 'Medical safety', 'Elaborate on clinical practices which would facilitate medical safety', '2016-10-24 12:00:00', 'Pogba Farah', 'pogba.farah@leeds.ac.uk', 2000),
(14, 'MB401_1', 'MB401', 'Introductory coursework', 'Do a research on the importance of this module to your Degree', '2016-11-01 00:00:00', 'Oliver Twist', 'oliver.twist@leeds.ac.uk', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `Level_tbl`
--

CREATE TABLE IF NOT EXISTS `Level_tbl` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `Level_id` int(3) NOT NULL,
  `Level_name` varchar(25) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Level_tbl`
--

INSERT INTO `Level_tbl` (`sno`, `Level_id`, `Level_name`) VALUES
(1, 1, 'Year 1'),
(2, 2, 'Year 2'),
(3, 3, 'Year 3'),
(4, 4, 'Year 4'),
(5, 5, 'Year 5');

-- --------------------------------------------------------

--
-- Table structure for table `Modules_tbl`
--

CREATE TABLE IF NOT EXISTS `Modules_tbl` (
  `Module_id` varchar(25) NOT NULL,
  `Module_name` varchar(200) NOT NULL,
  `Credits` int(3) DEFAULT NULL,
  `Level_id` varchar(3) NOT NULL,
  PRIMARY KEY (`Module_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Modules_tbl`
--

INSERT INTO `Modules_tbl` (`Module_id`, `Module_name`, `Credits`, `Level_id`) VALUES
('MB101', 'Combined introduction to Medicine: IDEALS, RESS and C to C 	', 10, '1'),
('MB102', 'Introduction to Medical Science (IMS)	Body Systems\r\n', 10, '1'),
('MB201', 'Innovation Development Enterprise Leadership & Safety \r\n(IDEALS)', 10, '2'),
('MB202', 'Research, Evaluation & Special Studies (RESS)', 10, '2'),
('MB301', 'Integrated Medicine', 10, '3'),
('MB302', 'Innovation, Development, Enterprise, Leadership and Safety 3', 10, '3'),
('MB401', 'Psychiatry', 10, '4'),
('MB402', 'Cancer and Continuing Care', 10, '4'),
('MB501', 'Extended Student Research and Evaluation Project', 15, '5'),
('MB103', 'Nutrition and Energy', 10, '1'),
('MB203', 'Core Body Systems', 10, '2'),
('MB303', 'Campus to Clinic 3', 10, '3'),
('MB403', 'Paediatrics and Child Health', 10, '4'),
('MB404', 'Gynaecology, Obstetrics and Sexual Health', 10, '4'),
('MB405', 'Acute and Critical Care (ACC)', 10, '4'),
('MB406', 'Paediatrics and Child Health', 10, '4'),
('MB204', 'Control and Movement \r\n(C & M)', 10, '2'),
('MB205', 'Essential Medical Science', 10, '2'),
('MB206', 'Clinical Pathology', 10, '2'),
('MB304', 'Primary Care', 10, '3'),
('MB502', 'Professional Practice ', 10, '5'),
('MB503', 'Special Senses', 10, '5');

-- --------------------------------------------------------

--
-- Table structure for table `User_tbl`
--

CREATE TABLE IF NOT EXISTS `User_tbl` (
  `User_id` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
