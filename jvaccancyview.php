<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
$jv=$obj->jobview();
$smartyObj->assign("views",$jv);
$smartyObj->display('adminheader.tpl');
$smartyObj->display('jvaccancyview.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>