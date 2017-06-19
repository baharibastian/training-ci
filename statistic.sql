/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : statistic

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-19 08:30:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for links
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `title` text,
  `code` text,
  `link` tinytext,
  `expired` int(25) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of links
-- ----------------------------
INSERT INTO `links` VALUES ('16', '2', '', 'FYs', 'http://www.vocomfest.com', null, '2017-06-14 10:36:19', null);
INSERT INTO `links` VALUES ('17', '2', '', '6Rm', 'http://www.facebook.com', null, '2017-06-14 10:45:29', null);
INSERT INTO `links` VALUES ('18', '2', '', 'PSV', 'http://adasdsa', null, '2017-06-14 10:46:15', null);
INSERT INTO `links` VALUES ('19', '2', '', 'hP8', 'http://www.telkom.co.id', null, '2017-06-15 02:52:21', null);
INSERT INTO `links` VALUES ('20', '2', '', 'ZoR', 'http://asdsadadad', null, '2017-06-15 02:53:48', null);
INSERT INTO `links` VALUES ('21', '2', '', 'QSq', 'http://asdada', null, '2017-06-15 02:56:00', null);
INSERT INTO `links` VALUES ('22', '2', '', 'Qwc', 'http://www.komsi.sv.ugm.ac.id', null, '2017-06-15 03:03:25', null);
INSERT INTO `links` VALUES ('23', '2', '', 'Lho', 'http://www.softwareseni.co.id', null, '2017-06-15 03:06:54', null);
INSERT INTO `links` VALUES ('24', '2', '', 'JiW', 'http://adssadasda', null, '2017-06-15 03:30:16', null);
INSERT INTO `links` VALUES ('25', '2', '', 'zd5', 'http://asdsad', null, '2017-06-15 03:31:40', null);
INSERT INTO `links` VALUES ('26', '2', '', '36s', 'http://asdad', null, '2017-06-15 03:32:03', null);
INSERT INTO `links` VALUES ('27', '2', '', '91O', 'http://www.hub.softwareseni.co.id', null, '2017-06-15 03:54:11', null);
INSERT INTO `links` VALUES ('28', '2', '', 's6g', 'http://twitter.com', null, '2017-06-15 05:52:56', null);
INSERT INTO `links` VALUES ('29', '2', '', 'YwV', 'http://facebook.com', null, '2017-06-15 08:25:47', null);
INSERT INTO `links` VALUES ('30', '2', '', 'UIE', 'http://www.youtube.com', null, '2017-06-15 08:34:40', null);
INSERT INTO `links` VALUES ('31', '2', '', 'X3m', 'http://www.telkomsel.co.id', null, '2017-06-15 08:36:40', null);
INSERT INTO `links` VALUES ('32', '2', '', 'g0b', 'http://www.joox.com', null, '2017-06-15 08:37:41', null);
INSERT INTO `links` VALUES ('33', '2', '', 'a2y', 'http://www.9gag.com', null, '2017-06-15 08:38:58', null);
INSERT INTO `links` VALUES ('34', '2', '', 'rud', 'http://asdadadsas', null, '2017-06-15 08:40:23', null);
INSERT INTO `links` VALUES ('35', '2', '', 'x0D', 'http://www.unpad.ac.id', null, '2017-06-15 08:42:19', null);
INSERT INTO `links` VALUES ('36', '2', '', '8IB', 'http://adadadssasdadadadad', null, '2017-06-15 08:44:18', null);
INSERT INTO `links` VALUES ('37', '2', '', 'wzn', 'http://www.um.ugm.ac.id', null, '2017-06-15 08:56:48', null);
INSERT INTO `links` VALUES ('38', '2', '', 'MtL', 'http://www.sbmptn.ac.id', null, '2017-06-15 09:05:10', null);
INSERT INTO `links` VALUES ('39', '2', '', 'sOv', 'http://adasdadsqqd1112', null, '2017-06-15 09:06:33', null);
INSERT INTO `links` VALUES ('40', '2', '', 'zVn', 'http://2-3819831njaldas', null, '2017-06-15 09:09:05', null);
INSERT INTO `links` VALUES ('41', '2', '', 'BQ7', 'http://a231aa', null, '2017-06-15 09:09:59', null);
INSERT INTO `links` VALUES ('42', '2', '', 'pgn', 'http://1231QDA121', null, '2017-06-15 09:10:38', null);
INSERT INTO `links` VALUES ('43', '2', '', '6Ib', 'http://asdsad1121', null, '2017-06-15 09:11:13', null);
INSERT INTO `links` VALUES ('44', '2', '', 'Sle', 'http://asda121312', null, '2017-06-15 09:14:16', null);
INSERT INTO `links` VALUES ('45', '2', '', 'aoB', 'http://1231sdsf', null, '2017-06-15 09:14:57', null);
INSERT INTO `links` VALUES ('46', '2', '', 'X4u', 'http://www.usu.ac.id', null, '2017-06-16 04:03:01', null);
INSERT INTO `links` VALUES ('47', '2', '', 'yJu', 'http://www.unimed.ac.id', null, '2017-06-16 04:07:07', null);
INSERT INTO `links` VALUES ('48', '2', '', 'rYt', 'http://www.undip.ac.id', null, '2017-06-16 04:15:35', null);
INSERT INTO `links` VALUES ('49', '2', '', null, 'http://www.stackoverflow.com', null, '2017-06-16 04:44:19', null);
INSERT INTO `links` VALUES ('50', '2', '', 'fjd', 'http://www.stackoverflow.com', null, '2017-06-16 04:44:30', null);
INSERT INTO `links` VALUES ('51', '2', '', 'G0a', 'http://www.chat.softwareseni.co.id', null, '2017-06-16 04:45:19', null);
INSERT INTO `links` VALUES ('52', '2', '', 'ixA', 'http://www.unsri.ac.id', null, '2017-06-16 04:46:43', null);
INSERT INTO `links` VALUES ('53', '2', '', 'yNV', 'http://www.fisipol.ugm.ac.id', null, '2017-06-16 04:52:34', null);
INSERT INTO `links` VALUES ('54', '2', '', 'Yef', 'http://sv.ugm.ac.id', null, '2017-06-16 04:53:10', null);
INSERT INTO `links` VALUES ('55', '2', '', 'rAb', 'http://www.ugm.ac.id', null, '2017-06-16 05:09:17', null);
INSERT INTO `links` VALUES ('56', '2', '', 'Bu4', 'http://www.web.whatsapp.com', null, '2017-06-16 05:30:38', null);
INSERT INTO `links` VALUES ('57', '2', '', 'pHM', 'http://ziliun.com', null, '2017-06-16 05:31:20', null);
INSERT INTO `links` VALUES ('58', '2', '', 'Lau', 'http://www.itb.ac.id', null, '2017-06-16 08:18:11', null);
INSERT INTO `links` VALUES ('59', '2', '', 'vWA', 'http://www.oia.ugm.ac.id', null, '2017-06-16 09:12:25', null);
INSERT INTO `links` VALUES ('60', '2', '', 'v3V', 'http://www.uny.ac.id', null, '2017-06-16 10:13:44', null);
INSERT INTO `links` VALUES ('61', '2', '', '1fg', 'http://www.palawa.ugm.ac.id', null, '2017-06-16 10:51:27', null);

