-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2025 at 07:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop060`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories060`
--

CREATE TABLE `categories060` (
  `cate_id_060` int(11) NOT NULL,
  `cate_name_060` varchar(100) NOT NULL,
  `description_060` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories060`
--

INSERT INTO `categories060` (`cate_id_060`, `cate_name_060`, `description_060`) VALUES
(1, 'Domestic', 'Kucing kampung atau kucing yang berada di suatu daerah (wilayah).'),
(3, 'Persia', 'Kucing persia menjadi jenis kucing ras asing yang pertama diimpor ke Thailand. Jenis kucing ini juga menjadi salah satu ras kucing yang paling populer dijadikan hewan peliharan baik lokal maupun inter'),
(4, 'Anggora', 'Banyak orang yang masih kesulitan membedakan antara Kucing Anggora dan Kucing Persia, padahal kedua jenis kucing ini berbeda. Bulu yang lembut, panjang, dan lebat mungkin membuat Anggora sulit dibedak'),
(6, 'Spinx', 'Kucing yang tidak memiliki bulu tau disebut juga kucing botax.'),
(7, 'Ragdoll', ' Jenis kucing asal Amerika Serikat dengan nama asli Ragdoll yang diambil dari sifatnya yang jinak layaknya sebuah boneka.'),
(8, 'Abyssinian', 'Ras kucing berbulu pendek tertua, dengan tampilan eksotis layaknya lukisan dan patung dari zaman Mesir Kuno.');

-- --------------------------------------------------------

--
-- Table structure for table `cats060`
--

CREATE TABLE `cats060` (
  `id_060` int(11) NOT NULL,
  `name_060` varchar(100) NOT NULL,
  `type_060` varchar(100) NOT NULL,
  `gender_060` varchar(10) NOT NULL,
  `age_060` int(11) NOT NULL,
  `price_060` int(11) NOT NULL,
  `photo_060` varchar(200) NOT NULL DEFAULT 'default.png',
  `sold_060` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats060`
--

INSERT INTO `cats060` (`id_060`, `name_060`, `type_060`, `gender_060`, `age_060`, `price_060`, `photo_060`, `sold_060`) VALUES
(4, 'Sulit', 'Domestic', 'Male', 4, 100, 'komputer.png', 1),
(6, 'Sumarjo', 'Domestic', 'Female', 4, 500, 'default.png', 1),
(8, 'Aminin', 'Spinx', 'Female', 7, 400, 'default.png', 0),
(9, 'Sumarjo', 'Ragdoll', 'Male', 12, 300, 'default.png', 0),
(10, 'Jack', 'Spinx', 'Male', 2, 123, 'default.png', 0),
(11, 'Minu', 'Domestic', 'Female', 3, 10, 'default.png', 0),
(12, 'Fahd', 'Anggora', 'Male', 6, 222, 'default.png', 0),
(13, 'popo', 'Abyssinian', 'Male', 5, 3333, 'default.png', 0),
(14, 'Usop', 'Ragdoll', 'Male', 2, 400, 'default.png', 0),
(15, 'Nami', 'Spinx', 'Female', 3, 900, 'default.png', 0),
(16, 'Budo', 'Abyssinian', 'Female', 4, 132, 'default.png', 0),
(17, 'Apex', 'Domestic', 'Male', 5, 1254, 'default.png', 0),
(18, 'Badi', 'Domestic', 'Male', 7, 102, 'default.png', 0),
(19, 'Yuo', 'Ragdoll', 'Female', 2, 124, 'default.png', 0),
(20, 'Qiriq', 'Spinx', 'Male', 3, 12, 'default.png', 0),
(21, 'Meong', 'Abyssinian', 'Female', 4, 122, 'default.png', 0),
(22, 'Uni', 'Ragdoll', 'Female', 1, 112, 'default.png', 0),
(23, 'Sohib', 'Persia', 'Male', 7, 612, 'default.png', 0),
(24, 'Bruno', 'Abyssinian', 'Male', 4, 412, 'default.png', 0),
(25, 'Bandit', 'Ragdoll', 'Male', 4, 1232, 'default.png', 0),
(26, 'Turex', 'Spinx', 'Male', 5, 112, 'default.png', 0),
(27, 'Cuo', 'Persia', 'Female', 5, 123, 'default.png', 0),
(28, 'Udi', 'Abyssinian', 'Male', 4, 162, 'default.png', 0),
(29, 'Mion', 'Spinx', 'Female', 3, 802, 'default.png', 0),
(30, 'Yanudi', 'Spinx', 'Male', 4, 500, 'default.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catsales060`
--

CREATE TABLE `catsales060` (
  `sale_id_060` int(11) NOT NULL,
  `sale_date_060` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_id_060` int(11) NOT NULL,
  `costumer_name_060` varchar(100) NOT NULL,
  `costumer_address_060` varchar(200) NOT NULL,
  `costumer_phone_060` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catsales060`
--

INSERT INTO `catsales060` (`sale_id_060`, `sale_date_060`, `cat_id_060`, `costumer_name_060`, `costumer_address_060`, `costumer_phone_060`) VALUES
(1, '2023-03-27 15:31:24', 3, 'Koko', 'Bandung', '0823749289'),
(2, '2023-03-27 15:47:47', 4, 'Mahmud', 'Aceh', '082123776967'),
(3, '2023-06-13 07:18:34', 6, 'Mahmud', 'q', '11');

-- --------------------------------------------------------

--
-- Table structure for table `users060`
--

CREATE TABLE `users060` (
  `user_id_060` int(11) NOT NULL,
  `username_060` varchar(200) NOT NULL,
  `password_060` varchar(200) NOT NULL,
  `usertype_060` varchar(50) NOT NULL,
  `fullname_060` varchar(200) NOT NULL,
  `photo_060` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users060`
--

INSERT INTO `users060` (`user_id_060`, `username_060`, `password_060`, `usertype_060`, `fullname_060`, `photo_060`) VALUES
(4, 'Joy', '$2y$10$m2ngGvktuStW1zuoS7/eN.plmaKPrhH8ZcGsZBsG5nF1A6ZjmCtOa', 'Manager', 'Joy Anggara', 'komputer.png'),
(6, 'Mansur', '$2y$10$RlqeHxQguYaCoRybXac4TeAjZK20UebnMmSc96xQzR0vsvs5vhVdS', 'Manager', 'Mansur Adanya', 'default.png'),
(9, 'Mansur', '$2y$10$e5Hl5wDOBlRVWstoCCcVD.Smf2d0.A.G5tvGlyoXljqMKzrv/PXN.', 'Cashier', 'Mansur Adanya', 'default.png'),
(11, 'qwerty', '$2y$10$oN6RBtYIDEBwoMACs6DiDOXw9pD51kKKZr.9tVPAH6Q8FRLN3wXZG', 'Cashier', 'Cashier Ganteng', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories060`
--
ALTER TABLE `categories060`
  ADD PRIMARY KEY (`cate_id_060`);

--
-- Indexes for table `cats060`
--
ALTER TABLE `cats060`
  ADD PRIMARY KEY (`id_060`);

--
-- Indexes for table `catsales060`
--
ALTER TABLE `catsales060`
  ADD PRIMARY KEY (`sale_id_060`);

--
-- Indexes for table `users060`
--
ALTER TABLE `users060`
  ADD PRIMARY KEY (`user_id_060`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories060`
--
ALTER TABLE `categories060`
  MODIFY `cate_id_060` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cats060`
--
ALTER TABLE `cats060`
  MODIFY `id_060` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `catsales060`
--
ALTER TABLE `catsales060`
  MODIFY `sale_id_060` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users060`
--
ALTER TABLE `users060`
  MODIFY `user_id_060` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
