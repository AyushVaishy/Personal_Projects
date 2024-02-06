-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2016 at 02:21 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `t_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `emp_code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mail_id` varchar(200) NOT NULL,
  `desig` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `emp_code`, `name`, `mail_id`, `desig`, `username`, `pass`, `ts`) VALUES
(1, '1', 'admin', 'hss.agra@gmail.com', 'admin', 'admin', 'admin', '2015-04-22 13:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `client` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `exp_time` varchar(200) NOT NULL,
  `tot_time` varchar(200) NOT NULL,
  `status` int(100) NOT NULL,
  `compl_per` int(11) NOT NULL,
  `t_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `code`, `name`, `client`, `type`, `exp_time`, `tot_time`, `status`, `compl_per`, `t_s`) VALUES
(1, 'a', 's', 'd', 'a', 's', '10', 1, 2, '2015-04-20 05:52:57'),
(2, 'hsa', 'ea', 'da', 'aa', 'sa', '10', 1, 1, '2015-04-21 05:52:59'),
(3, '365', 'wordpress site', 'hemendra sharma', 'website wordpress', '25', '20', 1, 100, '2015-04-20 08:20:52'),
(4, '256', 'shivani mailing system', 'hemendra sharma', 'web-site', '20', '10', 1, 70, '2015-07-10 05:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `project_assign`
--

CREATE TABLE IF NOT EXISTS `project_assign` (
`id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_assign`
--

INSERT INTO `project_assign` (`id`, `emp_id`, `project_id`, `time_stamp`) VALUES
(9, 1, 2, '2015-07-16 13:46:36'),
(10, 15, 4, '2015-07-20 04:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `time_val`
--

CREATE TABLE IF NOT EXISTS `time_val` (
`id` int(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `proj_id` varchar(200) NOT NULL,
  `s_time` varchar(200) NOT NULL,
  `e_time` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `proj_comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_val`
--

INSERT INTO `time_val` (`id`, `emp_id`, `proj_id`, `s_time`, `e_time`, `status`, `proj_comment`) VALUES
(1, '14', '3', '29:04:15 02:47:19', '29:04:15 02:47:23', '1', ''),
(2, '14', '3', '29:04:15 02:47:27', '29:04:15 02:47:29', '1', ''),
(3, '14', '3', '29:04:15 02:47:30', '29:04:15 02:47:31', '1', ''),
(4, '14', '3', '29:04:15 02:47:32', '29:04:15 02:47:32', '1', ''),
(5, '14', '3', '18:05:15 01:29:21', '18:05:15 01:29:59', '1', 'sdgsdfg'),
(6, '14', '4', '10:07:15 07:09:10', '10:07:15 07:10:00', '1', 'maine aaj koi kamm nahi kiya shivani maddddddddddddddddddddammmmmmmmmmmmmm'),
(7, '14', '', '16:07:15 03:37:05', '16:07:15 03:37:26', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `emp_code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mail_id` varchar(200) NOT NULL,
  `desig` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emp_code`, `name`, `mail_id`, `desig`, `username`, `pass`, `ts`) VALUES
(1, '3264', 'hemen', 'hss.agra@gmail.com', 'manager', 'no', 'no', '2015-04-20 09:26:28'),
(14, '326', 'hemen', 'hss.agra@gmail.com', 'manager', 'hss', '123', '2015-04-20 09:26:28'),
(15, '326', 'hemen', 'manager', 'hss.agra@gmail.com', 'no2', 'no', '2015-04-20 09:29:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_assign`
--
ALTER TABLE `project_assign`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_val`
--
ALTER TABLE `time_val`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project_assign`
--
ALTER TABLE `project_assign`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `time_val`
--
ALTER TABLE `time_val`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
