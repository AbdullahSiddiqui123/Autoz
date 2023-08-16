-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_autoz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `admin_id` int(11) NOT NULL,
  `admin_email` text DEFAULT NULL,
  `admin_pass` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_user`
--

INSERT INTO `tbl_admin_user` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'admin@autoz.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyer`
--

CREATE TABLE `tbl_buyer` (
  `user_id` int(11) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_password` text DEFAULT NULL,
  `cnic_no` text DEFAULT NULL,
  `cnic_image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `active_status` varchar(25) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buyer`
--

INSERT INTO `tbl_buyer` (`user_id`, `user_name`, `user_email`, `user_password`, `cnic_no`, `cnic_image`, `address`, `phone_no`, `register_date`, `active_status`) VALUES
(1, 'buyer', 'buyer@gmail.com', '12345678', '4210119615567', 'autoz.png', 'Office No D2 Blade Trade Center', '03152916066', '2022-11-01', 'Active'),
(2, 'ibrahim buyer', 'ibrahimbuyer@gmail.com', '12345678', '4210119651667', 'autoz.png', 'Office No D2 Blade Trade Center', '03152916066', '2022-11-01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat_message`
--

CREATE TABLE `tbl_chat_message` (
  `msg_id` int(11) NOT NULL,
  `msg_date` date DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `msg_text` text DEFAULT NULL,
  `sendtype` text DEFAULT NULL,
  `rectype` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chat_message`
--

INSERT INTO `tbl_chat_message` (`msg_id`, `msg_date`, `sender_id`, `receiver_id`, `msg_text`, `sendtype`, `rectype`) VALUES
(8, '2023-06-11', 1, 1, 'hey seller', 'Buyer', 'Seller'),
(9, '2023-06-11', 1, 1, 'i want to purchase your car', 'Buyer', 'Seller'),
(10, '2023-06-11', 1, 1, 'hey sohail showroom', 'Buyer', 'ShowRoom'),
(11, '2023-06-11', 1, 1, 'i want to visit your showroom', 'Buyer', 'ShowRoom'),
(12, '2023-06-11', 1, 1, 'yes sure please visit', 'ShowRoom', 'Buyer'),
(13, '2023-06-11', 1, 1, 'please timing send', 'Buyer', 'ShowRoom'),
(14, '2023-06-11', 1, 1, '9 to 5', 'ShowRoom', 'Buyer'),
(15, '2023-06-11', 1, 1, 'yes please call 03242898858', 'Seller', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `c_id` int(11) NOT NULL,
  `c_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`c_id`, `c_name`) VALUES
(1, 'Honda'),
(2, 'Toyota'),
(3, 'Suzuki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `message_id` int(11) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_phone` text DEFAULT NULL,
  `user_message` text DEFAULT NULL,
  `message_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`message_id`, `user_name`, `user_email`, `user_phone`, `user_message`, `message_date`) VALUES
(1, 'muhammad ibrahim', 'h.ibrahimayub@gmail.com', '+923242898858', 'sgdgasgas', '2023-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_installment_upload`
--

CREATE TABLE `tbl_installment_upload` (
  `upload_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` text DEFAULT NULL,
  `car_title` text DEFAULT NULL,
  `car_conidtion` text DEFAULT NULL,
  `company_id` text DEFAULT NULL,
  `model_brand` text DEFAULT NULL,
  `transmission` text DEFAULT NULL,
  `fuel_type` text DEFAULT NULL,
  `color_code` text DEFAULT NULL,
  `car_detail` text DEFAULT NULL,
  `adv_amount` double DEFAULT NULL,
  `monthly_installment` double DEFAULT NULL,
  `final_amount` double DEFAULT NULL,
  `no_plate` text DEFAULT NULL,
  `reg_year` text DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `post_status` varchar(24) DEFAULT 'Active',
  `post_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_installment_upload`
--

INSERT INTO `tbl_installment_upload` (`upload_id`, `user_id`, `user_type`, `car_title`, `car_conidtion`, `company_id`, `model_brand`, `transmission`, `fuel_type`, `color_code`, `car_detail`, `adv_amount`, `monthly_installment`, `final_amount`, `no_plate`, `reg_year`, `image_1`, `image_2`, `image_3`, `post_status`, `post_datetime`) VALUES
(1, 1, 'ShowRoom', 'Honda City aspire 1.5 Automatic Brand', 'Brand New', '2', 'Ralex', 'Manual', 'Petrol', '#000000', 'Its Suzuki Cultus Limited Edition  Model 2016 Original geniune mileage  Alloy rims installed Power windows installed  Tv back camera installed  1 pcs spary only without poligate  Very well maintained vehicle  futher details call or whatsupp  Call after 2 in noon', 12000, 20000, 200000, 'AFG6432', '2011', '302491834-400x300.jpg', '', '', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rent_upload`
--

CREATE TABLE `tbl_rent_upload` (
  `upload_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` text DEFAULT NULL,
  `car_title` text DEFAULT NULL,
  `car_conidtion` text DEFAULT NULL,
  `company_id` text DEFAULT NULL,
  `model_brand` text DEFAULT NULL,
  `transmission` text DEFAULT NULL,
  `fuel_type` text DEFAULT NULL,
  `color_code` text DEFAULT NULL,
  `car_detail` text DEFAULT NULL,
  `adv_amount` double DEFAULT NULL,
  `one_night_amount` double DEFAULT NULL,
  `full_day_amount` double DEFAULT NULL,
  `no_plate` text DEFAULT NULL,
  `reg_year` text DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `post_status` varchar(24) DEFAULT 'Active',
  `post_datetime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rent_upload`
--

INSERT INTO `tbl_rent_upload` (`upload_id`, `user_id`, `user_type`, `car_title`, `car_conidtion`, `company_id`, `model_brand`, `transmission`, `fuel_type`, `color_code`, `car_detail`, `adv_amount`, `one_night_amount`, `full_day_amount`, `no_plate`, `reg_year`, `image_1`, `image_2`, `image_3`, `post_status`, `post_datetime`) VALUES
(3, 1, 'Seller', 'Suzuki Cultus Limited Edition Model 2016', 'Used Car', '1', 'Cultus VXL', 'Manual', 'Petrol', '#f8f7f7', 'Its Suzuki Cultus Limited Edition  Model 2016 Original geniune mileage  Alloy rims installed Power windows installed  Tv back camera installed  1 pcs spary only without poligate  Very well maintained vehicle  futher details call or whatsupp  Call after 2 in noon', 5000, 4000, 8000, 'AFG6432', '2016', '301320741-400x300.jpg', '301320745-400x300.jpg', '', 'Active', '2022-11-12 00:06:52'),
(4, 1, 'Seller', 'Honda City aspire 1.5 Automatic Brand', 'Used Car', '2', 'Cultus VXL', 'Manual', 'Petrol', '#e41b1b', 'Its Suzuki Cultus Limited Edition  Model 2016 Original geniune mileage  Alloy rims installed Power windows installed  Tv back camera installed  1 pcs spary only without poligate  Very well maintained vehicle  futher details call or whatsupp  Call after 2 in noon', 4000, 3000, 5000, 'AFG6432', '2011', '302491834-400x300.jpg', '302491838-400x300.jpg', '', 'Active', '2022-11-12 00:16:36'),
(5, 1, 'ShowRoom', 'Honda City aspire 1.5 Automatic Brand', 'Used Car', '3', 'Cultus VXL', 'Automatic', 'Petrol', '#652020', 'Its Suzuki Cultus Limited Edition  Model 2016 Original geniune mileage  Alloy rims installed Power windows installed  Tv back camera installed  1 pcs spary only without poligate  Very well maintained vehicle  futher details call or whatsupp  Call after 2 in noon', 5000, 3000, 7000, 'AFG6432', '2016', '301320745-400x300.jpg', '301320741-400x300.jpg', '', 'Active', '2022-12-25 15:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale_upload`
--

CREATE TABLE `tbl_sale_upload` (
  `upload_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` text DEFAULT NULL,
  `car_title` text DEFAULT NULL,
  `car_conidtion` text DEFAULT NULL,
  `company_id` text DEFAULT NULL,
  `model_brand` text DEFAULT NULL,
  `transmission` text DEFAULT NULL,
  `fuel_type` text DEFAULT NULL,
  `color_code` text DEFAULT NULL,
  `car_detail` text DEFAULT NULL,
  `uamount` double DEFAULT NULL,
  `no_plate` text DEFAULT NULL,
  `reg_year` text DEFAULT NULL,
  `image_1` text DEFAULT NULL,
  `image_2` text DEFAULT NULL,
  `image_3` text DEFAULT NULL,
  `post_status` varchar(23) DEFAULT 'Active',
  `post_datetime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sale_upload`
--

INSERT INTO `tbl_sale_upload` (`upload_id`, `user_id`, `user_type`, `car_title`, `car_conidtion`, `company_id`, `model_brand`, `transmission`, `fuel_type`, `color_code`, `car_detail`, `uamount`, `no_plate`, `reg_year`, `image_1`, `image_2`, `image_3`, `post_status`, `post_datetime`) VALUES
(1, 1, 'Seller', 'Toyota Honda 1206Full Brand New', 'Used Car', '2', 'Ralex', 'Manual', 'Petrol', '#000000', 'Its Suzuki Cultus Limited Edition  Model 2016 Original geniune mileage  Alloy rims installed Power windows installed  Tv back camera installed  1 pcs spary only without poligate  Very well maintained vehicle  futher details call or whatsupp  Call after 2 in noon', 5600000, 'AFG6432', '2011', '302491838-400x300.jpg', '302491834-400x300.jpg', '', 'Active', '2022-12-25 15:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `user_id` int(11) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_password` text DEFAULT NULL,
  `cnic_no` text DEFAULT NULL,
  `cnic_image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `active_status` varchar(25) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`user_id`, `user_name`, `user_email`, `user_password`, `cnic_no`, `cnic_image`, `address`, `phone_no`, `register_date`, `active_status`) VALUES
(1, 'Seller', 'seller@gmail.com', '12345678', '4210119615561', 'Capture.PNG', 'Office No 1107 Noor Trade Center', '03152916066', '2022-11-01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_showroom`
--

CREATE TABLE `tbl_showroom` (
  `user_id` int(11) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_email` text DEFAULT NULL,
  `user_password` text DEFAULT NULL,
  `cnic_no` text DEFAULT NULL,
  `cnic_image` text DEFAULT NULL,
  `license_no` text DEFAULT NULL,
  `license_image` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `active_status` varchar(25) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_showroom`
--

INSERT INTO `tbl_showroom` (`user_id`, `user_name`, `user_email`, `user_password`, `cnic_no`, `cnic_image`, `license_no`, `license_image`, `address`, `phone_no`, `register_date`, `active_status`) VALUES
(1, 'Sohail Showroom', 'showroom@gmail.com', '12345678', '4210119615567', 'autoz.png', '161564ASA', 'autoz.png', 'gulshan e iqbal karachi', '03152916066', '2022-11-01', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_buyer`
--
ALTER TABLE `tbl_buyer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_chat_message`
--
ALTER TABLE `tbl_chat_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_installment_upload`
--
ALTER TABLE `tbl_installment_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `tbl_rent_upload`
--
ALTER TABLE `tbl_rent_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `tbl_sale_upload`
--
ALTER TABLE `tbl_sale_upload`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_showroom`
--
ALTER TABLE `tbl_showroom`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_user`
--
ALTER TABLE `tbl_admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_buyer`
--
ALTER TABLE `tbl_buyer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_chat_message`
--
ALTER TABLE `tbl_chat_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_installment_upload`
--
ALTER TABLE `tbl_installment_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rent_upload`
--
ALTER TABLE `tbl_rent_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sale_upload`
--
ALTER TABLE `tbl_sale_upload`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_showroom`
--
ALTER TABLE `tbl_showroom`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
