<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_check_data`;");
E_C("CREATE TABLE `phome_ecms_news_check_data` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `writer` varchar(30) NOT NULL DEFAULT '',
  `befrom` varchar(60) NOT NULL DEFAULT '',
  `newstext` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_check_data` values('148','4','','1','1','0','0','','546','54546','<p>&nbsp;56546</p>');");
E_D("replace into `phome_ecms_news_check_data` values('149','1','','1','1','0','0','','','','<p>&nbsp;呃呃鹅鹅鹅饿鹅鹅鹅</p>');");
E_D("replace into `phome_ecms_news_check_data` values('150','1','','1','1','0','0','','','','<p>&nbsp;额鹅鹅鹅饿鹅鹅鹅饿鹅鹅鹅</p>');");
E_D("replace into `phome_ecms_news_check_data` values('151','1','','1','1','0','0','','','','<p>&nbsp;斯蒂芬斯蒂芬斯蒂芬 斯蒂芬斯蒂芬速度</p>');");
E_D("replace into `phome_ecms_news_check_data` values('152','13','','1','1','0','0','','','','<p>&nbsp;测试</p>');");
E_D("replace into `phome_ecms_news_check_data` values('153','3','111','1','1','0','0','','北京科技','新浪','<p>测试测试测试测试测试测试测试测试测试测试测试测试测试测试</p>');");
E_D("replace into `phome_ecms_news_check_data` values('154','4','','1','1','0','0','','','','<p>111111111111111111111111</p><p><br/></p>');");
E_D("replace into `phome_ecms_news_check_data` values('155','1','111','1','1','0','0','','','','<p>测<embed type=\\\\\"application/x-shockwave-flash\\\\\" class=\\\\\"edui-faked-video\\\\\" pluginspage=\\\\\"http://www.macromedia.com/go/getflashplayer\\\\\" src=\\\\\"http://player.youku.com/player.php/sid/XODk0MTE2MzY0/v.swf\\\\\" width=\\\\\"420\\\\\" height=\\\\\"280\\\\\" wmode=\\\\\"transparent\\\\\" play=\\\\\"true\\\\\" loop=\\\\\"false\\\\\" menu=\\\\\"false\\\\\" allowscriptaccess=\\\\\"never\\\\\" allowfullscreen=\\\\\"true\\\\\"/></p>');");

@include("../../inc/footer.php");
?>