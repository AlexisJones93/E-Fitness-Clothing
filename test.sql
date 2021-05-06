-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 01:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `addressID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `address_firstline` varchar(255) DEFAULT NULL,
  `address_secondline` varchar(255) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `city` tinytext,
  `county` tinytext,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `contactnumber` int(20) DEFAULT NULL,
  `deault` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`addressID`, `userID`, `address_firstline`, `address_secondline`, `postcode`, `city`, `county`, `firstname`, `lastname`, `contactnumber`, `deault`) VALUES
(1, 25, '5 woodbine close', 'Marden', 'HR1 3EQ', 'Hereford', 'Herefordshire', 'Alexis', 'Jones', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `producttype` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productname`, `description`, `producttype`, `price`) VALUES
(1, 'Razor back Top', 'Soft and stretchy Elastane fabaric keeing the top cool and dry.', 'top', '15'),
(2, 'Breathable Vest Top', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'top', '20'),
(3, 'Comfy Hoodie', 'Made with 100% recycled cotton and machine washable.', 'top', '30'),
(4, 'Breathable Running Jacket', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'top', '60'),
(5, 'Short Sleeve Running Top', 'Soft and stretchy Elastane fabaric keeing the top cool and dry.', 'top', '20'),
(6, 'Long Sleeve Running Top', 'Soft and stretchy Elastane fabaric keeing the top cool and dry.', 'top', '25'),
(7, 'Short Sleeve Workout Top', 'Soft and stretchy Elastane fabaric keeing the top cool and dry.', 'top', '20'),
(8, 'Long Sleeve Workout Top', 'Soft and stretchy Elastane fabaric keeing the top cool and dry.', 'top', '25'),
(9, 'Breathable Crop Top', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'top', '15'),
(10, 'Breathable Short Sleeve Workout Top', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'top', '25'),
(11, 'Breathable Long Sleeve Workout Top', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'top', '30'),
(12, 'Breathable Long Length Leggings', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'bottoms', '40'),
(13, 'Breathable short Length Leggings', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'bottoms', '35'),
(14, 'Runner Long Length Leggings', 'Soft and stretchy Elastane fabaric keeing the leggings cool and dry.', 'bottoms', '40'),
(15, 'Runner Short Length Leggings', 'Soft and stretchy Elastane fabaric keeing the leggings cool and dry.', 'bottoms', '35'),
(16, 'Comfy Joggers', 'Made with 100% recycled cotton and machine washable.', 'bottoms', '35'),
(17, 'Comfy shorts', 'Made with 100% recycled cotton and machine washable.', 'bottoms', '25'),
(18, 'Runner Shorts', 'Soft and stretchy Elastane fabaric keeing the shorts cool and dry.', 'bottoms', '25'),
(19, 'Breathable Workout Shorts', 'Made with natural Bamboo cotton to make a Breathable fabric.', 'bottoms', '30'),
(20, 'Runner Trainers', 'Made from lightweight fabric and rubber sole to keep the trainers cool and durable.', 'shoes', '50'),
(21, 'Workout Trainers', 'Made from lightweight fabric and rubber sole to keep the trainers cool and durable.', 'shoes', '50'),
(22, 'Comfy Socks', 'Made with 100% recycled cotton and machine washable.', 'accessories', '10'),
(23, 'Comfy Scrunchie', 'Made with 100% recycled cotton and machine washable.', 'accessories', '5'),
(24, 'Essential Scrunchie', 'Made with 100% recycled cotton and machine washable.', 'accessories', '3'),
(25, 'Runner Trainer Sock', 'Made with 100% recycled cotton and machine washable.', 'accessories', '10'),
(26, 'Workout Sock', 'Made with 100% recycled cotton and machine washable.', 'accessories', '10');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_detail_ID` int(200) NOT NULL,
  `colour` varchar(30) NOT NULL,
  `size` int(10) NOT NULL,
  `stock` int(255) NOT NULL,
  `productID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_detail_ID`, `colour`, `size`, `stock`, `productID`) VALUES
(501, 'black', 8, 5, 1),
(502, 'sage', 8, 5, 1),
(503, 'grey', 8, 5, 1),
(504, 'black', 10, 5, 1),
(505, 'grey', 10, 2, 1),
(506, 'sage', 10, 7, 1),
(507, 'black', 12, 7, 1),
(508, 'grey', 12, 6, 1),
(509, 'sage', 12, 12, 1),
(510, 'black', 14, 1, 1),
(511, 'grey', 14, 7, 1),
(512, 'sage', 14, 1, 1),
(513, 'black', 16, 7, 1),
(514, 'grey', 16, 2, 1),
(515, 'sage', 16, 12, 1),
(516, 'black', 8, 50, 2),
(517, 'mocha', 8, 50, 2),
(518, 'stone', 8, 50, 2),
(519, 'black', 10, 50, 2),
(520, 'mocha', 10, 50, 2),
(521, 'stone', 10, 50, 2),
(522, 'black', 12, 50, 2),
(523, 'mocha', 12, 50, 2),
(524, 'stone', 12, 50, 2),
(525, 'black', 14, 50, 2),
(526, 'mocha', 14, 50, 2),
(527, 'stone', 14, 50, 2),
(528, 'black', 16, 50, 2),
(529, 'mocha', 16, 50, 2),
(530, 'stone', 16, 50, 2),
(531, 'black', 8, 25, 3),
(532, 'white', 8, 26, 3),
(533, 'black', 10, 25, 3),
(534, 'white', 10, 26, 3),
(535, 'black', 12, 25, 3),
(536, 'white', 12, 26, 3),
(537, 'black', 14, 25, 3),
(538, 'white', 14, 26, 3),
(539, 'black', 16, 25, 3),
(540, 'white', 16, 26, 3),
(541, 'black', 8, 50, 4),
(542, 'mocha', 8, 50, 4),
(543, 'stone', 8, 50, 4),
(544, 'black', 10, 50, 4),
(545, 'mocha', 10, 50, 4),
(546, 'stone', 10, 50, 4),
(547, 'black', 12, 50, 4),
(548, 'mocha', 12, 50, 4),
(549, 'stone', 12, 50, 4),
(550, 'black', 14, 50, 4),
(551, 'mocha', 14, 50, 4),
(552, 'stone', 14, 50, 4),
(553, 'black', 16, 50, 4),
(554, 'mocha', 16, 50, 4),
(555, 'stone', 16, 50, 4),
(556, 'black', 8, 25, 5),
(557, 'sage', 8, 25, 5),
(558, 'grey', 8, 25, 5),
(559, 'black', 10, 25, 5),
(560, 'sage', 10, 25, 5),
(561, 'grey', 10, 25, 5),
(562, 'black', 12, 25, 5),
(563, 'sage', 12, 25, 5),
(564, 'grey', 12, 25, 5),
(565, 'black', 14, 25, 5),
(566, 'sage', 14, 25, 5),
(567, 'grey', 14, 25, 5),
(568, 'black', 16, 25, 5),
(569, 'sage', 16, 25, 5),
(570, 'grey', 16, 25, 5),
(571, 'black', 8, 25, 6),
(572, 'grey', 8, 25, 6),
(573, 'black', 10, 25, 6),
(574, 'grey', 10, 25, 6),
(575, 'black', 12, 25, 6),
(576, 'grey', 12, 25, 6),
(577, 'black', 14, 25, 6),
(578, 'grey', 14, 25, 6),
(579, 'black', 16, 25, 6),
(580, 'grey', 16, 25, 6),
(581, 'black', 8, 25, 7),
(582, 'grey', 8, 25, 7),
(583, 'black', 10, 25, 7),
(584, 'grey', 10, 25, 7),
(585, 'black', 12, 25, 7),
(586, 'grey', 12, 25, 7),
(587, 'black', 14, 25, 7),
(588, 'grey', 14, 25, 7),
(589, 'black', 16, 25, 7),
(590, 'grey', 16, 25, 7),
(591, 'black', 8, 20, 8),
(592, 'grey', 8, 15, 8),
(593, 'black', 10, 20, 8),
(594, 'grey', 10, 15, 8),
(595, 'black', 12, 20, 8),
(596, 'grey', 12, 15, 8),
(597, 'black', 14, 20, 8),
(598, 'grey', 14, 15, 8),
(599, 'black', 16, 20, 8),
(600, 'grey', 16, 15, 8),
(601, 'black', 8, 50, 9),
(602, 'mocha', 8, 50, 9),
(603, 'stone', 8, 50, 9),
(604, 'black', 10, 50, 9),
(605, 'mocha', 10, 50, 9),
(606, 'stone', 10, 50, 9),
(607, 'black', 12, 50, 9),
(608, 'mocha', 12, 50, 9),
(609, 'stone', 12, 50, 9),
(610, 'black', 14, 50, 9),
(611, 'mocha', 14, 50, 9),
(612, 'stone', 14, 50, 9),
(613, 'black', 16, 50, 9),
(614, 'mocha', 16, 50, 9),
(615, 'stone', 16, 50, 9),
(616, 'black', 8, 50, 10),
(617, 'mocha', 8, 50, 10),
(618, 'stone', 8, 50, 10),
(619, 'black', 10, 50, 10),
(620, 'mocha', 10, 50, 10),
(621, 'stone', 10, 50, 10),
(622, 'black', 12, 50, 10),
(623, 'mocha', 12, 50, 10),
(624, 'stone', 12, 50, 10),
(625, 'black', 14, 50, 10),
(626, 'mocha', 14, 50, 10),
(627, 'stone', 14, 50, 10),
(628, 'black', 16, 50, 10),
(629, 'mocha', 16, 50, 10),
(630, 'stone', 16, 50, 10),
(631, 'black', 8, 50, 11),
(632, 'mocha', 8, 50, 11),
(633, 'stone', 8, 50, 11),
(634, 'black', 10, 50, 11),
(635, 'mocha', 10, 50, 11),
(636, 'stone', 10, 50, 11),
(637, 'black', 12, 50, 11),
(638, 'mocha', 12, 50, 11),
(639, 'stone', 12, 50, 11),
(640, 'black', 14, 50, 11),
(641, 'mocha', 14, 50, 11),
(642, 'stone', 14, 50, 11),
(643, 'black', 16, 50, 11),
(644, 'mocha', 16, 50, 11),
(645, 'stone', 16, 50, 11),
(646, 'black', 8, 50, 12),
(647, 'mocha', 8, 50, 12),
(648, 'stone', 8, 50, 12),
(649, 'black', 10, 50, 12),
(650, 'mocha', 10, 50, 12),
(651, 'stone', 10, 50, 12),
(652, 'black', 12, 50, 12),
(653, 'mocha', 12, 50, 12),
(654, 'stone', 12, 50, 12),
(655, 'black', 14, 50, 12),
(656, 'mocha', 14, 50, 12),
(657, 'stone', 14, 50, 12),
(658, 'black', 16, 50, 12),
(659, 'mocha', 16, 50, 12),
(660, 'stone', 16, 50, 12),
(661, 'black', 8, 50, 13),
(662, 'mocha', 8, 50, 13),
(663, 'stone', 8, 50, 13),
(664, 'black', 10, 50, 13),
(665, 'mocha', 10, 50, 13),
(666, 'stone', 10, 50, 13),
(667, 'black', 12, 50, 13),
(668, 'mocha', 12, 50, 13),
(669, 'stone', 12, 50, 13),
(670, 'black', 14, 50, 13),
(671, 'mocha', 14, 50, 13),
(672, 'stone', 14, 50, 13),
(673, 'black', 16, 50, 13),
(674, 'mocha', 16, 50, 13),
(675, 'stone', 16, 50, 13),
(676, 'black', 8, 25, 14),
(677, 'sage', 8, 25, 14),
(678, 'grey', 8, 25, 14),
(679, 'black', 10, 25, 14),
(680, 'sage', 10, 25, 14),
(681, 'grey', 10, 25, 14),
(682, 'black', 12, 25, 14),
(683, 'sage', 12, 25, 14),
(684, 'grey', 12, 25, 14),
(685, 'black', 14, 25, 14),
(686, 'sage', 14, 25, 14),
(687, 'grey', 14, 25, 14),
(688, 'black', 16, 25, 14),
(689, 'sage', 16, 25, 14),
(690, 'grey', 16, 25, 14),
(691, 'black', 8, 25, 15),
(692, 'sage', 8, 25, 15),
(693, 'grey', 8, 25, 15),
(694, 'black', 10, 25, 15),
(695, 'sage', 10, 25, 15),
(696, 'grey', 10, 25, 15),
(697, 'black', 12, 25, 15),
(698, 'sage', 12, 25, 15),
(699, 'grey', 12, 25, 15),
(700, 'black', 14, 25, 15),
(701, 'sage', 14, 25, 15),
(702, 'grey', 14, 25, 15),
(703, 'black', 16, 25, 15),
(704, 'sage', 16, 25, 15),
(705, 'grey', 16, 25, 15),
(706, 'black', 8, 25, 16),
(707, 'white', 8, 26, 16),
(708, 'black', 10, 25, 16),
(709, 'white', 10, 26, 16),
(710, 'black', 12, 25, 16),
(711, 'white', 12, 26, 16),
(712, 'black', 14, 25, 16),
(713, 'white', 14, 26, 16),
(714, 'black', 16, 25, 16),
(715, 'white', 16, 26, 16),
(716, 'black', 8, 25, 17),
(717, 'white', 8, 26, 17),
(718, 'black', 10, 25, 17),
(719, 'white', 10, 26, 17),
(720, 'black', 12, 25, 17),
(721, 'white', 12, 26, 17),
(722, 'black', 14, 25, 17),
(723, 'white', 14, 26, 17),
(724, 'black', 16, 25, 17),
(725, 'white', 16, 26, 17),
(726, 'black', 8, 25, 18),
(727, 'sage', 8, 25, 18),
(728, 'grey', 8, 25, 18),
(729, 'black', 10, 25, 18),
(730, 'sage', 10, 25, 18),
(731, 'grey', 10, 25, 18),
(732, 'black', 12, 25, 18),
(733, 'sage', 12, 25, 18),
(734, 'grey', 12, 25, 18),
(735, 'black', 14, 25, 18),
(736, 'sage', 14, 25, 18),
(737, 'grey', 14, 25, 18),
(738, 'black', 16, 25, 18),
(739, 'sage', 16, 25, 18),
(740, 'grey', 16, 25, 18),
(741, 'black', 8, 50, 19),
(742, 'mocha', 8, 50, 19),
(743, 'stone', 8, 50, 19),
(744, 'black', 10, 50, 19),
(745, 'mocha', 10, 50, 19),
(746, 'stone', 10, 50, 19),
(747, 'black', 12, 50, 19),
(748, 'mocha', 12, 50, 19),
(749, 'stone', 12, 50, 19),
(750, 'black', 14, 50, 19),
(751, 'mocha', 14, 50, 19),
(752, 'stone', 14, 50, 19),
(753, 'black', 16, 50, 19),
(754, 'mocha', 16, 50, 19),
(755, 'stone', 16, 50, 19),
(756, 'black', 6, 25, 20),
(757, 'black', 7, 25, 20),
(758, 'black', 8, 25, 20),
(759, 'grey', 6, 25, 20),
(760, 'grey', 7, 25, 20),
(761, 'grey', 8, 25, 20),
(762, 'white', 6, 25, 20),
(763, 'white', 7, 25, 20),
(764, 'white', 8, 25, 20),
(765, 'black', 6, 20, 21),
(766, 'black', 7, 20, 21),
(767, 'black', 8, 20, 21),
(768, 'white', 6, 20, 21),
(769, 'white', 7, 20, 21),
(770, 'white', 8, 20, 21),
(771, 'black', 0, 30, 22),
(772, 'white', 0, 30, 22),
(773, 'mocha', 0, 30, 22),
(774, 'grey', 0, 30, 22),
(775, 'black', 0, 20, 23),
(776, 'sage', 0, 20, 23),
(777, 'mocha', 0, 20, 23),
(778, 'white', 0, 20, 23),
(779, 'black', 0, 20, 24),
(780, 'white', 0, 20, 24),
(781, 'black', 0, 15, 25),
(782, 'white', 0, 15, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstName` tinytext,
  `lastName` tinytext,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createdon` datetime DEFAULT CURRENT_TIMESTAMP,
  `dob` varchar(20) DEFAULT NULL,
  `preference` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `password`, `createdon`, `dob`, `preference`) VALUES
(23, 'chris', 'gatehouse', 'Honeybeefeet@outlook', '$2y$10$0B6Bn8l7pTEEc6/aYbZ4turdGpS.E8kw7u93nlqY.opab38Rr.p.u', '2021-03-22 21:52:27', '0000-00-00', 'menswear'),
(24, 'Stewart', 'Currall', '21406612@bucks.ac.uk', '$2y$10$Fwf2mCRVvv.vp5L0yzMvrOLwCnhFenkkakQjKJO90rHrDNuzzWiH.', '2021-03-22 21:52:44', '0000-00-00', 'menswear'),
(25, 'Alexis', 'Jones', 'alexisgj@hotmail.co.uk', '$2y$10$YlO6XYh8vS7xKpYTuoDa2.4yImlWzKW/PK0Re/im89DZ/i016YfBu', '2021-03-23 15:31:12', '2015-10-06', 'running'),
(26, 'Chris', 'Gatehouse', 'chris@gatehouse.co.uk', '$2y$10$nHYA5Sy9y/si4OrH0Wg3bOuPsC2qppcA5k/wIMm/L5yyWz560uWwK', '2021-03-28 21:22:25', '0000-00-00', 'menswear'),
(27, 'Alexis', 'Jones', 'esme.jones@imagine.co', '$2y$10$wtcX3t7YiiIKwkAxsKCFW.2U8jQ87Jk97bJDNi/2sBXUvVitx7FOG', '2021-03-28 21:29:51', '9/08/2005', 'workout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
