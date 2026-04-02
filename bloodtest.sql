-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 12:38 PM
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
-- Database: `bloodtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitable`
--

CREATE TABLE `admitable` (
  `adminuser` varchar(50) NOT NULL,
  `adminpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admitable`
--

INSERT INTO `admitable` (`adminuser`, `adminpass`) VALUES
('Lifesourceadmin@gmail.com', '6ebe76c9fb411be97b3b0d48b791a7c9');

-- --------------------------------------------------------

--
-- Table structure for table `booktest`
--

CREATE TABLE `booktest` (
  `id` int(5) NOT NULL,
  `bookid` varchar(10) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `bookemail` varchar(50) NOT NULL,
  `bookmob` varchar(15) NOT NULL,
  `bookaddr` text NOT NULL,
  `bookgender` varchar(50) NOT NULL,
  `bookcity` varchar(50) NOT NULL,
  `bookdate` date NOT NULL,
  `booktestname` varchar(50) NOT NULL,
  `bookby` varchar(10) NOT NULL,
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booktest`
--

INSERT INTO `booktest` (`id`, `bookid`, `bookname`, `bookemail`, `bookmob`, `bookaddr`, `bookgender`, `bookcity`, `bookdate`, `booktestname`, `bookby`, `Time`) VALUES
(50, '30913365', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-08-13', 'Kidney Function Test', 'admin', '17:04:14'),
(51, '41019304', 'Ajinkya Bachhe', 'AjinkyaBachhe@gmail.com', '9854258585', 'At Undri', 'male', 'Kolhapur', '2024-07-17', 'Corona', 'admin', '17:53:42'),
(52, '89521', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-08-03', 'Complete Blood Count', 'admin', '13:22:40'),
(53, '37381219', 'Prathamesh Belvalkar', 'Prathamesh@gmail.com', '8329247172', 'Flat No 306, B wing, Vardhaman Sankul, Subrao Gavali Talim', 'male', 'Kolhapur', '2024-09-18', 'Diabetes', 'admin', '13:39:53'),
(54, '76943892', 'John Doe', 'JohnDoe@gmail.com', '8325417589', 'Flat No 306, B wing, Vardhaman Sankul, Subrao Gavali Talim', 'male', 'Kolhapur', '2024-10-22', 'Liver Function test', 'admin', '11:48:26'),
(55, '77165', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-09-17', 'Liver Function test', 'admin', '12:13:09'),
(56, '98711', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-09-19', 'Liver Function test', 'admin', '12:14:01'),
(57, '56086902', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-08-22', 'Diabetes', 'admin', '12:24:50'),
(58, '92874497', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-09-11', 'D-dimer test', 'admin', '12:35:23'),
(59, '58326', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-08-21', 'Liver Function test', 'admin', '12:39:20'),
(60, '25751767', 'Prathamesh Belvalkar', 'Prathameshbelvalkar544@gmail.com', '8329247172', 'vardhaman sankul,subrao gavali talim,magalwar peth', 'male', 'Kolhapur', '2024-08-21', 'Thyroid', 'admin', '13:28:29'),
(61, '16524981', 'John Does', 'johndoe544@gmail.com', '8765456789', 'Kolhapur ', 'male', 'Kolhapur', '2024-10-22', 'Liver Function test', 'admin', '13:41:07'),
(62, '39478690', 'PIYUSH BELVALKAR', 'piyushbelvalkar544@gmail.com', '9158105616', '306,B Wing Vardhaman Sankul,Subrao Gavali Talim,Mangalwar Peth,Kolhapur', 'male', 'Kolhapur', '2024-07-18', 'Complete Blood Count', 'admin', '14:09:13'),
(65, '21941018', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-25', 'Liver Function test', 'admin', '12:04:06'),
(66, '67734', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-25', 'Complete Blood Count', 'admin', '12:13:01'),
(67, '77563', 'Avishkar Ashok Kesarkar', 'avi@gmail.com', '6361484489', 'Nipani', 'male', 'Kolhapur', '2024-10-25', 'Kidney Function Test', 'admin', '12:19:14'),
(68, '35118193', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-25', 'Kidney Function Test', 'admin', '12:19:57'),
(69, '27502712', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-25', 'Complete Blood Count', 'admin', '12:20:18'),
(70, '98443577', 'avishkar kesarkar', 'av@gmail.com', '123456789', 'nipani', 'male', 'nipani', '2024-10-25', 'Liver Function test', 'admin', '12:22:43'),
(71, '17790014', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-25', 'Kidney Function Test', 'admin', '15:33:25'),
(72, '39530856', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-25', 'Kidney Function Test', 'admin', '16:30:21'),
(73, '84718549', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-28', 'Complete Blood Count', 'admin', '15:41:10'),
(74, '79169343', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-28', 'Kidney Function Test', 'admin', '15:41:34'),
(75, '60781126', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-28', 'Liver Function test', 'admin', '15:42:03'),
(76, '90857559', 'Ilhan Pirjade', 'ilhan@gmail.com', '9876543219', 'R.K.Nagar', 'male', 'Kolhapur', '2024-10-28', 'Thyroid', 'admin', '15:50:15'),
(77, '82943741', 'omkar shinde', 'omkar@gmail.com', '1234567891', '123/1 94 B Magdum Colony Pachgoan ,Kolhapur', 'male', 'Kolhapur', '2024-10-28', 'Complete Blood Count', 'admin', '17:25:59'),
(78, '18312989', 'ninad mane', 'ninad123@gmail.com', '9975486622', 'Plot No.88 , Jarag Nagar ,Kolhapur', 'male', 'Kolhapur', '2024-10-28', 'Kidney Function Test', 'admin', '17:27:26'),
(79, '31777257', 'Shravani Patil', 'shravani@gmail.com', '9865321472', 'A ward Plot No.20 Mangalwar Peth, Kolhapur', 'male', 'Kolhapur', '2024-10-28', 'Liver Function test', 'admin', '17:34:30'),
(80, '56918523', 'Shravani Patil', 'shravani@gmail.com', '9865321472', 'A ward Plot No.20 Mangalwar Peth, Kolhapur', 'male', 'Kolhapur', '2024-10-28', 'Diabetes', 'admin', '17:34:49'),
(81, '58011792', 'Priya Patil', 'priya@patilgmail.com', '9893265741', 'B Ward R.KNagar ,Kolhapur', 'male', 'Kolhapur', '2024-10-28', 'Thyroid', 'admin', '17:41:29'),
(82, '34933342', 'Ilhan Pirjade', 'ilhan@gmail.com', '9876543219', 'R.K.Nagar', 'male', 'Kolhapur', '2024-10-29', 'Complete Blood Count', 'admin', '14:44:26'),
(83, '84742231', 'Priya Patil', 'priya@patilgmail.com', '9893265741', 'B Ward R.KNagar ,Kolhapur', 'male', 'Kolhapur', '2024-10-29', 'Liver Function test', 'admin', '14:44:52'),
(84, '82695427', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-10-29', 'Liver Function test', 'admin', '14:45:15'),
(85, '93084772', 'Ilhan Pirjade', 'ilhan@gmail.com', '9876543219', 'R.K.Nagar', 'male', 'Kolhapur', '2024-11-05', 'Diabetes', 'admin', '13:14:45'),
(86, '56332102', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-11-05', 'Kidney Function Test', 'admin', '13:14:58'),
(87, '97583285', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-11-05', 'Thyroid', 'admin', '13:24:20'),
(88, '69265998', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-11-05', 'D-dimer test', 'admin', '13:34:03'),
(89, '82177122', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-11-05', 'Kidney Function Test', 'admin', '13:36:26'),
(90, '38555323', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-11-05', 'D-dimer test', 'admin', '13:49:13'),
(91, '63972171', 'sahil fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'male', 'kolhapur', '2024-11-05', 'D-dimer test', 'admin', '16:33:16'),
(92, '98035683', 'Ilhan Pirjade', 'ilhan@gmail.com', '9876543219', 'R.K.Nagar', 'male', 'Kolhapur', '2024-11-06', 'Diabetes', 'admin', '13:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `custdesc`
--

CREATE TABLE `custdesc` (
  `cid` int(11) NOT NULL,
  `ccid` int(7) NOT NULL,
  `cfname` varchar(50) NOT NULL,
  `clname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cgender` varchar(10) NOT NULL,
  `caddr` text NOT NULL,
  `cmob` varchar(13) NOT NULL,
  `ccity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custdesc`
--

INSERT INTO `custdesc` (`cid`, `ccid`, `cfname`, `clname`, `cemail`, `cgender`, `caddr`, `cmob`, `ccity`) VALUES
(4, 86906, 'Prathamesh', 'Belvalkar', 'Prathameshbelvalkar544@gmail.com', 'Male', 'vardhaman sankul,subrao gavali talim,magalwar peth', '8329247172', 'Kolhapur'),
(5, 20708, 'Kunal ', 'Patil', 'KunalPatil@gmail.com', 'Male', 'Halondi', '8541236987', 'Pune'),
(6, 85949, 'Pankaj', 'Chougule', 'PankajChogule@gmail.com', 'Male', 'Kagal', '8452103698', 'Kolhapur'),
(11, 20199, 'Piyush', 'Belvalkar', 'Piyush@gmail.com', 'Male', 'Mangalwar Peth', '9158105616', '416012'),
(12, 28052, 'Piyush', 'Belvalkar', 'PiyushBelvalkar544@gmail.com', 'Male', 'Practice club', '9158105616', 'Kolhapur'),
(13, 69690, 'Pankaj', 'Chougale', 'PankajChougale@gmail.com', 'Male', 'Siddnerli', '8412569874', 'Kolhapur'),
(14, 83452, 'Minal', 'Belvalkar', 'MinalBelvalkar@gmail.com', 'Female', 'Mangawar peth', '9158105616', 'Kolhapur'),
(15, 70808, 'Shubhangi', 'Belvalkar', 'ShubhangiBelvalkar@gmail.com', 'Female', 'Rankala Tower ', '8541236987', 'Kolhapur'),
(16, 64529, 'Kamal', 'kanti', 'KamalKanti@gmail.com', 'Female', 'RK Nagar', '7456321456', 'Kolhapur'),
(17, 69749, 'Ajinkya', 'Bachhe', 'AjinkyaBachhe@gmail.com', 'Male', 'At Undri', '9854258585', 'Kolhapur'),
(18, 18736, 'Sameer', 'Bate', 'Sameerbate@gmail.com', 'Male', 'Swaybhuwadi,kolhapur', '9563248563', 'Kolhapur'),
(19, 59079, 'Prathamesh', 'Belvalkar', 'Prathamesh@gmail.com', 'Male', 'Flat No 306, B wing, Vardhaman Sankul, Subrao Gavali Talim', '8329247172', 'Kolhapur'),
(20, 11970, 'John', 'Doe', 'JohnDoe@gmail.com', 'Male', 'Flat No 306, B wing, Vardhaman Sankul, Subrao Gavali Talim', '8325417589', 'Kolhapur'),
(21, 92854, 'John', 'Does', 'johndoe544@gmail.com', 'Male', 'Kolhapur ', '8765456789', 'Kolhapur'),
(22, 50289, 'PIYUSH', 'BELVALKAR', 'piyushbelvalkar544@gmail.com', 'Male', '306,B Wing Vardhaman Sankul,Subrao Gavali Talim,Mangalwar Peth,Kolhapur', '9158105616', 'Kolhapur'),
(23, 36566, 'sahil', 'fepade', 'sahil123@gmail.com', 'Male', 'kolhapur', '1234567891', 'kolhapur'),
(24, 11307, 'avishkar', 'kesarkar', 'av@gmail.com', 'Male', 'nipani', '123456789', 'nipani'),
(25, 69352, 'Ilhan', 'Pirjade', 'ilhan@gmail.com', 'Male', 'R.K.Nagar', '9876543219', 'Kolhapur'),
(26, 24940, 'omkar', 'shinde', 'omkar@gmail.com', 'Male', '123/1 94 B Magdum Colony Pachgoan ,Kolhapur', '1234567891', 'Kolhapur'),
(27, 67981, 'ninad', 'mane', 'ninad123@gmail.com', 'Male', 'Plot No.88 , Jarag Nagar ,Kolhapur', '9975486622', 'Kolhapur'),
(28, 10843, 'Shravani', 'Patil', 'shravani@gmail.com', 'Female', 'A ward Plot No.20 Mangalwar Peth, Kolhapur', '9865321472', 'Kolhapur'),
(29, 27308, 'Priya', 'Patil', 'priya@patilgmail.com', 'Female', 'B Ward R.KNagar ,Kolhapur', '9893265741', 'Kolhapur'),
(30, 71489, 'John', 'Cena', 'john@gmail.com', 'Male', 'Shivaji Peth,Kolhapur', '9876543212', 'Kolhapur'),
(31, 54233, 'Sahil', 'Salokhe', 'sahil007@gmail.com', 'Male', 'a,ward,Mangalwar Peth ,Kolhapur', '9876543215', 'Kolhapur'),
(32, 19095, 'Avishkar', 'Kesarkar', 'avi123@gmail.com', 'Male', 'kolhapur', '9876543215', 'Kolhapur');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_registration`
--

INSERT INTO `cust_registration` (`table_id`, `cust_id`, `cust_mail`, `cust_fname`, `cust_lname`, `cust_pass`) VALUES
(1, 86906, 'Prathameshbelvalkar544@gmail.com', 'Prathamesh', 'Belvalkar', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 20708, 'KunalPatil@gmail.com', 'Kunal', 'Patil', '25d55ad283aa400af464c76d713c07ad'),
(3, 85949, 'PankajChogule@gmail.com', 'Pankaj', 'Chougule', '25d55ad283aa400af464c76d713c07ad'),
(4, 20199, 'Piyush@gmail.com', 'Piyush', 'Belvalkar', 'c33367701511b4f6020ec61ded352059'),
(5, 28052, 'PiyushBelvalkar544@gmail.com', 'Piyush', 'Belvalkar', 'de311af6f3a0b5167a5e49663183ff24'),
(6, 69690, 'PankajChougale@gmail.com', 'Pankaj', 'Chougale', '97a5517ea46ec8b2565fd6e1003ce953'),
(7, 83452, 'MinalBelvalkar@gmail.com', 'Minal', 'Belvalkar', '66f7ff04c0f3ffec9d06a82010cdc6f4'),
(8, 70808, 'ShubhangiBelvalkar@gmail.com', 'Shubhangi', 'Belvalkar', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 64529, 'KamalKanti@gmail.com', 'Kamal', 'kanti', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 69749, 'AjinkyaBachhe@gmail.com', 'Ajinkya', 'Bachhe', '202cb962ac59075b964b07152d234b70'),
(11, 18736, 'Sameerbate@gmail.com', 'Sameer', 'Bate', '202cb962ac59075b964b07152d234b70'),
(12, 59079, 'Prathamesh@gmail.com', 'Prathamesh', 'Belvalkar', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 11970, 'JohnDoe@gmail.com', 'John', 'Doe', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 92854, 'johndoe544@gmail.com', 'John', 'Does', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 50289, 'piyushbelvalkar6@gmail.com', 'PIYUSH', 'BELVALKAR', 'de311af6f3a0b5167a5e49663183ff24'),
(16, 36566, 'sahil@gmail.com', 'sahil', 'fepade', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 11307, 'av@gmail.com', 'avishkar', 'kesarkar', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 66987, 'ninad@gmail.com', 'ninad', 'khadilkar', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 69352, 'ilhan@gmail.com', 'Ilhan', 'Pirjade', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 24940, 'omkar@gmail.com', 'omkar', 'shinde', 'e10adc3949ba59abbe56e057f20f883e'),
(21, 67981, 'ninad123@gmail.com', 'ninad', 'mane', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 10843, 'shravani@gmail.com', 'Shravani', 'Patil', 'e10adc3949ba59abbe56e057f20f883e'),
(23, 27308, 'priya@patilgmail.com', 'Priya', 'Patil', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 71489, 'john@gmail.com', 'John', 'Cena', 'e10adc3949ba59abbe56e057f20f883e'),
(25, 54233, 'sahil007@gmail.com', 'Sahil', 'Salokhe', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 19095, 'avi123@gmail.com', 'Avishkar', 'Kesarkar', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `custids` int(11) NOT NULL,
  `feedmessage` text NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `custids`, `feedmessage`, `Time`) VALUES
(5, 86906, 'Accurate and timely results, highly recommend!', '2024-09-18 08:55:46'),
(6, 20199, 'Efficient and professional service, thanks!', '2024-08-23 10:25:09'),
(7, 83452, 'Smooth and stress-free experience, well done!', '2024-07-19 12:00:07'),
(8, 70808, 'Convenient location, quick and easy blood draw.', '2024-09-19 01:00:49'),
(9, 69749, 'Excellent customer service, highly satisfied.', '2024-10-23 09:02:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospitalreg`
--

INSERT INTO `hospitalreg` (`hospitalid`, `hospitalname`, `hospitalmail`, `hospitalcont`, `hospitaladdr`, `hospitalcity`, `hospitalstate`, `hospiralzip`, `hospitalreg`, `hospitalindex`) VALUES
(5656, 'Ingawale', 'Ingawalwe@gmail.com', '+91-2254156456', 'Kolhapur', 'Kolhapur', 'Maharashtra', '416 012', '1454564856', 'DD-58694'),
(7329, 'Antarang Hospitals', 'AntarangHospitals@gmail.com', '8541236987', 'Behind mahaveer College,kolhapur', 'Kolhapur', 'Maharashtra', '416 012', '4864654845', 'VB-45648');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(5) NOT NULL,
  `custids` int(11) NOT NULL,
  `issue` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `custids`, `issue`, `message`, `Time`) VALUES
(12, 86906, 'Time', 'Long wait time, poor organization.', '2024-08-15 09:05:17'),
(13, 20199, 'Results', 'Inaccurate results, extremely frustrating.', '2024-08-19 09:05:56'),
(14, 83452, 'Staff', 'Rude and unprofessional staff, unpleasant experience.', '2024-09-10 09:06:33'),
(15, 70808, 'Time', 'Limited hours of operation, inconvenient.', '2024-09-12 09:07:02'),
(16, 69749, 'Money', 'Expensive fees, unreasonable pricing.', '2024-09-14 09:07:40'),
(17, 11307, 'Technical Isses', 'ohhhhh', '2024-10-25 16:12:08'),
(18, 24940, 'Technical Isses', 'Report not get on time', '2024-10-28 17:19:15'),
(19, 67981, 'Technical Isses', 'Waiting longer than expected for test results, especially if time-sensitive, can be frustrating and anxiety-inducing.\r\n\r\n', '2024-10-28 17:25:11'),
(20, 10843, 'Technical Isses', 'Errors in testing or sample handling .\r\n', '2024-10-28 17:32:36'),
(21, 27308, 'Technical Isses', 'Unexpectedly high fees or lack of transparency about costs can leave customers dissatisfied with lab services.', '2024-10-28 17:40:31');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labinfo`
--

INSERT INTO `labinfo` (`labid`, `labname`, `labmail`, `labcont`, `labalcont`, `labaddr`, `labcity`, `labzipcode`, `labreg`, `labcert`, `certexp`) VALUES
(1, 'Modern Lab', 'modernlab@gmail.com', '+81-329247172', '+91-881765015', 'Mangalwar Peth,kolhapur', 'Kolhapurs', '416 012', 'R-12345', 'ABCDE-FG12-34-5678', '2024-11');

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
  `empstaus` varchar(10) NOT NULL,
  `empactive` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_employee`
--

INSERT INTO `m_employee` (`emptableid`, `empid`, `empname`, `empemail`, `empcont`, `empaddr`, `empcity`, `empstate`, `emprole`, `empgender`, `empjoindate`, `empstaus`, `empactive`) VALUES
(22, 852, 'Avishkar Ashok Kesarkar', 'avi.ak.2611@gmail.co', '6361484489', 'Nipani, Karnataka', 'Kagal', 'Maharashtra', 'Laboratory Director', 'male', '2024-10-05', 'Full time', 'Active'),
(23, 215, 'Sahil Fepade', 'sahil123@gmail.com', '6548789541', 'Kolhapur', 'Kolhapur', 'Maharashtra', 'Technical and General Supervisors', 'male', '2024-10-05', 'Full time', 'Active'),
(24, 152, 'Pranali Patil', 'pranali143@gmail.com', '7896544258', 'Kolhapur', 'Kolhapur', 'Maharashtra', 'Clinical Laboratory Scientist (CLS)', 'female', '2024-10-05', 'Full time', 'Active'),
(25, 462, 'Dipak Budake', 'dip55@gmail.com', '9565487535', 'Kagal', 'Kagal', 'Maharashtra', 'Phlebotomist (PBT)', 'male', '2024-10-05', 'Full time', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(5) NOT NULL,
  `bookids` int(11) NOT NULL,
  `aamount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `bookids`, `aamount`) VALUES
(5, 91347168, 112),
(6, 78096014, 896),
(7, 70565477, 560),
(8, 85941543, 224),
(9, 76846377, 168),
(10, 30913365, 560),
(11, 41019304, 112),
(12, 92874497, 224),
(13, 92874497, 896),
(14, 25751767, 560),
(15, 16524981, 896),
(16, 39478690, 112),
(17, 95846509, 112),
(18, 0, 112),
(19, 0, 560),
(20, 84718549, 112),
(21, 79169343, 560),
(22, 60781126, 896),
(23, 90857559, 560),
(24, 82943741, 112),
(25, 18312989, 560),
(26, 31777257, 896),
(27, 56918523, 168),
(28, 58011792, 560),
(29, 34933342, 112),
(30, 84742231, 896),
(31, 82695427, 896),
(32, 93084772, 168),
(33, 56332102, 560),
(34, 69265998, 224),
(35, 63972171, 224),
(36, 98035683, 168);

-- --------------------------------------------------------

--
-- Table structure for table `schedultest`
--

CREATE TABLE `schedultest` (
  `bid` int(5) NOT NULL,
  `bookid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `bfname` varchar(20) NOT NULL,
  `blname` varchar(20) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `bmob` varchar(13) NOT NULL,
  `bcity` varchar(20) NOT NULL,
  `docrefer` varchar(20) NOT NULL,
  `testdate` varchar(11) NOT NULL,
  `testtime` varchar(10) NOT NULL,
  `testname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedultest`
--

INSERT INTO `schedultest` (`bid`, `bookid`, `custid`, `bfname`, `blname`, `bemail`, `bmob`, `bcity`, `docrefer`, `testdate`, `testtime`, `testname`) VALUES
(45, 21941018, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'Dr.Patil', '2024-10-25', '11:59', 'Liver Function test'),
(46, 35118193, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-10-25', '12:00', 'Kidney Function Test'),
(47, 27502712, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'Dr.Deepak', '2024-10-25', '12:09', 'Complete Blood Count'),
(48, 98443577, 11307, 'avishkar', 'kesarkar', 'av@gmail.com', '123456789', 'nipani', 'Dr.Ninad', '2024-10-25', '12:21', 'Liver Function test'),
(49, 17790014, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'Dr. Harish Karande', '2024-10-25', '15:31', 'Kidney Function Test'),
(50, 39530856, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'Dr. Harish Karande', '2024-10-25', '15:31', 'Kidney Function Test'),
(51, 72960913, 11307, 'avishkar', 'kesarkar', 'av@gmail.com', '123456789', 'nipani', 'SELF', '2024-10-25', '16:28', 'Kidney Function Test'),
(52, 11853975, 36566, 'avishkar', 'kesarkar', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-10-31', '16:42', 'Diabetes'),
(53, 84718549, 36566, 'ninad', 'khadilkar', 'ninad@gmail.com', '1234567891', 'kolhapur', 'Dr.Kulkarni', '2024-10-28', '15:36', 'Complete Blood Count'),
(54, 79169343, 36566, 'omkar', 'Kulkarni', 'Omkarl@gmail.com', '1234567891', 'Mumbai City', 'SELF', '2024-10-28', '16:00', 'Kidney Function Test'),
(55, 60781126, 36566, 'Parth', 'Mane', 'parth@gmail.com', '1234567891', 'Nashik', 'Dr.kulkarni', '2024-10-28', '17:39', 'Liver Function test'),
(56, 34933342, 69352, 'Ilhan', 'Pirjade', 'ilhan@gmail.com', '9876543219', 'Kolhapur', 'Dr.Kulkarni', '2024-10-29', '17:47', 'Complete Blood Count'),
(57, 46716237, 69352, 'Ilhan', 'Pirjade', 'ilhan@gmail.com', '9876543219', 'Kolhapur', 'SELF', '2024-11-02', '15:48', 'Kidney Function Test'),
(58, 93084772, 69352, 'Ilhan', 'Pirjade', 'ilhan@gmail.com', '9876543219', 'Kolhapur', 'Dr.Patil', '2024-11-05', '15:48', 'Diabetes'),
(59, 98035683, 69352, 'Ilhan', 'Pirjade', 'ilhan@gmail.com', '9876543219', 'Kolhapur', 'SELF', '2024-11-06', '15:49', 'Diabetes'),
(60, 90857559, 69352, 'Ilhan', 'Pirjade', 'ilhan@gmail.com', '9876543219', 'Kolhapur', 'Dr.Patil', '2024-10-28', '15:49', 'Thyroid'),
(61, 82943741, 24940, 'omkar', 'shinde', 'omkar@gmail.com', '1234567891', 'Kolhapur', 'Dr.patil', '2024-10-28', '18:19', 'Complete Blood Count'),
(62, 18312989, 67981, 'ninad', 'mane', 'ninad123@gmail.com', '9975486622', 'Kolhapur', 'Dr.Shah', '2024-10-28', '18:26', 'Kidney Function Test'),
(63, 31777257, 10843, 'Shravani', 'Patil', 'shravani@gmail.com', '9865321472', 'Kolhapur', 'SELF', '2024-10-28', '20:32', 'Liver Function test'),
(64, 56918523, 10843, 'Shravani', 'Patil', 'shravani@gmail.com', '9865321472', 'Kolhapur', 'SELF', '2024-10-28', '21:32', 'Diabetes'),
(65, 58011792, 27308, 'Priya', 'Patil', 'priya@patilgmail.com', '9893265741', 'Kolhapur', 'SELF', '2024-10-28', '20:41', 'Thyroid'),
(66, 84742231, 27308, 'Priya', 'Patil', 'priya@patilgmail.com', '9893265741', 'Kolhapur', 'Dr.Kulkarni', '2024-10-29', '18:42', 'Liver Function test'),
(67, 82695427, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-10-29', '14:42', 'Liver Function test'),
(68, 56332102, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:10', 'Kidney Function Test'),
(69, 97583285, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:24', 'Thyroid'),
(70, 69265998, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:33', 'D-dimer test'),
(71, 82177122, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:33', 'Kidney Function Test'),
(72, 38555323, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:36', 'D-dimer test'),
(73, 63972171, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:36', 'D-dimer test'),
(74, 61991848, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:36', 'D-dimer test'),
(75, 22054812, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-05', '13:36', 'D-dimer test'),
(76, 17773955, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-06', '12:49', 'Kidney Function Test'),
(77, 62721202, 36566, 'sahil', 'fepade', 'sahil@gmail.com', '1234567891', 'kolhapur', 'SELF', '2024-11-06', '13:00', 'Thyroid'),
(78, 43186770, 19095, 'Avishkar', 'Kesarkar', 'avi123@gmail.com', '9876543215', 'Kolhapur', 'SELF', '2024-11-06', '16:59', 'Complete Blood Count');

-- --------------------------------------------------------

--
-- Table structure for table `testinfo`
--

CREATE TABLE `testinfo` (
  `testid` int(2) NOT NULL,
  `testname` varchar(50) NOT NULL,
  `testprice` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testinfo`
--

INSERT INTO `testinfo` (`testid`, `testname`, `testprice`) VALUES
(4239, 'Complete Blood Count', '100'),
(6826, 'Kidney Function Test', '500'),
(7372, 'Liver Function test', '800'),
(6890, 'Diabetes', '150'),
(6231, 'Thyroid', '500'),
(7455, 'D-dimer test', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktest`
--
ALTER TABLE `booktest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custdesc`
--
ALTER TABLE `custdesc`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalreg`
--
ALTER TABLE `hospitalreg`
  ADD PRIMARY KEY (`hospitalid`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_employee`
--
ALTER TABLE `m_employee`
  ADD PRIMARY KEY (`emptableid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedultest`
--
ALTER TABLE `schedultest`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktest`
--
ALTER TABLE `booktest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `custdesc`
--
ALTER TABLE `custdesc`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `m_employee`
--
ALTER TABLE `m_employee`
  MODIFY `emptableid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `schedultest`
--
ALTER TABLE `schedultest`
  MODIFY `bid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
