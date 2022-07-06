-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 07:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_of_new` int(11) NOT NULL,
  `comment` varchar(250) COLLATE utf8mb4_persian_ci NOT NULL,
  `full_name` varchar(80) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_of_new`, `comment`, `full_name`, `email`) VALUES
(35, 'uhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh\r\nعااااالی', 'فرشاد ارباب', 'farshadarbvab202@gmail.com'),
(35, 'این خبر دروغ است من بار ها خبر های دروغ از وبسایت شما شندیده ام ', 'علی امینی', 'aliamin@gmail.com'),
(35, 'این خبر دروغ است من بار ها خبر های دروغ از وبسایت شما شندیده ام ', 'علی امینی', 'aliamin@gmail.com'),
(35, 'این خبر دروغ است من بار ها خبر های دروغ از وبسایت شما شندیده ام ', 'علی امینی', 'aliamin@gmail.com'),
(36, 'مرگ بر آمریکا', 'محمد کاشانی', 'mohammad@gmail.com'),
(37, 'این یک کامنت است', '', ''),
(37, 'Checking the network cables, modem, and router\r\nReconnecting to Wi-Fi\r\nRunning Windows Network Diagnostics\r\nERR_INTERNET_DISCONNECTED', '', ''),
(36, ' Browse(current)\r\nStructure Structure\r\nSQL SQL\r\nSearch Search\r\nInsert Insert\r\nExport Export\r\nImport Import\r\nPrivileges Privileges\r\nOperations Operations\r\nTracking Tracking\r\nTriggers Triggers\r\nPage-related settings Click on the bar to scroll to top of', '', ''),
(35, ' Browse(current)\r\nStructure Structure\r\nSQL SQL\r\nSearch Search\r\nInsert Insert\r\nExport Export\r\nImport Import\r\nPrivileges Privileges\r\nOperations Operations\r\nTracking Tracking\r\nTriggers Triggers\r\nPage-related settings Click on the bar to scroll to top of', '', ''),
(35, 'نظرتان را کامنت کنید', '', ''),
(35, 'نظرتان را کامنت کنید', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
