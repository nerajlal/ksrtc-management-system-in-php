<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
$k=$obj->jadview($key);
$smartyObj->assign("views",$k);
$smartyObj->display('adminheader.tpl');
$smartyObj->display('jadminview.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>