-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 06:13 AM
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
-- Database: `fabric_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `nameCus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customerID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`nameCus`, `customerID`, `Address`, `tel`, `created_at`, `updated_at`) VALUES
('fammie', '001', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('samhee', '002', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('chanom', '003', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('kaimok', '004', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('nongyai', '005', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('nongkai', '006', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('yuta', '007', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('jedsada', '008', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('donlapat', '009', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL),
('mark', '010', '259 m.2 Suthep ChiangMai 50200', '0543368955', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `departmentname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `departmentID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`departmentname`, `departmentID`, `supervisor`, `created_at`, `updated_at`) VALUES
('แผนกสั่งผ้า', '001', '0014567896', NULL, NULL),
('แผนกรับออร์เดอร์', '100', '1004567890', NULL, NULL),
('แผนกตัด', '200', '2004567892', NULL, NULL),
('แผนกเย็บ', '300', '3004567891', NULL, NULL),
('CEO', '999', '9999999999', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employeeID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ssn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `departmentID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `Fname`, `Lname`, `Ssn`, `departmentID`, `age`, `hire_date`, `tel`, `address`, `gender`, `salary`, `position`, `password`, `created_at`, `updated_at`) VALUES
('0014567896', 'อิก', 'ศอกชมพู', '1102002741790', '001', 15, '2017-05-12', '0826037444', '548 m.9 Japan', 'male', 100, 'Supervisor', '12345678', NULL, NULL),
('0014567899', 'บูม', 'ฝาแฝด', '1102002741789', '001', 15, '2017-06-11', '0826037444', '548 m.9 Philipin', 'male', 1000, 'Employee', '12345678', NULL, NULL),
('1002596314', 'ศรัทธา', 'จองจิตวิมล', '2292002741990', '100', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('1002938475', 'Warakorn', 'Meakpattanapinyo', '1213405968701', '100', 15, '2017-11-30', '0882888459', '222/145 Village No.1 Dcondo Campus Resort, Amphoe Meuang', 'male', 1000, 'employee', '123456789oiuytre', '2017-12-14 04:51:53', '2017-12-14 04:51:53'),
('1004567890', 'สมย', 'แซ่เพ้ง', '1182002741780', '100', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'female', 1000, 'Supervisor', '12345678', NULL, NULL),
('1004567891', 'สมุย', 'แซ่พ้งเพ้ง', '1192002741780', '100', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'female', 1000, 'Employee', '12345678', NULL, NULL),
('1009963889', 'แขมป์', 'ชัยชนะ', '7892002741780', '100', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('2001234560', 'Warakorn', 'Meakpattanapinyo', '1213405968778', '200', 15, '2017-12-06', '0882888459', '222/145 Village No.1 Dcondo Campus Resort, Amphoe Meuang', 'male', 1000, 'employee', '123456789', '2017-12-14 04:49:04', '2017-12-14 04:49:04'),
('2001567894', 'ยูตะ', 'บุญประกอบ', '2292003751780', '200', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('2003698528', 'เจษฏา', 'จองจิตวิมล', '3392002741780', '200', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('2004567890', 'สมหมาย', 'จ้า', '1102102741786', '200', 15, '2017-05-11', '0826037444', '548 m.9 London US', 'female', 50000, 'Employee', '12345678', NULL, NULL),
('2004567892', 'สมหมาย', 'ยศ', '1102002741786', '200', 15, '2017-05-11', '0826037444', '548 m.9 London US', 'male', 50000, 'Supervisor', '12345678', NULL, NULL),
('2004567893', 'หยก', 'หยวก', '1102002741787', '200', 15, '2017-05-11', '0826037444', '548 m.9 Laos', 'female', 10000, 'Employee', '12345678', NULL, NULL),
('2007789556', 'แอ่ว', 'เชียงใหม่', '2292007741660', '200', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('3001524788', 'แชมป์จ้า', 'พาเพลินนายานา', '4092002741780', '300', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('3004567890', 'ขนุน', 'เล่นไวโอลิน', '1102002741780', '300', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 1000, 'Employee', '12345678', NULL, NULL),
('3004567891', 'งามสิริ', 'บัวมั่น', '1102002741786', '300', 15, '2017-05-11', '0826037444', '548 m.9 NewYork City USA', 'female', 100000, 'Supervisor', '12345678', NULL, NULL),
('3004567895', 'น้อง', 'สมย', '1102112741787', '300', 15, '2017-05-11', '0826037444', '548 m.9 Chaina', 'female', 50000, 'Employee', '12345678', NULL, NULL),
('3004567896', 'สมายจ้า', 'จ้าจ้า', '1102002741789', '300', 15, '2017-05-11', '0826037444', '548 m.9 India', 'female', 10, 'Employee', '12345678', NULL, NULL),
('3004567898', 'โอปอ', 'ฝายหิน', '1102002741789', '300', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 1000, 'Employee', '12345678', NULL, NULL),
('3009999999', 'ดลพัฒน์', 'แซ่เพ้ง', '1192002741780', '300', 15, '2017-06-11', '0826037444', '548 m.9 Thai', 'male', 10000, 'Employee', '12345678', NULL, NULL),
('9999999999', 'ชัดเจน', 'แจ่มแจ้ง', '1102002741787', '999', 15, '2017-05-11', '0826037444', '548 m.9 Malaysia', 'male', 900000000, 'Supervisor', '12345678', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emporders`
--

CREATE TABLE `emporders` (
  `employeeID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emporders`
--

INSERT INTO `emporders` (`employeeID`, `OrderID`, `created_at`, `updated_at`) VALUES
('1004567890', '00002', NULL, NULL),
('1004567891', '00001', NULL, NULL),
('1004567891', '00003', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE `factors` (
  `name_factory` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `factory_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `factors`
--

INSERT INTO `factors` (`name_factory`, `factory_id`, `tel`, `address`, `account`, `created_at`, `updated_at`) VALUES
('โรงงานผ้าจีน', '1122', '0256895789', 'Bankok , 10123', '1122334455', NULL, NULL),
('โรงงานผ้าญี่ปุ่น', '1133', '0256895789', 'Ayutthaya , 10111', '1122334466', NULL, NULL),
('โรงงานผ้าเกาหลี', '1144', '0256895789', 'Rayong , 20456', '1122334477', NULL, NULL),
('โรงงานผ้าอเมริกา', '1155', '0256895789', 'Huahin , 25456', '1122334477', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_05_101817_customer_table', 1),
(2, '2017_11_05_101827_relationemporder_table', 1),
(3, '2017_11_05_102302_department_table', 1),
(4, '2017_11_05_102354_employee_table', 1),
(5, '2017_11_05_102458_factory_table', 1),
(6, '2017_11_05_102600_ordercustomer_table', 1),
(7, '2017_11_05_102642_ordercloth_table', 1),
(8, '2017_11_05_102725_ordercut_table', 1),
(9, '2017_11_05_102745_ordersew_table', 1),
(10, '2017_11_05_102750_orderofcustomers_table', 1),
(11, '2017_11_05_102752_orderclothoffactory_table', 1),
(12, '2017_11_05_102762_orderofemployee_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderclothoffactors`
--

CREATE TABLE `orderclothoffactors` (
  `factory_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderclothoffactors`
--

INSERT INTO `orderclothoffactors` (`factory_id`, `OrderID`, `created_at`, `updated_at`) VALUES
('1122', '00001', NULL, NULL),
('1144', '00002', NULL, NULL),
('1155', '00003', NULL, NULL),
('1144', '00004', NULL, NULL),
('1133', '00005', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordercloths`
--

CREATE TABLE `ordercloths` (
  `order_clothid` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `factory_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `startorder` date NOT NULL,
  `type_cloth` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `color_cloth` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `width_cloth` int(11) NOT NULL,
  `weight_cloth` double(5,3) NOT NULL,
  `folding` int(11) NOT NULL,
  `unit_folding` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `linetotal` int(11) NOT NULL,
  `date_tranfer` date NOT NULL,
  `date_recv` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordercloths`
--

INSERT INTO `ordercloths` (`order_clothid`, `OrderID`, `factory_id`, `startorder`, `type_cloth`, `color_cloth`, `width_cloth`, `weight_cloth`, `folding`, `unit_folding`, `Total`, `linetotal`, `date_tranfer`, `date_recv`, `status`, `created_at`, `updated_at`) VALUES
('10001', '00001', '1122', '2017-10-25', 'TC', '001', 60, 60.170, 3, 400, 200, 1200, '2017-10-26', '2017-10-27', 0, NULL, NULL),
('10002', '00002', '1144', '2017-11-25', 'TK', '002', 30, 60.000, 5, 200, 300, 1000, '2017-11-26', '2017-11-30', 0, NULL, NULL),
('10003', '00003', '1155', '2017-10-25', 'TC', '001', 30, 60.000, 2, 400, 100, 800, '2017-10-27', '2017-10-27', 0, NULL, NULL),
('10004', '00004', '1144', '2017-12-25', 'TC', '001', 30, 60.000, 2, 400, 80, 800, '2017-12-27', '2018-01-09', 1, NULL, NULL),
('10005', '00005', '1133', '2017-09-25', 'TC', '001', 30, 60.000, 2, 400, 100, 800, '2018-01-27', '2018-01-30', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordercustomers`
--

CREATE TABLE `ordercustomers` (
  `Fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idcustomer` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typeproduct` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `type_cloth` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `color_cloth` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Total` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `linetotal` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `dateship` date NOT NULL,
  `employeeID_recv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordercustomers`
--

INSERT INTO `ordercustomers` (`Fname`, `idcustomer`, `Address`, `Tel`, `OrderID`, `Detail`, `typeproduct`, `type_cloth`, `color_cloth`, `size`, `Total`, `Price`, `linetotal`, `startdate`, `dateship`, `employeeID_recv`, `created_at`, `updated_at`) VALUES
('fammie', '001', '259 m.2 Suthep ChiangMai 50200', '0543368955', '00001', 'nice and fix', 'polo', 'TC', '001', 'S', 200, 100, 20000, '2017-10-25', '2017-11-11', '1004567891', NULL, NULL),
('samhee', '002', '259 m.2 Suthep ChiangMai 50200', '0543368955', '00002', 'nice and fix', 'polo', 'TK', '002', 'M', 300, 120, 36000, '2017-11-25', '2017-12-25', '1004567890', NULL, NULL),
('chanom', '003', '259 m.2 Suthep ChiangMai 50200', '0543368955', '00003', 'nice and fix', 'Polo', 'TC', '001', 'XL', 200, 150, 30000, '2017-10-25', '2017-10-30', '1004567891', '2017-12-13 21:02:54', '2017-12-13 21:02:54'),
('kaimok', '004', '259 m.2 Suthep ChiangMai 50200', '0543368955', '00004', 'nice and fix', 'polo', 'TC', '001', 'L', 80, 140, 11200, '2017-12-25', '2018-02-14', '1009963889', NULL, NULL),
('chanom', '003', '259 m.2 Suthep ChiangMai 50200', '0543368955', '00005', 'nice and fix', 'polo', 'TC', '001', 'M', 100, 120, 12000, '2017-09-25', '2018-04-13', '1009963889', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordercuts`
--

CREATE TABLE `ordercuts` (
  `OrderCutID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `orderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `typeCloth` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `ColorID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeCutID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordercuts`
--

INSERT INTO `ordercuts` (`OrderCutID`, `orderID`, `typeCloth`, `ColorID`, `Total`, `EmployeeCutID`, `StartDate`, `EndDate`, `status`, `created_at`, `updated_at`) VALUES
('20001', '00001', 'TC', 'สีเขียวทาโร่', '100', '2004567890', '2017-10-28', '2017-10-30', 0, NULL, NULL),
('20002', '00002', 'TK', 'สีแดง', '150', '2004567890', '2017-12-01', '2017-12-10', 0, NULL, NULL),
('20003', '00003', 'TC', 'สีดำ', '100', '2004567890', '2017-10-27', '2017-10-28', 0, NULL, NULL),
('20004', '00004', 'TC', 'สีม่วงมะปราง', '80', '2004567890', '2018-01-10', '2018-02-01', 1, NULL, NULL),
('20005', '00005', 'TC', 'สีขาวจั๊ว', '80', '2004567890', '2018-01-31', '2018-02-28', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderofcustomers`
--

CREATE TABLE `orderofcustomers` (
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `customerID` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderofcustomers`
--

INSERT INTO `orderofcustomers` (`OrderID`, `customerID`, `created_at`, `updated_at`) VALUES
('00001', '001', NULL, NULL),
('00002', '002', NULL, NULL),
('00003', '003', NULL, NULL),
('00004', '004', NULL, NULL),
('00005', '003', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderofemployees`
--

CREATE TABLE `orderofemployees` (
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `employeeID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordersews`
--

CREATE TABLE `ordersews` (
  `OrderSewID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `OrderID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `EmployeeSewID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Total` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ordersews`
--

INSERT INTO `ordersews` (`OrderSewID`, `OrderID`, `EmployeeSewID`, `StartDate`, `EndDate`, `Total`, `status`, `created_at`, `updated_at`) VALUES
('30001', '00001', '3004567891', '2017-10-30', '2017-11-10', 200, 0, NULL, NULL),
('30002', '00002', '3004567891', '2017-12-11', '2017-12-24', 300, 0, NULL, NULL),
('30003', '00003', '3004567891', '2017-10-29', '2017-10-30', 100, 0, NULL, NULL),
('30004', '00004', '3004567891', '2017-10-29', '2017-10-30', 100, 0, NULL, NULL),
('30005', '00005', '3004567891', '2018-02-28', '2018-03-12', 80, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeID`,`Ssn`);

--
-- Indexes for table `emporders`
--
ALTER TABLE `emporders`
  ADD PRIMARY KEY (`employeeID`,`OrderID`);

--
-- Indexes for table `factors`
--
ALTER TABLE `factors`
  ADD PRIMARY KEY (`factory_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderclothoffactors`
--
ALTER TABLE `orderclothoffactors`
  ADD PRIMARY KEY (`OrderID`,`factory_id`);

--
-- Indexes for table `ordercloths`
--
ALTER TABLE `ordercloths`
  ADD PRIMARY KEY (`order_clothid`);

--
-- Indexes for table `ordercustomers`
--
ALTER TABLE `ordercustomers`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `ordercuts`
--
ALTER TABLE `ordercuts`
  ADD PRIMARY KEY (`OrderCutID`);

--
-- Indexes for table `orderofcustomers`
--
ALTER TABLE `orderofcustomers`
  ADD PRIMARY KEY (`OrderID`,`customerID`);

--
-- Indexes for table `orderofemployees`
--
ALTER TABLE `orderofemployees`
  ADD PRIMARY KEY (`OrderID`,`employeeID`);

--
-- Indexes for table `ordersews`
--
ALTER TABLE `ordersews`
  ADD PRIMARY KEY (`OrderSewID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
