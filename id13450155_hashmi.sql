-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2020 at 04:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13450155_hashmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `pass`, `email`, `phone`) VALUES
(1, 'osama', '123', 'osama@gmaail.com', 'noas');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `item_id` text NOT NULL,
  `ordered` text NOT NULL,
  `quantity` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `item_id`, `ordered`, `quantity`, `date`) VALUES
(17, '4', '1', '3', '7', '2/05/2020'),
(18, '4', '3', '3', '2', '2/05/2020'),
(19, '4', '1', '3', '1', '2/05/2020'),
(20, '4', '2', '3', '3', '3/05/2020'),
(21, '4', '1', '4', '2', '3/05/2020'),
(24, '', '2', 'no', '5', '3/05/2020'),
(23, '4', '1', '5', '10', '3/05/2020'),
(25, '4', '3', '6', '2', '6/05/2020'),
(26, '', '1', 'no', '1', '12/05/2020'),
(27, '4', '2', '7', '1', '12/05/2020'),
(28, '4', '3', '8', '2', '12/05/2020'),
(30, '', '5', 'no', '2', '13/05/2020'),
(31, '4', '3', '9', '1', '13/05/2020'),
(32, '', '3', 'no', '2', '17/07/2020'),
(33, '', '12', 'no', '1', '19/07/2020'),
(37, '', '15', 'no', '1', '7/08/2020'),
(35, '', '12', 'no', '1', '7/08/2020'),
(36, '4', '10', '10', '2', '7/08/2020'),
(38, '4', '15', '11', '1', '7/08/2020'),
(39, '', '11', 'no', '2', '10/08/2020'),
(40, '4', '16', '12', '1', '20/08/2020'),
(41, '', '12', 'no', '1', '21/08/2020'),
(43, '11', '12', '13', '3', '6/09/2020');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `stock` text NOT NULL,
  `weight` text NOT NULL,
  `price` text NOT NULL,
  `category` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `date`, `image`, `stock`, `weight`, `price`, `category`) VALUES
(3, 'T shirt original superman', 'Original T shirt that superman had used', '26/04/2020', 'uploads/5ea5bd60561148.98595458.jpg', '23', '9', '29999', '1'),
(14, 'Kids jeans cloth', 'Kids jeans cloth cool an easy ', '17/07/2020', 'uploads/5f11a7e1ac29c0.96140979.jpg', '26', '22', '6000', '3'),
(8, 'Jeans pents', 'Very easy to wear and good tuff', '17/07/2020', 'uploads/5f11a429a67ce1.48721175.jpg', '17', '20', '2000', '2'),
(9, 'grayers-america-inc-boulder-double-cloth', 'grayers-america-inc-boulder-double-cloth super cool', '17/07/2020', 'uploads/5f11a48fdd5759.82074202.jpg', '16', '10', '800', '1'),
(10, 'Silk cloth', 'silk jursy', '17/07/2020', 'uploads/5f11a4f18fa6d0.12198837.jpg', '29', '11', '200', '1'),
(11, 'Thai silk cloth', 'Beautiful Thai silk cloths and raw silk threads materia.', '17/07/2020', 'uploads/5f11a53eacb035.89923740.jpg', '31', '12', '800', '2'),
(12, 'Banarsi silk cloth', 'Buy Banarasi Silk Online I Banarasi Fabrics I Wedding Fabrics', '17/07/2020', 'uploads/5f11a5ab7e0d93.75233113.jpg', '46', '13', '1200', '2'),
(13, 'Plain cotton fabrics', 'Plain cotton fabrics', '17/07/2020', 'uploads/5f11a5efc82ee9.98097837.jpg', '32', '15', '2000', '1'),
(15, 'Girl kid cloth', 'Girl cloth shop now with glasses', '17/07/2020', 'uploads/5f11a83fbf1272.49727028.jpg', '32', '15', '4000', '3'),
(16, 'Pajamas', 'Pajamas', '20/08/2020', 'uploads/5f3e1fb028d619.88561701.png', '2', '11', '8000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `date` text NOT NULL,
  `loc` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `user_id`, `date`, `loc`, `phone`) VALUES
