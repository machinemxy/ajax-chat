# Host: localhost  (Version: 5.0.90-community-nt)
# Date: 2015-09-17 14:49:49
# Generator: MySQL-Front 5.3  (Build 4.91)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "group"
#

DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL default '0',
  `user_name` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `group_index` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "group"
#

/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (1,1,'小马'),(2,1,'小猪'),(3,1,'小狗');
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
