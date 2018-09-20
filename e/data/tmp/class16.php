<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="" />
<meta name="description" content=" " />
<title>页面一--<?=$public_r[sitename]?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/skin/ecms064/images/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="/skin/ecms064/css/style.css" />
<link rel="stylesheet" type="text/css"  href="/skin/ecms064/css/font-awesome.min.css"/>
<script type="text/javascript" src="/skin/ecms064/js/jquery.min.js"></script>
<script type="text/javascript" src="/skin/ecms064/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="/skin/ecms064/js/yycm.js"></script>
</head>
<body>
<div class="top"> <span href="#" class="totop"></span>
  <div class="topmenu">
    <ul id="menu-top" class="wrap">
      <li><a href="http://www.moyublog.com/">自定栏目</a></li>
      <li><a href="http://www.moyublog.com/">自定栏目</a></li>
      <li><a href="http://www.moyublog.com/">自定栏目</a></li>
    </ul>
  </div>
  <div class="wrap page-header">
    <h1><a href="/" title="我的网站">我的网站</a></h1>
    <span>我的网站，可以后台模板设置此处</span>
    <div class="contact">
      <?
if ($public_r['add_feed']!=''){
?>
      <li><a href="<?=$public_r['add_feed']?>" target="_blank" title="订阅本站"><i class="fa fa-rss fa-2x"></i></a></li>
      <?
}
?>
      <?
if ($public_r['add_qq']!=''){
?>
      <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$public_r['add_qq']?>&site=qq&menu=yes" target="_blank" title="QQ联系"><i class="fa fa-qq fa-2x"></i></a></li>
      <?
}
?>
      <?
if ($public_r['add_xlwb']!=''){
?>
      <li><a href="<?=$public_r['add_xlwb']?>" target="_blank" title="新浪微博"><i class="fa fa-weibo fa-2x"></i></a></li>
      <?
}
?>
      <?
if ($public_r['add_txwb']!=''){
?>
      <li><a href="<?=$public_r['add_txwb']?>" target="_blank" title="腾讯微博"><i class="fa fa-pinterest-square fa-2x"></i></a></li>
      <?
}
?>
    </div>
  </div>
  <div class="nav">
    <div class="wrap zwrap">
      <div class="navbar-header">
        <li class="navbar-toggle"> <i class="fa fa-list fa-2x"></i> </li>
        <li style="float:right;display:inline-block">
          <div class="toggle-search"><i class="fa fa-search fa-2x"></i></div>
        </li>
        <li style="float:right;">
          <div class="search-expand">
            <div class="search-expand-inner">
              <form onSubmit="return checkSearchForm()" method="post" name="searchform" id="searchform" class="searchform themeform" action="/e/search/index.php" >
                <input type="text" class="search" name="keyboard" onblur="if(this.value=='')this.value='按回车键搜索...';" onfocus="if(this.value=='按回车键搜索...')this.value='';" value="按回车键搜索..." placeholder="按回车键搜索">
                <input type="hidden" value="title" name="show">
                <input type="hidden" value="1" name="tempid">
                <input type="hidden" value="news" name="tbname">
                <input name="mid" value="1" type="hidden">
                <input name="dopost" value="search" type="hidden">
              </form>
            </div>
          </div>
        </li>
      </div>
      <div class="navbar-collapse">
        <ul>
          <li class="menu-item <?=$GLOBALS[navclassid]?"":"current_page_item"?>"><a href="/">首页</a></li>
          <?php
$sql=$empire->query("select classid,classname,islast from {$dbtbpre}enewsclass where bclassid=0 and showclass=0 order by myorder,myorder asc");
    while($s=$empire->fetch($sql)){
    	$tclass="";
        $fr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
        $topbclassid=$fr[1]?$fr[1]:$GLOBALS[navclassid];
        if($topbclassid==$s[classid]){
        	$tclass='current_page_item';
        }
        $classurl=sys_ReturnBqClassname($s,9);
        echo '<li class="menu-item '.$tclass.'"><a href="'.$classurl.'">'.$s[classname].'</a>';
        if(!$s[islast]){
        	$sql2=$empire->query("select classid,classname from {$dbtbpre}enewsclass where bclassid=$s[classid] and showclass=0 order by myorder,myorder asc");
            $str="";
            while($s2=$empire->fetch($sql2)){
            	$classurl2=sys_ReturnBqClassname($s2,9); 
            	$str.='<li class="menu-item"><a href="'.$classurl2.'">'.$s2[classname].'</a></li>';
            }
            echo '<ul class="sub-menu">'.$str.'</ul>';
        }
        echo '</li>';
    }
?>
        </ul>
      </div>
    </div>
  </div>
  <div class="notic">
    <div class="wrap subnotic"><i class="fa fa-bullhorn"></i><?=$public_r['add_gonggao']?></div>
  </div>
</div>
<div class="wrap" >
  <div class="main" style="width:100%;">
    <div class="article">
      <div class="map"><span> 当前位置<a href="/">首页</a>&nbsp;>&nbsp;<a href="/dlym/">独立页面</a>&nbsp;>&nbsp;<a href="/dlym/ym1/">页面一</a></span> </div>
      <div class="title">
        <h1> 页面一 </h1>
        
      </div>
      <div class="article_content">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classtext from {$dbtbpre}enewsclassadd where classid='$GLOBALS[navclassid]'",1,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?=$bqr[classtext]?>
<?php
}
}
?>
      </div>
  </div>
</div>
<div class="clear"></div>
<div class="footer">
  <div class="wrap">
    <div class="group">
      <h3>关于本站</h3>
      <p>本站是基于帝国CMS强力驱动的个人博客模板，主要用来记录个人的成长和学习的历程。本站同时也编录了互联网信息，编程教程，软件教程，技巧分享，福利分享等文章。</br>
        本站所有文章均为原创，转载请注明来源。</p>
    </div>
    <div class="group">
      <h3>联系我</h3>
      <p>
      <li>萌萌哒</li>
      <li>QQ:123456789</li>
      <li>Email:admin【＠】qq.com</li>
      <li>我是一个技术宅</li>
      </p>
    </div>
    <div class="group">
      <h3>特别鸣谢</h3>
      <p>
      <li><a href="http://www.phome.com/" >帝国CMS</a></li>
      <li><a href="http://www.moyublog.com/" >墨鱼部落格</a></li>
      </p>
    </div>
    <div class="clear"></div>
    <p class="ffooter">Copyright © 2010-2015 <a href="http://www.xxxxx.com/" >我的网站</a> 版权所有 | <?=$public_r['add_icp']?> | <?=$public_r['add_tongji']?></p>
  </div>
</div>
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?=$public_r['add_duoshuo']?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
</body>
</html>