<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_member`;");
E_C("CREATE TABLE `phome_enewsfile_member` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_member` values('1','0','535c4c79f2a9d7a49d13ba689976b9f7.jpg','28660','2014-09-11','[EditInfo]hanxing3437','1410367216','0','Member[userpic]','1','0','1','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('2','0','14317f6e47567df767a9acf4c38261df.gif','2012','2014-09-11','[EditInfo]hanxing3438','1410367680','0','Member[userpic]','1','0','2','0','2','0');");
E_D("replace into `phome_enewsfile_member` values('3','0','user5_avator.jpg','6379','avator','[EditInfo]复复','1411476851','0','Member[userpic]','1','0','1','0','2','6');");
E_D("replace into `phome_enewsfile_member` values('4','0','user4_avator.jpg','8529','avator','[EditInfo]高洋','1412997875','0','Member[userpic]','1','0','1','0','2','6');");

@include("../../inc/footer.php");
?>