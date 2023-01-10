-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 02:46 PM
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
-- Database: `registration-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `address`, `phone`, `email`, `password`, `urole`, `created_at`) VALUES
(2, 'rry006', 'tot', 'tat69', '14/197 กทม.', 622951262, 'rry009@gmail.com', '123456', 'admin', '2023-01-09 12:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET big5 COLLATE big5_chinese_ci NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `address`, `phone`, `email`, `password`, `urole`, `created_at`) VALUES
(11, 'tat', 'pannatat', 'tat123', '50/156 นนทบุรี', 622951263, 'pannatat.b555@gmail.com', '$2y$10$0O0bI18mQAXiZyexpcrd0ePxvKy4Xmsnuo4InlERQp2sdyySmX282', 'admin', '2022-11-25 20:02:46'),
(12, 'tat', 'tnt', 'tat5554', '50/156 นนทบุรี', 622951263, 'pannatat.b@gmail.com', '$2y$10$EL3u4hJwRa8QEAiQA9a/E.VSKUwkx6JKMgj/4PjA3HfX7WRvDAnRq', 'user', '2022-11-25 20:47:38'),
(13, 'Pat', 'Nama', 'PP007', 'บางใหญ่ซิตี้ ซอย 6/5 ตำบล บางรักพัฒนา อำเภอบางบัวทอง นนทบุรี 11110', 984145941, '0984145941@gmail.com', '$2y$10$Q7mTiR9XIaVtWw0hplsMHunQsKPrSwT4BZ626ZytWLV6YuSrs2v5O', 'user', '2022-11-25 21:40:44'),
(14, 'Jib', 'Nava', 'Jid3425', 'เลขที่ 92/3-4 หมู่ 6 ซอย วัดลาดปลาดุก ถนน วัดลาดปลาดุก ตำบล บางรักพัฒนา อำเภอบางบัวทอง นนทบุรี 11110', 916554452, '0916554452@gmail.com', '$2y$10$COguHJslVOdC2YSQBriGZ.6dnbJdhLsJp3Ycf8Z3fLKnNAWReXECi', 'user', '2022-11-25 21:43:09'),
(15, 'worker', 'wor', 'worker001', 'เลขที่ 92/3-4 หมู่ 6 ซอย วัดลาดปลาดุก ถนน วัดลาดปลาดุก ตำบล บางรักพัฒนา อำเภอบางบัวทอง นนทบุรี 11110', 984145941, 'pannatat.r@gmail.com', '$2y$10$u6dqAxe0tm8BeaPoRP8oqO0Ub.NuJBo3PIHPPGPKsMsE8VSiBMZJi', 'worker', '2022-11-26 06:49:06'),
(16, 'Awfe', 'Sfdyd', 'par3897', 'เลขที่ 90/3 หมู่ 6 ซอย วัดลาดปลาดุก ถนน วัดลาดปลาดุก ตำบล บางรักพัฒนา อำเภอบางบัวทอง นนทบุรี 11110', 916554452, '3254325@gamil.com', '$2y$10$tjQPbwh7YcoOi/aQrwr5pOYQ84.y46D.JaHXUF66Guh5gQH8Fir3G', 'user', '2022-11-26 10:12:32'),
(17, 'Jack', 'po', '32432432', 'เลขที่ 90/3 หมู่ 6 ซอย วัดลาดปลาดุก ถนน วัดลาดปลาดุก ตำบล บางรักพัฒนา อำเภอบางบัวทอง นนทบุรี 11110', 622431263, 'patiphan@gmail.com', '$2y$10$MzM01o79lVm5C8aCsHkcH.mrPdH.Bz6kQ0sIQDKrxQrzI4Sx7DTRO', 'user', '2022-11-27 15:12:27'),
(18, 'rfserf', 'dsad', 'tat123', 'บางใหญ่ซิตี้ ซอย 6/5 ตำบล บางรักพัฒนา อำเภอบางบัวทอง นนทบุรี 11110', 984145941, 'tat324@gmail.com', '$2y$10$xLX2XPSn7pJMXTblp0pWcukw5Ln9txJiFW.Mvy.4cAepUfnQNnmz.', 'user', '2022-11-28 02:33:39'),
(19, 'ad', 'min', 'Tat888', '11/132', 622951263, 'admin2@gmail.com', '$2y$10$XGH57MtPrMqccRcfll4G6.8oIlkCn1NogE7UGgc30xAYLzXsodIdi', 'admin', '2022-12-12 07:16:07'),
(20, 'ครูบา', 'ไม่ใช้ไฟฟ้า', 'QQ007', '14/197 กทม.', 622951263, 'QQ007@game.com', '$2y$10$eQ2odaNEyn7CknOJOIiSNOlBsTNGwz.4TmIqo/KMowF78ibcpnNhG', 'user', '2022-12-15 21:25:21'),
(21, 'อาบาบา', 'ฑะนะญัง', '?BYD353452', '14/197 กทม.', 623941273, 'byd53452.d@gmail.com', '$2y$10$LdeFFnGlbhL9heITLllha.XJyiNjFKJykielOqcOoBbcWKrhI1pbq', 'user', '2022-12-19 22:56:57'),
(22, 'label', 'melow', 'khunsuek', '110', 867773839, 'gift@gmail.com', '$2y$10$snTObGNOVyWNt8ssbVh8deyvra0b1J5rDh0MIAtkPVTukvd.Y.mV.', 'user', '2022-12-20 06:43:30'),
(23, 'ปัณณทัต', 'บูรณสันติ', 'tat777', '14/197 กทม.', 622951263, 'tat555@gmail.com', '$2y$10$Hlk.shdX6tnrjSEbSfMVM.iiALW4pUoLKhB0ESO1uR/ASsH60bXlq', 'user', '2022-12-20 07:11:59'),
(24, 'ปัณณทัต', 'บูรณสันติ', 'TH0111', '14/197 กทม.', 622951263, 'th0111@gmail.com', '$2y$10$W3tdxGFT/1yRtlts4.yWIeBiMEGzYBrj/CzsxqeaqT6P30zYuptzi', 'user', '2023-01-09 11:17:41'),
(25, 'ปัณณทัต', 'บูรณสันติ', 'RRET007', '14/197 กทม.', 622951263, 'RRET007@gmail.com', '$2y$10$SLlw4gPtzMIw97L7cLXcl.cjhGN6d4rkk5UZC3hbpAvCw3VT1RfIC', 'user', '2023-01-09 11:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
