-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 02:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktest`
--

CREATE TABLE `booktest` (
  `id` int(5) NOT NULL,
  `bookid` int(10) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `bookemail` varchar(50) NOT NULL,
  `bookmob` varchar(15) NOT NULL,
  `bookaddr` text NOT NULL,
  `bookgender` varchar(50) NOT NULL,
  `bookcity` varchar(50) NOT NULL,
  `bookdate` date NOT NULL,
  `bookzip` varchar(8) NOT NULL,
  `booktestname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cust_registration`
--

CREATE TABLE `cust_registration` (
  `table_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `cust_mail` varchar(50) NOT NULL,
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_registration`
--

INSERT INTO `cust_registration` (`table_id`, `cust_id`, `cust_mail`, `cust_fname`, `cust_lname`, `cust_pass`) VALUES
(1, 30092, 'Prathamesh700@gmail.com', 'Prathamesh', 'Belvalkar', '123456'),
(2, 6521, 'kunalpatil@gmail.com', 'kunal', 'patil', '851236');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalreg`
--

CREATE TABLE `hospitalreg` (
  `hospitalid` int(4) NOT NULL,
  `hospitalname` varchar(50) NOT NULL,
  `hospitalmail` varchar(50) NOT NULL,
  `hospitalcont` varchar(20) NOT NULL,
  `hospitaladdr` text NOT NULL,
  `hospitalcity` varchar(20) NOT NULL,
  `hospitalstate` varchar(20) NOT NULL,
  `hospiralzip` varchar(20) NOT NULL,
  `hospitalreg` varchar(15) NOT NULL,
  `hospitalindex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalreg`
--

INSERT INTO `hospitalreg` (`hospitalid`, `hospitalname`, `hospitalmail`, `hospitalcont`, `hospitaladdr`, `hospitalcity`, `hospitalstate`, `hospiralzip`, `hospitalreg`, `hospitalindex`) VALUES
(5656, 'Ingawale', 'Ingawalwe@gmail.com', '+91-2254156456', 'Kolhapur', 'Kolhapur', 'Maharashtra', '416 012', '1454564856', 'DD-58694'),
(7329, 'Antarang Hospitals', 'AntarangHospitals@gmail.com', '+91-8329247173', 'Behind mahaveer College,kolhapur', 'Kolhapur', 'Maharashtra', '416 013', '4864654845', 'VB-45648');

-- --------------------------------------------------------

--
-- Table structure for table `labinfo`
--

CREATE TABLE `labinfo` (
  `labid` int(2) NOT NULL,
  `labname` varchar(20) NOT NULL,
  `labmail` varchar(30) NOT NULL,
  `labcont` varchar(14) NOT NULL,
  `labalcont` varchar(14) NOT NULL,
  `labaddr` text NOT NULL,
  `labcity` varchar(20) NOT NULL,
  `labzipcode` varchar(7) NOT NULL,
  `labreg` varchar(20) NOT NULL,
  `labcert` varchar(20) NOT NULL,
  `certexp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labinfo`
--

INSERT INTO `labinfo` (`labid`, `labname`, `labmail`, `labcont`, `labalcont`, `labaddr`, `labcity`, `labzipcode`, `labreg`, `labcert`, `certexp`) VALUES
(1, 'Lifesource Labs', 'lifesource@gmail.com', '+81-329247172', '+91-881765015', 'Mangalwar Peth,kolhapur', 'Kolhapur', '416 012', 'R-12345', 'ABCDE-FG12-34-5678', '2022-12');

-- --------------------------------------------------------

--
-- Table structure for table `m_employee`
--

CREATE TABLE `m_employee` (
  `emptableid` int(5) NOT NULL,
  `empid` int(5) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `empemail` varchar(20) NOT NULL,
  `empcont` varchar(13) NOT NULL,
  `empaddr` text NOT NULL,
  `empcity` varchar(20) NOT NULL,
  `empstate` varchar(20) NOT NULL,
  `emprole` varchar(50) NOT NULL,
  `empgender` varchar(7) NOT NULL,
  `empjoindate` date NOT NULL,
  `empstaus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_employee`
--

INSERT INTO `m_employee` (`emptableid`, `empid`, `empname`, `empemail`, `empcont`, `empaddr`, `empcity`, `empstate`, `emprole`, `empgender`, `empjoindate`, `empstaus`) VALUES
(7, 951, 'John Doe', 'JohnDoe@gmail.com', '9854123698', 'Kolhapur', 'Pune', 'Maharashtra', 'Clinical Laboratory Scientist (CLS)', 'male', '2022-11-06', 'Full time'),
(14, 768, 'shivam Patil', 'PatilShivam@gmail.co', '9854123698', 'Kasaba Beed', 'Kolhapur', 'Maharashtra', 'Laboratory Director', 'male', '2022-11-05', 'Full time');

-- --------------------------------------------------------

--
-- Table structure for table `testinfo`
--

CREATE TABLE `testinfo` (
  `testid` int(2) NOT NULL,
  `testname` varchar(50) NOT NULL,
  `testprice` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testinfo`
--

INSERT INTO `testinfo` (`testid`, `testname`, `testprice`) VALUES
(4239, 'Complete Blood Count', '100'),
(6826, 'Kidney Function Test', '800'),
(7372, 'Liver Function test', '800'),
(6890, 'Diabetes', '150'),
(6231, 'Thyroid', '500'),
(4694, 'HIV', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktest`
--
ALTER TABLE `booktest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalreg`
--
ALTER TABLE `hospitalreg`
  ADD PRIMARY KEY (`hospitalid`);

--
-- Indexes for table `m_employee`
--
ALTER TABLE `m_employee`
  ADD PRIMARY KEY (`emptableid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktest`
--
ALTER TABLE `booktest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_employee`
--
ALTER TABLE `m_employee`
  MODIFY `emptableid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
