<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&&$_COOKIE['logined']==1)
{

$st=$obj->std();
$smartyObj->assign("views",$st);
// $smartyObj->display('adminheader.tpl');
$smartyObj->display('adminstudview.tpl');
// $smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}
?>