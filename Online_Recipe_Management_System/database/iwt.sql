-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:25 PM
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
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `addedit`
--

CREATE TABLE `addedit` (
  `Adid` int(11) NOT NULL,
  `rel` varchar(100) NOT NULL,
  `number` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `deta` varchar(100) NOT NULL,
  `dates` date NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addedit`
--

INSERT INTO `addedit` (`Adid`, `rel`, `number`, `mail`, `deta`, `dates`, `link`) VALUES
(1, 'foods', 2147483647, 'ayeshekanayaka99@gmail.com', '\"Welegedara\",Aluth Galkiriyagama\r\nGalkiriyagama', '2022-05-21', '../Images/WhatsApp Image 2022-05-20 at 6.39.01 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `add_recipe`
--

CREATE TABLE `add_recipe` (
  `Recipe_ID` int(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Time` varchar(25) NOT NULL,
  `Ingredients` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Images` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_recipe`
--

INSERT INTO `add_recipe` (`Recipe_ID`, `category`, `user_name`, `Title`, `Time`, `Ingredients`, `Description`, `Images`) VALUES
(1, 'Fish', 'Sandaru', 'Fish curry', '30 min', 'Fish\r\nWater\r\nGoraka\r\nKarapincha\r\nMiris', 'Mixed all and Cooked.', 0x705572684164722e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `adminacc`
--

CREATE TABLE `adminacc` (
  `ID` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `NIC` char(12) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Pword` char(8) NOT NULL,
  `Link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminacc`
--

INSERT INTO `adminacc` (`ID`, `Admin_Name`, `NIC`, `UserName`, `Pword`, `Link`) VALUES
(38, 'Sandaru', '199833226584', 'Admin001', '1234', '../../Images/1653232236-images.png');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appID` int(20) NOT NULL,
  `appDescription` varchar(250) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appID`, `appDescription`, `address`, `contact`, `email`, `date`, `time`) VALUES
(55, 'Appo10', 'czxc', 544, 'max@gmail.com', '2022-05-26', '18:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `Phone` char(11) NOT NULL,
  `Subject` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `name`, `Email`, `Phone`, `Subject`) VALUES
(86, 'Sandaru', 'sandaru@gmail.com', '0771344784', 'About password');

-- --------------------------------------------------------

--
-- Table structure for table `nutriacc`
--

CREATE TABLE `nutriacc` (
  `ID` int(11) NOT NULL,
  `Nutri_Name` varchar(100) NOT NULL,
  `NIC` char(12) NOT NULL,
  `UserName` char(20) NOT NULL,
  `Pword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutriacc`
--

INSERT INTO `nutriacc` (`ID`, `Nutri_Name`, `NIC`, `UserName`, `Pword`) VALUES
(41, 'Gayan', '199922336597', 'NUT001', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionist`
--

CREATE TABLE `nutritionist` (
  `nutritionistID` int(11) NOT NULL,
  `nutritionistname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `officeracc`
--

CREATE TABLE `officeracc` (
  `ID` int(11) NOT NULL,
  `Officer_Name` varchar(50) NOT NULL,
  `NIC` char(12) NOT NULL,
  `UserName` char(20) NOT NULL,
  `Pword` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officeracc`
--

INSERT INTO `officeracc` (`ID`, `Officer_Name`, `NIC`, `UserName`, `Pword`) VALUES
(17, 'Ayesh', '199988663254', 'OFF001', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Category` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `UserName`, `Category`) VALUES
(62, 'sandaru', 'Fish'),
(63, 'sandaru', 'Meat'),
(64, 'sandaru', 'Vegetable'),
(65, 'sandaru', 'Soup');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Profile` varchar(1024) NOT NULL,
  `AllCat` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Fname`, `Lname`, `FullName`, `Address`, `Tel`, `Email`, `Password`, `Profile`, `AllCat`) VALUES
(15, 'sandaka', 'Mihikalpa', 'sandaka jayathilaka', 'Malabe,Colombo , Colombo , Western , Srilanka', '+941124856', 'sandaka@gmail.com', '1234', '../../images/UserProfileIMAGES/uploads/images.png', 'Chinese Italian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addedit`
--
ALTER TABLE `addedit`
  ADD PRIMARY KEY (`Adid`);

--
-- Indexes for table `add_recipe`
--
ALTER TABLE `add_recipe`
  ADD PRIMARY KEY (`Recipe_ID`);

--
-- Indexes for table `adminacc`
--
ALTER TABLE `adminacc`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nutriacc`
--
ALTER TABLE `nutriacc`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `officeracc`
--
ALTER TABLE `officeracc`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_recipe`
--
ALTER TABLE `add_recipe`
  MODIFY `Recipe_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminacc`
--
ALTER TABLE `adminacc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `nutriacc`
--
ALTER TABLE `nutriacc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `officeracc`
--
ALTER TABLE `officeracc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
