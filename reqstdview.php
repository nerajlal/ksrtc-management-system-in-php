<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$key=$_COOKIE['lkey'];

$req=$obj->reqstdview($key);
$smartyObj->assign("view",$req);

$smartyObj->display('studsubheader.tpl');
$smartyObj->display('reqstdview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>