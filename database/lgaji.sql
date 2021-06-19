-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 02:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gdasar` int(11) NOT NULL,
  `tdasar` int(11) NOT NULL,
  `tkemahalan` int(11) NOT NULL,
  `hkerja` int(11) NOT NULL,
  `ttransport` int(11) NOT NULL,
  `totransport` int(11) NOT NULL,
  `tprestasi` int(11) NOT NULL,
  `toprestasi` int(11) NOT NULL,
  `tjabatan` int(11) NOT NULL,
  `hluar` int(11) NOT NULL,
  `tluar` int(11) NOT NULL,
  `toluar` int(11) NOT NULL,
  `potong` int(11) NOT NULL,
  `bulan` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `tahun` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `id_user`, `gdasar`, `tdasar`, `tkemahalan`, `hkerja`, `ttransport`, `totransport`, `tprestasi`, `toprestasi`, `tjabatan`, `hluar`, `tluar`, `toluar`, `potong`, `bulan`, `tahun`) VALUES
(1, 1, 70000000, 25000000, 12000000, 30, 20500000, 615000000, 25000, 750000, 2500000, 25, 260000, 6500000, 12500000, '4', '2021'),
(4, 2, 1001, 10001, 100001, 101, 10001, 1010101, 10001, 1010101, 100001, 11, 10001, 110011, 160001, '1', '2021'),
(6, 2, 1000000, 18000000, 12000, 20, 2400000, 48000000, 250000000, 2147483647, 1500000, 16, 1822202000, 2147483647, 2000000000, '12', '2012'),
(7, 2, 1000000, 18000000, 12000, 20, 2400000, 48000000, 250000000, 2147483647, 1500000, 16, 1822202000, 2147483647, 2000000000, '1', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`, `keterangan`) VALUES
(1, 'Direktur1', 'Besar gaji'),
(3, 'Manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(2555) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `bagian` varchar(2555) NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `agama` enum('i','k','p','h','b') NOT NULL,
  `alamat` longtext NOT NULL,
  `hp` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('admin','karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_lengkap`, `email`, `id_jabatan`, `bagian`, `jk`, `agama`, `alamat`, `hp`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1, 'Programmer', 'l', 'i', 'Jl. Rumah Admin Suka-suka Gue yang punya sistem wkwk', '082552554755', 'admin', 'admin'),
(2, 'aan', 'andika mardanu', 'aan@gmail.com', 3, 'Kepala Video Porno', 'l', 'b', 'Jl. Karya 2 Di dkt rumah Cewek Cantik', '0785254752', 'aan', 'karyawan'),
(3, 'desfa', 'Desfa Iria', 'desfa@gmail.com', 3, 'Ketua Agama Andikaliah', 'l', 'i', 'Jl. Kelas Kemana Mesjid Ada', '085225225', 'desfa', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
