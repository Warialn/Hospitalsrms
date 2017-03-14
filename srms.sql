/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : srms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-03-14 16:43:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for srms_jf_expense
-- ----------------------------
DROP TABLE IF EXISTS `srms_jf_expense`;
CREATE TABLE `srms_jf_expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `where` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `picpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_jf_expense
-- ----------------------------
INSERT INTO `srms_jf_expense` VALUES ('1', '王诺楠', '买书', '20', '医学项目', '2017-03-13 16:56:00', '医学', null);

-- ----------------------------
-- Table structure for srms_jf_expense_apply
-- ----------------------------
DROP TABLE IF EXISTS `srms_jf_expense_apply`;
CREATE TABLE `srms_jf_expense_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `where` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `picpath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_jf_expense_apply
-- ----------------------------
INSERT INTO `srms_jf_expense_apply` VALUES ('1', '王诺楠', '买书', '80', '项目2', '2017-01-22 08:00:00', '医学', null);

-- ----------------------------
-- Table structure for srms_log
-- ----------------------------
DROP TABLE IF EXISTS `srms_log`;
CREATE TABLE `srms_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_log
-- ----------------------------

-- ----------------------------
-- Table structure for srms_tj_achievement
-- ----------------------------
DROP TABLE IF EXISTS `srms_tj_achievement`;
CREATE TABLE `srms_tj_achievement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `awardname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` decimal(10,0) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `scinumber` int(11) NOT NULL,
  `patentnumber` int(11) NOT NULL,
  `authortype` varchar(255) NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_tj_achievement
-- ----------------------------
INSERT INTO `srms_tj_achievement` VALUES ('1', '1', '测试1', '测试1', '测试1', '测试1', '2013', '一等奖', '', '0', '0', '本院人员', null, '测试1');
INSERT INTO `srms_tj_achievement` VALUES ('2', '1', '测试2', '测试2', '测试2', '测试2', '2014', '二等奖', '1', '123', '0', '本院人员', null, '');
INSERT INTO `srms_tj_achievement` VALUES ('3', '1', '测试3', '测试3', '测试3', '测试3', '2013', '', '1', '0', '0', '本院人员', null, '');
INSERT INTO `srms_tj_achievement` VALUES ('4', '1', '', '', '', '', '2013', '', '1', '0', '0', '本院人员', null, '');

