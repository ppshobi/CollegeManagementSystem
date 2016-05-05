-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 12:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wmo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `creation` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `details`, `creation`) VALUES
(2, 'Internal Examination', 'rgewuqr wegriu gwdf', '0000-00-00'),
(3, 'dfhgjks', 'fgdgsdg', '2015-12-12'),
(4, 'Extra Notif', 'Extra NotifExtra NotifExtra NotifExtra Notif', '2015-12-12'),
(5, 'exam result', 'linksdll;asdf', '2015-12-12'),
(6, '	\r\nExtra NotifExtra', '	\r\nExtra NotifExtra	\r\nExtra NotifExtra	\r\nExtra NotifExtra', '2015-12-12'),
(10, 'New Notif', 'asfkjsdf asgdfg asjdgfj asdjfgas jdfgjasg fjagsdf gasdkfasgd fkjasgd fjasdf sdf sad', '2015-12-12'),
(11, 'External Xam', 'starts on 2015', '2015-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `year` int(11) NOT NULL,
  `phone` int(12) NOT NULL,
  `parent` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `adm_no` int(10) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `dob`, `gender`, `year`, `phone`, `parent`, `email`, `adm_no`, `remarks`) VALUES
(1, 'Gadhi', 'Uppal', '2015-12-12', 'female', 2, 2147483647, 'ghfghfgh', 'ertrtrt@ghg.ffg', 34432, 'fhfghfgh'),
(2, 'Kakar ', 'Bobal', '2015-12-12', 'male', 2, 5454565, 'ghfghfgh', 'ertrtrt@ghg.ffg', 34432, 'fhfghfgh'),
(3, 'Kamal', ' Iyer', '2015-12-12', 'male', 1, 79879879, 'ghfghfgh', 'ertrtrt@ghg.ffg', 34432, 'fhgjghjghjghjg6575676'),
(4, 'Achir ', 'Sarma', '2015-12-12', 'female', 3, 2147483647, 'ghfghfgh', 'ertrtrt@ghg.ffg', 34432, 'fhfghfgh'),
(5, 'hsadgfjhag', 'dgsaf', '2015-12-17', 'male', 3, 765817679, 'fgdfgdfgdfg', 'mndfh@dcgf.com', 89798798, 'dsdfsdfghgjhh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(4) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
