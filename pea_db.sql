-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2019 at 12:44 PM
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
-- Table structure for table `bets`
--

CREATE TABLE `bets` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_leagues_matches` int(11) NOT NULL,
  `score_home` int(11) NOT NULL,
  `score_away` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_creator` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `id_creator`, `code`, `message`) VALUES
(31, 'felixligue', 33, 'felixcode', 'felixmessage'),
(32, 'colineligue', 34, 'colinecode', 'colinemessage'),
(33, 'diegoligue', 35, 'diegocode', 'diegomessage');

-- --------------------------------------------------------

--
-- Table structure for table `league_matches`
--

CREATE TABLE `league_matches` (
  `id` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `id_match` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `league_matches`
--

INSERT INTO `league_matches` (`id`, `id_league`, `id_match`) VALUES
(66, 31, 239308),
(67, 31, 239304),
(68, 31, 239306),
(69, 31, 239265),
(70, 32, 239308),
(71, 32, 239309),
(72, 32, 239265),
(73, 32, 239316),
(74, 32, 239318),
(75, 33, 248096),
(76, 33, 248111),
(77, 33, 248104);

-- --------------------------------------------------------

--
-- Table structure for table `league_users`
--

CREATE TABLE `league_users` (
  `id` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `league_users`
--

INSERT INTO `league_users` (`id`, `id_league`, `id_users`) VALUES
(21, 31, 33),
(22, 31, 34),
(23, 32, 34),
(24, 33, 35),
(25, 31, 35);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `id_matches` int(11) NOT NULL,
  `home_team` varchar(255) NOT NULL,
  `away_team` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `id_matches`, `home_team`, `away_team`, `date`) VALUES
(109, 239308, 'Dijon Football Côte d\'Or', 'Amiens SC', '2019-04-12T17:00:00Z'),
(110, 239304, 'Olympique de Marseille', 'Nîmes Olympique', '2019-04-13T15:00:00Z'),
(111, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z'),
(112, 239265, 'FC Nantes', 'Paris Saint-Germain FC', '2019-04-17T17:00:00Z'),
(113, 239309, 'RC Strasbourg Alsace', 'En Avant Guingamp', '2019-04-13T18:00:00Z'),
(114, 239316, 'Dijon Football Côte d\'Or', 'Stade Rennais FC 1901', '2019-04-20T18:00:00Z'),
(115, 239318, 'RC Strasbourg Alsace', 'Montpellier HSC', '2019-04-20T18:00:00Z'),
(116, 248096, 'AC Milan', 'SS Lazio', '2019-04-13T18:30:00Z'),
(117, 248111, 'Bologna FC 1909', 'UC Sampdoria', '2019-04-20T13:00:00Z'),
(118, 248104, 'Juventus FC', 'ACF Fiorentina', '2019-04-20T16:00:00Z');

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
(33, 'felix', 'felix@mail.fr', '9c69098d379350e157eff4ad93150662007b8fb2'),
(34, 'coline', 'coline@mail.fr', '91a170e95dbf734c38df395142f8557f16fe5634'),
(35, 'diego', 'diego@mail.fr', '8354336224c63279aadd00a9621757ef4fdf31fc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league_matches`
--
ALTER TABLE `league_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league_users`
--
ALTER TABLE `league_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
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
-- AUTO_INCREMENT for table `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `league_matches`
--
ALTER TABLE `league_matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
