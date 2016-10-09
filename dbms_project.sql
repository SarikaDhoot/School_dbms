-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2015 at 02:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbms project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appearsfor`
--

CREATE TABLE IF NOT EXISTS `appearsfor` (
  `s_ID` char(10) NOT NULL,
  `examID` char(10) NOT NULL,
  `marksObtained` decimal(5,2) DEFAULT '0.00',
  PRIMARY KEY (`s_ID`,`examID`),
  KEY `fk_AppearsFor_examID` (`examID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appearsfor`
--

INSERT INTO `appearsfor` (`s_ID`, `examID`, `marksObtained`) VALUES
('S201500001', 'E0001', '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE IF NOT EXISTS `chooses` (
  `s_ID` char(10) NOT NULL,
  `subjectID` char(10) NOT NULL,
  `grade` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`s_ID`,`subjectID`),
  KEY `fk_Chooses_subjectID` (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`s_ID`, `subjectID`, `grade`) VALUES
('S201500001', 'Sub001', 'A'),
('S201500001', 'Sub002', 'B'),
('S201500003', 'Sub001', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE IF NOT EXISTS `contains` (
  `courseID` char(10) NOT NULL,
  `subjectID` char(10) NOT NULL,
  PRIMARY KEY (`courseID`,`subjectID`),
  KEY `fk_Contains_subjectID` (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`courseID`, `subjectID`) VALUES
('C0001', 'Sub001'),
('C0004', 'Sub001'),
('C0001', 'Sub002'),
('C0001', 'Sub004'),
('C0004', 'Sub005');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseID` char(10) NOT NULL,
  `courseName` varchar(30) NOT NULL,
  `courseDuration` int(11) DEFAULT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `courseDuration`) VALUES
('C0001', 'MSIS', 16),
('C0002', 'MFin', 16),
('C0003', 'MIM', 24),
('C0004', 'ENTS', 24),
('C0005', 'MBA', 22);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `examID` char(10) NOT NULL,
  `examType` varchar(30) NOT NULL,
  `subjectID` char(10) DEFAULT NULL,
  PRIMARY KEY (`examID`),
  KEY `fk_Exam_subjectID` (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`examID`, `examType`, `subjectID`) VALUES
('E0001', 'Midterm', 'Sub001'),
('E0002', 'Final', 'Sub001'),
('E0003', 'Midterm', 'Sub002'),
('E0004', 'Final', 'Sub002'),
('E0005', 'Midterm', 'Sub004');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `facultyID` char(10) NOT NULL,
  `facultyName` varchar(30) NOT NULL,
  `facultyAddress` varchar(100) DEFAULT NULL,
  `facultyContactNo` int(11) DEFAULT NULL,
  `facultyDesignation` varchar(30) DEFAULT NULL,
  `facultySalary` decimal(8,2) DEFAULT NULL,
  `facultyQualification` varchar(30) DEFAULT NULL,
  `managerID` char(10) DEFAULT NULL,
  `facultyEmailID` varchar(100) NOT NULL,
  `facultyUsername` varchar(50) NOT NULL,
  PRIMARY KEY (`facultyID`),
  KEY `fk_Faculty_managerID` (`managerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyID`, `facultyName`, `facultyAddress`, `facultyContactNo`, `facultyDesignation`, `facultySalary`, `facultyQualification`, `managerID`, `facultyEmailID`, `facultyUsername`) VALUES
