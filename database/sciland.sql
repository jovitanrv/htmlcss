-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 09:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sciland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `namaAdm` varchar(30) NOT NULL,
  `emailAdm` varchar(30) NOT NULL,
  `alamatAdm` varchar(60) NOT NULL,
  `passAdm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`namaAdm`, `emailAdm`, `alamatAdm`, `passAdm`) VALUES
('Farah', 'fakhranakurnia@gmail.com', 'Jl.umayah', 'farah'),
('Jojo', 'jojojovita@gmail.com', 'Jl.Umayah', 'jojo'),
('ariq', 'ariqmr123@gmail.com', 'surga', '123456'),
('Ariq', 'ariq@gmail.com', 'ariq gapunya kosan', 'ariq'),
('Ariq', 'ariq@gmail.com', 'ariq gapunya kosan', 'jnkn');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jhal` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `jhal`, `stock`, `sinopsis`, `imgpath`) VALUES
('1', 'Hydro coco', 'AWDLAJWDAWH', 'qwuho', 123, 0, '', 'default.jpeg'),
('2', 'Harry Potter and The Goblet Of Fire', 'J.K Rowling', 'Bloomsbury', 500, 19, 'Kisah ini diawali dengan piala dunia Quidditch, sebuah pertandingan dengan sapu terbang yang sangat digemari Harry. Banyak hal yang membuatnya terkagum-kagum diawal buku ini, sampai-sampai kemunculan tanda Voldemort tidak begitu mempengaruhinya, apalagi k', '2.jpg'),
('3', 'Harry Potter and Prisioner of Azkaban', 'J.K Rowling', 'Bloomsbury', 500, 9, 'Harry Potter learns that Sirius Black has escaped from the prison of Azkaban and is planning to kill him. Meanwhile, Hagrid is distraught when his hippogriff, Buckbeak, is sentenced to death.', '3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `namaPjm` varchar(30) NOT NULL,
  `emailPjm` varchar(30) NOT NULL,
  `alamatPjm` varchar(60) NOT NULL,
  `passPjm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`namaPjm`, `emailPjm`, `alamatPjm`, `passPjm`) VALUES
('asjad', 'adna@yahoo.com', 'jihad', '1233'),
('ariq mantap sekali', 'ariq@gmail.com', 'adhyaksa 12124', '123456'),
('a', 'b@gmail.com', 'cd', '12'),
('a', 'ba@gmail.com', 'aaa', '123'),
('Farah', 'fakhranakurnia@gmail.com', 'qewd', '1234'),
('Jojo', 'jojoaja@gmail.com', 'Pokoknya di umayah umayah itu di sukabirus deket telkom', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(10) NOT NULL,
  `id_buku` varchar(10) CHARACTER SET latin1 NOT NULL,
  `emailPjm` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_buku`, `emailPjm`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(3, '2', 'ariq@gmail.com', '2019-12-01', '2019-12-08', '0'),
(9, '3', 'ariq@gmail.com', '2019-12-01', '2019-12-08', '0'),
(11, '2', 'ariq@gmail.com', '2019-12-02', '2019-12-09', '0'),
(12, '2', 'ariq@gmail.com', '2019-12-02', '2019-12-09', '0'),
(13, '3', 'ariq@gmail.com', '2019-12-02', '2019-12-09', '0'),
(14, '2', 'ariq@gmail.com', '2019-12-02', '2019-12-09', '0'),
(15, '3', 'ariq@gmail.com', '2019-12-02', '2019-12-09', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`emailPjm`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `emailPjm` (`emailPjm`),
  ADD KEY `id_buku` (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `emailPjm` FOREIGN KEY (`emailPjm`) REFERENCES `peminjam` (`emailPjm`),
  ADD CONSTRAINT `id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
