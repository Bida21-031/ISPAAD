-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 01:39 PM
-- Server version: 8.0.32
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ispaad`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `name` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `appdate` date NOT NULL,
  `area` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `setDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`name`, `contact`, `appdate`, `area`, `setDate`) VALUES
('botho neo', '74857485', '2023-05-04', 'tlokweng', '2023-05-09'),
('Rebaone Mochabeng', '2345678', '2023-05-24', 'Marang', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `assistants`
--

CREATE TABLE `assistants` (
  `username` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `confirm_password` varchar(55) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assistants`
--

INSERT INTO `assistants` (`username`, `email`, `password`, `confirm_password`) VALUES
('a', 's@w', 's', 'xx'),
('admin', 'admin@gmail.com', 'admin', 'admin'),
('BOTHO NEO', 'bothodolly@gmail.com', 'bothoneo', 'bothoneo'),
('ppopo', 'xssac@wedfg', 'asdfgh', 'axcvb'),
('sdfghfrdew', 'modirapulaleatile@gmail.com', 'qdfghjhgf', 'asdfghgfds');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `name` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `fam_area` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `ploArea` int NOT NULL,
  `ftz` int NOT NULL,
  `seeds` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`name`, `surname`, `fam_area`, `ploArea`, `ftz`, `seeds`) VALUES
('asdf', '0', '0', 1234, 3, 3),
('asdfg', '0', '0', 234, 123, 123),
('Maatla ', 'Neo', 'Tlokweng', 5, 2, 23),
('tom', 'dsa', 'dfghm', 43, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `area` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `size` int NOT NULL,
  `report` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `seeds` int NOT NULL,
  `fertilizers` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`name`, `area`, `size`, `report`, `seeds`, `fertilizers`) VALUES
('Lea Modirapula', '0', 4, 'Ploughed hybrid Maize  ', 4, 2),
('Leatile Modirapula', '0', 4, 'Ploughed hybrid Maize  ', 4, 0),
('qqfr', '0', 33, 'f3', 222, 22),
('Rebaone Mochabeng', '0', 4, 'Ploughed Maize and Lab-lab', 4, 2),
('Rejoice Modirapula', '0', 4, 'Ploughed hybrid Maize  ', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(130) NOT NULL,
  `lastname` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(1, 'Botho', 'Neo', 'bothodolly@gmail.com', '72358205', 'bothoneo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `assistants`
--
ALTER TABLE `assistants`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