('F0001', 'Peter Johnson', '4500 25th avenue', 1112334343, 'Assistant Professor', '123456.80', 'PhD', NULL, 'peterj@gmail.com', 'peter Johnson'),
('F0002', 'Sean Barnes', '9930 48th avenue \r\n\r\ncollege park', 2147483647, 'Professor', '223456.80', 'PhD', 'F0001', 'sean.b@umd.edu', 'Sean Barnes'),
('F0003', 'Amy Markado', '8343 7th avenue college \r\n\r\npark', 2147483647, 'Director', '323456.80', 'PhD', 'F0001', 'amy.m@umd.edu', 'Amy Markado'),
('F0004', 'Siva Viswanathan', '1000 4th avenue \r\n\r\ncollege park', 2147483647, 'Professor', '223456.80', 'PhD', NULL, 'siva@umd.edu', 'Siva Viswanathan'),
('F0005', 'Ming Liao', '8100 12th avenue college \r\n\r\npark', 2147483647, 'Assistant Professor', '123456.80', 'MS Finance', 'F0004', 'ming.liao@umd.edu', 'Ming Liao');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `userType`) VALUES
('admin1', 'ad', 'admin'),
('Amy Jackson', 'aj', 'student'),
('Amy Markado', 'am', 'faculty'),
('Dakota Smith', 'ds', 'student'),
('Ming Liao', 'ml', 'faculty'),
('Peter Johnson', 'pj', 'faculty'),
('Rishabh Rathod', 'rr', 'student'),
('Rishabh Shetty', 'rs', 'student'),
('Sean Barnes', 'sb', 'faculty'),
('Siva Viswanathan', 'sv', 'faculty'),
('Vibhu Monga', 'vm', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_ID` char(10) NOT NULL,
  `sName` varchar(30) NOT NULL,
  `sAddress` varchar(100) DEFAULT NULL,
  `sContactNo` int(11) DEFAULT NULL,
  `sDivision` varchar(15) DEFAULT NULL,
  `sParentName` varchar(30) DEFAULT NULL,
  `pContactNo` int(11) DEFAULT NULL,
  `sDateOfBirth` date DEFAULT NULL,
  `sEmailID` varchar(200) NOT NULL,
  `sUsername` varchar(50) NOT NULL,
  PRIMARY KEY (`s_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_ID`, `sName`, `sAddress`, `sContactNo`, `sDivision`, `sParentName`, `pContactNo`, `sDateOfBirth`, `sEmailID`, `sUsername`) VALUES
('S201500001', 'Rishabh Rathod', '4500 25th ave', 1112334343, '0501', 'Atul Rathod', 1143321441, '0000-00-00', 'rishabhrathod@rhsmith.umd.edu', 'Rishabh Rathod'),
('S201500002', 'Rishabh Shetty', '8292 5th avenue \r\n\r\ncollege park', 2147483647, '0502', 'Manoj Shetty', 2147483647, '0000-00-00', 'rishabhshetty@rhsmith.umd.edu', 'Rishabh Shetty'),
('S201500003', 'Amy Jackson', '9900 6th avenue college \r\n\r\npark', 2147483647, '001', 'John Doe', 2147483647, '0000-00-00', 'amyjackson@rhsmith.umd.edu', 'Amy Jackson'),
('S201500004', 'Dakota Smith', '8200 7th avenue \r\n\r\ncollege park', 2147483647, '04', 'John Smith', 2147483647, '0000-00-00', 'dakotasmith@rhsmith.umd.edu', 'Dakota Smith'),
('S201500005', 'Vibhu Mongha', '8100 8th avenue \r\n\r\ncollege park', 2147483647, '001', 'Aria Waldorf', 2147483647, '0000-00-00', 'vibhumongha@rhsmith.umd.edu', 'Vibhu Mongha');

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE IF NOT EXISTS `student1` (
  `s_ID` char(10) NOT NULL,
  `sName` varchar(30) NOT NULL,
  `sAddress` varchar(100) DEFAULT NULL,
  `sContactNo` int(11) DEFAULT NULL,
  `sDivision` varchar(15) DEFAULT NULL,
  `sParentName` varchar(30) DEFAULT NULL,
  `pContactNo` int(11) DEFAULT NULL,
  `sDateOfBirth` date DEFAULT NULL,
  `courseID` char(10) NOT NULL,
  `sEmailID` varchar(100) NOT NULL,
  PRIMARY KEY (`s_ID`),
  KEY `fk_Student_courseID` (`courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`s_ID`, `sName`, `sAddress`, `sContactNo`, `sDivision`, `sParentName`, `pContactNo`, `sDateOfBirth`, `courseID`, `sEmailID`) VALUES
