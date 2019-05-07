-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 02:13 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codyzed_sellanycar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('sachinjangid@gmail.com', 'sachin123');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_company` varchar(111) NOT NULL,
  `carcode` varchar(111) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_company`, `carcode`, `image`) VALUES
('Renault', 'JLTZ5679', 'Renault.jpg'),
('Suzuki', 'BFMSWZ70', 'Suzuki.jpg'),
('BMW', 'FJLNT490', 'BMW.jpg'),
('Mercedes', 'DKOPR359', 'Mercedes.jpg'),
('Jaguar', 'CFGMQT14', 'Jaguar.jpg'),
('Jeep', 'ACDGL230', 'Jeep.jpg'),
('Audi', 'CGHMNTU6', 'Audi.jpg'),
('Volkswagen', 'BCLOTY23', 'Volkswagen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `modelcode` varchar(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `location` varchar(111) NOT NULL,
  `kmdriven` int(11) NOT NULL,
  `condit` varchar(500) NOT NULL,
  `photo` varchar(111) NOT NULL,
  `expected_price` int(111) NOT NULL,
  `useremail` varchar(111) NOT NULL,
  `code` varchar(111) NOT NULL,
  `kmpl` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`modelcode`, `date`, `location`, `kmdriven`, `condit`, `photo`, `expected_price`, `useremail`, `code`, `kmpl`, `description`, `status`) VALUES
