-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2024 at 03:21 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_payment`
--

DROP TABLE IF EXISTS `add_payment`;
CREATE TABLE IF NOT EXISTS `add_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `payment_poriman` int(100) NOT NULL,
  `curren_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_payment`
--

INSERT INTO `add_payment` (`id`, `user_id`, `payment_poriman`, `curren_date`) VALUES
(4, 33, 110, '2024-02-26'),
(5, 33, 200, '2024-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(100) NOT NULL,
  `Passwordd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `Passwordd`) VALUES
(191311073, 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notice`
--

DROP TABLE IF EXISTS `admin_notice`;
CREATE TABLE IF NOT EXISTS `admin_notice` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(100) NOT NULL,
  `TEXTT` varchar(100) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `application_user`
--

DROP TABLE IF EXISTS `application_user`;
CREATE TABLE IF NOT EXISTS `application_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `nidNext` varchar(100) NOT NULL,
  `loan_pori` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `nidNext` varchar(100) NOT NULL,
  `acc_num` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `loan_poriman` int(200) NOT NULL,
  `masik` varchar(100) NOT NULL,
  `porishod` varchar(100) NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `interest` float NOT NULL,
  `paymentCalculate` double NOT NULL,
  `total_paymnet` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `Name`, `fname`, `mname`, `phone`, `img`, `nid`, `nidNext`, `acc_num`, `date`, `loan_poriman`, `masik`, `porishod`, `User_id`, `interest`, `paymentCalculate`, `total_paymnet`) VALUES
(33, 'puspo', 'mamun', 'ayesha', '0178846511', 'a4.png', 'a3.png', 'g.png', '1234', '2024-02-26', 10000, 'à¦®à¦¾à¦¸à¦¿à¦•', 'à¦®à¦¾à¦¸à¦¿à¦•', '24', 200, 2500, 10200);

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

DROP TABLE IF EXISTS `contact_page`;
CREATE TABLE IF NOT EXISTS `contact_page` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `mess` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallerypage`
--

DROP TABLE IF EXISTS `gallerypage`;
CREATE TABLE IF NOT EXISTS `gallerypage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Image_Name` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallerypage`
--

INSERT INTO `gallerypage` (`Id`, `Image_Name`) VALUES
(31, 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `help_page`
--

DROP TABLE IF EXISTS `help_page`;
CREATE TABLE IF NOT EXISTS `help_page` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(1109) NOT NULL,
  `TEXTT` varchar(11000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help_page`
--

INSERT INTO `help_page` (`Id`, `TITLE`, `TEXTT`) VALUES
(20, 'je kono som', '            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, iure repudiandae sed, quo porro quibusdam laudantium quasi ab dolorum quae hic explicabo cumque in, perferendis aliquid nostrum sint quas nobis! Pariatur velit corrupti, natus inventore numquam eligendi recusandae placeat saepe, illo ab cumque ipsum deleniti soluta nesciunt! Dicta at nihil magnam adipisci iusto. Ullam est esse accusantium eum placeat hic beatae reprehenderit exercitationem mollitia, sint similique debitis aspernatur ipsum numquam eveniet nam? Veritatis eaque officia dolor earum dicta impedit enim ad consequuntur fuga, tempora et modi voluptates? Obcaecati explicabo perferendis nemo earum et! Dicta id officiis mollitia commodi aperiam nobis.'),
(21, 'loan sompor', 'akjjbk ajdbcjd dnvc djc dsj nds');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(1000) NOT NULL,
  `crImage` varchar(100) NOT NULL,
  `sliderImage` varchar(100) NOT NULL,
  `Tcount` int(100) NOT NULL,
  `Tproject` int(100) NOT NULL,
  `Dcount` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `headline`, `crImage`, `sliderImage`, `Tcount`, `Tproject`, `Dcount`) VALUES
(55, '            15 oct upollokkhe char 15%   ', '2.jpg', '1.jpg', 4000, 100, 3);

-- --------------------------------------------------------

--
-- Table structure for table `moderate`
--

DROP TABLE IF EXISTS `moderate`;
CREATE TABLE IF NOT EXISTS `moderate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `nidNext` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `work` varchar(255) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderate`
--

INSERT INTO `moderate` (`Id`, `Name`, `fname`, `mname`, `email`, `img`, `nid`, `nidNext`, `phone`, `date`, `work`, `salary`, `pass`) VALUES
(24, 'fiz', 'abu bakar', 'majeda', 'fiz@gmail.com', '12.png', 'asse.png', 'a3.png', '01718465130', '2024-02-26', 'worker', '20000', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `notice_page`
--

DROP TABLE IF EXISTS `notice_page`;
CREATE TABLE IF NOT EXISTS `notice_page` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Notice` varchar(3000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_page`
--

INSERT INTO `notice_page` (`Id`, `Notice`) VALUES
(10, '15 tarikh chutir din sok dibos');

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

DROP TABLE IF EXISTS `paymenthistory`;
CREATE TABLE IF NOT EXISTS `paymenthistory` (
  `Name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `acc_num` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `loan_poriman` int(200) NOT NULL,
  `User_id` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenthistory`
--

INSERT INTO `paymenthistory` (`Name`, `fname`, `mname`, `phone`, `acc_num`, `date`, `loan_poriman`, `User_id`, `id`) VALUES
('puspo', 'mamun', 'ayesha', '0178846511', '1234', '2024-02-26', 10000, '24', 31);

-- --------------------------------------------------------

--
-- Table structure for table `payment_bkash`
--

DROP TABLE IF EXISTS `payment_bkash`;
CREATE TABLE IF NOT EXISTS `payment_bkash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_numm` varchar(100) NOT NULL,
  `bkash_num` varchar(100) NOT NULL,
  `tran_code` varchar(100) NOT NULL,
  `taka` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services_page`
--

DROP TABLE IF EXISTS `services_page`;
CREATE TABLE IF NOT EXISTS `services_page` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(1000) NOT NULL,
  `carousle_title` varchar(1000) NOT NULL,
  `Table_title` varchar(1000) NOT NULL,
  `Taka` varchar(100) NOT NULL,
  `Interest` varchar(100) NOT NULL,
  `weekk` varchar(100) NOT NULL,
  `Monthly` varchar(100) NOT NULL,
  `yearr` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_page`
--

INSERT INTO `services_page` (`Id`, `headline`, `carousle_title`, `Table_title`, `Taka`, `Interest`, `weekk`, `Monthly`, `yearr`) VALUES
(20, 'about loan history', '100 taka char proti loan', 'bangladesh NGO', '10000', '10%', '2%', '4%', '8%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
