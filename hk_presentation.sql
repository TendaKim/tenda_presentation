-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2024 年 5 月 30 日 03:43
-- サーバのバージョン： 8.0.37
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hk_presentation`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `before_seat`
--

CREATE TABLE IF NOT EXISTS `before_seat` (
  `user_id` int NOT NULL,
  `seat_row` int NOT NULL,
  `seat_column` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `user_id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(30) DEFAULT NULL,
  `seat` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `save_seat` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `before_seat`
--
ALTER TABLE `before_seat`
  ADD KEY `fk_before_seat_user` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD KEY `fk_student_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `before_seat`
--
ALTER TABLE `before_seat`
  ADD CONSTRAINT `fk_before_seat_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- テーブルの制約 `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_student_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
