-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 11:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_done` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `is_done`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'abcdaaaaaaaaaaaa', 'kAUCiADcp97DAGcp;9*Dedwed', 0, '2023-09-17 00:00:00', '2023-09-18 01:43:57', 1),
(2, 'sdcsdsdcdcs', 'abcd', 0, '2023-09-17 00:00:00', '2023-09-18 01:44:53', 1),
(3, 'sdcsd33', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-17 21:07:39', '2023-09-18 01:44:55', 1),
(4, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 00:39:40', '2023-09-18 01:44:56', 1),
(5, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:45:00', '2023-09-18 01:45:36', 1),
(6, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:45:28', '2023-09-18 01:45:35', 1),
(7, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:45:30', '2023-09-18 01:45:37', 1),
(8, '', '', 1, '2023-09-18 01:45:47', '2023-09-18 01:52:43', 1),
(9, '', '', 1, '2023-09-18 01:51:49', '2023-09-18 01:52:45', 1),
(10, '', '', 0, '2023-09-18 01:52:09', '2023-09-18 01:52:43', 1),
(11, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:52:46', '2023-09-18 01:57:03', 1),
(12, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:55:32', '2023-09-18 01:57:05', 1),
(13, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:55:57', '2023-09-18 01:57:04', 1),
(14, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:55:57', '2023-09-18 01:57:07', 1),
(15, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:55:57', '2023-09-18 01:57:02', 1),
(16, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:55:57', '2023-09-18 01:57:07', 1),
(17, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:55:57', '2023-09-18 01:57:03', 1),
(18, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:55:58', '2023-09-18 01:57:06', 1),
(19, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:57:20', '2023-09-18 02:25:18', 1),
(20, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:57:47', '2023-09-18 02:25:19', 1),
(21, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 01:57:57', '2023-09-19 12:20:06', 1),
(22, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 01:57:59', '2023-09-19 12:19:56', 1),
(23, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:18:12', '2023-09-18 02:29:12', 1),
(24, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:18:14', '2023-09-18 02:35:46', 1),
(25, 'krn', 'krn3', 0, '2023-09-18 02:18:50', '2023-09-18 02:25:27', 1),
(26, 'frw', 'gdg', 0, '2023-09-18 02:20:11', '2023-09-18 02:25:11', 1),
(27, 'slvkls', 'sfopvj\n', 0, '2023-09-18 02:23:26', '2023-09-18 02:32:29', 1),
(28, 'krushna', 'krushna', 0, '2023-09-18 02:24:03', '2023-09-18 02:25:08', 1),
(29, 'vishwaja', 'vishu', 0, '2023-09-18 02:24:40', '2023-09-18 02:25:05', 1),
(30, '1', '1', 0, '2023-09-18 02:26:06', '2023-09-18 02:26:10', 1),
(31, '1', '1', 0, '2023-09-18 02:26:17', '2023-09-18 02:29:24', 1),
(32, '2', '2', 0, '2023-09-18 02:26:27', '2023-09-18 02:30:05', 1),
(33, '3', '3', 0, '2023-09-18 02:27:25', '2023-09-18 02:30:06', 1),
(34, '4', '4', 0, '2023-09-18 02:27:35', '2023-09-18 02:30:07', 1),
(35, '5', '5', 0, '2023-09-18 02:28:26', '2023-09-18 02:30:07', 1),
(36, '6', '6', 0, '2023-09-18 02:28:32', '2023-09-18 02:35:42', 1),
(37, '7', '7', 1, '2023-09-18 02:28:42', '2023-09-19 12:20:05', 1),
(38, '8', '8', 0, '2023-09-18 02:28:56', '2023-09-18 02:35:43', 1),
(39, '9', '9', 0, '2023-09-18 02:29:02', '2023-09-19 12:19:57', 1),
(40, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:33', '2023-09-18 02:35:44', 1),
(41, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:37', '2023-09-18 02:35:44', 1),
(42, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:37', '2023-09-18 02:35:45', 1),
(43, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:37', '2023-09-18 02:35:46', 1),
(44, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:37', '2023-09-18 02:35:46', 1),
(45, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:37', '2023-09-19 12:20:00', 1),
(46, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 02:35:38', '2023-09-19 12:20:03', 1),
(47, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:35:38', '2023-09-19 12:19:58', 1),
(48, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-18 02:37:25', '2023-09-19 12:20:00', 1),
(49, 'kathu', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 02:37:36', '2023-09-19 12:20:02', 1),
(50, 'kuthu', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 02:38:22', '2023-09-19 11:48:30', 1),
(51, 'dwdwd', 'kAUCiADcp97DAGcp;9*D', 1, '2023-09-18 02:39:52', '2023-09-19 11:48:26', 1),
(52, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-19 12:04:13', '2023-09-19 12:05:48', 1),
(53, 'sdcsd', 'kAUCiADcp97DAGcp;9*D', 0, '2023-09-19 12:04:38', '2023-09-19 12:19:57', 1),
(54, '', '', 0, '2023-09-19 12:20:43', '2023-09-19 18:32:04', 1),
(55, '', '', 0, '2023-09-19 12:26:48', '2023-09-19 18:32:01', 1),
(56, '', '', 0, '2023-09-19 12:27:13', '2023-09-19 18:31:57', 1),
(57, 'a', 'a', 0, '2023-09-19 12:29:21', '2023-09-21 22:28:25', 1),
(58, 'b', 'b', 0, '2023-09-19 12:30:11', '2023-09-21 22:28:12', 1),
(59, 'c', 'cc', 0, '2023-09-19 18:32:13', '2023-09-19 18:32:32', 1),
(60, 'krushna', 'Narvekar', 0, '2023-09-21 22:28:01', '2023-09-21 22:28:08', 1),
(61, 'iojlsdifjo', 'ioj', 0, '2023-09-21 22:28:36', '2023-09-21 23:23:50', 1),
(62, 'jk', 'ojk', 0, '2023-09-21 22:29:37', '2023-09-21 23:23:45', 1),
(63, 'jk', 'ojk', 0, '2023-09-21 22:29:43', '2023-09-21 22:38:54', 1),
(64, 'jk', 'ojk', 0, '2023-09-21 22:29:47', '2023-09-21 22:38:52', 1),
(65, 'lsdhvo', 'skdgho', 0, '2023-09-21 22:31:37', '2023-09-21 22:36:56', 1),
(66, ',kdfn', 'kdcms', 0, '2023-09-21 22:36:23', '2023-09-21 22:36:55', 1),
(67, ',jkk', 'ldjvos', 0, '2023-09-21 22:37:05', '2023-09-21 22:38:49', 1),
(68, 't2', 't3', 1, '2023-09-21 22:39:05', '2023-09-21 23:23:47', 1),
(69, '.kmoi', 'tfdy', 0, '2023-09-21 22:39:24', '2023-09-21 23:23:44', 1),
(70, ',dvkn', 'kdnvlak', 1, '2023-09-21 23:00:21', '2023-09-21 23:23:48', 1),
(71, 'lcvl222222222222222222', 'ihonk2222222222222222', 1, '2023-09-21 23:01:16', '2023-09-21 23:23:49', 1),
(72, 'lhfuh', 'oiajociad', 0, '2023-09-21 23:23:58', '2023-09-21 23:23:58', 0),
(73, 'krushna Ravindra', 'narvekar', 1, '2023-09-21 23:32:10', '2023-09-21 23:32:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, 'ksjdnvi', 'ditaf15240@chambile.com', 'e86f78a8a3caf0b60d8e74e5942aa6d86dc150cd3c03338aef25b7d2d7e3acc7', '2023-09-19 19:59:15', '2023-09-19 19:59:15', 0),
(2, 'krushna', 'krn@gmail.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-19 21:44:03', '2023-09-19 21:44:03', 0),
(3, 'krushna2', 'krn2@gmail.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-19 21:52:54', '2023-09-19 21:52:54', 0),
(4, 'kd', 'krn@gmail.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-21 23:39:03', '2023-09-21 23:39:03', 0),
(5, 'att', 'at@gmail.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-21 23:40:38', '2023-09-21 23:40:38', 0),
(6, 'samsung', 'samsung@gmail.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-21 23:41:32', '2023-09-21 23:41:32', 0),
(7, 'nar', 'narvekar@gmail.com', 'f6d417ed308810ec35d7f3dd3d5837b4fab2b10fd38d41bdb8e22fdb49f9feac', '2023-09-21 23:43:37', '2023-09-21 23:43:37', 0),
(8, ',jhdcousd', 'ditaf152400@chambile.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-21 23:44:06', '2023-09-21 23:44:06', 0),
(9, 'annn', 'ditaf15240@chambile.com', '49915e0d7d4b402e3017d010bc1c0e83cac6c797d6c16e66340fe3268693a6a1', '2023-09-21 23:45:07', '2023-09-21 23:45:07', 0),
(10, 'krn', 'kru@gmail.com', 'f4e1ff3a31841fbb1084a14f6f508bbb58d2b6a5f0729f08758f02742ac7f212', '2023-09-21 23:46:48', '2023-09-21 23:46:48', 0),
(11, 'myu', 'myu@gmail.com', 'c94e8e7bb6bef82b22d116e534c1aec605b1258fa710163bbd51b18ce90116a7', '2023-09-21 23:51:11', '2023-09-21 23:51:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
