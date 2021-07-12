-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2021 at 10:17 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cswd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coa_activities`
--

DROP TABLE IF EXISTS `coa_activities`;
CREATE TABLE IF NOT EXISTS `coa_activities` (
  `coa_id` int(11) NOT NULL AUTO_INCREMENT,
  `coa_date` date NOT NULL,
  `coa_name` varchar(100) NOT NULL,
  PRIMARY KEY (`coa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coa_activities`
--

INSERT INTO `coa_activities` (`coa_id`, `coa_date`, `coa_name`) VALUES
(9, '2021-05-27', 'Pachoca Solo Parents & SEA-K Members'),
(10, '2021-05-01', 'BARANGAYanihan AYUDA'),
(11, '2021-04-26', 'Book Launching : MAGANDANG UGALI PARA SA MAGANDANG BUHAY'),
(12, '2021-03-10', 'Solo Parenting in Times of Pandemic: LGU Support and Advocacy Campaign'),
(13, '2021-03-09', 'Isang Araw para sa mga May Kapansanan');

-- --------------------------------------------------------

--
-- Table structure for table `form_backup`
--

DROP TABLE IF EXISTS `form_backup`;
CREATE TABLE IF NOT EXISTS `form_backup` (
  `backup_id` int(11) NOT NULL AUTO_INCREMENT,
  `backup_name` varchar(100) NOT NULL,
  `backup_file` varchar(100) NOT NULL,
  `backup_date` date NOT NULL,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_backup`
--

