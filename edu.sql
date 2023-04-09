-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 08:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `semester` tinyint(4) NOT NULL,
  `kodemtk` varchar(5) NOT NULL,
  `hadir` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `formatif` int(11) NOT NULL,
  `uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lahirdi` varchar(40) NOT NULL,
  `lahirtgl` date NOT NULL,
  `alamat` text NOT NULL,
  `kode` varchar(2) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `lahirdi`, `lahirtgl`, `alamat`, `kode`, `foto`) VALUES
('202102051', 'Herlinda', 'Bandung', '2023-03-14', 'Dadap', 'AK', 'profile.jpg'),
('202102058', 'Gani Ramadhan', 'Indramayu', '2002-09-22', 'Jl Dadap Baru, Juntinyuat', 'MI', '1.png'),
('202301001', 'Andika Pratama Putra Setiawan', 'Bogor', '2003-10-15', 'Jl. Pahlawan No. 5 Bandung', 'AK', 'profile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemtk` varchar(5) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `sks` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kodemtk`, `matakuliah`, `sks`) VALUES
('MI001', 'Web Fundamental', 4),
('MI002', 'Web Programming', 4),
('MI003', 'Web Framework Development', 4);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode` varchar(2) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `strata` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kode`, `prodi`, `strata`) VALUES
('AB', 'Administrasi Bisnis', 'D3'),
('AK', 'Akuntansi', 'D3'),
('BD', 'Bisnis Digital', 'S1'),
('HM', 'Hubungan Masyarakat', 'D3'),
('MI', 'Manajemen Informatika', 'D3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
