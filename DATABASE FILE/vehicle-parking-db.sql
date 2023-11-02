-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 11:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle-parking-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Security_Code` int(55) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Security_Code`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Administrator', 'admin', 7854445410, 1100, 'admin@gmail.com', 'd00f5d5217896fb7fd601412cb890830', '2021-01-05 05:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `eid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `caddress`, `email`, `cno`, `dept`, `gender`, `age`, `bdate`, `eid`, `pass`, `cpass`) VALUES
(44, 'safa', 'mankani', 'FGHK', 'safa@gmail.com', 1234567890, 'bca', 'Female', 19, '2002-11-30', '123', 'safa1234', 'safa1234'),
(45, 'zaynii', 'inamdar', 'sakaf roza ', 'zaynii@gmail.com', 7353809935, 'bca', 'Female', 20, '2001-05-10', 'm12345', 'zaynii123', 'zaynii123'),
(46, 'hajra', 'korbu', 'secab clg', 'hajra@gmail.com', 9876789543, 'BCA', 'Female', 21, '2001-02-25', 'Hajra', '12345', 'hajra123'),
(47, 'Tanveer', 'Makandar', 'Azad nagar kolhar', 'sinbycosveer1824@gmail.com', 7338255799, 'bca', 'Male', 22, '2000-10-24', 'M1913841', '1913841', '1913841'),
(48, 'Azeem', 'Maniyar', 'Naubag', 'azeemmaniyar24@gmail.com', 8050486730, 'BCA', 'Male', 22, '2000-10-03', 'M1913822', '708390199Ss', '708390199'),
(50, 'jj', 'jj', 'jhghgf', 'dgf@gmail.com', 8050486730, 'nn', 'Male', 22, '2002-02-03', 'm12345', '1234', '1234'),
(51, 'jj', 'jj', 'hjv', 'kjb', 1234567890, 'mm', 'Male', 22, '2222-02-03', '123', 'safa12345', 'safa12345'),
(52, 'mm', 'mm', 'b', 'kb', 1234567890, 'mm', 'Male', 22, '2022-02-03', '123', 'safa1234', 'safa1234'),
(53, 'q', 'ww', 'cd', 'kk', 1234567899, '22', 'Male', -22, '0000-00-00', '13', '123', '123'),
(54, 'azeem', 'maniyar', 'Naubag', 'azeem@gmail.com', 8050486730, 'MCA', 'Male', 22, '2000-10-03', 'M47', '456789', '123456'),
(55, 'a', 'a', 'sj', 'a@gmail.com', 8050486730, 'a', 'Male', 12, '2222-02-10', 'a', 'aa', 'aa'),
(56, 'Afreen', 'Mujawar', 'Vijayapura', 'jamadar.afreen19@gmail.com', 8197339736, 'CSE', 'Female', 32, '1988-03-19', '512', 'afreen', 'afreen');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(55) NOT NULL,
  `c_website` varchar(55) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `c_name`, `c_email`, `c_website`, `c_address`, `last_update`) VALUES
(1, 'Demo Company', 'vparksystem@company.com', 'codeastro.com', '8169 Geigeer St NW', '2021-06-08 20:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `vcategory`
--

CREATE TABLE `vcategory` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vcategory`
--

INSERT INTO `vcategory` (`ID`, `VehicleCat`, `shortDescription`, `CreationDate`) VALUES
(1, 'Four Wheeler', 'Demo 4W', '2019-07-05 11:06:50'),
(2, 'Two Wheeler', 'Demo 2W', '2019-07-05 11:07:09'),
(7, 'Three wheeler', 'Three wheeler', '2022-08-24 13:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `ID` int(10) NOT NULL,
  `eid` varchar(20) NOT NULL,
  `ParkingNumber` varchar(120) DEFAULT NULL,
  `VehicleCategory` varchar(120) NOT NULL,
  `VehicleCompanyname` varchar(120) DEFAULT NULL,
  `RegistrationNumber` varchar(120) DEFAULT NULL,
  `OwnerName` varchar(120) DEFAULT NULL,
  `OwnerContactNumber` bigint(10) DEFAULT NULL,
  `InTime` timestamp NULL DEFAULT current_timestamp(),
  `OutTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `ParkingCharge` varchar(120) NOT NULL,
  `Remark` mediumtext NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`ID`, `eid`, `ParkingNumber`, `VehicleCategory`, `VehicleCompanyname`, `RegistrationNumber`, `OwnerName`, `OwnerContactNumber`, `InTime`, `OutTime`, `ParkingCharge`, `Remark`, `Status`) VALUES
(25, '0', '35554', 'Two Wheeler', 'Pulsar', 'KA 28  A 1234', 'Azeem', 8050486730, '2022-07-14 13:15:53', '2022-07-14 13:16:25', '200', 'Out', 'Out'),
(26, '0', '18706', 'Two Wheeler', 'Splendor', 'KA 28 S 1234', 'Azeem', 8050486730, '2022-07-14 13:21:44', '2022-07-14 13:22:08', '500', 'Good', 'Out'),
(27, '0', '10465', 'Two Wheeler', 'k', 'k', 'a', 8050486730, '2022-07-14 13:22:35', '2022-07-14 13:22:53', '2000', 'a', 'Out'),
(28, '0', '45254', 'Four Wheeler', 'm', 'k', 'q', 8050486730, '2022-07-14 13:31:18', '2022-07-14 13:31:43', '1000', 'out', 'Out'),
(29, '0', '30731', 'Four Wheeler', 'd', 'm', 'a', 8050486710, '2022-07-14 13:32:24', '2022-08-04 05:10:10', '3200', 'mm', 'Out'),
(30, '0', '14957', 'Two Wheeler', 'k', 'k', 'm', 8050486730, '2022-07-15 04:48:34', '2022-07-15 04:48:53', '4500', 'Ko', 'Out'),
(31, 'Hajra', '13525', 'Four Wheeler', 'Rolls Royce', 'KA 28 SB 1920', 'Sabi', 9876789543, '2022-07-16 08:49:17', '2022-07-26 10:08:16', '200', '2 hour', 'Out'),
(32, '0', '76785', '0', '55', '55', '55', 222222, '2022-08-24 13:09:26', NULL, '', '', ''),
(33, '0', '29731', '0', '666', '55', '6', 6, '2022-08-24 13:09:46', '2023-09-16 10:36:05', '500', 'k', 'Out'),
(34, '13', '69114', '0', 'w', 'dd', 'f', 1234567899, '2022-08-25 06:04:52', '2022-08-25 06:05:23', '22', 'mm', 'Out'),
(35, '0', '19671', 'Two Wheeler', 'MX', 'KA 28 y 5347', 'Musaddique', 6362251632, '2023-09-08 04:07:53', '2023-09-08 04:08:32', '150', 'koo', 'Out'),
(36, '512', '95419', 'Two Wheeler', 'Honda', 'asa-1010', 'Afreen Mujawar', 8197339736, '2023-09-16 06:55:54', '2023-09-16 10:37:20', '500', 'kk', 'Out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vcategory`
--
ALTER TABLE `vcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vcategory`
--
ALTER TABLE `vcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
