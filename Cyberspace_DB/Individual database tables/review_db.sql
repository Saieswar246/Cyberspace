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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review_db`
--
ALTER TABLE `review_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review_db`
--
ALTER TABLE `review_db`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
