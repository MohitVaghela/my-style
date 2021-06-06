-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 12:01 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `my_style`
--
CREATE DATABASE `my_style` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my_style`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Image` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Password`, `Image`) VALUES
(1, 'Bunny', 'bunnyvaghela@gmail.com', 'bunny', 'bunny.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(32) NOT NULL,
  `que` int(11) NOT NULL,
  `user_id` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'Shirt', 'Shirt.jpg'),
(2, 'T-shirt', 'T-shirt.jpg'),
(3, 'Hoodie', 'Hoodie.jpg'),
(4, 'Pants', 'Pants.jpg'),
(5, 'Jackets', 'Jacket.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `message` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `number`, `email`, `message`) VALUES
(1, 'mohit', 456463, 'mohitvaghela@gmail.com', 'fjgfjhf'),
(2, 'mohit', 456463, 'mohitvaghela@gmail.com', 'fjgfjhf'),
(3, 'mohit', 456463, 'mohitvaghela@gmail.com', 'fjgfjhf'),
(4, 'bunny vaghela', 7801872236, 'mohitvaghela1170@gmail.com', 'bunny'),
(5, 'bunny vaghela', 7801872236, 'mohitvaghela1170@gmail.com', 'bunny'),
(6, 'bunny vaghela', 7801872236, 'mohitvaghela1170@gmail.com', 'bunny'),
(7, 'bunny vaghela', 7801872236, 'mohitvaghela1170@gmail.com', 'bu'),
(8, 'harsh', 56, 'harsh@gmail.com', 'golu'),
(9, 'mohit', 4534, 'b@gmail.com', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `odr`
--

CREATE TABLE IF NOT EXISTS `odr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pro_id` varchar(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `Order_date` varchar(100) NOT NULL,
  `d_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `odr`
--

