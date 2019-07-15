-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 08:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance2`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `Level_id` int(11) NOT NULL,
  `Student_id` int(11) NOT NULL,
  `Course_id` int(11) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `CourseCode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CourseUnit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `CourseCode`, `CourseUnit`, `created_at`, `updated_at`) VALUES
(1, 'CSC101S3', 'Foundations of Computer Science', NULL, NULL),
(2, 'CSC102S3', 'Computer Programming I', NULL, NULL),
(3, 'CSC103S3', 'Introduction to Computer Systems', NULL, NULL),
(4, 'CSC104S2', 'Mathematics for Computing I', NULL, NULL),
(5, 'CSC107S2', 'Multimedia Technologies', NULL, NULL),
(6, 'CSC110S2', 'Organisational Behaviour', NULL, NULL),
(7, 'CSC105S3', 'Statistics for Computing I', NULL, NULL),
(8, 'CSC101G3', 'Foundations of Computer Science', NULL, NULL),
(9, 'CSC107G2', 'Multimedia Technologies', NULL, NULL),
(10, 'CSC102G3', 'Computer Programming I', NULL, NULL),
(11, 'CSC231SC2', 'Software Engineering', NULL, NULL),
(12, 'CSC232SC2', 'Computer Programming II', NULL, NULL),
(13, 'CSC233SC2', 'Database Management Systems', NULL, NULL),
(14, 'CSC234SC3', 'Computer Architecture', NULL, NULL),
(15, 'CSC235SC4', 'Mathematics for Computing III', NULL, NULL),
(16, 'CSC237SC3', 'Concepts of Programming Languages', NULL, NULL),
(17, 'CSC246SE2', 'Multimedia Technologies', NULL, NULL),
(18, 'CSC242SC2', 'Human Resource Management', NULL, NULL),
(19, 'CSC231GC2', 'Software Engineering', NULL, NULL),
(20, 'CSC232GC2', 'Computer Programming II', NULL, NULL),
(21, 'CSC233GC2', 'Database Management Systems', NULL, NULL),
(22, 'CSC313SC2', 'Rapid Application Development', NULL, NULL),
(23, 'CSC311SC3', 'Graphics and Visual Computing', NULL, NULL),
(24, 'CSC318SC3', 'Digital Image Processing', NULL, NULL),
(25, 'CSC317SC4', 'Data Communications and Computer Networks', NULL, NULL),
(26, 'CSC316SC3', 'Advanced Database Design and Systems', NULL, NULL),
(27, 'CSC312SC1', 'Computer Programming III', NULL, NULL),
(28, 'CSC314SC2', 'Knowledge Representation and Programming in Logic', NULL, NULL),
(29, 'CSC313GC2', 'Rapid Application Development', NULL, NULL),
(30, 'CSC311GC3', 'Graphics and Visual Computing', NULL, NULL),
(31, 'CSC312GC1', 'Computer Programming III', NULL, NULL),
(32, 'CSC318MC3', 'Digital Image Processing', NULL, NULL),
(33, 'CSC317MC4', 'Data Communications and Computer Networks', NULL, NULL),
(34, 'CSC316MC3', 'Advanced Database Design and Systems', NULL, NULL),
(35, 'CSC417SC3', 'Data Mining and Machine Learning', NULL, NULL),
(36, 'CSC413SC3', 'Advanced Algorithms', NULL, NULL),
(37, 'CSC419SC3', 'Mathematics for Computing IV', NULL, NULL),
(38, 'CSC418SC3', 'Compiler Design', NULL, NULL),
(39, 'CSC412SC3', 'Artificial intelligence', NULL, NULL),
(40, 'CSC421SC3', 'Software Development Life Cycle', NULL, NULL),
(41, 'CSC417MC3', 'Data Mining and Machine Learning', NULL, NULL),
(42, 'CSC413MC3', 'Advanced Algorithms', NULL, NULL),
(43, 'CSC419MC3', 'Mathematics for Computing IV', NULL, NULL),
(44, 'CSC418MC3', 'Compiler Design', NULL, NULL),
(45, 'CSC412MC3', 'Artificial intelligence', NULL, NULL),
(46, 'CSC421MC3', 'Software Development Life Cycle', NULL, '2019-01-28 01:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `course_levels`
--

CREATE TABLE `course_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `Level_id` int(11) NOT NULL,
  `Course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_levels`
--

INSERT INTO `course_levels` (`id`, `Level_id`, `Course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 2, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL),
(13, 3, 13, NULL, NULL),
(14, 3, 14, NULL, NULL),
(15, 3, 15, NULL, NULL),
(16, 3, 16, NULL, NULL),
(17, 3, 17, NULL, NULL),
(18, 3, 18, NULL, NULL),
(19, 4, 19, NULL, NULL),
(20, 4, 20, NULL, NULL),
(21, 4, 21, NULL, NULL),
(22, 5, 22, NULL, NULL),
(23, 5, 23, NULL, NULL),
(24, 5, 24, NULL, NULL),
(25, 5, 25, NULL, NULL),
(26, 5, 26, NULL, NULL),
(27, 5, 27, NULL, NULL),
(28, 5, 28, NULL, NULL),
(29, 6, 29, NULL, NULL),
(30, 6, 30, NULL, NULL),
(31, 6, 31, NULL, NULL),
(32, 7, 32, NULL, NULL),
(33, 7, 33, NULL, NULL),
(34, 7, 34, NULL, NULL),
(35, 8, 35, NULL, NULL),
(36, 8, 36, NULL, NULL),
(37, 8, 37, NULL, NULL),
(38, 8, 38, NULL, NULL),
(39, 8, 39, NULL, NULL),
(40, 8, 40, NULL, NULL),
(41, 9, 41, NULL, NULL),
(42, 9, 42, NULL, NULL),
(43, 9, 43, NULL, NULL),
(44, 9, 44, NULL, NULL),
(45, 9, 45, NULL, NULL),
(46, 9, 46, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `LecturerName` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `LecturerName`, `created_at`, `updated_at`) VALUES
(1, 'Dr. A. Ramanan', NULL, NULL),
(2, 'Dr. K. Thabotharan', NULL, NULL),
(3, 'Ms. J. Samantha Tharani', NULL, NULL),
(4, 'Dr.E.Y.A.Charles', NULL, NULL),
(5, 'Dr.K Kannan', NULL, NULL),
(6, 'Dr. M. Siyamalan', NULL, NULL),
(7, 'Mr.L.Mayuran', NULL, NULL),
(8, 'Dr. (Mrs). B. Mayurathan', NULL, NULL),
(9, 'Mr.M. Khokulan', NULL, NULL),
(10, 'Dr. S. Mahesan', NULL, NULL),
(11, 'Mrs.T.Sivaskaran', NULL, NULL),
(12, 'Dr.R.Prasanthan', NULL, NULL),
(13, 'Mr. S. Suthakar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_course_levels`
--

CREATE TABLE `lecturer_course_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `Lecturer_id` int(11) NOT NULL,
  `Course_Level_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturer_course_levels`
--

INSERT INTO `lecturer_course_levels` (`id`, `Lecturer_id`, `Course_Level_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 4, 3, NULL, NULL),
(4, 5, 4, NULL, NULL),
(5, 6, 5, NULL, NULL),
(6, 7, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 6, 9, NULL, NULL),
(10, 2, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 8, 12, NULL, NULL),
(13, 8, 13, NULL, NULL),
(14, 4, 14, NULL, NULL),
(15, 9, 15, NULL, NULL),
(16, 10, 16, NULL, NULL),
(17, 6, 17, NULL, NULL),
(18, 11, 18, NULL, NULL),
(19, 3, 19, NULL, NULL),
(20, 8, 20, NULL, NULL),
(21, 8, 21, NULL, NULL),
(22, 3, 22, NULL, NULL),
(23, 13, 23, NULL, NULL),
(24, 1, 24, NULL, NULL),
(25, 2, 25, NULL, NULL),
(26, 8, 26, NULL, NULL),
(27, 13, 27, NULL, NULL),
(28, 10, 28, NULL, NULL),
(29, 3, 29, NULL, NULL),
(30, 13, 30, NULL, NULL),
(31, 3, 31, NULL, NULL),
(32, 1, 32, NULL, NULL),
(33, 2, 33, NULL, NULL),
(34, 8, 34, NULL, NULL),
(35, 1, 35, NULL, NULL),
(36, 4, 36, NULL, NULL),
(37, 12, 37, NULL, NULL),
(38, 8, 38, NULL, NULL),
(39, 10, 39, NULL, NULL),
(40, 6, 40, NULL, NULL),
(41, 1, 41, NULL, NULL),
(42, 4, 42, NULL, NULL),
(43, 12, 43, NULL, NULL),
(44, 8, 44, NULL, NULL),
(45, 10, 45, NULL, NULL),
(46, 6, 46, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `Level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `Level`, `created_at`, `updated_at`) VALUES
(1, '1S', NULL, NULL),
(2, '1G', NULL, NULL),
(3, '2S', NULL, NULL),
(4, '2G', NULL, NULL),
(5, '3S', NULL, NULL),
(6, '3G', NULL, NULL),
(7, '3M', NULL, NULL),
(8, '4S', NULL, NULL),
(9, '4M', NULL, NULL);

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
(3, '2019_01_14_041120_create_lecturers_table', 1),
(4, '2019_01_14_042227_create_courses_table', 1),
(5, '2019_01_14_042602_create_levels_table', 1),
(6, '2019_01_14_051835_create_students_table', 1),
(7, '2019_01_22_042958_create_course_levels_table', 1),
(8, '2019_01_22_043431_create_lecturer_course_levels_table', 1),
(9, '2019_01_29_012203_create_attendances_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `Lecturer_id` int(2) DEFAULT NULL,
  `Course_Level_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`Lecturer_id`, `Course_Level_id`) VALUES
