-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2018 at 03:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perusahaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `kd_karyawan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `hak_akses_karyawan` varchar(25) NOT NULL,
  `username_karyawan` varchar(10) NOT NULL,
  `password_karyawan` varchar(255) NOT NULL,
  `jenis_kelamin_karyawan` varchar(20) NOT NULL,
  `jabatan_karyawan` varchar(20) NOT NULL,
  `no_hp_karyawan` varchar(15) DEFAULT NULL,
  `alamat_karyawan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`kd_karyawan`, `nama_karyawan`, `hak_akses_karyawan`, `username_karyawan`, `password_karyawan`, `jenis_kelamin_karyawan`, `jabatan_karyawan`, `no_hp_karyawan`, `alamat_karyawan`) VALUES
('kar1', 'Ahmad', 'admin', 'kar1', '$2y$10$F4PcaWbBw8dRH0aUaTN95u1ZIshvJ.wlpt73C9raFiTN9hHUXi79a', 'L', 'Programmer', '085xxx', 'Jalan 1'),
('kar2', 'Lutfi', 'karyawan', 'kar2', '$2y$10$f/CY2f5hcuKh1CKClLCpC.QD/r45Sa8EssH7kQLTYwk0baBMR5uoa', 'L', 'Analisis', '0878xx', 'Jalan 2'),
('kar3', 'Sidiq', 'karyawan', 'kar3', '$2y$10$L86wwPYIyGyPfapgZQaLtebMlp.X/k3ceCiKkwF12QFpTLig4NKtW', 'L', 'Android Dev', '0823xx', 'Jalan 3'),
('kar4', 'Nadi', 'karyawan', 'kar4', '$2y$10$sE2cQm7v3ANDNDHxP/G90er3bGXLK4BLj2wJVIarxuh4DAhKH2HLy', 'P', 'Bisnis Develop', '0857xx', 'Jalan 4'),
('kar5', 'kar', 'karyawan', 'kar5', '$2y$10$w.e8D4g.SIDtzrBsIRv5legZD2Lf1mJtH59XEp2GugNHkkx9sSg7O', 'L', 'Programmer', '080808', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran_karyawan` int(11) NOT NULL,
  `kd_karyawan_kehadiran` varchar(10) NOT NULL,
  `hari_tanggal_karyawan_kehadiran` date NOT NULL,
  `jam_datang_karyawan_kehadiran` time DEFAULT NULL,
  `jam_pulang_karyawan_kehadiran` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran_karyawan`, `kd_karyawan_kehadiran`, `hari_tanggal_karyawan_kehadiran`, `jam_datang_karyawan_kehadiran`, `jam_pulang_karyawan_kehadiran`) VALUES
(1, 'kar1', '2018-02-19', '07:30:00', '16:00:00'),
(2, 'kar1', '2018-02-20', '08:00:00', '16:30:00'),
(3, 'kar4', '2018-02-19', '07:50:00', '17:00:00'),
(4, 'kar2', '2018-02-19', '08:10:00', '17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `lupa_password`
--

CREATE TABLE `lupa_password` (
  `id_lupa_password` int(11) NOT NULL,
  `kd_karyawan_lupa_password` varchar(15) DEFAULT NULL,
  `password_baru_karyawan_lupa_password` varchar(255) DEFAULT NULL,
  `tanggal_ganti_lupa_password` date DEFAULT NULL,
  `jam_ganti_lupa_password` time DEFAULT NULL,
  `tanggal_verifikasi_lupa_password` date DEFAULT NULL,
  `jam_verifikasi_lupa_password` time DEFAULT NULL,
  `status_terpakai_lupa_password` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lupa_password`
--

INSERT INTO `lupa_password` (`id_lupa_password`, `kd_karyawan_lupa_password`, `password_baru_karyawan_lupa_password`, `tanggal_ganti_lupa_password`, `jam_ganti_lupa_password`, `tanggal_verifikasi_lupa_password`, `jam_verifikasi_lupa_password`, `status_terpakai_lupa_password`) VALUES
(7, 'kar5', '$2y$10$w.e8D4g.SIDtzrBsIRv5legZD2Lf1mJtH59XEp2GugNHkkx9sSg7O', '2018-02-23', '21:05:41', '2018-02-23', '21:05:51', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kd_karyawan`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran_karyawan`),
  ADD KEY `jam_datang_karyawan` (`jam_datang_karyawan_kehadiran`),
  ADD KEY `jam_pulang_karyawan` (`jam_pulang_karyawan_kehadiran`),
  ADD KEY `kd_karyawan_kehadiran` (`kd_karyawan_kehadiran`);

--
-- Indexes for table `lupa_password`
--
ALTER TABLE `lupa_password`
  ADD PRIMARY KEY (`id_lupa_password`),
  ADD KEY `kd_karyawan_lupa_password` (`kd_karyawan_lupa_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lupa_password`
--
ALTER TABLE `lupa_password`
  MODIFY `id_lupa_password` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`kd_karyawan_kehadiran`) REFERENCES `karyawan` (`kd_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lupa_password`
--
ALTER TABLE `lupa_password`
  ADD CONSTRAINT `lupa_password_ibfk_1` FOREIGN KEY (`kd_karyawan_lupa_password`) REFERENCES `karyawan` (`kd_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
