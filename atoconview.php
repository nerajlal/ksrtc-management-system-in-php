<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$cn=$_COOKIE['lkey'];
	$con=$obj->atoconview($cn);
	$smartyObj->assign('views',$con);
	$smartyObj->display('atosubheader.tpl');
	$smartyObj->display('atoconview.tpl');
	$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>