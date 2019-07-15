-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 03:43 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_1s`
--

CREATE TABLE `attendance_1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Subjectcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CSC239SC2',
  `Reg_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nooflectures` int(11) NOT NULL DEFAULT '50',
  `lectureattend` int(11) NOT NULL,
  `precentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance_1s`
--

INSERT INTO `attendance_1s` (`id`, `created_at`, `Subjectcode`, `Reg_No`, `name`, `nooflectures`, `lectureattend`, `precentage`) VALUES
(1, '2019-01-31 01:29:56', 'CSC239SC2', '2015/CSC/001', 'S. Lesslylavan', 50, 32, 64),
(2, '2019-01-30 06:05:40', 'CSC239SC2', '2015/CSC/042', 'W.M. Rayan Aradha', 50, 41, 82),
(3, '2019-01-30 06:05:40', 'CSC239SC2', '2016/CSC/001', 'Samsudeen Munawwar Ahamed', 50, 38, 76),
(4, '2019-01-30 06:05:40', 'CSC239SC2', '2016/CSC/002', 'Mohamed Ahamed Arham', 50, 33, 66),
(5, '2019-01-30 06:05:40', 'CSC239SC2', '2016/CSC/003', 'A.A.S.N.Athauda', 50, 35, 70),
(6, '2019-01-30 06:07:41', 'CSC239SC2', '2016/CSC/004', 'S.A.Samila Chanuka', 50, 26, 52),
(7, '2019-01-30 11:03:38', 'CSC239SC2', '2016/CSC/005', 'R.H.S.L.Dilshan', 50, 34, 68),
(8, '2019-01-31 01:30:32', 'CSC239SC2', '2016/CSC/007', 'W.Nimasha Nishadi Fernando', 50, 43, 86),
(9, '2019-01-30 11:14:52', 'CSC239SC2', '2016/CSC/008', 'H.M.D.Herath', 50, 49, 98),
(10, '2019-01-31 01:30:47', 'CSC239SC2', '2016/CSC/009', 'S.Jenushanth', 50, 20, 40),
(11, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/010', 'G.H.G.R.Kalpage', 50, 28, 56),
(12, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/011', 'H.L.R.L.Liyanage', 50, 39, 78),
(13, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/012', 'M.Mathanraj', 50, 42, 84),
(14, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/015', 'A.H.Rasika Priyadarshani', 50, 40, 80),
(15, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/019', 'Ramees Mohamed Rizwan', 50, 29, 58),
(16, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/020', 'U.S.Dilan Samaraweera', 50, 37, 74),
(17, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/021', 'S.S.K.Anuka Sanjaya', 50, 24, 48),
(18, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/023', 'Sinthuja Vijayananthan', 50, 40, 80),
(19, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/024', 'K.Sripalasenthuran', 50, 36, 72),
(20, '2019-01-31 01:34:13', 'CSC239SC2', '2016/CSC/025', 'T.M.G.C.B.Tennakoon', 50, 20, 40),
(21, '2019-01-31 01:35:17', 'CSC239SC2', '2016/CSC/027', 'W.R.I.R.Widyasekara', 50, 19, 38),
(22, '2019-01-31 01:35:17', 'CSC239SC2', '2016/CSC/028', 'Methusha Thuraisingam', 50, 50, 100),
(23, '2019-01-31 01:35:17', 'CSC239SC2', '2016/CSC/029', 'R.M.C.K.Rathnayake', 50, 30, 60),
(24, '2019-01-31 01:35:17', 'CSC239SC2', '2016/CSC/030', 'Vithursha Sivakumaran', 50, 38, 76),
(25, '2019-01-31 01:35:17', 'CSC239SC2', '2016/CSC/031', 'Ajanthy Jayarajan', 50, 40, 80),
(26, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/032', 'Thushankgi Balachandran', 50, 29, 58),
(27, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/033', 'D.M.S.Lakshitha', 50, 38, 76),
(28, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/034', 'R.M.Yashodha Nilmini', 50, 39, 78),
(29, '2019-01-30 06:09:38', 'CSC239SC2', '2016/CSC/035', 'Nisamdeen Mohamed Shareek', 50, 33, 66),
(30, '2019-01-30 06:09:24', 'CSC239SC2', '2016/CSC/036', 'N.A.Muhandiram', 50, 45, 90),
(31, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/037', 'Siddique Mohamed Wazeem', 50, 45, 90),
(32, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/039', 'T.D.Pramuditha Chamikara', 50, 35, 70),
(33, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/040', 'H.M.Abhimani Sachithra', 50, 40, 80),
(34, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/041', 'H.W.R.L.Hendrawitharana', 50, 36, 72),
(35, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/042', 'J.S.Shanfravin', 50, 28, 56),
(36, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/043', 'Yothika Yogeswaran', 50, 47, 94),
(37, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/044', 'A.G.Dilshan Dilip Udara', 50, 44, 88),
(38, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/045', 'A.Keerthikan', 50, 22, 44),
(39, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/046', 'Abdul Jabbar Mohamed Rizvi', 50, 40, 80),
(40, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/047', 'N.D.Dodanwala', 50, 22, 44),
(41, '2019-01-31 01:38:24', 'CSC239SC2', '2016/CSC/048', 'R.Shehan Lahiru Jayasinghe', 50, 40, 80),
(42, '2019-01-30 06:09:10', 'CSC239SC2', '2016/CSC/038', 'S.F.Safna', 50, 22, 44);

--
-- Triggers `attendance_1s`
--
DELIMITER $$
CREATE TRIGGER `c` BEFORE INSERT ON `attendance_1s` FOR EACH ROW BEGIN 
 SET NEW.precentage = NEW.lectureattend/NEW.nooflectures*100;
 END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `d` BEFORE UPDATE ON `attendance_1s` FOR EACH ROW BEGIN 
 SET NEW.precentage = NEW.lectureattend/NEW.nooflectures*100;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_13_232658_create_table__lectures_table', 1),
(4, '2019_01_14_032601_create_table__courses_table', 2),
(5, '2019_01_14_033955_create_table__courses_table', 3),
(6, '2019_01_14_041449_create_table__course__s__students_table', 4),
(7, '2019_01_14_050113_create_table__course__g__students_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rayanaradha1993@gmail.com', '$2y$10$erpiSItIX3jWWQYFPEdKx.NI4z0JrZ0IDtJtKM4FYMaEO7fwv1inm', '2019-01-25 21:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `table__course__g__students`
--

CREATE TABLE `table__course__g__students` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lecture_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__course__g__students`
--

INSERT INTO `table__course__g__students` (`id`, `created_at`, `updated_at`, `code`, `name`, `credit`, `Level`, `Lecture_id`) VALUES
(1, '2019-01-13 23:51:38', '2019-01-30 06:56:20', 'CSC101G3', 'Foundations of Computer Science', '3', '1G', 10),
(2, '2019-01-13 23:52:05', '2019-01-13 23:52:05', 'CSC102G3', 'Computer Programming I', '3', '1G', 8),
(3, '2019-01-13 23:52:27', '2019-01-13 23:52:27', 'CSC103G2', 'Multimedia Technologies', '2', '1G', 3),
(4, '2019-01-13 23:52:45', '2019-01-13 23:52:45', 'CSC104G2', 'Design of Algorithms', '2', '1G', 11),
(5, '2019-01-13 23:49:21', '2019-01-30 10:00:18', 'CSC231GC2', 'Software Engineering', '2', '2G', 2),
(6, '2019-01-13 23:49:40', '2019-01-13 23:49:40', 'CSC232GC2', 'Computer Programming II', '2', '2G', 1),
(7, '2019-01-13 23:50:12', '2019-01-13 23:50:12', 'CSC233GC2', 'Database Management Systems', '2', '2G', 2),
(8, '2019-01-13 23:50:46', '2019-01-13 23:50:46', 'CSC234GC2', 'Operating Systems', '2', '2G', 3),
(9, '2019-01-13 23:47:03', '2019-01-13 23:47:03', 'CSC311MC3', 'Advanced Database Design and Systems', '3', '3M', 11),
(10, '2019-01-13 23:47:26', '2019-01-13 23:47:33', 'CSC312MC4', 'Data Communications and Computer Networks', '4', '3M', 11),
(11, '2019-01-13 23:48:18', '2019-01-13 23:48:18', 'CSC313MC3', 'Digital Image Processing', '3', '3M', 11),
(12, '2019-01-13 23:48:47', '2019-01-13 23:48:47', 'CSC314MC8', 'Industrial Training', '8', '3M', 11),
(13, '2019-01-14 07:45:16', '2019-01-29 07:19:38', 'CSC411MC0', 'Research Seminar', '0', '4M', 11),
(14, '2019-01-14 07:44:49', '2019-01-14 07:44:49', 'CSC412MC3', 'Artificial Intelligence', '3', '4M', 11),
(15, '2019-01-14 07:44:06', '2019-01-14 07:44:06', 'CSC414MC3', 'High Performance Computing', '3', '4M', 11),
(16, '2019-01-14 07:43:20', '2019-01-14 07:43:20', 'CSC415MC3', 'Mobile Computing', '3', '4M', 11),
(17, '2019-01-13 23:42:33', '2019-01-13 23:42:33', 'CSC416MC6', 'Research Project', '6', '4M', 11),
(18, '2019-01-13 23:42:59', '2019-01-13 23:42:59', 'CSC417MC3', 'Data Mining and Machine Learning', '3', '4M', 11),
(19, '2019-01-13 23:43:29', '2019-01-13 23:43:29', 'CSC418MC3', 'Compiler Design', '3', '4M', 11),
(20, '2019-01-13 23:44:00', '2019-01-13 23:45:53', 'CSC421MC3', 'Systems Analysis, Design and Project Management', '3', '4M', 11),
(21, '2019-01-13 23:44:46', '2019-01-13 23:45:04', 'CSC422ME2', 'Systems and Network Administration', '2', '4M', 11),
(22, NULL, NULL, 'CSC311GC3', 'Graphics and Visual Computing', '3', '3G', 11),
(24, NULL, NULL, 'CSC312GC1', 'Computer Programming III', '1', '3G', 11),
(25, NULL, NULL, 'CSC313GC2', 'Rapid Application Development', '2', '3G', 11);

-- --------------------------------------------------------

--
-- Table structure for table `table__course__s__students`
--

CREATE TABLE `table__course__s__students` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Level` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lecture_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__course__s__students`
--

INSERT INTO `table__course__s__students` (`id`, `created_at`, `updated_at`, `code`, `name`, `credit`, `Level`, `Lecture_id`) VALUES
(1, '2019-01-13 22:49:49', '2019-01-30 07:09:04', 'CSC411SC0', 'Research Seminar', '0', '4S', 11),
(2, '2019-01-13 22:50:16', '2019-01-30 01:23:33', 'CSC412SC3', 'Artificial Intelligence', '3', '4S', 9),
(3, '2019-01-13 22:50:39', '2019-01-13 22:50:39', 'CSC413SC3', 'Advanced Algorithms', '3', '4S', 7),
(4, '2019-01-13 22:51:06', '2019-01-13 22:51:06', 'CSC414SC3', 'High Performance Computing', '3', '4S', 11),
(5, '2019-01-13 22:51:40', '2019-01-13 22:51:40', 'CSC415SC3', 'Mobile Computing', '3', '4S', 11),
(6, '2019-01-13 22:52:11', '2019-01-13 22:52:11', 'CSC416SC6', 'Research Project', '6', '4S', 11),
(7, '2019-01-13 22:52:33', '2019-01-13 22:52:33', 'CSC417SC3', 'Data Mining and Machine Learning', '3', '4S', 10),
(8, '2019-01-13 22:53:18', '2019-01-13 22:53:18', 'CSC418SC3', 'Compiler Design', '3', '4S', 11),
(9, '2019-01-13 22:54:08', '2019-01-13 22:54:08', 'CSC419SC3', 'Mathematics for Computing IV', '3', '4S', 11),
(10, '2019-01-13 22:54:38', '2019-01-13 22:54:38', 'CSC421SC3', 'Systems Analysis, Design and Project Management', '3', '4S', 11),
(11, '2019-01-13 22:55:01', '2019-01-13 22:55:01', 'CSC422SE2', 'Systems and Network Administration', '2', '4S', 11),
(12, '2019-01-13 23:00:59', '2019-01-13 23:00:59', 'CSC311SC3', 'Graphics and Visual Computing', '3', '3S', 1),
(13, '2019-01-13 23:01:33', '2019-01-13 23:01:33', 'CSC312SC1', 'Computer Programming III', '1', '3S', 1),
(14, '2019-01-13 23:01:56', '2019-01-13 23:01:56', 'CSC313SC2', 'Rapid Application Development', '2', '3S', 11),
(15, '2019-01-13 23:02:17', '2019-01-30 01:23:44', 'CSC314SC2', 'Knowledge Representation and Programming in Logic', '2', '3S', 9),
(16, '2019-01-13 23:02:49', '2019-01-13 23:02:49', 'CSC315SC2', 'Group Project II', '2', '3S', 11),
(17, '2019-01-13 23:03:12', '2019-01-13 23:03:12', 'CSC316SC3', 'Advanced Database Design and Systems', '3', '3S', 11),
(18, '2019-01-13 23:03:33', '2019-01-13 23:03:33', 'CSC317SC4', 'Data Communications and Computer Networks', '4', '3S', 11),
(19, '2019-01-13 23:04:15', '2019-01-13 23:04:15', 'CSC318SC3', 'Digital Image Processing', '3', '3S', 11),
(20, '2019-01-13 23:04:48', '2019-01-13 23:04:48', 'CSC319SC8', 'Industrial Training', '8', '3S', 11),
(21, '2019-01-13 23:06:18', '2019-01-13 23:06:18', 'CSC231SC2', 'Software Engineering', '2', '2S', 6),
(22, '2019-01-13 23:06:42', '2019-01-13 23:06:42', 'CSC232SC2', 'Computer Programming II', '2', '2S', 1),
(23, '2019-01-13 23:07:07', '2019-01-13 23:07:07', 'CSC233SC2', 'Database Management Systems', '2', '2S', 2),
(24, '2019-01-13 23:07:33', '2019-01-13 23:07:33', 'CSC234SC3', 'Computer Architecture', '3', '2S', 7),
(25, '2019-01-13 23:07:51', '2019-01-13 23:07:51', 'CSC235SC4', 'Mathematics for Computing III', '4', '2S', 11),
(26, '2019-01-13 23:08:12', '2019-01-13 23:08:12', 'CSC236SC2', 'Operating Systems', '2', '2S', 3),
(27, '2019-01-13 23:08:43', '2019-01-13 23:08:43', 'CSC237SC3:', 'Concepts of Programming Languages', '3', '2S', NULL),
(28, '2019-01-13 23:09:07', '2019-01-13 23:09:07', 'CSC238SC2', 'Data Structures and Algorithms II', '2', '2S', 1),
(29, '2019-01-13 23:09:31', '2019-01-13 23:09:31', 'CSC239SC2', 'Professional Practice', '2', '2S', 8),
(30, '2019-01-13 23:10:00', '2019-01-13 23:10:00', 'CSC241SC2', 'Group Project I', '2', '2S', 6),
(31, '2019-01-13 23:10:18', '2019-01-13 23:10:18', 'CSC242SC2', 'Human Resource Management', '2', '2S', 11),
(32, '2019-01-13 23:10:36', '2019-01-13 23:10:36', 'CSC243SE2', 'Numerical Methods', '2', '2S', 6),
(33, '2019-01-13 23:11:09', '2019-01-13 23:11:09', 'CSC244SE2', 'Information Assurance and Security', '2', '2S', 11),
(34, '2019-01-13 23:11:32', '2019-01-13 23:11:32', 'CSC245SE2', 'Web Technologies', '2', '2S', 11),
(35, '2019-01-13 23:11:56', '2019-01-13 23:11:56', 'CSC246SE2', 'Multimedia Technologies', '2', '2S', 3),
(36, '2019-01-13 23:12:23', '2019-01-13 23:12:23', 'CSC247SE2', 'Bioinformatics', '2', '2S', 11),
(37, '2019-01-13 23:25:26', '2019-01-13 23:25:26', 'CSC101S3', 'Foundations of Computer Science', '3', '1S', 10),
(38, '2019-01-13 23:25:44', '2019-01-13 23:25:44', 'CSC102S3', 'Computer Programming I', '3', '1S', 8),
(39, '2019-01-13 23:26:00', '2019-01-13 23:26:00', 'CSC103S3', 'Introduction to Computer Systems', '3', '1S', 7),
(40, '2019-01-13 23:26:18', '2019-01-13 23:26:18', 'CSC104S2', 'Mathematics for Computing I', '2', '1S', 11),
(41, '2019-01-13 23:26:35', '2019-01-13 23:26:35', 'CSC105S3', 'Statistics for Computing I', '3', '1S', 11),
(42, '2019-01-13 23:26:54', '2019-01-13 23:26:54', 'CSC106S3', 'Human Computer Interaction', '3', '1S', 11),
(43, '2019-01-13 23:27:32', '2019-01-13 23:27:32', 'CSC107S2', 'Multimedia Technologies', '2', '1S', 3),
(44, '2019-01-13 23:27:59', '2019-01-13 23:27:59', 'CSC108S2', 'Design of Algorithms', '2', '1S', 11),
(45, '2019-01-13 23:28:22', '2019-01-13 23:28:22', 'CSC109S2', 'Introduction to Computer Security and Cryptography', '2', '1S', 11),
(46, '2019-01-13 23:28:43', '2019-01-13 23:28:43', 'CSC110S2', 'Organisational Behaviour', '2', '1S', 11),
(47, '2019-01-13 23:29:03', '2019-01-13 23:29:03', 'CSC111S2', 'Mathematics for Computing II', '2', '1S', 11),
(48, '2019-01-13 23:29:21', '2019-01-26 09:23:00', 'CSC112S3', 'Statistics for Computing II', '3', '1S', 11);

-- --------------------------------------------------------

--
-- Table structure for table `table__lectures`
--

CREATE TABLE `table__lectures` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telephone_No` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table__lectures`
--

INSERT INTO `table__lectures` (`id`, `created_at`, `updated_at`, `name`, `Telephone_No`, `Email`) VALUES
(1, '2019-01-13 21:07:30', '2019-01-30 06:55:47', 'Mr. S. Suthakar', NULL, 'sosuthakar@univ.jfn.ac.lk'),
(2, '2019-01-13 21:08:20', '2019-01-13 21:08:20', 'Dr. (Mrs). B. Mayurathan', NULL, 'barathym@univ.jfn.ac.lk'),
(3, '2019-01-13 21:08:54', '2019-01-13 21:08:54', 'Dr. M. Siyamalan', NULL, 'siyam@univ.jfn.ac.lk'),
(4, '2019-01-13 21:09:27', '2019-01-13 21:09:27', 'Mr. K. Sarveswaran', NULL, 'sarves@jfn.ac.lk'),
(5, '2019-01-13 21:09:58', '2019-01-13 21:09:58', 'Mr. S. Shriparen', NULL, 'shriparen@jfn.ac.lk'),
(6, '2019-01-13 21:10:26', '2019-01-13 21:10:26', 'Ms. J. Samantha Tharani', NULL, 'samanthaj@univ.jfn.ac.lk'),
(7, '2019-01-13 21:11:40', '2019-01-13 21:11:40', 'Dr. E. Y. A. Charles', NULL, 'charles.ey@univ.jfn.ac.lk'),
(8, '2019-01-13 21:12:08', '2019-01-13 21:12:08', 'Dr. K. Thabotharan', NULL, 'thabo@jfn.ac.lk'),
(9, '2019-01-30 00:43:34', '2019-01-30 00:43:34', 'Dr. S. Mahesan', NULL, 'mahesans@univ.jfn.ac.lk'),
(10, '2019-01-13 21:15:29', '2019-01-13 21:15:29', 'Dr. A. Ramanan', '+94212218194', 'a.ramanan@univ.jfn.ac.lk'),
(11, NULL, NULL, 'unsigned yet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Level` varchar(10) NOT NULL,
  `RegistrationNo` varchar(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `TelephoneNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`id`, `created_at`, `Level`, `RegistrationNo`, `Name`, `Email`, `TelephoneNo`) VALUES
(1, '2019-01-30 06:46:33', '1S', '2017/CSC/001', 'Janani Kangesan', '', ''),
(2, '2019-01-30 06:46:33', '1S', '2017/CSC/002', 'Dissanayaka Mudiyanselage Shalika Harshani Dissanayaka', '', ''),
(3, '2019-01-30 06:46:33', '1S', '2017/CSC/003', 'Krishnamoorthy Thanushan', '', ''),
(4, '2019-01-30 06:46:33', '1S', '2017/CSC/004', 'Supasthika Amirthalingam', '', ''),
(5, '2019-01-30 06:46:33', '1S', '2017/CSC/005', 'Srikaran Jatheesan', '', ''),
(6, '2019-01-30 06:46:33', '1S', '2017/CSC/006', 'Divya Varatharajan', '', ''),
(7, '2019-01-30 06:46:33', '1S', '2017/CSC/007', 'Samarasinghage Kavindya Sathsarani', '', ''),
(8, '2019-01-30 06:46:33', '1S', '2017/CSC/008', 'Sinthuja Arumainayagam', '', ''),
(9, '2019-01-30 06:46:33', '1S', '2017/CSC/009', 'Rathnayakage Amila Saranga Rathnayaka', '', ''),
(10, '2019-01-30 06:46:33', '1S', '2017/CSC/010', 'Abdul Gaffar Mohamed Fawzy', '', ''),
(11, '2019-01-30 06:46:33', '1S', '2017/CSC/011', 'Yaleen Mohamed Silhan', '', ''),
(12, '2019-01-30 06:46:33', '1S', '2017/CSC/012', 'Niranga Sithara Athauda Arachchi', '', ''),
(13, '2019-01-30 06:46:33', '1S', '2017/CSC/013', 'hanganna Gamage Tharindu Prasad Ranaweera', '', ''),
(14, '2019-01-30 06:46:33', '1S', '2017/CSC/014', 'Samarakoon Jayasekara Mudiyanselage Imila Maheshan Bandara Samarakoon', '', ''),
(15, '2019-01-30 06:46:33', '1S', '2017/CSC/015', 'Musthafa Lebbe Mohamed Sanoos', '', ''),
(16, '2019-01-30 06:46:33', '1S', '2017/CSC/016', 'Aluthgamaralalage Isuru Lakmal', '', ''),
(17, '2019-01-30 06:46:33', '1S', '2017/CSC/017', 'Mohommadhu Abdhul Rahoof Rifath Muhammadh', '', ''),
(18, '2019-01-30 06:46:33', '1S', '2017/CSC/018', 'Elackshana Manivannan', '', ''),
(19, '2019-01-30 06:46:33', '1S', '2017/CSC/019', 'Mohammed Hilmy Mohammed Himaz', '', ''),
(20, '2019-01-30 06:46:33', '1S', '2017/CSC/020', 'Mohamed Ismail Ahamed Aneeque', '', ''),
(21, '2019-01-30 06:46:33', '1S', '2017/CSC/021', 'Mohommadhu Hanifa Mohommadhu Hisham', '', ''),
(22, '2019-01-30 06:46:33', '1S', '2017/CSC/022', 'Dilki Hasara Wickramasinghe', '', ''),
(23, '2019-01-30 06:46:33', '1S', '2017/CSC/023', 'Mathiyalagan Mathusha', '', ''),
(24, '2019-01-30 06:46:33', '1S', '2017/CSC/024', 'Mapa Mudiyanselage Madhawa Heshan Thilakarathne', '', ''),
(25, '2019-01-30 06:46:33', '1S', '2017/CSC/026', 'Wijesundara lekamlage Chamika Sandaruwan Wijesundara', '', ''),
(26, '2019-01-30 06:46:33', '1S', '2017/CSC/027', 'Panadura Acharige Wijesundara Gunathilaka Ramesh Perera', '', ''),
(27, '2019-01-30 06:46:33', '1S', '2017/CSC/028', 'Dissanayaka Mudiyanselage Sudula Kumara Dissanayaka', '', ''),
(28, '2019-01-30 06:46:33', '1S', '2017/CSC/029', 'Uthumalebbe Mohamed Afrid', '', ''),
(29, '2019-01-30 06:46:33', '1S', '2017/CSC/030', 'Kishani Kandasamy', '', ''),
(30, '2019-01-30 06:46:33', '1S', '2017/CSC/031', 'Lansakara Herath Mudiyanselage Bisak Sampath Bandara', '', ''),
(31, '2019-01-30 06:46:33', '1S', '2017/CSC/032', 'Prathaban Kavin', '', ''),
(32, '2019-01-30 06:46:33', '1S', '2017/CSC/033', 'Pushpakantha Ajanthasiri Gamage', '', ''),
(33, '2019-01-30 06:46:33', '1S', '2017/CSC/034', 'Vetharsana Thangarajah', '', ''),
(34, '2019-01-30 06:46:33', '1S', '2017/CSC/035', 'Hewa Puwakdandawage Isuru Madushan', '', ''),
(35, '2019-01-30 06:46:33', '1S', '2017/CSC/036', 'Ekanayake Mudiyanselage Charith Gihan Ekanayake', '', ''),
(36, '2019-01-30 06:46:33', '1S', '2017/CSC/037', 'Panojah Nadarasa', '', ''),
(37, '2019-01-30 06:46:33', '1S', '2017/CSC/038', 'Meiyalagan Yathushanan', '', ''),
(38, '2019-01-30 06:46:33', '1S', '2017/CSC/039', 'Kirusnashamy Kisnakumar', '', ''),
(39, '2019-01-30 06:46:33', '1S', '2017/CSC/040', 'Karthikesu Kogul', '', ''),
(40, '2019-01-30 06:46:33', '1S', '2017/CSC/041', 'Sritharan Kajith', '', ''),
(41, '2019-01-30 06:46:33', '1S', '2017/CSC/042', 'Linganathan Kiritharan', '', ''),
(42, '2019-01-30 06:46:33', '1S', '2017/CSC/043', 'Selvakumar Ranjithamalar', '', ''),
(43, '2019-01-30 06:46:33', '1S', '2017/CSC/044', 'mallawa Arachchige Heshan Nayanajith mallawarachchi', '', ''),
(44, '2019-01-30 06:46:33', '1S', '2017/CSC/045', 'Zahir Mohamed Ardil', '', ''),
(45, '2019-01-30 06:46:33', '1S', '2017/CSC/046', 'Sethukavalan Lokavanilavan', '', ''),
(46, '2019-01-30 06:46:33', '1S', '2017/CSC/047', 'Rathnayaka Mudiyanselage Lukshan kavinda', '', ''),
(47, '2019-01-30 06:46:33', '1S', '2017/CSC/048', 'Herath Mudiyanselage Cathuranga Sanjeewa rathnayake', '', ''),
(48, '2019-01-30 06:46:33', '1S', '2017/CSC/FS/049', 'Nawab Yousufi', '', ''),
(49, '2019-01-30 06:46:33', '1G', '2016/SP/040', 'Herath Mudiyanselage Jithmi Nayanathara Herath', '', ''),
(50, '2019-01-30 06:46:33', '1G', '2017/SP/002', 'Vishnuga Sivakumaran', '', ''),
(51, '2019-01-30 06:46:33', '1G', '2017/SP/003', 'Thirisika Pragalathanan', '', ''),
(52, '2019-01-30 06:46:33', '1G', '2017/SP/005', 'Sithamparanadesan Kumareasan', '', ''),
(53, '2019-01-30 06:46:33', '1G', '2017/SP/006', 'Nishani Poovalingam', '', ''),
(54, '2019-01-30 06:46:33', '1G', '2017/SP/008', 'Nagaraja Senthuran', '', ''),
(55, '2019-01-30 06:46:33', '1G', '2017/SP/009', 'Kugapriya Kumarasamy', '', ''),
(56, '2019-01-30 06:46:33', '1G', '2017/SP/010', 'Sathiyaseelan Kosika', '', ''),
(57, '2019-01-30 06:46:33', '1G', '2017/SP/011', 'Luxsana Paramaseelan', '', ''),
(58, '2019-01-30 06:46:33', '1G', '2017/SP/012', 'Mageswaran Janarthanan', '', ''),
(59, '2019-01-30 06:46:33', '1G', '2017/SP/013', 'Thuvaraka Thiraviyarasa', '', ''),
(60, '2019-01-30 06:46:33', '1G', '2017/SP/014', 'Mithusa Thillaivasan', '', ''),
(61, '2019-01-30 06:46:33', '1G', '2017/SP/015', 'Louis Mariyanayakam Premitha', '', ''),
(62, '2019-01-30 06:46:33', '1G', '2017/SP/016', 'Gnanasegaram Sulojana', '', ''),
(63, '2019-01-30 06:46:33', '1G', '2017/SP/017', 'Nanthakumar Pakirathan', '', ''),
(64, '2019-01-30 06:46:33', '1G', '2017/SP/018', 'Ganesharajan Anojan', '', ''),
(65, '2019-01-30 06:46:33', '1G', '2017/SP/020', 'Thayani jeganathan', '', ''),
(66, '2019-01-30 06:46:33', '1G', '2017/SP/024', 'Rajakaruna Herath Mudiyanselage Mayuri Shanika Rajakaruna', '', ''),
(67, '2019-01-30 06:46:33', '1G', '2017/SP/025', 'MaharajaThinesh', '', ''),
(68, '2019-01-30 06:46:33', '1G', '2017/SP/029', 'Dilaxsha Thangarasa', '', ''),
(69, '2019-01-30 06:46:33', '1G', '2017/SP/031', 'Subramaniam Prashanth', '', ''),
(70, '2019-01-30 06:46:33', '1G', '2017/SP/032', 'Rajanageswaran Justilla', '', ''),
(71, '2019-01-30 06:46:33', '1G', '2017/SP/034', 'Perinpanathan Mathusha', '', ''),
(72, '2019-01-30 06:46:33', '1G', '2017/SP/035', 'Walamuni Dewage Shanilka Wijesingha', '', ''),
(73, '2019-01-30 06:46:33', '1G', '2017/SP/040', 'Dassanayaka Mudiyanselage rasika Lakmal Dassanayaka', '', ''),
(74, '2019-01-30 06:46:33', '1G', '2017/SP/042', 'Rathnayaka Mudiyanselage Isuru Udara rathnayake', '', ''),
(75, '2019-01-30 06:46:33', '1G', '2017/SP/044', 'Samarakoon Ralalage Maneesha Devni Samarakoon', '', ''),
(76, '2019-01-30 06:46:33', '1G', '2017/SP/045', 'Sabaraththinam Vithusla', '', ''),
(77, '2019-01-30 06:46:33', '1G', '2017/SP/046', 'Konthadoru Thambiralalage lakshika Ishani kumari Silva', '', ''),
(78, '2019-01-30 06:46:33', '1G', '2017/SP/047', 'Keerthiga Thiruganasothy', '', ''),
(79, '2019-01-30 06:46:33', '1G', '2017/SP/048', 'yahathugoda Badalge Kalana Pasindu De Kostha', '', ''),
(80, '2019-01-30 06:46:33', '1G', '2017/SP/049', 'Kashthury Gunabalasingam', '', ''),
(81, '2019-01-30 06:46:33', '1G', '2017/SP/050', 'Liyana ralalage Lalitha Widhuranga Weerawardhana', '', ''),
(82, '2019-01-30 06:46:33', '1G', '2017/SP/056', 'Varaginy Subramaniyam', '', ''),
(83, '2019-01-30 06:46:33', '1G', '2017/SP/057', 'Thavachchelvam Nitharsini', '', ''),
(84, '2019-01-30 06:46:33', '1G', '2017/SP/058', 'Weebadde weerakoon Mudiyanselage Hapugaskumbure Avishka Saumya Weebadde', '', ''),
(85, '2019-01-30 06:46:33', '1G', '2017/SP/059', 'Pathirage Don Samitha Dilan Pathirade', '', ''),
(86, '2019-01-30 06:46:33', '1G', '2017/SP/060', 'Sammu Vishwa Sasanka', '', ''),
(87, '2019-01-30 06:46:33', '1G', '2017/SP/063', 'Vigneswaran Khariharan', '', ''),
(88, '2019-01-30 06:46:33', '1G', '2017/SP/066', 'Karunagaran Kaarunja', '', ''),
(89, '2019-01-30 06:46:33', '1G', '2017/SP/067', 'Kirindawa Liyanage Sandun Prabath Senarathna', '', ''),
(90, '2019-01-30 06:46:33', '1G', '2017/SP/068', 'Yayakody Arachchilage Lakmi Nayananjali Jayakody', '', ''),
(91, '2019-01-30 06:46:33', '1G', '2017/SP/084', 'Wickrama Arachchige Rumali Tharushika Gunasekara', '', ''),
(92, '2019-01-30 06:46:33', '1G', '2017/SP/091', 'Rajapakshage Nuwan Nalaka Rajapaksha', '', ''),
(93, '2019-01-30 06:46:33', '1G', '2017/SP/143', 'Chandran Nivethan', '', ''),
(94, '2019-01-30 06:46:33', '1G', '2017/SP/166', 'Ranasinghe Rukshan Akshitha Prasanga', '', ''),
(95, '2019-01-30 06:46:33', '1G', '2017/SP/167', 'Kavikshana Ujenda Premalal', '', ''),
(96, '2019-01-30 06:46:33', '1G', '2017/SP/187', 'Francis Robert Dunstan Leon', '', ''),
(97, '2019-01-30 06:46:33', '1G', '2017/SP/188', 'Sabaratinam Subaskar', '', ''),
(98, '2019-01-30 06:46:33', '1G', '2017/SP/233', 'Morawakalage Sandun Chathuranga', '', ''),
(99, '2019-01-30 06:46:33', '1G', '2017/SP/279', 'Sreesangameera Sreeskantharajaah', '', ''),
(100, '2019-01-30 06:46:33', '1G', '2017/SP/280', 'Mathanki Amirthalingam', '', ''),
(101, '2019-01-30 06:46:33', '1G', '2017/SP/287', 'Raththinasingkam Vipooshanan', '', ''),
(102, '2019-01-30 06:46:33', '2S', '2015/CSC/001', 'S. Lesslylavan', '', ''),
(103, '2019-01-30 12:52:53', '2S', '2015/CSC/042', 'W.M. Rayan Aradha', 'rayanaradha1993@gmail.com', '0719059943'),
(104, '2019-01-30 06:46:33', '2S', '2016/CSC/001', 'Samsudeen Munawwar Ahamed', '', ''),
(105, '2019-01-30 06:46:33', '2S', '2016/CSC/002', 'Mohamed Ahamed Arham', '', ''),
(106, '2019-01-30 06:46:33', '2S', '2016/CSC/003', 'A.A.S.N.Athauda', '', ''),
(107, '2019-01-30 06:46:33', '2S', '2016/CSC/004', 'S.A.Samila Chanuka', '', ''),
(108, '2019-01-30 06:46:33', '2S', '2016/CSC/005', 'R.H.S.L.Dilshan', '', ''),
(109, '2019-01-30 06:46:33', '2S', '2016/CSC/007', 'W.Nimasha Nishadi Fernando', '', ''),
(110, '2019-01-30 06:46:33', '2S', '2016/CSC/008', 'H.M.D.Herath', '', ''),
(111, '2019-01-30 06:46:33', '2S', '2016/CSC/009', 'S.Jenushanth', '', ''),
(112, '2019-01-30 06:46:33', '2S', '2016/CSC/010', 'G.H.G.R.Kalpage', '', ''),
(113, '2019-01-30 06:46:33', '2S', '2016/CSC/011', 'H.L.R.L.Liyanage', '', ''),
(114, '2019-01-30 06:46:33', '2S', '2016/CSC/012', 'M.Mathanraj', '', ''),
(115, '2019-01-30 06:46:33', '2S', '2016/CSC/015', 'A.H.Rasika Priyadarshani', '', ''),
(116, '2019-01-30 06:46:33', '2S', '2016/CSC/019', 'Ramees Mohamed Rizwan', '', ''),
(117, '2019-01-30 06:46:33', '2S', '2016/CSC/020', 'U.S.Dilan Samaraweera', '', ''),
(118, '2019-01-30 06:46:33', '2S', '2016/CSC/021', 'S.S.K.Anuka Sanjaya', '', ''),
(119, '2019-01-30 06:46:33', '2S', '2016/CSC/023', 'Sinthuja Vijayananthan', '', ''),
(120, '2019-01-30 06:46:33', '2S', '2016/CSC/024', 'K.Sripalasenthuran', '', ''),
(121, '2019-01-30 06:46:33', '2S', '2016/CSC/025', 'T.M.G.C.B.Tennakoon', '', ''),
(122, '2019-01-30 06:46:33', '2S', '2016/CSC/027', 'W.R.I.R.Widyasekara', '', ''),
(123, '2019-01-30 06:46:33', '2S', '2016/CSC/028', 'Methusha Thuraisingam', '', ''),
(124, '2019-01-30 06:46:33', '2S', '2016/CSC/029', 'R.M.C.K.Rathnayake', '', ''),
(125, '2019-01-30 06:46:33', '2S', '2016/CSC/030', 'Vithursha Sivakumaran', '', ''),
(126, '2019-01-30 06:46:33', '2S', '2016/CSC/031', 'Ajanthy Jayarajan', '', ''),
(127, '2019-01-30 06:46:33', '2S', '2016/CSC/032', 'Thushankgi Balachandran', '', ''),
(128, '2019-01-30 06:46:33', '2S', '2016/CSC/033', 'D.M.S.Lakshitha', '', ''),
(129, '2019-01-30 06:46:33', '2S', '2016/CSC/034', 'R.M.Yashodha Nilmini', '', ''),
(130, '2019-01-30 06:46:33', '2S', '2016/CSC/035', 'Nisamdeen Mohamed Shareek', '', ''),
(131, '2019-01-30 06:46:33', '2S', '2016/CSC/036', 'N.A.Muhandiram', '', ''),
(132, '2019-01-30 06:46:33', '2S', '2016/CSC/037', 'Siddique Mohamed Wazeem', '', ''),
(133, '2019-01-30 06:46:33', '2S', '2016/CSC/039', 'T.D.Pramuditha Chamikara', '', ''),
(134, '2019-01-30 06:46:33', '2S', '2016/CSC/040', 'H.M.Abhimani Sachithra', '', ''),
(135, '2019-01-30 06:46:33', '2S', '2016/CSC/041', 'H.W.R.L.Hendrawitharana', '', ''),
(136, '2019-01-30 06:46:33', '2S', '2016/CSC/042', 'J.S.Shanfravin', '', ''),
(137, '2019-01-30 06:46:33', '2S', '2016/CSC/043', 'Yothika Yogeswaran', '', ''),
(138, '2019-01-30 06:46:33', '2S', '2016/CSC/044', 'A.G.Dilshan Dilip Udara', '', ''),
(139, '2019-01-30 06:46:33', '2S', '2016/CSC/045', 'A.Keerthikan', '', ''),
(140, '2019-01-30 06:46:33', '2S', '2016/CSC/046', 'Abdul Jabbar Mohamed Rizvi', '', ''),
(141, '2019-01-30 06:46:33', '2S', '2016/CSC/047', 'N.D.Dodanwala', '', ''),
(142, '2019-01-30 06:46:33', '2S', '2016/CSC/048', 'R.Shehan Lahiru Jayasinghe', '', ''),
(143, '2019-01-30 06:46:33', '2S', '2016/CSC/038', 'S.F.Safna', '', ''),
(144, '2019-01-30 06:46:33', '2G', '2015/SP/058', 'Anton Jesuthas Nickson Joram', '', ''),
(145, '2019-01-30 06:46:33', '2G', '2016/SP/002', 'Ketheeswaran Abiram', '', ''),
(146, '2019-01-30 06:46:33', '2G', '2016/SP/009', 'Manoj Lakshitha Bandara', '', ''),
(147, '2019-01-30 06:46:33', '2G', '2016/SP/010', 'Sahanaa Baskaran', '', ''),
(148, '2019-01-30 06:46:33', '2G', '2016/SP/029', 'Ekanayaka Mudiyanselage Shyamali Hasanthika Ekanayaka', '', ''),
(149, '2019-01-30 06:46:33', '2G', '2016/SP/038', 'Somarathnage Surath Miyuru Hasaranjana', '', ''),
(150, '2019-01-30 06:46:33', '2G', '2016/SP/050', 'Veerasingam Kajitha', '', ''),
(151, '2019-01-30 06:46:33', '2G', '2016/SP/051', 'Kesavi Kanesalingam', '', ''),
(152, '2019-01-30 06:46:33', '2G', '2016/SP/054', 'Wijemuni Lahiru Dilshan Karunathilake', '', ''),
(153, '2019-01-30 06:46:33', '2G', '2016/SP/072', 'Sivananthan Marujan', '', ''),
(154, '2019-01-30 06:46:33', '2G', '2016/SP/077', 'Muhannadhu Nawas Muhammadhu Nafees', '', ''),
(155, '2019-01-30 06:46:33', '2G', '2016/SP/085', 'Manokaran Pavunthan', '', ''),
(156, '2019-01-30 06:46:33', '2G', '2016/SP/095', 'Ranjith Rajakarunage Shashika Parakkarama Rajakaruna', '', ''),
(157, '2019-01-30 06:46:33', '2G', '2016/SP/098', 'Ramadeniye Gedara Ravindu Dilshan Ramadeniye', '', ''),
(158, '2019-01-30 06:46:33', '2G', '2016/SP/102', 'Lavanya Ratnabala', '', ''),
(159, '2019-01-30 06:46:33', '2G', '2016/SP/107', 'Aththanayaka Pathiranage Pulinda Prabhath Sankalpa', '', ''),
(160, '2019-01-30 06:46:33', '2G', '2016/SP/115', 'Raveendran Sirushdika', '', ''),
(161, '2019-01-30 06:46:33', '2G', '2016/SP/116', 'Luxana Sivakumaran', '', ''),
(162, '2019-01-30 06:46:33', '2G', '2016/SP/156', 'Thennakoon Pathirennehelage Geethmie Yasara Thennakoon', '', ''),
(163, '2019-01-30 06:46:33', '2G', '2016/SP/163', 'Ilandarage Praveen Darshana Kularajapathi', '', ''),
(164, '2019-01-30 06:46:33', '2G', '2016/SP/164', 'Konara Mudiyanselage Shakila Kalhari Gunathilake', '', ''),
(165, '2019-01-30 06:46:33', '2G', '2016/SP/167', 'Meragalge Sarala Shalini Gunasekara', '', ''),
(166, '2019-01-30 06:46:33', '2G', '2016/SP/174', 'Kaludurage Hashan Madusanka Rathnayaka', '', ''),
(167, '2019-01-30 06:46:33', '2G', '2016/SP/175', 'Sivagnanasuntharam Sundaraathavan', '', ''),
(168, '2019-01-30 06:46:33', '2G', '2016/SP/179', 'Adhikari Athukoralalage Vinura Prabath Athukorala', '', ''),
(169, '2019-01-30 06:46:33', '2G', '2016/SP/183', 'Mathangi Sivananthan', '', ''),
(170, '2019-01-30 06:46:33', '2G', '2016/SP/193', 'Senanayake Mudiyanselage Yasaransi Kaveesha Senanayake', '', ''),
(171, '2019-01-30 06:46:33', '2G', '2016/SP/200', 'Kapuralalage Lasantha Chathuranga Bandara', '', ''),
(172, '2019-01-30 06:46:33', '2G', '2016/SP/204', 'Paliskara Hemachandrage Isuru Lakruwan Ananda', '', ''),
(173, '2019-01-30 06:46:33', '2G', '2016/SP/208', 'Lokuwithanage Yasiru Lakshan', '', ''),
(174, '2019-01-30 06:46:33', '2G', '2016/SP/210', 'Rammiah Jeyakumar', '', ''),
(175, '2019-01-30 06:46:33', '2G', '2016/SP/256', 'Mohanras Anton Agnew Rathan', '', ''),
(176, '2019-01-30 06:46:33', '2G', '2016/SP/259', 'Mahadhevan Narththanan', '', ''),
(177, '2019-01-30 06:46:33', '2G', '2016/SP/260', 'Puvanendrarasa Rushanthan', '', ''),
(178, '2019-01-30 06:46:33', '2G', '2016/SP/264', 'Tharmika Kulenthiran', '', ''),
(179, '2019-01-30 06:46:33', '2G', '2016/SP/293', 'Rathnasingam Sinthujan', '', ''),
(180, '2019-01-30 06:46:33', '2G', '2016/SP/298', 'Konara Mudiyanselage Mahesh Bawantha Kulathunga', '', ''),
(181, '2019-01-30 06:46:33', '2G', '2016/SP/313', 'Muharris Ahmadh Munzir', '', ''),
(182, '2019-01-30 06:46:33', '2G', '2016/SP/314', 'Adikari Arachchige Chanaka Dushmantha Adikari', '', ''),
(183, '2019-01-30 06:46:33', '2G', '2016/SP/151', 'Mohamed Musthafa Mohamed Zakee', '', ''),
(184, '2019-01-30 06:46:33', '2G', '2016/SP/311', 'Mohamed Hamdoon Ijas Mohamed', '', ''),
(185, '2019-01-30 06:46:33', '2G', '2016/SP/221', 'Sulaimalebbe Rukzan Akeel', '', ''),
(186, '2019-01-30 06:46:33', '3S', '2015/CSC/002', 'Mayuravaani Mathuranathan', '', ''),
(187, '2019-01-30 06:46:33', '3S', '2015/CSC/006', 'Mohamed Niwas Mohamed Muaz', '', ''),
(188, '2019-01-30 06:46:33', '3S', '2015/CSC/012', 'W.W.Chathuska Madhushan Waidyarathna', '', ''),
(189, '2019-01-30 06:46:33', '3S', '2015/CSC/014', 'Pravagaran Thamilvaanan', '', ''),
(190, '2019-01-30 06:46:33', '3S', '2015/CSC/015', 'N.W.G Anurudda Chathura Kumara Jeyawardane', '', ''),
(191, '2019-01-30 06:46:33', '3S', '2015/CSC/016', 'Bhagya Udayangini Premarathne', '', ''),
(192, '2019-01-30 06:46:33', '3S', '2015/CSC/017', 'B.M Mahawalawwe Harsha Chaminda Bandra', '', ''),
(193, '2019-01-30 06:46:33', '3S', '2015/CSC/019', 'Herath Mudiyanselage Dhanuska Darmasena', '', ''),
(194, '2019-01-30 06:46:33', '3S', '2015/CSC/021', 'Walpola Kanakanamalage Athula Ranjan Walpola', '', ''),
(195, '2019-01-30 06:46:33', '3S', '2015/CSC/023', 'Wadiya Ralalage Isuri N Nadeeshanee Kalugalla', '', ''),
(196, '2019-01-30 06:46:33', '3S', '2015/CSC/025', 'Vihanga malinga Bandara Rasnakawewa', '', ''),
(197, '2019-01-30 06:46:33', '3S', '2015/CSC/027', 'Algewaththa Dolagarage Thaarindu Dilhara', '', ''),
(198, '2019-01-30 06:46:33', '3S', '2015/CSC/028', 'Anjalin Nirupa Nirmaleswaran', '', ''),
(199, '2019-01-30 06:46:33', '3S', '2015/CSC/029', 'Narmatha Jehanathan', '', ''),
(200, '2019-01-30 06:46:33', '3S', '2015/CSC/030', 'R. Mudianselage Pasan Lahiru Bandara Rathnayke', '', ''),
(201, '2019-01-30 06:46:33', '3S', '2015/CSC/031', 'Thayaparan Kalaineethan', '', ''),
(202, '2019-01-30 06:46:33', '3S', '2015/CSC/032', 'Justus Nithurshan', '', ''),
(203, '2019-01-30 06:46:33', '3S', '2015/CSC/033', 'Ranhotige Sujaanan Bhatiya Wijisinghe', '', ''),
(204, '2019-01-30 06:46:33', '3S', '2015/CSC/034', 'Thangavadivel Thanuskanth', '', ''),
(205, '2019-01-30 06:46:33', '3S', '2015/CSC/035', 'Theevika Arumaiththurai', '', ''),
(206, '2019-01-30 06:46:33', '3S', '2015/CSC/036', 'Mathalamuthu Vazz Dilanson', '', ''),
(207, '2019-01-30 06:46:33', '3S', '2015/CSC/039', 'J.Bandathuruge Kanchana Sandamali Pathirana', '', ''),
(208, '2019-01-30 06:46:33', '3S', '2015/CSC/041', 'Sivanesan Menuja', '', ''),
(209, '2019-01-30 06:46:33', '3S', '2006/CSC/06', 'Jesuthasu Samson', '', ''),
(210, '2019-01-30 06:46:33', '3S', '2015/CSC/FS/40', 'Ajaya Karki', '', ''),
(211, '2019-01-30 06:46:33', '3S', '2015/CSC/038', 'Mathivannan Santhusan', '', ''),
(212, '2019-01-30 06:46:33', '3G', '2015/SP/005', 'Gnanamoorthy Ananthan', '', ''),
(213, '2019-01-30 06:46:33', '3G', '2015/SP/007', 'Sithamaranathasharma Anusa', '', ''),
(214, '2019-01-30 06:46:33', '3G', '2015/SP/011', 'Amalaseeli Arultharsan', '', ''),
(215, '2019-01-30 06:46:33', '3G', '2015/SP/013', 'Mohamed Akram Ashfaq Ahamed', '', ''),
(216, '2019-01-30 06:46:33', '3G', '2015/SP/018', 'Wijerathna Rajakaruna Wasala Mudiyanselage Dilshika Dilshani', '', ''),
(217, '2019-01-30 06:46:33', '3G', '2015/SP/040', 'Rathnayaka Mudiyanselage Suwendra Pradeep Gunawaedana', '', ''),
(218, '2019-01-30 06:46:33', '3G', '2015/SP/046', 'Somapalage Dilan Madushankha Herath', '', ''),
(219, '2019-01-30 06:46:33', '3G', '2015/SP/054', 'Samarakoon Mudiyanselage Malki Sandamini Jeyawardhana', '', ''),
(220, '2019-01-30 06:46:33', '3G', '2015/SP/065', 'Thanidu Nawanjana Karunarathne', '', ''),
(221, '2019-01-30 06:46:33', '3G', '2015/SP/066', 'Balasubramaniyam Kavidha', '', ''),
(222, '2019-01-30 06:46:33', '3G', '2015/SP/071', 'Jeyasegedara Jayasundara Mudiyebselage Madhushanka Kumara', '', ''),
(223, '2019-01-30 06:46:33', '3G', '2015/SP/082', 'Wimukthi Eroshan Mahawaduge', '', ''),
(224, '2019-01-30 06:46:33', '3G', '2015/SP/084', 'Rajakaruna Mudiyanselage Ayodhya Hansamala Manewa', '', ''),
(225, '2019-01-30 06:46:33', '3G', '2015/SP/095', 'Santhiranantham Nilogithan', '', ''),
(226, '2019-01-30 06:46:33', '3G', '2015/SP/096', 'Wickramasinghe Arachchige Dona Dilini Nimeshika', '', ''),
(227, '2019-01-30 06:46:33', '3G', '2015/SP/098', 'Mahendran Niroshan', '', ''),
(228, '2019-01-30 06:46:33', '3G', '2015/SP/101', 'Nirmalanathan Nivetha', '', ''),
(229, '2019-01-30 06:46:33', '3G', '2015/SP/121', 'Kunathasan Rakavan', '', ''),
(230, '2019-01-30 06:46:33', '3G', '2015/SP/127', 'Peter Vimalathas Robinroy', '', ''),
(231, '2019-01-30 06:46:33', '3G', '2015/SP/128', 'Bastian Koralalage Shevindi Navanjana Rodrigo', '', ''),
(232, '2019-01-30 06:46:33', '3G', '2015/SP/135', 'Sabgaranathan Sangarlal', '', ''),
(233, '2019-01-30 06:46:33', '3G', '2015/SP/139', 'Mahendran Saruhashini', '', ''),
(234, '2019-01-30 06:46:33', '3G', '2015/SP/141', 'Matheews Sathurshan', '', ''),
(235, '2019-01-30 06:46:33', '3G', '2015/SP/142', 'Abirame Selvendran', '', ''),
(236, '2019-01-30 06:46:33', '3G', '2015/SP/144', 'Rasamanickam Shahilashinie', '', ''),
(237, '2019-01-30 06:46:33', '3G', '2015/SP/146', 'Nivethana Shanmugaratnam', '', ''),
(238, '2019-01-30 06:46:33', '3G', '2015/SP/148', 'Karunanayake Shalintha Subhashana Silva', '', ''),
(239, '2019-01-30 06:46:33', '3G', '2015/SP/149', 'Manikku Badathuruge Nuwani Uittara Karunawardhana Silva', '', ''),
(240, '2019-01-30 06:46:33', '3G', '2015/SP/153', 'Samapavi Sriskandarajah', '', ''),
(241, '2019-01-30 06:46:33', '3G', '2015/SP/157', 'Mathialagan Suhirthashini', '', ''),
(242, '2019-01-30 06:46:33', '3G', '2015/SP/167', 'Lawshiga Thurairasasingam', '', ''),
(243, '2019-01-30 06:46:33', '3G', '2015/SP/168', 'Jeyananthan Vithurshan', '', ''),
(244, '2019-01-30 06:46:33', '3G', '2015/SP/175', 'Weerasingha Mudiyanselage Nadeeshani Kaushalya Weerasinga', '', ''),
(245, '2019-01-30 06:46:33', '3G', '2015/SP/186', 'Nirubikaa Ravakumar', '', ''),
(246, '2019-01-30 06:46:33', '3G', '2015/SP/189', 'Gunasekara Widhanalage Nisal Shaminda Gunasekara', '', ''),
(247, '2019-01-30 06:46:33', '3G', '2015/SP/194', 'Meragal Pedige Dushyantha Thariju Priyankara', '', ''),
(248, '2019-01-30 06:46:33', '3G', '2015/SP/199', 'Herath Mudiyanselage Ashan Harshana Bandara Herath', '', ''),
(249, '2019-01-30 06:46:33', '3G', '2015/SP/204', 'Viththiyanathan Pakeesan', '', ''),
(250, '2019-01-30 06:46:33', '3G', '2015/SP/207', 'Herath Mudiyanselage Sewmi Shayanara Herath', '', ''),
(251, '2019-01-30 06:46:33', '3G', '2015/SP/209', 'Wedisingha Arachchilage Teneesha Jinanjanee Thilakarathna', '', ''),
(252, '2019-01-30 06:46:33', '3G', '2015/SP/211', 'Jegatheesar Ruksala', '', ''),
(253, '2019-01-30 06:46:33', '3G', '2015/SP/213', 'Ranasinghage Supun Dhanjaya Ranasingha', '', ''),
(254, '2019-01-30 06:46:33', '3G', '2015/SP/214', 'Thaneawaran Thanujan', '', ''),
(255, '2019-01-30 06:46:33', '3G', '2015/SP/218', 'Meerigama Dewage Gihan Priyankara Ranasingha', '', ''),
(256, '2019-01-30 06:46:33', '3G', '2015/SP/220', 'Tharani Thanapalasingam', '', ''),
(257, '2019-01-30 06:46:33', '3G', '2015/SP/225', 'Ethugal Pedige Rasanginee Sarangika Ethugala', '', ''),
(258, '2019-01-30 06:46:33', '3G', '2015/SP/248', 'Sivarajah Ainkaran', '', ''),
(259, '2019-01-30 06:46:33', '3G', '2015/SP/255', 'Basthiyan Koralalage Marian Dilini Nuwanga Rodrigo', '', ''),
(260, '2019-01-30 06:46:33', '3G', '2015/SP/265', 'Vijiththa Thangarajah', '', ''),
(261, '2019-01-30 06:46:33', '3G', '2015/SP/280', 'W.Maralalage Akarshana Buddhini Chandrasena', '', ''),
(262, '2019-01-30 06:46:33', '3G', '2014/SP/167', 'Deepani Kaushalya Hemachandra', '', ''),
(263, '2019-01-30 06:46:33', '3G', '2014/SP/170', 'S.M.T.Madushani', '', ''),
(264, '2019-01-30 06:46:33', '3M', '2015/SP/005', 'Gnanamoorthy Ananthan', '', ''),
(265, '2019-01-30 06:46:33', '3M', '2015/SP/011', 'Amalaseeli Arulthasan', '', ''),
(266, '2019-01-30 06:46:33', '3M', '2015/SP/018', 'Wijerathna Rajakaruna Wasala Mudiyanselage Dilshika Dilshani', '', ''),
(267, '2019-01-30 06:46:33', '3M', '2015/SP/054', 'Samarakoon Mudyanselage Malki Sandamini Jeyawardhana', '', ''),
(268, '2019-01-30 06:46:33', '3M', '2015/SP/066', 'Balasubramaniyam Kavidha', '', ''),
(269, '2019-01-30 06:46:33', '3M', '2015/SP/084', 'Rajakaruna Mudiyanselage Ayodhya Hansamala Manewa', '', ''),
(270, '2019-01-30 06:46:33', '3M', '2015/SP/095', 'Santhiranantham Nilogithan', '', ''),
(271, '2019-01-30 06:46:33', '3M', '2015/SP/096', 'Wikramasinghe Arachchige Dona Dilini Nimeshika', '', ''),
(272, '2019-01-30 06:46:33', '3M', '2015/SP/101', 'Niormalanathan Nivetha', '', ''),
(273, '2019-01-30 06:46:33', '3M', '2015/SP/127', 'Peter Vimalathas Robinroy', '', ''),
(274, '2019-01-30 06:46:33', '3M', '2015/SP/128', 'Basthian Koralalage Shevindi Navanjana Rodrigo', '', ''),
(275, '2019-01-30 06:46:33', '3M', '2015/SP/135', 'Sangaranathan Sangarlal', '', ''),
(276, '2019-01-30 06:46:33', '3M', '2015/SP/139', 'Mahendran Saruhashini', '', ''),
(277, '2019-01-30 06:46:33', '3M', '2015/SP/141', 'Matheews Sathurshan', '', ''),
(278, '2019-01-30 06:46:33', '3M', '2015/SP/153', 'Sampavi Sriskandarajah', '', ''),
(279, '2019-01-30 06:46:33', '3M', '2015/SP/167', 'Lawshiga Thurairasasingam', '', ''),
(280, '2019-01-30 06:46:33', '3M', '2015/SP/186', 'Nirubikaa Ravikumar', '', ''),
(281, '2019-01-30 06:46:33', '3M', '2015/SP/194', 'Meragal pedige Dushyantha Thariju Priyankara', '', ''),
(282, '2019-01-30 06:46:33', '3M', '2015/SP/207', 'Herath Mudiyanselage Sewmi Shayanara Herath', '', ''),
(283, '2019-01-30 06:46:33', '3M', '2015/SP/209', 'Wedisingha Arachchilage Teneesha Jinanjanee Thilakarathna', '', ''),
(284, '2019-01-30 06:46:33', '3M', '2015/SP/225', 'Ethugal Pedige pasanginee Sarangika Ethugala', '', ''),
(285, '2019-01-30 06:46:33', '3M', '2015/SP/255', 'Basthiyan Koralalage Marian Dilini Nuwanga Rodrigo', '', ''),
(286, '2019-01-30 06:46:33', '3M', '2015/SP/265', 'Vijiththa Thangarajah', '', ''),
(287, '2019-01-30 06:46:33', '3M', '2015/SP/280', 'W.Mralalage Akarshana Buddhini Chandrasena', '', ''),
(288, '2019-01-30 06:46:33', '4S', '2014/CSC/003', 'Sumandiran Jathurshan', '', ''),
(289, '2019-01-30 06:46:33', '4S', '2014/CSC/010', 'Mogan Kausik', '', ''),
(290, '2019-01-30 06:46:33', '4S', '2014/CSC/012', 'Nesathurai Pirunthapan', '', ''),
(291, '2019-01-30 06:46:33', '4S', '2014/CSC/016', 'Kumarasuinghe Bowalagamage Ranushka Pasindu Dharmaranga', '', ''),
(292, '2019-01-30 06:46:33', '4S', '2014/CSC/017', 'Jayalath Balagallage Sanjeewa Dias', '', ''),
(293, '2019-01-30 06:46:33', '4S', '2014/CSC/018', 'Amarasingam Thuvaragan', '', ''),
(294, '2019-01-30 06:46:33', '4S', '2014/CSC/021', 'Herath Mudiyanselage Chamara Madhusanka Bandara Rathnayaka', '', ''),
(295, '2019-01-30 06:46:33', '4S', '2014/CSC/022', 'Arebhy Sridaran', '', ''),
(296, '2019-01-30 06:46:33', '4S', '2014/CSC/023', 'Yogeswaran Ligitha', '', ''),
(297, '2019-01-30 06:46:33', '4S', '2014/CSC/024', 'Balendran Saranya', '', ''),
(298, '2019-01-30 06:46:33', '4S', '2014/CSC/025', 'Rajan Prithweeraj', '', ''),
(299, '2019-01-30 06:46:33', '4S', '2014/CSC/026', 'Shanmugaratnam Kajaluxshan', '', ''),
(300, '2019-01-30 06:46:33', '4S', '2014/CSC/027', 'Tennakoon Mudiyanselage Saditha Udayanga Tennakoon', '', ''),
(301, '2019-01-30 06:46:33', '4S', '2014/CSC/028', 'Daundasekara Mudiyanselage Dhanushika Chamara Dissanayake', '', ''),
(302, '2019-01-30 06:46:33', '4S', '2014/CSC/030', 'Kuruwita Arachchillage Sahan Rajitha Thilakarathna', '', ''),
(303, '2019-01-30 06:46:33', '4S', '2014/CSC/032', 'Dhanapala Herath Mudiyanselage Dinusha Lakpriya', '', ''),
(304, '2019-01-30 06:46:33', '4S', '2014/CSC/033', 'Thennakoon Mudiyanselage Vikum Dheemantha Gunasekara', '', ''),
(305, '2019-01-30 06:46:33', '4S', '2014/CSC/034', 'Hetti Arachchilage cholaka Lahiru Madhushanka Senanayaka', '', ''),
(306, '2019-01-30 06:46:33', '4S', '2014/CSC/035', 'Selvarasa Paheerathan', '', ''),
(307, '2019-01-30 06:46:33', '4S', '2014/CSC/036', 'Arulananthasivam Tharshikan', '', ''),
(308, '2019-01-30 06:46:33', '4S', '2014/CSC/037', 'Kaleel Mohamed Hafni', '', ''),
(309, '2019-01-30 06:46:33', '4S', '2014/CSC/038', 'Nissanka Mudiyanaselage Sachini Iresha Nissanka', '', ''),
(310, '2019-01-30 06:46:33', '4S', '2014/CSC/039', 'Manathunga Mudiyanselage Ruchira Sachinthana Manathunga', '', ''),
(311, '2019-01-30 06:46:33', '4S', '2014/CSC/040', 'Hewa Suduhakuruge Ashan Sandaru Jayalath', '', ''),
(312, '2019-01-30 06:46:33', '4S', '2013/CSC/018', 'Muhammadu Haniffa Mohammadu Shifkhan', '', ''),
(313, '2019-01-30 06:46:33', '4S', '2014/CSC/FS/041', 'Dhanesh Kumar', '', ''),
(314, '2019-01-30 06:46:33', '4S', '2014/CSC/FS/042', 'Md Sabbir Hossain', '', ''),
(315, '2019-01-30 06:46:34', '4M', '2014/SP/015', 'Mahalingam Antony Arulmalar', '', ''),
(316, '2019-01-30 06:46:34', '4M', '2014/SP/021', 'Mohotti Gamage Anjula Keshan Priyanath', '', ''),
(317, '2019-01-30 06:46:34', '4M', '2014/SP/035', 'Karunanithy Senthuja', '', ''),
(318, '2019-01-30 06:46:34', '4M', '2014/SP/042', 'Meruja Selvamanikkam', '', ''),
(319, '2019-01-30 06:46:34', '4M', '2014/SP/057', 'Pathamanathan Janani', '', ''),
(320, '2019-01-30 06:46:34', '4M', '2014/SP/058', 'Suvendran Suganya', '', ''),
(321, '2019-01-30 06:46:34', '4M', '2014/SP/059', 'Ratnasingam Kasthuriraajan', '', ''),
(322, '2019-01-30 06:46:34', '4M', '2014/SP/080', 'Sivanathan Arunkumar', '', ''),
(323, '2019-01-30 06:46:34', '4M', '2014/SP/093', 'Ganesharathinam Gopishanth', '', ''),
(324, '2019-01-30 06:46:34', '4M', '2014/SP/094', 'Thramini Thalayasingam', '', ''),
(325, '2019-01-30 06:46:34', '4M', '2014/SP/103', 'Kanapathipillai Kajasumanie', '', ''),
(326, '2019-01-30 06:46:34', '4M', '2014/SP/112', 'Wasala Mudiyaneselage Dilani Madumini Gunawardhana', '', ''),
(327, '2019-01-30 06:46:34', '4M', '2014/SP/116', 'T.M.Chathura Sampath Kumara Thennakoon', '', ''),
(328, '2019-01-30 06:46:34', '4M', '201/SP/118', 'Gammanpelahimi Arachchige Dushan Kshithija Tharaka', '', ''),
(329, '2019-01-30 06:46:34', '4M', '2014/SP/122', 'Arandarage Ramesh Madushanka', '', ''),
(330, '2019-01-30 06:46:34', '4M', '2014/SP/124', 'Harischandra Patabendige Malki Maduka', '', ''),
(331, '2019-01-30 06:46:34', '4M', '2014/SP/125', 'Tharmakulasingam Thameera', '', ''),
(332, '2019-01-30 06:46:34', '4M', '2014/SP/127', 'Archchitha Kanagarajah', '', ''),
(333, '2019-01-30 06:46:34', '4M', '2014/SP/130', 'Sivarajah Mathura', '', ''),
(334, '2019-01-30 06:46:34', '4M', '2014/SP/131', 'Varnitha Sornalingam', '', ''),
(335, '2019-01-30 06:46:34', '4M', '2014/SP/137', 'Thushani Raveendran', '', ''),
(336, '2019-01-30 06:46:34', '4M', '2014/SP/141', 'Arangallage Lahiru Nirmal', '', ''),
(337, '2019-01-30 06:46:34', '4M', '2014/SP/142', 'Kariyakarawanage Kasun Suminda Kariyakarawana Fernando', '', ''),
(338, '2019-01-30 06:46:34', '4M', '2014/SP/146', 'Wickramasingha Senanayakage Hasitha Sandaruwan Senanayaka', '', ''),
(339, '2019-01-30 06:46:34', '4M', '2014/SP/149', 'Angodage Shehan Akalanka Perera', '', ''),
(340, '2019-01-30 06:46:34', '4M', '2014/SP/158', 'Ranathunga Mudiyanselage Shashikala Ranathunga', '', ''),
(341, '2019-01-30 06:46:34', '4M', '2014/SP/162', 'Yogaratnam Shawmiya', '', ''),
(342, '2019-01-30 06:46:34', '4M', '2014/SP/163', 'Kabilathas Parkavi', '', ''),
(343, '2019-01-30 06:46:34', '4M', '2014/SP/164', 'Vithusha Mohan', '', ''),
(344, '2019-01-30 06:46:34', '4M', '2014/SP/165', 'Kasturi Arachchige Tharuka Chathurani', '', ''),
(345, '2019-01-30 06:46:34', '4M', '2014/SP/179', 'Thewara Thanthirige Dushmanthi Madushani', '', ''),
(346, '2019-01-30 06:46:34', '4M', '2014/SP/186', 'Kanagaratnam Derushan', '', ''),
(347, '2019-01-30 06:46:34', '4M', '2014/SP/202', 'Kalu Arachchillage Kasun Mihiranga Kaluarachchi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rayan', 'rayanaradha1993@gmail.com', NULL, '$2y$10$BhYvqX0D7jnA00m.OXZt0.2sAMZszWQ3IBq9p02l6eerp49CCibr.', 'deYna0xRZZLwIsHyZMjNZ6DOQvMBD7aII7Jael52T6gQx8rEdMcijfFoVdcy', '2019-01-13 17:57:42', '2019-01-13 17:57:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_1s`
--
ALTER TABLE `attendance_1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `table__course__g__students`
--
ALTER TABLE `table__course__g__students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Lec_Course_g` (`Lecture_id`);

--
-- Indexes for table `table__course__s__students`
--
ALTER TABLE `table__course__s__students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Lec_Course` (`Lecture_id`);

--
-- Indexes for table `table__lectures`
--
ALTER TABLE `table__lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_1s`
--
ALTER TABLE `attendance_1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table__course__g__students`
--
ALTER TABLE `table__course__g__students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `table__course__s__students`
--
ALTER TABLE `table__course__s__students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `table__lectures`
--
ALTER TABLE `table__lectures`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table__course__g__students`
--
ALTER TABLE `table__course__g__students`
  ADD CONSTRAINT `Lec_Course_g` FOREIGN KEY (`Lecture_id`) REFERENCES `table__lectures` (`id`);

--
-- Constraints for table `table__course__s__students`
--
ALTER TABLE `table__course__s__students`
  ADD CONSTRAINT `Lec_Course` FOREIGN KEY (`Lecture_id`) REFERENCES `table__lectures` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
