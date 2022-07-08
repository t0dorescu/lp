-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2022 at 03:07 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tod0resc1_project_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `emailoctopus_id` varchar(255) NOT NULL,
  `emailoctopus_list` varchar(255) NOT NULL,
  `gravatar_url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `emailoctopus_id` varchar(255) NOT NULL,
  `emailoctopus_list` varchar(255) NOT NULL,
  `gravatar_url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `emailoctopus_id`, `emailoctopus_list`, `gravatar_url`, `email`, `date_created`) VALUES
(1, '10099398', '764e1bd2-feaa-11ec-9258-0241b9615763', 'https://secure.gravatar.com/avatar/c203b48078bd798f77d096090fc4dfcb', 'tudor.fis@gmail.com', '2022-07-08 14:13:58'),
(2, '73666fd2-feaf-11ec-9258-0241b9615763', '764e1bd2-feaa-11ec-9258-0241b9615763', 'https://secure.gravatar.com/avatar/b642b4217b34b1e8d3bd915fc65c4452', 'test@test.com', '2022-07-08 14:16:45'),
(3, '8c54e0d5-feaf-11ec-9258-0241b9615763', '764e1bd2-feaa-11ec-9258-0241b9615763', '', 'qweqeqeq@aweqew.com', '2022-07-08 14:17:26'),
(4, 'a2b14533-feaf-11ec-9258-0241b9615763', '764e1bd2-feaa-11ec-9258-0241b9615763', '', 'wqeqeqwe123123@io334iuqweihqw.com', '2022-07-08 14:18:04'),
(5, '04b61be5-feb0-11ec-9258-0241b9615763', '764e1bd2-feaa-11ec-9258-0241b9615763', '', 'qwewqeqwe@wqeqweqw.com', '2022-07-08 14:20:48'),
(6, '0c929b91-feb0-11ec-9258-0241b9615763', '764e1bd2-feaa-11ec-9258-0241b9615763', '', 'wqeqeqwe123123@io33wewe4iuqweihqw.com', '2022-07-08 14:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `member_id`, `token`, `user_agent`, `date_created`) VALUES
(9, 11, '015006fc9508d069e7ee861530acc9b7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 14:32:55'),
(10, 11, '7ecd78faf2e991a60fe0367466cb5511', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 14:34:12'),
(11, 11, '883bfbdaaa2bfad118cd07c8e5c2e10d', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 14:46:53'),
(12, 11, 'b67dd2a905ab8a4a0765c050aac9684b', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 14:47:06'),
(13, 11, 'cdfa8c572286233f2f8b203d69f06574', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 14:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `token`) VALUES
(1, 'todorescu.consulting@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '6f71b29916e83bcb2f09092a17dcd9ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
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
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
