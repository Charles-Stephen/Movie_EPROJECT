-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 08:15 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
(4, 'Men_in_Black_International_(Official_Film_Poster).png', 'Men in Black: International', 'MEN IN BLACK_ INTERNATIONAL.mp4', 'The Men in Black have expanded to cover the globe but so have the villains of the universe. To keep everyone safe, decorated Agent H and determined rookie M join forces -- an unlikely pairing that just might work. When aliens that can take the form of any human arrive on Earth, H and M embark on a globe-trotting adventure to save the agency -- and ultimately the world -- from their mischievous plans.', 'Action, Comedy, Science fiction', 'United States', 'Chris Hemsworth, Tessa Thompson, Rebecca Ferguson, Kumail Nanjiani, Rafe Spall, Laurent Bourgeois, Larry Bourgeois, Emma Thompson, Liam Neeson'),
(5, 'download.jpg', '3 idiots', '3 Idiots.mp4', 'In college, Farhan and Raju form a great bond with Rancho due to his positive and refreshing outlook to life. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.', 'Comedy, Romance, Drama, Coming-of-age story', 'India', 'Aamir Khan, R. Madhavan, Sharman Joshi, Omi Vaidya, Kareena Kapoor, Boman Irani'),
(6, 'dk.jpg', 'Housefull 3', 'Housefull 3 Official Trailer _ Watch Full Movie On Eros Now.mp4', 'A father doesn\'t want his three daughters to get married. Three men try to convince the father that they\'re a good fit for his daughters, which leads to hilarious situations.', 'Action, Romance, Comedy', 'India', 'Akshay Kumar, Abhishek Bachchan, Riteish Deshmukh, Jacqueline Fernandez, Nargis Fakhri, Lisa Haydon, Jackie Shroff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allmovies`
--
ALTER TABLE `allmovies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allmovies`
--
ALTER TABLE `allmovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
