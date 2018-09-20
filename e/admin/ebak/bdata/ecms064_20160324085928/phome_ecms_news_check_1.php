<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_check`;");
E_C("CREATE TABLE `phome_ecms_news_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_check` values('148','4','0','0','0','0','2015-01-07','148','11','liqiang0612','0','0','0','0','0','1','0','1420607054','1420607054','0','0','0','','/food/2015-01-07/148.html','1','1','1','546','546','1420607054','','56','546','0');");
E_D("replace into `phome_ecms_news_check` values('149','1','0','0','0','0','2015-01-11','149','13','qq289988157','0','0','0','0','0','1','0','1420966678','1420966678','0','0','0','','/funny/2015-01-11/149.html','1','1','1','饿eeeeeeeee','网而','1420966678','','鹅鹅鹅饿鹅鹅鹅','鹅鹅鹅饿鹅鹅鹅饿鹅鹅鹅','0');");
E_D("replace into `phome_ecms_news_check` values('150','1','0','0','0','0','2015-01-11','150','13','qq289988157','0','0','0','0','0','1','0','1420966693','1420966693','0','0','0','','/funny/2015-01-11/150.html','1','1','1','鹅鹅鹅饿鹅鹅鹅饿鹅鹅鹅饿鹅鹅鹅','风格而呃呃鹅鹅鹅饿鹅鹅鹅','1420966693','','呃呃呃呃呃呃鹅鹅鹅饿鹅鹅鹅饿鹅鹅鹅','','0');");
E_D("replace into `phome_ecms_news_check` values('151','1','0','0','0','0','2015-01-15','151','18','97251230','0','0','0','0','0','1','0','1421305838','1421305838','0','0','0','','/funny/2015-01-15/151.html','1','1','1','斯蒂芬','新闻趣事','1421305838','','速度','斯蒂芬森斯蒂芬斯蒂芬','0');");
E_D("replace into `phome_ecms_news_check` values('152','13','0','0','0','0','2015-01-17','152','19','yyt','0','0','1','0','0','1','0','1421477614','1421477614','0','0','0','','/ejml/ml1/2015-01-17/152.html','1','1','1','','测试','1421477614','/d/file/2015-01-17/b28d89c66b8e212fb69885885db3053e.jpg','测试','测试','0');");
E_D("replace into `phome_ecms_news_check` values('153','3','0','0','0','0','2015-01-30','153','26','zxy52159','0','0','0','0','0','1','0','1422587531','1422587531','0','0','0','','/view/2015-01-30/153.html','1','1','1','测试','测试测试测试测试测试','1422587531','','','测试测试测试测试测试测试测试测试测试测试测试','0');");
E_D("replace into `phome_ecms_news_check` values('154','4','0','0','0','0','2015-02-09','154','30','hnlishishi','0','0','0','0','0','1','0','1423454371','1423454371','0','0','0','','/food/2015-02-09/154.html','1','1','1','333','111','1423454371','','222','111111','0');");
E_D("replace into `phome_ecms_news_check` values('155','1','0','0','0','0','2015-02-16','155','32','qq3537159','0','0','1','0','0','1','0','1424081265','1424081265','0','0','0','','/funny/2015-02-16/155.html','1','1','1','测','测测','1424081265','/d/file/2015-02-16/9732a56469fe99a78d4d14839a6b9c3d.jpg','测','','0');");

@include("../../inc/footer.php");
?>