/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : srms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-02 10:20:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for srms_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `srms_auth_group_access`;
CREATE TABLE `srms_auth_group_access` (
  `uid` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_auth_group_access
-- ----------------------------
INSERT INTO `srms_auth_group_access` VALUES ('1', '1');
INSERT INTO `srms_auth_group_access` VALUES ('6', '2');
INSERT INTO `srms_auth_group_access` VALUES ('15', '1');

-- ----------------------------
-- Table structure for srms_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `srms_auth_rule`;
CREATE TABLE `srms_auth_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` tinyint(255) NOT NULL DEFAULT '1',
  `status` tinyint(255) NOT NULL DEFAULT '1',
  `condition` tinyint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_auth_rule
-- ----------------------------
INSERT INTO `srms_auth_rule` VALUES ('1', 'Admin/Default/default', '权限管理', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('2', 'Admin/Kytj/index,Admin/Kytj/achievement,Admin/Kytj/propty,Admin/Kytj/equipment', '科研统计', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('3', 'Admin/Xmsb/index,Admin/Xmsb/department,Admin/Xmsb/coller,Admin/Xmsb/purchase', '项目申报', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('4', 'Admin/Kyjf/index,Admin/Kyjf/apply', '科研经费', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('5', 'Admin/Xshd/index,Admin/Xshd/lecture,Admin/Xshd/composition', '学术活动', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('6', 'Admin/Xtgl/user,Admin/Xtgl/usergroup,Admin/Xtgl/news', '系统管理', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('7', 'Admin/Kytj/index_delAll', '论文统计批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('8', 'Admin/Kytj/achievement_delAll', '科研成果批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('9', 'Admin/Kytj/propty_delAll', '知识产权批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('10', 'Admin/Kytj/equipment_delAll', '仪器设备批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('12', 'Admin/Xmsb/index_delAll', '课题申请批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('13', 'Admin/Xmsb/index_edit', '课题申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('15', 'Admin/Xmsb/department_delAll', '科研平台批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('17', 'Admin/Xmsb/department_edit', '科研平台操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('18', 'Admin/Xmsb/coller_delAll', '领用申请批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('19', 'Admin/Xmsb/coller_edit', '领用申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('20', 'Admin/Xmsb/purchase_delAll', '采购申请批量删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('21', 'Admin/Xmsb/purchase_edit', '采购申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('24', 'Admin/Kyjf/index_edit', '经费报销申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('26', 'Admin/Kyjf/apply_edit', '经费申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('27', 'Admin/Xshd/index_edit', '会议申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('28', 'Admin/Xshd/lecture_edit', '讲座申请操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('29', 'Admin/Xshd/composition_edit', '学术著作添加操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('30', 'Admin/Xtgl/news_add', '新闻添加', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('31', 'Admin/Xtgl/do_news_edit', '新闻编辑', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('32', 'Admi/Xshd/agreeread,Admin/Xshd/agreereturn', '学术著作其他操作', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('35', 'Admin/Xtgl/news_delete', '新闻删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('36', 'Admin/Xtgl/user_add', '用户添加', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('37', 'Admin/Xtgl/do_user_edit', '用户编辑', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('39', 'Admin/Xtgl/user_delete', '用户删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('42', 'Admin/Xtgl/usergroup_add', '用户组添加', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('43', 'Admin/Xtgl/usergroup_edit', '用户组编辑', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('44', 'Admin/Xtgl/usergroup_delete', '用户组删除', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('46', 'Admin/Xtgl/password', '密码修改', '1', '1', null);
INSERT INTO `srms_auth_rule` VALUES ('47', 'Admin/Xtgl/authorize', '权限设置', '1', '1', null);

-- ----------------------------
-- Table structure for srms_jf_expense
-- ----------------------------
DROP TABLE IF EXISTS `srms_jf_expense`;
CREATE TABLE `srms_jf_expense` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `where` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `picpath` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_jf_expense
-- ----------------------------
INSERT INTO `srms_jf_expense` VALUES ('1', '1', '1', '王诺楠', '买书', '20', '医学项目', '2017-03-13 16:56:00', '医学', null, '1');
INSERT INTO `srms_jf_expense` VALUES ('3', '1', null, '123', '13', '123', '123', '2017-05-05 07:00:00', '1234', '2017-04-25/58ff03fe8e4f2.jpg', null);

-- ----------------------------
-- Table structure for srms_jf_expense_apply
-- ----------------------------
DROP TABLE IF EXISTS `srms_jf_expense_apply`;
CREATE TABLE `srms_jf_expense_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `where` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `picpath` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_jf_expense_apply
-- ----------------------------
INSERT INTO `srms_jf_expense_apply` VALUES ('1', '1', '1', '王诺楠', '买书', '80', '项目2', '2017-01-22 08:00:00', '医学', null, '1');
INSERT INTO `srms_jf_expense_apply` VALUES ('2', '5', null, 'wangnuonan', 'maishu', '1111', '12', '2012-03-05 00:00:00', '23', null, null);

-- ----------------------------
-- Table structure for srms_log
-- ----------------------------
DROP TABLE IF EXISTS `srms_log`;
CREATE TABLE `srms_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_log
-- ----------------------------
INSERT INTO `srms_log` VALUES ('1', '5', 'admin登录|客户端IP:0.0.0.0|success|#app=Web ', '1', '1493273862');
INSERT INTO `srms_log` VALUES ('2', '5', 'admin登录|客户端IP:0.0.0.0|success|#app=Web ', '1', '1493345730');

-- ----------------------------
-- Table structure for srms_menu
-- ----------------------------
DROP TABLE IF EXISTS `srms_menu`;
CREATE TABLE `srms_menu` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `app` char(20) NOT NULL COMMENT '应用名称app',
  `model` char(20) NOT NULL COMMENT '控制器',
  `action` char(20) NOT NULL COMMENT '操作名称',
  `data` char(50) NOT NULL COMMENT '额外参数',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '菜单类型  1：权限认证+菜单；0：只作为菜单',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态，1显示，0不显示',
  `name` varchar(50) NOT NULL COMMENT '菜单名称',
  `icon` varchar(50) DEFAULT NULL COMMENT '菜单图标',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序ID',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `parentid` (`parentid`),
  KEY `model` (`model`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_menu
-- ----------------------------
INSERT INTO `srms_menu` VALUES ('1', '0', 'Admin', 'Default', 'default', '', '0', '1', '权限管理', '', '', '0');
INSERT INTO `srms_menu` VALUES ('2', '1', 'Admin', 'Kytj', '', '', '1', '1', '科研统计', '', '', '2');
INSERT INTO `srms_menu` VALUES ('3', '1', 'Admin', 'Xmsb', '', '', '1', '1', '项目申报', '', '', '2');
INSERT INTO `srms_menu` VALUES ('4', '1', 'Admin', 'Kyjf', '', '', '1', '1', '科研经费', '', '', '2');
INSERT INTO `srms_menu` VALUES ('5', '1', 'Admin', 'Xshd', '', '', '1', '1', '学术活动', '', '', '2');
INSERT INTO `srms_menu` VALUES ('6', '1', 'Admin', 'Xtgl', '', '', '1', '1', '系统管理', null, '', '0');
INSERT INTO `srms_menu` VALUES ('7', '2', 'Admin', 'Kytj', 'index_delAll', '', '1', '1', '论文统计批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('8', '2', 'Admin', 'Kytj', 'achievement_delAll', '', '1', '1', '科研成果批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('9', '2', 'Admin', 'Kytj', 'propty_delAll', '', '1', '1', '知识产权批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('10', '2', 'Admin', 'Kytj', 'equipment_delAll', '', '1', '1', '仪器设备批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('12', '3', 'Admin', 'Xmsb', 'index_delAll', '', '1', '1', '课题申请批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('13', '3', 'Admin', 'Xmsb', 'index_edit', '', '1', '1', '课题申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('15', '3', 'Admin', 'Xmsb', 'department_delAll', '', '1', '1', '科研平台批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('17', '3', 'Admin', 'Xmsb', 'department_edit', '', '1', '1', '科研平台操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('18', '3', 'Admin', 'Xmsb', 'coller_delAll', '', '1', '1', '领用申请批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('19', '3', 'Admin', 'Xmsb', 'coller_edit', '', '1', '1', '领用申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('20', '3', 'Admin', 'Xmsb', 'purchase_delAll', '', '1', '1', '采购申请批量删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('21', '3', 'Admin', 'Xmsb', 'purchase_edit', '', '1', '1', '采购申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('24', '4', 'Admin', 'Kyjf', 'index_edit', '', '1', '1', '经费报销申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('26', '4', 'Admin', 'Kyjf', 'apply_edit', '', '1', '1', '经费申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('27', '5', 'Admin', 'Xshd', 'index_edit', '', '1', '1', '会议申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('28', '5', 'Admin', 'Xshd', 'lecture_edit', '', '1', '1', '讲座申请操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('29', '5', 'Admin', 'Xshd', 'composition_edit', '', '1', '1', '学术著作添加操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('30', '6', 'Admin', 'Xtgl', 'news_add', '', '1', '1', '新闻添加', null, '', '0');
INSERT INTO `srms_menu` VALUES ('31', '6', 'Admin', 'Xtgl', 'do_news_edit', '', '1', '1', '新闻编辑', null, '', '0');
INSERT INTO `srms_menu` VALUES ('32', '5', 'Admin', 'Xshd', 'agreeread', '', '1', '1', '学术著作其他操作', null, '', '0');
INSERT INTO `srms_menu` VALUES ('35', '6', 'Admin', 'Xtgl', 'news_delete', '', '1', '1', '新闻删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('36', '6', 'Admin', 'Xtgl', 'user_add', '', '1', '1', '用户添加', null, '', '0');
INSERT INTO `srms_menu` VALUES ('37', '6', 'Admin', 'Xtgl', 'do_user_edit', '', '1', '1', '用户编辑', null, '', '0');
INSERT INTO `srms_menu` VALUES ('39', '6', 'Admin', 'Xtgl', 'user_delete', '', '1', '1', '用户删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('42', '6', 'Admin', 'Xtgl', 'usergroup_add', '', '1', '1', '用户组添加', null, '', '0');
INSERT INTO `srms_menu` VALUES ('43', '6', 'Admin', 'Xtgl', 'usergroup_edit', '', '1', '1', '用户组编辑', null, '', '0');
INSERT INTO `srms_menu` VALUES ('44', '6', 'Admin', 'Xtgl', 'usergroup_delete', '', '1', '1', '用户组删除', null, '', '0');
INSERT INTO `srms_menu` VALUES ('46', '6', 'Admin', 'Xtgl', 'password', '', '1', '1', '密码修改', null, '', '0');
INSERT INTO `srms_menu` VALUES ('47', '6', 'Admin', 'Xtgl', 'authorize', '', '1', '1', '权限设置', null, '', '0');

-- ----------------------------
-- Table structure for srms_news
-- ----------------------------
DROP TABLE IF EXISTS `srms_news`;
CREATE TABLE `srms_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `time` int(111) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_news
-- ----------------------------
INSERT INTO `srms_news` VALUES ('1', '2017年中青年骨干医生德中临床医学交流项目启动', '宁夏新闻网讯(记者 杨丽) 记者4月19日从宁夏人力资源和社会保障厅获悉，近期，2017年我区中青年骨干医生德中临床医学交流项目正式启动，经自治区人社厅和卫计委组织，德中科技交流基金会专家来宁进行英语口语面试，确定了12名医生赴德开展临床医学交流项目。\r\n\r\n　　德中临床医学交流项目旨在促进德中两国医学领域交流，推广世界先进的医学技术与治疗理念，提升项目合作单位的技术水平、学术水平和管理水平。从2016年开始，通过该项目，主要遴选中青年骨干医生赴德医疗机构(大学附属医院、大学教学医院、大型专科中心)学习研修86天左右，交流方式包括临床观摩、病例讨论、陪同查房、参加院内学术讲座等。对于申报者，项目要求年龄不超过50周岁,具有副高及以上职称，具备较好的英语基础，能用英语同外方进行有效的专业沟通和交流。同时，项目也优先考虑临床科室正、副主任、国家临床重点专科、自治区重点学科、自治区级创新团队成员。2016年该项目已在我区实施一期，选派了8名医生赴德学习，涉及脊柱骨科、泌尿外科、肝胆外科、消化内科、新生儿科等专业，效果良好。\r\n\r\n　　自治区人社厅为赴德医生资助每人2万元人民币，主要用于医生在德交流期间的研究经费和往返旅费、生活费、通讯费补贴等。', null, '杨丽');
INSERT INTO `srms_news` VALUES ('2', '院士专家与乡村医生共话“精准医学”', '中新网4月18日电 日前，由国家卫生计生委基层司指导、中国医师协会乡村医生分会主办、好医生药业集团承办的2017院士与乡村医生话“精准医学”大会在北京举行。此次活动是国内首次由院士专家针对基层乡村医生开展“精准医学”的学术大会，为乡村医生创造了与院士专家面对面学术交流的机会，共同研究学习最新的医疗模式和方法，“精准医学”在基层医疗中的发展和运用。来自全国各地的1000余名乡村医生代表参加了培训。\r\n\r\n　　会上，院士专家用通俗的语言讲解了当前最前沿的医学发展。给基层医生一些基层常用、适用的急症、妇科、消化科等的诊治方法，讲授中医药适宜诊疗技术，让大家共睹院士风采。就什么是整合医学，如何走向医学发展新时代？中国工程院副院长樊代明院士向乡村医生介绍了全新的理念。他表示，世界医学发展经历了经验医学时代，科学医学时代，整合医学时代。整合医学是从人的整体出发，将医学各领域最先进的知识理论和临床各专科最有效的实践经验分别加以有机整合，并根据社会、环境、心理的现实进行修整、调整，使之成为更加符合、更加适合人体健康和疾病治疗的新的医学体系。', null, '中新网');
INSERT INTO `srms_news` VALUES ('3', 'AI让优质医疗触手可及', ' 现代社会信息大爆炸，也在无形中推动医疗行业转型。云计算、人工智能、大数据、互联网等技术着力打造智慧医疗，或将改变错综复杂的利益现状，使传统医疗行业改头换面。\r\n\r\n■本报记者 贡晓丽\r\n\r\n不久前，百度公司宣布对医疗事业部进行重大改组，对医疗业务进行组织架构调整和优化，集中优势资源，将医疗业务的重点布局在人工智能（AI）领域，此举一出就引发了业内的关注。一方面业界对百度在医疗领域的任何动作都很敏感，另一方面，人工智能技术与医疗事业的契合点在哪里？现阶段的人工智能是否能够对医疗事业带来重大影响？\r\n\r\n4月14日，在中国计算机学会青年计算机科技论坛（CCF YOCSEF）举办的学术报告会上，多位专家就“人工智能颠覆传统医疗？——大数据时代下的智慧医疗”为主题，进行了讨论与解答。\r\n\r\n随着人工智能、大数据、云计算技术的发展以及应用领域的拓宽，人工智能在医疗界的发展应用受到高度关注，打造智慧医疗助力医疗事业发展成为自动化时代一大趋势。事实上，现代社会信息大爆炸，也在无形中推动医疗行业转型。云计算、人工智能、大数据、互联网等技术着力打造智慧医疗，或将改变错综复杂的利益现状，使传统医疗行业改头换面。', null, '贡小丽');
INSERT INTO `srms_news` VALUES ('4', '巨型病毒点燃进化树之争', ' 进化生物学家从来都不知道是什么制造了病毒，对它们的起源争论了十几年。但一组叫作Klosneuviruses的巨型病毒的新发现可能是“缺失的环节”，有助于解决争论——或者引发更多的争论。\r\n\r\n2003年，研究人员报道发现了巨型病毒，并将其命名为Mimiviruses。其携带的基因表明，它们的原型可以生活在宿主细胞外。这项发现使研究人员分成了两大阵营。一组认为，病毒一开始是自给自足的微生物，受困于其他细胞内，最终变成了寄生生物，并抛弃了它们不再需要的基因。另一组将病毒视为微粒，并在数亿年中抢夺宿主有机体的基因材料。\r\n\r\n4月6日发表在《科学》杂志上的一项研究为后一组的想法提供了证据——病毒是由偷来的部分拼接而成的。但它已经引发了争论，并且是不太可能得到解决的纷争。\r\n\r\n继Mimivirus的发现后，一些科学家发展了一种理论，将病毒放到进化树的根源。他们提出，病毒构成了“第四领域”，与细菌、真核生物（细胞包含内部结构如细胞核的微生物）以及叫做古生菌的细菌大小的微生物并存。\r\n\r\nMimiviruses直径400纳米，大约是大肠杆菌细胞宽度的一半，能在显微镜下看到，它们包含DNA编码分子，将RNA信息转变为蛋白质，在这方面它们是独特的。普通病毒让宿主细胞为它们生产蛋白质。\r\n\r\n发现Mimiviruses的团队认为，病毒制造自身蛋白质的能力表明，这些病毒巨人起源于可能不再存在的古代独立生存的细胞类型。“它们重新启动了关于病毒生存本质的讨论及其与‘细胞’世界的关系的辩论。”法国艾克斯—马赛大学进化生物学家、Mimivirus最初论文合著者Jean-Michel Claverie说。', null, '晋楠');
INSERT INTO `srms_news` VALUES ('5', '北京市新确诊两例H7N9病例 一例死亡', ' 一、　 疫情概况\r\n \r\n2017年第14周（2017年4月3日至9日），全市共报告法定传染病17种1398例，死亡2例。报告病例数居前5位的病种依次为: 其它感染性腹泻病、流行性感冒、肺结核、痢疾和病毒性肝炎，共占法定传染病报告发病数的82.26%。\r\n \r\n2017年4月6日,我市新确诊两例H7N9病例，患者有共同暴露于患病禽类病史，其中一例于8日死亡，相关部门已采取有效防控措施。\r\n \r\n二、　 重点疫情\r\n \r\n（一）其它感染性腹泻病\r\n \r\n本周报告608例，较上周上升21.84%，见图1。', null, '卫生委员会');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_tj_achievement
-- ----------------------------
INSERT INTO `srms_tj_achievement` VALUES ('1', '1', '测试1', '测试1', '测试1', '测试1', '2013', '一等奖', '', '0', '0', '本院人员', null, '测试1');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='知识产权统计表';

-- ----------------------------
-- Records of srms_tj_propty
-- ----------------------------
INSERT INTO `srms_tj_propty` VALUES ('2', '1', '2016', '信息科学与工程学院', '某人1', '专利修改测试成功', '专利修改测试成功', '专利修改测试成功', '发明专利', '是', '专利修改测试成功');
INSERT INTO `srms_tj_propty` VALUES ('3', '1', '2016', '信息科学与工程学院', '某某人', '2132131231232131321', '123123132321131231', '新能源', '获软件著作权登记', '是', '备注一下');

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
  `number` int(30) NOT NULL COMMENT '依托项目编号',
  `remarks` text NOT NULL,
  `fujian` char(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ID5` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COMMENT='论文统计';

-- ----------------------------
-- Records of srms_tj_theses
-- ----------------------------
INSERT INTO `srms_tj_theses` VALUES ('5', '1', '2015', '论文修改测试ok', '论文修改测试ok', '论文修改测试ok', '论文修改测试ok', '已收录', '普通期刊', '论文修改测试ok', '0', '论文修改测试ok', '12345');
INSERT INTO `srms_tj_theses` VALUES ('10', '1', '2010', '12论文', '12论文', '12论文', '12论文', '已收录', 'SCI收录', '12论文', '12', '12论文', '');
INSERT INTO `srms_tj_theses` VALUES ('11', '1', '2011', '89论文', '89论文', '89论文', '89论文', '已收录', 'SCI收录', '89论文', '89', '89论文', '');
INSERT INTO `srms_tj_theses` VALUES ('15', '1', '2016', '16论文', '16论文', '16论文', '16论文', '已收录', 'SCI收录', '16论文', '16', '16论文', '');
INSERT INTO `srms_tj_theses` VALUES ('16', '1', '2018', '18论文', '18论文', '18论文', '18论文', '已收录', 'SCI收录', '18论文', '18', '18论文', '');
INSERT INTO `srms_tj_theses` VALUES ('17', '1', '2019', '19论文', '19论文', '19论文', '19论文', '已收录', 'SCI收录', '19论文', '19', '19论文', '');
INSERT INTO `srms_tj_theses` VALUES ('20', '1', '2021', '21论文', '21论文', '21论文', '21论文', '已收录', 'SCI收录', '21论文', '21', '21论文', '');
INSERT INTO `srms_tj_theses` VALUES ('21', '1', '2022', '22论文', '22论文', '22论文', '22论文', '已收录', 'SCI收录', '22论文', '22', '22论文', '');
INSERT INTO `srms_tj_theses` VALUES ('22', '1', '2023', '23论文', '论文', '论文', '论文', '已收录', 'SCI收录', '论文', '0', '论文', '');
INSERT INTO `srms_tj_theses` VALUES ('23', '1', '2023', '24论文修改为23', '论文23', '论文23', '论文23', '已发表', '测试其他', '论文23', '12221223', '论文23', '');
INSERT INTO `srms_tj_theses` VALUES ('24', '1', '2025', '25论文', '论文', '论文', '论文', '已收录', 'SCI收录', '论文', '1212', '论文', '');
INSERT INTO `srms_tj_theses` VALUES ('26', '1', '2027', '赛题', '赛题', '赛题', '赛题', '已收录', 'SCI收录', '赛题', '0', '赛题', '');
INSERT INTO `srms_tj_theses` VALUES ('27', '1', '2028', '一点钟方向', '一点钟方向', '一点钟方向', '一点钟方向', '已收录', 'SCI收录', '一点钟方向', '0', '一点钟方向', '');
INSERT INTO `srms_tj_theses` VALUES ('28', '1', '2027', '三五六九', '三五六九', '三五六九', '三五六九', '已收录', 'SCI收录', '三五六九', '0', '三五六九', '');
INSERT INTO `srms_tj_theses` VALUES ('29', '1', '2024', '黛绿山峰', '黛绿山峰', '黛绿山峰', '黛绿山峰', '已收录', 'SCI收录', '黛绿山峰', '0', '黛绿山峰', '');
INSERT INTO `srms_tj_theses` VALUES ('30', '1', '2030', '俯瞰', '俯瞰', '俯瞰', '俯瞰', '已收录', 'SCI收录', '俯瞰', '0', '俯瞰', '');
INSERT INTO `srms_tj_theses` VALUES ('31', '1', '2031', '瞬间石化', '瞬间石化', '瞬间石化', '瞬间石化', '已收录', 'SCI收录', '瞬间石化', '212121212', '瞬间石化', '');
INSERT INTO `srms_tj_theses` VALUES ('32', '1', '2031', '31论文', '31论文', '31论文', '31论文', '已收录', 'SCI收录', '31论文', '32323232', '31论文', '');
INSERT INTO `srms_tj_theses` VALUES ('33', '1', '2030', '30年论文', '30年论文', '30年论文', '30年论文', '已收录', 'SCI收录', '30年论文', '30', '30年论文', '');
INSERT INTO `srms_tj_theses` VALUES ('34', '2', '2016', '用户2的统计', '用户2的统计', '用户2的统计', '用户2的统计', '已收录', 'SCI收录', '用户2的统计', '0', '用户2的统计', '');
INSERT INTO `srms_tj_theses` VALUES ('35', '1', '2015', '测试项目', '测试项目', '测试项目', '测试项目', '已收录', 'SCI收录', '测试项目', '0', '测试项目', '');
INSERT INTO `srms_tj_theses` VALUES ('36', '1', '2016', '基于php的科研管理系统', '论文', '3', '未知', '已收录', '普通期刊', '论文依托项目', '20191919', '备注一下', '');
INSERT INTO `srms_tj_theses` VALUES ('37', '1', '2016', '论文5', '论文5', '1', '论文5', '已收录', 'SCI收录', '论文5', '4', '论文5', '');
INSERT INTO `srms_tj_theses` VALUES ('38', '1', '2015', '论文', '论文', '1', '某人', '已收录', 'SCI收录', '论文', '123213', '论文', '');
INSERT INTO `srms_tj_theses` VALUES ('39', '1', '2017', '中国梦', '校报', '2016', '张三', '已发表', 'SCI收录', '校级评选', '0', '', '');
INSERT INTO `srms_tj_theses` VALUES ('43', '1', '2016', '111', '111', '111', '111', '已收录', 'SCI收录', '111', '111', '1111', '');
INSERT INTO `srms_tj_theses` VALUES ('44', '1', '2016', '111', '111', '111', '111', '已收录', 'SCI收录', '111', '111', '1111', '');
INSERT INTO `srms_tj_theses` VALUES ('45', '1', '2016', '111', '111', '111', '111', '已收录', 'SCI收录', '111', '111', '1111', '');
INSERT INTO `srms_tj_theses` VALUES ('46', '1', '2013', '课题122', '', '', '', '', '', '', '0', '', '');
INSERT INTO `srms_tj_theses` VALUES ('47', '1', '2015', '', '', '', '', '已收录', 'SCI收录', '', '0', '', '');
INSERT INTO `srms_tj_theses` VALUES ('48', '1', '2015', '', '', '', '', '已收录', 'SCI收录', '', '0', '', '');
INSERT INTO `srms_tj_theses` VALUES ('49', '1', '2013', '', '', '', '', '已收录', 'SCI收录', '', '0', '', '');
INSERT INTO `srms_tj_theses` VALUES ('50', '1', '2013', '1234', '343', '2343', '4', '已收录', 'SCI收录', '34', '243', '', '');
INSERT INTO `srms_tj_theses` VALUES ('51', '1', '2013', '123', '1234', '1234234', '234', '已收录', 'SCI收录', '34', '1234', '', '2017-04-25/58ff030852b8b.doc');

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
  `usergroup_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_user
-- ----------------------------
INSERT INTO `srms_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1492594281', '1493345730', '1');
INSERT INTO `srms_user` VALUES ('5', 'ww', 'e10adc3949ba59abbe56e057f20f883e', '1492571349', '1493177144', '3');
INSERT INTO `srms_user` VALUES ('6', 'aaa', 'e10adc3949ba59abbe56e057f20f883e', '0', '1493198196', '2');

-- ----------------------------
-- Table structure for srms_usergroup
-- ----------------------------
DROP TABLE IF EXISTS `srms_usergroup`;
CREATE TABLE `srms_usergroup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `rules` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_usergroup
-- ----------------------------
INSERT INTO `srms_usergroup` VALUES ('1', 'admin', '超级管理员', '2', '1,2,7,8,9,10,3,12,13,15,17,4,24', '1');
INSERT INTO `srms_usergroup` VALUES ('2', 'guanli', '普通管理员', '1', '1,2,7,8,9,10,3,12,21', '1');
INSERT INTO `srms_usergroup` VALUES ('3', 'test', '普通用户', '0', '1,2,7,8', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_coller
-- ----------------------------
INSERT INTO `srms_xm_coller` VALUES ('1', '1', '钢笔', '2017/03/17 10:50', '信息科', '10', '200', '										王诺楠									', '11111111111', '写字', '0');
INSERT INTO `srms_xm_coller` VALUES ('2', '2', '铅笔', '2017/01/22 08:00', '信息科', '12', '222', '王诺楠', '11111111111', '写字', '2');

-- ----------------------------
-- Table structure for srms_xm_department
-- ----------------------------
DROP TABLE IF EXISTS `srms_xm_department`;
CREATE TABLE `srms_xm_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `keshi` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `time` char(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_department
-- ----------------------------
INSERT INTO `srms_xm_department` VALUES ('1', '1', '										科研平台3							', '王诺楠', '信息科', '2012-03-05 00:00:00', '项目2 ', '										两天									', '11111111111', '1');
INSERT INTO `srms_xm_department` VALUES ('2', '1', '科研平台2', 'wnn', '信息科', '2017-03-17 13:37:58', '项目23', '三天', '11111111111', '0');

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
INSERT INTO `srms_xm_purchase` VALUES ('1', '1', '书', '20 * 39', '200', '80', '4000', '2017-03-22 10:23:00', '										王诺楠									', '信息科', '看书', '1');

-- ----------------------------
-- Table structure for srms_xm_subject
-- ----------------------------
DROP TABLE IF EXISTS `srms_xm_subject`;
CREATE TABLE `srms_xm_subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `date` int(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `objective` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `programme` varchar(255) NOT NULL,
  `guarantee` varchar(255) NOT NULL,
  `progress` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `funds` int(255) NOT NULL,
  `expert_opinion` varchar(255) DEFAULT NULL,
  `unit_opinion` varchar(255) DEFAULT NULL,
  `fpc_opnion` varchar(255) DEFAULT NULL,
  `commitment_book` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xm_subject
-- ----------------------------
INSERT INTO `srms_xm_subject` VALUES ('1', '1', '课题003345', '2013', 'wnn', '哈哈哈', '研究内容', '研究方案', '', '研究进度', '预期目标', '19960', '', '', null, '', '0');
INSERT INTO `srms_xm_subject` VALUES ('3', '2', '课题001', '2015', '王诺楠', '目的及意义', '研究内容', '研究方案', '', '研究进度', '预期目标', '1000', '', '', null, '', '0');
INSERT INTO `srms_xm_subject` VALUES ('4', '1', '', '2013', '上午去额', '测试1', '测试1', '测试1', '', '测试1', '测试1', '0', '测试1', '测试1', null, '2017-04-26/5900109da7992.doc', '1');

-- ----------------------------
-- Table structure for srms_xs_composition
-- ----------------------------
DROP TABLE IF EXISTS `srms_xs_composition`;
CREATE TABLE `srms_xs_composition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `compositionName` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  `status` tinyint(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_composition
-- ----------------------------
INSERT INTO `srms_xs_composition` VALUES ('2', '1', '本草纲目', '李时珍', '药材', '2014-09-11 10:00:00', '医学', '本草纲目是李时珍当年历时 多少多少年亲身验证完成的。', '1');
INSERT INTO `srms_xs_composition` VALUES ('3', '1', '五禽戏', '扁鹊', '拳', '2017-05-26 07:10:00', '医学', '', '1');
INSERT INTO `srms_xs_composition` VALUES ('4', '1', '黄帝内经', '皇帝', '医理', null, '医学', null, '2');
INSERT INTO `srms_xs_composition` VALUES ('5', '1', '神农本草', '神农', null, null, null, null, '3');
INSERT INTO `srms_xs_composition` VALUES ('6', '1', '伤寒杂病论', '张仲景', '伤寒', '2017-04-27 07:10:00', '医理', '', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_lecture
-- ----------------------------
INSERT INTO `srms_xs_lecture` VALUES ('1', '1', 'wnn', '关于啥啥啥的啥啥啥', '讲座内容', '', '北方学院西校区', '', '1');
INSERT INTO `srms_xs_lecture` VALUES ('2', '1', 'wnn', '关于某某某的', 'XXX', '2017/01/22 08:00', '北方学院西校区', '', '2');
INSERT INTO `srms_xs_lecture` VALUES ('3', '1', '23', '123', '23', '2017/05/05 07:00', '234', '2017-04-25/58ff053e6a644.doc', '0');
INSERT INTO `srms_xs_lecture` VALUES ('4', '1', '234', '123', '34', '2017/05/05 07:00', '24', '2017-04-25/58ff0ac5bb29f.doc', '0');

-- ----------------------------
-- Table structure for srms_xs_lecture_attend
-- ----------------------------
DROP TABLE IF EXISTS `srms_xs_lecture_attend`;
CREATE TABLE `srms_xs_lecture_attend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `lecture_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_lecture_attend
-- ----------------------------
INSERT INTO `srms_xs_lecture_attend` VALUES ('1', '1', '1', '1');
INSERT INTO `srms_xs_lecture_attend` VALUES ('11', '2', '1', '1');
INSERT INTO `srms_xs_lecture_attend` VALUES ('9', '4', '1', '1');

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
  `status2` tinyint(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_meet
-- ----------------------------
INSERT INTO `srms_xs_meet` VALUES ('1', '1', '', '关于某某的某木', '', '2017/01/22 08:00', '', '', '', '1', '0');
INSERT INTO `srms_xs_meet` VALUES ('2', '1', '我，', '关于某某的某木', '某某皮', '2017/01/22 08:00', '北方学院西校区', '234', '', '1', '0');
INSERT INTO `srms_xs_meet` VALUES ('3', '1', '我，', '关于某某的某木', '某某皮', '2017/01/22 08:00', '北方学院西校区', '234', '', '2', '0');
INSERT INTO `srms_xs_meet` VALUES ('4', '1', '你', '湿地公园', '儿歌', '', '奋不顾身', '', '', '0', '0');
INSERT INTO `srms_xs_meet` VALUES ('5', '1', '134', '2134', '134', '2017/05/05 07:00', '23', '213', '2017-04-25/58ff05a1a7d1a.doc', '0', '0');

-- ----------------------------
-- Table structure for srms_xs_meet_attend
-- ----------------------------
DROP TABLE IF EXISTS `srms_xs_meet_attend`;
CREATE TABLE `srms_xs_meet_attend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `meet_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of srms_xs_meet_attend
-- ----------------------------
INSERT INTO `srms_xs_meet_attend` VALUES ('1', '1', '1', '1');
INSERT INTO `srms_xs_meet_attend` VALUES ('2', '2', '1', '1');
INSERT INTO `srms_xs_meet_attend` VALUES ('3', '4', '1', '1');
INSERT INTO `srms_xs_meet_attend` VALUES ('4', '1', '2', '1');
INSERT INTO `srms_xs_meet_attend` VALUES ('5', '1', '4', '1');
INSERT INTO `srms_xs_meet_attend` VALUES ('10', '4', '2', '1');

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
