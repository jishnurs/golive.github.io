-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2017 at 05:23 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `ds_agree`
--

CREATE TABLE IF NOT EXISTS `ds_agree` (
  `id` int(10) NOT NULL,
  `participant _profile_id` int(10) NOT NULL,
  `participant _type_id` tinyint(1) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `discussion_id` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ds_comments`
--

CREATE TABLE IF NOT EXISTS `ds_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `discussion_id` int(10) NOT NULL,
  `participant_profile_id` int(10) NOT NULL,
  `participant_type` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `comment_status_id` tinyint(1) NOT NULL,
  `comment_type_id` tinyint(1) NOT NULL,
  `comment` text NOT NULL,
  `like_count` int(10) DEFAULT NULL,
  `upvote_count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discussion_id` (`discussion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `ds_comment_ notification`
--

CREATE TABLE IF NOT EXISTS `ds_comment_ notification` (
  `id` int(10) NOT NULL,
  `participant_profile_id` int(10) NOT NULL,
  `participant_type_id` tinyint(1) NOT NULL,
  `view_status_id` tinyint(1) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `comment_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `read_date` datetime DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ds_comment_type`
--

CREATE TABLE IF NOT EXISTS `ds_comment_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_type_id` tinyint(1) NOT NULL,
  `comment_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ds_discussion`
--

CREATE TABLE IF NOT EXISTS `ds_discussion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author_profile_id` int(10) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `author_type` tinyint(1) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `discussion_status_id` tinyint(1) NOT NULL,
  `view_count` int(10) DEFAULT '0',
  `upvote_count` int(10) DEFAULT '0',
  `total_like_count` int(10) DEFAULT '0',
  `total_post_count` int(10) DEFAULT '0',
  `url` text NOT NULL,
  `last_commented` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ds_discussion`
--

INSERT INTO `ds_discussion` (`id`, `author_profile_id`, `author_name`, `author_type`, `title`, `description`, `category_id`, `category`, `created_date`, `image`, `discussion_status_id`, `view_count`, `upvote_count`, `total_like_count`, `total_post_count`, `url`, `last_commented`) VALUES
(1, 1, 'sedf', 0, 'saerfwer wetw et ', 'wer wetr we et we w', 1, 'serwe', '2017-02-07 00:00:00', NULL, 2, 0, 0, 0, 0, 'erwqer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ds_discussion_ notification`
--

CREATE TABLE IF NOT EXISTS `ds_discussion_ notification` (
  `id` int(10) NOT NULL,
  `participant_profile_id` int(10) NOT NULL,
  `participant_type_id` tinyint(1) NOT NULL,
  `view_status_id` tinyint(1) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `discussion_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `read_date` datetime DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ds_reply`
--

CREATE TABLE IF NOT EXISTS `ds_reply` (
  `id` int(10) NOT NULL,
  `participant _profile_id` int(10) NOT NULL,
  `participant _type_id` tinyint(1) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `comment_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ds_upvote`
--

CREATE TABLE IF NOT EXISTS `ds_upvote` (
  `id` int(10) NOT NULL,
  `participant _profile_id` int(10) NOT NULL,
  `participant _type_id` tinyint(1) NOT NULL,
  `status_id` tinyint(1) NOT NULL,
  `discussion_id` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'Jishnu', 'jishnu22922@gmail.com', '3537a2a44f431abdd68dbe528d40292a', 'Male', '9895395919', '2017-02-16 10:21:45', '2017-02-16 10:21:45', '1'),
(2, 'jishnu Jishnu', 'jishnu2292@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'Jishnu', 'adarsh@medpicky.com', '733d7be2196ff70efaf6913fc8bdcabf', 'Male', '9895656858', '2017-02-23 15:46:52', '2017-02-23 15:46:52', '1'),
(4, 'Jishnu', 'rsvishnu25@gmail.com', '733d7be2196ff70efaf6913fc8bdcabf', 'Male', '9895456855', '2017-02-23 15:48:08', '2017-02-23 15:48:08', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ds_comments`
--
ALTER TABLE `ds_comments`
  ADD CONSTRAINT `ds_comments_ibfk_1` FOREIGN KEY (`discussion_id`) REFERENCES `ds_discussion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ds_comment_ notification`
--
ALTER TABLE `ds_comment_ notification`
  ADD CONSTRAINT `ds_comment_ notification_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `ds_comments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ds_reply`
--
ALTER TABLE `ds_reply`
  ADD CONSTRAINT `ds_reply_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `ds_comments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;