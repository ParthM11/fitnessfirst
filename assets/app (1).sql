-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `acID` int(11) NOT NULL,
  `acName` varchar(255) NOT NULL,
  `desp` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`acID`, `acName`, `desp`) VALUES
(2, 'test2', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceID` int(11) NOT NULL,
  `date` date NOT NULL,
  `stdID` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `in_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL,
  `desp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`, `desp`) VALUES
(1, 'demo', 'demo'),
(2, 'lo', 'lo'),
(5, 'lol', 'lol'),
(6, 'demo', 'lo'),
(20, 'nwe', 'new'),
(21, 'ajax', 'ajax'),
(22, 'lodo', 'asdasdada'),
(23, 'lodo', 'le moaaaaa le'),
(24, 'lodo', 'lodo'),
(25, 'lodo', '12223');

-- --------------------------------------------------------

--
-- Table structure for table `creds`
--

CREATE TABLE `creds` (
  `credID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roleID` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creds`
--

INSERT INTO `creds` (`credID`, `userName`, `password`, `roleID`, `userEmail`, `phone`, `status`, `locationID`) VALUES
(1, 'kevin', 'kevin', 1, '', 0, 0, 0),
(2, 'keyur', 'keyur', 1, '', 0, 0, 0),
(3, 'LOL', 'LOL', 1, '', 0, 0, 0),
(4, 'parth', 'parth', 4, 'parth@gmail.com', 1234567890, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `dayID` int(11) NOT NULL,
  `days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`dayID`, `days`) VALUES
