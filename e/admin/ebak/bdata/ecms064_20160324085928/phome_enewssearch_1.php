<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','大自然','1407552273','title','1','192.168.1.1','','6','newstime','0','971c1b39003e46e48d73b0a916e8ae55','news','1','0',' and ((title LIKE ''%大自然%''))','0');");
E_D("replace into `phome_enewssearch` values('2','自然','1439474583','title','5','192.168.1.1','','2','newstime','0','f0e3c8f290355b8c0967bfaef62afb19','news','1','0',' and ((title LIKE ''%自然%''))','0');");
E_D("replace into `phome_enewssearch` values('3','世界','1408607602','title','11','113.97.51.150','','2','newstime','0','35f688409eaa4368db550393a7afe03a','news','1','0',' and ((title LIKE ''%世界%''))','0');");
E_D("replace into `phome_enewssearch` values('4','测试','1404663407','title','3','171.34.115.173','','1','newstime','0','a390fcbe4c44150a513de10c0255d3ca','news','1','0',' and ((title LIKE ''%测试%''))','0');");
E_D("replace into `phome_enewssearch` values('5','爱的猫','1404864006','title','1','122.233.230.170','','1','newstime','0','b66a1e1f1119ca8f949c3b53d6cbe28a','news','1','0',' and ((title LIKE ''%爱的猫%''))','0');");
E_D("replace into `phome_enewssearch` values('6','手机','1405298484','title','2','71.119.73.93','','1','newstime','0','a2313f8c21ae88ec3b164221b0d75873','news','1','0',' and ((title LIKE ''%手机%''))','0');");
E_D("replace into `phome_enewssearch` values('7','让你','1409881964','title','8','58.101.221.113','','1','newstime','0','a501cfc523d29fac29164e24ae080a3a','news','1','0',' and ((title LIKE ''%让你%''))','0');");
E_D("replace into `phome_enewssearch` values('8','风景','1409888633','title','2','58.101.221.113','','1','newstime','0','154a1970ff3f35e780c391c8258bfe66','news','1','0',' and ((title LIKE ''%风景%''))','0');");
E_D("replace into `phome_enewssearch` values('9','可爱','1411125275','title','1','192.168.1.1','','1','newstime','0','dff16b243d855b7c6b007d891a2bc1ee','news','1','0',' and ((title LIKE ''%可爱%''))','0');");
E_D("replace into `phome_enewssearch` values('10','人','1412998138','title','11','124.127.65.76','','1','newstime','0','e6c82824942984669639753b68824f02','news','1','0',' and ((title LIKE ''%人%''))','0');");
E_D("replace into `phome_enewssearch` values('11','花朵','1413620749','title','1','14.117.105.239','','1','newstime','0','6e7d4bd90c4c25c6265d9416f3e4a642','news','1','0',' and ((title LIKE ''%花朵%''))','0');");
E_D("replace into `phome_enewssearch` values('12','工具','1415254768','title','2','192.168.1.1','','1','newstime','0','61acbe646ac266ba656a327be2c192c5','news','1','0',' and ((title LIKE ''%工具%''))','0');");
E_D("replace into `phome_enewssearch` values('13','线条','1415348764','title','1','192.168.1.1','','1','newstime','0','c6837e11bb6c7743cb666fc2bb535b94','news','1','0',' and ((title LIKE ''%线条%''))','0');");
E_D("replace into `phome_enewssearch` values('14','微距','1415348800','title','2','192.168.1.1','','1','newstime','0','e89d6ea55ea8655af183a54806adc97f','news','1','0',' and ((title LIKE ''%微距%''))','0');");
E_D("replace into `phome_enewssearch` values('15','花糖','1419342697','title','1','114.66.199.5','','1','newstime','0','9e54fd28e28e3c17bafd30a019bc66da','news','1','0',' and ((title LIKE ''%花糖%''))','0');");
E_D("replace into `phome_enewssearch` values('16','花海','1419428824','title','1','121.22.249.200','','1','newstime','0','2b27b04cc27f1a68ecc30aa58799eb58','news','1','0',' and ((title LIKE ''%花海%''))','0');");
E_D("replace into `phome_enewssearch` values('17','00','1422379089','title','1','36.250.224.101','','1','newstime','0','77585354c8fdf156f1ac94657c2d367e','news','1','0',' and ((title LIKE ''%00%''))','0');");
E_D("replace into `phome_enewssearch` values('18','雕塑','1458096205','title','3','182.242.227.214','','3','newstime','0','4056bb79ca0afdb25e6fbd9d74f8e1ec','news','1','0',' and ((title LIKE ''%雕塑%''))','0');");
E_D("replace into `phome_enewssearch` values('19','充电','1422798597','title','2','222.72.188.71','','1','newstime','0','48a13d48b595246b52a3e4256c48a3e6','news','1','0',' and ((title LIKE ''%充电%''))','0');");
E_D("replace into `phome_enewssearch` values('20','浪漫','1423490606','title','2','42.122.177.160','','1','newstime','0','30effb3285df89c0b26fc8aa620e0dd0','news','1','0',' and ((title LIKE ''%浪漫%''))','0');");
E_D("replace into `phome_enewssearch` values('21','中国没有被黑','1424956160','title','1','183.18.33.98','','1','newstime','0','89ddf416111f66d6d16e81464443d52b','news','1','0',' and ((title LIKE ''%中国没有被黑%''))','0');");
E_D("replace into `phome_enewssearch` values('22','的','1454667576','title','75','192.168.1.1','','4','newstime','0','df8cfc447487db36a983362af553a345','news','1','0',' and ((title LIKE ''%的%''))','0');");
E_D("replace into `phome_enewssearch` values('23','英国','1436188910','title','1','123.151.64.143','','1','newstime','0','c88902bf2d7850fa65efe0d489ae9fb1','news','1','0',' and ((title LIKE ''%英国%''))','0');");
E_D("replace into `phome_enewssearch` values('24','七牛','1437639653','title','1','61.54.242.45','','1','newstime','0','de3cce45dc1639b6c0f772f3cad0f1eb','news','1','0',' and ((title LIKE ''%七牛%''))','0');");
E_D("replace into `phome_enewssearch` values('25','如果','1450526579','title','1','111.161.79.133','','2','newstime','0','b0974c91cb0ffb046916dc18cd11a984','news','1','0',' and ((title LIKE ''%如果%''))','0');");
E_D("replace into `phome_enewssearch` values('26','标题图片','1439887704','title','1','42.157.11.70','','1','newstime','0','24e99d8f9d8bd7b7153374ab3e18cd3b','news','1','0',' and ((title LIKE ''%标题图片%''))','0');");
E_D("replace into `phome_enewssearch` values('27','有趣','1439998378','title','12','115.152.142.124','','1','newstime','0','adae5b758ae3c7f5af61b7f3ea23e848','news','1','0',' and ((title LIKE ''%有趣%''))','0');");
E_D("replace into `phome_enewssearch` values('28','摄影','1441705665','title','6','183.15.44.91','','1','newstime','0','c47c42c2d7ffae93589113452849d35e','news','1','0',' and ((title LIKE ''%摄影%''))','0');");
E_D("replace into `phome_enewssearch` values('29','利用','1443109715','title','3','110.152.98.110','','1','newstime','0','9c279ea610ec1e0010c43858ac82c111','news','1','0',' and ((title LIKE ''%利用%''))','0');");
E_D("replace into `phome_enewssearch` values('30','JI','1443158406','title','1','121.35.23.197','','1','newstime','0','428fcee1c4003dfd659cad5005406ead','news','1','0',' and ((title LIKE ''%JI%''))','0');");
E_D("replace into `phome_enewssearch` values('31','一无二','1443354301','title','1','111.85.57.172','','1','newstime','0','4f89d4fe31be0e30769ca8452e78365e','news','1','0',' and ((title LIKE ''%一无二%''))','0');");
E_D("replace into `phome_enewssearch` values('32','没有标题图片','1443413171','title','1','111.85.59.40','','1','newstime','0','e7ff09dc1b800637a526e65615ef485a','news','1','0',' and ((title LIKE ''%没有标题图片%''))','0');");
E_D("replace into `phome_enewssearch` values('33','图片','1454658580','title','1','27.156.92.177','','3','newstime','0','2f5b68af025d0a0faeecacbc6f2beab4','news','1','0',' and ((title LIKE ''%图片%''))','0');");
E_D("replace into `phome_enewssearch` values('34','近距离','1445825931','title','1','58.42.246.181','','1','newstime','0','8dc4102c08f8186794ce1540d9a20300','news','1','0',' and ((title LIKE ''%近距离%''))','0');");
E_D("replace into `phome_enewssearch` values('35','科学','1446731819','title','1','125.46.207.238','','1','newstime','0','6b0c0b6d61e68ebb6184cd56752c2ed6','news','1','0',' and ((title LIKE ''%科学%''))','0');");
E_D("replace into `phome_enewssearch` values('36','标题','1449708305','title','1','223.104.176.191','','1','newstime','0','e0fa300db1a478b9be05cb977f3ac121','news','1','0',' and ((title LIKE ''%标题%''))','0');");
E_D("replace into `phome_enewssearch` values('37','如果不设置或','1454658644','title','1','125.84.131.204','','1','newstime','0','d4549157481d30dd709f06a12f75905f','news','1','0',' and ((title LIKE ''%如果不设置或%''))','0');");
E_D("replace into `phome_enewssearch` values('38','如果不设置','1454671545','title','1','125.84.131.204','','1','newstime','0','530a66074bc54ca90fbb950f92927bf7','news','1','0',' and ((title LIKE ''%如果不设置%''))','0');");
E_D("replace into `phome_enewssearch` values('39','一','1458096324','title','17','171.117.22.129','','1','newstime','0','0c5895a4cd982f1befea3b04ad1c18f4','news','1','0',' and ((title LIKE ''%一%''))','0');");

@include("../../inc/footer.php");
?>