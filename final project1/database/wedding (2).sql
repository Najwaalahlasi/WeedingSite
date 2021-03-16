-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `ssn` int(11) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `manager_email` text NOT NULL,
  `phone_number` int(11) NOT NULL,
  `privilage_id` int(11) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`ssn`, `manager_name`, `manager_email`, `phone_number`, `privilage_id`, `Password`) VALUES
(11, 'eeee', 'ssss@gmail.com', 33333333, 222, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `party_leader`
--

CREATE TABLE `party_leader` (
  `id` int(11) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `party_country` varchar(255) NOT NULL,
  `party_city` varchar(255) NOT NULL,
  `party_street` varchar(255) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `privalage`
--

CREATE TABLE `privalage` (
  `per_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privalage`
--

INSERT INTO `privalage` (`per_id`) VALUES
(222);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `propaganda` varchar(250) NOT NULL,
  `kind_product` varchar(255) NOT NULL,
  `booking_status` tinyint(1) NOT NULL,
  `year_booking` int(11) NOT NULL,
  `month_booking` int(11) NOT NULL,
  `day_booking` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(250) NOT NULL,
  `propaganda` varchar(250) NOT NULL,
  `kind_product` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_product`, `propaganda`, `kind_product`, `price`, `image`, `userid`) VALUES
(1, 'kkkkkkkkkk', 'nnnnnnnnnn', 'mmmmmmmmmmmm', 200, '', 1),
(13, 'nnnnnnnnnnnnnnnnnnn', 'Yemen', 'wwwww', 2000, 'a4.jpg', 1),
(14, 'nnnnnnnnnnnnnnnnnnn mmmmmmmmmmmmm', 'Yemen', 'wwwww', 0, ' 4.png', 1),
(15, 'nnnnnnnnnnnnnnnnnnn mmmmmmmmmmmmm', 'Yemen', 'wwwww', 0, ' 4.png', 1),
(16, 'nnnnnnnnnnnnnnnnnnn mmmmmmmmmmmmm', 'Yemen', 'wwwww', 0, ' 4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `staus` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `staus`) VALUES
(1, 'erty', 456, 'tree', 'ghjkl', 0),
(5, 'ggghtttttt', 123456789, 'karama', 'alawi', 1),
(6, 'kjljl', 12345, 'rania', 'alasbahi', 0),
(7, 'hhhhhhhhhhhhhhh', 1775, 'price', 'rrrrrrrrrr', 1),
(8, 'hhhhhhhhhhhhhhh', 1775, 'price', 'rrrrrrrrrr', 1),
(9, 'kk2', 123456, 'karama', 'alawi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `weeding_halls`
--

CREATE TABLE `weeding_halls` (
  `id` int(11) NOT NULL,
  `hall_name` varchar(255) NOT NULL,
  `hall_country` varchar(255) NOT NULL,
  `hall_city` varchar(255) NOT NULL,
  `hall_street` varchar(255) NOT NULL,
  `ManagerID` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weeding_halls`
--

INSERT INTO `weeding_halls` (`id`, `hall_name`, `hall_country`, `hall_city`, `hall_street`, `ManagerID`, `image`, `Details`) VALUES
(341, 'farha omer', 'Yemen', 'taiz', 'sexteen street', 11, '', '.......'),
(342, 'wwwjnjkkm', 'wwwwkkkk', 'www', 'www', 0, '', '11'),
(344, 'alahlam', 'Yemen', 'sanaa', 'hael', 0, '', '11'),
(346, 'althuraia', 'Yemen', 'sanaa', 'hael', 0, '', '11'),
(357, 'zahra ahqaser', 'yemen', 'sanaa', 'hada', 0, '', 'it is fantastic hall'),
(361, 'KAWAN', 'Yemen', 'sanaa', 'SUNAINA', 11, '', 'it is fantastic hall'),
(374, 'noor', 'yemen', 'sanaa', 'alraqas', 0, '', 'eee'),
(384, 'sama', '', '', '', 0, '', ''),
(395, 'salma', 'Yemen', 'sanaa', 'hael', 0, '', 'eee'),
(407, 'sima', 'yemen', 'sanaa', 'shamlan', 0, '', 'wow!'),
(408, 'as', 'er', 'wwwwww', 'q', 0, '', 'iii'),
(433, 'ddff', 'ddkjnjjhjhjhhj', 'ee', 'eee', 11, '', 'jhjhjhj'),
(435, 'alameera', 'yemen', 'taiz', 'jamal', 11, 'm3.png', 'this is hall beutiful....'),
(437, 'almaleka', 'Yemen', 'sanaa', 'hael', 11, ' choose-us-image-01.png', 'malika.......'),
(439, 'bbbbbbbbb', 'kkk', 'yuio', 'dfghjk', 11, ' m1.jpg', 'asdfgvbhnm'),
(440, 'wwwwwwwwwwwwwwww', 'Yemen', 'taiz', 'jamal', 11, 'a1.jpg', 'this is beutiful'),
(442, 'ttttr', 'hhhhh', 'bbbb', 'mmmmm', 11, '', 'ggggg'),
(443, 'sdfds', 'Yemen', 'sanaa', 'hael', 11, ' m2.jpg', 'rrrrrrrrrrrrrrrrrrrr'),
(444, 'kkkkkkkkkkkkkkkkkkkkkkkk', 'Yemen', 'sanaa', 'alrebat', 11, ' a1.jpg', 'wow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`ssn`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `manager_email` (`manager_email`) USING HASH,
  ADD KEY `privalageSite` (`privilage_id`);

--
-- Indexes for table `party_leader`
--
ALTER TABLE `party_leader`
  ADD PRIMARY KEY (`id`),
  ADD KEY `party_name` (`party_name`),
  ADD KEY `manage` (`manager_id`);

--
-- Indexes for table `privalage`
--
ALTER TABLE `privalage`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_product` (`name_product`),
  ADD KEY `producting` (`userID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeding_halls`
--
ALTER TABLE `weeding_halls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hall_name` (`hall_name`),
  ADD KEY `manages` (`ManagerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `party_leader`
--
ALTER TABLE `party_leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privalage`
--
ALTER TABLE `privalage`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `weeding_halls`
--
ALTER TABLE `weeding_halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `privalageSite` FOREIGN KEY (`privilage_id`) REFERENCES `privalage` (`per_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `party_leader`
--
ALTER TABLE `party_leader`
  ADD CONSTRAINT `manage` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`ssn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `producting` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `weeding_halls`
--
ALTER TABLE `weeding_halls`
  ADD CONSTRAINT `manages` FOREIGN KEY (`ManagerID`) REFERENCES `managers` (`ssn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
