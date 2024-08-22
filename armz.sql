-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 09:27 PM
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
  `extra_info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`id`, `accident_title`, `accident_date_time`, `province`, `district`, `sector`, `basicinfo_desc`, `forensic_images`, `forensic_desc`, `damage_images`, `damage_desc`, `officers_images`, `officer_description`, `extra_info_images`, `extra_info`) VALUES
(1, 'ok', '2024-08-22 19:24:00', 'Kigali', '', '', '<p>okok</p>', 'uploads/forensic/1435887_OZI9ES1 (1).png,uploads/forensic/1435887_OZI9ES1 (2).png,uploads/forensic/1435887_OZI9ES1.png,uploads/forensic/1435887_OZI9ES1__1_-removebg-preview.png', '<p>okok</p>', '', '<p>this fiasco the girl be cousing a scene</p>', '', '<p>offcer in details</p>', '', '<p>extra info test later</p>'),
(2, 'ok', '2024-08-22 19:24:00', 'Kigali', '', '', '<p>okok</p>', 'uploads/forensic/1435887_OZI9ES1 (1).png,uploads/forensic/1435887_OZI9ES1 (2).png,uploads/forensic/1435887_OZI9ES1.png,uploads/forensic/1435887_OZI9ES1__1_-removebg-preview.png', '<p>okok</p>', '', '<p>this fiasco the girl be cousing a scene</p>', '', '<p>offcer in details</p>', '', '<p>extra info test later</p>'),
(3, 'ok', '2024-08-22 19:24:00', 'Kigali', '', '', '<p>okok</p>', 'uploads/forensic/1435887_OZI9ES1 (1).png,uploads/forensic/1435887_OZI9ES1 (2).png,uploads/forensic/1435887_OZI9ES1.png,uploads/forensic/1435887_OZI9ES1__1_-removebg-preview.png', '<p>okok</p>', 'uploads/damage/download (2).jpg,uploads/damage/download (3).jpg,uploads/damage/Screenshot (3).png', '<p>this fiasco the girl be cousing a scene</p>', 'uploads/officers/IMG-20230823-WA0007.jpg', '<p>offcer in details</p>', 'uploads/extra/Screenshot (5).png', '<p>extra info test later</p>'),
(4, 'last check', '2024-08-22 20:43:00', 'Kigali', 'Gasabo', 'Nduba', '<p>last check</p>', 'uploads/forensic/1GvFNnN7_400x400.jpg', '', 'uploads/damage/Screenshot (3).png,uploads/damage/Screenshot (4).png,uploads/damage/Screenshot (5).png', '', '', '', 'uploads/extra/ceo-qg2dt3954o66r5zejb6j0ho93ugrftnmq2lxfqvjus.jpg', ''),
(5, 'last check', '2024-08-22 20:43:00', 'Kigali', NULL, NULL, '<p>last check</p>', 'uploads/forensic/1GvFNnN7_400x400.jpg', '<p>last check</p>', 'uploads/damage/Screenshot (3).png,uploads/damage/Screenshot (4).png,uploads/damage/Screenshot (5).png', '<p>last check</p>', '', '', 'uploads/extra/ceo-qg2dt3954o66r5zejb6j0ho93ugrftnmq2lxfqvjus.jpg', '<p>last check</p>'),
(6, 'last check', '2024-08-22 20:43:00', 'Kigali', NULL, NULL, '<p>last check</p>', 'uploads/forensic/1GvFNnN7_400x400.jpg', '<p>last check</p>', 'uploads/damage/Screenshot (3).png,uploads/damage/Screenshot (4).png,uploads/damage/Screenshot (5).png', '<p>last check</p>', '', '', 'uploads/extra/ceo-qg2dt3954o66r5zejb6j0ho93ugrftnmq2lxfqvjus.jpg', '<p>last check</p>'),
(7, 'impanuka ya gasanze still a codding accident', '2024-08-22 21:17:00', 'Kigali', 'Gasabo', 'Rutunga', 'this is an accident showcasing the numerous errors i am facing and how it is almost impossible to fix them', 'uploads/forensic/original-26a78c7efcf34706de8177da8d1f7b84.jpg,uploads/forensic/original-33fc663d8b226a65f4b0badd7ac61418.png,uploads/forensic/wizkalifa4dribble_4x.png', 'this are the wesite i canot even code plz donot look at them', 'uploads/damage/grand pa .png,uploads/damage/icon bravoda.png', 'there is alot of destroyed unfished project and crappy loges', 'uploads/officers/image (2).webp,uploads/officers/image (3).webp', 'ok me i just sow it as an oportunity to update my portofolio', 'uploads/extra/Screenshot (926).png,uploads/extra/Screenshot (927).png', 'big stepper in addition to that there is video footage');

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
  `testimonial_desc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `accident_id`, `individual_name`, `individual_id`, `vehicle`, `vehicle_plate`, `license_status`, `insurance`, `alcohol_test`, `testimonial_images`, `testimonial_desc`) VALUES
(1, 1, 'thierry', '1200329383799871', 'suv', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/ceo-qg2dt3954o66r5zejb6j0ho93ugrftnmq2lxfqvjus.jpg', '<p>dr going to work.</p>'),
(2, 2, 'thierry', '1200329383799871', 'suv', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/ceo-qg2dt3954o66r5zejb6j0ho93ugrftnmq2lxfqvjus.jpg', '<p>dr going to work.</p>'),
(3, 3, 'thierry', '1200329383799871', 'suv', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/ceo-qg2dt3954o66r5zejb6j0ho93ugrftnmq2lxfqvjus.jpg', '<p>dr going to work.</p>'),
(4, 4, 'thierry', '1200329383799871', 'truck', 'RAD092G', 'deactivated', 'sanlam', 'not drunk', 'uploads/testimonials/1GvFNnN7_400x400.jpg', ''),
(5, 4, 'bucura', '1200329383799871', 'suv', 'RAD092G', 'deactivated', 'sanlam', 'not drunk', 'uploads/testimonials/1GvFNnN7_400x400.jpg', NULL),
(6, 5, 'thierry', '1200329383799871', 'truck', 'RAD092G', 'deactivated', 'sanlam', 'not drunk', 'uploads/testimonials/1GvFNnN7_400x400.jpg', '<p>last check</p>'),
(7, 6, 'thierry', '1200329383799871', 'truck', 'RAD092G', 'deactivated', 'sanlam', 'not drunk', 'uploads/testimonials/1GvFNnN7_400x400.jpg', '<p>last check</p>'),
(8, 7, 'ced', '1200329383799871', 'pickup', 'RAD092G', 'active', 'sanlam', 'not drunk', 'uploads/testimonials/IMG-20230313-WA0002-qg2dq51doe4sb89orj9ooqh5zb0aa0xyngw27h91dw.jpg', 'this guy just quit on me took the money and then split'),
(9, 7, 'bucura bwa kamanzi', '12443329383799871', 'sedan', 'RAD192G', 'deactivated', 'prime', 'drunk', 'uploads/testimonials/IMG-20230313-WA0002-qg2dq51doe4sb89orj9ooqh5zb0aa0xyngw27h91dw.jpg', NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
