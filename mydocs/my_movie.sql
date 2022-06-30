-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 11:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adult_package`
--

CREATE TABLE `adult_package` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `allmovies`
--

CREATE TABLE `allmovies` (
  `id` int(11) NOT NULL,
  `movie_cover` varchar(255) NOT NULL,
  `movie_name` varchar(225) NOT NULL,
  `trailer` longtext NOT NULL,
  `movie_description` longtext NOT NULL,
  `genre` longtext NOT NULL,
  `country` varchar(255) NOT NULL,
  `cast` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allmovies`
--

INSERT INTO `allmovies` (`id`, `movie_cover`, `movie_name`, `trailer`, `movie_description`, `genre`, `country`, `cast`) VALUES
(4, 'Men_in_Black_International_(Official_Film_Poster).png', 'Men in Black: International', '<iframe width=\"1264\" height=\"480\" src=\"https://www.youtube.com/embed/BV-WEb2oxLk\" title=\"MEN IN BLACK: INTERNATIONAL - Official Trailer\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allow', 'The Men in Black have expanded to cover the globe but so have the villains of the universe. To keep everyone safe, decorated Agent H and determined rookie M join forces -- an unlikely pairing that just might work. When aliens that can take the form of any human arrive on Earth, H and M embark on a globe-trotting adventure to save the agency -- and ultimately the world -- from their mischievous plans.', 'Action, Comedy, Science fiction', 'United States', 'Chris Hemsworth, Tessa Thompson, Rebecca Ferguson, Kumail Nanjiani, Rafe Spall, Laurent Bourgeois, Larry Bourgeois, Emma Thompson, Liam Neeson'),
(5, 'download.jpg', '3 idiots', '<iframe width=\"1264\" height=\"480\" src=\"https://www.youtube.com/embed/K0eDlFX9GMc\" title=\"3 Idiots | OFFICIAL trailer #1 US/indian (2009)\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'In college, Farhan and Raju form a great bond with Rancho due to his positive and refreshing outlook to life. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.', 'Comedy, Romance, Drama, Coming-of-age story', 'India', 'Aamir Khan, R. Madhavan, Sharman Joshi, Omi Vaidya, Kareena Kapoor, Boman Irani');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ellie', 'ellie@gmail.com', 'Complaint', 'The movie was behind the scheduled time');

-- --------------------------------------------------------

--
-- Table structure for table `kids_package`
--

CREATE TABLE `kids_package` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie_schedule`
--

CREATE TABLE `movie_schedule` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `name`, `screen`, `seats`) VALUES
(1, 'Theater 1', 'Screen 1', 100),
(2, 'Theater 2', 'Screen 2', 100),
(3, 'Theater 3', 'Screen 3', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `adult_package_Id` int(11) NOT NULL,
  `kids_package_Id` int(11) NOT NULL,
  `movie_Id` int(11) NOT NULL,
  `ticket_No` varchar(225) NOT NULL,
  `movie_schedule_Id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `screening_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Credit_Card` varchar(25) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile`, `Name`, `Email`, `Pass`, `Phone`, `Credit_Card`, `user_type`) VALUES
(2, '1779765651.jpg', 'Infernape', 'infernape@gmail.com', '202cb962ac59075b964b07152d234b70', '03343427289', '123456789', 0),
(5, 'Overlord-Anime-Season-4-710x400.jpg', 'Ainz Ooal Gown', 'ainz@hotmail.com', '202cb962ac59075b964b07152d234b70', '03343427289', '987654321', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adult_package`
--
ALTER TABLE `adult_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allmovies`
--
ALTER TABLE `allmovies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_package`
--
ALTER TABLE `kids_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_schedule`
--
ALTER TABLE `movie_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adult_package`
--
ALTER TABLE `adult_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allmovies`
--
ALTER TABLE `allmovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kids_package`
--
ALTER TABLE `kids_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie_schedule`
--
ALTER TABLE `movie_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
