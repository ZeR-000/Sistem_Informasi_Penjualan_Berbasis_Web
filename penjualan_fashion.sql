-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 03:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataadmin`
--

CREATE TABLE `tb_dataadmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dataadmin`
--

INSERT INTO `tb_dataadmin` (`id_admin`, `username`, `password`, `level`) VALUES
(1001, 'ardhi', 'ardhi', 'Karyawan'),
(1002, 'rangga', 'rangga', 'Admin'),
(1003, 'restu', 'restu', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datajenis`
--

CREATE TABLE `tb_datajenis` (
  `kode_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datajenis`
--

INSERT INTO `tb_datajenis` (`kode_jenis`, `nama_jenis`) VALUES
(2001, 'Baju Anak'),
(2002, 'Kerudung'),
(2003, 'Baju Dewasa'),
(2004, 'Gamis'),
(2005, 'Peci');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datakaryawan`
--

CREATE TABLE `tb_datakaryawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datakaryawan`
--

INSERT INTO `tb_datakaryawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `no_hp`, `tanggal_lahir`) VALUES
(3001, 'Muhammad Ardhi Nur Rasyid', 'Jl Sawo Kepanjen Malang', '089680560761', '12-02-2001'),
(3002, 'Rangga Bayu', 'Blimbing, Malang', '0897456123', '05-10-1999'),
(3003, 'Restu Febri Ahmad Raihan', 'Kepanjen, Malang', '0865123594', '03-02-2001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datapembeli`
--

CREATE TABLE `tb_datapembeli` (
  `kode_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat_pembeli` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datapembeli`
--

INSERT INTO `tb_datapembeli` (`kode_pembeli`, `nama_pembeli`, `alamat_pembeli`, `no_hp`) VALUES
(4001, 'rama', 'jalan siku', '0896548720'),
(4002, 'Puja Angga', 'Wagir', '08974456123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datapenjualan`
--

CREATE TABLE `tb_datapenjualan` (
  `kode_penjualan` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `kode_pembeli` int(11) NOT NULL,
  `kode_jenis` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datapenjualan`
--

INSERT INTO `tb_datapenjualan` (`kode_penjualan`, `id_karyawan`, `kode_barang`, `kode_pembeli`, `kode_jenis`, `jumlah_barang`, `total`, `bayar`, `kembalian`, `tanggal`) VALUES
(5001, 3001, 6001, 4001, 2001, 1, 70000, 100000, 30000, '06-06-2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stokbarang`
--

CREATE TABLE `tb_stokbarang` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_jenis` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stokbarang`
--

INSERT INTO `tb_stokbarang` (`kode_barang`, `nama_barang`, `kode_jenis`, `harga`, `jumlah_stok`) VALUES
(6001, 'Baju Koko', 2001, 70000, 9),
(6002, 'Gamis Terusan', 2001, 650000, 15),
(6003, 'Voal Laser Cut', 2002, 45000, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dataadmin`
--
ALTER TABLE `tb_dataadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_datajenis`
--
ALTER TABLE `tb_datajenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `tb_datakaryawan`
--
ALTER TABLE `tb_datakaryawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_datapembeli`
--
ALTER TABLE `tb_datapembeli`
  ADD PRIMARY KEY (`kode_pembeli`);

--
-- Indexes for table `tb_datapenjualan`
--
ALTER TABLE `tb_datapenjualan`
  ADD PRIMARY KEY (`kode_penjualan`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_pembeli` (`kode_pembeli`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- Indexes for table `tb_stokbarang`
--
ALTER TABLE `tb_stokbarang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_jenis` (`kode_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dataadmin`
--
ALTER TABLE `tb_dataadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `tb_datajenis`
--
ALTER TABLE `tb_datajenis`
  MODIFY `kode_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

--
-- AUTO_INCREMENT for table `tb_datakaryawan`
--
ALTER TABLE `tb_datakaryawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3006;

--
-- AUTO_INCREMENT for table `tb_datapembeli`
--
ALTER TABLE `tb_datapembeli`
  MODIFY `kode_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4006;

--
-- AUTO_INCREMENT for table `tb_datapenjualan`
--
ALTER TABLE `tb_datapenjualan`
  MODIFY `kode_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5004;

--
-- AUTO_INCREMENT for table `tb_stokbarang`
--
ALTER TABLE `tb_stokbarang`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6006;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_datapenjualan`
--
ALTER TABLE `tb_datapenjualan`
  ADD CONSTRAINT `tb_datapenjualan_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `tb_stokbarang` (`kode_barang`),
  ADD CONSTRAINT `tb_datapenjualan_ibfk_4` FOREIGN KEY (`kode_jenis`) REFERENCES `tb_datajenis` (`kode_jenis`),
  ADD CONSTRAINT `tb_datapenjualan_ibfk_5` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_datakaryawan` (`id_karyawan`),
  ADD CONSTRAINT `tb_datapenjualan_ibfk_6` FOREIGN KEY (`kode_pembeli`) REFERENCES `tb_datapembeli` (`kode_pembeli`);

--
-- Constraints for table `tb_stokbarang`
--
ALTER TABLE `tb_stokbarang`
  ADD CONSTRAINT `tb_stokbarang_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `tb_datajenis` (`kode_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
