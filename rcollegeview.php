<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key1=$_COOKIE['lkey'];
$s=$obj->rclgview($key1);
$smartyObj->assign("views",$s);
$smartyObj->display('institutionsubheader.tpl');
$smartyObj->display('rcollegeview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>