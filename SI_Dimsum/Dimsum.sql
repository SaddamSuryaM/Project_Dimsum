-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2022 at 03:14 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Dimsum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `member_id` int(10) NOT NULL,
  `member_username` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`member_id`, `member_username`, `member_password`) VALUES
(2, 'husni', '$2y$10$8WpJ6TGeyG1eniCr4WuXFO41RbfBUroMIzMC6sqxrF.PgQcilUnNe');

-- --------------------------------------------------------

--
-- Table structure for table `dimsum`
--

CREATE TABLE `dimsum` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(11) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `produk`, `foto`, `desk`, `harga`) VALUES
(1, 'Dimsum Ayam', '20221025166670063440.png', 'Dimsum Ayam ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(2, 'Dimsum Sosis', '20221025166670156254.png', 'Dimsum Ayam ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(3, 'Dimsum Sayur', '20221025166670159833.png', 'Dimsum Sayur ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(4, 'Dimsum Salmon', '20221025166670163628.png', 'Dimsum Salmon ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000'),
(5, 'Dimsum Vulcano', '20221025166670166310.png', 'Dimsum Vulcano ini terbuat dari daging ayam pilihan, wortel, serta topping yang kemudian dibungkus kulit pangsit', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `dimsum`
--
ALTER TABLE `dimsum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
