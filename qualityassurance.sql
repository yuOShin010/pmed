-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 08:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualityassurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `pmed_add_checkbox`
--

CREATE TABLE `pmed_add_checkbox` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmed_add_checkbox`
--

INSERT INTO `pmed_add_checkbox` (`id`, `course_code`, `course_desc`) VALUES
(1, 'Bachelor o', 'Bachelor of Science in Education'),
(2, 'asdjasdhad', 'asdjasdhadfhjsahdffaf'),
(3, 'BSOA', 'asdjhasldjalsdjlasdasd'),
(4, 'BSEd', 'Bachelor of Science in Education');

-- --------------------------------------------------------

--
-- Table structure for table `pmed_checklist`
--

CREATE TABLE `pmed_checklist` (
  `id` int(11) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmed_profiling`
--

CREATE TABLE `pmed_profiling` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `profile_pic` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmed_profiling`
--

INSERT INTO `pmed_profiling` (`id`, `fname`, `sname`, `position`, `email`, `profile_pic`) VALUES
(1, 'jaysonn', 'Garcia', 'Pmed', 'Jaysongarcia04', 'jaysonn63c24b6a9299b9.45023554.jpg'),
(2, 'asasdasd', 'asdasdasd', 'asdasdasdasd', 'sakldhalksd@kdhaklsd', 'asasdasd63c501fc329346.56931647.jpg'),
(3, 'jaysonnnnnnnn', 'asdasdasd', 'Pmed', 'Jaysongarcia04@gmail.com', 'jaysonnnnnnnn63c502207e47c5.59567779.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pmed_registry_pdf`
--

CREATE TABLE `pmed_registry_pdf` (
  `id_si` int(11) NOT NULL,
  `survey_code` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pmed_registry_pdf`
--

INSERT INTO `pmed_registry_pdf` (`id_si`, `survey_code`, `title`, `pdf_file`) VALUES
(1, '', 'Jayson Cert', 'Python Basics Cert.pdf'),
(2, '', 'asdasdasd', 'Python Basics Cert.pdf'),
(3, '', 'Honda Beat', 'Network Basics.pdf'),
(4, '', 'Jay', 'Network Basics.pdf'),
(5, 'SI-82966-5', 'Garcia', 'LINUX BASIS CERT.pdf'),
(6, 'SI-24285-6', 'asdasdasdasdasdasdas', 'Public-Cloud Cert.pdf'),
(7, 'SI-59287-7', 'htdkjglkjhgjkhglkglkg', 'Public-Cloud Cert.pdf'),
(8, 'SI-82781-8', '1223234', 'ITSP3 LESSON 1-5.txt'),
(9, 'SI-14795-9', 'skdjfgkjsdfgjsdkfsf', 'Jayson Garcia Requirements.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pmed_add_checkbox`
--
ALTER TABLE `pmed_add_checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmed_checklist`
--
ALTER TABLE `pmed_checklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmed_profiling`
--
ALTER TABLE `pmed_profiling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmed_registry_pdf`
--
ALTER TABLE `pmed_registry_pdf`
  ADD PRIMARY KEY (`id_si`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pmed_add_checkbox`
--
ALTER TABLE `pmed_add_checkbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pmed_checklist`
--
ALTER TABLE `pmed_checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmed_profiling`
--
ALTER TABLE `pmed_profiling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pmed_registry_pdf`
--
ALTER TABLE `pmed_registry_pdf`
  MODIFY `id_si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
