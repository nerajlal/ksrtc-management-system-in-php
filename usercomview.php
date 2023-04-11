<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$ucv=$obj->usercomview($key);
$smartyObj->assign('views',$ucv);
$uur=$obj->useradminreply($key);
$smartyObj->assign("views",$uur);
$smartyObj->display('pubsubheader.tpl');	
$smartyObj->display('usercomview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>