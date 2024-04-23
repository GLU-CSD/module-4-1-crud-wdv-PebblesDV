-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 02:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `producten`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `product_id`) VALUES
(1, 'assets/img/products/singletRed.webp', 1),
(2, 'assets/img/products/singletRed2.webp', 1),
(3, 'assets/img/products/singletRed3.webp', 1),
(4, 'assets/img/products/shirtRed.webp', 2),
(5, 'assets/img/products/shirtRed2.webp', 2),
(6, 'assets/img/products/shirtRed3.webp', 2),
(7, 'assets/img/products/socksRed.webp', 3),
(8, 'assets/img/products/socksRed2.webp', 3),
(9, 'assets/img/products/socksRed3.webp', 3),
(10, 'assets/img/products/singletBlue.webp', 4),
(11, 'assets/img/products/singletBlue2.webp', 4),
(12, 'assets/img/products/singletBlue3.webp', 4),
(13, 'assets/img/products/shirtBlue.webp', 5),
(14, 'assets/img/products/shirtBlue2.webp', 5),
(15, 'assets/img/products/shirtBlue3.webp', 5),
(16, 'assets/img/products/socksBlue.webp', 6),
(17, 'assets/img/products/socksBlue2.webp', 6),
(18, 'assets/img/products/socksBlue3.webp', 6),
(19, 'assets/img/products/singletPink.webp', 7),
(20, 'assets/img/products/singletPink2.webp', 7),
(21, 'assets/img/products/singletPink3.webp', 7),
(22, 'assets/img/products/shirtPink.webp', 8),
(23, 'assets/img/products/shirtPink2.webp', 8),
(24, 'assets/img/products/shirtPink3.webp', 8),
(25, 'assets/img/products/socksPink.webp', 9),
(26, 'assets/img/products/socksPink2.webp', 9),
(27, 'assets/img/products/socksPink3.webp', 9),
(28, 'assets/img/products/singletBlack.webp', 10),
(29, 'assets/img/products/singletBlack2.webp', 10),
(30, 'assets/img/products/singletBlack3.webp', 10),
(31, 'assets/img/products/shirtBlack.webp', 11),
(32, 'assets/img/products/shirtBlack2.webp', 11),
(33, 'assets/img/products/shirtBlack3.webp', 11),
(34, 'assets/img/products/socksBlack.webp', 12),
(35, 'assets/img/products/socksBlack2.webp', 12),
(36, 'assets/img/products/socksBlack3.webp', 12),
(37, 'assets/img/products/singletWhite.webp', 13),
(38, 'assets/img/products/singletWhite2.webp', 13),
(39, 'assets/img/products/singletWhite3.webp', 13),
(40, 'assets/img/products/shirtWhite.webp', 14),
(41, 'assets/img/products/shirtWhite2.webp', 14),
(42, 'assets/img/products/shirtWhite3.webp', 14),
(43, 'assets/img/products/socksWhite.webp', 15),
(44, 'assets/img/products/socksWhite2.webp', 15),
(45, 'assets/img/products/socksWhite3.webp', 15),
(46, 'assets/img/products/singletDBlue.webp', 16),
(47, 'assets/img/products/singletDBlue2.webp', 16),
(48, 'assets/img/products/singletDBlue3.webp', 16),
(49, 'assets/img/products/shirtDBlue.webp', 17),
(50, 'assets/img/products/shirtDBlue2.webp', 17),
(51, 'assets/img/products/shirtDBlue3.webp', 17),
(52, 'assets/img/products/socksDBlue.webp', 18),
(53, 'assets/img/products/socksDBlue2.webp', 18),
(54, 'assets/img/products/socksDBlue3.webp', 18),
(55, 'assets/img/products/singletOrange.webp', 19),
(56, 'assets/img/products/singletOrange2.webp', 19),
(57, 'assets/img/products/singletOrange3.webp', 19),
(58, 'assets/img/products/shirtOrange.webp', 20),
(59, 'assets/img/products/shirtOrange2.webp', 20),
(60, 'assets/img/products/shirtOrange3.webp', 20),
(61, 'assets/img/products/socksOrange.webp', 21),
(62, 'assets/img/products/socksOrange2.webp', 21),
(63, 'assets/img/products/socksOrange3.webp', 21);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category`, `title`, `price`, `description`) VALUES
(1, 'Singlet', 'IPF Approved - Red', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(2, 'Meet Shirt', 'IPF Approved - Red', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(3, 'Deadlift Socks', 'IPF Approved - Red', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.'),
(4, 'Singlet', 'IPF Approved - Light Blue', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(5, 'Meet Shirt', 'IPF Approved - Light Blue', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(6, 'Deadlift Socks', 'IPF Approved - Light Blue', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.'),
(7, 'Singlet', 'IPF Approved - Pink', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(8, 'Meet Shirt', 'IPF Approved - Pink', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(9, 'Deadlift Socks', 'IPF Approved - Pink', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.'),
(10, 'Singlet', 'IPF Approved - Black', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(11, 'Meet Shirt', 'IPF Approved - Black', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(12, 'Deadlift Socks', 'IPF Approved - Black', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.'),
(13, 'Singlet', 'IPF Approved - White', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(14, 'Meet Shirt', 'IPF Approved - White', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(15, 'Deadlift Socks', 'IPF Approved - White', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.'),
(16, 'Singlet', 'IPF Approved - Dark Blue', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(17, 'Meet Shirt', 'IPF Approved - Dark Blue', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(18, 'Deadlift Socks', 'IPF Approved - Dark Blue', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.'),
(19, 'Singlet', 'IPF Approved - Orange', 84.99, 'Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes. Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.'),
(20, 'Meet Shirt', 'IPF Approved - Orange', 37.99, 'Looking to dominate your next powerlifting meet with style and confidence? Look no further than the Meet Shirts from Powerlifting Apparel! This shirt isnt just your average gym wear, its a game-changer approved by the International Powerlifting Federation (IPF) for serious competitors. Crafted with precision and passion, this shirt is more than just apparel, its your secret weapon. Not only does it catch eyes, but it also delivers unbeatable performance, keeping you comfortable and focused throughout your lifts.'),
(21, 'Deadlift Socks', 'IPF Approved - Orange', 19.99, 'Introducing these Deadlift Socks, a must-have accessory for serious lifters and style enthusiasts alike, available exclusively from Powerlifting Apparel. These socks arent just any ordinary footwear, theyre engineered specifically for deadlifting – the ultimate blend of form and function. Crafted with care and attention to detail, these Deadlift Socks combine performance and aesthetics seamlessly. Made from high-quality materials, these socks offer optimal support and comfort, allowing you to focus on your lifts without distraction.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
