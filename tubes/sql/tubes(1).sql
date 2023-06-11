-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 11:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `persyaratan` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `tanggal_posting` date NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `gambar`, `judul`, `nama_perusahaan`, `lokasi`, `deskripsi`, `persyaratan`, `gaji`, `tanggal_posting`, `tanggal_kadaluarsa`) VALUES
(2, 'default.png', 'Marketing Executive', 'Perusahaan ABC', 'bandung', 'lowongan pekerjaan marketing', 'bisa', '6000000', '2023-06-01', '2023-06-08'),
(3, 'default.png', 'Graphic Designer', 'Studio Kreatif XYZ', 'Bandung', 'Lowongan pekerjaan desain grafis', '- Mahir menggunakan Adobe Photoshop', '7000000', '2023-06-01', '2023-06-30'),
(4, 'default.png', 'Web Developer', 'weBPro', 'Jakarta', 'Lowongan pekerjaan web developer', '- Pendidikan minimal S1 Teknik Informatika', '8000000', '2023-06-01', '2023-06-08'),
(5, 'default.png', 'Sales Representative', 'Distributor Makmur', 'Surakarta', 'Lowongan pekerjaan penjualan', 'Berpengalaman di bidang penjualan', '5500000', '2023-06-06', '2023-06-30'),
(6, 'default.png', 'Data Analyst', 'Perusahaan Data Solusi', 'Yogyakarta', 'Lowongan pekerjaan analis data', '- Memiliki pemahaman dalam analisis data', '7500000', '2023-06-06', '2023-06-30'),
(7, 'default.png', 'HR Manager', 'Konsultan HR', 'Jakarta', 'Lowongan pekerjaan manajer HR', '- Pengalaman minimal 5 tahun di bidang HR', '10000000', '2023-06-01', '2023-06-30'),
(8, 'default.png', 'content creator', 'Studio Kreatif XYZ', 'Bandung', 'bisa buat konten', 'bisa', '100000', '2023-06-01', '2023-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `role` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `username`, `password`, `role`) VALUES
(1, 'Dicky Dwi Dermawan', 'dicky@gmail.com', 'DIIKIII', 'paswod', ''),
(4, 'Dicky Dwi Dermawan', 'dikii@gmail.com', 'iniakundicky', 'ddd', ''),
(13, 'dasdasdas', 'dsadas@gmail.com', 'asdf', 'asdf', ''),
(14, 'qwe', 'qwerty@gmail.com', 'qwer', 'qqq', 'Admin'),
(15, 'agus', 'agus@gmail.com', 'AGUSSSS', 'aaa', 'user'),
(17, 'qaz', 'qaz@gmail.com', 'qaz', 'qaz', 'admin'),
(18, 'wsx', 'wsx@gmail.com', 'wsx', 'wsx', 'author'),
(19, 'ddd', 'ddd@gmail.com', 'ddd', 'ddd', 'user'),
(20, 'user', 'iniakunuser@gmail.com', 'iniakunuser', 'user', 'user'),
(21, 'iniakunadmin', 'iniakunadmin@gmail.com', 'iniakunadmin', 'admin', 'admin'),
(22, 'Miftahul Huda', 'miftahul.223040145@mail.unpas.ac.id', 'IaMipMip', '2004', 'user'),
(23, 'qwerfv', 'qwerfv@gmail.com', 'qwerfv', 'qwerfv', 'author'),
(24, 'qwsx', 'qwsx@gmail.com', 'qwsx', 'qwsx', ''),
(25, 'qwertyhn', 'qwertyhn@gmail.com', 'qwertyhn', 'qwertyhn', ''),
(26, 'qwertyuiop', 'qwertyuiop@gmail.com', 'qwertyuiop', 'qwertyuiop', ''),
(27, 'qazwsx', 'qazwsx@gmail.com', 'qazwsx', 'qazwsx', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
