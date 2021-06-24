-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 03:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `FullName` varchar(100) NOT NULL,
  `ID` varchar(11) NOT NULL,
  `GPA` float NOT NULL,
  `ImagePath` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`FullName`, `ID`, `GPA`, `ImagePath`) VALUES
('Eyad Ahmed Abdelfatah', '20191322456', 3.8, 'Eyad.jpg'),
('Yehia Mohamed Salah Elbalky', '20191477849', 3.94, 'Yehia.jpg'),
('Iyad Mohamed Fouad Hassan', '20191566916', 3.9, 'iyad.jpg'),
('Omar Mohamed Adel Elsabaawy', '20191566958', 3.91, 'Omar.jpg'),
('Khaled Ezzat Saad', '20191611924', 3.8, 'khaled.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
