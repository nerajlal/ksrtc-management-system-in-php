<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$ap=$obj->apr();
	$smartyObj->assign("views",$ap);
	
	//$smartyObj->display('adminheader.tpl');
	$smartyObj->display('adminatoview.tpl');
	//$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}
?>