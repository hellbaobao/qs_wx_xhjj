/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : qs_wx_xhjj_db

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-08-13 15:54:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `qs_wx_xhjj_appt_learn_info`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_appt_learn_info`;
CREATE TABLE `qs_wx_xhjj_appt_learn_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '发布人id',
  `title` varchar(200) NOT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `is_publish` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否发布 0：未发布，1：发布',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `edit_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `read_ids` text COMMENT '已读人id',
  `read_num` int(11) NOT NULL DEFAULT '0' COMMENT '阅读人数',
  `start_time` datetime DEFAULT NULL COMMENT '培训时间',
  `teacher` varchar(50) DEFAULT NULL COMMENT '培训讲师',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_appt_learn_info
-- ----------------------------
INSERT INTO `qs_wx_xhjj_appt_learn_info` VALUES ('29', '1', '123123123', '<p>省的发送的发送到分</p>', '1', '2018-08-10 16:00:54', '2018-08-13 14:35:29', ',', '4', '2018-08-10 00:00:00', '张教授');
INSERT INTO `qs_wx_xhjj_appt_learn_info` VALUES ('30', '1', '今天的预约哈哈哈', '<p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong>【关键词】 合理充裕</strong></p><p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong>不是“大幅放水”，也不是“全面宽松”，货币政策边际宽松不代表政策转向</strong></p><p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">“近期几次重要会议明确了宏观政策进行前瞻性微调和精准施策的调节方向。对此，市场上有人解读为‘大幅放水’和‘全面宽松’是很不恰当的。”交通银行首席经济学家连平说。</p><p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">“大水漫灌”式的流动性投放，无论是对金融市场还是实体经济自身，都不是长期健康发展的有利条件。业内专家普遍认为，稳健的货币政策要松紧适度，并不代表政策就此根本转向，更不意味着全面宽松，只是货币政策的边际宽松。</p><p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">招商证券宏观分析师张一平认为，稳健的货币政策松紧适度，“松”就是流动性要合理充裕，避免因处置风险而造成流动性危机；“紧”主要指社会融资规模增速要与名义GDP增速匹配，不能大幅超过名义GDP增速。</p><p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">人民银行货币政策委员会2018年第二季度例会提出，要保持流动性合理充裕。对比一季度中国货币政策执行报告，可以发现，关于流动性表述的变化从“保持流动性合理稳定”变为“保持流动性合理充裕”。</p><p style=\"margin: 25px 0px; padding: 0px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: 微软雅黑; text-indent: 2em; color: rgb(34, 34, 34); letter-spacing: normal; orphans: 2; text-align: left; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">“从‘合理稳定’调整为‘合理充裕’，意味着人民银行正通过货币政策边际松紧的预调微调，保持总体基调不变。”工银国际首席经济学家程实认为，落到实践层面，从数量信号看，货币供给的规模增速，包括M2增速和社会融资规模增速，要趋近于GDP增速与CPI增速之和。从价格信号看，政策利率要趋近于名义自然利率，即“自然利率+通胀率”。</p>', '1', '2018-08-13 09:38:30', '2018-08-13 14:32:33', ',,', '44', '2018-08-13 05:00:00', '李较少');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_appt_learn_order`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_appt_learn_order`;
CREATE TABLE `qs_wx_xhjj_appt_learn_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `appt_num` int(11) NOT NULL DEFAULT '0' COMMENT '预约人数',
  `linkman_name` varchar(100) DEFAULT NULL COMMENT '预约人员',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '备份时间',
  `linkman_tel` varchar(100) DEFAULT NULL COMMENT '联系方式',
  `learn_id` int(11) NOT NULL DEFAULT '0' COMMENT '关联learn_info id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_appt_learn_order
-- ----------------------------
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('20', '10', 'zhangsdklf', '2018-08-10 10:30:33', '2342342', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('21', '23', '234234', '2018-08-10 10:31:00', '45343234', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('22', '23', '232', '2018-08-10 10:31:14', '2323', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('23', '12', '张晓炜', '2018-08-10 14:27:24', '13521447599', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('24', '12', '张晓炜', '2018-08-10 14:27:33', '13521447599', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('25', '12', '小王', '2018-08-10 14:31:36', '18303012080', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('26', '12', '再试试', '2018-08-10 14:38:08', '13521445678', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('27', '12', '12', '2018-08-10 14:39:16', '13521447599', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('28', '12', '123', '2018-08-13 14:31:46', '13521447899', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('29', '23', '张晓炜', '2018-08-13 14:32:47', '13521447599', '30');
INSERT INTO `qs_wx_xhjj_appt_learn_order` VALUES ('30', '50', '一阵一阵', '2018-08-13 14:35:41', '13521445632', '29');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_appt_visit_close`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_appt_visit_close`;
CREATE TABLE `qs_wx_xhjj_appt_visit_close` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '备份时间',
  `close_time` date NOT NULL COMMENT '预约时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_appt_visit_close
-- ----------------------------
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('20', '2018-08-10 09:44:59', '0000-00-00');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('21', '2018-08-10 09:45:03', '0000-00-00');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('35', '2018-08-10 09:57:47', '0000-00-00');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('36', '2018-08-10 09:58:31', '2018-08-03');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('37', '2018-08-10 10:00:24', '2018-08-05');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('38', '2018-08-10 10:00:48', '2018-08-12');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('39', '2018-08-10 10:00:51', '2018-08-12');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('40', '2018-08-10 10:01:07', '2018-08-18');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('41', '2018-08-10 13:17:37', '2018-08-13');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('42', '2018-08-10 13:18:08', '2018-08-14');
INSERT INTO `qs_wx_xhjj_appt_visit_close` VALUES ('43', '2018-08-10 14:28:42', '2018-01-01');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_appt_visit_info`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_appt_visit_info`;
CREATE TABLE `qs_wx_xhjj_appt_visit_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `appt_num` int(11) NOT NULL DEFAULT '0' COMMENT '预约人数',
  `linkman_name` varchar(100) DEFAULT NULL COMMENT '预约人员',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '备份时间',
  `appt_time` date NOT NULL COMMENT '预约时间',
  `linkman_tel` varchar(100) DEFAULT NULL COMMENT '联系方式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_appt_visit_info
-- ----------------------------
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('20', '10', 'zhangsdklf', '2018-08-10 10:30:33', '2018-08-10', '2342342');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('21', '23', '234234', '2018-08-10 10:31:00', '2018-08-10', '45343234');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('22', '23', '232', '2018-08-10 10:31:14', '2018-08-11', '2323');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('23', '12', '张晓炜', '2018-08-10 14:27:24', '2018-01-01', '13521447599');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('24', '12', '张晓炜', '2018-08-10 14:27:33', '2018-01-01', '13521447599');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('25', '12', '小王', '2018-08-10 14:31:36', '2020-01-01', '18303012080');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('26', '12', '再试试', '2018-08-10 14:38:08', '2018-01-02', '13521445678');
INSERT INTO `qs_wx_xhjj_appt_visit_info` VALUES ('27', '12', '12', '2018-08-10 14:39:16', '2020-01-01', '13521447599');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_notice_cat`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_notice_cat`;
CREATE TABLE `qs_wx_xhjj_notice_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `sys_name` varchar(50) DEFAULT NULL COMMENT '系统名称',
  `cat_name` varchar(50) NOT NULL COMMENT '分类名称',
  `parent_id_path` varchar(50) NOT NULL DEFAULT '' COMMENT '所属上级目录',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级ID',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `is_enable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否禁用 0：禁用，1：启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_notice_cat
-- ----------------------------
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('4', 'aboutus', '关于我们', '', '0', '2018-08-07 11:12:33', '1');
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('5', 'kpcenter', '科普中心', '', '0', '2018-08-07 11:12:53', '1');
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('7', 'yjncp', '有机农产品', '4.', '4', '2018-08-07 11:26:09', '1');
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('8', 'stny', '生态农业', '5.', '5', '2018-08-07 11:26:38', '1');
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('9', 'yjzz', '有机种植', '5.', '5', '2018-08-07 11:26:51', '1');
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('10', 'yjfl', '有机肥料', '5.', '5', '2018-08-07 11:27:10', '1');
INSERT INTO `qs_wx_xhjj_notice_cat` VALUES ('11', 'yjsc', '有机蔬菜', '5.', '5', '2018-08-07 11:33:06', '1');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_notice_info`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_notice_info`;
CREATE TABLE `qs_wx_xhjj_notice_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cat_id` int(11) NOT NULL DEFAULT '0' COMMENT '所属分类id',
  `address_id` int(11) NOT NULL DEFAULT '0' COMMENT '社区id',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '发布人id',
  `title` varchar(200) NOT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `is_publish` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否发布 0：未发布，1：发布',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `edit_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `read_ids` text COMMENT '已读人id',
  `read_num` int(11) NOT NULL DEFAULT '0' COMMENT '阅读人数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_notice_info
