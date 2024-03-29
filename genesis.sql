-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 01:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_data`
--

CREATE TABLE `beneficiary_data` (
  `id` int(11) NOT NULL,
  `Staff_id` varchar(255) NOT NULL,
  `Project_id` int(11) DEFAULT NULL,
  `Token` int(11) NOT NULL,
  `Field` varchar(255) DEFAULT NULL,
  `Data` varchar(255) DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary_data`
--

INSERT INTO `beneficiary_data` (`id`, `Staff_id`, `Project_id`, `Token`, `Field`, `Data`, `Created`, `Updated`) VALUES
(25, '2222', 25, 1, 'Gender', 'Male', '2019-06-19 12:33:40', '0000-00-00 00:00:00'),
(26, '2222', 25, 1, 'Education', 'A', '2019-06-19 12:33:40', '0000-00-00 00:00:00'),
(27, '2222', 25, 1, 'Location', 'Msasq', '2019-06-19 12:33:41', '0000-00-00 00:00:00'),
(28, '2222', 25, 1, 'Marital Status', 'Single', '2019-06-19 12:33:41', '0000-00-00 00:00:00'),
(29, '2222', 25, 28, 'Gender', 'Male', '2019-06-19 12:34:16', '0000-00-00 00:00:00'),
(30, '2222', 25, 28, 'Education', 'A', '2019-06-19 12:34:16', '0000-00-00 00:00:00'),
(31, '2222', 25, 28, 'Location', 'Msasq', '2019-06-19 12:34:16', '0000-00-00 00:00:00'),
(32, '2222', 25, 28, 'Marital Status', 'Single', '2019-06-19 12:34:16', '0000-00-00 00:00:00'),
(33, '2222', 25, 32, 'Gender', 'Male', '2019-06-19 12:36:19', '0000-00-00 00:00:00'),
(34, '2222', 25, 32, 'Education', 'A', '2019-06-19 12:36:19', '0000-00-00 00:00:00'),
(35, '2222', 25, 32, 'Location', 'Harare', '2019-06-19 12:36:19', '0000-00-00 00:00:00'),
(36, '2222', 25, 32, 'Marital Status', 'Single', '2019-06-19 12:36:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_fields`
--

CREATE TABLE `beneficiary_fields` (
  `Field_id` int(11) NOT NULL,
  `Project_id` int(11) DEFAULT NULL,
  `Field` varchar(255) DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary_fields`
--

INSERT INTO `beneficiary_fields` (`Field_id`, `Project_id`, `Field`, `Created`, `Updated`) VALUES
(10, 25, 'Gender', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(11, 25, 'Education', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(12, 25, 'Location', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(13, 25, 'Marital Status', '2019-06-18 09:36:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_subfields`
--

CREATE TABLE `beneficiary_subfields` (
  `Subfield_id` int(11) NOT NULL,
  `Field_id` int(11) DEFAULT NULL,
  `Project_id` int(11) DEFAULT NULL,
  `Subfield` varchar(255) DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary_subfields`
--

INSERT INTO `beneficiary_subfields` (`Subfield_id`, `Field_id`, `Project_id`, `Subfield`, `Created`, `Updated`) VALUES
(8, 10, 25, 'Male', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(9, 10, 25, 'Female', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(10, 11, 25, 'A', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(11, 11, 25, 'B', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(12, 11, 25, 'C', '2019-06-18 09:17:07', '0000-00-00 00:00:00'),
(13, 13, 25, 'Single', '2019-06-18 09:36:00', '0000-00-00 00:00:00'),
(14, 13, 25, 'Divorced', '2019-06-18 09:36:00', '0000-00-00 00:00:00'),
(15, 13, 25, 'Widow', '2019-06-18 09:36:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donated`
--

CREATE TABLE `donated` (
  `Item_id` int(11) NOT NULL,
  `Donor_id` int(11) DEFAULT NULL,
  `Project` varchar(255) DEFAULT NULL,
  `Amount` varchar(255) DEFAULT NULL,
  `Created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donated`
--

INSERT INTO `donated` (`Item_id`, `Donor_id`, `Project`, `Amount`, `Created`, `Updated`) VALUES
(1, 12, 'Chimanimani Energy Project', '20000', '2019-06-19 10:21:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `Donor_id` int(11) NOT NULL,
  `Contact` varchar(255) DEFAULT NULL,
  `Organization` varchar(255) DEFAULT NULL,
  `Physical_Address` text,
  `Email` varchar(255) DEFAULT NULL,
  `Specilization` varchar(255) DEFAULT NULL,
  `Donoted` varchar(10) DEFAULT NULL,
  `Disbursement` double DEFAULT NULL,
  `Region` varchar(255) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`Donor_id`, `Contact`, `Organization`, `Physical_Address`, `Email`, `Specilization`, `Donoted`, `Disbursement`, `Region`, `Created`, `Updated`) VALUES
(8, 'Bill Gates', 'Bill Gates Foundation', '55 America', 'billgates@foundation.net', 'Various', 'No', 100000, 'Africa', '2019-06-19 10:22:17', '0000-00-00 00:00:00'),
(9, 'David Doe', 'Plan International', '55 George Street  UK \r\n                ', 'davi@plan.net', 'Various', 'No', 12000, 'Sourthen Africa', '2019-06-19 10:22:17', '0000-00-00 00:00:00'),
(10, 'Henrieeta Fore', 'UNICEDF', '                  \r\n         United States Of America      ', 'info@unicef.org', 'Child care and mothers', 'No', 0, '', '2019-06-19 10:22:17', '0000-00-00 00:00:00'),
(11, 'Obadiah Moyo', 'Zimbabwe Agriculture Development Trsut', '44 The Chase\r\nMt. Pleasant\r\nHarare, Zimbabwe', 'info@zadt.co.zw', 'small holder farming sectors', 'No', 0, '', '2019-06-19 10:22:17', '0000-00-00 00:00:00'),
(12, 'Adminstrator', 'SNV', 'Parkstraat 83\r\n2514 JG The Hague\r\nThe Netherlands\r\n                ', 'info@snv.org', 'Agriculture and Energy', 'Yes', 1000000, '', '2019-06-19 10:22:17', '0000-00-00 00:00:00'),
(13, 'The Director', 'JLIFAD', '                  \r\n     Asia & Pacific\r\nEast & Southern Africa\r\nLatin America & Caribbean\r\nNear East, North Africa, Europe and Central Asia\r\nWest & Central Africa           ', 'ifad@ifad.org', 'Agriculture for Rural People', 'No', 190200000, 'Italy', '2019-06-19 10:33:31', '0000-00-00 00:00:00'),
(14, 'The DIRECTOR', 'Zimbabwe Reconstruction Fund (ZIMREF)', '1818 H Street, NW Washington, DC 20433 the USA\r\nTel : (202) 473-1000\r\n                ', 'info@worldbank.org', 'Support various sectors', 'No', 12555667, 'United States Of America', '2019-06-19 10:42:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Staff_id` varchar(30) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(60) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Physical_Address` text,
  `Phone` varchar(20) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Position` varchar(60) DEFAULT NULL,
  `Password` text,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Staff_id`, `Name`, `Surname`, `Department`, `Email`, `Physical_Address`, `Phone`, `Gender`, `Position`, `Password`, `Created`, `Updated`) VALUES
('0000', 'John', 'Doe', 'SUPPORT', 'john@quatum.co.zw', 'Msasa Harare', '0718831297', 'Male', 'Finance Manager', '$2y$12$R.4Y1ty3YoCvWZRoUx5HCuqck/mSU/AGT4BERVKswrT4hDLx/7Fqy', '2019-06-19 10:22:55', '0000-00-00 00:00:00'),
('1111', 'Nyasha', 'Chikobvore', 'PROJECT MANAGER', 'nchikobvor@gmail.com', 'Zimre Park Ruwa      ', '0775531297', 'Male', 'Project Manager', '$2y$12$.v7EXStPgEzch758Huwdh.3IBmao/UWZDxJ6W5YtBjW69KafpJnT6', '2019-06-19 10:22:55', '0000-00-00 00:00:00'),
('12345', 'Leonard', 'Mutambanengwe', 'BUSINESS DEVELOPMENT', 'leonard@quatumanalytica.co.zw', 'Msasa Harare', '0771000234', 'Male', 'Leader', '$2y$12$GuImxdgg4b1Sp5FTitN21uNrQQ6JP35zOAwCBwX2VfVIypdVAaK3a', '2019-06-19 10:22:55', '0000-00-00 00:00:00'),
('123456', 'Shingai', 'Mutambanengwe', 'ADMINSTRATION', 'shingi@quatum.co.zw', 'Msasa Harare', '0771000000', 'Male', 'Adminstrator', '$2y$12$wUovflRe70s5gWqAyAIbkO2hzjB/JvtKnquMxd5e/1AD6m4JznCXC', '2019-06-19 10:22:55', '0000-00-00 00:00:00'),
('2222', 'Ranganai', 'Manatsa', 'OFFICER', 'rn@gmail.com', 'harare', '0777111222', 'Male', 'Field Officer', '$2y$12$m9DH7cSDoDvTx4oWHF4GDuyw6g4HBDLePT.lqMsI/CYzGKLUmZQRi', '2019-06-19 10:22:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Project_id` int(11) NOT NULL,
  `REF_NUM` varchar(6) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text,
  `Type` varchar(255) DEFAULT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Project_id`, `REF_NUM`, `Title`, `Description`, `Type`, `Created`, `Updated`) VALUES
(23, '100023', 'ABC', '\r\n              LOAQHDSW  ', 'Agriculture Project', '2019-06-19 10:23:39', '0000-00-00 00:00:00'),
(24, '100024', 'ABC', 'WS\r\n                ', 'Agriculture Project', '2019-06-19 10:23:39', '0000-00-00 00:00:00'),
(25, '100025', 'INSPIRE', 'MIS', 'Agriculture Project', '2019-06-19 10:23:39', '0000-00-00 00:00:00'),
(26, '100026', 'Project', 's\r\n                ', 'Agriculture Project', '2019-06-19 10:23:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects_budgets`
--

CREATE TABLE `projects_budgets` (
  `Budget_id` int(11) NOT NULL,
  `Project_id` int(11) DEFAULT NULL,
  `Resource` varchar(255) DEFAULT NULL,
  `Estimated_cost` double DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_budgets`
--

INSERT INTO `projects_budgets` (`Budget_id`, `Project_id`, `Resource`, `Estimated_cost`, `Status`, `Created`, `Updated`) VALUES
(1, 23, 'as', 2, 'PENDING', '2019-06-19 10:24:14', '0000-00-00 00:00:00'),
(2, 23, 'A', 2000, 'PENDING', '2019-06-19 10:24:14', '0000-00-00 00:00:00'),
(3, 23, 'qwe', 45, 'PENDING', '2019-06-19 10:24:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project_files`
--

CREATE TABLE `project_files` (
  `File_id` int(11) NOT NULL,
  `Project_id` int(11) DEFAULT NULL,
  `File_name` varchar(255) DEFAULT NULL,
  `File_description` text,
  `File_path` text,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_files`
--

INSERT INTO `project_files` (`File_id`, `Project_id`, `File_name`, `File_description`, `File_path`, `Created`, `Updated`) VALUES
(16, 25, 'demo.png', 'Test1', 'files/demo.png', '2019-06-20 09:42:14', '0000-00-00 00:00:00'),
(17, 25, 'BHKV2877 (1).jpg', 'Test2', 'files/BHKV2877 (1).jpg', '2019-06-20 09:46:34', '0000-00-00 00:00:00'),
(18, 25, 'GDDS2082 (1).jpg', 'a', 'files/GDDS2082 (1).jpg', '2019-06-20 09:46:51', '0000-00-00 00:00:00'),
(19, 23, 'DMFL7223.jpg', 'AA', 'files/DMFL7223.jpg', '2019-06-20 12:47:41', '0000-00-00 00:00:00'),
(20, 24, 'JLYL6852.JPG', 'aSED', 'files/JLYL6852.JPG', '2019-06-20 12:48:24', '0000-00-00 00:00:00'),
(21, 26, 'THSK4041.jpg', 'Qas', 'files/THSK4041.jpg', '2019-06-20 12:48:57', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiary_data`
--
ALTER TABLE `beneficiary_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `beneficiary_fields`
--
ALTER TABLE `beneficiary_fields`
  ADD PRIMARY KEY (`Field_id`),
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `beneficiary_subfields`
--
ALTER TABLE `beneficiary_subfields`
  ADD PRIMARY KEY (`Subfield_id`),
  ADD KEY `Project_id` (`Project_id`),
  ADD KEY `Field_id` (`Field_id`);

--
-- Indexes for table `donated`
--
ALTER TABLE `donated`
  ADD PRIMARY KEY (`Item_id`),
  ADD KEY `Donor_id` (`Donor_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`Donor_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Staff_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Project_id`);

--
-- Indexes for table `projects_budgets`
--
ALTER TABLE `projects_budgets`
  ADD PRIMARY KEY (`Budget_id`),
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `project_files`
--
ALTER TABLE `project_files`
  ADD PRIMARY KEY (`File_id`),
  ADD KEY `Project_id` (`Project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiary_data`
--
ALTER TABLE `beneficiary_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `beneficiary_fields`
--
ALTER TABLE `beneficiary_fields`
  MODIFY `Field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `beneficiary_subfields`
--
ALTER TABLE `beneficiary_subfields`
  MODIFY `Subfield_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `donated`
--
ALTER TABLE `donated`
  MODIFY `Item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `Donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `projects_budgets`
--
ALTER TABLE `projects_budgets`
  MODIFY `Budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_files`
--
ALTER TABLE `project_files`
  MODIFY `File_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficiary_data`
--
ALTER TABLE `beneficiary_data`
  ADD CONSTRAINT `beneficiary_data_ibfk_1` FOREIGN KEY (`Project_id`) REFERENCES `projects` (`Project_id`);

--
-- Constraints for table `beneficiary_fields`
--
ALTER TABLE `beneficiary_fields`
  ADD CONSTRAINT `beneficiary_fields_ibfk_1` FOREIGN KEY (`Project_id`) REFERENCES `projects` (`Project_id`);

--
-- Constraints for table `beneficiary_subfields`
--
ALTER TABLE `beneficiary_subfields`
  ADD CONSTRAINT `beneficiary_subfields_ibfk_1` FOREIGN KEY (`Project_id`) REFERENCES `projects` (`Project_id`),
  ADD CONSTRAINT `beneficiary_subfields_ibfk_2` FOREIGN KEY (`Field_id`) REFERENCES `beneficiary_fields` (`Field_id`);

--
-- Constraints for table `donated`
--
ALTER TABLE `donated`
  ADD CONSTRAINT `donated_ibfk_1` FOREIGN KEY (`Donor_id`) REFERENCES `donors` (`Donor_id`);

--
-- Constraints for table `projects_budgets`
--
ALTER TABLE `projects_budgets`
  ADD CONSTRAINT `projects_budgets_ibfk_1` FOREIGN KEY (`Project_id`) REFERENCES `projects` (`Project_id`);

--
-- Constraints for table `project_files`
--
ALTER TABLE `project_files`
  ADD CONSTRAINT `project_files_ibfk_1` FOREIGN KEY (`Project_id`) REFERENCES `projects` (`Project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