(1, 'Monday - Wednesday - Friday'),
(2, 'Tuesday - Thursday - Saturday'),
(3, 'Everyday'),
(4, 'Weekends'),
(5, 'Monday'),
(6, 'Tuesday'),
(7, 'Wednesday'),
(8, 'Thursday'),
(9, 'Friday'),
(10, 'Saturday'),
(11, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `expcatID` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `amnt` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `payamnt` int(11) NOT NULL,
  `paydate` date NOT NULL,
  `paycat` int(11) NOT NULL,
  `payremark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expensecat`
--

CREATE TABLE `expensecat` (
  `expcatID` int(11) NOT NULL,
  `expcat` int(11) NOT NULL,
  `expsubcat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `fupID` int(11) NOT NULL,
  `stdID` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`fupID`, `stdID`, `date`, `type`, `task`, `priority`) VALUES
(1, 0, '0000-00-00', 1, 'asdfadsf', 'High'),
(2, 0, '2023-01-11', 1, 'dfadf', 'High'),
(3, 0, '2023-01-19', 1, 'asdfadsf', 'Med'),
(4, 0, '2023-01-20', 1, 'asdfasd', 'High'),
(5, 0, '2023-01-19', 1, 'asdfasd', 'Low'),
(6, 0, '2023-01-19', 1, 'asdfasd', 'High'),
(7, 0, '2023-01-21', 1, 'asdfadsf', 'Low'),
(8, 0, '2023-01-20', 1, 'asdfasd', 'High'),
(9, 20, '2023-02-07', 1, 'ddfaf', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `followuptype`
--

CREATE TABLE `followuptype` (
  `fuptypeID` int(11) NOT NULL,
  `followType` varchar(255) NOT NULL,
  `desp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followuptype`
--

INSERT INTO `followuptype` (`fuptypeID`, `followType`, `desp`) VALUES
(1, 'testFollow', 'asap');

-- --------------------------------------------------------

--
-- Table structure for table `hsnnumber`
--

CREATE TABLE `hsnnumber` (
  `HSNID` int(11) NOT NULL,
  `HSNcode` varchar(255) NOT NULL,
  `desp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hsnnumber`
--

INSERT INTO `hsnnumber` (`HSNID`, `HSNcode`, `desp`) VALUES
(1, '123456', 'trial'),
(2, '3265983526', 'trial'),
(3, '6656556', 'asdasdada'),
(4, '6656556', 'asdasdada'),
(5, '6656556', 'asdasdada'),
(6, '6656556asd', 'asdasdada'),
(7, '998', 'opp'),
(8, '98985', 'lododo'),
(9, '9966332132', 'jkf');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationID` int(11) NOT NULL,
  `locationName` varchar(50) NOT NULL,
  `addline1` varchar(300) NOT NULL,
  `addline2` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `printName` varchar(255) NOT NULL,
  `locationEmail` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationID`, `locationName`, `addline1`, `addline2`, `city`, `zipcode`, `state`, `country`, `mobile`, `printName`, `locationEmail`, `active`) VALUES
(1, 'Vesu', 'B-VIP Plaza', 'vesu Road', 'surat', '395007', 'Gujarat', 'India', '9925609707', '', 'vesu@gmail.com', 0),
(2, 'Katargam', '', '', '', '', '', '', '', '', '0', 0),
(3, 'Rustompura', '', '', '', '', '', '', '', '', '0', 0),
(7, 'Adajan', '46 Miramar crescent', '46 Miramar crescent', 'surat', '', 'Gujarat', 'India', '', 'Adajan Branch', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `memberpackage`
--

CREATE TABLE `memberpackage` (
  `mempackID` int(11) NOT NULL,
  `planName` varchar(50) NOT NULL,
  `acID` int(11) NOT NULL,
  `programmeID` int(11) NOT NULL,
  `timeID` int(11) NOT NULL,
  `desp` varchar(255) NOT NULL,
  `sessions` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberpackage`
--

INSERT INTO `memberpackage` (`mempackID`, `planName`, `acID`, `programmeID`, `timeID`, `desp`, `sessions`, `price`) VALUES
(8, 'etste1', 2, 2, 1, 'sdfas', '21', 2000),
(9, 'forlop', 2, 3, 2, '2', '40', 100);

-- --------------------------------------------------------

--
-- Table structure for table `mempackdays`
--

CREATE TABLE `mempackdays` (
  `mempackpdayID` int(11) NOT NULL,
  `mempackID` int(11) NOT NULL,
  `dayID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mempackdays`
--

INSERT INTO `mempackdays` (`mempackpdayID`, `mempackID`, `dayID`) VALUES
(1, 9, 11),
(2, 9, 5),
(3, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `permissionmanager`
--

CREATE TABLE `permissionmanager` (
  `perMngID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `perID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissionmanager`
--

INSERT INTO `permissionmanager` (`perMngID`, `roleID`, `perID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 2, 1),
(11, 2, 8),
(12, 2, 9),
(15, 1, 11),
(16, 1, 12),
(17, 1, 13),
(18, 1, 14),
(19, 1, 10),
(20, 1, 16),
(21, 1, 17),
(22, 1, 18),
(23, 1, 19),
(24, 1, 20),
(25, 1, 21),
(33, 4, 10),
(34, 4, 12),
(35, 4, 13),
(36, 4, 14),
(37, 4, 15),
(38, 4, 17),
(39, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `permisson`
--

CREATE TABLE `permisson` (
  `perID` int(11) NOT NULL,
  `perName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permisson`
--

INSERT INTO `permisson` (`perID`, `perName`) VALUES
(1, 'Employee Attendance'),
(2, 'Emlpoyee Master	'),
(3, 'Reports	'),
(4, 'Salary'),
(7, 'Masters'),
(8, 'Utility'),
(9, 'Misc'),
(10, 'Student Attendence'),
(11, 'User'),
(12, 'Inquiry'),
(13, 'Trial'),
(14, 'Admission'),
(15, 'Followup'),
(16, 'Products'),
(17, 'Members'),
(18, 'Membership Packages'),
(19, 'Purchase'),
(20, 'Sales'),
(21, 'Expenses');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodID` int(11) NOT NULL,
  `prodName` varchar(255) NOT NULL,
  `HSNcode` varchar(255) NOT NULL,
  `businessLocationID` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `subCatID` int(11) NOT NULL,
  `desp` varchar(255) NOT NULL,
  `prodImg` varchar(350) NOT NULL,
  `sellingPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodID`, `prodName`, `HSNcode`, `businessLocationID`, `catID`, `subCatID`, `desp`, `prodImg`, `sellingPrice`) VALUES
(2, 'test master', '12313', 4, 5, 0, '', '', 100),
(3, 'test master', '6656556', 4, 20, 19, 'lodo', '', 200),
(4, 'Test live', '6656556', 3, 20, 0, 'logogogo', '', 300),
(5, 'Test live', '6656556', 3, 6, 0, 'asdasdada', '', 400),
(6, 'test master', '6656556', 2, 5, 0, 'logogogo', '', 500);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `programID` int(11) NOT NULL,
  `programName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`programID`, `programName`) VALUES
(1, 'Little Tiger'),
(2, 'Taekwondo'),
(3, 'MMA'),
(4, 'Kick Boxing'),
(5, 'Selg-Defence'),
(6, 'Fitness');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `refID` int(11) NOT NULL,
  `reference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`refID`, `reference`) VALUES
(1, 'Friends'),
(2, 'Social Media'),
(3, 'Website'),
(4, 'Stall'),
(5, 'Discount Coupon'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleID` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `role`) VALUES
(1, 'admin'),
(2, 'HQ'),
(4, 'Center Head');

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `id` int(255) NOT NULL,
  `date` date DEFAULT NULL,
  `locationID` int(20) NOT NULL,
  `stdDetailID` int(20) NOT NULL,
  `sHeight` int(20) NOT NULL,
  `sWeight` int(20) NOT NULL,
  `sBMI` int(20) NOT NULL,
  `sArms` int(20) NOT NULL,
  `sStomach` int(20) NOT NULL,
  `sWaist` int(20) NOT NULL,
  `sThighs` int(20) NOT NULL,
  `sAerobic` int(20) NOT NULL,
  `sAgilityT` int(20) NOT NULL,
  `sAgilityQ` int(20) NOT NULL,
  `sBalance` int(20) NOT NULL,
  `sStandR` int(20) NOT NULL,
  `sStandL` int(20) NOT NULL,
  `sBosuStandR` int(20) NOT NULL,
  `sBosuStandL` int(20) NOT NULL,
  `sJumpR` int(20) NOT NULL,
  `sJumpL` int(20) NOT NULL,
  `sSitReach` int(20) NOT NULL,
  `sSplit` int(20) NOT NULL,
  `sMinSquat` int(20) NOT NULL,
  `sMinPushup` int(20) NOT NULL,
  `sMinSitup` int(20) NOT NULL,
  `sStandBall` int(20) NOT NULL,
  `sPlank` int(20) NOT NULL,
  `sMinPunch` int(20) NOT NULL,
  `sVerJump` int(20) NOT NULL,
  `sShutRun` int(20) NOT NULL,
  `sBasKick` int(20) NOT NULL,
  `sAdvKick` int(20) NOT NULL,
  `sPunches` int(20) NOT NULL,
  `sBlock` int(20) NOT NULL,
  `sSelfDef` int(20) NOT NULL,
  `sBreaking` int(20) NOT NULL,
  `sTeckFight` int(20) NOT NULL,
  `sPoomsae` int(20) NOT NULL,
  `sFearFight` int(20) NOT NULL,
  `sDicipline` int(20) NOT NULL,
  `sCommunication` int(20) NOT NULL,
  `sConfidence` int(20) NOT NULL,
  `sEnergyLvl` int(20) NOT NULL,
  `sOverImp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`id`, `date`, `locationID`, `stdDetailID`, `sHeight`, `sWeight`, `sBMI`, `sArms`, `sStomach`, `sWaist`, `sThighs`, `sAerobic`, `sAgilityT`, `sAgilityQ`, `sBalance`, `sStandR`, `sStandL`, `sBosuStandR`, `sBosuStandL`, `sJumpR`, `sJumpL`, `sSitReach`, `sSplit`, `sMinSquat`, `sMinPushup`, `sMinSitup`, `sStandBall`, `sPlank`, `sMinPunch`, `sVerJump`, `sShutRun`, `sBasKick`, `sAdvKick`, `sPunches`, `sBlock`, `sSelfDef`, `sBreaking`, `sTeckFight`, `sPoomsae`, `sFearFight`, `sDicipline`, `sCommunication`, `sConfidence`, `sEnergyLvl`, `sOverImp`) VALUES
(1, NULL, 4, 18, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, NULL, 0, 0, 6, 565, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 6, 565, 65, 65, 65, 65, 6, 56, 56, 5, 65, 65, 65, 65, 6, 56, 5, 65, 65, 65, 65, 65, 65, 65, 65, 65),
(3, '2023-02-01', 2, 17, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 101, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(4, '2023-02-06', 2, 17, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusID` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusID`, `status`) VALUES
(1, 'Joined'),
(2, 'Not Joined'),
(3, 'Not Decide');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stdID` int(11) NOT NULL,
  `stdfName` varchar(100) NOT NULL,
  `stdlName` varchar(100) NOT NULL,
  `stdAge` int(3) NOT NULL,
  `stdGender` varchar(7) NOT NULL,
  `stdContact` varchar(10) NOT NULL,
  `stdEmailID` varchar(50) NOT NULL,
  `school` varchar(200) NOT NULL,
  `locationID` int(11) NOT NULL,
  `refID` int(11) NOT NULL,
  `programInterestedIN` int(11) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdID`, `stdfName`, `stdlName`, `stdAge`, `stdGender`, `stdContact`, `stdEmailID`, `school`, `locationID`, `refID`, `programInterestedIN`, `resume`, `priority`, `remarks`) VALUES
(12, 'Parth', 'Maisuriya', 29, 'Male', '0963831303', 'reloadedmachine@gmail.com', 'opkpok', 3, 3, 3, '', 'Low', 'sada'),
(14, 'Parth', 'Maisuriy', 22, 'option1', '', 'asdka@gmail.com', '', 4, 0, 4, '', 'Med', 'asd'),
(15, 'Parth', 'hub', 20, 'Male', '9638313031', 'reloadedmachine@gmail.com', 'asdasdasd', 3, 4, 0, '', 'High', 'qwe'),
(16, 'Parth', 'hub', 20, 'Male', '9638313031', 'reloadedmachine@gmail.com', 'asdasdasd', 3, 4, 0, '', 'Low', 'qwe'),
(17, 'new', 'trail', 20, 'Male', '9265337904', 'reloadedmachine@gmail.com', 'TP college', 2, 2, 0, '', 'Med', 'sdfasdf'),
(18, 'Mahesg', 'asda', 29, 'Male', '7874836363', 'machine@mail.com', 'jbkb', 1, 4, 0, '', 'Low', 'asdasd'),
(19, 'Mahesg', 'asda', 29, 'Male', '7874836363', 'machine@mail.com', 'jbkb', 1, 4, 0, '', 'High', 'asdasd'),
(20, 'keyur', 'thakkar', 21, 'Male', '1234345634', 'kevin11@gmail.com', 'SRKI', 1, 2, 2, '', 'High', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `stdDetailID` int(11) NOT NULL,
  `mempackID` int(11) NOT NULL,
  `stdID` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `fatherName` varchar(250) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `fatherContact` int(11) NOT NULL,
  `motherContact` int(11) NOT NULL,
  `fatherOccupation` varchar(255) NOT NULL,
  `motherOccupation` varchar(255) NOT NULL,
  `emergencyContactName` varchar(255) NOT NULL,
  `emergencyContactNum` varchar(10) NOT NULL,
  `dayID` int(11) NOT NULL,
  `timeID` int(11) NOT NULL,
  `addressID` int(11) NOT NULL,
  `programID` int(11) NOT NULL,
  `transportID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`stdDetailID`, `mempackID`, `stdID`, `DOB`, `fatherName`, `motherName`, `fatherContact`, `motherContact`, `fatherOccupation`, `motherOccupation`, `emergencyContactName`, `emergencyContactNum`, `dayID`, `timeID`, `addressID`, `programID`, `transportID`) VALUES
(20, 9, 17, '2023-01-13', 'dad', 'mom', 1234567890, 987654321, 'kn', 'kn', 'pata nai', '2223334444', 1, 3, 0, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subCatID` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `subCatName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subCatID`, `catID`, `subCatName`) VALUES
(17, 20, 'lol1'),
(18, 20, 'lol2'),
(19, 20, 'lol3'),
(20, 21, 'test'),
(21, 21, 'is'),
(22, 21, 'good'),
(23, 21, 'now'),
(24, 22, 'lasan '),
(25, 23, 'lasan '),
(26, 24, ''),
(27, 25, '');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `taxID` int(11) NOT NULL,
  `CGST` float NOT NULL,
  `SGST` float NOT NULL,
  `taxName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`taxID`, `CGST`, `SGST`, `taxName`) VALUES
(1, 7.5, 2.5, 'trial'),
(2, 2.5, 2.5, 'gst 5'),
(3, 2, 3, 'gst 5'),
(4, 2, 2, 'gst 5'),
(5, 222, 222, 'gst 5'),
(6, 222, 444, 'gst 5');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `timeID` int(11) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`timeID`, `time`) VALUES
(1, '7-8 am'),
(2, '4-5 pm'),
(3, '5-6 pm'),
(4, '6-7 pm'),
(5, '7-8 pm'),
(6, '8-9 pm'),
(7, '5-6.30 pm'),
(8, '6.30-8 pm'),
(9, '8-9.30 pm'),
(10, 'weekends');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `transportID` int(11) NOT NULL,
  `transportMeans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transportID`, `transportMeans`) VALUES
(1, 'Personal'),
(2, 'Auto'),
(3, 'Van');

-- --------------------------------------------------------

--
-- Table structure for table `trial`
--

CREATE TABLE `trial` (
  `trailID` int(11) NOT NULL,
  `stdID` int(11) NOT NULL,
  `trainer` varchar(11) NOT NULL,
  `trial1` int(11) NOT NULL,
  `trial2` int(11) NOT NULL,
  `trial3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trial`
--

INSERT INTO `trial` (`trailID`, `stdID`, `trainer`, `trial1`, `trial2`, `trial3`) VALUES
(1, 20, 'sdff', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`acID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `creds`
--
ALTER TABLE `creds`
  ADD PRIMARY KEY (`credID`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`dayID`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expID`);

--
-- Indexes for table `expensecat`
--
ALTER TABLE `expensecat`
  ADD PRIMARY KEY (`expcatID`);

--
-- Indexes for table `followup`
--
ALTER TABLE `followup`
  ADD PRIMARY KEY (`fupID`);

--
-- Indexes for table `followuptype`
--
ALTER TABLE `followuptype`
  ADD PRIMARY KEY (`fuptypeID`);

--
-- Indexes for table `hsnnumber`
--
ALTER TABLE `hsnnumber`
  ADD PRIMARY KEY (`HSNID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `memberpackage`
--
ALTER TABLE `memberpackage`
  ADD PRIMARY KEY (`mempackID`);

--
-- Indexes for table `mempackdays`
--
ALTER TABLE `mempackdays`
  ADD PRIMARY KEY (`mempackpdayID`);

--
-- Indexes for table `permissionmanager`
--
ALTER TABLE `permissionmanager`
  ADD PRIMARY KEY (`perMngID`);

--
-- Indexes for table `permisson`
--
ALTER TABLE `permisson`
  ADD PRIMARY KEY (`perID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`programID`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`refID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_location` (`locationID`),
  ADD KEY `fk_student` (`stdDetailID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdID`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`stdDetailID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subCatID`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`taxID`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`timeID`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transportID`);

--
-- Indexes for table `trial`
--
ALTER TABLE `trial`
  ADD PRIMARY KEY (`trailID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `acID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendanceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `creds`
--
ALTER TABLE `creds`
  MODIFY `credID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `dayID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expensecat`
--
ALTER TABLE `expensecat`
  MODIFY `expcatID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followup`
--
ALTER TABLE `followup`
  MODIFY `fupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `followuptype`
--
ALTER TABLE `followuptype`
  MODIFY `fuptypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hsnnumber`
--
ALTER TABLE `hsnnumber`
  MODIFY `HSNID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `memberpackage`
--
ALTER TABLE `memberpackage`
  MODIFY `mempackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mempackdays`
--
ALTER TABLE `mempackdays`
  MODIFY `mempackpdayID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissionmanager`
--
ALTER TABLE `permissionmanager`
  MODIFY `perMngID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permisson`
--
ALTER TABLE `permisson`
  MODIFY `perID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `programID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `refID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scorecard`
--
ALTER TABLE `scorecard`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stdID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `stdDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subCatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `taxID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `timeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `transportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trial`
--
ALTER TABLE `trial`
  MODIFY `trailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
