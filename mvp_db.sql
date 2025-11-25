-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 05:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembalap`
--

CREATE TABLE `pembalap` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tim` varchar(255) NOT NULL,
  `negara` varchar(255) NOT NULL,
  `poinMusim` int(11) DEFAULT 0,
  `jumlahMenang` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembalap`
--

INSERT INTO `pembalap` (`id`, `nama`, `tim`, `negara`, `poinMusim`, `jumlahMenang`) VALUES
(1, 'Lewis Hamilton', 'Mercedes', 'United Kingdom', 347, 11),
(2, 'Max Verstappen', 'Red Bull', 'Netherlands', 335, 10),
(3, 'Valtteri Bottas', 'Mercedes', 'Finland', 203, 2),
(4, 'Sergio Perez', 'Red Bull', 'Mexico', 190, 1),
(5, 'Carlos Sainz', 'Ferrari', 'Spain', 150, 0),
(7, 'Charles Leclerc', 'Ferrari', 'Monaco', 95, 0),
(8, 'Lando Norris', 'McLaren', 'United Kingdom', 88, 0),
(9, 'Pierre Gasly', 'AlphaTauri', 'France', 75, 0),
(10, 'Fernando Alonso', 'Alpine', 'Spain', 65, 0),
(13, 'George Russell', 'Mercedes', 'United Kingdom', 178, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sirkuit`
--

CREATE TABLE `sirkuit` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `panjang_km` decimal(5,2) DEFAULT NULL,
  `jumlah_tikungan` int(11) DEFAULT NULL,
  `kapasitas_penonton` int(11) DEFAULT NULL,
  `tahun_diresmikan` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sirkuit`
--

INSERT INTO `sirkuit` (`id`, `nama`, `negara`, `panjang_km`, `jumlah_tikungan`, `kapasitas_penonton`, `tahun_diresmikan`) VALUES
(1, 'Sirkuit Monza', 'Italia', 5.79, 11, 118000, '1922'),
(2, 'Silverstone Circuit', 'Inggris', 5.89, 18, 150000, '1948'),
(3, 'Suzuka Circuit', 'Jepang', 5.81, 18, 155000, '1962'),
(4, 'Circuit de Monaco', 'Monaco', 3.34, 19, 37000, '1929'),
(5, 'Circuit of the Americas', 'Amerika Serikat', 5.51, 20, 150000, '2012'),
(6, 'Circuit de Barcelona-Catalunya', 'Spain', 4.00, 140, 140000, '1991');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembalap`
--
ALTER TABLE `pembalap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sirkuit`
--
ALTER TABLE `sirkuit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembalap`
--
ALTER TABLE `pembalap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sirkuit`
--
ALTER TABLE `sirkuit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
