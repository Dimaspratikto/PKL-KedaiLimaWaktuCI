-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2021 at 07:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedailimawaktuci`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id_aboutus` int(11) NOT NULL,
  `judul_aboutus` varchar(50) NOT NULL,
  `keterangan_aboutus` varchar(100) NOT NULL,
  `foto_aboutus` varchar(500) NOT NULL,
  `tahun_aboutus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id_aboutus`, `judul_aboutus`, `keterangan_aboutus`, `foto_aboutus`, `tahun_aboutus`) VALUES
(11121, 'Perjalanan Awal Kedai Lima Waktu', 'pada saat itu', '1.jpg', '1999-2001'),
(11123, 'Perjalanan Awal Kedai Lima Waktu', 'ADADADA', '11.jpg', '2005-2009'),
(11124, 'Perjalanan Awal Kedai Lima Waktu', 'Aman aman', '12.jpg', '2010-2013'),
(11125, 'Perjalanan Awal Kedai Lima Waktu', 'dfhdsdskfjsdfdsjf111', '13.jpg', '2020-2021');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusmain`
--

CREATE TABLE `aboutusmain` (
  `id_aboutusmain` int(11) NOT NULL,
  `ket_aboutusmain` varchar(2000) NOT NULL,
  `foto_aboutusmain` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutusmain`
--

INSERT INTO `aboutusmain` (`id_aboutusmain`, `ket_aboutusmain`, `foto_aboutusmain`) VALUES
(1111, 'Sejak jaman dahulu, kedai kopi sudah banyak berdiri di Indonesia. Jika saat ini yang disajikan di Coffee Shop adalah secangkir cappuccino dari mesin espresso, dulu yang disajikan adalah secangkir kopi dari ceret kuno. Namun kopi klasik tetap bisa dinikmati di kedai kopi modern, cita rasa khas dari kopi asal Indonesia yang membuat beberapa kedai kopi di bawah ini bisa berdiri berpuluh-puluh tahun. \r\nKedai Lima Waktu ini berada di kawasan Merr, Jalan Mulyorejo No.156, Kec. Mulyorejo, Kota SBY.\r\nBuka pertama kali pada tahun 2019. Kedai Lima Waktu mengutamakan kualitas kopinya,sehingga memilih biji kopi sendiri, \r\nmeracik dan mengosengnya sendiri hingga tahap menyeduh.Kopi yang bercitarasa klasik itu terkenal hingga sekarang.', 'kedailimawaktu3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id_beverages` int(10) NOT NULL,
  `nama_beverages` varchar(40) NOT NULL,
  `tipe_beverages` varchar(10) NOT NULL,
  `harga_beverages` int(10) NOT NULL,
  `foto_beverages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id_beverages`, `nama_beverages`, `tipe_beverages`, `harga_beverages`, `foto_beverages`) VALUES
(1113, 'Choco Royal', 'Milk Shake', 25000, 'chocoroyal.jpg'),
(1114, 'Matcha', 'Milk Shake', 22000, 'matcha.jpg'),
(1115, 'Dark Choco', 'Milk Shake', 25500, 'darkchoco.jpg'),
(1116, 'Red Velvet', 'Milk Shake', 24500, 'redvelvet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(50) NOT NULL,
  `keterangan_event` varchar(500) NOT NULL,
  `tanggal_event` date NOT NULL,
  `foto_event` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `keterangan_event`, `tanggal_event`, `foto_event`) VALUES
