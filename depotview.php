<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$key=$_COOKIE['lkey'];
$de=$obj->depotview();
$smartyObj->assign("views",$de);
$smartyObj->display('adminheader.tpl');
$smartyObj->display('depotview.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>