INSERT INTO `form_backup` (`backup_id`, `backup_name`, `backup_file`, `backup_date`) VALUES
(2, 'data2', 'Book1.xlsx', '2021-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `form_info`
--

DROP TABLE IF EXISTS `form_info`;
CREATE TABLE IF NOT EXISTS `form_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `info_date` date NOT NULL,
  `info_title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `info_information` text NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_info`
--

INSERT INTO `form_info` (`info_id`, `info_date`, `info_title`, `image`, `info_information`) VALUES
(17, '2021-07-04', 'Monitoring of Livelihood Projects', '191683450_314236253543121_2197843945755776156_n.jpg', '<h1><strong><span style=\"color:#c0392b\">Monitoring of Livelihood Projects</span></strong></h1>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `form_pwd`
--

DROP TABLE IF EXISTS `form_pwd`;
CREATE TABLE IF NOT EXISTS `form_pwd` (
  `pwd_id` int(11) NOT NULL AUTO_INCREMENT,
  `pwd_lname` varchar(30) NOT NULL,
  `pwd_fname` varchar(30) NOT NULL,
  `pwd_mname` varchar(20) NOT NULL,
  `pwd_sex` varchar(10) NOT NULL,
  `pwd_typedis` varchar(50) NOT NULL,
  `pwd_typespecify` varchar(50) NOT NULL,
  `pwd_causedis` varchar(50) NOT NULL,
  `pwd_address` varchar(100) NOT NULL,
  `pwd_region` varchar(20) NOT NULL,
  `pwd_province` varchar(100) NOT NULL,
  `pwd_city` varchar(50) NOT NULL,
  `pwd_brgy` varchar(100) NOT NULL,
  `pwd_landline` varchar(30) NOT NULL,
  `pwd_mobilenum` varchar(20) NOT NULL,
  `pwd_email` varchar(30) NOT NULL,
  `pwd_dob` date NOT NULL,
  `pwd_civilstatus` varchar(20) NOT NULL,
  `pwd_educational` varchar(50) NOT NULL,
  `pwd_empstatus` varchar(50) NOT NULL,
  `pwd_empnature` varchar(50) NOT NULL,
  `pwd_emptype` varchar(30) NOT NULL,
  `pwd_occupation` varchar(50) NOT NULL,
  `pwd_cperson` varchar(30) NOT NULL,
  `pwd_cnumber` varchar(20) NOT NULL,
  `pwd_idnum` varchar(50) NOT NULL,
  `pwdf_lname` varchar(50) NOT NULL,
  `pwdf_fname` varchar(20) NOT NULL,
  `pwdf_mname` varchar(20) NOT NULL,
  `pwdm_lname` varchar(50) NOT NULL,
  `pwdm_fname` varchar(20) NOT NULL,
  `pwdm_mname` varchar(20) NOT NULL,
  `pwdg_lname` varchar(50) NOT NULL,
  `pwdg_fname` varchar(20) NOT NULL,
  `pwdg_mname` varchar(20) NOT NULL,
  `pwdab_lname` varchar(50) NOT NULL,
  `pwdab_fname` varchar(20) NOT NULL,
  `pwdab_mname` varchar(20) NOT NULL,
  `pwdru_lname` varchar(50) NOT NULL,
  `pwdru_fname` varchar(20) NOT NULL,
  `pwdru_mname` varchar(20) NOT NULL,
  `pwd_signature` varchar(30) NOT NULL,
  `request_status` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `expiration_date` date DEFAULT NULL,
  PRIMARY KEY (`pwd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form_soloparent`
--

DROP TABLE IF EXISTS `form_soloparent`;
CREATE TABLE IF NOT EXISTS `form_soloparent` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_lastname` varchar(50) NOT NULL,
  `sp_firstname` varchar(30) NOT NULL,
  `sp_middlename` varchar(10) NOT NULL,
  `sp_age` int(11) NOT NULL,
  `sp_sex` varchar(20) NOT NULL,
  `sp_dob` date NOT NULL,
  `sp_pob` varchar(100) NOT NULL,
  `sp_address` varchar(100) NOT NULL,
  `sp_brgy` varchar(100) NOT NULL,
  `sp_city` varchar(20) NOT NULL,
  `sp_province` varchar(50) NOT NULL,
  `sp_email` varchar(50) NOT NULL,
  `sp_mobilenum` varchar(20) NOT NULL,
  `sp_educational` varchar(100) NOT NULL,
  `sp_occupation` varchar(100) NOT NULL,
  `sp_monthlyincome` varchar(100) NOT NULL,
  `spfc_fullname` varchar(100) NOT NULL,
  `spfc_relationship` varchar(100) NOT NULL,
  `spfc_age` int(11) NOT NULL,
  `spfc_status` varchar(50) NOT NULL,
  `spfc_dob` date NOT NULL,
  `spfc_educational` varchar(100) NOT NULL,
  `spfc_occupation` varchar(100) NOT NULL,
  `spfc_monthlyincome` varchar(100) NOT NULL,
  `spfc_fullname_two` varchar(100) NOT NULL,
  `spfc_relationship_two` varchar(100) NOT NULL,
  `spfc_age_two` varchar(100) NOT NULL,
  `spfc_status_two` varchar(50) NOT NULL,
  `spfc_dob_two` date NOT NULL,
  `spfc_educational_two` varchar(100) NOT NULL,
  `spfc_occupation_two` varchar(255) NOT NULL,
  `spfc_monthlyincome_two` varchar(50) NOT NULL,
  `spfc_fullname_three` varchar(100) NOT NULL,
  `spfc_relationship_three` varchar(50) NOT NULL,
  `spfc_age_three` varchar(20) NOT NULL,
  `spfc_status_three` varchar(20) NOT NULL,
  `spfc_dob_three` varchar(20) NOT NULL,
  `spfc_educational_three` varchar(50) NOT NULL,
  `spfc_occupation_three` varchar(50) NOT NULL,
  `spfc_monthlyincome_three` varchar(50) NOT NULL,
  `spfc_fullname_four` varchar(100) NOT NULL,
  `spfc_relationship_four` varchar(50) NOT NULL,
  `spfc_age_four` varchar(20) NOT NULL,
  `spfc_status_four` varchar(20) NOT NULL,
  `spfc_dob_four` varchar(20) NOT NULL,
  `spfc_educational_four` varchar(50) NOT NULL,
  `spfc_occupation_four` varchar(50) NOT NULL,
  `spfc_monthlyincome_four` varchar(50) NOT NULL,
  `spfc_fullname_five` varchar(100) NOT NULL,
  `spfc_relationship_five` varchar(50) NOT NULL,
  `spfc_age_five` varchar(20) NOT NULL,
  `spfc_status_five` varchar(20) NOT NULL,
  `spfc_dob_five` varchar(20) NOT NULL,
  `spfc_educational_five` varchar(50) NOT NULL,
  `spfc_occupation_five` varchar(50) NOT NULL,
  `spfc_monthlyincome_five` varchar(50) NOT NULL,
  `sp_curr_status` varchar(50) NOT NULL,
  `sp_circumstances` text NOT NULL,
  `sp_problems` text NOT NULL,
  `sp_family_resources` text NOT NULL,
  `curr_date` date NOT NULL,
  `sp_signature` varchar(50) NOT NULL,
  `request_status` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `expiration_date` date DEFAULT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_soloparent`
--

INSERT INTO `form_soloparent` (`sp_id`, `sp_lastname`, `sp_firstname`, `sp_middlename`, `sp_age`, `sp_sex`, `sp_dob`, `sp_pob`, `sp_address`, `sp_brgy`, `sp_city`, `sp_province`, `sp_email`, `sp_mobilenum`, `sp_educational`, `sp_occupation`, `sp_monthlyincome`, `spfc_fullname`, `spfc_relationship`, `spfc_age`, `spfc_status`, `spfc_dob`, `spfc_educational`, `spfc_occupation`, `spfc_monthlyincome`, `spfc_fullname_two`, `spfc_relationship_two`, `spfc_age_two`, `spfc_status_two`, `spfc_dob_two`, `spfc_educational_two`, `spfc_occupation_two`, `spfc_monthlyincome_two`, `spfc_fullname_three`, `spfc_relationship_three`, `spfc_age_three`, `spfc_status_three`, `spfc_dob_three`, `spfc_educational_three`, `spfc_occupation_three`, `spfc_monthlyincome_three`, `spfc_fullname_four`, `spfc_relationship_four`, `spfc_age_four`, `spfc_status_four`, `spfc_dob_four`, `spfc_educational_four`, `spfc_occupation_four`, `spfc_monthlyincome_four`, `spfc_fullname_five`, `spfc_relationship_five`, `spfc_age_five`, `spfc_status_five`, `spfc_dob_five`, `spfc_educational_five`, `spfc_occupation_five`, `spfc_monthlyincome_five`, `sp_curr_status`, `sp_circumstances`, `sp_problems`, `sp_family_resources`, `curr_date`, `sp_signature`, `request_status`, `image`, `expiration_date`) VALUES
(2, 'Butones', 'Macar Angelo', 'A.', 24, 'Male', '1996-08-12', 'Calapan', '05 Jacobs Bypass Apt. 502', 'Ibaba East', 'Calapan City', 'Oriental Mindoro', 'deejaydarkblazer@gmail.com', '09518695595', 'High school diploma or GED', 'Company Driver', '54,300', '', '', 0, '', '2021-07-12', '', '', '', '', '', '0', '', '2021-07-12', '', '', '', '', '', '0', '', '2021-07-12', '', '', '', '', '', '0', '', '2021-07-12', '', '', '', '', '', '0', '', '2021-07-12', '', '', '', 'Legal Guardianship', '', '', '', '2021-07-12', 'MACAR ANGELO BUTONES', 'Disapproved', 'idpicture.jpg', '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `middlename`, `email`, `username`, `password`, `role`, `status`, `created_date`, `image`) VALUES
(39, '', '', '', 'admin@admin.com', 'System Administrator', '$2y$10$QPYO4b83Q4WdPlGuHzbuNOQmPWfethjAtgMV53v6QGeChTB47lpuK', 'Administrator', 'Verified', '2021-07-01 10:03:39', ''),
(40, '', '', '', 'superadmin@admin.com', 'Super Admin', '$2y$04$RgaM216WT.3OKZycFSKqJOdP6qnN4AdhdPQ2ZP5WIR/rDtP8bnAx6', 'Administrator', 'Verified', '2021-07-03 17:03:56', ''),
(41, '', '', '', 'cswd_admin@admin.com', 'CSWD_Admin', '$2y$04$m1caT/7IMf.ZUVSyshNNeOzhLkeyg85ETy9iO2kmvXBJj2Edgzroy', 'Administrator', 'Activated', '2021-07-04 06:10:55', ''),
(49, 'Butones', 'Macar Angelo', 'A.', 'deejaydarkblazer@gmail.com', 'djdarkblazer', '$2y$10$IjkJsJX4Gmtn7tXeg0QDcu7Xglq35cZE69KVaIs4gmJ8Co/F355lu', 'Employee', 'Activated', '2021-07-11 21:40:08', 'profile ko.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
