-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 12:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tdetails`
--

CREATE TABLE `tdetails` (
  `id` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_type` varchar(50) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `t_date` varchar(50) NOT NULL,
  `t_time` varchar(50) NOT NULL,
  `t_place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tdetails`
--

INSERT INTO `tdetails` (`id`, `t_name`, `t_type`, `s_name`, `t_date`, `t_time`, `t_place`) VALUES
(1, 'BWF Uber Cup', 'Single', 'Badminton', '23.08.2022', '8am-2pm', 'AIUB'),
(2, 'Bone Crushers Anonymous', 'Teams', 'Football', '24.08.2022', '9am-3pm', 'M Stadium'),
(3, 'Cricket Avengers', 'Teams', 'Criket', '25.08.2022', '9am-4pm', 'MT Stadium'),
(4, 'Basket Flyers', 'Teams', 'Basketball', '29/08/2022', '8am-2pm', 'AIUB'),
(6, 'T20', 'Teams', 'cricket', '2022-08-31', '9am-3am', 'M.Stadium'),
(7, 'Red Tide', 'Teams', 'cricket', '2022-09-01', '9am-3am', 'AIUB'),
(8, 'Justice Bringers', 'Single', 'Badminton', '2022-09-02', '8am-3am', 'AIUB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `dob`, `address`, `email`, `uname`, `password`) VALUES
(3, 'Tahmina', 'Raat', 'Female', '2000-03-29', 'Dhaka', 'tahmina@gmail.com', '@tahmina', '12345'),
(5, 'Mahadi', 'Maha', 'Male', '1999-12-10', 'Bashundhara', 'mahadi17@gmail.com', '@maha', '231'),
(7, 'Tasnim', 'Tasu', 'Female', '1999-12-07', 'Uttara', 'tasnim54@gmail.com', 'tasu', '9876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tdetails`
--
ALTER TABLE `tdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tdetails`
--
ALTER TABLE `tdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
