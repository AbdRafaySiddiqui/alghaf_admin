-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 04:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alghaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `usename` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `usename`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `Blog_name` varchar(250) NOT NULL,
  `Blog_images` varchar(250) NOT NULL,
  `Blog_description` varchar(250) NOT NULL,
  `Blog_post` varchar(250) NOT NULL,
  `Blog_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(5000) NOT NULL,
  `persons` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `number`, `date`, `message`, `persons`) VALUES
(4, 'Khulaid Aziz', 'khulaidc7.knn@gmail.com', '03332239755', '2022-02-26', 'Kindly confirm if seats available.', '2'),
(5, 'Khulaid Aziz', 'khulaidc7.knn@gmail.com', '', '0000-00-00', '', ''),
(6, 'kamal', 'kamal@gmail.com', '', '0000-00-00', '', ''),
(7, 'Ali Khan', 'ali@gmail.com', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `website` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `name`, `email`, `website`, `date`) VALUES
(4, 'dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text.. dummy text..', 'Ali Khan', 'ali@gmail.com', '', '2026-02-22'),
(5, '\r\n                    demo123', 'Bilal', 'bila@gmail.com', 'www.bilal.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `packageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `days` varchar(10000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `image`, `days`, `des`, `status`) VALUES
(10, 'DUBAI PACKAGES', '659', 'home.PNG', '5', 'Day 1:Arrive in Dubai by flight; relax and go for a Dhow Cruise with Dinner in the evening.\r\n\r\nDay 2:Morning city tour of Dubai and shopping at Dragon Mart; evening Desert safari with BBQ dinner.\r\n\r\nVisit the Burj Khalifa’s 124th Floor, followed by the Dubai Aquarium and Underwater Zoo.\r\n\r\nDay 3:Visit the Burj Khalifa’s 124th Floor, followed by the Dubai Aquarium and Underwater Zoo.\r\n\r\nDay 4:Tour of Ferrari World and Abu Dhabi.\r\n\r\nDay 5:Morning shopping and leave for the airport!\r\n                    ', 2),
(11, 'RAS AL KHAIMAH ITINERARY', '659', 'pic1.jfif', '1', '\r\n                    ONE DAY IN RAS AL KHAIMAH ITINERARY\r\n\r\nJebel Jais \r\n\r\nStart your day amidst the beautiful nature of the emirate with a trip to Jebel Jais. ,\r\nziplining. There are several viewing platforms along the 20 km route where you can stop for a breather and enjoy the panoramic views. If you love outdoors and nature, you will absolutely enjoy visiting this place.\r\n\r\nRas Al Khaimah National Museum\r\n\r\nThe Ras Al Khaimah National Museum is the perfect place to learn about the history of this emirate. It is located inside a fort which also served as the residence of the ruling family untill the early 1960s. Here you will find traditional weapons, historical documents and manuscripts as well as archaeological displays of the early settlers in the area. You will also be able to get a glimpse of traditional Emirati life in the ethnographic section of the museum.\r\n\r\nJazirat Al Hamra\r\n\r\nAnother heritage site in Ras Al Khaimah is Jazirat Al Hamra, which is an abandoned fishing villag', 2),
(12, 'ABU DHABI PACKAGES', '659', 'pic3.jfif', '3', '\r\n                    Day 1 : Sheikh Zayed Grand Mosque, Abu Dhabi mangroves, the Louvre Abu Dhabi.\r\nDay 2 : UAE Presidential Palace (Qasr Al Watan), Emirates Palace.\r\nDay 3 :  Yas Island (visit Ferrari World, Yas Waterworld or Warner Bros World Abu Dhabi.', 2),
(18, 'DUBAI PACKAGES', '659', 'login.PNG', '6', '\r\n             Day 1:Arrive in Dubai by flight; relax and go for a Dhow Cruise with Dinner in the evening.\r\n\r\nDay 2:Morning city tour of Dubai and shopping at Dragon Mart; evening Desert safari with BBQ dinner.\r\n\r\nVisit the Burj Khalifa’s 124th Floor, followed by the Dubai Aquarium and Underwater Zoo.\r\n\r\nDay 3:Visit the Burj Khalifa’s 124th Floor, followed by the Dubai Aquarium and Underwater Zoo.\r\n\r\nDay 4:Tour of Ferrari World and Abu Dhabi.\r\n\r\nDay 5:Morning shopping and leave for the airport!       ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Tour'),
(2, 'Package');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `Id` int(11) NOT NULL,
  `Testimonial_name` varchar(250) NOT NULL,
  `Testimonial_images` varchar(250) NOT NULL,
  `Testimonial_message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `price`, `des`, `image`) VALUES
(1, 'demo', '122', '\r\n                    wdwefwefefwefwfwef\r\nfefergfve', 0x686f6d652e504e47),
(3, 'demo', '50', '\r\n                 qwdwfwe   ', 0x636172642e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
