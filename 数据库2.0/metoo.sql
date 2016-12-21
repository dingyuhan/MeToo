/*
Navicat MySQL Data Transfer

Source Server         : dingyuhan
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : metoo

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-19 16:51:53
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('12', '丁雨涵', '丁雨涵', '15231100000', '789456123@qq.com', '2016-12-15', '123456');
INSERT INTO `admin_user` VALUES ('13', '高越', '高越', '15231100001', '456789123@qq.com', '2016-12-15', '123456');
INSERT INTO `admin_user` VALUES ('14', '李硕男', '李硕男', '15231100002', '159748632@qq.com', '2016-12-15', '123456');
INSERT INTO `admin_user` VALUES ('15', '张宏生', '张宏生', '15231100003', '965874123@qq.com', '2016-12-15', '123456');
INSERT INTO `admin_user` VALUES ('16', '李浩平', '李浩平', '15231100004', '963258741@qq.com', '2016-12-15', '123456');
INSERT INTO `admin_user` VALUES ('17', '田奥', '田奥', '15231100005', '852741963@qq.com', '2016-12-15', '123456');

-- ----------------------------
-- Table structure for answer
-- ----------------------------
DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `answertime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer
-- ----------------------------
INSERT INTO `answer` VALUES ('1', '1', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '1', '2016-12-15');
INSERT INTO `answer` VALUES ('2', '2', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '2', '2016-12-14');
INSERT INTO `answer` VALUES ('3', '3', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '3', '2016-12-13');
INSERT INTO `answer` VALUES ('4', '4', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '4', '2016-12-12');
INSERT INTO `answer` VALUES ('5', '5', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '5', '2016-12-11');
INSERT INTO `answer` VALUES ('6', '6', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '6', '2016-12-10');
INSERT INTO `answer` VALUES ('7', '7', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '7', '2016-12-09');
INSERT INTO `answer` VALUES ('8', '8', '标准三天行程的线路是下面这样的：&\r\nD1:漠河-九曲十八弯-原始白桦林-63大桥-二十八站-乌苏里浅滩-龙江第一湾-北红村&\r\nD2:北红村-女脚湾-神龙湾-鄂温克使鹿部落-北极村(最北邮局，北极沙洲，北极点，界碑，中国最北之家，最北供销社，&寻找各种最北。）\r\nD3:北极村-飞来松-观音山-胭脂沟-漠河“56”火灾纪念馆-松苑公园-北极星广场-结束 三天里你可以：打雪仗，对雪人，&赏雾凇，看冰雕，看雪雕，滑雪，滑冰，坐马拉雪橇，看冬捕。', '8', '2016-12-08');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exchange
-- ----------------------------
INSERT INTO `exchange` VALUES ('19', '卡通水杯', '300', '5', '../Public/uploads/exchange/5851f24af1140.jpg');
INSERT INTO `exchange` VALUES ('20', '户外出行必备手电筒', '600', '3', '../Public/uploads/exchange/5852195643e59.jpg');
INSERT INTO `exchange` VALUES ('21', '帐篷', '800', '1', '../Public/uploads/exchange/585219c903cc5.jpg');
INSERT INTO `exchange` VALUES ('22', '花露水', '800', '3', '../Public/uploads/exchange/58521a0f5c80f.jpg');
INSERT INTO `exchange` VALUES ('23', '移动电源', '1200', '1', '../Public/uploads/exchange/58521a4cb24e3.jpg');
INSERT INTO `exchange` VALUES ('24', '户外出行必备速干衣', '1300', '5', '../Public/uploads/exchange/58521a80a24fa.jpg');
INSERT INTO `exchange` VALUES ('25', '指南针', '800', '4', '../Public/uploads/exchange/58521ad00dba9.jpg');
INSERT INTO `exchange` VALUES ('26', '户外运动水杯', '1300', '5', '../Public/uploads/exchange/58521b39733e9.jpg');
INSERT INTO `exchange` VALUES ('27', '湿巾', '400', '8', '../Public/uploads/exchange/58521b869fb75.jpg');
INSERT INTO `exchange` VALUES ('28', '防晒霜', '900', '2', '../Public/uploads/exchange/585223b12cfc0.jpg');
INSERT INTO `exchange` VALUES ('29', '创可贴', '600', '9', '../Public/uploads/exchange/585223ea3218f.jpg');
INSERT INTO `exchange` VALUES ('30', '卫生纸', '900', '9', '../Public/uploads/exchange/5852240f8f0b4.jpg');

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
  `foodtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food
-- ----------------------------
INSERT INTO `food` VALUES ('4', '牛肉面', '台湾牛肉面', '大众美食，却又别有一番风味', null, '../Public/uploads/food/5851f50b21491.jpg', '2016-12-15');
INSERT INTO `food` VALUES ('5', '葱抓饼', '台湾', '去台湾必吃，好吃不贵', null, '../Public/uploads/food/5851f5afa685d.jpg', '2016-12-15');
INSERT INTO `food` VALUES ('6', '客家酿豆腐', '梅州', '味道极佳', null, '../Public/uploads/food/58520270edd8a.jpg', '2016-12-15');
INSERT INTO `food` VALUES ('7', '本地鸡', '广州', '入口皮爽肉滑', null, '../Public/uploads/food/58520290d0628.jpg', '2016-12-15');
INSERT INTO `food` VALUES ('8', '黄骨鱼', '珠海', '味道鲜美', null, '../Public/uploads/food/585202cd06d6e.jpg', '2016-12-15');
INSERT INTO `food` VALUES ('9', '双塔鱼', '敦煌', '细嫩爽口', null, '../Public/uploads/food/5852030c6982c.jpg', '2016-12-15');

-- ----------------------------
-- Table structure for footprint
-- ----------------------------
DROP TABLE IF EXISTS `footprint`;
CREATE TABLE `footprint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` varchar(40) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `album` varchar(255) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of footprint
-- ----------------------------
INSERT INTO `footprint` VALUES ('1', '北京', '1', '', null);

-- ----------------------------
-- Table structure for guess
-- ----------------------------
DROP TABLE IF EXISTS `guess`;
CREATE TABLE `guess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(40) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guess
-- ----------------------------
INSERT INTO `guess` VALUES ('116', '请问这是哪', '2016-12-15', '西藏', '../Public/uploads/guess/5852256e16953.jpg');

-- ----------------------------
-- Table structure for guess_part
-- ----------------------------
DROP TABLE IF EXISTS `guess_part`;
CREATE TABLE `guess_part` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guessid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `guesstime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guess_part
-- ----------------------------
INSERT INTO `guess_part` VALUES ('1', '116', '1', '不知道', '2016-12-15');

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
  `hoteltime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hotel
-- ----------------------------
INSERT INTO `hotel` VALUES ('4', '特色客栈', '杭州', '格调与品位兼具，有独特内饰', null, '../Public/uploads/hotel/5851f761294d7.png', '2016-12-15');
INSERT INTO `hotel` VALUES ('5', '温泉酒店', '北京', '极佳的地理坐标，优质的服务环境', null, '../Public/uploads/hotel/5851f7e299cc3.png', '2016-12-15');
INSERT INTO `hotel` VALUES ('6', '园林旅店', '苏州', '依傍古典园林之美，突显相应特色', null, '../Public/uploads/hotel/5851f83de66d3.png', '2016-12-15');
INSERT INTO `hotel` VALUES ('7', '设计师旅店', '广州', '历史感和现代空间的完美结合', null, '../Public/uploads/hotel/5851f88b1543e.png', '2016-12-15');
INSERT INTO `hotel` VALUES ('8', '海岛酒店', '三亚', '美丽的海滨风光', null, '../Public/uploads/hotel/5851f9b60e9e4.png', '2016-12-15');
INSERT INTO `hotel` VALUES ('9', '青年旅社', '南京', '周边小吃众多，驴友的最爱', null, '../Public/uploads/hotel/5851fa0716ce2.png', '2016-12-15');
INSERT INTO `hotel` VALUES ('10', '莎海国际酒店', '上海', '优越的地理位置，惬意的室内装潢', null, '../Public/uploads/hotel/585206c29cd80.jpg', '2016-12-15');
INSERT INTO `hotel` VALUES ('11', '迪士尼好莱坞酒店', '香港', '环境优美', null, '../Public/uploads/hotel/5852071383fc7.jpg', '2016-12-15');
INSERT INTO `hotel` VALUES ('12', '都会海逸酒店', '香港', '环境舒适', null, '../Public/uploads/hotel/5852075900354.jpg', '2016-12-15');

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
  `mark` int(255) DEFAULT '0',
  `password` varchar(20) DEFAULT NULL,
  `userpic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personal
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('1', null, '1', '1');

-- ----------------------------
-- Table structure for pk
-- ----------------------------
DROP TABLE IF EXISTS `pk`;
CREATE TABLE `pk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) DEFAULT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pk
-- ----------------------------
INSERT INTO `pk` VALUES ('9', '寒冬中最温暖的照片', '2016-12-15');
INSERT INTO `pk` VALUES ('10', '旅途中的风景', '2016-12-15');

-- ----------------------------
-- Table structure for pk_part
-- ----------------------------
DROP TABLE IF EXISTS `pk_part`;
CREATE TABLE `pk_part` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `themeid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `praise` int(11) DEFAULT '0',
  `describe` varchar(255) DEFAULT NULL,
  `pktime` date DEFAULT NULL,
  `title` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pk_part
-- ----------------------------
INSERT INTO `pk_part` VALUES ('1', '9', '111', '../Public/uploads/pkPart/58567077cdc9e.jpg', '52', '111', '2016-12-15', '111111');
INSERT INTO `pk_part` VALUES ('2', '9', null, '../Public/uploads/pkPart/58567077cdc9e.jpg', '33', '111', '2016-12-17', '11111111');
INSERT INTO `pk_part` VALUES ('3', '10', null, '../Public/uploads/pkPart/58567077cdc9e.jpg', '0', '111111', '2016-12-17', '111111111');
INSERT INTO `pk_part` VALUES ('4', '10', null, '../Public/uploads/pkPart/58567077cdc9e.jpg', '0', '1111111111', '2016-12-17', '1111111111');
INSERT INTO `pk_part` VALUES ('5', '9', null, '../Public/uploads/pkPart/58567077cdc9e.jpg', '26', '', null, '123');

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('1', '漠河冬季冰雪都有什么项目？', '1', '2016-12-01');
INSERT INTO `question` VALUES ('2', '北京有哪些好玩的地方？', '2', '2016-12-01');
INSERT INTO `question` VALUES ('3', '当下可以去哪些地方旅游？', '3', '2016-12-01');
INSERT INTO `question` VALUES ('4', '在西安有哪些美食推荐？', '4', '2016-12-01');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of record
-- ----------------------------

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
  `scenerytime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of scenery
-- ----------------------------
INSERT INTO `scenery` VALUES ('3', '油菜花', '门源', '行走大西北，体验当地风情', null, '../Public/uploads/scenery/5851fb58ae149.jpg', '2016-12-15');
INSERT INTO `scenery` VALUES ('4', '拉市海', '丽江', '环境分外惬意，照美景的好去处', null, '../Public/uploads/scenery/5851fc751f5f6.jpeg', '2016-12-15');
INSERT INTO `scenery` VALUES ('5', '黄山', '安徽', '俊秀俏丽，天然巧成', null, '../Public/uploads/scenery/5851fd84dd512.jpg', '2016-12-15');
INSERT INTO `scenery` VALUES ('6', '九寨沟', '四川', '梦幻般的游览体验', null, '../Public/uploads/scenery/5851fe49957d0.jpg', '2016-12-15');
INSERT INTO `scenery` VALUES ('7', '桂林山水', '广西', '可以欣赏到一副唯美的中国画卷', null, '../Public/uploads/scenery/5851fe8d276a1.jpg', '2016-12-15');
INSERT INTO `scenery` VALUES ('8', '鼓浪屿', '厦门', '海滨浴场，海底世界等都是不容错过的景点', null, '../Public/uploads/scenery/5851fec7edc08.png', '2016-12-15');
INSERT INTO `scenery` VALUES ('9', '长城', '北京', '不到长城非好汉', null, '../Public/uploads/scenery/5851ff2243cd2.png', '2016-12-15');

-- ----------------------------
-- Table structure for shopping
-- ----------------------------
DROP TABLE IF EXISTS `shopping`;
CREATE TABLE `shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopping` varchar(20) DEFAULT NULL,
  `site` varchar(20) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `praise` int(255) DEFAULT '0',
  `shoppingpic` varchar(50) DEFAULT NULL,
  `shoppingtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shopping
-- ----------------------------
INSERT INTO `shopping` VALUES ('2', '纪念品', '北京', '物美价廉', null, '../Public/uploads/shopping/58520067ba196.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('3', '纪念品', '西安', '物美价廉', null, '../Public/uploads/shopping/5852016257f74.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('4', '纪念品', '广州', '物美价廉', null, '../Public/uploads/shopping/5852018539d07.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('5', '纪念品', '广西', '物美价廉', null, '../Public/uploads/shopping/5852019fc073c.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('6', '纪念品', '北京南锣鼓巷', '纪念价值极高', null, '../Public/uploads/shopping/585203a1966fb.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('7', '纪念品', '西藏', '棒！', null, '../Public/uploads/shopping/585203dcbd9bb.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('8', '纪念品', '河北', '好！', null, '../Public/uploads/shopping/585203fa5667d.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('9', '纪念品', '河南', '很高的纪念价值', null, '../Public/uploads/shopping/5852041271ad0.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('10', '十八街麻花', '北京王府井', '当地一大特色', null, '../Public/uploads/shopping/5852059fed46a.jpg', '2016-12-15');
INSERT INTO `shopping` VALUES ('11', '122', null, null, '0', null, '2016-12-19');

-- ----------------------------
-- Table structure for travelnote
-- ----------------------------
DROP TABLE IF EXISTS `travelnote`;
CREATE TABLE `travelnote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `site` varchar(20) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `first` text,
  `second` text,
  `last` text,
  `image` varchar(255) DEFAULT NULL,
  `recommend` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of travelnote
-- ----------------------------
INSERT INTO `travelnote` VALUES ('1', '呼伦贝尔之旅', '呼伦贝尔', '2016-12-15', null, '其实这是去年的出行了，严重的拖延症导致现在过了一年还没完成，最近秋高气爽，回忆起秋天的美，于是急着把这篇适合当季出发的游记完成了，应景一下。\r\n\r\n最近几次旅行几乎都是没有提前做好准备然后临时定下一个目的地再开始急三火四的准备这些那些，关于我，太阳双鱼座上升处女座外加AB血型简直就是多重人格的矛盾体，再配上咱八零后随性不羁爱自由的个性，导致明明对每次旅程充满幻想要求又很高，但就是拖延着不着手开始准备，等到真的要来不及了开始手忙脚乱。这不，这两天码游记之余，还忙着准备接下来的签证，因为感觉又要来不及了。。。\r\n\r\n这次的呼伦贝尔也不例外，忙忙碌碌朝九晚五的机械化生活之余，离国庆逼近了才猛然想到假期还没有安排。当然想在最好的季节九月份请这么多天假急着出发也是不太现实，会被领导跳劈，加上本身就决定的晚了，索性放在国庆出发，据说十月已经算是淡季了，好处就是淡季相对便宜，人少，很好，我讨厌人挤人，要知道后来从内蒙回北京玩的那几天，几个公式都没法计算我的心理阴影面积，反正就是“人人人从从从众众众”。还是内蒙好，亏的我们地大物博，不到内蒙古还真不知道，就算是旺季，人也不会显得多，就好比在一大片空地上分散地撒一把芝麻…\r\n\r\n说到飞机票，当初看飞机票的时候发现国庆的机票一如既往的水涨船高，尤其是上海直飞海拉尔的机票感觉都能跑个东南亚了。。。想到上海到北京有高铁可以直达，于是转变方向看了一下北京到海拉尔的机票还是能承受的，于是赶紧定下了海航的北京到海拉尔往返机票，以及上海到北京往返的高铁票。 之后不太顺利的就是海航三番五次的取消航班，导致我们的行程不得不相应着一变再变。。。', '由于订的比较晚，对于路线也没有研究过，放弃了自驾，因为还要研究线路对我太麻烦，于是直接在网上找认识的人推荐了包车师傅A。 加了微信后告知这位师傅A国庆已经被安排掉了，这个师傅A人很好，按照我们的天数帮我们制定了路线行程，还推荐了另一个师傅B给我们，师傅B又让第三位韩师傅来接应我们。。\r\n\r\n由于海航的不靠谱，导致本身就不多的天数变的更加短了，以至于最后只有7天，而且其中最后一天是一早直接从满洲里赶往海拉尔，半天都不到，整个包车过程还算开心圆满，唯一需要提到的是，当时师傅B电话里讲好最后一天算半天的钱, 可是最后回机场的那天结算费用的时候，韩师傅说应该是按照公里数来的，所以不可能是半天的钱，必须是一天的钱。我们说当时师傅B电话里跟我们讲好的啊，于是韩师傅当场打了个电话给师傅B，师傅B矢口否认，说从来没讲过。\r\n\r\n（不知道这么叙述有没有人听的懂，文化水平有限嘛！)我只能说这个只能怪我自己，疏忽了，当时没有用微信或者短信的方式沟通这件事情，以至于最后讲不清了。看在韩师傅带了我们这么多天还蛮开心的份上，我就不纠结这个问题了，但是如果要去的朋友需要预定包车，一定要跟当地师傅留好证据，微信，语音都行，电话还是不算数的。。\r\n\r\n大致路线如下： DAY 1: 海拉尔－金帐汗－莫日格勒河－额尔古纳－白桦林－恩和俄罗斯民族乡 DAY 2: 恩和俄罗斯民族乡－哈乌尔河景区－室韦－临江屯 DAY 3: 临江屯－太平屯－莫尔道嘎 DAY 4: 莫尔道嘎－冷极村－偃松林景区－根河 DAY 5: 敖鲁古雅驯鹿园－根河湿地－北纬50度－黑山头镇 DAY 6: 黑山头镇－边防公路－胡列也吐 - 呼伦湖－满洲里 DAY 7: 满洲里－海拉尔 其实时间多的话，应该继续往北走，到最北漠河，时间不够只能绕个小圈了。不过按照师傅的说法就是，这个路线经典的几个地方也都踩到了。要不是航班改变，计划应该还要去个阿尔山国家森林公园，也不得不放弃了。 自己回来画了路线才知道，原来走的是个“8”字的形状。', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', null, '0', '0');
INSERT INTO `travelnote` VALUES ('2', '三亚之旅', '三亚', '2015-12-12', null, '其实这是去年的出行了，严重的拖延症导致现在过了一年还没完成，最近秋高气爽，回忆起秋天的美，于是急着把这篇适合当季出发的游记完成了，应景一下。\r\n\r\n最近几次旅行几乎都是没有提前做好准备然后临时定下一个目的地再开始急三火四的准备这些那些，关于我，太阳双鱼座上升处女座外加AB血型简直就是多重人格的矛盾体，再配上咱八零后随性不羁爱自由的个性，导致明明对每次旅程充满幻想要求又很高，但就是拖延着不着手开始准备，等到真的要来不及了开始手忙脚乱。这不，这两天码游记之余，还忙着准备接下来的签证，因为感觉又要来不及了。。。\r\n\r\n这次的呼伦贝尔也不例外，忙忙碌碌朝九晚五的机械化生活之余，离国庆逼近了才猛然想到假期还没有安排。当然想在最好的季节九月份请这么多天假急着出发也是不太现实，会被领导跳劈，加上本身就决定的晚了，索性放在国庆出发，据说十月已经算是淡季了，好处就是淡季相对便宜，人少，很好，我讨厌人挤人，要知道后来从内蒙回北京玩的那几天，几个公式都没法计算我的心理阴影面积，反正就是“人人人从从从众众众”。还是内蒙好，亏的我们地大物博，不到内蒙古还真不知道，就算是旺季，人也不会显得多，就好比在一大片空地上分散地撒一把芝麻…\r\n\r\n说到飞机票，当初看飞机票的时候发现国庆的机票一如既往的水涨船高，尤其是上海直飞海拉尔的机票感觉都能跑个东南亚了。。。想到上海到北京有高铁可以直达，于是转变方向看了一下北京到海拉尔的机票还是能承受的，于是赶紧定下了海航的北京到海拉尔往返机票，以及上海到北京往返的高铁票。 之后不太顺利的就是海航三番五次的取消航班，导致我们的行程不得不相应着一变再变。。。', '由于订的比较晚，对于路线也没有研究过，放弃了自驾，因为还要研究线路对我太麻烦，于是直接在网上找认识的人推荐了包车师傅A。 加了微信后告知这位师傅A国庆已经被安排掉了，这个师傅A人很好，按照我们的天数帮我们制定了路线行程，还推荐了另一个师傅B给我们，师傅B又让第三位韩师傅来接应我们。。\r\n\r\n由于海航的不靠谱，导致本身就不多的天数变的更加短了，以至于最后只有7天，而且其中最后一天是一早直接从满洲里赶往海拉尔，半天都不到，整个包车过程还算开心圆满，唯一需要提到的是，当时师傅B电话里讲好最后一天算半天的钱, 可是最后回机场的那天结算费用的时候，韩师傅说应该是按照公里数来的，所以不可能是半天的钱，必须是一天的钱。我们说当时师傅B电话里跟我们讲好的啊，于是韩师傅当场打了个电话给师傅B，师傅B矢口否认，说从来没讲过。\r\n\r\n（不知道这么叙述有没有人听的懂，文化水平有限嘛！)我只能说这个只能怪我自己，疏忽了，当时没有用微信或者短信的方式沟通这件事情，以至于最后讲不清了。看在韩师傅带了我们这么多天还蛮开心的份上，我就不纠结这个问题了，但是如果要去的朋友需要预定包车，一定要跟当地师傅留好证据，微信，语音都行，电话还是不算数的。。\r\n\r\n大致路线如下： DAY 1: 海拉尔－金帐汗－莫日格勒河－额尔古纳－白桦林－恩和俄罗斯民族乡 DAY 2: 恩和俄罗斯民族乡－哈乌尔河景区－室韦－临江屯 DAY 3: 临江屯－太平屯－莫尔道嘎 DAY 4: 莫尔道嘎－冷极村－偃松林景区－根河 DAY 5: 敖鲁古雅驯鹿园－根河湿地－北纬50度－黑山头镇 DAY 6: 黑山头镇－边防公路－胡列也吐 - 呼伦湖－满洲里 DAY 7: 满洲里－海拉尔 其实时间多的话，应该继续往北走，到最北漠河，时间不够只能绕个小圈了。不过按照师傅的说法就是，这个路线经典的几个地方也都踩到了。要不是航班改变，计划应该还要去个阿尔山国家森林公园，也不得不放弃了。 自己回来画了路线才知道，原来走的是个“8”字的形状。', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', null, '0', '0');
INSERT INTO `travelnote` VALUES ('3', '海南之旅', '海南', '2014-04-08', null, '其实这是去年的出行了，严重的拖延症导致现在过了一年还没完成，最近秋高气爽，回忆起秋天的美，于是急着把这篇适合当季出发的游记完成了，应景一下。\r\n\r\n最近几次旅行几乎都是没有提前做好准备然后临时定下一个目的地再开始急三火四的准备这些那些，关于我，太阳双鱼座上升处女座外加AB血型简直就是多重人格的矛盾体，再配上咱八零后随性不羁爱自由的个性，导致明明对每次旅程充满幻想要求又很高，但就是拖延着不着手开始准备，等到真的要来不及了开始手忙脚乱。这不，这两天码游记之余，还忙着准备接下来的签证，因为感觉又要来不及了。。。\r\n\r\n这次的呼伦贝尔也不例外，忙忙碌碌朝九晚五的机械化生活之余，离国庆逼近了才猛然想到假期还没有安排。当然想在最好的季节九月份请这么多天假急着出发也是不太现实，会被领导跳劈，加上本身就决定的晚了，索性放在国庆出发，据说十月已经算是淡季了，好处就是淡季相对便宜，人少，很好，我讨厌人挤人，要知道后来从内蒙回北京玩的那几天，几个公式都没法计算我的心理阴影面积，反正就是“人人人从从从众众众”。还是内蒙好，亏的我们地大物博，不到内蒙古还真不知道，就算是旺季，人也不会显得多，就好比在一大片空地上分散地撒一把芝麻…\r\n\r\n说到飞机票，当初看飞机票的时候发现国庆的机票一如既往的水涨船高，尤其是上海直飞海拉尔的机票感觉都能跑个东南亚了。。。想到上海到北京有高铁可以直达，于是转变方向看了一下北京到海拉尔的机票还是能承受的，于是赶紧定下了海航的北京到海拉尔往返机票，以及上海到北京往返的高铁票。 之后不太顺利的就是海航三番五次的取消航班，导致我们的行程不得不相应着一变再变。。。', '由于订的比较晚，对于路线也没有研究过，放弃了自驾，因为还要研究线路对我太麻烦，于是直接在网上找认识的人推荐了包车师傅A。 加了微信后告知这位师傅A国庆已经被安排掉了，这个师傅A人很好，按照我们的天数帮我们制定了路线行程，还推荐了另一个师傅B给我们，师傅B又让第三位韩师傅来接应我们。。\r\n\r\n由于海航的不靠谱，导致本身就不多的天数变的更加短了，以至于最后只有7天，而且其中最后一天是一早直接从满洲里赶往海拉尔，半天都不到，整个包车过程还算开心圆满，唯一需要提到的是，当时师傅B电话里讲好最后一天算半天的钱, 可是最后回机场的那天结算费用的时候，韩师傅说应该是按照公里数来的，所以不可能是半天的钱，必须是一天的钱。我们说当时师傅B电话里跟我们讲好的啊，于是韩师傅当场打了个电话给师傅B，师傅B矢口否认，说从来没讲过。\r\n\r\n（不知道这么叙述有没有人听的懂，文化水平有限嘛！)我只能说这个只能怪我自己，疏忽了，当时没有用微信或者短信的方式沟通这件事情，以至于最后讲不清了。看在韩师傅带了我们这么多天还蛮开心的份上，我就不纠结这个问题了，但是如果要去的朋友需要预定包车，一定要跟当地师傅留好证据，微信，语音都行，电话还是不算数的。。\r\n\r\n大致路线如下： DAY 1: 海拉尔－金帐汗－莫日格勒河－额尔古纳－白桦林－恩和俄罗斯民族乡 DAY 2: 恩和俄罗斯民族乡－哈乌尔河景区－室韦－临江屯 DAY 3: 临江屯－太平屯－莫尔道嘎 DAY 4: 莫尔道嘎－冷极村－偃松林景区－根河 DAY 5: 敖鲁古雅驯鹿园－根河湿地－北纬50度－黑山头镇 DAY 6: 黑山头镇－边防公路－胡列也吐 - 呼伦湖－满洲里 DAY 7: 满洲里－海拉尔 其实时间多的话，应该继续往北走，到最北漠河，时间不够只能绕个小圈了。不过按照师傅的说法就是，这个路线经典的几个地方也都踩到了。要不是航班改变，计划应该还要去个阿尔山国家森林公园，也不得不放弃了。 自己回来画了路线才知道，原来走的是个“8”字的形状。', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', null, '1', '0');
INSERT INTO `travelnote` VALUES ('4', '广州之行', '广州', '2013-04-09', null, '其实这是去年的出行了，严重的拖延症导致现在过了一年还没完成，最近秋高气爽，回忆起秋天的美，于是急着把这篇适合当季出发的游记完成了，应景一下。\r\n\r\n最近几次旅行几乎都是没有提前做好准备然后临时定下一个目的地再开始急三火四的准备这些那些，关于我，太阳双鱼座上升处女座外加AB血型简直就是多重人格的矛盾体，再配上咱八零后随性不羁爱自由的个性，导致明明对每次旅程充满幻想要求又很高，但就是拖延着不着手开始准备，等到真的要来不及了开始手忙脚乱。这不，这两天码游记之余，还忙着准备接下来的签证，因为感觉又要来不及了。。。\r\n\r\n这次的呼伦贝尔也不例外，忙忙碌碌朝九晚五的机械化生活之余，离国庆逼近了才猛然想到假期还没有安排。当然想在最好的季节九月份请这么多天假急着出发也是不太现实，会被领导跳劈，加上本身就决定的晚了，索性放在国庆出发，据说十月已经算是淡季了，好处就是淡季相对便宜，人少，很好，我讨厌人挤人，要知道后来从内蒙回北京玩的那几天，几个公式都没法计算我的心理阴影面积，反正就是“人人人从从从众众众”。还是内蒙好，亏的我们地大物博，不到内蒙古还真不知道，就算是旺季，人也不会显得多，就好比在一大片空地上分散地撒一把芝麻…\r\n\r\n说到飞机票，当初看飞机票的时候发现国庆的机票一如既往的水涨船高，尤其是上海直飞海拉尔的机票感觉都能跑个东南亚了。。。想到上海到北京有高铁可以直达，于是转变方向看了一下北京到海拉尔的机票还是能承受的，于是赶紧定下了海航的北京到海拉尔往返机票，以及上海到北京往返的高铁票。 之后不太顺利的就是海航三番五次的取消航班，导致我们的行程不得不相应着一变再变。。。', '由于订的比较晚，对于路线也没有研究过，放弃了自驾，因为还要研究线路对我太麻烦，于是直接在网上找认识的人推荐了包车师傅A。 加了微信后告知这位师傅A国庆已经被安排掉了，这个师傅A人很好，按照我们的天数帮我们制定了路线行程，还推荐了另一个师傅B给我们，师傅B又让第三位韩师傅来接应我们。。\r\n\r\n由于海航的不靠谱，导致本身就不多的天数变的更加短了，以至于最后只有7天，而且其中最后一天是一早直接从满洲里赶往海拉尔，半天都不到，整个包车过程还算开心圆满，唯一需要提到的是，当时师傅B电话里讲好最后一天算半天的钱, 可是最后回机场的那天结算费用的时候，韩师傅说应该是按照公里数来的，所以不可能是半天的钱，必须是一天的钱。我们说当时师傅B电话里跟我们讲好的啊，于是韩师傅当场打了个电话给师傅B，师傅B矢口否认，说从来没讲过。\r\n\r\n（不知道这么叙述有没有人听的懂，文化水平有限嘛！)我只能说这个只能怪我自己，疏忽了，当时没有用微信或者短信的方式沟通这件事情，以至于最后讲不清了。看在韩师傅带了我们这么多天还蛮开心的份上，我就不纠结这个问题了，但是如果要去的朋友需要预定包车，一定要跟当地师傅留好证据，微信，语音都行，电话还是不算数的。。\r\n\r\n大致路线如下： DAY 1: 海拉尔－金帐汗－莫日格勒河－额尔古纳－白桦林－恩和俄罗斯民族乡 DAY 2: 恩和俄罗斯民族乡－哈乌尔河景区－室韦－临江屯 DAY 3: 临江屯－太平屯－莫尔道嘎 DAY 4: 莫尔道嘎－冷极村－偃松林景区－根河 DAY 5: 敖鲁古雅驯鹿园－根河湿地－北纬50度－黑山头镇 DAY 6: 黑山头镇－边防公路－胡列也吐 - 呼伦湖－满洲里 DAY 7: 满洲里－海拉尔 其实时间多的话，应该继续往北走，到最北漠河，时间不够只能绕个小圈了。不过按照师傅的说法就是，这个路线经典的几个地方也都踩到了。要不是航班改变，计划应该还要去个阿尔山国家森林公园，也不得不放弃了。 自己回来画了路线才知道，原来走的是个“8”字的形状。', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', null, '1', '0');
INSERT INTO `travelnote` VALUES ('5', '拉萨之行', '拉萨', '2012-03-07', null, '其实这是去年的出行了，严重的拖延症导致现在过了一年还没完成，最近秋高气爽，回忆起秋天的美，于是急着把这篇适合当季出发的游记完成了，应景一下。\r\n\r\n最近几次旅行几乎都是没有提前做好准备然后临时定下一个目的地再开始急三火四的准备这些那些，关于我，太阳双鱼座上升处女座外加AB血型简直就是多重人格的矛盾体，再配上咱八零后随性不羁爱自由的个性，导致明明对每次旅程充满幻想要求又很高，但就是拖延着不着手开始准备，等到真的要来不及了开始手忙脚乱。这不，这两天码游记之余，还忙着准备接下来的签证，因为感觉又要来不及了。。。\r\n\r\n这次的呼伦贝尔也不例外，忙忙碌碌朝九晚五的机械化生活之余，离国庆逼近了才猛然想到假期还没有安排。当然想在最好的季节九月份请这么多天假急着出发也是不太现实，会被领导跳劈，加上本身就决定的晚了，索性放在国庆出发，据说十月已经算是淡季了，好处就是淡季相对便宜，人少，很好，我讨厌人挤人，要知道后来从内蒙回北京玩的那几天，几个公式都没法计算我的心理阴影面积，反正就是“人人人从从从众众众”。还是内蒙好，亏的我们地大物博，不到内蒙古还真不知道，就算是旺季，人也不会显得多，就好比在一大片空地上分散地撒一把芝麻…\r\n\r\n说到飞机票，当初看飞机票的时候发现国庆的机票一如既往的水涨船高，尤其是上海直飞海拉尔的机票感觉都能跑个东南亚了。。。想到上海到北京有高铁可以直达，于是转变方向看了一下北京到海拉尔的机票还是能承受的，于是赶紧定下了海航的北京到海拉尔往返机票，以及上海到北京往返的高铁票。 之后不太顺利的就是海航三番五次的取消航班，导致我们的行程不得不相应着一变再变。。。', '由于订的比较晚，对于路线也没有研究过，放弃了自驾，因为还要研究线路对我太麻烦，于是直接在网上找认识的人推荐了包车师傅A。 加了微信后告知这位师傅A国庆已经被安排掉了，这个师傅A人很好，按照我们的天数帮我们制定了路线行程，还推荐了另一个师傅B给我们，师傅B又让第三位韩师傅来接应我们。。\r\n\r\n由于海航的不靠谱，导致本身就不多的天数变的更加短了，以至于最后只有7天，而且其中最后一天是一早直接从满洲里赶往海拉尔，半天都不到，整个包车过程还算开心圆满，唯一需要提到的是，当时师傅B电话里讲好最后一天算半天的钱, 可是最后回机场的那天结算费用的时候，韩师傅说应该是按照公里数来的，所以不可能是半天的钱，必须是一天的钱。我们说当时师傅B电话里跟我们讲好的啊，于是韩师傅当场打了个电话给师傅B，师傅B矢口否认，说从来没讲过。\r\n\r\n（不知道这么叙述有没有人听的懂，文化水平有限嘛！)我只能说这个只能怪我自己，疏忽了，当时没有用微信或者短信的方式沟通这件事情，以至于最后讲不清了。看在韩师傅带了我们这么多天还蛮开心的份上，我就不纠结这个问题了，但是如果要去的朋友需要预定包车，一定要跟当地师傅留好证据，微信，语音都行，电话还是不算数的。。\r\n\r\n大致路线如下： DAY 1: 海拉尔－金帐汗－莫日格勒河－额尔古纳－白桦林－恩和俄罗斯民族乡 DAY 2: 恩和俄罗斯民族乡－哈乌尔河景区－室韦－临江屯 DAY 3: 临江屯－太平屯－莫尔道嘎 DAY 4: 莫尔道嘎－冷极村－偃松林景区－根河 DAY 5: 敖鲁古雅驯鹿园－根河湿地－北纬50度－黑山头镇 DAY 6: 黑山头镇－边防公路－胡列也吐 - 呼伦湖－满洲里 DAY 7: 满洲里－海拉尔 其实时间多的话，应该继续往北走，到最北漠河，时间不够只能绕个小圈了。不过按照师傅的说法就是，这个路线经典的几个地方也都踩到了。要不是航班改变，计划应该还要去个阿尔山国家森林公园，也不得不放弃了。 自己回来画了路线才知道，原来走的是个“8”字的形状。', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', null, '0', '10');
INSERT INTO `travelnote` VALUES ('6', '吉林之旅', '吉林', '2011-01-01', null, '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', '呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n呼伦贝尔的旅行随着美丽的朝霞结束了，中国就是这样，地大物博，好山好水好风景。\r\n\r\n你问我呼伦贝尔到底玩点什么，我也说不上来，可能并不怎么好玩，也就是美味的牛羊肉，香喷喷的锅茶，一望无际的大草原，漫山遍野的金黄，神秘的大兴安岭，光影斑驳的白桦林，草原上可爱的动物们，以及美到哭的日出日落。\r\n\r\n很美，一路都很美，所以一定要看看。\r\n', null, '0', '20');
