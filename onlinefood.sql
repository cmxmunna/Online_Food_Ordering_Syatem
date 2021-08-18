-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 03:42 AM
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
-- Database: `onlinefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodlist`
--

CREATE TABLE `foodlist` (
  `id` int(11) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodlist`
--

INSERT INTO `foodlist` (`id`, `foodname`, `category`, `description`, `price`, `image`) VALUES
(1, 'Burger', 'Fast Food', 'Enjoy 10% Off on Combo Offer & Use voucher BK150 and get 21% off upto Tk 150 on orders over Tk 700', '380', 'Buurger.jpg'),
(2, 'Chicken Fry', 'Fast Food', '1 Whole chicken/chicken drumsticks and thighs1/4 Cup buttermilk1 Tsp Black pepper powderSalt (to taste)6 minced garlic cloves', '300', 'ChickenFry.jpg'),
(9, 'Spicy Korean Chicken Meal', 'Set Menu', 'A SPICY CHICKEN MEAL PREP INSPIRED BY KOREAN BBQ', '1000', 'spicy-korean-chicken-meal-prep.jpg'),
(10, 'Caesar Salad Roast Chicken', 'Salad', 'The only thing better than a roast chicken and a Caesar salad is a Caesar salad served with a chicken smothered in Caesar dressing and roasted until the garlic, anchovies, and mustard become deeply caramelized and flavorful.', '800', 'Caesar-Salad-Roast-Chicken.jpg'),
(11, 'Breakfat 1', 'Fruites', 'Healthy Breakfast', '600', 'Breakfast.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `food_id` varchar(110) NOT NULL,
  `food_name` varchar(110) NOT NULL,
  `category` varchar(100) NOT NULL,
  `amount` varchar(110) NOT NULL,
  `payment_method` varchar(110) NOT NULL,
  `number` varchar(110) NOT NULL,
  `status` varchar(110) NOT NULL,
  `date` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `username`, `food_id`, `food_name`, `category`, `amount`, `payment_method`, `number`, `status`, `date`) VALUES
(12, '58678188912200', 'Mihir Islam', '1', 'Burger', 'Fast Food', '380', 'BKASH', '01627124780', 'Order Delivered', '13-Aug-2021 03:35 AM'),
(13, '58678189956925', 'Mihir Islam', '9', 'Spicy Korean Chicken Meal', 'Set Menu', '1000', 'ROCKET', '01628855212', 'Order Preparing', '13-Aug-2021 03:36 AM'),
(14, '58678192622775', 'Anannya Rahman', '11', 'Breakfat 1', 'Fruites', '600', 'BKASH', '01627124780', 'Order Canceled', '13-Aug-2021 03:37 AM'),
(15, '58678193307250', 'Anannya Rahman', '10', 'Caesar Salad Roast Chicken', 'Salad', '800', 'NAGAD', '01627124780', 'Order Preparing', '13-Aug-2021 03:37 AM');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `username`, `password`, `email`, `type`, `address`, `phone`, `dob`, `gender`, `image`) VALUES
(1, 'Munna Abdullah', 'cmxmunna', '12345', 'cmxmunna@gmail.com', 'Admin', 'Golan, Ulokhola, Kaliganj, Gazipur', '01627120000', '1999-12-01', 'Male', 'Munna.jpg'),
(2, 'Anannya Rahman', 'anannya', '12345', 'anannya.rahman789@gmail.com', 'User', 'Dhaka, Bashundhora R/A', '01600000000', '06/25/1998', 'Female', 'Anannya.jpg'),
(3, 'Mihir Islam', 'mihir', '123456', 'mihir@gmail.com', 'User', '80 W 170th St', '01627120000', '1999-12-23', 'Male', 'Mihir.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodlist`
--
ALTER TABLE `foodlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodlist`
--
ALTER TABLE `foodlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
