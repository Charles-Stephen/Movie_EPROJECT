-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 08:07 AM
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
  `title_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adult_package`
--

INSERT INTO `adult_package` (`id`, `title_id`, `price`) VALUES
(1, 1, 700),
(2, 2, 1000),
(3, 3, 1200);

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
(4, 'Men_in_Black_International_(Official_Film_Poster).png', 'Men in Black: International', 'https://www.youtube.com/watch?v=NoSrm2HoDXE', 'The Men in Black have expanded to cover the globe but so have the villains of the universe. To keep everyone safe, decorated Agent H and determined rookie M join forces -- an unlikely pairing that just might work. When aliens that can take the form of any human arrive on Earth, H and M embark on a globe-trotting adventure to save the agency -- and ultimately the world -- from their mischievous plans.', 'Action, Comedy, Science fiction', 'United States', 'Chris Hemsworth, Tessa Thompson, Rebecca Ferguson, Kumail Nanjiani, Rafe Spall, Laurent Bourgeois, Larry Bourgeois, Emma Thompson, Liam Neeson'),
(5, 'd.jpg', '3 Idiots', 'https://www.youtube.com/watch?v=LYOX4QTxTA4', 'In college, Farhan and Raju form a great bond with Rancho due to his positive and refreshing outlook to life. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.', 'Comedy, Romance, Drama, Coming-of-age story', 'India', '	\nAamir Khan, R. Madhavan, Sharman Joshi, Omi Vaidya, Kareena Kapoor, Boman Irani'),
(6, 'Capture.jpg', 'Housefull 3', 'https://www.youtube.com/watch?v=TlZM9kuqw38', 'A father doesn\'t want his three daughters to get married. Three men try to convince the father that they\'re a good fit for his daughters, which leads to hilarious situations.', 'Action, Comedy, Romance', 'India', 'Akshay Kumar, Abhishek Bachchan, Riteish Deshmukh, Jacqueline Fernandez, Nargis Fakhri, Lisa Haydon, Jackie Shroff'),
(7, '751439158406x600_38.jpg', 'Train To Busan 2016', 'https://www.youtube.com/watch?v=1ovgxN2VWNc', 'A man (Gong Yoo), his estranged daughter and other passengers become trapped on a speeding train during a zombie outbreak in South Korea.', 'Zombie, Horror, Action, Thriller, Disaster, Adventure, Mystery, Drama', 'South Korea (English sub)', '	\r\nGong Yoo, Jung Yu-mi, Ma Dong-seok, Kim Su-an, Choi Woo-shik, Ahn So-hee, Kim Eui-sung'),
(8, 'kungfu.jpg', 'Kung Fu Panda', 'https://www.youtube.com/watch?v=PXi3Mv6KMzY', 'Po might just be the laziest, clumsiest panda in the Valley of Peace, but he secretly dreams of becoming a kung fu legend. When the villainous snow leopard Tai Lung threatens Po\'s homeland, the hapless panda is chosen to fulfil an ancient prophecy and defend the Valley from attack. Training under Master Shifu, Po embarks on an epic high-kicking adventure as he sets out to thwart Tai Lung\'s evil plans. A DreamWorks animation.', 'Action, Children\'s film, Comedy, Martial arts, Adventure, Animation, martial heroes', 'America', 'Jack Black, Dustin Hoffman, Angelina Jolie, Ian McShane, Seth Rogen, Lucy Liu, David Cross, Randall Duk Kim, James Hong, Dan Fogler, Michael Clarke Duncan, Jackie Chan'),
(9, 'pEvK2AoBnhC1RgqB7VRbBCMDq23.jpg', 'Rush Hour (1998 )', 'https://www.youtube.com/watch?v=JMiFsFQcFLE', 'When a Chinese diplomat\'s daughter is kidnapped in Los Angeles, he calls in Hong Kong Detective Inspector Lee (Jackie Chan) to assist the FBI with the case. But the FBI doesn\'t want anything to do with Lee, and they dump him off on the LAPD, who assign wisecracking Detective James Carter (Chris Tucker) to watch over him. Although Lee and Carter can\'t stand each other, they choose to work together to solve the case on their own when they figure out they\'ve been ditched by both the FBI and police.', 'Comedy, Action, Buddy Cop, Thriller, Crime Fiction', 'United States', 'Jackie Chan, Chris Tucker, Tzi Ma, Tom Wilkinson, Ken Leung, Elizabeth Peña, Mark Rolston, Rex Linn');

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
(2, 'Ellie', 'ellie@gmail.com', 'Complaint', 'The movie was behind the scheduled time'),
(4, 'Ali', 'a@gmail.com', 'Test', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `kids_package`
--

CREATE TABLE `kids_package` (
  `id` int(11) NOT NULL,
  `title_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kids_package`
--

INSERT INTO `kids_package` (`id`, `title_id`, `price`) VALUES
(1, 1, 350),
(2, 2, 500),
(3, 3, 600);

-- --------------------------------------------------------

--
-- Table structure for table `movie_sch2`
--

CREATE TABLE `movie_sch2` (
  `id` int(11) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_time_id` int(11) NOT NULL,
  `theater_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_sch2`
--

INSERT INTO `movie_sch2` (`id`, `movie_date`, `movie_time_id`, `theater_id`, `movie_id`, `total_seats`, `available_seats`) VALUES
(1, '2022-07-18', 1, 1, 4, 100, 100),
(2, '2022-07-18', 2, 1, 4, 100, 100),
(4, '2022-07-20', 2, 3, 4, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `movie_time`
--

CREATE TABLE `movie_time` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_time`
--

INSERT INTO `movie_time` (`id`, `time`) VALUES
(1, '9:00 am'),
(2, '11:30 am'),
(3, '2:00 pm'),
(4, '4:30 pm'),
(5, '7:00 pm'),
(6, '9:30 pm'),
(7, '12:00 am');

-- --------------------------------------------------------

--
-- Table structure for table `seat_catgory`
--

CREATE TABLE `seat_catgory` (
  `id` int(11) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_catgory`
--

INSERT INTO `seat_catgory` (`id`, `package`) VALUES
(1, 'Box'),
(2, 'Gold'),
(3, 'Platinum');

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
  `movie_sch2_Id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL
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
-- Indexes for table `movie_sch2`
--
ALTER TABLE `movie_sch2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_time`
--
ALTER TABLE `movie_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_catgory`
--
ALTER TABLE `seat_catgory`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `allmovies`
--
ALTER TABLE `allmovies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kids_package`
--
ALTER TABLE `kids_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie_sch2`
--
ALTER TABLE `movie_sch2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movie_time`
--
ALTER TABLE `movie_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seat_catgory`
--
ALTER TABLE `seat_catgory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
