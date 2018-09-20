<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('59','5','1','1403001097','1403001142','1403001142','1');");
E_D("replace into `phome_ecms_news_index` values('58','5','1','1403001114','1403001142','1403001142','1');");
E_D("replace into `phome_ecms_news_index` values('57','5','1','1403001067','1403001141','1403001141','1');");
E_D("replace into `phome_ecms_news_index` values('56','5','1','1403001087','1403001141','1403001141','1');");
E_D("replace into `phome_ecms_news_index` values('55','5','1','1403001022','1403001141','1403001141','1');");
E_D("replace into `phome_ecms_news_index` values('54','5','1','1403001073','1403001140','1403001140','1');");
E_D("replace into `phome_ecms_news_index` values('53','5','1','1403001065','1403001140','1403001140','1');");
E_D("replace into `phome_ecms_news_index` values('52','5','1','1403000996','1403001140','1403001140','1');");
E_D("replace into `phome_ecms_news_index` values('51','5','1','1403001038','1403001139','1403001139','1');");
E_D("replace into `phome_ecms_news_index` values('50','5','1','1403000963','1403001139','1403001139','1');");
E_D("replace into `phome_ecms_news_index` values('49','5','1','1403000907','1403001138','1403001138','1');");
E_D("replace into `phome_ecms_news_index` values('48','5','1','1403000933','1403001138','1403001138','1');");
E_D("replace into `phome_ecms_news_index` values('47','5','1','1403000859','1403001138','1403001138','1');");
E_D("replace into `phome_ecms_news_index` values('46','5','1','1403000922','1403001138','1403001138','1');");
E_D("replace into `phome_ecms_news_index` values('45','5','1','1403000828','1403001137','1403001137','1');");
E_D("replace into `phome_ecms_news_index` values('44','5','1','1403000902','1403001137','1403001137','1');");
E_D("replace into `phome_ecms_news_index` values('43','5','1','1403000843','1403001136','1403001136','1');");
E_D("replace into `phome_ecms_news_index` values('42','5','1','1403000773','1403001136','1403001136','1');");
E_D("replace into `phome_ecms_news_index` values('41','5','1','1403000762','1403001136','1403001136','1');");
E_D("replace into `phome_ecms_news_index` values('40','5','1','1403000761','1403001136','1403001136','1');");
E_D("replace into `phome_ecms_news_index` values('60','4','1','1403000761','1403001175','1403001175','1');");
E_D("replace into `phome_ecms_news_index` values('61','4','1','1403000761','1403001175','1403001175','1');");
E_D("replace into `phome_ecms_news_index` values('62','4','1','1403000851','1403001176','1403001176','1');");
E_D("replace into `phome_ecms_news_index` values('63','4','1','1403000813','1403001176','1403001176','1');");
E_D("replace into `phome_ecms_news_index` values('64','4','1','1403000898','1403001177','1403001177','1');");
E_D("replace into `phome_ecms_news_index` values('65','4','1','1403000897','1403001177','1403001177','1');");
E_D("replace into `phome_ecms_news_index` values('66','4','1','1403000971','1403001177','1403001177','1');");
E_D("replace into `phome_ecms_news_index` values('67','4','1','1403000909','1403001177','1403001177','1');");
E_D("replace into `phome_ecms_news_index` values('68','4','1','1403000971','1403001178','1403001178','1');");
E_D("replace into `phome_ecms_news_index` values('69','4','1','1403000986','1403001178','1403001178','1');");
E_D("replace into `phome_ecms_news_index` values('70','4','1','1403000989','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('71','4','1','1403000998','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('72','4','1','1403001033','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('73','4','1','1403001019','1403001179','1403001179','1');");
E_D("replace into `phome_ecms_news_index` values('74','4','1','1403001067','1403001180','1403001180','1');");
E_D("replace into `phome_ecms_news_index` values('75','4','1','1403001075','1403001180','1403001180','1');");
E_D("replace into `phome_ecms_news_index` values('76','4','1','1403001104','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('77','4','1','1403001097','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('78','4','1','1403001140','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('79','4','1','1403001136','1403001181','1403001181','1');");
E_D("replace into `phome_ecms_news_index` values('80','1','1','1403000760','1403001237','1403001237','1');");
E_D("replace into `phome_ecms_news_index` values('81','1','1','1403000760','1403001237','1403001237','1');");
E_D("replace into `phome_ecms_news_index` values('82','1','1','1403000800','1403001238','1403001238','1');");
E_D("replace into `phome_ecms_news_index` values('83','1','1','1403000794','1403001238','1403001238','1');");
E_D("replace into `phome_ecms_news_index` values('84','1','1','1403000894','1403001239','1403001239','1');");
E_D("replace into `phome_ecms_news_index` values('85','1','1','1403000870','1403001239','1403001239','1');");
E_D("replace into `phome_ecms_news_index` values('86','1','1','1403000937','1403001239','1403001239','1');");
E_D("replace into `phome_ecms_news_index` values('87','1','1','1403000888','1403001239','1403001239','1');");
E_D("replace into `phome_ecms_news_index` values('88','1','1','1403000995','1403001240','1403001240','1');");
E_D("replace into `phome_ecms_news_index` values('89','1','1','1403000904','1403001240','1403001240','1');");
E_D("replace into `phome_ecms_news_index` values('90','1','1','1403000923','1403001241','1403001241','1');");
E_D("replace into `phome_ecms_news_index` values('91','1','1','1403001031','1403001241','1403001241','1');");
E_D("replace into `phome_ecms_news_index` values('92','1','1','1403001072','1403001241','1403001241','1');");
E_D("replace into `phome_ecms_news_index` values('93','1','1','1403000974','1403001241','1403001241','1');");
E_D("replace into `phome_ecms_news_index` values('94','1','1','1403001116','1403001242','1403001242','1');");
E_D("replace into `phome_ecms_news_index` values('95','1','1','1403001006','1403001242','1403001242','1');");
E_D("replace into `phome_ecms_news_index` values('96','1','1','1403001155','1403001243','1403001243','1');");
E_D("replace into `phome_ecms_news_index` values('97','1','1','1403001035','1403001243','1403001243','1');");
E_D("replace into `phome_ecms_news_index` values('98','1','1','1403001207','1403001243','1403001243','1');");
E_D("replace into `phome_ecms_news_index` values('99','1','1','1403001064','1403001243','1403001243','1');");
E_D("replace into `phome_ecms_news_index` values('100','2','1','1403000757','1403001244','1403001244','1');");
E_D("replace into `phome_ecms_news_index` values('101','2','1','1403000757','1403001244','1403001244','1');");
E_D("replace into `phome_ecms_news_index` values('102','2','1','1403000815','1403001245','1403001245','1');");
E_D("replace into `phome_ecms_news_index` values('103','2','1','1403000783','1403001245','1403001245','1');");
E_D("replace into `phome_ecms_news_index` values('104','2','1','1403000851','1403001246','1403001246','1');");
E_D("replace into `phome_ecms_news_index` values('105','2','1','1403000837','1403001246','1403001246','1');");
E_D("replace into `phome_ecms_news_index` values('106','2','1','1403000886','1403001246','1403001246','1');");
E_D("replace into `phome_ecms_news_index` values('107','2','1','1403000902','1403001246','1403001246','1');");
E_D("replace into `phome_ecms_news_index` values('108','2','1','1403000922','1403001247','1403001247','1');");
E_D("replace into `phome_ecms_news_index` values('109','2','1','1403000923','1403001247','1403001247','1');");
E_D("replace into `phome_ecms_news_index` values('110','2','1','1403000946','1403001248','1403001248','1');");
E_D("replace into `phome_ecms_news_index` values('111','2','1','1403000946','1403001248','1403001248','1');");
E_D("replace into `phome_ecms_news_index` values('112','2','1','1403000969','1403001248','1403001248','1');");
E_D("replace into `phome_ecms_news_index` values('113','2','1','1403000967','1403001248','1403001248','1');");
E_D("replace into `phome_ecms_news_index` values('114','2','1','1403000995','1403001249','1403001249','1');");
E_D("replace into `phome_ecms_news_index` values('115','2','1','1403000997','1403001249','1403001249','1');");
E_D("replace into `phome_ecms_news_index` values('116','2','1','1403001028','1403001250','1403001250','1');");
E_D("replace into `phome_ecms_news_index` values('117','2','1','1403001007','1403001250','1403001250','1');");
E_D("replace into `phome_ecms_news_index` values('118','2','1','1403001046','1403001250','1403001250','1');");
E_D("replace into `phome_ecms_news_index` values('119','2','1','1403001216','1403001250','1403001250','1');");
E_D("replace into `phome_ecms_news_index` values('120','3','1','1403000761','1403001318','1403001318','1');");
E_D("replace into `phome_ecms_news_index` values('121','3','1','1403000761','1403001318','1403001318','1');");
E_D("replace into `phome_ecms_news_index` values('122','3','1','1403000921','1403001319','1403001319','1');");
E_D("replace into `phome_ecms_news_index` values('123','3','1','1403000834','1403001319','1403001319','1');");
E_D("replace into `phome_ecms_news_index` values('124','3','1','1403001011','1403001320','1403001320','1');");
E_D("replace into `phome_ecms_news_index` values('125','3','1','1403000966','1403001320','1403001320','1');");
E_D("replace into `phome_ecms_news_index` values('126','3','1','1403001005','1403001321','1403001321','1');");
E_D("replace into `phome_ecms_news_index` values('127','3','1','1403001084','1403001321','1403001321','1');");
E_D("replace into `phome_ecms_news_index` values('128','3','1','1403001044','1403001321','1403001321','1');");
E_D("replace into `phome_ecms_news_index` values('129','3','1','1403001144','1403001321','1403001321','1');");
E_D("replace into `phome_ecms_news_index` values('130','3','1','1403001169','1403001322','1403001322','1');");
E_D("replace into `phome_ecms_news_index` values('131','3','1','1403001083','1403001322','1403001322','1');");
E_D("replace into `phome_ecms_news_index` values('132','3','1','1403001242','1403001323','1403001323','1');");
E_D("replace into `phome_ecms_news_index` values('133','3','1','1403001152','1403001323','1403001323','1');");
E_D("replace into `phome_ecms_news_index` values('134','3','1','1403001264','1403001324','1403001324','1');");
E_D("replace into `phome_ecms_news_index` values('135','3','1','1403001264','1403001324','1403001324','1');");
E_D("replace into `phome_ecms_news_index` values('136','3','1','1403001269','1403001324','1403001324','1');");
E_D("replace into `phome_ecms_news_index` values('137','3','1','1403001272','1403001324','1403001324','1');");
E_D("replace into `phome_ecms_news_index` values('138','3','1','1403001300','1403001325','1403001325','1');");
E_D("replace into `phome_ecms_news_index` values('139','3','1','1403001278','1403001325','1403001325','1');");
E_D("replace into `phome_ecms_news_index` values('143','13','1','1415248751','1415248815','1415248815','1');");
E_D("replace into `phome_ecms_news_index` values('144','13','1','1415249036','1415249063','1415249063','1');");
E_D("replace into `phome_ecms_news_index` values('145','13','1','1415249066','1415249119','1415249119','1');");
E_D("replace into `phome_ecms_news_index` values('146','13','1','1415249122','1415249149','1436075249','1');");
E_D("replace into `phome_ecms_news_index` values('147','13','1','1415249357','1415249389','1451123795','1');");
E_D("replace into `phome_ecms_news_index` values('148','4','0','1420607054','1420607054','1420607054','0');");
E_D("replace into `phome_ecms_news_index` values('149','1','0','1420966678','1420966678','1420966678','0');");
E_D("replace into `phome_ecms_news_index` values('150','1','0','1420966693','1420966693','1420966693','0');");
E_D("replace into `phome_ecms_news_index` values('151','1','0','1421305838','1421305838','1421305838','0');");
E_D("replace into `phome_ecms_news_index` values('152','13','0','1421477614','1421477614','1421477614','0');");
E_D("replace into `phome_ecms_news_index` values('153','3','0','1422587531','1422587531','1422587531','0');");
E_D("replace into `phome_ecms_news_index` values('154','4','0','1423454371','1423454371','1423454371','0');");
E_D("replace into `phome_ecms_news_index` values('155','1','0','1424081265','1424081265','1424081265','0');");
E_D("replace into `phome_ecms_news_index` values('156','1','1','1436075356','1436075397','1436075397','1');");

@include("../../inc/footer.php");
?>