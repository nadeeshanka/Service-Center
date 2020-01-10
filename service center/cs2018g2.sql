-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2019 at 11:00 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs2018g2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `date` date NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `job_no` int(20) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  `center_id` varchar(20) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Paid',
  `pay_mode` varchar(20) NOT NULL DEFAULT 'mode',
  PRIMARY KEY (`bill_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`date`, `bill_no`, `job_no`, `nic_no`, `center_id`, `reason`, `amount`, `status`, `pay_mode`) VALUES
('2019-02-26', 'BIL-10000', 10000, '941200850V', 'UNA001', 'Replacement of power supply', 500, 'Not Paid', 'Cash'),
('2019-02-26', 'BIL-10004', 10004, '198557000646', 'UNA001', 'Heater replace and service charge', 750, 'Paid', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

DROP TABLE IF EXISTS `blacklist`;
CREATE TABLE IF NOT EXISTS `blacklist` (
  `nic_no` varchar(15) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `passward` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `tel` int(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`nic_no`, `fname`, `lname`, `passward`, `address1`, `street`, `city`, `tel`, `email`, `date`) VALUES
('936651186V', 'Nadee', 'Perera', '12cc15408468bd3663f4717e87acf491', '32/8,D K Wimalasurendra road', 'Osanagoda', 'Mahamodara', 766206049, 'nadeeperera@gmail.com', '2019-02-28 06:01:50'),
('656972191V', 'Chandrika', 'Kanthi', '12cc15408468bd3663f4717e87acf491', '256/15,Siyabalagaha Watta', 'Mahamodara', 'Galle', 715700345, 'chandrikakanthi@gamil.com', '2019-02-28 06:01:54'),
('825903160V', 'Siddi', 'Hasiriya', '12cc15408468bd3663f4717e87acf491', '308/5A,Wakkwella road', 'Gintota', 'Galle', 776531690, 'siddihasiriya@gmail.com', '2019-02-28 06:01:56'),
('638151790V', 'Sameera', 'Fernando', '12cc15408468bd3663f4717e87acf491', 'Hiribura Cross lane', 'Deddugoda', 'Galle', 774020215, 'Sameerafernando@gmail.com', '2019-02-28 06:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_no` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `defect` varchar(255) NOT NULL,
  `center_id` varchar(50) NOT NULL,
  `esti_payment` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `NIC_no` varchar(50) NOT NULL,
  `feedback_date` datetime DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'available',
  PRIMARY KEY (`complaint_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10025 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_no`, `date`, `defect`, `center_id`, `esti_payment`, `serial_no`, `NIC_no`, `feedback_date`, `feedback`, `status`) VALUES
(10003, '2019-01-24 06:44:40', 'low cool in every level', 'BAT006', 'Requested', 'HIH32BHT-18Y48912', '756430045V    ', NULL, NULL, 'Job Created'),
(10004, '2019-01-25 05:59:06', 'Not working', 'UNA001', 'Requested', 'SlF1650T-15Y1345', '941200850V', NULL, NULL, 'Job Created'),
(10005, '2019-01-27 12:31:50', 'Not Display anything ', 'COL007', 'Requested', 'DEL-3000i3-17Y30012', '941200850V', '2019-03-04 10:09:11', 'Thanks singer service for your fast service', 'available'),
(10006, '2019-01-29 03:52:33', 'not display', 'HIR004', 'Requested', 'SAM-K4000-17Y5899', '957140700v', NULL, NULL, 'accepted'),
(10007, '2019-01-29 05:06:33', 'Not coooling', 'UNA001', 'Requested', 'BEK-D200-17Y5001', '941200850V', NULL, NULL, 'Job Created'),
(10008, '2019-01-29 06:19:22', 'not working', 'UNA001', 'Requested', 'SWA-D300-18Y3455', '941200850V', NULL, NULL, 'available'),
(10009, '2019-02-02 01:55:29', 'Not working', 'UNA001', 'Not_Requested', 'SRC-900W-18Y60023', '198557000646', NULL, NULL, 'Job Created'),
(10010, '2019-02-06 05:15:16', 'Overload switch always on', 'UNA001', 'Requested', 'KA-MIXEE-N-18Y30002', '852019205V', NULL, NULL, 'accepted'),
(10011, '2019-02-20 02:21:58', 'Not working', 'UNA001', 'Not_Requested', 'SMW23GA9-17Y09134', '941200850V', '2019-02-24 12:20:00', 'It was fast and quality after service.thank u singer service', 'Job Created'),
(10012, '2019-02-21 10:04:00', 'Not Working', 'UNA001', 'Not_Requested', 'KA_LW_185A-18Y1851', '941200850V', NULL, NULL, 'Job Created'),
(10013, '2019-02-23 01:37:04', 'Not Working', 'HIR004', 'Requested', 'SAM-K400D-18Y1234', '957140700V', NULL, NULL, 'Job Created'),
(10014, '2019-02-24 06:58:12', 'Not working', 'UNA001', 'Requested', 'SMW23GA9-17Y09134', '957140700V', NULL, NULL, 'Job Created'),
(10015, '2019-02-26 12:25:57', 'Not working', 'HIR004', 'Not_Requested', 'MHC-V21D-18Y3023', '931278005V', NULL, NULL, 'Job Created'),
(10016, '2019-02-28 12:24:14', 'not working', 'UNA001', 'Not_Requested', 'SWM-SAR6-18Y5678', '638151790V', NULL, NULL, 'available'),
(10017, '2019-02-28 12:33:11', 'not dring', 'UNA001', 'Not_Requested', 'SWM-FA70R-18Y6789', '825903160V', NULL, NULL, 'Job Created'),
(10018, '2019-03-04 07:43:41', 'not working', 'UNA001', 'Not_Requested', 'PH-MA071I-18Y2844', '696972191V', NULL, NULL, 'available'),
(10019, '2019-02-28 01:00:08', 'no power', 'UNA001', 'Not_Requested', 'SLRC-1018-17Y4567', '936651186V', NULL, NULL, 'accepted'),
(10020, '2019-02-28 01:20:28', 'not heating', 'UNA001', 'Not_Requested', 'PA-O32DT-17Y2545', '885311822V', NULL, NULL, 'Job Created'),
(10021, '2019-02-28 01:28:33', 'Key board is not working', 'COL007', 'Not_Requested', 'DELL-J5V05-W10-2DNZZD2', '957140700V', NULL, NULL, 'accepted'),
(10022, '2019-02-28 10:14:27', 'not working', '', 'Not_Requested', 'FAN-W-4801R-17Y9563', '810370378V', NULL, NULL, 'accepted'),
(10023, '2019-02-28 10:39:27', 'There is no enough cool in freezer', 'UNA001', 'Not_Requested', 'GEO-DM-265NF-13Y2523', '718170591V', NULL, NULL, 'Job Created'),
(10024, '2019-02-28 10:47:30', 'Not working', 'UNA001', 'Not_Requested', 'RTT-200-GT-18Y2591', '881180529V', NULL, NULL, 'Job Created');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `NIC_No` varchar(20) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `passward` varchar(40) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `tel_no` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`NIC_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NIC_No`, `first_name`, `last_name`, `passward`, `address1`, `street`, `city`, `tel_no`, `email`, `date`) VALUES
('198557000646', 'Nimali', 'Sarathchandra', 'eb002b0844d177c8cc38e1e28c64d372', 'No:325/16, Arachchikanda', 'Hapugala', 'Wakwella', 717764950, 'nimalisarachchandra@gmail.com', '2019-01-02 08:00:30'),
('718170591V', 'Wasanthi', 'Jayawardhana', '12cc15408468bd3663f4717e87acf491', '108/A,Nugaduwa', 'Madampe', 'Galle', 716586980, 'wasanthijayawardhana@gmail.com', '2019-02-28 10:23:46'),
('756430045V', 'Nimal', 'jayaweera', '12cc15408468bd3663f4717e87acf491', 'No:14', 'Main street', 'Galle', 712043466, 'nimalyajaweera@gmail.com', '2019-01-24 05:19:22'),
('807132288V', 'Harsha', 'udeni', '12cc15408468bd3663f4717e87acf491', 'Rathgama junction', 'Rathgama', 'Boossa', 914907620, 'harshaudeni@gmail.com', '2019-02-27 12:34:16'),
('810370378V', 'Chanaka', 'Dihan', '12cc15408468bd3663f4717e87acf491', '68/B,Malliban Road', 'Pinnaduwa', 'Galle', 766658304, 'chanakadihan@gmail.com', '2019-02-28 10:12:02'),
('852019205V', 'Madush', 'Gunawardana', '12cc15408468bd3663f4717e87acf491', '108/1', 'Colombo Road', 'Kaluwella', 775005001, 'madushkosgoda@gmail.com', '2019-02-06 04:51:06'),
('881180529V', 'Ruwan ', 'Lakmal', '12cc15408468bd3663f4717e87acf491', 'Isuru mawatha', 'Hapugala', 'Galle', 716556960, 'ruwanlakmal@gmail.com', '2019-02-28 10:42:09'),
('885311822V', 'Nimesha', 'Dilhani', '01a26798e6f4c193634f586744394d25', '35/A', 'Galle Fort', 'Galle', 713580722, 'nimeshadilhani@gami.com', '2019-02-28 01:05:08'),
('892450014V', 'Wasantha', 'Kumara', 'b681ab86f488095c7bb7e6aeb19869bb', 'No:15', 'Pitipana', 'Batapola', 770718313, 'wasanthakumara@yahoo.com', '2019-01-02 08:00:39'),
('931278005V', 'Hasith', 'Prabasara', 'f4ad231214cb99a985dff0f056a36242', '20', 'Nilmini  uyana', 'Bataduwa', 713460735, 'hasithprabasara@gmail.com', '2019-01-11 04:48:03'),
('933433820V', 'Siridesha', 'Nadeeshanka', 'afdd0b4ad2ec172c586e2150770fbf9e', 'no 53', 'Abdulwahab mawatha', 'Thalapitiya', 716006034, 'snadeeshanka@gmail.com', '2019-01-22 06:12:45'),
('934500151V', 'Hasith', 'Werasinghe', '2aaf938e71ca3fe8f52c3ebc506cae46', 'No:317', 'Rathgama Junction', 'Rathgama', 712254831, 'hasithmatara@yahoo.com', '2019-01-02 08:00:41'),
('941200850V', 'Yasintha', 'chamara', '5965d31c97742085a184c80f118692b7', '\"Sisira\"', 'Pitiduwa', 'Habaraduwa', 775887051, 'yasinthachamara@gmail.com', '2019-02-28 12:09:57'),
('943400850V', 'Haritha', 'Nishakara', '7a2272f2a15cb4438b047908e06271bb', 'No:12/1,Nawa mawatha,', 'Nialadeniya', 'Udugama', 710363315, 'hithanishakara@gmail.com', '2019-01-02 08:00:44'),
('945880123V', 'Hansi', 'Indima', '21fafa15bc2e8f3cdf14617e2e67268b', '\"Nila\"', 'Thalangoda', 'Thangalla', 701349012, 'hansianreehenadi@gmai.com', '2019-01-02 08:00:40'),
('947535041V', 'Dimantha', 'Gunasekara', '12cc15408468bd3663f4717e87acf491', 'Diwelwaththa,', 'Pitiduwa,', 'Habaraduwa.', 715006001, 'dimanthagunasekara@gmail.com', '2019-01-20 04:15:50'),
('947920170v', 'imeshi', 'fernando', 'efd62f3e48a334d0fddf847e30885f2d', '86/A', 'kahaduuwa', 'Elpitiya', 123456789, 'fernando@gmaill.com', '2019-02-26 09:54:30'),
('948900750V', 'Miuru', 'lakshan', 'd49b84c86eae4d4e91fa4c2b8c70632b', '20/1,Ala para', 'Maththegoda', 'kottawa', 712347012, 'miurulakshan@gmail.com', '2019-02-28 06:01:21'),
('957140700v', 'Piyumi', 'Madhushani', 'f4ad231214cb99a985dff0f056a36242', '343/A', 'prathiraja mawatha', 'horana', 716566537, 'piyumi@gmail.com', '2019-02-28 06:01:10'),
('961243455V', 'Hasini', 'Pabasara', 'f4ad231214cb99a985dff0f056a36242', 'N0:17,Nidahas Uyana', 'Bope', 'Kalegana', 765500241, 'hasinipabasara@gmail.com', '2019-01-11 05:00:00'),
('961466001V', 'Ashmi', 'Gamage', '7b20019d3e1406ab8763540851fccf05', 'No:25,Pansala para,Palampitiya', 'Ginigala', 'Unawatuna', 712017745, 'ashmigamage@gmail.com', '2019-01-02 05:51:33'),
('963401278V', 'Sachini', 'suleka', 'sachini123', 'Piteniya waththa,', 'Mahamodara', 'Galle', 783401781, 'sachinisulea@gmail.com', '2019-02-28 11:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `job_no` int(10) NOT NULL AUTO_INCREMENT,
  `complain_no` int(10) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `jobdate` date NOT NULL,
  `center_id` varchar(20) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `current_situation` varchar(100) NOT NULL DEFAULT 'Processing',
  `service_agent` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`job_no`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10013 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_no`, `complain_no`, `serial_no`, `jobdate`, `center_id`, `job_type`, `warranty`, `job_description`, `current_situation`, `service_agent`) VALUES
(10000, 10011, 'SMW23GA9-17Y09134', '2019-02-24', 'UNA001', 'Service Center', 'Not valid', 'Power Supply unit replacement', 'Finished', ''),
(10001, 10012, 'KA_LW_185A-18Y1851', '2019-02-24', 'UNA001', 'Service Center', 'Valid', 'To be check', 'Finished', ''),
(10002, 10014, 'SMW23GA9-17Y09134', '2019-02-24', 'UNA001', 'Service Center', 'Not valid', 'repair same defect few times', 'Replace', ''),
(10003, 10013, 'SAM-K400D-18Y1234', '2019-02-26', 'HIR004', 'Service Center', 'Not valid', 'To be check', 'Processing', ''),
(10004, 10009, 'SRC-900W-18Y60023', '2019-02-26', 'UNA001', 'Service Center', 'Not valid', 'Heater Replaced', 'Finished', ''),
(10005, 10007, 'BEK-D200-17Y5001', '2019-02-26', 'UNA001', 'Home visit', 'Not valid', 'To be check', 'Processing', 'AGT-Supun'),
(10006, 10024, 'RTT-200-GT-18Y2591', '2019-02-28', 'UNA001', 'Service Center', 'Valid', 'To be check', '', ''),
(10007, 10023, 'GEO-DM-265NF-13Y2523', '2019-02-28', 'UNA001', 'Home Visit', 'Not valid', 'Cooling Gas refilled', 'Finished', 'AGT-Supun'),
(10008, 10020, 'PA-O32DT-17Y2545', '2019-02-28', 'UNA001', 'Service Center', 'Not valid', 'To be checked', 'Processing', ''),
(10009, 10017, 'SWM-FA70R-18Y6789', '2019-02-28', 'UNA001', 'Home Visit', 'Not valid', 'To be checked', 'Processing', 'AGT-Janaka'),
(10010, 10004, 'SlF1650T-15Y1345', '2019-02-28', 'UNA001', 'Service Center', 'Not valid', 'To be checked', 'Replaced', ''),
(10011, 10003, 'HIH32BHT-18Y48912', '2019-02-28', 'BAT006', 'Home Visit', 'Not valid', 'To be checked', 'Processing', 'AGT-Supun'),
(10012, 10015, 'MHC-V21D-18Y3023', '2019-02-28', 'HIR004', 'Service Center', 'Not valid', 'To be checked', 'Replaced', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notificaton_no` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `msg` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`notificaton_no`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificaton_no`, `email`, `date`, `time`, `msg`, `status`) VALUES
(4, 'yasinthachamara@gmail.com', '2019-02-21', '08:49:39', 'Your Job number is Jo-10007', 'read'),
(1, 'yasinthachamara@gmail.com', '2019-02-21', '08:21:35', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'read'),
(5, 'yasinthachamara@gmail.com', '2019-02-21', '11:37:25', 'Your Product is still repairing', 'read'),
(6, 'yasinthachamara@gmail.com', '2019-02-21', '05:29:41', 'Relevant product parts not available, Please Waiting few days', 'read'),
(7, 'yasinthachamara@gmail.com', '2019-02-23', '01:12:54', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'read'),
(8, 'yasinthachamara@gmail.com', '2019-02-23', '01:37:50', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(9, 'jdpmadhushani@gmail.com', '2019-02-23', '01:39:15', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(10, 'yasinthachamara@gmail.com', '2019-02-23', '02:02:33', 'Your Job number is Jo-10008', 'new'),
(11, 'yasinthachamara@gmail.com', '2019-02-23', '02:02:43', 'Your Product was Repaired ,Please collect your product where you handed over', 'new'),
(12, 'yasinthachamara@gmail.com', '2019-02-23', '02:09:57', 'Your Product was Repaired ,Please collect your product where you handed over', 'new'),
(13, 'jdpmadhushani@gmail.com', '2019-02-23', '02:11:56', 'Your Job number is Jo-10009', 'new'),
(14, 'jdpmadhushani@gmail.com', '2019-02-23', '02:12:44', 'Your Product was Repaired ,Please collect your product where you handed over', 'new'),
(15, 'yasinthachamara@gmail.com', '2019-02-24', '01:44:57', 'Your complaint accepted', 'new'),
(16, 'jdpmadhushani@gmail.com', '2019-02-24', '01:45:25', 'Your complaint accepted', 'new'),
(17, 'madushkosgoda@gmail.com', '2019-02-24', '01:45:45', 'Your complaint accepted', 'new'),
(18, 'yasinthachamara@gmail.com', '2019-02-24', '01:45:49', 'Your complaint accepted', 'new'),
(19, 'jdpmadhushani@gmail.com', '2019-02-24', '01:46:31', 'Your complaint accepted', 'new'),
(20, 'yasinthachamara@gmail.com', '2019-02-24', '01:51:03', 'Your Job number is Jo-1', 'new'),
(21, 'yasinthachamara@gmail.com', '2019-02-24', '01:52:12', 'Your Product was Repaired ,Please collect your product where you handed over', 'new'),
(22, 'jdpmadhushani@gmail.com', '2019-02-24', '07:57:02', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'read'),
(23, 'yasinthachamara@gmail.com', '2019-02-24', '07:59:33', 'Your Job number is Jo-10001', 'new'),
(24, 'jdpmadhushani@gmail.com', '2019-02-24', '08:14:47', 'Your Job number is Jo-10002', 'new'),
(25, 'nimalisarachchandra@gmail.com', '2019-02-26', '11:01:04', 'Your complaint accepted', 'new'),
(26, 'jdpmadhushani@gmail.com', '2019-02-26', '11:01:28', 'Your Job number is Jo-10003', 'new'),
(27, 'nimalisarachchandra@gmail.com', '2019-02-26', '11:02:08', 'Your Job number is Jo-10004', 'new'),
(28, 'yasinthachamara@gmail.com', '2019-02-26', '11:02:28', 'Your complaint accepted', 'new'),
(29, 'yasinthachamara@gmail.com', '2019-02-26', '11:03:28', 'Your Job number is Jo-10005', 'new'),
(30, 'nimalisarachchandra@gmail.com', '2019-02-26', '11:06:16', 'Your Product was Repaired ,Please collect your product where you handed over', 'new'),
(31, 'jdpmadhushani@gmail.com', '2019-02-26', '11:08:29', 'Your product was Replaced ,Please contact Branch Manger for get new one', 'new'),
(32, 'nimalyajaweera@gmail.com', '2019-02-26', '12:02:02', 'Your complaint accepted', 'new'),
(33, 'yasinthachamara@gmail.com', '2019-02-26', '11:10:46', 'Your Product was Repaired ,Please collect your product where you handed over', 'new'),
(34, 'ruwanlakmal@gmail.com', '2019-02-28', '11:05:29', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(35, 'ruwanlakmal@gmail.com', '2019-02-28', '11:07:08', 'Your Job number is Jo-10006', 'new'),
(36, 'ruwanlakmal@gmail.com', '2019-02-28', '11:08:29', 'Relevant product parts not available, Please Waiting few days', 'new'),
(37, 'jdpmadhushani@gmail.com', '2019-02-28', '11:14:16', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(38, 'wasanthijayawardhana@gmail.com', '2019-02-28', '04:30:30', 'Your complaint accepted', 'new'),
(39, 'wasanthijayawardhana@gmail.com', '2019-02-28', '04:31:16', 'Your Job number is Jo-10007', 'new'),
(40, 'chanakadihan@gmail.com', '2019-02-28', '04:33:59', 'Your complaint accepted', 'new'),
(41, 'nimeshadilhani@gami.com', '2019-02-28', '04:36:46', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(42, 'nimeshadilhani@gami.com', '2019-02-28', '04:38:05', 'Your Job number is Jo-10008', 'new'),
(43, 'siddihasiriya@gmail.com', '2019-02-28', '04:38:42', 'Your complaint accepted', 'new'),
(44, 'siddihasiriya@gmail.com', '2019-02-28', '04:39:04', 'Your Job number is Jo-10009', 'new'),
(45, 'yasinthachamara@gmail.com', '2019-02-28', '04:39:39', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(46, 'yasinthachamara@gmail.com', '2019-02-28', '04:40:08', 'Your Job number is Jo-10010', 'new'),
(47, 'nadeeperera@gmail.com', '2019-02-28', '05:01:36', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(48, 'nadeeperera@gmail.com', '2019-02-28', '05:01:42', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(49, 'yasinthachamara@gmail.com', '2019-02-28', '05:06:10', 'Your product was Replaced ,Please contact Branch Manger for get new one', 'read'),
(50, 'nimalyajaweera@gmail.com', '2019-02-28', '05:40:37', 'Your Job number is Jo-10011', 'new'),
(51, 'hasithprabasara@gmail.com', '2019-02-28', '05:42:56', 'Your complaint accepted,please Handover your product Branch or relevant Service center ', 'new'),
(52, 'hasithprabasara@gmail.com', '2019-02-28', '05:43:26', 'Your Job number is Jo-10012', 'new'),
(53, 'hasithprabasara@gmail.com', '2019-02-28', '05:43:58', 'Your product was Replaced ,Please contact Branch Manger for get new one', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `serial_number` varchar(50) NOT NULL,
  `serial_nophoto` blob,
  `product_type` varchar(50) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL,
  `NIC_no` varchar(50) NOT NULL,
  `center_id` varchar(50) NOT NULL,
  `location` varchar(20) DEFAULT NULL,
  `delivery` varchar(50) DEFAULT NULL,
  `repair_term` int(5) DEFAULT '1',
  PRIMARY KEY (`serial_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`serial_number`, `serial_nophoto`, `product_type`, `Brand`, `purchase_date`, `NIC_no`, `center_id`, `location`, `delivery`, `repair_term`) VALUES
