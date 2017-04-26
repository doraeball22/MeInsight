-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 06:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `me_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(16) NOT NULL,
  `password` varchar(8) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `firstname`, `lastname`, `email`) VALUES
('001', '001', 'admin', 'นิลชัย', 'admin_test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `owner` varchar(30) NOT NULL,
  `test_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_text`, `owner`, `test_name`) VALUES
(2, 'ดีมากๆ ๆ', '', 'ความสนใจในอาชีพ'),
(3, 'ดีมากๆ ๆ', 'Admin', 'บุคลิกภาพ16PF'),
(4, 'ดีมากๆ ๆ', '', 'พหุปัญญา'),
(5, 'ดีมากๆ ๆ', 'Admin', 'บุคลิกภาพ16PF'),
(6, 'tyutydi', 'Admin', 'บุคลิกภาพ16PF'),
(7, 'tyutydi', 'Admin', 'บุคลิกภาพ16PF');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job` text NOT NULL,
  `job_group` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job`, `job_group`) VALUES
(2, 'sadfas', 'กลุ่มอาชีพทางธุระกิจ'),
(3, '2', 'การก่อสร้าง และอุตสาหกรรมการผลิต'),
(4, '3', 'การศึกษา'),
(5, '4', 'งานราชการและองค์กรไม่หวังผลกำไร'),
(6, '5', 'แวดวงสุขภาพ'),
(7, '6', 'เทคโนโลยีและสารสนเทศ'),
(8, '7', 'ศิลปะ บันเทิง และวรรณกรรม'),
(9, '8', 'วิศวกรรม วิทยาศาสตร์ในอุตสาหกรรม'),
(10, '9', 'ธุรกิจบริการ'),
(11, '10', 'แวดวงจิตวิญญาณ'),
(12, '11', 'อาชีพในเครื่องแบบ'),
(13, '12', 'แวดวงอื่นๆ'),
(14, '1', '1'),
(15, 'fgsef', 'การศึกษา'),
(16, 'fgsef', 'การศึกษา'),
(17, 'fgsef', 'การศึกษา'),
(18, 'rgehayr', 'การศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `question_16pf`
--

CREATE TABLE `question_16pf` (
  `q_16pf_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `pers_type` varchar(2) NOT NULL,
  `positive` text NOT NULL,
  `negative` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_16pf`
--

INSERT INTO `question_16pf` (`q_16pf_id`, `question`, `choice1`, `choice2`, `choice3`, `pers_type`, `positive`, `negative`) VALUES
(1, 'ฉันเต็มใจให้เพื่อนยืมใช้ของของฉัน', 'ใช่', 'ไม่ใช่', 'ใช่', 'A', 'เข้าสังคม', 'เก็บตัว'),
(2, 'b', 'ใช่', 'ไม่ใช่', 'ไม่แน่ใจ', 'B', 'เข้าสังคม', 'เก็บตัว'),
(8, 'ดกเำฟพ', 'ดกเก', 'หกเด', 'หกดเ', 'Q3', 'ควบคุมตนเองได้', 'ไม่มีวินัย'),
(10, 'we', 'ewtrtywr', 'wertwrty', 'ewtrtywr', 'E', 'ใช้อำนาจ', 'ใช้อำนาจ'),
(11, 'etyw5y', 'ertew', 'erwt', 'wert', 'E', 'ใช้อำนาจ', 'ใช้อำนาจ');

-- --------------------------------------------------------

--
-- Table structure for table `question_intel`
--

CREATE TABLE `question_intel` (
  `q_Intel_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `intell` text NOT NULL,
  `score_yes` int(11) NOT NULL DEFAULT '1',
  `score_no` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_intel`
--

INSERT INTO `question_intel` (`q_Intel_id`, `question`, `intell`, `score_yes`, `score_no`) VALUES
(2, '2', 'ตรรกศาสตร์และคณิตศาสตร์', 1, -1),
(4, '4', 'ร่างกายและการเคลื่อนไหว', 1, -1),
(5, '5', 'ดนตรี', 1, -1),
(6, '6', 'มนุษยสัมพันธ์', 1, -1),
(7, '7', 'การเข้าใจตนเอง', 1, -1),
(8, '8', 'ธรรมชาติวิทยา', 1, -1),
(9, 'ฉันสามารถพูดได้อย่างคล่อง แคล้ว\r\n\r\n', 'ภาษา', 1, -1),
(10, 'ฉันชอบเขียนบันทึกประจำวันหรือสิ่งต่างๆ ที่ฉันพบเจอ', 'ภาษา', 1, -1),
(11, 'ฉันสามารถฟังจับใจความสำคัญได้อย่างรวดเร็ว', 'ภาษา', -1, 1),
(12, '55555hh', 'มิติสัมพันธ์hh', 1, -1);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `s_id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `test_name` varchar(35) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`s_id`, `user`, `test_name`, `score`) VALUES
(1, 'surin_nin675@hotmail.com', 'บุคลิกภาพ16PF', 10),
(2, 'surin_nin675@hotmail.com', 'พหุปัญญา', 9),
(3, 'surin_nin675@hotmail.com', 'ความสนใจในอาชีพ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `sex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `pass`, `sex`) VALUES
('สุรินทร์', 'นิลชัย', 'surin_nin675@hotmail.com', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `question_16pf`
--
ALTER TABLE `question_16pf`
  ADD PRIMARY KEY (`q_16pf_id`);

--
-- Indexes for table `question_intel`
--
ALTER TABLE `question_intel`
  ADD PRIMARY KEY (`q_Intel_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `question_16pf`
--
ALTER TABLE `question_16pf`
  MODIFY `q_16pf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `question_intel`
--
ALTER TABLE `question_intel`
  MODIFY `q_Intel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
