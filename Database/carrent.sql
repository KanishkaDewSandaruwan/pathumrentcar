-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 06:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`, `email`, `phone`, `address`, `facebook`, `twiter`, `instragram`) VALUES
('download.jpg', 'Handmade Dream  Catchers  medium Gift Wall deco ', '<p>gfgggggggggggggggggg</p>', 'kanishkadewsandaruwan@gmail.com', 713664071, 'Banwalgodalla, Kosmulla', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/kanishka.dew.sandaruwan/');

-- --------------------------------------------------------

--
-- Table structure for table `carreg`
--

CREATE TABLE `carreg` (
  `car_id` int(11) NOT NULL,
  `delar_code` varchar(255) NOT NULL,
  `manufacture` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `chasi_number` varchar(255) NOT NULL,
  `car_number` varchar(255) NOT NULL,
  `rent_fee` int(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carreg`
--

INSERT INTO `carreg` (`car_id`, `delar_code`, `manufacture`, `model`, `color`, `chasi_number`, `car_number`, `rent_fee`, `available`, `trndate`, `image`, `title`) VALUES
(16, '9', 'Tata', 'ddddd', 'Blue', '5555', 'SPBCF0923', 4000, 'Yes', '2021-05-08 05:08:59', 'download (1).jpg', 'Handmade Dream  Catchers  medium Gift Wall deco '),
(18, '9', 'Honda', 'Visel0245', 'maroon', '257865', 'WPDFR4578', 6500, 'Yes', '2021-05-09 05:07:23', 'download (2).jpg', 'Logitec Keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `mobile`, `email`, `nic`, `password`) VALUES
(3, 'Thilini Maheshika', 'Thawalama Neluwa Galle', '0713664071', 'kthini1999@gmail.com', '992670423V', ''),
(8, 'Kanishka Sandaruwan', 'Galle Sri Lanka', '0753664071', 'kanishkasandaruwan@gmail.com', '962670426C', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Kanishka Dew Sandaruwan', 'Banwalgodalla, Kosmulla', '0783664071', 'kanishkadewsandaruwan@gmail.com', '962670429V', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `customer_backup`
--

CREATE TABLE `customer_backup` (
  `backup_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delar`
--

CREATE TABLE `delar` (
  `dealer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `trndate` datetime NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delar`
--

INSERT INTO `delar` (`dealer_id`, `name`, `address`, `mobile`, `email`, `nic`, `trndate`, `password`, `username`) VALUES
(9, 'Kanishka Sandaruwan', 'Galle Neluwa', '0753664071', 'kaniya@gmail.com', '962670426B', '2021-05-08 05:09:40', '827ccb0eea8a706c4c34a16891f84e7b', 'dew');

-- --------------------------------------------------------

--
-- Table structure for table `delar_payment`
--

CREATE TABLE `delar_payment` (
  `dp_id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `delar_totle_income` int(11) NOT NULL,
  `delar_number_of_income` int(11) NOT NULL,
  `delar_id` varchar(255) NOT NULL,
  `paid` varchar(100) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delar_payment`
--

INSERT INTO `delar_payment` (`dp_id`, `month`, `delar_totle_income`, `delar_number_of_income`, `delar_id`, `paid`, `trndate`) VALUES
(8, 'May, 2021', 65000, 2, '9', 'Cash', '2021-05-10 05:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `header_image` varchar(255) NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `header_desc` varchar(255) NOT NULL,
  `subpage_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`header_image`, `header_title`, `header_desc`, `subpage_image`) VALUES
('210127_hero_01.jpg', 'Handmade Dream  Catchers  medium Gift Wall deco ', 'Order your foods', 'slider-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(115) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `basic_salary` int(100) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `address`, `mobile`, `email`, `nic`, `username`, `password`, `basic_salary`, `trndate`) VALUES
(3, 'Admin', '', '', '', '', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, '0000-00-00 00:00:00'),
(6, 'Dew', 'Galle Neluwa', '0713664071', 'dew@gmail.com', '962670426E', 'kani', '827ccb0eea8a706c4c34a16891f84e7b', 125000, '2021-05-07 05:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `extend_rent`
--

CREATE TABLE `extend_rent` (
  `extend_id` int(11) NOT NULL,
  `rent_id` varchar(255) NOT NULL,
  `extend_date` date NOT NULL,
  `aditional_amount` int(100) NOT NULL,
  `last_amount` int(100) NOT NULL,
  `trndate` datetime NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extend_rent`
--

INSERT INTO `extend_rent` (`extend_id`, `rent_id`, `extend_date`, `aditional_amount`, `last_amount`, `trndate`, `payment`) VALUES
(10, '37', '2021-05-21', 6500, 32500, '2021-05-12 05:19:38', 'Credit Card'),
(11, '36', '2021-05-21', 8000, 24000, '2021-05-12 05:19:54', 'Cash'),
(12, '32', '2021-06-22', 6500, 13000, '2021-05-13 05:09:15', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `image_id` int(11) NOT NULL,
  `galary_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`image_id`, `galary_image`, `title`) VALUES
(17, '210127_hero_01.jpg', 'Handmade Dream  Catchers  medium Gift Wall deco '),
(18, 'download.jpg', 'Logitec Keyboard'),
(19, 'download (2).jpg', 'Prone Rice'),
(20, 'download (1).jpg', 'White Catchers Gift Wall decor');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `income_id` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `year` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `total_income` int(255) NOT NULL,
  `number_of_income` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `income_id`, `trn_date`, `year`, `month`, `total_income`, `number_of_income`) VALUES
(3, 'I00001', '2020-06-22 14:07:27', '2020', '6', 78700, 5),
(4, 'I0002', '2020-06-22 14:07:55', '2020', '5', 12000, 1),
(5, 'I0003', '2020-06-22 21:02:06', '2020', '4', 108100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded'),
(8, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'ssss', 'ssssss', '2021-05-13 05:19:02', 'Reded'),
(9, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'sss', 'sss', '2021-05-13 05:19:27', 'Reded');

-- --------------------------------------------------------

--
-- Table structure for table `other_payment`
--

CREATE TABLE `other_payment` (
  `payment_id` int(11) NOT NULL,
  `bile_code` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `billed_date` date NOT NULL,
  `reson` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `paid_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_payment`
--

INSERT INTO `other_payment` (`payment_id`, `bile_code`, `amount`, `billed_date`, `reson`, `paid`, `paid_date`) VALUES
(2, 'A0001', 4200, '2020-06-20', 'clean', 'Yes', '0000-00-00 00:00:00'),
(4, 'ggg', 2500, '2021-05-13', 'gggf', 'Paid', '2021-05-10 05:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `rent_id` int(11) NOT NULL,
  `car_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `due_date` datetime NOT NULL,
  `totle_fee` int(255) NOT NULL,
  `trn_date` date NOT NULL,
  `car_number` varchar(255) NOT NULL,
  `extend` varchar(100) NOT NULL,
  `car_pick` varchar(255) NOT NULL,
  `startdate` datetime NOT NULL,
  `payment` varchar(255) NOT NULL,
  `returncar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`rent_id`, `car_id`, `customer_id`, `due_date`, `totle_fee`, `trn_date`, `car_number`, `extend`, `car_pick`, `startdate`, `payment`, `returncar`, `status`) VALUES
(27, '18', '2', '2021-05-31 12:15:00', 13000, '2021-05-09', 'WPDFR4578', 'No', '00:22', '2021-05-29 12:15:00', 'Yes', 'Yes', ''),
(30, '18', '2', '2021-05-05 01:30:00', 19500, '2021-05-01', 'WPDFR4578', 'No', '01:30', '2021-05-02 01:30:00', 'Online Payment', 'Yes', ''),
(31, '18', '2', '2021-06-15 21:37:00', 32500, '2021-05-10', 'WPDFR4578', 'No', '21:37', '2021-06-10 21:37:00', 'Cash', 'Yes', 'Accepted'),
(32, '18', '2', '2021-06-20 21:38:00', 6500, '2021-05-10', 'WPDFR4578', 'Yes', 'Yes', '2021-06-19 21:38:00', 'Credit Card', 'No', 'Accepted'),
(36, '16', '8', '2021-05-18 01:41:00', 16000, '2021-05-12', 'SPBCF0923', 'Yes', '01:41', '2021-05-14 01:41:00', 'Cash', 'No', 'Accepted'),
(37, '18', '8', '2021-05-19 01:42:00', 26000, '2021-05-12', 'WPDFR4578', 'Yes', '06:00', '2021-05-15 01:42:00', 'Credit Card', 'Yes', 'Pending'),
(38, '18', '8', '2021-05-29 18:22:00', 19500, '2021-05-12', 'WPDFR4578', 'No', '18:24', '2021-05-26 18:22:00', 'Credit Card', 'No', 'Pending'),
(39, '16', '8', '2021-05-29 06:26:00', 8000, '2021-05-12', 'SPBCF0923', 'No', '06:26', '2021-05-27 06:26:00', 'Cash', 'No', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `repaire_id` int(11) NOT NULL,
  `car_id` varchar(255) NOT NULL,
  `send_date` datetime NOT NULL,
  `resive_date` datetime NOT NULL,
  `repaired_place` varchar(255) NOT NULL,
  `repai_bil_amount` int(255) NOT NULL,
  `bill_number` varchar(255) NOT NULL,
  `finish` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`repaire_id`, `car_id`, `send_date`, `resive_date`, `repaired_place`, `repai_bil_amount`, `bill_number`, `finish`) VALUES
(12, '16', '2021-05-08 05:08:42', '2021-05-08 05:08:12', 'Thiniyawala Service', 12500, 'lk456', 'Yes'),
(14, '16', '2021-05-08 05:08:39', '2021-05-08 05:08:55', 'Thiniyawala Service', 2500, 'lk456', 'Yes'),
(15, '16', '2021-05-08 05:09:21', '2021-05-08 05:09:50', 'Thiniyawala Service', 2500, 'lk456', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `return_car`
--

CREATE TABLE `return_car` (
  `return_id` int(11) NOT NULL,
  `rent_id` int(255) NOT NULL,
  `return_date` date NOT NULL,
  `overlap_days` int(255) NOT NULL,
  `additional_amount` int(255) NOT NULL,
  `paid_totle_bill` int(255) NOT NULL,
  `finished` varchar(100) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_car`
--

INSERT INTO `return_car` (`return_id`, `rent_id`, `return_date`, `overlap_days`, `additional_amount`, `paid_totle_bill`, `finished`, `payment`) VALUES
(25, 30, '2021-04-14', 4, 26000, 45500, 'Yes', 'Cash'),
(30, 27, '2021-05-10', 0, 0, 13000, 'Yes', 'No'),
(31, 30, '2021-05-10', 5, 32500, 52000, 'Yes', 'Cash'),
(32, 31, '2021-05-12', 0, 0, 32500, 'Yes', 'No'),
(33, 37, '2021-05-13', 0, 0, 32500, 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `salary_pay`
--

CREATE TABLE `salary_pay` (
  `salary_payment_id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `month` varchar(100) NOT NULL,
  `basic_salary` int(100) NOT NULL,
  `ot_houre` int(100) NOT NULL,
  `ot_amount` int(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_pay`
--

INSERT INTO `salary_pay` (`salary_payment_id`, `employee_id`, `month`, `basic_salary`, `ot_houre`, `ot_amount`, `salary`, `paid`, `trndate`) VALUES
(4, '6', 'May, 2021', 125000, 2, 200, 125200, 'Cash', '2021-05-10 05:17:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carreg`
--
ALTER TABLE `carreg`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_backup`
--
ALTER TABLE `customer_backup`
  ADD PRIMARY KEY (`backup_id`);

--
-- Indexes for table `delar`
--
ALTER TABLE `delar`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `delar_payment`
--
ALTER TABLE `delar_payment`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `extend_rent`
--
ALTER TABLE `extend_rent`
  ADD PRIMARY KEY (`extend_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `other_payment`
--
ALTER TABLE `other_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repaire_id`);

--
-- Indexes for table `return_car`
--
ALTER TABLE `return_car`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `salary_pay`
--
ALTER TABLE `salary_pay`
  ADD PRIMARY KEY (`salary_payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carreg`
--
ALTER TABLE `carreg`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_backup`
--
ALTER TABLE `customer_backup`
  MODIFY `backup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delar`
--
ALTER TABLE `delar`
  MODIFY `dealer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delar_payment`
--
ALTER TABLE `delar_payment`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `extend_rent`
--
ALTER TABLE `extend_rent`
  MODIFY `extend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `other_payment`
--
ALTER TABLE `other_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `return_car`
--
ALTER TABLE `return_car`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `salary_pay`
--
ALTER TABLE `salary_pay`
  MODIFY `salary_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
