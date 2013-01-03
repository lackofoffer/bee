<?
$sql= <<< begin
CREATE TABLE `"$prefix"admin` (
  `username` varchar(16) NOT NULL default '',
  `password` varchar(32) NOT NULL default ''
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='管理员的密码和用户名';
CREATE TABLE `"$prefix"category` (
  `cid` smallint(8) unsigned NOT NULL auto_increment,
  `cname` varchar(200) NOT NULL default '',
  `csort` int(2) NOT NULL default '1',
  `cparent` smallint(8) default '0',
  `mid` int(1) NOT NULL default '1',
  PRIMARY KEY  (`cid`)
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='保存站点信息' AUTO_INCREMENT=1 ;
CREATE TABLE `"$prefix"loadurl` (
  `uid` int(8) unsigned NOT NULL auto_increment,
  `cid` smallint(8) NOT NULL default '0',
  `ifload` smallint(1) NOT NULL default '0',
  `url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`uid`)
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='保存已经采集的连接' AUTO_INCREMENT=1 ;
CREATE TABLE `"$prefix"module` (
  `module_name` varchar(20) NOT NULL default '',
  `ifsetup` smallint(1) NOT NULL default '0'
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='模块管理';
INSERT INTO `"$prefix"module` VALUES ('file', 1);
INSERT INTO `"$prefix"module` VALUES ('bbs', 0);
INSERT INTO `"$prefix"module` VALUES ('flash', 0);
INSERT INTO `"$prefix"module` VALUES ('post', 1);
CREATE TABLE `"$prefix"postruler` (
  `pid` smallint(8) NOT NULL auto_increment,
  `cid` smallint(8) NOT NULL default '0',
  `post_url` text NOT NULL,
  `post_data` text NOT NULL,
  `cookie` text NOT NULL,
  `referer` varchar(100) NOT NULL default '',
  `post_time` smallint(2) NOT NULL default '0',
  PRIMARY KEY  (`pid`)
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='设置模拟提交的规则' AUTO_INCREMENT=1 ;
CREATE TABLE `"$prefix"ruler` (
  `cid` smallint(8) NOT NULL default '0',
  `title` text NOT NULL,
  `content` text NOT NULL,
  `inner_page` text NOT NULL,
  `outer_url` text NOT NULL,
  `filtrate_str` text,
  `img_dir` varchar(50) NOT NULL default '',
  `iscreatedir` smallint(1) NOT NULL default '0',
  `flash_dir` varchar(50) NOT NULL default '',
  `author` text,
  `sourse` text,
  `outurlrang` varchar(10) default NULL,
  `link` text NOT NULL,
  `host` varchar(30) default NULL,
  `username` varchar(20) default NULL,
  `password` varchar(20) default NULL,
  `database` varchar(20) default NULL,
  `table` text,
  `setfield` text,
  `setupdate` text,
  `cookie` text NOT NULL,
  `referer` varchar(100) NOT NULL default '',
  `replace_sr` text NOT NULL,
  `replace_tg` text NOT NULL,
  `isutf8` smallint(1) NOT NULL default '0',
  `floor` smallint(2) NOT NULL default '1',
  `metatime` smallint(2) NOT NULL default '0',
  `linkReplaceS` VARCHAR( 50 ) DEFAULT NULL,
  `linkReplaceT` VARCHAR( 50 ) DEFAULT NULL,
  `innerReplaceS` VARCHAR( 50 ) DEFAULT NULL, 
  `innerReplaceT` VARCHAR( 50 ) DEFAULT NULL,
  `tags` TEXT DEFAULT NULL,
  `addPosition` SMALLINT( 1 ) DEFAULT '0',
  `addString` TEXT DEFAULT NULL,
  `step` SMALLINT( 1 ) DEFAULT '1',
  `linkrang` TEXT NULL,
  PRIMARY KEY  (`cid`),
  KEY `cid` (`cid`)
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='保存栏目规则';
CREATE TABLE `"$prefix"update` (
  `upid` int(8) unsigned NOT NULL auto_increment,
  `cid` smallint(8) NOT NULL default '0',
  `url` varchar(100) NOT NULL default '',
  `ifget` smallint(1) NOT NULL default '0',
  PRIMARY KEY  (`upid`),
  UNIQUE KEY `url` (`url`)
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='需要更新的记录' AUTO_INCREMENT=1 ;
CREATE TABLE `"$prefix"message` (
  `mid` int(8) unsigned NOT NULL auto_increment,
  `cid` smallint(8) NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL default '',
  `addtime` int(10) NOT NULL default '0',
  `sourse` varchar(100) NOT NULL default '',
  `haveimg` smallint(1) NOT NULL default '0',
  `haveflash` smallint(1) NOT NULL default '0',
  PRIMARY KEY  (`mid`)
) TYPE=MyISAM DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci COMMENT='保存采集内容' AUTO_INCREMENT=1;
begin;
?>