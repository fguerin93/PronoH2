-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 10, 2019 at 04:17 PM
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
(1, 'hetic pronos', 5, 'yepa', 'yepa\r\n'),
(2, 'yo', 5, 'yo', 'yo'),
(3, 'nom', 5, 'code', 'message'),
(4, 'liguedeColine', 2, 'codedecoline', 'messagedeColline'),
(5, 'felixligue', 5, 'felixcode', 'felixmessage'),
(6, 'ligue2', 2, 'zer', 'hello league 2');

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
(1, 6, 233353),
(2, 6, 233361),
(3, 6, 233360),
(4, 6, 233365);

-- --------------------------------------------------------

--
-- Table structure for table `league_users`
--

CREATE TABLE `league_users` (
  `id` int(11) NOT NULL,
  `id_league` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(2, 233360, 'Crystal Palace FC', 'Manchester City FC', '2019-04-14T13:05:00Z'),
(3, 233363, 'Wolverhampton Wanderers FC', 'Brighton & Hove Albion FC', '2019-04-20T14:00:00Z'),
(4, 233372, 'AFC Bournemouth', 'Fulham FC', '2019-04-20T14:00:00Z'),
(5, 233366, 'Arsenal FC', 'Crystal Palace FC', '2019-04-21T15:00:00Z'),
(6, 239308, 'Dijon Football Côte d\'Or', 'Amiens SC', '2019-04-12T17:00:00Z'),
(7, 239305, 'FC Nantes', 'Olympique Lyonnais', '2019-04-12T18:45:00Z'),
(8, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z'),
(9, 239300, 'Montpellier HSC', 'Toulouse FC', '2019-04-14T13:00:00Z'),
(10, 239303, 'AS Saint-Étienne', 'FC Girondins de Bordeaux', '2019-04-14T15:00:00Z'),
(11, 239301, 'Lille OSC', 'Paris Saint-Germain FC', '2019-04-14T19:00:00Z'),
(12, 239265, 'FC Nantes', 'Paris Saint-Germain FC', '2019-04-17T17:00:00Z'),
(13, 239305, 'FC Nantes', 'Olympique Lyonnais', '2019-04-12T18:45:00Z'),
(14, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z'),
(15, 239265, 'FC Nantes', 'Paris Saint-Germain FC', '2019-04-17T17:00:00Z'),
(16, 239304, 'Olympique de Marseille', 'Nîmes Olympique', '2019-04-13T15:00:00Z'),
(17, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z'),
(18, 239304, 'Olympique de Marseille', 'Nîmes Olympique', '2019-04-13T15:00:00Z'),
(19, 239306, 'AS Monaco FC', 'Stade de Reims', '2019-04-13T18:00:00Z'),
(20, 239309, 'RC Strasbourg Alsace', 'En Avant Guingamp', '2019-04-13T18:00:00Z'),
(21, 239303, 'AS Saint-Étienne', 'FC Girondins de Bordeaux', '2019-04-14T15:00:00Z'),
(22, 239310, 'Olympique Lyonnais', 'Angers SCO', '2019-04-19T18:45:00Z'),
(23, 239315, 'En Avant Guingamp', 'Olympique de Marseille', '2019-04-20T15:00:00Z'),
(24, 239312, 'OGC de Nice Côte d\'Azur', 'SM Caen', '2019-04-20T18:00:00Z'),
(25, 239311, 'Toulouse FC', 'Lille OSC', '2019-04-21T13:00:00Z'),
(26, 239313, 'Stade de Reims', 'AS Saint-Étienne', '2019-04-21T15:00:00Z'),
(27, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(28, 233330, 'Brighton & Hove Albion FC', 'Cardiff City FC', '2019-04-16T18:45:00Z'),
(29, 233363, 'Wolverhampton Wanderers FC', 'Brighton & Hove Albion FC', '2019-04-20T14:00:00Z'),
(30, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(31, 233354, 'Liverpool FC', 'Chelsea FC', '2019-04-14T15:30:00Z'),
(32, 233369, 'Huddersfield Town AFC', 'Watford FC', '2019-04-20T14:00:00Z'),
(33, 233355, 'Tottenham Hotspur FC', 'Huddersfield Town AFC', '2019-04-13T11:30:00Z'),
(34, 233366, 'Arsenal FC', 'Crystal Palace FC', '2019-04-21T15:00:00Z'),
(35, 233355, 'Tottenham Hotspur FC', 'Huddersfield Town AFC', '2019-04-13T11:30:00Z'),
(36, 233366, 'Arsenal FC', 'Crystal Palace FC', '2019-04-21T15:00:00Z'),
(37, 233355, 'Tottenham Hotspur FC', 'Huddersfield Town AFC', '2019-04-13T11:30:00Z'),
(38, 233366, 'Arsenal FC', 'Crystal Palace FC', '2019-04-21T15:00:00Z'),
(39, 233355, 'Tottenham Hotspur FC', 'Huddersfield Town AFC', '2019-04-13T11:30:00Z'),
(40, 233366, 'Arsenal FC', 'Crystal Palace FC', '2019-04-21T15:00:00Z'),
(41, 235940, 'VfB Stuttgart', 'Bayer 04 Leverkusen', '2019-04-13T13:30:00Z'),
(42, 235939, 'BV Borussia 09 Dortmund', '1. FSV Mainz 05', '2019-04-13T16:30:00Z'),
(43, 235949, 'Borussia Mönchengladbach', 'RB Leipzig', '2019-04-20T16:30:00Z'),
(44, 235940, 'VfB Stuttgart', 'Bayer 04 Leverkusen', '2019-04-13T13:30:00Z'),
(45, 235940, 'VfB Stuttgart', 'Bayer 04 Leverkusen', '2019-04-13T13:30:00Z'),
(46, 235940, 'VfB Stuttgart', 'Bayer 04 Leverkusen', '2019-04-13T13:30:00Z'),
(47, 235940, 'VfB Stuttgart', 'Bayer 04 Leverkusen', '2019-04-13T13:30:00Z'),
(48, 235944, 'TSV Fortuna 95 Düsseldorf', 'FC Bayern München', '2019-04-14T13:30:00Z'),
(49, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(50, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(51, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(52, 233353, 'Fulham FC', 'Everton FC', '2019-04-13T14:00:00Z'),
(53, 233361, 'Brighton & Hove Albion FC', 'AFC Bournemouth', '2019-04-13T14:00:00Z'),
(54, 233360, 'Crystal Palace FC', 'Manchester City FC', '2019-04-14T13:05:00Z'),
(55, 233365, 'Newcastle United FC', 'Southampton FC', '2019-04-20T16:30:00Z');

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
(6, 'sam', 'sam@hotmail.fr', 'f8f626351f459ca25bc703e70e1dd5ab5cd48f36'),
(7, 'minoudeaudouce', 'minoudeaudouce@hotmail.fr', 'c05380f7d55d4f7923cede3cbdfc10bc6c4b8329'),
(8, 'zer2', 'zer3@hotmail.fr', 'e029e41f4e015e2ea604a0d81a05a05186f15b03'),
(9, 'hey', 'hey@mail.fr', 'bff272e9d673fa941d0a1920551d01a695516140'),
(10, 'hello', 'hello@mail.fr', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d'),
(11, 'zer23sdfbsdgb', 'zer67@hotmail.fr', 'ad85a17530d8b9eb662807797576bf416a2fa0a6'),
(12, 'quentin', 'quentin@sfg.fr', 'd6b8e48afb2534b213e391cab43016505747a234'),
(13, 'yola', 'yola@hotmail.fr', 'a9573217994b9a6b35bce220e5a670a86a2b8b4f'),
(14, 'burnosimon', 'bru@hello.fr', 'c41975d1dae1cc69b16ad8892b8c77164e84ca39'),
(15, 'heyyo', 'hey@maiffl.fr', '90fd73cee85a1b45912d34cee4ceb83e9244d368'),
(16, 'ss', 'ss@mail.fr', 'c1c93f88d273660be5358cd4ee2df2c2f3f0e8e7'),
(17, 'heloo', 'heloo@mail.fr', 'fdbcb5be4656ced7bdb58bc960fd1c56b55c7c16'),
(18, 'hjhjh', 'hjhj@mail.fr', '48b3f8cdcb1b705653ad2d03a86591a505d38596'),
(19, 'yia', 'yia@jj.fr', 'ad9eab2b0574f76f6b167a2ae4019b626c897a4f'),
(20, 'ya', 'ya@jj.fr', 'e92fc4e26a76b5e853ce3c0ef5b3f7e371ef0773'),
(21, 'yp', 'yp@jj.fr', '5de2bc56b28a5be7cb70ccc2d375e79487bff24e'),
(22, 'yzz', 'yzp@jj.fr', 'd7dacae2c968388960bf8970080a980ed5c5dcb7'),
(23, 'yzzz', 'yzep@jj.fr', 'd7dacae2c968388960bf8970080a980ed5c5dcb7'),
(24, 'yzzzz', 'yzzep@jj.fr', '395df8f7c51f007019cb30201c49e884b46b92fa'),
(25, 'yzzzzz', 'yzzzep@jj.fr', 'd7dacae2c968388960bf8970080a980ed5c5dcb7'),
(26, 'yzzzzzz', 'yzzzzep@jj.fr', '395df8f7c51f007019cb30201c49e884b46b92fa'),
(27, 'yepa', 'yepa@mail.fr', '35d2d9bfd9c551001ad9b740dece697c4809b9ea'),
(28, 'rrr', 'rrr@mail.fr', '8578173555a47d4ea49e697badfda270dee0858f');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `league_matches`
--
ALTER TABLE `league_matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `league_users`
--
ALTER TABLE `league_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
