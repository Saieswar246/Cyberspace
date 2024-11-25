-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `encryp_db`
--

CREATE TABLE `encryp_db` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `encryp_db`
--

INSERT INTO `encryp_db` (`id`, `username`, `email`, `password`) VALUES
(11, 'hasini', 'hasini2006@gmail.com', '$2y$10$LVanWNO4hHH1EXLC9M2qOe0gVkLLyF0j6q.RU1FF.RwzW4jEZwD3.'),
(13, 'suryanto', 'suryanto@gmail.com', '$2y$10$Xy0sddXzXVZu8Q5Iyx5Y9udgUHgO6OTEyuVzWvfz15yaqWFvY6R4i'),
(14, 'teddy', 'teddy@gmail.com', '$2y$10$BPo381r1JTTTdmVs8RP2FesIZWJ1.OETNlnWfXvWZSXXETI32LVLG'),
(15, 'doraemon', 'doraemon2110@gmail.com', '$2y$10$MgOLqQaOZEdmr13VzxI68emh5dcR2orsDtQQKJVtx.5OA3ocAmUTS'),
(16, 'meena', 'meenaakula1985@gmail.com', '$2y$10$O9/mvHbPikgvD1OuApd2S.rdMuoZ/1IGzn7D8EscV9q7PiY90v5qy'),
(17, 'test', 'test@gmail.com', '$2y$10$dykC1yYSClxZQX07PLRaW.6DXNzb.cQs8G5KMCOW/DcJfLNwqHLkK'),
(18, 'laxmi', 'laxmi@gmail.com', '$2y$10$ANC4/b./FlOUpxCyT0eHnu2dVk9kmhU1.D9dz5/hX/2kRwib2SB1S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encryp_db`
--
ALTER TABLE `encryp_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encryp_db`
--
ALTER TABLE `encryp_db`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
