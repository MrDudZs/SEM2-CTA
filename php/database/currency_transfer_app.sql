-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 10:33 PM
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
-- Database: `currency_transfer_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_requests`
--

CREATE TABLE `approved_requests` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `upload_time` date NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `currency_from` varchar(3) NOT NULL,
  `amount_from` int(11) NOT NULL,
  `currency_to` varchar(3) DEFAULT NULL,
  `amount_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_requests`
--

INSERT INTO `approved_requests` (`doc_id`, `doc_name`, `upload_date`, `upload_time`, `uploaded_by`, `currency_from`, `amount_from`, `currency_to`, `amount_to`) VALUES
(2, 'Screenshot 2023-03-08 021536.png', '2024-04-19', '2024-04-19', 16, 'GBP', 2500, 'GBP', 2500),
(3, '', '2024-04-19', '2024-04-19', 16, 'GBP', 50, 'GBP', 50),
(4, 'Screenshot 2023-03-08 021536.png', '2024-04-19', '2024-04-19', 16, 'GBP', 1000000, 'GBP', 1000000),
(10, '', '2024-04-20', '2024-04-20', 16, 'GBP', 10000, 'GBP', 10000),
(5, 'To Do.txt', '2024-04-20', '2024-04-20', 16, 'GBP', 2500, 'USD', 3101),
(13, '', '2024-04-21', '2024-04-21', 16, 'GBP', 1000, 'USD', 1242),
(14, '', '2024-04-21', '2024-04-21', 16, 'GBP', 1000, 'USD', 1242),
(15, '', '2024-04-21', '2024-04-21', 16, 'GBP', 1000, 'USD', 1242),
(16, '', '2024-04-21', '2024-04-21', 16, 'GBP', 500, 'USD', 621),
(17, '', '2024-04-21', '2024-04-21', 16, 'GBP', 500, 'GBP', 621),
(18, '', '2024-04-22', '2024-04-22', 16, '0', 500, 'USD', 621),
(19, '', '2024-04-22', '2024-04-22', 16, '0', 500, 'USD', 621);

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `currency_name` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency_name`) VALUES
(1, 'AED'),
(2, 'AFN'),
(3, 'ALL'),
(4, 'AMD'),
(5, 'ANG'),
(6, 'AOA'),
(7, 'ARS'),
(8, 'AUD'),
(9, 'AWG'),
(10, 'AZN'),
(11, 'BAM'),
(12, 'BBD'),
(13, 'BDT'),
(14, 'BGN'),
(15, 'BHD'),
(16, 'BIF'),
(17, 'BMD'),
(18, 'BND'),
(19, 'BOB'),
(20, 'BRL'),
(21, 'BSD'),
(22, 'BTN'),
(23, 'BWP'),
(24, 'BYN'),
(25, 'BZD'),
(26, 'CAD'),
(27, 'CDF'),
(28, 'CHF'),
(29, 'CLP'),
(30, 'CNY'),
(31, 'COP'),
(32, 'CRC'),
(33, 'CUP'),
(34, 'CVE'),
(35, 'CZK'),
(36, 'DJF'),
(37, 'DKK'),
(38, 'DOP'),
(39, 'DZD'),
(40, 'EGP'),
(41, 'ERN'),
(42, 'ETB'),
(43, 'EUR'),
(44, 'FJD'),
(45, 'FKP'),
(46, 'FOK'),
(47, 'GBP'),
(48, 'GEL'),
(49, 'GGP'),
(50, 'GHS'),
(51, 'GIP'),
(52, 'GMD'),
(53, 'GNF'),
(54, 'GTQ'),
(55, 'GYD'),
(56, 'HKD'),
(57, 'HNL'),
(58, 'HRK'),
(59, 'HTG'),
(60, 'HUF'),
(61, 'IDR'),
(62, 'ILS'),
(63, 'IMP'),
(64, 'INR'),
(65, 'IQD'),
(66, 'IRR'),
(67, 'ISK'),
(68, 'JEP'),
(69, 'JMD'),
(70, 'JOD'),
(71, 'JPY'),
(72, 'KES'),
(73, 'KGS'),
(74, 'KHR'),
(75, 'KID'),
(76, 'KMF'),
(77, 'KRW'),
(78, 'KWD'),
(79, 'KYD'),
(80, 'KZT'),
(81, 'LAK'),
(82, 'LBP'),
(83, 'LKR'),
(84, 'LRD'),
(85, 'LSL'),
(86, 'LYD'),
(87, 'MAD'),
(88, 'MDL'),
(89, 'MGA'),
(90, 'MKD'),
(91, 'MMK'),
(92, 'MNT'),
(93, 'MOP'),
(94, 'MRU'),
(95, 'MUR'),
(96, 'MVR'),
(97, 'MWK'),
(98, 'MXN'),
(99, 'MYR'),
(100, 'MZN'),
(101, 'NAD'),
(102, 'NGN'),
(103, 'NIO'),
(104, 'NOK'),
(105, 'NPR'),
(106, 'NZD'),
(107, 'OMR'),
(108, 'PAB'),
(109, 'PEN'),
(110, 'PGK'),
(111, 'PHP'),
(112, 'PKR'),
(113, 'PLN'),
(114, 'PYG'),
(115, 'QAR'),
(116, 'RON'),
(117, 'RSD'),
(118, 'RUB'),
(119, 'RWF'),
(120, 'SAR'),
(121, 'SBD'),
(122, 'SCR'),
(123, 'SDG'),
(124, 'SEK'),
(125, 'SGD'),
(126, 'SHP'),
(127, 'SLL'),
(128, 'SOS'),
(129, 'SRD'),
(130, 'SSP'),
(131, 'STN'),
(132, 'SYP'),
(133, 'SZL'),
(134, 'THB'),
(135, 'TJS'),
(136, 'TMT'),
(137, 'TND'),
(138, 'TOP'),
(139, 'TRY'),
(140, 'TTD'),
(141, 'TVD'),
(142, 'TWD'),
(143, 'TZS'),
(144, 'UAH'),
(145, 'UGX'),
(146, 'USD'),
(147, 'UYU'),
(148, 'UZS'),
(149, 'VES'),
(150, 'VND'),
(151, 'VUV'),
(152, 'WST'),
(153, 'XAF'),
(154, 'XCD'),
(155, 'XDR'),
(156, 'XOF'),
(157, 'XPF'),
(158, 'YER'),
(159, 'ZAR'),
(160, 'ZMW'),
(161, 'ZWL');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_name` varchar(255) NOT NULL,
  `department_location` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_name`, `department_location`, `department_id`) VALUES
('FINANCE', 'Building A', 1),
('Sales', 'Location A', 2),
('Marketing', 'Location B', 3),
('Human Resources', 'Location C', 4),
('Operations', 'Location A', 5),
('Customer Service', 'Location B', 6),
('Research and Development', 'Location C', 7),
('Information Technology', 'Location A', 8),
('Administration', 'Location B', 9),
('Legal', 'Location C', 10),
('Supply Chain', 'Location A', 11),
('Product Management', 'Location B', 12),
('Logistics', 'Location C', 13),
('Quality Assurance', 'Location A', 14),
('Engineering', 'Location B', 15),
('Sales', 'Location B', 16),
('Marketing', 'Location C', 17),
('Human Resources', 'Location A', 18),
('Operations', 'Location C', 19),
('Customer Service', 'Location A', 20),
('Research and Development', 'Location B', 21),
('Information Technology', 'Location C', 22),
('Administration', 'Location A', 23),
('Legal', 'Location B', 24),
('Supply Chain', 'Location A', 25),
('Product Management', 'Location C', 26),
('Logistics', 'Location B', 27),
('Quality Assurance', 'Location C', 28),
('Engineering', 'Location A', 29),
('Sales', 'Location C', 30),
('Marketing', 'Location A', 31),
('Human Resources', 'Location B', 32),
('Operations', 'Location A', 33),
('Customer Service', 'Location B', 34),
('Research and Development', 'Location C', 35),
('Information Technology', 'Location A', 36),
('Administration', 'Location B', 37),
('Legal', 'Location C', 38),
('Supply Chain', 'Location A', 39),
('Product Management', 'Location B', 40),
('Logistics', 'Location C', 41),
('Quality Assurance', 'Location A', 42),
('Engineering', 'Location B', 43),
('Finance', 'Location C', 44),
('Finance', 'Location B', 45);

-- --------------------------------------------------------

--
-- Table structure for table `exchange_request`
--

CREATE TABLE `exchange_request` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `upload_time` time NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `currency_from` varchar(3) DEFAULT NULL,
  `currency_to` varchar(3) DEFAULT NULL,
  `amount_from` int(11) NOT NULL,
  `amount_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_request`
--

INSERT INTO `exchange_request` (`doc_id`, `doc_name`, `upload_date`, `upload_time`, `uploaded_by`, `currency_from`, `currency_to`, `amount_from`, `amount_to`) VALUES
(95, '', '2024-04-24', '00:00:01', 16, '0', 'GBP', 1000, 810),
(96, '', '2024-04-24', '00:00:14', 16, '0', 'GBP', 2500, 2010),
(97, '', '2024-04-24', '00:00:15', 16, '0', 'GBP', 1000, 804);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions_staff`
--

