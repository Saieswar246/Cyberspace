-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 01:53 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `review_db`
--

CREATE TABLE `review_db` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_db`
--

INSERT INTO `review_db` (`id`, `name`, `email`, `review`) VALUES
(5, 'sai', 'saiakkula141@gmail.com', '<script>alert(document.cookie)</script>'),
(6, 'meena', 'admin@gmail.com', '<script>alert(\"Hi\")</script>'),
(7, 'meena', 'admin@gmail.com', '<script>alert(\"Hi\")</script>'),
(8, 'meena', 'admin@gmail.com', '&lt;script&gt;alert(document.cookie)&lt;/script&gt;'),
(12, 'meena', 'meenaakula1985@gmail.com', 'This website is awesome.'),
(13, '', '', '<script>document.cookie=\"Secureprogramming300IT\"</script>'),
(14, 'suryanto', 'suryanto@gmail.com', '<script>alert(\"Secure programming\")</script>'),
(15, 'meena', 'meenaakula1985@gmail.com', '&lt;script&gt;alert(&quot;Secure pprogramming&quot;)&lt;/script&gt;'),
(16, 'sai', 'teddy@gmail.com', '<script>alert(\"I am a Hacker\")</script>'),
(17, 'laxmi', 'laxmi@gmail.com', '<script>alert(document.cookie)</script>');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`id`, `username`, `email`, `password`) VALUES
(1, 'user', 'cyberspace@gmail.com', 'secure'),
(2, 'sai', 'sai123@gmail.com', 'Sai123'),
(3, 'test', 'cyber@gmail.com', 'test'),
(8, 'shiva', 'shiva@gmail.com', 'sree'),
(11, 'admin', 'admin@gmail.com', 'cyber'),
(12, 'suryanto', 'suryanto@gmail.com', 'secure'),
(13, 'laxmi', 'laxmi@gmail.com', '1962');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encryp_db`
--
ALTER TABLE `encryp_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_db`
--
ALTER TABLE `review_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encryp_db`
--
ALTER TABLE `encryp_db`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review_db`
--
ALTER TABLE `review_db`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
