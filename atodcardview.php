<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$dv=$_COOKIE['lkey'];
	$dca=$obj->atodcardview($dv);
	$smartyObj->assign('views',$dca);
	$smartyObj->display('atosubheader.tpl');
	$smartyObj->display('atodcardview.tpl');
	$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>