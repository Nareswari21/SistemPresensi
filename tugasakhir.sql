-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 01:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id_attendance` int(100) NOT NULL,
  `id_person` int(100) NOT NULL,
  `id_course` int(50) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id_attendance`, `id_person`, `id_course`, `time_stamp`) VALUES
(1, 1, 6, '2021-01-31 20:46:39'),
(5, 1, 4, '2021-01-27 14:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_course` int(50) NOT NULL,
  `name_course` varchar(100) NOT NULL,
  `schedule` datetime NOT NULL,
  `lecturer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `name_course`, `schedule`, `lecturer`) VALUES
(1, 'Kecerdasan Buatan', '2021-02-08 07:00:00', 'Dr. Oky Dwi Nurhayati, ST, MT'),
(2, 'Kriptografi', '2021-02-08 09:00:00', 'Dr. R. Rizal Isnanto, MM, MT'),
(3, 'Grafika Komputer', '2021-02-08 11:30:00', 'Kurniawan Teguh Martono, ST, MT'),
(4, 'Dasar Komputer dan Pemrograman', '2021-02-08 12:30:00', 'Risma Septiana, ST, M.Eng'),
(5, 'Teknik Mikroprosesor', '2021-02-08 14:00:00', 'Dania Eridani, ST, M.Eng'),
(6, 'Rekayasa Perangkat Lunak', '2021-02-08 15:30:00', 'Ike Pertiwi, ST, MT');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id_person` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id_person`, `name`, `designation`, `gender`, `imagePath`) VALUES
(1, 'Nares', 'Student', 'female', 'people/1_Nares.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtab`
-- (See below for the actual view)
--
CREATE TABLE `viewtab` (
`name` varchar(100)
,`gender` varchar(10)
,`designation` varchar(10)
,`name_course` varchar(100)
,`time_stamp` datetime
,`imagePath` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `viewtab`
--
DROP TABLE IF EXISTS `viewtab`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtab`  AS  select `person`.`name` AS `name`,`person`.`gender` AS `gender`,`person`.`designation` AS `designation`,`course`.`name_course` AS `name_course`,`attendance`.`time_stamp` AS `time_stamp`,`person`.`imagePath` AS `imagePath` from ((`attendance` left join `person` on(`person`.`id_person` = `attendance`.`id_person`)) left join `course` on(`course`.`id_course` = `attendance`.`id_course`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id_attendance`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id_attendance` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
