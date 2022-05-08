-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 12:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skck`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_skck`
--

CREATE TABLE `tb_skck` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(150) NOT NULL,
  `kebangsaan` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `tempat` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL,
  `nik` int(11) NOT NULL,
  `keperluan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skck`
--

INSERT INTO `tb_skck` (`id`, `nama`, `jk`, `kebangsaan`, `agama`, `tempat`, `tanggal_lahir`, `alamat`, `pekerjaan`, `nik`, `keperluan`) VALUES
(1, 'salam1', 'perempuan', 'ind', 'islam', 'api-api', '2021-11-09', 'api-api, rt.008 ,kec. waru, penajam paser utara', 'pekerjaan', 878888, 'bekerja'),
(2, 'reggy', 'laki-laki', 'inggris', 'islam', 'tambong', '2021-11-07', 'tambong rt.06', 'pekerjaan', 342343, 'bekerja'),
(3, 'putra', 'Laki-Laki', 'inggris', 'islam', 'muara pahu', '2021-10-31', 'muara pahu rt.09', 'pekerjaan', 848339, 'pekerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_pengguna` varchar(120) NOT NULL,
  `kata_sandi` varchar(120) NOT NULL,
  `level` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_pengguna`, `kata_sandi`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_skck`
--
ALTER TABLE `tb_skck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_skck`
--
ALTER TABLE `tb_skck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
