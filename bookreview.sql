-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 01:53 AM
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
(10, 'Evelyn', 'Lozada'),
(11, 'Hanah', 'Orenstein'),
(12, 'Tahereh', 'Mafi'),
(13, 'Elisse', 'Bryant'),
(14, 'Jasmine', 'Guillory'),
(15, 'W.', 'Shakespeare'),
(16, 'Jojo', 'Moyes'),
(17, 'Jojo', 'Moyes'),
(18, 'Veronica', 'Roth'),
(19, 'Veronica', 'Roth'),
(20, 'Veronica', 'Roth'),
(21, 'Veronica', 'Roth'),
(22, 'Jojo', 'Moyes'),
(23, 'Ashley', 'Poston'),
(24, 'Tahereh', 'Mafi'),
(25, 'Tahereh', 'Mafi'),
(26, 'Sarah', 'j.Mass'),
(27, 'Madelline', 'Miller');

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
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(5, 6),
(9, 10),
(10, 11),
(11, 12),
(13, 14),
(14, 15),
(22, 23),
(23, 24),
(25, 26),
(26, 27),
(27, 28);

-- --------------------------------------------------------

--
-- Table structure for table `komenti`
--

CREATE TABLE `komenti` (
  `KomentiID` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `IDLibri` int(11) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komenti`
--

INSERT INTO `komenti` (`KomentiID`, `UserId`, `IDLibri`, `content`) VALUES
(80, 2, 12, 'very interesting book'),
(82, 2, 12, '          good book'),
(83, 2, 12, 'nice book'),
(89, 2, 10, 'definitely a must read'),
(94, 2, 11, 'Nice book and story\r\n'),
(95, 2, 11, 'Favorite book'),
(100, 2, 11, 'Nice for some light reading'),
(105, 2, 2, 'Best book ever.Nothing else can compare'),
(114, 2, 2, 'better than i expected'),
(116, 2, 5, 'test601'),
(121, 2, 3, 'Love everything Suzanne Collins writes'),
(122, 2, 3, 'super nice book'),
(126, 2, 5, 'testtftztgftzgzg'),
(128, 2, 12, 'test koment');

-- --------------------------------------------------------

--
-- Table structure for table `librat`
--

CREATE TABLE `librat` (
  `IDLibri` int(11) NOT NULL,
  `Genre` varchar(15) DEFAULT NULL,
  `Src` varchar(255) DEFAULT NULL,
  `BookTitle` varchar(100) DEFAULT NULL,
  `ModifiedBy` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librat`
--

INSERT INTO `librat` (`IDLibri`, `Genre`, `Src`, `BookTitle`, `ModifiedBy`) VALUES
(2, 'Fantasy', 'FOTOT/GOT.jpeg', 'Game of Thrones', 'Rona123'),
(3, 'Fantasy', 'FOTOT/BalladOfSongbirds.jpeg', 'The Hunger Games', 'Rina123'),
(4, 'Fantasy', 'FOTOT/HarryPotter.jpg', 'Harry Potter', 'Rina123'),
(5, 'Fantasy', 'FOTOT/Divergent.jpg', 'Divergent', 'Rona123'),
(6, 'Fantasy', 'FOTOT/Insurgent.jpeg', 'Insurgent', 'Rona123'),
(10, 'Romance', 'FOTOT/TheNotebook.jpg', 'The Notebook', 'Rona123'),
(11, 'Romance', 'FOTOT/ThePerfectDate.jpg', 'The Perfect Date', 'Rona123'),
(12, 'Romance', 'FOTOT/LoveAtFirstLike.jpg', 'Love At First Like', 'Rona123'),
(14, 'Romance', 'FOTOT/HappilyEverAfters.jpg', 'Happily Ever Afters', 'Rina123'),
(15, 'Romance', 'FOTOT/TheProposal.jpg', 'The Proposal', 'Rina123'),
(23, 'Romance', 'FOTOT/MeBeforeYou.jpg', 'Me Before You', 'Rina123'),
(24, 'Romance', 'FOTOT/DeadRomantics.png', 'Dead Romantics', 'Rina123'),
(26, 'Fantasy', 'FOTOT/BelieveMe.jpg', 'Believe Me', 'Rina123'),
(27, 'Fantasy', 'FOTOT/CourtOfWings.jpeg', 'Court Of Wings and Ruin', 'Rona123'),
(28, 'Romance', 'FOTOT/SongOfAchilles.jpg', 'Song of Achilles', 'Rina123');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `LogId` int(11) NOT NULL,
  `AdminID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `IDLibri` int(11) DEFAULT NULL,
  `KomentiID` int(11) DEFAULT NULL,
  `Ndryshimi` varchar(15) DEFAULT NULL,
  `Koha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`LogId`, `AdminID`, `UserID`, `IDLibri`, `KomentiID`, `Ndryshimi`, `Koha`) VALUES
