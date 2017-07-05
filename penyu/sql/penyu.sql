-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 07:40 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyu`
--

-- --------------------------------------------------------

--
-- Table structure for table `characterspec`
--

CREATE TABLE `characterspec` (
  `char_id` int(11) NOT NULL,
  `charactercat_id` int(11) NOT NULL,
  `characterspec_des` text NOT NULL,
  `character_pic1` text NOT NULL,
  `spec_id` int(11) NOT NULL,
  `step_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characterspec`
--

INSERT INTO `characterspec` (`char_id`, `charactercat_id`, `characterspec_des`, `character_pic1`, `spec_id`, `step_id`) VALUES
(1, 1, 'leathery carapace', 'leathery1.jpg', 1, 1),
(2, 1, 'hard carapace', 'loggerheadcarapace.jpg', 2, NULL),
(3, 1, 'hard and flat carapace with the outer margins distinctly upturned', 'flat1.jpg', 3, 2),
(4, 1, 'Hard carapace', '', 4, NULL),
(5, 1, 'Hard Carapace', '', 5, NULL),
(6, 1, 'Hard Carapace', '', 6, 0),
(7, 3, 'prefrontal scale 1', 'prefrontal1.png', 6, 3),
(8, 2, 'prefontal scale 2', '', 2, 0),
(9, 2, 'prefrontal scale 2', '', 3, 0),
(10, 2, 'prefrontal scale 2', '', 4, 0),
(11, 2, 'prefrontal scale 2', '', 5, 0),
(12, 1, '4 overlapping costal scutes', '4overlapcscute.jpg', 5, 4),
(13, 1, '5 or more costal scutes', '', 2, 0),
(14, 1, '5 or more costal scutes\r\n', '', 3, 0),
(15, 1, '5 or more costal scutes', '', 4, 0),
(16, 4, '3 inframarginal scutes without pores', '3inframarginalscute.jpg', 2, 6),
(17, 4, '4 inframarginal scutes with pores', '', 3, 0),
(18, 4, '4 inframarginal scutes with pores', '4inframarginalscute.jpg', 4, 5),
(19, 1, '6 or more costal scutes', '', 4, 0),
(20, 1, 'Flat carapace', '', 3, 0),
(21, 2, 'Eagle like', '', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `character_cat`
--

CREATE TABLE `character_cat` (
  `charactercat_id` tinyint(2) NOT NULL,
  `charactercat_name` text NOT NULL,
  `charactercat_des` text NOT NULL,
  `charactercat_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `character_cat`
--

INSERT INTO `character_cat` (`charactercat_id`, `charactercat_name`, `charactercat_des`, `charactercat_pic`) VALUES
(1, 'Carapace', '', 'carapace.jpg'),
(2, 'Bill', '', 'bill.jpg'),
(3, 'Head', '', 'head.jpg'),
(4, 'Plastron', '', 'plastron.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `idkey`
--

CREATE TABLE `idkey` (
  `step_id` tinyint(4) NOT NULL,
  `step_des` text NOT NULL,
  `char_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idkey`
--

INSERT INTO `idkey` (`step_id`, `step_des`, `char_id`) VALUES
(1, 'Carapace', 1),
(2, '', 3),
(3, '', 7),
(4, '', 12),
(5, '', 18),
(6, '', 16);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `spec_id` tinyint(2) NOT NULL,
  `spec_name` text NOT NULL,
  `spec_vern` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`spec_id`, `spec_name`, `spec_vern`) VALUES
(1, 'Dermochelys coriacea', 'Leatherback'),
(2, 'Caretta caretta', 'Loggerhead'),
(3, 'Natator depressa', 'Flatback'),
(4, 'Lepidochelys olivacea', 'Olive ridley'),
(5, 'Eretmochelys imbricata', 'Hawksbill'),
(6, 'Chelonia mydas', 'Green');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characterspec`
--
ALTER TABLE `characterspec`
  ADD PRIMARY KEY (`char_id`);

--
-- Indexes for table `character_cat`
--
ALTER TABLE `character_cat`
  ADD PRIMARY KEY (`charactercat_id`);

--
-- Indexes for table `idkey`
--
ALTER TABLE `idkey`
  ADD PRIMARY KEY (`step_id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`spec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characterspec`
--
ALTER TABLE `characterspec`
  MODIFY `char_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `character_cat`
--
ALTER TABLE `character_cat`
  MODIFY `charactercat_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `spec_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