INSERT INTO `odr` (`id`, `user_id`, `pro_id`, `total`, `Order_date`, `d_date`) VALUES
(42, 10, '21', 1200, '21-10-18', '24-10-2018'),
(43, 10, '4-7', 2000, '21-10-18', '24-10-2018');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `sub_cat_id`, `name`, `price`, `size`, `des`, `img1`, `img2`) VALUES
(19, 2, 4, 'U.S. Polo', 2000, '39', '', 'tshirt8.jpg', 'tshirt7.jpg'),
(3, 2, 7, 'hip hop', 1500, '28', 'asdasfasdfsdf', 'p1.jpg', 'p2.jpg'),
(4, 2, 8, 'live''s', 1000, '28', 'assdds', 'l1.jpg', 'l2.jpg'),
(5, 2, 3, 'zara', 200, '30', 'asdasda', 'p1.jpg', 'p2.jpg'),
(9, 3, 6, 'Matterin Christiao', 1500, '39', ' Funny Cool Hoodies Mens Animal Fox Printed Sweatshirt Jacket Men', 'hoodie1.jpg', 'hoodie2.jpg'),
(7, 2, 3, 'denim', 1000, '30', 'qwee', 'h1.jpg', 'h2.jpg'),
(10, 3, 5, 'Fashion loose-gray', 2000, '40', '', 'hoodie4.jpg', 'hoodie3.jpg'),
(11, 3, 5, 'Fashion loose-black', 2200, '40', '', 'hoodie7.jpg', 'hoodie6.jpg'),
(12, 3, 5, 'Fashion loose-navy blue', 2200, '39', '', 'hoodie9.jpg', 'hoodie8.jpg'),
(13, 3, 6, 'spots hoodie', 1000, '38', '', 'hoodie11.jpg', 'hoodie10.jpg'),
(14, 3, 6, 'casual slim hooded', 1800, '38', '', 'hoodie12.jpg', 'hoodie13.jpg'),
(15, 3, 5, 'Lightweight Fleece Hoodie ', 3000, '40', '', 'hoodie15.jpg', 'hoodie14.jpg'),
(16, 2, 3, 'Maniac Checkered', 600, '32', '', 'tshirt2.jpg', 'tshirt1.jpg'),
(17, 2, 3, 'Fabstone Collection', 500, '38', 'Fabstone Collection Solid Men''s Round Neck Black T-Shirt', 'tshirt4.jpg', 'tshirt3.jpg'),
(18, 2, 4, 'Elepants Graphic ', 900, '40', '', 'tshirt6.jpg', 'tshirt5.jpg'),
(20, 2, 3, 'Tripr Printed ', 700, '37', '', 'tshirt10.jpg', 'tshirt9.jpg'),
(21, 3, 6, ' Boat Neck Grey', 1200, '40', '', 'hoodie17.jpg', 'hoodie16.jpg'),
(23, 2, 3, 'Solid Men''s Round Neck', 3000, '32', '', 'tshirt14.jpg', 'tshirt13.jpg'),
(24, 2, 3, 'Solid Men''s Round Neck', 3200, '39', '', 'tshirt16.jpg', 'tshirt15.jpg'),
(25, 1, 1, 'roadstar Men Charcoal', 1000, '32', '', 'shirt1.jpg', 'shirt2.jpg'),
(26, 1, 1, 'highlander blue denim', 2000, '40', '', 'shirt4.jpg', 'shirt3.jpg'),
(27, 1, 1, 'Checked Casual ', 1250, '38', '', 'shirt6.jpg', 'shirt5.jpg'),
(28, 1, 1, 'Blue & Red Slim Fit Checked', 3300, '32', '', 'shirt8.jpg', 'shirt7.jpg'),
(29, 2, 11, 'DRI-FIT Sleeveless Training T-Shirt', 1200, '40', 'has a round neck, Sleeveless Lightweigh,DRI-FIT technology,Nike Breathe fabric helps you stay dry and cool.', 'tshirt17.jpg', 'tshirt18.jpg'),
(30, 2, 11, 'Printed Round Neck T-shirt', 1800, '38', 'Maroon and black printed T-shirt, has a round neck, sleeveless,You''ll love the softness and durability of this high-fashion HERE&NOW tee. A fashionable weekend outfit starts with this maroon top matched with chinos and your favourite pair of sunglasses to cast an effortlessly cool image.', 'tshirt19.jpg', 'tshirt20.jpg'),
(31, 2, 11, ' Colourblocked Round Neck T-shirt', 2000, '39', 'Keep it trendy and casual this season with this high-quality HRX by Hrithik Roshan tee. When you''re grabbing a quick meal with your friends, this orange piece looks great with slimmer pants and chukka boot.', 'tshirt21.jpg', 'tshirt22.jpg'),
(32, 4, 7, 'Regular Fit Mid-Rise Mildly Distressed Jeans', 1000, '27', 'Blue medium wash 5-pocket mid-rise jeans, mildly distressed with heavy fade, has a button fly closure, waistband with belt loops', 'pant1.jpg', 'pant2.jpg'),
(33, 4, 8, 'White Slim Fit Solid Chinos', 1100, '28', 'Revamp your year-round style with these trendy Hubberholme chino trousers. When you have to give a presentation at work, wear this white pair with a formal tee, a casual blazer, and Oxfords.', 'pant3.jpg', 'pant4.jpg'),
(34, 4, 9, 'Brown Slim Fit Solid Formal', 1500, '26', 'Brown solid mid-rise formal trousers, has a button closure closure, 4 pockets Our stylist has paired these trousers with a belt This pair of trousers does not come with a belt', 'pant5.jpg', 'pant6.jpg'),
(35, 4, 10, ' Juventus Home Football Shorts', 2500, '25', 'White solid football shorts Elasticated waistband with drawstring fastening Juventus logo on right leg 3-Stripes on sides Adidas Badge of Sport woven on back left leg', 'pant8.jpg', 'pant7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(3, '1.jpg'),
(2, '2.jpg'),
(8, 'b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE IF NOT EXISTS `sub_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`id`, `cat_id`, `name`) VALUES
(1, 1, 'casual'),
(2, 1, 'formal'),
(3, 2, 'full_s'),
(4, 2, 'half_s'),
(5, 3, 'with_chain'),
(6, 3, 'without_chain'),
(7, 4, 'jeans'),
(8, 4, 'casual trousers'),
(9, 4, 'formal trousers'),
(10, 4, 'shorts'),
(11, 2, 'sleeveless'),
(12, 5, 'Denim'),
(13, 5, 'Leather'),
(14, 5, 'Printed'),
(15, 5, 'Windcheater'),
(20, 1, 'casual');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `number` bigint(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `number`, `address`, `image`, `email`, `password`) VALUES
(12, 'bunny', 7801872236, 'rameshwar nagar , jamnagar', 'bunny.jpg', 'mohitvaghela1170@gmail.com', 'bunny');
