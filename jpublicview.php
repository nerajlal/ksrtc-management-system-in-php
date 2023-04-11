<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
$jp=$obj->jobpubview($key);
$smartyObj->assign("views",$jp);
$smartyObj->display('pubsubheader.tpl');
$smartyObj->display('jpublicview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>