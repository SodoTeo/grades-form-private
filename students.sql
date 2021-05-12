-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 01:42 AM
-- Server version: 8.0.22
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grading`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `surname` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `fathername` varchar(45) NOT NULL,
  `mark1` decimal(4,2) DEFAULT '0.00',
  `mark2` decimal(4,2) DEFAULT '0.00',
  `mark3` decimal(4,2) DEFAULT '0.00',
  `mark4` decimal(4,2) DEFAULT '0.00',
  `mark5` decimal(4,2) DEFAULT '0.00',
  `mark6` decimal(4,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `surname`, `name`, `fathername`, `mark1`, `mark2`, `mark3`, `mark4`, `mark5`, `mark6`) VALUES
(4418100, 'ΤΕΣΤ', 'ΤΕΟ', 'ΝΤΑΡΚ', '0.00', '0.00', '6.00', '7.40', '0.00', '2.68'),
(4418212, 'ΣΟΝΤΟΛΕΣΚΟΥ', 'ΤΕΟΝΤΟΡ', 'ΜΙΧΑΗΛ', '9.00', '8.50', '0.00', '0.00', '10.00', '5.50'),
(4418214, 'SODOLESCU', 'TEODOR', 'MIHAIL', '9.00', '8.00', '0.00', '0.00', '10.00', '5.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
