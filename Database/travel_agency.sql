-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 02:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `registered_at`, `is_deleted`) VALUES
(4, 'Administrator', 'admin@discoverkenya.co.ke', 'admin254', '2022-11-06 14:09:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(10) NOT NULL,
  `agent_code` varchar(6) NOT NULL,
  `agent_fname` varchar(255) NOT NULL,
  `agent_lname` varchar(255) NOT NULL,
  `agent_phonenumber` varchar(12) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_password` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `agent_code`, `agent_fname`, `agent_lname`, `agent_phonenumber`, `agent_email`, `agent_password`, `registered_at`, `is_deleted`) VALUES
(1, 'A001GT', 'Kyle ', 'Muthama', '0788221337', 'kyle.muthama@gmail.com', 'muthama1234', '2022-10-22 11:50:33', 0),
(2, 'A002GT', 'Alice', 'Kang\'ethe', '0712776331', 'alice.kangethe@gmail.com', 'alicek23', '2022-10-22 11:50:33', 0),
(3, 'A003GT', 'Travis', 'Okumu', '0787220775', 'travis.okumu@gmail.com', 'okumu20okumu', '2022-10-22 11:55:26', 0),
(4, 'A004GT', 'Danielle', 'Mutheu', '0799665112', 'dmutheu@gmail.com', 'mutheu2004', '2022-10-22 11:55:26', 0),
(5, 'A005GT', 'Gabriel', 'Otao', '0733227663', 'gabriel.otao@gmail.com', 'gotao2019', '2022-10-22 11:55:26', 0),
(6, 'A007NT', 'Sandra', 'Johns', '0709554327', 'sandra.johns@gmail.com', '1234', '2022-11-02 11:02:02', 0),
(7, '', 'Myles', 'Johnson', '0709554327', 'myles.johnson@gmail.com', 'myles22', '2022-11-02 11:09:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) NOT NULL,
  `client_code` varchar(6) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL,
  `flight_airline` varchar(225) NOT NULL,
  `accomodation` varchar(225) NOT NULL,
  `transportation` varchar(225) NOT NULL,
  `total_cost` varchar(20) NOT NULL,
  `agent_code` varchar(6) NOT NULL,
  `generated at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `client_code`, `origin`, `destination`, `departure_date`, `return_date`, `flight_airline`, `accomodation`, `transportation`, `total_cost`, `agent_code`, `generated at`) VALUES
