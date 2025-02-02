-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2025 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `title`, `description`, `image_path`) VALUES
(1, 'Bangkok, Thailand', 'A city full of energy, known for its temples.', 'Bangkok.jpg'),
(2, 'Phi Phi Islands, Thailand', 'Tropical beaches and stunning nature for a peaceful getaway.', 'Thailand.jpg'),
(3, 'Mount Fuji, Japan', 'A symbol of peace and Japanese culture, ideal for adventurers.', 'japan.jpg'),
(4, 'Dubai, UAE', 'A modern city with the tallest buildings and luxurious experiences.', 'Dubai.jpg'),
(5, 'Venice, Italy', 'A magical city built on canals, rich in art and history.', 'Venecia1.jpg'),
(6, 'Semporna, Malaysia', 'Famous for its crystal-clear waters and stunning marine life.', 'Semporna.jpg'),
(7, 'Barcelona, Spain', 'Known for its unique architecture, beaches, and vibrant culture.', 'Barcelona.jpg'),
(8, 'Hawaii, USA', 'A tropical paradise with golden beaches and crystal-clear waters.', 'Hawai.jpg'),
(9, 'Beijing, China', 'A historic city rich in culture, home to the Great Wall of China.', 'Beijing.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
