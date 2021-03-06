
CREATE DATABASE IF NOT EXISTS `qs_pm_db` DEFAULT CHARACTER SET utf8 @@@

USE `qs_pm_db`@@@


DROP TABLE IF EXISTS `qs_pm_project_cat`@@@

@@@


INSERT INTO `qs_pm_project_cat` VALUES ('1', 'qtxt', '其他系统', '', '0', '2017-04-01 15:33:03', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('2', 'jzkzxt', '集中控制系统', '', '0', '2017-04-01 15:33:19', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('3', 'ckxt', '触控系统', '', '0', '2017-04-01 15:34:02', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('12', 'oaxt', 'OA系统', '', '0', '2017-07-25 16:55:52', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('13', 'wxgzh', '微信公众号', '', '0', '2017-07-25 16:56:34', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('14', 'gfwz', '官网', '', '0', '2017-07-25 16:56:51', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('15', 'gxfbpt', '供需发布平台', '', '0', '2017-07-25 16:58:11', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('16', 'ypt', '云平台', '', '0', '2017-07-26 09:13:20', '1');
INSERT INTO `qs_pm_project_cat` VALUES ('17', 'app', 'app', '', '0', '2017-07-26 09:20:25', '1');


DROP TABLE IF EXISTS `qs_pm_project_info`@@@

@@@


INSERT INTO `qs_pm_project_info` VALUES ('6', '12', '1', '科委办公平台项目', '<p><img src="/ueditor/php/upload/image/20170726/1501035453948205.png" title="1501035453948205.png" alt="TIM截图20170726101705.png"/></p><p><br/></p><p><br/></p><p><br/></p>', '0', '2017-07-24 12:02:01', '2017-07-26 15:29:37', '北京市通州区科技委员会', 'http://222.128.67.79:8081/', 'http://192.168.1.143:8082/userCenter/admin/html/template/', '科委项目申报系统', '北京昂宇科技发展有限公司', '2016', '1');
INSERT INTO `qs_pm_project_info` VALUES ('5', '12', '1', '格瑞雅居社区老年居民健康安全智慧服务平台 ', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 格瑞雅居健康之家APP是一款集健康服务、便民服务、物业服务、社区服务于一体的智慧社区应用。用户可以通过APP实现查看个人健康体检信息，预定商品、购物，物业报修，险情上报，预约社区活动等。便捷多样的功能等待您的亲自体验。<br/></p>', '1', '2017-05-26 11:01:35', '2017-08-29 14:04:35', '北京市通州区梨园镇格瑞雅居社区', 'http://218.241.238.26:8082/index.php/Appm', 'http://218.241.238.26:8082/index.php/Admin/login/login.html', '', '北京千松科技发展有限公司', '2017', '0');
INSERT INTO `qs_pm_project_info` VALUES ('8', '12', '1', '物流园项目', '<p>&nbsp;公司服务器地址</p>', '0', '2017-07-24 15:50:07', '2017-08-29 14:04:50', '物流基地', 'http://192.168.1.234:8980/login.php', 'http://192.168.1.234:8980/login.php', '物流基地智能管理平台', '北京千松科技发展有限公司', '2016', '0');
INSERT INTO `qs_pm_project_info` VALUES ('9', '15', '1', '物流园项目', '', '0', '2017-07-24 15:51:13', '2017-08-29 14:04:59', '物流基地', 'http://xt.bjtzwl.com.cn:8070/', '', '企业协同共享系统', '北京千松科技发展有限公司', '2016', '0');
INSERT INTO `qs_pm_project_info` VALUES ('10', '14', '1', '物流园项目', '<p>&nbsp;物流基地官网</p>', '0', '2017-07-24 15:51:50', '2017-08-29 14:05:09', '物流基地', 'http://www.bjtzwl.com.cn/website/index.php/Home/index/index', 'http://www.bjtzwl.com.cn/center/html/view/template/', '官网', '北京千松科技发展有限公司', '2016', '0');
INSERT INTO `qs_pm_project_info` VALUES ('11', '3', '1', '颐瑞西里导向台', '<p>&nbsp;线上正式系统</p><p>服务器在梨园网格中心</p>', '0', '2017-07-25 16:39:57', '2017-08-29 14:05:31', '梨园镇', 'http://218.249.59.12/', 'http://218.249.59.12/admin', '', '北京千松科技发展有限公司', '2017', '0');
INSERT INTO `qs_pm_project_info` VALUES ('12', '3', '1', '北京第一中西医结合医院三分屏', '<p>&nbsp;公司服务器地址</p><p><br/></p><p>触控系统+集中控制系统</p>', '0', '2017-07-25 16:43:41', '2017-08-29 14:05:41', '北京第一中西医结合医院', 'http://192.168.1.179:9001/landscape/html/index/index.html?client=all', '', '', '北京千松科技发展有限公司', '2017', '0');
INSERT INTO `qs_pm_project_info` VALUES ('13', '3', '1', '潞河医院', '<p>&nbsp;公司服务器地址</p>', '0', '2017-07-25 16:44:26', '2017-08-29 14:05:50', '潞河医院', 'http://qs-jv-server:9007/landscape/html/index/index.html?client=all', '', '', '北京千松科技发展有限公司', '2015', '0');
INSERT INTO `qs_pm_project_info` VALUES ('14', '3', '72', '东直门医院东区', '<p>&nbsp;公司服务器地址</p>', '0', '2017-07-25 16:45:42', '2017-08-29 14:06:23', '东直门医院东区', 'http://qs-jv-server:9009/landscape/html/index/index.html?client=all', '', '', '北京千松科技发展有限公司', '2015', '0');
INSERT INTO `qs_pm_project_info` VALUES ('15', '3', '72', '老爷车博物馆', '<p>&nbsp;公司服务器地址</p>', '0', '2017-07-25 16:47:14', '2017-08-29 14:06:29', '老爷车博物馆', 'http://qs-jv-server:7002/website/html/index/', 'http://192.168.1.246:7002/center/html/view/template/index.html', '', '北京千松科技发展有限公司', '2015', '0');
INSERT INTO `qs_pm_project_info` VALUES ('16', '16', '72', '朝阳云平台', '', '0', '2017-07-26 09:14:21', '2017-08-29 14:06:33', '朝阳科协？', 'http://cykpzy.org/website/html/view/template/', '', '朝阳资源配送中心', '北京千松科技发展有限公司', '2015', '0');
INSERT INTO `qs_pm_project_info` VALUES ('17', '16', '72', '朝阳云平台', '<p>&nbsp;线上系统</p>', '0', '2017-07-26 09:17:37', '2017-08-29 14:06:36', '', 'http://cykp123.org/website/html/view/template/index.php', '', '朝阳导航', '北京千松科技发展有限公司', '2014', '0');
INSERT INTO `qs_pm_project_info` VALUES ('18', '3', '72', '朝阳云平台', '<p>&nbsp;暂无可访问地址</p>', '0', '2017-07-26 09:19:23', '2017-08-29 14:06:38', '', '', '', '互动查询系统', '北京千松科技发展有限公司', '2014', '0');
INSERT INTO `qs_pm_project_info` VALUES ('19', '17', '72', '西城云平台', '<p>&nbsp;网页版app</p>', '0', '2017-07-26 09:20:06', '2017-08-29 14:06:42', '', '', '', '西城app', '北京千松科技发展有限公司', '2014', '0');
INSERT INTO `qs_pm_project_info` VALUES ('21', '12', '74', '通州区基层卫生计生信息系统', '<p>&nbsp;公司测试服务器</p>', '0', '2017-08-04 12:02:10', '2017-08-29 09:53:49', '通州区卫计委', 'http://192.168.1.236:8085/index.php/home', 'http://192.168.1.236:8085/index.php/admin', '', '北京千松科技发展有限公司', '2016', '1');
INSERT INTO `qs_pm_project_info` VALUES ('22', '1', '61', '经信委系统', '<p>测试服务器</p><p><br/></p><p>用户名：super</p><p><br/></p><p>密码：123</p><p><br/></p><p>外网访问&nbsp; http://111.204.78.45:9001</p>', '0', '2017-08-10 17:20:08', '2017-08-18 08:58:21', '北京通州区经信委', 'http://192.168.1.236:9001', 'http://192.168.1.236:9001/admin', '通州时讯电子在线报刊', '东运通', '2017', '1');
INSERT INTO `qs_pm_project_info` VALUES ('23', '13', '74', '经信委系统', '<p>微信公众号管理系统</p><p><br/></p><p>公众号登录：1658256912@qq.com</p><p><br/></p><p>密码：jxw69546276<br/></p><p><br/></p>', '0', '2017-08-29 09:46:36', '2017-08-31 15:32:34', '北京市通州区经信委', 'http://yqwx.qmtkpsc.com/jxwwx/website/html/view/template/', 'http://yqwx.qmtkpsc.com/jxwwx/index.php?m=admin', '经信委微信公众号', '北京千松科技发展有限公司', '2017', '0');
INSERT INTO `qs_pm_project_info` VALUES ('24', '14', '74', '经信委系统', '<p>静态演示页面<br/></p>', '0', '2017-08-29 09:53:28', '2017-08-29 09:53:28', '北京市通州区经信委', 'http://111.204.78.46:9005/jxw/index.html', '', '经信委官网', '北京千松科技发展有限公司', '2017', '1');


DROP TABLE IF EXISTS `qs_pm_sys_action_log`@@@

@@@


INSERT INTO `qs_pm_sys_action_log` VALUES ('1', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:10:17');
INSERT INTO `qs_pm_sys_action_log` VALUES ('2', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:10:26');
INSERT INTO `qs_pm_sys_action_log` VALUES ('3', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:11:17');
INSERT INTO `qs_pm_sys_action_log` VALUES ('4', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:11:27');
INSERT INTO `qs_pm_sys_action_log` VALUES ('5', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-24 14:19:57');
INSERT INTO `qs_pm_sys_action_log` VALUES ('6', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2017-07-24 14:23:47');
INSERT INTO `qs_pm_sys_action_log` VALUES ('7', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:24:29');
INSERT INTO `qs_pm_sys_action_log` VALUES ('8', '任青柳', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:24:40');
INSERT INTO `qs_pm_sys_action_log` VALUES ('9', '任青柳', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:25:18');
INSERT INTO `qs_pm_sys_action_log` VALUES ('10', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:25:26');
INSERT INTO `qs_pm_sys_action_log` VALUES ('11', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:26:48');
INSERT INTO `qs_pm_sys_action_log` VALUES ('12', '任青柳', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:26:55');
INSERT INTO `qs_pm_sys_action_log` VALUES ('13', '任青柳', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:27:49');
INSERT INTO `qs_pm_sys_action_log` VALUES ('14', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:27:57');
INSERT INTO `qs_pm_sys_action_log` VALUES ('15', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:30:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('16', '任青柳', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:30:46');
INSERT INTO `qs_pm_sys_action_log` VALUES ('17', '任青柳', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2017-07-24 14:33:11');
INSERT INTO `qs_pm_sys_action_log` VALUES ('18', '任青柳', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:33:25');
INSERT INTO `qs_pm_sys_action_log` VALUES ('19', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:33:33');
INSERT INTO `qs_pm_sys_action_log` VALUES ('20', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:34:02');
INSERT INTO `qs_pm_sys_action_log` VALUES ('21', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:35:01');
INSERT INTO `qs_pm_sys_action_log` VALUES ('22', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:35:09');
INSERT INTO `qs_pm_sys_action_log` VALUES ('23', '任青柳', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:35:18');
INSERT INTO `qs_pm_sys_action_log` VALUES ('24', '任青柳', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:38:41');
INSERT INTO `qs_pm_sys_action_log` VALUES ('25', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:38:50');
INSERT INTO `qs_pm_sys_action_log` VALUES ('26', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2017-07-24 14:43:29');
INSERT INTO `qs_pm_sys_action_log` VALUES ('27', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:44:21');
INSERT INTO `qs_pm_sys_action_log` VALUES ('28', '张晓炜', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:44:28');
INSERT INTO `qs_pm_sys_action_log` VALUES ('29', '张晓炜', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:44:55');
INSERT INTO `qs_pm_sys_action_log` VALUES ('30', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-24 14:45:08');
INSERT INTO `qs_pm_sys_action_log` VALUES ('31', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-24 14:51:56');
INSERT INTO `qs_pm_sys_action_log` VALUES ('32', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-24 14:52:25');
INSERT INTO `qs_pm_sys_action_log` VALUES ('33', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-07-24 14:59:21');
INSERT INTO `qs_pm_sys_action_log` VALUES ('34', '任青柳', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '192.168.1.20', '2017-07-24 15:06:45');
INSERT INTO `qs_pm_sys_action_log` VALUES ('35', '任青柳', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '192.168.1.20', '2017-07-24 15:06:54');
INSERT INTO `qs_pm_sys_action_log` VALUES ('36', '任青柳', 'login', 'logout', '退出系统', '192.168.1.20', '2017-07-24 15:06:57');
INSERT INTO `qs_pm_sys_action_log` VALUES ('37', '张', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-24 15:07:07');
INSERT INTO `qs_pm_sys_action_log` VALUES ('38', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-24 15:11:12');
INSERT INTO `qs_pm_sys_action_log` VALUES ('39', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-24 15:13:05');
INSERT INTO `qs_pm_sys_action_log` VALUES ('40', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-24 15:22:04');
INSERT INTO `qs_pm_sys_action_log` VALUES ('41', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-24 15:22:13');
INSERT INTO `qs_pm_sys_action_log` VALUES ('42', '管理员', 'ProjectInfo', 'delArrayInfo', '删除项目信息', '0.0.0.0', '2017-07-24 15:22:19');
INSERT INTO `qs_pm_sys_action_log` VALUES ('43', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-24 15:24:55');
INSERT INTO `qs_pm_sys_action_log` VALUES ('44', '张', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-24 15:25:11');
INSERT INTO `qs_pm_sys_action_log` VALUES ('45', '张', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-24 15:25:31');
INSERT INTO `qs_pm_sys_action_log` VALUES ('46', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-24 15:25:40');
INSERT INTO `qs_pm_sys_action_log` VALUES ('47', '张', 'login', 'logout', '退出系统', '192.168.1.20', '2017-07-24 15:46:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('48', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-24 15:46:52');
INSERT INTO `qs_pm_sys_action_log` VALUES ('49', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-24 15:50:07');
INSERT INTO `qs_pm_sys_action_log` VALUES ('50', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-24 15:51:13');
INSERT INTO `qs_pm_sys_action_log` VALUES ('51', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-24 15:51:50');
INSERT INTO `qs_pm_sys_action_log` VALUES ('52', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-25 08:45:08');
INSERT INTO `qs_pm_sys_action_log` VALUES ('53', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 08:51:42');
INSERT INTO `qs_pm_sys_action_log` VALUES ('54', '任青柳', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-25 08:51:55');
INSERT INTO `qs_pm_sys_action_log` VALUES ('55', '任青柳', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 08:52:35');
INSERT INTO `qs_pm_sys_action_log` VALUES ('56', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-25 08:54:08');
INSERT INTO `qs_pm_sys_action_log` VALUES ('57', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-25 09:00:43');
INSERT INTO `qs_pm_sys_action_log` VALUES ('58', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 15:08:00');
INSERT INTO `qs_pm_sys_action_log` VALUES ('59', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-25 16:37:00');
INSERT INTO `qs_pm_sys_action_log` VALUES ('60', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:39:57');
INSERT INTO `qs_pm_sys_action_log` VALUES ('61', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-25 16:42:48');
INSERT INTO `qs_pm_sys_action_log` VALUES ('62', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:43:41');
INSERT INTO `qs_pm_sys_action_log` VALUES ('63', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:44:26');
INSERT INTO `qs_pm_sys_action_log` VALUES ('64', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:45:42');
INSERT INTO `qs_pm_sys_action_log` VALUES ('65', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:47:14');
INSERT INTO `qs_pm_sys_action_log` VALUES ('66', '任青柳', 'login', 'logout', '退出系统', '192.168.1.20', '2017-07-25 16:49:07');
INSERT INTO `qs_pm_sys_action_log` VALUES ('67', '来宾', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-25 16:49:19');
INSERT INTO `qs_pm_sys_action_log` VALUES ('68', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 16:53:27');
INSERT INTO `qs_pm_sys_action_log` VALUES ('69', '任青柳', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-25 16:53:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('70', '来宾', 'login', 'logout', '退出系统', '192.168.1.20', '2017-07-25 16:53:58');
INSERT INTO `qs_pm_sys_action_log` VALUES ('71', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-25 16:54:13');
INSERT INTO `qs_pm_sys_action_log` VALUES ('72', '任青柳', 'ProjectCat', 'saveProjectCat', '添加/编辑项目分类', '0.0.0.0', '2017-07-25 16:55:52');
INSERT INTO `qs_pm_sys_action_log` VALUES ('73', '任青柳', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 16:56:30');
INSERT INTO `qs_pm_sys_action_log` VALUES ('74', '任青柳', 'ProjectCat', 'saveProjectCat', '添加/编辑项目分类', '192.168.1.20', '2017-07-25 16:56:34');
INSERT INTO `qs_pm_sys_action_log` VALUES ('75', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-25 16:56:38');
INSERT INTO `qs_pm_sys_action_log` VALUES ('76', '任青柳', 'ProjectCat', 'saveProjectCat', '添加/编辑项目分类', '192.168.1.20', '2017-07-25 16:56:51');
INSERT INTO `qs_pm_sys_action_log` VALUES ('77', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:57:22');
INSERT INTO `qs_pm_sys_action_log` VALUES ('78', '任青柳', 'ProjectCat', 'saveProjectCat', '添加/编辑项目分类', '192.168.1.20', '2017-07-25 16:58:11');
INSERT INTO `qs_pm_sys_action_log` VALUES ('79', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:58:42');
INSERT INTO `qs_pm_sys_action_log` VALUES ('80', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:59:02');
INSERT INTO `qs_pm_sys_action_log` VALUES ('81', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:59:23');
INSERT INTO `qs_pm_sys_action_log` VALUES ('82', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-25 16:59:38');
INSERT INTO `qs_pm_sys_action_log` VALUES ('83', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-25 16:59:44');
INSERT INTO `qs_pm_sys_action_log` VALUES ('84', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-25 16:59:59');
INSERT INTO `qs_pm_sys_action_log` VALUES ('85', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 17:00:24');
INSERT INTO `qs_pm_sys_action_log` VALUES ('86', '张晓炜', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-25 17:05:26');
INSERT INTO `qs_pm_sys_action_log` VALUES ('87', '张晓炜', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-07-25 17:05:43');
INSERT INTO `qs_pm_sys_action_log` VALUES ('88', '张晓炜', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-25 17:06:39');
INSERT INTO `qs_pm_sys_action_log` VALUES ('89', '任青柳', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '192.168.1.20', '2017-07-25 17:07:28');
INSERT INTO `qs_pm_sys_action_log` VALUES ('90', '任青柳', 'login', 'logout', '退出系统', '192.168.1.20', '2017-07-25 17:09:48');
INSERT INTO `qs_pm_sys_action_log` VALUES ('91', '系统访问用户', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-25 17:09:57');
INSERT INTO `qs_pm_sys_action_log` VALUES ('92', '系统访问用户', 'login', 'logout', '退出系统', '192.168.1.20', '2017-07-25 17:10:04');
INSERT INTO `qs_pm_sys_action_log` VALUES ('93', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-25 17:10:10');
INSERT INTO `qs_pm_sys_action_log` VALUES ('94', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-07-26 08:58:24');
INSERT INTO `qs_pm_sys_action_log` VALUES ('95', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-26 09:08:01');
INSERT INTO `qs_pm_sys_action_log` VALUES ('96', '任青柳', 'ProjectCat', 'saveProjectCat', '添加/编辑项目分类', '192.168.1.20', '2017-07-26 09:13:20');
INSERT INTO `qs_pm_sys_action_log` VALUES ('97', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-26 09:14:21');
INSERT INTO `qs_pm_sys_action_log` VALUES ('98', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-26 09:17:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('99', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-26 09:19:23');
INSERT INTO `qs_pm_sys_action_log` VALUES ('100', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-26 09:20:06');
INSERT INTO `qs_pm_sys_action_log` VALUES ('101', '任青柳', 'ProjectCat', 'saveProjectCat', '添加/编辑项目分类', '192.168.1.20', '2017-07-26 09:20:25');
INSERT INTO `qs_pm_sys_action_log` VALUES ('102', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.1.20', '2017-07-26 09:20:38');
INSERT INTO `qs_pm_sys_action_log` VALUES ('103', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 09:27:46');
INSERT INTO `qs_pm_sys_action_log` VALUES ('104', '管理员', 'ProjectInfo', 'delArrayInfo', '删除项目信息', '127.0.0.1', '2017-07-26 09:28:23');
INSERT INTO `qs_pm_sys_action_log` VALUES ('105', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 09:38:34');
INSERT INTO `qs_pm_sys_action_log` VALUES ('106', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:04:27');
INSERT INTO `qs_pm_sys_action_log` VALUES ('107', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:17:35');
INSERT INTO `qs_pm_sys_action_log` VALUES ('108', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:17:59');
INSERT INTO `qs_pm_sys_action_log` VALUES ('109', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:19:30');
INSERT INTO `qs_pm_sys_action_log` VALUES ('110', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:19:35');
INSERT INTO `qs_pm_sys_action_log` VALUES ('111', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:19:44');
INSERT INTO `qs_pm_sys_action_log` VALUES ('112', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:19:51');
INSERT INTO `qs_pm_sys_action_log` VALUES ('113', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:27:45');
INSERT INTO `qs_pm_sys_action_log` VALUES ('114', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 10:27:54');
INSERT INTO `qs_pm_sys_action_log` VALUES ('115', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 15:29:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('116', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-07-26 15:41:31');
INSERT INTO `qs_pm_sys_action_log` VALUES ('117', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-27 11:25:10');
INSERT INTO `qs_pm_sys_action_log` VALUES ('118', '张晓炜', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-27 11:25:18');
INSERT INTO `qs_pm_sys_action_log` VALUES ('119', '张晓炜', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-27 11:25:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('120', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-27 11:25:44');
INSERT INTO `qs_pm_sys_action_log` VALUES ('121', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-07-27 13:10:05');
INSERT INTO `qs_pm_sys_action_log` VALUES ('122', '系统访问用户', 'login', 'loginSys', '登录系统', '192.168.1.20', '2017-07-27 16:13:05');
INSERT INTO `qs_pm_sys_action_log` VALUES ('123', '系统访问用户', 'login', 'loginSys', '登录系统', '192.168.1.198', '2017-07-27 16:24:06');
INSERT INTO `qs_pm_sys_action_log` VALUES ('124', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-07-28 15:51:07');
INSERT INTO `qs_pm_sys_action_log` VALUES ('125', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-02 13:26:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('126', '管理员', 'login', 'loginSys', '登录系统', '192.168.2.120', '2017-08-04 11:33:09');
INSERT INTO `qs_pm_sys_action_log` VALUES ('127', '任青柳', 'login', 'loginSys', '登录系统', '192.168.2.221', '2017-08-04 11:50:04');
INSERT INTO `qs_pm_sys_action_log` VALUES ('128', '任青柳', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '192.168.2.221', '2017-08-04 12:02:10');
INSERT INTO `qs_pm_sys_action_log` VALUES ('129', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-07 09:19:55');
INSERT INTO `qs_pm_sys_action_log` VALUES ('130', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-07 09:20:17');
INSERT INTO `qs_pm_sys_action_log` VALUES ('131', '区卫计委主任', 'login', 'logout', '退出系统', '0.0.0.0', '2017-08-09 09:06:25');
INSERT INTO `qs_pm_sys_action_log` VALUES ('132', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-09 09:06:35');
INSERT INTO `qs_pm_sys_action_log` VALUES ('133', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-09 09:07:15');
INSERT INTO `qs_pm_sys_action_log` VALUES ('134', '区卫计委主任', 'login', 'logout', '退出系统', '0.0.0.0', '2017-08-10 08:49:20');
INSERT INTO `qs_pm_sys_action_log` VALUES ('135', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-10 08:49:28');
INSERT INTO `qs_pm_sys_action_log` VALUES ('136', '管理员', 'login', 'logout', '退出系统', '0.0.0.0', '2017-08-10 08:49:46');
INSERT INTO `qs_pm_sys_action_log` VALUES ('137', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-10 08:51:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('138', '区卫计委主任', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-10 17:20:08');
INSERT INTO `qs_pm_sys_action_log` VALUES ('139', '区卫计委主任', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-10 17:22:21');
INSERT INTO `qs_pm_sys_action_log` VALUES ('140', '计划生育科科员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-18 08:58:21');
INSERT INTO `qs_pm_sys_action_log` VALUES ('141', '计划生育科科长', 'login', 'logout', '退出系统', '0.0.0.0', '2017-08-18 09:23:07');
INSERT INTO `qs_pm_sys_action_log` VALUES ('142', '张晓炜', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-08-29 09:43:39');
INSERT INTO `qs_pm_sys_action_log` VALUES ('143', '张晓炜', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-29 09:46:36');
INSERT INTO `qs_pm_sys_action_log` VALUES ('144', '张晓炜', 'login', 'logout', '退出系统', '127.0.0.1', '2017-08-29 09:47:45');
INSERT INTO `qs_pm_sys_action_log` VALUES ('145', '张晓炜', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-08-29 09:48:27');
INSERT INTO `qs_pm_sys_action_log` VALUES ('146', '张晓炜', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-29 09:51:34');
INSERT INTO `qs_pm_sys_action_log` VALUES ('147', '张晓炜', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-29 09:53:28');
INSERT INTO `qs_pm_sys_action_log` VALUES ('148', '张晓炜', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '127.0.0.1', '2017-08-29 09:53:49');
INSERT INTO `qs_pm_sys_action_log` VALUES ('149', '张晓炜', 'login', 'logout', '退出系统', '127.0.0.1', '2017-08-29 09:54:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('150', '管理员', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-08-29 09:54:45');
INSERT INTO `qs_pm_sys_action_log` VALUES ('151', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '127.0.0.1', '2017-08-29 09:55:34');
INSERT INTO `qs_pm_sys_action_log` VALUES ('152', '管理员', 'login', 'logout', '退出系统', '127.0.0.1', '2017-08-29 09:56:10');
INSERT INTO `qs_pm_sys_action_log` VALUES ('153', '都林', 'login', 'loginSys', '登录系统', '127.0.0.1', '2017-08-29 09:56:17');
INSERT INTO `qs_pm_sys_action_log` VALUES ('154', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.129', '2017-08-29 10:08:24');
INSERT INTO `qs_pm_sys_action_log` VALUES ('155', '管理员', 'login', 'logout', '退出系统', '192.168.1.129', '2017-08-29 10:08:42');
INSERT INTO `qs_pm_sys_action_log` VALUES ('156', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-29 14:02:47');
INSERT INTO `qs_pm_sys_action_log` VALUES ('157', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:04:35');
INSERT INTO `qs_pm_sys_action_log` VALUES ('158', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:04:50');
INSERT INTO `qs_pm_sys_action_log` VALUES ('159', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:04:59');
INSERT INTO `qs_pm_sys_action_log` VALUES ('160', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:05:09');
INSERT INTO `qs_pm_sys_action_log` VALUES ('161', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:05:31');
INSERT INTO `qs_pm_sys_action_log` VALUES ('162', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:05:41');
INSERT INTO `qs_pm_sys_action_log` VALUES ('163', '管理员', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-29 14:05:50');
INSERT INTO `qs_pm_sys_action_log` VALUES ('164', '张晓炜', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-08-31 13:23:43');
INSERT INTO `qs_pm_sys_action_log` VALUES ('165', '张晓炜', 'ProjectInfo', 'saveProjectInfo', '添加/编辑项目信息', '0.0.0.0', '2017-08-31 15:32:34');
INSERT INTO `qs_pm_sys_action_log` VALUES ('166', '张晓炜', 'login', 'logout', '退出系统', '0.0.0.0', '2017-08-31 15:37:37');
INSERT INTO `qs_pm_sys_action_log` VALUES ('167', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.100', '2017-08-31 15:40:06');
INSERT INTO `qs_pm_sys_action_log` VALUES ('168', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-09-04 11:11:09');
INSERT INTO `qs_pm_sys_action_log` VALUES ('169', '任青柳', 'login', 'loginSys', '登录系统', '192.168.1.100', '2017-09-06 09:46:01');
INSERT INTO `qs_pm_sys_action_log` VALUES ('170', '任青柳', 'login', 'logout', '退出系统', '192.168.1.100', '2017-09-06 09:46:35');
INSERT INTO `qs_pm_sys_action_log` VALUES ('171', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.100', '2017-09-06 09:46:48');
INSERT INTO `qs_pm_sys_action_log` VALUES ('172', '管理员', 'login', 'loginSys', '登录系统', '192.168.1.73', '2017-09-06 09:47:00');
INSERT INTO `qs_pm_sys_action_log` VALUES ('173', '管理员', 'SysUserInfo', 'saveUserInfo', '添加/编辑用户信息', '192.168.1.100', '2017-09-06 09:47:57');
INSERT INTO `qs_pm_sys_action_log` VALUES ('174', '管理员', 'login', 'logout', '退出系统', '192.168.1.73', '2017-09-06 09:49:03');
INSERT INTO `qs_pm_sys_action_log` VALUES ('175', '赵晓刚', 'login', 'loginSys', '登录系统', '192.168.1.73', '2017-09-06 09:49:23');
INSERT INTO `qs_pm_sys_action_log` VALUES ('176', '管理员', 'login', 'loginSys', '登录系统', '0.0.0.0', '2017-09-06 10:04:24');


DROP TABLE IF EXISTS `qs_pm_sys_all_attach`@@@

@@@


INSERT INTO `qs_pm_sys_all_attach` VALUES ('148', 'activity', '1', 'Public/Upload/activity/2017-04-21/58f9d1ba87922.jpg', '10856797.jpg', 'jpg', '244555');
INSERT INTO `qs_pm_sys_all_attach` VALUES ('149', 'activity', '2', 'Public/Upload/activity/2017-04-21/58f9d1dcf146b.jpg', '10856798.jpg', 'jpg', '167945');
INSERT INTO `qs_pm_sys_all_attach` VALUES ('150', 'activity', '3', 'Public/Upload/activity/2017-04-21/58f9d1f43f9f7.jpg', '10856799.jpg', 'jpg', '191036');
INSERT INTO `qs_pm_sys_all_attach` VALUES ('151', 'activity', '4', 'Public/Upload/activity/2017-04-21/58f9d20bdc727.jpg', '14345487.jpg', 'jpg', '144067');
INSERT INTO `qs_pm_sys_all_attach` VALUES ('152', 'activity', '5', 'Public/Upload/activity/2017-04-21/58f9d3536ec36.jpg', '10856799.jpg', 'jpg', '191036');
INSERT INTO `qs_pm_sys_all_attach` VALUES ('153', 'activity', '6', 'Public/Upload/activity/2017-04-21/58f9d3d6deb4d.jpg', '14658486.jpg', 'jpg', '78491');
INSERT INTO `qs_pm_sys_all_attach` VALUES ('154', 'activity', '6', 'Public/Upload/activity/2017-04-21/58f9d3d919b72.jpg', '14658487.jpg', 'jpg', '83422');


DROP TABLE IF EXISTS `qs_pm_sys_config_def`@@@

@@@


INSERT INTO `qs_pm_sys_config_def` VALUES ('2', 'system_name', 'system_name', '软件开发部-管理系统');


DROP TABLE IF EXISTS `qs_pm_sys_db_backup`@@@

@@@


INSERT INTO `qs_pm_sys_db_backup` VALUES ('1', 'D:/NewServer/wwwroot/qs_pm/gryj/Public/admin/db_backup/', 'qs_pm_db-20170424-151850.sql', '2017-04-24 15:18:50');


DROP TABLE IF EXISTS `qs_pm_sys_priv_cat`@@@

@@@


INSERT INTO `qs_pm_sys_priv_cat` VALUES ('2', 'project', '项目管理', '', '0', '2017-03-17 11:36:09', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('33', 'worklogMenu', '工作记录', '', '0', '2017-07-27 11:22:25', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('34', 'showWorkLog', '周工作总结', '33.', '33', '2017-07-27 11:24:33', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('6', 'system', '系统设置', '', '0', '2017-03-21 09:54:09', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('7', 'projectCat', '项目分类', '2.', '2', '2017-03-21 09:54:39', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('8', 'projectInfo', '项目列表', '2.', '2', '2017-03-21 09:54:58', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('20', 'privCat', '权限分类', '6.', '6', '2017-03-29 13:03:52', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('21', 'privInfo', '权限信息', '6.', '6', '2017-03-29 13:04:12', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('22', 'userGroup', '用户组', '6.', '6', '2017-03-29 13:04:28', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('23', 'userInfo', '用户信息', '6.', '6', '2017-03-29 13:04:45', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('24', 'dbBack', '数据库', '6.', '6', '2017-03-29 13:05:03', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('25', 'actionLog', '系统日志', '6.', '6', '2017-03-29 13:05:21', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('26', 'menuSet', '菜单设置', '', '0', '2017-03-29 16:10:19', '1');
INSERT INTO `qs_pm_sys_priv_cat` VALUES ('27', 'menu', '菜单列表', '26.', '26', '2017-03-29 16:12:02', '1');


DROP TABLE IF EXISTS `qs_pm_sys_priv_info`@@@

@@@


INSERT INTO `qs_pm_sys_priv_info` VALUES ('2', '7', '新增分类', 'addProjectCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('3', '7', '编辑分类', 'editProjectCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('4', '8', '新增信息', 'addProjectInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('5', '8', '编辑信息', 'editProjectInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('6', '7', '删除分类', 'delProjectCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('7', '8', '删除信息', 'delProjectInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('9', '7', '查看分类', 'showProjectCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('10', '8', '查看信息', 'showProjectInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('52', '20', '新增分类', 'addPrivCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('53', '20', '编辑分类', 'editPrivCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('54', '20', '删除分类', 'delPrivCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('55', '20', '查看分类', 'showPrivCat');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('56', '21', '新增信息', 'addPrivInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('57', '21', '编辑信息', 'editPrivInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('58', '21', '删除信息', 'delPrivInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('59', '21', '查看信息', 'showPrivInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('60', '22', '新增信息', 'addUserGroup');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('61', '22', '编辑信息', 'editUserGroup');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('62', '22', '删除信息', 'delUserGroup');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('63', '22', '查看信息', 'showUserGroup');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('64', '23', '新增信息', 'addUserInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('65', '23', '编辑信息', 'editUserInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('66', '23', '删除信息', 'delUserInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('67', '23', '查看信息', 'showUserInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('68', '19', '发布信息', 'pubActivInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('69', '13', '查看信息', 'showOrderInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('70', '27', '项目管理', 'projectMenu');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('74', '27', '系统设置', 'systemMenu');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('83', '24', '查看备份', 'showDbInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('84', '25', '查看日志', 'showLogInfo');
INSERT INTO `qs_pm_sys_priv_info` VALUES ('85', '27', '工作记录', 'worklogMenu');


DROP TABLE IF EXISTS `qs_pm_sys_user_group`@@@

@@@


INSERT INTO `qs_pm_sys_user_group` VALUES ('3', 'PG', '研发人员', '', '0', '2017-03-30 13:37:28', 'addProjectInfo,editProjectInfo,delProjectInfo,showProjectInfo,projectMenu,', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('16', 'AE', '架构工程师', '', '0', '2017-07-24 14:39:49', 'addProjectCat,editProjectCat,delProjectCat,showProjectCat,addProjectInfo,editProjectInfo,delProjectInfo,showProjectInfo,projectMenu,', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('17', 'PJM', '项目经理', '', '0', '2017-03-30 13:37:28', 'addProjectInfo,editProjectInfo,delProjectInfo,showProjectInfo,projectMenu,', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('18', 'PDM', '产品经理', '', '0', '2017-03-30 13:37:28', 'addProjectInfo,editProjectInfo,showProjectInfo,projectMenu,', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('19', 'DM', '部门经理', '', '0', '2017-03-30 13:37:28', 'addProjectCat,editProjectCat,delProjectCat,showProjectCat,addProjectInfo,editProjectInfo,delProjectInfo,showProjectInfo,addUserInfo,editUserInfo,delUserInfo,showUserInfo,projectMenu,systemMenu,', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('20', 'sysAdmin', '系统管理员', '', '0', '2017-03-30 13:37:28', 'addProjectCat,editProjectCat,delProjectCat,showProjectCat,addProjectInfo,editProjectInfo,delProjectInfo,showProjectInfo,addPrivCat,editPrivCat,delPrivCat,showPrivCat,addPrivInfo,editPrivInfo,delPrivInfo,showPrivInfo,addUserGroup,editUserGroup,delUserGroup,showUserGroup,addUserInfo,editUserInfo,delUserInfo,showUserInfo,showDbInfo,showLogInfo,projectMenu,systemMenu,worklogMenu,', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('1', 'TE', '测试人员', '', '0', '2017-07-24 14:04:51', '', '1');
INSERT INTO `qs_pm_sys_user_group` VALUES ('2', 'UI', '设计人员', '', '0', '2017-07-24 14:06:26', '', '1');


DROP TABLE IF EXISTS `qs_pm_sys_user_info`@@@

@@@


INSERT INTO `qs_pm_sys_user_info` VALUES ('1', '20', 'super', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '管理员', '', '1573962958@qq.com', '', '', '', '2017-07-24 14:33:11', '0.0.0.0', '2017-09-06 10:04:24', '', '1', '496616', '0', '', '');
INSERT INTO `qs_pm_sys_user_info` VALUES ('72', '19', 'rql', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '任青柳', '', '', '', '', '', '2017-07-24 14:23:47', '192.168.1.100', '2017-09-06 09:46:01', '', '1', '', '0', '', '');
INSERT INTO `qs_pm_sys_user_info` VALUES ('74', '3', 'zxw', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '张晓炜', '', '1573962958@qq.com', '13521447599', '', '1573962958', '2017-07-24 14:43:29', '0.0.0.0', '2017-08-31 13:23:43', '', '1', '', '0', '北京通州区中仓街道西营前街43号楼662', '前端工程师');
INSERT INTO `qs_pm_sys_user_info` VALUES ('75', '2', 'guest', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '来宾', '', '', '', '', '', '2017-07-24 15:06:54', '192.168.1.20', '2017-07-25 16:49:18', 'showProjectCat,showProjectInfo,', '1', '', '0', '', '');
INSERT INTO `qs_pm_sys_user_info` VALUES ('76', '2', 'qskj', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '系统访问用户', '', '', '', '', '', '2017-07-25 17:07:27', '192.168.1.198', '2017-07-27 16:24:06', 'showProjectCat,showProjectInfo,', '1', '', '0', '', '');
INSERT INTO `qs_pm_sys_user_info` VALUES ('77', '18', 'dul', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '都林', '', '', '', '', '', '2017-08-29 09:55:34', '127.0.0.1', '2017-08-29 09:56:17', '', '1', '', '0', '', '');
INSERT INTO `qs_pm_sys_user_info` VALUES ('78', '3', 'zxg', '592d510020d3eacdc3d5c89e2e148f7467de3e82', '赵晓刚', '', '', '', '', '', '2017-09-06 09:47:56', '192.168.1.73', '2017-09-06 09:49:23', '', '1', '', '0', '', '');


DROP TABLE IF EXISTS `qs_pm_v_activity`@@@

@@@


