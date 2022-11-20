-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 12:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koursemate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Pwd`, `Picture`, `Phone`, `Gender`, `Status`) VALUES
(1, 'Elite', 'sirelite11@gmail.com', '12345', '896526write1.jpg', 0, 'male', 1),
(4, 'John Doe', 'Johndoe@gmail.com', '1234', '385189cm.jpg', 2147483647, 'male', 0),
(5, 'Gospel Jonathan', 'gospel.obiuwevbi@eng.uniben.edu', '1234', '170109malep2.jpg', 2147483647, 'male', 0),
(6, 'Dexteeny', 'dexteeny@gmail.com', '1234', '895428broker7.png', 2147483647, 'male', 0),
(7, 'Dexteeny', 'jeffery@gmail.com', '1234', '265133broker7.png', 2147483647, 'male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Project_id` int(11) NOT NULL,
  `Project_topic` varchar(255) NOT NULL,
  `Project_price` int(11) NOT NULL,
  `Project_department` varchar(255) NOT NULL,
  `Project_faculty` varchar(255) NOT NULL,
  `Project_photo` varchar(100) NOT NULL,
  `Project_pdf` varchar(100) NOT NULL,
  `Timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `User_id`, `Project_id`, `Project_topic`, `Project_price`, `Project_department`, `Project_faculty`, `Project_photo`, `Project_pdf`, `Timestamp`) VALUES
(22, 26, 37, 'CONSTRUCTION OF ELECTRONIC DISPLAY BOARD', 5000, 'Civil', 'Engineering', '170654eng3.jpg', '622856gospel\'s cv.pdf', 0),
(26, 21, 24, '	KNOWLEDGE AND PRACTICE OF CONTRACEPTIVES AMONG FEMALE STUDENTS IN DELTA STATE UNIVERSITY, ABRAKA', 0, 'Health Education', 'Artiology', '439473book10.jpg', '346396gospel\'s cv.pdf', 0),
(27, 21, 37, 'CONSTRUCTION OF ELECTRONIC DISPLAY BOARD', 5000, 'Civil', 'Engineering', '170654eng3.jpg', '622856gospel\'s cv.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Post_id` int(100) NOT NULL,
  `Post_title` varchar(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Text` text NOT NULL,
  `Approved` tinyint(4) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Post_id`, `Post_title`, `Name`, `Email`, `Text`, `Approved`, `Timestamp`) VALUES
