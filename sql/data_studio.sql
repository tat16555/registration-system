-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 02:45 PM
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
-- Database: `data_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_Cou` int(10) NOT NULL,
  `id_Type` int(10) NOT NULL,
  `Type_Name` varchar(255) NOT NULL,
  `Cou_Name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_Cou`, `id_Type`, `Type_Name`, `Cou_Name`, `details`, `created_at`) VALUES
(8, 1, 'Basic/Beginner Class training', 'Basic/Beginner Class Training', 'เป็นคอร์สเรียนสำหรับผู้ที่ไม่เคยเรียนหรือฝึกทักษะศิลปะมวยไทยมาก่อน โดยคอร์สเรียนนี้เหมาะสำหรับผู้หญิง หรือเด็กอายุตั้งแต่ 3-15 ปีขึ้นไปและผู้ใหญ่ที่ไม่เป็นมวยมาก่อน โดยการฝึกสอนจะมีการฝึกยืนมวย การย้ำเท้า การออกหมัด การเข่า การศอกแบบพื้นฐานของมวยไทย และลำ', '2023-01-09 12:36:14'),
(9, 2, 'Intermediate Class Training', 'Intermediate Class Training', 'เป็นคอร์สเรียนที่เหมาะสำหรับบุคคลที่มีพื้นฐานศิลปะการต่อสู้มวยไทยแล้ว เช่น การยืนมวย การย้ำเท้า การเข่า การศอก การเตะ เป็นต้นหรือเคยเรียนมาก่อนโดยมีผู้เชี่ยวชาญสอน คอร์สเรียนนี้จะแตกต่างจากแบบไม่มีพื้นฐานตรงจะเน้นความแรง เร็ว และการใช้เวลาเรียนรู้นานกว่าเ', '2023-01-09 12:37:22'),
(10, 3, 'Basic/Beginner Class training', 'Advance Class Training', 'เป็นคอร์สเรียนสำหรับนักมวยมืออาชีพที่ฝึกฝนร่างกาย เพื่อเตรียมตัวไปแข่งขัน จะต้องเรียนรู้ทักษะการเอาชนะคู่ต่อสู้ การสอนจะเจาะลึกลงไปกว่าแบบมีพื้นฐาน เน้นความแข็งแรง และความรวดเร็ว การฝึกฝนเป็นสามเท่าจากคอร์สแบบมีพื้นฐาน และจะมีการกำหนดการกินอาหารให้ครบ 5 ห', '2023-01-09 12:37:40'),
(11, 4, 'Private Training', 'Private Training', 'สำหรับผู้ที่ไม่ชื่นชอบการเข้าคลาสหลายๆคนสามารถเลือกเรียนแบบ Private Training ได้ ข้อดีคือสามารถเลือกเทรนเนอร์ที่ตัวเองชื่นชอบหรือสนใจมาสอนแบบตัวต่อตัวได้ โดยการสอนจะสอนตามความถนัดของครูผู้สอน เช่น การฝึกพื้นฐานการยืนมวย การย้ำเท้า การเตะ การออกหมัด การเข่', '2023-01-09 12:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `tableclass`
--

CREATE TABLE `tableclass` (
  `id_Ta` int(10) NOT NULL,
  `Ta_Date` varchar(255) NOT NULL,
  `id_Teach` varchar(255) NOT NULL,
  `id_Cou` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_Teach` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_Cou`);

--
-- Indexes for table `tableclass`
--
ALTER TABLE `tableclass`
  ADD PRIMARY KEY (`id_Ta`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_Teach`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_Cou` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tableclass`
--
ALTER TABLE `tableclass`
  MODIFY `id_Ta` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_Teach` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
