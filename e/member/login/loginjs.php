<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('member');//关闭模块
$myuserid=(int)getcvar('mluserid');
$mhavelogin=0;
if($myuserid)
{
	include("../../class/db_sql.php");
	include("../../member/class/user.php");
	include("../../data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$mhavelogin=1;
	//数据
	$myusername=RepPostVar(getcvar('mlusername'));
	$myrnd=RepPostVar(getcvar('mlrnd'));
	$r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
	
		
	$m=$empire->fetch1("select userpic from {$dbtbpre}enewsmemberadd where userid='$myuserid' limit 1");
  	$userpic=$m['userpic']?$m['userpic']:$public_r[newsurl].'skin/ecms008/images/random/userpic/'.rand(1,66).'.gif';	
	if(empty($r[userid])||$r[checked]==0)
	{
		EmptyEcmsCookie();
		$mhavelogin=0;
	}
	//会员等级
	if(empty($r[groupid]))
	{$groupid=eReturnMemberDefGroupid();}
	else
	{$groupid=$r[groupid];}
	$groupname=$level_r[$groupid]['groupname'];
	//点数
	$userfen=$r[userfen];
	//余额
	$money=$r[money];
	//天数
	$userdate=0;
	if($r[userdate])
	{
		$userdate=$r[userdate]-time();
		if($userdate<=0)
		{$userdate=0;}
		else
		{$userdate=round($userdate/(24*3600));}
	}
	//是否有短消息
	$havemsg="";
	if($r[havemsg])
	{
		$havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>您有新消息</font></a>";
	}
	//$myusername=$r[username];
	db_close();
	$empire=null;
}
if($mhavelogin==1)
{
?>
document.write("       <div class=\"front_login_box\">            <div class=\"is_login\">              <div class=\"user_info\">                <p class=\"avatar\"><a href=\"/e/member/cp/\"><img alt=\'\' src=\'<?=$userpic?>\' class=\'avatar avatar-96 photo\' height=\'96\' width=\'96\' /></a></p>                <p>娆㈣繋锛�<?=$myusername?></p>                <p style=\"color:#999\"> [<?=$groupname?>]</p>                <p><a class=\"iframe\" href=\"/e/member/my/\" title=\"缂栬緫涓汉璧勬枡\" target=\"_blank\">缂栬緫涓汉璧勬枡</a></p>              </div>              <div class=\"link_tools\"> <a href=\"/e/member/cp/\" target=\"_blank\"><i class=\"icon-dashboard\"></i> 鎺у埗闈㈡澘</a> <a href=\"/e/DoInfo/choseclass.php\" target=\"_blank\"  title=\"鍙戝竷鏂版枃绔燶"><i class=\"icon-plus-sign-alt\"></i> 鍙戣〃鏂囩珷</a> <a href=\"/e/DoInfo/ListInfo.php?mid=1\" target=\"_blank\"  title=\"鎴戞姇绋跨殑鏂囩珷\"><i class=\"icon-comments\"></i> 鎴戠殑鏂囩珷</a> <a href=\"/e/member/msg/\" target=\"_blank\" title=\"绔欏唴娑堟伅\"><i class=\"icon-book\"></i> 绔欏唴娑堟伅</a> <a href=\"/e/payapi/\" target=\"_blank\"><i class=\"icon-home\"></i> 璐㈠姟绠＄悊</a>                <div class=\"cls\"></div>              </div>              <p class=\"logout\"><a href=\'/e/member/doaction.php?enews=exit&ecmsfrom=9\'>娉� 閿�</a></p>              <div class=\"cls\"></div>            </div>          </div>");
<?
}
else
{
?>
document.write("<div class=\"front_login_box\">            <div class=\"from_box\">              <form name=login method=post action=\"/e/member/doaction.php\" id=\"loginform\">                <p class=\"p1\"><span><i class=\"icon-user icon-2x\"></i></span>                  <input onfocus=\"this.value = \'\';\" name=\"username\" id=\"user_login\" type=\"text\" class=\"user_name\" value=\"鎮ㄧ殑鐢ㄦ埛鍚峔" />                </p>                <p class=\"p1\" style=\"margin-bottom:30px;\"><span><i class=\"icon-lock icon-2x\"></i></span>                  <input onfocus=\"this.value = \'\';this.type = \'password\';\" name=\"password\" id=\"user_pass\" type=\"text\" class=\"password\" value=\"鎮ㄧ殑鐧婚檰瀵嗙爜\" />                </p>                <p class=\"p2\">                  <input name=\"Submit\" type=\"submit\" class=\"submit_button\" value=\"鐧� 褰昞" />                </p>                <p class=\"p3\"><span style=\"float:right\"><i class=\"icon-signin\"></i> <a href=\"/e/member/register/\">娉ㄥ唽</a></span><span class=\"keep_me\">                  <input type=hidden name=enews value=login>    <input type=hidden name=ecmsfrom value=9>                  <a href=\"/e/DoInfo/choseclass.php\" target=\"_blank\"  title=\"鍙戝竷鏂版枃绔燶"><i class=\"icon-plus-sign-alt\"></i> 鎴戣鎶曠ǹ鍙戝竷鏂囩珷</a></span></p>              </form>            </div>            <script type=\"text/javascript\">		jQuery(function($){			$(\'.keep_me\').click(function(){				var nowSet = $(this).find(\'i\').attr(\'class\');				if(nowSet == \"icon-check-empty\"){					$(this).find(\'i\').attr(\'class\',\'icon-check\');					$(this).find(\'#rememberme\').attr(\'checked\',\'\')				}else{					$(this).find(\'i\').attr(\'class\',\'icon-check-empty\');					$(this).find(\'#rememberme\').removeAttr(\'checked\')				}			})		});        </script>           </div> ");
<?
}
?>