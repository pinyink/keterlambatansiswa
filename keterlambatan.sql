-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 07:25 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `keterlambatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL,
  `nama` varchar(64) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`, `nama`) VALUES
(5, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator', 'operator baru'),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin admin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`kode_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(12) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nama_kelas`) VALUES
(1, 'X AK1'),
(2, 'X AK2'),
(3, 'X AK3'),
(4, 'X AP1'),
(5, 'X AP2'),
(6, 'X AP3'),
(7, 'X MM'),
(8, 'X PdR'),
(9, 'X PM1'),
(10, 'X PM2'),
(11, 'X PS'),
(12, 'X TKJ1'),
(13, 'X TKJ2'),
(14, 'XI AK1'),
(15, 'XI AK2'),
(16, 'XI AK3'),
(17, 'XI AP1'),
(18, 'XI AP2'),
(19, 'XI AP3'),
(20, 'XI MM'),
(21, 'XI PdR'),
(22, 'XI PM1'),
(23, 'XI PM2'),
(24, 'XI PS'),
(25, 'XI TKJ1'),
(26, 'XI TKJ2'),
(27, 'XII AK1'),
(28, 'XII AK2'),
(29, 'XII AP1'),
(30, 'XII AP2'),
(31, 'XII AP3'),
(32, 'XII MM'),
(33, 'XII PdR'),
(34, 'XII PM1'),
(35, 'XII PM2'),
(36, 'XII PS'),
(37, 'XII TKJ1'),
(38, 'XII TKJ2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no` int(5) NOT NULL,
  `nis` int(6) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksitelat`
--

CREATE TABLE IF NOT EXISTS `transaksitelat` (
`no` int(11) NOT NULL,
  `nis` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `transaksitelat`
--
ALTER TABLE `transaksitelat`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `kode_kelas` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `transaksitelat`
--
ALTER TABLE `transaksitelat`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
