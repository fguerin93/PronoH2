-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2019 at 11:41 PM
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
(33, 34, 43, 103, 5, 3),
(34, 34, 43, 104, 3, 4),
(35, 34, 43, 105, 2, 3),
(36, 36, 43, 103, 2, 7),
(37, 36, 43, 104, 5, 4),
(38, 36, 43, 105, 0, 0),
(44, 36, 42, 99, 6, 5),
(45, 36, 42, 100, 0, 0),
(46, 36, 42, 101, 0, 0),
(47, 36, 42, 102, 1, 2),
(59, 33, 44, 106, 1, 0),
(60, 33, 44, 107, 0, 2),
(61, 33, 44, 113, 1, 1),
(62, 33, 42, 99, 1, 2),
(63, 33, 42, 100, 3, 3),
(64, 33, 42, 101, 2, 1),
(65, 33, 42, 102, 2, 4),
(66, 33, 44, 118, 2, 1),
(67, 33, 47, 115, 1, 3),
(68, 33, 47, 116, 2, 2),
(69, 33, 47, 117, 2, 1),
(70, 33, 47, 119, 1, 1),
(71, 33, 47, 120, 1, 2),
(72, 34, 43, 121, 3, 3),
(73, 35, 43, 103, 2, 3),
(74, 35, 43, 104, 1, 2),
(75, 35, 43, 105, 0, 0),
(76, 35, 43, 121, 3, 3);

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
(42, 'brunoligue', 36, 'brunocode', 'brunomessage'),
(43, 'brunoligue2', 36, 'brunocode2', 'brunomessage2'),
(44, 'felixligue', 33, 'felixcode', 'felixmessage'),
(45, 'diegoligue', 35, 'diegocode', 'diegomessage'),
(46, 'felixligue2', 33, 'felixcode2', 'felixmessage2'),
(47, 'felixligue3', 33, 'felixcode3', 'felixmessage3');

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
(99, 42, 239304),
(100, 42, 239306),
(101, 42, 239301),
(102, 42, 239311),
(103, 43, 246424),
(104, 43, 246422),
(105, 43, 246435),
(106, 44, 239308),
(107, 44, 239265),
(108, 45, 235941),
(109, 45, 235940),
(110, 45, 235943),
(111, 45, 235946),
(112, 45, 235955),
(113, 44, 239280),
(114, 46, 235941),
(115, 47, 233357),
(116, 47, 233369),
(117, 47, 233366),
(118, 44, 239283),
(119, 47, 233339),
(120, 47, 233340),
(121, 43, 246409);

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
(34, 42, 36),
(35, 43, 36),
(36, 42, 33),
(37, 44, 33),
(38, 45, 35),
(39, 44, 35),
(40, 43, 35),
(41, 44, 34),
(42, 43, 34),
(43, 46, 33),
(44, 47, 33),
(45, 43, 34);

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
(127, 239304, 'Olympique de Marseille', 'Nîmes Olympique', '2019-04-13T15:00:00Z', 'SCHEDULED'),
(128, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z', 'SCHEDULED'),
(129, 239301, 'Lille OSC', 'Paris Saint-Germain FC', '2019-04-14T19:00:00Z', 'SCHEDULED'),
(130, 239311, 'Toulouse FC', 'Lille OSC', '2019-04-21T13:00:00Z', 'SCHEDULED'),
(131, 246424, 'Sevilla FC', 'Real Betis Balompié', '2019-04-13T18:45:00Z', 'SCHEDULED'),
(132, 246422, 'Valencia CF', 'Levante UD', '2019-04-14T18:45:00Z', 'SCHEDULED'),
(133, 246435, 'Getafe CF', 'Sevilla FC', '2019-04-21T12:00:00Z', 'SCHEDULED'),
(134, 239308, 'Dijon Football Côte d\'Or', 'Amiens SC', '2019-04-12T17:00:00Z', 'SCHEDULED'),
(135, 239265, 'FC Nantes', 'Paris Saint-Germain FC', '2019-04-17T17:00:00Z', 'SCHEDULED'),
(136, 235941, '1. FC Nürnberg', 'FC Schalke 04', '2019-04-12T18:30:00Z', 'SCHEDULED'),
(137, 235940, 'VfB Stuttgart', 'Bayer 04 Leverkusen', '2019-04-13T13:30:00Z', 'SCHEDULED'),
(138, 235943, 'Hannover 96', 'Borussia Mönchengladbach', '2019-04-13T13:30:00Z', 'SCHEDULED'),
(139, 235946, 'RB Leipzig', 'VfL Wolfsburg', '2019-04-13T13:30:00Z', 'SCHEDULED'),
(140, 235955, 'FC Augsburg', 'VfB Stuttgart', '2019-04-20T13:30:00Z', 'SCHEDULED'),
(145, 239280, 'Montpellier HSC', 'En Avant Guingamp', '2019-04-04T09:32:57Z', 'FINISHED'),
(146, 239283, 'Toulouse FC', 'Paris Saint-Germain FC', '2019-03-31T19:00:00Z', 'FINISHED'),
(147, 233357, 'Leicester City FC', 'Newcastle United FC', '2019-04-12T19:00:00Z', 'SCHEDULED'),
(148, 233369, 'Huddersfield Town AFC', 'Watford FC', '2019-04-20T14:00:00Z', 'SCHEDULED'),
(149, 233366, 'Arsenal FC', 'Crystal Palace FC', '2019-04-21T15:00:00Z', 'SCHEDULED'),
(150, 233340, 'West Ham United FC', 'Everton FC', '2019-03-30T17:30:00Z', 'FINISHED'),
(151, 246409, 'SD Huesca', 'RC Celta de Vigo', '2019-04-03T18:30:00Z', 'FINISHED'),
(152, 233339, 'Cardiff City FC', 'Chelsea FC', '2019-03-31T13:05:00Z', 'FINISHED');

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
(35, 'diego', 'diego@mail.fr', '8354336224c63279aadd00a9621757ef4fdf31fc'),
(36, 'bruno', 'bruno@mail.fr', '660609b171607ff3dcd294929e5d8239736f4298');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `league_matches`
--
ALTER TABLE `league_matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
