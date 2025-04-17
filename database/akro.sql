-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:37 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akro`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
`id_user` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `status` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `password`, `email`, `status`) VALUES
(1, 'sayaadmin', 'admin123', 'polkiuyt47@gmail.com', 'admin'),
(3, 'inicoba', '123', 'apaaja@asdas.asdas', 'user'),
(4, 'coba', 'coy123', 'coba@gmail.com', 'user'),
(5, '', '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
`no` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE IF NOT EXISTS `coba` (
  `asdadad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
`id_konten` int(6) NOT NULL,
  `tema` varchar(20) NOT NULL,
  `linkfoto` varchar(125) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `tema`, `linkfoto`) VALUES
(5, 'Akrobat 2017', 'images/galeri/7.jpg'),
(6, 'Akrobat 2017', 'images/galeri/2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
 ADD PRIMARY KEY (`id_konten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
MODIFY `no` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
MODIFY `id_konten` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
