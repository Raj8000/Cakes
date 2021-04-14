-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 02:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE IF NOT EXISTS `admin_reg` (
`admin_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`admin_id`, `first_name`, `last_name`, `email`, `password`, `mobile_number`, `gender`, `file`, `address`, `status`) VALUES
(11, 'Asad', 'Mansuri', 'asadmansuri@gmail.com', '123456', '7383764784', 'Male', 'IMG_20171020_174245_981.jpg', 'Ahmedabad', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`banner_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `name`, `img`, `status`) VALUES
(5, 'cake', 'Order.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `quantity`, `price`, `date`, `user_id`, `product_id`, `amount`, `ip`) VALUES
(92, 2, 450, '0000-00-00', 0, 39, 900, '::1'),
(93, 2, 500, '0000-00-00', 11, 40, 1000, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`, `img`, `status`) VALUES
(1, 'Burger Cake', 'burgercake.jpg', 'Active'),
(3, 'Pasteries', 'pastries.jpg', 'Active'),
(4, 'Italian Cake', 'italian.jpg', 'Active'),
(6, 'Fruit Cake', 'fruit.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
`c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  `c_number` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `name`, `email_id`, `c_number`, `message`) VALUES
(6, 'Asad Mansuri', 'asad6797@gmail.com', '7383764784', 'abc pqr xyz'),
(7, 'asad', 'asad6797@gmail.com', '1234567852', 'asas'),
(8, 'a', 'a@gmail.com', '7383764784', ''),
(9, 'Asad', 'asadmansuri@gmail.com', '7383764784', ' Hello'),
(10, '', '', '', ' '),
(11, '', '', '', ' '),
(12, 'qq', '', '', ' '),
(13, 'a', 'asadmansuri@gmail.com', '7383764784', ' '),
(14, 'a', 'asadmansuri@gmail.com', '1234567890', '\r\n\r\n\r\n '),
(15, 'asad', 'asad@gmail.com', '1234567890', ' '),
(16, 'asad', 'asadmansuri@gmail.com', '1234567890', ' '),
(17, 'asad', 'asadmansuri@gmail.com', '7383764784', 'asadddsdsd ');

-- --------------------------------------------------------

--
-- Table structure for table `customization`
--

CREATE TABLE IF NOT EXISTS `customization` (
`cust_id` int(11) NOT NULL,
  `shape` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customization`
--

INSERT INTO `customization` (`cust_id`, `shape`, `text`, `quantity`, `user_id`, `product_id`) VALUES
(7, 'Round', 'asas', '500Gm', 11, 40),
(8, 'Heart Shape', 'heart shape', '3kg', 11, 39),
(12, 'Round', 'qqq', '3kg', 11, 39),
(13, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 38),
(14, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 40),
(15, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 40),
(16, 'Round', '', 'Select Cake Quantity', 11, 40),
(17, 'Round', '', 'Select Cake Quantity', 11, 40),
(18, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 38),
(19, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 39),
(20, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 39),
(21, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 40),
(22, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 38),
(23, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 40),
(24, 'Select Cake Shape', '', 'Select Cake Quantity', 11, 40),
(25, 'Select Cake Shape', '', 'Select Cake Quantity', 0, 39);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`fb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `c_number` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `user_id`, `email_id`, `c_number`, `message`) VALUES
(9, 11, 'asad@gmail.com', '7383764784', 'hello admin can u help me?'),
(12, 11, 'asad@gmail.com', '1234567890', 'asadasadasasdasadsadsdasadssdasadasad'),
(13, 11, '', '', ''),
(14, 11, 'asadmansuri@gmail.com', '1235678903', 'asasasas');

-- --------------------------------------------------------

--
-- Table structure for table `invoicebill`
--

CREATE TABLE IF NOT EXISTS `invoicebill` (
`invoice_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_product` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_bill` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
`orderdetail_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`pay_id` int(11) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `card_number` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_type`, `bank_name`, `card_number`, `price`, `pay_date`, `status`) VALUES
(11, 'Cash On Delivery', 'Dena Bank', 123, 500, '2017-12-25', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(50) NOT NULL,
  `des` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `subcat_id`, `name`, `img`, `date`, `price`, `des`, `status`) VALUES
(37, 17, 'Chocolate Cake', 'img3.jpg', '2018-02-14', '250', 'Chocolate Cake ', 'Active'),
(38, 21, 'Random Cake', 'pic4.jpg', '2018-02-14', '350', 'strawberry cake', 'Active'),
(39, 23, 'Black Forest', 'burgercake.jpg', '2018-02-14', '450', 'burger cake', 'Active'),
(40, 18, 'cake', 'cake.jpg', '2018-02-14', '500', 'xyzz', 'Active'),
(41, 17, 'Kids Birthday Cake', 'healthy-food.jpg', '2018-02-14', '150', 'birthday cake for childerens', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
`subcat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `name`, `description`, `cat_id`, `status`) VALUES
(18, 'asaa', '', 0, 'Active'),
(20, 'hjhjnk', 'kkjiui', 21, 'Active'),
(21, 'asasasas', 'asasasasasas', 20, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
`user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `cdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `first_name`, `last_name`, `dob`, `email`, `password`, `mobile_number`, `cdate`, `gender`, `img`, `address`, `status`) VALUES
(11, 'Asad', 'Mansuri', '1997-07-06', 'asad@gmail.com', '123456', '7383764784', '2018-03-21', 'Male', 'IMG_20171020_174245_981.jpg', 'Ahmeadabad', ''),
(28, 'Test', 'test', '1997-07-06', 'test@test.com', '123456789', '1236547890', '2018-03-26', 'Male', 'IMG_20150405_172413.jpg', 'tester', ''),
(29, 'mohammed', 'hariyani', '1997-07-06', 'mohammed@gmail.com', '321654', '7567211418', '2018-03-26', 'Male', 'pic3.jpg', 'Bhavnagar', ''),
(30, 'rishit', 'khatri', '1997-10-21', 'rishit@gmail.com', '987654', '9913793856', '2018-03-26', 'Male', 'pic4.jpg', 'Ahmedabad', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`video_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `product_id`, `name`, `source`) VALUES
(7, 40, 'q53HUAKB9oU', 'https://www.youtube.com/embed/q53HUAKB9oU\r\n'),
(8, 39, 'gCfhNGI4pRo', 'https://www.youtube.com/embed/gCfhNGI4pRo'),
(9, 38, 'z9JEEuNAOiA', 'https://www.youtube.com/embed/z9JEEuNAOiA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customization`
--
ALTER TABLE `customization`
 ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `invoicebill`
--
ALTER TABLE `invoicebill`
 ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
 ADD PRIMARY KEY (`orderdetail_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
 ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `customization`
--
ALTER TABLE `customization`
MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `invoicebill`
--
ALTER TABLE `invoicebill`
MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
MODIFY `orderdetail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
