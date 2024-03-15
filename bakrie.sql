-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2024 at 02:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakrie`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `No` int(11) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL,
  `Tanggal_Aktif_Jabatan` date DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL,
  `Status_Karyawan` enum('Aktif','Non-Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`No`, `NIP`, `Nama`, `Jenis_Kelamin`, `Jabatan`, `Tanggal_Aktif_Jabatan`, `Tanggal_Masuk`, `Status_Karyawan`) VALUES
(1, '1000', 'Lukman Hakim', 'Laki-laki', 'Supervisor HR', '2001-01-19', '1990-05-05', 'Aktif'),
(2, '1001', 'Saiful Anwar', 'Laki-laki', 'Asisten Manager Keuangan', '2005-11-20', '1988-01-10', 'Aktif'),
(3, '1002', 'Sinta Mei', 'Perempuan', 'Sekretaris', '2019-08-01', '2019-08-01', 'Aktif'),
(4, '1003', 'Tubagus', 'Laki-laki', 'Manager Produksi', '2002-02-05', '1986-03-20', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
