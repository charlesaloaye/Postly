-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 15, 2024 at 12:17 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinnacle`
--

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `l_id` int(11) NOT NULL,
  `is_liked` tinyint(1) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`l_id`, `is_liked`, `uid`, `p_id`) VALUES
(28, 1, 11, 30),
(29, 1, 11, 29),
(30, 1, 30, 32),
(31, 1, 30, 30),
(32, 1, 20, 30),
(33, 1, 30, 29),
(35, 1, 20, 32),
(36, 1, 20, 29),
(38, 1, 20, 27),
(39, 1, 30, 27),
(40, 1, 20, 26),
(44, 1, 29, 27),
(45, 1, 20, 21),
(46, 1, 27, 32),
(48, 1, 20, 18),
(49, 1, 27, 30),
(50, 1, 30, 19),
(51, 1, 27, 27),
(52, 1, 20, 10),
(53, 1, 20, 12),
(54, 1, 20, 6),
(55, 1, 20, 8),
(58, 1, 24, 26),
(60, 1, 24, 10),
(61, 1, 26, 29),
(63, 1, 30, 33),
(64, 1, 30, 34),
(65, 1, 26, 32),
(66, 1, 30, 32),
(67, 1, 30, 32),
(68, 1, 30, 32),
(69, 1, 24, 27),
(70, 1, 30, 30),
(71, 1, 30, 27),
(72, 1, 30, 27),
(73, 1, 30, 27),
(74, 1, 30, 27),
(75, 1, 30, 27),
(76, 1, 30, 27),
(77, 1, 30, 27),
(78, 1, 30, 27),
(79, 1, 30, 27),
(80, 1, 30, 27),
(81, 1, 30, 27),
(82, 1, 30, 27),
(83, 1, 30, 27),
(84, 1, 30, 27),
(85, 1, 30, 27),
(86, 1, 30, 27),
(87, 1, 32, 34),
(88, 1, 29, 10),
(89, 1, 32, 33),
(90, 1, 32, 33),
(91, 1, 24, 34),
(92, 1, 32, 32),
(94, 1, 32, 30),
(95, 1, 24, 34),
(96, 1, 32, 33),
(97, 1, 24, 34),
(98, 1, 11, 33),
(99, 1, 32, 29),
(100, 1, 11, 33),
(101, 1, 30, 30),
(102, 1, 11, 33),
(103, 1, 32, 27),
(104, 1, 20, 35),
(105, 1, 20, 35),
(106, 1, 20, 35),
(107, 1, 20, 34),
(108, 1, 30, 24),
(109, 1, 20, 33),
(110, 1, 11, 35),
(111, 1, 30, 35),
(112, 1, 32, 35),
(113, 1, 26, 35),
(114, 1, 20, 24),
(115, 1, 26, 34),
(116, 1, 11, 34),
(117, 1, 11, 32),
(118, 1, 27, 10),
(119, 1, 29, 34),
(120, 1, 26, 33),
(122, 1, 24, 24),
(123, 1, 24, 8),
(125, 1, 24, 9),
(126, 1, 30, 6),
(128, 1, 30, 8),
(129, 1, 30, 9),
(131, 1, 20, 36),
(132, 1, 20, 9),
(133, 1, 30, 36),
(136, 1, 32, 39);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(100) DEFAULT 'uploads/',
  `uid` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `title`, `body`, `thumbnail`, `uid`, `created_at`) VALUES
(6, 'Freelancing Tips', 'Check Israel Myles for updates on that ', 'uploads/', 22, '2024-02-12 11:49:46'),
(8, 'Senan\'s Post', 'heroes always made my heart dance.\r\nSome were even based on heroes who really existed in the past, and \r\nI wanted to be just like them.\r\nBanishing evil and protecting the weak&hellip;\r\nI wanted more than anything to become a noble hero.\r\nWhen I told my mother this, she simply responded with a smile.\r\n&ldquo;Of course. I&rsquo;m sure you will, Julius.&rdquo;\r\nI was so thrilled by her answer that I decided right then and there to \r\ndevote myself to living up to the strong yet kind heroes of legend.\r\nTo always hold justice close to my heart and never allow evil to go \r\nunpunished.\r\nYoung as I was, I knew I had no real chance of ever becoming a hero, \r\nbut I wanted to at least have the attitude of one so that I could be a \r\ngood prince.\r\nI never imagined that not long after that moment, I really would be a \r\nhero.\r\nWhen it happened, I was more confused ', 'uploads/', 21, '2024-02-12 11:50:07'),
(9, 'Valentine ', 'I swear wetin Nigerian play yesterday pain me die, make nobody expect valentine gift oo', 'uploads/', 20, '2024-02-12 11:50:32'),
(10, 'Repent ye', 'God is calling on us to repent ', 'uploads/', 24, '2024-02-12 11:50:36'),
(12, 'How to make money in two seconds', 'Gggghhbh hhjjjjjjhhhjjjbmkj', 'uploads/', 26, '2024-02-12 11:52:26'),
(18, 'Money', 'I don\'t love money I like it', 'uploads/', 25, '2024-02-12 11:59:57'),
(21, 'Who had breakfast ', 'Galgshbsks jdygskajvsgsnks hahvsjnsjsvsj', 'uploads/', 31, '2024-02-12 12:04:25'),
(24, 'Anonymous ', 'We love you Mr. Charles we love you ', 'uploads/', 28, '2024-02-12 12:05:37'),
(26, 'We shall all return home when the game is over', 'Whatsoever you embark on. Do it considering that the day of reckoning shall come. Be careful!', 'uploads/', 24, '2024-02-12 12:06:42'),
(27, 'Jesus is Lord', 'Jesus is Lord  Jesus is Lord Jesus is LordJesus is Lord   Jesus is Lord', 'uploads/', 29, '2024-02-12 12:07:53'),
(29, 'WHY ARE WE HERE ', 'You was not even given birth to with your consent haha and you\'ll die without your consent I just hope it\'s fair sha ', 'uploads/', 25, '2024-02-12 12:09:53'),
(30, 'Robert kiyosaki\'s Principles ', 'If you wanna know about this, Dm me at Israel Myles ', 'uploads/', 22, '2024-02-12 12:10:02'),
(32, 'Weldone Gemanen 001', 'Please don\'t influence people with sleeping drugs', 'uploads/', 11, '2024-02-13 12:35:21'),
(33, 'Welcome To AIIVON ', 'This is AIIVON innovation hub ', 'uploads/', 27, '2024-02-13 13:20:46'),
(34, 'PHP not a child\'s play ', 'PHP not a child\'s play PHP not a child\'s play PHP not a child\'s play PHP not a child\'s play ', 'uploads/', 29, '2024-02-13 13:21:27'),
(35, 'Country hard kaii', 'No food for lazy man', 'uploads/', 26, '2024-02-13 13:22:31'),
(39, 'Food', 'Abeg who cook?\r\n', 'uploads/', 32, '2024-02-13 13:49:38'),
(40, 'Welcome to Nigeria Feast', 'jqaksoxcknnd hsbdxkcmwd wjdchlkwdc', 'http://localhost/postly/Assets/Uploads/416062696_378999234781194_9046131252502974176_n.jpg', 11, '2024-02-15 11:59:32'),
(41, 'OKay go home ', 'asxcjjlsdkfvgmbj asdxcjvholwdfgvbdfgh. df', 'http://localhost/postly/Assets/Uploads/416062696_378999234781194_9046131252502974176_n.jpg', 11, '2024-02-15 12:02:24'),
(42, 'OKay we hear the shout too', 'qasnxhkmw d wvdhjcokwdchhiwd', 'http://localhost/postly/Assets/Uploads/Feb-04:02416062696_378999234781194_9046131252502974176_n.jpg', 11, '2024-02-15 12:04:02'),
(43, 'nxbjwmndk ', 'bdvjuwbujw', 'http://localhost/postly/Assets/Uploads/Feb-06:4365cdf043c0d91.png', 11, '2024-02-15 12:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_type` tinyint(1) NOT NULL DEFAULT '0',
  `otp` varchar(7) NOT NULL DEFAULT '0',
  `verified` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `account_type`, `otp`, `verified`) VALUES
