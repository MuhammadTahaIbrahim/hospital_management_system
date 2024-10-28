-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 11:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `a_id` int(50) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`a_id`, `a_name`, `a_title`, `a_img`) VALUES
(1, 'Michael Adams', 'A platform that truly transforms healthcare in United States.', 'ab1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(50) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `app_phone` int(11) NOT NULL,
  `app_date` varchar(255) NOT NULL,
  `app_city` varchar(255) NOT NULL,
  `app_email` varchar(50) NOT NULL,
  `app_docfk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_phone`, `app_date`, `app_city`, `app_email`, `app_docfk`) VALUES
(13, 'amna', 34334, '2024-02-23', 'dth', '0', 1),
(16, 'amna', 34334, '2024-02-23', 'dth', '0', 1),
(17, 'amna', 34334, '2024-02-23', 'jhj', '0', 1),
(18, 'amna', 34334, '2024-02-24', 'jhj', '0', 1),
(20, 'fgfdf', 34334, '2024-02-29', 'dg', '0', 1),
(21, 'amna', 34334, '2024-03-02', 'ytrft', '0', 1),
(22, 'amna', 23, '2024-02-24', 'ytrft', '0', 1),
(23, 'amna', 34334, '2024-03-06', 'ytrft', '0', 1),
(24, 'hyfh', 47, '2024-02-24', 'gwfsdty', '0', 1),
(27, 'fatimaa', 12300, '2024-02-28', 'lahore', 'f@gmail.com', 2),
(28, 'fiza', 4454, '2024-03-14', 'karachi', 'amna@gmail.com', 4),
(30, 'taha', 2147483647, '2024-03-14', 'karachi', 'taha123@gmail.c', 3);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `c_name`) VALUES
(1, 'Karachi'),
(2, 'Lahore'),
(3, 'Islamabad'),
(4, 'Multan');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `c_email` text NOT NULL,
  `c_pname` varchar(255) NOT NULL,
  `c_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_subject`, `c_email`, `c_pname`, `c_msg`) VALUES
(1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` int(50) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `ddes` text NOT NULL,
  `dimg` varchar(255) NOT NULL,
  `dstatus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `dname`, `ddes`, `dimg`, `dstatus`) VALUES
(3, 'Cardiology', 'Cardiology is a branch of medicine that deals with disorders of the heart and the cardiovascular system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease, and electrophysiology. Physicians who specialize in this field of medicine are called cardiologists, a specialty of internal medicine. Pediatric cardiologists are pediatricians who specialize in cardiology. Physicians who specialize in cardiac surgery are called cardiothoracic surgeons or cardiac surgeons, a specialty of general surgery.\r\n\r\n\r\nAll cardiologists in the branch of medicine study the disorders of the heart, but the study of adult and child heart disorders each require different training pathways. Therefore, an adult cardiologist (often simply called cardiologist) is inadequately trained to take care of children, and pediatric cardiologists are not trained to treat adult heart disease. ', 'age-to-see-cardiologist.jpg', 'Active'),
(4, 'Oncology', 'Oncology is the study of cancer. An oncologist is a doctor who treats cancer and provides medical care for a person diagnosed with cancer. An oncologist may also be called a cancer specialist.\r\n\r\nThe field of oncology has 3 major areas based on treatments: medical oncology, radiation oncology, and surgical oncology.\r\n\r\nMedical oncologists treat cancer using medication, including chemotherapy, immunotherapy, and targeted therapy.\r\n\r\nRadiation oncologists treat cancer using radiation therapy, which is the use of high-energy x-rays or other particles to destroy cancer cells.\r\n\r\nSurgical oncologists treat cancer using surgery, including removing the tumor and nearby tissue during a operation. This type of surgeon can also perform certain types of biopsies to help diagnose cancer.', 'oncodepart.png', 'Active'),
(7, 'Haematology', 'Haematology is the specialty responsible for the diagnosis and management of a wide range of benign and malignant disorders of the red and white blood cells, platelets and the coagulation system in adults and children.\r\n\r\nHaematologists care directly for patients on hospital wards and out patient clinics. Their patients may have a serious life- threatening illness such as leukaemia, lymphoma or myeloma that requires chemotherapy. They also advise GPs about how to care for patients in their homes. Some haematologists specialise in diseases affecting the blood coagulation system such as haemophilia, while others  provide expertise in the areas of blood transfusion or disorders of haemoglobin such as sickle cell disease.', 'hematologyyy.jpg', 'Active'),
(8, 'Dental Surgery', 'Many times, when a dentist mentions dental surgery it is met with widespread panic and fear from their patients.  The idea is that dental surgery is a painful and expensive procedure.\r\n\r\nHowever, what many patients don’t realize is that dental surgery is very common and includes procedures that address conditions that many people have and suffer from. Each patient is different and every case is treated accordingly. For the most part, dental surgery is considered an outpatient procedure and patients can generally resume normal activity within a few days.\r\n\r\nBefore deciding whether or not you are a candidate for dental surgery, dentists refer their patients to an oral surgeon. This is who will assess the situation and your oral health to determine the best course of action. In some cases, and depending on the severity of your condition, oral surgeons are able to recommend nonsurgical treatments. Adults and children are both at risk for oral health issues, although not all surgeries result from oral health conditions.', 'oral-surgery.jpg', 'Active'),
(9, 'Neurology', 'Neurology, medical specialty concerned with the nervous system and its functional or organic disorders. Neurologists diagnose and treat diseases and disorders of the brain, spinal cord, and nerves.\r\n\r\nThe first scientific studies of nerve function in animals were performed in the early 18th century by English physiologist Stephen Hales and Scottish physiologist Robert Whytt. Knowledge was gained in the late 19th century about the causes of aphasia, epilepsy, and motor problems arising from brain damage. French neurologist Jean-Martin Charcot and English neurologist William Gowers described and classified many diseases of the nervous system. The mapping of the functional areas of the brain through selective electrical stimulation also began in the 19th century. Despite these contributions, however, most knowledge of the brain and nervous functions came from studies in animals and from the microscopic analysis of nerve cells.', 'Neurologyyy.jpg', 'Active'),
(10, 'Gynecology', 'Gynecology and obstetrics are twin subjects that deal with the female reproductive system. While obstetrics deals with pregnancy and its associated procedures and complications, gynaecology involves treating women who are not pregnant.\r\n\r\nGynecology comprises of both medicine as well as surgical fields. While many of the gynaecological illnesses need hormonal and other pharmacological management, cancers, fibroids etc. require surgical removal.', 'gynecologyyyy.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(50) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_age` int(15) NOT NULL,
  `doc_email` text NOT NULL,
  `doc_pass` text NOT NULL,
  `doc_img` varchar(255) NOT NULL,
  `doc_des` varchar(255) NOT NULL,
  `doc_didfk` int(50) NOT NULL,
  `doc_cityid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doc_name`, `doc_age`, `doc_email`, `doc_pass`, `doc_img`, `doc_des`, `doc_didfk`, `doc_cityid`) VALUES