(19, 0, '', 'Gospel Jonathan', 'sirelite11@gmail.com', 'okay', 1, '2022-10-03 14:29:15'),
(20, 102, 'Forex Shortages Blamed After Nigerian Currency Hits New Low Versus the US Dollar', 'Gospel Jonathan', 'sirelite11@gmail.com', 'okay', 1, '2022-10-03 14:30:24'),
(21, 90, 'Bitcoin Miner Rhodium Going Public Through Reverse Merger With SilverSun Technologies', 'Gospel Jonathan', 'chukwuustice6@gmail.com', 'okay', 1, '2022-10-03 23:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `Project` varchar(255) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Faculty` varchar(100) NOT NULL,
  `Authur` varchar(100) NOT NULL,
  `Preview` text NOT NULL,
  `Pdf` varchar(255) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Price` int(255) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `Project`, `Course`, `Faculty`, `Authur`, `Preview`, `Pdf`, `Photo`, `Status`, `Price`, `DateReg`) VALUES
(15, 'CAUSES AND EFFECTS OF ALCOHOLISM AMOUNG STUDENTS', 'Education', 'Human Management', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '385315copy of imm_nda_doc2022_gospel (signed).pdf', '531810book.jpg', 1, 1200, '2022-11-15 00:58:21'),
(16, '	EFFECTS OF SOCIOECONOMIC STATUS ON THE ENROLLMENT OF PUPILS INTO SCIENCE CLASSES IN JOS NORTH', 'Human Mangement and Development', 'Artiology', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '166444copy of imm_nda_doc2022_gospel.pdf', '658658book1.jpeg', 1, 2000, '2022-11-15 00:58:21'),
(17, '	A SURVEY OF THE DETERMINANTS OF CAREER CHOICE AMONG SECONDARY SCHOOL STUDENTS', 'Estate Management', 'Artiology', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '526912gospel\'s cv.pdf', '717707book2.png', 1, 0, '2022-11-15 00:58:21'),
(18, '	THE APPLICATION OF ICT TO THE TEACHING AND LEARNING OF ECONOMICS IN SECONDARY SCHOOLS WITHIN JOS NORTH', 'Chemistry Education', 'Artiology', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '93794gospel\'s cv.pdf', '895577book3.jpg', 1, 0, '2022-11-15 00:58:21'),
(19, 'ENVIRONMENTAL INFLUENCES AND SOCIAL STUDIES ACADEMIC PERFORMANCE OF JUNIOR SECONDARY STUDENTS', 'Environmental Education', 'Artiology', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '61390gospel\'s cv.pdf', '785887book5.jpg', 1, 0, '2022-11-15 00:58:21'),
(20, '	AN EVALUATION OF PRINCIPALS\' ADMINISTRATIVE EFFECTIVENESS IN NIGERIAN SCHOOLS', 'Administrative Management', 'Education', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '747284gospel\'s cv.pdf', '831297book6.jpeg', 1, 0, '2022-11-15 00:58:21'),
(21, '	 THE IMPACT OF LECTURER-STUDENT RELATIONSHIP ON STUDENT ACADEMIC PERFORMANCE', 'Estate Management', 'Education', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '904867gospel\'s cv.pdf', '566619book7.jpg', 1, 0, '2022-11-15 00:58:21'),
(22, '	AN INVESTIGATION INTO THE CAUSES OF HANDICAPS IN OUR PRIMARY SCHOOL IN NDOKWA WEST LOCAL GOVERNMENT AREA OF DELTA STATE', 'Exemptive Investment', 'Education', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '214373gospel\'s cv.pdf', '102063book8.jpg', 1, 0, '2022-11-15 00:58:21'),
(23, 'DEMOGRAPHIC FACTORS INFLUENCING THE INFORMATION SEEKING BEHAVIOUR OF TEACHERS IN UNIVERSITY DEMONSTRATION SECONDARY SCHOOL IN DELTA AND RIVERS STATES', 'Geography Education', 'Education', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '878686gospel\'s cv.pdf', '406448book9.jpg', 1, 0, '2022-11-15 00:58:21'),
(24, '	KNOWLEDGE AND PRACTICE OF CONTRACEPTIVES AMONG FEMALE STUDENTS IN DELTA STATE UNIVERSITY, ABRAKA', 'Health Education', 'Artiology', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '346396gospel\'s cv.pdf', '439473book10.jpg', 1, 0, '2022-11-15 00:58:21'),
(25, 'ANALYSIS OF THE THEME OF TRADITION AND FATE IN ACHEBE’S THINGS FALL APART', 'Literature', 'Art', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '230724gospel\'s cv.pdf', '508318book11.jpg', 1, 0, '2022-11-15 00:58:21'),
(26, 'ROLE OF INTERPRETATION: THE CHARACTER OF OBIGAELI IN OTAELO IN AHMED YERIMA', 'Thiology and Literal studies', 'Art', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '127695gospel\'s cv.pdf', '801073book12.jpg', 1, 0, '2022-11-15 00:58:21'),
(27, 'SEXUAL ABUSE AND THE GIRL CHILD: THE STUDY OF “FACELESS” BY AMMA DARKO', 'Cultural Etiqquets', 'Art', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '867801gospel\'s cv.pdf', '937375book14.png', 1, 0, '2022-11-15 00:58:21'),
(28, 'POETRY AS AN EXPRESSION OF ANGER', 'Poetry', 'Art', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '70079gospel\'s cv.pdf', '296171book15.png', 1, 0, '2022-11-15 00:58:21'),
(29, 'A DEPICTION OF THE NIGERIAN CIVIL WAR IN CHIMAMANDA NGOZI ADICHIE’S HALF OF A YELLOW SUN', 'Cultural Endesities', 'Artiology', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '556042gospel\'s cv.pdf', '5165book16.png', 1, 0, '2022-11-15 00:58:21'),
(30, 'LANGUAGE AND THE QUEST FOR IDENTITY: A STUDY OF CHINUA ACHEBE’S THINGS FALL APART AND CHIMAMANDA ADICHIE’S AMERICANAH', 'Linguistics', 'Art', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '77385gospel\'s cv.pdf', '298742book6.jpeg', 1, 0, '2022-11-15 00:58:21'),
(31, '	EFFECTIVENESS OF HUMAN RELATIONS IN THE BANKING INDUSTRY', 'Accounting', 'Management Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '171941gospel\'s cv.pdf', '170719book17.png', 1, 0, '2022-11-15 00:58:21'),
(32, '	AN EVALUATION OF THE IMPACT OF WAGES AND SALARIES POLICIES ON THE PERFORMANCE OF WORKERS', 'Accounting Ecology', 'Management Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '678264gospel\'s cv.pdf', '718935book18.jpg', 1, 0, '2022-11-15 00:58:21'),
(33, '	AN APPRAISAL OF THE RELEVANCE OF FINANCIAL INCENTIVES TO WORKERS MOTIVATION', 'Financial Managment', 'Management Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '988938gospel\'s cv.pdf', '465625book20.jpg', 1, 0, '2022-11-15 00:58:21'),
(34, '	MANAGEMENT OF BAD DEBTS IN MICRO FINANCE BANKS', 'Financial Accounting', 'Management Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '650858gospel\'s cv.pdf', '899557book21.jpg', 1, 0, '2022-11-15 00:58:21'),
(35, '	 MARKETING RESEARCH AND ITS IMPORTANCE IN THE NIGERIAN BANKING INDUSTRY', 'Financial Managment', 'Management Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '532215gospel\'s cv.pdf', '497492book17.png', 1, 0, '2022-11-15 00:58:21'),
(36, 'CONSTRUCTION OF A STEPDOWN TRANSFORMER WITH MULTI OUTPUTS', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '849760gospel\'s cv.pdf', '482493eng2.jpg', 1, 0, '2022-11-15 00:58:21'),
(37, 'CONSTRUCTION OF ELECTRONIC DISPLAY BOARD', 'Civil', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '334803intellimedmedia (imm) internship program.pdf', '170654eng3.jpg', 1, 5000, '2022-11-15 00:58:21'),
(38, 'DESIGN AND DEVELOPMENT OF POWER OPERATED BANANNA SLICER FOR SMALL SCALE FOOD PROCESSING INDUSTRY', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '679786gospel\'s cv.pdf', '572587eng5.jpg', 1, 0, '2022-11-15 00:58:21'),
(39, 'DESIGN AND CONSTRUCTION OF 650WTS POWER INVERTER', 'Mechanical', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '615744gospel\'s cv.pdf', '683196eng6.jpg', 1, 0, '2022-11-15 00:58:21'),
(40, 'CONSTRUCTION OF AUTOMATIC WATER LEVEL CONTROLLER FOR BOTH OVERHEAD AND UNDERGROUND TANKS', 'Chemical', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '639121gospel\'s cv.pdf', '757829eng5.jpg', 0, 0, '2022-11-15 00:58:21'),
(41, 'THE DESIGN, CONSTRUCTION AND TEST ON A TWO STATION SIMPLE INTERCOM SYSTEM', 'Civil ', 'Engineering', 'Elite', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '276450preparation-of-natural-hydroxyapatite-from-bovine-femur-bones-using-calcination-at-various-temperatures.pdf', '474281bgbook4.jpg', 1, 8000, '2022-11-15 00:58:21'),
(42, 'DESIGN AND CONTRUCTION OF AUTOMATIC PHASE SELECTOR', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '606682gospel\'s cv.pdf', '161957eng7.jpg', 1, 0, '2022-11-15 00:58:21'),
(43, 'HOME CONTROL SWITCH AUTOMATION USING GSM COMMUNICATION', 'Chemistry', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '7559gospel\'s cv.pdf', '192139phy1.jpg', 1, 2000, '2022-11-15 00:58:21'),
(44, 'PATIENT HEARTBEAT AND TEMPERATURE MONITOR', 'Chemistry Analytics', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '912464gospel\'s cv.pdf', '985507phy2.jpg', 1, 7000, '2022-11-15 00:58:21'),
(45, 'IMPROVING THE CAPACITY OF A RENEWABLE POWER SYSTEM, USING SOLAR POWER PANEL', 'Industrial Chemistry', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '520120gospel\'s cv.pdf', '985469phy3.jpg', 1, 1000, '2022-11-15 00:58:21'),
(46, 'THE DESIGN, MANUFACTURE, CONSTRUCTION AND TEST ON A TWO STATION SIMPLE INTERCOM SYSTEM', 'Applied Chemistry', 'Art', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '821236gospel\'s cv.pdf', '420090phy4.jpg', 1, 0, '2022-11-15 00:58:21'),
(47, 'THE PROCESS OF CANDLE PRODUCTION FROM THE COMPOSITION OF CANDLE', 'Physics', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '562128gospel\'s cv.pdf', '346463phy5.png', 1, 0, '2022-11-15 00:58:21'),
(48, 'NUTRITIONAL PHYTOCHEMICAL AND MICROBIAL CONTENT OF BOMBAX COSTATUM LEAVES', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '40583gospel\'s cv.pdf', '889060phy6.jpg', 1, 0, '2022-11-15 00:58:21'),
(49, 'DESIGN AND IMPLEMENTATION OF A COMPUTERIZED BILL OF MATERIAL PROCESSING PROJECT', 'Chemical', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '159841gospel\'s cv.pdf', '916607phy7.jpg', 0, 0, '2022-11-15 00:58:21'),
(50, 'DESIGN AND IMPLEMENTATION OF A COMPUTERIZED CAREER GUIDANCE INFORMATION SYSTEM', 'Chemical', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '12837gospel\'s cv.pdf', '66318phy8.jpg', 0, 0, '2022-11-15 00:58:21'),
(51, 'DESIGN AND IMPLEMENTATION OF A COMPUTERISED INFORMATION SYSTEM FOR A MULTI SERVICE RENTAL COMPANY', 'Mechanical', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '347279gospel\'s cv.pdf', '952361phy9.jpg', 1, 0, '2022-11-15 00:58:21'),
(52, 'DESIGN AND IMPLEMENTATION OF A COMPUTERIZED TRAFFIC OFFENCE SYSTEM', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '609015gospel\'s cv.pdf', '886863phy10.jpg', 1, 0, '2022-11-15 00:58:21'),
(53, 'DESIGN AND IMPLEMENTATION OF AN ONLINE VEHICLE AND PLATE NUMBER REGISTRATION AND IDENTIFICATION SYSTEM IN NIGERIA', 'Civil', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '361997intellimedmedia (imm) internship program.pdf', '765314phy11.jpg', 1, 9000, '2022-11-15 00:58:21'),
(54, 'THE PRESENCE OF HEPATITIS B ENVELOPE ANTIBODY IN PATIENTS WHO HAVE BEEN PREVIOUSLY SCREENED FOR THE SURFACE ANTIGEN', 'Applied Physics', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '619423gospel\'s cv.pdf', '867807phy12.jpg', 1, 0, '2022-11-15 00:58:21'),
(55, 'INHIBITORY EFFECTS OF EXTRACT OF BLACK PEAR, SOUR SOP, MONKEY SEED DURING LIPID OXIDATION', 'Industrial Physics', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '354182gospel\'s cv.pdf', '545127phy13.png', 1, 0, '2022-11-15 00:58:21'),
(56, 'NUTRITIONAL BIOCHEMICAL PHYTOCHEMICAL AND MICROBIAL CONTENT OF BOMBAX COSTATUM LEAVES', 'Industrial Digitilaztion', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '765828gospel\'s cv.pdf', '233683phy14.jpg', 1, 0, '2022-11-15 00:58:21'),
(57, 'Coal gas in Nigeria', 'Chemical', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '356313gospel\'s cv.pdf', '77738phy6.jpg', 0, 0, '2022-11-15 00:58:21'),
(58, 'DESIGN AND IMPLEMENTATION OF HOSTEL ALOCATION STUDENTS INFORMATION MANAGEMENT SYSTEM', 'Computer science', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '692895gospel\'s cv.pdf', '41921phy10.jpg', 1, 0, '2022-11-15 00:58:21'),
(59, 'COMPUTERIZED TRANSCRIPT MANAGEMENT SYSTEM', 'Data science', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '539885gospel\'s cv.pdf', '634033comp1.png', 1, 0, '2022-11-15 00:58:21'),
(60, 'DESIGN AND IMPLEMENTATION OF A COMPUTER BASED CENSUS MANAGEMENT SYSTEM', 'Data technology', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '446080gospel\'s cv.pdf', '368228comp2.jpg', 1, 0, '2022-11-15 00:58:21'),
(61, 'DESIGN AND IMPLEMENTATION OF A COMPUTERIZED GUEST INFORMATION TRACKING SYSTEM', 'Data science', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '582446gospel\'s cv.pdf', '469010comp3.jpg', 1, 0, '2022-11-15 00:58:21'),
(62, 'DESIGN AND IMPLEMENTATION OF AN AUTOMATED INVENTORY MANAGEMENT SYSTEM FOR A MANUFACTURING COMPANY', 'Applied technology', 'Physical Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '476451gospel\'s cv.pdf', '770204comp4.jpg', 1, 0, '2022-11-15 00:58:21'),
(63, '	 INTRAOCULAR PRESSURE MARKERS IN MALARIAL INFECTED MICE RECEIVING PHYLLANTHUS AMARUS TREATMENT', 'Plant Biology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '716791gospel\'s cv.pdf', '853489comp5.jpg', 1, 0, '2022-11-15 00:58:21');
INSERT INTO `courses` (`id`, `Project`, `Course`, `Faculty`, `Authur`, `Preview`, `Pdf`, `Photo`, `Status`, `Price`, `DateReg`) VALUES
(64, '	THE EFFECT OF CISSAMPELOS MUCRONATA ON SODIUM/POTASSIUM ATPase In THE KIDNEY AND SERUM OF WISTAR RAT', 'Chilogy', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '486790gospel\'s cv.pdf', '841712plant1.jpg', 1, 0, '2022-11-15 00:58:21'),
(65, '	 THE EFFECT OF LONG TERM ADMINISTRATION OF ARTEMETHER LUMENFANTRINE ON SEMEN QUALITY AND HISTOLOGY OF THE TESTIS IN ALBINO MICE', 'Plant Biology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '856057gospel\'s cv.pdf', '26182plant2.jpg', 1, 0, '2022-11-15 00:58:21'),
(66, '	 AN ANALYSIS ON THE EFFECT OF Hippocratea africana ROOT BACK EXTRACT ON ESTRADIOL CONCENTRATION IN FEMALE ALBINO WISTAR RATS', 'Biology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '160655gospel\'s cv.pdf', '842432plant3.jpg', 1, 0, '2022-11-15 00:58:21'),
(67, '	 STUDY OF LIPID PROFILE IN STREPTOZOTOCIN (STZ) – INDUCED DIABETIC RATS UNDER NICOTINAMIDE COVERAGE TREATED WITH OCIMUM GRATISSIMUM (O.G.) AND VERNONIA AMYGDALINA (V.A.)', 'Chiology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '468703gospel\'s cv.pdf', '469056plant4.jpg', 1, 0, '2022-11-15 00:58:21'),
(68, '	THE EFFECTS OF CANNABIS SATIVA CONSUMPTION ON THE TESTOSTERONE LEVELS OF A MALE WISTAR RATS', 'Chiology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '290501gospel\'s cv.pdf', '331146plant5.jpg', 1, 0, '2022-11-15 00:58:21'),
(69, '	 THE HISTOLOGY OF THE HEART USING ANIMAL MODELS (ADULT WISTAR RATS)', 'Plant Biology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '878078gospel\'s cv.pdf', '53419plant6.jpg', 1, 0, '2022-11-15 00:58:21'),
(70, 'AMMELIORATIVE PROPERTIES OF METHANOL LEAF EXTRACT OF MUCUNA PRURIENS ON THE KIDNEY MARKERS OF MALARIA INFECTED MICE', 'Plant Toxicology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '129503gospel\'s cv.pdf', '496788bio1.jpg', 1, 0, '2022-11-15 00:58:21'),
(71, '	 PERFORMANCE CHARACTERISTIC AND CARCASS QUALITY OF RABBIT FED WITH VARYING CAMEROON-PEPPER BASED DIETS', 'Plant Toxicology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '387777gospel\'s cv.pdf', '405553bio2.jpg', 1, 0, '2022-11-15 00:58:21'),
(72, '	 RELATIVE EFFECTS OF JIGSAW AND INDIVIDUALISED LEARNING STRATEGIES IN TEACHING THE CONCEPT OF VARIATION IN POPULATION AND BIOLOGY STUDENTS’ ACADEMIC PERFORMANCE IN ABAK LOCAL GOVERNMENT AREA.', 'Plant Toxicology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '156712gospel\'s cv.pdf', '248888bio3.jpg', 1, 0, '2022-11-15 00:58:21'),
(73, '	TEACHING FRUITS IN SENIOR SECONDARY SCHOOLS USING REALIA AND CHARTS AND STUDENTS ACADEMIC ACHIEVEMENT IN BIOLOGY IN UYO LOCAL GOVERNMENT AREA', 'Chiology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '573750gospel\'s cv.pdf', '757907bio4.jpg', 1, 0, '2022-11-15 00:58:21'),
(74, '	 THE EFFECT OF DIFFERENT BRANDS OF COMMERCIAL INSECTICIDES ON PLANTS REGENEATION AND GROWTH IN THE BOTANICAL GARDEN', 'Plant Biology', 'Life Science', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '755373gospel\'s cv.pdf', '492874bio5.jpg', 1, 0, '2022-11-15 00:58:21'),
(75, '	 THE EFFECTS OF GARLIC EXTRACT AND ASCORBIC ACID ADMINISTRATION ON MERCURY CHLORIDE-INDUCED CHANGES ON THE HISTOLOGY OF THE KIDNEY OF WISTAR RATS', 'Chiology', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '687242gospel\'s cv.pdf', '734469bio6.jpg', 1, 0, '2022-11-15 00:58:21'),
(76, '	 DOMESTIC WASTE GENERATION AND MANAGEMENT IN UYO METROPOLIS', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>But I must explain to you how all this mistaken idea of reprobating pleasure and extolling pain arose. To do so, I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who&nbsp;loves or pursues or desires to obtain pain of itself, because it is pain, but&nbsp;occasionally&nbsp;circumstances occur in which toil and pain can procure him some great&nbsp;pleasure.</p>\r\n', '333051gospel\'s cv.pdf', '895376bio7.jpg', 1, 0, '2022-11-15 00:58:21'),
(77, 'Coal dense oil in Nigeria', 'Electrical ', 'Engineering', '<br />\r\n<b>Notice</b>:  Undefined variable: name in <b>C:\\xampp\\htdocs\\upist\\admin\\edit_post.php</b>', '<p>okay</p>\r\n', '338324gospel\'s cv.pdf', '664126plant4.jpg', 1, 0, '2022-11-15 00:58:21'),
(78, 'This is a test ', 'Biotology', 'Biense', 'Elite', '<p>loaoscjqsjncqioncionqoecnioqnecionqioencioqn</p>\r\n', '305502copy of imm_nda_doc2022_gospel-signed.pdf', '738693broker5.png', 0, 0, '2022-11-15 00:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Feedback`, `Name`) VALUES
(3, 'Koursemate\'s project happens to be top top projects, with the best delivery of researches', 'Gospel'),
(4, 'Koursemate\'s project happens to be top top projects, with the best delivery of researches', 'Gospel'),
(5, 'Koursemate\'s project happens to be top top projects, with the best delivery of researches', 'Gospel'),
(6, 'Koursemate\'s project happens to be top top projects, with the best delivery of researches', 'Gospel'),
(7, 'Koursemate\'s project happens to be top top projects, with the best delivery of researches', 'Gospel');

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE `learn` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Descrip` text NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Publish` varchar(255) NOT NULL,
  `Authur` varchar(100) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`id`, `Title`, `Descrip`, `Picture`, `Publish`, `Authur`, `DateReg`) VALUES
