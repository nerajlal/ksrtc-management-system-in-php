<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{

$key1=$_COOKIE['lkey'];
$p=$obj->dcardpubview($key1);
$smartyObj->assign("views",$p);
$smartyObj->display('pubsubheader.tpl');
$smartyObj->display('dcardpubview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>