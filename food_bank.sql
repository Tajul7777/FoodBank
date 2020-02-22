-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 03:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_ID` int(11) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `c_address` varchar(40) NOT NULL,
  `c_type` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `contact` int(11) NOT NULL,
  `c_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `c_name`, `c_address`, `c_type`, `gender`, `contact`, `c_email`) VALUES
(20, 'Mithun', 'Dania,dhaka', 'User', 'Male', 111111, 'mithun@gmail.com'),
(21, 'Piya', 'Dhanmondi,Dhaka', 'User', 'female', 113333, 'piya@gmail.com'),
(22, 'Zahid', 'Dhanmondi,dhaka', 'User', 'Male', 1222222, 'Zahid@gmail.com'),
(23, 'Tithi', 'Motijhil,dhaka', 'User', 'Female', 144444, 'tithi@gmail.com'),
(24, 'Mini', 'Mohammadpur,dhaka', 'User', 'Female', 115555, 'mini@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `f_ID` int(11) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `f_type` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`f_ID`, `f_name`, `f_type`, `price`) VALUES
(30, 'Caesar Salad', 'Salad', 385),
(31, 'Mediterranean Salad', 'Salad', 300),
(32, 'Spicy Rice', 'Lunch', 110),
(33, 'French Fries', 'Snacks', 195),
(34, 'Mutton Boti Kebab', 'Kabab', 100),
(35, 'Chicken Tikka Kebab', 'Kabab', 80),
(36, 'Beef Kebab Roll', 'Kabab', 90),
(37, 'Mutton Khichuri', 'Lunch', 110),
(38, 'Chicken Biriany', 'Dinner', 110),
(39, 'Chocolate Ice cream', 'Dessert', 150),
(40, 'Firni', 'Dessert', 80),
(41, 'Chocolate Pestry', 'Dessert', 200);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rate_ID` int(11) NOT NULL,
  `rate_comment` varchar(40) NOT NULL,
  `rate_like` int(11) NOT NULL,
  `rate_star` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rate_ID`, `rate_comment`, `rate_like`, `rate_star`, `c_id`, `r_id`, `f_id`) VALUES
(100, 'goo', 1, 2, 20, 11, 30),
(101, 'good', 1, 2, 24, 12, 34),
(102, 'average', 1, 2, 21, 15, 39),
(103, 'excellent', 1, 5, 24, 11, 31),
(104, 'very good', 1, 3, 20, 17, 31),
(105, 'not good', 1, 1, 20, 16, 41);

-- --------------------------------------------------------

--
-- Table structure for table `restaurent`
--

CREATE TABLE `restaurent` (
  `rest_ID` int(11) NOT NULL,
  `rest_name` varchar(40) NOT NULL,
  `rest_address` varchar(40) NOT NULL,
  `est_year` int(11) NOT NULL,
  `rest_feature` varchar(40) NOT NULL,
  `rest_website` varchar(40) NOT NULL,
  `rest_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurent`
--

INSERT INTO `restaurent` (`rest_ID`, `rest_name`, `rest_address`, `est_year`, `rest_feature`, `rest_website`, `rest_email`) VALUES
(10, 'Bar B Q Tonight', 'Dhanmondi 27, Dhaka, Bangladesh', 2007, 'Air Condition', 'www.BarBQTonight.com', 'BarBQTonight@gmail.com'),
(11, 'Nandos Bangladesh', '27 Dhanmondi, Dhaka, Bangladesh', 2007, 'Air Condition', 'www.NandosBangladesh.com', 'NandosBangladesh@gmail.com'),
(12, 'Kosturi', 'Zaman Chamber,7th Floor, Gulshan , Dhaka', 2007, 'Air Condition', 'www.Kosturi.com', 'Kosturi@gmail.com'),
(13, 'Bunka', 'Road 96, House 19, Gulshan 2, Dhaka, Ban', 2007, 'Air Condition', 'www.Bunka.com', 'Bunka@gmail.com'),
(14, 'Pizza Hut', 'Gulshan South, Dhaka, Bangladesh', 2007, 'Air Condition', 'www.PizzaHut.com', 'PizzaHut@gmail.com'),
(15, 'Star Kabab & Restaurant', 'Banani, Dhaka, Bangladesh', 2007, 'Air Condition', 'www.StarKabab.com', 'StarKabab@gmail.com'),
(16, 'Grand Nawab', '13/1, Abul Hasnat Road | Satrowja, Near ', 2007, 'Air Condition', 'www.GrandNawab.com', 'GrandNawab@gmail.com'),
(17, '\r\nHakka Dhaka', 'House-66, Road-10, Block-D | Banini, Dha', 2007, 'Air Condition', 'www.Hakkab.com', 'Hakka@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rest_foods`
--

CREATE TABLE `rest_foods` (
  `r_ID` int(11) NOT NULL,
  `f_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`f_ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rate_ID`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `r_id` (`r_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `restaurent`
--
ALTER TABLE `restaurent`
  ADD PRIMARY KEY (`rest_ID`);

--
-- Indexes for table `rest_foods`
--
ALTER TABLE `rest_foods`
  ADD PRIMARY KEY (`r_ID`),
  ADD KEY `f_ID` (`f_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customers` (`C_ID`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`r_id`) REFERENCES `restaurent` (`rest_ID`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`f_id`) REFERENCES `foods` (`f_ID`);

--
-- Constraints for table `rest_foods`
--
ALTER TABLE `rest_foods`
  ADD CONSTRAINT `rest_foods_ibfk_1` FOREIGN KEY (`r_ID`) REFERENCES `restaurent` (`rest_ID`),
  ADD CONSTRAINT `rest_foods_ibfk_2` FOREIGN KEY (`f_ID`) REFERENCES `foods` (`f_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
