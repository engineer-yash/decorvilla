-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decorvilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `addimage`
--

CREATE TABLE `addimage` (
  `id` int(255) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `event_type` varchar(80) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image_sr_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addimage`
--

INSERT INTO `addimage` (`id`, `image_path`, `event_type`, `price`, `image_sr_no`) VALUES
(15, '1.jpg', 'Wedding', '1,00,000 Rs.', 1),
(16, '2.jpg', 'Wedding', '70,000 Rs.', 2),
(17, '3.png', 'Wedding', '50,000 Rs.', 3),
(18, '4.jpg', 'Wedding', '70,000 Rs.', 4),
(77, '5.jpg', 'Wedding', '80,000 Rs.', 5),
(79, '1.jpg', 'Birthday', '50,000 Rs.', 1),
(85, '1.jpg', 'Reception', '1,00,000 Rs.', 1),
(86, '2.jpg', 'Reception', '40,000 Rs.', 2),
(87, '3.jpg', 'Reception', '30,000 Rs.', 3),
(88, '4.jpg', 'Reception', '50,000 Rs.', 4),
(91, '1.jpg', 'Dinner', '50,000 Rs.', 1),
(92, '2.jpg', 'Dinner', '30,000 Rs.', 2),
(93, '3.jpg', 'Dinner', '20,000 Rs.', 3),
(94, '4.jpg', 'Dinner', '10,000 Rs.', 4),
(95, '5.jpg', 'Dinner', '15,000 Rs.', 5),
(96, '6.jpg', 'Dinner', '10,000 Rs.', 6),
(97, '1.jpg', 'Path Way', '20,000 Rs.', 1),
(98, '2.jpg', 'Path Way', '10,000 Rs.', 2),
(99, '3.jpg', 'Path Way', '30,000 Rs.', 3),
(100, '4.jpg', 'Path Way', '15,000 Rs.', 4),
(101, '5.jpg', 'Path Way', '30,000 Rs.', 5),
(102, '6.jpg', 'Path Way', '10,000 Rs.', 6),
(103, '1.jpg', 'Car', '30,000 Rs.', 1),
(104, '2.jpg', 'Car', '20,000 Rs.', 2),
(105, '3.jpg', 'Car', '20,000 Rs.', 3),
(106, '4.jpg', 'Car', '30,000 Rs.', 4),
(107, '5.jpg', 'Car', '10,000 Rs.', 5),
(108, '6.jpg', 'Car', '15,000 Rs.', 6),
(109, '1.jpg', 'Music Night', '10,000 Rs.', 1),
(110, '2.jpg', 'Music Night', '20,000 Rs.', 2),
(111, '3.jpg', 'Music Night', '10,000 Rs.', 3),
(112, '4.jpg', 'Music Night', '15,000 Rs.', 4),
(113, '5.jpg', 'Music Night', '30,000 Rs.', 5),
(114, '6.jpg', 'Music Night', '10,000 Rs.', 6),
(115, '1.jpg', 'Dance Flore', '10,000 Rs.', 1),
(116, '2.jpg', 'Dance Flore', '30,000 Rs.', 2),
(117, '3.jpg', 'Dance Flore', '20,000 Rs.', 3),
(118, '4.jpg', 'Dance Flore', '10,000 Rs.', 4),
(119, '5.jpg', 'Dance Flore', '20,000 Rs.', 5),
(120, '6.jpg', 'Dance Flore', '40,000 Rs.', 6),
(121, '1.jpg', 'Water Party', '50,000 Rs.', 1),
(122, '2.jpg', 'Water Party', '40,000 Rs.', 2),
(123, '3.jpg', 'Water Party', '50,000 Rs.', 3),
(124, '4.jpg', 'Water Party', '40,000 Rs.', 4),
(125, '5.jpg', 'Water Party', '30,000 Rs.', 5),
(126, '6.jpg', 'Water Party', '20,000 Rs.', 6),
(127, '5.jpg', 'Reception', '90,000 Rs.', 5),
(128, '6.jpg', 'Reception', '30,000 Rs.', 6),
(129, '2.jpg', 'Birthday', '40,000 Rs.', 2),
(130, '3.jpg', 'Birthday', '60,000 Rs.', 3),
(131, '4.jpg', 'Birthday', '50,000 Rs.', 4),
(132, '5.jpeg', 'Birthday', '40,000 Rs.', 5),
(133, '6.jpg', 'Birthday', '30,000 Rs.', 6),
(146, '6.jpg', 'Wedding', '40,000 Rs.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`id`, `user_name`, `password`) VALUES
(4, 'DecorVilla', 'DecorVilla');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `first_name`, `last_name`, `message`) VALUES
(1, 'Monika', 'Savsani', 'verry Nice Decoration...'),
(2, 'Shivu', 'Javiya', 'Best Decoration...'),
(4, 'Charmee', 'Unjiya', 'Verry Nice...'),
(7, 'Priya', 'Dharsandiya', 'Verry Osam...'),
(8, 'mona', 'ratanpara', 'verry beautifull ...'),
(9, 'Charmee', 'Unjiya', ' jnjn');

-- --------------------------------------------------------

--
-- Table structure for table `ordera`
--

CREATE TABLE `ordera` (
  `id` int(100) NOT NULL,
  `event_type` varchar(80) NOT NULL,
  `event_date` int(80) NOT NULL,
  `image_sr_no` int(80) NOT NULL,
  `your_budget` varchar(80) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_person_name` varchar(80) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordera`
--

INSERT INTO `ordera` (`id`, `event_type`, `event_date`, `image_sr_no`, `your_budget`, `address`, `contact_person_name`, `contact_no`) VALUES
(1, 'Reception', 10, 5, '90,000 Rs.', 'Silver Revliya,\r\nRajkot.', 'Sanjay Savsani', '9876543210'),
(2, 'Wedding', 6, 3, '50,000 Rs.', 'Silver Art,\r\nRajkot', 'Sanjay Unjiya', '9638527410'),
(3, 'Birthday', 29, 2, '40,000 Rs.', 'Sun Shine,\r\nRajkot.', 'Nitin Ratanpara', '9517538520'),
(4, 'wedding', 10, 1, '100000', 'bhuwijjdwid', 'charmee', '9099582522'),
(5, 'birthday', 10, 2, '100000', 'jamjodhpur', 'charmee', '9099582522'),
(6, 'water party', 19, 1, '50000', 'jamjodhpur', 'tirth', '9427278884'),
(7, 'birthday', 10, 1, '100000', 'jamjodhpur', 'charmee', '9099582522');

-- --------------------------------------------------------

--
-- Table structure for table `paynow`
--

CREATE TABLE `paynow` (
  `id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `add_line` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `exp_month` int(100) NOT NULL,
  `exp_year` int(100) NOT NULL,
  `cvv` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paynow`
--

INSERT INTO `paynow` (`id`, `location`, `full_name`, `address`, `add_line`, `city`, `state`, `zip`, `phone`, `email`, `card_no`, `exp_month`, `exp_year`, `cvv`) VALUES
(1, 'India', 'Sanjay Savsani', 'Silver Revliya', 'Rajkot', 'Rajkot', 'Gujarat', 9999, '91+9876543210', 'sanjay@gmail.com', '6666444455553333', 10, 2019, 1000),
(2, 'India', 'Sanjay Unjiya', 'Silver Art', 'Rajkot', 'Rajkot', 'Gujarat', 9632, '91+9638527410', 'sanjay@gmail.com', '6543521442563256', 11, 2019, 9999),
(3, 'India', 'Nitin Ratanpara', 'Sun Shine', 'Rajkot', 'Rajkot', 'Gujarat', 9512, '91+9517538520', 'nitin@gmail.com', '6668555344493332', 9, 2019, 8520),
(4, 'india', 'charmee', 'jamjodhpur', 'ramvadi 3, street no.1 ', 'jamjodhpur', 'gujrat', 360530, '9427248888', 'vishvunjiya3058822@gmail.com', '8888254525462578', 12, 2020, 564),
(5, 'india', 'charmee', 'jamjodhpur', 'ramvadi 3, street no.1 ', 'jamjodhpur', 'gujrat', 360530, '9427248888', 'vishvunjiya3058822@gmail.com', '8888254525462578', 12, 2020, 564),
(6, 'india', 'tirth', 'jamjodhapur', 'ramvadi 3, street no.1 ', 'jamjodhpur', 'gujrat', 360530, '9427248888', 'vishvunjiya3058822@gmail.com', '8888254525462578', 12, 2020, 564),
(7, 'india', 'charmee', 'jamjodhpur', '', 'jamjodhpur', 'gujrat', 360530, '9427248888', 'vishvunjiya3058822@gmail.com', '8888254525462578', 12, 2020, 564);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirg_password` varchar(10) NOT NULL,
  `email_id` varchar(80) NOT NULL,
  `mobile_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `user_name`, `password`, `confirg_password`, `email_id`, `mobile_no`) VALUES
(61, 'vishv unjiya', 'vishv', 'vishv', 'vishv', 'vishv@gmail.com', '9427248888'),
(62, 'darship lakhani', 'darship', 'darship', 'darship', 'darship@gmail.com', '1234567890'),
(64, 'yash gohel', 'yash', 'yash', 'yash', 'yash@gmail.com', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `id` int(225) NOT NULL,
  `email_id` varchar(500) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_question`
--

INSERT INTO `user_question` (`id`, `email_id`, `question`) VALUES
(1, 'nishisavsani@gmail.com', 'Which Royal Decoration we can follow in 5,00,000 Rs. budget...Please kindly sugges me...'),
(2, 'vishvunjiya@gmail.com', 'which decoration is verry osam with real flower in 3,00,000 Rs. budget...'),
(4, 'krishratanpara@gmail.com', 'Which decoration is verry usefull in dinnerparty but in 1,00,000 Rs. budget...'),
(5, 'heet@gmail.com', 'gvhh'),
(6, 'charmee@gmail.com', 'i have a Question.'),
(7, 'charmee@gmail.com', 'how long how you finished ???'),
(8, 'charmee@gmail.com', 'huj'),
(9, 'yash@gmail.com', 'login page can not open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addimage`
--
ALTER TABLE `addimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_login`
--
ALTER TABLE `a_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordera`
--
ALTER TABLE `ordera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paynow`
--
ALTER TABLE `paynow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `user_question`
--
ALTER TABLE `user_question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addimage`
--
ALTER TABLE `addimage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `a_login`
--
ALTER TABLE `a_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordera`
--
ALTER TABLE `ordera`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paynow`
--
ALTER TABLE `paynow`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_question`
--
ALTER TABLE `user_question`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
