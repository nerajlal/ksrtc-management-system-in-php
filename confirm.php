<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$key1=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 	$obj->confirm11($_FILES['confirmation'],$key,$key1);
}
$smartyObj->display('institutionsubheader.tpl');
$smartyObj->display('confirm.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>