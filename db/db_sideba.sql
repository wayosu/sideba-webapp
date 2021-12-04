-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2021 at 07:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sideba`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `jenis_bantuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id`, `nik`, `jenis_bantuan`) VALUES
(7, 5463523213, 'PKH'),
(8, 654321242344, 'BPNT');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id`, `id_surat`, `id_user`, `status`, `created_at`, `updated_at`) VALUES
(11, 1, 6, 'Diterima', '2021-12-04 18:59:04', '2021-12-04 10:59:33'),
(12, 2, 6, 'Ditolak', '2021-12-04 18:59:50', '2021-12-04 11:00:06'),
(13, 2, 6, 'Diterima', '2021-12-05 00:19:30', '2021-12-04 16:19:55'),
(14, 3, 6, 'Diterima', '2021-12-05 00:58:18', '2021-12-04 16:58:39'),
(15, 1, 7, 'Diterima', '2021-12-05 01:18:01', '2021-12-04 17:18:38'),
(16, 3, 6, 'Diterima', '2021-12-05 02:34:30', '2021-12-04 18:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `nama_surat`) VALUES
(1, 'Surat Keterangan Kelakuan Baik'),
(2, 'Surat Keterangan Usaha'),
(3, 'Surat Keteragan Tidak Mampu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(80) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `vaksin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `tgl_lahir`, `jk`, `alamat`, `dusun`, `pekerjaan`, `agama`, `email`, `password`, `role`, `vaksin`) VALUES
(6, 654321242344, 'Sofyan LM.', '1998-11-05', 'Laki-laki', 'Jl. Kalkulus', 'Dusun 1', 'Pekerja Lepas', 'Buddha', 'sofyan@gmail.com', '367c32a400f234e2c77a52f306499e08', 0, 1),
(7, 5463523213, 'Jess K.', '1988-02-01', 'Perempuan', 'Jl. xang xing', 'Dusun 2', 'PNS', 'Katolik', 'jess@gmail.com', '367c32a400f234e2c77a52f306499e08', 0, 1),
(9, 856746324546, 'Anwar', '1990-12-07', 'Laki-laki', '-', 'Dusun 2', 'Admin SIDEBA', 'Konghucu', 'ilham@gmail.com', '0192023a7bbd73250516f069df18b500', 1, 1),
(10, 45632234234, 'Rizal A. Hasa', '1999-02-09', 'Laki-laki', 'Limboto Barat', 'Dusun 1', 'PNS', 'Kristen', 'rizal@gmail.com', '367c32a400f234e2c77a52f306499e08', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
