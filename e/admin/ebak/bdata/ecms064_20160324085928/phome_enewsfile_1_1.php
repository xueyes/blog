<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_1`;");
E_C("CREATE TABLE `phome_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=375 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_1` values('319','0','1411170114128604.jpg','115003','2014-09-20','[Member]反反','1411170114','1','201408131407917566414.jpg','1','0','1411170045','1411170045','2','0');");
E_D("replace into `phome_enewsfile_1` values('320','0','1411170116552442.jpg','109602','2014-09-20','[Member]反反','1411170116','1','201408131407917529666.jpg','1','0','1411170045','1411170045','2','0');");
E_D("replace into `phome_enewsfile_1` values('321','0','1411476427127580.jpg','109602','2014-09-23','[Member]复复','1411476427','1','201408131407917529666.jpg','1','0','1411476399','1411476399','2','0');");
E_D("replace into `phome_enewsfile_1` values('322','0','1411476428101920.jpg','115003','2014-09-23','[Member]复复','1411476428','1','201408131407917566414.jpg','1','0','1411476399','1411476399','2','0');");
E_D("replace into `phome_enewsfile_1` values('323','1000010000000143','1bc78f5fd2e9a0975adf11abc66698f3.jpg','19971','2014-11-06','admin','1415248813','13','[URL]1bc78f5fd2e9a0975adf11abc66698f3.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('324','1000010000000143','efb0b4be6abe85e1bf7f10e866dd4f88.jpg','111504','2014-11-06','admin','1415248813','13','[URL]efb0b4be6abe85e1bf7f10e866dd4f88.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('325','1000010000000143','a36a9d2e67ba0c4df220a01ac1b54d9f.jpg','76267','2014-11-06','admin','1415248813','13','[URL]a36a9d2e67ba0c4df220a01ac1b54d9f.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('326','1000010000000143','4a8ff33c2749285593e2b7a7c79460fe.jpg','16608','2014-11-06','admin','1415248814','13','[URL]4a8ff33c2749285593e2b7a7c79460fe.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('327','1000010000000143','7b9cd49cb47ec7cba004bbfacfe6c374.jpg','18966','2014-11-06','admin','1415248814','13','[URL]7b9cd49cb47ec7cba004bbfacfe6c374.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('328','1000010000000143','12d2e9a0db02aa5ecdaff987cf3a7524.jpg','21878','2014-11-06','admin','1415248814','13','[URL]12d2e9a0db02aa5ecdaff987cf3a7524.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('329','1000010000000143','8f60a9c59dca67f1ecd9908f2d54f1ff.jpg','43369','2014-11-06','admin','1415248814','13','[URL]8f60a9c59dca67f1ecd9908f2d54f1ff.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('330','1000010000000143','e95be92792b2dbf1e19288136c95e53a.jpg','77744','2014-11-06','admin','1415248814','13','[URL]e95be92792b2dbf1e19288136c95e53a.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('331','1000010000000143','cdfeb279f3ef50537e73abc867bae535.jpg','52400','2014-11-06','admin','1415248814','13','[URL]cdfeb279f3ef50537e73abc867bae535.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('332','1000010000000143','1b0e8a185fb9e3018a12d225cc233e3b.jpg','40559','2014-11-06','admin','1415248815','13','[URL]1b0e8a185fb9e3018a12d225cc233e3b.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('333','1000010000000143','68505664956c789735fe1a11bea60661.jpg','36473','2014-11-06','admin','1415248815','13','[URL]68505664956c789735fe1a11bea60661.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('334','1000010000000143','e798a78706fbd9dcf9cd6256efc38e42.jpg','36416','2014-11-06','admin','1415248815','13','[URL]e798a78706fbd9dcf9cd6256efc38e42.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('335','1000010000000143','b506114c68c401bbd8bcd1691cf062df.jpg','43279','2014-11-06','admin','1415248815','13','[URL]b506114c68c401bbd8bcd1691cf062df.jpg','1','0','143','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('336','1000010000000144','741c30e002548f8960ec8831d81329a3.jpg','50090','2014-11-06','admin','1415249058','13','[URL]741c30e002548f8960ec8831d81329a3.jpg','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('337','1000010000000144','c3aa61428ee6b599ce866ac36b264bac.gif','474431','2014-11-06','admin','1415249059','13','[URL]c3aa61428ee6b599ce866ac36b264bac.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('338','1000010000000144','35ef526f23741c3e1db577ce346caf46.gif','502415','2014-11-06','admin','1415249059','13','[URL]35ef526f23741c3e1db577ce346caf46.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('339','1000010000000144','22c5cdcef8dd73867ab4499c4a43ddbc.gif','429789','2014-11-06','admin','1415249060','13','[URL]22c5cdcef8dd73867ab4499c4a43ddbc.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('340','1000010000000144','c3b608dc2ccf08cd209653dabab4c5b9.gif','496433','2014-11-06','admin','1415249060','13','[URL]c3b608dc2ccf08cd209653dabab4c5b9.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('341','1000010000000144','548a9ebc5668766d790d4568cf7b178f.gif','115784','2014-11-06','admin','1415249061','13','[URL]548a9ebc5668766d790d4568cf7b178f.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('342','1000010000000144','eb0304ed7ecda656bce8adf3ad1fff7a.gif','95013','2014-11-06','admin','1415249061','13','[URL]eb0304ed7ecda656bce8adf3ad1fff7a.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('343','1000010000000144','beafc86ec3f88d99691d66141e23851a.gif','652526','2014-11-06','admin','1415249061','13','[URL]beafc86ec3f88d99691d66141e23851a.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('344','1000010000000144','39cd1ca069a22f12e4e4fb0959dc1cb7.gif','506113','2014-11-06','admin','1415249062','13','[URL]39cd1ca069a22f12e4e4fb0959dc1cb7.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('345','1000010000000144','9e7cfabd905dfa88bb1a3ab7b5c64714.gif','1047108','2014-11-06','admin','1415249062','13','[URL]9e7cfabd905dfa88bb1a3ab7b5c64714.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('346','1000010000000144','6ad14f54c652fe92b7c39ca9d323f409.gif','382454','2014-11-06','admin','1415249063','13','[URL]6ad14f54c652fe92b7c39ca9d323f409.gif','1','0','144','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('347','1000010000000145','67e3e788be2e794e6716cfef9a8fe48d.jpg','24349','2014-11-06','admin','1415249110','13','[URL]67e3e788be2e794e6716cfef9a8fe48d.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('348','1000010000000145','1ee4d15e606b70ac7f6a6a1f375f39c0.jpg','178389','2014-11-06','admin','1415249110','13','[URL]1ee4d15e606b70ac7f6a6a1f375f39c0.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('349','1000010000000145','054fcbbdfbee4b15f6d4b854e92f757a.jpg','43035','2014-11-06','admin','1415249110','13','[URL]054fcbbdfbee4b15f6d4b854e92f757a.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('350','1000010000000145','bcf3f12573e469e5f3945ed5c7d5e3f0.jpg','67219','2014-11-06','admin','1415249111','13','[URL]bcf3f12573e469e5f3945ed5c7d5e3f0.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('351','1000010000000145','67ee154f947b60c971584718480f666b.jpg','117788','2014-11-06','admin','1415249111','13','[URL]67ee154f947b60c971584718480f666b.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('352','1000010000000145','4c47f93cb03a20a7589ca55fce848ff1.jpg','121814','2014-11-06','admin','1415249111','13','[URL]4c47f93cb03a20a7589ca55fce848ff1.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('353','1000010000000145','7be46d2927cdb1b994e6090fca1deec3.jpg','28197','2014-11-06','admin','1415249112','13','[URL]7be46d2927cdb1b994e6090fca1deec3.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('354','1000010000000145','ac34af758252703342d6c8d21242baae.jpg','50858','2014-11-06','admin','1415249112','13','[URL]ac34af758252703342d6c8d21242baae.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('355','1000010000000145','88916962fb51696e1871d8e0da98f8a1.jpg','165823','2014-11-06','admin','1415249113','13','[URL]88916962fb51696e1871d8e0da98f8a1.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('356','1000010000000145','ebb594defbb2674fb70ed3f11289aa52.jpg','107151','2014-11-06','admin','1415249113','13','[URL]ebb594defbb2674fb70ed3f11289aa52.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('357','1000010000000145','308090f914134b594e94d00fe278381a.jpg','210345','2014-11-06','admin','1415249113','13','[URL]308090f914134b594e94d00fe278381a.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('358','1000010000000145','9b45377461f9efa09c549611c231b596.jpg','69820','2014-11-06','admin','1415249113','13','[URL]9b45377461f9efa09c549611c231b596.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('359','1000010000000145','4785956acd258c80236938077425976a.jpg','29238','2014-11-06','admin','1415249114','13','[URL]4785956acd258c80236938077425976a.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('360','1000010000000145','393ae17c55c6038777d138bfa6661d9d.jpg','94822','2014-11-06','admin','1415249114','13','[URL]393ae17c55c6038777d138bfa6661d9d.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('361','1000010000000145','5b3146d7ddaae53154ab7d1a24cd649c.jpg','119524','2014-11-06','admin','1415249114','13','[URL]5b3146d7ddaae53154ab7d1a24cd649c.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('362','1000010000000145','d89a7780a9d2ac3820520031c6af55dd.jpg','98386','2014-11-06','admin','1415249115','13','[URL]d89a7780a9d2ac3820520031c6af55dd.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('363','1000010000000145','376aaaf7bdf94599e33196de192ac7b4.jpg','106379','2014-11-06','admin','1415249115','13','[URL]376aaaf7bdf94599e33196de192ac7b4.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('364','1000010000000145','0c2c52ab8fd5ba2d9d870ded927663cf.jpg','68170','2014-11-06','admin','1415249117','13','[URL]0c2c52ab8fd5ba2d9d870ded927663cf.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('365','1000010000000145','6437c22997a55de6a08774404d0b2d53.jpg','12309','2014-11-06','admin','1415249118','13','[URL]6437c22997a55de6a08774404d0b2d53.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('366','1000010000000145','429b558bae48db79fa4e27da1d711ec4.jpg','206744','2014-11-06','admin','1415249119','13','[URL]429b558bae48db79fa4e27da1d711ec4.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('367','1000010000000145','a791dc1680ca1e03a2faa5e92570b2e5.jpg','147681','2014-11-06','admin','1415249119','13','[URL]a791dc1680ca1e03a2faa5e92570b2e5.jpg','1','0','145','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('368','1000010000000146','64181eea1e2a49285da42a11f48e4e0f.gif','20654','2014-11-06','admin','1415249149','13','[URL]64181eea1e2a49285da42a11f48e4e0f.gif','1','0','146','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('369','1000010000000147','2e5a0121d5e567f056650497333ce99b.gif','8971','2014-11-06','admin','1415249389','13','[URL]2e5a0121d5e567f056650497333ce99b.gif','1','0','147','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('370','1000010000000147','9413f3788d1e03bf405630f7e22c2ba8.gif','15831','2014-11-06','admin','1415249389','13','[URL]9413f3788d1e03bf405630f7e22c2ba8.gif','1','0','147','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('371','1000010000000147','9b855b4a90f87962df90448e3ad64993.jpg','34942','2014-11-06','admin','1415249389','13','[URL]9b855b4a90f87962df90448e3ad64993.jpg','1','0','147','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('372','1000010000000152','b28d89c66b8e212fb69885885db3053e.jpg','307342','2015-01-17','[Member]yyt','1421477614','13','[titlepic]测试','1','0','152','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('373','1000010000000155','9732a56469fe99a78d4d14839a6b9c3d.jpg','55376','2015-02-16','[Member]qq3537159','1424081265','1','[titlepic]测测','1','0','155','0','2','0');");
E_D("replace into `phome_enewsfile_1` values('374','0','60fbda7f809f2f91d577ccad4b029115.jpg','28345','2015-07-03','admin','1435911720','1','weixin-qrcode2.jpg','1','0','99','99','2','0');");

@include("../../inc/footer.php");
?>