('GLNVWY16', '2018-06-13', '7/38, Ganga Prasad Colony, Jaipur, Rajasthan', 17000, 'Good condition means that the vehicle is free of any major defects. This vehicle has a clean Title History, the paint, body and interior have only minor (if any) blemishes, and there are no major mechanical problems. There should be little or no rust on this vehicle. The tires match and have substantial tread wear left. A \"good\" vehicle will need some reconditioning to be sold at retail. Most consumer owned vehicles fall into this category.', 'EMPRWX69.jpg', 2345999, 'sachinjangid832@gmail.com', 'EMPRWX69', 17, 'Jaguar F-Type convertible is all about performance, luxury and outstanding design. The two-seater model is only available in petrol guise with a choice of 2-litre and 5-litre V8 engines. The F-Type is designed to offer a blend of driving experience and high-tech features. Made entirely of aluminium, the coupe weighs quite heavy, around 1700 kilos. In terms of tech, it gets an updated electronic differential that is used for redistributing torque between the rear wheels. Other than this, it also comes with torque vectoring.\r\n\r\nJaguar F-Type is available in coupe and convertible body styles, The entry-level versions of the sports car are now powered by the new 2.0-litre petrol engine that produces 296 bhp and 400 Nm of peak torque. While The top-of-the-line Jaguar F-Type SVR gets the massive 5.0-litre Supercharged V8 engine with 567 bhp and a whopping 700 Nm of peak torque, while mated to a 7-speed automatic. The SVR is capable of hitting 0-100 kmph in 3.7 seconds while the top speed is rated at 322 kmph.', 1),
('LOUWY569', '2017-08-24', 'San Fransisco, USA', 50000, 'Good condition means that the vehicle is free of any major defects. This vehicle has a clean Title History, the paint, body and interior have only minor (if any) blemishes, and there are no major mechanical problems. There should be little or no rust on this vehicle. The tires match and have substantial tread wear left. A \"good\" vehicle will need some reconditioning to be sold at retail. Most consumer owned vehicles fall into this category.', 'FJKOV890.jpg', 2769321, 'mymaria@gmail.com', 'FJKOV890', 21, 'Jaguar F-Type convertible is all about performance, luxury and outstanding design. The two-seater model is only available in petrol guise with a choice of 2-litre and 5-litre V8 engines. The F-Type is designed to offer a blend of driving experience and high-tech features. Made entirely of aluminium, the coupe weighs quite heavy, around 1700 kilos. In terms of tech, it gets an updated electronic differential that is used for redistributing torque between the rear wheels. Other than this, it also comes with torque vectoring.\r\n\r\nJaguar F-Type is available in coupe and convertible body styles, The entry-level versions of the sports car are now powered by the new 2.0-litre petrol engine that produces 296 bhp and 400 Nm of peak torque. While The top-of-the-line Jaguar F-Type SVR gets the massive 5.0-litre Supercharged V8 engine with 567 bhp and a whopping 700 Nm of peak torque, while mated to a 7-speed automatic. The SVR is capable of hitting 0-100 kmph in 3.7 seconds while the top speed is rated at 322 kmph.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE `car_models` (
  `carcode` varchar(111) NOT NULL,
  `model` varchar(111) NOT NULL,
  `type` varchar(111) NOT NULL,
  `cc` int(11) NOT NULL,
  `bhp` int(11) NOT NULL,
  `maxprice` int(11) NOT NULL,
  `modelcode` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_models`
--

INSERT INTO `car_models` (`carcode`, `model`, `type`, `cc`, `bhp`, `maxprice`, `modelcode`, `status`) VALUES
('JLTZ5679', 'Duster', 'Luxury', 1498, 108, 1329655, 'BJORUY23', 1),
('JLTZ5679', 'Kwid', 'Luxury', 1498, 108, 1000000, 'EGTZ4579', 1),
('BFMSWZ70', 'Dzire', 'Luxury', 1498, 108, 1000000, 'ABCGJX46', 1),
('BFMSWZ70', 'Alto', 'Luxury', 1498, 108, 700000, 'AFGHLU29', 1),
('JLTZ5679', 'Captur', 'Luxury', 1498, 108, 1350899, 'IPY23490', 1),
('JLTZ5679', 'Lodgy', 'Luxury', 1498, 108, 1650999, 'BCFHMO24', 1),
('BFMSWZ70', 'Swift', 'Luxury', 1498, 108, 1245899, 'ACHOQVXZ', 1),
('BFMSWZ70', 'Ciaz', 'Luxury', 1498, 108, 1756999, 'ADITX589', 1),
('FJLNT490', '3 Series', 'Luxury', 1498, 108, 3756999, 'ILMNQUV2', 1),
('FJLNT490', 'X3', 'Luxury', 1498, 108, 4600000, 'AEJKPSV0', 1),
('FJLNT490', 'X5', 'Luxury', 1498, 108, 4909898, 'BCDEFGHI', 1),
('FJLNT490', 'i8', 'Luxury', 1498, 108, 7900000, 'FGLOQZ37', 1),
('FJLNT490', 'Z4', 'Luxury', 1498, 108, 4600000, 'FMPRVY28', 1),
('DKOPR359', 'z CLA-Class', 'Luxury', 1498, 108, 4800000, 'FJKLNQT9', 1),
('DKOPR359', 'A-Class', 'Luxury', 1498, 108, 4800000, 'FGKSY190', 1),
('DKOPR359', 'AMG GT 45', 'Luxury', 1498, 108, 9800000, 'BDJPW234', 1),
('DKOPR359', 'z E-Class', 'Luxury', 1498, 108, 9800000, 'EFKLOV12', 1),
('CFGMQT14', 'XE', 'Luxury', 1498, 108, 5623999, 'BCFGIP36', 1),
('CFGMQT14', 'XF Sportbrake', 'Luxury', 1498, 108, 5623999, 'GLNVWY16', 1),
('CFGMQT14', 'F-Type Coupe', 'Luxury', 1498, 108, 5623999, 'LOUWY569', 1),
('CFGMQT14', 'F-Pace', 'Luxury', 1498, 108, 5623999, 'HLPSUYZ7', 1),
('ACDGL230', 'Wrangler', 'Luxury', 1498, 108, 1200000, 'IJMQRWZ0', 1),
('ACDGL230', 'Compass', 'Luxury', 1498, 108, 700000, 'CEMOQSY9', 1),
('ACDGL230', 'Grand', 'Luxury', 1498, 108, 1020996, 'BGLOTUW4', 1),
('CGHMNTU6', 'A6', 'Luxury', 1498, 108, 3050999, 'FJOPQRX3', 1),
('CGHMNTU6', 'R7 Sportback', 'Luxury', 1498, 108, 4050999, 'BIKPRY39', 1),
('CGHMNTU6', 'Q3', 'Luxury', 1498, 108, 5050999, 'AFGJKRZ8', 1),
('CGHMNTU6', 'R8', 'Luxury', 1498, 108, 9050999, 'AEJOX478', 1),
('BCLOTY23', 'Tiguan', 'Luxury', 1498, 108, 1200000, 'MOXZ2590', 1),
('BCLOTY23', 'Polo', 'Luxury', 1498, 108, 1200000, 'DHLOPR39', 1),
('BCLOTY23', 'Pasat', 'Luxury', 1498, 108, 1200000, 'DEHTUVW2', 1),
('BCLOTY23', 'Vento', 'Luxury', 1498, 108, 1569000, 'BGHJTX58', 1),
('BCLOTY23', 'Ameo', 'Luxury', 1498, 108, 1869000, 'DHLPS140', 1),
('ACDGL230', 'Bolero', 'Pickup Trucks', 2500, 100, 1200000, 'BDEHQYZ0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `mobile`, `occupation`, `bio`, `status`) VALUES
('Sachin Jangid', 'sachinjangid832@gmail.com', 'sachin123', '+1 652 345 3222 11', 'Senior SDE at AMAZON', 'Just doing my best and I will explore the world very soon', 1),
('Mahaveer', 'sachin@gmail.com', 'sachin123', '+1 652 345 3222 11', 'Senior SDE at AMAZON', 'Just doing my best and I will explore the world very soon', 1),
('vaibtech', 'fa@g.com', 'vaib', '+1 652 345 3222 11', 'Senior SDE at AMAZON', 'Just doing my best and I will explore the world very soon', 1),
('Maria Fernandes', 'mymaria@gmail.com', 'maria123', '+1 652 345 3222 11', 'Senior SDE at AMAZON', 'Just doing my best and I will explore the world very soon', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