(1, 1),
(2, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(NULL, 7),
(1, 8),
(6, 9),
(2, 10),
(3, 11),
(8, 12),
(8, 13),
(4, 14),
(9, 15),
(10, 16),
(6, 17),
(11, 18),
(3, 19),
(8, 20),
(8, 21),
(3, 22),
(13, 23),
(1, 24),
(2, 25),
(8, 26),
(13, 27),
(10, 28),
(3, 29),
(13, 30),
(3, 31),
(1, 32),
(2, 33),
(8, 34),
(1, 35),
(4, 36),
(12, 37),
(8, 38),
(10, 39),
(6, 40),
(1, 41),
(4, 42),
(12, 43),
(8, 44),
(10, 45),
(6, 46);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level_id` int(11) NOT NULL,
  `RegistrationNo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `Level_id`, `RegistrationNo`, `created_at`, `updated_at`) VALUES
(1, 'Janani Kangesan', 1, '2017/CSC/001', NULL, NULL),
(2, 'Dissanayaka Mudiyanselage Shalika Harshani Dissanayaka', 1, '2017/CSC/002', NULL, NULL),
(3, 'Krishnamoorthy Thanushan', 1, '2017/CSC/003', NULL, NULL),
(4, 'Supasthika Amirthalingam', 1, '2017/CSC/004', NULL, NULL),
(5, 'Srikaran Jatheesan', 1, '2017/CSC/005', NULL, NULL),
(6, 'Divya Varatharajan', 1, '2017/CSC/006', NULL, NULL),
(7, 'Samarasinghage Kavindya Sathsarani', 1, '2017/CSC/007', NULL, NULL),
(8, 'Sinthuja Arumainayagam', 1, '2017/CSC/008', NULL, NULL),
(9, 'Rathnayakage Amila Saranga Rathnayaka', 1, '2017/CSC/009', NULL, NULL),
(10, 'Abdul Gaffar Mohamed Fawzy', 1, '2017/CSC/010', NULL, NULL),
(11, 'Yaleen Mohamed Silhan', 1, '2017/CSC/011', NULL, NULL),
(12, 'Niranga Sithara Athauda Arachchi', 1, '2017/CSC/012', NULL, NULL),
(13, 'hanganna Gamage Tharindu Prasad Ranaweera', 1, '2017/CSC/013', NULL, NULL),
(14, 'Samarakoon Jayasekara Mudiyanselage Imila Maheshan Bandara Samarakoon', 1, '2017/CSC/014', NULL, NULL),
(15, 'Musthafa Lebbe Mohamed Sanoos', 1, '2017/CSC/015', NULL, NULL),
(16, 'Aluthgamaralalage Isuru Lakmal', 1, '2017/CSC/016', NULL, NULL),
(17, 'Mohommadhu Abdhul Rahoof Rifath Muhammadh', 1, '2017/CSC/017', NULL, NULL),
(18, 'Elackshana Manivannan', 1, '2017/CSC/018', NULL, NULL),
(19, 'Mohammed Hilmy Mohammed Himaz', 1, '2017/CSC/019', NULL, NULL),
(20, 'Mohamed Ismail Ahamed Aneeque', 1, '2017/CSC/020', NULL, NULL),
(21, 'Mohommadhu Hanifa Mohommadhu Hisham', 1, '2017/CSC/021', NULL, NULL),
(22, 'Dilki Hasara Wickramasinghe', 1, '2017/CSC/022', NULL, NULL),
(23, 'Mathiyalagan Mathusha', 1, '2017/CSC/023', NULL, NULL),
(24, 'Mapa Mudiyanselage Madhawa Heshan Thilakarathne', 1, '2017/CSC/024', NULL, NULL),
(25, 'Wijesundara lekamlage Chamika Sandaruwan Wijesundara', 1, '2017/CSC/026', NULL, NULL),
(26, 'Panadura Acharige Wijesundara Gunathilaka Ramesh Perera', 1, '2017/CSC/027', NULL, NULL),
(27, 'Dissanayaka Mudiyanselage Sudula Kumara Dissanayaka', 1, '2017/CSC/028', NULL, NULL),
(28, 'Uthumalebbe Mohamed Afrid', 1, '2017/CSC/029', NULL, NULL),
(29, 'Kishani Kandasamy', 1, '2017/CSC/030', NULL, NULL),
(30, 'Lansakara Herath Mudiyanselage Bisak Sampath Bandara', 1, '2017/CSC/031', NULL, NULL),
(31, 'Prathaban Kavin', 1, '2017/CSC/032', NULL, NULL),
(32, 'Pushpakantha Ajanthasiri Gamage', 1, '2017/CSC/033', NULL, NULL),
(33, 'Vetharsana Thangarajah', 1, '2017/CSC/034', NULL, NULL),
(34, 'Hewa Puwakdandawage Isuru Madushan', 1, '2017/CSC/035', NULL, NULL),
(35, 'Ekanayake Mudiyanselage Charith Gihan Ekanayake', 1, '2017/CSC/036', NULL, NULL),
(36, 'Panojah Nadarasa', 1, '2017/CSC/037', NULL, NULL),
(37, 'Meiyalagan Yathushanan', 1, '2017/CSC/038', NULL, NULL),
(38, 'Kirusnashamy Kisnakumar', 1, '2017/CSC/039', NULL, NULL),
(39, 'Karthikesu Kogul', 1, '2017/CSC/040', NULL, NULL),
(40, 'Sritharan Kajith', 1, '2017/CSC/041', NULL, NULL),
(41, 'Linganathan Kiritharan', 1, '2017/CSC/042', NULL, NULL),
(42, 'Selvakumar Ranjithamalar', 1, '2017/CSC/043', NULL, NULL),
(43, 'mallawa Arachchige Heshan Nayanajith mallawarachchi', 1, '2017/CSC/044', NULL, NULL),
(44, 'Zahir Mohamed Ardil', 1, '2017/CSC/045', NULL, NULL),
(45, 'Sethukavalan Lokavanilavan', 1, '2017/CSC/046', NULL, NULL),
(46, 'Rathnayaka Mudiyanselage Lukshan kavinda', 1, '2017/CSC/047', NULL, NULL),
(47, 'Herath Mudiyanselage Cathuranga Sanjeewa rathnayake', 1, '2017/CSC/048', NULL, NULL),
(48, 'Nawab Yousufi', 1, '2017/CSC/FS/049', NULL, NULL),
(49, 'Herath Mudiyanselage Jithmi Nayanathara Herath', 2, '2016/SP/040', NULL, NULL),
(50, 'Vishnuga Sivakumaran', 2, '2017/SP/002', NULL, NULL),
(51, 'Thirisika Pragalathanan', 2, '2017/SP/003', NULL, NULL),
(52, 'Sithamparanadesan Kumareasan', 2, '2017/SP/005', NULL, NULL),
(53, 'Nishani Poovalingam', 2, '2017/SP/006', NULL, NULL),
(54, 'Nagaraja Senthuran', 2, '2017/SP/008', NULL, NULL),
(55, 'Kugapriya Kumarasamy', 2, '2017/SP/009', NULL, NULL),
(56, 'Sathiyaseelan Kosika', 2, '2017/SP/010', NULL, NULL),
(57, 'Luxsana Paramaseelan', 2, '2017/SP/011', NULL, NULL),
(58, 'Mageswaran Janarthanan', 2, '2017/SP/012', NULL, NULL),
(59, 'Thuvaraka Thiraviyarasa', 2, '2017/SP/013', NULL, NULL),
(60, 'Mithusa Thillaivasan', 2, '2017/SP/014', NULL, NULL),
(61, 'Louis Mariyanayakam Premitha', 2, '2017/SP/015', NULL, NULL),
(62, 'Gnanasegaram Sulojana', 2, '2017/SP/016', NULL, NULL),
(63, 'Nanthakumar Pakirathan', 2, '2017/SP/017', NULL, NULL),
(64, 'Ganesharajan Anojan', 2, '2017/SP/018', NULL, NULL),
(65, 'Thayani jeganathan', 2, '2017/SP/020', NULL, NULL),
(66, 'Rajakaruna Herath Mudiyanselage Mayuri Shanika Rajakaruna', 2, '2017/SP/024', NULL, NULL),
(67, 'MaharajaThinesh', 2, '2017/SP/025', NULL, NULL),
(68, 'Dilaxsha Thangarasa', 2, '2017/SP/029', NULL, NULL),
(69, 'Subramaniam Prashanth', 2, '2017/SP/031', NULL, NULL),
(70, 'Rajanageswaran Justilla', 2, '2017/SP/032', NULL, NULL),
(71, 'Perinpanathan Mathusha', 2, '2017/SP/034', NULL, NULL),
(72, 'Walamuni Dewage Shanilka Wijesingha', 2, '2017/SP/035', NULL, NULL),
(73, 'Dassanayaka Mudiyanselage rasika Lakmal Dassanayaka', 2, '2017/SP/040', NULL, NULL),
(74, 'Rathnayaka Mudiyanselage Isuru Udara rathnayake', 2, '2017/SP/042', NULL, NULL),
(75, 'Samarakoon Ralalage Maneesha Devni Samarakoon', 2, '2017/SP/044', NULL, NULL),
(76, 'Sabaraththinam Vithusla', 2, '2017/SP/045', NULL, NULL),
(77, 'Konthadoru Thambiralalage lakshika Ishani kumari Silva', 2, '2017/SP/046', NULL, NULL),
(78, 'Keerthiga Thiruganasothy', 2, '2017/SP/047', NULL, NULL),
(79, 'yahathugoda Badalge Kalana Pasindu De Kostha', 2, '2017/SP/048', NULL, NULL),
(80, 'Kashthury Gunabalasingam', 2, '2017/SP/049', NULL, NULL),
(81, 'Liyana ralalage Lalitha Widhuranga Weerawardhana', 2, '2017/SP/050', NULL, NULL),
(82, 'Varaginy Subramaniyam', 2, '2017/SP/056', NULL, NULL),
(83, 'Thavachchelvam Nitharsini', 2, '2017/SP/057', NULL, NULL),
(84, 'Weebadde weerakoon Mudiyanselage Hapugaskumbure Avishka Saumya Weebadde', 2, '2017/SP/058', NULL, NULL),
(85, 'Pathirage Don Samitha Dilan Pathirade', 2, '2017/SP/059', NULL, NULL),
(86, 'Sammu Vishwa Sasanka', 2, '2017/SP/060', NULL, NULL),
(87, 'Vigneswaran Khariharan', 2, '2017/SP/063', NULL, NULL),
(88, 'Karunagaran Kaarunja', 2, '2017/SP/066', NULL, NULL),
(89, 'Kirindawa Liyanage Sandun Prabath Senarathna', 2, '2017/SP/067', NULL, NULL),
(90, 'Yayakody Arachchilage Lakmi Nayananjali Jayakody', 2, '2017/SP/068', NULL, NULL),
(91, 'Wickrama Arachchige Rumali Tharushika Gunasekara', 2, '2017/SP/084', NULL, NULL),
(92, 'Rajapakshage Nuwan Nalaka Rajapaksha', 2, '2017/SP/091', NULL, NULL),
(93, 'Chandran Nivethan', 2, '2017/SP/143', NULL, NULL),
(94, 'Ranasinghe Rukshan Akshitha Prasanga', 2, '2017/SP/166', NULL, NULL),
(95, 'Kavikshana Ujenda Premalal', 2, '2017/SP/167', NULL, NULL),
(96, 'Francis Robert Dunstan Leon', 2, '2017/SP/187', NULL, NULL),
(97, 'Sabaratinam Subaskar', 2, '2017/SP/188', NULL, NULL),
(98, 'Morawakalage Sandun Chathuranga', 2, '2017/SP/233', NULL, NULL),
(99, 'Sreesangameera Sreeskantharajaah', 2, '2017/SP/279', NULL, NULL),
(100, 'Mathanki Amirthalingam', 2, '2017/SP/280', NULL, NULL),
(101, 'Raththinasingkam Vipooshanan', 2, '2017/SP/287', NULL, NULL),
(102, 'S. Lesslylavan', 3, '2015/CSC/001', NULL, NULL),
(103, 'W.M. Rayan Aradha', 3, '2015/CSC/042', NULL, NULL),
(104, 'Samsudeen Munawwar Ahamed', 3, '2016/CSC/001', NULL, NULL),
(105, 'Mohamed Ahamed Arham', 3, '2016/CSC/002', NULL, NULL),
(106, 'A.A.S.N.Athauda', 3, '2016/CSC/003', NULL, NULL),
(107, 'S.A.Samila Chanuka', 3, '2016/CSC/004', NULL, NULL),
(108, 'R.H.S.L.Dilshan', 3, '2016/CSC/005', NULL, NULL),
(109, 'W.Nimasha Nishadi Fernando', 3, '2016/CSC/007', NULL, NULL),
(110, 'H.M.D.Herath', 3, '2016/CSC/008', NULL, NULL),
(111, 'S.Jenushanth', 3, '2016/CSC/009', NULL, NULL),
(112, 'G.H.G.R.Kalpage', 3, '2016/CSC/010', NULL, NULL),
(113, 'H.L.R.L.Liyanage', 3, '2016/CSC/011', NULL, NULL),
(114, 'M.Mathanraj', 3, '2016/CSC/012', NULL, NULL),
(115, 'A.H.Rasika Priyadarshani', 3, '2016/CSC/015', NULL, NULL),
(116, 'Ramees Mohamed Rizwan', 3, '2016/CSC/019', NULL, NULL),
(117, 'U.S.Dilan Samaraweera', 3, '2016/CSC/020', NULL, NULL),
(118, 'S.S.K.Anuka Sanjaya', 3, '2016/CSC/021', NULL, NULL),
(119, 'Sinthuja Vijayananthan', 3, '2016/CSC/023', NULL, NULL),
(120, 'K.Sripalasenthuran', 3, '2016/CSC/024', NULL, NULL),
(121, 'T.M.G.C.B.Tennakoon', 3, '2016/CSC/025', NULL, NULL),
(122, 'W.R.I.R.Widyasekara', 3, '2016/CSC/027', NULL, NULL),
(123, 'Methusha Thuraisingam', 3, '2016/CSC/028', NULL, NULL),
(124, 'R.M.C.K.Rathnayake', 3, '2016/CSC/029', NULL, NULL),
(125, 'Vithursha Sivakumaran', 3, '2016/CSC/030', NULL, NULL),
(126, 'Ajanthy Jayarajan', 3, '2016/CSC/031', NULL, NULL),
(127, 'Thushankgi Balachandran', 3, '2016/CSC/032', NULL, NULL),
(128, 'D.M.S.Lakshitha', 3, '2016/CSC/033', NULL, NULL),
(129, 'R.M.Yashodha Nilmini', 3, '2016/CSC/034', NULL, NULL),
(130, 'Nisamdeen Mohamed Shareek', 3, '2016/CSC/035', NULL, NULL),
(131, 'N.A.Muhandiram', 3, '2016/CSC/036', NULL, NULL),
(132, 'Siddique Mohamed Wazeem', 3, '2016/CSC/037', NULL, NULL),
(133, 'T.D.Pramuditha Chamikara', 3, '2016/CSC/039', NULL, NULL),
(134, 'H.M.Abhimani Sachithra', 3, '2016/CSC/040', NULL, NULL),
(135, 'H.W.R.L.Hendrawitharana', 3, '2016/CSC/041', NULL, NULL),
(136, 'J.S.Shanfravin', 3, '2016/CSC/042', NULL, NULL),
(137, 'Yothika Yogeswaran', 3, '2016/CSC/043', NULL, NULL),
(138, 'A.G.Dilshan Dilip Udara', 3, '2016/CSC/044', NULL, NULL),
(139, 'A.Keerthikan', 3, '2016/CSC/045', NULL, NULL),
(140, 'Abdul Jabbar Mohamed Rizvi', 3, '2016/CSC/046', NULL, NULL),
(141, 'N.D.Dodanwala', 3, '2016/CSC/047', NULL, NULL),
(142, 'R.Shehan Lahiru Jayasinghe', 3, '2016/CSC/048', NULL, NULL),
(143, 'S.F.Safna', 3, '2016/CSC/038', NULL, NULL),
(144, 'Anton Jesuthas Nickson Joram', 4, '2015/SP/058', NULL, NULL),
(145, 'Ketheeswaran Abiram', 4, '2016/SP/002', NULL, NULL),
(146, 'Manoj Lakshitha Bandara', 4, '2016/SP/009', NULL, NULL),
(147, 'Sahanaa Baskaran', 4, '2016/SP/010', NULL, NULL),
(148, 'Ekanayaka Mudiyanselage Shyamali Hasanthika Ekanayaka', 4, '2016/SP/029', NULL, NULL),
(149, 'Somarathnage Surath Miyuru Hasaranjana', 4, '2016/SP/038', NULL, NULL),
(150, 'Veerasingam Kajitha', 4, '2016/SP/050', NULL, NULL),
(151, 'Kesavi Kanesalingam', 4, '2016/SP/051', NULL, NULL),
(152, 'Wijemuni Lahiru Dilshan Karunathilake', 4, '2016/SP/054', NULL, NULL),
(153, 'Sivananthan Marujan', 4, '2016/SP/072', NULL, NULL),
(154, 'Muhannadhu Nawas Muhammadhu Nafees', 4, '2016/SP/077', NULL, NULL),
(155, 'Manokaran Pavunthan', 4, '2016/SP/085', NULL, NULL),
(156, 'Ranjith Rajakarunage Shashika Parakkarama Rajakaruna', 4, '2016/SP/095', NULL, NULL),
(157, 'Ramadeniye Gedara Ravindu Dilshan Ramadeniye', 4, '2016/SP/098', NULL, NULL),
(158, 'Lavanya Ratnabala', 4, '2016/SP/102', NULL, NULL),
(159, 'Aththanayaka Pathiranage Pulinda Prabhath Sankalpa', 4, '2016/SP/107', NULL, NULL),
(160, 'Raveendran Sirushdika', 4, '2016/SP/115', NULL, NULL),
(161, 'Luxana Sivakumaran', 4, '2016/SP/116', NULL, NULL),
(162, 'Thennakoon Pathirennehelage Geethmie Yasara Thennakoon', 4, '2016/SP/156', NULL, NULL),
(163, 'Ilandarage Praveen Darshana Kularajapathi', 4, '2016/SP/163', NULL, NULL),
(164, 'Konara Mudiyanselage Shakila Kalhari Gunathilake', 4, '2016/SP/164', NULL, NULL),
(165, 'Meragalge Sarala Shalini Gunasekara', 4, '2016/SP/167', NULL, NULL),
(166, 'Kaludurage Hashan Madusanka Rathnayaka', 4, '2016/SP/174', NULL, NULL),
(167, 'Sivagnanasuntharam Sundaraathavan', 4, '2016/SP/175', NULL, NULL),
(168, 'Adhikari Athukoralalage Vinura Prabath Athukorala', 4, '2016/SP/179', NULL, NULL),
(169, 'Mathangi Sivananthan', 4, '2016/SP/183', NULL, NULL),
(170, 'Senanayake Mudiyanselage Yasaransi Kaveesha Senanayake', 4, '2016/SP/193', NULL, NULL),
(171, 'Kapuralalage Lasantha Chathuranga Bandara', 4, '2016/SP/200', NULL, NULL),
(172, 'Paliskara Hemachandrage Isuru Lakruwan Ananda', 4, '2016/SP/204', NULL, NULL),
(173, 'Lokuwithanage Yasiru Lakshan', 4, '2016/SP/208', NULL, NULL),
(174, 'Rammiah Jeyakumar', 4, '2016/SP/210', NULL, NULL),
(175, 'Mohanras Anton Agnew Rathan', 4, '2016/SP/256', NULL, NULL),
(176, 'Mahadhevan Narththanan', 4, '2016/SP/259', NULL, NULL),
(177, 'Puvanendrarasa Rushanthan', 4, '2016/SP/260', NULL, NULL),
(178, 'Tharmika Kulenthiran', 4, '2016/SP/264', NULL, NULL),
(179, 'Rathnasingam Sinthujan', 4, '2016/SP/293', NULL, NULL),
(180, 'Konara Mudiyanselage Mahesh Bawantha Kulathunga', 4, '2016/SP/298', NULL, NULL),
(181, 'Muharris Ahmadh Munzir', 4, '2016/SP/313', NULL, NULL),
(182, 'Adikari Arachchige Chanaka Dushmantha Adikari', 4, '2016/SP/314', NULL, NULL),
(183, 'Mohamed Musthafa Mohamed Zakee', 4, '2016/SP/151', NULL, NULL),
(184, 'Mohamed Hamdoon Ijas Mohamed', 4, '2016/SP/311', NULL, NULL),
(185, 'Sulaimalebbe Rukzan Akeel', 4, '2016/SP/221', NULL, NULL),
(186, 'Mayuravaani Mathuranathan', 5, '2015/CSC/002', NULL, NULL),
(187, 'Mohamed Niwas Mohamed Muaz', 5, '2015/CSC/006', NULL, NULL),
(188, 'W.W.Chathuska Madhushan Waidyarathna', 5, '2015/CSC/012', NULL, NULL),
(189, 'Pravagaran Thamilvaanan', 5, '2015/CSC/014', NULL, NULL),
(190, 'N.W.G Anurudda Chathura Kumara Jeyawardane', 5, '2015/CSC/015', NULL, NULL),
(191, 'Bhagya Udayangini Premarathne', 5, '2015/CSC/016', NULL, NULL),
(192, 'B.M Mahawalawwe Harsha Chaminda Bandra', 5, '2015/CSC/017', NULL, NULL),
(193, 'Herath Mudiyanselage Dhanuska Darmasena', 5, '2015/CSC/019', NULL, NULL),
(194, 'Walpola Kanakanamalage Athula Ranjan Walpola', 5, '2015/CSC/021', NULL, NULL),
(195, 'Wadiya Ralalage Isuri N Nadeeshanee Kalugalla', 5, '2015/CSC/023', NULL, NULL),
(196, 'Vihanga malinga Bandara Rasnakawewa', 5, '2015/CSC/025', NULL, NULL),
(197, 'Algewaththa Dolagarage Thaarindu Dilhara', 5, '2015/CSC/027', NULL, NULL),
(198, 'Anjalin Nirupa Nirmaleswaran', 5, '2015/CSC/028', NULL, NULL),
(199, 'Narmatha Jehanathan', 5, '2015/CSC/029', NULL, NULL),
(200, 'R. Mudianselage Pasan Lahiru Bandara Rathnayke', 5, '2015/CSC/030', NULL, NULL),
(201, 'Thayaparan Kalaineethan', 5, '2015/CSC/031', NULL, NULL),
(202, 'Justus Nithurshan', 5, '2015/CSC/032', NULL, NULL),
(203, 'Ranhotige Sujaanan Bhatiya Wijisinghe', 5, '2015/CSC/033', NULL, NULL),
(204, 'Thangavadivel Thanuskanth', 5, '2015/CSC/034', NULL, NULL),
(205, 'Theevika Arumaiththurai', 5, '2015/CSC/035', NULL, NULL),
(206, 'Mathalamuthu Vazz Dilanson', 5, '2015/CSC/036', NULL, NULL),
(207, 'J.Bandathuruge Kanchana Sandamali Pathirana', 5, '2015/CSC/039', NULL, NULL),
(208, 'Sivanesan Menuja', 5, '2015/CSC/041', NULL, NULL),
(209, 'Jesuthasu Samson', 5, '2006/CSC/06', NULL, NULL),
(210, 'Ajaya Karki', 5, '2015/CSC/FS/40', NULL, NULL),
(211, 'Mathivannan Santhusan', 5, '2015/CSC/038', NULL, NULL),
(212, 'Gnanamoorthy Ananthan', 6, '2015/SP/005', NULL, NULL),
(213, 'Sithamaranathasharma Anusa', 6, '2015/SP/007', NULL, NULL),
(214, 'Amalaseeli Arultharsan', 6, '2015/SP/011', NULL, NULL),
(215, 'Mohamed Akram Ashfaq Ahamed', 6, '2015/SP/013', NULL, NULL),
(216, 'Wijerathna Rajakaruna Wasala Mudiyanselage Dilshika Dilshani', 6, '2015/SP/018', NULL, NULL),
(217, 'Rathnayaka Mudiyanselage Suwendra Pradeep Gunawaedana', 6, '2015/SP/040', NULL, NULL),
(218, 'Somapalage Dilan Madushankha Herath', 6, '2015/SP/046', NULL, NULL),
(219, 'Samarakoon Mudiyanselage Malki Sandamini Jeyawardhana', 6, '2015/SP/054', NULL, NULL),
(220, 'Thanidu Nawanjana Karunarathne', 6, '2015/SP/065', NULL, NULL),
(221, 'Balasubramaniyam Kavidha', 6, '2015/SP/066', NULL, NULL),
(222, 'Jeyasegedara Jayasundara Mudiyebselage Madhushanka Kumara', 6, '2015/SP/071', NULL, NULL),
(223, 'Wimukthi Eroshan Mahawaduge', 6, '2015/SP/082', NULL, NULL),
(224, 'Rajakaruna Mudiyanselage Ayodhya Hansamala Manewa', 6, '2015/SP/084', NULL, NULL),
(225, 'Santhiranantham Nilogithan', 6, '2015/SP/095', NULL, NULL),
(226, 'Wickramasinghe Arachchige Dona Dilini Nimeshika', 6, '2015/SP/096', NULL, NULL),
(227, 'Mahendran Niroshan', 6, '2015/SP/098', NULL, NULL),
(228, 'Nirmalanathan Nivetha', 6, '2015/SP/101', NULL, NULL),
(229, 'Kunathasan Rakavan', 6, '2015/SP/121', NULL, NULL),
(230, 'Peter Vimalathas Robinroy', 6, '2015/SP/127', NULL, NULL),
(231, 'Bastian Koralalage Shevindi Navanjana Rodrigo', 6, '2015/SP/128', NULL, NULL),
(232, 'Sabgaranathan Sangarlal', 6, '2015/SP/135', NULL, NULL),
(233, 'Mahendran Saruhashini', 6, '2015/SP/139', NULL, NULL),
(234, 'Matheews Sathurshan', 6, '2015/SP/141', NULL, NULL),
(235, 'Abirame Selvendran', 6, '2015/SP/142', NULL, NULL),
(236, 'Rasamanickam Shahilashinie', 6, '2015/SP/144', NULL, NULL),
(237, 'Nivethana Shanmugaratnam', 6, '2015/SP/146', NULL, NULL),
(238, 'Karunanayake Shalintha Subhashana Silva', 6, '2015/SP/148', NULL, NULL),
(239, 'Manikku Badathuruge Nuwani Uittara Karunawardhana Silva', 6, '2015/SP/149', NULL, NULL),
(240, 'Samapavi Sriskandarajah', 6, '2015/SP/153', NULL, NULL),
(241, 'Mathialagan Suhirthashini', 6, '2015/SP/157', NULL, NULL),
(242, 'Lawshiga Thurairasasingam', 6, '2015/SP/167', NULL, NULL),
(243, 'Jeyananthan Vithurshan', 6, '2015/SP/168', NULL, NULL),
(244, 'Weerasingha Mudiyanselage Nadeeshani Kaushalya Weerasinga', 6, '2015/SP/175', NULL, NULL),
(245, 'Nirubikaa Ravakumar', 6, '2015/SP/186', NULL, NULL),
(246, 'Gunasekara Widhanalage Nisal Shaminda Gunasekara', 6, '2015/SP/189', NULL, NULL),
(247, 'Meragal Pedige Dushyantha Thariju Priyankara', 6, '2015/SP/194', NULL, NULL),
(248, 'Herath Mudiyanselage Ashan Harshana Bandara Herath', 6, '2015/SP/199', NULL, NULL),
(249, 'Viththiyanathan Pakeesan', 6, '2015/SP/204', NULL, NULL),
(250, 'Herath Mudiyanselage Sewmi Shayanara Herath', 6, '2015/SP/207', NULL, NULL),
(251, 'Wedisingha Arachchilage Teneesha Jinanjanee Thilakarathna', 6, '2015/SP/209', NULL, NULL),
(252, 'Jegatheesar Ruksala', 6, '2015/SP/211', NULL, NULL),
(253, 'Ranasinghage Supun Dhanjaya Ranasingha', 6, '2015/SP/213', NULL, NULL),
(254, 'Thaneawaran Thanujan', 6, '2015/SP/214', NULL, NULL),
(255, 'Meerigama Dewage Gihan Priyankara Ranasingha', 6, '2015/SP/218', NULL, NULL),
(256, 'Tharani Thanapalasingam', 6, '2015/SP/220', NULL, NULL),
(257, 'Ethugal Pedige Rasanginee Sarangika Ethugala', 6, '2015/SP/225', NULL, NULL),
(258, 'Sivarajah Ainkaran', 6, '2015/SP/248', NULL, NULL),
(259, 'Basthiyan Koralalage Marian Dilini Nuwanga Rodrigo', 6, '2015/SP/255', NULL, NULL),
(260, 'Vijiththa Thangarajah', 6, '2015/SP/265', NULL, NULL),
(261, 'W.Maralalage Akarshana Buddhini Chandrasena', 6, '2015/SP/280', NULL, NULL),
(262, 'Deepani Kaushalya Hemachandra', 6, '2014/SP/167', NULL, NULL),
(263, 'S.M.T.Madushani', 6, '2014/SP/170', NULL, NULL),
(264, 'Gnanamoorthy Ananthan', 7, '2015/SP/005', NULL, NULL),
(265, 'Amalaseeli Arulthasan', 7, '2015/SP/011', NULL, NULL),
(266, 'Wijerathna Rajakaruna Wasala Mudiyanselage Dilshika Dilshani', 7, '2015/SP/018', NULL, NULL),
(267, 'Samarakoon Mudyanselage Malki Sandamini Jeyawardhana', 7, '2015/SP/054', NULL, NULL),
(268, 'Balasubramaniyam Kavidha', 7, '2015/SP/066', NULL, NULL),
(269, 'Rajakaruna Mudiyanselage Ayodhya Hansamala Manewa', 7, '2015/SP/084', NULL, NULL),
(270, 'Santhiranantham Nilogithan', 7, '2015/SP/095', NULL, NULL),
(271, 'Wikramasinghe Arachchige Dona Dilini Nimeshika', 7, '2015/SP/096', NULL, NULL),
(272, 'Niormalanathan Nivetha', 7, '2015/SP/101', NULL, NULL),
(273, 'Peter Vimalathas Robinroy', 7, '2015/SP/127', NULL, NULL),
(274, 'Basthian Koralalage Shevindi Navanjana Rodrigo', 7, '2015/SP/128', NULL, NULL),
(275, 'Sangaranathan Sangarlal', 7, '2015/SP/135', NULL, NULL),
(276, 'Mahendran Saruhashini', 7, '2015/SP/139', NULL, NULL),
(277, 'Matheews Sathurshan', 7, '2015/SP/141', NULL, NULL),
(278, 'Sampavi Sriskandarajah', 7, '2015/SP/153', NULL, NULL),
(279, 'Lawshiga Thurairasasingam', 7, '2015/SP/167', NULL, NULL),
(280, 'Nirubikaa Ravikumar', 7, '2015/SP/186', NULL, NULL),
(281, 'Meragal pedige Dushyantha Thariju Priyankara', 7, '2015/SP/194', NULL, NULL),
(282, 'Herath Mudiyanselage Sewmi Shayanara Herath', 7, '2015/SP/207', NULL, NULL),
(283, 'Wedisingha Arachchilage Teneesha Jinanjanee Thilakarathna', 7, '2015/SP/209', NULL, NULL),
(284, 'Ethugal Pedige pasanginee Sarangika Ethugala', 7, '2015/SP/225', NULL, NULL),
(285, 'Basthiyan Koralalage Marian Dilini Nuwanga Rodrigo', 7, '2015/SP/255', NULL, NULL),
(286, 'Vijiththa Thangarajah', 7, '2015/SP/265', NULL, NULL),
(287, 'W.Mralalage Akarshana Buddhini Chandrasena', 7, '2015/SP/280', NULL, NULL),
(288, 'Sumandiran Jathurshan', 8, '2014/CSC/003', NULL, NULL),
(289, 'Mogan Kausik', 8, '2014/CSC/010', NULL, NULL),
(290, 'Nesathurai Pirunthapan', 8, '2014/CSC/012', NULL, NULL),
(291, 'Kumarasuinghe Bowalagamage Ranushka Pasindu Dharmaranga', 8, '2014/CSC/016', NULL, NULL),
(292, 'Jayalath Balagallage Sanjeewa Dias', 8, '2014/CSC/017', NULL, NULL),
(293, 'Amarasingam Thuvaragan', 8, '2014/CSC/018', NULL, NULL),
(294, 'Herath Mudiyanselage Chamara Madhusanka Bandara Rathnayaka', 8, '2014/CSC/021', NULL, NULL),
(295, 'Arebhy Sridaran', 8, '2014/CSC/022', NULL, NULL),
(296, 'Yogeswaran Ligitha', 8, '2014/CSC/023', NULL, NULL),
(297, 'Balendran Saranya', 8, '2014/CSC/024', NULL, NULL),
(298, 'Rajan Prithweeraj', 8, '2014/CSC/025', NULL, NULL),
(299, 'Shanmugaratnam Kajaluxshan', 8, '2014/CSC/026', NULL, NULL),
(300, 'Tennakoon Mudiyanselage Saditha Udayanga Tennakoon', 8, '2014/CSC/027', NULL, NULL),
(301, 'Daundasekara Mudiyanselage Dhanushika Chamara Dissanayake', 8, '2014/CSC/028', NULL, NULL),
(302, 'Kuruwita Arachchillage Sahan Rajitha Thilakarathna', 8, '2014/CSC/030', NULL, NULL),
(303, 'Dhanapala Herath Mudiyanselage Dinusha Lakpriya', 8, '2014/CSC/032', NULL, NULL),
(304, 'Thennakoon Mudiyanselage Vikum Dheemantha Gunasekara', 8, '2014/CSC/033', NULL, NULL),
(305, 'Hetti Arachchilage cholaka Lahiru Madhushanka Senanayaka', 8, '2014/CSC/034', NULL, NULL),
(306, 'Selvarasa Paheerathan', 8, '2014/CSC/035', NULL, NULL),
(307, 'Arulananthasivam Tharshikan', 8, '2014/CSC/036', NULL, NULL),
(308, 'Kaleel Mohamed Hafni', 8, '2014/CSC/037', NULL, NULL),
(309, 'Nissanka Mudiyanaselage Sachini Iresha Nissanka', 8, '2014/CSC/038', NULL, NULL),
(310, 'Manathunga Mudiyanselage Ruchira Sachinthana Manathunga', 8, '2014/CSC/039', NULL, NULL),
(311, 'Hewa Suduhakuruge Ashan Sandaru Jayalath', 8, '2014/CSC/040', NULL, NULL),
(312, 'Muhammadu Haniffa Mohammadu Shifkhan', 8, '2013/CSC/018', NULL, NULL),
(313, 'Dhanesh Kumar', 8, '2014/CSC/FS/041', NULL, NULL),
(314, 'Md Sabbir Hossain', 8, '2014/CSC/FS/042', NULL, NULL),
(315, 'Mahalingam Antony Arulmalar', 9, '2014/SP/015', NULL, NULL),
(316, 'Mohotti Gamage Anjula Keshan Priyanath', 9, '2014/SP/021', NULL, NULL),
(317, 'Karunanithy Senthuja', 9, '2014/SP/035', NULL, NULL),
(318, 'Meruja Selvamanikkam', 9, '2014/SP/042', NULL, NULL),
(319, 'Pathamanathan Janani', 9, '2014/SP/057', NULL, NULL),
(320, 'Suvendran Suganya', 9, '2014/SP/058', NULL, NULL),
(321, 'Ratnasingam Kasthuriraajan', 9, '2014/SP/059', NULL, NULL),
(322, 'Sivanathan Arunkumar', 9, '2014/SP/080', NULL, NULL),
(323, 'Ganesharathinam Gopishanth', 9, '2014/SP/093', NULL, NULL),
(324, 'Thramini Thalayasingam', 9, '2014/SP/094', NULL, NULL),
(325, 'Kanapathipillai Kajasumanie', 9, '2014/SP/103', NULL, NULL),
(326, 'Wasala Mudiyaneselage Dilani Madumini Gunawardhana', 9, '2014/SP/112', NULL, NULL),
(327, 'T.M.Chathura Sampath Kumara Thennakoon', 9, '2014/SP/116', NULL, NULL),
(328, 'Gammanpelahimi Arachchige Dushan Kshithija Tharaka', 9, '201/SP/118', NULL, NULL),
(329, 'Arandarage Ramesh Madushanka', 9, '2014/SP/122', NULL, NULL),
(330, 'Harischandra Patabendige Malki Maduka', 9, '2014/SP/124', NULL, NULL),
(331, 'Tharmakulasingam Thameera', 9, '2014/SP/125', NULL, NULL),
(332, 'Archchitha Kanagarajah', 9, '2014/SP/127', NULL, NULL),
(333, 'Sivarajah Mathura', 9, '2014/SP/130', NULL, NULL),
(334, 'Varnitha Sornalingam', 9, '2014/SP/131', NULL, NULL),
(335, 'Thushani Raveendran', 9, '2014/SP/137', NULL, NULL),
(336, 'Arangallage Lahiru Nirmal', 9, '2014/SP/141', NULL, NULL),
(337, 'Kariyakarawanage Kasun Suminda Kariyakarawana Fernando', 9, '2014/SP/142', NULL, NULL),
(338, 'Wickramasingha Senanayakage Hasitha Sandaruwan Senanayaka', 9, '2014/SP/146', NULL, NULL),
(339, 'Angodage Shehan Akalanka Perera', 9, '2014/SP/149', NULL, NULL),
(340, 'Ranathunga Mudiyanselage Shashikala Ranathunga', 9, '2014/SP/158', NULL, NULL),
(341, 'Yogaratnam Shawmiya', 9, '2014/SP/162', NULL, NULL),
(342, 'Kabilathas Parkavi', 9, '2014/SP/163', NULL, NULL),
(343, 'Vithusha Mohan', 9, '2014/SP/164', NULL, NULL),
(344, 'Kasturi Arachchige Tharuka Chathurani', 9, '2014/SP/165', NULL, NULL),
(345, 'Thewara Thanthirige Dushmanthi Madushani', 9, '2014/SP/179', NULL, NULL),
(346, 'Kanagaratnam Derushan', 9, '2014/SP/186', NULL, NULL),
(347, 'Kalu Arachchillage Kasun Mihiranga Kaluarachchi', 9, '2014/SP/202', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_levels`
--
ALTER TABLE `course_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_course_levels`
--
ALTER TABLE `lecturer_course_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `course_levels`
--
ALTER TABLE `course_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lecturer_course_levels`
--
ALTER TABLE `lecturer_course_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
