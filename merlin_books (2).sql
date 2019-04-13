-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 10:00 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merlin_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestseller`
--

CREATE TABLE `bestseller` (
  `isbn_no` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bestseller`
--

INSERT INTO `bestseller` (`isbn_no`) VALUES
(9780007273508),
(9780008123208),
(9780141439600),
(9780552161237),
(9788175992832),
(9788175992917),
(9789380005744);

-- --------------------------------------------------------

--
-- Table structure for table `books_info`
--

CREATE TABLE `books_info` (
  `isbn_no` bigint(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `author` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `language` varchar(150) NOT NULL,
  `genre` varchar(150) NOT NULL,
  `edition` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `rating` decimal(11,1) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `binding` varchar(100) NOT NULL,
  `picture` varchar(15) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '10'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_info`
--

INSERT INTO `books_info` (`isbn_no`, `title`, `author`, `publisher`, `language`, `genre`, `edition`, `pages`, `rating`, `price`, `binding`, `picture`, `Quantity`) VALUES
(9780593078754, 'origin', 'dan brown', 'penguin', 'english', 'thriller', 2017, 544, '4.0', '799.00', 'hardcover', 'image/1.jpg', -1),
(9780552161268, 'angels and demons', 'dan brown', 'penguin', 'english', 'thriller', 2009, 624, '4.6', '399.00', 'paperback', 'image/2.jpg', 6),
(9780552161275, 'the da vinci code', 'dan brown', 'random house', 'english', 'thriller', 2009, 592, '4.7', '399.00', 'paperback', 'image/3.jpg', 6),
(978007527502, 'murder on the orient express', 'agatha christie', 'harper collins', 'english', 'thriller', 2017, 288, '4.5', '299.00', 'paperback', 'image/4.jpg', 10),
(9781447277491, 'no man\'s land', 'david baldacci', 'pan', 'english', 'thriller', 2017, 624, '4.2', '399.00', 'paperback', 'image/5.jpg', 8),
(9788179925911, 'the theory of everything', 'stephen hawking', 'jaico publishing house', 'english', 'autobiography', 2006, 140, '4.5', '199.00', 'paperback', 'image/6.jpg', 10),
(9788172344504, 'pride and predujice', 'jane austen', 'fingerprint publishing', 'english', 'fiction', 2013, 328, '4.3', '195.00', 'paperback', 'image/7.jpg', 10),
(9788173711466, 'wings of fire', 'apj abdul kalam', 'universities press', 'english', 'autobiography', 1999, 180, '4.6', '395.00', 'paperback', 'image/8.jpg', 10),
(9788172234980, 'the alchemist', 'paulo coelho', 'harper', 'english', 'fiction', 2005, 172, '4.6', '350.00', 'paperback', 'image/9.jpg', 9),
(9788179921623, 'the monk who sold his ferrari', 'robin sharma', 'jaico publishing house', 'english', 'self help', 2003, 198, '4.5', '199.00', 'paperback', 'image/10.jpg', 10),
(9788192910963, 'power of your subconscious mind', 'dr joseph murphy', 'amazing reads', 'engish', 'self help', 2015, 312, '4.5', '199.00', 'paperback', 'image/11.jpg', 10),
(9788179922323, 'who will cry when you die?', 'robin sharma', 'jaico publishing house', 'english', 'self help', 2006, 256, '4.4', '175.00', 'paperback', 'image/12.jpg', 10),
(9788172345198, 'the diary of a young girl', 'anne frank', 'finger print publishing', 'english', 'autobiography', 2014, 280, '4.4', '150.00', 'paperback', 'image/13.jpg', 10),
(9788175993280, 'the autoigraphy of benjamin franklin', 'banjamin franklin', 'finger print', 'english', 'autobiography', 2015, 240, '4.1', '150.00', 'paperback', 'image/14.jpg', 10),
(9781408850251, 'the kite runner', 'khaled hosseini', 'bloomsbury', 'english', 'fiction', 2013, 343, '4.5', '499.00', 'paperback', 'image/15.jpg', 10),
(9780099549482, 'to kill a mocking bird', 'harper lee', 'rhuk', 'english', 'fiction', 2010, 320, '4.4', '399.00', 'paperback', 'image/16.jpg', 10),
(9789380349725, 'the one from the stars', 'keshav aneel', 'srishti publishers', 'english', 'romance', 2017, 160, '4.8', '175.00', 'paperback', 'image/17.jpg', 10),
(9780141345659, 'the fault in our stars', 'john green', 'penguin', 'english', 'romance', 2013, 316, '4.5', '399.00', 'paperback', 'image/18.jpg', 10),
(9789384898403, 'paper towns', 'john green', 'bloomsbury', 'english', 'romance', 2001, 213, '4.2', '499.00', 'paperback', 'image/19.jpg', 10),
(9780141439600, 'a tale of two cities', 'charles dickens', 'penguin', 'english', 'fiction', 2003, 54497, '4.0', '250.00', 'paperback', 'image/20.jpg', 10),
(9780007273508, 'the lord of the rings', 'j r r tolkien', 'harpercollins', 'english', 'fiction', 2007, 1216, '4.4', '999.00', 'paperback', 'image/21.jpg', 10),
(9780008123208, 'and then there were none', 'agatha christie', 'harper collins', 'english', 'thriller', 2017, 256, '4.6', '299.00', 'paperback', 'image/22.jpg', 10),
(9780552161237, 'the lost symbol', 'dan brown', 'rhuk', 'english', 'thriller', 2010, 672, '4.4', '399.00', 'paperback', 'image/23.jpg', 10),
(9788175992832, 'war and peace', 'leo tolstoy', 'fingerprint', 'english', 'fiction', 2015, 1232, '4.3', '450.00', 'paperback', 'image/24.jpg', 10),
(9789380005744, 'black beauty', 'anna sewell', 'maple press', 'english', 'fiction', 2014, 160, '4.0', '125.00', 'paperback', 'image/25.jpg', 10),
(9788175992917, 'the adventures of tom sawyer', 'mark twain', 'fingerprint', 'english', 'fiction', 2015, 248, '4.4', '199.00', 'paperback', 'image/26.jpg', 10),
(9781473684584, 'the reckoning', 'john grisham', 'hodder and stoughton', 'english', 'thriller', 2018, 512, '4.3', '399.00', 'paperback', 'image/27.jpg', 10),
(9781473695986, 'brief answers to big questions', 'stephen hawking', 'john murray', 'english', 'autobiography', 2018, 256, '4.9', '650.00', 'hardcover', 'image/28.jpg', 10),
(9781509899524, 'heads you win', 'jeffrey archer', 'pan', 'english', 'fiction', 2018, 480, '4.6', '399.00', 'paperback', 'image/29.jpg', 10),
(978008321291, 'the mystery of three quarters', 'sophie hannah', 'harper collins', 'english', 'thriller', 2018, 400, '3.7', '399.00', 'paperback', 'image/30.jpg', 10),
(9780547854967, 'elevation', 'stephen king', 'hodder and stoughton', 'english', 'horror', 2018, 160, '4.2', '499.00', 'hardcover', 'image/31.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` varchar(20) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `isbn`, `qty`, `price`) VALUES
('6', '9780593078754', 1, 799),
('3', '978007527502', 1, 299),
('3', '9780552161268', 1, 399),
('4', '9780593078754', 1, 799),
('6', '9781447277491', 1, 399),
('7', '9780593078754', 1, 799),
('7', '9781447277491', 1, 399);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'thriller'),
(2, 'fiction'),
(3, 'autobiography'),
(4, 'self help'),
(5, 'romance');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrivals`
--

CREATE TABLE `new_arrivals` (
  `isbn_no` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_arrivals`