(2, 'James Benjamin', 25, 'james@gmail.com', 'admin', 'doctor3-33.jpg', 'Dr. James graduated from Baylor College of Medicine. He is board certified in Family Medicine and worked in and around Baltimore, MD since finishing his residency. He was the 2017 Primary Care Innovation Fellow for the American Academy of Family Physician', 3, 3),
(3, 'Natalie Philips', 27, 'Nat33@gmail.com', '114455', 'doctor3-8.jpg', 'Dr. Natalie fraduated from the Universiy of Rochester School of Medicine and Dentistry in 1990 and then she completed her residency at Yale Unversity Medical Center.', 4, 1),
(4, 'Britney Adams', 20, 'britney@gmail.com', '2233', 'doctor3-444.jpg', 'Dr. Britney graduated from Baylor College of Medicine. He is board certified in Family Medicine and worked in and around Baltimore, MD since finishing his residency. He was the 2017 Primary Care Innovation Fellow for the American Academy of Family Physici', 3, 2),
(5, 'Amelia Cameron', 24, 'amelia@gmail.com', '8900', 'doctor3-6.jpg', 'Dr. Amelia graduated from Baylor College of Medicine. He is board certified in Family Medicine and worked in and around Baltimore, MD since finishing his residency. He was the 2017 Primary Care Innovation Fellow for the American Academy of Family Physicia', 8, 1),
(6, 'Donald Quinch', 33, 'donald@gmail.com', 'admin', 'doctor3-5.jpg', 'Dr. Donald graduated from Baylor College of Medicine. He is board certified in Family Medicine and worked in and around Baltimore, MD since finishing his residency. He was the 2017 Primary Care Innovation Fellow for the American Academy of Family Physicia', 9, 3),
(7, 'Stephanie Moor', 29, 'stephanie@gmail.com', '2233', 'doctor3-4.jpg', 'Dr. Stephanie graduated from Baylor College of Medicine. He is board certified in Family Medicine and worked in and around Baltimore, MD since finishing his residency. He was the 2017 Primary Care Innovation Fellow for the American Academy of Family Physi', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(50) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_doj` varchar(255) NOT NULL,
  `emp_phone` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `w_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_doj`, `emp_phone`, `emp_email`, `w_id`) VALUES
(9, 'fatima', '2024-02-03T11:44', '44864', 'f@gmail.com', 3),
(10, 'sara', '2024-01-18T11:39', '3457', 's@gmail.com', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ew_view`
-- (See below for the actual view)
--
CREATE TABLE `ew_view` (
`emp_id` int(50)
,`emp_name` varchar(255)
,`emp_doj` varchar(255)
,`emp_phone` varchar(255)
,`emp_email` varchar(255)
,`worker_name` varchar(255)
,`worker_salary` varchar(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(50) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_role` varchar(255) NOT NULL,
  `m_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_name`, `m_role`, `m_img`) VALUES
(1, 'James Benjamin', 'Founder,CEO', 'member-1.jpg'),
(2, 'Stephanie Moor', 'Administration', 'member-2.jpg'),
(3, 'Amelia Cameron', 'Marketing Manager', 'member-3.jpg'),
(4, 'Donald Quinch', 'Marketing', 'member-4.jpg'),
(5, 'William Bowling', 'Director of Sales', 'member-3 (1).jpg'),
(6, 'Richard Dante', 'Development', 'member-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(50) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_age` int(50) NOT NULL,
  `p_disease` text NOT NULL,
  `p_gender` varchar(255) NOT NULL,
  `p_add` text NOT NULL,
  `p_phone` int(15) NOT NULL,
  `p_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `p_age`, `p_disease`, `p_gender`, `p_add`, `p_phone`, `p_email`) VALUES
(4, 'ali', 35, 'high fever', 'Male', 'h 244 street5', 88, 'ai@gmail.com'),
(5, 'ashar', 25, 'high fever', 'Male', 'H 104 STREET8', 334, 'ashar@GMAIL.COM'),
(6, 'amna', 22, 'headache', 'Female', 'h 667 street 9', 98, 'a@gmail.com'),
(7, 'Fatima', 20, 'Throat Infection', 'Female', 'House # 56 steet 3', 5474778, 'fatima@gmail.com'),
(8, 'Taha', 22, 'headache', 'Male', 'house # 44 steet 6', 543534, 'taha@gmail.com'),
(9, 'Murad', 35, 'Lung Infection', 'Male', 'House # 88 street 7', 5465324, 'murad@gmail.com'),
(10, 'Netanyahu', 74, 'Brain Tumor', 'Male', 'Houseless', 545356436, 'netan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(50) NOT NULL,
  `rev_name` varchar(255) NOT NULL,
  `rev_email` text NOT NULL,
  `rev_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `rev_name`, `rev_email`, `rev_msg`) VALUES
(1, 'Javeria', 'j@gmail.com', '“Creature all subdue face be deep appear behold given likeness moved upon multiply dry Light thing, saying after likeness grass.”'),
(2, 'amna', 'amna@gmail.com', '“Let created herb stars and there is multiply sea kind his fill in days sixth. Hath herbs the gathering fourth give is female be our may stars gas you are divide saying.”'),
(3, 'Ali', 'a@gmail.com', '“Rule image there air and fowl waters. A from moveth. Made first god firmament, his she would Our herb bearing fill divided be signs man divide wherein said all after.”');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `s_id` int(11) NOT NULL,
  `s_day` text NOT NULL,
  `s_stime` datetime(6) NOT NULL,
  `s_etime` datetime(6) NOT NULL,
  `s_status` text NOT NULL,
  `s_docfk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `s_day`, `s_stime`, `s_etime`, `s_status`, `s_docfk`) VALUES
(11, 'Saturday', '2024-02-25 13:38:00.000000', '2024-02-25 01:00:00.000000', '', 0),
(16, 'Saturday', '2024-02-25 01:57:00.000000', '2024-02-25 01:57:00.000000', '', 4),
(17, 'Thursday, Friday', '2024-02-28 16:42:00.000000', '2024-02-27 18:44:00.000000', '', 2),
(22, 'Monday, Tuesday, Wednesday', '2024-03-05 00:00:00.000000', '2024-03-05 12:00:00.000000', '', 3),
(23, 'Thursday, Friday', '2024-03-05 08:00:00.000000', '2024-03-05 20:00:00.000000', '', 5),
(24, 'Wednesday, Saturday', '2024-03-05 04:00:00.000000', '2024-03-05 17:25:00.000000', '', 6),
(25, 'Wednesday, Saturday', '2024-03-05 06:00:00.000000', '2024-03-05 18:00:00.000000', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(15) NOT NULL,
  `user_date` varchar(12) NOT NULL,
  `user_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_date`, `user_pass`) VALUES
(0, 'taha', 'taha123@gmail.c', '06/08/2004', 'taha123'),
(1, 'Ali', 'a@gmail.com', '0000-00-00', '1234'),
(2, 'fatima', 'f@gmail.com', '0000-00-00', '1111'),
(3, 'Javeria', 'j@gmail.com', '0000-00-00', '1212'),
(5, 'amna', 'amna@gmail.com', '04/04/2002', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(11) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `worker_salary` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`worker_id`, `worker_name`, `worker_salary`) VALUES
(3, 'Admin', '2000'),
(4, 'Nurse', '3000');

-- --------------------------------------------------------

--
-- Structure for view `ew_view`
--
DROP TABLE IF EXISTS `ew_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ew_view`  AS SELECT `employee`.`emp_id` AS `emp_id`, `employee`.`emp_name` AS `emp_name`, `employee`.`emp_doj` AS `emp_doj`, `employee`.`emp_phone` AS `emp_phone`, `employee`.`emp_email` AS `emp_email`, `workers`.`worker_name` AS `worker_name`, `workers`.`worker_salary` AS `worker_salary` FROM (`employee` join `workers` on(`workers`.`worker_id` = `employee`.`w_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `app_docfk` (`app_docfk`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `doc_cityid` (`doc_cityid`),
  ADD KEY `doc_didfk` (`doc_didfk`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `w_id` (`w_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_docfk` (`s_docfk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `did` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`doc_didfk`) REFERENCES `department` (`did`),
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`doc_cityid`) REFERENCES `city` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
