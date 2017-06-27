-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 03:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mailrecall`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` int(11) NOT NULL,
  `userEmail` varchar(1024) DEFAULT NULL,
  `desc` varchar(1024) DEFAULT NULL,
  `type` varchar(1024) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `userEmail`, `desc`, `type`, `time`) VALUES
(1, 'administrator@gpvodafone.local', 'c5bd17dcfaefb4da022c93ad4e99123068de71cc', 'Search', '2017-06-15 12:29:12'),
(2, 'administrator@gpvodafone.local', 'foreach ($mailbox in (get-mailbox)) {IF ($mailbox.name -ne "administrator@gpvodafone.local"){Get-Mailbox  | Search-Mailbox -SearchQuery {  } -TargetMailbox administrator@gpvodafone.local -TargetFolder  -DeleteContent -Force}}', 'Search', '2017-06-15 12:32:35'),
(3, 'administrator@gpvodafone.local', 'Get-Mailbox  | Search-Mailbox -SearchQuery { Sent:"06/13/2017" } -TargetMailbox administrator@gpvodafone.local -TargetFolder kkkkl', 'Search', '2017-06-15 12:36:53'),
(4, 'administrator@gpvodafone.local', 'foreach ($mailbox in (get-mailbox)) {IF ($mailbox.name -ne "administrator@gpvodafone.local"){Get-Mailbox  | Search-Mailbox -SearchQuery { from:"lllllllll@live.com" } -TargetMailbox administrator@gpvodafone.local -TargetFolder kl -DeleteContent -Force}}', 'Search', '2017-06-15 12:37:33'),
(5, 'administrator@gpvodafone.local', 'Get-Mailbox  | Search-Mailbox -SearchQuery { from:"lllllllll@live.com" } -TargetMailbox administrator@gpvodafone.local -TargetFolder kl', 'delete', '2017-06-15 12:37:33'),
(6, 'administrator@gpvodafone.local', 'foreach ($mailbox in (get-mailbox)) {IF ($mailbox.name -ne "administrator@gpvodafone.local"){Get-Mailbox  | Search-Mailbox -SearchQuery {  } -TargetMailbox administrator@gpvodafone.local -TargetFolder  -DeleteContent -Force}}', 'Search', '2017-06-15 13:18:23'),
(7, 'administrator@gpvodafone.local', 'Get-Mailbox  | Search-Mailbox -SearchQuery { subject:"a"  } -TargetMailbox administrator@gpvodafone.local -TargetFolder 3eeeed1', 'Search', '2017-06-25 14:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `permission_id`) VALUES
(2, 1, 1),
(3, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_types`
--

CREATE TABLE IF NOT EXISTS `permission_types` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_types`
--

INSERT INTO `permission_types` (`id`, `name`) VALUES
(1, 'search'),
(2, 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request` text,
  `reason` text,
  `hrAccept` int(11) DEFAULT '0',
  `adminAccept` int(11) DEFAULT '0',
  `filename` varchar(1024) DEFAULT NULL,
  `done` int(11) DEFAULT '0',
  `canMakeTheop` int(11) DEFAULT '0',
  `SorD` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `request`, `reason`, `hrAccept`, `adminAccept`, `filename`, `done`, `canMakeTheop`, `SorD`, `time`) VALUES
(83, 1, ' in mailbox of everyone', NULL, 0, 1, 'bdac0fc306ff6abdb82173296896f2e94cb84dde', 0, 0, 0, '2017-06-15 13:18:23'),
(84, 1, 'subject:"a"  in mailbox of everyone', 'Lzem ngrab wala ehhhh', 1, 1, 'd4916805f1bd7a9453dbedefbbb3a17232e1f54b', 0, 0, 0, '2017-06-25 14:27:38'),
(82, 1, 'from:"lllllllll@live.com" in mailbox of everyone', 'The Reason for Search', 0, 1, '22dc2e56d419a7ef9c09609330fb43c99bfc4915', 0, 0, 0, '2017-06-15 12:37:33'),
(81, 1, 'from:"lllllllll@live.com" in mailbox of everyone', 'The Reason for Search', 0, 1, 'db49b37b5186433a46412bcfbdb4b3ae7e16cde0', 0, 0, 1, '2017-06-15 12:37:33'),
(80, 1, 'Sent:"06/13/2017" in mailbox of everyone', 'The Reason for Search', 0, 1, '44b67ff3a388b961d6e0b21e99bf7b0019414e07', 0, 0, 0, '2017-06-15 12:36:53'),
(79, 1, ' in mailbox of everyone', NULL, 0, 1, 'c5862d624e6ca279d19972ecc0d47e088f2d0369', 0, 0, 0, '2017-06-15 12:32:35'),
(78, 1, ' in mailbox of everyone', NULL, 0, 1, 'c5bd17dcfaefb4da022c93ad4e99123068de71cc', 0, 0, 0, '2017-06-15 12:29:12'),
(74, 1, 'Sent:"05/12/2017" in mailbox of everyone', 'The Reason for Search', 0, 1, '14bc334d1f0c07959bbcba12da7bcab530d1e6a5', 0, 0, 1, '2017-05-13 03:33:27'),
(75, 1, 'Sent:"05/12/2017" in mailbox of everyone', 'The Reason for Search', 1, 1, 'abf08e072e6c9f409cd61a8ae589d4e0c3ef1df3', 0, 0, 0, '2017-05-13 03:33:27'),
(76, 1, 'Sent:"06/4/2017" in mailbox of everyone', 'The Reason for Search', 0, 1, '1f8e8fc36ab1a29027c104ba710f0a120cf7a5e0', 0, 0, 1, '2017-06-14 13:00:49'),
(77, 1, 'Sent:"06/4/2017" in mailbox of everyone', 'The Reason for Search', 0, 1, 'c04f00f989d15724e3b5d003994364b4d4f27242', 0, 0, 0, '2017-06-14 13:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `setup`
--

CREATE TABLE IF NOT EXISTS `setup` (
`id` int(11) NOT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setup`
--

INSERT INTO `setup` (`id`, `email`, `type`) VALUES
(5, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `type` varchar(1024) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `deleted`) VALUES
(1, 'administrator@gpvodafone.local', '9193ce3b31332b03f7d8af056c692b84', '1', 0),
(9, 'administrator@gpvodafone.local', 'wdw', '1', 0),
(10, 'a7mad.sala7@live.com', 'sasa', '3', 0),
(11, 'swsws', 'wsss', '2', 0),
(12, 'sssssssss', 'ss', '2', 0),
(13, 'freedom_94_@hotmail.com', '202cb962ac59075b964b07152d234b70', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
`id` int(11) NOT NULL,
  `dep_name` varchar(500) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `dep_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'HR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_types`
--
ALTER TABLE `permission_types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setup`
--
ALTER TABLE `setup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permission_types`
--
ALTER TABLE `permission_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `setup`
--
ALTER TABLE `setup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
