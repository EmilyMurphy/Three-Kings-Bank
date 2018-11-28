

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--
CREATE DATABASE IF NOT EXISTS `bank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bank`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'admin'),
(2, 'emily', 'admin'),
(3, 'sean', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `BNAME` varchar(150) NOT NULL,
  `ADDRESS` varchar(150) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`BID`, `BNAME`, `ADDRESS`) VALUES
(1, ' AIB ', ' Dublin 12, Ireland '),
(2, ' AIB ', ' Dublin 3, Ireland '),
(3, ' AIB ', ' Dublin 6, Ireland '),
(4, ' AIB ', ' Cork, Ireland '),
(5, ' AIB ', ' Mayo, Ireland '),
(6, ' AIB ', ' Limerick, Ireland '),
(7, ' AIB ', ' Tipperary, Ireland '),
(8, ' Ulster Bank ', ' Dublin 4, Ireland '),
(9, ' Ulster Bank ', ' Dublin 13, Ireland '),
(10, ' Ulster Bank ', ' Dublin 1, Ireland '),
(11, ' Ulster Bank ', ' Wicklow, Ireland '),
(12, ' Ulster Bank ', ' Wexford, Ireland '),
(13, ' KBC ', ' Cork, Ireland '),
(14, ' KBC ', ' Galway, Ireland '),
(15, ' KBC ', ' Ulster, Ireland '),
(16, ' BNP Paribas ', ' Barcelona, Spain '),
(17, ' BNP Paribas ', ' Madrid, Spain '),
(18, ' BNP Paribas ', ' Alicante, Spain '),
(19, ' BNP Paribas ', ' Rome, Italy '),
(20, ' BNP Paribas ', ' Sicily, Italy '),
(21, ' BNP Paribas ', ' Milan, Italy '),
(22, ' HSBC ', ' London, England '),
(23, ' HSBC ', ' Liverpool, England '),
(24, ' HSBC ', ' Brighton, England '),
(25, ' Bank of America ', ' Ohio, U.S.A '), 
(26, ' Bank of America ', ' Florida, U.S.A '), 
(27, ' Bank of America ', ' New York, U.S.A '), 
(28, ' Bank of America ', ' Texas, U.S.A '), 
(29, ' Bank of America ', ' Oklahoma, U.S.A '), 
(30, ' Bank of America ', ' California, U.S.A '); 

-- --------------------------------------------------------

-- --------------------------------------------------------


--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `PASS` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `FILE` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NAME`, `PASS`, `MAIL`,`FILE`) VALUES

(1, 'Jack', '1234', 'JJ@gmail.com', 'upload/bey.jpeg'),
(2, 'Phil', '1234', 'Philbusiness@gmail.com', 'upload/bey.jpeg'),
(3, 'Andrew', '1234', 'Andrew23@gmail.com', 'upload/bey.jpeg'),
(4, 'Kate', '1234', 'KT@gmail.com', 'upload/bey.jpeg'),
(5, 'Michael', '1234', 'micheal1@gmail.com', 'upload/bey.jpeg'),
(6, 'em', 'em', 'emily@gmail.com', 'upload/bey.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