(3, '4', '1/05/2020', 'v & PO TEH AKSAJAS', '9901290219029012'),
(4, '11', '6/09/2020', 'rpd', '0258741012548');

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`id`, `name`) VALUES
(1, 'Men'),
(2, 'Woman'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `MemoOnlineData`
--

CREATE TABLE `MemoOnlineData` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `MemoOnlineData`
--

INSERT INTO `MemoOnlineData` (`id`, `email`, `name`, `pass`, `title`, `date`, `data`) VALUES
(1, 'osama', 'osamaellahi', '121212', 'ajksjasdjka;jsda;s', 'asdjnaskdjkans', 'masmasasas'),
(2, 'ali', 'ali', 'asjkdjkas', 'jaskndajks', 'kjn', 'jknjnk');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `id` int(11) NOT NULL,
  `payment_tr` text NOT NULL,
  `payment_date` text NOT NULL,
  `user_id` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`id`, `payment_tr`, `payment_date`, `user_id`, `order_status`) VALUES
(5, 'mamasmsmnsanm', '2020-05-01', '4', 'parcelled'),
(3, 'asas2', '2020-05-28', '4', 'pending'),
(4, 'ksakaks889asanas', '2020-05-13', '4', 'pending'),
(6, 'sasklskasklas', '2020-05-15', '4', 'pending'),
(7, 'assasa', '2020-05-28', '4', 'pending'),
(8, 'assajasj', '2020-05-08', '4', 'pending'),
(9, 'sa,.asasaoojop', '2020-05-21', '4', 'parcelled'),
(10, 'adsas8asjda9s', '2020-08-03', '4', 'parcelled'),
(11, 'sxYbxlb', '2020-08-19', '4', 'parcelled'),
(12, 'bilalhassan', '2020-08-05', '4', 'parcelled'),
(13, '354136546', '1996-12-25', '11', 'parcelled');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL,
  `categories` text NOT NULL,
  `image` text NOT NULL,
  `stock` text NOT NULL,
  `weight` text NOT NULL,
  `price` text NOT NULL,
  `wholesale` text NOT NULL,
  `resturantprice` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `description`, `date`, `categories`, `image`, `stock`, `weight`, `price`, `wholesale`, `resturantprice`) VALUES
(38, 'k', 'kj', 'jkknkj', 'jknkjn', 'jnkjnk', 'uploads/any1.jpg', 'kjk', 'jkn', 'kj', 'kj', 'kjnkjn'),
(39, 'kjk', '12', 'jk', '26/04/2020', '', 'uploads/5ea56f49c07839.14824553.png', '21', '12', '12', '32', '212'),
(36, 'kj', ' jjk', ' jk', 'kjkjj', 'kj`', 'uploads/any1.jpg', '', 'kjk', 'kj', 'kj', 'k'),
(40, '2kkl', '21', '12', '26/04/2020', 'Paste & Instant Ingredient ', 'uploads/5ea56f6e173899.28398776.png', '3', '21', '21', '332', '3');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` text NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `date`) VALUES
(1, 'osama', 'osama@gmail.com', '123', '09/10/2018\r\n                                                                                                       '),
(2, 'mian', 'mian@gmail.com', '123', '10/11/2018\r\n                                                                                                       '),
(3, 'umer', 'raja@gmail.com', '123', '12/11/2018\r\n                                                                                                       '),
(4, 'osamaellahi', 'm.osamaellahi@gmail.com', '12345678', 'j/m/Y'),
(5, 'abdul mannan', 'm.abdulmannan@gmail.com', '12345678', 'j/m/Y'),
(6, 'Mian Abdul hannan', 'm.abdulhannan@gmail.com', '12345678', 'j/m/Y'),
(7, 'nabeel ahmed', 'nabeelahmed@gmail.com', '12345678', 'j/m/Y'),
(8, 'abdul saboor', 'abdulsaboor@gmail.com', '12345678', '3/05/2020'),
(9, 'mian anas', 'newstudentlearn@gmail.com', '12341234', 'j/m/Y'),
(10, 'mian anas', 'blackratguy9@gmail.com', '12341234', 'j/m/Y'),
(11, 'bilal', 'bilal@gmail.com', '74107410', 'j/m/Y');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `visitors` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `visitors`) VALUES
(1, '[value-2]'),
(2, 'true'),
(3, 'true'),
(4, 'true'),
(5, 'true'),
(6, 'true'),
(7, 'true'),
(8, 'true'),
(9, 'true'),
(10, 'true'),
(11, 'true'),
(12, 'true'),
(13, 'true'),
(14, 'true'),
(15, 'true'),
(16, 'true'),
(17, 'true'),
(18, 'true'),
(19, 'true'),
(20, 'true'),
(21, 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MemoOnlineData`
--
ALTER TABLE `MemoOnlineData`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `MemoOnlineData`
--
ALTER TABLE `MemoOnlineData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
