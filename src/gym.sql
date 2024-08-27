-- Below are the queries used to create the database and its tables in MySQL:
-- Table structure for table `gym`

CREATE TABLE `gym` (
  `gym_id` varchar(20) NOT NULL,
  `gym_name` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL
)

-- Dumping data for table `gym`

INSERT INTO `gym` (`gym_id`, `gym_name`, `address`, `type`) VALUES
('GYM1', 'FITNESS HUB', 'Green Park', 'women'),
('GYM2', 'POWERHOUSE GYM', 'Downtown Avenue', 'unisex'),
('GYM3', 'IRON PARADISE', 'Sunset Boulevard', 'men'),
('GYM4', 'ENERGY ZONE', 'Maple Street', 'unisex'),
('GYM5', 'BODY SCULPT GYM', 'Kingston Road', 'women'),
('GYM6', 'MUSCLE FACTORY', 'Liberty Lane', 'men'),
('GYM7', 'ULTIMATE FITNESS', 'Broadway', 'unisex'),
('GYM8', 'PEAK PERFORMANCE GYM', 'Elm Street', 'men')
('GYM9', 'Turbo', 'Papardo', 'men');


-- Table structure for table `login`

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
)

-- Dumping data for table `login`

INSERT INTO `login` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', 'admin'),
(2, 'user1', 'password1'),
(3, 'user2', 'password2'),
(4, 'user3', 'password3');


-- Table structure for table `member`

CREATE TABLE `member` (
  `mem_id` varchar(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `package` varchar(10) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `pay_id` varchar(20) DEFAULT NULL,
  `trainer_id` varchar(20) DEFAULT NULL
) 

-- Dumping data for table `member`

INSERT INTO `member` (`mem_id`, `name`, `dob`, `age`, `package`, `mobileno`, `pay_id`, `trainer_id`) VALUES
('M1', 'Giuseppe', '18/08/1994', '26', '5200', '3331122334', 'Payment1', 'T1'),
('M2', 'Lorenzo', '26/06/1998', '21', '4800', '3399988776', 'Payment2', 'T2'),
('M3', 'Francesca', '22/07/1997', '22', '6400', '3388877665', 'Payment3', 'T3'),
('M4', 'Alessia', '21/08/1998', '21', '5400', '3377665544', 'Payment4', 'T4'),
('M5', 'Matteo', '24/06/1999', '20', '6000', '3355443322', 'Payment5', 'T5'),
('M6', 'Giovanni', '15/05/1995', '25', '5800', '3332211000', 'Payment6', 'T6'),
('M7', 'Sofia', '10/09/1996', '23', '5000', '3399776655', 'Payment7', 'T7'),
('M8', 'Elena', '02/04/2000', '19', '5500', '3388665544', 'Payment8', 'T8'),
('M9', 'Riccardo', '28/11/1997', '22', '6200', '3377554433', 'Payment9', 'T9');

-- Table structure for table `payment`

CREATE TABLE `payment` (
  `pay_id` varchar(20) NOT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `gym_id` varchar(20) DEFAULT NULL
)

-- Dumping data for table `payment`

INSERT INTO `payment` (`pay_id`, `amount`, `gym_id`) VALUES
('Payment1', '5200', 'GYM1'),
('Payment2', '4800', 'GYM2'),
('Payment3', '6400', 'GYM3'),
('Payment4', '5400', 'GYM4'),
('Payment5', '6000', 'GYM5'),
('Payment6', '4500', 'GYM6'),
('Payment7', '5500', 'GYM7'),
('Payment8', '6100', 'GYM8')
('Payment9', '4800', 'GYM9');

-- Table structure for table `trainer`


CREATE TABLE `trainer` (
  `trainer_id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `pay_id` varchar(20) DEFAULT NULL
)

-- Dumping data for table `trainer`


INSERT INTO `trainer` (`trainer_id`, `name`, `time`, `mobileno`, `pay_id`) VALUES
('T1', 'Giovanni Rossi', '5:00 AM', '3331122333', 'Payment1'),
('T2', 'Marco Bianchi', '9:00 AM', '3344455666', 'Payment2'),
('T3', 'Antonio Russo', '11:00 AM', '3377788999', 'Payment3'),
('T4', 'Giulia Esposito', '1:00 PM', '3312345678', 'Payment6'),
('T5', 'Francesca Ferrari', '3:00 PM', '3398765432', 'Payment5'),
('T6', 'Roberto Romano', '5:00 PM', '3389988776', 'Payment6'),
('T7', 'Luca Martini', '7:00 PM', '3356677889', 'Payment7'),
('T8', 'Elena Conti', '9:00 PM', '3323456789', 'Payment8')
('T9', 'James Gun', '10:00 PM', '4444444444', 'Payment9');

-- Indexes for table `gym`
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gym_id`);

-- Indexes for table `login`

ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `member`

ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `pay_id` (`pay_id`),
  ADD KEY `trainer_id` (`trainer_id`);

-- Indexes for table `payment`

ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `gym_id` (`gym_id`);


-- Indexes for table `trainer`

ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`),
  ADD KEY `pay_id` (`pay_id`);

-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


-- Constraints for table `member`
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`pay_id`),
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

-- Constraints for table `payment`

ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gym` (`gym_id`);

-- Constraints for table `trainer`

ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`pay_id`);
COMMIT;