('S201500001', 'Rishabh Rathod', '7200 48th ave', 1112322222, '0501', 'Atul Rathod', 1143321441, '1993-03-04', 'C0001', 'rishabh.rathod@umd.edu'),
('S201500003', 'Amy Jackson', '9900 6th avenue college \r\n\r\npark', 2147483647, '001', 'John Doe', 2147483647, '1990-12-11', 'C0003', 'amy.j@umd.edu'),
('S201500004', 'Dakota Smith', '8200 7th avenue \r\n\r\ncollege park', 2147483647, '04', 'John Smith', 2147483647, '1991-08-11', 'C0002', 'dakota.smith@umd.edu'),
('S201500005', 'Vibhu Mongha', '8100 8th avenue \r\n\r\ncollege park', 2147483647, '001', 'Aria Mongha', 2147483647, '1989-01-10', 'C0001', 'vibhu.mongha@umd.edu');

-- --------------------------------------------------------

--
-- Table structure for table `student_takes`
--

CREATE TABLE IF NOT EXISTS `student_takes` (
  `s_ID` char(10) NOT NULL,
  `subjectID` char(10) NOT NULL,
  `courseID` char(10) NOT NULL,
  `grade` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`s_ID`,`subjectID`,`courseID`),
  KEY `fk_student_takes_subjectID` (`subjectID`),
  KEY `fk_student_takes_courseID` (`courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_takes`
--

INSERT INTO `student_takes` (`s_ID`, `subjectID`, `courseID`, `grade`) VALUES
('S201500001', 'Sub001', 'C0001', 'A'),
('S201500001', 'Sub002', 'C0001', 'B'),
('S201500003', 'Sub001', 'C0002', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectID` char(10) NOT NULL,
  `subjectName` varchar(30) NOT NULL,
  `maxMarks` int(11) DEFAULT NULL,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `subjectName`, `maxMarks`) VALUES
('Sub001', 'Data Mining and Predictive \r\n\r', 100),
('Sub002', 'Database Management Systems', 1000),
('Sub003', 'Financial Management', 100),
('Sub004', 'Data Networks', 250),
('Sub005', 'Data Communications', 100),
('Sub006', 'Business Strategy', 100);

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE IF NOT EXISTS `teaches` (
  `facultyID` char(10) NOT NULL,
  `subjectID` char(10) NOT NULL,
  PRIMARY KEY (`facultyID`,`subjectID`),
  KEY `fk_Teaches_subjectID` (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`facultyID`, `subjectID`) VALUES
('F0001', 'Sub001'),
('F0003', 'Sub001'),
('F0004', 'Sub001'),
('F0001', 'Sub006'),
('F0002', 'Sub006');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appearsfor`
--
ALTER TABLE `appearsfor`
  ADD CONSTRAINT `fk_AppearsFor_examID` FOREIGN KEY (`examID`) REFERENCES `exam` (`examID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_AppearsFor_s_ID` FOREIGN KEY (`s_ID`) REFERENCES `student1` (`s_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chooses`
--
ALTER TABLE `chooses`
  ADD CONSTRAINT `fk_Chooses_subjectID` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Chooses_s_ID` FOREIGN KEY (`s_ID`) REFERENCES `student1` (`s_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `fk_Contains_courseID` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Contains_subjectID` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `fk_Exam_subjectID` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `fk_Faculty_managerID` FOREIGN KEY (`managerID`) REFERENCES `faculty` (`facultyID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `student1`
--
ALTER TABLE `student1`
  ADD CONSTRAINT `fk_Student_courseID` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `student_takes`
--
ALTER TABLE `student_takes`
  ADD CONSTRAINT `fk_student_takes_courseID` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_takes_subjectID` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_takes_s_ID` FOREIGN KEY (`s_ID`) REFERENCES `student1` (`s_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `fk_Teaches_courseID` FOREIGN KEY (`facultyID`) REFERENCES `faculty` (`facultyID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Teaches_subjectID` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
