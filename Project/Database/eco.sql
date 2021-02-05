-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 04:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `name`) VALUES
(43, 'nooraljuhani@gmail.com', 'N123', 'noor');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `cat_image`) VALUES
(24, 'Clothes', 'ZARA,GUCCI,LV', 'Clothes.jpg'),
(25, 'Shoes', 'Adidas,Nike,LV', 'e9d42a749a71d9da377fbca712a46948.jpg'),
(26, 'Makeup', 'Huda,Mac', 'Makeup.jpg'),
(27, 'Skin care', 'NIVEA,Vaseline,Garnier', 'Skin.jpg'),
(31, 'Accessories', 'CHANEl', 'JEWELLERY1.jpg'),
(32, 'Bags', 'Dior,chanel', 'Bags.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(3) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `full_name`, `email`, `password`, `address`, `mobile`) VALUES
(4, 'nooraljuhani', 'nooraljuhani@gmail.com', 'T123', 'Amman', '0790689313'),
(5, 'aseelaljuhani', 'aseelaljuhani@gmail.com', 'A123', 'Amman', '0790689313'),
(8, 'lara', 'laraaljuhani@gmail.com', 'L123', 'Amman', '0791234567'),
(9, 'customer', 'customer@gmail.com', 'C123', 'Amman', '0790689313'),
(10, 'reem', 'reemaljuhani@gmail.com', 'R123', 'Amman', '0790689313'),
(11, 'sara', 'sara@gmail.com', 'S123', 'Amman', '0791234567');

-- --------------------------------------------------------

--
-- Table structure for table `item_order`
--

CREATE TABLE `item_order` (
  `detail_id` int(3) NOT NULL,
  `order_id` int(3) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `qty` int(3) NOT NULL,
  `total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_order`
--

INSERT INTO `item_order` (`detail_id`, `order_id`, `pro_id`, `qty`, `total`) VALUES
(704, 21, 73, 1, 400),
(705, 22, 73, 1, 400),
(706, 23, 73, 1, 400),
(707, 24, 73, 1, 400),
(708, 24, 73, 3, 1200),
(709, 25, 73, 1, 400),
(710, 27, 73, 2, 800),
(711, 28, 73, 2, 800),
(712, 29, 73, 2, 800),
(713, 30, 73, 3, 1200),
(714, 31, 73, 2, 800),
(715, 32, 73, 2, 800),
(716, 33, 73, 2, 800),
(717, 34, 73, 3, 1200),
(718, 35, 73, 2, 800),
(719, 36, 73, 1, 400),
(720, 37, 75, 1, 200),
(721, 37, 76, 1, 300),
(722, 38, 74, 2, 160),
(723, 38, 79, 1, 260),
(724, 39, 80, 2, 1060),
(725, 39, 96, 1, 63),
(726, 39, 109, 1, 22),
(727, 39, 116, 1, 23),
(728, 40, 87, 1, 280),
(729, 41, 101, 1, 23),
(730, 42, 83, 1, 576),
(731, 43, 97, 1, 58),
(732, 43, 86, 1, 310),
(733, 43, 90, 2, 80),
(734, 43, 144, 1, 400),
(735, 43, 83, 1, 576),
(736, 44, 153, 4, 1600),
(737, 45, 74, 2, 160);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `odate` date NOT NULL DEFAULT current_timestamp(),
  `c_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `odate`, `c_id`) VALUES
(21, '2021-01-30', 9),
(22, '2021-01-30', 9),
(23, '2021-01-30', 9),
(24, '2021-01-30', 9),
(25, '2021-01-30', 9),
(26, '2021-01-30', 9),
(27, '2021-01-30', 9),
(28, '2021-01-30', 9),
(29, '2021-01-30', 9),
(30, '2021-01-30', 9),
(31, '2021-01-30', 9),
(32, '2021-01-30', 9),
(33, '2021-01-30', 9),
(34, '2021-01-30', 9),
(35, '2021-01-31', 9),
(36, '2021-01-31', 9),
(37, '2021-01-31', 9),
(38, '2021-01-31', 9),
(39, '2021-02-01', 11),
(40, '2021-02-01', 9),
(41, '2021-02-01', 9),
(42, '2021-02-01', 11),
(43, '2021-02-01', 11),
(44, '2021-02-01', 11),
(45, '2021-02-01', 11);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pro_desc` text NOT NULL,
  `price` int(3) NOT NULL,
  `image` text NOT NULL,
  `ven_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name`, `pro_desc`, `price`, `image`, `ven_id`) VALUES
(74, 'Long robe', 'S-L-XL', 80, 'z1.jpg', 213),
(75, 'Formal kit', 'S-L-XL', 200, 'z2.jpg', 213),
(76, 'Woolen dress', 'S-L-XL', 300, 'z3.jpg', 213),
(77, 'Comfortable dress', 'S-L-XL', 380, 'z4.jpg', 213),
(78, 'Classy dress', 'S-L-XL', 700, 'l1.jpg', 214),
(79, 'leather jacket', 'S-L-XL', 260, 'l2.jpg', 214),
(80, 'Uniforms', 'S-L', 530, 'l3.jpg', 214),
(81, 'Jacket', 'S-L', 355, 'l4.jpg', 214),
(82, 'Soft dress', 'All sizes', 256, 'G1.jpg', 215),
(83, 'Velvet dress', 'velvet -S-', 576, 'g2.jpeg', 215),
(84, ' Lace Black', ' Lace -S,L-', 482, 'g3.jpeg', 215),
(85, 'Belted shoulder', 'S-L-XL', 2, 'g4.jpeg', 215),
(86, 'Kan', 'S-L', 310, 'f1.jpg', 216),
(87, 'Modes', 'S-L-XL', 280, 'f2.webp', 216),
(88, 'Cross', 'S-L', 105, 'f3.jpg', 216),
(89, 'Small Kan', 'S', 200, 'f4.webp', 216),
(90, 'Sneakers', 'Men ', 40, 'n1.webp', 217),
(91, 'Air Max', 'women', 60, 'n2.jpg', 217),
(92, 'Hatue ', 'Men ', 70, 'n2.webp', 217),
(93, 'Photon', 'Men ', 50, 'n2.webp', 217),
(95, 'Couns', 'Pro ', 54, 'a1.jpg', 219),
(96, 'Ultra', 'Men ', 63, 'a2.jpg', 219),
(97, 'National', 'women', 58, 'a3.jpg', 219),
(98, 'Consort', 'Men ', 87, 'a4.jpg', 219),
(99, 'Deva', 'women', 75, 'p1.jpg', 220),
(100, 'Demi', 'women', 15, 'p3.jpg', 220),
(101, 'Core', 'Men ', 23, 'p33.jpg', 220),
(102, 'Nova', 'M&W', 19, 'p4.jpg', 220),
(103, 'Sneakers low', 'women', 198, 'ff1.webp', 221),
(104, 'SIRHAN', 'women', 32, 'ff2.jpg', 221),
(105, 'Caall', 'M&W', 45, 'ff3.webp', 221),
(106, 'Barby', 'women', 55, 'ff4.jpg', 221),
(107, 'Eyeshadow', 'All color ', 30, 'h1.jpg', 223),
(108, 'Foundation', 'All skin', 25, 'h2.jpg', 223),
(109, 'Lipsticks', 'All color ', 22, 'h3.jpg', 223),
(110, 'Matt Lip', 'All color ', 32, 'h4.jpg', 223),
(111, 'Soft Matte', 'All skin', 31, 'm1.png', 224),
(112, 'Firlet', 'All color ', 12, 'm2.png', 224),
(113, 'Star', 'All skin', 21, 'm3.png', 224),
(114, 'Mineralize', 'All color ', 11, 'm4.png', 224),
(115, 'Lumnoes', 'All skin', 31, 'nn1.webp', 225),
(116, 'Sheer', 'All skin', 23, 'nn2.jpg', 225),
(117, 'Creamy', 'All skin', 13, 'nn3.jpg', 225),
(118, 'Matte', 'with light', 15, 'nn4.webp', 225),
(119, 'Lash', 'New', 36, 'lo1.jpg', 226),
(120, 'Pro-Matte', 'Matte-over', 41, 'lo2.jpg', 226),
(121, 'Concealr', 'cover all', 72, 'lo3.jpg', 226),
(122, 'Foundation', 'Longwear', 39, 'lo4.jpg', 226),
(123, 'Dry', '48hr', 12, 'v1.jpg', 227),
(124, 'Elathy', 'White', 11, 'v2.png', 227),
(125, 'Cocoa', 'Glow Body', 15, 'v3.jpg', 227),
(126, 'Healthy', 'lotion', 9, 'v4.jpg', 227),
(127, 'Shaveing', 'Men ', 5, 'nv1.jpg', 228),
(128, 'Micell', 'Remove MU', 6, 'nv2.jpg', 228),
(129, 'Lotion', 'In-shower', 10, 'nv3.jpg', 228),
(130, 'Nivea sun', ' everyday use', 11, 'nv4.jpg', 228),
(131, 'Micellar', 'skin-active', 4, 'gr1.jpg_480Wx480H', 229),
(132, 'Eye make-up', 'fresh formula', 5, 'gr2.jpg', 229),
(133, 'Micellar', 'Cleaning ', 3, 'gr3.jpg', 229),
(134, 'SkinActive', 'Clean+ Refreshing', 7, 'gr4.jpg', 229),
(135, 'Glowing', 'Cleaning ', 8, 'd1.jpg', 230),
(136, 'White Soap', ' Beauty Bar', 5, 'd2.jpg', 230),
(137, 'Shw-Dove', 'Soap', 3, 'd3.jpg', 230),
(138, 'Wash', 'Orange', 2, 'd4.jpg', 230),
(139, 'Necklace', 'tall', 22, 'chn1.jpg', 231),
(140, 'Brooch', 'crystal', 43, 'chn2.jpg', 231),
(141, 'Headband', 'CC Logos', 4, 'ch3.jpg', 231),
(142, 'Droplet', 'long', 5, 'chn4.jpg', 231),
(143, 'Bracelet', 'Gold', 9, 'cr1.jpg', 232),
(144, 'Necklace', 'Gold', 400, 'cr2.jpg', 232),
(145, 'Jewel', 'Gold', 30, 'cr3.jpg', 232),
(146, 'Ring', 'Gold', 20, 'cr4.jpg', 232),
(147, 'Ring', 'Rose', 19, 'pn1.jpg', 233),
(148, 'Bracelet', 'love', 11, 'pn2.jpg', 233),
(149, 'Bracelet', 'Selver', 21, 'pn3.jpg', 233),
(150, 'Chian', 'Gold', 23, 'pn4.jpg', 233),
(151, 'Versus', 'Gold', 300, 'vc.jpg', 234),
(152, 'Ladies watch', 'Gold', 500, 'vc1.jpg', 234),
(153, ' VerdeWatches‏', 'Gold', 400, 'vc2.jpg', 234),
(154, 'Seiko', 'Gold', 436, 'vc3.jpg', 234),
(155, 'Bucket', 'black', 39, 'pr1.webp', 235),
(156, 'Black', 'black', 32, 'pr2.webp', 235),
(157, 'Rube', 'blue', 25, 'pr3.jpg', 235),
(158, 'Leather', 'black', 43, 'pr4.webp', 235),
(159, 'Job bag', 'black&Gold', 103, 'sl1.jpg', 236),
(160, 'Casual', 'Beige', 30, 'sl2.jpg', 236),
(161, 'Wallet', 'Small', 32, 'sl3.jpg', 236),
(162, 'Kate', 'Selver', 32, 'sl4.jpg', 236),
(163, 'Mini Lady', 'velvet', 37, 'dr1.webp', 237),
(164, 'Medium Lady ', 'pink', 55, 'dr2.webp', 237),
(165, 'Small Book', 'with art', 42, 'dr3.webp', 237),
(166, 'Large', 'Small', 24, 'dr4.webp', 237),
(167, 'LCST', 'large ', 40, 'la1.jpg', 238),
(168, 'Bag weman', 'STlight', 53, 'la2.jpg', 238),
(169, 'Veli', 'Small', 39, 'la3.jpg', 238),
(170, 'Men Bag', 'White', 42, 'la4.jpg', 238);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ven_id` int(3) NOT NULL,
  `ven_name` varchar(50) NOT NULL,
  `ven_email` varchar(50) NOT NULL,
  `ven_pass` varchar(50) NOT NULL,
  `ven_phone` varchar(50) NOT NULL,
  `ven_add` varchar(50) NOT NULL,
  `ven_img` text NOT NULL,
  `cat_id` int(3) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ven_id`, `ven_name`, `ven_email`, `ven_pass`, `ven_phone`, `ven_add`, `ven_img`, `cat_id`, `active`) VALUES
