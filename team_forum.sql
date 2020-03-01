-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 06:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `post_id` int(100) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `created_time` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `sub_post` mediumtext NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_time` varchar(50) NOT NULL,
  `assigned_to` varchar(50) NOT NULL,
  `rating` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `sub_post`, `created_by`, `created_time`, `assigned_to`, `rating`) VALUES
(23, 'qqqqq', 'sdsdsdsdsds', 'raghulrage@gmail.com', '2020/02/29', 'raghulrage@gmail.com', '0'),
(33, 'super', 'nice', 'raghulrage@gmail.com', '2020/03/01', '', '0'),
(34, 'dfasdasd', 'sdsdsdsdsds', 'raghulrage@gmail.com', '2020/03/01', '', '0'),
(35, '', '', 'raghulrage@gmail.com', '2020/03/01', '', '0'),
(36, '', '', 'raghulrage@gmail.com', '2020/03/01', '', '0'),
(37, '', '', 'raghulrage@gmail.com', '2020/03/01', 'All', '0'),
(38, '', '', 'raghulrage@gmail.com', '2020/03/01', 'All', '0'),
(39, '', '', 'raghulrage@gmail.com', '2020/03/01', 'All', '0'),
(40, 'dfasdasd', 'sdsdsdsdsds', 'raghulrage@gmail.com', '2020/03/01', 'ajeeth@gmail.com', '0'),
(41, '', '', 'raghulrage@gmail.com', '2020/03/01', 'ajeeth@gmail.com', '0'),
(42, '', '', 'raghulrage@gmail.com', '2020/03/01', 'ajeeth@gmail.com', '0'),
(43, '', '', 'raghulrage@gmail.com', '2020/03/01', '', '0'),
(44, '', '', 'raghulrage@gmail.com', '2020/03/01', 'All', '0'),
(45, '', '', 'raghulrage@gmail.com', '2020/03/01', 'ajeeth@gmail.com', '0'),
(46, '', '', 'raghulrage@gmail.com', '2020/03/01', 'ajeeth@gmail.com', '0'),
(47, '', '', 'raghulrage@gmail.com', '2020/03/01', 'All', '0'),
(48, '', '', 'raghulrage@gmail.com', '2020/03/01', 'All', '0'),
(49, '', '', 'raghulrage@gmail.com', '01/03/2020', 'All', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`) VALUES
(15, 'Raghul T', 'raghulrage@gmail.com', '123'),
(25, 'Ajeeth', 'ajeeth@gmail.com', '12345'),
(26, 'sam', 'sam@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