-- ----------------------------
INSERT INTO `qs_wx_xhjj_notice_info` VALUES ('20', '7', '0', '1', '这是一条最新的动态哈哈哈', '<p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">新华社北京8月6日电 中共中央总书记、国家主席、中央军委主席习近平近日对王继才同志先进事迹作出重要指示强调，王继才同志守岛卫国32年，用无怨无悔的坚守和付出，在平凡的岗位上书写了不平凡的人生华章。我们要大力倡导这种爱国奉献精神，使之成为新时代奋斗者的价值追求。</p><p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">习近平指出，对王继才同志的家人，有关方面要关心慰问。对像王继才同志那样长期在艰苦岗位甘于奉献的同志，各级组织要积极主动帮助他们解决实际困难，在思想、工作和生活上给予更多关心爱护。</p><p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">王继才生前是江苏省灌云县开山岛民兵哨所所长。开山岛位于我国黄海前哨，面积只有两个足球场大，战略位置十分重要。1985年部队撤编后，设立民兵哨所，但因条件艰苦，先后上岛的10多位民兵都不愿长期值守。1986年，26岁的王继才接受了守岛任务，从此与妻子以海岛为家，与孤独相伴，在没水没电、植物都难以存活的孤岛上默默坚守，把青春年华全部献给了祖国的海防事业。2014年，王继才夫妇被评为全国“时代楷模”。今年7月27日，王继才在执勤时突发疾病，经抢救无效去世，年仅58岁</p>', '1', '2018-08-07 11:42:43', '2018-08-13 15:25:18', ',', '40');
INSERT INTO `qs_wx_xhjj_notice_info` VALUES ('21', '7', '0', '1', '西安市纪委监委介入调查规划局191套团购房问题', '<p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6日市纪委监委通过官方微博发布消息称，媒体报道《西安市规划局191套团购房——大雁塔附近均价4495元/平方米》后，受到广泛关注。西安市纪委监委已成立专项调查组介入调查，将根据调查情况，及时发布有关信息。</p><p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: center;\"><img src=\"/ueditor/php/upload/image/20180807/1533621983888563.jpeg\"/></p><p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; text-align: center;\"><img src=\"/ueditor/php/upload/image/20180807/1533621983945279.jpeg\"/></p><p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">8月6号上午，“西安规划局被曝团购191套&#39;半价房&#39;大雁塔附近均价4495元/平米”引起社会强烈关注。记者调查发现：开发商2017年被工商列入经营异常名录，2018年5月因擅自预售商品房被罚款。</p><p style=\"border: 0px; margin: 0.63em 0px 1.8em; padding: 0px; font-size: 16px; counter-reset: list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">因环绕名胜古迹大雁塔、坐拥风景怡人的大唐芙蓉园，曲江房价一直在西安高居不下。在距离大唐芙蓉园不足1000米的长庆坊二期，西安市规划局191套团购房，价格还不到周边商品房售价的一半。团购房价低于曲江2016年保障房价格，开发商是否存在加盖和超面积盖房？开发商是否办理了预售许可？一系列问题引起市民的讨论和质疑。</p>', '1', '2018-08-07 14:06:51', '2018-08-13 15:24:57', ',', '93');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_action_log`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_action_log`;
CREATE TABLE `qs_wx_xhjj_sys_action_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_name` varchar(20) NOT NULL DEFAULT '0' COMMENT '用户',
  `c_name` varchar(50) NOT NULL COMMENT '控制器名称',
  `a_name` varchar(50) NOT NULL COMMENT '方法名称',
  `action_info` varchar(100) NOT NULL COMMENT '操作描述',
  `ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1876 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_action_log
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1283', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.12', '2017-04-21 16:50:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1284', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '192.168.1.10', '2017-04-21 17:03:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1285', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '192.168.1.10', '2017-04-21 17:04:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1286', '管理员', 'SellerItemsCat', 'saveSellerItemsCat', '添加/编辑商家服务项目分类', '192.168.1.10', '2017-04-21 17:04:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1287', '管理员', 'SellerItemsCat', 'saveSellerItemsCat', '添加/编辑商家服务项目分类', '192.168.1.10', '2017-04-21 17:05:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1288', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:08:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1289', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:10:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1290', '管理员', 'SellerItemsInfo', 'checkArrayItemsInfo', '审核商家服务项目信息', '192.168.1.10', '2017-04-21 17:10:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1291', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '192.168.1.10', '2017-04-21 17:15:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1292', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '192.168.1.10', '2017-04-21 17:15:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1293', '管理员', 'SellerItemsCat', 'saveSellerItemsCat', '添加/编辑商家服务项目分类', '192.168.1.10', '2017-04-21 17:16:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1294', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:19:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1295', '管理员', 'SellerItemsInfo', 'checkArrayItemsInfo', '审核商家服务项目信息', '192.168.1.10', '2017-04-21 17:19:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1296', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '192.168.1.12', '2017-04-21 17:19:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1297', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:20:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1298', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '192.168.1.12', '2017-04-21 17:20:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1299', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '192.168.1.12', '2017-04-21 17:21:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1300', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '192.168.1.12', '2017-04-21 17:21:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1301', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:22:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1302', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '192.168.1.12', '2017-04-21 17:22:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1303', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '192.168.1.12', '2017-04-21 17:22:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1304', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '192.168.1.12', '2017-04-21 17:24:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1305', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '192.168.1.12', '2017-04-21 17:24:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1306', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.12', '2017-04-21 17:30:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1307', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '192.168.1.12', '2017-04-21 17:32:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1308', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '192.168.1.12', '2017-04-21 17:33:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1309', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '192.168.1.12', '2017-04-21 17:33:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1310', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '192.168.1.12', '2017-04-21 17:34:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1311', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '192.168.1.12', '2017-04-21 17:34:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1312', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '192.168.1.10', '2017-04-21 17:34:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1313', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '192.168.1.10', '2017-04-21 17:34:33');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1314', '管理员', 'SellerItemsInfo', 'checkArrayItemsInfo', '审核商家服务项目信息', '192.168.1.10', '2017-04-21 17:34:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1315', '管理员', 'HelpInfo', 'saveHelpInfo', '添加/编辑联系人信息', '192.168.1.12', '2017-04-21 17:35:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1316', '管理员', 'SellerItemsCat', 'saveSellerItemsCat', '添加/编辑商家服务项目分类', '192.168.1.10', '2017-04-21 17:35:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1317', '管理员', 'HelpInfo', 'saveHelpInfo', '添加/编辑联系人信息', '192.168.1.12', '2017-04-21 17:35:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1318', '管理员', 'HelpInfo', 'saveHelpInfo', '添加/编辑联系人信息', '192.168.1.12', '2017-04-21 17:36:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1319', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:36:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1320', '管理员', 'SellerItemsInfo', 'checkArrayItemsInfo', '审核商家服务项目信息', '192.168.1.10', '2017-04-21 17:37:07');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1321', '管理员', 'SellerItemsInfo', 'saveSellerItems', '添加/编辑商家服务项目信息', '192.168.1.10', '2017-04-21 17:38:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1322', '管理员', 'SellerItemsInfo', 'checkArrayItemsInfo', '审核商家服务项目信息', '192.168.1.10', '2017-04-21 17:38:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1323', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '192.168.1.12', '2017-04-21 17:39:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1324', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '192.168.1.12', '2017-04-21 17:39:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1325', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '192.168.1.12', '2017-04-21 17:41:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1326', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '192.168.1.12', '2017-04-21 17:41:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1327', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-04-24 10:09:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1328', '管理员', 'login', 'logout', '退出系统', '222.128.67.79', '2017-04-24 15:19:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1329', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-04-27 10:56:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1330', '管理员', 'login', 'loginSys', '登录系统', '123.115.0.239', '2017-04-27 14:57:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1331', '管理员', 'login', 'logout', '退出系统', '123.115.0.239', '2017-04-27 14:59:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1332', '管理员', 'login', 'loginSys', '登录系统', '123.115.0.239', '2017-04-27 15:16:23');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1333', '管理员', 'SellerOrderInfo', 'dealSellerOrderInfo', '处理商家订单', '123.115.0.239', '2017-04-27 15:56:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1334', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-04-28 16:03:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1335', '管理员', 'DeviceInfo', 'saveDeviceInfoCat', '添加/编辑体检设备', '222.128.67.79', '2017-04-28 16:04:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1336', '管理员', 'login', 'loginSys', '登录系统', '61.49.252.140', '2017-05-08 14:11:34');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1337', '管理员', 'login', 'logout', '退出系统', '61.49.252.140', '2017-05-08 14:13:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1338', '管理员', 'login', 'loginSys', '登录系统', '61.49.252.140', '2017-05-08 14:14:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1339', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-09 10:39:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1340', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-09 10:39:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1341', '管理员', 'login', 'loginSys', '登录系统', '123.113.246.130', '2017-05-09 13:39:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1342', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-09 14:25:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1343', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-15 11:32:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1344', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-15 11:33:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1345', '管理员', 'login', 'loginSys', '登录系统', '125.34.161.23', '2017-05-23 14:00:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1346', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-24 15:02:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1347', '管理员', 'login', 'logout', '退出系统', '222.128.67.79', '2017-05-24 16:24:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1348', '社区管理员69', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-24 16:25:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1349', '管理员', 'login', 'loginSys', '登录系统', '221.216.15.75', '2017-05-24 17:20:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1350', '管理员', 'login', 'loginSys', '登录系统', '221.216.15.75', '2017-05-24 17:33:48');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1351', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-26 10:44:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1352', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '222.128.67.79', '2017-05-26 11:01:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1353', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '222.128.67.79', '2017-05-26 11:01:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1354', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '222.128.67.79', '2017-05-26 11:05:34');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1355', '管理员', 'login', 'logout', '退出系统', '222.128.67.79', '2017-05-26 11:05:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1356', '物业测试001', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-26 11:05:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1357', '物业测试001', 'login', 'logout', '退出系统', '222.128.67.79', '2017-05-26 11:07:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1358', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-05-26 11:07:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1359', '管理员', 'HealthnCat', 'saveHealthCat', '添加/编辑健康知识分类', '222.128.67.79', '2017-05-26 11:30:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1360', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:32:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1361', '管理员', 'HealthnInfo', 'publHealthInfo', '发布健康知识信息', '222.128.67.79', '2017-05-26 11:32:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1362', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:35:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1363', '管理员', 'HealthnInfo', 'publHealthInfo', '发布健康知识信息', '222.128.67.79', '2017-05-26 11:35:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1364', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:35:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1365', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:36:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1366', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:38:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1367', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:39:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1368', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:39:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1369', '管理员', 'HealthnInfo', 'publHealthInfo', '发布健康知识信息', '222.128.67.79', '2017-05-26 11:39:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1370', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:40:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1371', '管理员', 'HealthnInfo', 'publHealthInfo', '发布健康知识信息', '222.128.67.79', '2017-05-26 11:41:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1372', '管理员', 'HealthnInfo', 'saveHealthInfo', '添加/编辑健康知识信息', '222.128.67.79', '2017-05-26 11:42:33');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1373', '管理员', 'HealthnInfo', 'publHealthInfo', '发布健康知识信息', '222.128.67.79', '2017-05-26 11:42:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1374', '管理员', 'HealthnCat', 'saveHealthCat', '添加/编辑健康知识分类', '222.128.67.79', '2017-05-26 11:43:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1375', '管理员', 'login', 'loginSys', '登录系统', '123.114.249.207', '2017-05-26 13:15:31');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1376', '管理员', 'HealthnCat', 'saveHealthCat', '添加/编辑健康知识分类', '123.114.249.207', '2017-05-26 13:20:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1377', '管理员', 'login', 'loginSys', '登录系统', '123.114.249.207', '2017-05-26 13:27:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1378', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '123.114.249.207', '2017-05-26 13:28:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1379', '管理员', 'login', 'loginSys', '登录系统', '123.114.249.207', '2017-05-26 16:03:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1380', '管理员', 'login', 'logout', '退出系统', '222.128.67.79', '2017-06-01 09:12:03');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1381', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-09 08:48:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1382', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-09 16:51:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1383', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-12 08:41:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1384', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-13 10:52:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1385', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-15 14:33:41');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1386', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-16 08:57:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1387', '管理员', 'login', 'loginSys', '登录系统', '123.127.181.171', '2017-06-27 15:57:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1388', '管理员', 'login', 'loginSys', '登录系统', '123.127.181.171', '2017-06-27 16:16:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1389', '管理员', 'login', 'loginSys', '登录系统', '222.128.67.79', '2017-06-28 08:40:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1390', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 10:08:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1391', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-11-13 14:47:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1392', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-11-13 14:48:29');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1393', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 11:44:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1394', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:11:49');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1395', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:12:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1396', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:14:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1397', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:14:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1398', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:16:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1399', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:16:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1400', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 13:44:41');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1401', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-03 14:18:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1402', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-04-03 14:18:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1403', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-03 14:20:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1404', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 14:21:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1405', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 14:22:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1406', '管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-03 14:43:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1407', '管理员', 'ActivCat', 'delArrayInfo', '删除社区活动信息', '127.0.0.1', '2018-04-03 14:44:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1408', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-03 14:46:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1409', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 15:07:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1410', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 15:07:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1411', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 15:07:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1412', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:40:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1413', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:40:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1414', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:40:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1415', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:42:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1416', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:46:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1417', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:47:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1418', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:47:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1419', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-03 16:47:31');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1420', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-03 17:00:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1421', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 17:01:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1422', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-03 17:02:33');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1423', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 08:47:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1424', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 09:05:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1425', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-04-04 09:09:49');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1426', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-04 09:11:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1427', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-04 09:11:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1428', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 09:16:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1429', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 13:09:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1430', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 13:09:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1431', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 13:12:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1432', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 13:12:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1433', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 13:12:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1434', '翠景北里-管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-04 13:41:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1435', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:06:07');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1436', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:12:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1437', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:12:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1438', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:12:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1439', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:12:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1440', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:12:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1441', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:14:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1442', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:30:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1443', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:30:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1444', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:30:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1445', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:34:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1446', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-04 14:34:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1447', '翠景北里-管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-04 14:46:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1448', '翠景北里-管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-04 14:46:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1449', '翠景北里-管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-04 14:46:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1450', '翠景北里-管理员', 'ActivCat', 'delArrayInfo', '删除社区活动信息', '127.0.0.1', '2018-04-04 14:47:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1451', '翠景北里-管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 14:58:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1452', '翠景北里-管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-04-04 14:59:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1453', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 15:03:14');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1454', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 15:03:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1455', '翠景北里-管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 15:04:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1456', '翠景北里-管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 15:14:49');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1457', '翠景北里-管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 15:18:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1458', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 15:18:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1459', '翠屏北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 15:18:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1460', '翠屏北里-管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-04-04 15:18:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1461', '翠屏北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 15:26:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1462', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 15:26:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1463', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 15:40:41');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1464', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 15:40:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1465', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 15:41:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1466', '云景里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 15:42:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1467', '云景里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 16:14:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1468', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 16:15:03');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1469', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-04-04 16:15:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1470', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 16:15:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1471', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-04-04 16:16:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1472', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 16:17:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1473', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-04-04 16:17:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1474', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 16:19:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1475', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 16:19:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1476', '翠景北里-管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-04 16:19:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1477', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 16:25:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1478', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 16:25:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1479', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 16:29:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1480', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 16:29:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1481', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-04 16:44:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1482', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-04 16:53:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1483', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 16:56:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1484', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 16:57:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1485', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-04 16:57:48');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1486', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-04 16:57:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1487', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 16:58:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1488', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-04 17:35:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1489', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 08:41:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1490', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-08 09:31:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1491', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 09:31:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1492', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-08 09:34:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1493', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 09:34:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1494', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-08 09:41:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1495', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 09:41:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1496', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 09:44:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1497', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-08 10:38:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1498', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-08 10:55:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1499', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-08 10:56:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1500', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-08 10:56:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1501', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-08 10:56:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1502', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-08 10:58:03');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1503', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 10:58:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1504', '翠景北里-管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-08 11:35:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1505', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-08 11:53:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1506', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-08 15:15:41');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1507', '翠景北里-管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-08 15:57:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1508', '翠景北里-管理员', 'ActivInfo', 'overArrayInfo', '批量结束活动信息', '127.0.0.1', '2018-04-08 16:46:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1509', '翠景北里-管理员', 'ActivInfo', 'overArrayInfo', '批量结束活动信息', '127.0.0.1', '2018-04-08 16:46:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1510', '翠景北里-管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-08 16:46:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1511', '翠景北里-管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-08 17:37:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1512', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 08:52:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1513', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-09 09:44:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1514', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 09:44:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1515', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-09 09:45:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1516', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 09:57:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1517', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-09 10:04:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1518', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 10:04:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1519', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-09 14:16:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1520', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 14:16:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1521', '翠景北里-管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-04-09 14:46:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1522', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-09 14:49:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1523', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 14:49:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1524', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-09 14:49:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1525', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-09 14:49:49');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1526', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-09 14:49:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1527', '翠景北里-管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-09 16:38:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1528', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-10 08:50:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1529', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-10 09:19:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1530', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-10 09:19:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1531', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-10 10:03:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1532', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-10 10:03:49');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1533', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 10:09:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1534', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 10:09:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1535', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 10:09:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1536', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 10:09:48');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1537', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-04-10 10:25:34');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1538', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-04-10 10:25:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1539', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-04-10 10:25:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1540', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-04-10 10:26:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1541', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-04-10 10:26:14');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1542', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-04-10 10:26:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1543', '管理员', 'ActivCat', 'delActivCat', '删除社区活动分类', '127.0.0.1', '2018-04-10 10:37:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1544', '管理员', 'ActivCat', 'saveActivCat', '添加/编辑社区活动分类', '127.0.0.1', '2018-04-10 10:37:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1545', '管理员', 'ActivCat', 'saveActivCat', '添加/编辑社区活动分类', '127.0.0.1', '2018-04-10 10:37:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1546', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-10 11:02:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1547', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-10 11:19:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1548', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-10 11:20:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1549', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:43:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1550', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-04-10 11:46:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1551', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:47:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1552', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:50:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1553', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:53:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1554', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:53:29');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1555', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:53:29');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1556', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:53:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1557', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:53:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1558', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:55:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1559', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:55:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1560', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-10 11:56:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1561', '管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-10 13:16:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1562', '管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-10 13:16:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1563', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-11 09:44:03');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1564', '管理员', 'ActivInfo', 'overArrayInfo', '批量结束活动信息', '127.0.0.1', '2018-04-11 09:45:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1565', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-11 10:07:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1566', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 10:18:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1567', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 10:28:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1568', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 10:30:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1569', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 10:36:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1570', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-11 11:05:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1571', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-11 11:07:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1572', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-11 11:07:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1573', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 11:38:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1574', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-11 11:38:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1575', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-11 13:14:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1576', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 13:29:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1577', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 13:56:14');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1578', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 13:56:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1579', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 13:56:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1580', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 13:58:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1581', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-11 14:03:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1582', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-11 14:03:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1583', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-11 14:05:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1584', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-11 14:05:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1585', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:19:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1586', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:19:33');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1587', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:25:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1588', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:30:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1589', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:30:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1590', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:33:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1591', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:34:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1592', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:35:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1593', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 14:40:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1594', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:02:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1595', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:10:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1596', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:12:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1597', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:13:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1598', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:15:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1599', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 15:23:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1600', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:33:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1601', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:46:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1602', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-11 15:47:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1603', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 16:32:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1604', '管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-11 16:48:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1605', '管理员', 'ActivCat', 'showJoinList', '查看参加活动人数', '127.0.0.1', '2018-04-11 16:48:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1606', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 16:52:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1607', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-11 16:53:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1608', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 16:53:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1609', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 17:12:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1610', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-11 17:28:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1611', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-12 09:21:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1612', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-12 09:21:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1613', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-12 09:32:48');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1614', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-04-12 09:38:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1615', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-12 11:59:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1616', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-12 13:35:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1617', '管理员', 'SellerInfo', 'delArraySellerInfo', '删除商家信息', '127.0.0.1', '2018-04-12 13:36:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1618', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-12 13:45:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1619', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-12 15:57:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1620', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-12 15:58:07');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1621', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-12 15:59:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1622', '翠屏南里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-12 15:59:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1623', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 08:44:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1624', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-13 11:52:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1625', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-04-13 11:52:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1626', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-13 11:56:23');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1627', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-04-13 13:21:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1628', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-13 13:26:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1629', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-13 13:44:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1630', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 13:45:29');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1631', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-13 13:49:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1632', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 13:49:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1633', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 13:51:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1634', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-04-13 14:07:07');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1635', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-13 14:08:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1636', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-13 14:08:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1637', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑居民用户信息', '127.0.0.1', '2018-04-13 14:08:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1638', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-13 15:43:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1639', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 15:43:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1640', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 15:46:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1641', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-13 16:53:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1642', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-13 17:04:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1643', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-13 18:52:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1644', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 09:46:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1645', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 10:27:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1646', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 10:33:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1647', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 11:14:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1648', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 11:15:07');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1649', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 11:15:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1650', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 11:20:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1651', '翠景北里-管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-15 11:21:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1652', '翠景北里-管理员', 'SellerInfo', 'delArraySellerInfo', '删除商家信息', '127.0.0.1', '2018-04-15 11:22:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1653', '翠景北里-管理员', 'SellerCat', 'saveSellerCat', '添加/编辑商家分类', '127.0.0.1', '2018-04-15 11:37:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1654', '翠景北里-管理员', 'SellerCat', 'saveSellerCat', '添加/编辑商家分类', '127.0.0.1', '2018-04-15 11:37:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1655', '翠景北里-管理员', 'SellerCat', 'delSellerCat', '删除商家分类', '127.0.0.1', '2018-04-15 11:37:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1656', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 11:39:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1657', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 11:43:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1658', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 11:43:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1659', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 12:54:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1660', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 12:55:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1661', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 12:59:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1662', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 13:00:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1663', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 13:05:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1664', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 13:05:23');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1665', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 13:15:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1666', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 13:15:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1667', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:03:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1668', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:03:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1669', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:09:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1670', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:09:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1671', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:21:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1672', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:21:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1673', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:21:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1674', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:21:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1675', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 14:29:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1676', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 14:36:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1677', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:36:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1678', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:36:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1679', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:37:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1680', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:37:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1681', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:46:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1682', '京洲园-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:47:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1683', '京洲园-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:47:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1684', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:47:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1685', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 14:47:50');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1686', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:47:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1687', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:47:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1688', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:48:23');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1689', '京洲园-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:48:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1690', '京洲园-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 14:49:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1691', '京洲园-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 14:49:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1692', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 14:49:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1693', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 15:03:15');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1694', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 15:03:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1695', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 15:03:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1696', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 15:03:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1697', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 16:13:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1698', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-15 16:15:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1699', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 17:05:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1700', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 17:05:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1701', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 17:08:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1702', '京洲园-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 17:08:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1703', '京洲园-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 17:09:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1704', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 17:09:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1705', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 17:35:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1706', '京洲园-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 17:35:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1707', '京洲园-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 18:14:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1708', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 18:14:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1709', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-15 18:16:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1710', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-15 18:16:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1711', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 19:02:26');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1712', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-15 19:02:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1713', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-15 19:03:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1714', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-16 10:03:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1715', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-16 11:16:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1716', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-16 11:16:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1717', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 14:05:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1718', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 14:06:41');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1719', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 14:07:31');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1720', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 14:12:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1721', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 14:13:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1722', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 14:16:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1723', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-16 14:52:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1724', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-16 14:52:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1725', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-16 15:20:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1726', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-16 15:25:34');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1727', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-16 15:25:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1728', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-16 15:26:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1729', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-16 15:26:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1730', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-16 15:43:13');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1731', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-16 15:43:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1732', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-16 17:28:23');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1733', '管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-16 17:32:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1734', '管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-16 17:32:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1735', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-17 10:06:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1736', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-17 10:06:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1737', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-17 10:06:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1738', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-17 10:14:03');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1739', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-17 10:14:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1740', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-17 10:15:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1741', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-17 10:15:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1742', '翠景北里-管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-17 10:16:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1743', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-17 10:16:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1744', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-17 10:23:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1745', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-17 10:23:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1746', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-17 10:24:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1747', '翠景北里-管理员', 'SysUserInfo', 'setUserAppUfNum', '居民用户绑定实体卡', '127.0.0.1', '2018-04-17 10:25:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1748', '翠景北里-管理员', 'SellerInfo', 'saveSellerInfo', '添加/编辑商家信息', '127.0.0.1', '2018-04-17 10:27:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1749', '翠景北里-管理员', 'SellerInfo', 'checkArrayInfo', '审核商家信息', '127.0.0.1', '2018-04-17 10:27:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1750', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-18 09:13:46');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1751', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-18 09:31:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1752', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-18 10:06:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1753', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-18 10:09:59');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1754', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-18 10:14:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1755', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-18 10:19:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1756', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-18 10:32:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1757', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-18 11:45:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1758', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-18 11:47:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1759', '管理员', 'ActivCat', 'publishArrayInfo', '发布社区活动信息', '127.0.0.1', '2018-04-18 14:08:23');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1760', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:16:14');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1761', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:17:14');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1762', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:18:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1763', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:20:25');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1764', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:20:34');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1765', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:29:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1766', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:29:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1767', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:30:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1768', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:30:00');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1769', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-04-18 14:32:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1770', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-04-18 14:37:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1771', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-04-18 14:37:36');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1772', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.64', '2018-04-18 16:28:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1773', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-18 16:41:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1774', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-18 16:47:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1775', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-18 17:05:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1776', '管理员', 'ActivInfo', 'saveActivInfo', '添加/编辑社区活动信息', '127.0.0.1', '2018-04-18 17:30:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1777', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-19 10:52:29');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1778', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-04-19 10:52:34');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1779', '翠景北里-管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-19 10:52:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1780', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-04-19 13:40:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1781', '管理员', 'SellerItemsCat', 'saveSellerItemsCat', '添加/编辑积分商品分类', '127.0.0.1', '2018-04-19 13:58:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1782', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-05-07 09:17:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1783', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-07 10:54:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1784', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-07 10:56:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1785', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-07 10:57:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1786', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-07 10:58:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1787', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-07 10:58:21');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1788', '管理员', 'NoticeCat', 'delNoticeCat', '删除通知分类', '127.0.0.1', '2018-08-07 11:03:48');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1789', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-08-07 11:03:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1790', '管理员', 'NoticeCat', 'delNoticeCat', '删除通知分类', '127.0.0.1', '2018-08-07 11:04:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1791', '管理员', 'NoticeCat', 'delNoticeCat', '删除通知分类', '127.0.0.1', '2018-08-07 11:04:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1792', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-07 11:04:12');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1793', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-07 11:11:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1794', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:12:33');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1795', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:12:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1796', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:13:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1797', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:26:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1798', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:26:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1799', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:26:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1800', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:27:10');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1801', '管理员', 'NoticeCat', 'saveNoticeCat', '添加/编辑通知分类', '127.0.0.1', '2018-08-07 11:33:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1802', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-07 11:42:43');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1803', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-07 11:43:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1804', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-07 11:44:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1805', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-07 14:05:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1806', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-07 14:06:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1807', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-07 14:07:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1808', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-07 14:59:08');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1809', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-08 10:58:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1810', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-08 11:04:58');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1811', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-08 11:05:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1812', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-08 15:02:22');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1813', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-08 15:32:04');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1814', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-08 15:32:17');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1815', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-08-08 15:45:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1816', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-08 15:45:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1817', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-09 08:54:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1818', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-09 09:04:29');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1819', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-08-09 09:06:09');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1820', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-09 09:06:32');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1821', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-09 09:07:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1822', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-09 09:08:39');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1823', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-09 09:08:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1824', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-09 11:59:19');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1825', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-09 13:25:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1826', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-09 13:54:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1827', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-09 13:55:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1828', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-09 13:55:20');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1829', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-09 13:55:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1830', '管理员', 'NoticeInfo', 'publNoticeInfo', '发布通知信息', '127.0.0.1', '2018-08-09 13:55:28');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1831', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-09 13:59:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1832', '管理员', 'NoticeInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-08-09 16:04:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1833', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-10 08:38:06');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1834', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-10 09:54:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1835', '管理员', 'ApptlearnInfo', 'delArrayInfo', '删除通知信息', '127.0.0.1', '2018-08-10 15:59:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1836', '管理员', 'ApptlearnInfo', 'saveApptlearnInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-10 16:00:54');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1837', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:33');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1838', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1839', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1840', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1841', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1842', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1843', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1844', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1845', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1846', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1847', '管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-10 16:07:44');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1848', '管理员', 'ApptlearnInfo', 'saveApptlearnInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-10 16:07:51');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1849', '管理员', 'ApptlearnInfo', 'saveApptlearnInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-10 17:03:42');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1850', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 09:00:38');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1851', '管理员', 'ApptlearnInfo', 'saveApptlearnInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-13 09:38:30');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1852', '超级管理员', 'ApptlearnInfo', 'publApptlearnInfo', '发布通知信息', '127.0.0.1', '2018-08-13 13:33:35');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1853', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 14:33:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1854', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-08-13 14:56:40');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1855', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-08-13 14:56:48');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1856', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-08-13 14:56:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1857', '管理员', 'SysUserInfo', 'delArrUserInfo', '删除用户信息', '127.0.0.1', '2018-08-13 14:57:05');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1858', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2018-08-13 14:58:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1859', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 14:59:01');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1860', '微信管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 14:59:11');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1861', '微信管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 14:59:55');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1862', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 15:00:02');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1863', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 15:11:45');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1864', '微信管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 15:11:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1865', '微信管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 15:12:16');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1866', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 15:12:24');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1867', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 15:12:47');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1868', '微信管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 15:12:56');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1869', '微信管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 15:19:53');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1870', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2018-08-13 15:24:37');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1871', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-13 15:24:57');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1872', '管理员', 'NoticeInfo', 'saveNoticeInfo', '添加/编辑通知信息', '127.0.0.1', '2018-08-13 15:25:18');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1873', '管理员', 'NoticeCat', 'delNoticeCat', '删除通知分类', '127.0.0.1', '2018-08-13 15:25:27');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1874', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2018-08-13 15:37:52');
INSERT INTO `qs_wx_xhjj_sys_action_log` VALUES ('1875', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.14', '2018-08-13 15:42:47');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_all_attach`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_all_attach`;
CREATE TABLE `qs_wx_xhjj_sys_all_attach` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `module_name` varchar(50) NOT NULL COMMENT '控制器名称',
  `module_info_id` int(11) NOT NULL DEFAULT '0' COMMENT '模块内容id',
  `file_path` tinytext NOT NULL COMMENT '附件路径',
  `file_real_name` varchar(100) NOT NULL COMMENT '附件真实名称',
  `file_ext` varchar(10) NOT NULL COMMENT '附件后缀',
  `file_size` varchar(50) NOT NULL COMMENT '附件大小',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_all_attach
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('148', 'activity', '1', 'Public/Upload/activity/2017-04-21/58f9d1ba87922.jpg', '10856797.jpg', 'jpg', '244555');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('149', 'activity', '2', 'Public/Upload/activity/2017-04-21/58f9d1dcf146b.jpg', '10856798.jpg', 'jpg', '167945');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('150', 'activity', '3', 'Public/Upload/activity/2017-04-21/58f9d1f43f9f7.jpg', '10856799.jpg', 'jpg', '191036');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('151', 'activity', '4', 'Public/Upload/activity/2017-04-21/58f9d20bdc727.jpg', '14345487.jpg', 'jpg', '144067');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('155', 'activity', '7', 'Public/Upload/activity/2018-04-04/5ac4261fa91b3.jpg', '02.jpg', 'jpg', '162884');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('156', 'activity', '7', 'Public/Upload/activity/2018-04-04/5ac42622103f3.jpg', '2a5ac85aaaa2d951-48ebc1dba4f3112d-7022ab585b7468744cee99e7cfc47231.jpg', 'jpg', '28323');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('157', 'activity', '7', 'Public/Upload/activity/2018-04-04/5ac426250f2c2.png', '003.png', 'png', '622227');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('167', 'activity', '5', 'Public/Upload/activity/2018-04-04/5ac474ced03e2.jpg', '04.jpg', 'jpg', '103203');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('168', 'activity', '8', 'Public/Upload/activity/2018-04-04/5ac4906eb9f32.png', '004.png', 'png', '732789');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('169', 'activity', '9', 'Public/Upload/activity/2018-04-04/5ac493895406d.png', '004.png', 'png', '732789');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('170', 'activity', '9', 'Public/Upload/activity/2018-04-04/5ac49389bb18e.jpg', '7.jpg', 'jpg', '181972');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('171', 'activity', '9', 'Public/Upload/activity/2018-04-04/5ac49389d43c1.jpg', '08.jpg', 'jpg', '89214');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('176', 'activity', '11', 'Public/Upload/activity/2018-04-11/5acd833d494d2.PNG', '002.PNG', 'PNG', '877563');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('177', 'activity', '11', 'Public/Upload/activity/2018-04-11/5acd8343259be.jpg', '03.jpg', 'jpg', '104996');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('178', 'activity', '11', 'Public/Upload/activity/2018-04-11/5acd83434031a.png', '003.png', 'png', '622227');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('179', 'activity', '11', 'Public/Upload/activity/2018-04-11/5acd8343bbc9c.jpg', '3c28af542f2d49f7-da1566425074a021-9c373de8439e52c5d885c8459d285946.jpg', 'jpg', '15588');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('180', 'activity', '11', 'Public/Upload/activity/2018-04-11/5acd83440c117.jpg', '3.jpg', 'jpg', '751728');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('216', 'activity', '12', 'Public/Upload/activity/2018-04-11/5acdb7de3801b.jpg', '8.jpg', 'jpg', '270735');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('217', 'activity', '12', 'Public/Upload/activity/2018-04-11/5acdb7de71f82.jpg', '9.jpg', 'jpg', '480117');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('218', 'activity', '12', 'Public/Upload/activity/2018-04-11/5acdb7dee15a4.jpg', '10.jpg', 'jpg', '533355');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('219', 'activity', '12', 'Public/Upload/activity/2018-04-11/5acdb7df11047.jpg', '11.jpg', 'jpg', '395180');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('221', 'sellerInfo', '26', 'Public/Upload/sellerInfo/2018-04-11/5acdba4d42ca9.jpg', '8.jpg', 'jpg', '270735');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('222', 'sellerInfo', '26', 'Public/Upload/sellerInfo/2018-04-11/5acdba4d8d0a0.jpg', '9.jpg', 'jpg', '480117');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('229', 'sellerInfo', '23', 'Public/Upload/sellerInfo/2018-04-11/5acdbd8302577.jpg', '8.jpg', 'jpg', '270735');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('230', 'activity', '10', 'Public/Upload/activity/2018-04-11/5acdc813d89e4.jpg', '8501654.jpg', 'jpg', '179644');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('231', 'activity', '6', 'Public/Upload/activity/2018-04-11/5acdd19397ddb.jpg', 'u=3131094046,435481623&fm=27&gp=0.jpg', 'jpg', '36398');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('232', 'activity', '6', 'Public/Upload/activity/2018-04-11/5acdd193b1d3e.jpg', 'W020170605399560934416.jpg', 'jpg', '50251');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('233', 'activity', '6', 'Public/Upload/activity/2018-04-11/5acdd193d05bb.jpg', 'W020170605401650901537.jpg', 'jpg', '85703');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('234', 'activity', '6', 'Public/Upload/activity/2018-04-11/5acdd193f1afc.jpg', 'W020170605418321621706.jpg', 'jpg', '69188');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('239', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-13/5ad089d675e93.jpeg', '身份证.jpeg', 'jpeg', '95033');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('240', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-13/5ad089df57c09.jpeg', '身份证2.jpeg', 'jpeg', '25616');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('241', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-13/5ad093da34d6d.png', '图片2.png', 'png', '30856');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('242', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-13/5ad0947e0ea98.png', '图片1.png', 'png', '571839');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('243', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-13/5ad094ea1300e.png', '图片2.png', 'png', '30856');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('244', 'sellerInfo', '26', 'Public/Upload/sellerInfo/2018-04-15/5ad2b853cfe0c.png', '图片2.png', 'png', '30856');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('245', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-15/5ad2c214796d3.jpeg', '身份证2.jpeg', 'jpeg', '25616');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('246', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-15/5ad2c225aef1b.png', '图片2.png', 'png', '30856');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('247', 'sellerInfo', '27', 'Public/Upload/sellerInfo/2018-04-15/5ad2c36d49b67.jpeg', '身份证.jpeg', 'jpeg', '95033');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('248', 'sellerInfo', '27', 'Public/Upload/sellerInfo/2018-04-15/5ad2c371d5bbb.jpeg', '身份证2.jpeg', 'jpeg', '25616');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('249', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-15/5ad2c4e2a24a3.jpeg', '身份证.jpeg', 'jpeg', '95033');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('250', 'sellerInfo', '0', 'Public/Upload/sellerInfo/2018-04-15/5ad2c4e7306ac.jpeg', '身份证2.jpeg', 'jpeg', '25616');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('251', 'sellerInfo', '28', 'Public/Upload/sellerInfo/2018-04-15/5ad2c50609be7.jpeg', '身份证.jpeg', 'jpeg', '95033');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('252', 'sellerInfo', '28', 'Public/Upload/sellerInfo/2018-04-15/5ad2c509e10a1.jpeg', '身份证2.jpeg', 'jpeg', '25616');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('256', 'prop', '0', 'Public/Upload/prop/2018-04-16/5ad443e8c8d41.jpg', 'IMG_20180414_200916.jpg', 'jpg', '550655');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('257', 'sellerInfo', '33', 'Public/Upload/sellerInfo/2018-04-16/5ad44ea45a75c.png', '004.png', 'png', '732789');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('258', 'sellerInfo', '29', 'Public/Upload/sellerInfo/2018-04-16/5ad46d9f1cf52.jpg', '05.jpg', 'jpg', '89382');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('259', 'sellerInfo', '34', 'Public/Upload/sellerInfo/2018-04-17/5ad55b8f02d0c.jpg', '05.jpg', 'jpg', '89382');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('260', 'sellerInfo', '34', 'Public/Upload/sellerInfo/2018-04-17/5ad55b8f22a55.jpg', '4.jpg', 'jpg', '550315');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('261', 'sellerInfo', '34', 'Public/Upload/sellerInfo/2018-04-17/5ad55b8f438c9.jpg', '06.jpg', 'jpg', '172364');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('262', 'sellerInfo', '34', 'Public/Upload/sellerInfo/2018-04-17/5ad55b8f61266.jpg', '5.jpg', 'jpg', '317697');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('263', 'notice', '19', 'Public/Upload/notice/2018-08-07/5b690ab6ed0f0.jpg', '微信图片_20180806162457.jpg', 'jpg', '117976');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('265', 'notice', '21', 'Public/Upload/notice/2018-08-07/5b6936eb23d7d.jpg', '0.jpg', 'jpg', '323187');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('266', 'notice', '22', 'Public/Upload/notice/2018-08-08/5b6a9c72ea513.jpg', '0.jpg', 'jpg', '323187');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('267', 'notice', '23', 'Public/Upload/notice/2018-08-08/5b6a9fb35d2b8.jpg', '2a5ac85aaaa2d951-48ebc1dba4f3112d-7022ab585b7468744cee99e7cfc47231.jpg', 'jpg', '28323');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('268', 'notice', '24', 'Public/Upload/notice/2018-08-09/5b6b9314b0f90.jpg', '01.jpg', 'jpg', '64834');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('269', 'notice', '25', 'Public/Upload/notice/2018-08-09/5b6b938cbe3e6.jpg', '2a5ac85aaaa2d951-48ebc1dba4f3112d-7022ab585b7468744cee99e7cfc47231.jpg', 'jpg', '28323');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('270', 'notice', '26', 'Public/Upload/notice/2018-08-09/5b6b93cb78cfd.jpg', '2e2eb9389b504fc23b021797e0dde71191ef6dc7.jpg', 'jpg', '38641');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('271', 'notice', '27', 'Public/Upload/notice/2018-08-09/5b6b94162362c.jpg', '02.jpg', 'jpg', '162884');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('272', 'notice', '28', 'Public/Upload/notice/2018-08-09/5b6bbc105ae82.jpg', '01.jpg', 'jpg', '64834');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('273', 'apptlearn', '29', 'Public/Upload/apptlearn/2018-08-10/5b6d4632279c2.jpg', '0.jpg', 'jpg', '323187');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('274', 'apptlearn', '30', 'Public/Upload/apptlearn/2018-08-13/5b70e0f19345a.jpg', '0.jpg', 'jpg', '323187');
INSERT INTO `qs_wx_xhjj_sys_all_attach` VALUES ('275', 'notice', '20', 'Public/Upload/notice/2018-08-13/5b71325c6cfc3.jpg', '2e2eb9389b504fc23b021797e0dde71191ef6dc7.jpg', 'jpg', '38641');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_config_def`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_config_def`;
CREATE TABLE `qs_wx_xhjj_sys_config_def` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `sys_name` varchar(50) NOT NULL COMMENT '系统名称',
  `set_key` varchar(50) NOT NULL COMMENT '配置键',
  `set_value` varchar(500) NOT NULL COMMENT '配置值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_config_def
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_config_def` VALUES ('2', 'system_name', 'system_name', '延庆生态农业循环经济科普基地-微信管理平台');
INSERT INTO `qs_wx_xhjj_sys_config_def` VALUES ('3', 'db_fix', 'db_fix', 'qs_wx_xhjj_');
INSERT INTO `qs_wx_xhjj_sys_config_def` VALUES ('4', 'system_token', 'system_token', 'qs_wx_xhjj');
INSERT INTO `qs_wx_xhjj_sys_config_def` VALUES ('5', 'copy_right', 'copy_right', 'Copyright © 2018 All Rights Reserved Powered by yanqing');
INSERT INTO `qs_wx_xhjj_sys_config_def` VALUES ('6', 'webroot', 'webroot', 'http://192.168.1.91:9019');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_db_backup`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_db_backup`;
CREATE TABLE `qs_wx_xhjj_sys_db_backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `db_path` tinytext NOT NULL COMMENT '备份路径',
  `db_name` varchar(100) NOT NULL,
  `backup_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '备份时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_db_backup
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_db_backup` VALUES ('14', 'E:\\wamp\\www\\qskj_project_sqk_debug\\trunk\\dbsql', 'qs_wx_xhjj_db_debug-20180411-111141.sql', '2018-04-11 11:11:42');
INSERT INTO `qs_wx_xhjj_sys_db_backup` VALUES ('15', 'E:/wamp/www/qskj_project_sqk_debug/trunk/dbsql/', 'qs_wx_xhjj_db_debug-20180411-111326.sql', '2018-04-11 11:13:26');
INSERT INTO `qs_wx_xhjj_sys_db_backup` VALUES ('16', 'E:/wamp/www/qskj_project_sqk_debug/trunk/dbsql/', 'qs_wx_xhjj_db_debug-20180411-111534.sql', '2018-04-11 11:15:35');
INSERT INTO `qs_wx_xhjj_sys_db_backup` VALUES ('18', 'E:/wamp/www/qskj_project_sqk_debug/trunk/dbsql/', 'qs_wx_xhjj_db-20180807-152816.sql', '2018-08-07 15:28:17');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_priv_cat`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_priv_cat`;
CREATE TABLE `qs_wx_xhjj_sys_priv_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `sys_name` varchar(50) DEFAULT NULL COMMENT '系统名称',
  `cat_name` varchar(50) NOT NULL COMMENT '分类名称',
  `parent_id_path` varchar(50) NOT NULL DEFAULT '' COMMENT '所属上级目录',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级ID',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `is_enable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否禁用 0：禁用，1：启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_priv_cat
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('2', 'notice', '内容管理', '', '0', '2017-03-17 11:36:09', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('37', 'ApptManage', '预约管理', '', '0', '2018-08-13 15:00:36', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('6', 'system', '系统设置', '', '0', '2017-03-21 09:54:09', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('7', 'noticeCat', '通知分类', '2.', '2', '2017-03-21 09:54:39', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('8', 'noticeInfo', '通知信息', '2.', '2', '2017-03-21 09:54:58', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('20', 'privCat', '权限分类', '6.', '6', '2017-03-29 13:03:52', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('21', 'privInfo', '权限信息', '6.', '6', '2017-03-29 13:04:12', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('22', 'userGroup', '角色管理', '6.', '6', '2017-03-29 13:04:28', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('23', 'userInfo', '用户信息', '6.', '6', '2017-03-29 13:04:45', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('24', 'dbBack', '数据备份', '6.', '6', '2017-03-29 13:05:03', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('25', 'actionLog', '系统日志', '6.', '6', '2017-03-29 13:05:21', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('26', 'menuSet', '菜单设置', '', '0', '2017-03-29 16:10:19', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('27', 'menu', '菜单列表', '26.', '26', '2017-03-29 16:12:02', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('39', 'LearnAppt', '培训列表', '37.', '37', '2018-08-13 15:01:33', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('38', 'VisitAppt', '参观预约', '37.', '37', '2018-08-13 15:01:06', '1');
INSERT INTO `qs_wx_xhjj_sys_priv_cat` VALUES ('35', 'cleanTemPic', '清理缓存', '6.', '6', '2018-04-03 17:11:58', '1');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_priv_info`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_priv_info`;
CREATE TABLE `qs_wx_xhjj_sys_priv_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cat_id` int(11) NOT NULL DEFAULT '0' COMMENT '权限分类id',
  `pri_name` varchar(50) NOT NULL COMMENT '权限名称',
  `pri_value` varchar(50) NOT NULL COMMENT '权限值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_priv_info
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('2', '7', '新增分类', 'addNoticeCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('3', '7', '编辑分类', 'editNoticeCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('4', '8', '新增信息', 'addNoticeInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('5', '8', '编辑信息', 'editNoticeInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('6', '7', '删除分类', 'delNoticeCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('7', '8', '删除信息', 'delNoticeInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('8', '8', '发布信息', 'pubNoticeInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('9', '7', '查看分类', 'showNoticeCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('10', '8', '查看信息', 'showNoticeInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('19', '10', '审核信息', 'checkSellerInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('52', '20', '新增分类', 'addPrivCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('53', '20', '编辑分类', 'editPrivCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('54', '20', '删除分类', 'delPrivCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('55', '20', '查看分类', 'showPrivCat');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('56', '21', '新增信息', 'addPrivInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('57', '21', '编辑信息', 'editPrivInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('58', '21', '删除信息', 'delPrivInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('59', '21', '查看信息', 'showPrivInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('60', '22', '新增信息', 'addUserGroup');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('61', '22', '编辑信息', 'editUserGroup');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('62', '22', '删除信息', 'delUserGroup');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('63', '22', '查看信息', 'showUserGroup');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('64', '23', '新增信息', 'addUserInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('65', '23', '编辑信息', 'editUserInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('66', '23', '删除信息', 'delUserInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('67', '23', '查看信息', 'showUserInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('70', '27', '内容管理', 'noticeMenu');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('74', '27', '系统设置', 'systemMenu');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('83', '24', '查看备份', 'showDbBack');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('84', '25', '查看日志', 'showLogInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('85', '35', '清理缓存图片', 'cleanTemPic');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('86', '27', '预约管理', 'appointmentMenu');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('87', '38', '查看参观', 'showVisitInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('88', '39', '查看培训', 'showLearnInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('89', '39', '删除培训', 'delApptlearnInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('90', '39', '发布培训', 'pubApptlearnInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('91', '39', '新增培训', 'addApptlearnInfo');
INSERT INTO `qs_wx_xhjj_sys_priv_info` VALUES ('92', '39', '编辑培训', 'editApptlearnInfo');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_user_group`;
CREATE TABLE `qs_wx_xhjj_sys_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `sys_name` varchar(50) DEFAULT NULL COMMENT '系统名称',
  `cat_name` varchar(50) NOT NULL COMMENT '分类名称',
  `parent_id_path` varchar(50) NOT NULL DEFAULT '' COMMENT '所属上级目录',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级ID',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `priviledges` text COMMENT '组权限',
  `is_enable` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否禁用 0：禁用，1：启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_user_group
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_user_group` VALUES ('8', 'sqAdmin', '管理员用户', '', '0', '2018-04-03 14:57:49', 'addNoticeCat,editNoticeCat,delNoticeCat,showNoticeCat,addNoticeInfo,editNoticeInfo,delNoticeInfo,pubNoticeInfo,showNoticeInfo,showLearnInfo,delApptlearnInfo,pubApptlearnInfo,addApptlearnInfo,editApptlearnInfo,showVisitInfo,addUserInfo,editUserInfo,delUserInfo,showUserInfo,noticeMenu,appointmentMenu,', '1');
INSERT INTO `qs_wx_xhjj_sys_user_group` VALUES ('5', 'sysAdmin', '系统', '', '0', '2017-03-30 13:37:28', 'addNoticeCat,editNoticeCat,delNoticeCat,showNoticeCat,addNoticeInfo,editNoticeInfo,delNoticeInfo,pubNoticeInfo,showNoticeInfo,showLearnInfo,delApptlearnInfo,pubApptlearnInfo,addApptlearnInfo,editApptlearnInfo,showVisitInfo,addPrivCat,editPrivCat,delPrivCat,showPrivCat,addPrivInfo,editPrivInfo,delPrivInfo,showPrivInfo,addUserGroup,editUserGroup,delUserGroup,showUserGroup,addUserInfo,editUserInfo,delUserInfo,showUserInfo,showDbBack,showLogInfo,cleanTemPic,noticeMenu,systemMenu,appointmentMenu,', '1');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_sys_user_info`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_sys_user_info`;
CREATE TABLE `qs_wx_xhjj_sys_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cat_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户组id',
  `address_id` int(11) NOT NULL DEFAULT '0' COMMENT '社区id',
  `usr` varchar(50) NOT NULL COMMENT '用户名',
  `pwd` varchar(40) NOT NULL DEFAULT '123' COMMENT '密码',
  `realname` varchar(50) DEFAULT NULL COMMENT '真实姓名',
  `gender` tinyint(1) NOT NULL DEFAULT '0' COMMENT '性别 0男 1女',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `tel` varchar(20) DEFAULT NULL COMMENT '手机',
  `phone` varchar(20) DEFAULT NULL COMMENT '电话',
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单提交时间',
  `last_ip` varchar(15) DEFAULT NULL COMMENT '最新一次登录IP',
  `last_login_time` datetime DEFAULT NULL,
  `priviledges` text COMMENT '用户权限',
  `is_enable` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态 0：未启用，1：启用',
  `keycode` varchar(8) DEFAULT NULL COMMENT '标识码',
  `token_num` varchar(20) NOT NULL DEFAULT '000000' COMMENT '管理员设备码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_sys_user_info
-- ----------------------------
INSERT INTO `qs_wx_xhjj_sys_user_info` VALUES ('1', '5', '0', 'super', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '管理员', '0', 'super@qq.com', '15823695896', '010-60551593', '2017-03-30 09:06:21', '192.168.1.14', '2018-08-13 15:42:47', '', '1', null, '000000');
INSERT INTO `qs_wx_xhjj_sys_user_info` VALUES ('95', '8', '0', 'admin', '27d1679e4f799930d6ccc05b6883fbc70b0eecce', '微信管理员', '0', '123@qq.com', '13800000000', '', '2018-08-13 14:58:57', '127.0.0.1', '2018-08-13 15:12:56', '', '1', null, '454243');

-- ----------------------------
-- Table structure for `qs_wx_xhjj_work_log`
-- ----------------------------
DROP TABLE IF EXISTS `qs_wx_xhjj_work_log`;
CREATE TABLE `qs_wx_xhjj_work_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL DEFAULT '2016',
  `month` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL,
  `weekday` int(11) NOT NULL DEFAULT '1',
  `check_week` int(11) NOT NULL DEFAULT '0',
  `month_week` int(11) NOT NULL DEFAULT '0',
  `log` varchar(200) DEFAULT NULL,
  `is_overwork` int(1) NOT NULL DEFAULT '0',
  `overwork_time` float(11,1) NOT NULL DEFAULT '0.0',
  `user_id` int(11) NOT NULL DEFAULT '1',
  `is_rest` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=370 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qs_wx_xhjj_work_log
-- ----------------------------
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('44', '2017', '3', '26', '7', '40', '4', '休息', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('45', '2017', '3', '27', '1', '41', '1', '格瑞雅居项目后台首页主页模块接口和功能开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('46', '2017', '3', '28', '2', '41', '1', '格瑞雅居项目后台首页主页模块接口和功能开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('47', '2017', '3', '29', '3', '41', '1', '格瑞雅居系统修改bug,功能部分修改开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('48', '2017', '3', '30', '4', '41', '1', '格瑞雅居系统修改bug,功能部分修改开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('49', '2017', '3', '31', '5', '41', '1', '格瑞雅居系统生产服务器环境搭建部署项目，修改bug。科委申报系统bug修改，误操作数据找回。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('50', '2017', '4', '1', '6', '41', '1', '格瑞雅居系统生产服务器环境搭建部署项目，修改bug。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('51', '2017', '4', '2', '7', '41', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('52', '2017', '4', '3', '1', '42', '2', '休息', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('53', '2017', '4', '4', '2', '42', '2', '休息\r\n', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('54', '2017', '4', '5', '3', '42', '2', '科委申报系统维护，科委误操作导致的数据丢失找回。格瑞雅居项目bug修改，功能完善。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('55', '2017', '4', '6', '4', '42', '2', '科委申报系统维护，申报系统用户权限修改，格瑞雅居项目bug修改，功能完善。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('56', '2017', '4', '7', '5', '42', '2', '格瑞雅居项目bug修改，功能完善。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('57', '2017', '4', '8', '6', '42', '2', '休息', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('58', '2017', '4', '9', '7', '42', '2', '休息', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('59', '2017', '4', '10', '1', '43', '3', '格瑞雅居项目修改bug，科委申报系统技术支持。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('60', '2017', '4', '11', '2', '43', '3', '格瑞雅居项目修改bug，科委申报系统技术支持。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('61', '2017', '4', '12', '3', '43', '3', '格瑞雅居项目修改bug，功能查漏补缺。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('62', '2017', '4', '13', '4', '43', '3', '格瑞雅居项目修改bug，功能查漏补缺。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('63', '2017', '4', '14', '5', '43', '3', '格瑞雅居项目修改bug，功能查漏补缺。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('64', '2017', '4', '15', '6', '43', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('65', '2017', '4', '16', '7', '43', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('66', '2017', '4', '17', '1', '44', '4', '格瑞雅居项目修改bug，功能查漏补缺。app手机版开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('67', '2017', '4', '18', '2', '44', '4', '格瑞雅居项目修改bug，功能查漏补缺。app手机版开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('68', '2017', '4', '19', '3', '44', '4', '格瑞雅居项目修改bug，功能查漏补缺。app手机版开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('69', '2017', '4', '20', '4', '44', '4', '格瑞雅居项目修改bug，功能查漏补缺。app手机版开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('70', '2017', '4', '21', '5', '44', '4', '格瑞雅居项目修改bug，功能查漏补缺。app手机版开发。服务器配置调整，Api接口地址迁移，安装包及二维码重新生成，资源迁移，数据库清空，及基础数据录入。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('71', '2017', '4', '22', '6', '44', '4', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('72', '2017', '4', '23', '7', '44', '4', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('73', '2017', '4', '24', '1', '45', '5', '格瑞雅居系统安装技术支持及配置，科委申报系统技术支持。\r\n', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('74', '2017', '4', '25', '2', '45', '5', '科委申报系统技术支持，卫计委项目系统修改bug。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('75', '2017', '4', '26', '3', '45', '5', '科委申报系统技术支持，卫计委项目系统修改bug。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('76', '2017', '4', '27', '4', '45', '5', '科委申报系统技术支持，卫计委项目系统修改bug，格瑞雅居系统预验收。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('77', '2017', '4', '28', '5', '45', '5', '格瑞雅居的一些工作，卫计委修改bug。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('78', '2017', '4', '29', '6', '45', '5', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('79', '2017', '4', '30', '7', '45', '5', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('80', '2017', '5', '1', '1', '46', '1', '五一假期休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('81', '2017', '5', '2', '2', '46', '1', '家里有事请假。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('82', '2017', '5', '3', '3', '46', '1', '科委申报系统技术支持，卫计委培训程序部署。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('83', '2017', '5', '4', '4', '46', '1', '与高雪交接格瑞雅居项目Admin模块，科委申报系统技术支持。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('84', '2017', '5', '5', '5', '46', '1', '与高雪交接格瑞雅居项目Admin模块，控制器和视图代码已经review结束，脚本代码还有部分需要review，接下来会过一遍高雪的关于该项目的交接文档。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('85', '2017', '5', '6', '6', '46', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('86', '2017', '5', '7', '7', '46', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('87', '2017', '5', '8', '1', '47', '2', '区卫计委项目北苑街道村居级用户培训，科委申报系统技术支持，科技周3D虚拟场馆系统修改整合。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('88', '2017', '5', '9', '2', '47', '2', '科技周3D虚拟场馆系统修改整合及部署方案，格瑞雅居系统与高雪工作交接，格瑞雅居脚本代码review。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('89', '2017', '5', '10', '3', '47', '2', '截至周三上午，格瑞雅居所有代码review结束，由于高雪交接文档整理未完。暂时先开始卫计委项目的交接，计划是先熟悉交接部分需求及操作文档，然后是代码，同时需要熟悉永濠部分交接文档。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('90', '2017', '5', '11', '4', '47', '2', '卫计委相关需求文档及操作文档研读，志晓哥的设计及架构文档，永濠的卫计委工作交接文档，系统部署后，晓刚的修改记录，下午代码review开始，科委申报系统技术支持，bug漏洞修复。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('91', '2017', '5', '12', '5', '47', '2', '科委申报系统技术支持，bug漏洞修复。协助田田配置物流基地做apache网络访问日志的每日备份，卫计委项目代码review。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('92', '2017', '5', '13', '6', '47', '2', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('93', '2017', '5', '14', '7', '47', '2', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('94', '2017', '5', '15', '1', '48', '3', '上午，卫计委公共卫生科卫计委系统培训，下午熟悉卫计委系统村居级功能模块及培训内容准备。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('95', '2017', '5', '16', '2', '48', '3', '上午熟悉卫计委系统村居级功能模块及培训内容准备，下午潞城镇村居级用户卫计委系统培训。\r\n', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('96', '2017', '5', '17', '3', '48', '3', '卫计委工作事项及公共卫生功能熟悉及代码review。科委申报系统技术支持。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('97', '2017', '5', '18', '4', '48', '3', '卫计委系统控制器代码review及数据库设计。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('98', '2017', '5', '19', '5', '48', '3', '卫计委系统控制器代码review及数据库设计。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('99', '2017', '5', '20', '6', '48', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('100', '2017', '5', '21', '7', '48', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('101', '2017', '5', '22', '1', '49', '4', '与高雪进行卫计委工作交接。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('102', '2017', '5', '23', '2', '49', '4', '卫计委工作交接，格瑞雅居验收前准备工作和验收软件演示。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('103', '2017', '5', '24', '3', '49', '4', '格瑞雅居公司内部预验收，物流园新需求“党建园地”功能模块前后台开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('104', '2017', '5', '25', '4', '49', '4', '科委申报系统修改方案及评估，技术支持，卫计委工作交接。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('105', '2017', '5', '26', '5', '49', '4', '卫计委工作交接，格瑞雅居项目阶段性验收和培训。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('106', '2017', '5', '27', '6', '49', '4', '科委申报系统技术支持，格瑞雅居代码完善更新，卫计委工作交接。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('107', '2017', '5', '28', '7', '49', '4', '端午假期，休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('108', '2017', '5', '29', '1', '50', '1', '端午节假期，休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('109', '2017', '5', '30', '2', '50', '1', '端午节假期，休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('110', '2017', '5', '31', '3', '50', '1', '卫计委项目工作交接，数据库文档完善，相关交接文档研读。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('111', '2017', '6', '1', '4', '50', '1', '卫计委项目工作交接，去石景山区老山街道居民服务大厅调研需求及取回设备。\r\n', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('112', '2017', '6', '2', '5', '50', '1', '石景山区老山街道居民服务大厅工作咨询系统功能开发，线上公网运行环境搭建，新模块目录搭建，卫生和计划生育及社会救助功能模块开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('113', '2017', '6', '3', '6', '50', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('114', '2017', '6', '4', '7', '50', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('115', '2017', '6', '5', '1', '51', '2', '卫计委项目交接，石景山区老山街道服务大厅触摸系统修改开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('116', '2017', '6', '6', '2', '51', '2', '石景山区老山街道服务大厅触摸系统修改开发。颐瑞西里便民系统后台自动添加分类结构功能开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('117', '2017', '6', '7', '3', '51', '2', '石景山区老山街道服务大厅触摸系统修改开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('118', '2017', '6', '8', '4', '51', '2', '石景山区老山街道服务大厅触摸系统修改开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('119', '2017', '6', '9', '5', '51', '2', '石景山区老山街道服务大厅触摸系统修改开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('120', '2017', '6', '10', '6', '51', '2', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('121', '2017', '6', '11', '7', '51', '2', '休息。\r\n', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('122', '2017', '6', '12', '1', '52', '3', '卫计委项目文件整理，老山街道项目文件整理。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('123', '2017', '6', '13', '2', '52', '3', '格瑞雅居系统接口修改。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('124', '2017', '6', '14', '3', '52', '3', '资源库下载功能开发，格瑞雅居系统接口修改。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('125', '2017', '6', '15', '4', '52', '3', '资源库下载功能开发，格瑞雅居系统接口修改。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('126', '2017', '6', '16', '5', '52', '3', '资源库系统资源下载，数据整理分析去重。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('127', '2017', '6', '17', '6', '52', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('128', '2017', '6', '18', '7', '52', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('129', '2017', '6', '19', '1', '53', '4', '资源库科普中国模块数据优化去重及数据重新分类。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('130', '2017', '6', '20', '2', '53', '4', '资源库科普中国数据重新分类，资源库数据按照中文分类整理资源并导出，迁移到251资源服务器。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('131', '2017', '6', '21', '3', '53', '4', '资源库对接触摸系统后台及集中控制系统后台，整体资源批量迁移功能设计构思，编写功能设计及开发方案。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('132', '2017', '6', '22', '4', '53', '4', '资源库系统迁移功能，迁移分类及迁移数据模块开发，及原来的资源内容模块修改。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('133', '2017', '6', '23', '5', '53', '4', '资源库系统迁移功能，迁移操作及迁移记录功能模块开发及各模块间功能调试。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('134', '2017', '6', '24', '6', '53', '4', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('135', '2017', '6', '25', '7', '53', '4', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('136', '2017', '6', '26', '1', '54', '5', '资源库系统资源批量迁移功能开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('137', '2017', '6', '27', '2', '54', '5', '资源库系统资源批量迁移功能开发，下午临时紧急任务，去科委修改科委官网系统。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('138', '2017', '6', '28', '3', '54', '5', '资源库系统资源批量迁移功能开发，格瑞雅居项目接口及新加模块开发。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('139', '2017', '6', '29', '4', '54', '5', '资源库系统批量迁移功能新需求开发，目标服务器连接配置等操作。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('140', '2017', '6', '30', '5', '54', '5', '资源库系统批量迁移功能新需求开发，目标服务器连接配置等操作。非局域网服务器FTP资源迁移功能开发，及服务器配置连接。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('141', '2017', '7', '1', '6', '54', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('142', '2017', '7', '2', '7', '54', '1', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('143', '2017', '7', '3', '1', '55', '2', '物流园监控系统问题网络排查，联系并远程协助海康威视维修系统。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('144', '2017', '7', '4', '2', '55', '2', '讨论研究物流园容灾备份及节点备份方案，了解双机热备架构方案。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('145', '2017', '7', '5', '3', '55', '2', '通州二院中医科收费系统项目的交接准备工作，及一些交接文档的研读。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('146', '2017', '7', '6', '4', '55', '2', '去延庆区进楼宇项目调试维修出错终端。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('147', '2017', '7', '7', '5', '55', '2', '通州二院中医科收费系统项目的交接文档的研读。研习最新的前端SPA框架技术。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('148', '2017', '7', '8', '6', '55', '2', '临时加班，10：30—14：00，讨论延庆集中控制系统客户端安全问题及解决方案。', '1', '3.5', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('149', '2017', '7', '9', '7', '55', '2', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('150', '2017', '7', '10', '1', '56', '3', '触摸屏安全启动，linux系统ubuntu kylin系统安装调试，安装tomcat及集中控制系统终端。晚上讨论触摸屏启动问题解决方案。17：30--19：30', '1', '2.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('151', '2017', '7', '11', '2', '56', '3', 'linux系统安装触摸系统环境及调试，解决开机启动及浏览器全屏功能，及隐藏开机图形界面探索。window系统开机跳过图形界面方案探索。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('152', '2017', '7', '12', '3', '56', '3', 'window系统，开机启动跳过资源管理器，桌面，启动项进程，隐藏开机及桌面图形化，注册表修改，启动服务器，终端系统软件，清除缓存脚本，编写。下午去梨园网格指挥中心进行格瑞雅居和颐瑞西里导向台培训。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('153', '2017', '7', '13', '4', '56', '3', '触摸系统启动跳过桌面图形化及服务启动，软件启动脚本开发，隐藏关键程序窗口，断点重启程序，脚本开发及使用说明编写。经信委官网系统需求文档查看，考察现有经信委官网后台管理及建站系统。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('154', '2017', '7', '14', '5', '56', '3', '上午，考察现有经信委官网后台管理及建站系统，整理书写建站初步的考察结果。下午有事请假。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('155', '2017', '7', '15', '6', '56', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('156', '2017', '7', '16', '7', '56', '3', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('157', '2017', '7', '17', '1', '57', '4', '格瑞雅居社区服务系统，手动化数据处理，实名认证，标准化数据，为验收和检查做准备。启动脚本终控上安装及测试。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('158', '2017', '7', '18', '2', '57', '4', '科委申报系统技术支持，中期调整报告导出文档模版修改。经信委官网后台熟悉使用，下午去梨园网格指挥中心为彩排汇报做驻场技术支持。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('159', '2017', '7', '19', '3', '57', '4', '经信委官网后台熟悉使用，下午去梨园指挥中心，为下午开会和汇报做驻场技术支持。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('160', '2017', '7', '20', '4', '57', '4', '协助王岩，进行梨园便民导向台服务系统项目的19块终控设备的程序安装。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('161', '2017', '7', '21', '5', '57', '4', '经信委官网后台熟悉使用，及开发方法，卫计委生产服务器环境及运行程序和服务进行排查测试。', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('162', '2017', '7', '22', '6', '57', '4', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('163', '2017', '7', '23', '7', '57', '4', '休息。', '0', '0.0', '1', '1');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('164', '2017', '7', '24', '1', '58', '5', '', '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('165', '2017', '7', '25', '2', '58', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('166', '2017', '7', '26', '3', '58', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('167', '2017', '7', '27', '4', '58', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('168', '2017', '7', '28', '5', '58', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('169', '2017', '7', '29', '6', '58', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('170', '2017', '7', '30', '7', '58', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('171', '2017', '7', '31', '1', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('172', '2017', '8', '1', '2', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('173', '2017', '8', '2', '3', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('174', '2017', '8', '3', '4', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('175', '2017', '8', '4', '5', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('176', '2017', '8', '5', '6', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('177', '2017', '8', '6', '7', '59', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('178', '1970', '1', '2', '5', '1', '1', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('179', '1970', '1', '3', '6', '1', '1', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('180', '1970', '1', '4', '7', '1', '1', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('181', '1970', '1', '5', '1', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('182', '1970', '1', '6', '2', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('183', '1970', '1', '7', '3', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('184', '1970', '1', '8', '4', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('185', '1970', '1', '9', '5', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('186', '1970', '1', '10', '6', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('187', '1970', '1', '11', '7', '2', '2', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('188', '1970', '1', '12', '1', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('189', '1970', '1', '13', '2', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('190', '1970', '1', '14', '3', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('191', '1970', '1', '15', '4', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('192', '1970', '1', '16', '5', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('193', '1970', '1', '17', '6', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('194', '1970', '1', '18', '7', '3', '3', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('195', '1970', '1', '19', '1', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('196', '1970', '1', '20', '2', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('197', '1970', '1', '21', '3', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('198', '1970', '1', '22', '4', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('199', '1970', '1', '23', '5', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('200', '1970', '1', '24', '6', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('201', '1970', '1', '25', '7', '4', '4', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('202', '1970', '1', '26', '1', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('203', '1970', '1', '27', '2', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('204', '1970', '1', '28', '3', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('205', '1970', '1', '29', '4', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('206', '1970', '1', '30', '5', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('207', '1970', '1', '31', '6', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('208', '1970', '2', '1', '7', '5', '5', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('209', '1970', '2', '2', '1', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('210', '1970', '2', '3', '2', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('211', '1970', '2', '4', '3', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('212', '1970', '2', '5', '4', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('213', '1970', '2', '6', '5', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('214', '1970', '2', '7', '6', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('215', '1970', '2', '8', '7', '6', '6', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('216', '1970', '2', '9', '1', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('217', '1970', '2', '10', '2', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('218', '1970', '2', '11', '3', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('219', '1970', '2', '12', '4', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('220', '1970', '2', '13', '5', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('221', '1970', '2', '14', '6', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('222', '1970', '2', '15', '7', '7', '7', null, '0', '0.0', '61', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('223', '2017', '8', '7', '1', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('224', '2017', '8', '8', '2', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('225', '2017', '8', '9', '3', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('226', '2017', '8', '10', '4', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('227', '2017', '8', '11', '5', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('228', '2017', '8', '12', '6', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('229', '2017', '8', '13', '7', '60', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('230', '2017', '8', '14', '1', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('231', '2017', '8', '15', '2', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('232', '2017', '8', '16', '3', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('233', '2017', '8', '17', '4', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('234', '2017', '8', '18', '5', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('235', '2017', '8', '19', '6', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('236', '2017', '8', '20', '7', '61', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('237', '2017', '8', '21', '1', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('238', '2017', '8', '22', '2', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('239', '2017', '8', '23', '3', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('240', '2017', '8', '24', '4', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('241', '2017', '8', '25', '5', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('242', '2017', '8', '26', '6', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('243', '2017', '8', '27', '7', '62', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('244', '2017', '8', '28', '1', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('245', '2017', '8', '29', '2', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('246', '2017', '8', '30', '3', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('247', '2017', '8', '31', '4', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('248', '2017', '9', '1', '5', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('249', '2017', '9', '2', '6', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('250', '2017', '9', '3', '7', '63', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('251', '2017', '9', '4', '1', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('252', '2017', '9', '5', '2', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('253', '2017', '9', '6', '3', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('254', '2017', '9', '7', '4', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('255', '2017', '9', '8', '5', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('256', '2017', '9', '9', '6', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('257', '2017', '9', '10', '7', '64', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('258', '2017', '9', '11', '1', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('259', '2017', '9', '12', '2', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('260', '2017', '9', '13', '3', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('261', '2017', '9', '14', '4', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('262', '2017', '9', '15', '5', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('263', '2017', '9', '16', '6', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('264', '2017', '9', '17', '7', '65', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('265', '2017', '9', '18', '1', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('266', '2017', '9', '19', '2', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('267', '2017', '9', '20', '3', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('268', '2017', '9', '21', '4', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('269', '2017', '9', '22', '5', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('270', '2017', '9', '23', '6', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('271', '2017', '9', '24', '7', '66', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('272', '2017', '9', '25', '1', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('273', '2017', '9', '26', '2', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('274', '2017', '9', '27', '3', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('275', '2017', '9', '28', '4', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('276', '2017', '9', '29', '5', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('277', '2017', '9', '30', '6', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('278', '2017', '10', '1', '7', '67', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('279', '2017', '10', '2', '1', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('280', '2017', '10', '3', '2', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('281', '2017', '10', '4', '3', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('282', '2017', '10', '5', '4', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('283', '2017', '10', '6', '5', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('284', '2017', '10', '7', '6', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('285', '2017', '10', '8', '7', '68', '10', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('286', '2017', '10', '9', '1', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('287', '2017', '10', '10', '2', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('288', '2017', '10', '11', '3', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('289', '2017', '10', '12', '4', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('290', '2017', '10', '13', '5', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('291', '2017', '10', '14', '6', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('292', '2017', '10', '15', '7', '69', '11', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('293', '2017', '10', '16', '1', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('294', '2017', '10', '17', '2', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('295', '2017', '10', '18', '3', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('296', '2017', '10', '19', '4', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('297', '2017', '10', '20', '5', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('298', '2017', '10', '21', '6', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('299', '2017', '10', '22', '7', '70', '12', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('300', '2017', '10', '23', '1', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('301', '2017', '10', '24', '2', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('302', '2017', '10', '25', '3', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('303', '2017', '10', '26', '4', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('304', '2017', '10', '27', '5', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('305', '2017', '10', '28', '6', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('306', '2017', '10', '29', '7', '71', '13', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('307', '2017', '10', '30', '1', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('308', '2017', '10', '31', '2', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('309', '2017', '11', '1', '3', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('310', '2017', '11', '2', '4', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('311', '2017', '11', '3', '5', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('312', '2017', '11', '4', '6', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('313', '2017', '11', '5', '7', '72', '1', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('314', '2017', '11', '6', '1', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('315', '2017', '11', '7', '2', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('316', '2017', '11', '8', '3', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('317', '2017', '11', '9', '4', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('318', '2017', '11', '10', '5', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('319', '2017', '11', '11', '6', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('320', '2017', '11', '12', '7', '73', '2', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('321', '2017', '11', '13', '1', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('322', '2017', '11', '14', '2', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('323', '2017', '11', '15', '3', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('324', '2017', '11', '16', '4', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('325', '2017', '11', '17', '5', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('326', '2017', '11', '18', '6', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('327', '2017', '11', '19', '7', '74', '3', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('328', '2017', '11', '20', '1', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('329', '2017', '11', '21', '2', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('330', '2017', '11', '22', '3', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('331', '2017', '11', '23', '4', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('332', '2017', '11', '24', '5', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('333', '2017', '11', '25', '6', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('334', '2017', '11', '26', '7', '75', '4', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('335', '2017', '11', '27', '1', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('336', '2017', '11', '28', '2', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('337', '2017', '11', '29', '3', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('338', '2017', '11', '30', '4', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('339', '2017', '12', '1', '5', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('340', '2017', '12', '2', '6', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('341', '2017', '12', '3', '7', '76', '5', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('342', '2017', '12', '4', '1', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('343', '2017', '12', '5', '2', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('344', '2017', '12', '6', '3', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('345', '2017', '12', '7', '4', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('346', '2017', '12', '8', '5', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('347', '2017', '12', '9', '6', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('348', '2017', '12', '10', '7', '77', '6', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('349', '2017', '12', '11', '1', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('350', '2017', '12', '12', '2', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('351', '2017', '12', '13', '3', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('352', '2017', '12', '14', '4', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('353', '2017', '12', '15', '5', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('354', '2017', '12', '16', '6', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('355', '2017', '12', '17', '7', '78', '7', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('356', '2017', '12', '18', '1', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('357', '2017', '12', '19', '2', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('358', '2017', '12', '20', '3', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('359', '2017', '12', '21', '4', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('360', '2017', '12', '22', '5', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('361', '2017', '12', '23', '6', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('362', '2017', '12', '24', '7', '79', '8', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('363', '2017', '12', '25', '1', '80', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('364', '2017', '12', '26', '2', '80', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('365', '2017', '12', '27', '3', '80', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('366', '2017', '12', '28', '4', '80', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('367', '2017', '12', '29', '5', '80', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('368', '2017', '12', '30', '6', '80', '9', null, '0', '0.0', '1', '0');
INSERT INTO `qs_wx_xhjj_work_log` VALUES ('369', '2017', '12', '31', '7', '80', '9', null, '0', '0.0', '1', '0');