(1111, 'HdBand', 'Acoustic', '2021-06-09', 'photo6253333325276097826.jpg'),
(1112, 'MoonLiBand', 'Acoustic, Jazz', '2021-07-07', 'photo6253333325276097825.jpg'),
(1113, 'BondsBand', 'Acoustic', '2021-06-07', 'photo6253333325276097824.jpg'),
(1114, 'FastBand', 'Acoustic', '2021-06-29', 'photo6253333325276097827.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id_food` int(10) NOT NULL,
  `nama_food` varchar(40) NOT NULL,
  `tipe_food` varchar(10) NOT NULL,
  `harga_food` int(10) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `foto_food` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_food`, `nama_food`, `tipe_food`, `harga_food`, `keterangan`, `foto_food`) VALUES
(13, 'Nasi Goreng Mewah', 'Breakfast ', 25000, 'Nasi Goreng Mewah dengan banyak variant topping', 'menueditor_item_88e3dd505cfe4928b91629c540e018ef_1624108205331503330.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `no_meja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama`, `alamat`, `telp`, `tanggal_pesan`, `no_meja`) VALUES
(5, 'dimas', 'bulak setro', '2147483647', '2021-12-26 19:27:38', ''),
(6, 'SALMA', 'POGOT', '2147483647', '2021-12-26 19:30:27', ''),
(7, 'SALMA', 'POGOT', '2147483647', '2021-12-26 23:25:59', ''),
(8, 'eko', 'bulak setro', '2147483647', '2021-12-27 14:59:03', ''),
(9, 'edy', 'baruna', '897675755', '2021-12-27 15:23:43', ''),
(10, 'fery', 'bulak setro', '0895414426845', '2021-12-27 15:25:06', ''),
(11, 'fer', 'fer', '1212', '2021-12-27 15:53:08', ''),
(12, 'ani', 'ani', '123', '2021-12-27 15:58:22', ''),
(13, 'aaa', 'aaaa', '1111', '2021-12-27 16:04:41', ''),
(14, 'qqq', 'qqq', '111', '2021-12-27 16:05:24', ''),
(15, 'ww', 'www', '222', '2021-12-27 16:05:43', ''),
(16, 'asli ini', 'asli ini', '0895414426845', '2021-12-27 16:06:43', ''),
(17, 'mewah', 'mewah', '123', '2021-12-27 16:07:52', ''),
(18, 'qqq', 'qqq', '1212', '2021-12-27 16:12:15', ''),
(19, 'xs', 'xs', '121', '2021-12-27 16:19:12', ''),
(20, 'xs', 'xs', '121', '2021-12-27 16:19:42', ''),
(21, 'xs', 'xs', '121', '2021-12-27 16:19:58', ''),
(22, 'qqq', 'baruna', '0897675755', '2021-12-27 16:20:55', ''),
(23, 'qqq', 'baruna', '0897675755', '2021-12-27 16:21:06', ''),
(24, 'aq', 'aq', '111', '2021-12-27 16:22:32', ''),
(25, 'aq', 'aq', '111', '2021-12-27 16:22:46', ''),
(26, 'aq', 'aq', '111', '2021-12-27 16:23:28', ''),
(27, 'a', 'a', '1', '2021-12-27 16:23:45', ''),
(28, 'd', 'd', '111', '2021-12-27 16:24:16', ''),
(29, 'd', 'd', '111', '2021-12-27 16:24:39', ''),
(30, 'd', 'd', '111', '2021-12-27 16:25:19', ''),
(31, 's', 's', '1', '2021-12-27 16:25:37', ''),
(32, 's', 's', '1', '2021-12-27 16:25:56', ''),
(33, 's', 's', '1', '2021-12-27 16:26:05', ''),
(34, 's', 's', '1', '2021-12-27 16:32:52', ''),
(35, 'g', 'g', '12', '2021-12-27 16:37:11', ''),
(36, 'Dimas Pratikto', 'Merr', '0897654234112', '2021-12-27 18:43:41', '23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `password`, `username`, `email`) VALUES
('1111', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'dimaspratikto29@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `nama_food` varchar(200) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_food`, `nama_food`, `jumlah`, `harga`, `pilihan`) VALUES
(3, 5, 9, 'Double Mie', 1, 15000, ''),
(4, 5, 10, 'Mendoan', 1, 9000, ''),
(5, 6, 9, 'Double Mie', 1, 15000, ''),
(6, 8, 13, 'Nasi Goreng Mewah', 1, 25000, ''),
(7, 8, 10, 'Mendoan', 1, 9000, ''),
(8, 9, 10, 'Mendoan', 1, 9000, ''),
(9, 10, 9, 'Double Mie', 1, 15000, ''),
(10, 10, 10, 'Mendoan', 1, 9000, ''),
(11, 10, 11, 'Kentang Goreng', 1, 10000, ''),
(12, 10, 12, 'Tahu Crispy', 1, 7500, ''),
(13, 11, 9, 'Double Mie', 3, 15000, ''),
(14, 12, 9, 'Double Mie', 3, 15000, ''),
(15, 13, 10, 'Mendoan', 2, 9000, ''),
(16, 14, 10, 'Mendoan', 2, 9000, ''),
(17, 15, 10, 'Mendoan', 2, 9000, ''),
(18, 16, 11, 'Kentang Goreng', 2, 10000, ''),
(19, 16, 13, 'Nasi Goreng Mewah', 1, 25000, ''),
(20, 17, 13, 'Nasi Goreng Mewah', 2, 25000, ''),
(21, 18, 12, 'Tahu Crispy', 1, 7500, ''),
(22, 18, 10, 'Mendoan', 1, 9000, ''),
(23, 19, 11, 'Kentang Goreng', 1, 10000, ''),
(24, 19, 12, 'Tahu Crispy', 1, 7500, ''),
(25, 19, 13, 'Nasi Goreng Mewah', 2, 25000, ''),
(26, 22, 9, 'Double Mie', 2, 15000, ''),
(27, 24, 12, 'Tahu Crispy', 1, 7500, ''),
(28, 24, 10, 'Mendoan', 1, 9000, ''),
(29, 27, 9, 'Double Mie', 2, 15000, ''),
(30, 28, 11, 'Kentang Goreng', 1, 10000, ''),
(31, 28, 9, 'Double Mie', 1, 15000, ''),
(32, 31, 9, 'Double Mie', 1, 15000, ''),
(33, 31, 13, 'Nasi Goreng Mewah', 1, 25000, ''),
(34, 34, 9, 'Double Mie', 1, 15000, ''),
(35, 34, 13, 'Nasi Goreng Mewah', 1, 25000, ''),
(36, 35, 9, 'Double Mie', 1, 15000, ''),
(37, 35, 13, 'Nasi Goreng Mewah', 1, 25000, ''),
(38, 36, 11, 'Kentang Goreng', 1, 10000, ''),
(39, 36, 9, 'Double Mie', 1, 15000, '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(10) NOT NULL,
  `judul_slide` varchar(30) NOT NULL,
  `keterangan_slide` varchar(40) NOT NULL,
  `foto_slide` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `judul_slide`, `keterangan_slide`, `foto_slide`) VALUES
(114, 'Bajuku ', 'Terbaik Se Indonesia', 'banner1.jpg'),
(115, 'Fashion', 'Keren Abis Dah', 'banner2.jpg'),
(116, 'Kartu Atm', 'Cepat, Aman dan Amanah', 'banner3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id_aboutus`);

--
-- Indexes for table `aboutusmain`
--
ALTER TABLE `aboutusmain`
  ADD PRIMARY KEY (`id_aboutusmain`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id_beverages`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_food`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id_aboutus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11126;

--
-- AUTO_INCREMENT for table `aboutusmain`
--
ALTER TABLE `aboutusmain`
  MODIFY `id_aboutusmain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id_beverages` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1117;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1115;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id_food` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
