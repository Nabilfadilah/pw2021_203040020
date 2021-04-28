-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 09:20 AM
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
(0, '23.jpg', 'Converse Yellow High Boot', '42', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, Stylist dan elegant.', 799000, '11', 'Beli'),
(1, '3.jpg', 'Converse Chuck Taylor 70\'S OX', '41', 'Dengan Didesain casual Detail eyelets, insole, dan rubber outsole Nyaman dikenakan saat beraktivitas', 980000, '14', 'Beli'),
(2, '1.jpg', 'Converse Chuck Taylor 70\'S HI', '42', 'merupakan sneakers shoes berbahan berkualitas yang didesain casual dengan detail mid cut, eyelets.', 999000, '23', 'Beli'),
(3, '2.jpg', 'Diadora Olympia Men\'s Sneakers Shoes', '41', 'Diadora Olympia Men\'s Sneakers Shoes, Anda pasti menemukan gaya yang sempurna untuk Anda.', 450000, '32', 'Beli'),
(4, '18.jpg', 'Diadora Olympia Men\'s Sneakers Shoes - Gray Ash', '42', 'Diadora Olympia Men\'s Sneakers Shoes - Gray Ash, Anda pasti menemukan gaya yang sempurna untuk Anda.', 450000, '23', 'Beli'),
(5, '12.jpg', 'Vans Ua Classic Slip-On', '41', 'Koleksi slip on klasik dengan sentuhan motif kotak monokrom yang cool. U Classic Slip-On Core kreasi', 799000, '13', 'Beli'),
(6, '21.jpg', 'Vans Yacht Club Old Skool', '40', 'cocok untuk stylish day out.', 830000, '32', 'Beli'),
(7, '11.jpg', 'Vans Primary Check Old Skool', '41', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, cocok untuk stylish day out.', 799000, '6', 'Beli'),
(8, '17.jpg', 'Diadora Camaro ', '41', 'Dengan bagian atas kulit dan kain serta warna biru, mereka dapat dengan mudah dipakai setiap hari. ', 500000, '16', 'Beli'),
(10, '5.jpg', 'Converse Chuck Taylor All Star Peace Powered Empow', '42', 'Cocok untuk pria dan wanita Bahan berkualitas, nyaman, Stylist dan elegant Brand new.', 800000, '33', 'Beli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_product`
--
ALTER TABLE `tabel_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
