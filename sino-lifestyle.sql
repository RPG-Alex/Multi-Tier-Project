-- phpMyAdmin SQL Dump
-- version 4.9.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2020 at 04:13 PM
-- Server version: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.3.11-0ubuntu0.19.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sino-lifestyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartItems`
--

CREATE TABLE `cartItems` (
  `cartid` int(11) NOT NULL,
  `cookieid` varchar(50) NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cartItems`
--

INSERT INTO `cartItems` (`cartid`, `cookieid`, `item`) VALUES
(12, 'co6fr6mv7p2vhrv9ob2q6dvnob', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clid` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ConsultationRecord`
--

CREATE TABLE `ConsultationRecord` (
  `consultID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL,
  `meettime` datetime NOT NULL,
  `post-meeting-report` mediumtext NOT NULL,
  `serviceID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `contactEmail` varchar(100) NOT NULL,
  `contactMessage` varchar(300) NOT NULL,
  `sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `JobTitle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qanda`
--

CREATE TABLE `qanda` (
  `qid` int(11) NOT NULL,
  `question` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `answer` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qanda`
--

INSERT INTO `qanda` (`qid`, `question`, `answer`) VALUES
(26, 'Can I receive a free consultation?', 'Yes you may! We offer a free consultation service, it is considered an initial consultation and generally no longer than one hour with the intent of helping you decide on which of our services to use!'),
(27, 'How do I know your organization knows what they\'re talking about?', 'We have a decade of experience with the middle kingdom and are confident that our experience and knowledge will help you decide on the right path forward'),
(28, 'Are you a head hunting service?', 'No we are not a head hunting service. We may pass your details along to a head hunter with your consent, and int he event you wish to use their service, but we offer consultations on the best path forward only!'),
(29, 'Why would I need a service like this?', 'We take the guess work out of planning your life in China! So that you can focus on enjoying your experience in the Middle Kingdom!'),
(30, 'Can you guarantee I will receive a visa?', 'No we cannot. We are not a visa service and do not offer any guarantees regarding the application or reception of a visa. We simply provide knowledge and advice on how best to apply for a visa. You will still be responsible for your visa application.');

-- --------------------------------------------------------

--
-- Table structure for table `salesHistory`
--

CREATE TABLE `salesHistory` (
  `sid` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `amountDue` decimal(8,2) NOT NULL,
  `clientServed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `sid` int(11) NOT NULL,
  `service` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`sid`, `service`, `description`, `price`) VALUES
(1, 'Consultation (Initial)', 'This should be your starting point! We offer a free consultation, and from here you can decide what services are right for you.', '0.00'),
(2, 'Moving Logistics Consultation', 'Congratulations! You have decided to move to China! Now you just need to yourself, your family, pets, and stuff there too!', '200.00'),
(3, 'Visa Consultation', 'This is an important step on the road to life in China! Whether your intent is to study for a few years, find  a job, or simply travel, our knowledge of the ins and outs of China\'s visa policies will help you get there.', '100.00'),
(4, 'Cultural Consultation (including language learning advice)', 'Congratulations on wanting to experience and learn more about Chinese culture! We are confident we can not only work out the best path for you to learn, but ensure all your questions are answered along the way!', '300.00'),
(5, 'Employment Opportunity and Paths Consultation', 'Welcome to the exciting business world of working in China, one of the world\'s largest and fastest growing economies! Weather you\'re a seasoned professional looking to a change of scenery or a new graduate looking for experience abroad, we are confident we can help you decide your path forward!', '500.00'),
(6, 'Market Entrance Consultation', 'This service is tailored to organizations and entrepreneurs looking to expand into the Chinese market. It will constitute several meetings where we will determine your path forward, covering relevant regulations, fees associated with incorporation, and much more! All with the aim of jump starting your endeavors in China', '2000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartItems`
--
ALTER TABLE `cartItems`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `item` (`item`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `ConsultationRecord`
--
ALTER TABLE `ConsultationRecord`
  ADD PRIMARY KEY (`consultID`),
  ADD KEY `empID` (`empID`,`clientID`,`serviceID`),
  ADD KEY `clientConsulted` (`clientID`),
  ADD KEY `serviceType` (`serviceID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `qanda`
--
ALTER TABLE `qanda`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `salesHistory`
--
ALTER TABLE `salesHistory`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `clientid` (`clientid`,`serviceid`),
  ADD KEY `serviceInfo` (`serviceid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartItems`
--
ALTER TABLE `cartItems`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ConsultationRecord`
--
ALTER TABLE `ConsultationRecord`
  MODIFY `consultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qanda`
--
ALTER TABLE `qanda`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `salesHistory`
--
ALTER TABLE `salesHistory`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartItems`
--
ALTER TABLE `cartItems`
  ADD CONSTRAINT `itemInCart` FOREIGN KEY (`item`) REFERENCES `services` (`sid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ConsultationRecord`
--
ALTER TABLE `ConsultationRecord`
  ADD CONSTRAINT `clientConsulted` FOREIGN KEY (`clientID`) REFERENCES `client` (`clid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `consultingEmployee` FOREIGN KEY (`empID`) REFERENCES `employee` (`empID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `serviceType` FOREIGN KEY (`serviceID`) REFERENCES `services` (`sid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `message.service` FOREIGN KEY (`sid`) REFERENCES `services` (`sid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `salesHistory`
--
ALTER TABLE `salesHistory`
  ADD CONSTRAINT `clinetInfo` FOREIGN KEY (`clientid`) REFERENCES `client` (`clid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `serviceInfo` FOREIGN KEY (`serviceid`) REFERENCES `services` (`sid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