(3, 'okayy', '<p>yes yes</p>\r\n', '778202ads3.jpg', 'yes', 'Elite', '2022-10-04 17:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `patners`
--

CREATE TABLE `patners` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL,
  `State` varchar(255) NOT NULL,
  `EduLevel` varchar(255) NOT NULL,
  `Bio` text NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patners`
--

INSERT INTO `patners` (`id`, `Name`, `Email`, `Phone`, `State`, `EduLevel`, `Bio`, `Status`, `Feedback`, `Timestamp`) VALUES
(1, 'Dexteeny', 'sirelite11@gmail.com', 2147483647, 'Edo state', 'bsc', 'I am a baller', 1, 'sharp', '2022-10-18 12:44:16'),
(2, 'Gospel Jonathan', 'gospyjo@gmail.com', 2147483647, 'Edo state', 'bsc', 'okay', 0, '', '2022-10-20 22:26:45'),
(3, 'Gospel Jonathan', 'sirelite111@gmail.com', 2147483647, 'Edo state', 'msc', 'Hey, i am a scholar that\'s enough.', 1, 'Okay thats a go', '2022-10-26 20:34:24'),
(4, 'Gospel Jonathan', 'eseelite11@gmail.com', 2147483647, 'Edo state', 'bsc', 'This is a test', -1, 'okay', '2022-11-20 12:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Topic_id` int(11) DEFAULT NULL,
  `Authur` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Descrip` text NOT NULL,
  `Publish` varchar(255) NOT NULL,
  `MainPost` int(11) NOT NULL,
  `DateReg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Topic_id`, `Authur`, `Title`, `Picture`, `Descrip`, `Publish`, `MainPost`, `DateReg`) VALUES
(90, 50, 'Gospel Jonathan', 'Bitcoin Miner Rhodium Going Public Through Reverse Merger With SilverSun Technologies', '830336pexels-alesia-kozik-6770611.jpg', '<p>Rhodium Enterprises has agreed to merge with publicly traded tech firm SilverSun Technologies (SSNT), which will bring the mining company to U.S. public markets.</p>\r\n\r\n<p>It&#39;s no secret that miners have been struggling in recent markets thanks to the big plunge in bitcoin (BTC) prices. The bear market has also nearly closed the door on capital markets. Last week, Compute North, one of the largest mining hosting firms,&nbsp;<a href=\"https://www.coindesk.com/business/2022/09/22/crypto-mining-data-center-provider-compute-north-files-for-bankruptcy-protection/\" target=\"_blank\">filed for bankruptcy</a>. Rhodium in January announced plans for an initial public offering in the $1.5 billion to $1.7 billion valuation range,&nbsp;<a href=\"https://www.coindesk.com/business/2022/01/13/bitcoin-miner-rhodiums-planned-ipo-values-it-at-up-to-796m/\" target=\"_blank\">but postponed those intentions</a>&nbsp;just one week later.</p>\r\n\r\n<p>Under the terms of the merger agreement, SilverSun shareholders will receive a cash dividend of no less than $1.50 a share &ndash; roughly $8.5 million in total &ndash; and one share of stock in a newly created subsidiary housing SilverSun&#39;s legacy businesses, according to a&nbsp;<a href=\"https://www.accesswire.com/718092/Rhodium-Enterprises-Inc-A-Bitcoin-Mining-Company-Utilizing-Liquid-Cooling-Technology-Plans-to-List-on-NASDAQ-via-Merger-with-SilverSun-Technologies-Inc\" target=\"_blank\">company press release</a>.</p>\r\n', 'yes', 0, '2022-10-04 11:54:55'),
(92, 53, 'Gospel Jonathan', ' Who What Wearables: A Guide to Digital Fashion and the Metaverse', '414697pexels-karolina-grabowska-7876499.jpg', '<p>New York Fashion Week is often described as a sensory experience. Attending shows, you&rsquo;ll hear the thud of bass-heavy music as models in well-tailored ensembles parade across the runway, the air thick with the scents of new money and luxury fragrance. If you&rsquo;re well-connected, you&rsquo;ll be able to interact with designers and try on garments, touching luxe denims, velvets, cottons and silks remixed into every hue and combination.</p>\r\n\r\n<p>While established names often dominate NYFW and set the season&rsquo;s trends, this year&rsquo;s event embraced new players who showcased not only physical designs, but also digital expressions of creativity played out across mediums.</p>\r\n\r\n<p>At NYFW&rsquo;s&nbsp;<a href=\"https://nolchashows.com/\">Nolcha Shows</a>, blockchain gaming ecosystem&nbsp;<a href=\"https://chainguardians.io/\">Chain Guardians</a>&nbsp;took up space next to traditional designers, displaying their &ldquo;phygital&rdquo; (physical and digital) take on classic designs. In their collection, a colorful, anime-style bodysuit included an NFC chip that, when scanned, linked to a non-fungible token (<a href=\"https://www.coindesk.com/learn/what-are-nfts-and-how-do-they-work/\">NFT</a>) that is wearable in the Chain Guardians metaverse.</p>\r\n', 'yes', 1, '2022-10-03 12:31:09'),
(93, 52, 'Gospel Jonathan', 'Cashing in on Crypto', '878635pexels-jimmy-chan-1235971.jpg', '<p>Today in our December round-up of the world of cryptosecurity with conflicting views of the significance of cryptocurrencies to the traditional financial markets.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.forcepoint.com/sites/default/files/styles/300x180_sc/public/crypto_cool_heads_hero.jpg?itok=D3AWTafP\" style=\"height:180px; width:300px\" /></p>\r\n\r\n<h3><a id=\"anchor--01\" name=\"anchor--01\"></a></h3>\r\n\r\n<p>This month saw the&nbsp;<a href=\"https://www.fsb.org/\" rel=\"nofollow\">Financial Stability Board</a>&nbsp;still insisting that the&nbsp;<a href=\"https://www.coindesk.com/policy/2021/10/13/global-finance-watchdog-says-133b-stablecoin-sector-remains-niche/\" rel=\"nofollow\">$133 billion stable coin market</a>&nbsp;only constitutes a niche segment of the global financial market. Stable coins are cryptocurrencies that attempt to peg their price on a 1:1 ratio, to a fiat currency such as the US dollar. The Financial Stability Board is a consortium advisory body that acts on behalf of the G20, providing recommendations regarding the financial system. Its view of this &ldquo;niche&rdquo; market segment suggests crypto still has a way to go before it becomes truly mainstream, but there are definite signs that the tide is turning.</p>\r\n\r\n<p>If proof were needed, regulators in both the UK and USA have just published guidance on cryptocurrencies for banks and financial institutions. The Sunday Times reported that the Bank of England is&nbsp;<a href=\"https://www.thetimes.co.uk/article/bank-of-england-looks-to-tighten-crypto-rules-as-bitcoin-booms-w6fzbt89x\" rel=\"nofollow\">looking to tighten regulation</a>&nbsp;on cryptocurrency investment for institutions over 2022. The report found that currently cryptocurrency holdings by banks and other institutions do not pose a great threat to traditional markets, but that their current pace of growth may do so in the future. This regulation will be likely good news for the industry as it will help provide the trust to banks that they are operating within the confines of the Financial Conduct Authority (FCA) when offering trading and custodial solutions.</p>\r\n\r\n<p>Across the Atlantic, the US&nbsp;<a href=\"https://www.fdic.gov/\" rel=\"nofollow\">Federal Deposit Insurance Corporation</a>&nbsp;(FDIC), and&nbsp;<a href=\"https://www.occ.treas.gov/index.html\" rel=\"nofollow\">Office of the Comptroller of the Currency</a>&nbsp;(OCC)&nbsp;<a href=\"https://www.occ.gov/news-issuances/news-releases/2021/nr-ia-2021-120a.pdf\" rel=\"nofollow\">released a joint statement</a>&nbsp;detailing how they will be clarifying the rules and regulations on how to safely use and offer cryptocurrency services to banks and other traditional financial institutions over the next year. The rules will be designed to give clarity to banks and institutions of what is within the law, what should be regulated activity and what is strictly off limits.</p>\r\n\r\n<p>Set against the backdrop of increasing regulation, the cyberattacks continue.&nbsp;<a href=\"https://www.bitmart.com/\" rel=\"nofollow\">BitMart</a>&nbsp;became the latest in a long line of exchanges that have been compromised. A successful attack and resulting hot wallet (private key) compromise resulted in&nbsp;<a href=\"https://www.coindesk.com/tech/2021/12/06/bitmart-ceo-says-stolen-private-key-behind-196m-hack/\" rel=\"nofollow\">$196 million being lost</a>&nbsp;from the platform. This kind of attack, where an attacker was able to exfiltrate the private key and use it to send the funds to another wallet is a very common example of exchange compromise.Check out&nbsp;<a href=\"https://www.forcepoint.com/blog/x-labs/crypto-currency-security-primer\">my first cryptocurrency post</a>&nbsp;for more&nbsp; on how to deal with this kind of threat,:&nbsp;</p>\r\n\r\n<p>In a further successful attack,&nbsp;<a href=\"https://app.badger.com/\" rel=\"nofollow\">BadgerDAO&nbsp;</a>(a decentralised payment platform) provided details of how it was compromised,&nbsp;<a href=\"https://badger.com/technical-post-mortem\" rel=\"nofollow\">losing $120m</a>. The route to compromise started with compromising the management portal of Cloudflare, BadgerDAOs content delivery network. Once Cloudflare was compromised, the attackers were then able to inject a malicious script into the UI of the Badger web app itself. This replaced the genuine wallet destination address with that of the attackers. The final stage of the attack consisted of prompting the users to allow the foreign address approval. BadgerDAO&rsquo;s transparency on how the attack was orchestrated and eventually mitigated is something that is not often seen in the world of cybersecurity, and is hopefully a model that more organisations can move to, as everybody can benefit from the lessons learned.</p>\r\n\r\n<p>The key takeaway from all this: the wider societal&nbsp;implications of institutional investment in cryptocurrencies warrant far more deliberate cybersecurity approaches. Without that, there is real risk to existing financial systems.</p>\r\n', 'yes', 1, '2022-10-03 12:31:12'),
(95, 50, 'Elite', 'Bank of Russia Adds Digital Assets to Banking Chart of Accounts', '278096pexels-bram-van-oosterhout-6478886.jpg', '<p><strong>Central Bank of Russia has introduced digital assets, including the digital version of the Russian ruble, to the recently published draft of the new banking chart of accounts. In the future, financial institutions will be able to provide data about operations with these assets.</strong></p>\r\n\r\n<h2>Russian Banks to Record Digital Currencies as Assets in Their Accounting Books</h2>\r\n\r\n<p>The Central Bank of the Russian Federation (CBR) has released the&nbsp;<a href=\"https://cbr.ru/Queries/XsltBlock/File/90538/4821\" target=\"_blank\">draft</a>&nbsp;of the updated banking chart of accounts for next year. Starting from 2023, Russian lenders will be required to account for new types of transactions, including digital ruble flows and operations with digital financial assets (DFAs).</p>\r\n\r\n<p>The monetary authority has been expanding the testing of its new central bank digital currency (<a href=\"https://www.investopedia.com/terms/c/central-bank-digital-currency-cbdc.asp\" rel=\"noopener\" target=\"_blank\">CBDC</a>) this year and hopes to pilot real-value settlements in early 2023. Authorities in Moscow are also working to more comprehensively regulate decentralized digital currencies.</p>\r\n\r\n<p>The current DFA law refers mostly to coins and tokens with an issuer but a new bill &ldquo;On Digital Currency&rdquo; aims to more fully cover cryptocurrencies like bitcoin. Amid sanctions imposed over an escalating war in Ukraine, Russia hopes to use both the digital ruble and crypto assets for international&nbsp;<a href=\"https://news.bitcoin.com/russian-businesses-to-choose-which-crypto-to-use-for-cross-border-settlements-lawmaker-says/\" target=\"_self\">settlements</a></p>\r\n\r\n<p>Only one account has been reserved for the digital ruble while banks will have several accounts to reflect their DFAs in the sections &ldquo;Acquired Digital Financial Assets&rdquo; and &ldquo;Issued Digital Assets,&rdquo; the crypto page of the Russian business news portal RBC detailed.</p>\r\n\r\n<p>Regulators explain the need for just one digital ruble account by pointing out that commercial banks will process only transfers of CBDC funds. The digital ruble will be issued by the Bank of Russia and stored in wallets at the CBR while credit institutions will act as intermediaries providing services to individuals and organizations such as executing transfers.</p>\r\n\r\n<p>Russia&rsquo;s central bank is actively pursuing its digital currency project with over a dozen banks now taking part in the trials of the CBDC platform. The regulator has been&nbsp;<a href=\"https://news.bitcoin.com/bank-of-russia-to-promote-digital-ruble-in-foreign-trade-as-finance-ministry-pushes-for-crypto-option/\" target=\"_self\">promoting</a>&nbsp;its implementation in foreign trade while other institutions, most notably the finance ministry, want to also facilitate the employment of cryptocurrencies as a tool to circumvent Western financial restrictions.</p>\r\n', 'yes', 0, '2022-10-03 12:22:07'),
(96, 57, 'Elite', 'Spanish Telecom Giant Telefonica Invests in Bit2Me, Pilots Cryptocurrency Payments', '216104pexels-alesia-kozik-6771740.jpg', '<p><strong>Telefonica, one of the world&rsquo;s largest telecom companies, has closed an investment in the Spanish cryptocurrency exchange Bit2me. The company, which has been very active in the metaverse space, is entering the crypto payments arena by running a pilot to allow its customers to make payments via its online store Tu.com with an upper limit of $490.</strong></p>\r\n\r\n<h2>Telefonica Invests in Cryptocurrency Exchange Bit2me</h2>\r\n\r\n<p>Telefonica, the fourth-largest telecom company in Europe, has decided to tackle the cryptocurrency business. The company&nbsp;<a href=\"https://www.lainformacion.com/empresas/telefonica-lanza-junto-bit2me-cobro-criptos-tienda-tecnologia/2874296/\" rel=\"noopener\" target=\"_blank\">announced</a>&nbsp;an investment in Bit2me, a Spain-based cryptocurrency exchange, that will give it access to the implementation of the technology stack of the organization. The investment, whose details and numbers were not disclosed, is the first move of the company in the crypto area.</p>\r\n\r\n<p>Unnoficial sources disclosed that this participation could be between $20 and $30 million, giving Telefonica a very important stake in Bit2me. This fund injection would be giving the exchange support to keep operating during this cryptocurrency market downturn, in which other exchanges have been forced to lay off staff and take operating cost-cutting measures. Bit2me had just secured funds for $2.5 million from private investors prior to Telefonica&rsquo;s investment.</p>\r\n\r\n<h2>Cryptocurrency Pilot Program</h2>\r\n\r\n<p>One of the first actions that Telefonica is taking after this investment is the implementation of a pilot program that will allow customers to pay with crypto at Telefonica&rsquo;s online store, Tu.com. The company will accept cryptocurrency payments of up to $490 for tech hardware and phones as a way of measuring the interest of the general public in this payment alternative.</p>\r\n\r\n<p>The company will use Bit2me&rsquo;s tech as a way of receiving the cryptocurrency payments and exchanging them for euros, which will be kept by Telefonica; the company will not receive cryptocurrency in these transactions. However, this might change in the future. The digital unit director of Telefonica, Chema Alonso, declared that the company might accept crypto in the distant future.</p>\r\n\r\n<p>The pilot will be restricted to these payments in the online store, and no plans for a future expansion of this plan were revealed. The company had shown interest in the metaverse and NFT area before, making different investments in these fields. Recently, the company established an&nbsp;<a href=\"https://news.bitcoin.com/spanish-telecom-giant-telefonica-partners-with-qualcomm-to-develop-joint-metaverse-initiatives/\" rel=\"noopener\" target=\"_self\">alliance</a>&nbsp;with Qualcomm in order to use its extended reality technology to develop metaverse experiences for its customers. Telefonica has also put&nbsp;<a href=\"https://news.bitcoin.com/telefonica-to-invest-in-metaverse-through-gamium/\" rel=\"noopener\" target=\"_self\">funds</a>&nbsp;behind Gamium, a Spanish metaverse company.</p>\r\n', 'yes', 0, '2022-10-03 12:23:22'),
(97, 55, 'Elite', 'Frutti Dino’s FDT Token to Be Listed on Huobi Global and Gate․io', '449467unnamed-1280x720.jpg', '<p>Monoverse, a blockchain game developer, announced the simultaneous listing of FDT (Frutti Dino Token), the governance token of its blockchain game Frutti Dino, which will list on global crypto exchanges Huobi Global and Gate.io from October 5th.</p>\r\n\r\n<p>Huobi Global and Gate.io announced on September 30th that FDT would be listed, and trade would begin on October 5th. Frutti Dino&rsquo;s listing on the two exchanges represents an extremely significant step toward international recognition.</p>\r\n\r\n<p>Developed based on BEP-20, FDT (Frutti Dino Token) is the governance token of Frutti Dino, one of the most anticipated NFT Play-to-Earn games of 2023. A lot of effort is being put into preparing for the upcoming launch of Frutti Dino&rsquo;s main game following the successful completion of its private sales last year and the first and second pre-sales in early 2022.</p>\r\n\r\n<p>It is anticipated that Frutti Dino Stories &ndash; a social game in the growth simulation genre where users raise Dino characters &ndash; will be launched in the fourth quarter of this year. As for Frutti Dino, the main game is expected to launch in the first quarter of 2023. The company is anticipating that the official launching of both games will boost the value of their token.</p>\r\n\r\n<p>Frutti Dino Stories features &ldquo;MAP&rdquo; (Minting after Play), symbolising the paradigm shift in NFT games. Through MAP, players can acquire ownership of in-game characters they have raised through NFT minting and load them into the main game. As a result, the strategy is expected to attract gamers unfamiliar with P2E games to become naturally connected while introducing them to the blockchain and NFT minting services.</p>\r\n\r\n<p>Huobi Global, founded in 2013, is one of the world&rsquo;s leading digital asset exchanges with offices across the globe. In recent months, Huobi Global has obtained an Innovation License from Dubai International Financial Centre (DIFC), enabling it to offer a full range of cryptocurrency exchange products and services in Dubai. Since its founding in 2013, Gate.io has become one of the most renowned cryptocurrency trading platforms. According to Forbes Advisor, it is ranked among the Best Crypto Exchanges for 2021. Based on global liquidity and trading volume, both exchanges are ranked among the top 10 cryptocurrency exchanges by CoinMarketCap.</p>\r\n\r\n<p>Monoverse strongly believes that the initial listings of FDT on Huobi Global and Gate.io will be a substantial leap toward the international cryptocurrency scene for the company.</p>\r\n\r\n<p>Monoverse also mentioned discussing further with other major global exchanges after the initial Huobi Global and Gate.io listings. At the same time, the company is also planning to continue its efforts to secure more global partnerships and additional listings to expand its presence in the industry.</p>\r\n', 'yes', 0, '2022-10-03 12:25:10'),
(98, 55, 'Elite', 'Solana Network Suffers Another Outage — Cyber Capital Founder Says Downtime Is ‘Another Consequence of Bad Design', '543486ads3.jpg', '<p><strong>The proof-of-stake (PoS) blockchain network Solana suffered another outage on September 30 and the network restart did not take effect until six hours later on October 1. Solana has suffered a myriad of network outages during the last year, and the blockchain&rsquo;s latest downtime caused the network&rsquo;s native currency to slide 4% lower against the U.S. dollar in the last 24 hours.</strong></p>\r\n\r\n<h2>Solana&rsquo;s Blockchain Deals With More Downtime &mdash; Misconfigured Node Blamed for the Outage</h2>\r\n\r\n<p>Solana&rsquo;s network had an outage again after validators failed to process blocks due to a&nbsp;<a href=\"https://twitter.com/web3isgreat/status/1576035682904064000?s=20&amp;t=xMtIE9PsYw_SNGP6pCUMSw\" target=\"_blank\">misconfigured node</a>&nbsp;within the system. On September 30, 2022, the Twitter account Solana Status&nbsp;<a href=\"https://twitter.com/SolanaStatus/status/1576010340248084481?s=20\" target=\"_blank\">wrote</a>:</p>\r\n\r\n<blockquote>\r\n<p>The Solana network is experiencing an outage and not processing transactions. Developers across the ecosystem are working on diagnosing the issue and to restart the network. More information will be provided as it becomes available.</p>\r\n</blockquote>\r\n\r\n<p>Following the Solana Status update, a Solana proponent explained that the blockchain would be restarted. &ldquo;The Solana mainnet network will be restarted at slot 153139220, the last confirmed slot,&rdquo; the individual&nbsp;<a href=\"https://twitter.com/laine_sa_/status/1576006308179759104?s=20&amp;t=kC5psmQPyT9ZP8Tn3jctcw\" target=\"_blank\">said</a>. &ldquo;It appears a misconfigured node caused an unrecoverable partition in the network. Validators, please participate in finding consensus on the relevant data.&rdquo;</p>\r\n\r\n<p>Amid the outage, Solana Status shared instructions on how validators could participate in the restart. &ldquo;Mainnet Beta Validators: Please follow the cluster restart instructions,&rdquo; Solana Status&nbsp;<a href=\"https://twitter.com/SolanaStatus/status/1576023370834972673?s=20&amp;t=TDwQ3mKy2MNFbO11ZJsaPg\" target=\"_blank\">stressed</a>. Around 3 a.m. (ET) Solana Status detailed that the cluster restart has been deployed. &ldquo;Validator operators successfully completed a cluster restart of Mainnet Beta at 7 AM UTC,&rdquo; Solana Status&nbsp;<a href=\"https://twitter.com/SolanaStatus/status/1576105815081041921?s=20&amp;t=TDwQ3mKy2MNFbO11ZJsaPg\" target=\"_blank\">wrote</a>. The team added:</p>\r\n\r\n<blockquote>\r\n<p>Network operators [and] dapps will continue to restore client services over the next several hours.</p>\r\n</blockquote>\r\n\r\n<h2>Observers Ask: &lsquo;What Good Is a Nakamoto Coefficient of 30 if 1 Misconfigured Node Can Bring Everything to a Halt?&rsquo;</h2>\r\n\r\n<p>Solana took a lot of criticism from the crypto community when the outage happened, as the blockchain is nearing its tenth outage since Solana&rsquo;s inception. The founder of Cyber Capital, Justin Bons, gave the project flak over the most recent outage. &ldquo;[Solana] has gone down again,&rdquo; the Cyber Capital founder&nbsp;<a href=\"https://twitter.com/Justin_Bons/status/1576045694770589697?s=20&amp;t=kC5psmQPyT9ZP8Tn3jctcw\" target=\"_blank\">tweeted</a>. &ldquo;This is the 8th time [Solana] has gone down in the past year. Blockchains should never have [downtime], yet [Solana] goes down almost every month. This is another consequence of bad design,&rdquo; Bons added.</p>\r\n\r\n<p>Another person asked about the misconfigured node problem. &ldquo;Def not FUD&hellip;honest question&hellip;what good is a Nakamoto coefficient of 30 if 1 misconfigured node can bring everything to a halt?&rdquo; the individual&nbsp;<a href=\"https://twitter.com/alohacowboysol/status/1576007969166094337?s=20&amp;t=G1r1WSUrLXN4-SHSeTO9_A\" target=\"_blank\">asked</a>. Meanwhile, Solana supporters shrugged off the criticism and told people that the blockchain network will continue to improve as long as the engineers are persistent.</p>\r\n\r\n<p>&ldquo;Solana will be fine,&rdquo; one person&nbsp;<a href=\"https://twitter.com/Bernade28159735/status/1576107550629855232?s=20&amp;t=4hdpMmM721W9_35r3JAruw\" target=\"_blank\">remarked</a>&nbsp;on Twitter. &ldquo;As long as the [developers] continue to improve the [blockchain]. That is what&rsquo;s important. Still bullish on [Solana] for the long term.</p>\r\n', 'yes', 0, '2022-10-03 12:26:27'),
(99, 57, 'Elite', 'CFTC Chairman on US Crypto Regulation: We Have to Rely on 70-Year-Old Case Law to Determine What\'s a Security or Commodity', '106346cftc-chairman.jpg', '<p><strong>The chairman of the Commodity Futures Trading Commission (CFTC) says his agency and the Securities and Exchange Commission (SEC) &ldquo;have to rely on 70-year-old case law to determine what&rsquo;s a security or a commodity.&rdquo; He stressed that the SEC and CFTC are working together to regulate the crypto space, noting that &ldquo;It&rsquo;s not a turf war.&rdquo;</strong></p>\r\n\r\n<h2>CFTC Chairman on Crypto Regulation, Working With SEC</h2>\r\n\r\n<p>Commodity Futures Trading Commission (CFTC) Chairman Rostin Behnam talked about cryptocurrency regulation in an interview with CNBC last week.</p>\r\n\r\n<p>Responding to a question about whether the CFTC gets along with the Securities and Exchange Commission (SEC) and whether the two agencies share resources to regulate the crypto sector, he affirmed:</p>\r\n\r\n<blockquote>\r\n<p>We do get along. We can share, we have shared, and we will share.</p>\r\n</blockquote>\r\n\r\n<p>&ldquo;For the CFTC, the difficulty is we are a derivatives regulator. We don&rsquo;t oversee the cash markets. So, the authority that I&rsquo;ve been asking Congress for is cash authorities, so that we can go in the bitcoin cash market, the ether cash market, and the other digital commodity token [markets],&rdquo; the CFTC chief explained.</p>\r\n\r\n<p>Commenting on SEC Chairman Gary Gensler stating that the majority of crypto tokens out there are&nbsp;<a href=\"https://news.bitcoin.com/gary-gensler-asks-sec-staff-to-fine-tune-crypto-compliance-says-vast-majority-are-securities/\" target=\"_self\">securities</a>, Behnam stated: &ldquo;Well, we&rsquo;re gonna have to figure that out legislatively because it&rsquo;s a new asset class. There are different components and characteristics of this asset class as opposed to traditional asset classes.&rdquo; The CFTC boss described:</p>\r\n\r\n<blockquote>\r\n<p>We have to rely on 70-year-old case-law to determine what&rsquo;s a security, what&rsquo;s a commodity.</p>\r\n</blockquote>\r\n\r\n<p>&ldquo;We have one court case in New York that says bitcoin is a commodity &hellip; We&rsquo;re trying to find a reasonable outcome that will create certainty for the market,&rdquo; he concluded.</p>\r\n\r\n<p>Behnam also stressed that &ldquo;it&rsquo;s not a turf war&rdquo; between the two regulatory agencies.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://getverse.com/\" rel=\"noopener\" target=\"_blank\"><img src=\"https://static.news.bitcoin.com/wp-content/uploads/2022/03/2-verse-728x90-1.png\" /></a></p>\r\n\r\n<p>SEC Chairman Gensler also previously said that the two regulators are working together to regulate the crypto sector. While Gensler admitted that&nbsp;<a href=\"https://news.bitcoin.com/sec-chair-gensler-bitcoin-is-a-commodity/\" target=\"_self\">bitcoin is a commodity</a>, he said last month that &ldquo;Of the nearly 10,000 tokens in the crypto market, I believe the&nbsp;<a href=\"https://news.bitcoin.com/gary-gensler-asks-sec-staff-to-fine-tune-crypto-compliance-says-vast-majority-are-securities/\" target=\"_self\">vast majority are securities</a>.&rdquo;</p>\r\n\r\n<p>Last month, the SEC announced that it is setting up a&nbsp;<a href=\"https://news.bitcoin.com/us-sec-sets-up-dedicated-office-to-review-crypto-filings/\" target=\"_self\">dedicated office</a>&nbsp;to review crypto filings. Gensler also said that he has asked SEC staff to&nbsp;<a href=\"https://news.bitcoin.com/gary-gensler-asks-sec-staff-to-fine-tune-crypto-compliance-says-vast-majority-are-securities/\" target=\"_self\">fine-tune crypto compliance</a>.</p>\r\n', 'yes', 0, '2022-10-03 12:27:18'),
(101, 55, 'Elite', 'Japanese Gaming Giant Sega to Launch First Blockchain Game', '250883pexels-david-mcbee-730547.jpg', '<p><strong>Sega, one of the largest Japanese gaming companies, has announced that it will launch its first blockchain game in collaboration with Double Jump Tokyo, another Japanese development company. The game, which is based on Sega&rsquo;s Sangokushi Taisen franchise, will be built using Oasys, a Japanese scaling-focused project, to support its blockchain elements.</strong></p>\r\n\r\n<h2>Sega to Launch First Blockchain Gaming Project</h2>\r\n\r\n<p>Sega, one of the most influential Japan-based gaming companies, has&nbsp;<a href=\"https://www.videogameschronicle.com/news/sega-has-announced-its-first-blockchain-game/\" rel=\"noopener\" target=\"_blank\">announced</a>&nbsp;that it will build its first blockchain-based game. The project, which will be built by another gaming company, Double Jump Tokyo, will be based on the Sangokushi Taisen franchise, a popular arcade game in Japan.</p>\r\n\r\n<p>The Sangokushi Taisen franchise is comprised of a series of strategy games that allows its players to use of virtual cards in the virtual field. The structure of the game lends itself to the implementation of blockchain elements, like the tokenization of some of the assets of the game and the trading aspect of the cards. However, none of the companies have announced how these blockchain elements will be included as part of the game mechanics.</p>\r\n\r\n<p>No tentative release date for the game has been announced yet, but Sega has not announced the development of any similar project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://getverse.com/\" rel=\"noopener\" target=\"_blank\"><img src=\"https://static.news.bitcoin.com/wp-content/uploads/2022/03/2-verse-728x90-1.png\" /></a></p>\r\n\r\n<h2>Oasys Blockchain and Blockchain Gaming</h2>\r\n\r\n<p>Double Jump Tokyo also announced that the blockchain part of the game will use Oasys, a Japanese gaming project, as its vehicle. Oasys is a blockchain initiative that aims to be scalable enough to support a big number of concurrent players using its services. The company hopes to make its entrance into the AAA gaming circle with this and other planned releases.</p>\r\n\r\n<p>Oasys has the support of traditional entertainment powerhouses and crypto companies, such as Bandai Namco, Sega, Jump Crypto, and even Square Enix, which&nbsp;<a href=\"https://news.bitcoin.com/square-enix-exploring-blockchain-game-development-as-part-of-oasys-project-partnership/\" rel=\"noopener\" target=\"_self\">became</a>&nbsp;a validator of the chain and is currently exploring the launch of blockchain games using this tech.</p>\r\n\r\n<p>Sega&rsquo;s stance on non-fungible tokens (NFTs) and blockchain games has been ambiguous. In January, the company&nbsp;<a href=\"https://news.bitcoin.com/sega-might-drop-nft-experiments-if-perceived-by-gamers-as-money-grab/\" rel=\"noopener\" target=\"_self\">stated</a>&nbsp;it could abandon the implementation of these technologies in its games if these are considered a money grab by its customers. However, more recently, in April, Sega&nbsp;<a href=\"https://news.bitcoin.com/sega-hints-at-inclusion-of-nft-and-metaverse-elements-in-its-super-game-proposal/\" rel=\"noopener\" target=\"_self\">hinted</a>&nbsp;at the possibility of including NFTs and metaverse elements as part of its &ldquo;Super Game&rdquo; development strategy.</p>\r\n\r\n<p>Other AAA gaming companies like Ubisoft have been more clear, launching their own NFT markets and including NFT elements in games from leading franchises. Square Enix has also included blockchain as a key part of its business plan for the future.</p>\r\n', 'yes', 0, '2022-10-03 12:29:38'),
(102, 50, 'Elite', 'Forex Shortages Blamed After Nigerian Currency Hits New Low Versus the US Dollar', '4703pexels-karolina-grabowska-5980752.jpg', '<p><strong>A surge in the demand for foreign exchange and the general scarcity of the resource may be the reasons why the naira currency recently slumped to a new all-time low of 735 versus the U.S. dollar, a report has said. One Nigerian currency dealer</strong><strong>&nbsp;said he expects the naira to further depreciate to 750 per dollar in October.</strong></p>\r\n\r\n<h2>Foreign Exchange Scarcity</h2>\r\n\r\n<p>On September 29, the Nigerian currency lost further ground versus the greenback after the naira&rsquo;s parallel market exchange rate slumped to 735 units per dollar. The naira&rsquo;s latest plunge came just days after the Central Bank of Nigeria (CBN) announced a 150 basis points (bps) upward adjustment of the monetary policy rate (MPR).</p>\r\n\r\n<p>As&nbsp;<a href=\"https://news.bitcoin.com/nigerian-central-bank-hikes-key-interest-rate-just-days-after-naira-plunges-to-new-low/\" target=\"_self\">reported</a>&nbsp;by Bitcoin.com News just before the CBN&rsquo;s interest rate increase, one U.S. dollar bought 720 nairas on the foreign exchange parallel market. The Central Bank of Nigeria has in the past suggested that the naira&rsquo;s fall may be&nbsp;<a href=\"https://news.bitcoin.com/nigerian-currency-plunges-to-new-all-time-low-central-bank-blames-speculators/\" target=\"_self\">linked</a>&nbsp;to the activities of currency speculators.</p>\r\n\r\n<p>However, according to a&nbsp;<a href=\"https://businesspost.ng/economy/95-surge-in-fx-demand-crashes-naira-to-new-low-at-official-market/\" target=\"_blank\">report</a>&nbsp;in the Business Post, the naira&rsquo;s latest plunge is potentially tied to the scarcity of foreign exchange as well as the surge in the demand for this resource. As explained in the report, the over 95% increase in forex requests on the official market &mdash; from $119.49 million to $223.30 million &mdash; may have played a part in accelerating the naira&rsquo;s fall to a new all-time low.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://getverse.com/\" rel=\"noopener\" target=\"_blank\"><img src=\"https://static.news.bitcoin.com/wp-content/uploads/2022/03/2-verse-728x90-1.png\" /></a></p>\r\n\r\n<h2>Naira Official Exchange Still Unchanged</h2>\r\n\r\n<p>To back the assertions that foreign exchange shortages have also contributed to the currency&rsquo;s fall, the report quotes a currency dealer from the Egbeda area of Lagos State in Nigeria. The currency dealer said:</p>\r\n\r\n<blockquote>\r\n<p>We have not been able to get dollars at the banks and other sources.</p>\r\n</blockquote>\r\n\r\n<p>Another dealer, Alhaji Isa, reportedly implored Nigerian residents to convert their savings to the greenback &ldquo;because, with the rate things are going, it [the parallel exchange rate] might hit N750/$1 next month.&rdquo;</p>\r\n\r\n<p>Despite the many reports suggesting that the naira&rsquo;s losing ground versus other currencies on the forex parallel market, the CBN continues to peg the naira&rsquo;s official exchange rate at just under 440 units of the local currency for every dollar. This, in turn, has seen the gap between official and parallel market exchange rates&nbsp;<a href=\"https://twitter.com/markets/status/1574842925653135360\" target=\"_blank\">widen</a>&nbsp;to 65%, the currency&rsquo;s largest gap since 2016.</p>\r\n', 'yes', 1, '2022-10-03 12:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `Email`) VALUES
(0, 'sarahobiuwevbi@gmail.com'),
(10, 'chukwuustice6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `Topic` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `Topic`, `Description`, `Date`) VALUES
(50, 'Bitcoin', 'Bitcoin Details', '2022-09-29 18:00:33'),
(51, 'Ethereum', 'Ethereum details', '2022-09-29 18:00:33'),
(52, 'Bitcoin', 'Bitcoin Details', '2022-09-29 18:04:39'),
(53, 'Ethereum', 'Ethereum details', '2022-09-29 18:04:39'),
(54, 'Tether', 'Tether details', '2022-10-03 19:54:32'),
(55, 'Blockchain', 'Blockchain details', '2022-09-29 18:04:39'),
(56, 'Binance Coin', 'Binance Coin details', '2022-09-29 18:04:39'),
(57, 'Other', 'o details', '2022-09-29 18:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `Post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `Post_id`) VALUES
(35, 0),
(36, 0),
(37, 0),
(38, 102),
(39, 102),
(40, 102),
(41, 102),
(42, 102),
(43, 102),
(44, 102),
(45, 102),
(46, 102),
(47, 102),
(48, 99),
(49, 90),
(50, 90),
(51, 90),
(52, 90),
(53, 93),
(54, 96);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Total_cost` int(100) NOT NULL,
  `Transaction_id` int(255) NOT NULL,
  `Transaction_ref` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Transaction_message` varchar(255) NOT NULL,
  `Transaction_currency` varchar(255) NOT NULL,
  `Processor_response` varchar(255) NOT NULL,
  `Transaction_time` varchar(100) NOT NULL,
  `Transaction_type` varchar(255) NOT NULL,
  `First_6digits` int(100) NOT NULL,
  `Last_4digits` int(100) NOT NULL,
  `Card_issuer` varchar(255) NOT NULL,
  `Card_country` varchar(100) NOT NULL,
  `Card_type` varchar(255) NOT NULL,
  `Card_expiry` int(100) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `Fullname`, `Email`, `Phone`, `Item`, `Total_cost`, `Transaction_id`, `Transaction_ref`, `Status`, `Transaction_message`, `Transaction_currency`, `Processor_response`, `Transaction_time`, `Transaction_type`, `First_6digits`, `Last_4digits`, `Card_issuer`, `Card_country`, `Card_type`, `Card_expiry`, `Timestamp`) VALUES