-- ----------------------------
-- Table structure for srms_tj_equipment
-- ----------------------------
DROP TABLE IF EXISTS `srms_tj_equipment`;
CREATE TABLE `srms_tj_equipment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `time` varchar(0) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `costresource` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_tj_equipment
-- ----------------------------
INSERT INTO `srms_tj_equipment` VALUES ('1', '1', '111', '设备1', '1111', '111', '', '111', '地方虽然是个', '方是否认同', '大王', '11111111111', '', '22');

-- ----------------------------
-- Table structure for srms_tj_filedownload
-- ----------------------------
DROP TABLE IF EXISTS `srms_tj_filedownload`;
CREATE TABLE `srms_tj_filedownload` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `time` decimal(10,0) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_tj_filedownload
-- ----------------------------
INSERT INTO `srms_tj_filedownload` VALUES ('1', '1', '12345.doc', '2017-01-17/587d8a865abf9.doc', '9999999999', null, null);
INSERT INTO `srms_tj_filedownload` VALUES ('2', '1', '12345.doc', '2017-01-17/587d8ab141f4f.doc', '9999999999', null, null);
INSERT INTO `srms_tj_filedownload` VALUES ('3', '1', '12345.doc', '2017-01-17/587d8c76dbff1.doc', '9999999999', '华佗', null);
INSERT INTO `srms_tj_filedownload` VALUES ('4', '1', '12345.doc', '2017-01-17/587d8cf354c57.doc', '9999999999', '华佗', null);
INSERT INTO `srms_tj_filedownload` VALUES ('5', '1', '12345.doc', '2017-01-17/587d8e2700b04.doc', '0', '华佗', null);
INSERT INTO `srms_tj_filedownload` VALUES ('6', '1', '12345.doc', '2017-01-17/587d8e5377f64.doc', '1484582400', '华佗', null);
INSERT INTO `srms_tj_filedownload` VALUES ('7', '1', '12345.doc', '2017-01-17/587d902422e5d.doc', '1484582400', '华佗', '2017');

-- ----------------------------
-- Table structure for srms_tj_propty
-- ----------------------------
DROP TABLE IF EXISTS `srms_tj_propty`;
CREATE TABLE `srms_tj_propty` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(6) NOT NULL COMMENT '用户外键',
  `date` varchar(15) NOT NULL COMMENT '统计日期',
  `department` varchar(25) NOT NULL COMMENT '部门',
  `name` varchar(20) NOT NULL,
  `idcard` varchar(25) NOT NULL COMMENT '身份证号',
  `paycard` varchar(25) NOT NULL COMMENT '工资卡号',
  `cname` varchar(30) NOT NULL COMMENT '专利名',
  `type` varchar(15) NOT NULL COMMENT '种类',
  `address` varchar(5) NOT NULL COMMENT '是否署名本校',
  `remarks` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `FK_ID4` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='知识产权统计表';

-- ----------------------------
-- Records of srms_tj_propty
-- ----------------------------
INSERT INTO `srms_tj_propty` VALUES ('2', '1', '2016', '信息科学与工程学院', '某人1', '专利修改测试成功', '专利修改测试成功', '专利修改测试成功', '发明专利', '是', '专利修改测试成功');
INSERT INTO `srms_tj_propty` VALUES ('3', '1', '2016', '信息科学与工程学院', '某某人', '2132131231232131321', '123123132321131231', '新能源', '获软件著作权登记', '是', '备注一下');
INSERT INTO `srms_tj_propty` VALUES ('4', '1', '2015', '信息科学与工程学院', '某某人', '2132131231232131321', '123123132321131231', '新能源2', '获软件著作权登记', '是', '是的撒大大');

-- ----------------------------
-- Table structure for srms_tj_theses
-- ----------------------------
DROP TABLE IF EXISTS `srms_tj_theses`;
CREATE TABLE `srms_tj_theses` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '论文id',
  `uid` int(6) NOT NULL COMMENT '用户外键',
  `date` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL COMMENT '论文名称',
  `sname` varchar(30) NOT NULL COMMENT '刊物',
  `period` varchar(20) NOT NULL COMMENT '年卷期',
  `author` varchar(20) NOT NULL,
  `status` varchar(6) NOT NULL,
  `level` varchar(20) NOT NULL,
  `source` text NOT NULL COMMENT '依托项目',
  `number` varchar(30) NOT NULL COMMENT '依托项目编号',
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ID5` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='论文统计';

