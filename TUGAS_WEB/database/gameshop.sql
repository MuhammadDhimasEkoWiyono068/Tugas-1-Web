-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 11:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(100) NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `diskon` int(3) NOT NULL,
  `waktu_upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `nama_game`, `file_gambar`, `genre`, `harga`, `diskon`, `waktu_upload`) VALUES
(24, 'Elden Ring', 'Elden Ring.jpg', 'Souls Like', 599000, 0, 'Friday 28-10-22 - 13:10:56'),
(25, 'Sekiro Bayangan Mati 2 Kali', 'Sekiro Bayangan Mati 2 Kali.png', 'Souls Like', 729000, 0, 'Friday 28-10-22 - 13:18:15'),
(26, 'Devil May Cry 5', 'Devil May Cry 5.png', 'Hack and Slash', 423999, 20, 'Wednesday 02-11-22 - 06:07:04'),
(28, 'Persona 5 Royal', 'Persona 5 Royal.jpg', 'Turn Base', 798000, 0, 'Friday 28-10-22 - 13:28:43'),
(33, 'Persona 4 Golden', 'Persona 4 Golden.png', 'Turn Base', 259999, 0, 'Friday 18-11-22 - 17:09:06'),
(34, 'Nier Replicant', 'Nier Replicant.png', 'Hack and Slash', 879000, 20, 'Wednesday 02-11-22 - 06:01:51'),
(36, 'Dark Souls', 'Dark Souls.png', 'Souls Like', 420000, 30, 'Wednesday 02-11-22 - 07:29:35'),
(37, 'Nier Automata', 'Nier Automata.png', 'Hack and Slash', 580000, 0, 'Wednesday 02-11-22 - 10:04:07'),
(39, 'The Witcher 3', 'The Witcher 3.png', 'Action RPG', 359999, 0, 'Friday 18-11-22 - 16:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(12, 'eko', '$2y$10$QbcmgzibDFoQBSFWVMWBXuIoNvrGZboBTS.YnxqvxsKTl3/PP1Jzu', 'user'),
(20, 'admin', '$2y$10$Pt0g6wZP7zNNAg4IZYEWH.qMY.X8i3ON7AJx0Sc0Hkv6vuIFnZqyi', 'admin'),
(21, 'dhimas', '$2y$10$RCutpu6S3CPlfAYEx1SpGOkRc0NxbwrNEi7Cd55G/dE7Xy7KmdOdW', 'user'),
(22, 'admin1', '$2y$10$28Wd/3qC8zzKnePe98D2Muce58FhU45Ut8mb5HJqTnnz/e3idgE4i', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
