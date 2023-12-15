-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 11:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vedam_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_sr_no` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_quantity` int(2) NOT NULL,
  `product_photo` varchar(500) NOT NULL,
  `product_price` int(3) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cart_sr_no`, `product_id`, `product_name`, `product_quantity`, `product_photo`, `product_price`, `dt`) VALUES
(49, 2, 'Designer Collection, 15-Pair Box', 0, '1.jpg', 499, '2023-10-25 09:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback_msg` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback_msg`, `dt`) VALUES
(1, 'Ishwar', 'this@this.com', 'You made a nice website', '2023-10-13 18:57:06'),
(2, 'sdsfs', 'dfsdgs@gmail.com', 'errergerg', '2023-10-18 10:30:07'),
(3, 'sdsfs', 'dfsdgs@gmail.com', 'errergerg', '2023-10-18 10:31:35'),
(4, 'krishnss', 'aaa@gmail.com', 'thnk you', '2023-10-18 10:44:13'),
(5, 'krishnss', 'aaa@gmail.com', 'thnk you', '2023-10-18 10:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(3) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_photo` varchar(500) NOT NULL,
  `product_price` int(3) NOT NULL,
  `product_discount_price` int(3) NOT NULL,
  `product_desc` text NOT NULL,
  `product_stock` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_photo`, `product_price`, `product_discount_price`, `product_desc`, `product_stock`) VALUES
(1, 'Bamboo Men Ankle Socks - 3 Pairs', '2.jpg', 1499, 0, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0),
(2, 'Designer Collection, 15-Pair Box', '1.jpg', 499, 329, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `Sr_no` int(3) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_pwd` text NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`Sr_no`, `u_name`, `u_email`, `u_pwd`, `dt`) VALUES
(1, 'Ishwar Trada', 'this@this.com', 'Ishwar@vedam67', '2023-10-02 15:40:36'),
(2, 'Vaidik', 'vaidik@gmail.com', '123456', '2023-10-02 18:41:28'),
(3, 'Bhumil', 'bhumil@gmail.com', '4587', '2023-10-02 19:02:18'),
(4, 'Kevin', 'kevin@gmail.com', '9652', '2023-10-02 19:07:12'),
(17, 'Anish', 'anish@gmail.com', '1597', '2023-10-02 19:09:28'),
(18, 'Anish', 'anish@gmail.com', '1597', '2023-10-02 19:10:47'),
(19, 'Ayush', 'ayush154@gmail.com', '7463', '2023-10-02 19:11:14'),
(20, 'Sahil', 'sahil234@gmail.com', '784521', '2023-10-03 17:35:11'),
(21, 'Sahil', 'sahil234@gmail.com', '784521', '2023-10-03 17:39:48'),
(22, 'Sahil', 'sahil234@gmail.com', '784521', '2023-10-03 17:39:53'),
(23, 'Dhruv', 'Dhruv56@gmail.com', '456963', '2023-10-03 17:40:46'),
(24, 'Yash', 'yash98@gmail.com', '4587', '2023-10-03 17:45:18'),
(25, 'Yash', 'yash98@gmail.com', '4587', '2023-10-03 18:01:56'),
(26, 'Jeet', 'jeet@gmail.com', '4568932', '2023-10-04 09:15:25'),
(27, 'Madhav', 'madhavhirani.21.ce@iite.indusuni.ac.in', 'Madhav', '2023-10-04 13:40:41'),
(29, 'krishnaaa', 'aaa@gmail.com', '12345', '2023-10-18 10:42:35'),
(30, 'sahil', 'sahil@gmail.com', '12345678', '2023-10-25 09:18:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_sr_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`Sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_sr_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `Sr_no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
