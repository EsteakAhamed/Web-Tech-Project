-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2025 at 12:08 PM
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
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `dNmae` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `reason` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `dNmae`, `date`, `time`, `reason`) VALUES
(1, 'Dr. John Smith (Cardiologist)', '2025-10-09', '12:54:00', 'fever'),
(2, 'Dr. Sarah Wilson (Dermatologist)', '2025-10-17', '13:21:00', 'ack pain');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `sub` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `sub`, `details`) VALUES
(1, 'Given little time', 'DOctors should give more time to patients');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `regnumber` varchar(50) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `password`, `speciality`, `regnumber`, `salary`, `picture`, `created_at`) VALUES
(1, 'Emon', 'emon@gmail.com', 'doctor123', 'cardiology', 'ABC123', 200000.00, 'wallhaven-95xrkw_1920x1080.png', '2025-09-30 05:24:16'),
(2, 'Dr. Abdul Karim', 'abdulkarim@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cardiology', 'AB1234', 55000.00, NULL, '2025-09-30 05:26:43'),
(3, 'Dr. Shafiqur Rahman', 'shafiqur@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'neurology', 'CD5678', 60000.00, NULL, '2025-09-30 05:26:43'),
(4, 'Dr. Farhana Akter', 'farhana@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pediatrics', 'EF9012', 50000.00, NULL, '2025-09-30 05:26:43'),
(5, 'Dr. Mahmudul Hasan', 'mahmudul@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cardiology', 'GH3456', 65000.00, NULL, '2025-09-30 05:26:43'),
(6, 'Dr. Nusrat Jahan', 'nusrat@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'neurology', 'IJ7890', 48000.00, NULL, '2025-09-30 05:26:43'),
(7, 'Dr. Kamrul Islam', 'kamrul@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pediatrics', 'KL1122', 52000.00, NULL, '2025-09-30 05:26:43'),
(8, 'Dr. Rehana Parvin', 'rehana@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cardiology', 'MN3344', 57000.00, NULL, '2025-09-30 05:26:43'),
(9, 'Dr. Saiful Alam', 'saiful@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'neurology', 'OP5566', 60000.00, NULL, '2025-09-30 05:26:43'),
(10, 'Dr. Taslima Begum', 'taslima@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pediatrics', 'QR7788', 49000.00, NULL, '2025-09-30 05:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `patient_name`, `feedback`, `created_at`) VALUES
(1, 'Md. Esteak Ahamed', 'The staff was incredibly supportive, and the treatment I received was top-notch. Highly recommend HealWell Hospital!', '2025-09-30 06:03:51'),
(2, 'Md. Eaoumoon Haque', 'The facilities are clean, and the doctors are very knowledgeable. My recovery was smooth thanks to the care provided.', '2025-09-30 06:03:51'),
(3, 'Mahbubur Rahman', 'Excellent service! The nurses were kind, and the hospital environment was very comforting.', '2025-09-30 06:03:51'),
(4, 'Ayesha Siddiqua', 'I was impressed by the efficiency of the emergency department. The doctors acted quickly and professionally.', '2025-09-30 06:03:51'),
(5, 'Tanvir Hasan', 'The hospital provided great follow-up care after my surgery. I felt safe and well taken care of.', '2025-09-30 06:03:51'),
(6, 'Fatema Khatun', 'Very friendly staff and clean wards. The doctors gave clear explanations about my treatment.', '2025-09-30 06:03:51'),
(7, 'Shakil Ahmed', 'Affordable treatment without compromising on quality. I appreciate the dedication of the team.', '2025-09-30 06:03:51'),
(8, 'Nusrat Jahan', 'I loved how the hospital maintained proper hygiene and safety protocols during my stay.', '2025-09-30 06:03:51'),
(9, 'Rafiul Islam', 'The cardiology department is excellent. They helped me with my heart condition and guided me throughout recovery.', '2025-09-30 06:03:51'),
(10, 'Sharmin Akter', 'I am very satisfied with the pediatric unit. They treated my child with so much care and compassion.', '2025-09-30 06:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `email`, `phone`, `address`, `created_at`) VALUES
(1, 'Nirob Hossain', 25, 'nirob@gmail.com', '01710000001', 'Noakhali, Chattogram Division', '2025-09-30 05:57:29'),
(2, 'Ayesha Siddiqua', 30, 'ayesha@gmail.com', '01710000002', 'Dhanmondi, Dhaka', '2025-09-30 05:57:29'),
(3, 'Shakil Ahmed', 28, 'shakil@gmail.com', '01710000003', 'Rajshahi City, Rajshahi Division', '2025-09-30 05:57:29'),
(4, 'Mitu Akter', 22, 'mitu@gmail.com', '01710000004', 'Sylhet Sadar, Sylhet Division', '2025-09-30 05:57:29'),
(5, 'Tanvir Hasan', 35, 'tanvir@gmail.com', '01710000005', 'Barishal City, Barishal Division', '2025-09-30 05:57:29'),
(6, 'Fatema Khatun', 27, 'fatema@gmail.com', '01710000006', 'Kushtia, Khulna Division', '2025-09-30 05:57:29'),
(7, 'Rafiul Islam', 40, 'rafiul@gmail.com', '01710000007', 'Rangpur City, Rangpur Division', '2025-09-30 05:57:29'),
(8, 'Nusrat Jahan', 24, 'nusrat@gmail.com', '01710000008', 'Comilla, Chattogram Division', '2025-09-30 05:57:29'),
(9, 'Imran Kabir', 32, 'imran@gmail.com', '01710000009', 'Mymensingh City, Mymensingh Division', '2025-09-30 05:57:29'),
(10, 'Sharmin Akter', 26, 'sharmin@gmail.com', '01710000010', 'Gazipur, Dhaka Division', '2025-09-30 05:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `dob`, `gender`, `phone`, `email`, `address`, `blood`, `password`) VALUES
(1, 'Emon', '2002-08-24', 'Male', 1776501675, 'emon@gmail.com', 'Dinajpur', 'B+', 'admin123'),
(2, 'Nirob', '2002-06-06', 'Male', 1881153685, 'nirob@gmail.com', 'Feni', 'A+', 'admin123'),
(5, 'Esteak', '1991-05-22', 'Male', 1500000000, 'esteak1@gmail.com', 'Kuril', 'AB+', 'esteak123'),
(8, 'Ahsan Habib', '1995-03-15', 'Male', 1711112221, 'ahsan@gmail.com', 'Dhaka, Bangladesh', 'A+', 'admin123'),
(9, 'Farzana Akter', '1997-07-20', 'Female', 1822223332, 'farzana@gmail.com', 'Chittagong, Bangladesh', 'B+', 'admin123'),
(10, 'Rakibul Islam', '1994-11-05', 'Male', 1633334443, 'rakibul@gmail.com', 'Rajshahi, Bangladesh', 'O+', 'admin123'),
(11, 'Nusrat Jahan', '1998-02-10', 'Female', 1944445554, 'nusrat@gmail.com', 'Sylhet, Bangladesh', 'AB+', 'admin123'),
(12, 'Mehedi Hasan', '1993-09-25', 'Male', 1555556665, 'mehedi@gmail.com', 'Khulna, Bangladesh', 'A-', 'admin123'),
(13, 'Shamima Sultana', '1999-12-18', 'Female', 1766667776, 'shamima@gmail.com', 'Barisal, Bangladesh', 'B-', 'admin123'),
(14, 'Tanvir Ahmed', '1996-01-30', 'Male', 1877778887, 'tanvir@gmail.com', 'Rangpur, Bangladesh', 'O-', 'admin123'),
(15, 'Moumita Rani', '1995-05-12', 'Female', 1988889998, 'moumita@gmail.com', 'Mymensingh, Bangladesh', 'AB-', 'admin123'),
(16, 'Shahriar Kabir', '1992-08-08', 'Male', 1699990009, 'shahriar@gmail.com', 'Comilla, Bangladesh', 'A+', 'admin123'),
(17, 'Jannatul Ferdous', '1997-04-22', 'Female', 1510111213, 'jannatul@gmail.com', 'Gazipur, Bangladesh', 'B+', 'admin123'),
(18, 'Tamim ', '2021-06-15', 'Male', 1412345678, 'tamim@gmail.com', 'Bihari Camp', 'O+', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `regnumber` (`regnumber`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
