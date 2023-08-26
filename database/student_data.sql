-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 07:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmapplications`
--

CREATE TABLE `tbladmapplications` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) NOT NULL,
  `CourseApplied` varchar(120) DEFAULT NULL,
  `FatherName` varchar(120) DEFAULT NULL,
  `MotherName` varchar(120) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Nationality` varchar(120) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `CorrespondenceAdd` varchar(350) NOT NULL,
  `PermanentAdd` varchar(350) NOT NULL,
  `SecondaryBoard` varchar(120) DEFAULT NULL,
  `SecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SecondaryBoardper` varchar(120) DEFAULT NULL,
  `SecondaryBoardstream` varchar(120) DEFAULT NULL,
  `SSecondaryBoard` varchar(120) DEFAULT NULL,
  `SSecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SSecondaryBoardper` varchar(120) DEFAULT NULL,
  `SSecondaryBoardstream` varchar(120) DEFAULT NULL,
  `AadharNumber` varchar(120) DEFAULT NULL,
  `MinorityStatus` varchar(120) DEFAULT NULL,
  `PhysicalStatus` varchar(120) DEFAULT NULL,
  `ChronicDischeck` varchar(120) DEFAULT NULL,
  `roundallot` varchar(120) DEFAULT NULL,
  `JeeRollno` varchar(120) DEFAULT NULL,
  `JeeAllIndiaRank` varchar(120) DEFAULT NULL,
  `JeeMark` varchar(120) DEFAULT NULL,
  `JeeScore` varchar(120) DEFAULT NULL,
  `JeeYear` varchar(120) DEFAULT NULL,
  `AllotCategory` varchar(120) DEFAULT NULL,
  `CandidateCategory` varchar(120) DEFAULT NULL,
  `JosaaDDno` varchar(120) DEFAULT NULL,
  `JosaaDatefix` timestamp NOT NULL DEFAULT current_timestamp(),
  `JosaaAmtpay` varchar(120) DEFAULT NULL,
  `InstiDDno` varchar(120) DEFAULT NULL,
  `InstiDatefix` timestamp NOT NULL DEFAULT current_timestamp(),
  `InstiAmtpay` varchar(120) DEFAULT NULL,
  `TotalPay` varchar(120) DEFAULT NULL,
  `NameHindi` varchar(120) DEFAULT NULL,
  `Blood` varchar(120) DEFAULT NULL,
  `Declaration` varchar(120) DEFAULT NULL,
  `Signature` varchar(120) DEFAULT NULL,
  `CourseApplieddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(255) DEFAULT NULL,
  `AdminStatus` varchar(20) DEFAULT NULL,
  `AdminRemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `UserPic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'Admin', 'Admin', 1234567897, 'codingcush@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-05-18 04:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL,
  `CourseName` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID`, `CourseName`) VALUES
(1, 'B.Tech Computer Science and Engineering'),
(2, 'B.Tech Electronics and Communication Engineering'),
(3, 'PHD');


-- --------------------------------------------------------

--
-- Table structure for table `tbldocument`
--

CREATE TABLE `tbldocument` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TenMarksheeet` varchar(120) DEFAULT NULL,
  `TwelveMarksheet` varchar(120) DEFAULT NULL,
  `SeatAllotmentLetter` varchar(120) DEFAULT NULL,
  `JeeRankCard` varchar(120) DEFAULT NULL,
  `PhotoId` varchar(120) DEFAULT NULL,
  `Proofdob` varchar(120) DEFAULT NULL,
  `IncomeCertificate` varchar(120) DEFAULT NULL,
  `AadharCard` varchar(120) DEFAULT NULL,
  `CasteCertificate` varchar(120) DEFAULT NULL,
  `CasteValidity` varchar(120) DEFAULT NULL,
  `OBCCertificate` varchar(120) DEFAULT NULL,
  `PWDCertificate` varchar(120) DEFAULT NULL,
  `TransferCertificate` varchar(120) DEFAULT NULL,
  `MigrationCertificate` varchar(120) DEFAULT NULL,
  `GapCertificate` varchar(120) DEFAULT NULL,
  `UploadDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Decription` text DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `Title`, `Decription`, `CreationDate`) VALUES
(3, 'Admission Notice for BCA / MCA', 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2021-10-26 06:36:07'),
(4, 'Test Notification for Demo', 'This is demo notification for demo project. Student Admission Management System....', '2021-10-26 07:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `PostingDate`) VALUES
(5, 'Coding', 'Cush', 9905860878, 'codingcush@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2021-12-16 17:57:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldocument`
--
ALTER TABLE `tbldocument`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbldocument`
--
ALTER TABLE `tbldocument`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
