-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2018 at 12:13 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navtradi_freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `qtype` text NOT NULL,
  `qcontent` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `qtype`, `qcontent`, `answer`) VALUES
(1, 'Hey! What are you doing?', 'text', '0', 'THINKING'),
(2, 'Name the Company!', 'image', 'https://pbs.twimg.com/profile_images/972154872261853184/RnOg6UyU_400x400.jpg', 'GOOGLE'),
(3, 'Identify Music!', 'audio', 'messagesend.mp3', 'FACEBOOK'),
(4, 'A father said to his son, \"I was as old as you are at the present at the time of your birth\". If the father\'s age is 38 years now, the son\'s age five years back was: A. Son\'s age 5 years back', 'text', '', '14'),
(5, 'Who is the President of india?', 'text', '0', 'RAM NATH KOVIND'),
(6, 'Ceo of apple?', 'text', '0', 'TIM COOK'),
(7, 'Identify Place!', 'image', 'https://www.tomorrowland.com/src/Frontend/Themes/tomorrowland/Core/Layout/images/timeline/2017-1.jpg', 'TOMORROWLAND'),
(8, 'who won 1cr in kbc 2018?', 'text', '', 'BINITA JAIN'),
(9, 'if you are good at something _______', 'text', '0', 'NEVER DO IT FOR FREE'),
(10, 'first color movie in india?', 'text', '', 'KISAN KANYA');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `s_time` varchar(50) NOT NULL,
  `e_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `start_time`, `end_time`, `s_time`, `e_time`) VALUES
(1, 'oct 16,2018 21:00:00 ', 'oct 17, 2018 00:00:00 ', '10/16/2018 21:00:00', '10/17/2018 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(264) NOT NULL,
  `email` varchar(264) NOT NULL,
  `password` varchar(264) NOT NULL,
  `colg` varchar(264) NOT NULL,
  `year` int(11) NOT NULL,
  `course` text NOT NULL,
  `prob` int(11) NOT NULL,
  `candy` int(11) NOT NULL,
  `status` text NOT NULL,
  `last_submission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `completed` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `colg`, `year`, `course`, `prob`, `candy`, `status`, `last_submission`, `completed`) VALUES
(26, 'Nipul Singal', 'nipul00rock@gmail.com', 'nipul00rock', 'USICT', 0, 'Btech IT', 1, 1, 'no', '2018-10-08 18:33:05', 'no'),
(27, 'Arpit Gupta', 'agsinghgarg131@gmail.com', 'speedoarpit123', 'UNIVERSITY SCHOOL OF INFORMATION AND COMMUNICATION TECHNOLOGY', 0, 'USICT', 1, 1, 'no', '2018-10-08 18:32:20', 'no'),
(28, 'kartik malhotra', 'kartikmalhotra448@gmail.com', 'kartik123', 'usict', 0, 'cse', 1, 1, 'no', '2018-10-08 18:32:25', 'no'),
(29, 'SHLOK GARG', 'sngargrsd@gmail.com', 'RSDSHARMA', 'UNIVERSITY SCHOOL OF INFORMATION AND COMMUNICATION TECHNOLOGY', 0, 'USICT', 1, 1, 'no', '2018-10-08 18:32:34', 'no'),
(30, 'Abhinav Monga', 'abhimonga16@gmail.com', 'Abhi@1604', 'USICT', 0, 'cse', 1, 1, 'no', '2018-10-09 18:35:26', 'no'),
(37, 'Ankit Jain', 'jain2anki@gmail.com', 'ankitjain', 'USICT', 0, 'CSE', 1, 1, 'no', '2018-10-09 16:52:46', 'no'),
(31, 'Shradha Dua', 'shradhadua231@gmail.com', 'Jmd@1967', 'Usict', 0, 'Btech 2nd', 1, 1, 'no', '2018-10-09 18:37:02', 'no'),
(32, 'john', 'imlakshya44@gmail.com', 'youtube96', 'USICT', 0, 'btech 2nd year', 1, 1, 'no', '2018-10-09 18:37:07', 'no'),
(33, 'sejal', 'sejalbhatia30@gmail.com', 'seju1234', 'usict', 0, 'btech', 1, 1, 'no', '2018-10-09 18:37:11', 'no'),
(34, 'akuza', 'avikmika@gmail.com', 'iampandey', 'usict', 0, '2nd', 1, 1, 'no', '2018-10-09 18:37:16', 'no'),
(35, 'ritik rathi', 'rathi27ritik@gmail.com', 'ritik27rathi', 'USICT', 0, 'Bt.Tech CSE', 1, 1, 'no', '2018-10-09 18:37:21', 'no'),
(36, 'Omisha', 'omisha.sapra@gmail.com', 'qwertyui', 'USICT', 0, 'B. Tech - 2nd Year', 1, 1, 'no', '2018-10-09 18:37:25', 'no'),
(38, 'adasd', 'asdasd@gmail.com', 'asdasdasdasdasdas', 'adsasdasd', 0, 'asdasdasd', 1, 1, 'no', '2018-10-09 18:39:24', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
