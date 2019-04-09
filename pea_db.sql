-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 09, 2019 at 01:08 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pea_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `name`, `id_creator`, `code`, `message`) VALUES
(1, 'hetic pronos', 5, 'yepa', 'yepa\r\n'),
(2, 'yo', 5, 'yo', 'yo'),
(3, 'nom', 5, 'code', 'message'),
(4, 'liguedeColine', 2, 'codedecoline', 'messagedeColline');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mail`, `password`) VALUES
(1, 'minou', 'felixskate@outlook.fr', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(2, 'coline', 'colinezer@hotmail.fr', '1bfbdf35b1359fc6b6f93893874cf23a50293de5'),
(4, 'coline', 'colinezer@yahoo.fr', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(5, 'felix', 'felixjguerin@outlook.fr', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(6, 'sam', 'sam@hotmail.fr', 'f8f626351f459ca25bc703e70e1dd5ab5cd48f36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `league`
--
ALTER TABLE `league`
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
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