(1, 'John doe', 'Johndoe@gmail.com', 0, '', 5000, 3892127, 'KM_96037140', 'success', 'Transaction fetched successfully', '', 'Approved. Successful', '2022-10-25T08:22:46.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 08:22:53'),
(2, 'John doe', 'Johndoe@gmail.com', 0, '', 5000, 3892134, 'KM_937577063', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T08:28:17.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 08:28:24'),
(3, 'John doe', 'Johndoe@gmail.com', 0, '', 5000, 3892195, 'KM_417504480', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T09:00:10.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 09:00:21'),
(4, 'John doe', 'Johndoe@gmail.com', 0, '', 5000, 3892224, 'KM_134550508', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T09:10:20.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 09:10:30'),
(5, 'John doe', 'Johndoe@gmail.com', 0, '', 5000, 3892342, 'KM_692758032', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T10:03:07.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 10:03:20'),
(6, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892593, 'KM_930717062', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:11:56.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:12:32'),
(7, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892606, 'KM_164062625', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:16:19.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:16:24'),
(8, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892615, 'KM_6613054', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:18:28.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:18:45'),
(9, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892620, 'KM_606132276', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:19:48.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:19:55'),
(10, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892644, 'KM_824326607', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:30:18.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:31:36'),
(11, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892660, 'KM_689640820', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:38:42.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:38:51'),
(12, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892678, 'KM_324101838', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:44:45.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:44:52'),
(13, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892686, 'KM_457578662', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T11:49:36.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 11:51:18'),
(14, 'John doe', 'Johndoe@gmail.com', 0, '', 1200, 3892725, 'KM_386064689', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-25T12:02:38.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-25 12:02:51'),
(15, 'John doe', 'emmanuelosizotse@gmail.com', 0, '', 5000, 3895383, 'KM_450587734', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T11:00:42.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 11:01:32'),
(16, 'John doe', 'emmanuelosizotse@gmail.com', 0, '', 5000, 3895386, 'KM_190953802', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T11:02:52.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 11:03:00'),
(17, 'John doe', 'emmanuelosizotse@gmail.com', 0, '', 5000, 3895390, 'KM_395015777', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T11:05:30.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 11:05:37'),
(18, 'John doe', 'emmanuelosizotse@gmail.com', 0, '', 5000, 3895397, 'KM_231335085', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T11:07:46.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 11:07:52'),
(19, 'John doe', 'emmanuelosizotse@gmail.com', 0, '', 5000, 3895402, 'KM_681236948', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T11:09:25.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 11:09:38'),
(20, 'John doe', 'emmanuelosizotse@gmail.com', 0, '', 5000, 3895412, 'KM_806505752', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T11:11:52.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 11:12:06'),
(21, 'John doe', 'sirelite11@gmail.com', 0, '', 6200, 3896823, 'KM_626805220', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T21:04:19.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 21:04:28'),
(22, 'John doe', 'sirelite11@gmail.com', 0, '', 5000, 3896826, 'KM_380203972', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-10-26T21:07:41.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-10-26 21:07:49'),
(23, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927390, 'KM_799593129', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T12:06:25.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 12:07:43'),
(24, 'EliteJo ', 'chukwuustice6@gmail.com', 2147483647, '', 13000, 3927407, 'KM_752506682', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T12:12:54.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 12:14:25'),
(25, 'EliteJo ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927428, 'KM_16207167', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T12:20:19.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 12:21:28'),
(26, 'MovieApi ', 'eseelite11@gmail.com', 2147483647, '', 13000, 3927441, 'KM_186894895', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T12:25:22.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 12:26:22'),
(27, 'Gospel Jonathan', 'chukwuustice6@gmail.com', 2147483647, '', 13000, 3927455, 'KM_808257861', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T12:29:38.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 12:29:51'),
(28, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927459, 'KM_893149169', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T12:31:27.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 12:31:35'),
(29, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927587, 'KM_745969608', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T13:06:03.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 13:06:12'),
(30, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927660, 'KM_631357967', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T13:33:35.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 13:33:50'),
(31, 'Gospel Jonathan', 'sirelite11@gmail.com', 0, '', 13000, 3927346, 'KM_123335637', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T11:55:01.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 13:34:42'),
(32, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927665, 'KM_925257070', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T13:36:33.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 13:36:46'),
(33, 'EliteJo ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927673, 'KM_915103916', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T13:40:09.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 13:40:19'),
(34, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927738, 'KM_723273580', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T14:05:38.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 14:06:01'),
(35, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927780, 'KM_544803569', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T14:07:57.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 14:08:12'),
(36, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927825, 'KM_688218837', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T14:23:11.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 14:23:51'),
(37, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3927831, 'KM_716026219', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T14:27:15.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 14:27:32'),
(38, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3927834, 'KM_123957659', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T14:29:41.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 14:29:53'),
(39, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3927845, 'KM_276995171', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T14:44:06.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 14:44:22'),
(40, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 5000, 3928123, 'KM_291977626', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-07T16:44:35.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-07 16:44:42'),
(41, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 5000, 3930066, 'KM_454136346', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T09:53:18.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 09:53:24'),
(42, 'EliteJo ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3930072, 'KM_156064848', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T09:54:39.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 09:54:44'),
(43, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 5000, 3930079, 'KM_179432341', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T09:57:38.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 09:57:46'),
(44, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3930095, 'KM_563233782', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T10:02:06.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 10:02:13'),
(45, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931892, 'KM_63995034', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:12:16.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:12:26'),
(46, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931895, 'KM_710013138', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:14:49.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:14:56'),
(47, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931901, 'KM_563342652', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:19:05.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:19:12'),
(48, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931913, 'KM_388112655', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:24:32.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:25:02'),
(49, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931915, 'KM_855583138', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:26:10.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:26:21'),
(50, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3931916, 'KM_231119178', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:28:10.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:28:19'),
(51, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 8000, 3931920, 'KM_273839189', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:31:09.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:31:16'),
(52, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931923, 'KM_133982149', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:35:50.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:36:02'),
(53, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931924, 'KM_689174356', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:37:44.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:37:53'),
(54, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931927, 'KM_527615964', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:44:00.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:44:07'),
(55, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3931930, 'KM_914967469', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:46:02.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:46:10'),
(56, 'Dexteeny ', 'sarahobiuwevbi@gmail.com', 2147483647, '', 9000, 3931933, 'KM_808022629', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:53:12.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:53:20'),
(57, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 9000, 3931935, 'KM_221922634', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-08T23:55:45.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-08 23:55:56'),
(58, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 800, 3931943, 'KM_572394148', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:01:28.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:01:35'),
(59, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3931948, 'KM_577527243', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:05:00.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:05:12'),
(60, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3931991, 'KM_581458064', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:08:47.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:08:55'),
(61, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3931993, 'KM_116118675', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:10:41.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:10:48'),
(62, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932001, 'KM_925423031', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:16:44.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:16:51'),
(63, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932009, 'KM_808130429', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:20:34.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:20:41'),
(64, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932011, 'KM_278401923', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T00:22:45.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 00:22:52'),
(65, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932954, 'KM_293178782', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:08:43.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:09:04'),
(66, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932959, 'KM_533435375', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:10:17.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:10:26'),
(67, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932964, 'KM_67402366', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:12:37.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:12:47'),
(68, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3932972, 'KM_41841654', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:17:15.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:17:36'),
(69, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 5000, 3932983, 'KM_908217500', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:21:51.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:22:37'),
(70, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3932993, 'KM_64429218', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:25:52.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:26:00'),
(71, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3933000, 'KM_740063233', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-09T08:27:43.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-09 08:27:49'),
(72, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3935148, 'KM_981184405', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-10T01:41:50.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 01:42:01'),
(73, 'Dexteeny ', 'sarahobiuwevbi@gmail.com', 2147483647, '', 5000, 3937391, 'KM_446420292', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-10T18:25:20.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 18:25:57'),
(74, 'Dexteeny ', 'gospyjo@gmail.com', 2147483647, '', 5000, 3937401, 'KM_737116844', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-10T18:33:10.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 18:33:16'),
(75, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3937403, 'KM_211723611', 'success', 'Transaction fetched successfully', 'NGN', 'Approved. Successful', '2022-11-10T18:35:30.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 18:35:38'),
(76, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3937589, 'KM_222158176', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:00:06.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:01:04'),
(77, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3937592, 'KM_147629158', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:02:40.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:03:08'),
(78, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3937594, 'KM_956319463', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:05:04.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:05:09'),
(79, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3937596, 'KM_573998419', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:07:03.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:07:37'),
(80, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3937603, 'KM_605640376', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:12:45.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:12:49'),
(81, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3937606, 'KM_961807513', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:14:15.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:14:18'),
(82, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3937609, 'KM_840282955', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:19:02.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:19:08'),
(83, 'Gospel Jonathan', 'eseelite11@gmail.com', 2147483647, '', 5000, 3937612, 'KM_419892644', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:20:22.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:20:24'),
(84, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 8000, 3937616, 'KM_654566355', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:21:36.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:21:39'),
(85, 'Dexteeny ', 'obiuwevbisarah@gmail.com', 2147483647, '', 5000, 3937626, 'KM_772942092', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:24:32.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:24:35'),
(86, 'Dexteeny ', 'obiuwevbisarah@gmail.com', 2147483647, '', 8000, 3937628, 'KM_59688583', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:26:05.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:26:07'),
(87, 'Dexteeny ', 'sarahobiuwevbi@gmail.com', 2147483647, '', 9000, 3937629, 'KM_876949074', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-10T21:27:05.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-10 21:27:07'),
(88, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3939422, 'KM_997327590', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T12:40:42.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 12:40:56'),
(89, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 13000, 3939424, 'KM_433614318', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T12:42:27.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 12:42:28'),
(90, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3939440, 'KM_314536393', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T12:49:39.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 12:49:40'),
(91, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3939465, 'KM_654772303', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T12:57:09.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 12:57:10'),
(92, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3939489, 'KM_763543907', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T12:58:26.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 12:58:27'),
(93, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 13000, 3939504, 'KM_867162143', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T12:59:28.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 12:59:29'),
(94, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3939518, 'KM_29942161', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:04:40.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:04:41'),
(95, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3939529, 'KM_120223850', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:10:11.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:10:13'),
(96, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 5000, 3939533, 'KM_554353818', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:11:40.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:11:45'),
(97, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 8000, 3939551, 'KM_586760677', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:20:19.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:20:20'),
(98, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 8000, 3939553, 'KM_433484132', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:21:46.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:21:48'),
(99, 'Dexteeny ', 'gospyjo@gmail.com', 2147483647, '', 9000, 3939571, 'KM_199801186', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:27:00.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:27:01'),
(100, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3939579, 'KM_773994592', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:29:20.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:29:21'),
(101, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3939584, 'KM_614249095', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:31:10.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:31:12'),
(102, 'Dexteeny ', 'sarahobiuwevbi@gmail.com', 2147483647, '', 22000, 3939647, 'KM_463974397', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T13:56:24.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 13:56:26'),
(103, 'Emmanuel Pogba', 'emmanuelosizotse@gmail.com', 2147483647, '', 22000, 3939905, 'KM_241708959', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T15:41:11.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 15:41:21'),
(104, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 5000, 3939931, 'KM_52002985', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T15:58:46.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 15:58:47'),
(105, 'Pogba Di maria', 'emmanuelosizotse@gmail.com', 2147483647, '', 17000, 3939954, 'KM_66128447', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T16:06:45.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 16:06:46'),
(106, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, '', 5000, 3939960, 'KM_301334493', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T16:08:23.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 16:08:23'),
(107, 'Dexteeny Michhle', 'emmanuelosizotse@gmail.com', 2147483647, '', 5000, 3939976, 'KM_891531654', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-11T16:15:47.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-11 16:15:47'),
(108, 'Tenador Biola', 'Tenadorappah@gmail.com', 2147483647, '', 22000, 3947375, 'KM_150428499', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-15T00:31:37.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-15 00:31:39'),
(109, 'Appah biola', 'Tena_zamani@yahoo.com', 2147483647, '', 8000, 3947376, 'KM_673090858', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-15T00:33:48.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-15 00:33:51'),
(110, 'Efe dave', 'efeomoruyi@rocketmail.com', 2147483647, '', 5000, 3949895, 'KM_280389257', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-15T21:29:54.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-15 21:29:55'),
(111, 'Dexteeny ', 'sirelite11@gmail.com', 2147483647, '', 8000, 3956032, 'KM_665925108', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-17T20:19:52.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-17 20:19:55'),
(112, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, '', 9000, 3956044, 'KM_293985785', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-17T20:33:47.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-17 20:33:49'),
(113, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, 'Array', 5000, 3960816, 'KM_642021304', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-19T17:45:05.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-19 17:45:15'),
(114, 'Dexteeny ', 'eseelite11@gmail.com', 2147483647, 'Array', 5000, 3960818, 'KM_278865682', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-19T17:46:55.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-19 17:46:58'),
(115, 'Gospel Jonathan', 'eseelite11@gmail.com', 2147483647, '[{\"project_id\":\"41\",\"topic\":\"THE DESIGN, CONSTRUCTION AND TEST ON A TWO STATION SIMPLE INTERCOM SYSTEM\",\"photo\":\"474281bgbook4.jpg\",\"faculty\":\"Engineering\",\"department\":\"Civil \",\"price\":\"8000\",\"pdf\":\"276450preparation-of-natural-hydroxyapatite-from-bovine', 8000, 3961162, 'KM_146425567', 'success', 'Transaction fetched successfully', 'NGN', 'Approved', '2022-11-19T22:37:42.000Z', 'card', 553188, 2950, ' CREDIT', 'NIGERIA NG', 'MASTERCARD', 9, '2022-11-19 22:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fullname`, `Email`, `Pwd`, `Timestamp`) VALUES
(21, 'John doe', 'sirelite11@gmail.com', '$2y$10$999Sj/HfqQpY2VkI08LnZeUzYoo6aAJqxqS7seNN86fX7hOCWLCqu', '2022-10-22 00:06:29'),
(22, 'John doe', 'Johndoe@gmail.com', '$2y$10$.cw1/X8q6PeCK9RRcHJ3GegLgk6..7kWfgKn82j/ssPan5ocZfmKa', '2022-10-22 09:50:22'),
(23, 'John Beckham', 'Beckham@gmail.com', '$2y$10$X8Lg0KIDMK7bZjq2Xzride.zGx2a75m9sQaSGKts1IURpb.Hf7AtS', '2022-10-22 10:45:23'),
(24, 'John Beckham', 'JohnDariis@gmail.com', '$2y$10$ZKXyrMeRfeyzf6x3QF8O3uyy/j/9tGKpeGUeo48D9/iL1TK0i9I1i', '2022-10-22 19:01:42'),
(25, 'Chines', 'chimes@gmail.com', '$2y$10$1INHzp/ZlNA4NznLxQ5W3OG9Oa4nde57.zKpl3k9Bu3EzGbQzMYAi', '2022-10-22 19:12:20'),
(26, 'John doe', 'emmanuelosizotse@gmail.com', '$2y$10$RQ/rMrHhMAbXt2ID45HC5Ou7xjgOYltkM4T2sfKmARhaf1sSuhkFy', '2022-10-26 10:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `writters`
--

CREATE TABLE `writters` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Project` varchar(255) NOT NULL,
  `EduLevel` varchar(255) NOT NULL,
  `ProjectFormat` text NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writters`
--

INSERT INTO `writters` (`id`, `Name`, `Email`, `Phone`, `Project`, `EduLevel`, `ProjectFormat`, `Status`, `Feedback`, `Timestamp`) VALUES
(1, 'Dexteeny', 'sirelite11@gmail.com', 2147483647, 'CAUSES AND EFFECTS OF ALCOHOLISM AMOUNG STUDENTS', 'bsc', '', -1, 'okay o', '2022-10-18 12:39:40'),
(2, 'Gospel Jonathan', 'sirelite11@gmail.com', 2147483647, 'THE IMPACT OF LECTURER-STUDENT RELATIONSHIP ON STUDENT ACADEMIC PERFORMANCE', 'bsc', '', 0, '', '2022-10-20 22:26:20'),
(3, 'EliteJo', 'gospyjo@gmail.com', 2147483647, 'THE APPLICATION OF ICT TO THE TEACHING AND LEARNING OF ECONOMICS IN SECONDARY SCHOOLS WITHIN JOS NORTH', 'bsc', '', 1, 'Sharp', '2022-10-18 11:50:28'),
(4, 'GospelJo', 'bleksandy@gail.com', 2147483647, 'AN EVALUATION OF PRINCIPALS\' ADMINISTRATIVE EFFECTIVENESS IN NIGERIAN SCHOOLS', 'bsc', '', -1, 'sharp', '2022-10-18 12:46:18'),
(5, 'Gospel Jonathan', 'sirelite@gmail.com', 2147483647, 'Lever is a ndnjdkldkocpoqecpfoqepofqepofpoqefpoqefpoqefklqe', 'bsc', '', -1, 'kskk', '2022-10-26 10:55:31'),
(6, 'Gospel Jonathan', 'gosyjo@gmail.com', 2147483647, 'Lever of a machine in mechanical application', 'bsc', '', -1, 'gidd', '2022-11-20 12:36:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patners`
--
ALTER TABLE `patners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Topic_id` (`Topic_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writters`
--
ALTER TABLE `writters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `learn`
--
ALTER TABLE `learn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patners`
--
ALTER TABLE `patners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `writters`
--
ALTER TABLE `writters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
