<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmember`;");
E_C("CREATE TABLE `phome_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmember` values('1','hanxing3437','d17bb573ee5744457f72531d4895218e','PAui1X1QiEiouJZ3EIUy','48444431@qq.com','1410367216','1','0','0','0.00','0','0','1','3Q7gGF','xfRk9TQBBdXV');");
E_D("replace into `phome_enewsmember` values('2','hanxing3438','a18685c28f2dfaf73e3ad6687188bd49','E9ptpDGJvbfX26smzDrE','2234439707@qq.com','1410367679','1','0','0','0.00','0','0','1','GR6tnf','Fmc5PEqsM7Nb');");
E_D("replace into `phome_enewsmember` values('3','反反','611ae9973c802820db8a4172626d7762','YEnGxXMZazTpib9UNpaT','nongcunchuangye@qq.com','1411169994','1','0','0','0.00','0','0','1','JQkvMQ','9yZS23ybXFhD');");
E_D("replace into `phome_enewsmember` values('4','高洋','5e7e4b0104096f363389b70b76288af5','WZeufpXtFBaZtAV7tPWQ','415@163.com','1411459637','1','0','0','0.00','0','0','1','BJttWW','QQzKVXaCp5gp');");
E_D("replace into `phome_enewsmember` values('5','复复','f2f256cf1ddbf1d74a95c4a8fa5f7e62','Nq4Qaj5hv2aUNLyaqtHW','413590@163.com','1411476241','1','0','0','0.00','0','0','1','tYReLU','jj44AYUG7fwA');");
E_D("replace into `phome_enewsmember` values('6','许得勇','525560f704dc133129f8a1dd316d7090','zCSMEH5wV9bpkQNG5rKv','1083155573@qq.com','1412259310','1','0','0','0.00','0','0','1','TDcLpB','fa9WQALxsbQP');");
E_D("replace into `phome_enewsmember` values('7','飞扬网络','0b8dd2775f26adf466fa9916a3cf12a6','7Jb6d8cvBPY7f49yYFUf','4sadf@qq.com','1415202512','1','0','0','0.00','0','0','1','wBZs2K','SrvKu2eVH5m7');");
E_D("replace into `phome_enewsmember` values('8','qwezxc','9d2ab3ae38e0221c86161c69810ea1af','D5yJv5hBpiNrPjUSucbb','erwyt@ffg.dg','1418124106','1','0','0','0.00','0','0','1','fCRNCq','AJtyvK5aBGbS');");
E_D("replace into `phome_enewsmember` values('9','haitian118','9ca171b832ea4b6650ea701b0e104469','FMVkx4rQQQQQQvvvvvvv','pop35@126.com','1420471243','1','0','0','0.00','0','0','1','888888','v88888888888');");
E_D("replace into `phome_enewsmember` values('10','hanxing3439','1bffde43740daf9664e9fc67f3161faf','pDy4eAuNBFwMMxMMB389','sdfs@qq.com','1420471829','1','0','0','0.00','0','0','1','zCeBZ3','bA7EjwmchHuc');");
E_D("replace into `phome_enewsmember` values('11','liqiang0612','ca034b9bd3781598daac94d5f4240bac','vX3wG3YT2CH6w5kx4X8S','liqiang0612@sina.cn','1420606823','1','0','0','0.00','0','0','1','b4cmp4','P87XYrRKYWkR');");
E_D("replace into `phome_enewsmember` values('12','z123456','d0d6a42bd804dae54765c3dc012b9253','ErjhvBYtDYpEkrDQbALq','niba@zpeng.cn','1420821519','1','0','0','0.00','0','0','1','s4eYpi','Nf9hC8Axm2gs');");
E_D("replace into `phome_enewsmember` values('13','qq289988157','96b08e077339342b2518b65f3583c454','u725AAyc21fsnjVdlGti','289988157@qq.com','1420966392','1','0','0','0.00','0','0','1','WjXiig','FcekCiNLt4c2');");
E_D("replace into `phome_enewsmember` values('14','sdasdasdas','0e41f520a68dafcedcf78d23923ec682','cJAZ8HxkxaYmpkL7xehc','sdasdasdas@qq.com','1420974416','1','0','0','0.00','0','0','1','qSrXZK','AS85Ue7223x4');");
E_D("replace into `phome_enewsmember` values('15','linghao','62ea1946f92fb761d8049ac1c17334c1','uskwr9vJcw2vd9dGYmnK','1447363075@qq.com','1421044759','1','0','0','0.00','0','0','1','JitBS8','k82s2Zbr6mep');");
E_D("replace into `phome_enewsmember` values('16','gaohua','9e2407837a557fe8f8116667084471c4','tWYn3333333333333333','pinsshi@vip.qq.com','1421069964','1','0','0','0.00','0','0','1','333333','333333333333');");
E_D("replace into `phome_enewsmember` values('17','anlicy','7442638b495a0a3e089ed0faddcd11a5','qWbsGDsc7N7WgMuh4Qrj','2522119@qq.com','1421157139','1','0','0','0.00','0','0','1','9m84ED','fDHGJFvH3FhL');");
E_D("replace into `phome_enewsmember` values('18','97251230','a2e2da0b2fe026a131fdc71cf3709d60','WyfQLJCEh4qwpnkkgz2n','97251230@qq.com','1421305791','1','0','0','0.00','0','0','1','L7A2V7','A8qyBdk8L9bt');");
E_D("replace into `phome_enewsmember` values('19','yyt','ae1e1cec06d027f5ba88c8456e0ff125','C9d6tNHThrrSv3hXidYn','ttt@sina.com','1421477434','1','0','0','0.00','0','0','1','WD4C2C','ewAmMGXREGLV');");
E_D("replace into `phome_enewsmember` values('20','oioz','b3084d2f250a79a3e8784ba18b27685f','JXddunFme9YRFivL2UMg','16935007@qq.com','1421512023','1','0','0','0.00','0','0','1','jtFbUE','6bXDDUVcH8rs');");
E_D("replace into `phome_enewsmember` values('21','test','1ece6899fcc89e84a60dc45bdeb9e72b','6XcdBbwGKdZJD8vAU8Xi','test@126.com','1421667659','1','0','0','0.00','0','0','1','CWJtsQ','Bq8cLTYQtvbH');");
E_D("replace into `phome_enewsmember` values('22','333','02da35456f772343951fd02f3a7eece6','hzixvLAN3iyYyrLy8kRw','22@sina.com','1421724953','1','0','0','0.00','0','0','1','vuLXbu','BUuLA7ryZtqQ');");
E_D("replace into `phome_enewsmember` values('23','888','e328e8560044c4b4a68d9e0ab3166ecc','TVq67GKbuUeTmMfauzHB','888@sina.com','1421743738','1','0','0','0.00','0','0','1','xdRbyh','23pj9gbsQVLv');");
E_D("replace into `phome_enewsmember` values('24','fdfdfd','310dc002bd848dc96d52efd19f24ab90','VZH89Av5R6GVgiLQDUpJ','112233@qq.com','1421748753','1','0','0','0.00','0','0','1','FD35wD','NS3Cjpp6LZsv');");
E_D("replace into `phome_enewsmember` values('25','test9','6f6084d3a9ad76d6f3cf2036be087331','qQ6MY92DtsEA8xh2sfWV','test@test.com','1422362132','1','0','0','0.00','0','0','1','HYaDnV','3pD5VNMkYByV');");
E_D("replace into `phome_enewsmember` values('26','zxy52159','459558e84fea0ff8b908f1b075caafe0','c8r5uOjnxd2ZgK6PNgMQ','zxy52159@qq.com','1422585705','1','0','0','0.00','0','0','1','GQtVpS','3iGiHWB49wv4');");
E_D("replace into `phome_enewsmember` values('27','huan29','9d21604d959ff7947d79d65b4c67c6bb','cwsYJbfPsysQoeqcGgAb','1394471234@qq.com','1422670749','1','0','0','0.00','0','0','1','y52eNU','NFMVFHgNeW4V');");
E_D("replace into `phome_enewsmember` values('28','1234123','de8937537e7c1e7b552c58c5287dbfb1','iFuWdRwhGllbawxtIqYJ','1234123@11.com','1422718378','1','0','0','0.00','0','0','1','2OAXmM','Wrs5QqXiNsdE');");
E_D("replace into `phome_enewsmember` values('29','wuxudong','7e8fb9714c5535b17f9dbcd9db782c94','toIgUU4DYAewxM1m6qzl','wxdkw@sina.com','1422942021','1','0','0','0.00','0','0','1','02x2vD','POjeM7s1yKv1');");
E_D("replace into `phome_enewsmember` values('30','hnlishishi','1a9e1fd099c852d8319a241e61556cf4','ftN7Z9znraBvuA67GF06','hnlishishi@qq.com','1423454184','1','0','0','0.00','0','0','1','zFmiNS','Ffl9mzg75J85');");
E_D("replace into `phome_enewsmember` values('31','a100000','9995452fd1a1faa1fdaaacc7c47159e1','nMCCN1st9SgC8ymtKkgu','321213@qq.com','1423491629','1','0','0','0.00','0','0','1','39jvHl','XwYkko8ji7kP');");
E_D("replace into `phome_enewsmember` values('32','qq3537159','5b9b09483aa4c05bc146aa054938d777','PusP1TeiMnvuB9VzEleu','2121321@qq.com','1424080754','1','0','0','0.00','0','0','1','rvBODt','ywkUAXemxOlw');");
E_D("replace into `phome_enewsmember` values('33','yutiano0','e0c33d1666ecbd45a9d02807826287d1','MfDU6Hxq9UhQrO3ARAbh','656416@qq.com','1424684862','1','0','0','0.00','0','0','1','aaq73X','yC4FZSSedCCy');");

@include("../../inc/footer.php");
?>