-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 04:25 PM
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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `new_title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `new` varchar(5000) COLLATE utf8mb4_persian_ci NOT NULL,
  `writer_name` varchar(80) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `new_title`, `new`, `writer_name`) VALUES
(35, '5 فاجعه مرگبار در ایران.از متروپل و پلاسکو تا کشتی سانچی و انفجار در پادگان خرم آباد', 'حوادث بسیاری در چند دهه گذشته در ایران اتفاق افتاده و به به عنوان فاجعه در افکار عمومی باقی مانده است. به رغم تاکید های مقام جمهوری اسلامی برای پیگیری و اصلاح امور، این حوادث تاثیر چندانی بر روند کارها نداشته و حوادث مشابه بارها در دولت های مختلف پس از انقلاب تکرار شده اند.', 'علی اکبری'),
(36, 'وزارت خارجه آمریکا:مذاکرات تازه ای با ایران برنامه ریزی نشده، مطالب تهران نامروط بود', 'ند پرایس، سخنگوی وزارت خارجه آمریکا گفته است که ایران هفته ها و ماه های اخیر بارها مطالبات نامربوطی مطرح کرده که فراتر از نمایندنگان آمرکا و ایران در مذاکرات غیر مستقیمی در دوحه شرکت کردند که پس از دو روز بدون نتیجه به پایان رسید.دوطرف یکدیگر را مسِول شکست گفتگوها معرفی کردند.', 'مریم اسمائیلی مقدم'),
(37, 'عنوان خبری ویرایش شده', 'خبر 100', 'مهدی عبداللهی');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
