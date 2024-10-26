-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 12:04 PM
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
-- Database: `example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameFirst` varchar(255) NOT NULL,
  `nameLast` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `positionDescription` longtext NOT NULL,
  `experienceCompanyName` varchar(255) NOT NULL,
  `experienceCompanyAddress` varchar(255) NOT NULL,
  `experienceCompanyDuration` varchar(255) NOT NULL,
  `experienceCompanyPosition` varchar(255) NOT NULL,
  `experienceCompanyPositionDescription` longtext NOT NULL,
  `educationSchoolName` varchar(255) NOT NULL,
  `educationSchoolAddress` varchar(255) NOT NULL,
  `educationSchoolDuration` varchar(255) NOT NULL,
  `educationSchoolCourse` varchar(255) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `educationPosition` varchar(255) NOT NULL,
  `interest` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `nameFirst`, `nameLast`, `contact`, `email`, `address`, `position`, `positionDescription`, `experienceCompanyName`, `experienceCompanyAddress`, `experienceCompanyDuration`, `experienceCompanyPosition`, `experienceCompanyPositionDescription`, `educationSchoolName`, `educationSchoolAddress`, `educationSchoolDuration`, `educationSchoolCourse`, `projectName`, `educationPosition`, `interest`, `created_at`, `updated_at`) VALUES
(1, 'Nicko', 'Palomo', '09154872213', 'palomo.nicko@gmail.com', 'Sta. Barbara', 'Front-End & Back-End Developer', 'I\'ve been a front-end and back-end developer for a year, developing HTML, CSS, JavaScript, React, and Node.js. I\'m motivated, results-oriented, and looking for a successful team-oriented organization with room to expand.', 'Lori\'s Event', 'Tangos, Baliwag, Bulacan', 'Aug 2019 - current', 'Front and Back End developer', 'The main programer of the company', 'Baliwag Polytechnic Collage', 'Baliwag, Bulacan', '2021 - current', 'Bachelor of Science in Information Technology', 'Lori\'s Events Website', 'I am a front-end and back-end developer with this project. Maintaining the elegance with security of the website.', 'My interest are playing video games, programming, and chess', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
