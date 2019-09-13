-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 08:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(42, 'Web', '2019-06-27 06:36:17', '2019-06-27 06:36:17', NULL),
(43, 'Automation', '2019-06-27 06:38:44', '2019-06-27 06:38:44', NULL),
(44, 'Programming', '2019-06-27 06:39:28', '2019-06-27 06:39:28', NULL),
(45, 'Computer Science', '2019-06-27 06:39:35', '2019-06-27 06:39:35', NULL),
(46, 'Database', '2019-08-09 12:20:18', '2019-08-09 12:20:18', NULL),
(47, 'Telecommunication', '2019-08-09 12:20:51', '2019-08-09 12:20:51', NULL),
(48, 'Robotics', '2019-08-09 12:21:22', '2019-08-09 12:21:22', NULL),
(49, 'Software Application', '2019-08-09 12:22:28', '2019-08-09 12:22:28', NULL),
(50, 'Agriculture', '2019-08-09 12:28:53', '2019-08-09 12:28:53', NULL),
(51, 'Environment', '2019-08-09 12:29:28', '2019-08-09 12:29:28', NULL),
(52, 'Implementation', '2019-08-09 12:30:10', '2019-08-09 12:30:10', NULL),
(53, 'Data Analytics', '2019-08-09 12:33:29', '2019-08-09 12:33:29', NULL),
(54, 'Artificial Intelligence', '2019-08-09 12:35:03', '2019-08-09 12:35:03', NULL),
(55, 'Virtual Reality', '2019-08-09 12:35:30', '2019-08-09 12:35:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `author`, `description`, `file_path`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Archive', 'Engr. Ochi', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'files/images/dnDMEO1OzjEjLCnR5Nal7ZVrvMERpSVJaIeOyvAW.jpeg', 'Projects', '2019-07-21 09:13:00', '2019-07-21 09:13:00', NULL),
(2, 'webstuff', 'Engr. Ochi', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 'files/documents/3Uxbgea0QwYM8WCoW0wQP5y2D3Ui31Ni7pjYtxlZ.docx', 'Artifacts', '2019-07-21 12:30:49', '2019-07-21 12:30:49', NULL),
(3, 'Home automation of house services and shi', 'Engr. belle boss', 'we made it happen. he did it . real shit went down, not literal sht but dshit, you know wah i mean you uderstand right , i know you understad anbi smart guy for sure\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'files/documents/pZflmaklvUPzgVxVXWEvwGbkVw6p7Jx5SB85icxw.docx', 'Projects', '2019-07-26 16:16:28', '2019-07-26 16:16:28', NULL),
(4, 'Home automation and services', 'Engr. belle boss', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'files/documents/9rsH6KBggnJfQfR68cvAeZnsBaZhzpBPXzcheHs9.docx', 'Projects', '2019-07-26 16:17:42', '2019-07-26 16:17:42', NULL),
(5, 'Automation of solar appliances', 'Engr. Godwin', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'files/documents/hUtzPpqL5fDTSdbxMr2k54p33V0lZ1cFh8ZdOC8J.docx', 'Projects', '2019-07-26 16:19:22', '2019-07-26 16:19:22', NULL),
(6, 'Automation of services and farms and poultry', 'Engr. Godwin boss', 'we made it happen. he did it . real shit went down, not literal sht but dshit, you know wah i mean you uderstand right , i know you understad anbi smart guy for sure\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'files/documents/pZflmaklvUPzgVxVXWEvwGbkVw6p7Jx5SB85icxw.docx', 'Projects', '2019-07-26 16:16:28', '2019-07-26 16:16:28', NULL),
(7, 'office automation in and out of offices', 'Engr. Godwin', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'files/documents/hUtzPpqL5fDTSdbxMr2k54p33V0lZ1cFh8ZdOC8J.docx', 'Projects', '2019-07-26 16:19:22', '2019-07-26 16:19:22', NULL),
(8, 'Farm automation', 'Engr. Godwin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'files/documents/KA65nRAJ4a7UYrN3MUzRVmP9Wbd7L0Jvv5IrFih8.docx', 'Projects', '2019-07-31 11:14:46', '2019-07-31 11:14:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Jide', 'user', 'chukajide@yahoo.com', '$2y$10$5UtU6lrtmT0fMqajZjLfGOfNWC5y1lZfr.WrfVEbBqLftWQKtI/mm', '2019-08-18 09:28:38', '2019-08-18 09:28:38', NULL),
(7, 'Jide', 'user', 'chukajide@gmail.com', '$2y$10$feAHxdx.OkvcsFbKZy/CMunSB2qMYqOUol9o1aLikzG6BAyXwBhH.', '2019-08-23 07:53:28', '2019-08-23 07:53:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
