# Host: localhost  (Version: 5.0.90-community-nt)
# Date: 2015-09-17 14:49:58
# Generator: MySQL-Front 5.3  (Build 4.91)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "messages"
#

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL auto_increment,
  `from` varchar(20) default NULL,
  `to` varchar(20) default NULL,
  `message` varchar(255) default NULL,
  `send_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `read_time` varchar(14) default NULL,
  PRIMARY KEY  (`id`),
  KEY `messages_index1` (`from`,`to`,`read_time`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "messages"
#

/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
