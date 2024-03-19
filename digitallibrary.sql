-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 07:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitallibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(225) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `foto` text NOT NULL,
  `buku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDbuku`, `judul`, `kategori`, `deskripsi`, `penulis`, `penerbit`, `tahunterbit`, `foto`, `buku`) VALUES
(1, 'Bootstrap Uncover', 'Coding', 'Buku ini berisi tentang penjelasan Bootstarp', 'Andre Pratama', 'Duniakom', 2021, 'buku8.jpg', 'Bootstrap Uncover.pdf'),
(2, 'CSS Uncover', 'Coding', 'Buku ini berisi tentang penjelasan CSS', 'Andrea Pratama', 'Duniakom', 2021, 'buku11.jpg', 'CSS Uncover.pdf'),
(3, 'HTML Uncover', 'Coding', 'Buku ini berisi tentang penjelasan HTML', 'Andrea Pratama', 'Duniakom', 2021, 'buku3.jpg', 'HTML Uncover.pdf'),
(4, 'JS Uncover', 'Coding', 'Buku ini berisi tentang penjelasan Java', 'Andrea Pratama', 'Duniakom', 2021, 'buku7.jpg', 'JavaScript Uncover.pdf'),
(5, 'MySQL Uncover', 'Coding', 'Buku ini berisi tentang penjelasan MySQL', 'Andrea Pratama', 'Duniakom', 2021, 'buku6.jpg', 'MySQL Uncover.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `IDpeminjaman` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`IDpeminjaman`, `IDuser`, `IDbuku`, `nama`, `tgl_peminjaman`, `tgl_pengembalian`, `status_peminjaman`) VALUES
(1, 1, 1, 'Jeshun', '2024-03-18', '2024-03-19', 'dikembalikan'),
(9, 1, 1, 'Jessie', '2024-03-19', '2024-03-20', 'dipinjam'),
(10, 1, 1, 'Jessie', '2024-03-19', '2024-03-20', 'dipinjam'),
(11, 1, 1, 'Jessie', '2024-03-19', '2024-03-20', 'dipinjam'),
(12, 2, 1, 'Jessie py', '2024-03-19', '2024-03-20', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `IDulasan` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`IDulasan`, `IDuser`, `IDbuku`, `ulasan`, `rating`) VALUES
(1, 1, 1, 'Bukunya bagus dan mudah di mengerti', 8),
(2, 2, 2, 'Sangat Bagus!!', 9),
(3, 3, 3, 'Cukup Bagus', 7),
(4, 1, 1, 'Bagus', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDuser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `namalengkap` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('peminjam','petugas','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDuser`, `username`, `nis`, `password`, `email`, `namalengkap`, `alamat`, `level`) VALUES
(1, 'jeshun', 10101, '4297f44b13955235245b2497399d7a93', 'jeshun@gmail.com', 'Jeshun Alexander Yohanes', 'Botania', 'admin'),
(2, 'alex', 20202, '4297f44b13955235245b2497399d7a93', 'alex@gmail.com', 'Alexander', 'Batam Center', 'petugas'),
(3, 'chen', 30303, '4297f44b13955235245b2497399d7a93', 'tantienchen@gmail.com', 'Tan Tien Chen', 'Baloi', 'peminjam'),
(5, 'jessie', 50505, '4297f44b13955235245b2497399d7a93', 'jessie@gmail.com', 'Jessie Patricia Yohanes', 'Batam Center', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDbuku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`IDpeminjaman`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`IDulasan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `IDbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `IDpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `IDulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
