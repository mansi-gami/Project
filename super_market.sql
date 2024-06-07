-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 06:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_nm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `a_password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_nm`, `a_password`) VALUES
(1, 'ABC', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `b_id` int(50) NOT NULL,
  `u_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `p_nm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `p_price` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `qty` int(50) NOT NULL,
  `c_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`b_id`, `u_id`, `p_id`, `p_nm`, `p_price`, `qty`, `c_id`) VALUES
(23, 2, 19, 'Oil', '2550', 2, 31),
(24, 2, 3, 'Milk', '30', 2, 32),
(25, 2, 10, 'Body Milk', '250', 2, 34),
(26, 2, 19, 'Oil', '2550', 2, 35),
(27, 2, 26, 'Baby Girl Frock', '1000', 2, 37),
(28, 2, 45, 'Plate', '250', 2, 40),
(29, 2, 12, 'Hand-Wash', '150', 1, 41),
(30, 2, 29, 'Men Shirt Pent', '1500', 4, 42),
(31, 2, 14, 'Soap', '25', 1, 43),
(32, 2, 5, 'Ice Cream', '30', 1, 44),
(33, 2, 2, 'Butter Milk', '25', 1, 45);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(50) NOT NULL,
  `p_id` int(50) NOT NULL,
  `p_image` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `p_nm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `p_price` decimal(50,0) NOT NULL,
  `p_qnt` int(50) NOT NULL,
  `u_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `c_id` int(50) NOT NULL,
  `c_nm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `c_image` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`c_id`, `c_nm`, `c_image`) VALUES
(1, 'Milk Items ', 'milk_product.jpg'),
(2, 'Home Care Items', 'homecare_product.jpg'),
(3, 'Food Items', 'food_product.jpg'),
(4, 'Clothes', 'clothes.jpg'),
(5, 'Decoration Items', 'homedecoration_product.jpg'),
(6, 'House Hold Items', 'household_product.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `chout_Id` int(10) NOT NULL,
  `c_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `c_add` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `c_city` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `c_phone` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `c_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grand_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`chout_Id`, `c_name`, `c_add`, `c_city`, `c_phone`, `c_email`, `grand_total`) VALUES
