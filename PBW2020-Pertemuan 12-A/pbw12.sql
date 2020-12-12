-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 12:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw12`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nimMhsw` int(11) NOT NULL,
  `namaMhsw` varchar(30) NOT NULL,
  `angkatanMhsw` int(4) NOT NULL,
  `fakultasMhsw` varchar(30) NOT NULL,
  `jurusanMhsw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nimMhsw`, `namaMhsw`, `angkatanMhsw`, `fakultasMhsw`, `jurusanMhsw`) VALUES
(1808561025, 'I Kadek Agus Chandra', 2018, 'MIPA', 'Teknik Informatika'),
(1808561001, 'sfsafira', 2018, 'MIPA', 'Teknik Informatika'),
(1808561020, 'Marissa Audina Siti', 2018, 'MIPA', 'Teknik Informatika'),
(1808561012, 'Febri Wira', 2018, 'MIPA', 'Teknik Informatika'),
(1801561011, 'Firdaus Zulkarnain', 2018, 'MIPA', 'Teknik Informatika'),
(1801561008, 'Farin Istighfarizky', 2018, 'MIPA', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', 1),
('informatika', 'informatika', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
