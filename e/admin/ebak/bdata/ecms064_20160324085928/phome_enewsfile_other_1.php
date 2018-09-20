<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_other`;");
E_C("CREATE TABLE `phome_enewsfile_other` (
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
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_other` values('2','0','74a40bb3eb5486e128d1321aab11efb6.jpg','24729','2014-11-06','admin','1415266525','0','未命名-3.jpg','1','0','2','0','2','3');");
E_D("replace into `phome_enewsfile_other` values('3','0','3cd871e89f2f6eb8a3a032653a4f8018.jpg','23451','2014-11-06','admin','1415267118','0','未命名-3.jpg','1','0','2','0','2','3');");
E_D("replace into `phome_enewsfile_other` values('5','0','ab93d4726fd97c7472919aa707607472.jpg','23556','2014-11-06','admin','1415276725','0','未命名-3.jpg','1','0','3','0','2','3');");
E_D("replace into `phome_enewsfile_other` values('8','0','916da2cd86c3e984da62c4e47993f604.jpg','23729','2014-11-06','admin','1415282956','0','未命名-3.jpg','1','0','4','0','2','3');");
E_D("replace into `phome_enewsfile_other` values('10','0','cb01fdef686acc857665cb1e43b9d8f6.jpg','7229','2014-11-07','admin','1415346073','0','未命名-1.jpg','1','0','6','0','2','3');");
E_D("replace into `phome_enewsfile_other` values('11','0','fd09c01a975a1aaf833d129f2baf73aa.jpg','7233','2014-11-07','admin','1415348162','0','未命名-1.jpg','1','0','8','0','2','3');");

@include("../../inc/footer.php");
?>