(1, 'C001NT', 'mombasa', 'nairobi', '2022-10-24', '2022-10-25', 'Jambo', '1 bedroom', 'taxi', '5500', 'A001GT', '2022-10-24 18:06:52'),
(2, 'C002NT', 'nairobi', 'nakuru', '2022-10-24', '2022-10-25', 'jambo', '2 bedroom', 'taxi', '7500', 'A002GT', '2022-10-24 18:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `booking_requests`
--

CREATE TABLE `booking_requests` (
  `booking_request_id` int(10) NOT NULL,
  `client_code` varchar(6) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `traveller_information` varchar(1000) NOT NULL,
  `preferred_flight_class` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `return_date` date NOT NULL,
  `book_accomodation` tinyint(1) NOT NULL,
  `accomodation_description` varchar(1000) NOT NULL,
  `book_transportation` tinyint(1) NOT NULL,
  `transportation_description` varchar(1000) NOT NULL,
  `agent_code` varchar(6) NOT NULL,
  `is_handled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_requests`
--

INSERT INTO `booking_requests` (`booking_request_id`, `client_code`, `origin`, `destination`, `traveller_information`, `preferred_flight_class`, `departure_date`, `return_date`, `book_accomodation`, `accomodation_description`, `book_transportation`, `transportation_description`, `agent_code`, `is_handled`) VALUES
(1, 'C001NT', 'Nairobi', 'Mombasa', '2 adults\r\n1 infant', 'Economy', '2022-10-26', '2022-10-31', 1, 'We would like to stay at the Mombasa Serena Hotel. Kindly get us a room that accommodates all 3 of us. Any price shall do.', 1, 'We would like transportation from the airport to the hotel and back to the airport on our return date.', 'A001GT', 0),
(2, 'C003NT', 'Kisumu', 'Nairobi', '1 adult', 'Economy', '2022-10-25', '2022-10-29', 1, 'I would like to stay at the Villa Rosa Kempinski hotel. I would like a room on one of the higher floors.', 1, 'I would like to be transported to the hotel in an SUV. I can find my way back to the airport', 'A003GT', 0),
(3, 'C012NT', 'Nairobi', 'Mombasa', '2 adults', 'economy', '2022-10-30', '2022-11-04', 1, 'I would like to stay in the voyager hotel', 0, '', 'A002GT', 0);

-- --------------------------------------------------------

--
-- Table structure for table `card_information`
--

CREATE TABLE `card_information` (
  `info_id` int(6) NOT NULL,
  `client_code` varchar(7) NOT NULL,
  `card_owner` varchar(60) NOT NULL,
  `card_number` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiry_month` varchar(12) NOT NULL,
  `expiry_year` varchar(4) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card_payments`
--

CREATE TABLE `card_payments` (
  `payment_id` int(6) NOT NULL,
  `client_code` varchar(6) NOT NULL,
  `card_owner` varchar(255) NOT NULL,
  `card_number` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiry_month` varchar(10) NOT NULL,
  `expiry_year` varchar(4) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `issued` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_payments`
--

INSERT INTO `card_payments` (`payment_id`, `client_code`, `card_owner`, `card_number`, `cvv`, `expiry_month`, `expiry_year`, `payment_date`, `issued`) VALUES
(2, 'C001NT', 'Kyla Arunga', 1234567898, 123, 'NOV', '2025', '2022-11-12 17:26:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(10) NOT NULL,
  `client_fname` varchar(255) NOT NULL,
  `client_lname` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `national_id` int(10) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `code_assigned` tinyint(1) NOT NULL DEFAULT 0,
  `client_code` varchar(6) DEFAULT NULL,
  `agent_assigned` tinyint(1) NOT NULL DEFAULT 0,
  `agent_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_fname`, `client_lname`, `age`, `sex`, `national_id`, `phone_number`, `client_email`, `password`, `registered_at`, `code_assigned`, `client_code`, `agent_assigned`, `agent_code`) VALUES
(1, 'Conner', 'Kame', 30, 'Male', 38823165, '0703445776', 'connor.kame@gmail.com', 'connor254', '2022-10-22 12:10:00', 1, 'C001NT', 1, 'A001GT'),
(2, 'Mutua', 'Mwathe', 43, 'Male', 30016423, '0777221998', 'mutua.mwathe@gmail.com', 'mwathe2000', '2022-10-22 12:10:00', 1, 'C002NT', 1, 'A002GT'),
(3, 'Clara', 'Awiti', 23, 'Female', 39021178, '0703446789', 'c.awiti@gmail.com', 'awiti1997', '2022-10-22 12:10:00', 1, 'C003NT', 1, 'A003GT'),
(4, 'Enoch', 'Achesa', 31, 'Male', 37722134, '0733221662', 'enoch.achesa@gmail.com', 'achesa23', '2022-10-22 12:10:00', 1, 'C004NT', 1, 'A004GT'),
(5, 'Lisa', 'Wambui', 26, 'Female', 388012554, '0789111665', 'lisa.w@gmail.com', 'wambui2001', '2022-10-22 12:10:00', 1, 'C005NT', 1, 'A005GT'),
(6, 'Martin', 'Mulamwa', 25, 'Male', 38017823, '0703554112', 'mulamwa.m@gmail.com', 'mulamwa2020', '2022-10-22 12:26:31', 1, 'C006NT', 1, 'A001GT'),
(7, 'Gilbert', 'Kinuthia', 30, 'Male', 37762311, '0788123456', 'gilbert.kinuthia@gmail.com', 'kinuthia1234', '2022-10-22 12:26:31', 1, 'C007NT', 1, 'A002GT'),
(8, 'Maya', 'Achieng\'', 22, 'Female', 38122477, '0702667732', 'achieng.maya@gmail.com', 'maya2000maya', '2022-10-22 12:26:31', 1, 'C008NT', 1, 'A003GT'),
(9, 'Anitta', 'Mutesa', 39, 'Female', 36923155, '0755231444', 'anitta.mutesa@gmail.com', 'anitta4321', '2022-10-22 12:26:31', 1, 'C009NT', 1, 'A004GT'),
(10, 'Laura', 'Moria', 27, 'Female', 37965411, '0155223109', 'l.moria@gmail.com', 'lmoria10', '2022-10-22 12:26:31', 1, 'C010NT', 1, 'A005GT'),
(11, 'Bramwel', 'Tum', 21, 'Male', 38976523, '0708223445', 'bramwel@gmail.com', '1234', '2022-10-26 11:28:04', 0, 'C011NT', 1, 'A001GT'),
(12, 'Trevor', 'Waweru', 22, 'Male', 38010689, '0702688832', 'trevor@gmail.com', '1234', '2022-10-26 11:43:54', 0, 'C012NT', 1, 'A007NT');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `experience_id` int(6) NOT NULL,
  `image` longblob NOT NULL,
  `date` date NOT NULL,
  `location` varchar(60) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(10) NOT NULL,
  `client_code` varchar(6) NOT NULL,
  `agent_code` varchar(6) NOT NULL,
  `flight_total` int(10) NOT NULL,
  `accomodation_total` int(10) NOT NULL,
  `transportation_total` int(10) NOT NULL,
  `service_total` int(10) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `issued` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `client_code`, `agent_code`, `flight_total`, `accomodation_total`, `transportation_total`, `service_total`, `service_charge`, `subtotal`, `issued`) VALUES
(1, 'C012NT', '0', 174, 107088, 0, 107262, 10726, 117988, 0),
(2, 'C001NT', '0', 0, 0, 0, 0, 0, 0, 0),
(3, 'C001NT', 'A001GT', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `itineraries`
--

CREATE TABLE `itineraries` (
  `itinerary_id` int(10) NOT NULL,
  `client_code` varchar(6) NOT NULL,
  `e_ticket` longblob NOT NULL,
  `accomodation_voucher` longblob NOT NULL,
  `transport_voucher` longblob NOT NULL,
  `agent_code` varchar(6) NOT NULL,
  `prepared_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(6) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL,
  `delivered_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_handled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_payments`
--

CREATE TABLE `mpesa_payments` (
  `payment_id` int(6) NOT NULL,
  `client_code` varchar(6) NOT NULL,
  `confirmation_code` varchar(10) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `issued` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpesa_payments`
--

INSERT INTO `mpesa_payments` (`payment_id`, `client_code`, `confirmation_code`, `payment_date`, `issued`) VALUES
(1, 'C012NT', 'AXCG91037H', '2022-10-26 11:55:37', 0),
(2, 'C001NT', 'CXH334YDHS', '2022-11-02 10:50:33', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_code` (`agent_code`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `booking_requests`
--
ALTER TABLE `booking_requests`
  ADD PRIMARY KEY (`booking_request_id`);

--
-- Indexes for table `card_information`
--
ALTER TABLE `card_information`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `card_payments`
--
ALTER TABLE `card_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_code` (`client_code`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `itineraries`
--
ALTER TABLE `itineraries`
  ADD PRIMARY KEY (`itinerary_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `mpesa_payments`
--
ALTER TABLE `mpesa_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_requests`
--
ALTER TABLE `booking_requests`
  MODIFY `booking_request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `card_information`
--
ALTER TABLE `card_information`
  MODIFY `info_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `card_payments`
--
ALTER TABLE `card_payments`
  MODIFY `payment_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `experience_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `itineraries`
--
ALTER TABLE `itineraries`
  MODIFY `itinerary_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mpesa_payments`
--
ALTER TABLE `mpesa_payments`
  MODIFY `payment_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