--

INSERT INTO `new_arrivals` (`isbn_no`) VALUES
(978008321291),
(9780547854967),
(9781473684584),
(9781473695986),
(9781509899524);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `transaction_id` int(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`transaction_id`, `product_id`, `qty`, `amount`) VALUES
(50842, 9780552161268, 1, 399),
(55758, 9780552161268, 1, 399),
(55758, 9780552161275, 1, 399),
(70387, 9780593078754, 1, 799),
(72540, 9780593078754, 1, 799),
(74565, 9780552161275, 1, 399),
(74565, 9780593078754, 1, 799),
(74565, 9781447277491, 1, 399),
(80413, 9780552161268, 1, 399),
(80413, 9780593078754, 1, 799),
(94887, 9780552161275, 1, 399),
(94887, 9788172234980, 1, 350);

--
-- Triggers `orders`
--
DELIMITER $$
CREATE TRIGGER `upd_books_info` AFTER INSERT ON `orders` FOR EACH ROW UPDATE books_info
SET books_info.Quantity=books_info.Quantity-new.qty
WHERE books_info.isbn_no=new.product_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `user_id` varchar(10) NOT NULL,
  `isbn_no` bigint(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `author` varchar(150) NOT NULL,
  `publisher` varchar(150) NOT NULL,
  `language` varchar(150) NOT NULL,
  `genre` varchar(150) NOT NULL,
  `edition` varchar(11) NOT NULL,
  `pages` varchar(11) NOT NULL,
  `rating` varchar(11) NOT NULL,
  `price` varchar(10) NOT NULL,
  `binding` varchar(100) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `Quantity` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`user_id`, `isbn_no`, `title`, `author`, `publisher`, `language`, `genre`, `edition`, `pages`, `rating`, `price`, `binding`, `picture`, `Quantity`) VALUES