CREATE TABLE `permissions_staff` (
  `permission_id` int(11) NOT NULL,
  `permission_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions_staff`
--

INSERT INTO `permissions_staff` (`permission_id`, `permission_name`) VALUES
(1, 'System Admin'),
(2, 'Legal Admin'),
(3, 'Finance Admin');

-- --------------------------------------------------------

--
-- Table structure for table `piggybank`
--

CREATE TABLE `piggybank` (
  `piggybank_id` int(11) NOT NULL,
  `money` bigint(20) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_expiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piggybank`
--

INSERT INTO `piggybank` (`piggybank_id`, `money`, `card_name`, `card_number`, `card_expiry`) VALUES
(5, 0, '7ddAgL23Rukex9EP2frvBQ==', 7, '7ddAgL23Rukex9EP2frvBQ=='),
(6, 0, 'tqvfPreRIr2GXkVFhPnRAQ==', 0, 'BNpknK9XeQfTX9aPbn0IwQ=='),
(7, 0, 'vGUjUAYkWM2Wgi8iWgQAIA==', 4, 'N5Y0OPloOsoNBURJUoxj8A=='),
(8, 0, 'l4cp2cHO2zt/+9ndUAfRkQ==', 0, 'wT+zUXGd2AtEDawgowvY/g=='),
(9, 0, 'rteU6Do1vKH0FXpa53wJpw==', 0, 'wwz2XIRFPOsZXvk4E7BKUA=='),
(10, 0, '0ONhvJYvYd20Ur+q1RPcJQ==', 0, 'n4X+d6hb0yojH2YZNMaONg=='),
(11, 0, 'b/nDZqzojZuCLIW2mJjaaA==', 0, 'vpVEwGdZugg9udRLbnnICg==');

-- --------------------------------------------------------

--
-- Table structure for table `request_flagged`
--

CREATE TABLE `request_flagged` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `upload_time` time NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `currency_from` varchar(3) NOT NULL,
  `amount_from` int(11) NOT NULL,
  `currency_to` varchar(3) NOT NULL,
  `amount_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_flagged`
--

INSERT INTO `request_flagged` (`doc_id`, `doc_name`, `upload_date`, `upload_time`, `uploaded_by`, `currency_from`, `amount_from`, `currency_to`, `amount_to`) VALUES
(9, 'CTAUSECASE.drawio.png', '2024-04-20', '00:00:15', 16, 'GBP', 10000, 'GBP', 10000),
(11, '', '2024-04-20', '00:00:16', 16, 'GBP', 2500, 'USD', 3101),
(12, '', '2024-04-20', '00:00:17', 16, 'GBP', 10000, 'USD', 12403),
(1, '', '2024-04-19', '00:00:19', 16, 'GBP', 100, 'GBP', 100);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_suspended` tinyint(4) NOT NULL,
  `job_role` varchar(255) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `surname`, `dob`, `email`, `password`, `is_suspended`, `job_role`, `permission_id`, `department_id`) VALUES
(1, 'Legal', 'Admin', '2024-04-24', 'AdminL@CTA.CTA', '$2y$10$7nulxOVHuilzi5.gV0JrjO0yk.x6rQbducyyz.Lyx.uhfkVyoWUXG', 0, '0', 2, 10),
(2, 'Finance', 'Admin', '2024-04-24', 'AdminF@CTA.CTA', '$2y$10$hdcsPRUIS5TNnWxu261I7eHpBGTtWWihWKUdOXu57sDCgbvFHn2qe', 0, '0', 3, 1),
(3, 'System', 'Admin', '2024-04-24', 'AdminSys@CTA.CTA', '$2y$10$n.cxk5jMTUbASzpa1uyteepmbQqCqOCYkWLIURTwI0hBFpDdMqzCG', 0, '0', 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `suspend_account_request`
--

CREATE TABLE `suspend_account_request` (
  `user_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `reason_for` varchar(255) NOT NULL,
  `req_date` date NOT NULL,
  `req_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_suspended` tinyint(1) NOT NULL,
  `wallet_id` int(11) DEFAULT NULL,
  `wallets_owned` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `surname`, `email`, `dob`, `password`, `is_suspended`, `wallet_id`, `wallets_owned`, `permission_id`) VALUES
(14, 'Test', 'test', 'test@test.t', '0001-01-01', '$2y$10$LYYcMxPnGCVEe/WSYEmxkOgQqv/r8DQB2RDinWIWpJECzfJvVBFi6', 0, 9, 1, 0),
(15, 'Jon', 'Doe', 't@t.t', '1111-11-11', '$2y$10$Y/ZZY2.C93PoW4D/ZkT6req8FYX2vbjRK4faK2l..URxFtUSvFR9K', 0, 10, 1, 0),
(16, 'M', 'Doe', 'm@t.t', '1111-11-11', '$2y$10$9N0qIvC272XjDY3/Mderq.zNQKo6/tBIruB3KFvLL9MxlKRN1BH5u', 0, 11, 1, 0),
(17, 'testing', 'testing', 'test@test.test', '2024-04-03', '$2y$10$fS.MOv68vclg0AMNnMfEFOwx/Rb44mGyv5hMbNvgp4AsuUW1jwXTu', 0, 12, 1, 0),
(18, 'Name', 'Name', 'm@t.t', '2024-04-24', '$2y$10$uDQf6x36Tr9w.2LIqdYhse0FypysQm3EU1gsFpZkGf7ZV4neVe1l6', 0, 40, 1, 0),
(25, 'test', 'test', 'l@l.t', '2024-04-24', '$2y$10$zzbh8dF2N9E0eBnLcxxxEuDRwpIna3t/A.hRp1acrLD8rZfUWSHqa', 0, 54, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT 0.00,
  `currency_id` varchar(50) NOT NULL,
  `is_main` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `user_id`, `balance`, `currency_id`, `is_main`) VALUES
(11, 16, 10633.65, '47', 1),
(35, 16, 89127.90, '146', 2),
(39, 16, 0.00, '15', 3),
(41, 18, 0.00, '1', 2),
(42, 18, 0.00, '1', 3),
(54, 25, 0.00, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`),
  ADD UNIQUE KEY `currency_name` (`currency_name`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `exchange_request`
--
ALTER TABLE `exchange_request`
  ADD UNIQUE KEY `doc_id` (`doc_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `permissions_staff`
--
ALTER TABLE `permissions_staff`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `piggybank`
--
ALTER TABLE `piggybank`
  ADD UNIQUE KEY `piggybank_id` (`piggybank_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `exchange_request`
--
ALTER TABLE `exchange_request`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions_staff`
--
ALTER TABLE `permissions_staff`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `piggybank`
--
ALTER TABLE `piggybank`
  MODIFY `piggybank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
