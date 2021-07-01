-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 02:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

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

CREATE TABLE `coa_activities` (
  `coa_id` int(11) NOT NULL,
  `coa_date` date NOT NULL,
  `coa_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coa_activities`
--

INSERT INTO `coa_activities` (`coa_id`, `coa_date`, `coa_name`) VALUES
(9, '2021-05-27', 'Pachoca Solo Parents & SEA-K Members'),
(10, '2021-05-01', 'BARANGAYanihan AYUDA'),
(11, '2021-04-26', 'Book Launching : MAGANDANG UGALI PARA SA MAGANDANG BUHAY'),
(12, '2021-03-10', 'Solo Parenting in Times of Pandemic: LGU Support and Advocacy Campaign'),
(13, '2021-03-09', 'Isang Araw para sa mga May Kapansanan'),
(14, '2021-06-12', '123rd Philippine Independence Day');

-- --------------------------------------------------------

--
-- Table structure for table `form_soloparent`
--

CREATE TABLE `form_soloparent` (
  `sp_id` int(11) NOT NULL,
  `sp_fullname` varchar(100) NOT NULL,
  `sp_age` int(11) NOT NULL,
  `sp_sex` varchar(20) NOT NULL,
  `sp_dob` date NOT NULL,
  `sp_pob` varchar(100) NOT NULL,
  `sp_address` varchar(100) NOT NULL,
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
  `request_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_soloparent`
--

INSERT INTO `form_soloparent` (`sp_id`, `sp_fullname`, `sp_age`, `sp_sex`, `sp_dob`, `sp_pob`, `sp_address`, `sp_email`, `sp_mobilenum`, `sp_educational`, `sp_occupation`, `sp_monthlyincome`, `spfc_fullname`, `spfc_relationship`, `spfc_age`, `spfc_status`, `spfc_dob`, `spfc_educational`, `spfc_occupation`, `spfc_monthlyincome`, `spfc_fullname_two`, `spfc_relationship_two`, `spfc_age_two`, `spfc_status_two`, `spfc_dob_two`, `spfc_educational_two`, `spfc_occupation_two`, `spfc_monthlyincome_two`, `spfc_fullname_three`, `spfc_relationship_three`, `spfc_age_three`, `spfc_status_three`, `spfc_dob_three`, `spfc_educational_three`, `spfc_occupation_three`, `spfc_monthlyincome_three`, `spfc_fullname_four`, `spfc_relationship_four`, `spfc_age_four`, `spfc_status_four`, `spfc_dob_four`, `spfc_educational_four`, `spfc_occupation_four`, `spfc_monthlyincome_four`, `spfc_fullname_five`, `spfc_relationship_five`, `spfc_age_five`, `spfc_status_five`, `spfc_dob_five`, `spfc_educational_five`, `spfc_occupation_five`, `spfc_monthlyincome_five`, `sp_curr_status`, `sp_circumstances`, `sp_problems`, `sp_family_resources`, `curr_date`, `sp_signature`, `request_status`) VALUES
(8, 'Macar Angelo Butones', 24, 'Male', '1996-08-12', 'Calapan', 'Ibaba East Calapan City', 'deejaydarkblazer@gmail.com', '09518695595', 'College', 'Student', '50,000', 'none', 'none', 0, 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'Legal Guardianship', 'qweasdxzxc', 'qweasdzxc', 'qweasdzxc', '2021-06-12', 'MACAR BUTONES', 'Approved'),
(9, 'Carmelita Butones', 60, 'Female', '1960-10-16', 'Calapan', 'Ibaba East Calapan City', 'carmenbutones@gmail.com', '09518695595', 'Elementary', 'Tailor', '50,000', 'Macar Angelo Butones', 'sob', 24, 'single', '1996-08-12', 'college', 'student', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'none', 'none', '0', 'none', '2021-06-12', 'none', 'none', 'none', 'Legal Guardianship', 'qweqwewqeqweqweqwe', 'qweasdasfeas', 'qweqweqweqwe', '2021-06-12', 'CARMELITA BUTONES', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `status`, `created_date`) VALUES
(38, 'System_Admin', 'admin@admin.com', '$2y$04$CPb2bFteHUb.sl3qYrhhieI7Wt5tWJBs.HOTA4hPPCi69JP04qnzu', 'Administrator', 'Verified', '2021-06-10 19:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coa_activities`
--
ALTER TABLE `coa_activities`
  ADD PRIMARY KEY (`coa_id`);

--
-- Indexes for table `form_soloparent`
--
ALTER TABLE `form_soloparent`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coa_activities`
--
ALTER TABLE `coa_activities`
  MODIFY `coa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `form_soloparent`
--
ALTER TABLE `form_soloparent`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
