-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2019 at 06:56 PM
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
  `id_league` int(11) NOT NULL,
  `id_leagues_matches` int(11) NOT NULL,
  `score_home` int(11) NOT NULL,
  `score_away` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bets`
--

INSERT INTO `bets` (`id`, `id_users`, `id_league`, `id_leagues_matches`, `score_home`, `score_away`) VALUES
(23, 33, 38, 88, 1, 2),
(24, 33, 38, 89, 3, 3),
(25, 33, 38, 90, 3, 5),
(26, 33, 38, 91, 4, 4);

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
(33, 'diegoligue', 35, 'diegocode', 'diegomessage'),
(34, 'diegoligue2', 35, 'diegocode2', 'diegocode2'),
(35, 'felixligue3', 33, 'felixcode3', 'felixmessage3'),
(36, 'felixligue2', 33, 'felixcode2', 'felixmessage2'),
(37, 'easy', 33, 'easy', 'easy'),
(38, 'hey', 33, 'hey', 'hey'),
(39, 'new', 33, 'new', 'new');

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
(77, 33, 248104),
(78, 34, 248102),
(79, 34, 248096),
(80, 35, 239308),
(81, 35, 239318),
(82, 36, 239308),
(83, 36, 239305),
(84, 36, 239265),
(85, 36, 239315),
(86, 37, 239308),
(87, 37, 239265),
(88, 38, 239308),
(89, 38, 239305),
(90, 38, 239265),
(91, 38, 239310),
(92, 39, 233357),
(93, 39, 233330),
(94, 39, 233364),
(95, 39, 233371);

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
(25, 31, 35),
(26, 34, 35),
(27, 35, 33),
(28, 36, 33),
(29, 37, 33),
(30, 38, 33),
(31, 39, 33);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `id_matches` int(11) NOT NULL,
  `home_team` varchar(255) NOT NULL,
  `away_team` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `id_matches`, `home_team`, `away_team`, `date`, `status`) VALUES
(109, 239308, 'Dijon Football Côte d\'Or', 'Amiens SC', '2019-04-12T17:00:00Z', ''),
(110, 239304, 'Olympique de Marseille', 'Nîmes Olympique', '2019-04-13T15:00:00Z', ''),
(111, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z', ''),
(112, 239265, 'FC Nantes', 'Paris Saint-Germain FC', '2019-04-17T17:00:00Z', ''),
(113, 239309, 'RC Strasbourg Alsace', 'En Avant Guingamp', '2019-04-13T18:00:00Z', ''),
(114, 239316, 'Dijon Football Côte d\'Or', 'Stade Rennais FC 1901', '2019-04-20T18:00:00Z', ''),
(115, 239318, 'RC Strasbourg Alsace', 'Montpellier HSC', '2019-04-20T18:00:00Z', ''),
(116, 248096, 'AC Milan', 'SS Lazio', '2019-04-13T18:30:00Z', ''),
(117, 248111, 'Bologna FC 1909', 'UC Sampdoria', '2019-04-20T13:00:00Z', ''),
(118, 248104, 'Juventus FC', 'ACF Fiorentina', '2019-04-20T16:00:00Z', ''),
(119, 248102, 'SPAL 2013', 'Juventus FC', '2019-04-13T13:00:00Z', ''),
(120, 239305, 'FC Nantes', 'Olympique Lyonnais', '2019-04-12T18:45:00Z', ''),
(121, 239315, 'En Avant Guingamp', 'Olympique de Marseille', '2019-04-20T15:00:00Z', ''),
(122, 239310, 'Olympique Lyonnais', 'Angers SCO', '2019-04-19T18:45:00Z', ''),
(123, 233357, 'Leicester City FC', 'Newcastle United FC', '2019-04-12T19:00:00Z', 'SCHEDULED'),
(124, 233330, 'Brighton & Hove Albion FC', 'Cardiff City FC', '2019-04-16T18:45:00Z', 'SCHEDULED'),
(125, 233364, 'Manchester City FC', 'Tottenham Hotspur FC', '2019-04-20T11:30:00Z', 'SCHEDULED'),
(126, 233371, 'West Ham United FC', 'Leicester City FC', '2019-04-20T14:00:00Z', 'SCHEDULED');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `league_matches`
--
ALTER TABLE `league_matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