(1, 2, NULL, 1, NULL, 'Modified', '2024-01-25'),
(2, 2, NULL, 22, NULL, 'Deleted', '2024-01-25'),
(3, 2, 1, NULL, NULL, 'Deleted', '2024-01-25'),
(4, 2, 17, NULL, NULL, 'Modified', '2024-01-25'),
(5, 2, NULL, NULL, 115, 'Deleted', '2024-01-26'),
(6, 2, NULL, NULL, 76, 'Deleted', '2024-01-26'),
(7, 2, NULL, NULL, 77, 'Deleted', '2024-01-26'),
(8, 2, NULL, 9, NULL, 'Deleted', '2024-01-26'),
(9, 3, NULL, NULL, 123, 'Deleted', '2024-01-26'),
(10, 3, NULL, NULL, 113, 'Deleted', '2024-01-26'),
(11, 3, NULL, 23, NULL, 'Added', '2024-01-26'),
(12, 3, NULL, 24, NULL, 'Added', '2024-01-26'),
(13, 3, NULL, 4, NULL, 'Modified', '2024-01-26'),
(14, 3, NULL, 4, NULL, 'Modified', '2024-01-26'),
(15, 3, NULL, 1, NULL, 'Deleted', '2024-01-26'),
(16, 3, NULL, 25, NULL, 'Added', '2024-01-26'),
(17, 3, NULL, 25, NULL, 'Deleted', '2024-01-26'),
(18, 3, NULL, 26, NULL, 'Added', '2024-01-26'),
(19, 3, NULL, 14, NULL, 'Modified', '2024-01-26'),
(20, 2, NULL, 2, NULL, 'Modified', '2024-01-26'),
(21, 2, NULL, 3, NULL, 'Modified', '2024-01-26'),
(22, 2, NULL, 5, NULL, 'Modified', '2024-01-26'),
(23, 2, NULL, 6, NULL, 'Modified', '2024-01-26'),
(24, 2, NULL, 7, NULL, 'Deleted', '2024-01-26'),
(25, 2, NULL, 27, NULL, 'Added', '2024-01-26'),
(26, 2, NULL, 10, NULL, 'Modified', '2024-01-26'),
(27, 2, NULL, 11, NULL, 'Modified', '2024-01-26'),
(28, 2, NULL, 12, NULL, 'Modified', '2024-01-26'),
(29, 3, NULL, 15, NULL, 'Modified', '2024-01-26'),
(30, 3, NULL, 23, NULL, 'Modified', '2024-01-26'),
(31, 3, NULL, 24, NULL, 'Modified', '2024-01-26'),
(32, 3, NULL, 28, NULL, 'Added', '2024-01-26'),
(33, 3, NULL, 3, NULL, 'Modified', '2024-01-26');

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
(2, 'Rona123', 'Rona1234!?*', 'rushitirona@gmail.com', 'admin'),
(3, 'Rina123', 'Rina1234!?*', 'rushitirina@gmail.com', 'admin'),
(10, 'Arti123456', 'Arti123*?!', 'rushitiart123@gmail.com', 'user'),
(11, 'Arti1234567', 'Arti?!*222', 'rushitiart1234@gmail.com', 'user'),
(15, 'Rona1234', 'Rona123*?!', 'rushitironaa@gmail.com', 'user'),
(16, 'Fatime123', 'Fatime123!?*', 'fatimehyseni@gmail.com', 'user'),
(17, 'Rifati123', 'Rifati123!?*', 'rifathyseni@gmail.com', 'user'),
(21, 'Elona1234', 'Elona123!?**', 'ElonaHyseni@gmail.com', 'user');

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
-- Indexes for table `komenti`
--
ALTER TABLE `komenti`
  ADD PRIMARY KEY (`KomentiID`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `IDLibri` (`IDLibri`);

--
-- Indexes for table `librat`
--
ALTER TABLE `librat`
  ADD PRIMARY KEY (`IDLibri`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`LogId`),
  ADD KEY `AdminID` (`AdminID`);

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
  MODIFY `IDAutori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `komenti`
--
ALTER TABLE `komenti`
  MODIFY `KomentiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `librat`
--
ALTER TABLE `librat`
  MODIFY `IDLibri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `LogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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

--
-- Constraints for table `komenti`
--
ALTER TABLE `komenti`
  ADD CONSTRAINT `komenti_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `komenti_ibfk_2` FOREIGN KEY (`IDLibri`) REFERENCES `librat` (`IDLibri`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
