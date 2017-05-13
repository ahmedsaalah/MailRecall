-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 01:46 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailrecall`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `permission_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_types`
--

CREATE TABLE `permission_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `requests` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `request`, `reason`, `hrAccept`, `adminAccept`, `filename`, `done`, `canMakeTheop`, `SorD`, `time`) VALUES
(1, 1, 'Get-Mailbox , | Search-Mailbox -SearchQuery { Sent:"31/3/2017..31/4/1207" AND to:"serah@gmail.com" AND from:"ahm@fom.com" AND subject:"aaa"  AND hii } -TargetMailbox ahmed@gmail.com -TargetFolder salah', 'The Reason for Search', 0, 0, 'c2c4d6f2cf44a4d4ea2e7f9ef516baf6bfea297e', 0, 0, 1, '2017-04-20 15:08:32'),
(2, 1, 'Get-Mailbox qqs | Search-Mailbox -SearchQuery { Sent:"31/3/2017..31/4/1207" AND to:"ahnmaaad@hotmail.com" AND from:"ahmaaaa@live.com" AND subject:"ss"  AND  } -TargetMailbox ahmed@gmail.com -TargetFolder ss', 'The Reason for Search', 1, 1, '46f9539d77b6845a50b581d53b0e7337248e3291', 0, 1, 0, '2017-04-20 15:10:09'),
(3, 1, 'Get-Mailbox ss | Search-Mailbox -SearchQuery { Sent:"31/3/2017..31/4/1207" AND to:"salah@sa.com" AND from:"ahmaaaa@live.com" AND subject:"aaa"  AND  } -TargetMailbox ahmed@gmail.com -TargetFolder ss', 'The Reason for Search', 1, 1, '18abb92fdd76f1fa55dfc4e14678a57903d7978b', 0, 1, 0, '2017-04-21 15:58:18'),
(4, 1, 'Sent:"17/3/207..31/4/1207" AND to:"salah@sa.com" AND from:"ahm@fom.com" AND subject:"eh b2aa"  AND  in mailbox of DistributionGroupMember ', 'The Reason for Search', 0, 1, 'd345afd5adeae9457f2769cf2b73706fb2d0fb5d', 0, 0, 0, '2017-04-21 16:00:40'),
(5, 1, ' in mailbox of DistributionGroupMember ', '3yz a3mels search kda', 1, 1, '9835abb725c195d6f347b4c50d89a4fd18b2f300', 0, 0, 0, '2017-04-21 16:02:57'),
(6, 1, 'Sent:"18 April, 2017..29 April, 2017" AND to:"serah@gmail.com" AND from:"ahm@fom.coms" AND subject:"eh b2aa"  AND  in mailbox of DistributionGroupMember ', 'mn gher asbab', 0, 1, '2702ac072e5574f630ab59b38f619c47e6f3dad2', 0, 0, 1, '2017-04-25 01:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `type` varchar(1024) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `deleted`) VALUES
(1, 'a7mad.sala7@live.com', '9193ce3b31332b03f7d8af056c692b84', '1', 0),
(9, 'aaaaa', 'wdw', '1', 0),
(10, 'bbbbbbb', 'sasa', '3', 0),
(11, 'swsws', 'wsss', '2', 0),
(12, 'sssssssss', 'ss', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permission_types`
--
ALTER TABLE `permission_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
