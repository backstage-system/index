/*
Navicat MySQL Data Transfer

Source Server         : 撒地方撒地方
Source Server Version : 50635
Source Host           : 47.93.223.13:3306
Source Database       : xm

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2017-10-13 15:45:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for my_ad
-- ----------------------------
DROP TABLE IF EXISTS `my_ad`;
CREATE TABLE `my_ad` (
  `ad_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '广告位置ID',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '广告类型',
  `ad_name` varchar(60) NOT NULL DEFAULT '' COMMENT '广告名称',
  `ad_link` varchar(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `ad_code` text NOT NULL COMMENT '图片地址',
  `start_time` int(11) NOT NULL DEFAULT '0' COMMENT '投放时间',
  `end_time` int(11) NOT NULL DEFAULT '0' COMMENT '结束时间',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '点击量',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `orderby` smallint(6) DEFAULT '50' COMMENT '排序',
  `target` tinyint(1) DEFAULT '0' COMMENT '是否开启浏览器新窗口',
  PRIMARY KEY (`ad_id`),
  KEY `enabled` (`enabled`),
  KEY `position_id` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_ad
-- ----------------------------

-- ----------------------------
-- Table structure for my_ad_position
-- ----------------------------
DROP TABLE IF EXISTS `my_ad_position`;
CREATE TABLE `my_ad_position` (
  `position_id` int(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `position_name` varchar(60) NOT NULL DEFAULT '' COMMENT '广告位置名称',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '广告位宽度',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '广告位高度',
  `position_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '广告描述',
  `position_style` text COMMENT '模板',
  `is_open` tinyint(1) DEFAULT '0' COMMENT '0关闭1开启',
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_ad_position
-- ----------------------------

-- ----------------------------
-- Table structure for my_admin_log
-- ----------------------------
DROP TABLE IF EXISTS `my_admin_log`;
CREATE TABLE `my_admin_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `adminid` int(11) unsigned NOT NULL COMMENT '管理员id',
  `username` varchar(255) NOT NULL COMMENT '管理员用户名',
  `operation` varchar(255) NOT NULL COMMENT '管理员操作信息',
  `type` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '操作类型：1-新增 2-修改 3-删除',
  `tablename` varchar(255) NOT NULL COMMENT '表名',
  `mark` varchar(255) NOT NULL COMMENT '备注',
  `client_ip` varchar(50) NOT NULL COMMENT '管理员操作时的ip地址',
  `district` varchar(255) NOT NULL DEFAULT '未知' COMMENT 'ip所在地',
  `create_time` int(11) unsigned NOT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COMMENT='管理员操作日志主表';

-- ----------------------------
-- Records of my_admin_log
-- ----------------------------
INSERT INTO `my_admin_log` VALUES ('1', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '122.234.247.120', '未知', '1500531577');
INSERT INTO `my_admin_log` VALUES ('2', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500793045');
INSERT INTO `my_admin_log` VALUES ('3', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500793195');
INSERT INTO `my_admin_log` VALUES ('4', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500793389');
INSERT INTO `my_admin_log` VALUES ('5', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500793817');
INSERT INTO `my_admin_log` VALUES ('6', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500793860');
INSERT INTO `my_admin_log` VALUES ('7', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500798774');
INSERT INTO `my_admin_log` VALUES ('8', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500800016');
INSERT INTO `my_admin_log` VALUES ('9', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500800976');
INSERT INTO `my_admin_log` VALUES ('10', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500823721');
INSERT INTO `my_admin_log` VALUES ('11', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500826148');
INSERT INTO `my_admin_log` VALUES ('12', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500827024');
INSERT INTO `my_admin_log` VALUES ('13', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500827245');
INSERT INTO `my_admin_log` VALUES ('14', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500827665');
INSERT INTO `my_admin_log` VALUES ('15', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500827691');
INSERT INTO `my_admin_log` VALUES ('16', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500827716');
INSERT INTO `my_admin_log` VALUES ('17', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '119.98.79.91', '未知', '1500858300');
INSERT INTO `my_admin_log` VALUES ('18', '94', 'admin', '添加管理员', '1', 'Admin_users', '', '119.98.79.91', '未知', '1500858675');
INSERT INTO `my_admin_log` VALUES ('19', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500905843');
INSERT INTO `my_admin_log` VALUES ('20', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500905989');
INSERT INTO `my_admin_log` VALUES ('21', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500906011');
INSERT INTO `my_admin_log` VALUES ('22', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500906038');
INSERT INTO `my_admin_log` VALUES ('23', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500906392');
INSERT INTO `my_admin_log` VALUES ('24', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500907369');
INSERT INTO `my_admin_log` VALUES ('25', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '117.151.49.189', '未知', '1500912362');
INSERT INTO `my_admin_log` VALUES ('26', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500914792');
INSERT INTO `my_admin_log` VALUES ('27', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500914828');
INSERT INTO `my_admin_log` VALUES ('28', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500914946');
INSERT INTO `my_admin_log` VALUES ('29', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500915298');
INSERT INTO `my_admin_log` VALUES ('30', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500915459');
INSERT INTO `my_admin_log` VALUES ('31', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500915513');
INSERT INTO `my_admin_log` VALUES ('32', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '127.0.0.1', '未知', '1500915628');
INSERT INTO `my_admin_log` VALUES ('33', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '117.151.49.189', '未知', '1500915726');
INSERT INTO `my_admin_log` VALUES ('34', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '117.151.49.189', '未知', '1500915734');
INSERT INTO `my_admin_log` VALUES ('35', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '117.151.49.189', '未知', '1500915752');
INSERT INTO `my_admin_log` VALUES ('36', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '117.151.49.189', '未知', '1500915768');
INSERT INTO `my_admin_log` VALUES ('37', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '117.151.49.189', '未知', '1500915795');
INSERT INTO `my_admin_log` VALUES ('38', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '111.172.10.252', '未知', '1500943793');
INSERT INTO `my_admin_log` VALUES ('39', '94', 'admin', '更新管理员', '1', 'Admin_users', '', '111.172.10.252', '未知', '1500943809');
INSERT INTO `my_admin_log` VALUES ('40', '94', 'admin', '更新管理员', '2', 'Admin_users', '', '127.0.0.1', '未知', '1500993929');
INSERT INTO `my_admin_log` VALUES ('41', '1', 'admin', '更新管理员', '2', 'Admin_users', '', '111.172.10.252', '中国-湖北-武汉', '1501030893');
INSERT INTO `my_admin_log` VALUES ('42', '1', 'admin', '删除管理员', '3', 'Admin_users', '', '111.172.10.252', '中国-湖北-武汉', '1501030999');
INSERT INTO `my_admin_log` VALUES ('43', '94', 'admin', '删除产品分类', '3', 'cate', '', '127.0.0.1', '未知', '1501055760');
INSERT INTO `my_admin_log` VALUES ('44', '1', 'admin', '添加管理员', '1', 'Admin_users', '', '192.168.1.125', '未知', '1502074890');
INSERT INTO `my_admin_log` VALUES ('45', '2', '方细俊', '删除管理员', '3', 'Admin_users', '', '192.168.1.125', '未知', '1502076150');
INSERT INTO `my_admin_log` VALUES ('46', '2', '方细俊', '添加管理员', '1', 'Admin_users', '', '192.168.1.125', '未知', '1502076175');
INSERT INTO `my_admin_log` VALUES ('47', '2', '方细俊', '删除管理员', '3', 'Admin_users', '', '192.168.1.125', '未知', '1502076249');
INSERT INTO `my_admin_log` VALUES ('48', '2', '方细俊', '添加管理员', '1', 'Admin_users', '', '192.168.1.125', '未知', '1502076548');
INSERT INTO `my_admin_log` VALUES ('49', '2', '方细俊', '删除管理员', '3', 'Admin_users', '', '192.168.1.125', '未知', '1502076558');
INSERT INTO `my_admin_log` VALUES ('50', '2', '方细俊', '更新管理员', '2', 'Admin_users', '', '192.168.1.125', '未知', '1502077014');
INSERT INTO `my_admin_log` VALUES ('51', '2', '方细俊', '更新管理员', '2', 'Admin_users', '', '192.168.1.125', '未知', '1502077021');
INSERT INTO `my_admin_log` VALUES ('52', '1', 'admin', '更新管理员', '2', 'Admin_users', '', '192.168.1.125', '未知', '1502077065');
INSERT INTO `my_admin_log` VALUES ('53', '1', 'admin', '更新管理员', '2', 'Admin_users', '', '192.168.1.125', '未知', '1502077091');
INSERT INTO `my_admin_log` VALUES ('54', '1', 'admin', '删除配送区域', '3', 'shipping_area', '', '127.0.0.1', '未知', '1502112443');
INSERT INTO `my_admin_log` VALUES ('55', '1', 'admin', '删除配送区域', '3', 'shipping_area', '', '127.0.0.1', '未知', '1502157598');
INSERT INTO `my_admin_log` VALUES ('56', '1', 'admin', '删除产品分类', '3', 'cate', '', '127.0.0.1', '未知', '1502966845');
INSERT INTO `my_admin_log` VALUES ('57', '5', 'admin', '更新管理员', '2', 'Admin_users', '', '127.0.0.1', '未知', '1507800183');
INSERT INTO `my_admin_log` VALUES ('58', '5', 'admin', '登录', '1', 'Admin_users', '', '127.0.0.1', '未知', '1507856516');
INSERT INTO `my_admin_log` VALUES ('59', '5', 'admin', '登录', '4', 'Admin_users', '', '127.0.0.1', '未知', '1507865755');

-- ----------------------------
-- Table structure for my_admin_users
-- ----------------------------
DROP TABLE IF EXISTS `my_admin_users`;
CREATE TABLE `my_admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；mb_password加密',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像，相对于upload/avatar目录',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `email_code` varchar(60) DEFAULT NULL COMMENT '激活码',
  `phone` bigint(11) unsigned DEFAULT NULL COMMENT '手机号',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `register_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` varchar(16) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `department` varchar(30) NOT NULL COMMENT '部门',
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_admin_users
-- ----------------------------
INSERT INTO `my_admin_users` VALUES ('5', 'admin', '19ff89e2207c49ca58900bae76cd4afa', 'uploads/admin/user/f6b5765788a71b3bd99a0f373bc17cb4.jpeg', '18861470915@163.com', null, '18861470926', '2', '1505146849', '', '0', '1507800183', '4');

-- ----------------------------
-- Table structure for my_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `my_auth_group`;
CREATE TABLE `my_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_auth_group
-- ----------------------------
INSERT INTO `my_auth_group` VALUES ('1', '超级管理员', '1', '5,6,9,10,11,24,25,29,12,13,14,15,16,17,18,20,21,22,23,26,27,28,30,31,32,33,34');

-- ----------------------------
-- Table structure for my_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `my_auth_group_access`;
CREATE TABLE `my_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_auth_group_access
-- ----------------------------
INSERT INTO `my_auth_group_access` VALUES ('1', '1');
INSERT INTO `my_auth_group_access` VALUES ('4', '1');
INSERT INTO `my_auth_group_access` VALUES ('5', '1');
INSERT INTO `my_auth_group_access` VALUES ('6', '1');
INSERT INTO `my_auth_group_access` VALUES ('7', '1');

-- ----------------------------
-- Table structure for my_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `my_auth_rule`;
CREATE TABLE `my_auth_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(40) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：为1正常，为0禁用',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='规则表';

-- ----------------------------
-- Records of my_auth_rule
-- ----------------------------
INSERT INTO `my_auth_rule` VALUES ('5', '0', 'Rule', '权限', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('6', '5', 'Admin/Rule/rule_list', '权限列表', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('10', '6', 'Admin/Rule/edit', '更新权限', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('9', '6', 'Admin/Rule/delete', '删除权限', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('11', '6', 'Admin/Rule/add_rule', '添加权限', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('12', '0', 'Auth', '角色', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('13', '12', 'Admin/Rule/rule_group', '角色列表', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('14', '13', 'Admin/Rule/add_group', '添加角色', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('15', '13', 'Admin/Rule/edit_group', '更新角色', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('16', '13', 'Admin/Rule/delete_group', '删除角色', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('17', '13', 'Admin/Rule/rule_distribution', '分配角色', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('18', '0', 'Admin', '管理员', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('20', '18', 'Admin/User/index', '管理员列表', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('21', '20', 'Admin/Rule/add_user', '添加管理员', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('22', '20', 'Admin/User/editUser', '更新管理员', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('23', '20', 'Admin/Rule/delUser', '删除管理员', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('24', '6', 'Admin/Index/index', '主页', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('25', '6', 'Admin/Index/logout', '退出登录', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('26', '0', 'Setting', '系统', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('27', '26', 'Admin/Index/system', '系统列表', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('28', '27', 'Admin/Index/handle', '新增修改配置', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('29', '6', 'Admin/Logs/index', '日志', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('30', '27', 'Admin/Index/smsTemplate', '短信列表', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('31', '27', 'Admin/Index/addSmsTemplate', '添加短信模型', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('32', '27', 'Admin/Index/getOption', '获取短信option', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('33', '27', 'Admin/Index/delSms', '删除短信模板', '1', '1', '');
INSERT INTO `my_auth_rule` VALUES ('34', '27', 'Admin/Index/editSms', '更新短信模板', '1', '1', '');

-- ----------------------------
-- Table structure for my_config
-- ----------------------------
DROP TABLE IF EXISTS `my_config`;
CREATE TABLE `my_config` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `name` varchar(50) DEFAULT NULL COMMENT '配置的key键名',
  `value` text COMMENT '配置的val值',
  `inc_type` varchar(64) DEFAULT NULL COMMENT '配置分组',
  `desc` varchar(50) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_config
-- ----------------------------
INSERT INTO `my_config` VALUES ('70', 'hostname', '任务帮cms', 'shop_info', null);
INSERT INTO `my_config` VALUES ('71', 'log', '/uploads/log/log.jpeg', 'shop_info', null);
INSERT INTO `my_config` VALUES ('72', 'icon', '/uploads/icon/icon.png', 'shop_info', null);
INSERT INTO `my_config` VALUES ('73', 'hosts', 'local.guanwang.com', 'shop_info', null);
INSERT INTO `my_config` VALUES ('74', 'keyword', '撒的发生发生', 'shop_info', null);
INSERT INTO `my_config` VALUES ('75', 'desc', '任务帮,让生活无难事', 'shop_info', null);
INSERT INTO `my_config` VALUES ('76', 'address', '武汉市楚河汉街国际总部E座20层硕利科技', 'shop_info', null);
INSERT INTO `my_config` VALUES ('77', 'banquan', '我的网站 版权所有 2008-2014 湘ICP备8888888', 'shop_info', null);
INSERT INTO `my_config` VALUES ('78', 'mobileemail', '0000-888888|18507193432@163.com', 'shop_info', null);
INSERT INTO `my_config` VALUES ('85', 'appkey', 'sdfasdf', 'sms', null);
INSERT INTO `my_config` VALUES ('86', 'secretKey', 'sadfsadf', 'sms', null);
INSERT INTO `my_config` VALUES ('87', 'regis_sms_enable', 'true', 'sms', null);
INSERT INTO `my_config` VALUES ('88', 'forget_pwd_sms_enable', 'true', 'sms', null);
INSERT INTO `my_config` VALUES ('92', 'smstimeval', '120', 'sms', null);
INSERT INTO `my_config` VALUES ('93', 'smtp_server', 'smtp.163.com', 'smtp', null);
INSERT INTO `my_config` VALUES ('94', 'smtp_port', '465', 'smtp', null);
INSERT INTO `my_config` VALUES ('95', 'smtp_user', '18861470926@163.com', 'smtp', null);
INSERT INTO `my_config` VALUES ('96', 'smtp_pwd', 'fangxijun163', 'smtp', null);
INSERT INTO `my_config` VALUES ('97', 'regis_smtp_enable', 'false', 'smtp', null);
INSERT INTO `my_config` VALUES ('98', 'test_eamil', '18861470926@163.com', 'smtp', null);
INSERT INTO `my_config` VALUES ('100', 'sel', '6', 'water', null);
INSERT INTO `my_config` VALUES ('101', 'mark_txt', '士大夫撒反对', 'water', null);
INSERT INTO `my_config` VALUES ('102', 'mark_txt_size', '12', 'water', null);
INSERT INTO `my_config` VALUES ('103', 'mark_txt_color', '#0000', 'water', null);
INSERT INTO `my_config` VALUES ('104', 'is_mark', 'true', 'water', null);
INSERT INTO `my_config` VALUES ('105', 'mark_type', '0', 'water', null);
INSERT INTO `my_config` VALUES ('106', 'mark_degree', '32', 'water', null);
INSERT INTO `my_config` VALUES ('107', 'mark_img', '/uploads/water/water.png', 'water', null);
INSERT INTO `my_config` VALUES ('108', 'mark_width', '12', 'water', null);
INSERT INTO `my_config` VALUES ('109', 'mark_quality', '30', 'water', null);
INSERT INTO `my_config` VALUES ('110', 'mark_height', '12', 'water', null);

-- ----------------------------
-- Table structure for my_sms_log
-- ----------------------------
DROP TABLE IF EXISTS `my_sms_log`;
CREATE TABLE `my_sms_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '表id',
  `mobile` varchar(11) DEFAULT '' COMMENT '手机号',
  `session_id` varchar(128) DEFAULT '' COMMENT 'session_id',
  `add_time` int(11) DEFAULT '0' COMMENT '发送时间',
  `code` varchar(10) DEFAULT '' COMMENT '验证码',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '发送状态,1:成功,0:失败',
  `msg` varchar(255) DEFAULT NULL COMMENT '短信内容',
  `scene` int(1) DEFAULT '0' COMMENT '发送场景,1:用户注册,2:找回密码,3:客户下单,4:客户支付,5:商家发货,6:身份验证',
  `error_msg` text COMMENT '发送短信异常内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_sms_log
-- ----------------------------

-- ----------------------------
-- Table structure for my_sms_template
-- ----------------------------
DROP TABLE IF EXISTS `my_sms_template`;
CREATE TABLE `my_sms_template` (
  `tpl_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `sms_sign` varchar(50) NOT NULL DEFAULT '' COMMENT '短信签名',
  `sms_tpl_code` varchar(100) NOT NULL DEFAULT '' COMMENT '短信模板ID',
  `tpl_content` varchar(512) NOT NULL DEFAULT '' COMMENT '发送短信内容',
  `send_scene` varchar(100) NOT NULL DEFAULT '' COMMENT '短信发送场景',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`tpl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_sms_template
-- ----------------------------
INSERT INTO `my_sms_template` VALUES ('28', '用户找回密码', '234561111', '验证码${code}，您正在找回密码，如非本人操作，请及时修改您的密码。', '2', '1507878423');