(213, 'ZARA', 'zara@gmail.com', 'Z123', '0098765433', 'Amman(Taj mall)', 'cz.jpg', 24, 1),
(214, 'Louis Vuitton', 'lv@gmail.com', 'L123', '0790987870', 'Amman(City mall)', 'cl.jpg', 24, 1),
(215, 'GUCCI', 'gucci@gmail.com', 'G123', '0798652345', 'Amman', 'cg.jpg', 24, 1),
(216, 'Fendi', 'fendi@gmail.com', 'f123', '0790987870', 'Amman(Mecca  mall)', 'cf.svg', 24, 1),
(217, 'Nike', 'nike@gmail.com', 'Ni123', '0098765433', 'Amman(City mall)', 'n.jpg', 25, 1),
(219, 'Adidas', 'adidas@gmail.com', 'aa12', '0799987677', 'Amman(Mecca  mall)', 'an.jpg', 25, 1),
(220, 'Puma', 'puma@gmail.com', 'p123', '0790987870', 'Amman', 'pn.jpg', 25, 1),
(221, 'Fila', 'fila@gmail.com', 'fi123', '0798652345', 'Amman(Taj mall)', 'fin.png', 25, 1),
(223, 'Huda beauty', 'huda@gmail.com', 'H123', '0790987870', 'Amman(Mecca  mall)', 'hh.png', 26, 1),
(224, 'MAC', 'mac@gmail.com', 'M123', '0798654356', 'Amman(Taj mall)', 'mn.jpeg', 26, 1),
(225, 'NARS', 'nars@gmail.com', 'na123', '0790987870', 'Amman(City mall)', 'nm.jpg', 26, 1),
(226, 'Loreal', 'loreal@gmail.com', 'lo123', '0798652345', 'Amman(City mall)', 'l.jpg', 26, 1),
(227, 'vaseline', 'vaseline@gmail.com', 'v123', '0790987870', 'Amman(Mecca  mall)', 'v.jpg', 27, 1),
(228, 'Nivea', 'nivea@gmail.com', 'Ni123', '0798652345', 'Amman(Taj mall)', 'nv.jpg', 27, 1),
(229, 'Garnier', 'garnier@gmail.com', 'g1233', '0790987870', 'Amman(Mecca  mall)', 'gr.jpg', 27, 1),
(230, 'Dove', 'dove@gmail.com', 'do123', '0799987677', 'Amman(City mall)', 'd.jpg', 27, 1),
(231, 'Chanel', 'chanel@gmail.com', 'ca123', '0798652345', 'Amman(Mecca  mall)', 'ch.png', 31, 1),
(232, 'Cartier', 'cartier@gmail.com', 'ca123', '0799987677', 'Amman(Taj mall)', 'ca.jpg', 31, 1),
(233, 'Pandora', 'pandora@gmail.com', 'pa123', '0798652345', 'Irbid', 'pa.jpg', 31, 1),
(234, 'Versace', 'versace@gmail.com', 'vr123', '0790987870', 'Amman(Mecca  mall)', 'vr.jpg', 31, 1),
(235, 'Prada', 'prada@gmail.com', 'pr123', '0798652345', 'Amman(Taj mall)', 'pr.jpg', 32, 1),
(236, 'Saint Laurent', 'SaintLaurent@gmail.com', 's123', '0798652345', 'Amman(Mecca  mall)', 'sl.png', 32, 1),
(237, 'Dior', 'dior@gmail.com', 'd123', '0790987870', 'Amman(City mall)', 'di.jpg', 32, 1),
(238, 'Lacoste', 'lacost@gmail.com', 'la123', '0098765433', 'Amman(Taj mall)', 'la.jpg', 32, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `item_order_ibfk_1` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `ven_id` (`ven_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
  MODIFY `detail_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ven_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ven_id`) REFERENCES `vendor` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `vendor_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
