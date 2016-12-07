/*
Navicat MySQL Data Transfer

Source Server         : gaoyue
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : metoo

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-07 11:15:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `realname` varchar(20) DEFAULT NULL,
  `phonenum` char(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'admin', 'a', 'a', '123@qq.com', '2014-01-01', '123');

-- ----------------------------
-- Table structure for answer
-- ----------------------------
DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `answertime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer
-- ----------------------------
INSERT INTO `answer` VALUES ('11', '111', '1111111', '1111111', '2011-11-11 11:01:00');

-- ----------------------------
-- Table structure for exchange
-- ----------------------------
DROP TABLE IF EXISTS `exchange`;
CREATE TABLE `exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods` varchar(20) DEFAULT NULL,
  `gmark` int(255) DEFAULT NULL,
  `gnum` int(255) DEFAULT NULL,
  `thumb` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exchange
-- ----------------------------
INSERT INTO `exchange` VALUES ('1', 'inphone', '30000', '123', null);
INSERT INTO `exchange` VALUES ('2', 'inphone', '30000', '21', null);
INSERT INTO `exchange` VALUES ('4', null, '111', '1111', '295730.jpg');
INSERT INTO `exchange` VALUES ('5', '22222', '3333', '3333', '295305.jpg');

-- ----------------------------
-- Table structure for food
-- ----------------------------
DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food` varchar(20) DEFAULT NULL,
  `site` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `praise` int(255) DEFAULT NULL,
  `foodpic` varchar(50) DEFAULT NULL,
  `foodtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food
-- ----------------------------
INSERT INTO `food` VALUES ('1', 'ice-cream', '河北师范大学', '好吃', '10', null, null);
INSERT INTO `food` VALUES ('2', 'rice', '河北师范大学', '好吃', '12', null, null);
INSERT INTO `food` VALUES ('3', '22222', '222', '222', null, '222', '2016-12-12 00:00:00');

-- ----------------------------
-- Table structure for footprint
-- ----------------------------
DROP TABLE IF EXISTS `footprint`;
CREATE TABLE `footprint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` varchar(40) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `album` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of footprint
-- ----------------------------
INSERT INTO `footprint` VALUES ('1', '111', '1', null);

-- ----------------------------
-- Table structure for guess
-- ----------------------------
DROP TABLE IF EXISTS `guess`;
CREATE TABLE `guess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(40) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guess
-- ----------------------------
INSERT INTO `guess` VALUES ('111', '111', '2016-01-01 00:00:00', '11');
INSERT INTO `guess` VALUES ('112', '555', '2016-12-12 00:00:00', '295305.jpg');

-- ----------------------------
-- Table structure for guess_part
-- ----------------------------
DROP TABLE IF EXISTS `guess_part`;
CREATE TABLE `guess_part` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guessid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `guesstime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guess_part
-- ----------------------------
INSERT INTO `guess_part` VALUES ('111', '111', '111', '111', '2016-01-01 00:00:00');

-- ----------------------------
-- Table structure for hotel
-- ----------------------------
DROP TABLE IF EXISTS `hotel`;
CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel` varchar(20) DEFAULT NULL,
  `site` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `praise` int(255) DEFAULT NULL,
  `hotelpic` varchar(50) DEFAULT NULL,
  `hoteltime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hotel
-- ----------------------------
INSERT INTO `hotel` VALUES ('1', '百年印象', '河北师范大学', '好玩', '22', null, null);
INSERT INTO `hotel` VALUES ('3', '333', '333', '333', null, '333', '2016-12-12 00:00:00');
INSERT INTO `hotel` VALUES ('4', null, '111', '11111', null, null, null);

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `phonenum` char(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `mark` int(255) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `userpic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personal
-- ----------------------------
INSERT INTO `personal` VALUES ('1', 'admin', 'a', '河北师范大学', '2014-01-01', '20000', '123', null);
INSERT INTO `personal` VALUES ('3', 'admin', '111111', '南二环东路20号', '2014-01-01', '1234', '123', null);

-- ----------------------------
-- Table structure for photo
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `albumid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo
-- ----------------------------

-- ----------------------------
-- Table structure for pk
-- ----------------------------
DROP TABLE IF EXISTS `pk`;
CREATE TABLE `pk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pk
-- ----------------------------
INSERT INTO `pk` VALUES ('2', '2', '2016-03-03 00:00:00');
INSERT INTO `pk` VALUES ('3', '444444', '2016-12-12 00:00:00');

-- ----------------------------
-- Table structure for pk_part
-- ----------------------------
DROP TABLE IF EXISTS `pk_part`;
CREATE TABLE `pk_part` (
  `id` int(11) DEFAULT NULL,
  `themeid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `pktime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pk_part
-- ----------------------------
INSERT INTO `pk_part` VALUES ('1', '1', '1', '1', '2016-01-01 00:00:00');

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('1111', '111111', '11111', '2016-01-01 00:00:00');

-- ----------------------------
-- Table structure for record
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `userid` int(255) DEFAULT NULL,
  `goodsid` int(255) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `remainmark` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of record
-- ----------------------------
INSERT INTO `record` VALUES ('11', '11', '11', '2016-01-01', '1111');

-- ----------------------------
-- Table structure for scenery
-- ----------------------------
DROP TABLE IF EXISTS `scenery`;
CREATE TABLE `scenery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scenery` varchar(20) DEFAULT NULL,
  `site` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `praise` int(255) DEFAULT NULL,
  `scenerypic` varchar(50) DEFAULT NULL,
  `scenerytime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scenery
-- ----------------------------
INSERT INTO `scenery` VALUES ('1', '11', '111', '11111', '11111', null, null);
INSERT INTO `scenery` VALUES ('2', '111', '333', '444', null, null, '2016-12-12 00:00:00');
INSERT INTO `scenery` VALUES ('3', '111', '333', '444', null, null, '2016-12-12 00:00:00');

-- ----------------------------
-- Table structure for shopping
-- ----------------------------
DROP TABLE IF EXISTS `shopping`;
CREATE TABLE `shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopping` varchar(20) DEFAULT NULL,
  `site` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `praise` int(255) DEFAULT NULL,
  `shoppingpic` varchar(50) DEFAULT NULL,
  `shoppingtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shopping
-- ----------------------------
INSERT INTO `shopping` VALUES ('1', '帐篷', '河北师范大学', '好看', '33', null, null);
INSERT INTO `shopping` VALUES ('2', '帐篷', '河北师范大学', '好看aok', '33', null, null);

-- ----------------------------
-- Table structure for travelnote
-- ----------------------------
DROP TABLE IF EXISTS `travelnote`;
CREATE TABLE `travelnote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT '',
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of travelnote
-- ----------------------------
INSERT INTO `travelnote` VALUES ('1', '111', '2016-01-01 00:00:00', '1111', '1111', '111');
