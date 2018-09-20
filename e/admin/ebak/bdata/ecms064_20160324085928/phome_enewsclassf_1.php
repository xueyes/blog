<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassf`;");
E_C("CREATE TABLE `phome_enewsclassf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassf` values('4','shuoming','栏目说明','editor','\r\n<?=ECMS_ShowEditorVar(\\\\\"shuoming\\\\\",\$ecmsfirstpost==1?\\\\\"请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！\\\\\":\$addr[shuoming],\\\\\"Default\\\\\",\\\\\"\\\\\",\\\\\"300\\\\\",\\\\\"100%\\\\\")?>\r\n','','0','MEDIUMTEXT','','请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！','');");

@include("../../inc/footer.php");
?>