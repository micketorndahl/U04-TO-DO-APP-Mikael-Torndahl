DROP DATABASE IF EXISTS `todo-app`;

CREATE DATABASE `todo-app`;

USE `todo-app`;

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `todoTitle` varchar(50) NOT NULL DEFAULT '',
  `todoDescription` varchar(255) NOT NULL DEFAULT '',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Todo status',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