(1, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 278),
(2, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 50),
(3, 'pqr stu', 'rajkot', 'rajkot', '4632666322', 'pqr@gmail.com', 550),
(4, 'pqr stu', 'Mota mava', 'rajkot', '4632666322', 'pqr@gmail.com', 550),
(8, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(9, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(10, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(11, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(12, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(13, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(14, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 0),
(15, 'rit patel', 'kotecha chowk', 'Rajkot', '1523035485', '', 5000),
(16, ' ', '', '', '', '', 1798),
(17, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 1200),
(18, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 0),
(19, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 0),
(20, 'pqr stu', 'Mota mava', 'rajkot', '4632666322', 'pqr@gmail.com', 300),
(21, 'jax patel', 'Mota mava', 'rajkot', '4632666322', 'pqr@gmail.com', 5100),
(22, 'lax patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 8000),
(23, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 1000),
(24, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 55),
(25, 'Mansi Gami', 'Uk,London', 'London', '4531232659', 'mansigami06@gmail.com', 258),
(26, 'darshan gami', 'rajkot', 'rajkot', '4862324952', 'abc@gmail.com', 50),
(27, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 98),
(28, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 60),
(29, 'Mansi Gami', 'Uk,London', 'London', '4531232659', 'mansigami06@gmail.com', 5000),
(30, 'Mansi Gami', 'Uk,London', 'London', '4531232659', 'mansigami06@gmail.com', 5000),
(31, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 5100),
(32, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 60),
(33, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 0),
(34, 'lax patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 500),
(35, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 2550),
(36, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 0),
(37, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 1000),
(38, 'krina patel', 'rajkot', 'rajkot', '7263232659', 'k_na@gmail.com', 125),
(39, 'rit patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'rit_12@gmail.com', 80),
(40, 'jamuna patel', 'abd', 'ahmedabad', '4663266322', 'jamuna@gmail.com', 750),
(41, 'jamuna patel', 'rajkot', 'Rajkot', '4663266322', 'jamuna@gmail.com', 150),
(42, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 6000),
(43, 'vishu patel', 'Kotecha chowk', 'Rajkot', '1523035485', 'vishu_12@gmail.com', 25),
(44, 'ram patel', 'Kotecha chowk', 'rajkot', '4530592423', 'ram_12@gmail.com', 30),
(45, 'ram patel', 'Mota mava', 'rajkot', '4530592423', 'ram_12@gmail.com', 25);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(100) NOT NULL,
  `f_nm` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_nm`, `city`, `email`, `product`, `message`) VALUES
(2, 'pqr stu', 'rajkot', 'pqr@gmail.com', 'milk', 'GOOD'),
(5, 'rit patel', 'Rajkot', 'rit_12@gmail.com', 'Ice Cream', 'Good ');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `p_id` int(50) NOT NULL,
  `s_id` int(50) NOT NULL,
  `p_nm` varchar(50) NOT NULL,
  `p_price` decimal(50,0) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_qnt` int(50) NOT NULL,
  `tot_qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`p_id`, `s_id`, `p_nm`, `p_price`, `p_image`, `p_qnt`, `tot_qty`) VALUES
(1, 1, 'Regular Cheese', '129', 'regular_cheese.jpg', 1, 10),
(2, 2, 'Butter Milk', '25', 'amul_buttermilk.jpg', 1, 9),
(3, 3, 'Milk', '30', 'amul_milk.jpg', 1, 10),
(4, 4, 'Cool Milk', '40', 'cool_milk.jpg', 1, 10),
(5, 5, 'Ice Cream', '30', 'ice_cream.jpg', 1, 9),
(6, 6, 'Mozzarella Cheese', '109', 'mozzarella_cheese.jpg', 1, 10),
(7, 7, 'Paneer', '149', 'panir.jpg', 1, 10),
(8, 8, 'Butter', '189', 'butter.jpg', 1, 10),
(9, 9, 'All Out', '110', 'allout.jpg', 1, 10),
(10, 10, 'Body Milk', '250', 'bodymilk.jpg', 1, 10),
(11, 11, 'Fast Card', '49', 'fastcard.jpg', 1, 10),
(12, 12, 'Hand-Wash', '150', 'handwash.jpg', 1, 10),
(13, 13, 'Vicks', '89', 'vicks.jpg', 1, 10),
(14, 14, 'Soap', '25', 'lifebuoy.jpg', 1, 9),
(15, 15, 'Phenyle', '80', 'phenyle.jpg', 1, 10),
(16, 16, 'Sampoo', '350', 'sampoo.jpg', 1, 10),
(17, 17, 'Farali Chevada', '99', 'farali_chevada.jpg', 1, 10),
(18, 18, 'Kachori', '199', 'kachori.jpg', 1, 10),
(19, 19, 'Oil', '2550', 'oil.jpg', 1, 10),
(20, 20, 'Pasta', '125', 'pasta.jpg', 1, 10),
(21, 21, 'Maggi', '25', 'maggi.jpg', 1, 10),
(22, 22, 'Besan', '90', 'besan.jpg', 1, 10),
(23, 23, 'Wheat Atta', '500', 'atta.jpg', 1, 10),
(24, 24, 'Jaggery', '160', 'jaggery.jpg', 1, 10),
(25, 25, 'Baby Boy Shorts', '600', 'baby_boy.jpg', 1, 10),
(26, 26, 'Baby Girl Frock', '1000', 'baby_girl.jpg', 1, 6),
(27, 27, 'Born Baby Pair', '350', 'born_baby.jpg', 1, 10),
(28, 28, 'Women One Piece', '999', 'women_onepiece.jpg', 1, 10),
(29, 29, 'Men Shirt Pent', '1500', 'men_pant-shirt.jpg', 1, 6),
(30, 30, 'Women Saree', '2000', 'women_saree.jpg', 1, 10),
(31, 31, 'Men Kurta Pajama', '1200', 'men_kurta.jpg', 1, 10),
(32, 32, 'Girls Night Dress', '250', 'girls_nightdress.jpg', 1, 10),
(33, 33, 'Clock', '1500', 'clock.jpg', 1, 10),
(34, 34, 'Show Piece', '2500', 'showpiece.jpg', 1, 4),
(35, 35, 'Wall Show Piece', '899', 'wallshowpiece.jpeg', 1, 8),
(36, 36, 'Flower Show Piece', '5000', 'flower_showpiece.jpg', 1, 10),
(37, 37, 'Tealight Show Piece', '4000', 'tealight_showpiece.jpg', 1, 8),
(38, 38, 'Ring Bell', '500', 'ring_bell.jpg', 1, 10),
(39, 39, 'Flower Pot', '250', 'flower_pot.jpg', 1, 10),
(40, 40, 'Ganesh Idol', '550', 'ganesh_idol.jpg', 1, 10),
(41, 41, 'Casserole', '550', 'casserole.jpg', 1, 10),
(42, 42, 'Dustbin', '150', 'dustbin.jpg', 1, 8),
(43, 43, 'Lunch Box', '350', 'lunch_box.jpg', 1, 10),
(44, 44, 'Balti', '80', 'plastic_balti.jpg', 1, 10),
(45, 45, 'Plate', '250', 'plastic_plates.jpg', 1, 8),
(46, 46, 'Tumbler', '50', 'plastic_tumbler.jpg', 1, 10),
(47, 47, 'Water Bottle', '999', 'water_bottle.jpg', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subcatalogue`
--

CREATE TABLE `subcatalogue` (
  `c_id` int(100) NOT NULL,
  `s_id` int(50) NOT NULL,
  `s_img` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `s_nm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcatalogue`
--

INSERT INTO `subcatalogue` (`c_id`, `s_id`, `s_img`, `s_nm`) VALUES
(1, 1, 'regular_cheese.jpg', 'Regular Cheese   '),
(1, 2, 'amul_buttermilk.jpg', 'Butter Milk'),
(1, 3, 'amul_milk.jpg', 'Milk'),
(1, 4, 'cool_milk.jpg', 'Cool Milk'),
(1, 5, 'ice_cream.jpg', 'Ice Cream'),
(1, 6, 'mozzarella_cheese.jpg', 'Mozzarella Cheese'),
(1, 7, 'panir.jpg', 'Paneer'),
(1, 8, 'butter.jpg', 'Butter'),
(2, 9, 'allout.jpg', 'All Out '),
(2, 10, 'bodymilk.jpg', 'Body Milk'),
(2, 11, 'fastcard.jpg', 'Fast Card'),
(2, 12, 'handwash.jpg', 'Hand-Wash'),
(2, 13, 'vicks.jpg', 'Vicks'),
(2, 14, 'lifebuoy.jpg', 'Soap'),
(2, 15, 'phenyle.jpg', 'Phenyle'),
(2, 16, 'sampoo.jpg', 'Sampoo'),
(3, 17, 'farali_chevada.jpg', 'Farali Chevada'),
(3, 18, 'kachori.jpg', 'Kachori'),
(3, 19, 'oil.jpg', 'Oil'),
(3, 20, 'pasta.jpg', 'Pasta'),
(3, 21, 'maggi.jpg', 'Maggi'),
(3, 22, 'besan.jpg', 'Besan'),
(3, 23, 'atta.jpg', 'Wheat Atta'),
(3, 24, 'jaggery.jpg', 'Jaggery'),
(4, 25, 'baby_boy.jpg', 'Baby Boy Shorts'),
(4, 26, 'baby_girl.jpg', 'Baby Girl Frock'),
(4, 27, 'born_baby.jpg', 'Born Baby Pair'),
(4, 28, 'women_onepiece.jpg', 'Women One Piece'),
(4, 29, 'men_pant-shirt.jpg', 'Men Shirt Pent'),
(4, 30, 'women_saree.jpg', 'Women Saree'),
(4, 31, 'men_kurta.jpg', 'Men Kurta Pajama'),
(4, 32, 'girls_nightdress.jpg', 'Girls Night Dress'),
(5, 33, 'clock.jpg', 'Clock'),
(5, 34, 'showpiece.jpg', 'Show Piece'),
(5, 35, 'wallshowpiece.jpeg', 'Wall Show Piece'),
(5, 36, 'flower_showpiece.jpg', 'Flower Show Piece'),
(5, 37, 'tealight_showpiece.jpg', 'Tealight Show Piece'),
(5, 38, 'ring_bell.jpg', 'Ring Bell'),
(5, 39, 'flower_pot.jpg', 'Flower Pot'),
(5, 40, 'ganesh_idol.jpg', 'Ganesh Idol'),
(6, 41, 'casserole.jpg', 'Casserole'),
(6, 42, 'dustbin.jpg', 'Dustbin'),
(6, 43, 'lunch_box.jpg', 'Lunch Box'),
(6, 44, 'plastic_balti.jpg', 'Balti'),
(6, 45, 'plastic_plates.jpg', 'Plate'),
(6, 46, 'plastic_tumbler.jpg', 'Tumbler'),
(6, 47, 'water_bottle.jpg', 'Water Bottle'),
(6, 48, 'water_jug.jpg', 'Water Jug');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(50) NOT NULL,
  `u_nm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phoneno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_nm`, `password`, `address`, `city`, `state`, `phoneno`, `email_id`) VALUES
(1, 'Mansi', '123', 'Nana Mava', 'Rajkot', 'Gujrat', '4506230420', 'abd_12@gmail.com'),
(2, 'ABC', 'abc', 'Mota Mava', 'Rajkot', 'Gujrat', '4563257623', 'abc_12@gmail.com'),
(3, 'Alpa', '123', 'dncjsdbkjb', 'Rajkot', 'Gujrat', '05355236896', 'alpa_patel@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`chout_Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `subcatalogue`
--
ALTER TABLE `subcatalogue`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `b_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `chout_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product1`
--
ALTER TABLE `product1`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subcatalogue`
--
ALTER TABLE `subcatalogue`
  MODIFY `s_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product1` (`p_id`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product1` (`p_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE;

--
-- Constraints for table `product1`
--
ALTER TABLE `product1`
  ADD CONSTRAINT `product1_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `subcatalogue` (`s_id`);

--
-- Constraints for table `subcatalogue`
--
ALTER TABLE `subcatalogue`
  ADD CONSTRAINT `subcatalogue_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catalogue` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
