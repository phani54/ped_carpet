-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 02:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redcarpe_redcarpetmatrimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `guid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`guid`, `pname`, `image`) VALUES
(10, 'Search', '1509785264_ads.jpg'),
(11, 'Package', '1512153807_Bridal accessories add.jpg'),
(13, 'Search', '1522917925_6.6x2.9.jpg'),
(14, 'Search', '1512183662_AD-banner.jpg'),
(15, 'Search', '1512154333_Bridal accessories add.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `guid` int(11) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`guid`, `image`) VALUES
(2, '1507798260_gal-2.jpg'),
(7, '1507798300_gal-10.jpg'),
(8, '1507798308_gal-11.jpg'),
(9, '1507798315_gal-12.JPG'),
(10, '1507798323_gal-15.JPG'),
(11, '1507798334_gal-18.JPG'),
(12, '1510576983_IMG_7002.JPG'),
(13, '1513449864_9a.jpg'),
(14, '1513450406_7.jpg'),
(15, '1514668820_Just.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `guid` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`guid`, `name`, `dateandtime`) VALUES
(1, 'Adventist', '2018-06-26 14:23:32'),
(2, 'Anglican / Episcopal', '2018-06-26 14:23:32'),
(3, 'Apostolic', '2018-06-26 14:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `guid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`guid`, `name`) VALUES
(14, 'Christian'),
(15, 'Roman Catholic');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `guid` bigint(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`guid`, `cid`, `sid`, `name`, `dateandtime`) VALUES
(1, 1, 2, 'Hyderabad', '2018-06-26 14:04:03'),
(2, 1, 2, 'Warangal', '2018-06-26 14:04:03'),
(3, 1, 1, 'Visakhapatnam', '2018-06-26 14:04:34'),
(4, 1, 1, 'Vijayawada', '2018-06-26 14:04:34'),
(5, 1, 1, 'Srikakulam', '2018-06-26 14:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `guid` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`guid`, `name`, `dateandtime`) VALUES
(1, 'India', '2018-06-26 13:33:16'),
(2, 'USA', '2018-06-26 13:33:16'),
(3, 'England', '2018-06-26 13:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `denominations`
--

CREATE TABLE `denominations` (
  `guid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denominations`
--

INSERT INTO `denominations` (`guid`, `name`, `dateandtime`) VALUES
(3, 'Church of South India(C.S.I)', '2018-08-08 04:42:22'),
(4, 'Roman Catholic', '2018-08-08 04:42:22'),
(5, 'Catholic Church in India', '2018-08-08 04:42:22'),
(6, 'SMC', '2018-08-08 04:42:22'),
(8, 'Church of the East', '2018-08-08 04:42:22'),
(9, 'Protestant', '2018-08-08 04:42:22'),
(10, 'Andhra Evangelical Lutheran(AELC)', '2018-08-08 04:42:22'),
(11, 'Lutheran', '2018-08-08 04:42:22'),
(12, 'Assemblies Jehovah Shammah', '2018-08-08 04:42:22'),
(13, 'Christian Revival Church', '2018-08-08 04:42:22'),
(14, 'Church of North India (C.N.I)', '2018-08-08 04:42:22'),
(16, 'Baptist', '2018-08-08 04:42:22'),
(17, 'Brethren', '2018-08-08 04:42:22'),
(18, 'Pentecostal', '2018-08-08 04:42:22'),
(19, 'Church of God (Full Gospel)', '2018-08-08 04:42:22'),
(20, 'Mar Thoma', '2018-08-08 04:42:22'),
(21, 'Presbyterian', '2018-08-08 04:42:22'),
(22, 'The Pentecostal Mission', '2018-08-08 04:42:22'),
(23, 'St. Thomas Evangelical', '2018-08-08 04:42:22'),
(24, 'Seventh-day Adventist', '2018-08-08 04:42:22'),
(25, 'United Evangelical Lutheran', '2018-08-08 04:42:22'),
(26, 'Hebron', '2018-08-08 04:42:22'),
(27, 'JCNM', '2018-08-08 04:42:22'),
(28, 'Bethel', '2018-08-08 04:42:22'),
(29, 'Beracah', '2018-08-08 04:42:22'),
(30, 'Assemblies of God', '2018-08-08 04:42:22'),
(31, 'Denomination No Bar', '2018-08-08 04:42:22'),
(32, ' Others', '2018-08-08 04:42:22'),
(33, 'Kings Temple', '2018-08-08 04:42:22'),
(34, 'Calvary Temple', '2018-08-08 04:42:22'),
(35, 'Hope Unlimited Church (PearlChurch)', '2018-08-08 04:42:22'),
(36, 'Churches of Christ', '2018-08-08 04:42:22'),
(37, 'Independent Church', '2018-08-08 04:42:22'),
(38, 'Padmashali', '2018-08-08 04:42:22'),
(39, 'United Christ Church', '2018-08-08 04:42:22'),
(40, 'United Church', '2018-08-08 04:42:22'),
(41, 'Adventist', '2018-08-08 04:43:18'),
(42, 'Anglican / Episcopal', '2018-08-08 04:43:18'),
(43, 'Apostolic', '2018-08-08 04:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `guid` bigint(20) NOT NULL,
  `sid` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`guid`, `sid`, `name`, `dateandtime`) VALUES
(1, 1, 'Adi Dravida', '2018-06-26 14:24:42'),
(2, 1, 'Anglo Indian', '2018-06-26 14:24:42'),
(3, 1, 'Cheraman', '2018-06-26 14:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `guid` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`guid`, `name`, `dateandtime`) VALUES
(1, 'Telugu', '2018-06-26 14:11:29'),
(2, 'English', '2018-06-26 14:11:29'),
(3, 'Hindi', '2018-06-26 14:11:29'),
(4, 'Tamil', '2018-06-26 14:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `guid` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `securitykey` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `role` enum('superadmin','adminuser') NOT NULL,
  `status` enum('Active','Pending','Block') NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `centername` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`guid`, `name`, `username`, `password`, `securitykey`, `email`, `date`, `role`, `status`, `dateandtime`, `centername`) VALUES
(1, 'Super Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '5a09851866dfe', 'phanikumar.allanki@gmail.com', '2014-12-09', 'superadmin', 'Active', '2018-08-06 06:13:49', 'Matrimony Centers');

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE `occupations` (
  `guid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupations`
--

INSERT INTO `occupations` (`guid`, `name`) VALUES
(1, 'Student'),
(2, 'Teacher'),
(4, 'Software Engineer'),
(5, 'Farmer'),
(6, 'Judge'),
(7, 'Lawyer'),
(8, 'Mechanic'),
(9, 'Artist'),
(10, 'Self Employ'),
(11, 'Police Dept.'),
(12, 'Education Dept.'),
(13, 'Army'),
(14, 'Driver'),
(16, 'Hotel Industry'),
(17, 'Medical Dept.'),
(19, 'Pilot'),
(20, 'Govt. Sector'),
(21, 'Chef'),
(22, 'Lecturer'),
(23, 'Media'),
(24, 'Anchor'),
(25, 'Engineer'),
(26, 'Doctor'),
(27, 'Nurse'),
(28, 'Goldsmith'),
(29, 'Actor / Actress'),
(30, 'Fashion Designer'),
(31, 'Contractor'),
(32, 'Servant of God'),
(33, 'Part Time Jobs'),
(34, '  Others'),
(35, 'Banking Sector'),
(36, 'Automobile Sector'),
(37, 'Dentistry'),
(38, 'Business'),
(39, 'Beautician'),
(40, 'Technician'),
(41, 'Business Development Manager'),
(42, 'Online Services'),
(43, 'Air Lines'),
(44, 'Musician & Music Teacher'),
(45, 'Event Management'),
(46, 'Accounts'),
(47, 'Relationship Manager'),
(48, 'Insurance Industry'),
(49, 'Staff Nurse (Govt.)'),
(50, 'Department Manager'),
(51, 'Finance Analyst'),
(52, 'Sr. Software Engineer'),
(53, 'Working in Delloitte'),
(55, 'Working in Amazon'),
(56, 'Working in MNC'),
(57, 'Working in Cognizant'),
(58, 'SAP'),
(59, 'Quality Analyst'),
(60, 'Sr. Quality Analyst'),
(61, 'Call Center'),
(62, 'US process '),
(63, 'Working in TATA '),
(64, 'Delivery boy'),
(65, 'Software professional'),
(66, 'Health care professional'),
(67, 'Human resources professional (HR)'),
(68, 'Executive'),
(69, 'Professor'),
(70, 'Supervisor'),
(71, 'Beautician'),
(72, 'Officer'),
(73, 'Administrator (Admin)'),
(74, 'Missionary'),
(75, 'Team Leader (TL)'),
(76, 'Central Govt.'),
(77, 'Pharmaceutics'),
(78, 'Beauty Cosmetologist');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `guid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `profiles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`guid`, `pname`, `amount`, `duration`, `image`, `profiles`) VALUES
(1, 'EnRICH', '3000', '8', '1510398209_Enrich.jpg', '100'),
(2, 'DeLIGHT', '2000', '4', '1510398272_Delight.jpg', '40'),
(3, 'StartUP', '0', '3', '1510398287_startup.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `duration` varchar(2) NOT NULL,
  `profiles` varchar(10) NOT NULL,
  `views` enum('Limited','Unlimited') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`Id`, `name`, `price`, `duration`, `profiles`, `views`) VALUES
(1, 'Delight', '2000', '3', '30', 'Unlimited'),
(3, 'Enrich', '3500', '6', '70', 'Unlimited');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `profile_id` varchar(50) NOT NULL,
  `profile_for` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `birth_date` int(11) NOT NULL,
  `birth_month` int(11) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `denomination` varchar(50) NOT NULL,
  `sub_cast` varchar(50) NOT NULL,
  `mother_tongue` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_number` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `security_key` varchar(250) NOT NULL,
  `height` varchar(50) NOT NULL,
  `physical_status` varchar(50) NOT NULL,
  `willing_to_marry_other` tinyint(1) NOT NULL COMMENT '1:yes;0:no',
  `religious_values` varchar(50) NOT NULL,
  `education` varchar(100) NOT NULL,
  `employed_in` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `family_value` varchar(40) NOT NULL,
  `family_type` varchar(30) NOT NULL,
  `family_status` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `otp` int(11) NOT NULL,
  `otp_flag` tinyint(1) NOT NULL COMMENT '1:Verified:0:Not-Verified',
  `approval_status` varchar(1) NOT NULL COMMENT '1:Approved;0:Pending;1:Rejected',
  `package` int(11) NOT NULL,
  `activation_on` datetime NOT NULL,
  `de_active_on` datetime NOT NULL,
  `package_status` tinyint(1) NOT NULL COMMENT '1:Active:2:Expired;0:Not Subcribed',
  `profile_views` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` tinyint(1) NOT NULL COMMENT '0:User;1:Admin',
  `created_by_id` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` tinyint(1) NOT NULL COMMENT '0:User;1:Admin',
  `updated_by_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profile_id`, `profile_for`, `name`, `gender`, `image`, `birth_date`, `birth_month`, `birth_year`, `age`, `dob`, `marital_status`, `religion`, `denomination`, `sub_cast`, `mother_tongue`, `country`, `state`, `city`, `address`, `citizenship`, `mobile`, `alt_number`, `email`, `password`, `security_key`, `height`, `physical_status`, `willing_to_marry_other`, `religious_values`, `education`, `employed_in`, `occupation`, `family_value`, `family_type`, `family_status`, `about`, `otp`, `otp_flag`, `approval_status`, `package`, `activation_on`, `de_active_on`, `package_status`, `profile_views`, `created_on`, `created_by`, `created_by_id`, `updated_on`, `updated_by`, `updated_by_id`) VALUES
(1, 'RCM50019', 'Myself', 'Theresa konda', 'Female', '1521201686_BeautyPlus_20170223152856_1save.jpg', 10, 10, 1991, 26, '1991-10-10', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad ', 'Secuenderabad', '', '8497992797', '', 'kondatheresa91@gmail.com', 'queen123', '', '5ft 0in / 152 cms', '', 0, '', 'B.A', 'Employed', 'Pilot', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(2, 'RCM50020', 'Daughter', 'Bethapudi Sanjhaya Rani', 'Female', '1510318503_22279851_1082894075179960_1913895604406211103_n.jpg', 12, 11, 1990, 26, '1990-11-12', 'Unmarried', '14', '', '', 'Telugu', '', '', 'hyderabad', 'musheerabad', '', '8919098262', '', 'sandhyarani072@gmail.com', 'yehova!23', '', '5ft 3in / 159 cms', '', 0, '', 'B.Sc', 'Self Employed', 'Govt. Sector', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(3, 'RCM50022', 'Myself', 'Gera Kiran Kumar', 'Male', '1511290356_16665142_10206144234483100_3275491972528338855_o.jpg', 16, 5, 1978, 39, '1978-05-16', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Hyderabad', 'Khairathabad', '', '9885664558', '', 'kirandesignstudios@gmair.com', 'artist', '', '5ft 0in / 152 cms', '', 0, '', 'B.Com', 'Self Employed', 'Lecturer', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(4, 'RCM50030', 'Son', 'P. Edwin Dennison', 'Male', '1528174520_20180605_102424.jpg', 20, 1, 1987, 31, '1987-01-20', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Sandhya Seriglio Apartment,Dayanand Nagar, Malkajgiri.', '', '9533787024', '', 'edwin@gmail.com', 'edwin123', '', '5ft 6in / 167 cms', '', 0, '', 'B.A', 'Employed', 'Fashion Designer', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(5, 'RCM50032', 'Myself', 'Mark Stevenson', 'Male', '1511179644_Sunny.jpg', 27, 12, 1989, 27, '1989-12-27', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9704153714', '', 'mark@gmail.com', 'mark123', '', '5ft 7in / 169 cms', '', 0, '', 'Bachelors Degree', 'Employed', 'Servant of God', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(6, 'RCM50033', 'Daughter', 'V. Shiny Rachel', 'Female', '1511417021_IMG-20171122-WA0033.jpg', 2, 5, 1993, 24, '1993-05-02', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Hyderabad', 'Neredmet Cross Roads, Secuenderabad, ', '', '9121011649', '', 'shiny@gmail.com', 'shiny123', '', '5ft 6in / 167 cms', '', 0, '', 'Bachelors-Engineering', 'Employed', 'Part Time Jobs', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(7, 'RCM50042', 'Daughter', 'G.JYOTHIRMAI', 'Female', '1520442190_IMG-20171228-WA0001.jpg', 9, 1, 1989, 29, '1989-01-09', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Badangpet, Hyd', 'Hyderabad', '', '9440465977', '', 'prasanthi.samuel@gmail.com', 'jyothormai', '', '5ft 5in / 164 cms', '', 0, '', 'BE/B.Tech', 'Employed', 'Online Services', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:57', 0, 0, '0000-00-00 00:00:00', 0, 0),
(8, 'RCM50045', 'Sister', 'Ashwini Ussaingalla', 'Female', '1512189474_IMG-20171129-WA0007.jpg', 8, 10, 1987, 30, '1987-10-08', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Mumbai', 'Mumbai', '', '7738381410', '', 'mamta321@gmail.com', 'Veena@321', '', '4ft 11in / 149 cms', '', 0, '', 'Bachelors Degree', 'Employed', 'Event Management', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(9, 'RCM50047', 'Daughter', 'Sruthy Kathula ', 'Female', '1530599463_WhatsApp Image 2018-07-03 at 11.25.58.jpeg', 28, 2, 1985, 33, '1985-02-28', 'Unmarried', '14', 'Lutheran', '', 'Telugu', '', '', 'Bangalore', 'Banglore...', '', '9491968044', '', 'arunakumari.vunnamatla3@gmai.com', 'jesus123', '', '5ft 0in / 152 cms', '', 0, '', 'Masters', '', 'Relationship Manager', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(10, 'RCM50051', 'Daughter', 'RATNA DEEPIKA', 'Female', '1512308455_pic for apply_opt.jpg', 15, 6, 1993, 24, '1993-06-15', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'VIJAYAWADA', 'TF-2, SRI VYSHNAVI APARTMENT, CNG BUNK LANE, RAMAVARAPPADU, VIJAYAWADA-521108', '', '9294059543', '', 'prasadbabubodula64@gmail.com', 'Krushika*123', '', '5ft 4in / 163 cms', '', 0, '', 'BE/B.Tech', 'Unemployed', 'Finance Analyst', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(11, 'RCM50052', 'Son', 'A Rupesh Chandra', 'Male', '1512312487_IMG-20171202-WA0009.jpg', 18, 6, 1986, 31, '1986-06-18', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Oregon City, USA', 'Oregon City, USA', '', '9866423549', '', 'rcggcnzb@gmail.com', 'Christion', '', '5ft 5in / 165 cms', '', 0, '', 'M.Phil', 'Other', 'Sr. Software Engineer', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(12, 'RCM50055', 'Daughter', 'Aparanji P', 'Female', '1527931961_20180602_144546.jpg', 14, 11, 1988, 29, '1988-11-14', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyd', 'Sandhya Seriglio Apartments,Dayanand Nagar , Malkajgiri.', '', '9533787024', '', 'aparanji@gmail.com', 'chinni123', '', '5ft 2in / 158 cms', '', 0, '', 'B.A', 'Employed', 'Working in Amazon', '', '', '', '', 0, 1, '1', 2, '2018-02-16 00:00:00', '2018-05-16 00:00:00', 0, '40', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(13, 'RCM50057', 'Daughter', 'Nakka Divya jyothi', 'Female', '1521540183_1521115679_WhatsApp Image 2018-03-14 at 21.21.43.jpeg', 19, 6, 1990, 27, '1990-06-19', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Hyderabad', '12_8_230/3mettguda secuderabad 500017', '', '9948126557', '', 'nakkajoythi123@gmail.com', 'davidpaul', '', '5ft 0in / 152 cms', '', 0, '', 'B.A', 'Employed', 'Working in Cognizant', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(14, 'RCM50058', 'Sister', 'Choppala Prashanthi', 'Female', '1512460729_user.jpg', 25, 11, 1987, 30, '1987-11-25', 'Unmarried', '14', '', '', 'Telugu', '', '', 'Hyderabad', 'NIZAMPET Hyderabad', '', '9703028515', '', 'Peace_2308@ymail.com', 'Chinnu', '', '5ft 0in / 152 cms', '', 0, '', 'B.Com', 'Employed', 'SAP', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(15, 'RCM50063', 'Brother', 'K.ravichandra', 'Male', '1523870716_IMG-20180416-WA0038.jpg', 12, 12, 1983, 34, '1983-12-12', 'Unmarried', '14', 'Catholic Church in India', '', 'Telugu', '', '', 'bangulore', 'sarjapure road,wipro oppisite,halnahakalli,bangulore,karnataka', '', '8297881827', '', 'kavalakuntlaraviteja@gmail.com', 'raviteja456', '', '5ft 9in / 174 cms', '', 0, '', 'Bachelors-Engineering', 'Other', 'Working in TATA ', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(16, 'RCM50065', 'Daughter', 'Nallaballe suvishesini prathyusha ', 'Female', '1513268986_img006-1.jpg', 26, 11, 1990, 27, '1990-11-26', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Kadapa', 'H/no 15/195,near vcn colony, ymr colony, Proddatur ', '', '9290203057', '', 'aremsuchitra.vijay@gmail.com', 'SUXHIvijay', '', '5ft 1in / 155 cms', '', 0, '', 'BDS', 'Employed', 'Software professional', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(17, 'RCM50066', 'Brother', 'Parchuri Nageswara Rao', 'Male', '1513161595_IMG-20171126-WA0010.jpg', 24, 10, 1988, 29, '1988-10-24', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'Guntur', 'Mangaldas Nagar 2 nd lane, Guntur-522001', '', '9848591648', '', 'pgministries9999@gmail.com', 'shalemraju', '', '5ft 8in / 172 cms', '', 0, '', 'B.Sc', 'Employed', 'Health care professional', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(18, 'RCM50071', 'Myself', 'Bharathi', 'Female', '1531752790_20180716_202120.jpg', 25, 6, 1988, 30, '1988-06-25', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Vizag', '44-1-35/2,\r\nLakshminarayana puram, kailasapuram road', '', '7337250917', '', 'Bharathi.jalluri02@gmail.com', '9177086487', '', '5ft 4in / 163 cms', '', 0, '', 'BE/B.Tech', 'Unemployed', 'Beautician', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(19, 'RCM50072', 'Myself', 'Naveen Kumar', 'Male', '1513444751_IMG_20171210_202208.jpg', 9, 5, 1991, 26, '1991-05-09', 'Unmarried', '14', 'Protestant', '', 'Telugu', '', '', 'anantapur', '', '', '9494025548', '', 'panditnaveenkumar2@gmail.com', '9959732344', '', '5ft 11in / 181 cms', '', 0, '', 'B.Com', 'Employed', 'Officer', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(20, 'RCM50074', 'Myself', 'Dipak', 'Male', '1518461809_1514525726974.jpg', 12, 11, 1983, 34, '1983-11-12', 'Unmarried', '14', 'Pentecostal', '', 'Marathi', '', '', 'Pune', 'Dhanori-Lohagoan', '', '9096554994', '', 'dipak777@gmail.com', 'holypurejesus', '', '5ft 7in / 170 cms', '', 0, '', 'B.Com', 'Self Employed', 'Missionary', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(21, 'RCM50075', 'Myself', 'D.Bhakth Singh', 'Male', '1513589418_14192737_10210340538180454_4186117794437820506_n.jpg', 20, 8, 1987, 30, '1987-08-20', 'Unmarried', '14', 'Hebron', '', 'Telugu', '', '', 'Hyderabad', 'Choutuppal, Hyderabad', '', '9848542510', '', 'domathoti87@gmail.com', 'sunder', '', '5ft 9in / 174 cms', '', 0, '', 'Masters-Degree', 'Employed', 'Team Leader (TL)', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(22, 'RCM50076', 'Sister', 'Anoohya', 'Female', '1513592768_IMG-20171218-WA0008.jpg', 19, 8, 1993, 24, '1993-08-19', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Karimnagar', 'Hydearbad', '', '8121644262', '', 'Anoohya@gmail.com', 'gmail123', '', '5ft 4in / 163 cms', '', 0, '', 'Masters-Degree', 'Unemployed', 'Central Govt.', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(23, 'RCM50078', 'Daughter', 'G Samata Kumari', 'Female', '1532359240_1530600056_WhatsApp Image 2018-07-03 at 11.28.21a.jpg', 31, 12, 1986, 31, '1986-12-31', 'Unmarried', '14', 'Assemblies of God', '', 'Telugu', '', '', 'Bangalore', 'kadubesanahalli, bangalore', '', '9916011072', '', 'robertdanams@gmail.com', 'suneethi', '', '5ft 0in / 152 cms', '', 0, '', 'BE/B.Tech', 'Employed', 'Beauty Cosmetologist', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(24, 'RCM50088', 'Sister', 'Dirisam Hepsiba ', 'Female', '1516865361_3-1.jpg', 16, 10, 1984, 33, '1984-10-16', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'near Machilipatnam ', 'Pasumarru po., Pamarru Mdl.', '', '8790793726', '', 'hepsid@gmail.com', 'dirisam3', '', '5ft 0in / 152 cms', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(25, 'RCM50093', 'Son', 'Marati S Kamalakar', 'Male', '1519822130_008.jpg', 9, 9, 1991, 26, '1991-09-09', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9440523920', '', 'Kamalakar@gmail.com', 'Kamalakar', '', '5ft 10in / 177 cms', '', 0, '', 'Management-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(26, 'RCM50095', 'Sister', 'Vinay Kumari', 'Female', '1518764720_IMG-20180215-WA0003.jpg', 3, 3, 1983, 35, '1983-03-03', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Neredmet, Secunderabad, Hyd.', '', '9866217313', '', 'vinaykumari85@gmail.com', 'vinay', '', '5ft 1in / 156 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(27, 'RCM50096', 'Friend', 'Mayuri Akula', 'Female', '1518766086_IMG-20180216-WA0000.jpg', 27, 12, 1986, 31, '1986-12-27', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Hyderabad', 'Ramnagar, Hyderabad', '', '8121609670', '', 'mayuri@gmail.com', 'mayuri', '', '5ft 1in / 156 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(28, 'RCM50097', 'Brother', 'Sunny ', 'Male', '', 27, 5, 1986, 31, '1986-05-27', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Na', '', '9949665676', '', 'Vanitha_samuel2003@yahoo.com', 'muskan4u', '', '5ft 7in / 169 cms', '', 0, '', 'Masters', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-02-16 17:47:40', 0, 0, '0000-00-00 00:00:00', 0, 0),
(29, 'RCM50099', 'Daughter', 'Sruthi K', 'Female', '', 22, 5, 1985, 33, '1985-05-22', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', '', '', '9247290712', '', 'arkcovenant1@gmail.com', 'trinity3', '', '5ft 4in / 162 cms', '', 0, '', 'Masters', 'Unemployed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-16 08:37:40', 0, 0, '0000-00-00 00:00:00', 0, 0),
(30, 'RCM500103', 'Son', 'E David Shashi Raj', 'Male', '1519725703_WhatsApp Image 2018-02-27 at 15.27.34.jpeg', 19, 1, 1987, 31, '1987-01-19', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Tamil', '', '', 'Hyderabad', 'Hyd', '', '9542229957', '', 'david@gmail.com', 'gmail123', '', '5ft 9in / 174 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(31, 'RCM500109', 'Myself', 'K.Manasa', 'Female', '1520048446_IMG-20180303-WA0002.jpg', 30, 5, 1990, 27, '1990-05-30', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'secunderbad', 'H.No 10-5196/9 Thukaramgate North lallaguda secunderbad', '', '9701851481', '', 'sonumanasa30@gmail.com', 'manasa30', '', '5ft 2in / 157 cms', '', 0, '', 'Other', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(32, 'RCM500112', 'Sister', 'Swarnalatha', 'Female', '1521289908_DSC_04541.jpg', 10, 12, 1985, 32, '1985-12-10', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Hyderabad', 'Secunderabad', '', '9440788822', '', 'deeprabha34@gmail.com', 'police100', '', '5ft 4in / 162 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:58', 0, 0, '0000-00-00 00:00:00', 0, 0),
(33, 'RCM500113', 'Brother', 'B.RAVI KUMAR ', 'Male', '1528302805_20180606_220215.jpg', 2, 11, 1983, 34, '1983-11-02', 'Unmarried', '14', 'Bethel', '', 'Telugu', '', '', 'Hyderabad ', '', '', '9866633519', '', 'vr7.ravi@gmail.com', 'ravi0702', '', '5ft 5in / 164 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(34, 'RCM500115', 'Sister', 'Sowjanya Battu', 'Female', '1520175326_20171225_141034.jpg', 29, 11, 1987, 30, '1987-11-29', 'Unmarried', '14', 'Hebron', '', 'Telugu', '', '', 'Hyderabad', 'Netaji nagar, A.G.Colony, ESI', '', '8125880036', '', 'naveenpaulbattu@gmail.com', 'bjpratap', '', '5ft 3in / 159 cms', '', 0, '', 'Ph.D', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(35, 'RCM500116', 'Sister', 'V Sunitha', 'Female', '1520188479_C4930--579--4x6--20002.JPG', 4, 1, 1982, 36, '1982-01-04', 'Unmarried', '14', 'Hebron', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad-500020', '', '9441676573', '', 'voletikn@rediffmail.com', 'kiranv8*', '', '5ft 0in / 152 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(36, 'RCM500117', 'Myself', 'Dr. Lesley l', 'Male', '1520402497_004.jpg', 20, 5, 1986, 32, '1986-05-20', 'Unmarried', '14', 'Bethel', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9573094875', '', 'lesleylinus@gmail.com', 'linus', '', '6ft 2in / 187 cms', '', 0, '', 'MBBS', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(37, 'RCM500118', 'Son', 'Winston Krupasindh', 'Male', '1520403516_002.jpg', 7, 4, 1986, 32, '1986-04-07', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9885864083', '', 'winston@gmail.com', 'winston', '', '5ft 7in / 169 cms', '', 0, '', 'B.Com', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(38, 'RCM500119', 'Sister', 'Dolly Evenjilena ', 'Female', '1532596166_1532580360_Dolly 20180210_203738.jpg', 4, 7, 1990, 28, '1990-07-04', 'Unmarried', '14', 'Roman Catholic', '', 'Telugu', '', '', 'Secunderbad ', 'Secunderabad\r\n', '', '8179648351', '', 'glory.varshareddy89@gmail.com', 'Glory$2503reddy', '', '5ft 0in / 153 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(39, 'RCM500120', 'Daughter', 'Ruth Angeleena', 'Female', '1520421267_005.jpg', 19, 9, 1989, 28, '1989-09-19', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Kothagudem', 'Kothagudem', '', '9396792666', '', 'ruthangeleena@gmail.com', 'ruthangeleena', '', '5ft 3in / 160 cms', '', 0, '', 'B.Com', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(40, 'RCM500121', 'Daughter', 'Sravani', 'Female', '1520422658_006.jpg', 13, 10, 1990, 27, '1990-10-13', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Huzur Nagar', 'Huzur Nagar LB Nagar , Hyd ', '', '9642568857', '', 'sravani@gmail.com', 'sravani', '', '4ft 5in / 134 cms', '', 0, '', 'Other', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(41, 'RCM500122', 'Son', 'Ratna Paul Saka', 'Male', '', 16, 6, 1989, 28, '1989-06-16', 'Unmarried', '14', 'Calvary Temple', '', 'Telugu', '', '', 'Atlanta Unite States of America', 'Sunway Opus Grand Nivelle,Phase 3B,H402,403,Miyapur Bachupally Road,Ameenpur,Near Sree Chaitanya Deg', '', '9492531852', '', 'saka03s@gmail.com', 'srpoucse', '', '5ft 9in / 176 cms', '', 0, '', 'Bachelors-Engineering', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-03-07 13:56:13', 0, 0, '0000-00-00 00:00:00', 0, 0),
(42, 'RCM500125', 'Myself', 'Uday kiran ', 'Male', '', 25, 4, 1989, 28, '1989-04-25', 'Unmarried', '14', 'Pentecostal', '', 'Telugu', '', '', 'Hyderabad', 'Jeedimetla', '', '7032252698', '', 'kuday7363@gmail.com', 'udaykiran', '', '5ft 10in / 179 cms', '', 0, '', 'B.Com', 'Self Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-03-10 07:16:21', 0, 0, '0000-00-00 00:00:00', 0, 0),
(43, 'RCM500127', 'Daughter', 'D. Kavitha ', 'Female', '1528626976_BeautyPlus_20180610155821606_save.jpg', 28, 7, 1992, 25, '1992-07-28', 'Unmarried', '14', 'Pentecostal', '', 'Telugu', '', '', 'Hyderabad', ' Hyderabad', '', '8374640254', '', 'kavitha@gmail.com', 'Kavithad', '', '5ft 2in / 158 cms', '', 0, '', 'Management-Degree', 'Self Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(44, 'RCM500129', 'Daughter', 'PRATHIBHA ', 'Female', '1532614446_20180726_193747.jpg', 13, 6, 1988, 30, '1988-06-13', 'Unmarried', '15', 'Roman Catholic', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9849359085', '', 'prathibhajannu@gmail.com', 'prathibha', '', '5ft 2in / 157 cms', '', 0, '', 'BL/LLB', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(45, 'RCM500131', 'Daughter', 'KARUNA LATHA', 'Female', '', 25, 7, 1982, 35, '1982-07-25', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'Mahabub Nagar - (Dist)', 'Mahabub Nagar - (Dist)', '', '9505706692', '', 'admin@gmail.com', '2klikes', '', '', '', 0, '', 'MA', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-03-13 09:53:21', 0, 0, '0000-00-00 00:00:00', 0, 0),
(46, 'RCM500132', 'Myself', 'KOSURI SURESH', 'Male', '1520942325_13418686_1122948827763036_1618490591722654683_n.jpg', 26, 9, 1989, 28, '1989-09-26', 'Unmarried', '14', 'Calvary Temple', '', 'Telugu', '', '', 'KAKINADA', 'KAKINADA', '', '9676771322', '', 'ssureshsarala@gmail.com', 'suresh123', '', '5ft 5in / 166 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(47, 'RCM500137', 'Brother', 'K J Pradeep', 'Male', '1523029388_IMG_20180402_150152_175.jpg', 31, 10, 1982, 35, '1982-10-31', 'Unmarried', '14', 'Protestant', '', 'Telugu', '', '', 'Hyderabad', 'S R 30 Seetha Ram Nagar Safilguda Hyd 500056', '', '9030260403', '', 'srideepthi.sahai@gmail.com', 'gracemercy', '', '5ft 8in / 172 cms', '', 0, '', 'Bachelors Degree', 'Business', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(48, 'RCM500138', 'Myself', 'Nagarjuna Kalapala', 'Male', '1521265064_IMG-20180225-WA0008.jpg', 6, 7, 1990, 27, '1990-07-06', 'Unmarried', '14', 'Hebron', '', 'Telugu', '', '', 'Hyderabad', '18-8-254 /92 New Rakshapuram Colony Kanchanbagh', '', '9000013280', '', 'nagarjunak4@gmail.com', 'sulekhanag@143', '', '5ft 2in / 157 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(49, 'RCM500139', 'Myself', 'Vajrakumar', 'Male', '1521171020_1521137307_FB_IMG_1521136703172.jpg', 5, 3, 1991, 27, '1991-03-05', 'Unmarried', '14', 'Independent Church', '', 'Telugu', '', '', 'Paloncha', 'Ambethker colony new petrol bunk paloncha', '', '9550299970', '', 'vajrakumar211@gmail.com', 'randy@9970', '', '5ft 11in / 180 cms', '', 0, '', 'B.Com', 'Self Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:43:59', 0, 0, '0000-00-00 00:00:00', 0, 0),
(50, 'RCM500140', 'Son', 'Daiva', 'Male', '', 9, 4, 1988, 29, '1988-04-09', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad ', '', '', '9010322771', '', 'daiva137@gmai.com', '9010322771', '', '5ft 7in / 170 cms', '', 0, '', 'Bachelors-Engineering', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-03-16 05:46:48', 0, 0, '0000-00-00 00:00:00', 0, 0),
(51, 'RCM500141', 'Myself', 'Tony Sohan kumar', 'Male', '1521181167_rcm500141.jpg', 4, 10, 1979, 38, '1979-10-04', 'Unmarried', '14', 'Pentecostal', '', 'Kannada', '', '', 'Mysore', '#3108 1st main road\r\nYadavagiri', '', '8050255180', '', 'sohan_886@yahoo.co.in', 'christ@777', '', '5ft 10in / 177 cms', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(52, 'RCM500143', 'Myself', 'Kishore ', 'Male', '', 9, 11, 1988, 29, '1988-11-09', 'Unmarried', '14', 'JCNM', '', 'Telugu', '', '', 'Hyderabad ', 'Plot no-196,  shiva puri colony,  manikonda, Hyderabad ', '', '9014441075', '', 'kishoreelamakanti0911@gmail.com', 'kishore@143', '', '5ft 5in / 164 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-03-17 05:55:50', 0, 0, '0000-00-00 00:00:00', 0, 0),
(53, 'RCM500146', 'Myself', 'Y Vinit Kumar', 'Male', '1521436898_IMG-20180207-WA0004.jpg', 1, 1, 1987, 31, '1987-01-01', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Bolaram, Hyd - 500010', '', '9346120011', '', 'yalakula1957@gmail.com', 'Vinit', '', '5ft 7in / 170 cms', '', 0, '', 'Management-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(54, 'RCM500147', 'Son', 'Dr. T Isaac', 'Male', '1521438553_aviary-image-1485440893835.jpeg', 6, 9, 1987, 30, '1987-09-06', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Neredmet, Hyderabad', '', '9247317531', '', 'isaac@gmail.com', 'isaac', '', '5ft 6in / 168 cms', '', 0, '', 'MBBS', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(55, 'RCM500148', 'Sister', 'B.Mounika', 'Female', '1521449699_IMG-20180319-WA0012.jpg', 7, 8, 1996, 21, '1996-08-07', 'Unmarried', '14', 'Independent Church', '', 'Telugu', '', '', 'Hyderabad ', 'S.N Colony\r\nR.C Puram ', '', '7799559484', '', 'satish.rebel357@gmail.com', 'satishlaursa143', '', '5ft 4in / 163 cms', '', 0, '', 'BE/B.Tech', 'Unemployed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(56, 'RCM500150', 'Daughter', 'Kavalakuntla.sampurna', 'Female', '1523870562_IMG-20180416-WA0036 (1).jpg', 24, 9, 1988, 29, '1988-09-24', 'Unmarried', '14', 'Catholic Church in India', '', 'Telugu', '', '', 'bangulore', 'sarjapure road,halnhakalli,wipro opp company,bangilore', '', '8297881827', '', 'glorisampu@gmail.com', 'jesus1988', '', '5ft 4in / 162 cms', '', 0, '', 'Masters', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(57, 'RCM500152', 'Sister', 'Saritha C', 'Female', '1521621286_500152a.jpeg', 21, 9, 1982, 35, '1982-09-21', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Mettuguda, Hyd', '', '8333807160', '', 'saritha@gmail.com', 'saritha', '', '5ft 3in / 161 cms', '', 0, '', 'Management-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(58, 'RCM500153', 'Relative', 'Marshall', 'Male', '1521616906_IMG_20161120_112131.jpg', 2, 2, 1984, 34, '1984-02-02', 'Unmarried', '14', 'Roman Catholic', '', 'English', '', '', 'Hyderabad', 'Secunderabad telangana', '', '9849657762', '', 'maranjit123@gmail.com', '500153', '', '5ft 5in / 166 cms', '', 0, '', 'BCA', 'Business', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(59, 'RCM500154', 'Myself', 'B sudheer kumar', 'Male', '1521729043_IMG_20180213_100648_182.jpg', 27, 7, 1989, 28, '1989-07-27', 'Unmarried', '14', 'Calvary Temple', '', 'Telugu', '', '', 'Hyderabad', 'Borabanda', '', '8712324775', '', 'sudeer3692@gmail.com', 'jesus899', '', '5ft 8in / 173 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(60, 'RCM500156', 'Brother', 'Satish Kumar', 'Male', '', 23, 8, 1986, 31, '1986-08-23', 'Unmarried', '14', 'Pentecostal', '', 'Telugu', '', '', 'Hyderabad', 'Ramnagar, Hyd.', '', '9298901778', '', 'satish@gmail.com', 'satish', '', '5ft 4in / 162 cms', '', 0, '', 'B.A', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-03-24 13:18:12', 0, 0, '0000-00-00 00:00:00', 0, 0),
(61, 'RCM500159', 'Daughter', 'B.SRAVANTHI', 'Female', '1522064368_20180326_163004.jpg', 14, 7, 1985, 32, '1985-07-14', 'Unmarried', '14', 'Independent Church', '', 'Telugu', '', '', 'Hyderabad', 'Satavahana Nagar, Vanasthalipuram Hyd ', '', '9963376536', '', 'sravanti@gmail.com', 'sravanthi', '', '5ft 4in / 162 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(62, 'RCM500160', 'Son', 'SURYANAND BODDU', 'Male', '1522064152_20180326_162859.jpg', 31, 5, 1981, 36, '1981-05-31', 'Unmarried', '14', 'United Evangelical Lutheran', '', 'Telugu', '', '', 'Bangalore', 'Hyderabad', '', '9849883690', '', 'prakash59292@gmail.com', 'prakash', '', '5ft 6in / 167 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(63, 'RCM500162', 'Son', 'V S Prashanth', 'Male', '1530511605_WhatsApp Image 2018-07-02 at 10.51.38.jpg', 20, 8, 1989, 28, '1989-08-20', 'Unmarried', '14', 'JCNM', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '8142654999', '', 'vsudeep20@gmail.com', 'thammu', '', '5ft 8in / 172 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(64, 'RCM500163', 'Daughter', 'Dr Sravanthi', 'Female', '1522133126_1522129172_SAVE_20180324_184958.jpeg', 22, 12, 1987, 30, '1987-12-22', 'Unmarried', '14', 'JCNM', '', 'Telugu', '', '', 'Hyderabad', 'Kkr golden enclave apartment flat no 610,attapur mehdipatnam hyderabad', '', '7972809051', '', 'Panga.sravanthi22@gmail.com', 'kamala', '', '5ft 2in / 158 cms', '', 0, '', 'MBBS', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(65, 'RCM500164', 'Son', 'Erdandi James', 'Male', '1522133926_IMG-20180327-WA0000.jpg', 9, 1, 1982, 36, '1982-01-09', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', '', '', '9885244798', '', 'james@gmail.com', 'james', '', '5ft 6in / 167 cms', '', 0, '', '', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(66, 'RCM500165', 'Relative', 'Pravin', 'Male', '1522137577_IMG-20180321-WA0010.jpg', 9, 6, 1987, 31, '1987-06-09', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'BHEL, Hyderabad', '', '9948952727', '', 'pravin876i9@gmail.com', 'jaya123', '', '6ft 0in / 182 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(67, 'RCM500166', 'Daughter', 'SUNITHA ROSE', 'Female', '', 6, 12, 1989, 28, '1989-12-06', '', '14', '', '', 'Telugu', '', '', 'Hyderabad', 'Nampally , Hyderabad', '', '9951650418', '', 'sunitharose@gmail.com', 'sunitharose', '', '', '', 0, '', 'Bachelors-Engineering', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-28 11:08:29', 0, 0, '0000-00-00 00:00:00', 0, 0),
(68, 'RCM500167', 'Myself', 'Ramya glory', 'Female', '1522316050_1522173085_IMG-20180116-WA0011a.jpg', 19, 12, 1988, 29, '1988-12-19', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Hyderabad', '2-25/3 Sri srinivasa apt flat no 3 vani nagar Street no 1 MALKAJGIRI', '', '9848213187', '', 'ramyakanety@gmail.com', 'ramya12', '', '5ft 2in / 157 cms', '', 0, '', '', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(69, 'RCM500169', 'Sister', 'Sushmitha', 'Female', '1531403872_IMG-20180712-WA0002.jpg', 13, 11, 1993, 24, '1993-11-13', 'Unmarried', '14', 'Hebron', '', 'Telugu', '', '', 'Mahabubnagar', '8-3-46/A/3\r\nMettugadda\r\nMahabubnagar', '', '9154682800', '', 'sucherithaabraham17@gmail.com', 'suchi1712', '', '5ft 4in / 162 cms', '', 0, '', 'MBBS', 'Unemployed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(70, 'RCM500172', 'Son', 'G SRIKANT', 'Male', '1522917093_IMG-20180111-WA00241a.jpg', 24, 12, 1988, 29, '1988-12-24', 'Unmarried', '14', 'Independent Church', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9949242481', '', 'srikant@gmail.com', 'srikant', '', '5ft 4in / 162 cms', '', 0, '', 'Other', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:00', 0, 0, '0000-00-00 00:00:00', 0, 0),
(71, 'RCM500173', 'Sister', 'B Renuka', 'Female', '', 10, 3, 1995, 23, '1995-03-10', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'Hyderabad', 'Dilshuknagar', '', '6300258510', '', 'praveenbachalakuri173@gmail.com', 'renuka1234', '', '5ft 5in / 165 cms', '', 0, '', 'BE/B.Tech', 'Unemployed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-23 05:35:19', 0, 0, '0000-00-00 00:00:00', 0, 0),
(72, 'RCM500174', 'Daughter', 'K Susan', 'Female', '1532332594_20180723_130619.jpg', 13, 7, 1985, 33, '1985-07-13', 'Widow', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'umberpate, hyd', '', '9391110774', '', 'susan@gmail.com', 'susan', '', '5ft 0in / 153 cms', '', 0, '', 'B.Sc', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(73, 'RCM500179', 'Myself', 'K.Prasanna kumari', 'Female', '1523873777_IMG_20171130_124139_804.JPG', 26, 8, 1985, 32, '1985-08-26', 'Unmarried', '14', 'Pentecostal', '', 'Telugu', '', '', 'hyderabad', 'Kukattpally', '', '8333061721', '', 'prasanna.bujji.26@gmail.com', 'jesusmysaveir', '', '5ft 0in / 152 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(74, 'RCM500180', 'Daughter', ' Juthuka Srujana', 'Female', '1532188486_20180721_191007.jpg', 1, 8, 1988, 29, '1988-08-01', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Bangalore ', 'Bangalore', '', '9246937448', '', 'srujana.juthuka@gmail.com', 'srujana', '', '5ft 5in / 164 cms', '', 0, '', 'Other', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(75, 'RCM500181', 'Daughter', 'Goldie', 'Female', '1525524331_WhatsApp Image 2018-05-05 at 14.01.44.jpg', 13, 8, 1989, 28, '1989-08-13', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyd', '', '', '9948576769', '', 'goldie@gmail.com', 'goldie', '', '5ft 4in / 162 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(76, 'RCM500183', 'Sister', 'Sheeba Prashanthi', 'Female', '1526033797_FB_IMG_1526033321179.jpg', 6, 11, 1991, 26, '1991-11-06', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'flat no 404\r\nTarnaka', '', '9885752979', '', 'sunilkalloji@gmail.com', 'matthew6', '', '5ft 1in / 154 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(77, 'RCM500184', 'Sister', 'V. Sailaja', 'Female', '', 7, 7, 1985, 32, '1985-07-07', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'secunderabad', 'Seethafalmandi', '', '9949409286', '', 'vaddepallyrenuka2015@gmail.com', 'renuka2015', '', '5ft 2in / 158 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-05-16 07:40:54', 0, 0, '0000-00-00 00:00:00', 0, 0),
(78, 'RCM500187', 'Brother', 'Vijay Paul', 'Male', '1530522400_1526830083_10168019_10202346891073977_2785181601084831225_n.jpg', 7, 1, 1982, 36, '1982-01-07', 'Unmarried', '14', 'Hebron', '', 'Telugu', '', '', 'Hyderabad', '', '', '9885832611', '', 'esther.joe@rediffmail.com', 'Swaroopaaa', '', '5ft 6in / 168 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(79, 'RCM500188', 'Son', 'Abraham Wesley', 'Male', '1527313773_1527313142_15273129818211691997347.jpg', 24, 8, 1987, 30, '1987-08-24', 'Unmarried', '14', 'Pentecostal', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9951898558', '', 'abrahamwesley@gmail.com', 'Wesley', '', '5ft 6in / 167 cms', '', 0, '', 'BE/B.Tech', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(80, 'RCM500189', 'Brother', 'Ronald Varun Kumar Katta', 'Male', '1532155266_1527312736_IMG-20180523-WA0010.jpg', 3, 2, 1991, 27, '1991-02-03', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', '', '', '9177863855', '', 'varun@gmail.com', 'varun', '', '5ft 8in / 173 cms', '', 0, '', 'Masters', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(81, 'RCM500190', 'Myself', 'Srikanth', 'Male', '', 2, 6, 1984, 33, '1984-06-02', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', '', '', '9000035456', '', 'c.srikanth143@gmail.com', 'June2018', '', '5ft 8in / 172 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-05-27 02:21:34', 0, 0, '0000-00-00 00:00:00', 0, 0),
(82, 'RCM500194', 'Sister', 'Preethi', 'Female', '1528260326_20180606_101355.jpg', 21, 8, 1989, 28, '1989-08-21', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9032748203', '', 'preethi@gmail.com', 'kiran123', '', '5ft 3in / 161 cms', '', 0, '', 'Masters', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(83, 'RCM500196', 'Myself', 'JAKKAMSETTI SUNIL BABU', 'Male', '1529156284_IMG_20171019_124922.JPG', 15, 6, 1990, 28, '1990-06-15', 'Unmarried', '14', 'Protestant', '', 'Telugu', '', '', 'Narsaput', 's/O J.Saraschandra Babu\r\n9-5-34\r\nMunicipal office road\r\nNarsapur', '', '9010803243', '', 'sunilbabuagf@gmail.com', 'sunilsixer', '', '5ft 9in / 174 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(84, 'RCM500197', 'Brother', 'Sandeep', 'Male', '1529039206_IMG-20180612-WA0012.jpg', 1, 1, 1989, 29, '1989-01-01', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9177333454', '', 'sandeep@gmail.com', 'sandeep123', '', '5ft 6in / 167 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(85, 'RCM500198', 'Myself', 'K Sameera', 'Female', '1530607116_WhatsApp Image 2018-07-03 at 12.33.39.jpg', 13, 1, 1988, 30, '1988-01-13', 'Unmarried', '14', 'Baptist', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9866892150', '', 'sameera.chinnu@gmail.com', 'nisha88', '', '5ft 5in / 164 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(86, 'RCM500201', 'Myself', 'Prashanth', 'Male', '1529334224_20180618_200859.jpg', 7, 7, 1991, 27, '1991-07-07', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad...', 'Hyderabad...', '', '9948657819', '', 'prashanthroy2@gmail.com', 'Frank@123', '', '5ft 5in / 166 cms', '', 0, '', 'Management-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(87, 'RCM500202', 'Son', 'Mahesh Kumar Pal', 'Male', '1529745564_20180619_110007.jpg', 17, 1, 1987, 31, '1987-01-17', 'Unmarried', '15', 'Roman Catholic', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9666694414', '', 'maheshkumarpal@gmail.com', 'mahesh123', '', '5ft 6in / 167 cms', '', 0, '', 'B.A', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(88, 'RCM500204', 'Daughter', 'R iris preethi', 'Female', '1529785040_1529749805_WhatsApp Image 2018-06-20 at 12.03.14.jpeg', 17, 11, 1993, 24, '1993-11-17', 'Unmarried', '15', 'Roman Catholic', '', 'Tamil', '', '', 'Hyderabad ', 'Shanthinagar  north lalaguda', '', '7416859865', '', 'irispreethi9505@gmail.com', 'maryjesus', '', '5ft 4in / 162 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(89, 'RCM500205', 'Relative', 'Robin', 'Male', '1531130031_WhatsApp Image 2018-07-09 at 15.22.06.jpeg', 14, 11, 1984, 33, '1984-11-14', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'H.No. 12-8-423/B/1, Mettuguda, Sec-bad, Hyd.', '', '9966555489', '', 'robin@gmail.com', '2klikes', '', '5ft 9in / 174 cms', '', 0, '', 'Bachelors Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(90, 'RCM500206', 'Sister', 'Maneesha', 'Female', '', 25, 12, 1992, 25, '1992-12-25', 'Unmarried', '14', 'Calvary Temple', '', 'Telugu', '', '', 'Hyderabad', '8-4-369/549 f\r\nBorabanda', '', '9160813127', '', 'fruitysunshine44@gmail.com', 'mannu@123', '', '5ft 6in / 168 cms', '', 0, '', 'Bachelors Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-10 09:11:20', 0, 0, '0000-00-00 00:00:00', 0, 0),
(91, 'RCM500207', 'Son', 'Navin Joel', 'Male', '1533208650_20180802_164219.jpg', 20, 10, 1981, 36, '1981-10-20', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'Mettuguda', '', '9032808724', '', 'navin123@gmail.com', 'navin123', '', '5ft 8in / 172 cms', '', 0, '', 'Bachelors Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(92, 'RCM500209', 'Son', 'Vikram Reddy', 'Male', '1531599261_20180715_014239.jpg', 15, 12, 1980, 37, '1980-12-15', 'Unmarried', '14', 'Catholic Church in India', '', 'Telugu', '', '', 'Bombay', 'Habsiguda', '', '', '', 'redcarpet@gmail.com', 'Vikram123', '', '6ft 1in / 185 cms', '', 0, '', 'MBBS', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(93, 'RCM500210', 'Daughter', 'Kavitha', 'Female', '1531467965_WhatsApp Image 2018-07-12 at 10.24.02.jpg', 23, 5, 1990, 28, '1990-05-23', 'Unmarried', '14', 'Calvary Temple', '', 'Telugu', '', '', 'Hyderabad', 'Hyderabad', '', '9985418303', '', 'kavitha12345@gmail.com', 'kavitha123', '', '5ft 1in / 156 cms', '', 0, '', 'Management-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(94, 'RCM500214', 'Son', 'Mathew', 'Male', '', 19, 2, 1991, 27, '1991-02-19', '', '14', '', '', 'Malayalam', '', '', '', '', '', '8712863079', '', 'sajji555@yahoo.com', 'vinoo', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-16 17:52:48', 0, 0, '0000-00-00 00:00:00', 0, 0),
(95, 'RCM500215', 'Sister', 'Janet Paul', 'Female', '1532154154_1532118071_Screenshot_2018-07-21-01-42-42-058 (1).jpeg', 1, 9, 1987, 30, '1987-09-01', '', '14', '', '', 'English', '', '', '', '', '', '9703146488', '', 'linet.merlin01@gmail.com', 'Levi@123', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(96, 'RCM500216', 'Daughter', 'Priyanka', 'Female', '1532281957_20180722_231839.jpg', 15, 10, 1992, 25, '1992-10-15', 'Unmarried', '14', 'Lutheran', '', 'Telugu', '', '', 'Hyderabad', 'hyd', '', '7416249344', '', 'cheeysam0007@gmail.com', 'priyanka123', '', '5ft 0in / 152 cms', '', 0, '', 'B.Sc', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:01', 0, 0, '0000-00-00 00:00:00', 0, 0),
(97, 'RCM500217', 'Son', 'Sepuri Staphan', 'Male', '1533233617_20180802_234209.jpg', 25, 6, 1983, 35, '1983-06-25', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'SECUNDERBAD', 'secunderbad', '', '9573117691', '', 'staphan@gmail.com', '123456', '', '5ft 4in / 162 cms', '', 0, '', 'B.Com', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(98, 'RCM500225', 'Son', 'Ben', 'Male', '', 24, 9, 1989, 28, '1989-09-24', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad ', '', '', '9701470786', '', 'red@gmail.com', 'Ben123', '', '5ft 11in / 181 cms', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-27 11:58:23', 0, 0, '0000-00-00 00:00:00', 0, 0),
(99, 'RCM500228', 'Relative', 'Samyuktha', 'Female', '1532955158_20180730_181753.jpg', 16, 2, 1994, 24, '1994-02-16', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'Hyderabad', '', '', '9177333454', '', 'bun@gmail.com', 'bun123', '', '5ft 1in / 155 cms', '', 0, '', 'M.Pharm', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(100, 'RCM500230', 'Myself', 'Kavitha', 'Female', '', 23, 5, 1990, 28, '1990-05-23', '', '14', '', '', 'Telugu', '', '', '', '', '', '9985325432', '', 'kavithashivaratri9@gmail.com', 'kavitharani', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-07-30 14:58:31', 0, 0, '0000-00-00 00:00:00', 0, 0),
(101, 'RCM500231', 'Myself', 'JALLURI CHANDU', 'Male', '1533023507_20180731_131829.jpg', 11, 10, 1990, 27, '1990-10-11', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'Hyderabad', 'hyd', '', '9246282702', '', 'chandurcm@gmail.com', '1234567', '', '6ft 0in / 183 cms', '', 0, '', 'BE/B.Tech', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0);
INSERT INTO `profiles` (`id`, `profile_id`, `profile_for`, `name`, `gender`, `image`, `birth_date`, `birth_month`, `birth_year`, `age`, `dob`, `marital_status`, `religion`, `denomination`, `sub_cast`, `mother_tongue`, `country`, `state`, `city`, `address`, `citizenship`, `mobile`, `alt_number`, `email`, `password`, `security_key`, `height`, `physical_status`, `willing_to_marry_other`, `religious_values`, `education`, `employed_in`, `occupation`, `family_value`, `family_type`, `family_status`, `about`, `otp`, `otp_flag`, `approval_status`, `package`, `activation_on`, `de_active_on`, `package_status`, `profile_views`, `created_on`, `created_by`, `created_by_id`, `updated_on`, `updated_by`, `updated_by_id`) VALUES
(102, 'RCM500232', 'Myself', 'NITHYA TIRUPATHI', 'Female', '1533023065_20180731_130932.jpg', 11, 12, 1988, 29, '1988-12-11', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'hyd', 'hyd', '', '9959635987', '', 'nithyarcm@gmail.com', '123456', '', '5ft 7in / 170 cms', '', 0, '', 'M.Pharm', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(103, 'RCM500233', 'Myself', 'SHWETHA JANICE W', 'Female', '1533024128_20180731_132939.jpg', 20, 6, 1986, 32, '1986-06-20', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'secunderbad', 'sec_bad', '', '9246282702', '', 'swetharcm@gmail.com', 'swetha123', '', '5ft 0in / 152 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(104, 'RCM500234', 'Myself', 'B Dayanand Raju ', 'Male', '', 3, 12, 1977, 40, '1977-12-03', '', '14', '', '', 'Telugu', '', '', '', '', '', '9177371749', '', 'dayanand_raju@yahoo.com', 'ap10ba5025', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-01 18:08:20', 0, 0, '0000-00-00 00:00:00', 0, 0),
(105, 'RCM500236', 'Daughter', 'T Maureen Keerthana ', 'Female', '', 14, 8, 1992, 25, '1992-08-14', '', '14', '', '', 'Telugu', '', '', '', '', '', '9885013963', '', 'tvincey@gmail.com', 'mervin1985', '', '', '', 0, '', '', '', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-03 06:13:36', 0, 0, '0000-00-00 00:00:00', 0, 0),
(106, 'RCM500237', 'Son', 'K.Ravi varma', 'Male', '1533208511_20180802_150555.jpg', 7, 4, 1983, 35, '1983-04-07', 'Unmarried', '14', 'Church of South India(C.S.I)', '', 'Telugu', '', '', 'USA', 'USA', '', '9989378927', '', 'ravivarmarcm@gmail.com', 'ravi1234', '', '5ft 7in / 170 cms', '', 0, '', 'MS', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(107, 'RCM500238', 'Daughter', 'PRISCILLA ROSE', 'Female', '1533208568_20180802_164125.jpg', 9, 7, 1990, 28, '1990-07-09', 'Unmarried', '14', ' Others', '', 'Telugu', '', '', 'SECUNDERBAD', 'madhuranagar colony,Neredmet', '', '9703848185', '', 'priscillarcm@gmail.com', 'rose123', '', '5ft 3in / 160 cms', '', 0, '', 'Masters-Degree', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(108, 'RCM500239', 'Daughter', 'PATRICIA', 'Female', '1533209030_20180802_165206.jpg', 16, 12, 1991, 26, '1991-12-16', 'Unmarried', '14', 'Roman Catholic', '', 'Telugu', '', '', 'SECUNDERBAD', 'modis compound', '', '8897914257', '', 'ptriciarcm@gmail.com', 'pat1234', '', '5ft 7in / 169 cms', '', 0, '', 'B.A', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0),
(109, 'RCM500213', 'Father', 'Phani', 'Male', '1533209030_20180802_165206.jpg', 16, 12, 1991, 26, '1991-12-16', 'Unmarried', '14', 'Roman Catholic', '', 'Telugu', '', '', 'SECUNDERBAD', 'modis compound', '', '9701339351', '', 'phanikumar.allanki@gmail.com', '123456', '', '5ft 7in / 169 cms', '', 0, '', 'B.A', 'Employed', '', '', '', '', '', 0, 1, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '2018-08-16 09:44:02', 0, 0, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile_interests`
--

CREATE TABLE `profile_interests` (
  `id` int(11) NOT NULL,
  `viewer_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `interest` tinyint(1) NOT NULL COMMENT '1:Sent;0:Not Sent',
  `interest_sent_on` datetime NOT NULL,
  `sms` tinyint(1) NOT NULL COMMENT '1:Sent;0:Not Sent',
  `sms_sent_on` datetime NOT NULL,
  `shorlist` tinyint(1) NOT NULL COMMENT '1:Yes;0:No',
  `shorlisted_on` datetime NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_interests`
--

INSERT INTO `profile_interests` (`id`, `viewer_id`, `profile_id`, `interest`, `interest_sent_on`, `sms`, `sms_sent_on`, `shorlist`, `shorlisted_on`, `created_on`) VALUES
(1, 243, 239, 1, '2018-08-09 16:02:43', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2018-08-09 10:32:43'),
(2, 243, 119, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '2018-08-09 16:02:50', '2018-08-09 10:32:50'),
(3, 243, 57, 0, '0000-00-00 00:00:00', 1, '2018-08-09 16:02:58', 0, '0000-00-00 00:00:00', '2018-08-09 10:32:58'),
(4, 243, 152, 1, '2018-08-10 13:26:05', 1, '2018-08-09 16:09:32', 0, '0000-00-00 00:00:00', '2018-08-10 07:56:05'),
(5, 243, 236, 0, '0000-00-00 00:00:00', 1, '2018-08-09 16:18:51', 0, '0000-00-00 00:00:00', '2018-08-09 10:48:51'),
(6, 243, 238, 1, '2018-08-09 16:29:31', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2018-08-09 10:59:31'),
(7, 243, 180, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '2018-08-09 16:29:36', '2018-08-09 10:59:36'),
(8, 243, 169, 1, '2018-08-09 18:43:58', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2018-08-09 13:13:58'),
(9, 237, 152, 0, '0000-00-00 00:00:00', 1, '2018-08-11 11:06:30', 0, '0000-00-00 00:00:00', '2018-08-11 05:36:30'),
(10, 0, 236, 1, '2018-08-14 12:33:10', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2018-08-14 07:03:10'),
(11, 241, 152, 0, '0000-00-00 00:00:00', 1, '2018-08-14 13:37:35', 0, '0000-00-00 00:00:00', '2018-08-14 08:07:35'),
(12, 0, 99, 1, '2018-08-16 15:31:33', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2018-08-16 10:01:33'),
(13, 109, 99, 1, '2018-08-16 15:32:24', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2018-08-16 10:02:24'),
(14, 109, 96, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 1, '2018-08-16 15:32:30', '2018-08-16 10:02:30'),
(15, 109, 43, 0, '0000-00-00 00:00:00', 1, '2018-08-16 15:32:34', 0, '0000-00-00 00:00:00', '2018-08-16 10:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `profile_views`
--

CREATE TABLE `profile_views` (
  `guid` int(11) NOT NULL,
  `viewerid` int(30) NOT NULL,
  `pid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_views`
--

INSERT INTO `profile_views` (`guid`, `viewerid`, `pid`) VALUES
(1, 55, 94),
(2, 55, 84),
(3, 55, 75);

-- --------------------------------------------------------

--
-- Table structure for table `provience`
--

CREATE TABLE `provience` (
  `guid` bigint(20) NOT NULL,
  `sid` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provience`
--

INSERT INTO `provience` (`guid`, `sid`, `name`, `dateandtime`) VALUES
(1, 1, 'Andhra Pradesh', '2018-06-26 13:41:27'),
(2, 1, 'Telangana', '2018-06-26 13:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `guid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`guid`, `name`) VALUES
(1, 'B.Tech/B.E'),
(2, 'B.sc'),
(3, 'M.sc'),
(4, 'M.S'),
(5, 'M.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `guid` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `security_key` varchar(50) NOT NULL,
  `reg_id` varchar(15) NOT NULL,
  `profilefor` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `txtDate` varchar(50) NOT NULL,
  `txtMonth` varchar(50) NOT NULL,
  `txtYear` varchar(50) NOT NULL,
  `txtAge` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mtongue` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `dnation` varchar(30) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `txtCity` varchar(50) NOT NULL,
  `txtCaddress` varchar(100) NOT NULL,
  `txtAadhar` varchar(50) NOT NULL,
  `txtPaddress` varchar(100) NOT NULL,
  `txtBtime` time NOT NULL,
  `txtBplace` varchar(100) NOT NULL,
  `txtHeight` varchar(50) NOT NULL,
  `txtComplexion` varchar(50) NOT NULL,
  `txtPstatus` varchar(50) NOT NULL,
  `txtStar` varchar(50) NOT NULL,
  `txtRaasi` varchar(50) NOT NULL,
  `txtPadam` varchar(50) NOT NULL,
  `txtHoromatch` varchar(100) NOT NULL,
  `txtKdosham` varchar(100) NOT NULL,
  `txtAmyself` text NOT NULL,
  `txtFname` varchar(50) NOT NULL,
  `txtFoccupation` varchar(100) NOT NULL,
  `txtMname` varchar(50) NOT NULL,
  `txtMoccupation` varchar(100) NOT NULL,
  `txtBros` varchar(20) NOT NULL,
  `txtSis` varchar(20) NOT NULL,
  `txtSdetsils` varchar(100) NOT NULL,
  `txtNplace` varchar(50) NOT NULL,
  `txtFvalue` varchar(100) NOT NULL,
  `txtFstatus` varchar(50) NOT NULL,
  `txtAfamily` text NOT NULL,
  `txtContact` varchar(50) NOT NULL,
  `txtCdetails` varchar(100) NOT NULL,
  `txtRcity` varchar(50) NOT NULL,
  `txtCliving` varchar(50) NOT NULL,
  `txtEducation` varchar(50) NOT NULL,
  `txtEdetail` varchar(100) NOT NULL,
  `txtEmployed` varchar(50) NOT NULL,
  `txtOccupation` varchar(100) NOT NULL,
  `txtOdetail` varchar(150) NOT NULL,
  `txtAincome` varchar(100) NOT NULL,
  `txtHobbies` varchar(100) NOT NULL,
  `txtInterests` varchar(100) NOT NULL,
  `txtFmusic` varchar(100) NOT NULL,
  `txtFreads` varchar(100) NOT NULL,
  `txtPmovies` varchar(100) NOT NULL,
  `txtSfactivities` varchar(100) NOT NULL,
  `txtFcuisine` varchar(50) NOT NULL,
  `txtPdress` varchar(100) NOT NULL,
  `txtSlanguages` varchar(100) NOT NULL,
  `txtPage` varchar(50) NOT NULL,
  `txtPheight` varchar(50) NOT NULL,
  `txtPlooking` varchar(100) NOT NULL,
  `txtPkdosham` varchar(50) NOT NULL,
  `txtPhysical` varchar(50) NOT NULL,
  `txtPmtongue` varchar(50) NOT NULL,
  `txtPeducation` varchar(50) NOT NULL,
  `txtPeating` varchar(100) NOT NULL,
  `txtPcitizenship` varchar(100) NOT NULL,
  `txtPcliving` varchar(100) NOT NULL,
  `txtPrstatus` varchar(100) NOT NULL,
  `txtApartner` varchar(150) NOT NULL,
  `txtImage1` varchar(150) NOT NULL,
  `txtImage2` varchar(150) NOT NULL,
  `access` enum('Pending','Approved') NOT NULL,
  `amount` varchar(100) NOT NULL,
  `mihpayid` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `bank_ref_num` varchar(100) NOT NULL,
  `activation` date NOT NULL,
  `de_activation` date NOT NULL,
  `package` varchar(30) NOT NULL,
  `profile_views` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_id` varchar(100) NOT NULL,
  `payment_request_id` varchar(100) NOT NULL,
  `created_by` decimal(1,0) NOT NULL,
  `state` varchar(100) NOT NULL,
  `otp` int(11) NOT NULL,
  `otp_flag` tinyint(1) NOT NULL COMMENT '1:Verified;0:Not-verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`guid`, `user_id`, `security_key`, `reg_id`, `profilefor`, `name`, `gender`, `txtDate`, `txtMonth`, `txtYear`, `txtAge`, `religion`, `mtongue`, `caste`, `dnation`, `mobile`, `email`, `password`, `txtCity`, `txtCaddress`, `txtAadhar`, `txtPaddress`, `txtBtime`, `txtBplace`, `txtHeight`, `txtComplexion`, `txtPstatus`, `txtStar`, `txtRaasi`, `txtPadam`, `txtHoromatch`, `txtKdosham`, `txtAmyself`, `txtFname`, `txtFoccupation`, `txtMname`, `txtMoccupation`, `txtBros`, `txtSis`, `txtSdetsils`, `txtNplace`, `txtFvalue`, `txtFstatus`, `txtAfamily`, `txtContact`, `txtCdetails`, `txtRcity`, `txtCliving`, `txtEducation`, `txtEdetail`, `txtEmployed`, `txtOccupation`, `txtOdetail`, `txtAincome`, `txtHobbies`, `txtInterests`, `txtFmusic`, `txtFreads`, `txtPmovies`, `txtSfactivities`, `txtFcuisine`, `txtPdress`, `txtSlanguages`, `txtPage`, `txtPheight`, `txtPlooking`, `txtPkdosham`, `txtPhysical`, `txtPmtongue`, `txtPeducation`, `txtPeating`, `txtPcitizenship`, `txtPcliving`, `txtPrstatus`, `txtApartner`, `txtImage1`, `txtImage2`, `access`, `amount`, `mihpayid`, `status`, `bank_ref_num`, `activation`, `de_activation`, `package`, `profile_views`, `date`, `dateandtime`, `payment_id`, `payment_request_id`, `created_by`, `state`, `otp`, `otp_flag`) VALUES
(19, 'RCM50019', '', '', 'Myself', 'Theresa konda', 'Female', '10', '10', '1991', '26', '14', 'Telugu', '69', '3', '8497992797', 'kondatheresa91@gmail.com', 'queen123', 'Hyderabad ', 'Secuenderabad', 'Secuenderabad', 'Secuenderabad', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'Samson konda', 'Exairforce ', 'Hemima konda', 'Home maker', '', 'Non', '', '', '', '', '', '8497992797', '', '', '', 'B.A', 'cosmetologist', 'Employed', '78', 'Working in Natural s...', '200000', '', '', '', '', '', '', '', '', '', '30', '', '', '', '', '', '', '', '', '', '', '', '1521201686_BeautyPlus_20170223152856_1save.jpg', '1521201686_1513232973_1510313692_BeautyPlus_20170105004826_save1.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-11-09', '2018-08-02 19:57:36', '', '', '0', '', 0, 0),
(20, 'RCM50020', '', '', 'Daughter', 'Bethapudi Sanjhaya Rani', 'Female', '12', '11', '1990', '26', '14', 'Telugu', '67', '', '8919098262', 'sandhyarani072@gmail.com', 'yehova!23', 'hyderabad', 'musheerabad', 'hyderabad', '', '00:00:00', '', '5ft 3in / 159 cms', '', 'Unmarried', '', '', '', '', '', '', 'Sunder Kumar', 'Musician', 'Vijaya', 'Nurse', '', '0', '', '', '', '', 'Small Family no siblings prayer full,from hyderabad', '8919098262', '', '', '', 'B.Sc', '', 'Self Employed', '', 'Busniess', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Prayer full/Business oriented person / from hyderabad city  and telangana prefefred', '1510318503_22279851_1082894075179960_1913895604406211103_n.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-11-10', '2017-11-10 12:55:03', '', '', '0', '', 0, 0),
(22, 'RCM50022', '', '', 'Myself', 'Gera Kiran Kumar', 'Male', '16', '5', '1978', '39', '14', 'Telugu', '69', '', '9885664558', 'kirandesignstudios@gmair.com', 'artist', 'Hyderabad', 'Khairathabad', 'Chirala', '', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'Ravi Gera', 'Retired RTC', 'Home maker', '', '', '', '', '', '', '', 'Traditional family', '9885664558', '', '', '', 'B.Com', '', 'Self Employed', '', 'Multimedia Designer', '350000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Good Family... ', '1511290356_16665142_10206144234483100_3275491972528338855_o.jpg', '1511290356_17757549_10206449950405807_323302307748441131_n.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-11-11', '2017-11-21 18:52:36', '', '', '0', '', 0, 0),
(30, 'RCM50030', '', '', 'Son', 'P. Edwin Dennison', 'Male', '20', '1', '1987', '31', '14', 'Telugu', '67', '3', '9533787024', 'edwin@gmail.com', 'edwin123', 'Hyderabad', 'Sandhya Seriglio Apartment,Dayanand Nagar, Malkajgiri.', '', 'Sandhya Seriglio Apartment,Dayanand Nagar, Malkajgiri.', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'P.Suresh (Late)', 'Bsnl employee ', 'P.Swarnalatha', 'House wife', '', '2', '', '', '', '', 'Good Family.', '', '', '', '', 'B.A', '', 'Employed', '36', 'EDP Incharge', '2,70,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Good Looking', '1528174520_20180605_102424.jpg', '1528112498_IMG-20180604-WA0027.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-11-20', '2018-06-05 04:55:20', '', '', '0', '', 0, 0),
(32, 'RCM50032', '', '', 'Myself', 'Mark Stevenson', 'Male', '27', '12', '1989', '27', '14', 'Telugu', '67', '', '9704153714', 'mark@gmail.com', 'mark123', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 7in / 169 cms', '', 'Unmarried', '', '', '', '', '', '', 'K Sunil Kumar', 'Wesly Degree College', 'K Ratna Sheela', 'Wesly Womens College', '', '1 Sister', '', '', '', '', 'Small Famaly', '', '', '', '', 'Bachelors Degree', '', 'Employed', '', 'ACT-Fiber,', '3L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'must be form Christion family, looking for working women', '1511179644_Sunny.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-11-20', '2017-11-20 12:11:39', '', '', '0', '', 0, 0),
(33, 'RCM50033', '', '', 'Daughter', 'V. Shiny Rachel', 'Female', '2', '5', '1993', '24', '14', 'Telugu', '265', '', '9121011649', 'shiny@gmail.com', 'shiny123', 'Hyderabad', 'Neredmet Cross Roads, Secuenderabad, ', '', 'Hyderabad', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'Sunil Kumar', 'Employ @ ECIL', 'Suguna', 'H.Wife', '', '1 Brother - Professo', '', '', '', '', 'Good family.....', '9491871649', '', '', '', 'Bachelors-Engineering', 'from OU', 'Employed', '', 'Software @ Infosys', '4.5 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'well Educated, employ from any corporate, NRI, must be born again.  ', '1511417021_IMG-20171122-WA0033.jpg', '1511417022_IMG-20171122-WA0034.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-11-21', '2017-11-23 06:03:42', '', '', '0', '', 0, 0),
(42, 'RCM50042', '', '', 'Daughter', 'G.JYOTHIRMAI', 'Female', '9', '1', '1989', '29', '14', 'Telugu', '266', '16', '9440465977', 'prasanthi.samuel@gmail.com', 'jyothormai', 'Badangpet, Hyd', 'Hyderabad', '', 'Nellore\r\n', '00:00:00', '', '5ft 5in / 164 cms', '', 'Unmarried', '', '', '', '', '', '', 'G.samuel', 'Technical officer gov', 'D.n.prasanthi', 'Teacher government', '', '2', '', '', '', '', '', '', '', '', '', 'BE/B.Tech', '', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1520442190_IMG-20171228-WA0001.jpg', '1520442190_IMG-20180222-WA0000.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-01', '2018-03-07 17:03:10', '', '', '0', '', 0, 0),
(45, 'RCM50045', '', '', 'Sister', 'Ashwini Ussaingalla', 'Female', '8', '10', '1987', '30', '14', 'Telugu', '266', '', '7738381410', 'mamta321@gmail.com', 'Veena@321', 'Mumbai', 'Mumbai', '', 'Mumbai', '00:00:00', '', '4ft 11in / 149 cms', '', 'Unmarried', '', '', '', '', '', '', 'Dasharath', 'Retired', 'Satya anusuya', 'Homemaker', '', '4', '', '', '', '', '', '', '', '', '', 'Bachelors Degree', 'Bms', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1512189474_IMG-20171129-WA0007.jpg', '1512189474_IMG-20171129-WA0004.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-02', '2017-12-02 04:37:54', '', '', '0', '', 0, 0),
(47, 'RCM50047', '', '', 'Daughter', 'Sruthy Kathula ', 'Female', '28', '2', '1985', '33', '14', 'Telugu', '267', '11', '9491968044', 'arunakumari.vunnamatla3@gmai.com', 'jesus123', 'Bangalore', 'Banglore...', '', 'Kakinada.Now studying at NIFT,Kannur(M.Design Second Year)Kerala State', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'prabakar rao', 'Aandhra bank manager', 'aruna kumari', 'Aandhra bank manager', '', '2', '', '', '', '', '', '', '', '', '', 'Masters', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Christian believer with Masters aDegree', '1530599463_WhatsApp Image 2018-07-03 at 11.25.58.jpeg', '1530599463_WhatsApp Image 2018-07-03 at 11.24.11.jpeg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-02', '2018-07-03 13:42:21', '', '', '0', '', 0, 0),
(51, 'RCM50051', '', '', 'Daughter', 'RATNA DEEPIKA', 'Female', '15', '6', '1993', '24', '14', 'Telugu', '265', '3', '9294059543', 'prasadbabubodula64@gmail.com', 'Krushika*123', 'VIJAYAWADA', 'TF-2, SRI VYSHNAVI APARTMENT, CNG BUNK LANE, RAMAVARAPPADU, VIJAYAWADA-521108', '825140254230', 'AGF-2, ANKITHA APARTMENT, CNG GAS BUNK LANE, RAMAVAREAPPADU, VIJAYAWADA-521108', '00:00:00', '', '5ft 4in / 163 cms', '', 'Unmarried', '', '', '', '', '', '', 'PRASAD BABU BODULA', 'EMPLOYEE', 'ANITHA', 'HOUSE WIFE', '', '2', '', '', '', '', 'MIDDLE CLASS, VERY RELIGIES', '', '', '', '', 'BE/B.Tech', '', 'Unemployed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'GOVT EMPLOYEE', '1512308455_pic for apply_opt.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-03', '2017-12-26 15:00:39', '', '', '0', '', 0, 0),
(52, 'RCM50052', '', '', 'Son', 'A Rupesh Chandra', 'Male', '18', '6', '1986', '31', '14', 'Telugu', '67', '', '9866423549', 'rcggcnzb@gmail.com', 'Christion', 'Oregon City, USA', 'Oregon City, USA', '', 'Nizamabad', '00:00:00', '', '5ft 5in / 165 cms', '', 'Unmarried', '', '', '', '', '', '', 'Rakesh Chandra ', 'Lecturer @ Govt College, Nizamabad', 'Bharati', 'House Wife', '', '1 Younger Sister (MS', '', '', '', '', 'Well educated, gods fearing family......', '', '', '', '', 'M.Phil', 'M.S (Tele Com) in UK, \r\nM.S (IT) IN USA', 'Other', '', 'Working at Salem, Oregon City, USA.', '8 Lakhs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Im in search of a bride who is a believer, educated, good looking, with Passport.', '1512312487_IMG-20171202-WA0009.jpg', '1512312487_IMG-20171202-WA0010.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-03', '2017-12-03 14:48:07', '', '', '0', '', 0, 0),
(55, 'RCM50055', '', '', 'Daughter', 'Aparanji P', 'Female', '14', '11', '1988', '29', '14', 'Telugu', '67', '3', '9533787024', 'aparanji@gmail.com', 'chinni123', 'Hyd', 'Sandhya Seriglio Apartments,Dayanand Nagar , Malkajgiri.', '', 'Sandhya Seriglio Apartments,Dayanand Nagar , Malkajgiri.', '00:00:00', '', '5ft 2in / 158 cms', '', 'Unmarried', '', '', '', '', '', '', 'P. Suresh (Late)', 'BSNL Employee', 'P.Swarnalatha', 'House Wife', '', '1 Sister-Elder,1 Bro', '', '', '', '', 'Good Family.', '', '', '', '', 'B.A', '', 'Employed', '34', 'Working in HDFC Associate Dealer in Begumpet as Data Entry Operator', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Good Looking,Job Holder', '1527931961_20180602_144546.jpg', '1527923559_IMG-20180602-WA0011.jpg', 'Pending', '500.0', '6764231723', 'success', '7755435011380470', '2018-02-16', '2018-05-16', '2', '40', '2017-12-04', '2018-06-02 09:32:41', '', '', '0', '', 0, 0),
(57, 'RCM50057', '', '', 'Daughter', 'Nakka Divya jyothi', 'Female', '19', '6', '1990', '27', '14', 'Telugu', '67', '', '9948126557', 'nakkajoythi123@gmail.com', 'davidpaul', 'Hyderabad', '12_8_230/3mettguda secuderabad 500017', '', '12_8_230/3 mettuguda secunderbad 500017', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'Nakka David ', 'business', 'Nakka Rathnavall', 'Work in jesus call prayer tower', '', 'One', '', '', '', '', '', '9391338006', '', '', '', 'B.A', 'Computer', 'Employed', '', 'Prayer interseccer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Grace full', '1521540183_1521115679_WhatsApp Image 2018-03-14 at 21.21.43.jpeg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-04', '2018-03-20 10:03:03', '', '', '0', '', 0, 0),
(58, 'RCM50058', '', '', 'Sister', 'Choppala Prashanthi', 'Female', '25', '11', '1987', '30', '14', 'Telugu', '69', '', '9703028515', 'Peace_2308@ymail.com', 'Chinnu', 'Hyderabad', 'NIZAMPET Hyderabad', '', 'NIZAMPET Hyderabad', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'Ch. Prabhakar', 'No more', 'Sujatha', 'Housewife', '', '2', '', '', '', '', 'Father passed away one elder sister and one younger sister completed graduation & working as CRM in ICICI Gachbwli ', '9703028515', '', '', '', 'B.Com', '', 'Employed', '35', 'CRM in ICICI Bank Gachbwli ', '2.4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Should be  a good believer,understanding person and should mingle with our family', '1512460729_user.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-04', '2017-12-13 11:55:58', '', '', '0', '', 0, 0),
(63, 'RCM50063', '', '', 'Brother', 'K.ravichandra', 'Male', '12', '12', '1983', '34', '14', 'Telugu', '266', '5', '8297881827', 'kavalakuntlaraviteja@gmail.com', 'raviteja456', 'bangulore', 'sarjapure road,wipro oppisite,halnahakalli,bangulore,karnataka', '', 'sarjapure road,wipro oppisite,halnahakalli,bangulore,karnataka', '00:00:00', '', '5ft 9in / 174 cms', '', 'Unmarried', '', '', '', '', '', '', 'k.polaiah', 'rtd dcc bank  manager employee', 'k.meramma', 'house wife', '', 'three brothers and o', '', '', '', '', 'we are came from middle class with traditional family and catholic settled family(hindu also consider).', '9703108422', '', '', '', 'Bachelors-Engineering', 'B-Tech(EEE),MBA', 'Other', '25', 'assistent manager  in control and schematic ltd at hyderabad', '4lacks', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'educated family and mingle with my family and good understanding bride down to earth.', '1523870716_IMG-20180416-WA0038.jpg', '1521476572_IMG_20160608_141037323.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-08', '2018-04-16 09:25:16', '', '', '0', '', 0, 0),
(65, 'RCM50065', '', '', 'Daughter', 'Nallaballe suvishesini prathyusha ', 'Female', '26', '11', '1990', '27', '14', 'Telugu', '279', '3', '9290203057', 'aremsuchitra.vijay@gmail.com', 'SUXHIvijay', 'Kadapa', 'H/no 15/195,near vcn colony, ymr colony, Proddatur ', '', 'H/no 15/195,near vcn colony, ymr colony, Proddatur ', '00:00:00', '', '5ft 1in / 155 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BDS', '', 'Employed', '37', '250000', '250000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1513268986_img006-1.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-11', '2018-03-21 10:08:53', '', '', '0', '', 0, 0),
(66, 'RCM50066', '', '', 'Brother', 'Parchuri Nageswara Rao', 'Male', '24', '10', '1988', '29', '14', 'Telugu', '280', '32', '9848591648', 'pgministries9999@gmail.com', 'shalemraju', 'Guntur', 'Mangaldas Nagar 2 nd lane, Guntur-522001', '', '', '00:00:00', '', '5ft 8in / 172 cms', '', 'Unmarried', '', '', '', '', '', '', 'Anand', 'Private job', 'Sarala', 'House wife', '', '3', '', '', '', '', 'Elder brother married', '', '', '', '', 'B.Sc', 'Cardiology technician, DMIT', 'Employed', '17', 'Hospital manager at Satya Hospital old Guntur Guntur Andhra Pradesh India', '300000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1513161595_IMG-20171126-WA0010.jpg', '1532496316_1511783973_IMG-20171126-WA0009.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-12', '2018-07-25 05:25:16', '', '', '0', '', 0, 0),
(71, 'RCM50071', '', '', 'Myself', 'Bharathi', 'Female', '25', '6', '1988', '30', '14', 'Telugu', '267', '16', '7337250917', 'Bharathi.jalluri02@gmail.com', '9177086487', 'Vizag', '44-1-35/2,\r\nLakshminarayana puram, kailasapuram road', '', '44-1-35/2,\r\nLakshminarayana puram, kailasapuram road', '00:00:00', '', '5ft 4in / 163 cms', '', 'Unmarried', '', '', '', '', '', '', 'Baburao', 'Civil works', 'Jessi', 'Homemaker', '', '2', '', '', '', '', '', '', '', '', '', 'BE/B.Tech', 'Computer science engineering', 'Unemployed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1531752790_20180716_202120.jpg', '1531752605_20180716_201354.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-16', '2018-07-16 14:53:10', '', '', '0', '', 0, 0),
(72, 'RCM50072', '', '', 'Myself', 'Naveen Kumar', 'Male', '9', '5', '1991', '26', '14', 'Telugu', '279', '9', '9494025548', 'panditnaveenkumar2@gmail.com', '9959732344', 'anantapur', '', '', '', '00:00:00', '', '5ft 11in / 181 cms', '', 'Unmarried', '', '', '', '', '', '', 'P E Deva kumar', 'govt retried employee', 'Ruth mary', 'home maker', '', '1', '', '', '', '', '', '', '', '', '', 'B.Com', 'Doing MBA', 'Employed', '12', 'Admin dept at private school', '10000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1513444751_IMG_20171210_202208.jpg', '1513444751_IMG_20171212_115331_724.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-16', '2017-12-16 17:19:11', '', '', '0', '', 0, 0),
(74, 'RCM50074', '', '', 'Myself', 'Dipak', 'Male', '12', '11', '1983', '34', '14', 'Marathi', '69', '18', '9096554994', 'dipak777@gmail.com', 'holypurejesus', 'Pune', 'Dhanori-Lohagoan', '776915839320', 'Dhanori-Lohagoan', '00:00:00', '', '5ft 7in / 170 cms', '', 'Unmarried', '', '', '', '', '', '', 'Mahadev', 'Retired', 'Kamal', 'Housewife', '', '2', '', '', '', '', '', '9834438778', '', '', '', 'B.Com', '', 'Self Employed', '34', 'Full-time ministry', '58000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1518461809_1514525726974.jpg', '1518461809_1514525720714.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-17', '2018-02-12 18:56:49', '', '', '0', '', 0, 0),
(75, 'RCM50075', '', '', 'Myself', 'D.Bhakth Singh', 'Male', '20', '8', '1987', '30', '14', 'Telugu', '279', '26', '9848542510', 'domathoti87@gmail.com', 'sunder', 'Hyderabad', 'Choutuppal, Hyderabad', '', 'Nagarvapadu, Gudivada, Krishna Dist.', '00:00:00', '', '5ft 9in / 174 cms', '', 'Unmarried', '', '', '', '', '', '', 'REv. Bhaktha Raju', 'God Servant', 'Veronica', 'Home maker', '', '2', '', '', '', '', 'God fearing family, grown under  strict discipline .  Professionally well settled family.', '9010724566', '', '', '', 'Masters-Degree', 'MBA ( Marketing & HR )', 'Employed', '41', 'Business Development Manager', '3,20,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'God Fearing. Well educated.', '1513589418_14192737_10210340538180454_4186117794437820506_n.jpg', '1513589418_22426381_10214228869786314_6774615038777520128_o.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-18', '2017-12-18 09:59:16', '', '', '0', '', 0, 0),
(76, 'RCM50076', '', '', 'Sister', 'Anoohya', 'Female', '19', '8', '1993', '24', '14', 'Telugu', '265', '3', '8121644262', 'Anoohya@gmail.com', 'gmail123', 'Karimnagar', 'Hydearbad', '', 'Karimnagar', '00:00:00', '', '5ft 4in / 163 cms', '', 'Unmarried', '', '', '', '', '', '', 'Sri Gotte summababu (Late)', 'ZPTC school', 'Jayasri ', 'Tahsildar', '', 'No', '', '', '', '', 'Well settled & Well educated family.......... ', '', '', '', '', 'Masters-Degree', '', 'Unemployed', '34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1513592768_IMG-20171218-WA0008.jpg', '1513592768_IMG-20171218-WA0009.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-18', '2018-03-21 10:07:19', '', '', '0', '', 0, 0),
(78, 'RCM50078', '', '', 'Daughter', 'G Samata Kumari', 'Female', '31', '12', '1986', '31', '14', 'Telugu', '279', '30', '9916011072', 'robertdanams@gmail.com', 'suneethi', 'Bangalore', 'kadubesanahalli, bangalore', '', 'netaji colony NAD post Visskhspatnam 530009', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'GRC Danams', 'Rtd Office Supdt Naval Dept vizag', 'Suneethi Kumari', 'Rtd Teacher', '', 'two elder sisters ma', '', '', '', '', 'borne in christian family.  god fearing girl. native visakhapatnam', '', '', '', '', 'BE/B.Tech', 'B.Tech Computer Science Engineering', 'Employed', '4', 'Technical Manager', '16 lakhs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'B Tech or M.Tech should be god fear man.  regular church going.  preferbly working in software side and working in bangalore or hyderabad', '1532359240_1530600056_WhatsApp Image 2018-07-03 at 11.28.21a.jpg', '1532359240_1530600056_WhatsApp Image 2018-07-03 at 11.28.21.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2017-12-19', '2018-07-23 15:21:53', '', '', '0', '', 0, 0),
(88, 'RCM50088', '', '', 'Sister', 'Dirisam Hepsiba ', 'Female', '16', '10', '1984', '33', '14', 'Telugu', '279', '32', '8790793726', 'hepsid@gmail.com', 'dirisam3', 'near Machilipatnam ', 'Pasumarru po., Pamarru Mdl.', '', 'Pasumarru po. Pamarru Mdl ', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1516865361_3-1.jpg', '1516865639__20171226_185217.JPG', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-01-25', '2018-01-25 07:33:59', '', '', '0', '', 0, 0),
(94, 'RCM50093', '', '', 'Son', 'Marati S Kamalakar', 'Male', '9', '9', '1991', '26', '14', 'Telugu', '279', '3', '9440523920', 'Kamalakar@gmail.com', 'Kamalakar', 'Hyderabad', 'Hyderabad', '', 'Krupa Complex, Malkajgiri, Hyd.', '00:00:00', '', '5ft 10in / 177 cms', '', 'Unmarried', '', '', '', '', '', '', 'Stevenson', 'Rted. RTC Mechanicla Engeener', 'Nirmala', 'Sr. Cluark BSNL', '', '1 Elder Brother (BDS', '', '', '', '', 'Blessed Small Family.........', '8919670699', '', '', '', 'Management-Degree', 'MBA Finance...', 'Employed', '35', 'Take Support', '2.5L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Must be well educated & Employ....', '1519822130_008.jpg', '1519821723_009.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-02-15', '2018-02-28 12:48:50', '', '', '0', '', 0, 0),
(95, 'RCM50095', '', '', 'Sister', 'Vinay Kumari', 'Female', '3', '3', '1983', '35', '14', 'Telugu', '67', '3', '9866217313', 'vinaykumari85@gmail.com', 'vinay', 'Hyderabad', 'Neredmet, Secunderabad, Hyd.', '', 'HYD', '00:00:00', '', '5ft 1in / 156 cms', '', 'Unmarried', '', '', '', '', '', '', 'K Christopher (Late)', 'Retd. R.T.C', 'K Devamani', 'House wife', '', '2', '', '', '', '', 'Good, small family, Believers in God..... ', '9866314578', '', '', '', 'Masters-Degree', 'M.B.A', 'Employed', '4', 'Working in Delloitte... as Sr.Analyst', '3.5 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'must be Employed ', '1518764720_IMG-20180215-WA0003.jpg', '1518765030_1518764720_IMG-20180215-WA0002.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-02-16', '2018-07-26 09:59:30', '', '', '0', '', 0, 0),
(96, 'RCM50096', '', '', 'Friend', 'Mayuri Akula', 'Female', '27', '12', '1986', '31', '14', 'Telugu', '267', '16', '8121609670', 'mayuri@gmail.com', 'mayuri', 'Hyderabad', 'Ramnagar, Hyderabad', '', 'Jangaon, TS', '00:00:00', '', '5ft 1in / 156 cms', '', 'Unmarried', '', '', '', '', '', '', 'A Rajaveeru (Late)', 'Pravate', 'A Sampoorna', 'Govt. Employee', '', '1 Brother (Govt.Empl', '', '', '', '', 'God is head of our Family..... & good well educated family.', '9866565962', '', '', '', 'BE/B.Tech', 'M- Tech Biotechnology, JNTU hyd.', 'Employed', '20', 'Junior Ass in Agriculture Dept.', '4.2 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Must be well educated & Good christian family ', '1518766086_IMG-20180216-WA0000.jpg', '1518766086_IMG-20180216-WA0000.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-02-16', '2018-03-17 11:37:17', '', '', '0', '', 0, 0),
(98, 'RCM50097', '', '', 'Brother', 'Sunny ', 'Male', '27', '5', '1986', '31', '14', 'Telugu', '266', '3', '9949665676', 'Vanitha_samuel2003@yahoo.com', 'muskan4u', 'Hyderabad', 'Na', '123456789012', 'Na', '00:00:00', '', '5ft 7in / 169 cms', '', 'Unmarried', '', '', '', '', '', '', '', 'Retd', '', 'House wife', '', '1 sister Married', '', '', '', '', 'Nuclear Family\r\nLoving\r\nCaring', '', '', '', '', 'Masters', '', 'Employed', '34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-02-16', '2018-02-16 17:47:40', '', '', '0', '', 0, 0),
(99, 'RCM50099', '', '', 'Daughter', 'Sruthi K', 'Female', '22', '5', '1985', '33', '14', 'Telugu', '67', '3', '9247290712', 'arkcovenant1@gmail.com', 'trinity3', 'Hyderabad', '', '', '', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'Surender K', 'Retired', 'Ranjini Surender', 'House wife', '', '2', '', '', '', '', '', '', '', '', '', 'Masters', '', 'Unemployed', '25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'well educated. masters and above. good family. god fearing and good character.', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-02-17', '2018-07-16 08:37:40', '', '', '0', '', 0, 0),
(103, 'RCM500103', '', '', 'Son', 'E David Shashi Raj', 'Male', '19', '1', '1987', '31', '14', 'Tamil', '276', '3', '9542229957', 'david@gmail.com', 'gmail123', 'Hyderabad', 'Hyd', '', 'Hyd', '00:00:00', '', '5ft 9in / 174 cms', '', 'Unmarried', '', '', '', '', '', '', 'Samson', 'Placement Officer', 'Indira Solome (Late)', 'Retd. From AP Tourism', '', 'No.', '', '', '', '', 'Believers family... ...........................', '9866217313', '', '', '', 'Masters-Degree', 'HR / Marketing ', 'Employed', '41', 'As a Recruitment manager', '4.5 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking from Education department...\r\n', '1519725703_WhatsApp Image 2018-02-27 at 15.27.34.jpeg', '1519725703_500103.jpeg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-02-19', '2018-02-27 10:01:43', '', '', '0', '', 0, 0),
(109, 'RCM500109', '', '', 'Myself', 'K.Manasa', 'Female', '30', '5', '1990', '27', '14', 'Telugu', '267', '3', '9701851481', 'sonumanasa30@gmail.com', 'manasa30', 'secunderbad', 'H.No 10-5196/9 Thukaramgate North lallaguda secunderbad', '394049295513', '', '00:00:00', '', '5ft 2in / 157 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Other', 'MBA', 'Employed', '34', 'Process associate', '1,80,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1520048446_IMG-20180303-WA0002.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-03', '2018-03-05 05:55:02', '', '', '0', '', 0, 0),
(112, 'RCM500112', '', '', 'Sister', 'Swarnalatha', 'Female', '10', '12', '1985', '32', '14', 'Telugu', '270', '16', '9440788822', 'deeprabha34@gmail.com', 'police100', 'Hyderabad', 'Secunderabad', '', 'Secunderabad', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'Late p Paul Abraham', 'Police Dept', 'Santha kumari', 'Homemaker', '', '2 brothers', '', '', '', '', 'One brother married', '9160045115', '', '', '', 'B.Com', '', 'Employed', '43', 'Air ticket executive', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Simple God fearing, etc', '1521289908_DSC_04541.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-03', '2018-03-19 07:19:44', '', '', '0', '', 0, 0),
(113, 'RCM500113', '', '', 'Brother', 'B.RAVI KUMAR ', 'Male', '2', '11', '1983', '34', '14', 'Telugu', '266', '28', '9866633519', 'vr7.ravi@gmail.com', 'ravi0702', 'Hyderabad ', '', '', '', '00:00:00', '', '5ft 5in / 164 cms', '', 'Unmarried', '', '', '', '', '', '', 'B shivram', 'Central Govt. Rtd', '', 'Home maker', '', '2', '', '', '', '', '', '', '', '', '', 'Masters-Degree', '', 'Employed', '57', 'Working in Cognizant as  Team Leader in IT', '7,00,000 P A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Should be good looking, working professional,  should be more like a best friend supporting me n understanding me in all situations ', '1528302805_20180606_220215.jpg', '1528295288_IMG-20180606-WA0003.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-03', '2018-07-25 07:03:37', '', '', '0', '', 0, 0),
(115, 'RCM500115', '', '', 'Sister', 'Sowjanya Battu', 'Female', '29', '11', '1987', '30', '14', 'Telugu', '279', '26', '8125880036', 'naveenpaulbattu@gmail.com', 'bjpratap', 'Hyderabad', 'Netaji nagar, A.G.Colony, ESI', '', 'Guntur', '00:00:00', '', '5ft 3in / 159 cms', '', 'Unmarried', '', '', '', '', '', '', 'Jaya Pratap Battu', 'Contractor', 'Jaya Battu', 'Teacher but now home maker', '', '2 brothers(elder and', '', '', '', '', 'We are very close netted family with GOD being host of our house', '9063118100', '', '', '', 'Ph.D', '', 'Employed', '2', 'Assistant Professor', '4 lakhs per annum', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Good job, family values and born again', '1520175326_20171225_141034.jpg', '1520175326_20170708_181736.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-04', '2018-03-04 14:55:26', '', '', '0', '', 0, 0),
(116, 'RCM500116', '', '', 'Sister', 'V Sunitha', 'Female', '4', '1', '1982', '36', '14', 'Telugu', '279', '26', '9441676573', 'voletikn@rediffmail.com', 'kiranv8*', 'Hyderabad', 'Hyderabad-500020', '', 'Hyderabad-500020', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'V S V RAJA RAO', 'Rtd. Railway Employee', 'V Bujjamma', 'House Wife', '', '2', '', '', '', '', 'Good Spiritual, respectful, valued, Helpful, Strong belief in God, ', '', '', '', '', 'BE/B.Tech', '', 'Employed', '25', 'Sr. CAD Engineer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Good family values, Educated, Believer, Respect, ', '1520188479_C4930--579--4x6--20002.JPG', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-04', '2018-03-04 18:34:39', '', '', '0', '', 0, 0),
(117, 'RCM500117', '', '', 'Myself', 'Dr. Lesley l', 'Male', '20', '5', '1986', '32', '14', 'Telugu', '67', '28', '9573094875', 'lesleylinus@gmail.com', 'linus', 'Hyderabad', 'Hyderabad', '', '', '00:00:00', '', '6ft 2in / 187 cms', '', 'Unmarried', '', '', '', '', '', '', 'Raja Rao (Late)', 'Agriculture Dept', 'Esther Vagara kumari', 'H.M (Rtired) ', '', '2 Elder Brother', '', '', '', '', 'ref; stevenson,moulali', '8978469095', '', '', '', 'MBBS', 'M.D', 'Employed', '26', 'Working in multi-specialty hospital', '15 L  (PA)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MBBS', '', '', '', '', 'God Fearing , good Family and prefer C.S.I', '1520402497_004.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-07', '2018-08-01 08:26:20', '', '', '0', '', 0, 0),
(118, 'RCM500118', '', '', 'Son', 'Winston Krupasindh', 'Male', '7', '4', '1986', '32', '14', 'Telugu', '265', '3', '9885864083', 'winston@gmail.com', 'winston', 'Hyderabad', 'Hyderabad', '', '', '00:00:00', '', '5ft 7in / 169 cms', '', 'Unmarried', '', '', '', '', '', '', 'Wesley Anil kumar', '(Reted)', 'Deva Krupauavma ', '(Reted)', '', '1 Brother', '', '', '', '', 'ref; stevenson,moulali', '9885548140', '', '', '', 'B.Com', '', '', '41', 'Asst Manger in H.S.B.C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1520403516_002.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-07', '2018-07-26 08:53:55', '', '', '0', '', 0, 0),
(119, 'RCM500119', '', '', 'Sister', 'Dolly Evenjilena ', 'Female', '4', '7', '1990', '28', '14', 'Telugu', '276', '4', '8179648351', 'glory.varshareddy89@gmail.com', 'Glory$2503reddy', 'Secunderbad ', 'Secunderabad\r\n', '993614033657', 'Secunderabad', '00:00:00', '', '5ft 0in / 153 cms', '', 'Unmarried', '', '', '', '', '', '', 'G. Rayappa Reddy ', 'Business ', 'Elizabeth ', '', '', '2', '', '', '', '', '', '', '', '', '', 'B.Com', '', 'Employed', '35', '', '500000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Non smoker and non alcoholic,\r\nlooking for reddys...', '1532596166_1532580360_Dolly 20180210_203738.jpg', '1532580360_Dolly 20180210_203738.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-07', '2018-07-26 09:10:52', '', '', '0', '', 0, 0),
(120, 'RCM500120', '', '', 'Daughter', 'Ruth Angeleena', 'Female', '19', '9', '1989', '28', '14', 'Telugu', '279', '3', '9396792666', 'ruthangeleena@gmail.com', 'ruthangeleena', 'Kothagudem', 'Kothagudem', '', 'Kothagudem', '00:00:00', '', '5ft 3in / 160 cms', '', 'Unmarried', '', '', '', '', '', '', 'Samson ', 'Business', 'Christumani', 'Teacher', '', '1 Brother', '', '', '', '', '', '', '', '', '', 'B.Com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1520421267_005.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-07', '2018-03-07 11:50:11', '', '', '0', '', 0, 0),
(121, 'RCM500121', '', '', 'Daughter', 'Sravani', 'Female', '13', '10', '1990', '27', '14', 'Telugu', '67', '3', '9642568857', 'sravani@gmail.com', 'sravani', 'Huzur Nagar', 'Huzur Nagar LB Nagar , Hyd ', '', '', '00:00:00', '', '4ft 5in / 134 cms', '', 'Unmarried', '', '', '', '', '', '', 'G. Shantaiah', 'Asst Fire Officer', 'Amurtha (Late)', '', '', '1 Elder Sister And 2', '', '', '', '', '', '', '', '', '', 'Other', 'Seeking For Job', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Well Settled', '1520422658_006.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-07', '2018-03-07 11:37:38', '', '', '0', '', 0, 0),
(122, 'RCM500122', '', '', 'Son', 'Ratna Paul Saka', 'Male', '16', '6', '1989', '28', '14', 'Telugu', '279', '34', '9492531852', 'saka03s@gmail.com', 'srpoucse', 'Atlanta Unite States of America', 'Sunway Opus Grand Nivelle,Phase 3B,H402,403,Miyapur Bachupally Road,Ameenpur,Near Sree Chaitanya Deg', '', 'Sunway Opus Grand Nivelle,Phase 3B,H402,403,Miyapur Bachupally Road,Ameenpur,Near Sree Chaitanya Deg', '00:00:00', '', '5ft 9in / 176 cms', '', 'Unmarried', '', '', '', '', '', '', 'S D KAMALAKAR', 'BUSINESS', 'P SOBHA JYOTHI', 'HOUSE WIFE', '', '1 SISTER MARRIED(WOR', '', '', '', '', '', '', '', '', '', 'Bachelors-Engineering', 'COMPUTER SCIENCE IN OSAMANI UNIVERSITY', 'Employed', '4', 'SENIOR SOFTWARE ENGINEER IN VM WARE ATLANTA', '50LAKHS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'My Partner:  \r\nLooking for a\r\n1. Born Again Christian girl.\r\n2. Should have passion to serve jesus.\r\n3. Well Educated and should have good family valu', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-07', '2018-03-07 13:56:13', '', '', '0', '', 0, 0),
(125, 'RCM500125', '', '', 'Myself', 'Uday kiran ', 'Male', '25', '4', '1989', '28', '14', 'Telugu', '266', '18', '7032252698', 'kuday7363@gmail.com', 'udaykiran', 'Hyderabad', 'Jeedimetla', '', 'Jeedimetla ', '00:00:00', '', '5ft 10in / 179 cms', '', 'Unmarried', '', '', '', '', '', '', 'Bhushananm', 'Employee ', 'Vani', 'House wife', '', '1', '', '', '', '', '', '', '', '', '', 'B.Com', '', 'Self Employed', '14', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-10', '2018-03-10 07:16:21', '', '', '0', '', 0, 0),
(127, 'RCM500127', '', '', 'Daughter', 'D. Kavitha ', 'Female', '28', '7', '1992', '25', '14', 'Telugu', '265', '18', '8374640254', 'kavitha@gmail.com', 'Kavithad', 'Hyderabad', ' Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 2in / 158 cms', '', 'Unmarried', '', '', '', '', '', '', 'Narsing Rao', 'Railway Employee ', 'Rama', 'House Wife', '', '2 elder Brothers', '', '', '', '', 'Good family.... ', '8019108172', '', '', '', 'Management-Degree', 'M>B>A ', 'Self Employed', '2', 'Teaching Tutions at Home', '10,000 PM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Must be from Well settled family.... ', '1528626976_BeautyPlus_20180610155821606_save.jpg', '1528626976_IMG_20180610_160438.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-12', '2018-06-10 10:36:16', '', '', '0', '', 0, 0),
(129, 'RCM500129', '', '', 'Daughter', 'PRATHIBHA ', 'Female', '13', '6', '1988', '30', '15', 'Telugu', '', '4', '9849359085', 'prathibhajannu@gmail.com', 'prathibha', 'Hyderabad', 'Hyderabad', '', '', '00:00:00', '', '5ft 2in / 157 cms', '', 'Unmarried', '', '', '', '', '', '', 'Dr.Jannu Prasangi', 'Senior Public Prosecutor (Retd) Practicing as an Advocate in High Court  Of Andhra Pradesh, Hyderaba', 'Dr.Maria Kala', 'Associate Professor,Govt. Medical College. Presently working as Professor in Pvt. Medical College, H', '', '2 Sister', '', '', '', '', '', '9949290599', '', '', '', 'BL/LLB', 'LL.M from NALSAR University, Hyderabad. MBA from Periyar University,Chennai. P.G. Diploma in AVIATIO', 'Employed', '7', 'Working as ASST. MANAGER (LAW) in Central Government ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' Tall and Handsome with good habits and moral values settled in and around Hyderabad Preferred', '1532614446_20180726_193747.jpg', '1532614446_20180726_193849.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-13', '2018-07-30 04:38:45', '', '', '0', '', 0, 0),
(131, 'RCM500131', '', '', 'Daughter', 'KARUNA LATHA', 'Female', '25', '7', '1982', '35', '14', 'Telugu', '266', '32', '9505706692', 'admin@gmail.com', '2klikes', 'Mahabub Nagar - (Dist)', 'Mahabub Nagar - (Dist)', '', 'Mahabub Nagar - (Dist)', '00:00:00', '', '', '', 'Unmarried', '', '', '', '', '', '', 'DJ John (Late)', '', 'Sunitha John ', 'Teacher (Retd)', '', '2 Sister (Married)', '', '', '', '', '', '9676991269', '', '', '', 'MA', 'MSC MED', 'Employed', '', 'Teacher (Kasturiba) (Marredpally)', '25000', '', '', '', '', '', '', '', '', '', '', '5ft 3in / 159 cms', '', '', '', '', '', '', '', '', '', 'Well Educated Family', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-13', '2018-03-13 09:53:21', '', '', '0', '', 0, 0),
(132, 'RCM500132', '', '', 'Myself', 'KOSURI SURESH', 'Male', '26', '9', '1989', '28', '14', 'Telugu', '281', '34', '9676771322', 'ssureshsarala@gmail.com', 'suresh123', 'KAKINADA', 'KAKINADA', '', 'KAKINADA', '00:00:00', '', '5ft 5in / 166 cms', '', 'Unmarried', '', '', '', '', '', '', 'VEERACHARYULU', 'CARPENTER', 'LAKSHMI', 'HOUSEWIFE', '', '', '', '', '', '', '', '', '', '', '', 'B.Com', '', 'Employed', '9', 'GRAPHIC DESIGNER', '240000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'I am looking to marry a career-oriented, Christian girl who is financially independent, strong-willed, and has a strong network of family and friends.', '1520942325_13418686_1122948827763036_1618490591722654683_n.jpg', '1520942325_13051505_1097725013618751_5997526154037835028_n.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-13', '2018-03-14 18:18:19', '', '', '0', '', 0, 0),
(137, 'RCM500137', '', '', 'Brother', 'K J Pradeep', 'Male', '31', '10', '1982', '35', '14', 'Telugu', '67', '9', '9030260403', 'srideepthi.sahai@gmail.com', 'gracemercy', 'Hyderabad', 'S R 30 Seetha Ram Nagar Safilguda Hyd 500056', '', 'S R 30 Seetha Ram Nagar Safilguda Hyd 500056', '00:00:00', '', '5ft 8in / 172 cms', '', 'Unmarried', '', '', '', '', '', '', 'K Sahai Albert', 'Southern Railways Employee', 'K Suchitra Sahai', 'Home maker', '', '1 younger brother 1 ', '', '', '', '', 'A family of 5. Father works for Railways mother worked for Procter & Gamble for 22 yrs later taken VRS now is a happy home maker. Blessed with 3 children, 2 sons and 1 daughter. Well educated and well settled. ', '8125110711', '', '', '', 'Bachelors Degree', 'Computers', 'Business', '45', 'Event management company ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking for a girl who is educated, working or not working, God fearing. ', '1523029388_IMG_20180402_150152_175.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-15', '2018-04-06 15:43:08', '', '', '0', '', 0, 0),
(138, 'RCM500138', '', '', 'Myself', 'Nagarjuna Kalapala', 'Male', '6', '7', '1990', '27', '14', 'Telugu', '266', '26', '9000013280', 'nagarjunak4@gmail.com', 'sulekhanag@143', 'Hyderabad', '18-8-254 /92 New Rakshapuram Colony Kanchanbagh', '947697929575', '18-8-254 /92 New Rakshapuram Colony\r\nKanchanbagh', '00:00:00', '', '5ft 2in / 157 cms', '', 'Unmarried', '', '', '', '', '', '', 'Ramesh Babu Kalapala', 'Casual employe in DRDO', 'Mary Kumari Kalapala', 'Home maker', '', 'No siblings', '', '', '', '', 'We r small family with godly fear.. Need to have wife who is spiritual in Jesus Christ.. ', '', '', '', '', 'BE/B.Tech', 'Electronics and communication engineering', 'Employed', '25', 'Engineer in Advanced Systems Laboratory (ASL) Min. Of Defence near Kanchanbagh', '2.5 Lakhs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need to have a wife who is spiritual in Jesus Christ.. Need to take care of my parents along with her family.. ', '1521265064_IMG-20180225-WA0008.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-15', '2018-03-17 05:37:44', '', '', '0', '', 0, 0),
(139, 'RCM500139', '', '', 'Myself', 'Vajrakumar', 'Male', '5', '3', '1991', '27', '14', 'Telugu', '265', '37', '9550299970', 'vajrakumar211@gmail.com', 'randy@9970', 'Paloncha', 'Ambethker colony new petrol bunk paloncha', '442295864449', 'Ambethker colony new petrol bunk paloncha', '00:00:00', '', '5ft 11in / 180 cms', '', 'Unmarried', '', '', '', '', '', '', 'Shanthaiah', 'Contractor', 'Kamala', 'House wife', '', 'Sister', '', '', '', '', 'By his grace we are happy with christ', '', '', '', '', 'B.Com', 'Degree', 'Self Employed', '10', 'Business', '300000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'I want believer and good   family believer background . . ', '1521171020_1521137307_FB_IMG_1521136703172.jpg', '1521171020_1521137307_FB_IMG_1521136721454.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-15', '2018-03-16 03:30:20', '', '', '0', '', 0, 0),
(140, 'RCM500140', '', '', 'Son', 'Daiva', 'Male', '9', '4', '1988', '29', '14', 'Telugu', '67', '3', '9010322771', 'daiva137@gmai.com', '9010322771', 'Hyderabad ', '', '', '', '00:00:00', '', '5ft 7in / 170 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Bachelors-Engineering', '', 'Employed', '25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-16', '2018-03-16 05:46:48', '', '', '0', '', 0, 0),
(141, 'RCM500141', '', '', 'Myself', 'Tony Sohan kumar', 'Male', '4', '10', '1979', '38', '14', 'Kannada', '69', '18', '8050255180', 'sohan_886@yahoo.co.in', 'christ@777', 'Mysore', '#3108 1st main road\r\nYadavagiri', '', '#3108 1st main road\r\nYadavagiri', '00:00:00', '', '5ft 10in / 177 cms', '', 'Unmarried', '', '', '', '', '', '', 'Tony', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1521181167_rcm500141.jpg', '1521180489_Screenshot_20180304-190233.png', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-16', '2018-03-16 06:19:27', '', '', '0', '', 0, 0),
(143, 'RCM500143', '', '', 'Myself', 'Kishore ', 'Male', '9', '11', '1988', '29', '14', 'Telugu', '267', '27', '9014441075', 'kishoreelamakanti0911@gmail.com', 'kishore@143', 'Hyderabad ', 'Plot no-196,  shiva puri colony,  manikonda, Hyderabad ', '', 'Same as above', '00:00:00', '', '5ft 5in / 164 cms', '', 'Unmarried', '', '', '', '', '', '', 'Elisha', 'Govt employed ', 'Vijaya', 'House wife ', '', '2', '', '', '', '', 'Good family believe in jesus', '', '', '', '', 'B.Com', 'Mba', 'Employed', '4', 'Sr.excutive', '3 lakhs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'She must be prayer full girl', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-16', '2018-03-17 05:55:50', '', '', '0', '', 0, 0),
(146, 'RCM500146', '', '', 'Myself', 'Y Vinit Kumar', 'Male', '1', '1', '1987', '31', '14', 'Telugu', '265', '3', '9346120011', 'yalakula1957@gmail.com', 'Vinit', 'Hyderabad', 'Bolaram, Hyd - 500010', '', 'hyd', '00:00:00', '', '5ft 7in / 170 cms', '', 'Unmarried', '', '', '', '', '', '', 'Y Vijaya Kumar', 'Orientual Insurance Pvt.Ltd', 'Mary Lalitha', 'House Wife', '', '1 Sister (Married) ', '', '', '', '', 'Good, God fearing family......   ................', '', '', '', '', 'Management-Degree', '', 'Employed', '41', 'Working For Google Inc. @ Hi-Tech City, HYD.', '600000 PA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1521436898_IMG-20180207-WA0004.jpg', '1521436898_IMG-20180207-WA0003.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-19', '2018-03-19 05:21:38', '', '', '0', '', 0, 0),
(147, 'RCM500147', '', '', 'Son', 'Dr. T Isaac', 'Male', '6', '9', '1987', '30', '14', 'Telugu', '265', '3', '9247317531', 'isaac@gmail.com', 'isaac', 'Hyderabad', 'Neredmet, Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 6in / 168 cms', '', 'Unmarried', '', '', '', '', '', '', 'T Prakash Kumar', 'AC Engeenear', 'BC Charlet ', ' Rted. Railways, Sec-Bad.', '', '1 Sist. (Married)', '', '', '', '', 'Small, Well educated & God fearing family.......', '', '', '', '', 'MBBS', 'Studied in Cheina', 'Employed', '26', 'working in Sunshine Hospital, Sec-Bad.', '600000 PA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1521438553_aviary-image-1485440893835.jpeg', '1521438553_IMG_20180117_192003.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-19', '2018-03-19 05:49:13', '', '', '0', '', 0, 0),
(148, 'RCM500148', '', '', 'Sister', 'B.Mounika', 'Female', '7', '8', '1996', '21', '14', 'Telugu', '267', '37', '7799559484', 'satish.rebel357@gmail.com', 'satishlaursa143', 'Hyderabad ', 'S.N Colony\r\nR.C Puram ', '', '', '00:00:00', '', '5ft 4in / 163 cms', '', 'Unmarried', '', '', '', '', '', '', 'B.Gangulu', 'Operator in penner industry ', 'B.Sujatha', 'Expired ', '', '2', '', '', '', '', '', '', '', '', '', 'BE/B.Tech', '', 'Unemployed', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1521449699_IMG-20180319-WA0012.jpg', '1521449699_IMG-20180319-WA0015.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-19', '2018-04-04 08:01:55', '', '', '0', '', 0, 0),
(150, 'RCM500150', '', '', 'Daughter', 'Kavalakuntla.sampurna', 'Female', '24', '9', '1988', '29', '14', 'Telugu', '266', '5', '8297881827', 'glorisampu@gmail.com', 'jesus1988', 'bangulore', 'sarjapure road,halnhakalli,wipro opp company,bangilore', '', 'sarjapure raod,halnhakalli,wipro company bangulore', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'kavalakuntla .polaiah', 'Rtd dccbank manager empolyee', 'K.meramma', 'housewife', '', '4 brothers,one bro m', '', '', '', '', '', '9703108422', '', '', '', 'Masters', 'MBA', '', '', 'nill', 'nill', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'educated and settled groom from catholic family,respected elders.', '1523870562_IMG-20180416-WA0036 (1).jpg', '1521556471_20171203_194436.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-19', '2018-04-17 07:21:00', '', '', '0', '', 0, 0),
(152, 'RCM500152', '', '', 'Sister', 'Saritha C', 'Female', '21', '9', '1982', '35', '14', 'Telugu', '69', '3', '8333807160', 'saritha@gmail.com', 'saritha', 'Hyderabad', 'Mettuguda, Hyd', '', 'Nizamabad', '00:00:00', '', '5ft 3in / 161 cms', '', 'Unmarried', '', '', '', '', '', '', 'Devadas (Late)', 'Doctor', 'Yesumani', 'Retd. Medical Superindent', '', '1 Brother, 1 Sister(', '', '', '', '', 'God fearing family.... well settled in hyd................', '8309865578', '', '', '', 'Management-Degree', 'MBA Finance', 'Employed', '46', 'Asst. Manager\r\nnn combind .co', '400000 PA\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1521621286_500152a.jpeg', '1521621227_500152a.jpeg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-21', '2018-08-03 06:39:53', '', '', '0', '', 0, 0);
INSERT INTO `register` (`guid`, `user_id`, `security_key`, `reg_id`, `profilefor`, `name`, `gender`, `txtDate`, `txtMonth`, `txtYear`, `txtAge`, `religion`, `mtongue`, `caste`, `dnation`, `mobile`, `email`, `password`, `txtCity`, `txtCaddress`, `txtAadhar`, `txtPaddress`, `txtBtime`, `txtBplace`, `txtHeight`, `txtComplexion`, `txtPstatus`, `txtStar`, `txtRaasi`, `txtPadam`, `txtHoromatch`, `txtKdosham`, `txtAmyself`, `txtFname`, `txtFoccupation`, `txtMname`, `txtMoccupation`, `txtBros`, `txtSis`, `txtSdetsils`, `txtNplace`, `txtFvalue`, `txtFstatus`, `txtAfamily`, `txtContact`, `txtCdetails`, `txtRcity`, `txtCliving`, `txtEducation`, `txtEdetail`, `txtEmployed`, `txtOccupation`, `txtOdetail`, `txtAincome`, `txtHobbies`, `txtInterests`, `txtFmusic`, `txtFreads`, `txtPmovies`, `txtSfactivities`, `txtFcuisine`, `txtPdress`, `txtSlanguages`, `txtPage`, `txtPheight`, `txtPlooking`, `txtPkdosham`, `txtPhysical`, `txtPmtongue`, `txtPeducation`, `txtPeating`, `txtPcitizenship`, `txtPcliving`, `txtPrstatus`, `txtApartner`, `txtImage1`, `txtImage2`, `access`, `amount`, `mihpayid`, `status`, `bank_ref_num`, `activation`, `de_activation`, `package`, `profile_views`, `date`, `dateandtime`, `payment_id`, `payment_request_id`, `created_by`, `state`, `otp`, `otp_flag`) VALUES
(153, 'RCM500153', '', '', 'Relative', 'Marshall', 'Male', '2', '2', '1984', '34', '14', 'English', '276', '4', '9849657762', 'maranjit123@gmail.com', '500153', 'Hyderabad', 'Secunderabad telangana', '', 'Secunderabad', '00:00:00', '', '5ft 5in / 166 cms', '', 'Unmarried', '', '', '', '', '', '', 'Ranjit', 'Bussiness', 'Ann', 'Central government ', '', '1', '', '', '', '', 'Very open minded', '9849657762', '', '', '', 'BCA', 'Computer ', 'Business', '10', 'Own business', '7 to 8 lakhs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '......', '1521616906_IMG_20161120_112131.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-21', '2018-03-21 08:22:52', '', '', '0', '', 0, 0),
(154, 'RCM500154', '', '', 'Myself', 'B sudheer kumar', 'Male', '27', '7', '1989', '28', '14', 'Telugu', '69', '34', '8712324775', 'sudeer3692@gmail.com', 'jesus899', 'Hyderabad', 'Borabanda', '', 'Rentachintala,guntur DT', '00:00:00', '', '5ft 8in / 173 cms', '', 'Unmarried', '', '', '', '', '', '', 'Innaiah ', 'Late', 'Rani', 'House wife', '', '2', '', '', '', '', '', '', '', '', '', 'BE/B.Tech', '', 'Employed', '4', 'Gis engineer', '264000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'God fear spiritual woman,simple life style.', '1521729043_IMG_20180213_100648_182.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-22', '2018-03-22 14:30:43', '', '', '0', '', 0, 0),
(156, 'RCM500156', '', '', 'Brother', 'Satish Kumar', 'Male', '23', '8', '1986', '31', '14', 'Telugu', '69', '18', '9298901778', 'satish@gmail.com', 'satish', 'Hyderabad', 'Ramnagar, Hyd.', '', '', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'Satyanarayana (Late)', 'VST Employ', 'Meera Bai', 'House Wife', '', '3 Sist. (Married), 1', '', '', '', '', 'Spiritual Family..........................................................', '', '', '', '', 'B.A', 'CCNA, MCPIT, NCFM (Share Marketing)', 'Employed', '41', 'Relationship Manager', '20000 (PM)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-24', '2018-03-24 13:18:12', '', '', '0', '', 0, 0),
(159, 'RCM500159', '', '', 'Daughter', 'B.SRAVANTHI', 'Female', '14', '7', '1985', '32', '14', 'Telugu', '277', '37', '9963376536', 'sravanti@gmail.com', 'sravanthi', 'Hyderabad', 'Satavahana Nagar, Vanasthalipuram Hyd ', '', 'Hyderabad', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'Prakash', 'Senior Manager, ECIL(Retd)', 'Elizebeth', 'Head Minstress, Saidabad Govt, High School ', '', '1 Elder and 1 Younge', '', '', '', '', '', '9849883690', '', '', '', 'BE/B.Tech', 'MBA (Operation & Maketing ), MIT College Of Management, Pune', 'Employed', '50', 'Working as Associated Manager, Markets and markets, Pune', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Well setteled M. TECH OR B.TECH', '1522064368_20180326_163004.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-26', '2018-03-26 11:39:28', '', '', '0', '', 0, 0),
(160, 'RCM500160', '', '', 'Son', 'SURYANAND BODDU', 'Male', '31', '5', '1981', '36', '14', 'Telugu', '265', '25', '9849883690', 'prakash59292@gmail.com', 'prakash', 'Bangalore', 'Hyderabad', '', 'Satavahana Nagar, Vansathalipuram, Hyd', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'Prakash', 'Senior Mangager, ECIL(Retd)', 'Elizebeth', 'Head Mistress, Saidabad Govt, High School', '', '1 Elder and  1 Young', '', '', '', '', '', '9849883690', '', '', '', 'Masters-Degree', 'M.B.A , SAP', 'Employed', '51', 'Content Specialist - FX & Money Market', '10 L (PA)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1522064152_20180326_162859.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-26', '2018-03-26 11:35:52', '', '', '0', '', 0, 0),
(162, 'RCM500162', '', '', 'Son', 'V S Prashanth', 'Male', '20', '8', '1989', '28', '14', 'Telugu', '279', '27', '8142654999', 'vsudeep20@gmail.com', 'thammu', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 8in / 172 cms', '', 'Unmarried', '', '', '', '', '', '', 'James', 'Addl SP', 'Bv kumari', 'Homemaker', '', '', '', '', '', '', '', '', '', '', '', 'Masters-Degree', 'MBA', 'Employed', '35', 'Banking public sector Bank', '700000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking for a born again lady and having plans to settle abroad as he ha apllied for Canadian PR', '1530511605_WhatsApp Image 2018-07-02 at 10.51.38.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-26', '2018-07-02 06:06:45', '', '', '0', '', 0, 0),
(163, 'RCM500163', '', '', 'Daughter', 'Dr Sravanthi', 'Female', '22', '12', '1987', '30', '14', 'Telugu', '266', '27', '7972809051', 'Panga.sravanthi22@gmail.com', 'kamala', 'Hyderabad', 'Kkr golden enclave apartment flat no 610,attapur mehdipatnam hyderabad', '', 'Kkr golden enclave apartment flat no 610,attapur mehdipatnam hyderabad', '00:00:00', '', '5ft 2in / 158 cms', '', 'Unmarried', '', '', '', '', '', '', 'Panga', 'Passed away', 'Panga kamala', 'Home maker', '', '2', '', '', '', '', 'Loving, kind, responsible, christ centered family', '8977750913', '', '', '', 'MBBS', '', 'Employed', '13', 'Medical officer, assistant commandant, BSF', '1000000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MBBS', '', '', '', '', '', '1522133126_1522129172_SAVE_20180324_184958.jpeg', '1524285963_1513232499_1512393565_IMG-20171204-WA0005.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-27', '2018-04-21 04:46:03', '', '', '0', '', 0, 0),
(164, 'RCM500164', '', '', 'Son', 'Erdandi James', 'Male', '9', '1', '1982', '36', '14', 'Telugu', '265', '3', '9885244798', 'james@gmail.com', 'james', 'Hyderabad', '', '', '', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'E. Yesudass', 'Retired. Head Post Master', 'E. Sulochana', 'B.A, B.Ed,Pvt. School Teacher', '', 'Two younger sisters', '', '', '', '', '', '', '', '', '', '', 'MBA', 'Employed', '51', 'Associate Manager in MNC', '10 lakhs p.a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'God fearing, good looking and working girl', '1522133926_IMG-20180327-WA0000.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-27', '2018-03-27 06:58:46', '', '', '0', '', 0, 0),
(165, 'RCM500165', '', '', 'Relative', 'Pravin', 'Male', '9', '6', '1987', '31', '14', 'Telugu', '270', '3', '9948952727', 'pravin876i9@gmail.com', 'jaya123', 'Hyderabad', 'BHEL, Hyderabad', '', 'Hyderabad', '00:00:00', '', '6ft 0in / 182 cms', '', 'Unmarried', '', '', '', '', '', '', 'Ashirvadam (Late)', '', 'Jaya', 'House Wife', '', '1 Elder Sist (Marrie', '', '', '', '', '(babai)... take care', '9985912251', '', '', '', 'BE/B.Tech', 'B.Tech (Computer Science)', 'Employed', '58', 'Sn. Software Engineer (SAP)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1522137577_IMG-20180321-WA0010.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-27', '2018-07-25 15:50:16', '', '', '0', '', 0, 0),
(166, 'RCM500166', '', '', 'Daughter', 'SUNITHA ROSE', 'Female', '6', '12', '1989', '28', '14', 'Telugu', '279', '', '9951650418', 'sunitharose@gmail.com', 'sunitharose', 'Hyderabad', 'Nampally , Hyderabad', '', '', '00:00:00', '', '', '', '', '', '', '', '', '', '', 'Rosevelt', 'Retd Employee', 'Karunabai', 'Retd Teacher', '1 Elder', '', '', '', '', '', 'Full name: KANDAVALLI SUNITHA ROSE', '9395359788', '', '', '', 'Bachelors-Engineering', 'M.Sc (Hort)', 'Employed', '20', 'Horticulture Officer,Nampally, Hyderabad', '50,000 pm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-27', '2018-07-28 11:08:29', '', '', '0', '', 0, 0),
(167, 'RCM500167', '', '', 'Myself', 'Ramya glory', 'Female', '19', '12', '1988', '29', '14', 'Telugu', '69', '16', '9848213187', 'ramyakanety@gmail.com', 'ramya12', 'Hyderabad', '2-25/3 Sri srinivasa apt flat no 3 vani nagar Street no 1 MALKAJGIRI', '', '2-25/3 Sri srinivasa apt flat no 3 vani nagar Street no 1 MALKAJGIRI', '00:00:00', '', '5ft 2in / 157 cms', '', 'Unmarried', '', '', '', '', '', '', 'kvijaya basker', 'central bank manger', 'siro ratnam', 'hosewife', '', '1 sister 1 bro', '', '', '', '', '9848213187', '7842495365', '', '', '', '', 'MBA', 'Employed', '57', 'hitech city', '52,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1522316050_1522173085_IMG-20180116-WA0011a.jpg', '1522315843_1522173085_IMG-20171129-WA0032.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-27', '2018-07-24 07:20:47', '', '', '0', '', 0, 0),
(169, 'RCM500169', '', '', 'Sister', 'Sushmitha', 'Female', '13', '11', '1993', '24', '14', 'Telugu', '279', '26', '9154682800', 'sucherithaabraham17@gmail.com', 'suchi1712', 'Mahabubnagar', '8-3-46/A/3\r\nMettugadda\r\nMahabubnagar', '', '', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'G. Y. Israel', 'RTC employee', 'B. Lalitha violet', 'govt teacher', '', '1 elder sister( marr', '', '', '', '', 'God fearing family', '', '', '', '', 'MBBS', '', 'Unemployed', '26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Required a prayerful, well settled groom with govt sector or doctor', '1531403872_IMG-20180712-WA0002.jpg', '1531403872_IMG-20180712-WA0001.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-03-29', '2018-07-12 15:46:44', '', '', '0', '', 0, 0),
(172, 'RCM500172', '', '', 'Son', 'G SRIKANT', 'Male', '24', '12', '1988', '29', '14', 'Telugu', '', '37', '9949242481', 'srikant@gmail.com', 'srikant', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'Babu Rao', 'Pastor', 'Padma', 'Pastor', '', '1 Sister 1 Brother', '', '', '', '', '', '', '', '', '', 'Other', 'M.Tech ', 'Employed', '25', 'Rakistruture  enginner Own Businnes', '75,000 per month', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1522917093_IMG-20180111-WA00241a.jpg', '1522830176_IMG-20180111-WA0024.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-04-04', '2018-04-06 06:14:36', '', '', '0', '', 0, 0),
(173, 'RCM500173', '', '', 'Sister', 'B Renuka', 'Female', '10', '3', '1995', '23', '14', 'Telugu', '267', '32', '6300258510', 'praveenbachalakuri173@gmail.com', 'renuka1234', 'Hyderabad', 'Dilshuknagar', '446605601612', 'Hyderabad', '00:00:00', '', '5ft 5in / 165 cms', '', 'Unmarried', '', '', '', '', '', '', 'B Bixam', 'Former ', 'Shanthamma', 'House wife ', '', '4', '', '', '', '', '9642243393 - praveen (ref)', '9642243393', '', '', '', 'BE/B.Tech', 'Sbi training ', 'Unemployed', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-04-04', '2018-07-23 05:35:19', '', '', '0', '', 0, 0),
(174, 'RCM500174', '', '', 'Daughter', 'K Susan', 'Female', '13', '7', '1985', '33', '14', 'Telugu', '266', '3', '9391110774', 'susan@gmail.com', 'susan', 'Hyderabad', 'umberpate, hyd', '', '', '00:00:00', '', '5ft 0in / 153 cms', '', 'Widow', '', '', '', '', '', '', 'Christia', 'Agritual', '', '', '', '2 sist, Married', '', '', '', '', '', '8019742076', '', '', '', 'B.Sc', '', 'Employed', '27', 'Abaya Hospital, vidyanagar', '150000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1532332594_20180723_130619.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-04-05', '2018-07-23 07:56:34', '', '', '0', '', 0, 0),
(179, 'RCM500179', '', '', 'Myself', 'K.Prasanna kumari', 'Female', '26', '8', '1985', '32', '14', 'Telugu', '265', '18', '8333061721', 'prasanna.bujji.26@gmail.com', 'jesusmysaveir', 'hyderabad', 'Kukattpally', '', 'Ananthavaram, tangutur mandal, prakasam DT,', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'rajarao(late)', 'Ex.sarpanch', 'sugunamma', 'house wife', '', '3sisters.. and 1 bro', '', '', '', '', '', '7075748167', '', '', '', 'Masters-Degree', 'MSC,BED', 'Employed', '12', 'As a lecturer in Narayana jr college.kukatypally', '150000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Want god blessing person and setilled family', '1523873777_IMG_20171130_124139_804.JPG', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-04-16', '2018-04-16 10:16:17', '', '', '0', '', 0, 0),
(180, 'RCM500180', '', '', 'Daughter', ' Juthuka Srujana', 'Female', '1', '8', '1988', '29', '14', 'Telugu', '281', '16', '9246937448', 'srujana.juthuka@gmail.com', 'srujana', 'Bangalore ', 'Bangalore', '', 'vizag', '00:00:00', '', '5ft 5in / 164 cms', '', 'Unmarried', '', '', '', '', '', '', 'Suryanarana', 'Rtd. Govt. Navi', 'J.krupaRathnam', 'housewife', '', '1', '', '', '', '', 'Father was retired govt employee, Amma is homemaker, Sister is home maker ', '8897852048', '', '', '', 'Other', 'MCA', 'Employed', '4', 'MFX Infotech', '7.2L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Preferably into software, if not employed person ', '1532188486_20180721_191007.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-03', '2018-07-31 08:19:02', '', '', '0', '', 0, 0),
(181, 'RCM500181', '', '', 'Daughter', 'Goldie', 'Female', '13', '8', '1989', '28', '14', 'Telugu', '277', '3', '9948576769', 'goldie@gmail.com', 'goldie', 'Hyd', '', '', '', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '1 Sister', '', '', '', '', '', '', '', '', '', 'Masters-Degree', '( PGDM) Marketing & Finance  from Vignan Jyothi Institute of Management , Bachupally.', 'Employed', '41', 'Business Operations Analyst in Google through Accenture', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1525524331_WhatsApp Image 2018-05-05 at 14.01.44.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-05', '2018-05-05 12:45:31', '', '', '0', '', 0, 0),
(183, 'RCM500183', '', '', 'Sister', 'Sheeba Prashanthi', 'Female', '6', '11', '1991', '26', '14', 'Telugu', '265', '3', '9885752979', 'sunilkalloji@gmail.com', 'matthew6', 'Hyderabad', 'flat no 404\r\nTarnaka', '', 'flat no 404\r\nTarnaka, Secunderbad', '00:00:00', '', '5ft 1in / 154 cms', '', 'Unmarried', '', '', '', '', '', '', 'Wesley Prabhakar ', 'Retd Railway employee', 'Karuna', 'Home maker', '', '2', '', '', '', '', 'Both siblings got married, Elder sister works with Genpact(Uppal) and Bother works with Railways( Rail Nilayam). God fearing, Loving and caring family', '', '', '', '', 'Masters-Degree', 'Bipc, BSC and MSC', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Man who abides with word of God. who loves and gives best to take care of the family. ', '1526033797_FB_IMG_1526033321179.jpg', '1526033797_FB_IMG_1500196798799.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-11', '2018-07-03 08:57:30', '', '', '0', '', 0, 0),
(184, 'RCM500184', '', '', 'Sister', 'V. Sailaja', 'Female', '7', '7', '1985', '32', '14', 'Telugu', '267', '16', '9949409286', 'vaddepallyrenuka2015@gmail.com', 'renuka2015', 'secunderabad', 'Seethafalmandi', '', '12-12-36, Ravindra Nagar', '00:00:00', '', '5ft 2in / 158 cms', '', 'Unmarried', '', '', '', '', '', '', 'V. Odaiah (Late)', 'G.H.M.C', 'V. Lalitha (Late)', 'House Wife', '', 'One Brother ', '', '', '', '', 'Joint Family one brother and sister in law and one son one daughter ', '0404013603', '', '', '', 'B.Com', 'B.com`', 'Employed', '2', 'Teacher', '1,00,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'I Respect Elders and Very Caring I Can Understand & Adjustable Person.\r\nI Born-Again In Christ,\r\n', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-16', '2018-05-16 07:40:54', '', '', '0', '', 0, 0),
(187, 'RCM500187', '', '', 'Brother', 'Vijay Paul', 'Male', '7', '1', '1982', '36', '14', 'Telugu', '277', '26', '9885832611', 'esther.joe@rediffmail.com', 'Swaroopaaa', 'Hyderabad', '', '', '', '00:00:00', '', '5ft 6in / 168 cms', '', 'Unmarried', '', '', '', '', '', '', 'Abraham', 'Assistant General Manager', 'Swaroopa', 'Home maker', '', '1 sist married', '', '', '', '', '', '', '', '', '', 'Masters-Degree', '', 'Employed', '35', 'BankOfAmerica', '8 lakhs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1530522400_1526830083_10168019_10202346891073977_2785181601084831225_n.jpg', '1530522161_1526830083_10168019_10202346891073977_2785181601084831225_n.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-20', '2018-07-02 15:37:37', '', '', '0', '', 0, 0),
(188, 'RCM500188', '', '', 'Son', 'Abraham Wesley', 'Male', '24', '8', '1987', '30', '14', 'Telugu', '279', '18', '9951898558', 'abrahamwesley@gmail.com', 'Wesley', 'Hyderabad', 'Hyderabad', '430412795078', 'Hyderabad', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'Yesu Rathnam', 'Railways', 'Mary', 'Teacher', '', '', '', '', '', '', '', '9440918725', '', '', '', 'BE/B.Tech', 'MBA', '', '35', '', '10 L (PA)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1527313773_1527313142_15273129818211691997347.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-22', '2018-06-06 12:50:18', '', '', '0', '', 0, 0),
(189, 'RCM500189', '', '', 'Brother', 'Ronald Varun Kumar Katta', 'Male', '3', '2', '1991', '27', '14', 'Telugu', '67', '3', '9177863855', 'varun@gmail.com', 'varun', 'Hyderabad', '', '', 'Hyderabad', '00:00:00', '', '5ft 8in / 173 cms', '', 'Unmarried', '', '', '', '', '', '', 'Divakar (Late)', '', 'Felicia', 'Nursing Superintendent (Rtd)', '', '1 Sister Married', '', '', '', '', '', '9177863855', '', '', '', 'Masters', 'PGD in Taxation from UCCBM & IPGD in Risk Management from IIRM', 'Employed', '51', 'Working in Wells Forgo', '5 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1532155266_1527312736_IMG-20180523-WA0010.jpg', '1532155266_1527312736_IMG-20180523-WA0010 (1).jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-26', '2018-07-21 06:41:06', '', '', '0', '', 0, 0),
(190, 'RCM500190', '', '', 'Myself', 'Srikanth', 'Male', '2', '6', '1984', '33', '14', 'Telugu', '69', '3', '9000035456', 'c.srikanth143@gmail.com', 'June2018', 'Hyderabad', '', '', '', '00:00:00', '', '5ft 8in / 172 cms', '', 'Unmarried', '', '', '', '', '', '', 'Prakash Rao', 'Retired Govt Employee ', 'Chandrakala', 'Homemaker', '', '2', '', '', '', '', '', '', '', '', '', 'Masters-Degree', '', 'Employed', '51', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-05-27', '2018-05-27 02:21:34', '', '', '0', '', 0, 0),
(194, 'RCM500194', '', '', 'Sister', 'Preethi', 'Female', '21', '8', '1989', '28', '14', 'Telugu', '265', '3', '9032748203', 'preethi@gmail.com', 'kiran123', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 3in / 161 cms', '', 'Unmarried', '', '', '', '', '', '', 'Father', 'Rtd. Singareni Employee', 'Mother', 'House Wife', '', '1 Sist. Married, 1 y', '', '', '', '', '', '8885501523', '', '', '', 'Masters', 'PGDM in HR', 'Employed', '53', 'Working at Delloitte, Hyderabad', '5.2 PA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking for well educated and job holder', '1528260326_20180606_101355.jpg', '1528260326_IMG-20180606-WA0018.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-06', '2018-06-06 17:21:57', '', '', '0', '', 0, 0),
(196, 'RCM500196', '', '', 'Myself', 'JAKKAMSETTI SUNIL BABU', 'Male', '15', '6', '1990', '28', '14', 'Telugu', '281', '9', '9010803243', 'sunilbabuagf@gmail.com', 'sunilsixer', 'Narsaput', 's/O J.Saraschandra Babu\r\n9-5-34\r\nMunicipal office road\r\nNarsapur', '532849183837', '9-5-34\r\nMunicipal office road\r\nNarsapur', '00:00:00', '', '5ft 9in / 174 cms', '', 'Unmarried', '', '', '', '', '', '', 'Jakkamsetti Saraschandra Babu', 'Advocate', 'J.Sarojini', 'Home Maker', '', 'elder sister (marrie', '', '', '', '', 'Good family', '9848781432', '', '', '', 'Masters-Degree', 'M.Tech (computer science Engineering)', 'Employed', '35', 'Bank Employee', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'BC-B. (CHRISTIAN)', '1529156284_IMG_20171019_124922.JPG', '1529156284_IMG_20170917_125233.JPG', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-11', '2018-06-16 13:38:04', '', '', '0', '', 0, 0),
(197, 'RCM500197', '', '', 'Brother', 'Sandeep', 'Male', '1', '1', '1989', '29', '14', 'Telugu', '266', '16', '9177333454', 'sandeep@gmail.com', 'sandeep123', 'Hyderabad', 'Hyderabad', '', '', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'Father', 'Supt. Arch.lgy', 'Mother', 'HW', '', '1 young brother', '', '', '', '', '', '', '', '', '', 'BE/B.Tech', '', 'Employed', '57', '', '10L PA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1529039206_IMG-20180612-WA0012.jpg', '1529039207_IMG-20180612-WA0011.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-15', '2018-06-15 05:06:47', '', '', '0', '', 0, 0),
(198, 'RCM500198', '', '', 'Myself', 'K Sameera', 'Female', '13', '1', '1988', '30', '14', 'Telugu', '266', '16', '9866892150', 'sameera.chinnu@gmail.com', 'nisha88', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 5in / 164 cms', '', 'Unmarried', '', '', '', '', '', '', 'K Bhasker B.E', 'Civil Engineer- Businessman', 'K.Aruna M.A B.eD', 'Govt.Teacher', '', '1 Sist MBBS Std', '', '', '', '', '', '9618110750', '', '', '', 'BE/B.Tech', 'M.Tech EEE', 'Employed', '25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1530607116_WhatsApp Image 2018-07-03 at 12.33.39.jpg', '1530607116_WhatsApp Image 2018-07-03 at 12.33.40.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-15', '2018-07-16 10:51:54', '', '', '0', '', 0, 0),
(201, 'RCM500201', '', '', 'Myself', 'Prashanth', 'Male', '7', '7', '1991', '27', '14', 'Telugu', '267', '3', '9948657819', 'prashanthroy2@gmail.com', 'Frank@123', 'Hyderabad...', 'Hyderabad...', '', 'Hyderabad,...', '00:00:00', '', '5ft 5in / 166 cms', '', 'Unmarried', '', '', '', '', '', '', 'Vihay Kumar', 'Govt. Emp', 'Mother (Late)', 'HW', '', '', '', '', '', '', '', '9848662811', '', '', '', 'Management-Degree', 'MBA', 'Employed', '60', 'Working for TechMahendra', '500000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'God fearing... must be educated, from a decent family.', '1529334224_20180618_200859.jpg', '1529334463_1529332557_IMG_20171020_165254.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-18', '2018-07-25 06:55:30', '', '', '0', '', 0, 0),
(202, 'RCM500202', '', '', 'Son', 'Mahesh Kumar Pal', 'Male', '17', '1', '1987', '31', '15', 'Telugu', '', '4', '9666694414', 'maheshkumarpal@gmail.com', 'mahesh123', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 6in / 167 cms', '', 'Unmarried', '', '', '', '', '', '', 'Jayapal', 'Ex Army EME ', 'Maya', '', '', '2 Brother, 1 Sister ', '', '', '', '', '', '9779110982', '', '', '', 'B.A', '', 'Employed', '62', 'Working in Reeni Systems US process... ', '4L (PM)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1529745564_20180619_110007.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-19', '2018-07-25 05:30:48', '', '', '0', '', 0, 0),
(204, 'RCM500204', '', '', 'Daughter', 'R iris preethi', 'Female', '17', '11', '1993', '24', '15', 'Tamil', '', '4', '7416859865', 'irispreethi9505@gmail.com', 'maryjesus', 'Hyderabad ', 'Shanthinagar  north lalaguda', '206901238403', 'Shanthinagar  secbad 500017', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'Richard charles', 'Own business ', 'R Mary Christina', 'House wife', '', '2 younger brothers ', '', '', '', '', 'Very cool n down to other simple andhappy middle class family', '', '', '', '', 'B.Com', 'Computers', 'Employed', '61', 'Worked as cce as if now small break as process got wind up', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Good n understanfing husband who loves me the  way i am', '1529785040_1529749805_WhatsApp Image 2018-06-20 at 12.03.14.jpeg', '1529771850_IMG-20180620-WA0005.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-06-23', '2018-07-13 07:58:25', '', '', '0', '', 0, 0),
(205, 'RCM500205', '', '', 'Relative', 'Robin', 'Male', '14', '11', '1984', '33', '14', 'Telugu', '277', '3', '9966555489', 'robin@gmail.com', '2klikes', 'Hyderabad', 'H.No. 12-8-423/B/1, Mettuguda, Sec-bad, Hyd.', '', 'H.No. 12-8-423/B/1, Mettuguda, Sec-bad, Hyd.', '00:00:00', '', '5ft 9in / 174 cms', '', 'Unmarried', '', '', '', '', '', '', 'R V Prem Kumar', 'Asst. Director(Rtd) @ Tourism Dept.', 'Indira', 'SCR (Rtd)', '', '2 Elder Brothers (1 ', '', '', '', '', '', '9032808724', '', '', '', 'Bachelors Degree', '', 'Employed', '75', 'Working in 24/7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1531130031_WhatsApp Image 2018-07-09 at 15.22.06.jpeg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-09', '2018-07-10 02:59:42', '', '', '0', '', 0, 0),
(206, 'RCM500206', '', '', 'Sister', 'Maneesha', 'Female', '25', '12', '1992', '25', '14', 'Telugu', '265', '34', '9160813127', 'fruitysunshine44@gmail.com', 'mannu@123', 'Hyderabad', '8-4-369/549 f\r\nBorabanda', '796422029260', '8-4-369/549 f\r\nBorabanda', '00:00:00', '', '5ft 6in / 168 cms', '', 'Unmarried', '', '', '', '', '', '', 'K. Nageswar Rao', 'Asst Sub Inspector ', 'K. Sree Vardhini', 'House wise', '', '1', '', '', '', '', 'Father working as asst sub inspector and mother house wife and ,my sister is Independent and working women with simple desires, love to be in a joyful family, i am the youngest one.', '9160813127', '', '', '', 'Bachelors Degree', '', 'Employed', '56', 'Working for tele-text Holidays ', '4Lac', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Looking for a person who is god fearing, understanding, height must be from 5.8, ', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-10', '2018-07-10 09:11:20', '', '', '0', '', 0, 0),
(207, 'RCM500207', '', '', 'Son', 'Navin Joel', 'Male', '20', '10', '1981', '36', '14', 'Telugu', '277', '3', '9032808724', 'navin123@gmail.com', 'navin123', 'Hyderabad', 'Mettuguda', '', 'Mettuguda', '00:00:00', '', '5ft 8in / 172 cms', '', 'Unmarried', '', '', '', '', '', '', 'RV Prem Kumar', 'Tourism Dept. Rtd', 'Indira', 'Railway Rtd', '', '2 Brothers', '', '', '', '', '', '', '', '', '', 'Bachelors Degree', 'B.Com (Comp)', 'Employed', '57', '', '3 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533208650_20180802_164219.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-10', '2018-08-02 11:17:30', '', '', '0', '', 0, 0),
(209, 'RCM500209', '', '', 'Son', 'Vikram Reddy', 'Male', '15', '12', '1980', '37', '14', 'Telugu', '276', '5', '', 'redcarpet@gmail.com', 'Vikram123', 'Bombay', 'Habsiguda', '', 'Habsiguda', '00:00:00', '', '6ft 1in / 185 cms', '', 'Unmarried', '', '', '', '', '', '', 'T.Anthony janardhan Reddy', 'rtd proffesor in OU', 'shourilu', 'doctor', '', 'one', '', '', '', '', 'well educated,well setteld prayerfull family', '', '', '', '', 'MBBS', '', 'Employed', '56', 'Manager', '26 lks', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MBBS', '', '', '', '', 'fair,bit slim', '1531599261_20180715_014239.jpg', '1531599008_IMG-20180715-WA0003.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-13', '2018-08-02 12:33:04', '', '', '0', '', 0, 0),
(210, 'RCM500210', '', '', 'Daughter', 'Kavitha', 'Female', '23', '5', '1990', '28', '14', 'Telugu', '280', '34', '9985418303', 'kavitha12345@gmail.com', 'kavitha123', 'Hyderabad', 'Hyderabad', '', 'Hyderabad', '00:00:00', '', '5ft 1in / 156 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', 'Loving amma', 'house wife', '', '', '', '', '', '', '', '', '', '', '', 'Management-Degree', 'MBA', 'Employed', '61', '', '2 L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1531467965_WhatsApp Image 2018-07-12 at 10.24.02.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-13', '2018-07-13 07:46:05', '', '', '0', '', 0, 0),
(214, 'RCM500214', '', '', 'Son', 'Mathew', 'Male', '19', '2', '1991', '27', '14', 'Malayalam', '', '', '8712863079', 'sajji555@yahoo.com', 'vinoo', '', '', '', '', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-16', '2018-07-16 17:52:48', '', '', '0', '', 0, 0),
(215, 'RCM500215', '', '', 'Sister', 'Janet Paul', 'Female', '1', '9', '1987', '30', '14', 'English', '', '', '9703146488', 'linet.merlin01@gmail.com', 'Levi@123', '', '', '', '', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1532154154_1532118071_Screenshot_2018-07-21-01-42-42-058 (1).jpeg', '1532118071_Screenshot_2018-07-21-01-42-03-382.jpeg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-17', '2018-07-21 06:22:34', '', '', '0', '', 0, 0),
(216, 'RCM500216', '', '', 'Daughter', 'Priyanka', 'Female', '15', '10', '1992', '25', '14', 'Telugu', '279', '11', '7416249344', 'cheeysam0007@gmail.com', 'priyanka123', 'Hyderabad', 'hyd', '', 'hyd', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'B.Anil kumar', 'Prvt.employee', 'B.Anitha', 'homemaker', '', '', '', '', '', '', '', '', '', '', '', 'B.Sc', '', 'Employed', '', 'teacher', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1532281957_20180722_231839.jpg', '1532281957_20180722_231839.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-21', '2018-07-23 05:23:01', '', '', '0', '', 0, 0),
(219, 'RCM500217', '', '', 'Son', 'Sepuri Staphan', 'Male', '25', '6', '1983', '35', '14', 'Telugu', '279', '3', '9573117691', 'staphan@gmail.com', '123456', 'SECUNDERBAD', 'secunderbad', '', 'secunderabad', '00:00:00', '', '5ft 4in / 162 cms', '', 'Unmarried', '', '', '', '', '', '', 'S.Yashav', 'Rtd.Rly', 'Rebheka', 'house wife', '', '3', '', '', '', '', '', '', '', '', '', 'B.Com', '', 'Employed', '70', 'supervisor', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'an emloyee', '1533233617_20180802_234209.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-24', '2018-08-02 18:13:37', '', '', '0', '', 0, 0),
(225, 'RCM500225', '', '', 'Son', 'Ben', 'Male', '24', '9', '1989', '28', '14', 'Telugu', '67', '3', '9701470786', 'red@gmail.com', 'Ben123', 'Hyderabad ', '', '', '', '00:00:00', '', '5ft 11in / 181 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-27', '2018-07-27 11:58:23', '', '', '0', '', 0, 0),
(228, 'RCM500228', '', '', 'Relative', 'Samyuktha', 'Female', '16', '2', '1994', '24', '14', 'Telugu', '277', '32', '9177333454', 'bun@gmail.com', 'bun123', 'Hyderabad', '', '', '', '00:00:00', '', '5ft 1in / 155 cms', '', 'Unmarried', '', '', '', '', '', '', 'Father', 'Govt. Teacher', '', 'Govt.Bsc N', '', '1 Brother', '', '', '', '', 'Ref: Bunny                        \r\ndfg', '', '', '', '', 'M.Pharm', '', 'Employed', '77', 'M.coder', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1532955158_20180730_181753.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-30', '2018-07-30 13:03:42', '', '', '0', '', 0, 0),
(230, 'RCM500230', '', '', 'Myself', 'Kavitha', 'Female', '23', '5', '1990', '28', '14', 'Telugu', '', '', '9985325432', 'kavithashivaratri9@gmail.com', 'kavitharani', '', '', '', '', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-30', '2018-07-30 14:58:31', '', '', '0', '', 0, 0),
(231, 'RCM500231', '', '', 'Myself', 'JALLURI CHANDU', 'Male', '11', '10', '1990', '27', '14', 'Telugu', '279', '3', '9246282702', 'chandurcm@gmail.com', '1234567', 'Hyderabad', 'hyd', '', 'vizag', '00:00:00', '', '6ft 0in / 183 cms', '', 'Unmarried', '', '', '', '', '', '', '', '', '', '', '', '2', '', '', '', '', 'own house in vizag', '', '', '', '', 'BE/B.Tech', 'cse', 'Employed', '72', '', '50000 per month', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533023507_20180731_131829.jpg', '1533023507_20180731_131930.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-31', '2018-07-31 07:51:47', '', '', '0', '', 0, 0),
(232, 'RCM500232', '', '', 'Myself', 'NITHYA TIRUPATHI', 'Female', '11', '12', '1988', '29', '14', 'Telugu', '69', '32', '9959635987', 'nithyarcm@gmail.com', '123456', 'hyd', 'hyd', '', 'hyd', '00:00:00', '', '5ft 7in / 170 cms', '', 'Unmarried', '', '', '', '', '', '', 'T C Vidhya sagar', 'Rtd gov employee', 'TC vijaya lakshmi', 'Assis manager in HFL', '1', '1', '', '', '', '', 'good ,god fearing family', '', '', '', '', 'M.Pharm', '', 'Employed', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533023065_20180731_130932.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-31', '2018-07-31 08:50:59', '', '', '0', '', 0, 0),
(233, 'RCM500233', '', '', 'Myself', 'SHWETHA JANICE W', 'Female', '20', '6', '1986', '32', '14', 'Telugu', '67', '3', '9246282702', 'swetharcm@gmail.com', 'swetha123', 'secunderbad', 'sec_bad', '', 'sec_bad', '00:00:00', '', '5ft 0in / 152 cms', '', 'Unmarried', '', '', '', '', '', '', 'Christopher .W', 'business', 'Sarojini christopher .W', 'Home maker', '', '2', '', '', '', '', '', '', '', '', '', 'Masters-Degree', '', 'Employed', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533024128_20180731_132939.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-07-31', '2018-07-31 08:02:08', '', '', '0', '', 0, 0),
(235, 'RCM500234', '', '', 'Myself', 'B Dayanand Raju ', 'Male', '3', '12', '1977', '40', '14', 'Telugu', '', '', '9177371749', 'dayanand_raju@yahoo.com', 'ap10ba5025', '', '', '', '', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-08-01', '2018-08-01 18:08:20', '', '', '0', '', 0, 0),
(236, 'RCM500236', '', '', 'Daughter', 'T Maureen Keerthana ', 'Female', '14', '8', '1992', '25', '14', 'Telugu', '', '', '9885013963', 'tvincey@gmail.com', 'mervin1985', '', '', '', '', '00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'True Caller : Merlyn Vincent', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-08-01', '2018-08-03 06:13:36', '', '', '0', '', 0, 0),
(237, 'RCM500237', '', '', 'Son', 'K.Ravi varma', 'Male', '7', '4', '1983', '35', '14', 'Telugu', '279', '3', '9989378927', 'ravivarmarcm@gmail.com', 'ravi1234', 'USA', 'USA', '', 'HYD', '00:00:00', '', '5ft 7in / 170 cms', '', 'Unmarried', '', '', '', '', '', '', 'K.Vara prasad', 'Rtd  HMT', 'Alivelu.K', 'Rtd Bank manager', '', '2', '', '', '', '', 'good,well educated,god fearing family', '', '', '', '', 'MS', 'M.tech', 'Employed', '25', 'team leader', '65L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MS', '', '', '', '', '', '1533208511_20180802_150555.jpg', '1533208511_20180802_150624.jpg', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-08-02', '2018-08-02 11:15:11', '', '', '0', '', 0, 0),
(238, 'RCM500238', '', '', 'Daughter', 'PRISCILLA ROSE', 'Female', '9', '7', '1990', '28', '14', 'Telugu', '279', '32', '9703848185', 'priscillarcm@gmail.com', 'rose123', 'SECUNDERBAD', 'madhuranagar colony,Neredmet', '', 'Neredmet,Secbad', '00:00:00', '', '5ft 3in / 160 cms', '', 'Unmarried', '', '', '', '', '', '', 'Miaechel', 'evangelist', '', 'gov emloyee', '', '1', '', '', '', '', 'god fearing and good family', '', '', '', '', 'Masters-Degree', '', 'Employed', '67', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533208568_20180802_164125.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-08-02', '2018-08-02 11:16:08', '', '', '0', '', 0, 0),
(239, 'RCM500239', '', '', 'Daughter', 'PATRICIA', 'Female', '16', '12', '1991', '26', '14', 'Telugu', '276', '4', '8897914257', 'ptriciarcm@gmail.com', 'pat1234', 'SECUNDERBAD', 'modis compound', '', 'secbad', '00:00:00', '', '5ft 7in / 169 cms', '', 'Unmarried', '', '', '', '', '', '', 'Daniel Joseph', 'Rtd Rly eployee', 'Sheela', 'Gov.Employee', '', '1', '', '', '', '', 'well educated good family', '', '', '', '', 'B.A', 'journalism', 'Employed', '43', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533209030_20180802_165206.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-08-02', '2018-08-02 11:23:50', '', '', '0', '', 0, 0),
(241, 'RCM500213', '', '', 'Father', 'Phani', 'Male', '16', '12', '1991', '26', '14', 'Telugu', '276', '4', '9701339351', 'phanikumar.allanki@gmail.com', '123456', 'SECUNDERBAD', 'modis compound', '', 'secbad', '00:00:00', '', '5ft 7in / 169 cms', '', 'Unmarried', '', '', '', '', '', '', 'Daniel Joseph', 'Rtd Rly eployee', 'Sheela', 'Gov.Employee', '', '1', '', '', '', '', 'well educated good family', '', '', '', '', 'B.A', 'journalism', 'Employed', '43', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1533209030_20180802_165206.jpg', '', 'Pending', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '2018-08-02', '2018-08-14 07:48:22', '', '', '0', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `guid` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`guid`, `name`, `dateandtime`) VALUES
(1, 'Hindu', '2018-06-27 16:34:06'),
(2, 'Muslim', '2018-06-27 16:34:06'),
(3, 'Christian', '2018-06-27 16:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE `sms_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `title`, `content`, `created_on`) VALUES
(1, 'register', 'Hi &user_name& Congratulations, You have registered', '2018-08-06 07:37:20'),
(2, 'Login', 'Login from here and there', '2018-08-06 07:37:50'),
(3, 'jrtjurtjn', 'gfhfghfghfg', '2018-08-08 05:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `guid` int(11) NOT NULL,
  `cid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`guid`, `cid`, `name`) VALUES
(39, '14', 'Brethren'),
(41, '14', 'Church of God'),
(67, '14', 'CSI (Church of South India)'),
(68, '14', 'Marthoma'),
(69, '14', 'Born Again '),
(70, '14', 'Jacobite'),
(265, '14', 'Mala'),
(266, '14', 'Madiga'),
(267, '14', 'SC'),
(268, '14', 'ST'),
(270, '14', 'Baptist'),
(271, '14', 'Methodist'),
(272, '14', 'SPG'),
(273, '14', 'Mennonite'),
(274, '14', 'Mar Thoma'),
(275, '14', 'Lutheran'),
(276, '14', 'Roman Catholic'),
(277, '14', 'Others'),
(279, '14', 'BC.C'),
(280, '14', 'BC.A'),
(281, '14', 'BC.B');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `guid` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`guid`, `title`) VALUES
(1, 'RCM Admin Panel');

-- --------------------------------------------------------

--
-- Table structure for table `whatsnew`
--

CREATE TABLE `whatsnew` (
  `guid` int(11) NOT NULL,
  `description` text NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatsnew`
--

INSERT INTO `whatsnew` (`guid`, `description`, `dateandtime`) VALUES
(1, '', '2017-11-04 05:07:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `denominations`
--
ALTER TABLE `denominations`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`guid`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_interests`
--
ALTER TABLE `profile_interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_views`
--
ALTER TABLE `profile_views`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `provience`
--
ALTER TABLE `provience`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`guid`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `sms_templates`
--
ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`guid`);

--
-- Indexes for table `whatsnew`
--
ALTER TABLE `whatsnew`
  ADD PRIMARY KEY (`guid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `denominations`
--
ALTER TABLE `denominations`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `profile_interests`
--
ALTER TABLE `profile_interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profile_views`
--
ALTER TABLE `profile_views`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provience`
--
ALTER TABLE `provience`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `guid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sms_templates`
--
ALTER TABLE `sms_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whatsnew`
--
ALTER TABLE `whatsnew`
  MODIFY `guid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
