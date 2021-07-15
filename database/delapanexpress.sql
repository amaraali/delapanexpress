-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 11:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delapanexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `no_resi`, `berat`) VALUES
(4, 'Sepatu Adidas', '11101', '1kg'),
(5, 'Wireless Mouse', '11102', '250gr'),
(6, 'Tas Sophie Martin', '11103', '500gr'),
(7, 'Card Holder 8 Slot', '11104', '200gr'),
(8, 'Tripod Handphone', '11105', '1kg'),
(9, 'Sprei Kintakun Deluxe', '11106', '1kg'),
(10, 'Powerbank 2000mAh', '11107', '500gr'),
(11, 'Dompet Pria', '11107', '200gr');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(5) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama_kurir`, `jenis_kelamin`, `telepon`, `alamat`) VALUES
(1, 'Solihin', 'Laki-laki', '081212274123', 'Semarang Barat'),
(2, 'Somad', 'Laki-laki', '089630388751', 'Semarang Timur'),
(3, 'Sodik Setiakawan', 'Laki-laki', '081288206705', 'Semarang Tengah'),
(4, 'Dodit S', 'Laki-laki', '089681752423', 'Semarang Utara'),
(5, 'Rizky Octavianus', 'Laki-laki', '089560838005', 'Semarang Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(5) NOT NULL,
  `layanan` varchar(30) NOT NULL,
  `proses` text DEFAULT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`, `proses`, `harga`) VALUES
(1, 'Oke', '3 Hari', '7.000'),
(11, 'Reguler', '2 Hari', '9.000'),
(12, 'Yes', '1 Hari', '12.000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `telepon`, `alamat`) VALUES
(1, 'Amara Nur Ali', '089523405397', 'Jl. Kol Hardijanto Rt 8 Rw 26 no 141B Patemon, Gunung Pati, Semarang'),
(2, 'Muhammad Zaki R', '088220921791', 'Jl Pandansari RT 07/08 No.31, Gayamsari, Semarang'),
(3, 'Victoria Jati K', '081904379768', 'Jl. Tipar Cakung Rt 09/05 No.90, Cakung Barat, Jakarta Timur'),
(4, 'Pandu Amanaullah', '089564015355', 'Asrama EX Brigir 5 Barak G No 2 RT 02/03 Banyumanik Semarang'),
(5, 'Aditya Putra H', '089642034720', 'Jalan Raya Pisangan No.1 Rt 15/08, Satriamekar, Tambun Utara, Kab. Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `id_kurir` int(5) NOT NULL,
  `id_layanan` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `tanggal`, `id_pelanggan`, `id_barang`, `id_kurir`, `id_layanan`, `keterangan`, `penerima`, `status`) VALUES
('KRM01', '2021-05-21', 1, 4, 1, 11, 'Sampai Tujuan', 'Dafa', 'Diterima'),
('KRM02', '2021-05-21', 2, 6, 2, 12, 'Sampai Tujuan', 'Fandi', 'Diterima'),
('KRM03', '2021-05-21', 3, 5, 3, 1, 'Sampai Tujuan', 'Iqbal', 'Diterima'),
('KRM04', '2021-05-21', 4, 11, 4, 12, 'Dalam Pengiriman', '', 'Dikirim'),
('KRM05', '2021-05-21', 5, 10, 5, 1, 'Dalam Pengiriman', '', 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role_id`, `is_active`) VALUES
(5, 'Admin', 'admin@gmail.com', '$2y$10$lvdVELlk.nyXAaZM8cafL.WpYRBgSB34RdIwDa9ruzWJJgVyvsLyO', 1, 1),
(7, 'Gudang', 'gudang@gmail.com', '$2y$10$gIlyN2fLObcd2m2Hb.3HFuLbODmIbxcOM5TmcWf1HAcsSx0QO3lxC', 2, 1),
(8, 'Kurir', 'kurir@gmail.com', '$2y$10$36FCmsE4dCU.z186fUKGEOnvoOw8ES52mgTb.m6Hd4UO6IBus1lw2', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
