-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2010 at 07:34 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6-1+lenny4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `vilauda`
--

-- --------------------------------------------------------

--
-- Table structure for table `ps_categories`
--

CREATE TABLE IF NOT EXISTS `ps_categories` (
  `category_id` int(11) unsigned NOT NULL auto_increment,
  `parent_id` int(11) unsigned NOT NULL default '0',
  `name` varchar(255) default NULL,
  PRIMARY KEY  (`category_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ps_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `ps_characteristics`
--

CREATE TABLE IF NOT EXISTS `ps_characteristics` (
  `characteristic_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  PRIMARY KEY  (`characteristic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ps_characteristics`
--


-- --------------------------------------------------------

--
-- Table structure for table `ps_inclusions`
--

CREATE TABLE IF NOT EXISTS `ps_inclusions` (
  `inclusion_id` int(10) unsigned NOT NULL auto_increment,
  `category_id` int(10) unsigned default NULL,
  `product_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`inclusion_id`),
  KEY `category_id` (`category_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ps_inclusions`
--


-- --------------------------------------------------------

--
-- Table structure for table `ps_labels`
--

CREATE TABLE IF NOT EXISTS `ps_labels` (
  `label_id` int(10) unsigned NOT NULL auto_increment,
  `product_id` int(11) unsigned default NULL,
  `characteristic_id` int(11) unsigned default NULL,
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`label_id`),
  KEY `product_id` (`product_id`),
  KEY `characteristic_id` (`characteristic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ps_labels`
--


-- --------------------------------------------------------

--
-- Table structure for table `ps_photos`
--

CREATE TABLE IF NOT EXISTS `ps_photos` (
  `photo_id` int(11) unsigned NOT NULL auto_increment,
  `product_id` int(11) unsigned default NULL,
  `type` smallint(6) unsigned default NULL,
  `filename` varchar(255) default NULL,
  `alt` varchar(255) default NULL,
  PRIMARY KEY  (`photo_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ps_photos`
--


-- --------------------------------------------------------

--
-- Table structure for table `ps_products`
--

CREATE TABLE IF NOT EXISTS `ps_products` (
  `product_id` int(11) unsigned NOT NULL auto_increment,
  `weight` bigint(20) unsigned default NULL,
  `description` text,
  `keywords` text,
  `name` varchar(255) default NULL,
  `stock` int(11) unsigned default NULL,
  `add_date` datetime default NULL,
  `price` float unsigned default NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ps_products`
--


-- --------------------------------------------------------

--
-- Table structure for table `ps_users`
--

CREATE TABLE IF NOT EXISTS `ps_users` (
  `user_id` int(11) unsigned NOT NULL auto_increment,
  `user_type_id` int(10) unsigned default NULL,
  `register_date` datetime default NULL,
  `sex` enum('male','female') NOT NULL,
  `nick_name` varchar(255) default NULL,
  `first_name` varchar(255) default NULL,
  `last_name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `country` varchar(255) default NULL,
  `department` varchar(255) default NULL,
  `city` varchar(255) default NULL,
  `post_code` varchar(255) default NULL,
  `adress` varchar(255) default NULL,
  `phone1` varchar(255) default NULL,
  `phone2` varchar(255) default NULL,
  `phone3` varchar(255) default NULL,
  `fax` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `nick` (`nick_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ps_users`
--

INSERT INTO `ps_users` (`user_id`, `user_type_id`, `register_date`, `sex`, `nick_name`, `first_name`, `last_name`, `email`, `country`, `department`, `city`, `post_code`, `adress`, `phone1`, `phone2`, `phone3`, `fax`, `password`) VALUES
(0, 0, '2010-11-08 09:54:36', 'male', 'root', 'root', 'root', 'rootemail@example.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rootpass');

-- --------------------------------------------------------

--
-- Table structure for table `ps_user_types`
--

CREATE TABLE IF NOT EXISTS `ps_user_types` (
  `user_type_id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `users/add` enum('0','1') NOT NULL,
  `users/update` enum('0','1') NOT NULL,
  `users/remove` enum('0','1') NOT NULL,
  PRIMARY KEY  (`user_type_id`),
  UNIQUE KEY `naem` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ps_user_types`
--

INSERT INTO `ps_user_types` (`user_type_id`, `name`, `users/add`, `users/update`, `users/remove`) VALUES
(0, 'root', '0', '0', '0'),
(1, 'administrator', '0', '0', '0');
