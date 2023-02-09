/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : registration

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2023-02-07 23:00:33
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `attendancetable`
-- ----------------------------
DROP TABLE IF EXISTS `attendancetable`;
CREATE TABLE `attendancetable` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `dateTimeTaken` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of attendancetable
-- ----------------------------
INSERT INTO `attendancetable` VALUES ('1', 'aravind', 'a', 'aravinda@mca.ajce.in', 'plus 1', '1', '2023-02-01');
INSERT INTO `attendancetable` VALUES ('2', 'arun', 'ajay', 'arun@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('3', 'abit', 'mon', 'abit@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('4', 'amal', 'biju', 'office@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('5', 'anton', 'toms', 'anton@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('6', 'adeena', 'vs', 'adeena@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('7', 'aparna', 'ts', 'aparna@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('8', 'arya', 'rajeev', 'arya@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('9', 'noorjahan', 's', 'noorjahan@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('10', 'arya', 'biju', 'aryabiju@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('11', 'aju', 'm', 'aju@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('12', 'jerin ', 'mon', 'jerin@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('13', 'arya', 'mohan', 'arya@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('14', 'amala', 'm', 'amala@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('15', 'aradhy', 'm', 'aradhy@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('16', 'gaya', 'n', 'geya@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('17', 'meera', 'b', 'meera@gmail.com', 'plus 2', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('18', 'aaaaaaaa', 'ccccc', 'aaaa@gmail.com', 'plus 1', '1', '2023-01-31');
INSERT INTO `attendancetable` VALUES ('19', 'aravind', 'a', 'aravinda@mca.ajce.in', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('20', 'arun', 'ajay', 'arun@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('21', 'abit', 'mon', 'abit@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('22', 'amal', 'biju', 'office@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('23', 'anton', 'toms', 'anton@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('24', 'adeena', 'vs', 'adeena@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('25', 'aparna', 'ts', 'aparna@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('26', 'arya', 'rajeev', 'arya@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('27', 'noorjahan', 's', 'noorjahan@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('28', 'arya', 'biju', 'aryabiju@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('29', 'aju', 'm', 'aju@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('30', 'jerin ', 'mon', 'jerin@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('31', 'arya', 'mohan', 'arya@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('32', 'amala', 'm', 'amala@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('33', 'aradhy', 'm', 'aradhy@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('34', 'gaya', 'n', 'geya@gmail.com', 'plus 1', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('35', 'meera', 'b', 'meera@gmail.com', 'plus 2', '1', '2023-02-06');
INSERT INTO `attendancetable` VALUES ('36', 'aaaaaaaa', 'ccccc', 'aaaa@gmail.com', 'plus 1', '1', '2023-02-06');

-- ----------------------------
-- Table structure for `cource_material`
-- ----------------------------
DROP TABLE IF EXISTS `cource_material`;
CREATE TABLE `cource_material` (
  `id` int(20) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `module1` longblob NOT NULL,
  `module2` longblob NOT NULL,
  `module3` longblob NOT NULL,
  `module4` longblob NOT NULL,
  `module5` longblob NOT NULL,
  `module6` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of cource_material
-- ----------------------------
INSERT INTO `cource_material` VALUES ('36', 'Plusone', 'Botany', 0x2F574542534954452F75706C6F6164732F313636363638373733322E706466, 0x2F574542534954452F75706C6F6164732F313636363638373733322E70707478, 0x2F574542534954452F75706C6F6164732F313636363638373733322E706466, 0x2F574542534954452F75706C6F6164732F313636363638373733322E70707478, 0x2F574542534954452F75706C6F6164732F313636363638373733322E706466, 0x2F574542534954452F75706C6F6164732F313636363638373733322E706466);
INSERT INTO `cource_material` VALUES ('0', 'sel', 'sel', 0x2F574542534954452F75706C6F6164732F313637353134373438342E, 0x2F574542534954452F75706C6F6164732F313637353134373438342E, 0x2F574542534954452F75706C6F6164732F313637353134373438342E, 0x2F574542534954452F75706C6F6164732F313637353134373438342E, 0x2F574542534954452F75706C6F6164732F313637353134373438342E, 0x2F574542534954452F75706C6F6164732F313637353134373438342E);
INSERT INTO `cource_material` VALUES ('0', 'Plustwo', 'chemistry', 0x2F574542534954452F75706C6F6164732F313637353134373537372E70707478, 0x2F574542534954452F75706C6F6164732F313637353134373537372E, 0x2F574542534954452F75706C6F6164732F313637353134373537372E, 0x2F574542534954452F75706C6F6164732F313637353134373537372E, 0x2F574542534954452F75706C6F6164732F313637353134373537372E, 0x2F574542534954452F75706C6F6164732F313637353134373537372E);

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('13', 'anton', 'toms', 'plus 1', 'anton@gmail.com', 'good teaching');

-- ----------------------------
-- Table structure for `fees`
-- ----------------------------
DROP TABLE IF EXISTS `fees`;
CREATE TABLE `fees` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Amount` int(30) NOT NULL DEFAULT '600',
  `status` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of fees
-- ----------------------------
INSERT INTO `fees` VALUES ('2', 'arya', 'mohan', 'plus 2', 'arya@gmail.com', '600', 'paid');
INSERT INTO `fees` VALUES ('3', 'amala', 'm', 'plus 1', 'amala@gmail.com', '600', 'paid');
INSERT INTO `fees` VALUES ('4', 'aradhy', 'm', 'plus 1', 'aradhy@gmail.com', '600', 'paid');
INSERT INTO `fees` VALUES ('5', 'gaya', 'n', 'plus 1', 'geya@gmail.com', '600', 'pending');
INSERT INTO `fees` VALUES ('6', 'meera', 'b', 'plus 2', 'meera@gmail.com', '600', 'pending');
INSERT INTO `fees` VALUES ('7', 'aaaaaaaa', 'ccccc', 'plus 1', 'aaaa@gmail.com', '600', 'pending');
INSERT INTO `fees` VALUES ('0', 'Anjali', 'Ramachandran', 'plus 1', 'anjalir@gmail.com', '600', 'paid');

-- ----------------------------
-- Table structure for `leave`
-- ----------------------------
DROP TABLE IF EXISTS `leave`;
CREATE TABLE `leave` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of leave
-- ----------------------------
INSERT INTO `leave` VALUES ('81', 'Ashwathy', 'Sick', 'not well', '2022-10-27', '2022-10-27', 'Rejected', 'teacher');
INSERT INTO `leave` VALUES ('82', 'Ashwathy', 'Sick', 'not good', '2022-10-21', '2022-10-21', 'accepted', 'teacher');
INSERT INTO `leave` VALUES ('83', 'Aparna', 'Sick', 'not well', '2022-10-27', '2022-10-28', 'Pending', 'student');
INSERT INTO `leave` VALUES ('84', 'navya', 'Others', '', '2025-10-29', '2022-10-24', 'Rejected', 'teacher');

-- ----------------------------
-- Table structure for `mark`
-- ----------------------------
DROP TABLE IF EXISTS `mark`;
CREATE TABLE `mark` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `stid` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `mtype` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mark
-- ----------------------------
INSERT INTO `mark` VALUES ('1', '1', '2', '25', 'Assessment1');

-- ----------------------------
-- Table structure for `regteacher`
-- ----------------------------
DROP TABLE IF EXISTS `regteacher`;
CREATE TABLE `regteacher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `quali` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Pass` varchar(11) NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of regteacher
-- ----------------------------
INSERT INTO `regteacher` VALUES ('1', 'Aron', 'M', '0000-00-00', 'Aronnivas', 'MCA', 'plus_one', '2', 'chemistry', 'tec', 'aron@gmail.com', '8111859742', 'aron321', '');

-- ----------------------------
-- Table structure for `reguser`
-- ----------------------------
DROP TABLE IF EXISTS `reguser`;
CREATE TABLE `reguser` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `pemail_id` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'student',
  `status` bit(20) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of reguser
-- ----------------------------
INSERT INTO `reguser` VALUES ('1', 'aravind', 'a', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'aravinda@mca.ajce.in', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('2', 'arun', 'ajay', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'arun@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('3', 'abit', 'mon', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'abit@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('4', 'amal', 'biju', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'office@gmail.com', 'office', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('5', 'anton', 'toms', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'anton@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('6', 'adeena', 'vs', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'adeena@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('7', 'aparna', 'ts', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'aparna@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('8', 'arya', 'rajeev', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'arya@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('9', 'noorjahan', 's', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'noorjahan@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('10', 'arya', 'biju', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'aryabiju@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('11', 'aju', 'm', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'aju@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('12', 'jerin ', 'mon', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'jerin@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('13', 'arya', 'mohan', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'arya@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('14', 'amala', 'm', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'amala@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('15', 'aradhy', 'm', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'aradhy@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('16', 'gaya', 'n', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'geya@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('17', 'meera', 'b', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 2', '', 'meera@gmail.com', '123', 'student', '\0\0');
INSERT INTO `reguser` VALUES ('18', 'aaaaaaaa', 'ccccc', '0000-00-00 00:00:00', '', '', '', '', '', 'plus 1', '', 'aaaa@gmail.com', '123', 'student', '\0\0');

-- ----------------------------
-- Table structure for `subject`
-- ----------------------------
DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `batch` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subject
-- ----------------------------
INSERT INTO `subject` VALUES ('1', 'Plus 1', 'physics', 'ashwathy');
INSERT INTO `subject` VALUES ('2', 'Plus 1', 'chemisry', 'Binu');
INSERT INTO `subject` VALUES ('3', 'Plus 1', 'Biology', 'Aby');
INSERT INTO `subject` VALUES ('4', 'Plus 1', 'Maths', 'Albin');
INSERT INTO `subject` VALUES ('5', 'Plus 1', 'Chemistry', 'Aron');
INSERT INTO `subject` VALUES ('6', 'Plus 2', 'Physics', 'Aron');

-- ----------------------------
-- Table structure for `timetable`
-- ----------------------------
DROP TABLE IF EXISTS `timetable`;
CREATE TABLE `timetable` (
  `id` int(6) NOT NULL,
  `day` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of timetable
-- ----------------------------
INSERT INTO `timetable` VALUES ('28', 'Monday', 'Plus one', 'Chemistry', 'Binu', '09:00:00', '12:00:00');
INSERT INTO `timetable` VALUES ('29', 'Tuesday', 'Plus one', 'Physics', 'Ashwathy', '09:00:00', '12:00:00');
INSERT INTO `timetable` VALUES ('30', 'Wednesday', 'Plus one', 'Biology', 'Aby', '09:00:00', '12:00:00');
INSERT INTO `timetable` VALUES ('31', 'Friday', 'Plus one', 'Maths', 'Albin', '09:00:00', '12:00:00');

-- ----------------------------
-- Table structure for `userlog`
-- ----------------------------
DROP TABLE IF EXISTS `userlog`;
CREATE TABLE `userlog` (
  `ID` int(11) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `fid` int(20) NOT NULL,
  `staus` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of userlog
-- ----------------------------
INSERT INTO `userlog` VALUES ('487', 'admin@gmail.com', 'admin', 'admin', '16', '1');
INSERT INTO `userlog` VALUES ('488', 'office@gmail.com', 'office', 'office', '17', '1');
INSERT INTO `userlog` VALUES ('490', 'amal@gmail.com', '123', 'student', '19', '1');
INSERT INTO `userlog` VALUES ('491', 'anton@gmail.com', '123', 'student', '20', '1');
INSERT INTO `userlog` VALUES ('492', 'adeena@gmail.com', '123', 'student', '21', '1');
INSERT INTO `userlog` VALUES ('493', 'aparna@gmail.com', '123', 'student', '22', '1');
INSERT INTO `userlog` VALUES ('494', 'arya@gmail.com', '123', 'student', '23', '1');
INSERT INTO `userlog` VALUES ('495', 'noorjahan@gmail.com', '123', 'student', '24', '1');
INSERT INTO `userlog` VALUES ('496', 'aryabiju@gmail.com', '123', 'student', '25', '1');
INSERT INTO `userlog` VALUES ('528', 'aju@gmail.com', '123', 'student', '27', '1');
INSERT INTO `userlog` VALUES ('529', 'jerin@gmail.com', '123', 'student', '28', '1');
INSERT INTO `userlog` VALUES ('530', 'arya@gmail.com', '123', 'student', '29', '1');
INSERT INTO `userlog` VALUES ('531', 'amala@gmail.com', '123', 'student', '30', '1');
INSERT INTO `userlog` VALUES ('532', 'aradhy@gmail.com', '123', 'student', '31', '1');
INSERT INTO `userlog` VALUES ('533', 'geya@gmail.com', '123', 'student', '32', '1');
INSERT INTO `userlog` VALUES ('534', 'meera@gmail.com', '123', 'student', '33', '1');
INSERT INTO `userlog` VALUES ('535', 'arun@gmail.com', '123', 'student', '34', '1');
INSERT INTO `userlog` VALUES ('0', 'aron@gmail.com', 'aron321', 'tec', '1', '1');
