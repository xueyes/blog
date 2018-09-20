<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmemberadd`;");
E_C("CREATE TABLE `phome_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `job` varchar(255) DEFAULT NULL,
  `juzhu` varchar(10) DEFAULT NULL,
  `Diybg` varchar(255) DEFAULT NULL,
  `renzheng` text,
  `xingyun` varchar(255) DEFAULT NULL,
  `lockBgImg` varchar(255) DEFAULT NULL,
  `repeatBg` varchar(255) DEFAULT NULL,
  `Bgalign` varchar(255) DEFAULT NULL,
  `bgcolor` varchar(255) DEFAULT NULL,
  `bgsize` varchar(255) DEFAULT NULL,
  `feeduserid` mediumtext,
  `zuijin` varchar(140) DEFAULT NULL,
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmemberadd` values('1','','','','','','','','1','','','','','/d/file/2014-09-11/535c4c79f2a9d7a49d13ba689976b9f7.jpg','','','38','192.168.1.1','1450454362','192.168.1.1','14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'4::::::5::::::','','0');");
E_D("replace into `phome_enewsmemberadd` values('2','','','','','','','','1','','','','','/d/file/2014-09-11/14317f6e47567df767a9acf4c38261df.gif','','','0','192.168.1.1','1410367679','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','1','123.117.39.129','1411169994','123.117.39.129','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('4','','','','','','','','1','','','','','/d/file/avator/user4_avator.jpg','','','2','124.127.65.129','1412997817','124.127.65.76','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('5','','','','','','','','1','','http://ecms010.99yuanma.net/e/member/EditInfo/','','','/d/file/avator/user5_avator.jpg','http://ecms010.99yuanma.net/e/member/EditInfo/','http://ecms010.99yuanma.net/e/member/EditInfo/','1','123.117.47.172','1411476241','123.117.47.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1::::::',NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('6','','','','','','','','1','','','','','','','','1','49.77.98.248','1412259310','49.77.98.248','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('7','','','','','','','','1','','','','','','','','0','192.168.1.1','1415202512','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('9','','','','','','','','1','','','','','','','','1','124.134.165.141','1420471243','124.134.165.141','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('8','','','','','','','','1','','','','','','','','0','202.97.237.57','1418124106','202.97.237.57','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('10','','','','','','','','1','','','','','','','','0','192.168.1.1','1420471829','192.168.1.1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('11','','','','','','','','1','','','','','','','','1','210.74.155.210','1420606823','210.74.155.210','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('12','','','','','','','','1','','','','','','','','0','171.90.40.125','1420821519','171.90.40.125','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('13','','','','','','','','1','','','','','','','','1','123.7.87.126','1424248118','123.4.233.254','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','0');");
E_D("replace into `phome_enewsmemberadd` values('14','','','','','','','','1','','','','','','','','0','112.249.29.132','1420974416','112.249.29.132','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('15','','','','','','','','1','','','','','','','','0','183.32.52.137','1421044759','183.32.52.137','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('16','','','','','','','','1','','','','','','','','1','101.71.232.16','1421069964','101.71.232.16','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('17','','','','','','','','1','','','','','','','','1','119.85.113.43','1421157139','119.85.113.43','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('18','','','','','','','','1','','','','','','','','0','58.254.168.13','1421305791','58.254.168.13','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('19','','','','','','','','1','','','','','','','','0','220.248.175.41','1421569135','124.68.3.24','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('20','','','','','','','','1','','','','','','','','0','222.208.154.135','1421512023','222.208.154.135','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('21','','','','','','','','1','','','','','','','','0','119.5.53.84','1421667659','119.5.53.84','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('22','','','','','','','','1','','','','','','','','0','218.71.136.108','1421724953','218.71.136.108','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('23','','','','','','','','1','','','','','','','','1','223.167.198.216','1422091077','220.248.175.42','7',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('24','','','','','','','','1','','','','','','','','0','124.167.79.174','1421748753','124.167.79.174','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('25','','','','','','','','1','','','','','','','','0','116.237.60.227','1422362132','116.237.60.227','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','');");
E_D("replace into `phome_enewsmemberadd` values('26','','','','','','','','1','','','','','','','','2','114.249.220.232','1422585705','114.249.220.232','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('27','','','','','','','','1','','','','','','','','0','110.80.36.210','1422670749','110.80.36.210','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('28','','','','','','','','1','','','','','','','','0','222.72.188.71','1422718378','222.72.188.71','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('29','','','','','','','','1','','','','','','','','0','221.220.96.202','1422942021','221.220.96.202','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('30','','','','','','','','1','','','','','','','','1','222.129.195.92','1423454184','222.129.195.92','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('31','','','','','','','','1','','','','','','','','1','223.199.254.172','1423491629','223.199.254.172','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('32','','','','','','','','1','','','','','','','','1','49.85.41.40','1424080754','49.85.41.40','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");
E_D("replace into `phome_enewsmemberadd` values('33','','','','','','','','1','','','','','','','','0','113.57.142.165','1424684862','113.57.142.165','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0');");

@include("../../inc/footer.php");
?>