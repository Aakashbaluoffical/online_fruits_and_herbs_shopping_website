-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2020 at 07:15 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `cart_detail_id` int(11) NOT NULL auto_increment,
  `cart_head_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `product_qty` varchar(20) NOT NULL,
  `product_unit_pice` float NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY  (`cart_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`cart_detail_id`, `cart_head_id`, `product_id`, `product_type`, `product_qty`, `product_unit_pice`, `image`) VALUES
(1, 1, 29, 'fruit', '1', 100, '7586035.jpg'),
(2, 2, 27, 'fruit', '1', 300, '6633619.jpg'),
(3, 3, 27, 'fruit', '1', 300, '6633619.jpg'),
(4, 4, 28, 'fruit', '1', 500, '1009975.jpg'),
(5, 5, 31, 'fruit', '1', 250, '4605010.jpg'),
(6, 6, 27, 'fruit', '1', 300, '6633619.jpg'),
(7, 6, 36, 'fruit', '1', 90, '2560547.jpg'),
(8, 6, 1, 'herbs', '1', 100, '2375491.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery_address`
--

CREATE TABLE `tbl_delivery_address` (
  `del_add_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sel_address` varchar(20) NOT NULL,
  PRIMARY KEY  (`del_add_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_delivery_address`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_herbs`
--

CREATE TABLE `tbl_herbs` (
  `herb_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `feature` varchar(500) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY  (`herb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_herbs`
--

INSERT INTO `tbl_herbs` (`herb_id`, `name`, `description`, `feature`, `cost`, `image`) VALUES
(1, 'Basil', 'so natural herb price/gm', 'good for health', '100', '2375491.jpg'),
(2, 'Borage', 'natural borage price/gm', 'good for health', '120', '3276993.jpg'),
(3, 'Herbal Tea', 'so natural tea price/gm', 'good for skin', '300', '860284.jpg'),
(4, 'Fern', 'natural ,price /gm', 'good for body', '299', '4314468.jpg'),
(5, 'Lemon&herb', 'lemon with herb combo price/gm', 'for for health', '350', '1089242.jpg'),
(6, 'Termeric', 'natural ,price/gm', 'good for health', '110', '3404124.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(150) NOT NULL,
  PRIMARY KEY  (`login_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(6, 'user', 'user', 'user'),
(8, 'alan', 'alan', 'user'),
(10, 'ady', 'ady', 'user'),
(11, '', '', 'user'),
(12, 'akash', 'akash', 'user'),
(13, 'login', 'login', 'user'),
(14, 'font', 'font', 'user'),
(15, 'bvvcb', 'fxvx', 'user'),
(16, 'varsha', 'varsha', 'user'),
(18, 'new', 'new', 'user'),
(19, '12345', '12345', 'user'),
(20, 'angrybirdin', '0484', 'user'),
(21, 'justin', 'justin', 'user'),
(22, 'mini', 'mini', 'user'),
(23, 'amal', 'amal', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart_head`
--

CREATE TABLE `tb_cart_head` (
  `cart_head_id` int(11) NOT NULL auto_increment,
  `cart_head_date` varchar(50) NOT NULL,
  `cart_head_total` varchar(100) NOT NULL,
  `cart_head_status` varchar(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `del_add_id` int(11) default NULL,
  `delivery_status` varchar(100) NOT NULL,
  PRIMARY KEY  (`cart_head_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_cart_head`
--

INSERT INTO `tb_cart_head` (`cart_head_id`, `cart_head_date`, `cart_head_total`, `cart_head_status`, `user_id`, `del_add_id`, `delivery_status`) VALUES
(1, '2020-12-11', '100', 'paid', 1, NULL, 'Delivered'),
(2, '2020-12-11', '300', 'paid', 2, NULL, 'Delivered'),
(3, '2020-12-11', '300', 'paid', 2, NULL, 'Delivered'),
(4, '2020-12-11', '500', 'paid', 1, NULL, 'Delivered'),
(5, '2020-12-11', '250', 'paid', 2, NULL, 'Delivered'),
(6, '2020-12-14', '490', 'paid', 10, NULL, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedbackuser`
--

CREATE TABLE `tb_feedbackuser` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(55) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_feedbackuser`
--

INSERT INTO `tb_feedbackuser` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'varsha', 'varshaBALU@GMAIL.COM', 'good feedback', 'i am so happy '),
(8, 'akash', 'akash@gmail.com', 'good feedback', 'ftjfyjfhkfhkghkghkghkghkghkg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fruits`
--

CREATE TABLE `tb_fruits` (
  `fruit_id` int(11) NOT NULL auto_increment,
  `fruitname` varchar(50) NOT NULL,
  `fruitdes` varchar(500) NOT NULL,
  `fruitfea` varchar(500) NOT NULL,
  `fruitcost` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL,
  PRIMARY KEY  (`fruit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tb_fruits`
--

INSERT INTO `tb_fruits` (`fruit_id`, `fruitname`, `fruitdes`, `fruitfea`, `fruitcost`, `image`) VALUES
(27, 'Strawberry', 'so taste strawberry', 'good for heart', '300', '6633619.jpg'),
(28, 'Cherry', 'cherry ', 'cherry', '500', '1009975.jpg'),
(29, 'Grapes', 'fresh Grapes', 'avoo', '100', '7586035.jpg'),
(30, 'Strawberry', 'fresh Strawberry', 'avvo', '250', '79205.jpg'),
(31, 'Black Grapes', 'fresh black grapes', 'avvoo', '250', '4605010.jpg'),
(32, 'Blueberries', 'so taste blueberries (price/kg)', 'good for health', '100', '8969843.jpg'),
(33, 'Blackberries', 'so taste blackberries for price/kg', 'Good for eye', '120', '595961.jpg'),
(34, 'Green Apple', 'so taste green apple price/kg', 'good for health', '150', '1468501.jpg'),
(35, 'Apricots', 'so taste apricots price/kg', 'good for skin', '300', '5407734.jpg'),
(36, 'Watermelons', 'so taste watermelons price/kg', 'good for kidney', '90', '2560547.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_myorder`
--

CREATE TABLE `tb_myorder` (
  `myorder_id` int(11) NOT NULL auto_increment,
  `product_id` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_unit_pice` varchar(50) NOT NULL,
  PRIMARY KEY  (`myorder_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_myorder`
--

INSERT INTO `tb_myorder` (`myorder_id`, `product_id`, `product_type`, `product_unit_pice`) VALUES
(1, '3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_id` varchar(100) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `name`, `number`, `email`, `login_id`) VALUES
(1, 'akash', '98745621', 'akash@gmail.com', '6'),
(2, 'fff', 'ttt', 'akash@gmail.com', '14'),
(3, 'akash', '98745621', 'akash@gmail.com', '15'),
(4, 'varsha', '9847901919', 'varshaBALU@GMAIL.COM', '16'),
(5, 'akash', '98745621', 'akash@gmail.com', '17'),
(6, 'akash', '9847901919', 'asdf@gmail.com', '18'),
(7, 'ddd', '9847901919', 'varshaBALU@GMAIL.COM', '19'),
(8, 'varsha', '9847901919', 'varshabalu8@gmail.com', '20'),
(9, 'adaa', 'adad', 'akash@gmail.com', '21'),
(10, 'akash', '98745621', 'akash@gmail.com', '22'),
(11, 'akash', '9847901919', 'akashbalu92@gmail.com', '23');
