-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 11:30 AM
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
-- Database: `volunteer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `emergency_contact_name` varchar(255) NOT NULL,
  `emergency_contact_phone` varchar(11) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `medical_insurance` varchar(5) NOT NULL,
  `physician_care` varchar(100) NOT NULL,
  `service_branch` varchar(20) NOT NULL,
  `bls_familiarity` varchar(5) NOT NULL,
  `training_attended` text NOT NULL,
  `willing_to_train` varchar(10) NOT NULL,
  `tshirt_size` varchar(10) NOT NULL,
  `pants_size` varchar(10) NOT NULL,
  `waiver_agreement` tinyint(1) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `fullname`, `age`, `gender`, `address`, `emergency_contact_name`, `emergency_contact_phone`, `profession`, `medical_insurance`, `physician_care`, `service_branch`, `bls_familiarity`, `training_attended`, `willing_to_train`, `tshirt_size`, `pants_size`, `waiver_agreement`, `registration_date`) VALUES
(1, 'ALTHEA G. HAIRON', 26, 'Female', 'TAYTAY, PALAWAN', 'ROMULO JR B. SUNGA', '09508486306', 'IT', 'No', 'N/A', 'Airforce', 'Yes', 'water search and rescue', 'Yes', 'X-LARGE', '34', 1, '2024-09-19 06:00:14'),
(2, 'ROSANNO V. ESLLER', 30, 'Male', 'SAN MANUEL, PPC, PALAWAN', 'ARNEL V. ESLLER', '09111111111', 'FINANCE', 'Yes', 'N/A', 'Civilian', 'Yes', 'SAMPLE DATA ENTRY', 'Yes', 'LARGE', '32', 1, '2024-09-19 09:29:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
