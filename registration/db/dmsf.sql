-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 08:05 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`, `isActive`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consultant_tbl`
--

CREATE TABLE `consultant_tbl` (
  `id` int(11) NOT NULL,
  `consultantName` varchar(100) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `personalId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultant_tbl`
--

INSERT INTO `consultant_tbl` (`id`, `consultantName`, `remark`, `personalId`, `isActive`) VALUES
(1, 'taa', 'dfs', 1, 1),
(2, 'Tata', 'Good', 1, 1),
(3, 'Test', 'Good', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `educational_tbl`
--

CREATE TABLE `educational_tbl` (
  `id` int(11) NOT NULL,
  `tenthPercentage` varchar(25) NOT NULL,
  `tenthSchoolName` varchar(100) NOT NULL,
  `tenthBoard` varchar(100) NOT NULL,
  `tenthSchoolAddress` varchar(150) NOT NULL,
  `tenthDistrict` varchar(50) NOT NULL,
  `tenthState` varchar(50) NOT NULL,
  `tenthCountry` varchar(50) NOT NULL,
  `twelvethPercentage` varchar(20) NOT NULL,
  `twelvethSchoolName` varchar(100) NOT NULL,
  `twelvethBoard` varchar(100) NOT NULL,
  `twelvethSchoolAddress` varchar(150) NOT NULL,
  `twelvethDistrict` varchar(50) NOT NULL,
  `twelvethState` varchar(50) NOT NULL,
  `twelvethCountry` varchar(50) NOT NULL,
  `neetScore` varchar(20) NOT NULL,
  `personalId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_tbl`
--

INSERT INTO `educational_tbl` (`id`, `tenthPercentage`, `tenthSchoolName`, `tenthBoard`, `tenthSchoolAddress`, `tenthDistrict`, `tenthState`, `tenthCountry`, `twelvethPercentage`, `twelvethSchoolName`, `twelvethBoard`, `twelvethSchoolAddress`, `twelvethDistrict`, `twelvethState`, `twelvethCountry`, `neetScore`, `personalId`, `isActive`) VALUES
(1, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', 2, 1),
(2, '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', 3, 1),
(3, 'sdf', 'jg', 'jk', 'hjk', 'hjk', 'hk', 'hjk', 'hjk', 'hjk', 'hjk', 'dfg', 'hjk', 'hjk', 'dg', 'gdf', 4, 1),
(4, 'sfg', 'adsd', 'af', 'gr', 'sf', 'af', 'hf', 'sdf', 'sf', 'dgh', 'af', 'af', 'afs', 'af', 'af', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_tbl`
--

CREATE TABLE `hostel_tbl` (
  `id` int(11) NOT NULL,
  `hostelOrHome` varchar(50) NOT NULL,
  `hostelName` varchar(50) NOT NULL,
  `hRoomNumber` varchar(50) NOT NULL,
  `hWardenNumber` varchar(50) NOT NULL,
  `roommateName` varchar(50) NOT NULL,
  `roommateEmail` varchar(50) NOT NULL,
  `roommatePhone` varchar(50) NOT NULL,
  `philippinesAddress` varchar(150) NOT NULL,
  `houseOwnerName` varchar(50) NOT NULL,
  `howseOwnerEmail` varchar(50) NOT NULL,
  `houseOwnerPhone` varchar(50) NOT NULL,
  `personalId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_tbl`
--

INSERT INTO `hostel_tbl` (`id`, `hostelOrHome`, `hostelName`, `hRoomNumber`, `hWardenNumber`, `roommateName`, `roommateEmail`, `roommatePhone`, `philippinesAddress`, `houseOwnerName`, `howseOwnerEmail`, `houseOwnerPhone`, `personalId`, `isActive`) VALUES
(1, 'yes', 'Rose', ' 80', 'Hostel Warden Name', 'amanda', 'amanda@gmail.com', '+91 9900335577', '', '', '', '', 1, 1),
(2, 'null', '', '', '', '', '', '', '', '', '', '', 2, 1),
(3, 'yes', 'Happy Home', '42', '43', '44', '45', '46', '', '', '', '', 3, 1),
(4, 'yes', 'Rose', 'sd', 'hjk', 'sfbb', 'hk', 'dfgh', '', '', '', '', 4, 1),
(5, 'yes', 'Rose', 'asd', 'asd', 'asd', 'sfg', 'asd', '', '', '', '', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `information_tbl`
--

CREATE TABLE `information_tbl` (
  `id` int(11) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `fatherMobile` varchar(50) NOT NULL,
  `fatherEmail` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `motherMobile` varchar(50) NOT NULL,
  `motherEmail` varchar(50) NOT NULL,
  `fatherOccupation` varchar(50) NOT NULL,
  `motherOccupation` varchar(50) NOT NULL,
  `temporaryAddress` varchar(150) NOT NULL,
  `tCountry` varchar(50) NOT NULL,
  `tState` varchar(50) NOT NULL,
  `tDistrict` varchar(50) NOT NULL,
  `tCity` varchar(50) NOT NULL,
  `tPincode` varchar(20) NOT NULL,
  `permanentAddress` varchar(150) NOT NULL,
  `pCountry` varchar(50) NOT NULL,
  `pState` varchar(50) NOT NULL,
  `pDistrict` varchar(50) NOT NULL,
  `pCity` varchar(50) NOT NULL,
  `pPincode` varchar(20) NOT NULL,
  `passportNumber` varchar(50) NOT NULL,
  `eContactPerson` varchar(50) NOT NULL,
  `dateOfIssue` varchar(50) NOT NULL,
  `placeOfIssue` varchar(50) NOT NULL,
  `dateOfExpiry` varchar(50) NOT NULL,
  `passportFirstPage` varchar(100) NOT NULL,
  `passportLastPage` varchar(100) NOT NULL,
  `visaExpiryDate` varchar(50) NOT NULL,
  `personalID` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information_tbl`
--

INSERT INTO `information_tbl` (`id`, `fatherName`, `fatherMobile`, `fatherEmail`, `motherName`, `motherMobile`, `motherEmail`, `fatherOccupation`, `motherOccupation`, `temporaryAddress`, `tCountry`, `tState`, `tDistrict`, `tCity`, `tPincode`, `permanentAddress`, `pCountry`, `pState`, `pDistrict`, `pCity`, `pPincode`, `passportNumber`, `eContactPerson`, `dateOfIssue`, `placeOfIssue`, `dateOfExpiry`, `passportFirstPage`, `passportLastPage`, `visaExpiryDate`, `personalID`, `isActive`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2, 1),
(2, '12', '1313131313', '14@gmail.com', '15', '1616161616', '17@gmail.com', '18', '19', '20', 'Afghanistan', '22', '23', '24', '25', '26', 'Åland Islands', '28', '', '30', '31', '32', '33', '34', '35', '36', 'Passport-1.jpg', '2.jpg', '39', 3, 1),
(3, 'fa', '7894564564', 'fa@gmail.com', 'mo', '9874561231', 'm@gmail.com', 'fo', 'mo', '3', 'Albania', 's', 'dsd', 'asd', 'asd', 'asd', 'Åland Islands', 'asd', '', 'asd', 'asd', 'adf', 'adf', 'sdf', 'sdf', 'fsd', 'Passport-1.jpg', '2.jpg', 'sdf', 4, 1),
(4, 'asdas', '7894564561', 'as@gmail.com', 'asd', '7894564561', 'as@gmail.com', 'sad', 'asd', 'fsf', 'Algeria', 'sd', 'sgd', 'sdg', 'sdg', 'ht', 'Brunei Darussalam', 'dfg', '', 'sdfv', 'ujg', '4t45', 'dfg43', 'dfg3', 'g5tt', '3tg', 'Passport-1sdfsdf.jpg', 'sdfdf.jpg', 'sdfgds', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_tbl`
--

CREATE TABLE `personal_tbl` (
  `id` int(11) NOT NULL,
  `regId` varchar(15) NOT NULL,
  `studentIdNumber` varchar(50) NOT NULL,
  `philippinesPhone` varchar(15) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `telegramNumber` varchar(50) NOT NULL,
  `whatsappNumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `approval` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_tbl`
--

INSERT INTO `personal_tbl` (`id`, `regId`, `studentIdNumber`, `philippinesPhone`, `fName`, `mName`, `lName`, `telegramNumber`, `whatsappNumber`, `email`, `foto`, `bloodGroup`, `nationality`, `approval`, `isActive`) VALUES
(1, 'DMSF0001', '001', '', 'Sakthi', '', 'Varma', '987544315', '98745123850', 'Sakthi@gmail.com', 'Caution-Angry-Gamer_www.FullHDWpp..jpg', 'A+', 'bosnian', 0, 0),
(2, 'DMSF0002', '', '', '', ' ', '', '', '', '', '', '', '', 0, 0),
(3, 'DMSF0003', '1', '1231231231', '3', '4', '5', '6', '7', '8@gmail.com', 'user.png', 'A+', 'afghan', 1, 1),
(4, 'DMSF5537', 's19', '9685741232', 'sakthi', '  ', 'varma', '243', '23423', 'sakthi@gmail.com', '334.jpg', 'B-', 'american', 0, 1),
(5, 'DMSF9551', 'asd', '6450234044', '234', '  ', '4545', '2343', '345', '4324@gmail.com', '12e.jpeg', 'B-', 'algerian', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `remark_tbl`
--

CREATE TABLE `remark_tbl` (
  `id` int(11) NOT NULL,
  `remark` varchar(250) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `personalId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remark_tbl`
--

INSERT INTO `remark_tbl` (`id`, `remark`, `datee`, `staff`, `personalId`, `isActive`) VALUES
(1, 'Good', '2021-01-21', 'Admin', 3, 1),
(2, 'Very Bad', '2021-01-21', 'Admin', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studied_tbl`
--

CREATE TABLE `studied_tbl` (
  `id` int(11) NOT NULL,
  `currentBatch` varchar(50) NOT NULL,
  `studied` varchar(50) NOT NULL,
  `yearOfStartBS` varchar(50) NOT NULL,
  `monthBS` varchar(50) NOT NULL,
  `yearOfStartMD` varchar(50) NOT NULL,
  `monthMD` varchar(50) NOT NULL,
  `personalID` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studied_tbl`
--

INSERT INTO `studied_tbl` (`id`, `currentBatch`, `studied`, `yearOfStartBS`, `monthBS`, `yearOfStartMD`, `monthMD`, `personalID`, `isActive`) VALUES
(1, 'currentBatch', 'BS-MD (BS only Davao)', '2021', 'Jan', '', 'March', 1, 1),
(2, 'currentBatch', '', 'Year', '', '', '', 2, 1),
(3, 'currentBatch', 'BS-MD (BS Pune + Davao)', '2018', 'Feb', '2019', 'March', 3, 1),
(4, 'IMD - 19', 'BS-MD (BS Pune + Davao)', '2018', 'Apr', '2018', 'Apr', 4, 1),
(5, 'IMD - 17', 'Direct to Philippines without BS', '2018', 'Apr', '2018', 'Apr', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultant_tbl`
--
ALTER TABLE `consultant_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_tbl`
--
ALTER TABLE `educational_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel_tbl`
--
ALTER TABLE `hostel_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_tbl`
--
ALTER TABLE `information_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_tbl`
--
ALTER TABLE `personal_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remark_tbl`
--
ALTER TABLE `remark_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studied_tbl`
--
ALTER TABLE `studied_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultant_tbl`
--
ALTER TABLE `consultant_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educational_tbl`
--
ALTER TABLE `educational_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hostel_tbl`
--
ALTER TABLE `hostel_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information_tbl`
--
ALTER TABLE `information_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_tbl`
--
ALTER TABLE `personal_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `remark_tbl`
--
ALTER TABLE `remark_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studied_tbl`
--
ALTER TABLE `studied_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
