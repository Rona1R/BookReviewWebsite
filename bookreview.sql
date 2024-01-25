-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 10:13 PM
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
(4, 'JK', 'Rowlinggg'),
(5, 'Veronica', 'Roth'),
(6, 'Sarah', 'J. Maas'),
(7, 'Tahereh', 'Mafi'),
(8, 'Ashley', 'Poston'),
(9, 'Nicholas', 'Sparks'),
(10, 'Evelyn', 'Lozada'),
(11, 'Hannah', 'Orenstein'),
(12, 'Tahereh', 'Mafi'),
(13, 'Elise', 'Bryant'),
(14, 'Jasmine', 'Guillory'),
(15, 'W.', 'Shakespeare'),
(16, 'Jojo', 'Moyes'),
(17, 'Jojo', 'Moyes'),
(18, 'Veronica', 'Roth'),
(19, 'Veronica', 'Roth'),
(20, 'Veronica', 'Roth'),
(21, 'Veronica', 'Roth');

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
(6, 7),
(8, 9),
(9, 10),
(10, 11),
(11, 12),
(13, 14),
(14, 15);

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
(76, 2, 1, '          b'),
(77, 2, 3, '          book 3'),
(79, 16, 1, 'Excellent Book    '),
(80, 2, 12, 'very interesting book'),
(82, 2, 12, '          good book'),
(83, 2, 12, 'nice book'),
(89, 2, 10, 'definitely a must read'),
(93, 2, 9, 'The plot was very weak and boring'),
(94, 2, 11, 'Nice book and story\r\n'),
(95, 2, 11, 'Favorite book'),
(96, 2, 9, 'not very interesting to read'),
(100, 2, 11, 'Nice for some light reading'),
(105, 2, 2, 'Best book ever.Nothing else can compare'),
(106, 2, 9, 'I have mixed feelings about this book'),
(107, 2, 9, 'have read better ones'),
(113, 2, 2, 'best !!!!!'),
(114, 2, 2, 'better than i expected'),
(115, 2, 1, 'test0000'),
(116, 2, 5, 'test601'),
(117, 2, 1, 'test602'),
(121, 2, 3, 'Love everything Suzanne Collins writes'),
(122, 2, 3, 'super nice book'),
(123, 2, 4, 'test 1000000'),
(124, 2, 1, 'test20000000'),
(125, 2, 1, 'testtttttttttttttttttt'),
(126, 2, 5, 'testtftztgftzgzg'),
(127, 2, 1, 'test i fundit'),
(128, 2, 12, 'test koment'),
(129, 2, 1, 'ReviewTest');

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
(9, 'Romance', 'FOTOT/DeadRomantics.png', 'Dead Romantics'),
(10, 'Romance', 'FOTOT/TheNotebook.jpg', 'The Notebook'),
(11, 'Romance', 'FOTOT/ThePerfectDate.jpg', 'The Perfect Date'),
(12, 'Romance', 'FOTOT/LoveAtFirstLike.jpg', 'Love At First Like'),
(14, 'Romance', 'FOTOT/HappilyEverAfters.jpg', 'Happily Ever Afters'),
(15, 'Romance', 'FOTOT/TheProposal.jpg', 'The Proposal');

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
(4, 2, 17, NULL, NULL, 'Modified', '2024-01-25');

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
  MODIFY `IDAutori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `komenti`
--
ALTER TABLE `komenti`
  MODIFY `KomentiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `librat`
--
ALTER TABLE `librat`
  MODIFY `IDLibri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `LogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
