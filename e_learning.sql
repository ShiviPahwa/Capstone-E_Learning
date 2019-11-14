
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `Image` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='When student register to the course.' AUTO_INCREMENT=36 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `course_name`, `student_name`, `Image`) VALUES
(29, 'Music', 'Debanshu Majumdar', 'IMG_5641.JPG'),
(32, 'Music', 'Tanmay Jain', 'IMG_5641.JPG'),
(35, 'Music', 'Debanshu Majumdar', 'IMG_5641.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL COMMENT 'Admin, Student, Tutor',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`, `Status`) VALUES
(8, 'Moulie Sharma', 'abcd', 'Tutor'),
(9, 'Muskan Rathore', '1234', 'Student'),
(11, 'Debanshu Majumdar', 'debanshu@18', 'Student'),
(25, 'Naman Shah', 'qwerty', 'Tutor'),
(26, 'Tanmay Jain', 'abcd', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE IF NOT EXISTS `pdfs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pdf_name` varchar(300) NOT NULL,
  `skill_name` varchar(300) NOT NULL,
  `tutor_name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `pdf_name` (`pdf_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`ID`, `pdf_name`, `skill_name`, `tutor_name`) VALUES
(4, 'Academic Calendar B.Tech. Semester I 2017-18.pdf', 'Music', 'Moulie Sharma'),
(5, 'Activity-Oriented Courses.pdf', 'Music', 'Moulie Sharma');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(100) NOT NULL,
  `tutor_name` varchar(100) NOT NULL,
  `skill_desc` varchar(1500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='when tutor registers.' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `skill_name`, `tutor_name`, `skill_desc`) VALUES
(1, 'Music', 'Moulie Sharma', 'Singing');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE IF NOT EXISTS `stu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Image` varchar(300) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`ID`, `Name`, `Password`, `Gender`, `Email`, `DOB`, `Address`, `Image`) VALUES
(14, 'Muskan Rathore', '1234', 'female', 'muskan.rathore@st.niituniversity.in', '9-6-1998', 'Bhopal, M.P.', 'IMG_5639.JPG'),
(16, 'Debanshu Majumdar', 'debanshu@18', 'male', 'debanshu.majumdar@st.niituniversity.in', '18-7-1997', 'Bhopal,MP', 'deba.jpg'),
(17, 'Tanmay Jain', 'abcd', 'male', 'tanmay.jain@st.niituniversity.in', '19-3-1997', 'Indore, M.P.', 'IMG_5622.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tut`
--

CREATE TABLE IF NOT EXISTS `tut` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_no` bigint(255) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `adhar_card_no` varchar(300) NOT NULL,
  `Skilll` varchar(100) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Skill_description` varchar(2000) NOT NULL,
  `Ad_Image` varchar(400) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tut`
--

INSERT INTO `tut` (`ID`, `Name`, `Password`, `Gender`, `Email`, `Contact_no`, `DOB`, `Address`, `adhar_card_no`, `Skilll`, `Image`, `Skill_description`, `Ad_Image`) VALUES
(5, 'Moulie Sharma', 'abcd', 'female', 'moulie.sharma@st.niituniversity.in', 9617112696, '16-12-1998', 'Saharanpur,U.P.', '', 'Music', 'IMG_5641.JPG', 'Singing', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(300) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `tutor_name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `video_name` (`video_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`ID`, `video_name`, `skill_name`, `tutor_name`) VALUES
(1, 'SampleVideo_1280x720_1mb.mp4', 'Music', 'Moulie Sharma'),
(2, 'SampleVideo_1280x720_10mb.mp4', 'Music', 'Moulie Sharma');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
