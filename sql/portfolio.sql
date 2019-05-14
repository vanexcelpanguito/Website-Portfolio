-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 02:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_name` varchar(255) NOT NULL,
  `msg_company` varchar(255) NOT NULL,
  `msg_email` varchar(255) NOT NULL,
  `msg_address` varchar(255) NOT NULL,
  `msg_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_name`, `msg_company`, `msg_email`, `msg_address`, `msg_message`) VALUES
(1, 'dale', 'mangosystem', 'mango2018@gmail.com', 'philippines', 'hello'),
(2, 'dale', 'mangosystem', 'mango2018@gmail.com', 'Dyan lang sa tabi', 'You\'re not hired!'),
(3, 'dale', 'mangosystem', 'mango2018@gmail.com', 'philippines', 'Hey pogi'),
(4, 'dsfasdfas', 'fsafadsf', 'vanexcel@email.com', 'fsadfasdfasdfa', 'wthat th ell'),
(5, 'dale', 'Lovelove Company', 'Lovelove@email.com', 'sa puso mo', 'asd'),
(6, 'dale', 'Lovelove Company', 'Lovelove@email.com', 'sa puso mo', 'asd'),
(7, 'dale', 'Lovelove Company', 'Lovelove@email.com', 'sa puso mo', 'asd'),
(8, 'dale', 'Lovelove Company', 'vanexcelpanguito@gmail.com', 'sa puso mo', 'asd'),
(9, 'dale', 'Lovelove Company', 'Lovelove@email.com', 'sa puso mo', 'asd'),
(10, 'Dale', 'Mango System', 'bk2o1.syndicates@gmail.com', 'Dyan lang sa tabi', 'Hey yo!'),
(11, 'Dale', 'Mango System', 'bk2o1.syndicates@gmail.com', 'Dyan lang sa tabi', 'Hey yo!'),
(12, 'lnfel', 'Great Company', 'lnfel.maiden@gmail.com', 'philippines', 'Wtf! it WORKS!!!!!!!!'),
(13, 'Van', 'Super Pogi', 'mpanguito@gmail.com', 'Pilapila', 'Panget mo super pogi ako');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
