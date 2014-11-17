-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2012 at 02:42 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `harsh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `user_id`, `product_id`, `product_name`, `product_price`, `quantity`, `date_added`) VALUES
(23, 9, 28, 'random', 4646, 3, '2012-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catergories`
--

CREATE TABLE IF NOT EXISTS `tbl_catergories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catergory` varchar(255) NOT NULL,
  `img_catergory` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_catergories`
--

INSERT INTO `tbl_catergories` (`id`, `catergory`, `img_catergory`) VALUES
(28, 'table linen', '9-category.jpg'),
(27, 'beds', '2-category.jpg'),
(26, 'curtains', '7-category.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE IF NOT EXISTS `tbl_contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_desc` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `contact_desc`, `created_date`) VALUES
(1, 'House no. 2020,<br />\r\n3rd Floor,<br />\r\nOutram line,<br />\r\nDelhi', '2012-04-02 17:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `catergory_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` text NOT NULL,
  `img_thumbnail` varchar(255) NOT NULL,
  `img_big` varchar(255) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `catergory_id`, `product_name`, `product_price`, `product_desc`, `img_thumbnail`, `img_big`, `date_added`) VALUES
(25, 26, 'red', 234234, 'sdasdas', '2817-home.jpg', '2817-home.jpg', '2012-04-07'),
(27, 27, 'single', 6464, 'large', '2289-home.jpg', '2289-home.jpg', '2012-04-10'),
(28, 28, 'random', 4646, 'round', '2927-home.jpg', '2927-home.jpg', '2012-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `wishlist` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `title`, `fname`, `surname`, `email`, `password`, `dob`, `address`, `postal_code`, `city`, `state`, `country`, `phone`, `wishlist`) VALUES
(9, 'Mr', 'harsh', 'verma', 'harsh376@gmail.com', '111111', '1992-06-12', 'house 2020,outram line', '110009', 'delhi', 'delhi', 'USA', '8130645776', '27'),
(10, 'Mr', 'shoumitra', 'srivastava', '123@gmail.com', '123456', '2012-04-10', 'doon', '248001', 'dehradun', 'uttarakhand', 'India', '656568489', '27'),
(11, 'Mr', 'varun', 'goel', '456@gmail.com', 'aaaaaa', '2012-04-12', 'kashipur', '64656', 'jaspur', 'uttarakhand', 'India', '65468777', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE IF NOT EXISTS `tbl_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`id`, `user_id`, `product_id`, `date_added`) VALUES
(8, 9, 25, '2012-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `test_education`
--

CREATE TABLE IF NOT EXISTS `test_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `education` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `test_education`
--

INSERT INTO `test_education` (`id`, `user_id`, `session_id`, `education`) VALUES
(3, 1, 'eklj2c286uo7l2vfcup1bcna76', 'Undergraduate'),
(4, 1, 'eklj2c286uo7l2vfcup1bcna76', 'MA'),
(5, 2, 'j40eur09fdn5ms42huc1o25jr1', 'BA');

-- --------------------------------------------------------

--
-- Table structure for table `test_users`
--

CREATE TABLE IF NOT EXISTS `test_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `test_users`
--

INSERT INTO `test_users` (`user_id`, `name`, `father`, `address`) VALUES
(1, 'tom', 'dick', '2020'),
(2, 'greg', 'chappell', '2010');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