-- ----------------------------
-- Records of srms_tj_theses
-- ----------------------------
INSERT INTO `srms_tj_theses` VALUES ('5', '1', '2015', '论文修改测试ok', '论文修改测试ok', '论文修改测试ok', '论文修改测试ok', '已收录', '普通期刊', '论文修改测试ok', '论文修改测试ok', '论文修改测试ok');
INSERT INTO `srms_tj_theses` VALUES ('6', '1', '2015', '论文5', '论文5', '论文5', '论文5', '已收录', 'SCI收录', '论文5', '论文5', '论文5');
INSERT INTO `srms_tj_theses` VALUES ('7', '1', '2023', '论文4', '论文4', '论文4', '论文4', '已收录', 'SCI收录', '论文4', '论文4', '论文4');
INSERT INTO `srms_tj_theses` VALUES ('8', '1', '2020', '论文6', '论文6', '论文6', '论文6', '已收录', 'SCI收录', '论文6', '论文6', '论文6');
INSERT INTO `srms_tj_theses` VALUES ('9', '1', '2009', '123论文', '123论文', '123论文', '123论文', '已收录', 'SCI收录', '123论文', '123论文', '123论文');
INSERT INTO `srms_tj_theses` VALUES ('10', '1', '2010', '12论文', '12论文', '12论文', '12论文', '已收录', 'SCI收录', '12论文', '12论文', '12论文');
INSERT INTO `srms_tj_theses` VALUES ('11', '1', '2011', '89论文', '89论文', '89论文', '89论文', '已收录', 'SCI收录', '89论文', '89论文', '89论文');
INSERT INTO `srms_tj_theses` VALUES ('12', '1', '2012', '23论文', '23论文', '23论文', '23论文', '已收录', 'SCI收录', '23论文', '23论文', '23论文');
INSERT INTO `srms_tj_theses` VALUES ('13', '1', '2014', '33论文', '33论文', '33论文', '33论文', '已收录', 'SCI收录', '33论文', '33论文', '33论文');
INSERT INTO `srms_tj_theses` VALUES ('14', '1', '2015', '44论文', '44论文', '44论文', '44论文', '已收录', 'SCI收录', '44论文', '44论文', '44论文');
INSERT INTO `srms_tj_theses` VALUES ('15', '1', '2016', '16论文', '16论文', '16论文', '16论文', '已收录', 'SCI收录', '16论文', '16论文', '16论文');
INSERT INTO `srms_tj_theses` VALUES ('16', '1', '2018', '18论文', '18论文', '18论文', '18论文', '已收录', 'SCI收录', '18论文', '18论文', '18论文');
INSERT INTO `srms_tj_theses` VALUES ('17', '1', '2019', '19论文', '19论文', '19论文', '19论文', '已收录', 'SCI收录', '19论文', '19论文', '19论文');
INSERT INTO `srms_tj_theses` VALUES ('18', '1', '2020', '20论文', '20论文', '20论文', '20论文', '已收录', 'SCI收录', '20论文', '20论文', '20论文');
INSERT INTO `srms_tj_theses` VALUES ('19', '1', '2020', '20论文', '20论文', '20论文', '20论文', '已收录', 'SCI收录', '20论文', '20论文', '20论文');
INSERT INTO `srms_tj_theses` VALUES ('20', '1', '2021', '21论文', '21论文', '21论文', '21论文', '已收录', 'SCI收录', '21论文', '21论文', '21论文');
INSERT INTO `srms_tj_theses` VALUES ('21', '1', '2022', '22论文', '22论文', '22论文', '22论文', '已收录', 'SCI收录', '22论文', '22论文', '22论文');
INSERT INTO `srms_tj_theses` VALUES ('22', '1', '2023', '23论文', '论文', '论文', '论文', '已收录', 'SCI收录', '论文', '论文', '论文');
INSERT INTO `srms_tj_theses` VALUES ('23', '1', '2023', '24论文修改为23', '论文23', '论文23', '论文23', '已发表', '测试其他', '论文23', '12221223', '论文23');
INSERT INTO `srms_tj_theses` VALUES ('24', '1', '2025', '25论文', '论文', '论文', '论文', '已收录', 'SCI收录', '论文', '1212', '论文');
INSERT INTO `srms_tj_theses` VALUES ('26', '1', '2027', '赛题', '赛题', '赛题', '赛题', '已收录', 'SCI收录', '赛题', '赛题', '赛题');
INSERT INTO `srms_tj_theses` VALUES ('27', '1', '2028', '一点钟方向', '一点钟方向', '一点钟方向', '一点钟方向', '已收录', 'SCI收录', '一点钟方向', '一点钟方向', '一点钟方向');
INSERT INTO `srms_tj_theses` VALUES ('28', '1', '2027', '三五六九', '三五六九', '三五六九', '三五六九', '已收录', 'SCI收录', '三五六九', '三五六九', '三五六九');
INSERT INTO `srms_tj_theses` VALUES ('29', '1', '2024', '黛绿山峰', '黛绿山峰', '黛绿山峰', '黛绿山峰', '已收录', 'SCI收录', '黛绿山峰', '黛绿山峰', '黛绿山峰');
INSERT INTO `srms_tj_theses` VALUES ('30', '1', '2030', '俯瞰', '俯瞰', '俯瞰', '俯瞰', '已收录', 'SCI收录', '俯瞰', '俯瞰', '俯瞰');
INSERT INTO `srms_tj_theses` VALUES ('31', '1', '2031', '瞬间石化', '瞬间石化', '瞬间石化', '瞬间石化', '已收录', 'SCI收录', '瞬间石化', '212121212', '瞬间石化');
INSERT INTO `srms_tj_theses` VALUES ('32', '1', '2031', '31论文', '31论文', '31论文', '31论文', '已收录', 'SCI收录', '31论文', '32323232', '31论文');
INSERT INTO `srms_tj_theses` VALUES ('33', '1', '2030', '30年论文', '30年论文', '30年论文', '30年论文', '已收录', 'SCI收录', '30年论文', '30年论文', '30年论文');
INSERT INTO `srms_tj_theses` VALUES ('34', '2', '2016', '用户2的统计', '用户2的统计', '用户2的统计', '用户2的统计', '已收录', 'SCI收录', '用户2的统计', '用户2的统计', '用户2的统计');
INSERT INTO `srms_tj_theses` VALUES ('35', '1', '2015', '测试项目', '测试项目', '测试项目', '测试项目', '已收录', 'SCI收录', '测试项目', '测试项目', '测试项目');
INSERT INTO `srms_tj_theses` VALUES ('36', '1', '2016', '基于php的科研管理系统', '论文', '3', '未知', '已收录', '普通期刊', '论文依托项目', '20191919', '备注一下');
INSERT INTO `srms_tj_theses` VALUES ('37', '1', '2016', '论文5', '论文5', '1', '论文5', '已收录', 'SCI收录', '论文5', '4', '论文5');
INSERT INTO `srms_tj_theses` VALUES ('38', '1', '2015', '论文', '论文', '1', '某人', '已收录', 'SCI收录', '论文', '123213', '论文');
INSERT INTO `srms_tj_theses` VALUES ('39', '1', '2017', '中国梦', '校报', '2016', '张三', '已发表', 'SCI收录', '校级评选', '', '');
INSERT INTO `srms_tj_theses` VALUES ('43', '1', '2016', '111', '111', '111', '111', '已收录', 'SCI收录', '111', '111', '1111');
INSERT INTO `srms_tj_theses` VALUES ('44', '1', '2016', '111', '111', '111', '111', '已收录', 'SCI收录', '111', '111', '1111');
INSERT INTO `srms_tj_theses` VALUES ('45', '1', '2016', '111', '111', '111', '111', '已收录', 'SCI收录', '111', '111', '1111');
INSERT INTO `srms_tj_theses` VALUES ('46', '1', '2013', '课题122', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for srms_user
-- ----------------------------
DROP TABLE IF EXISTS `srms_user`;
CREATE TABLE `srms_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `reg_time` decimal(10,0) NOT NULL,
  `last_time` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `usergroup_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_user
-- ----------------------------
INSERT INTO `srms_user` VALUES ('1', '华佗', '827ccb0eea8a706c4c34a16891f84e7b', '1484213881', '1489385702', '1', '1');

-- ----------------------------
-- Table structure for srms_usergroup
-- ----------------------------
DROP TABLE IF EXISTS `srms_usergroup`;
CREATE TABLE `srms_usergroup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_usergroup
-- ----------------------------
INSERT INTO `srms_usergroup` VALUES ('1', 'admin');
INSERT INTO `srms_usergroup` VALUES ('2', 'test');

-- ----------------------------
-- Table structure for srms_xm_coller
-- ----------------------------
DROP TABLE IF EXISTS `srms_xm_coller`;
CREATE TABLE `srms_xm_coller` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `num` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` tinyint(22) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_coller
-- ----------------------------
INSERT INTO `srms_xm_coller` VALUES ('1', '1', '铅笔', '2017/01/22 08:00', '信息科', '10', '200', '王诺楠', '11111111111', '写字', '1');

-- ----------------------------
-- Table structure for srms_xm_department
-- ----------------------------
DROP TABLE IF EXISTS `srms_xm_department`;
CREATE TABLE `srms_xm_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plantformName` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `time` char(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_department
-- ----------------------------
INSERT INTO `srms_xm_department` VALUES ('1', '科研平台1', '王诺楠', '信息科', '项目2 ', '两天', '11111111111');

-- ----------------------------
-- Table structure for srms_xm_purchase
-- ----------------------------
DROP TABLE IF EXISTS `srms_xm_purchase`;
CREATE TABLE `srms_xm_purchase` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `total` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `applicant` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_purchase
-- ----------------------------
INSERT INTO `srms_xm_purchase` VALUES ('1', '1', '书', '20 * 39', '200', '20', '4000', '2017-03-22 12:00:00', '王诺楠', '信息科', '看书', '1');

-- ----------------------------
-- Table structure for srms_xm_subject
-- ----------------------------
DROP TABLE IF EXISTS `srms_xm_subject`;
CREATE TABLE `srms_xm_subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `projectName` varchar(255) DEFAULT NULL,
  `date` char(0) DEFAULT NULL,
  `member` varchar(255) NOT NULL,
  `objective` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `programme` varchar(255) NOT NULL,
  `guarantee` varchar(255) NOT NULL,
  `progress` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `funds` varchar(255) NOT NULL,
  `expert_opinion` varchar(255) DEFAULT NULL,
  `unit_opinion` varchar(255) DEFAULT NULL,
  `fpc_opnion` varchar(255) DEFAULT NULL,
  `commitment_book` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_subject
-- ----------------------------
INSERT INTO `srms_xm_subject` VALUES ('1', '1', null, null, 'wnn', '哈哈哈', '', '', '', '', '', '', '', '', null, '', null);
INSERT INTO `srms_xm_subject` VALUES ('2', '1', '课题122', null, 'wnn', '目的及意义', '', '', '', '', '', '', '', '', null, '', null);

-- ----------------------------
-- Table structure for srms_xs_composition
-- ----------------------------
DROP TABLE IF EXISTS `srms_xs_composition`;
CREATE TABLE `srms_xs_composition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compositionName` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_composition
-- ----------------------------
INSERT INTO `srms_xs_composition` VALUES ('2', '本草纲目', '李时珍', '药材', '2014-09-11 10:00:00', '医学', '本草纲目是李时珍当年历时 多少多少年亲身验证完成的。', null);

-- ----------------------------
-- Table structure for srms_xs_lecture
-- ----------------------------
DROP TABLE IF EXISTS `srms_xs_lecture`;
CREATE TABLE `srms_xs_lecture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_lecture
-- ----------------------------
INSERT INTO `srms_xs_lecture` VALUES ('1', '1', '', '', '讲座内容', '', '北方学院西校区', '', '1');
INSERT INTO `srms_xs_lecture` VALUES ('2', '1', 'wnn', '关于某某某的', 'XXX', '2017/01/22 08:00', '北方学院西校区', '', '1');

-- ----------------------------
-- Table structure for srms_xs_meet
-- ----------------------------
DROP TABLE IF EXISTS `srms_xs_meet`;
CREATE TABLE `srms_xs_meet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `meetName` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `meetTime` varchar(22) NOT NULL,
  `address` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_meet
-- ----------------------------
INSERT INTO `srms_xs_meet` VALUES ('1', '1', '', '关于某某的某木', '', '2017/01/22 08:00', '', '', '', '1');
INSERT INTO `srms_xs_meet` VALUES ('2', '1', '我，', '关于某某的某木', '某某皮', '2017/01/22 08:00', '北方学院西校区', '234', '', '1');
INSERT INTO `srms_xs_meet` VALUES ('3', '1', '我，', '关于某某的某木', '某某皮', '2017/01/22 08:00', '北方学院西校区', '234', '', '1');

-- ----------------------------
-- Table structure for srms_year
-- ----------------------------
DROP TABLE IF EXISTS `srms_year`;
CREATE TABLE `srms_year` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_year
-- ----------------------------
INSERT INTO `srms_year` VALUES ('1', '2013');
INSERT INTO `srms_year` VALUES ('2', '2014');
INSERT INTO `srms_year` VALUES ('3', '2015');
INSERT INTO `srms_year` VALUES ('4', '2016');
INSERT INTO `srms_year` VALUES ('5', '2017');
INSERT INTO `srms_year` VALUES ('6', '2018');
INSERT INTO `srms_year` VALUES ('7', '2019');
INSERT INTO `srms_year` VALUES ('8', '2020');
INSERT INTO `srms_year` VALUES ('9', '2021');
INSERT INTO `srms_year` VALUES ('10', '2022');
INSERT INTO `srms_year` VALUES ('11', '2023');
INSERT INTO `srms_year` VALUES ('12', '2024');
INSERT INTO `srms_year` VALUES ('13', '2025');