(11, 'Senan Desmond', 'aloayecharles@gmail.com', '$2y$10$nSMv7/UOStMtBDyLhH2bAeAFkWCInemIJbI0sIUX9QahHc0hHoeNW', 0, '674068', 1),
(18, 'CharlesTechy', 'ct@gmail.com', '$2y$10$bL5C8j2AyHt6snpYvy2BC.gWfnsgjF1WvFhe40rJlD8DLE2GNsJEy', 0, '0', 0),
(19, 'Emmanuel ', 'emma@gmail.com', '$2y$10$2U.8RIYtl6JFZXZMOX.NV.iVmPitGVkGFq.PRPrwW3II6ldkBD3Gq', 0, '0', 0),
(20, 'Rapheal Jason Omale', 'jasonrapheal5@gmail.com', '$2y$10$eO/3M4r12D9EJonqeFYu0.6UokE2za8vYuedxG1gr3XrvhbavlV.K', 0, '0', 0),
(21, 'Senan', 'sqrisstuberg@gmail.com', '$2y$10$K65hL2HJ4kf6MkNCCrlEUuJqECZd99uYkX.4hFsOJ3ueJn6QDX8Py', 0, '0', 0),
(22, 'Ondah Israel Oheriudu ', 'ondahisrael349@gmail.com', '$2y$10$Pws4ew5xsuKQt.p.seH6GOxa/iedL7.cgmaF2nwQj4NKojQsnDpBW', 0, '0', 0),
(23, 'Jeremiah ', 'innocentjeremiah20@gmail.com', '$2y$10$08aSMocZb9s5HqQ4fWz69eGSkSUShDcMoAqMKFOwWRyRyXunAJs9e', 0, '0', 0),
(24, 'Gemanen ', 'geman@gmail.com', '$2y$10$kjNUF0MbKxLhZpugqS1bNeMmqeDmdXtPJVwx0iGnMaDNiF2BLchTS', 0, '0', 0),
(25, 'Divine Shima ', 'shimaaondona@yahoo.com', '$2y$10$b2I1cFTHY0tCj0ASFFCU1uKAi87./jYa87okp0hwbsc0aFQiDnHqK', 0, '0', 0),
(26, 'Yange orseer', 'yangedesmond532@gmail.com', '$2y$10$Xv3AROfqOIJkojKZuJ/nue//CC2OCpsirsxqqjN9LnrDDQsGNf1YS', 0, '0', 0),
(27, 'Eunice Lele', 'eunicelele95@gmail.com', '$2y$10$3f1K0hf/FYxXC0Dqd2.LLOTkG5/H8ZGBbb1ocEEQAjO1G69t8AUZa', 0, '0', 0),
(28, 'Anonymous ', 'jasonomale694@gmail.com', '$2y$10$Eny3QVjaljJ1OR/hNepag.etnfbfp2o.HSujSuKeTRXPWMMhW0aA6', 0, '0', 0),
(29, 'Barnabas ', 'terrybarnz@gmail.com', '$2y$10$J0ovLrWTBd1y3hMlOrWa.ekQnvzLNb1f28bxfffVi3piSoAOTP/9i', 0, '0', 0),
(30, 'Emmanuel Hudson ', 'odauduemmanuel@gmail.com', '$2y$10$z.JBHkwzKg/dfgQkIF4v1OAAXQT6il.9T6IhQZPT0IhAzovU92HNi', 0, '0', 0),
(31, 'Caleb', 'calebobiabo26@gmail.com', '$2y$10$on2CMYx8h426Y1WoFC4xf.Ge21TuJ6Vez3JpNtIHwILo00IZEQRe6', 0, '0', 0),
(32, 'Jimedia', 'media@gmail.com', '$2y$10$3bFMqMF5KJIBRKv6ZGjpy.PG4ofnGJ0Qx/C/C8Id4WWit1yeMSbQi', 0, '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
