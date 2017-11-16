-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 12:37 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_25_084417_create_tbl_admin_table', 1),
(4, '2017_07_25_090514_create_tbl_category_table', 1),
(5, '2017_08_01_062052_create_tbl_manufacturer_table', 1),
(6, '2017_08_03_090616_create_tbl_product_table', 1),
(7, '2017_08_20_112132_create_tbl_customer_table', 1),
(8, '2017_08_22_115703_create_tbl_shipping_table', 1),
(9, '2017_08_26_085747_create_tbl_payment_table', 2),
(10, '2017_08_26_085904_create_tbl_order_table', 2),
(11, '2017_08_26_090025_create_tbl_order_details_table', 2),
(12, '2017_08_26_092850_create_tbl_order_details_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_lebel` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `access_lebel`, `created_at`, `updated_at`) VALUES
(1, 'haidar', 'haidarontor@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_description`, `category_status`, `created_at`, `updated_at`) VALUES
(5, 'Mobile', 'Mobile<br>', 1, NULL, NULL),
(6, 'Laptop', 'Laptop<br>', 1, NULL, NULL),
(7, 'Desktop', 'Desktop<br>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_zip_code` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `company_name`, `email_address`, `address`, `country`, `city`, `state`, `post_zip_code`, `mobile_number`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Rifat', 'Hossain', 'TT', 'rifat1234@gmail.com', 'Mirpur', 'Bangladesh', 'Dhaka', 'Dhaka', '1216', '01813894831', '123456', NULL, NULL),
(5, 'Kajol', 'Rajbongshi', 'TT', 'kajol1234@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1209', '01724639372', '123456', NULL, NULL),
(6, 'Rifat', 'Hossain', 'TT', 'rifat1234@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1267', '015213567890', '123456', NULL, NULL),
(7, 'Alim', 'Ahmed', 'TT', 'alim1234@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1209', '0172182948', '123456', NULL, NULL),
(8, 'Alamin', 'Chowdhury', 'TT', 'alamin123@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1205', '017123971827', '12345678', NULL, NULL),
(9, 'salam', 'khan', 'TT', 'salam@gmail.com', 'Shahbag', 'Bangladesh', 'Dhaka', 'Dhaka', '1209', '01728055185', '123456', NULL, NULL),
(10, 'Rifat', 'Hossain', 'TT', 'rifat@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1205', '01728055184', '12356', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `manufacturer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Manufacturer_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `Manufacturer_status`, `created_at`, `updated_at`) VALUES
(1, 'Sony', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Sony</span></font>', 1, NULL, NULL),
(2, 'Samsung', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Samsung</span></font>', 1, NULL, NULL),
(3, 'Lenovo', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Lenovo</span></font>', 1, NULL, NULL),
(4, 'I phone', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">I phone</span></font>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(250) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_status`, `order_total`, `created_at`, `updated_at`) VALUES
(26, 9, 9, 28, 'pending', '45,000.00', NULL, NULL),
(27, 9, 9, 29, 'pending', '36,000.00', NULL, NULL),
(28, 9, 9, 30, 'pending', '80,000.00', NULL, NULL),
(29, 10, 10, 31, 'pending', '72,000.00', NULL, NULL),
(30, 10, 10, 32, 'pending', '430,000.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `product_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`product_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(18, 17, 1, 'Sony', '42000', '1', NULL, NULL),
(19, 17, 2, 'lenovo', '38000', '2', NULL, NULL),
(20, 18, 4, 'Samsung', '36000', '1', NULL, NULL),
(21, 19, 3, 'I Phone', '45000', '1', NULL, NULL),
(22, 19, 4, 'Samsung', '36000', '1', NULL, NULL),
(23, 20, 1, 'Sony', '42000', '1', NULL, NULL),
(24, 21, 1, 'Sony', '42000', '1', NULL, NULL),
(25, 21, 3, 'I Phone', '45000', '3', NULL, NULL),
(26, 22, 2, 'lenovo', '38000', '1', NULL, NULL),
(27, 23, 2, 'lenovo', '38000', '1', NULL, NULL),
(28, 24, 3, 'I Phone', '45000', '1', NULL, NULL),
(29, 25, 1, 'Sony', '42000', '1', NULL, NULL),
(30, 26, 3, 'I Phone', '45000', '1', NULL, NULL),
(31, 27, 4, 'Samsung', '36000', '1', NULL, NULL),
(32, 28, 1, 'Sony', '42000', '1', NULL, NULL),
(33, 28, 2, 'lenovo', '38000', '1', NULL, NULL),
(34, 29, 4, 'Samsung', '36000', '2', NULL, NULL),
(35, 30, 1, 'Sony', '42000', '2', NULL, NULL),
(36, 30, 2, 'lenovo', '38000', '2', NULL, NULL),
(37, 30, 3, 'I Phone', '45000', '2', NULL, NULL),
(38, 30, 4, 'Samsung', '36000', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(13, 'cash_on_delivery', 'pending', NULL, NULL),
(14, 'cash_on_delivery', 'pending', NULL, NULL),
(15, 'cash_on_delivery', 'pending', NULL, NULL),
(16, 'cash_on_delivery', 'pending', NULL, NULL),
(17, 'cash_on_delivery', 'pending', NULL, NULL),
(18, 'cash_on_delivery', 'pending', NULL, NULL),
(19, 'cash_on_delivery', 'pending', NULL, NULL),
(20, 'cash_on_delivery', 'pending', NULL, NULL),
(21, 'cash_on_delivery', 'pending', NULL, NULL),
(22, 'cash_on_delivery', 'pending', NULL, NULL),
(23, 'cash_on_delivery', 'pending', NULL, NULL),
(24, 'cash_on_delivery', 'pending', NULL, NULL),
(25, 'cash_on_delivery', 'pending', NULL, NULL),
(26, 'cash_on_delivery', 'pending', NULL, NULL),
(27, 'cash_on_delivery', 'pending', NULL, NULL),
(28, 'cash_on_delivery', 'pending', NULL, NULL),
(29, 'cash_on_delivery', 'pending', NULL, NULL),
(30, 'cash_on_delivery', 'pending', NULL, NULL),
(31, 'cash_on_delivery', 'pending', NULL, NULL),
(32, 'cash_on_delivery', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `product_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_feature` tinyint(4) DEFAULT NULL,
  `product_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `id`, `product_title`, `product_name`, `product_price`, `product_short_description`, `product_long_description`, `image_name`, `is_feature`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Sony', 'Sony', '42000', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Sony</span></font>', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">Sony</span></font>', 'product_images/ieaybEPV2f6heVQ7qUbS.jpg', 1, 1, NULL, NULL),
(2, 7, 'lenovo', 'lenovo', '38000', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">lenovo</span></font>', '<font face=\"Arial, Verdana\"><span style=\"font-size: 13.3333px;\">lenovo</span></font>', 'product_images/eVMe2KzFfftgJ5GZSE16.jpg', 1, 1, NULL, NULL),
(3, 5, 'I Phone', 'I Phone', '45000', 'I Phone<br>', 'I Phone<br>', 'product_images/bK4c0YxTA4OZ870n8Zq5.jpg', NULL, 1, NULL, NULL),
(4, 6, 'Samsung', 'Samsung', '36000', 'Samsung<br>', 'Samsung<br>', 'product_images/7Q27SLJAE7Ww7GjqqVqY.jpg', NULL, 1, NULL, NULL),
(5, 7, 'Asus', 'Asus', '34000', 'Asus<br>', 'Asus<br>', 'product_images/tLe6CO1hGDHxA0luq55y.jpg', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_zip_code` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `first_name`, `last_name`, `company_name`, `email_address`, `address`, `country`, `city`, `state`, `post_zip_code`, `mobile_number`, `password`) VALUES
(4, 'Rostom', 'Ali', 'TT', 'rostom123@gmail.com', 'kollyanpur', 'Bangladesh', 'Dhaka', 'Dhaka', '1209', '0152159837', '123456'),
(5, 'Delower', 'Hossain', 'TT', 'delower123@gmail.com', 'Dhanmondi', 'Bangladesh', 'comilla', 'comilla', '1209', '01913957889', '123456'),
(6, 'Rostom', 'Ali', 'TT', 'rostom1234@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1209', '01721653721', '123456'),
(7, 'Rathik', 'Hossain', 'TT', 'rathik123@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1205', '0151617281', '123456'),
(8, 'Julhas', 'Ali', 'TT', 'julhas123@gmail.com', 'Dhanmondi', 'Bangladesh', 'Dhaka', 'Dhaka', '1206', '01677051551', '12345'),
(9, 'Akondo', 'Mondol', 'TT', 'akondo@gmail.com', 'Firmgate', 'Bangladesh', 'Dhaka', 'Dhaka', '1208', '01728055172', '123456'),
(10, 'Delower', 'Ali', 'TT', 'delower123@gmail.com', 'Bashundhara', 'Bangladesh', 'Dhaka', 'Dhaka', '1205', '01728055173', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`product_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `product_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