('0', 0, '', '', '', '', '', '0', '0', '0.0', '0.00', '', '', '0'),
('1', 11212345678, 'ss', 'ss', 'ss', 'english', 'fiction', '2225', '212', '12221', '320', 'sjjjj', 'image/IMG20180927140823.jpg', '23'),
('1', 1121234567895, 'ss', 'ss', 'pen', 'english', 'fiction', '2225', '212', '12221', '320', 'sjjjj', 'image/off.png', '23'),
('1', 1234569874587, 'origin2', 'dan brown', 'penguine', 'english', 'fiction', '2015', '321', '4.2', '299', 'harcover', 'image/32.jpg', '3'),
('1', 11212345678234, 'ss', 'ss', 'ss', 'english', 'fiction', '2225', '212', '12221', '320', 'sjjjj', 'image/IMG20180927140823.jpg', '23'),
('1', 112123456789545, 'cssasa', 'dd', 'ss', 'english', 'fiction', '2225', '212', '12221', '32', 'sjjjj', 'image/off.png', '23'),
('2', 0, 'ertfg0', 'ertyu', 'ertyu', 'sdfghj', 'sdcvbn', 'shjm', 'shj', 'sdftghj', 'xdfghj', 'dfgh', 'dfghj', 'dfghj'),
('2', 112, 'cssasa', 'dd', 'sas', 'english', 'fiction', '2225', '111', '5', '320', 'sjjjj', 'image/on.png', '21'),
('2', 1121234567895, 'cssasa', 'sa', 'sas', 'english', 'fiction', '2225', '212', '1', '12', 'sjjjj', 'image/IMG20180927140823.jpg', '23'),
('8', 987456321456, 'Sapiens', 'Yuval Noah Harari', 'Penguin', 'English', 'Fiction', '2017', '524', '4.3', '499', 'Paperback', 'image/32.jpg', '10');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id`, `date`) VALUES
('74565', '8', '2018-11-27'),
('70387', '1', '2018-11-27'),
('80413', '1', '2018-11-27'),
('94887', '1', '2018-11-27'),
('50842', '1', '2018-11-27');

--
-- Triggers `transaction`
--
DELIMITER $$
CREATE TRIGGER `upd_after_order` AFTER INSERT ON `transaction` FOR EACH ROW DELETE FROM cart
WHERE cart.user_id=new.user_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'nikhil', 'jain', 'jainnikhil1998@gmail.com', '781e5e245d69b566979b86e28d23f2c7', 123456789, 'a', 'a'),
(2, 'qq', 'qq', 'qq@gmail.com', '781e5e245d69b566979b86e28d23f2c7', 123456789, 'q', 'a'),
(4, 'dddddssssaaaa', 'aaaa', 'aaa@gmail.com', '781e5e245d69b566979b86e28d23f2c7', 123456789, 'bjkb', 'bbbkm'),
(5, 'hbb', 'bkjnk', 'yvhj@gmail.com', '18b5e7f90bd4816668f3cc5abdfda992', 1234567891, 'jh ', 'khnm'),
(6, 'a', 'a', 'a@gmail.com', '9ff8f84261a294c3a4aa363f99d7b968', 2147483647, 'as', 'as'),
(7, 'test', 'test', 'test@gmail.com', 'cee5ad84c76091a6c1bf50e9d2c1008b', 2147483647, 'qwertyui', 'qwertyuik'),
(8, 'Rishav', 'Ray', 'ray@gmail.com', '85064efb60a9601805dcea56ec5402f7', 2147483647, 'hall 4', 'Jbp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestseller`
--
ALTER TABLE `bestseller`
  ADD PRIMARY KEY (`isbn_no`);

--
-- Indexes for table `books_info`
--
ALTER TABLE `books_info`
  ADD PRIMARY KEY (`isbn_no`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`isbn`);

--
-- Indexes for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  ADD PRIMARY KEY (`isbn_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`transaction_id`,`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`user_id`,`isbn_no`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
