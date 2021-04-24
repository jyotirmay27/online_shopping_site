-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `files` longtext NOT NULL,
  `EMAILID` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `favourites` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userID`, `NAME`, `files`, `EMAILID`, `PASSWORD`, `favourites`) VALUES
(13, 'Parth', 'repo/food/CodeKar@abc.com;cold coffee.txt;repo/food/CodeKar@abc.com;Kadai paneer.txt;repo/Food/CodeKar@abc.com;pizza.txt;repo/Food/CodeKar@abc.com;sandwich.txt;repo/Anime/CodeKar@abc.com;Death Note.txt;repo/Anime/CodeKar@abc.com;Kimetsu no Yaiba.txt;repo/Anime/CodeKar@abc.com;My Hero Academia.txt;repo/Anime/CodeKar@abc.com;Naruto Shippuden.txt;repo/Anime/CodeKar@abc.com;Naruto.txt;repo/Stand Up Comedy/CodeKar@abc.com;abhishek upmanyu.txt;repo/Stand Up Comedy/CodeKar@abc.com;akash gupta.txt;repo/Stand Up Comedy/CodeKar@abc.com;Anubhav Singh Bassi.txt;repo/Stand Up Comedy/CodeKar@abc.com;jaspreet singh.txt;repo/Stand Up Comedy/CodeKar@abc.com;Rahul Dua.txt;repo/Music/CodeKar@abc.com;despacito.txt;repo/Music/CodeKar@abc.com;Jai Ho.txt;repo/Music/CodeKar@abc.com;Memories.txt;repo/Music/CodeKar@abc.com;Taki Taki.txt;repo/Movies/CodeKar@abc.com;Inception.txt;repo/Movies/CodeKar@abc.com;Interstellar.txt;repo/Movies/CodeKar@abc.com;Joker.txt;repo/Movies/CodeKar@abc.com;The pursuit of happiness.txt;repo/Games/CodeKar@abc.com;Genshin Impact.txt;repo/Games/CodeKar@abc.com;Minecraft.txt;repo/Games/CodeKar@abc.com;Persona 3.txt;repo/Games/CodeKar@abc.com;Persona 4.txt;repo/Games/CodeKar@abc.com;Persona 5.jpg;', 'CodeKar@abc.com', '$2y$10$WWX2UNYWQu.BrMuAwf.b2e20rE/DEpIjj/f75.5K93wfdFzapPjG.', 'repo/food/CodeKar@abc.com;Kadai paneer.txt:'),
(14, 'Testing', ';', 'Testing@CodeKar.in', '$2y$10$NDR5FQTB23GtpvQDBE51yOhOjv3MWfTt9Qx.qogXeup2nrVcJ8yG2', ''),
(15, 'Parth Mittal', ';', 'mttparth306@gmail.com', '$2y$10$cdvG7HlUKcVSurOXSll6ReCowRbt9QgEaq29h.6oCOpxVioVt9XEu', 'repo/food/CodeKar@abc.com;cold coffee.txt:'),
(23, 'jyotirmay', ';', 'jyotirmay.jain27@gmail.com', '$2y$10$cAXg0UO4ESFGRRZ2PEYd1ukt.5O4bP6D.gxg5GxX5lErfgopWe52i', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
