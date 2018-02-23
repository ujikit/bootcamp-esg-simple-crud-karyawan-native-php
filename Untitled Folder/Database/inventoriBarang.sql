-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 12:50 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventoriBarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barangKeluar` int(11) NOT NULL,
  `namaCustomer_barangKeluar` varchar(25) NOT NULL,
  `merekBarang_barangKeluar` varchar(20) NOT NULL,
  `jenisBarang_barangKeluar` varchar(25) NOT NULL,
  `tanggal_barangKeluar` date NOT NULL,
  `jam_barangKeluar` time NOT NULL,
  `stok_barangKeluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barangKeluar`, `namaCustomer_barangKeluar`, `merekBarang_barangKeluar`, `jenisBarang_barangKeluar`, `tanggal_barangKeluar`, `jam_barangKeluar`, `stok_barangKeluar`) VALUES
(5, 'Tukiyem', 'HP 1b09au', 'Komputer', '2017-05-26', '12:19:46', 1),
(6, 'Rojimin', 'Lenovo 98989898', 'Komputer', '2017-05-26', '12:21:01', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_dataBarang` int(11) NOT NULL,
  `merek_dataBarang` varchar(20) NOT NULL,
  `foto_dataBarang` varchar(25) NOT NULL,
  `jenis_dataBarang` varchar(20) NOT NULL,
  `tanggalMasuk_dataBarang` date NOT NULL,
  `jamMasuk_dataBarang` time NOT NULL,
  `stok_dataBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_dataBarang`, `merek_dataBarang`, `foto_dataBarang`, `jenis_dataBarang`, `tanggalMasuk_dataBarang`, `jamMasuk_dataBarang`, `stok_dataBarang`) VALUES
(1, 'HP 1b09au', 'HP 1b09au', 'Komputer', '2017-05-09', '04:27:17', 2),
(12, 'Lenovo 98989898', 'Lenovo 98989898', 'Komputer', '2017-05-24', '12:04:19', 5),
(13, 'SSD 128GB', 'SSD 128GB', 'Hardisk', '2017-05-24', '12:11:04', 2),
(14, 'Epson IP 2770', 'Epson IP 2770', 'Printer', '2017-05-24', '12:11:53', 5),
(15, 'Canon MG 2555', 'Canon MG 2555', 'Printer', '2017-05-24', '12:12:24', 4),
(19, 'Epson 43434', 'Epson 43434', 'Printer', '2017-05-24', '12:31:31', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hakAkses` int(11) NOT NULL,
  `nama_hakAkses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hakAkses`, `nama_hakAkses`) VALUES
(1, 'Pegawai'),
(2, 'Pengunjung');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenisBarang` int(11) NOT NULL,
  `nama_jenisBarang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenisBarang`, `nama_jenisBarang`) VALUES
(3, 'Hardisk'),
(1, 'Komputer'),
(2, 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `id_loginUsers` int(11) NOT NULL,
  `namaPegawai_loginUsers` varchar(25) NOT NULL,
  `jabatan_loginUsers` varchar(20) NOT NULL,
  `username_loginUsers` varchar(10) NOT NULL,
  `password_loginUsers` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id_loginUsers`, `namaPegawai_loginUsers`, `jabatan_loginUsers`, `username_loginUsers`, `password_loginUsers`) VALUES
(1, 'admin Lho!', 'Pegawai', 'admin', 'admin'),
(2, 'Ukijit99', 'Pengunjung', 'ukijit', 'ukijit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barangKeluar`),
  ADD KEY `merekBarang_barangKeluar` (`merekBarang_barangKeluar`),
  ADD KEY `jenisBarang_barangKeluar` (`jenisBarang_barangKeluar`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_dataBarang`),
  ADD KEY `jenis_dataBarang` (`jenis_dataBarang`),
  ADD KEY `merek_dataBarang` (`merek_dataBarang`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hakAkses`),
  ADD KEY `nama_hakAkses` (`nama_hakAkses`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenisBarang`),
  ADD KEY `nama_jenisKendaraan` (`nama_jenisBarang`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id_loginUsers`),
  ADD KEY `jabatan_loginUsers` (`jabatan_loginUsers`),
  ADD KEY `namaPegawai_loginUsers` (`namaPegawai_loginUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barangKeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_dataBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hakAkses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenisBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id_loginUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`merekBarang_barangKeluar`) REFERENCES `data_barang` (`merek_dataBarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`jenisBarang_barangKeluar`) REFERENCES `jenis_barang` (`nama_jenisBarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`jenis_dataBarang`) REFERENCES `jenis_barang` (`nama_jenisBarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_users`
--
ALTER TABLE `login_users`
  ADD CONSTRAINT `login_users_ibfk_1` FOREIGN KEY (`jabatan_loginUsers`) REFERENCES `hak_akses` (`nama_hakAkses`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