('BEK-D200-17Y5001', NULL, 'Refrigerator', 'BEKO', '2017-01-17', '941200850V', 'UNA001', 'Service Center', 'Customer', 1),
('DEL-3000i3-17Y30012', NULL, 'Laptop', 'DELL', '2017-01-18', '941200850V', 'COL007', 'Showroom', 'Showroom', 1),
('DELL-J5V05-W10-2DNZZD2', NULL, 'Laptop', 'DELL', '2017-03-26', '957140700V', 'COL007', 'Showroom', 'Showroom', 1),
('GEO-DM-265NF-13Y2523', NULL, 'Refrigerator', 'SISIL', '2013-06-05', '718170591V', 'UNA001', 'Service Center', 'Showroom', 1),
('HIH32BHT-18Y48912', NULL, 'A/C', 'HITACHI', '2017-01-10', '756430045V    ', 'BAT006', 'Service Center', 'Customer', 1),
('KA-MIXEE-N-18Y30002', NULL, 'Blender', 'SINGER', '2018-04-29', '852019205V', 'UNA001', 'Service Center', 'Showroom', 1),
('KA_LW_185A-18Y1851', NULL, 'Toster', 'SINGER', '2018-02-28', '941200850V', 'UNA001', 'Service Center', 'Customer', 1),
('MHC-V21D-18Y3023', NULL, 'Audio system', 'SONY', '2018-03-13', '931278005V', 'HIR004', 'Service Center', 'Showroom', 1),
('PA-O32DT-17Y2545', NULL, 'Ovan', 'PANASONIC', '2017-06-12', '885311822V', 'UNA001', 'Service Center', 'Showroom', 1),
('PH-MA071I-18Y2844', NULL, 'Blender', 'PHILIPS', '2018-03-14', '696972191V', 'UNA001', 'Showroom', 'Showroom', 1),
('RTT-200-GT-18Y2591', NULL, 'Gas cooker', 'SISIL', '2018-12-04', '881180529V', 'UNA001', 'Service Center', 'Showroom', 1),
('SAM-K4000-17Y5899', NULL, 'LED TV', 'SAMSUNG', '2017-11-29', '957140700v', 'HIR004', 'Showroom', 'Showroom', 1),
('SAM-K400D-18Y1234', NULL, 'LED TV', 'SAMSUNG', '2018-02-04', '957140700V', 'HIR004', 'Service Center', NULL, 1),
('SlF1650T-15Y1345', NULL, 'Fan', 'SISIL', '2015-01-27', '941200850V', 'UNA001', 'Service Center', 'Customer', 1),
('SLRC-1018-17Y4567', NULL, 'Rice Cooker', 'SISIL', '2018-01-24', '936651186V', 'UNA001', 'Showroom', 'Showroom', 1),
('SMW23GA9-17Y09134', NULL, 'Ovan', 'SINGER', '2017-01-09', '941200850V', 'UNA001', 'Service Center', 'Showroom', 2),
('SRC-900W-18Y60023', NULL, 'Rice Cooker', 'SINGER', '2018-04-03', '198557000646', 'UNA001', 'Service Center', 'Showroom', 1),
('SWA-D300-18Y3455', NULL, 'Washing Machine', 'SAMSUNG', '2018-01-10', '941200850V', 'UNA001', 'Showroom', 'Showroom', 1),
('SWM-FA70R-18Y6789', NULL, 'Washing machine', 'SINGER', '2017-12-06', '825903160V', 'UNA001', 'Service Center', 'Showroom', 1),
('SWM-SAR6-18Y5678', NULL, 'Washing machine', 'SINGER', '2018-02-06', '638151790V', 'UNA001', 'Showroom', 'Showroom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `replacement`
--

DROP TABLE IF EXISTS `replacement`;
CREATE TABLE IF NOT EXISTS `replacement` (
  `replacement_no` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `center_id` varchar(10) NOT NULL,
  `serial_no` varchar(40) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `replacement_type` varchar(100) NOT NULL,
  `replacement_reason` varchar(255) NOT NULL,
  PRIMARY KEY (`replacement_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `replacement`
--

INSERT INTO `replacement` (`replacement_no`, `date`, `center_id`, `serial_no`, `warranty`, `replacement_type`, `replacement_reason`) VALUES
('101', '2019-02-02', 'COL007', 'DEL-3000i3-17Y30012', 'Not valid', 'Full unit', 'Repair  3 more time for same fault'),
('102', '2019-02-28', 'UNA001', 'SlF1650T-15Y1345', 'Not valid', 'full unit', 'parts not available in srilanka'),
('103', '2019-02-28', 'HIR004', 'MHC-V21D-18Y3023', 'Not valid', 'All unit', 'Speakers not working');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `center_id` varchar(20) NOT NULL,
  `location` int(10) NOT NULL,
  `p_category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`center_id`, `location`, `p_category`) VALUES
('UNA001', 1, 'K_app'),
('UNA001', 1, 'R_B'),
('UNA001', 1, 'WA_E'),
('RAT002', 2, 'K_app'),
('RAT002', 2, 'R_B'),
('RAT002', 2, 'WA_E'),
('WAL003', 3, 'R_B'),
('WAL003', 3, 'WA_E'),
('WAL003', 3, 'AC'),
('UNA001', 3, 'K_app'),
('KOG005', 2, 'AC'),
('BAT006', 1, 'AC'),
('HIR004', 1, 'TV_A'),
('HIR004', 3, 'TV_A'),
('COL007', 1, 'C_P'),
('COL007', 2, 'C_P'),
('COL007', 3, 'C_P'),
('HIR004', 2, 'TV_A');

-- --------------------------------------------------------

--
-- Table structure for table `service_agents`
--

DROP TABLE IF EXISTS `service_agents`;
CREATE TABLE IF NOT EXISTS `service_agents` (
  `agent_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `center_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nic_no` varchar(20) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone_no` int(25) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `field` varchar(50) CHARACTER SET utf8 NOT NULL,
  `experience` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_agents`
--

INSERT INTO `service_agents` (`agent_id`, `center_id`, `first_name`, `last_name`, `nic_no`, `address`, `phone_no`, `email`, `field`, `experience`, `password`) VALUES
('AGT-Supun', 'UNA001', 'Supun', 'lakmal', '903214001V', 'N0:53/1,Thalahean,Ginthota', 704038200, 'supunlakmal@gmail.com', 'Refrigerators/Collers', '5 year experience in Abans service', '2ec199f1e2de31576869a57488e919ad'),
('AGT-Janaka', 'UNA001', 'Janaka', 'Bandara', '834500217V', 'No:30,kalegana,Galle', 776886051, 'janakabandara@gmail.com', 'Washing_Machine', '10 year ', '2ec199f1e2de31576869a57488e919ad'),
('AGT-Kamal', 'UNA001', 'Kamal', 'Gunawardana', '891310021V', 'Batawanthudawa Road,kaduwawaththa,Galle', 775006051, 'kamalgunawardana@gmail.com', 'Kitchen_Appliances', '10 years ', '2ec199f1e2de31576869a57488e919ad');

-- --------------------------------------------------------

--
-- Table structure for table `service_center`
--

DROP TABLE IF EXISTS `service_center`;
CREATE TABLE IF NOT EXISTS `service_center` (
  `center_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `tel` int(25) NOT NULL,
  PRIMARY KEY (`center_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_center`
--

INSERT INTO `service_center` (`center_id`, `name`, `location`, `tel`) VALUES
('UNA001', 'Unawatuna Service Center', 'Unawatuna,Galle', 912224608),
('RAT002', 'Rathgama Service Center', 'Boossa,Hikaduwa', 915400400),
('WAL003', 'Prince Service Center', 'Walahanduwa,Galle', 915400400),
('HIR004', 'Lal service Center', 'Hiribura,Galle', 915400400),
('KOG005', 'Priyantha Service Center', 'Koggala kade Junction,Galle', 915400400),
('BAT006', 'Lasantha Service Center', 'Bataduwa,Galle', 915400400),
('COL007', 'Micro Chip Service', 'Colombo 08', 115400400);

-- --------------------------------------------------------

--
-- Table structure for table `super_users`
--

DROP TABLE IF EXISTS `super_users`;
CREATE TABLE IF NOT EXISTS `super_users` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `super_users`
--

INSERT INTO `super_users` (`user_name`, `password`, `email`, `role`, `place`) VALUES
('Wasanthama', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'wasantha@singer.com', 'admin', 'Singer Showroom'),
('Assistant1', '19ca907c5957e620e5e9ee761cba5a16', 'assistant1@singer.com', 'assistant', 'Singer Showroom'),
('UNA001', 'ad4ac7fa40b0af2bae7374c57173f26c', 'unawatunaservice@gmail.com', 'clerk', 'Service Center'),
('HIR004', 'ad4ac7fa40b0af2bae7374c57173f26c', 'lalservice@singersl.com', 'clerk', 'Service Center'),
('RAT002', 'ad4ac7fa40b0af2bae7374c57173f26c', 'rethgamaservice@singersl.com', 'clerk', 'Service Center'),
('WAL003', 'ad4ac7fa40b0af2bae7374c57173f26c', 'princeservice@singersl.com', 'clerk', 'Service center'),
('KOG005', 'ad4ac7fa40b0af2bae7374c57173f26c', 'priyanthaservice@singersl.com', 'clerk', 'Service center'),
('BAT006', 'ad4ac7fa40b0af2bae7374c57173f26c', 'lasanthaservice@singersl.com', 'clerk', 'Service center'),
('COL007', 'ad4ac7fa40b0af2bae7374c57173f26c', 'microchip@singersl.com', 'clerk', 'Service center');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

DROP TABLE IF EXISTS `vacancy`;
CREATE TABLE IF NOT EXISTS `vacancy` (
  `vacancy_id` int(10) NOT NULL AUTO_INCREMENT,
  `center_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `position` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `opening_date` date DEFAULT NULL,
  `closing_date` date DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`vacancy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `center_id`, `position`, `opening_date`, `closing_date`, `description`) VALUES
(1, '', 'Service Agents', '2019-02-12', '2019-02-28', 'we find mechanic for work as our service agents ,please call us \r\ntel:091400400\r\n(More than 3 years in relevant fields)'),
(3, '', 'Tecnicians', '2019-02-28', '2019-03-28', 'We find qualified Technicians for our Unawatuna Service Center in Galle.\r\nIf you are willing to join with us ,please contact us. ');

-- --------------------------------------------------------

--
-- Table structure for table `warranty`
--

DROP TABLE IF EXISTS `warranty`;
CREATE TABLE IF NOT EXISTS `warranty` (
  `p_category` varchar(20) NOT NULL,
  `p_insurance` varchar(20) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  `p_brand` varchar(20) NOT NULL,
  `valid_days` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warranty`
--

INSERT INTO `warranty` (`p_category`, `p_insurance`, `p_type`, `p_brand`, `valid_days`) VALUES
('TV_A_Kapp', 'normal', 'normal', 'si', 365),
('TV_A_Kapp', 'sanasuma', 'normal', 'si', 1095),
('TV_A_Kapp', 'normal', 'normal', 'other', 365),
('TV_A_Kapp', 'sanasuma', 'normal', 'other', 1095),
('COM', 'normal', 'normal', 'si', 365),
('REF', 'normal', 'normal', 'si', 1825),
('REF', 'normal', 'no_frost', 'si', 3650),
('REF', 'normal', 'inverter', 'si', 3650),
('REF', 'normal', 'normal', 'other', 1825),
('REF', 'normal', 'no_frost', 'other', 1825),
('REF', 'normal', 'inverter', 'other', 3650),
('Deepf_Bot', 'normal', 'normal', 'si', 1095),
('Deepf_Bot', 'normal', 'normal', 'other', 1095),
('WAM', 'normal', 'normal', 'si', 1825),
('WAM', 'sanasuma', 'normal', 'other', 1460),
('WAM', 'normal', 'normal', 'other', 730),
('AC', 'normal', 'normal', 'si', 1825),
('AC', 'normal', 'normal', 'other', 1825),
('AC', 'normal', 'inverter', 'si', 3650),
('AC', 'normal', 'inverter', 'other', 3650),
('COM', 'sanasuma', 'normal', 'si', 1095),
('COM', 'sanasuma', 'normal', 'other', 1460),
('COM', 'normal', 'normal', 'other', 730);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
