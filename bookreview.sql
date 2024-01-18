-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 08:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `IDAutori` int(11) NOT NULL,
  `Emri` varchar(15) DEFAULT NULL,
  `Mbiemri` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`IDAutori`, `Emri`, `Mbiemri`) VALUES
(1, 'Tahereh', 'Mafi'),
(2, 'George', 'Martin'),
(3, 'Suzanne', 'Collins'),
(4, 'JK', 'Rowling'),
(5, 'Veronica', 'Roth'),
(6, 'Sarah', 'J. Maas'),
(7, 'Tahereh', 'Mafi'),
(8, 'Ashley', 'Poston'),
(9, 'Nicholas', 'Sparks'),
(10, 'Evelyn', 'Lozada');

-- --------------------------------------------------------

--
-- Table structure for table `autorilibri`
--

CREATE TABLE `autorilibri` (
  `IDAutori` int(11) NOT NULL,
  `IDLibri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autorilibri`
--

INSERT INTO `autorilibri` (`IDAutori`, `IDLibri`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(5, 6),
(5, 8),
(6, 7),
(8, 9),
(9, 10),
(10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `librat`
--

CREATE TABLE `librat` (
  `IDLibri` int(11) NOT NULL,
  `Genre` varchar(15) DEFAULT NULL,
  `Src` varchar(255) DEFAULT NULL,
  `BookTitle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librat`
--

INSERT INTO `librat` (`IDLibri`, `Genre`, `Src`, `BookTitle`) VALUES
(1, 'Fantasy', 'FOTOT/BelieveMe.jpg', 'Believe me'),
(2, 'Fantasy', 'FOTOT/GOT.jpeg', 'Game of thrones'),
(3, 'Fantasy', 'FOTOT/BalladOfSongbirds.jpeg', 'HungerGames:TBOSAS'),
(4, 'Fantasy', 'FOTOT/HarryPotter.jpg', 'Harry Potter'),
(5, 'Fantasy', 'FOTOT/Divergent.jpg', 'Divergent'),
(6, 'Fantasy', 'FOTOT/Insurgent.jpeg', 'Insurgent'),
(7, 'Fantasy', 'FOTOT/CourtOfWings.jpeg', 'Court Of Wings and Ruin'),
(8, 'Fantasy', 'FOTOT/Four.jpeg', 'Four'),
(9, 'Romance', 'FOTOT/DeadRomantics.png', 'Dead Romantics'),
(10, 'Romance', 'FOTOT/TheNotebook.jpg', 'The Notebook'),
(11, 'Romance', 'FOTOT/ThePerfectDate.jpg', 'The Perfect Date');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Username`, `Password`, `Email`, `Role`) VALUES
(1, 'Fatmiri123', 'Fatmiri1234?!', 'fatmiri2006@gmail.com', 'user'),
(2, 'Rona123', 'Rona1234!?*', 'rushitirona@gmail.com', 'admin'),
(3, 'Rina123', 'Rina1234!?*', 'rushitirina@gmail.com', 'admin'),
(10, 'Arti123456', 'Arti123*?!', 'rushitiart123@gmail.com', 'user'),
(11, 'Arti1234567', 'Arti?!*222', 'rushitiart1234@gmail.com', 'user'),
(15, 'Rona1234', 'Rona123*?!', 'rushitironaa@gmail.com', 'user'),
(16, 'Fatime123', 'Fatime123!?*', 'fatimehyseni@gmail.com', 'user'),
(17, 'Rifati123', 'Rifati123!?*', 'rifathyseni@gmail.com', 'user'),
(18, 'Shuki123', 'Shuki123!?*', 'shukiHyseni123@gmail.com', 'user'),
(19, 'Erona123', 'Erona123!?*', 'eronaArifaj@gmail.com', 'user'),
(20, 'Delvina123', 'Rona123*?!', 'delvinashehu@gmail.com', 'user'),
(21, 'Elona', 'Elona123!?**', 'ElonaHyseni@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`IDAutori`);

--
-- Indexes for table `autorilibri`
--
ALTER TABLE `autorilibri`
  ADD PRIMARY KEY (`IDAutori`,`IDLibri`),
  ADD KEY `IDLibri` (`IDLibri`);

--
-- Indexes for table `librat`
--
ALTER TABLE `librat`
  ADD PRIMARY KEY (`IDLibri`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `IDAutori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `librat`
--
ALTER TABLE `librat`
  MODIFY `IDLibri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autorilibri`
--
ALTER TABLE `autorilibri`
  ADD CONSTRAINT `autorilibri_ibfk_1` FOREIGN KEY (`IDAutori`) REFERENCES `autori` (`IDAutori`),
  ADD CONSTRAINT `autorilibri_ibfk_2` FOREIGN KEY (`IDLibri`) REFERENCES `librat` (`IDLibri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
