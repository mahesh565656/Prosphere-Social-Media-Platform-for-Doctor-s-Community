-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 03:05 PM
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
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `text` varchar(500) NOT NULL,
  `post_image` varchar(200) NOT NULL,
  `post_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `added_by`, `text`, `post_image`, `post_date`) VALUES
(1, 'roshanghongade@gmail.com', 'First Post', 'Post/andrew-neel-ute2XAFQU2I-unsplash.jpg', '2024-04-05 13:19:44.967547'),
(2, 'jayesh@gmail.com', 'Hello World', 'Post/WhatsApp Image 2024-02-20 at 9.22.17 AM.jpeg', '2024-04-05 13:19:56.391495'),
(3, 'pawan@gmail.com', 'Data Structure', 'Post/Mahesh Arunrao Ghongade.jpg', '2024-04-05 13:20:53.724683'),
(4, 'ghongade644@gmail.com', 'Project Competetion', 'Post/Internship logo.jpeg', '2024-04-05 13:21:02.388564'),
(5, 'maheshghongade644@gmail.com', 'Good Morning', 'Post/Internship logo.jpeg', '2024-04-05 13:21:15.987959'),
(6, 'maheshghongade644@gmail.com', 'Good Afternoon', 'Post/WhatsApp Image 2024-01-31 at 12.57.19 PM.jpeg', '2024-04-05 13:21:27.969257'),
(7, 'maheshghongade644@gmail.com', 'Friends', 'Post/1.png', '2024-04-05 13:37:08.103381'),
(8, 'maheshghongade644@gmail.com', 'Success', 'Post/banner 1 Yhills Drive.PNG', '2024-03-27 06:52:33.933992'),
(9, 'maheshghongade644@gmail.com', 'Post Uploaded', 'Post/2.png', '2024-04-05 13:37:13.061813'),
(10, 'prpotecollege@gmail.com', 'New Post', 'Post/1.png', '2024-04-07 06:53:35.373002');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `address` varchar(400) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipCode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `image`, `firstName`, `lastName`, `Designation`, `qualification`, `gender`, `phoneNumber`, `address`, `state`, `zipCode`) VALUES
(5, 'Dr. Mahesh  Ghongade', 'roshan@gmail.com', '$2y$10$8VSrls0OX1tZKbYUMMzH2eRRo1XIhbsyV9pUEXX9SL9bf0D4NxZ/S', 'images/wp6878772.png', 'Rosnan', 'Ghongade', 'MBBS', '', '', '', '', '', 0),
(12, 'Dr. Roshan Ghongade', 'maheshghongade@gmail.com', '$2y$10$8feIXWCowGXAv4TGl.b14.QK/3HTUh77YCmENRl6.e3OvjJPG5sca', 'images/7.png', 'Mahesh', 'Ghongade', 'Anesthesiologist', '', '', '', '', '', 0),
(14, 'Dr. Jayesh Deshmukh', 'user1@gmail.com', '$2y$10$VcAnjlcp5Z6CB7VVSnbDSeG54gNvRt3g/q2OIdw4cY/l3PZgJfcWe', 'images/6.png', '', '', 'Neurologist', '', '', '', '', '', 0),
(15, 'Dr. saurabh Bambal', 'roshanghongade2@gmail.com', '$2y$10$SX8doQI1rd4MeYVmTi2.weBoC.ttWpK7y.3ShgFa5GQA8FFP/ucoS', 'images/5.png', '', '', 'Surgeon', '', '', '', '', '', 0),
(16, 'Dr. Yash dalvi', 'studybuddybusiness@gmail.com', '$2y$10$uqSTTzaZy7XvUUIq5Agvi.ZFBLNskZlGMfbi0FPR3F4Gi235K/cxm', 'images/7.png', 'Roshan', 'Ghongade', 'Psychiatrist', '', '', '987263738', 'Amravati, Maharashtra, India 444801.', 'Maharashtra', 0),
(17, 'Dr. Shivraj Kadam', 'prpotecollege@gmail.com', '$2y$10$rQsKYGeDVIL5T28.2xO3ne74hVUQvwqzV54lOZilT6C9tBLXCZqoK', 'images/Profile Photo.png', 'Mahesh', 'Ghongade', 'Dentist', 'Phd', 'Female', '987263738', 'Amravati, Maharashtra, India 444801.', 'Maharashtra', 0),
(18, 'Mahesh  Ghongade', 'maheshghongade62@gmail.com', '$2y$10$refQhiiNGv58AyzIPPxOBOmQJKTWELMQVqN7e0cxB9yVV7JoA7vnK', 'images/vecteezy_ai-generated-headphone-and-vivid-color-powder-creative_39651599.jpg', 'Mahesh', 'Ghongade', 'Influencer', '', '', '987263738', 'Amravati, Maharashtra, India 444801.', 'Maharashtra', 345678),
(19, '', '', '$2y$10$JXfVAKbCGbZXt7bGlg7H0eHgqcfpoTDJIiicF49q6AUagyVHTf3UO', '', '', '', '', '', '', '', '', '', 0),
(20, 'Mahesh  Ghongade', 'email@gmail.com', '$2y$10$YeCSjIjbgHxD/xOOq.YaEurNlS3Y6P/Z8dcYKgw5HGjA8NycbUH8e', '', '', '', '', '', '', '', '', '', 0),
(21, 'Database Mission Successful !!!', 'd@gmail.com', '$2y$10$3y1QN2iVpAkOdyYZ0uDUU.qkVpYgOxNNpxD8nQgN.83MP/mKMlS8.', 'images/2.png', 'Mahesh', 'Ghongade', 'Applied Science', 'Post Graduate', 'gender', '', '', 'Maharashtra', 0),
(22, 'Mahesh  Ghongade', 'maheshghongade644@gmail.com', '$2y$10$.hlLMHjsSSUMEf.SKdOpa.nRjIPMVdX2EanpAzFLRphxLXR.2fkeC', 'images/1.png', '', '', 'Medical', 'Post Graduate', 'Male', '', '', '', 0),
(23, 'New User', 'new@gmail.com', '$2y$10$gNSQgfA2OuFyzMiatLSd2u.c/qBxG7RSu5OmPOYyt/4RTCiTgbXAK', 'images/5.png', '', '', 'Medical', 'Graduate', 'Male', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
