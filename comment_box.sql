-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 06:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_box`
--

CREATE TABLE `comment_box` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_box`
--

INSERT INTO `comment_box` (`id`, `name`, `message`, `time`) VALUES
(28, 'Vũ Doãn Dũng', 'Những chuyến thăm qua lại của những người đứng đầu chính phủ hai nước thể hiện mối quan hệ bền chặt, song phương và hữu nghị giữa hai quốc gia. Góp phần thúc đẩy sự phát triển kinh tế, xã hội và nâng cao chất lượng nguồn nhân lực Việt Nam khi mà nhiều doanh nghiệp Nhật Bản tiếp nhận người Việt đào tạo, làm việc tại cả Việt Nam và Nhật Bản.', '2023-01-24 14:04:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_box`
--
ALTER TABLE `comment_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_box`
--
ALTER TABLE `comment_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
