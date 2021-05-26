-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 11:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040020`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_product`
--

CREATE TABLE `tabel_product` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_product`
--

INSERT INTO `tabel_product` (`id`, `img`, `nama`, `ukuran`, `deskripsi`, `harga`, `stok`, `produk`) VALUES
(0, 'converse1.jpg', 'Converse Taylor Low Black', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, Stylist dan elegant.', 799000, '11', 'Beli'),
(1, 'converse2.jpg', 'Converse Chuck Taylor 70\'S OX', 'All Size', 'Dengan Didesain casual Detail eyelets, insole, dan rubber outsole Nyaman dikenakan saat beraktivitas', 980000, '14', 'Beli'),
(2, 'converse3.jpg', 'Converse Chuck Taylor 70\'S HI', 'All Size', 'merupakan sneakers shoes berbahan berkualitas yang didesain casual dengan detail mid cut, eyelets.', 999000, '23', 'Beli'),
(3, 'converse4.jpg', 'Converse Yellow High Boot', 'All Size', 'merupakan sneakers shoes berbahan berkualitas yang didesain casual dengan detail mid cut, eyelets.', 450000, '32', 'Beli'),
(4, 'converse5.jpg', 'Converse Chuck High I-90', 'All Size', 'merupakan sneakers shoes berbahan berkualitas yang didesain casual dengan detail mid cut, eyelets.', 450000, '23', 'Beli'),
(5, 'converse6.jpg', 'Converse 70\'S Lufi Anime', 'All Size', 'Koleksi slip on klasik dengan sentuhan motif kotak monokrom yang cool. U Classic Slip-On Core kreasi', 799000, '13', 'Beli'),
(6, 'converse7.jpg', 'Converse Taylor White H3\'A', 'All Size', 'merupakan sneakers shoes berbahan berkualitas yang didesain casual dengan detail mid cut, eyelets.', 830000, '32', 'Beli'),
(7, 'converse8.jpg', 'Converse Black Low Peace', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 799000, '6', 'Beli'),
(8, 'diadora1.jpg', 'Diadora Camaro Stance Avaro', 'All Size', 'Dengan bagian atas kulit dan kain serta, mereka dapat dengan mudah dipakai setiap hari. ', 500000, '16', 'Beli'),
(10, 'diadora2.jpg', 'Diadora Olympia Men\'s Sneakers Shoes', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, Stylist dan elegant Brand new.', 800000, '33', 'Beli'),
(24, 'diadora3.jpg', 'Diadora Olympia Men\'s - Gray Ash', 'All Size', 'Dengan Didesain casual Detail eyelets, insole, dan rubber outsole Nyaman dikenakan saat beraktivitas', 999000, '14', 'Beli'),
(25, 'diadora4.jpg', 'Diadora Arow Sneakers ', 'All Size', 'Dengan Didesain casual Detail eyelets, insole, dan rubber outsole Nyaman dikenakan saat beraktivitas', 780000, '32', 'Beli'),
(26, 'diadora5.jpg', 'Diadora Classic Geporvece', 'All Size', 'Dengan bagian atas kulit dan kain serta warna putih, mereka dapat dengan mudah dipakai setiap hari.', 830000, '24', 'Beli'),
(27, 'diadora6.jpg', 'Diadora Classic Mens Gaui', 'All Size', 'Dengan bagian atas kulit dan kain serta warna coklat, mereka dapat dengan mudah dipakai setiap hari.', 900000, '13', 'Beli'),
(28, 'diadora7.jpg', ' Diadora Running Viltore', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 899000, '45', 'Beli'),
(29, 'diadora8.jpg', 'Diadora Running White', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 999000, '19', 'Beli'),
(30, 'vans1.jpg', 'Vans Ua Fire Black K70', 'All Size', 'Dengan Didesain casual Detail eyelets, insole, dan rubber outsole Nyaman dikenakan saat beraktivitas', 700000, '34', 'Beli'),
(31, 'vans2.jpg', 'Vans Slip - on Authentic ', 'All Size', 'Dengan Didesain casual Detail eyelets, insole, dan rubber outsole Nyaman dikenakan saat beraktivitas', 980000, '32', 'Beli'),
(32, 'vans3.jpg', 'Vans Ua Bold Ni Classic', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 650000, '34', 'Beli'),
(33, 'vans4.jpg', 'Vans Galaxy HiSky Ua', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 650000, '31', 'Beli'),
(34, 'vans5.jpg', 'Vans White Sk8 - high', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 600, '87', 'Beli'),
(35, 'vans6.jpg', 'Vans Ua Sid Dx Classic Black', 'All Size ', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 480000, '54', 'beli'),
(36, 'vans7.jpg', 'Vans Comfycush Sk8 - high', 'All Size', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 490000, '31', 'Beli'),
(37, 'vans8.jpg', 'Vans Ua Authentic navy', 'All Size ', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 780000, '52', 'Beli');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'gordon', '$2y$10$lEyPJ0r7mLy0O2ntakj.P.pJnJd8O6AF0mmdwnVGKixxciKYuVdYW'),
(4, 'jonson', '$2y$10$GknW7V9Umhm4NOtzpGmm2udJwnGbaOUM0krWjHFMOulh7ZYlkGXni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_product`
--
ALTER TABLE `tabel_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
