<?php
if(!defined('InEmpireCMS'))
{exit();}
?><tr bgcolor='#FFFFFF' height=25><td>栏目说明</td><td>
<?=ECMS_ShowEditorVar("shuoming",$ecmsfirstpost==1?"请到后台--管理栏目--你要修改的栏目-修改-自定义字段设置：来修改这里的文字！":$addr[shuoming],"Default","","300","100%")?>
</td></tr>