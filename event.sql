-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 08:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Birthday '),
(2, 'Picnic '),
(3, 'Marriage ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `from` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category` int(11) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `creator`, `title`, `image`, `description`, `from`, `to`, `category`, `isActive`) VALUES
(27, 3, 'Perferendis sit zxdcfds', '5ec0bd2f68b3c4.32928108.jpg', 'Minima ea id impedisdfsdf', '2020-05-18 18:00:00', '1970-08-18 18:00:00', 2, 1),
(28, 3, 'Perferendis sit zxdcfds', '5ec0bd6d97e755.40684509.jpg', 'Minima ea id impedisdfsdf', '2020-05-15 18:00:00', '1970-08-24 18:00:00', 2, 1),
(29, 3, 'Quam ad quia ut beat', '5ec0bd834fc747.89879804.jpg', 'Omnis quasi mollitia', '2019-06-13 18:00:00', '2015-08-25 18:00:00', 2, 1),
(30, 3, 'Quam ad quia ut beat', '5ec0bd95ed5c04.18595297.jpg', 'Omnis quasi mollitia', '2019-06-19 18:00:00', '2020-07-25 18:00:00', 3, 1),
(31, 3, 'Repellendus Repelle', '5ec0bda2c40764.40949912.jpg', 'Hic et qui qui id ei', '1990-11-19 18:00:00', '1996-08-15 18:00:00', 2, 1),
(32, 3, 'Blanditiis nemo non ', '5ec0bdabeef0b3.44286722.jpg', 'Non sed praesentium ', '2006-12-22 18:00:00', '1997-05-08 18:00:00', 2, 1),
(33, 3, 'dftgd', '5ec0bdb53c1ef2.06358115.jpg', 'Non sed praesentium ', '2006-12-22 18:00:00', '1997-05-08 18:00:00', 2, 1),
(34, 3, 'dftgdzsdf', '5ec0bdc2b8dce5.83482029.jpg', 'Non sed praesentium ', '2006-12-22 18:00:00', '1997-05-08 18:00:00', 3, 1),
(35, 3, 'lRu5LnY6Km', '5ec0c4ae1ba5d9.58400846.jpg', 'lsNlSM3g6n', '2020-05-06 18:00:00', '2020-05-03 18:00:00', 2, 1),
(36, 10, 'New event', '5ec0c906c92ce7.86244763.jpg', 'New event ', '2020-05-17 18:00:00', '2020-05-17 18:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticetuser`
--

CREATE TABLE `ticetuser` (
  `userId` int(11) DEFAULT NULL,
  `ticketId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `booked` int(11) NOT NULL,
  `eventId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `price`, `total`, `booked`, `eventId`) VALUES
(8, 100, 20, 0, 27),
(9, 100, 20, 0, 28),
(10, 505, 21, 0, 29),
(11, 23, 21, 0, 30),
(12, 849, 85, 0, 31),
(13, 206, 81, 0, 32),
(14, 206, 81, 13, 33),
(15, 343, 81, 0, 34),
(16, 159476, 14069, 0, 35),
(17, 100, 20, 0, 36);

-- --------------------------------------------------------

--
-- Table structure for table `userevent`
--

CREATE TABLE `userevent` (
  `id` int(21) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `eventId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userevent`
--

INSERT INTO `userevent` (`id`, `userId`, `eventId`) VALUES
(15, 2, 33),
(16, 2, 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','manager','admin') DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` enum('male','famale','others') DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `firstName`, `lastName`, `email`, `password`, `gender`, `active`, `createdAt`) VALUES
(2, 'user', 'Test', 'Admin', 'user', 'user', 'male', 1, '2020-05-10 11:34:02'),
(3, 'manager', 'test', 'manager', 'manager', 'manager', 'male', 1, '2020-05-10 11:34:02'),
(4, 'admin', 'test', 'admin', 'admin', 'admin', 'male', 1, '2020-05-10 11:34:02'),
(10, 'manager', 'Sadat ', 'Jubayer ', 'sadatjubayer@gmail.com', '123456', 'male', 1, '2020-05-17 05:17:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `creator` (`creator`) USING BTREE;

--
-- Indexes for table `ticetuser`
--
ALTER TABLE `ticetuser`
  ADD KEY `ticketId` (`ticketId`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `userevent`
--
ALTER TABLE `userevent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userevent`
--
ALTER TABLE `userevent`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`creator`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

--
-- Constraints for table `ticetuser`
--
ALTER TABLE `ticetuser`
  ADD CONSTRAINT `ticetuser_ibfk_1` FOREIGN KEY (`ticketId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ticetuser_ibfk_2` FOREIGN KEY (`ticketId`) REFERENCES `ticket` (`id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`id`);

--
-- Constraints for table `userevent`
--
ALTER TABLE `userevent`
  ADD CONSTRAINT `userevent_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `userevent_ibfk_2` FOREIGN KEY (`eventId`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