-- ----------------------------
-- Table structure for link_stats
-- ----------------------------
DROP TABLE IF EXISTS `link_stats`;
CREATE TABLE `link_stats` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_id` int(5) NOT NULL,
  `ip` text,
  `browser` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link_stats
-- ----------------------------
INSERT INTO `link_stats` VALUES ('1', '1', '::1', 'Chrome', '0000-00-00 00:00:00');
INSERT INTO `link_stats` VALUES ('2', '1', '::1', 'Chrome', '0000-00-00 00:00:00');
INSERT INTO `link_stats` VALUES ('3', '1', null, 'Chrome', '2017-06-15 08:38:58');
INSERT INTO `link_stats` VALUES ('4', '1', '::1', 'Chrome', '2017-06-15 08:40:23');
INSERT INTO `link_stats` VALUES ('5', '1', '::1', 'Chrome', '2017-06-15 08:42:20');
INSERT INTO `link_stats` VALUES ('6', '1', '::1', 'Chrome', '2017-06-15 08:44:18');
INSERT INTO `link_stats` VALUES ('7', '1', '::1', 'Spartan', '2017-06-15 08:56:48');
INSERT INTO `link_stats` VALUES ('8', '1', '::1', 'Chrome', '2017-06-15 09:05:10');
INSERT INTO `link_stats` VALUES ('9', '1', '::1', 'Chrome', '2017-06-15 09:06:33');
INSERT INTO `link_stats` VALUES ('10', '1', '::1', 'Chrome', '2017-06-15 09:09:05');
INSERT INTO `link_stats` VALUES ('11', '2', '::1', 'Chrome', '2017-06-15 09:09:59');
INSERT INTO `link_stats` VALUES ('12', '2', '::1', 'Chrome', '2017-06-15 09:10:39');
INSERT INTO `link_stats` VALUES ('13', '2', '::1', 'Chrome', '2017-06-15 09:11:13');
INSERT INTO `link_stats` VALUES ('14', '2', '::1', 'Chrome', '2017-06-15 09:14:16');
INSERT INTO `link_stats` VALUES ('15', '2', '::1', 'Chrome', '2017-06-15 09:14:57');
INSERT INTO `link_stats` VALUES ('16', '57', '::1', 'Chrome', '2017-06-16 05:42:11');
INSERT INTO `link_stats` VALUES ('17', '58', '::1', 'Chrome', '2017-06-16 08:18:13');
INSERT INTO `link_stats` VALUES ('18', '59', '::1', 'Chrome', '2017-06-16 09:12:26');
INSERT INTO `link_stats` VALUES ('19', '60', '::1', 'Chrome', '2017-06-16 10:13:46');
INSERT INTO `link_stats` VALUES ('20', '61', '::1', 'Chrome', '2017-06-16 10:51:29');
INSERT INTO `link_stats` VALUES ('21', '55', '::1', 'Chrome', '2017-06-16 10:51:34');
INSERT INTO `link_stats` VALUES ('22', '61', '::1', 'Chrome', '2017-06-16 10:51:38');
INSERT INTO `link_stats` VALUES ('23', '23', '::1', 'Chrome', '2017-06-16 11:27:27');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('20170613144530');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` text,
  `email` text,
  `first_name` tinytext,
  `last_name` tinytext,
  `created` date DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'baharibastian', 'basdad', 'bastian17.98@gmail.com', 'bahabsd', 'dsa', null, null, null);
INSERT INTO `users` VALUES ('2', 'mesutozil', 'mesutozil', 'mesutozil@gmail.com', 'Mesut', 'Ozil', null, null, null);
INSERT INTO `users` VALUES ('3', 'santicazorla', 'sanzasd', 'santica@gmail.com', 'snati', 'cazorla', null, null, null);
INSERT INTO `users` VALUES ('4', 'bastiandb', 'bastian1705', 'asdada', 'dasdad', 'adasda', null, null, null);
INSERT INTO `users` VALUES ('5', 'lionelmessi', 'lionelmessi', 'lionelmessi@gmail.com', 'Lionel', 'Messi', '2017-06-16', null, null);
INSERT INTO `users` VALUES ('6', 'lionelmessi', '', 'lionelmessi@gmail.com', 'Lionel', 'Messi', '2017-06-16', null, null);
