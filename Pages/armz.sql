-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 08:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armz`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `id` int(11) NOT NULL,
  `accident_title` varchar(255) NOT NULL,
  `accident_date_time` datetime NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `sector` varchar(255) DEFAULT NULL,
  `basicinfo_desc` text DEFAULT NULL,
  `forensic_images` text DEFAULT NULL,
  `forensic_desc` text DEFAULT NULL,
  `damage_images` text DEFAULT NULL,
  `damage_desc` text DEFAULT NULL,
  `officers_images` text DEFAULT NULL,
  `officer_description` text DEFAULT NULL,
  `extra_info_images` text DEFAULT NULL,
  `extra_info` text DEFAULT NULL,
  `case_status` enum('ongoing','closed') DEFAULT NULL,
  `accident_type` enum('on-road','off-road','side-road') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`id`, `accident_title`, `accident_date_time`, `province`, `district`, `sector`, `basicinfo_desc`, `forensic_images`, `forensic_desc`, `damage_images`, `damage_desc`, `officers_images`, `officer_description`, `extra_info_images`, `extra_info`, `case_status`, `accident_type`) VALUES
(7, 'impanuka ya gasanze still a codding accident', '2024-08-22 21:17:00', 'Kigali', 'Gasabo', 'Rutunga', 'this is an accident showcasing the numerous errors i am facing and how it is almost impossible to fix them', 'uploads/forensic/original-26a78c7efcf34706de8177da8d1f7b84.jpg,uploads/forensic/original-33fc663d8b226a65f4b0badd7ac61418.png,uploads/forensic/wizkalifa4dribble_4x.png', 'this are the wesite i canot even code plz donot look at them', 'uploads/damage/grand pa .png,uploads/damage/icon bravoda.png', 'there is alot of destroyed unfished project and crappy loges', 'uploads/officers/image (2).webp,uploads/officers/image (3).webp', 'ok me i just sow it as an oportunity to update my portofolio', 'uploads/extra/Screenshot (926).png,uploads/extra/Screenshot (927).png', 'big stepper in addition to that there is video footage', 'ongoing', 'off-road'),
(8, 'coding accident ', '2024-08-24 07:11:00', 'Kigali', 'Gasabo', 'Gisozi', 'i broken my code now it is not even showing anything on screen', 'uploads/forensic/5ba73876-39cc-4eb2-aaf4-c11275bb0304.jpeg,uploads/forensic/6ec95313-4be2-4edd-b715-9a596c1ae1c2.jpeg,uploads/forensic/7a38e8ae-cf7d-4359-baa1-280b12df52a1.jpeg', 'this is proffe of my error in code(sukuna , itachi uchiha from the akastuki nd the younger itachi from the anbu squad the spy network)', 'uploads/damage/Screenshot (493).png,uploads/damage/Screenshot (928).png', 'am big stepper underground mecha .and all the blablala i can\'t remember', 'uploads/officers/Screenshot (5).png', 'ok now here is what happened . he kinda just spanwed form nowhere then destroyed evrywon and won the game that is why he is the best in war zone and combat master', 'uploads/extra/8fcbd0551409f2ebbeb432410df509bd.png', 'none', 'ongoing', 'on-road'),
(9, 'sample1', '2024-09-02 13:57:00', 'Kigali', NULL, NULL, 'basic information description', 'uploads/forensic/2.png', 'forensic description', 'uploads/damage/images.jfif,uploads/damage/Impanuka.jpg,uploads/damage/maxresdefault.jpg', 'the damage report with 3 picture', 'uploads/officers/8.png', 'the officers report with one images closed case and off road accident', 'uploads/extra/Impanuka.jpg', 'this is extra info for any thing that might be added', 'closed', 'off-road'),
(10, 'sample 2', '2024-09-02 14:08:00', 'Kigali', '', '', 'ok', 'uploads/forensic/1GvFNnN7_400x400.jpg', 'forensic', 'uploads/damage/faqs-what-happens-to-your-body-in-a-car-crash-2.jpg', 'damage report ', 'uploads/officers/download (2).jpg', 'this is the officers report', 'uploads/extra/download (3).jpg', 'let me forget on image here', 'ongoing', 'on-road');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `accident_id` int(11) NOT NULL,
  `individual_name` varchar(255) DEFAULT NULL,
  `individual_id` varchar(255) DEFAULT NULL,
  `vehicle` varchar(255) DEFAULT NULL,
  `vehicle_plate` varchar(255) DEFAULT NULL,
  `license_status` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `alcohol_test` varchar(255) DEFAULT NULL,
  `testimonial_images` varchar(250) DEFAULT NULL,
  `testimonial_desc` varchar(250) DEFAULT NULL,
  `cause` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `accident_id`, `individual_name`, `individual_id`, `vehicle`, `vehicle_plate`, `license_status`, `insurance`, `alcohol_test`, `testimonial_images`, `testimonial_desc`, `cause`) VALUES
(8, 7, 'ced', '1200329383799871', 'pickup', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/IMG-20230313-WA0002-qg2dq51doe4sb89orj9ooqh5zb0aa0xyngw27h91dw.jpg', 'this guy just quit on me took the money and then split', NULL),
(9, 7, 'bucura bwa kamanzi', '12443329383799871', 'sedan', 'RAD192G', 'deactivated', 'prime', 'drunk', 'uploads/testimonials/IMG-20230313-WA0002-qg2dq51doe4sb89orj9ooqh5zb0aa0xyngw27h91dw.jpg', NULL, NULL),
(10, 8, 'kevin', '12003 93844378909', 'sedan', 'RAD 090 G', 'active', 'radiant', 'drunk', 'uploads/testimonials/Anime app icon toge.jpeg', 'the guy with the speach curse technic if it does not work i am sceewed', 'Car Problem'),
(11, 8, 'legend official', '12003 289189291', 'pickup', 'RAD 190 G', 'deactivated', 'sanlam', 'not drunk', 'uploads/testimonials/Anime app icon toge.jpeg', 'itachi gallery i let gooo ', 'Unknown Reason'),
(12, 9, 'thierry', '1200329383799871', 'suv', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/download (2).jpg', 'testimonial 1 description', 'Natural Desaster'),
(13, 9, 'bucura', '1200329383799871', 'pickup', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/download (2).jpg', 'this is the second testimonial', 'Natural Desaster'),
(14, 10, 'bucura', '1200329383799871', 'suv', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/Screenshot (5).png', 'bucura in accident', 'Natural Desaster');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user-id` int(11) NOT NULL,
  `badge_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user-id`, `badge_id`, `username`, `email`, `password`) VALUES
(1, '123', 'draken', 'tgusenga2003@gmail.com', 'a'),
(2, '1234', 'thierry', 'admin@root.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accident_id` (`accident_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_ibfk_1` FOREIGN KEY (`accident_id`) REFERENCES `accident` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
