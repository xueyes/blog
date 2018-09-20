<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsnewstemp`;");
E_C("CREATE TABLE `phome_enewsnewstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `temptext` mediumtext NOT NULL,
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsnewstemp` values('1','ecms064文章内容模板','0','<!DOCTYPE html PUBLIC \\\\\"-//W3C//DTD XHTML 1.0 Transitional//EN\\\\\" \\\\\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\\\\">\r\n<html xmlns=\\\\\"http://www.w3.org/1999/xhtml\\\\\">\r\n<head>\r\n<meta http-equiv=\\\\\"Content-Type\\\\\" content=\\\\\"text/html; charset=UTF-8\\\\\"/>\r\n<meta name=\\\\\"keywords\\\\\" content=\\\\\"[!--pagekey--]\\\\\" />\r\n<meta name=\\\\\"description\\\\\" content=\\\\\"[!--pagedes--] \\\\\" />\r\n<title>[!--pagetitle--]--<?=\$public_r[sitename]?></title>\r\n<meta name=\\\\\"viewport\\\\\" content=\\\\\"width=device-width, initial-scale=1\\\\\">\r\n<link rel=\\\\\"shortcut icon\\\\\" href=\\\\\"[!--news.url--]skin/ecms064/images/favicon.ico\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\" media=\\\\\"all\\\\\" href=\\\\\"[!--news.url--]skin/ecms064/css/style.css\\\\\" />\r\n<link rel=\\\\\"stylesheet\\\\\" type=\\\\\"text/css\\\\\"  href=\\\\\"[!--news.url--]skin/ecms064/css/font-awesome.min.css\\\\\"/>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/ecms064/js/jquery.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/ecms064/js/responsiveslides.min.js\\\\\"></script>\r\n<script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]skin/ecms064/js/yycm.js\\\\\"></script>\r\n</head>\r\n<body>\r\n[!--temp.header--]\r\n  <div class=\\\\\"nav\\\\\">\r\n    <div class=\\\\\"wrap zwrap\\\\\">\r\n      <div class=\\\\\"navbar-header\\\\\">\r\n        <li class=\\\\\"navbar-toggle\\\\\"> <i class=\\\\\"fa fa-list fa-2x\\\\\"></i> </li>\r\n        <li style=\\\\\"float:right;display:inline-block\\\\\">\r\n          <div class=\\\\\"toggle-search\\\\\"><i class=\\\\\"fa fa-search fa-2x\\\\\"></i></div>\r\n        </li>\r\n        <li style=\\\\\"float:right;\\\\\">\r\n          <div class=\\\\\"search-expand\\\\\">\r\n            <div class=\\\\\"search-expand-inner\\\\\">\r\n              <form onSubmit=\\\\\"return checkSearchForm()\\\\\" method=\\\\\"post\\\\\" name=\\\\\"searchform\\\\\" id=\\\\\"searchform\\\\\" class=\\\\\"searchform themeform\\\\\" action=\\\\\"/e/search/index.php\\\\\" >\r\n                <input type=\\\\\"text\\\\\" class=\\\\\"search\\\\\" name=\\\\\"keyboard\\\\\" onblur=\\\\\"if(this.value==\\\\''\\\\'')this.value=\\\\''按回车键搜索...\\\\'';\\\\\" onfocus=\\\\\"if(this.value==\\\\''按回车键搜索...\\\\'')this.value=\\\\''\\\\'';\\\\\" value=\\\\\"按回车键搜索...\\\\\" placeholder=\\\\\"按回车键搜索\\\\\">\r\n                <input type=\\\\\"hidden\\\\\" value=\\\\\"title\\\\\" name=\\\\\"show\\\\\">\r\n                <input type=\\\\\"hidden\\\\\" value=\\\\\"1\\\\\" name=\\\\\"tempid\\\\\">\r\n                <input type=\\\\\"hidden\\\\\" value=\\\\\"news\\\\\" name=\\\\\"tbname\\\\\">\r\n                <input name=\\\\\"mid\\\\\" value=\\\\\"1\\\\\" type=\\\\\"hidden\\\\\">\r\n                <input name=\\\\\"dopost\\\\\" value=\\\\\"search\\\\\" type=\\\\\"hidden\\\\\">\r\n              </form>\r\n            </div>\r\n          </div>\r\n        </li>\r\n      </div>\r\n      <div class=\\\\\"navbar-collapse\\\\\">\r\n        <ul>\r\n          <li class=\\\\\"menu-item <?=\$GLOBALS[navclassid]?\\\\\"\\\\\":\\\\\"current_page_item\\\\\"?>\\\\\"><a href=\\\\\"/\\\\\">首页</a></li>\r\n          <?php\r\n\$sql=\$empire->query(\\\\\"select classid,classname,islast from {\$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc\\\\\");\r\n    while(\$s=\$empire->fetch(\$sql)){\r\n    	\$tclass=\\\\\"\\\\\";\r\n        \$fr=explode(\\\\''|\\\\'',\$class_r[\$GLOBALS[navclassid]][featherclass]);\r\n        \$topbclassid=\$fr[1]?\$fr[1]:\$GLOBALS[navclassid];\r\n        if(\$topbclassid==\$s[classid]){\r\n        	\$tclass=\\\\''current_page_item\\\\'';\r\n        }\r\n        \$classurl=sys_ReturnBqClassname(\$s,9);\r\n        echo \\\\''<li class=\\\\\"menu-item \\\\''.\$tclass.\\\\''\\\\\"><a href=\\\\\"\\\\''.\$classurl.\\\\''\\\\\">\\\\''.\$s[classname].\\\\''</a>\\\\'';\r\n        if(!\$s[islast]){\r\n        	\$sql2=\$empire->query(\\\\\"select classid,classname from {\$dbtbpre}enewsclass where bclassid=\$s[classid] and showclass=0 order by myorder,myorder asc\\\\\");\r\n            \$str=\\\\\"\\\\\";\r\n            while(\$s2=\$empire->fetch(\$sql2)){\r\n            	\$classurl2=sys_ReturnBqClassname(\$s2,9); \r\n            	\$str.=\\\\''<li class=\\\\\"menu-item\\\\\"><a href=\\\\\"\\\\''.\$classurl2.\\\\''\\\\\">\\\\''.\$s2[classname].\\\\''</a></li>\\\\'';\r\n            }\r\n            echo \\\\''<ul class=\\\\\"sub-menu\\\\\">\\\\''.\$str.\\\\''</ul>\\\\'';\r\n        }\r\n        echo \\\\''</li>\\\\'';\r\n    }\r\n?>\r\n        </ul>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\\\\\"notic\\\\\">\r\n    <div class=\\\\\"wrap subnotic\\\\\"><i class=\\\\\"fa fa-bullhorn\\\\\"></i><?=\$public_r[\\\\''add_gonggao\\\\'']?></div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"wrap\\\\\" >\r\n  <div class=\\\\\"main\\\\\">\r\n    <div class=\\\\\"article\\\\\">\r\n      <div class=\\\\\"map\\\\\"><span> 当前位置[!--newsnav--]>\r\n        正文 </span> </div>\r\n      <div class=\\\\\"title\\\\\">\r\n        <h1> [!--title--] </h1>\r\n        <div class=\\\\\"subtitle\\\\\"> <span><i class=\\\\\"fa fa-clock-o\\\\\"></i> [!--newstime--] </span><span><i class=\\\\\"fa fa-comment-o\\\\\"></i> <a href=\\\\\"[!--titleurl--]#comments\\\\\" class=\\\\\"ds-thread-count\\\\\" data-thread-key=\\\\\"[!--id--]\\\\\">暂无评论</a> </span><span><i class=\\\\\"fa fa-eye\\\\\"></i> <script src=[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&addclick=1></script> </span><span><i class=\\\\\"fa fa-folder-o\\\\\"></i> <a href=\\\\\"[!--class.url--]\\\\\" rel=\\\\\"category tag\\\\\">[!--class.name--]</a> </span><span> <i class=\\\\\"fa fa-tags\\\\\"></i>[showtags]\\\\''selfinfo\\\\'',10,0,\\\\''\\\\'',0,\\\\''\\\\'',\\\\''\\\\'',0,\\\\''\\\\'',\\\\''tagname\\\\''[/showtags] </span> </div>\r\n      </div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n      <script src=[!--news.url--]d/js/acmsd/thea6.js></script>\r\n      </div>\r\n      <div class=\\\\\"article_content\\\\\">\r\n        [!--newstext--]\r\n      </div>\r\n<div class=\\\\''pagination\\\\''>[!--page.url--]</div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n      <script src=[!--news.url--]d/js/acmsd/thea8.js></script>\r\n      </div>\r\n      <div class=\\\\\"postcopyright\\\\\">\r\n        <p><strong>版权保护: </strong> 本文由 <?=\$public_r[sitename]?> 原创，转载请保留链接: <a href=\\\\\"[!--titleurl--]\\\\\" title=[!--title--]> [!--titleurl--]</a></p>\r\n      </div>\r\n      <div class=\\\\\"bdsharebuttonbox\\\\\"><a href=\\\\\"#\\\\\" class=\\\\\"bds_more\\\\\" data-cmd=\\\\\"more\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_qzone\\\\\" data-cmd=\\\\\"qzone\\\\\" title=\\\\\"分享到QQ空间\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_tsina\\\\\" data-cmd=\\\\\"tsina\\\\\" title=\\\\\"分享到新浪微博\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_tqq\\\\\" data-cmd=\\\\\"tqq\\\\\" title=\\\\\"分享到腾讯微博\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_renren\\\\\" data-cmd=\\\\\"renren\\\\\" title=\\\\\"分享到人人网\\\\\"></a><a href=\\\\\"#\\\\\" class=\\\\\"bds_weixin\\\\\" data-cmd=\\\\\"weixin\\\\\" title=\\\\\"分享到微信\\\\\"></a></div>\r\n      <script>window._bd_share_config={\\\\\"common\\\\\":{\\\\\"bdSnsKey\\\\\":{},\\\\\"bdText\\\\\":\\\\\"\\\\\",\\\\\"bdMini\\\\\":\\\\\"2\\\\\",\\\\\"bdMiniList\\\\\":[\\\\\"mshare\\\\\",\\\\\"qzone\\\\\",\\\\\"tsina\\\\\",\\\\\"bdysc\\\\\",\\\\\"weixin\\\\\",\\\\\"renren\\\\\",\\\\\"tqq\\\\\",\\\\\"tieba\\\\\",\\\\\"douban\\\\\",\\\\\"bdhome\\\\\",\\\\\"sqq\\\\\",\\\\\"mail\\\\\",\\\\\"copy\\\\\",\\\\\"print\\\\\"],\\\\\"bdPic\\\\\":\\\\\"\\\\\",\\\\\"bdStyle\\\\\":\\\\\"1\\\\\",\\\\\"bdSize\\\\\":\\\\\"24\\\\\"},\\\\\"share\\\\\":{}};with(document)0[(getElementsByTagName(\\\\''head\\\\'')[0]||body).appendChild(createElement(\\\\''script\\\\'')).src=\\\\''http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=\\\\''+~(-new Date()/36e5)];</script> \r\n    </div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"con_pretext\\\\\">\r\n      <ul>\r\n        <li class=\\\\\"first\\\\\">上一篇： [!--info.pre--] </li>\r\n        <li class=\\\\\"last\\\\\">下一篇： [!--info.next--] </li>\r\n      </ul>\r\n    </div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"submain\\\\\">\r\n      <div class=\\\\\"map\\\\\">\r\n        <h3>猜你喜欢</h3>\r\n      </div>\r\n      <ul class=\\\\\"related_img\\\\\">\r\n        [otherlink]14,\\\\''\\\\'',10,100,0,0,0[/otherlink]\r\n      </ul>\r\n    </div>\r\n    <div class=\\\\\"clear\\\\\"></div>\r\n    <div class=\\\\\"submain\\\\\">\r\n      <div class=\\\\\"comments\\\\\" id=\\\\\"comments\\\\\">\r\n<div class=\\\\\"ds-thread\\\\\" data-category=\\\\\"[!--classid--]\\\\\" data-thread-key=\\\\\"[!--id--]\\\\\" data-title=\\\\\"[!--title--]\\\\\"></div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\\\\\"sider\\\\\">\r\n    <div class=\\\\\"right\\\\\">\r\n    [!--temp.bkzr--]\r\n	<div class=\\\\\"subblock\\\\\">\r\n        <h3>最新文章</h3>\r\n        <ul>\r\n          [e:loop={\\\\''news\\\\'',5,18,0,\\\\''\\\\'',\\\\''newstime DESC\\\\''}]\r\n<?\r\nif(\$bqr[titlepic]!=\\\\''\\\\''){\r\n\$titlepic=\\\\''<a href=\\\\\"\\\\''.\$bqsr[\\\\''titleurl\\\\''].\\\\''\\\\\" target=\\\\\"_ablank\\\\\"  title=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\"> <img width=\\\\\"80\\\\\" height=\\\\\"60\\\\\" src=\\\\\"\\\\''.sys_ResizeImg(\$bqr[titlepic],80,60,1).\\\\''\\\\\" class=\\\\\"icon wp-post-image\\\\\" alt=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\" title=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\" /></a>\\\\'';\r\n}else{\r\n\$titlepic=\\\\''\\\\'';\r\n}\r\n?>\r\n          <li>\r\n            <div class=\\\\\"sideshow\\\\\"> <?=\$titlepic?> <a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" title=\\\\\"<?=\$bqr[\\\\''title\\\\'']?>\\\\\"> <?=\$bqr[\\\\''title\\\\'']?> </a> <span class=\\\\\"datetime\\\\\"> <?=date(\\\\''Y/m/d\\\\'',\$bqr[newstime])?> </span> </div>\r\n          </li>\r\n         [/e:loop]\r\n        </ul>\r\n      </div>\r\n    <div class=\\\\\"subblock\\\\\">\r\n      <script src=[!--news.url--]d/js/acmsd/thea2.js></script>\r\n      </div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n        <h3>随机文章</h3>\r\n        <ul>\r\n          [e:loop={\\\\''selfinfo\\\\'',5,0,0,\\\\''\\\\'',\\\\''rand()\\\\''}]\r\n<?\r\nif(\$bqr[titlepic]!=\\\\''\\\\''){\r\n\$titlepic=\\\\''<a href=\\\\\"\\\\''.\$bqsr[\\\\''titleurl\\\\''].\\\\''\\\\\" target=\\\\\"_ablank\\\\\"  title=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\"> <img width=\\\\\"80\\\\\" height=\\\\\"60\\\\\" src=\\\\\"\\\\''.sys_ResizeImg(\$bqr[titlepic],80,60,1).\\\\''\\\\\" class=\\\\\"icon wp-post-image\\\\\" alt=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\" title=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\" /></a>\\\\'';\r\n}else{\r\n\$titlepic=\\\\''\\\\'';\r\n}\r\n?>\r\n          <li>\r\n            <div class=\\\\\"sideshow\\\\\"> <?=\$titlepic?> <a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" title=\\\\\"<?=\$bqr[\\\\''title\\\\'']?>\\\\\"> <?=\$bqr[\\\\''title\\\\'']?> </a> <span class=\\\\\"datetime\\\\\"> <?=date(\\\\''Y/m/d\\\\'',\$bqr[newstime])?> </span> </div>\r\n          </li>\r\n         [/e:loop]\r\n        </ul>\r\n      </div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n      <script src=[!--news.url--]d/js/acmsd/thea3.js></script>\r\n      </div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n        <h3>热门文章</h3>\r\n        <ul>\r\n          [e:loop={\\\\''selfinfo\\\\'',5,1,0,\\\\''\\\\'',\\\\''onclick DESC\\\\''}]\r\n<?\r\nif(\$bqr[titlepic]!=\\\\''\\\\''){\r\n\$titlepic=\\\\''<a href=\\\\\"\\\\''.\$bqsr[\\\\''titleurl\\\\''].\\\\''\\\\\" target=\\\\\"_ablank\\\\\"  title=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\"> <img width=\\\\\"80\\\\\" height=\\\\\"60\\\\\" src=\\\\\"\\\\''.sys_ResizeImg(\$bqr[titlepic],80,60,1).\\\\''\\\\\" class=\\\\\"icon wp-post-image\\\\\" alt=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\" title=\\\\\"\\\\''.\$bqr[\\\\''title\\\\''].\\\\''\\\\\" /></a>\\\\'';\r\n}\r\n?>\r\n          <li>\r\n            <div class=\\\\\"sideshow\\\\\"> <?=\$titlepic?> <a href=\\\\\"<?=\$bqsr[\\\\''titleurl\\\\'']?>\\\\\" title=\\\\\"<?=\$bqr[\\\\''title\\\\'']?>\\\\\"> <?=\$bqr[\\\\''title\\\\'']?> </a> <span class=\\\\\"datetime\\\\\"> <?=date(\\\\''Y/m/d\\\\'',\$bqr[newstime])?> </span> </div>\r\n          </li>\r\n         [/e:loop]\r\n        </ul>\r\n      </div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n      <script src=[!--news.url--]d/js/acmsd/thea4.js></script>\r\n      </div>\r\n      <div class=\\\\\"subblock\\\\\">\r\n        <h3>标签</h3>\r\n        <ul class=\\\\\"tag_cloud\\\\\">\r\n          [e:loop={\\\\\"select * from [!db.pre!]enewstags order by num DESC limit 40\\\\\",0,24,0}]\r\n    <?\r\necho \\\\''<a href=\\\\\"/e/tags/?tagname=\\\\''.urlencode(\$bqr[\\\\''tagname\\\\'']).\\\\''\\\\\"  target=\\\\\"_blank\\\\\" title=\\\\\"\\\\''.\$bqr[\\\\''num\\\\''].\\\\''个话题\\\\\" class=\\\\\"tag-link-\\\\''.\$bqr[\\\\''num\\\\''].\\\\''\\\\\" >\\\\''.\$bqr[\\\\''tagname\\\\''].\\\\''</a>\\\\'';\r\n?>\r\n    [/e:loop]\r\n        </ul>\r\n      </div>\r\n      <ul class=\\\\\"widgets\\\\\">\r\n      </ul>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"clear\\\\\"></div>\r\n[!--temp.footer--]\r\n</body>\r\n</html>','m-d','1','0');");

@include("../../inc/footer.php");
?>