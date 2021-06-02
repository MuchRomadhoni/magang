-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 01:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_image`
--

CREATE TABLE `company_image` (
  `id_company` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_image`
--

INSERT INTO `company_image` (`id_company`, `gambar`, `judul`) VALUES
(1, 'proyek.jpeg', 'Jalan Kampung');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `tanggal`, `nama`, `email`, `subjek`, `isi`, `status`) VALUES
(1, '2021-03-08', 'Misdi Suprapto', 'smisdi@email.co.id', 'Pertanyaan', 'Apakah PT ini menerima mahasiswa magang?', 0),
(2, '2021-03-07', 'Supomo', 'spomo@email.co.id', 'Pertanyaan', 'Kapan PT ini menerima mahasiswa magang?', 0),
(3, '2021-03-09', 'haikal', 'haikalatth@sgbteam.id', 'Kerjasama', 'Saya ingin bekerjasama dengan PT ini', 1),
(4, '2021-03-09', 'Alex', 'Alexis@gmail.com', 'PDO', 'aosidjadsiojdas asoidjasidsadddddddddddddddd', 1),
(5, '2021-03-09', 'asdffsasf', 'asdasddas', 'adsdsas', 'asdsdasddsa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_services`
--

CREATE TABLE `product_services` (
  `id_ps` int(11) NOT NULL,
  `judul_ps` varchar(100) NOT NULL,
  `isi_ps` varchar(1000) NOT NULL,
  `img_ps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_services`
--

INSERT INTO `product_services` (`id_ps`, `judul_ps`, `isi_ps`, `img_ps`) VALUES
(1, 'Asphaltasdas', 'Sejarah perusahaan kami diwarnai kesuksesan menyelesaikan berbagai proyek konstruksinasional dan swasta dengan hasil yang memuaskan. Lorem ipsum dolor sit amet consectetur, adipisicing elit.Possimus, nostrum quam tempore delectus illum doloremque voluptatum corporis quisquam vero dolorum deserunt explicabo adipisci iste nesciunt velit suscipit recusandae temporibus saepe?', 'Untitled2.png'),
(2, 'General Contractor', 'Sejarah perusahaan kami diwarnai kesuksesan menyelesaikan berbagai proyek konstruksinasional dan swasta dengan hasil yang memuaskan. Lorem ipsum dolor sit amet consectetur, adipisicing elit.Possimus, nostrum quam tempore delectus illum doloremque voluptatum corporis quisquam vero dolorum deserunt explicabo adipisci iste nesciunt velit suscipit recusandae temporibus saepe?', '7c812a6cee0bf0a26c9ea.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_image`
--
ALTER TABLE `company_image`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `product_services`
--
ALTER TABLE `product_services`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_image`
--
ALTER TABLE `company_image`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_services`
--
ALTER TABLE `product_services`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
